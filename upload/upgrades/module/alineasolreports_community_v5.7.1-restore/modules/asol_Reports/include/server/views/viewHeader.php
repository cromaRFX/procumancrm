<script type="text/javascript" src="modules/asol_Common/include/client/libraries/LAB.min.js"></script>
<?= asol_CommonUtils::getLoadJqueryScript(true, true); ?>
<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jquery.form.min.js"></script>
<link type="text/css" href="modules/asol_Common/include/client/libraries/jquery.UI.custom.css" rel="stylesheet">

<script type="text/javascript" src="modules/asol_Common/include/client/libraries/jscolor/jscolor.js"></script>
<script type="text/javascript" src="modules/asol_Common/include/client/helpers/commonUtils.js"></script>
<script type="text/javascript" src="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.js"></script>
<link type="text/css" href="modules/asol_Common/include/client/libraries/asolFancyMultiEnum.css" rel="stylesheet">

<script type="text/javascript">
	asolFancyMultiEnum.setLanguage({
		"checkAll" : "<?= translate("LBL_MULTIENUM_CHECK_ALL_ITEMS", "asol_Common"); ?>",
		"allSelected" : "<?= translate("LBL_MULTIENUM_ALL_SELECTED_ITEMS", "asol_Common"); ?>",
		"items" : "<?= translate("LBL_MULTIENUM_SELECTED_ITEMS", "asol_Common"); ?>",
	});
</script>

<script type="text/javascript" src="modules/asol_Reports/include/js/reports.min.js"></script>
<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsRouter.js"></script>
<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsApi.js"></script>
<script type="text/javascript">
	reportsApi.setLanguage({
		"blocking" : {
			"load" : "<?= translate("LBL_REPORT_LOADING_DATA", "asol_Reports"); ?>",
			"save" : "<?= translate("LBL_REPORT_SAVING_DATA", "asol_Reports"); ?>",
		}
	});
</script>
<script type="text/javascript" src="modules/asol_Reports/include/client/helpers/reportsUtils.js"></script>

<input type="hidden" id="record" value="<?= $_REQUEST['record']; ?>">

<?php

require_once('modules/asol_Common/include/commonUtils.php');
require_once("modules/asol_Reports/include/server/reportsUtils.php");

?> 
