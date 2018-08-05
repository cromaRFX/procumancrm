<?php

global $current_user;

if (!is_admin($current_user) && !is_admin_for_any_module($current_user)) {
   sugar_die("Unauthorized access to administration.");
}

require_once('modules/asol_Common/include/commonUtils.php');

global $app_list_strings, $mod_strings, $current_user;

$availableReportsForMenus = asol_CommonUtils::getAvailableItems("asol_Reports");
$availableFormsForMenus = asol_CommonUtils::getAvailableItems("asol_Forms");
$availableViewsForMenus = asol_CommonUtils::getAvailableItems("asol_Views");
$availableAclsForMenus = array("list", "edit", "view", "delete", "import", "export");

$commonMenusHtml = '
	<script type="text/javascript" src="modules/asol_Common/include/client/libraries/LAB.min.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>
	<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.blockUI.js?version='.str_replace('.', '', asol_CommonUtils::$common_version).'"></script>
	<link href="modules/asol_Common/include/client/css/styleCommon.css?version='.str_replace('.', '', asol_CommonUtils::$common_version).'" type="text/css" rel="stylesheet">
			
	<script type="text/javascript" src="modules/asol_Common/include/client/helpers/commonMenuManagement.js"></script>
	<script type="text/javascript">
		commonMenuManagement.setLanguage({
			"name" : "'.translate("LBL_COMMON_MENU_ID", "asol_Common").'",
			"label" : "'.translate("LBL_COMMON_MENU_LABEL", "asol_Common").'",
			"acls" : "'.translate("LBL_COMMON_MENU_ACLS", "asol_Common").'",
			"value" : "'.translate("LBL_COMMON_MENU_VALUE", "asol_Common").'",
			"roles" : "'.translate("LBL_COMMON_MENU_MANAGEMENT_ROLES", "asol_Common").'",
			"visibility" : "'.translate("LBL_COMMON_MENU_MANAGEMENT_VISIBILITY", "asol_Common").'",
			"properties" : "'.translate("LBL_COMMON_MENU_MANAGEMENT_PROPERTIES", "asol_Common").'",
			"alert" : {
				"delete" : "'.translate("LBL_COMMON_MENU_DELETE_ALERT", "asol_Common").'",
				"empty" : "'.translate("LBL_COMMON_MENU_EMPTY_ALERT", "asol_Common").'",
				"duplicated" : "'.translate("LBL_COMMON_MENU_DUPLICATED_NAME_ALERT", "asol_Common").'",
			},
			"menu" : "'.translate("LBL_COMMON_MENU", "asol_Common").'",
			"save" : "'.translate("LBL_FORMAT_SAVE", "asol_Common").'",
			"close": "'.translate("LBL_FORMAT_CANCEL", "asol_Common").'",
			"multilingual": "'.translate("LBL_COMMON_FIELD_MULTILANGUAGE", "asol_Common").'",
		});
		
		$(document).ready(function() {
			asolFancyMultiEnum.generate($(".menuAcls"));
		});
	</script>
			
	<script type="text/javascript" src="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.js"></script>
	<link type="text/css" href="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.css" rel="stylesheet">
	<script type="text/javascript">
		asolFancyMultiEnum.setLanguage({
			"checkAll" : "'.translate("LBL_MULTIENUM_CHECK_ALL_ITEMS", "asol_Common").'",
			"allSelected" : "'.translate("LBL_MULTIENUM_ALL_SELECTED_ITEMS", "asol_Common").'",
			"items" : "'.translate("LBL_MULTIENUM_SELECTED_ITEMS", "asol_Common").'",
		});
		
		$(document).ready(function() {
			asolFancyMultiEnum.generate($(".menuAcls"));
		});
	</script>
			
	'.asol_CommonUtils::getBlockDivs('LBL_COMMON_LOADING_DATA', 'LBL_COMMON_SAVING_DATA');
		
