<?php
$manifest = array(
	'built_in_version' => '7.5.0.0',
    'acceptable_sugar_versions' =>
     array (
     	0 => '',
     ),
	 'acceptable_sugar_flavors' =>
     array(
        'CE', 'PRO', 'ENT', 'CORP', 'ULT'
	 ),
    'is_uninstallable' => true,
	'remove_tables' => 'prompt',
	'key' => 'asol',
    'name' => 'AlineaSol Reports - Community Edition',
    'description' => 'AlineaSol: This module adds customizable reports to SugarCRM. Also adds User module bugfix',
    'author' => 'AlineaSol',
    'published_date' => '2016/04/22',
    'version' => '5.3.2',
    'type' => 'module',
    'icon' => '',
);

$installdefs = array(
	'id' => 'AlineaSolReports',
	'beans' => array(
	     array(
	     	'module'          => 'asol_Reports',
	     	'class'           => 'asol_Report',
	     	'path'            => 'modules/asol_Reports/asol_Report.php',
	     	'tab'             => true,
	     )
	),
	'language' => array(
	     array(
		     'from'           => '<basepath>/language/en_us.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'en_us'
		 ),
		 array(
		     'from'           => '<basepath>/language/es_es.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'es_es'
		 ),
		 array(
		     'from'           => '<basepath>/language/sp_ve.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'sp_ve'
		 ),
		 array(
		     'from'           => '<basepath>/language/fr_FR.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'fr_FR'
		 ),
		 array(
		     'from'           => '<basepath>/language/pt_PT.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'pt_PT'
		 ),
		 array(
		     'from'           => '<basepath>/language/pt_BR.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'pt_BR'
		 ),
		 array(
		     'from'           => '<basepath>/language/nl_nl.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'nl_nl'
		 ),
		 array(
		     'from'           => '<basepath>/language/de_DE.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'de_DE'
		 ),
		 array(
		     'from'           => '<basepath>/language/ru_ru.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'ru_ru'
		 ),
		 array(
		     'from'           => '<basepath>/language/zh_cn.AlineaSolReports.php',
		     'to_module'      => 'application',
		     'language'       => 'zh_cn'
		 ),
   ),
   'image_dir' => '<basepath>/icons',

   'copy' => array(
   		array(
			'from' => '<basepath>/custom/',
			'to'   => 'custom/',
		),
		array(
			'from' => '<basepath>/modules/',
			'to'   => 'modules/',
		),
		array(
			'from' => '<basepath>/include/',
			'to'   => 'include/',
		),
	),

	'pre_execute'=>array(
		0 => '<basepath>/actions/pre_install.php',
	),

	'post_execute'=>array(
		0 => '<basepath>/actions/post_install.php',
	),

	'pre_uninstall'=>array(
		0 => '<basepath>/actions/pre_uninstall.php',
	),

	'post_uninstall'=>array(
		0 => '<basepath>/actions/post_uninstall.php',
	),

);
?>
