<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

namespace SuiteCRM\API\JsonApi\v1\Resource;


use Psr\Http\Message\ServerRequestInterface;
use SuiteCRM\API\JsonApi\v1\Enumerator\RelationshipType;
use SuiteCRM\API\JsonApi\v1\Links;
use SuiteCRM\API\JsonApi\v1\Repositories\RelationshipRepository;
use SuiteCRM\API\v8\Controller\ApiController;
use SuiteCRM\API\v8\Exception\ReservedKeywordNotAllowed;
use SuiteCRM\Enumerator\ExceptionCode;
use SuiteCRM\API\JsonApi\v1\Enumerator\ResourceEnum;
use SuiteCRM\API\v8\Exception\ApiException;
use SuiteCRM\API\v8\Exception\BadRequest;
use SuiteCRM\API\v8\Exception\Conflict;

/**
 * Class SuiteBeanResource
 * @package SuiteCRM\API\JsonApi\v1\Resource
 * @see http://jsonapi.org/format/1.0/#document-resource-objects
 */
class SuiteBeanResource extends Resource
{

    /**
     * fromSugarBean will try to convert a SugarBean in to a resource object, it will also try to include links
     * to the related items.
     * @param \SugarBean $sugarBean
     * @param string $source rfc6901
     * @return SuiteBeanResource
     * @throws \SuiteCRM\API\v8\Exception\BadRequest
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     * @throws ApiException
     * @see https://tools.ietf.org/html/rfc6901
     */
    public function fromSugarBean($sugarBean, $source = ResourceEnum::DEFAULT_SOURCE)
    {
        $config = $this->containers->get('ConfigurationManager');
        $dateTimeConverter  = $this->containers->get('DateTimeConverter');
        $this->id = $sugarBean->id;
        $this->type = $sugarBean->module_name;
        $this->source = $source;

        /** @var ServerRequestInterface $request; */
        $request = $this->containers->get(ServerRequestInterface::class);
        /** @var Links $links */
        $links = $this->containers->get('Links');

        // Set the attributes
        foreach ($sugarBean->field_defs as $fieldName => $definition) {
            // Filter security sensitive information from attributes
            if (
                isset($config['filter_module_fields'][$sugarBean->module_name]) &&
                in_array($fieldName, $config['filter_module_fields'][$sugarBean->module_name], true)
            ) {
                continue;
            }

            // Skip the reserved keywords which can be safely skipped
            if (in_array($fieldName, Resource::$JSON_API_SKIP_RESERVED_KEYWORDS, true)) {
                $exception = new ReservedKeywordNotAllowed();
                $logMessage =
                    ' Code: [' . $exception->getCode() . ']' .
                    ' Status: [' . $exception->getHttpStatus() . ']' .
                    ' Message: ' . $exception->getMessage() .
                    ' Detail: ' . 'Reserved keyword not allowed in attribute field name.' .
                    ' Source: [' . '/data/attributes/' . $fieldName . ']';
                $this->logger->warning($logMessage);
                continue;
            }

            // Throw when the field names match the reserved keywords
            if (in_array($fieldName, Resource::$JSON_API_SKIP_RESERVED_KEYWORDS, true)) {
                $exception = new ReservedKeywordNotAllowed($fieldName);
                $exception->setDetail('Reserved keyword not allowed in attribute field name.');
                $exception->setSource('/data/attributes/' . $fieldName);
                throw $exception;
            }

            if ($definition['type'] === 'datetime' && isset($sugarBean->$fieldName)) {
                // Convert to DB date
                $datetime = $dateTimeConverter->fromUser($sugarBean->$fieldName);
                if (empty($datetime)) {
                    $datetime = $dateTimeConverter->fromDb($sugarBean->$fieldName);
                }

                if (empty($datetime)) {
                    throw new ApiException(
                        '[Unable to convert datetime field using SugarBean] "' . $fieldName . '"',
                        ExceptionCode::API_DATE_CONVERTION_SUGARBEAN
                    );
                }

                $datetimeISO8601 = $datetime->format(\DateTime::ATOM);
                if ($datetime === false) {
                    throw new ApiException(
                        '[Unable to convert datetime field to ISO 8601] "' . $fieldName . '"',
                        ExceptionCode::API_DATE_CONVERTION_SUGARBEAN);
                }
                $this->attributes[$fieldName] = $datetimeISO8601;
            } elseif  ($definition['type'] === 'link') {
                /** @var ServerRequestInterface $request; */
                $request = $this->containers->get(ServerRequestInterface::class);
                /** @var Links $links */
                $links = $this->containers->get('Links');
                /** @var ApiController $apiController */
                $apiController = $this->containers->get('ApiController');
                $this->relationships[$definition['name']]['links'] =
                    $links
                        ->withRelated(
                            $config['site_url'] . '/api/v' . $apiController->getVersionMajor().'/modules/' .
                            $sugarBean->module_name . '/'.$this->id. '/relationships/'.$definition['name'])
                        ->toJsonApiResponse();
                // remove data element from relationship
                if(isset($this->relationships[$definition['name']]['data'])) {
                    unset($this->relationships[$definition['name']]['data']);
                }
                continue;
            } else {
                if(property_exists($sugarBean, $fieldName)) {
                    $this->attributes[$fieldName] = isset($sugarBean->$fieldName) ? $sugarBean->$fieldName : '';
                }
            }

            // Validate Required fields
            // Skip "id" as this method may be used to populate a new bean before the bean is saved
            if (
                empty($sugarBean->$fieldName) &&
                $fieldName !== 'id' &&
                isset($definition['required']) === true &&
                $definition['required'] === true &&
                !isset($this->attributes[$fieldName])
            ) {
                $exception = new BadRequest('[Missing Required Field] "' . $fieldName . '"');
                $exception->setSource($this->source . '/attributes/' . $fieldName);
                throw $exception;
            }
        }

        try {
            $this->validateResource();
        } catch (ApiException $e) {
            throw $e;
        }

        return clone $this;
    }

