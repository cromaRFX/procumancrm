<?php
if(!defined('sugarEntry'))define('sugarEntry', true);

require_once('modules/asol_Reports/include/manageReportsFunctions.php');
$reportList = asol_ReportsManagementFunctions::getFilteredReportList();

$viewdefs['base']['view']['reportchartdashlet'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_DASHLET_REPORTCHART',
            'description' => 'LBL_DASHLET_REPORTCHART_DESC',
            'config' => array(
                'reportId' => '',
            ),
            'preview' => array(
                'reportId' => '',
            ),
        ),
    ),
    'config' => array(
        'fields' => array(        
            array(
                'name' => 'reportId',
                'label' => 'LBL_DASHLET_REPORTCHART_REPORTID',
                'type' => 'enum',
                'searchBarThreshold' => -1,
                'options' => $reportList
            ),
        ),
    ),
);
