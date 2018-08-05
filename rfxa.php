<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php


if( !isset($_REQUEST['rfx_id']) || !isset($_REQUEST['hash']))
die("Invalid Access.");

if( isset($_REQUEST['rfx_id']) && isset($_REQUEST['hash']))
{
	$hash = substr(md5($_REQUEST['rfx_id'].'Pro747docsrfq'),0,10);
	//Match Hash
	if($hash != $_REQUEST['hash'])
	die("Invalid URL Access.");
}
session_start();
//Prepare for RFX
chdir(dirname(__FILE__));
if(!defined('sugarEntry'))define('sugarEntry', true);

$_SESSION['authenticated_user_id'] = '1';

require_once('data/BeanFactory.php');
require_once('include/entryPoint.php');

if(empty($current_language)) {
	$current_language = $sugar_config['default_language'];
}

$app_list_strings = return_app_list_strings_language($current_language);
$app_strings = return_application_language($current_language);

//id = a729cca5-5095-d93b-4959-573eed347e5f
//hash = c2a6423e04af1ccabbd6121eabab2298

//RFx ID 
$rfx_id = stripslashes(($_REQUEST['rfx_id']));
$focus = BeanFactory::getBean('RFX_RFx');
$mod_strings = return_module_language($current_language, $focus->object_name);

//FOR DEV ONLY
//$focus->retrieve($rfx_id);
//Use below in Production
$focus->retrieve_by_string_fields(array('name' => $rfx_id ));

/* START RFX line items Waleed */
$multi_lines 	= explode('^|^',$focus->line_items_c);
$lineItems='<table style="width:85%;">
<tr>
<td style="width:10%;"><strong>Line</strong></td>
<td style="width:15%;"><strong>Product</strong></td>
<td style="width:15%;"><strong>Quantity</strong></td>
<td style="width:15%;"><strong>Currency</strong></td>
<td style="width:30%;"><strong>Description</strong></td>
</tr>';
foreach($multi_lines as $index=>$line_items)
{
	$line_item = explode('^,^',$line_items);
	$lineItems.='<tr> 
		<td style="width:10%;">'.$line_item['0'].'</td>
		<td style="width:15%;">'.$line_item['7'].'</td>
		<td style="width:15%;">'.$line_item['2'].'</td>
		<td style="width:15%;">'.$line_item['9'].'</td>
		<td style="width:30%;">'.$line_item['1'].'</td>
		</tr>';
}
$lineItems.='</table>';
/* END RFX line items Waleed */


//If RFx is Expired then do not show details
$expiry_date = strtotime($focus->rfx_valid_c);
$today_date = strtotime(date('Y-m-d'));

if($today_date > $expiry_date)
{
	die("<br><br>This Request has expired. Please, contact your customer.");		
}

$owner = BeanFactory::getBean('Accounts',$focus->account_id_c);
//print_r($owner);