    /**
     * SugarBean will save try to save the SugarBean and update any relationships which have a data key
     * @return \SugarBean
     * @throws BadRequest
     * @throws ApiException
     * @throws Conflict
     */
    public function toSugarBean()
    {
        $config = $this->containers->get('ConfigurationManager');
        $sugarBean = \BeanFactory::getBean($this->type, $this->id);

        if (empty($sugarBean)) {
            $sugarBean = \BeanFactory::newBean($this->type);
        }

        foreach ($sugarBean->field_defs as $fieldName => $definition) {
            if ($definition === null) {
                throw new ApiException('Unable to read variable definitions');
            }

            // Filter security sensitive information from attributes
            if (
                isset($config['filter_module_fields'][$sugarBean->module_name]) &&
                in_array($fieldName, $config['filter_module_fields'][$sugarBean->module_name], true)
            ) {
                continue;
            }

            // Skip the reserved keywords which can be safely skipped
            if (in_array($fieldName, self::$JSON_API_SKIP_RESERVED_KEYWORDS)) {
                $exception = new ReservedKeywordNotAllowed();
                $logMessage =
                    ' Code: [' . $exception->getCode() . ']' .
                    ' Status: [' . $exception->getHttpStatus() . ']' .
                    ' Message: ' . $exception->getMessage() .
                    ' Detail: ' . 'Reserved keyword not allowed in attribute field name.' .
                    ' Source: [' . '/data/attributes/' . $fieldName . ']';
                $this->logger->warning($logMessage);
                continue;
            }

            if (isset($this->attributes[$fieldName])) {
                if ($definition['type'] === 'datetime' && !empty($this->attributes[$fieldName])) {
                    // Convert to DB date
                    $datetime = \DateTime::createFromFormat(\DateTime::ATOM, $this->attributes[$fieldName]);
                    if (empty($datetime)) {
                        $exception = new ApiException(
                            '[Unable to convert datetime field to SugarBean DbFormat] "' . $fieldName . '"',
                            ExceptionCode::API_DATE_CONVERTION_SUGARBEAN
                        );
                        $exception->setSource(ResourceEnum::DEFAULT_SOURCE . '/attributes/' . $fieldName);
                        $logMessage =
                            ' Code: [' . $exception->getCode() . ']' .
                            ' Status: [' . $exception->getHttpStatus() . ']' .
                            ' Message: ' . $exception->getMessage() .
                            ' Detail: ' . $exception->getDetail() .
                            ' Source: [' . $exception->getSource()['pointer'] . ']';
                        $this->logger->warning($logMessage);
                        continue;
                    }
                    $sugarBean->$fieldName = $datetime->format('Y-m-d H:i:s');
                } elseif ($definition['type'] === 'link' || $definition['type'] === 'relate') {
                    continue;
                } else {
                    $sugarBean->$fieldName = $this->attributes[$fieldName];
                }
            }

            // Validate Required fields
            // Skip "id" as this method may be used to populate a new bean before the bean is saved
            if (
                $fieldName !== 'id' && isset($definition['required']) &&
                $definition['required'] === true &&
                !isset($this->attributes[$fieldName]) &&
                empty($this->attributes[$fieldName])
            ) {
                $exception = new BadRequest('[Missing Required Field] "' . $fieldName . '"');
                $exception->setSource($this->source . '/attributes/' . $fieldName);
                throw $exception;
            }
        }

        try {
            $sugarBean->save();
        } catch (Exception $e) {
            throw new ApiException(
                '[SugarBeanResource] [Unable to save bean while converting toSugarBean()] ' . $e->getMessage(),
                $e->getCode(),
                $e
            );
        }

        //  Handle relationships
        if(empty($this->relationships) === false) {
            foreach ($this->relationships as $relationshipName => $relationship) {

                // Lets only focus on the relationships which need to be updated
                if(!isset($relationship['data'])) {
                    continue;
                }

                if ($sugarBean->load_relationship($relationshipName) === false) {
                    throw new Conflict('[Relationship does not exist] '. $relationshipName);
                }

                if (empty($relationship['data'])) {
                    // clear relationship
                    /** @var \Link2 $sugarBeanRelationship */
                    $sugarBeanRelationship = &$sugarBean->{$relationshipName};
                    $sugarBeanRelationship->getRelationshipObject()->removeAll($sugarBeanRelationship);
                } else {
                    // Detect relationship type
                    $relationshipRepository = new RelationshipRepository();
                    if (
                        $relationshipRepository->getRelationshipTypeFromDataArray($relationship) === RelationshipType::TO_MANY
                    ) {
                        /** @var \Link2 $toManySugarBeanLink */
                        $toManySugarBeanLink = $sugarBean->{$relationshipName};
                        if ($toManySugarBeanLink->getType() !== 'many') {
                            throw new Conflict(
                                '[SugarBeanResource] [unexpected relationship type] while converting toSugarBean()'.
                                'expected to many relationship from '.
                                $relationshipName
                            );
                        }
                        $relatedSugarBeanIds = $toManySugarBeanLink->get();

                        // if a single ResourceIdentifier has been set
                        if(!isset($relationship['data'][0])) {
                            // convert to array
                            $relationship['data'] = array($relationship['data']);
                        }

                        $toManyRelationships = $relationship['data'];

                        $relatedResourceIds = array();
                        $relatedResourceIdsToAdd = array();
                        $added = false;

                        /** @var array $toManyRelationships */
                        foreach ($toManyRelationships as $toManyRelationshipName => $toManyRelationship) {
                            $resourceIdentifier = $this->containers->get('ResourceIdentifier');
                            $relatedResourceIds[] = $toManyRelationship['id'];

                            $relatedResourceIdsToAdd[] = $toManyRelationship['id'];

                            $middleTableFields = array();
                            if (isset($toManyRelationship['meta']['middle_table']['data']['attributes'])) {
                                $middleTableFields = $toManyRelationship['meta']['middle_table']['data']['attributes'];
                            }

                            // add new relationships
                            $added = $toManySugarBeanLink->add($relatedResourceIdsToAdd, $middleTableFields);
                            if($added !== true) {
                                throw new Conflict(
                                    '[SugarBeanResource] [Unable to add relationships (to many)] while converting toSugarBean()'.
                                    json_encode($added)
                                );
                            }
                        }

                        // Remove missing relationships
                        $relatedResourceIdsToRemove = array_diff($relatedSugarBeanIds, $relatedResourceIds);
                        if(empty($relatedResourceIdsToRemove)  === false)  {
                            $removed = $toManySugarBeanLink->remove($relatedResourceIdsToRemove);
                            if($removed !== true) {
                                throw new Conflict(
                                    '[SugarBeanResource] [Unable to remove relationships (to many)] while converting toSugarBean()'.
                                    json_encode($removed)
                                );
                            }
                        }

                    } elseif ($relationshipRepository->getRelationshipTypeFromDataArray($relationship) === RelationshipType::TO_ONE) {
                        // detected to one
                        $toOneRelationship = $relationship['data'];
                        /** @var \Link2 $toOneSugarBeanLink */
                        $toOneSugarBeanLink = $sugarBean->{$relationshipName};
                        if ($toOneSugarBeanLink->getType() !== 'one') {
                            throw new Conflict(
                                '[SugarBeanResource] [unexpected relationship type] while converting toSugarBean()'.
                                'expected to one relationship from'.
                                $relationshipName
                            );
                        }
                        // add relationship
                        $relatedBean = \BeanFactory::getBean($toOneRelationship['type'], $toOneRelationship['id']);
                        if ($relatedBean->new_with_id === true) {
                            $exception = new NotFound('["id" does not exist] "' . $toOneRelationship['id']. '"');
                            $exception->setSource('/data/relationships/'.$relationshipName.'/id');
                            throw $exception;
                        }

                        $middleTableFields = array();
                        if (isset($toManyRelationship['meta']['middle_table']['data']['attributes'])) {
                            $middleTableFields = $toManyRelationship['meta']['middle_table']['data']['attributes'];
                        }

                        $added = $toOneSugarBeanLink->add($relatedBean, $middleTableFields);
                        if($added !== true) {
                            throw new Conflict(
                                '[SugarBeanResource] [Unable to add relationships (to one}] while converting toSugarBean()'.
                                json_encode($added)
                            );
                        }
                    }
                }
            }
        }

        return $sugarBean;
    }

    /**
     * @param array $data
     * @param string $source
     * @return SuiteBeanResource
     * @throws BadRequest
     * @throws Conflict
     */
    public function fromJsonApiRequest($data, $source = ResourceEnum::DEFAULT_SOURCE)
    {
        return $this->fromResource(parent::fromJsonApiRequest($data, $source));
    }

    /**
     * @param Resource $resource
     * @return SuiteBeanResource
     */
    private function fromResource(Resource $resource)
    {
        $sugarBeanResource = clone $this;
        $objValues = get_object_vars($resource); // return array of object values
        foreach ($objValues AS $key => $value) {
            $sugarBeanResource->$key = $value;
        }

        return $sugarBeanResource;
    }

    /**
     * @param Relationship $relationship
     * @return SuiteBeanResource
     */
    public function withRelationship(\SuiteCRM\API\JsonApi\v1\Resource\Relationship $relationship) {
        $relationshipName = $relationship->getRelationshipName();
        $this->relationships[$relationshipName]['data'] = $relationship->toJsonApiResponse();
        return clone $this;
    }
}
