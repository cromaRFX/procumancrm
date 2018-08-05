<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 ********************************************************************************/
/* BEGIN - SECURITY GROUPS */
if(file_exists("modules/ACLActions/actiondefs.override.php")){
	require_once("modules/ACLActions/actiondefs.override.php");
} else {
require_once('modules/ACLActions/actiondefs.php');
}
/* END - SECURITY GROUPS */
class ACLAction  extends SugarBean{
    var $module_dir = 'ACLActions';
    var $object_name = 'ACLAction';
    var $table_name = 'acl_actions';
    var $new_schema = true;
    var $disable_custom_fields = true;
    function ACLAction(){
        parent::SugarBean();
    }

    /**
    * static addActions($category, $type='module')
    * Adds all default actions for a category/type
    *
    * @param STRING $category - the category (e.g module name - Accounts, Contacts)
    * @param STRING $type - the type (e.g. 'module', 'field')
    */
    static function addActions($category, $type='module'){
        global $ACLActions;
        $db = DBManagerFactory::getInstance();
        if(isset($ACLActions[$type])){
            foreach($ACLActions[$type]['actions'] as $action_name =>$action_def){

                $action = new ACLAction();
                $query = "SELECT * FROM " . $action->table_name . " WHERE name='$action_name' AND category = '$category' AND acltype='$type' AND deleted=0 ";
                $result = $db->query($query);
                //only add if an action with that name and category don't exist
                $row=$db->fetchByAssoc($result);
                if ($row == null) {
                    $action->name = $action_name;
                    $action->category = $category;
                    $action->aclaccess = $action_def['default'];
                    $action->acltype = $type;
                    $action->modified_user_id = 1;
                    $action->created_by = 1;
                    $action->save();

                }
            }

        }else{
            sugar_die("FAILED TO ADD: $category - TYPE $type NOT DEFINED IN modules/ACLActions/actiondefs.php");
        }

    }

    /**
    * static removeActions($category, $type='module')
    * Removes all default actions for a category/type
    *
    * @param STRING $category - the category (e.g module name - Accounts, Contacts)
    * @param STRING $type - the type (e.g. 'module', 'field')
    */
    public static function removeActions($category, $type='module'){
        global $ACLActions;
        $db = DBManagerFactory::getInstance();
        if(isset($ACLActions[$type])){
            foreach($ACLActions[$type]['actions'] as $action_name =>$action_def){

                $action = new ACLAction();
                $query = "SELECT * FROM " . $action->table_name . " WHERE name='$action_name' AND category = '$category' AND acltype='$type' and deleted=0";
                $result = $db->query($query);
                //only add if an action with that name and category don't exist
                $row=$db->fetchByAssoc($result);
                if ($row != null) {
                    $action->mark_deleted($row['id']);
                }
            }
        }else{
            sugar_die("FAILED TO REMOVE: $category : $name - TYPE $type NOT DEFINED IN modules/ACLActions/actiondefs.php");
        }
    }

    /**
    * static AccessColor($access)
    *
    * returns the color associated with an access level
    * these colors exist in the definitions in modules/ACLActions/actiondefs.php
    * @param INT $access - the access level you want the color for
    * @return the color either name or hex representation or false if the level does not exist
    */
    protected static function AccessColor($access){
        global $ACLActionAccessLevels;
        if(isset($ACLActionAccessLevels[$access])){

            return $ACLActionAccessLevels[$access]['color'];
        }
        return false;

    }

    /**
    * static AccessName($access)
    *
    * returns the translated name  associated with an access level
    * these label definitions  exist in the definitions in modules/ACLActions/actiondefs.php
    * @param INT $access - the access level you want the color for
    * @return the translated access level name or false if the level does not exist
    */
    static function AccessName($access){
        global $ACLActionAccessLevels;
        if(isset($ACLActionAccessLevels[$access])){
            return translate($ACLActionAccessLevels[$access]['label'], 'ACLActions');
        }
        return false;

    }

    /**
     * static AccessLabel($access)
     *
     * returns the label  associated with an access level
     * these label definitions  exist in the definitions in modules/ACLActions/actiondefs.php
     * @param INT $access - the access level you want the color for
     * @return the access level label or false if the level does not exist
     */
    protected static function AccessLabel($access){
        global $ACLActionAccessLevels;
        if(isset($ACLActionAccessLevels[$access])){
            $label=preg_replace('/(LBL_ACCESS_)(.*)/', '$2', $ACLActionAccessLevels[$access]['label']);
            return strtolower($label);

        }
        return false;

    }

