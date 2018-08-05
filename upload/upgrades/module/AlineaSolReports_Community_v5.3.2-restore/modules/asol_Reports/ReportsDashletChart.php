<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGenericChart.php');

class ReportsDashletChart extends DashletGenericChart 
{

    public function display($title, $subTitle, $xmlFile, $chartType, $width='100%', $height='480') 
    {
    	global $current_user, $sugar_config;
        require("modules/Charts/chartdefs.php");

        require_once('include/SugarCharts/SugarChartFactory.php');
        $sugarChart = SugarChartFactory::getInstance();
        $sugarChart->is_currency = true; 
        $currency_symbol = $sugar_config['default_currency_symbol'];
        $sugarChart->setProperties($title, $subTitle, $chartType);
        if ($current_user->getPreference('currency')){            
            $currency = new Currency();
            $currency->retrieve($current_user->getPreference('currency'));
            $currency_symbol = $currency->symbol;
        }
		return $this->getTitle('<div align="center"></div>').'<div align="center">'.$sugarChart->display($this->id, $xmlFile, $width, $height, false).'</div>';
    }  

}

?>
