<?php

global $current_user, $mod_strings;


$return_action = $_REQUEST['return_action'];

if ($return_action == "restoreCSS")	{

	copy(getcwd()."/modules/asol_Reports/include/css/reports_original.css", getcwd()."/modules/asol_Reports/include/css/reports.css");

	$userDomain = (isset($current_user->asol_default_domain) ? $current_user->asol_default_domain : null);
	if (($userDomain !== null) && (is_file("modules/asol_Reports/include/css/".$userDomain.".css"))) {
		@unlink("modules/asol_Reports/include/css/".$userDomain.".css");
	}

} else if ($return_action == "uploadCSS") {

	$size = $_FILES['uploadedCSS']['size'];
	$type = $_FILES['uploadedCSS']['type'];
	$name = $_FILES['uploadedCSS']['name'];
	$tmpName = $_FILES['uploadedCSS']['tmp_name'];

	if ($name != "") {

		$target =  (!empty($current_user->asol_default_domain)) ? getcwd()."/modules/asol_Reports/include/css/".$current_user->asol_default_domain.".css" : getcwd()."/modules/asol_Reports/include/css/reports.css";
		copy($tmpName, $target);

	}

}

?>


<div class="moduleTitle">
	<h2><?= $mod_strings['LBL_REPORT_CUSTOMIZE_ACTION'] ?></h2>
</div>

<div id="DEFAULT">
	<form name="css_form" id="css_form" action="index.php" method="POST" target="_self" enctype="multipart/form-data">
	
		<input type="hidden" value="asol_Reports" name="module">
		<input type="hidden" value="" name="return_action">
	
		<table cellspacing="1" cellpadding="0" border="0" width="100%" class="edit view">
			<tbody>
				<tr>
					<th colspan="4"><h4><?= $mod_strings['LBL_REPORT_EXPORTED_CSS'] ?></h4></th>
				</tr>
				<tr>
					<td scope="col" nowrap="nowrap" width="15%">
						<?= $mod_strings['LBL_REPORT_EXPORT_ORIGINAL_CSS'] ?>:
					</td>
					<td nowrap="nowrap" width="35%">
						<script type="text/javascript">
							function downloadCss() {
								document.css_form.return_action.value = 'downloadCSS';
								var form = document.getElementById('css_form');
								form.action = 'index.php?entryPoint=reportPopup&module=asol_Reports';
								form.target = 'ExportWindow';
								window.open('', 'ExportWindow', 'width=300,height=100,location=0,status=0,scrollbars=0');
								form.submit();
							}
						</script>
						<input type="button" value="<?= $mod_strings['LBL_REPORT_EXPORT_CSS'] ?>" onclick="downloadCss()">
					</td>
					<td scope="col" nowrap="nowrap" width="15%">
						<?= $mod_strings['LBL_REPORT_EXPORT_CUSTOM_CSS'] ?>:
					</td>
					<td nowrap="nowrap" width="35%">
						<input type="button" value="<?= $mod_strings['LBL_REPORT_EXPORT_CSS'] ?>" onclick="document.css_form.return_action.value = 'downloadCustomCSS'; document.css_form.action = 'index.php?entryPoint=reportPopup&module=asol_Reports&domainId=<?= $current_user->asol_default_domain ?>'; document.css_form.target='ExportWindow'; window.open('', 'ExportWindow', 'width=300,height=100,location=0,status=0,scrollbars=0'); document.css_form.submit();">
					</td>
				</tr>
				<tr>
					<td scope="col" nowrap="nowrap" width="15%">
						<?= $mod_strings['LBL_REPORT_RESTORE_CSS'] ?>:
					</td>
					<td nowrap="nowrap" width="35%">
						<input type="button" value="<?= $mod_strings['LBL_REPORT_RESTORE'] ?>" onclick="document.css_form.return_action.value = 'restoreCSS'; document.css_form.action='index.php?module=asol_Reports&action=CustomizeCss'; document.css_form.target='_self'; document.css_form.submit();">
					</td>
					<td scope="col" nowrap="nowrap" width="15%">
						<?= $mod_strings['LBL_REPORT_UPLOAD_CSS'] ?>:
					</td>
					<td nowrap="nowrap" width="35%">
						<input type="file" name="uploadedCSS">&nbsp;&nbsp;<input type="button" value="<?= $mod_strings['LBL_REPORT_UPLOAD'] ?>" onclick="document.css_form.return_action.value = 'uploadCSS'; document.css_form.action='index.php?module=asol_Reports&action=CustomizeCss'; document.css_form.target='_self'; document.css_form.submit();">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