//***********************//
//***AlineaSol Premium***//
//***********************//
$premiumFunctionsScript = asol_CommonUtils::managePremiumFeature("basicPremiumJavascriptFeature", "commonFunctions.php", "getPremiumJavaScriptFunctions", null);
$commonMenusHtml .= ($premiumFunctionsScript !== false ? $premiumFunctionsScript : '');
//***********************//
//***AlineaSol Premium***//
//***********************//

//***********************//
//***AlineaSol Premium***//
//***********************//
$premiumFunctionsScript = asol_CommonUtils::managePremiumFeature("getExtendedJavaScriptFunctions", "commonFunctions.php", "getExtendedJavaScriptFunctions", array('includeFormatEditor' => true));
$commonMenusHtml .= ($premiumFunctionsScript !== false ? $premiumFunctionsScript : '');
//***********************//
//***AlineaSol Premium***//


//***********************//
//***AlineaSol Premium***//
//***********************//
$properties = asol_CommonUtils::managePremiumFeature("getPropertiesJsonFields", "commonFunctions.php", "getPropertiesJsonFields", null);
$properties = ($properties !== false ? $properties : '');
//***********************//
//***AlineaSol Premium***//
//***********************//

$commonMenusHtml .= '
	<div class="moduleTitle">
		<h2 onclick="$(\'.noCommonMenus\').toggle()">'.$mod_strings['LBL_COMMON_MENU_MANAGEMENT_ACTION'].'</h2>
		<input type="hidden" id="availableReportsForMenus" value="'.htmlentities(json_encode($availableReportsForMenus)).'">
		<input type="hidden" id="availableFormsForMenus" value="'.htmlentities(json_encode($availableFormsForMenus)).'">
		<input type="hidden" id="availableViewsForMenus" value="'.htmlentities(json_encode($availableViewsForMenus)).'">
		<input type="hidden" id="availableAclsForMenus" value="'.htmlentities(json_encode($availableAclsForMenus)).'">
		<input type="hidden" id="availableRoles" value="'.rawurlencode(json_encode(asol_CommonUtils::getCurrentRoles())).'">'
		.$properties.
	'</div>
	';

$acl_modules = ACLAction::getUserActions($current_user->id);