//IF FORM DATA POSTED :::
if(isset($_POST) && ($_POST['button'] == 'Save'))
{
	$query = "SELECT max(rfxa_id) AS id FROM `rfxa_rfx_answer` WHERE deleted = 0";
	//Get Related Answers Bean to Find the RFXA ID 
	$rs = $GLOBALS['db']->query($query);
    $row = $GLOBALS['db']->fetchByAssoc($rs);
	
	//$link = 'rfx_rfx_rfxa_rfx_answer_1';
	$prefix = 'RFXA';
	//$focus->load_relationship($link);
	//$list = array();
	$max_val = 0;
	//foreach ($focus->rfx_rfx_rfxa_rfx_answer_1->getBeans() as $rfxa) {
		$max_val =  str_replace($prefix,'',$row['id']);
		//if($temp > $max_val)
		//$max_val = $temp;
	//}
	
	$max_val++;//Add one for incremental new value 
	$max_val = str_pad($max_val, 4, '0', STR_PAD_LEFT);
	$rfxa_id = $prefix.$max_val;
	
	//Create RFxAnswer Obj
	$rfxa_bean = BeanFactory::getBean('rfxa_RFX_Answer');
	$rfxa_bean->modified_user_id 			= $focus->modified_user_id;
	$rfxa_bean->created_by 					= $focus->created_by;
	$rfxa_bean->rfxa_id						= $rfxa_id;//Autoincrement ID
	$rfxa_bean->supplier_name 				= $_POST['supplier_name'];
	$rfxa_bean->email 						= $_POST['email'];
	$rfxa_bean->supplier_address 			= $_POST['supplier_address'];
	$rfxa_bean->supplier_address_city 		= $_POST['supplier_address_city'];
	$rfxa_bean->supplier_address_postalcode = $_POST['supplier_address_postalcode'];
	$rfxa_bean->supplier_address_state 		= $_POST['supplier_address_state'];
	$rfxa_bean->supplier_address_country 	= $_POST['supplier_address_country'];
	$rfxa_bean->supplier_phone 				= $_POST['supplier_phone'];
	$rfxa_bean->supplier_reference 			= $_POST['supplier_reference'];
	$rfxa_bean->exp_date 					= $_POST['exp_date'];
	$rfxa_bean->description 				= $_POST['description'];
	//document_name
	//ATTACHMENT
	if($_FILES['supplier_file']['error'] == 0)
	{
		$rfxa_bean->document_name	= '';//Should be the Auto Increment ID
		$rfxa_bean->filename		= $_FILES['supplier_file']['name'];//File Name 
		$rfxa_bean->file_ext		= pathinfo($_FILES['supplier_file']['name'], PATHINFO_EXTENSION);
		$rfxa_bean->file_mime_type	= $_FILES['supplier_file']['type'];  // your file's mime type goes here

	}
	
	/*
		Rfxa answer Waleed
	*/
	 static $field_map  = array (
		'line_item_index' => 0,
		'line_item_code'  => 1,
		'line_item_brand'    => 2,
		'line_item_product_name' => 3,
		// 'line_item_product_id'   => 4,
		'line_item_description'   => 4,
		'line_item_unit_of_measure'   => 5,
		'line_item_price'    => 6,
		'line_item_qty'  => 7,
		'line_item_cost'   => 8,
		'line_item_currency'   => 9,
		'line_item_min_order_qty'   => 10,
		'line_item_url'   => 11,
	);
	$module='rfxa_RFX_Answer';
	$prefix = $module . '__';
	$data = array();

	foreach ($_REQUEST[$module."__line_item_index"] as $key => $value) {
	  $row = array();
	  foreach ($field_map as $_field => $index) {
		$field_name = $module."__{$_field}";
		if (isset($_REQUEST[$field_name],$_REQUEST[$field_name][$key])) {
		  $row[$index]  = $_REQUEST[$field_name][$key];
		}
	  }
	  $data[$key] = join('^,^', $row);
	}
	if (count($data) > 0) 
	  $rfxa_bean->line_items_rfxa_c = join('^|^', $data);
	else
		$rfxa_bean->line_items_rfxa_c = '';
	/* rfxa answer waleed end */
	$rfxa_bean->save();
	
	$tmp_name 		= $_FILES['supplier_file']['tmp_name'];
	if($tmp_name != '')
	move_uploaded_file($tmp_name, "upload/".$rfxa_bean->id);
	//don't add a extension to upload/answer_id
	
	//RELATING WITH RFX
	//RelationShip Name in RFx module = rfx_rfx_rfxa_rfx_answer_1
	$link = 'rfx_rfx_rfxa_rfx_answer_1';
	$focus->load_relationship($link);
	$focus->rfx_rfx_rfxa_rfx_answer_1->add($rfxa_bean->id);
	//sugar_cleanup();
	//Redirect to Thanks Page
	$redirect_URL = 'thankyou.html';
	header("Location: $redirect_URL");

}//Save Form Ends