    /**
    * static getAccessOptions()
    * this is used for building select boxes
    * @return array containg access levels (ints) as keys and access names as values
    */
    protected static function getAccessOptions( $action, $type='module'){
        global $ACLActions;
        $options = array();

        if(empty($ACLActions[$type]['actions'][$action]['aclaccess']))return $options;
        foreach($ACLActions[$type]['actions'][$action]['aclaccess'] as $action){
            $options[$action] = ACLAction::AccessName($action);
        }
        return $options;

    }

    /**
    * function static getDefaultActions()
    * This function will return a list of acl actions with their default access levels
    *
    *
    */
    public static function getDefaultActions($type='module', $action=''){
        $query = "SELECT * FROM acl_actions WHERE deleted=0 ";
        if(!empty($type)){
            $query .= " AND acltype='$type'";
        }
        if(!empty($action)){
            $query .= "AND name='$action'";
        }
        $query .= " ORDER BY category";

        $db = DBManagerFactory::getInstance();
        $result = $db->query($query);
        $default_actions = array();
        while($row = $db->fetchByAssoc($result) ){
            $acl = new ACLAction();
            $acl->populateFromRow($row);
            $default_actions[] = $acl;
        }
        return $default_actions;
    }


    /**
    * static getUserActions($user_id,$refresh=false, $category='', $action='')
    * returns a list of user actions
    * @param GUID $user_id
    * @param BOOLEAN $refresh
    * @param STRING $category
    * @param STRING $action
    * @return ARRAY of ACLActionsArray
    */

    static function getUserActions($user_id,$refresh=false, $category='',$type='', $action=''){
        //check in the session if we already have it loaded
        if(!$refresh && !empty($_SESSION['ACL'][$user_id])){
            if(empty($category) && empty($action)){
                return $_SESSION['ACL'][$user_id];
            }else{
                if(!empty($category) && isset($_SESSION['ACL'][$user_id][$category])){
                    if(empty($action)){
                        if(empty($type)){
                            return $_SESSION['ACL'][$user_id][$category];
                        }
                        return $_SESSION['ACL'][$user_id][$category][$type];
                    }else if(!empty($type) && isset($_SESSION['ACL'][$user_id][$category][$type][$action])){
                        return $_SESSION['ACL'][$user_id][$category][$type][$action];
                    }
                }
            }
        }
        //if we don't have it loaded then lets check against the db
        $additional_where = '';
        $db = DBManagerFactory::getInstance();
        if(!empty($category)){
            $additional_where .= " AND acl_actions.category = '$category' ";
        }
        if(!empty($action)){
            $additional_where .= " AND acl_actions.name = '$action' ";
        }
        if(!empty($type)){
            $additional_where .= " AND acl_actions.acltype = '$type' ";
        }
		/* BEGIN - SECURITY GROUPS */ 
		/**
        $query = "SELECT acl_actions .*, acl_roles_actions.access_override
                    FROM acl_actions
                    LEFT JOIN acl_roles_users ON acl_roles_users.user_id = '$user_id' AND  acl_roles_users.deleted = 0
                    LEFT JOIN acl_roles_actions ON acl_roles_actions.role_id = acl_roles_users.role_id AND acl_roles_actions.action_id = acl_actions.id AND acl_roles_actions.deleted=0
                    WHERE acl_actions.deleted=0 $additional_where ORDER BY category,name";
		*/
		$query = "(SELECT acl_actions .*, acl_roles_actions.access_override, 1 as user_role
				FROM acl_actions
				INNER JOIN acl_roles_users ON acl_roles_users.user_id = '$user_id' AND  acl_roles_users.deleted = 0
				LEFT JOIN acl_roles_actions ON acl_roles_actions.role_id = acl_roles_users.role_id AND acl_roles_actions.action_id = acl_actions.id AND acl_roles_actions.deleted=0
				WHERE acl_actions.deleted=0 $additional_where )

				UNION

				(SELECT acl_actions .*, acl_roles_actions.access_override, 0 as user_role
				FROM acl_actions 
				INNER JOIN securitygroups_users ON securitygroups_users.user_id = '$user_id' AND  securitygroups_users.deleted = 0
				INNER JOIN securitygroups_acl_roles ON securitygroups_users.securitygroup_id = securitygroups_acl_roles.securitygroup_id and securitygroups_acl_roles.deleted = 0
				LEFT JOIN acl_roles_actions ON acl_roles_actions.role_id = securitygroups_acl_roles.role_id AND acl_roles_actions.action_id = acl_actions.id AND acl_roles_actions.deleted=0
				WHERE acl_actions.deleted=0 $additional_where )