foreach($acl_modules as $module=>$ACLInfo) {

	$reportFields = array();

	$commonMenusCounter = 0;
	$commonCurrentModuleHtml = '';
	$moduleLabel = (isset($app_list_strings['moduleList'][$module])) ? $app_list_strings['moduleList'][$module] : $module;

	if (is_file("custom/Extension/modules/".$module."/Ext/Menus/AlineaSolCommonMenus.php")) {
	
		require_once("custom/Extension/modules/".$module."/Ext/Menus/AlineaSolCommonMenus.php");
		
		foreach ($common_menu_configuration["menus"] as $currentMenu) {
			
			$commonCurrentModuleHtml .= '
					<tr class="asolCommonMenuRow">
						<td width="7.5%" valign="top" scope="col">
							<label>'.$mod_strings['LBL_COMMON_MENU_ID'].':</label>
						</td>
						<td width="17.5%" valign="top">
							<input type="text" class="menuId" size="30" maxlength="255" value="'.$currentMenu['id'].'">
						</td>
						<td width="7.5%" valign="top" scope="col">
							<label>'.$mod_strings['LBL_COMMON_MENU_LABEL'].':</label>
						</td>
						<td width="17.5%" valign="top">
							<input type="text" class="menuLabel" size="30" maxlength="255" lang="'.rawurlencode(json_encode($currentMenu['language'])).'" value="'.$currentMenu['label'].'">
						</td>
						<td width="10%" valign="top" scope="col">
							<label>'.$mod_strings['LBL_COMMON_MENU_VALUE'].':</label>
						</td>
						<td width="30%" valign="top">';
									
			
			$commonCurrentModuleHtml .= '
							<select class="menuElementType" onChange="commonMenuManagement.manageModuleType(this);">
								'.(asol_CommonUtils::isReportsInstalled() && (count($availableReportsForMenus) > 0) ? '<option value="asol_Reports" '.($currentMenu['type'] == 'asol_Reports' ? 'selected' : '').'>'.$app_list_strings['moduleList']['asol_Reports'].'</option>' : '').'
								'.(asol_CommonUtils::isFormsViewsInstalled() && (count($availableFormsForMenus) > 0) ? '<option value="asol_Forms" '.($currentMenu['type'] == 'asol_Forms' ? 'selected' : '').'>'.$app_list_strings['moduleList']['asol_Forms'].'</option>' : '').'
								'.(asol_CommonUtils::isFormsViewsInstalled() && (count($availableViewsForMenus) > 0) ? '<option value="asol_Views" '.($currentMenu['type'] == 'asol_Views' ? 'selected' : '').'>'.$app_list_strings['moduleList']['asol_Views'].'</option>' : '').'
							</select> ';
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
			$elements = array(
						'asol_Forms' => $availableFormsForMenus,
						'asol_Reports' => $availableReportsForMenus,
						'asol_Views' => $availableViewsForMenus,
					);
			
			$elements = $elements[$currentMenu['type']];
			
			foreach ($elements as $element){
				if($element['id'] == $currentMenu['record']){
					$name = $element['name'];
					break;
				}
			}
			
			$extraParams = array(
					'beanId' => null,
					'currentDB' => '-1',
					'sourceModule' => $currentMenu['type'],
					'containerClass' => '.asolCommonRelateFormat',
					'currentLabel' =>  $name,
					'currentValue' => $currentMenu['record'],
					'currentRef' => $module.$commonMenusCounter,
					'currentAlias' => $mod_strings['LBL_COMMON_TEMPLATE_SERCH_NAME'],
					'extraFormat' => array(
							'module' => $currentMenu['type'],
							'columns' => array(
									0 => array(
											'field' => 'name',
											'alias' => $mod_strings['LBL_FORMAT_RELATE_NAME_COLUMN'],
											'isLabel' => true,
											'hasFilter' => true,
											'language' => array(),
									),
							),
					),
			);
			$returnedPremiumSelection =  asol_CommonUtils::managePremiumFeature("commonRelateFormat", "commonFunctions.php", "getCommonRelateEditableField", $extraParams);	
			if($returnedPremiumSelection !== false){
				$commonCurrentModuleHtml .= $returnedPremiumSelection;
			}else{
			//***********************//
			//***AlineaSol Premium***//
			//***********************//
				$commonCurrentModuleHtml .= '
								<select class="reportId" style="display: '.($currentMenu['type'] == 'asol_Reports' ? 'inline' : 'none').';">
									<option value=""></option>';
				
				foreach ($availableReportsForMenus as $reportsForField) {
					$commonCurrentModuleHtml .= '<option value="'.$reportsForField['id'].'" '.($reportsForField['id'] == $currentMenu['record'] ? 'selected' : '').'>'.$reportsForField['name'].'</option>';
				}
				
				$commonCurrentModuleHtml .= '
								</select>
						
								<select class="formId" style="display: '.($currentMenu['type'] == 'asol_Forms' ? 'inline' : 'none').';">
									<option value=""></option>
					';
	
				foreach ($availableFormsForMenus as $formsForField) {
					$commonCurrentModuleHtml .= '<option value="'.$formsForField['id'].'" '.($formsForField['id'] == $currentMenu['record'] ? 'selected' : '').'>'.$formsForField['name'].'</option>';
				}
	
				$commonCurrentModuleHtml .= '
								</select>
						
								<select class="viewId" style="display: '.($currentMenu['type'] == 'asol_Views' ? 'inline' : 'none').';">
									<option value=""></option>
					';
	
				foreach ($availableViewsForMenus as $viewsForField) {
					$commonCurrentModuleHtml .= '<option value="'.$viewsForField['id'].'" '.($viewsForField['id'] == $currentMenu['record'] ? 'selected' : '').'>'.$viewsForField['name'].'</option>';
				}
			}
			
			if ((isset($currentMenu['acls']) && count($currentMenu['acls']) > 0) || (isset($currentMenu['roles']) && count($currentMenu['roles']) > 0)) {
				$roles = array( 
					'acls'	=> (isset($currentMenu['acls']) && count($currentMenu['acls']) > 0 ? $currentMenu['acls'] : array()),
					'roles'	=> (isset($currentMenu['roles']) && count($currentMenu['roles']) > 0 ? $currentMenu['roles'] : array()),
				);
				$roles = rawurlencode(json_encode($roles));
			} else {
				$roles = null;
			}
			
			if (isset($currentMenu['properties']) && count($currentMenu['properties']) > 0) {
				$propertiesConfig = rawurlencode(json_encode($currentMenu['properties']));
			} else {
				$propertiesConfig = null;
			}
			
			$commonCurrentModuleHtml .= '
							</select>
					
						</td>
						<td width="10%" align="right">
							<img class="roles asol_icon clickable" onclick="commonMenuManagement.menuItemRoles(this)" config="'.(isset($roles)? $roles:'{}' ).'"  title="'.$mod_strings['LBL_COMMON_MENU_MANAGEMENT_ROLES'].'" src="modules/asol_Common/include/client/images/asol_common_view_role'.(isset($roles)? '_filled':'' ).'.png"/>'	
						.( $properties!='' ?
							'<img class="properties asol_icon clickable" onclick="menuItemProperties(this)" config="'.(isset($propertiesConfig)? $propertiesConfig:'[]').'" title="'.$mod_strings['LBL_COMMON_MENU_MANAGEMENT_VISIBILITY'].'" src="modules/asol_Common/include/client/images/asol_common_filter'.(isset($propertiesConfig)? '_filled':'').'.png"/></button>'
						:'').
						'<img class="asol_icon clickable" onclick="if(confirm(\''.$mod_strings['LBL_COMMON_MENU_DELETE_ALERT'].'\')) { $(this).closest(\'.asolCommonMenuRow\').remove(); }" src="modules/asol_Common/include/client/images/asol_common_removeline.png">
						</td>
					</tr>
				';

			$commonMenusCounter++;
	
		}
	
		$existingMenuFile = true;
		
	} else {
		
		$existingMenuFile = false;
		
	}


	$commonMenusHtml .= '
		<div id="'.$module.'CommonMenusDiv" class="'.($commonMenusCounter > 0 ? '' : 'noCommonMenus').' alineasol_common">
			<table id="'.$module.'CommonMenusTable" width="100%" cellspacing="1" cellpadding="0" border="0" class="yui3-skin-sam edit view dcQuickEdit edit508">

				<tbody>
					<tr>
						<th align="left" colspan="9">
							<h4>'.$moduleLabel.'
								<span style="display:inline-block;float:right;">';
							
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	$returnedPremiumMultiLanguageHtml = asol_CommonUtils::managePremiumFeature("multiLanguageForm", "commonFunctions.php", "getMultiLanguageMenuButton", array('module' => $module));
	$commonMenusHtml .= ($returnedPremiumMultiLanguageHtml !== false) ? $returnedPremiumMultiLanguageHtml : '';
	//***********************//
	//***AlineaSol Premium***//
	//***********************//
	
	$commonMenusHtml .= '
									<img onclick="commonMenuManagement.saveMenuItems(\''.$module.'\')" src="modules/asol_Common/include/client/images/asol_common_save.png" class="asol_icon clickable">
									<img onclick="commonMenuManagement.addMenuItem(\''.$module.'\')" src="modules/asol_Common/include/client/images/asol_common_addline.png" class="asol_icon clickable">
								</span>
								<span style="display:inline-block;margin:0 5px;float:right;vertical-align:top">'.$mod_strings['LBL_COMMON_MENU_OVERRIDE'].' <input class="asolFormsMenuOverride" type="checkbox" value=1 '.($existingMenuFile && $common_menu_configuration['override'] ? 'checked' : '').'></span>								
							</h4>
						</th>
					</tr>';

	$commonMenusHtml .= $commonCurrentModuleHtml;

	$commonMenusHtml .= '
				</tbody>
			</table>
		</div>
		';

}


echo $commonMenusHtml;


?>