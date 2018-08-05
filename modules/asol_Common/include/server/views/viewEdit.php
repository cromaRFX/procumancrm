<?php 

require_once("modules/asol_Common/include/commonUtils.php");

$return_action = (isset($_REQUEST['return_action']) ? $_REQUEST['return_action'] : "index");
$return_module = (isset($_REQUEST['return_module']) ? $_REQUEST['return_module'] : "asol_Common");

$userConfiguration = asol_CommonUtils::getUserConfiguration();
$globalConfiguration = asol_CommonUtils::getGlobalConfiguration();

$fiscalMonthInit = (isset($_REQUEST['fiscalMonthInit']) ? $_REQUEST['fiscalMonthInit'] : $userConfiguration['fiscalMonthInit']);
$entriesPerPage = (isset($_REQUEST['entriesPerPage']) ? $_REQUEST['entriesPerPage'] : $userConfiguration['entriesPerPage']);
$pdfOrientation = (isset($_REQUEST['pdfOrientation']) ? $_REQUEST['pdfOrientation'] : $userConfiguration['pdfOrientation']);
$pdfPageFormat = (isset($_REQUEST['pdfPageFormat']) ? $_REQUEST['pdfPageFormat'] : $userConfiguration['pdfPageFormat']);
$calendarType = (isset($_REQUEST['calendarType']) ? $_REQUEST['calendarType'] : $userConfiguration['calendarType']);
$showGregorianEquiv = (isset($_REQUEST['showGregorianEquiv']) ? $_REQUEST['showGregorianEquiv'] : $userConfiguration['showGregorianEquiv']);
$weekStartsOn = (isset($_REQUEST['weekStartsOn']) ? $_REQUEST['weekStartsOn'] : $userConfiguration['weekStartsOn']);
$scalingFactor = (isset($_REQUEST['pdfImgScalingFactor']) ? $_REQUEST['pdfImgScalingFactor'] : $userConfiguration['pdfImgScalingFactor']);
$pdfImgScalingFactor = (($scalingFactor) > 0 ? ($scalingFactor) : 1.20);

$storedFilesTtl = (isset($_REQUEST['storedFilesTtl']) ? $_REQUEST['storedFilesTtl'] : $globalConfiguration['storedFilesTtl']);
$hostName = (isset($_REQUEST['hostName']) ? $_REQUEST['hostName'] : $globalConfiguration['hostName']);

?>