$admin = new Administration();
$admin->retrieveSettings();

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="themes/SuitePImproved/images/sugar_icon.ico?v=MLyfgBlTJdE0NxKnTmmtIw">
<link href="themes/SuitePImproved/css/bootstrap.min.css" rel="stylesheet">
<link href="themes/SuitePImproved/css/footable.core.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="cache/themes/SuitePImproved/css/style.css?v=MLyfgBlTJdE0NxKnTmmtIw">
<link rel="stylesheet" type="text/css" href="cache/themes/SuitePImproved/css/yui.css?v=MLyfgBlTJdE0NxKnTmmtIw">
<link rel="stylesheet" type="text/css" href="themes/SuitePImproved/css/customcolors.css">
<script type="text/javascript" src="cache/include/javascript/sugar_grp1_jquery.js?v=MLyfgBlTJdE0NxKnTmmtIw"></script>
<script type="text/javascript" src="cache/include/javascript/sugar_grp1_yui.js?v=MLyfgBlTJdE0NxKnTmmtIw"></script>
<script type="text/javascript" src="include/javascript/sugar_3.js?v=MLyfgBlTJdE0NxKnTmmtIw"></script>
<!--<script type="text/javascript" src="cache/include/javascript/sugar_grp1.js?v=MLyfgBlTJdE0NxKnTmmtIw"></script>-->
<script type="text/javascript" src="cache/jsLanguage/en_us.js"></script>
<script type="text/javascript" src="include/javascript/calendar.js?v=MLyfgBlTJdE0NxKnTmmtIw"></script>
<script type="text/javascript">
var _validFileExtensions = [".pdf", ".doc", ".docx", ".jpeg", ".bmp", ".gif", ".png"];

function check_form(myform){
 	if(myform.supplier_name.value ==''){
		$(myform.supplier_name).addClass('error');
		$(myform.supplier_name).focus();
		return false;
	}
	else if(myform.email.value ==''){		
		$(myform.email).addClass('error');
		$(myform.email).focus();
		return false;
	}
	else if(myform.email.value !=''){
		var email = myform.email.value;
    	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	var email_valid = re.test(email);
		if(!email_valid){
			$(myform.email).addClass('error');
			alert("Email Address is invalid, Please correct it!");
			$(myform.email).focus();
			return false;
		}
	}
	else if(myform.file.value == ''){
		$(myform.file).addClass('error');
		$(myform.file).focus();
		return false;
	}
	else if(myform.file.value != ''){
		 var sFileName = myform.file.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
	}
	return true;
}
</script>
<title><?php echo $focus->name;?></title>
</head>
<body>
<div class="navbar navbar-inverse" style="Height: 50px; background-color: #ddfffd;"><div class="navbar-brand" style="color: black"><?php echo $admin->settings['system_name'];?> - eTendering</div></div>
 
<div id="RFX_RFx_detailview_tabs">
  <div>
    <div id="detailpanel_1" class="detail view  detail508 expanded">
      <table id="DEFAULT" class="panelContainer" cellspacing="0">
        <tbody>
	<tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_SITEOWNER'];?></td>
            <td class="" type="name" field="name" width="37.5%"><span class="sugar_field" id="name"><?php echo $owner->name; ?></span></td>
          <td width="12.5%" scope="col"></td>
            <td class="" width="37.5%"></td>
	</tr>
          <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_NAME'];?></td>
            <td class="" type="name" field="name" width="37.5%"><span class="sugar_field" id="name"><?php echo $focus->name; ?></span></td>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_RFX_TITLE'];?></td>
            <td class="" type="varchar" field="rfx_title_c" width="37.5%"><span class="sugar_field" id="rfx_title_c"><?php echo $focus->rfx_title_c;?></span></td>
          </tr>
          <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_RFX_TYPE'];?></td>
            <td class="" type="enum" field="rfx_type" width="37.5%"><?php echo $focus->rfx_type;?></td>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_REQUEST_SENT_DATE'];?></td>
            <td class="" type="date" field="request_sent_date_c" width="37.5%"><span class="sugar_field" id="request_sent_date_c"><?php echo $focus->request_sent_date_c;?></span></td>
          </tr>
          <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_DESCRIPTION'];?></td>
            <td class="" type="text" field="description" width="37.5%"><span class="sugar_field" id="description"><?php echo $focus->description;?></span></td>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_DELIVERY_TERMS'];?></td>
            <td class="" type="date" field="request_sent_date_c" width="37.5%"><span class="sugar_field" id="delivery_terms_c"><?php echo $app_list_strings['incoterms_list'][$focus->delivery_terms_c];?></span></td>
         
          </tr>
          <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_RFX_VALID'];?></td>
            <td class="" type="date" field="rfx_valid_c" width="37.5%"><span class="sugar_field" id="rfx_valid_c"><?php echo $focus->rfx_valid_c;?></span></td>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_DELIVERY_DEST'];?></td>
            <td class="" type="date" field="delivery_dest_c" width="37.5%"><span class="sugar_field" id="delivery_dest_c"><?php echo $focus->delivery_dest_c;?></span></td>
            
          </tr>
          
           <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_PREPAID_FREIGHT'];?></td>
            <td class="" type="checkbox" field="prepaid_freight_c" width="37.5%"><span class="sugar_field" id="prepaid_freight_c"><?php echo ($focus->prepaid_freight_c == 1)? 'Yes':'No';?></span></td>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_REQUIRED_DELIVERY'];?></td>
            <td class="" type="date" field="required_delivery_c" width="37.5%"><span class="sugar_field" id="required_delivery_c"><?php echo $focus->required_delivery_c;?></span></td>
            
          </tr>
           <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_SHIP_CARRIER'];?></td>
            <td class="" type="text" field="ship_carrier_c" width="37.5%"><span class="sugar_field" id="ship_carrier_c"><?php echo $focus->ship_carrier_c;?></span></td>
            <td width="12.5%" scope="col">&nbsp;</td>
            <td class="" type="" field="" width="37.5%"></td>            
          </tr>
          <tr>
            <td width="12.5%" scope="col"><?php echo $mod_strings['LBL_LINE_ITEMS'];?></td>
            <td class="" type="" field="" width="37.5%" colspan=3><?php echo $lineItems;?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Documents-->