				UNION 

				(SELECT acl_actions.*, 0 as access_override, -1 as user_role
				FROM acl_actions
				WHERE acl_actions.deleted = 0 )

				ORDER BY user_role desc, category,name,access_override desc"; //want non-null to show first
		 /* END - SECURITY GROUPS */
        $result = $db->query($query);
        $selected_actions = array();
		/* BEGIN - SECURITY GROUPS */ 
		global $sugar_config;
		$has_user_role = false; //used for user_role_precedence
		$has_role = false; //used to determine if default actions can be ignored. If a user has a defined role don't use the defaults
		/* END - SECURITY GROUPS */
        while($row = $db->fetchByAssoc($result, FALSE) ){
			/* BEGIN - SECURITY GROUPS */ 
			if($has_user_role == false && $row['user_role'] == 1) {
				$has_user_role = true;
			}
			if($has_role == false && ($row['user_role'] == 1 || $row['user_role'] ==0)) {
				$has_role = true;
			}
			//if user roles should take precedence over group roles and we have a user role 
			//break when we get to processing the group roles
			if($has_user_role == true && $row['user_role'] == 0 
					&& isset($sugar_config['securitysuite_user_role_precedence'])
					&& $sugar_config['securitysuite_user_role_precedence'] == true ) 
			{
				break; 
			}
			if($row['user_role'] == -1 && $has_role == true) {
				break; //no need for default actions when a role is assigned to the user or user's group already
			}
			/* END - SECURITY GROUPS */
            $acl = new ACLAction();
            $isOverride  = false;
            $acl->populateFromRow($row);
            if(!empty($row['access_override'])){
                $acl->aclaccess = $row['access_override'];
                $isOverride = true;
            }
            if(!isset($selected_actions[$acl->category])){
                $selected_actions[$acl->category] = array();

            }
            if(!isset($selected_actions[$acl->category][$acl->acltype][$acl->name])
				|| (
					/* BEGIN - SECURITY GROUPS - additive security*/
					(
						(isset($sugar_config['securitysuite_additive']) && $sugar_config['securitysuite_additive'] == true
						&& $selected_actions[$acl->category][$acl->acltype][$acl->name]['aclaccess'] < $acl->aclaccess) 
					||
						((!isset($sugar_config['securitysuite_additive']) || $sugar_config['securitysuite_additive'] == false)
						&& $selected_actions[$acl->category][$acl->acltype][$acl->name]['aclaccess'] > $acl->aclaccess) 
					)
					/* END - SECURITY GROUPS */
                    && $isOverride
                    )
                ||
                    (!empty($selected_actions[$acl->category][$acl->acltype][$acl->name]['isDefault'])
                    && $isOverride
                    )
                )
            {


                $selected_actions[$acl->category][$acl->acltype][$acl->name] = $acl->toArray();
                $selected_actions[$acl->category][$acl->acltype][$acl->name]['isDefault'] = !$isOverride;
            }

        }

        //only set the session variable if it was a full list;
        if(empty($category) && empty($action)){
            if(!isset($_SESSION['ACL'])){
                $_SESSION['ACL'] = array();
            }
            $_SESSION['ACL'][$user_id] = $selected_actions;
        }else{
            if(empty($action) && !empty($category)){
                if(!empty($type)){
                    $_SESSION['ACL'][$user_id][$category][$type] = $selected_actions[$category][$type];}
                $_SESSION['ACL'][$user_id][$category] = $selected_actions[$category];
            }else{
                if(!empty($action) && !empty($category) && !empty($type)){
                $_SESSION['ACL'][$user_id][$category][$type][$action] = $selected_actions[$category][$action];

            }
            }
        }
        