<script>
function showCheckGregorianEquivalent(setVisible){
	var label=document.getElementById("gregorianEquivLabel");
	var check=document.getElementById("gregorianEquivCheck");
	if(setVisible){
		if(label.style.display=="none"&&check.style.display=="none"){
			label.style.display="table-cell";
			check.style.display="table-cell";
		}
	}else{
		if(label.style.display=="table-cell"&&check.style.display=="table-cell"){
			label.style.display="none";
			check.style.display="none";
		}
	}
}
</script>
<table style="width: 100%">
	<tbody>
		<tr>
			<td>
				<div class="moduleTitle">
					<h2><?= $mod_strings['LBL_ASOL_CONFIGURATION'] ?></h2>
				</div>

				<div id="DEFAULT">

					<form id="config_form" name="config_form" method="post" action="index.php">

						<table cellspacing="0" cellpadding="0" border="0" width="100%">
							<tbody>
								<tr>
									<td class="buttons">
										<input type="hidden" value="asol_Common" name="module">
										<input type="hidden" value="save" name="action">
										<input type="hidden" value="<?= $return_module ?>" name="return_module">
										<input type="hidden" value="<?= $return_action ?>" name="return_action">
										<input type="submit" value="<?= $app_strings['LBL_SAVE_BUTTON_LABEL'] ?>" name="button" class="button">
										<input type="submit" value="<?= $app_strings['LBL_CANCEL_BUTTON_LABEL'] ?>" name="button" class="button">
									</td>
									<td align="right"></td>
								</tr>
							</tbody>
						</table>
					
						<table cellspacing="1" cellpadding="0" border="0" width="100%" class="edit view">
							<tbody>
								<tr>
									<th colspan="4"><h4><?= $mod_strings['LBL_ASOL_DATE_TIME_OPTS'] ?></h4></th>
								</tr>
								<tr>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_CALENDAR_TYPE'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<select name="calendarType">
											<?php
											$persianCalendar=false;
											if($calendarType==='persian'){
												$persianCalendar=true;
											}
											?>
											<option value="gregorian" <?php if ($calendarType === 'gregorian'): ?> selected <?php endif; ?> onclick='showCheckGregorianEquivalent(false)'><?= $mod_strings['LBL_ASOL_GREGORIAN'] ?></option>
											<option value="persian" <?php if ($persianCalendar): ?> selected <?php endif; ?> onclick='showCheckGregorianEquivalent(true)'><?= $mod_strings['LBL_ASOL_PERSIAN'] ?></option>
										</select>
									</td>
									<?php
										if($persianCalendar){
											?>
											<td id='gregorianEquivLabel' scope="col" nowrap="nowrap" style="display: table-cell" width="15%">
												<?= $mod_strings['LBL_ASOL_SHOW_GREGORIAN_EQUIV']; ?>
											</td>
											<td id='gregorianEquivCheck' nowrap="nowrap" width="35%" style="display: table-cell">
												<?php
												if($showGregorianEquiv==="on"){
													?>
														<input type='checkbox' name='showGregorianEquiv' id='showGregorianEquiv' checked>
													<?php
												}else{
													?>
														<input type='checkbox' name='showGregorianEquiv' id='showGregorianEquiv'>
													<?php
												}
												?>
											</td>
											<?php
										}else{
											?>
											<td id='gregorianEquivLabel' scope="col" nowrap="nowrap" style="display: none" width="15%">
												<?= $mod_strings['LBL_ASOL_SHOW_GREGORIAN_EQUIV']; ?>
											</td>
											<td id='gregorianEquivCheck' nowrap="nowrap" style="display: none" width="35%">
												<input type='checkbox' name='showGregorianEquiv' id='showGregorianEquiv'>
											</td>
											<?php
										}
									?>
								</tr>
								<tr>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_WEEK_STARTS'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<select name="weekStartsOn">
											<option value="0" <?php if ($weekStartsOn == '0'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_SUNDAY'] ?></option>
											<option value="1" <?php if ($weekStartsOn == '1'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_MONDAY'] ?></option>
											<option value="6" <?php if ($weekStartsOn == '6'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_SATURDAY'] ?></option>
										</select>
									</td>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_FISCAL_YEAR'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<select name="fiscalMonthInit">
											<option value="1" <?php if ($fiscalMonthInit == '1'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_JANUARY'] ?></option>
											<option value="2" <?php if ($fiscalMonthInit == '2'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_FEBRUARY'] ?></option>
											<option value="3" <?php if ($fiscalMonthInit == '3'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_MARCH'] ?></option>
											<option value="4" <?php if ($fiscalMonthInit == '4'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_APRIL'] ?></option>
											<option value="5" <?php if ($fiscalMonthInit == '5'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_MAY'] ?></option>
											<option value="6" <?php if ($fiscalMonthInit == '6'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_JUNE'] ?></option>
											<option value="7" <?php if ($fiscalMonthInit == '7'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_JULY'] ?></option>
											<option value="8" <?php if ($fiscalMonthInit == '8'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_AUGUST'] ?></option>
											<option value="9" <?php if ($fiscalMonthInit == '9'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_SEPTEMBER'] ?></option>
											<option value="10" <?php if ($fiscalMonthInit == '10'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_OCTOBER'] ?></option>
											<option value="11" <?php if ($fiscalMonthInit == '11'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_NOVEMBER'] ?></option>
											<option value="12" <?php if ($fiscalMonthInit == '12'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_DECEMBER'] ?></option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>

						<table cellspacing="1" cellpadding="0" border="0" width="100%" class="edit view">
							<tbody>
								<tr>
									<th colspan="4"><h4><?= $mod_strings['LBL_ASOL_PAGINATION'] ?></h4></th>
								</tr>
								<tr>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_ENTRIES_PER_PAGES'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<select name="entriesPerPage">
											<option value="5" <?php if ($entriesPerPage == '5'): ?> selected <?php endif; ?>>5</option>
											<option value="10" <?php if ($entriesPerPage == '10'): ?> selected <?php endif; ?>>10</option>
											<option value="15" <?php if ($entriesPerPage == '15'): ?> selected <?php endif; ?>>15</option>
											<option value="20" <?php if ($entriesPerPage == '20'): ?> selected <?php endif; ?>>20</option>
											<option value="25" <?php if ($entriesPerPage == '25'): ?> selected <?php endif; ?>>25</option>
											<option value="30" <?php if ($entriesPerPage == '30'): ?> selected <?php endif; ?>>30</option>
											<option value="35" <?php if ($entriesPerPage == '35'): ?> selected <?php endif; ?>>35</option>
											<option value="40" <?php if ($entriesPerPage == '40'): ?> selected <?php endif; ?>>40</option>
											<option value="45" <?php if ($entriesPerPage == '45'): ?> selected <?php endif; ?>>45</option>
											<option value="50" <?php if ($entriesPerPage == '50'): ?> selected <?php endif; ?>>50</option>
										</select>
									</td>
									<td colspan="2" nowrap="nowrap" width="50%">&nbsp;</td>
								</tr>
							</tbody>
						</table>

						<table cellspacing="1" cellpadding="0" border="0" width="100%" class="edit view">
							<tbody>
								<tr>
									<th colspan="4"><h4><?= $mod_strings['LBL_ASOL_PDF_OPTS'] ?></h4></th>
								</tr>
								<tr>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_PDF_ORIENTATION'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<select name="pdfOrientation">
											<option value="normal" <?php if ($pdfOrientation == 'normal'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_PORTRAIT'] ?></option>
											<option value="landscape" <?php if ($pdfOrientation == 'landscape'): ?> selected <?php endif; ?>><?= $mod_strings['LBL_ASOL_LANDSCAPE'] ?></option>
										</select>
									</td>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_PDF_SCALING_FACTOR'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<input name="pdfImgScalingFactor" value="<?= $pdfImgScalingFactor; ?>">
									</td>
								</tr>
								<tr>
									<td  scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_PDF_FORMAT_PAGE'] ?>:
									</td>
									<td>
										<select name="pdfPageFormat">
											<option value="A2" <?php if ($pdfPageFormat == 'A2'): ?> selected <?php endif; ?>>A2</option>									
											<option value="A3" <?php if ($pdfPageFormat == 'A3'): ?> selected <?php endif; ?>>A3</option>									
											<option value="A4" <?php if ($pdfPageFormat == 'A4'): ?> selected <?php endif; ?>>A4</option>
											<option value="A5" <?php if ($pdfPageFormat == 'A5'): ?> selected <?php endif; ?>>A5</option>
											<option value="A6" <?php if ($pdfPageFormat == 'A6'): ?> selected <?php endif; ?>>A6</option>
											<option value="A7" <?php if ($pdfPageFormat == 'A7'): ?> selected <?php endif; ?>>A7</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>

						<?php if ($current_user->is_admin): ?>

						<table cellspacing="1" cellpadding="0" border="0" width="100%" class="edit view">
							<tbody>
								<tr>
									<th colspan="4"><h4><?= $mod_strings['LBL_ASOL_SCHEDULED_OPTS'] ?></h4></th>
								</tr>
								<tr>
									<td scope="col" nowrap="nowrap" width="15%">
										<?= $mod_strings['LBL_ASOL_SCHEDULED_FILES_TTL'] ?>:<span class="required">*</span>
									</td>
									<td nowrap="nowrap" width="35%">
										<input size="6px" name="storedFilesTtl" value="<?= $storedFilesTtl ?>">
									</td>
									<td scope="col" nowrap="nowrap" width="15%">
										Host Name:
									</td>
									<td nowrap="nowrap" width="35%">
										<input size="30px" name="hostName" value="<?= $hostName ?>">
									</td>
								</tr>
							</tbody>
						</table>
													
						<?php endif; ?>

					</form>

				</div>
			</td>
		</tr>
	</tbody>
</table>
