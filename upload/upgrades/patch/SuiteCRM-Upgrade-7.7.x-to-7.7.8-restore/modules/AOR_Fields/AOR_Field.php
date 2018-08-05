<?php

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2016 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
class AOR_Field extends Basic
{
    public $new_schema = true;
    public $module_dir = 'AOR_Fields';
    public $object_name = 'AOR_Field';
    public $table_name = 'aor_fields';
    public $tracker_visibility = false;
    public $importable = true;
    public $disable_row_level_security = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $field_order;
    public $field;
    public $display;
    public $label;
    public $field_function;
    public $sort_by;
    public $sort_order;
    public $format;
    public $group_by;
    public $group_order;
    public $group_display;
    public $aor_report_id;

    function __construct()
    {
        parent::__construct();
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function AOR_Field(){
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }


    function save_lines($post_data, $parent, $key = '')
    {

        require_once('modules/AOW_WorkFlow/aow_utils.php');

        $line_count = count($post_data[$key . 'field']);
        for ($i = 0; $i < $line_count; ++$i) {

            if ($post_data[$key . 'deleted'][$i] == 1) {
                $this->mark_deleted($post_data[$key . 'id'][$i]);
            } else {
                $field = new AOR_Field();
                $field->group_display = false;

                if ($key == 'aor_fields_') {
                    foreach ($post_data['aor_fields_group_display'] as $gdKey => $gdValue) {
                        if ($gdValue == $i) {
                            $field->group_display = $gdKey + 1;
                            break;
                        }
                    }
                }

                foreach ($this->field_defs as $field_def) {
                    $field_name = $field_def['name'];
                    if (is_array($post_data[$key . $field_name])) {
                        if ($field_name != 'group_display' && isset($post_data[$key . $field_name][$i])) {
                            if (is_array($post_data[$key . $field_name][$i])) {
                                $post_data[$key . $field_name][$i] = base64_encode(serialize($post_data[$key . $field_name][$i]));
                            } else if ($field_name == 'value') {
                                $post_data[$key . $field_name][$i] = fixUpFormatting($_REQUEST['report_module'], $field->field, $post_data[$key . $field_name][$i]);
                            }
                            if ($field_name == 'module_path') {
                                $post_data[$key . $field_name][$i] = base64_encode(serialize(explode(":", $post_data[$key . $field_name][$i])));
                            }
                            $field->$field_name = $post_data[$key . $field_name][$i];
                        }
                    } else if (is_null($post_data[$key . $field_name])) {
                        // do nothing
                    } else {
                        throw new Exception('illegal type in post data at key ' . $key . $field_name . ' ' . gettype($post_data[$key . $field_name]));
                    }

                }
                if (trim($field->field) != '') {
                    $field->aor_report_id = $parent->id;
                    $field->save();
                }
            }
        }
    }

}