<ul id="groupTabs" class="subpanelTablist">
  <li><a href="#" id="dummy-1" name="whole_subpanel_rfx_rfx_documents_1" class="activesubpanel"> &nbsp;Documents </a></li>
</ul>
<!-- Sub PAnel-->
<?php

//Get Related Documents for RFX
$docs = $focus->get_linked_beans('rfx_rfx_documents_1','Documents');

?>

<ul class="noBullet" id="subpanel_list" style="visibility: visible;">
  <li class="noBullet" id="whole_subpanel_rfx_rfx_documents_1" style="display: inline;">
    <div cookie_name="rfx_rfx_documents_1_v" id="subpanel_rfx_rfx_documents_1" style="display:inline">
      <div id="list_subpanel_rfx_rfx_documents_1">
        <table cellpadding="0" cellspacing="0" width="100%" border="0" class="list view">
          <tbody>
            <tr height="20">
              <th scope="col" width="2%"><span sugar="slot8" style="white-space:normal;">&nbsp;</span></th>
              <th scope="col" width="20%"><span sugar="slot9" style="white-space:normal;">Name &nbsp;</span></th>
              <th scope="col" width="20%"><span sugar="slot10" style="white-space:normal;">File:</span></th>
              <th scope="col" width="20%"><span sugar="slot11" style="white-space:normal;">Category &nbsp;</span></th>
              <th scope="col" width="10%"><span sugar="slot12" style="white-space:normal;">Status &nbsp;</span></th>
              <th scope="col" width="10%"><span sugar="slot13" style="white-space:normal;">Publish Date &nbsp;</span></th>
              <th scope="col" width="5%"><span sugar="slot14" style="white-space:normal;">&nbsp;</span></th>
              <th scope="col" width="5%"><span sugar="slot15" style="white-space:normal;">&nbsp;</span></th>
              <th scope="col" width="5%"><span sugar="slot15" style="white-space:normal;">&nbsp;</span></th>
            </tr>
            <?php
          if(count($docs) >0){
		  	foreach($docs as $doc_id => $doc_data){				
		  ?>
            <tr height="20" class="oddListRowS1">
              <td scope="row" valign="top" class=""><span sugar="slot19b"></span></td>
              <td scope="row" valign="top" class=""><span sugar="slot20b"><?php echo $doc_data->document_name;?></span></td>
              <td scope="row" valign="top" class=""><span sugar="slot21b"><a href="<?php echo str_replace('download','download2',$doc_data->file_url_noimage);?>" class="tabDetailViewDFLink" target="_blank"><?php echo $doc_data->filename;?></a></span></td>
              <td scope="row" valign="top" class=""><span sugar="slot22b"> </span></td>
              <td scope="row" valign="top" class=""><span sugar="slot23b"> <?php echo $doc_data->status;?></span></td>
              <td scope="row" valign="top" class=""><span sugar="slot24b"> <?php echo $doc_data->active_date;?></span></td>
              <td scope="row" valign="top" class=""><span sugar="slot25b">&nbsp;</span></td>
              <td scope="row" valign="top" class=""><span sugar="slot26b">&nbsp;</span></td>
              <td scope="row" valign="top" class="inlineButtons"><span sugar="slot27b">&nbsp;</span></td>
            </tr>
            <?php 
		  	}
		  } else { ?>
            <tr height="20" class="oddListRowS1">
              <td colspan="11"><em>No Data</em></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </li>
</ul>

<?php

/*
Supplier Name, Supplier Email, File Attachment. 
Validation needed for these fields.


*/
?>
<!-- RFx Answer -->
<div id="detailpanel_1" class="detail view  detail508 expanded">
<b><br> SUPPLIER QUOTATION FORM</b><br><br>
<form action="" method="POST" name="SupplierAnswer" id="SupplierAnswer" enctype="multipart/form-data" onsubmit="var _form = document.getElementById('SupplierAnswer');  if(check_form(_form)) return true; else return false; ">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
    <tbody>
      <tr>
        <td class="buttons"><input type="hidden" name="module" value="rfxa_RFX_Answer">
          <input type="hidden" name="record" value="<?php echo $rfx_id;?>">
          <input type="hidden" name="relate_to" value="rfxa_RFX_Answer">
          
          <!-- to be used for id for buttons with custom code in def files--></td>
        <td align="right"></td>
      </tr>
    </tbody>
  </table>
  <div id="EditView_tabs">
    <div>
      <div id="detailpanel_1">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" id="Default_rfxa_RFX_Answer_Subpanel" class="yui3-skin-sam edit view panelContainer">
          <tbody>
            <tr>
              <td valign="top" id="supplier_name_label" width="12.5%" scope="col"> Supplier Name: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_name" id="supplier_name" size="30" maxlength="255" value="" title="" accesskey="7"></td>
              <td valign="top" id="email_label" width="12.5%" scope="col"> Supplier Email: </td>
              <td valign="top" width="37.5%"><input type="text" name="email" id="email" size="30" maxlength="255" value="" title=""></td>
            </tr>
            <tr>
              <td valign="top" id="supplier_address_label" width="12.5%" scope="col"> Supplier Address: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_address" id="supplier_address" size="30" maxlength="255" value="" title=""></td>
              <td valign="top" id="supplier_address_city_label" width="12.5%" scope="col"> Supplier Address City: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_address_city" id="supplier_address_city" size="30" maxlength="100" value="" title=""></td>
            </tr>
            <tr>
              <td valign="top" id="supplier_address_postalcode_label" width="12.5%" scope="col"> Supplier Address PostalCode: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_address_postalcode" id="supplier_address_postalcode" size="30" maxlength="20" value="" title=""></td>
              <td valign="top" id="supplier_address_state_label" width="12.5%" scope="col"> Supplier Address State: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_address_state" id="supplier_address_state" size="30" maxlength="100" value="" title=""></td>
            </tr>
            <tr>
              <td valign="top" id="supplier_address_country_label" width="12.5%" scope="col"> Supplier Address Country: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_address_country" id="supplier_address_country" size="30" maxlength="100" value="" title=""></td>
              <td valign="top" id="supplier_phone_label" width="12.5%" scope="col"> Supplier Phone: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_phone" id="supplier_phone" size="30" maxlength="255" value="" title="" tabindex="0" class="phone"></td>
            </tr>
            <tr>
              <td valign="top" id="supplier_reference_label" width="12.5%" scope="col"> Supplier Reference nr.: </td>
              <td valign="top" width="37.5%"><input type="text" name="supplier_reference" id="supplier_reference" size="30" maxlength="50" value="" title=""></td>
              <td valign="top" id="exp_date_label" width="12.5%" scope="col"> Expiration Date: </td>
              <td valign="top" width="37.5%"><span class="dateTime">
                <input class="date_input" autocomplete="off" type="text" name="exp_date" id="exp_date" value="" title="" tabindex="0" size="11" maxlength="10">
                <img src="themes/SuiteR/images/jscalendar.gif?v=MLyfgBlTJdE0NxKnTmmtIw" alt="Enter Date" style="position:relative; top:6px" border="0" id="exp_date_trigger"> </span> 
                <script type="text/javascript">
Calendar.setup ({
inputField : "exp_date",
form : "SupplierAnswer",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "exp_date_trigger",
singleClick : true,
dateStr : "",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
</script></td>
            </tr>
            <tr>
              <td valign="top" id="description_label" width="12.5%" scope="col"> Quote Description: </td>
              <td valign="top" width="37.5%"><textarea id="description" name="description" rows="4" cols="50" title="" tabindex="0"></textarea></td>
              <td valign="top" id="uploadfile_label" width="12.5%" scope="col"> File: </td>
              <td valign="top" width="37.5%"><span>
                <input type="file" name="supplier_file" id="supplier_file" />
                </span></td>
            </tr>
			<tr>
			<!--waleed start -->
			<td valign="top" id="line_items_rfxa_c_label" width="12.5%" data-total-columns="1" scope="col">
				Line Items RFXA:
			</td>
			<td valign="top" width="37.5%" data-total-columns="1" colspan="3">
			<script type="text/javascript" language="javascript">
				
				var cur_count = 1;
				var module    = 'rfxa_RFX_Answer';
				var del_btn_src = 'custom/themes/default/images/id-ff-remove-new.png?v=w3EUjs6AgJN_qUVgnJtfWw';
				
				function line_items_rfxa_c_sugarField()
				{
					var line_items_rfxa_c = 'line_items_rfxa_c';
					return line_items_rfxa_c;
				}

				
				function getOptionHTML(optionArray, selectedValue){
					var optionHTML = '';
					for(key in optionArray){
						if(key==selectedValue)
							optionHTML += '<option value="'+key+'" selected="selected">'+optionArray[key]+'</option>';
						else
							optionHTML += '<option value="'+key+'">'+optionArray[key]+'</option>';
					}
					return optionHTML;
				}
				function addMultiLineRow()
				{
					//var table = document.getElementById(module+"multi_lines");
				  var $div  = jQuery('#'+module+'MultiLinesDiv');
				
				  var $table_template = jQuery('#'+module+'__table__0');
				  var $node       = $table_template.clone(true);
				  $node.find(':input').each(function (index, input) {
					$input  = $(input);
					$input.prop('id',   $input.prop('id').replace('__0', '__'+cur_count));
					$input.attr('index_num',   cur_count);
					if ($input.attr('type') == 'button') return;
					if ($input.is("[name]")) {
					  $input.prop('name', $input.prop('name').replace('[0]', '['+cur_count+']'));
					  if (
						$input.prop('type') != 'checkbox' 
						&& $input.prop('type') != 'radio' 
						&& ($input.prop('type') != 'hidden' && $input.val() != 0)
					  ) {
						$input.val('');
					  }
					/*
						If quantity is null set 1
					*/
					  if($input.prop('id').indexOf("__line_item_qty__") >= 0  ){
						$input.val('1');
					  }
					  if($input.attr("onchange"))
						$input.attr('onchange', $input.attr('onchange').replace(/__0/g, '__'+cur_count));
					} else {
					  $input.html('');
					}
				  });
				  $('select[id^="rfxa_RFX_Answer__line_item_unit_of_measure__"]').each(function () {
						var unitList = SUGAR.language.get('app_list_strings', 'unit_of_measure_list');
						var unitOptions = getOptionHTML(unitList, this.value); 
						$(this).html(unitOptions);
				 });
				  $node.find('button[value="Select"]').each(function (index, button) {
					$button  = $(button);
					$button.attr('onclick', $button.attr('onclick').replace(/__0/g, '__'+cur_count));
				  });
				  $node.find('#'+module+'__line_item_index__'+cur_count).val($div.find('>table').length+1);
				  $node.attr('data-index_num', cur_count);
				  $node.prop('id', module+'__table__'+cur_count);
				  $node.find('tbody').append('<tr><td colspan="4">&nbsp;<img onclick="delMultiLineRow(this)" src="'+del_btn_src+'"></td></tr>');
				  $div.append($node).append('<br />');
				 
				  /*
					cost on price change from any where
				  */
					YAHOO.util.Event.addListener('rfxa_RFX_Answer__line_item_price__'+cur_count, 'change', function(){
							var lineRow = this.id.split("rfxa_RFX_Answer__line_item_price__");
							rowNum=lineRow['1'];
							var result =parseFloat($(this).val()).toFixed(2);
							if( !isNaN(parseFloat(result)) )
								$(this).val(parseFloat(result).toFixed(2));
							else
								$(this).val('0.00');
							var result2=parseFloat(this.value*$('#rfxa_RFX_Answer__line_item_qty__'+rowNum).val() ).toFixed(2);
							if( !isNaN(parseFloat(result)) )
								$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val(parseFloat(result2).toFixed(2));
							else
								$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val('0.00');
					});
				  cur_count += 1;
				  /*
					Making fields 2decimal on new row add
				  */
				  making2decimalFields();
				}

				function delMultiLineRow(obj)
				{
				  var $table  = $(obj).closest('table');
				  $table.next('br').remove();
				  $table.remove();
				}
				function makeCurrenciesDD(){
					var recordID = $("input[name=record]")[0].value;
					recordID= 'aa';
					YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':getCurrenciesData,'failure':ajxFail},'module=rfxa_RFX_Answer&action=getCurrenciesData&recordID='+recordID+'&sugar_body_only=true');
				}
				function getCurrenciesData (data){
					var ddArray=jQuery.parseJSON(data.responseText);	
					var recordID=$("input[name=record]")[0].value;
					$('select[id^="rfxa_RFX_Answer__line_item_currency__"]').each(function () {
						var selectedVal=$(this).val();
						for(i=0; i < ddArray.length; i++){
							$(this).append('<option value="'+ddArray[i]['id']+'">'+ddArray[i]['name']+'</option>');
						}
						if(selectedVal!=''){
							$('#'+this.id+' option[value=' + selectedVal +']').attr('selected','selected');
						}
						
					});
				}
				function ajxFail (){}
				$( document ).ready(function() {
					// making currency fields
					makeCurrenciesDD();

					making2decimalFields();
					//cost on price change from any where
					$('input[id^="rfxa_RFX_Answer__line_item_price__"]').each(function () {
						YAHOO.util.Event.addListener(this, 'change', function(){
							var result=parseFloat($(this).val()).toFixed(2);
							if( !isNaN(parseFloat(result)) )
								$(this).val(parseFloat(result).toFixed(2));
							else
								$(this).val('0.00');
							var lineRow = this.id.split("rfxa_RFX_Answer__line_item_price__");
							rowNum=lineRow['1']; 
							var result2=parseFloat(this.value*$('#rfxa_RFX_Answer__line_item_qty__'+rowNum).val() ).toFixed(2);
							if( !isNaN(parseFloat(result2)) )
								$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val(parseFloat(result2).toFixed(2));
							else
								$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val('0.00');
						});
					});
					$('select[id^="rfxa_RFX_Answer__line_item_unit_of_measure__"]').each(function () {
						var aaa=this.value;
						var unitList = SUGAR.language.get('app_list_strings','unit_of_measure_list');
						var unitOptions = getOptionHTML(unitList,this.value); 
						$(this).html(unitOptions);
					});
				});
				/*
					making2decimalFields custom function
				*/
				function making2decimalFields(){
					 $('input[id^="rfxa_RFX_Answer__line_item_price__"],input[id^="rfxa_RFX_Answer__line_item_cost__"]').each(function () {
						var result=parseFloat(this.value).toFixed(2);
						if( !isNaN(parseFloat(result)) )
							$(this).val(parseFloat(result).toFixed(2));
						else
							$(this).val('0.00');
						$(this).bind('blur', function () {
							var result2=parseFloat($(this).val()).toFixed(2);
							if( !isNaN(parseFloat(result2)) )
								$(this).val(parseFloat(result2).toFixed(2));
							else
								$(this).val('0.00');
						});
					});
					
					$('#total_cost').bind('blur', function () {
						var result=parseFloat(this.value).toFixed(2);
						if( !isNaN(parseFloat(result)) )
							$(this).val(parseFloat(result).toFixed(2));
						else
							$(this).val('0.00');
					});
				}

			</script>
			<div id="rfxa_RFX_AnswerMultiLinesDiv"> <span class="id-ff multiple ownline">
			<button value="Add" onclick="javascript:addMultiLineRow()" type="button" class="button"> <img src="custom/themes/default/images/id-ff-add-new.png?v=w3EUjs6AgJN_qUVgnJtfWw" title="Add New Line"> </button>
			</span> 
			<table width="100%" border="0" cellspacing="1" cellpadding="0" id="rfxa_RFX_Answer__table__0" class="edit" data-index_num="0">
			<tbody>
			<tr>
			<!-- Line:  -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_index__0_label" width="12%" scope="col"> Line: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_index[0]" id="rfxa_RFX_Answer__line_item_index__0" title="" tabindex="0" value="1" readonly="readonly" size="2" style="background-color:#eee"></td>
			<!-- Product Code:  -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_code__0_label" width="12%" scope="col"> Product Code: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_code[0]" id="rfxa_RFX_Answer__line_item_code__0" size="30" maxlength="255" value="" title=""></td>
			<!-- Product Brand:  -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_brand__0_label" width="12%" scope="col"> Product Brand: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_brand[0]" id="rfxa_RFX_Answer__line_item_brand__0" size="30" maxlength="255" value="" title=""></td>
			</tr>
			<tr>
			<!-- Product Name:  -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_product_name__0_label" width="12%" scope="col"> Product Name: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_product_name[0]" id="rfxa_RFX_Answer__line_item_product_name__0" size="30" maxlength="255" value="" title=""></td>
			<!--  Product Description: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_description__0_label" width="12%" scope="col"> Product Description: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_description[0]" id="rfxa_RFX_Answer__line_item_description__0" size="30" maxlength="255" value="" title=""></td>
			<!--  Unit of measure: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_unit_of_measure__0_label" width="12%" scope="col"> Unit of measure: </td>
			<td valign="top" width="21.33%">
			<select name="rfxa_RFX_Answer__line_item_unit_of_measure[0]" id="rfxa_RFX_Answer__line_item_unit_of_measure__0"></select></td>	
			</tr>
			<tr>
			<!--  Unit Price: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_price__0_label" width="12%" scope="col"> Unit Price: </td>
			<td valign="top"><input type="text" name="rfxa_RFX_Answer__line_item_price[0]" id="rfxa_RFX_Answer__line_item_price__0" size="30" maxlength="12" value="" title="" tabindex="0" onchange="$('#rfxa_RFX_Answer__line_item_cost__0').val(parseFloat($('#rfxa_RFX_Answer__line_item_price__0').val() * $('#rfxa_RFX_Answer__line_item_qty__0').val()).toFixed(2));"></td>
			<!-- Offered Quantity: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_qty__0_label" width="12%" scope="col"> Offered Quantity: </td>
			<td valign="top"><input type="text" name="rfxa_RFX_Answer__line_item_qty[0]" id="rfxa_RFX_Answer__line_item_qty__0" size="30" maxlength="255" value="1" title="" tabindex="0" onchange="$('#rfxa_RFX_Answer__line_item_cost__0').val(parseFloat($('#rfxa_RFX_Answer__line_item_price__0').val() * $('#rfxa_RFX_Answer__line_item_qty__0').val()).toFixed(2));"></td>
			<!-- Total Cost: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_cost__0_label" width="12%" scope="col"> Total Cost: </td>
			<td valign="top"><input type="text" name="rfxa_RFX_Answer__line_item_cost[0]" id="rfxa_RFX_Answer__line_item_cost__0" size="30" maxlength="12" value="" title="" tabindex="0"></td>
			</tr>
			<tr>
			<!-- Currency: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_currency__0_label" width="12%" scope="col"> Currency: </td>
			<td valign="top" width="21.33%"><select name="rfxa_RFX_Answer__line_item_currency[0]" id="rfxa_RFX_Answer__line_item_currency__0"> <option value="" selected=""></option></select></td>
			<!-- Min Order Qty: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_min_order_qty__0_label" width="12%" scope="col"> Min Order Qty: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_min_order_qty[0]" id="rfxa_RFX_Answer__line_item_min_order_qty__0" size="30" maxlength="255" value="" title=""></td>
			<!-- Product URL: -->
			<td valign="top" id="rfxa_RFX_Answer__line_item_url__0_label" width="12%" scope="col"> Product URL: </td>
			<td valign="top" width="21.33%"><input type="text" name="rfxa_RFX_Answer__line_item_url[0]" id="rfxa_RFX_Answer__line_item_url__0" size="30" maxlength="255" value="" title=""></td>
			</tr>
			</tbody>
			</table>
			</div>
			</td>
			<!-- waleed end-->
			</tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br>
  <!-- to be used for id for buttons with custom code in def files-->
  <div class="buttons">
    <div class="action_buttons" style="text-align: center;">
      <input title="Save" accesskey="a" class="button primary" type="submit" name="button" value="Save" id="SAVE_FOOTER">
      <div class="clear"></div>
    </div>
  </div>
<br>
</form>
</div>
</body>
</html>
<?php
sugar_cleanup();

exit();
?>