        // Sort by translated categories
        uksort($selected_actions, "ACLAction::langCompare");
        return $selected_actions;
    }
    
    private static function langCompare($a, $b) 
    {
        global $app_list_strings;
        // Fallback to array key if translation is empty
        $a = empty($app_list_strings['moduleList'][$a]) ? $a : $app_list_strings['moduleList'][$a];
        $b = empty($app_list_strings['moduleList'][$b]) ? $b : $app_list_strings['moduleList'][$b];
        if ($a == $b)
            return 0;
        return ($a < $b) ? -1 : 1;
    }
    
    /**
    * (static/ non-static)function hasAccess($is_owner= false , $access = 0)
    * checks if a user has access to this acl if the user is an owner it will check if owners have access
    *
    * This function may either be used statically or not. If used staticlly a user must pass in an access level not equal to zero
    * @param boolean $is_owner
    * @param int $access
    * @return true or false
    */
	/* BEGIN - SECURITY GROUPS */
	/**
    static function hasAccess($is_owner=false, $access = 0){
	*/
	static function hasAccess($is_owner=false, $in_group=false, $access = 0){	
		/**
        if($access != 0 && $access == ACL_ALLOW_ALL || ($is_owner && $access == ACL_ALLOW_OWNER))return true;
       //if this exists, then this function is not static, so check the aclaccess parameter
        if(isset($this) && isset($this->aclaccess)){
            if($this->aclaccess == ACL_ALLOW_ALL || ($is_owner && $this->aclaccess == ACL_ALLOW_OWNER))
            return true;
        }
		*/
		if($access != 0 && ($access == ACL_ALLOW_ALL 
			|| ($is_owner && ($access == ACL_ALLOW_OWNER || $access == ACL_ALLOW_GROUP) )  //if owner that's better than in group so count it...better way to clean this up?
			|| ($in_group && $access == ACL_ALLOW_GROUP) //need to pass if in group with access somehow
		)) {
			return true;
		}
        if(isset($this) && isset($this->aclaccess)){
			if($this->aclaccess == ACL_ALLOW_ALL 
				|| ($is_owner && $this->aclaccess == ($access == ACL_ALLOW_OWNER || $access == ACL_ALLOW_GROUP))
				|| ($in_group && $access == ACL_ALLOW_GROUP) //need to pass if in group with access somehow
			) {
            	return true;
        	}
		}
        return false;
    }
	/* END - SECURITY GROUPS */

	/* BEGIN - SECURITY GROUPS */
	/**
	 * STATIC function userNeedsSecurityGroup($user_id, $category, $action,$type='module')
	 * checks if a user should have ownership to do an action
	 *
	 * @param GUID $user_id
	 * @param STRING $category
	 * @param STRING $action
	 * @param STRING $type
	 * @return boolean
	 */
	function userNeedsSecurityGroup($user_id, $category, $action,$type='module'){
		//check if we don't have it set in the cache if not lets reload the cache
		
		if(empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
			ACLAction::getUserActions($user_id, false);
			
		}
		
		if(!empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
			return $_SESSION['ACL'][$user_id][$category][$type][$action]['aclaccess'] == ACL_ALLOW_GROUP;
		}
        return false;
    }
	/* END - SECURITY GROUPS */	








    /**
    * static function userHasAccess($user_id, $category, $action, $is_owner = false)
    *
    * @param GUID $user_id the user id who you want to check access for
    * @param STRING $category the category you would like to check access for
    * @param STRING $action the action of that category you would like to check access for
    * @param BOOLEAN OPTIONAL $is_owner if the object is owned by the user you are checking access for
    */
	/* BEGIN - SECURITY GROUPS - added $in_group */
	/**
    public static function userHasAccess($user_id, $category, $action,$type='module', $is_owner = false){
	*/
	public static function userHasAccess($user_id, $category, $action,$type='module', $is_owner = false, $in_group = false){
       global $current_user;
       if($current_user->isAdminForModule($category)&& !isset($_SESSION['ACL'][$user_id][$category][$type][$action]['aclaccess'])){
        return true;
        }
        //check if we don't have it set in the cache if not lets reload the cache
        if(ACLAction::getUserAccessLevel($user_id, $category, 'access', $type) < ACL_ALLOW_ENABLED) return false;
        if(empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
            ACLAction::getUserActions($user_id, false);

        }

        if(!empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
/**
            return ACLAction::hasAccess($is_owner, $_SESSION['ACL'][$user_id][$category][$type][$action]['aclaccess']);
*/
			return ACLAction::hasAccess($is_owner, $in_group, $_SESSION['ACL'][$user_id][$category][$type][$action]['aclaccess']);
        }
        return false;

    }
	/* END - SECURITY GROUPS */
    /**
    * function getUserAccessLevel($user_id, $category, $action,$type='module')
    * returns the access level for a given category and action
    *
    * @param GUID  $user_id
    * @param STRING $category
    * @param STRING $action
    * @param STRING $type
    * @return INT (ACCESS LEVEL)
    */
    public static function getUserAccessLevel($user_id, $category, $action,$type='module'){
        if(empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
            ACLAction::getUserActions($user_id, false);

        }
        if(!empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
            if (!empty($_SESSION['ACL'][$user_id][$category][$type]['admin']) && $_SESSION['ACL'][$user_id][$category][$type]['admin']['aclaccess'] >= ACL_ALLOW_ADMIN)
            {
                // If you have admin access for a module, all ACL's are allowed
                return $_SESSION['ACL'][$user_id][$category][$type]['admin']['aclaccess'];
            }            
            return  $_SESSION['ACL'][$user_id][$category][$type][$action]['aclaccess'];
        }
    }

    /**
    * STATIC function userNeedsOwnership($user_id, $category, $action,$type='module')
    * checks if a user should have ownership to do an action
    *
    * @param GUID $user_id
    * @param STRING $category
    * @param STRING $action
    * @param STRING $type
    * @return boolean
    */
    public static function userNeedsOwnership($user_id, $category, $action,$type='module'){
        //check if we don't have it set in the cache if not lets reload the cache

        if(empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
            ACLAction::getUserActions($user_id, false);

        }


        if(!empty($_SESSION['ACL'][$user_id][$category][$type][$action])){
            return $_SESSION['ACL'][$user_id][$category][$type][$action]['aclaccess'] == ACL_ALLOW_OWNER;
        }
        return false;

    }
    /**
    *
    * static pass by ref setupCategoriesMatrix(&$categories)
    * takes in an array of categories and modifes them adding display information
    *
    * @param unknown_type $categories
    */
    public static function setupCategoriesMatrix(&$categories){
        global $ACLActions, $current_user;
        $names = array();
        $disabled = array();
        foreach($categories as $cat_name=>$category){
            foreach($category as $type_name=>$type){
                foreach($type as $act_name=>$action){
                    $names[$act_name] = translate($ACLActions[$type_name]['actions'][$act_name]['label'], 'ACLActions');
                    $categories[$cat_name][$type_name][$act_name]['accessColor'] = ACLAction::AccessColor($action['aclaccess']);
                    if($type_name== 'module'){

                        if($act_name != 'aclaccess' && $categories[$cat_name]['module']['access']['aclaccess'] == ACL_ALLOW_DISABLED){
                            $categories[$cat_name][$type_name][$act_name]['accessColor'] = 'darkgray';
                            $disabled[] = $cat_name;
                        }

                    }
                    $categories[$cat_name][$type_name][$act_name]['accessName'] = ACLAction::AccessName($action['aclaccess']);
                    $categories[$cat_name][$type_name][$act_name]['accessLabel'] = ACLAction::AccessLabel($action['aclaccess']);

                    if($cat_name=='Users'&& $act_name=='admin'){
                        $categories[$cat_name][$type_name][$act_name]['accessOptions'][ACL_ALLOW_DEFAULT]=ACLAction::AccessName(ACL_ALLOW_DEFAULT);;
                        $categories[$cat_name][$type_name][$act_name]['accessOptions'][ACL_ALLOW_DEV]=ACLAction::AccessName(ACL_ALLOW_DEV);;
                    }
                    else{
                    $categories[$cat_name][$type_name][$act_name]['accessOptions'] =  ACLAction::getAccessOptions($act_name, $type_name);
                    }
                }
            }
        }

        if(!is_admin($current_user)){
            foreach($disabled as $cat_name){
                unset($categories[$cat_name]);
            }
        }
        return $names;
    }



    /**
    * function toArray()
    * returns this acl as an array
    *
    * @return array of fields with id, name, access and category
    */
    function toArray(){
        $array_fields = array('id', 'aclaccess');
        $arr = array();
        foreach($array_fields as $field){
            $arr[$field] = $this->$field;
        }
        return $arr;
    }

    /**
    * function fromArray($arr)
    * converts an array into an acl mapping name value pairs into files
    *
    * @param Array $arr
    */
    function fromArray($arr){
        foreach($arr as $name=>$value){
            $this->$name = $value;
        }
    }

    /**
    * function clearSessionCache()
    * clears the session variable storing the cache information for acls
    *
    */
    function clearSessionCache(){
        unset($_SESSION['ACL']);
    }













}
