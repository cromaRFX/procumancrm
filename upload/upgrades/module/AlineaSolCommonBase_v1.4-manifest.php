<?php

global $theme;

$manifest = array (
 	'built_in_version' => '7.5.0.0',
    'acceptable_sugar_versions' => 
     array (
     	0 => '',
     ),
	 'acceptable_sugar_flavors' =>
     array(
        'CE', 'PRO', 'ENT', 'CORP', 'ULT'
	 ),
	  'readme'=>'',
	  'key'=>'asol',
	  'author' => 'AlineaSol',
	  'description' => '',
	  'icon' => '',
	  'is_uninstallable' => true,
	  'name' => 'AlineaSol Common Base',
	  'published_date' => '2015-04-27',
	  'type' => 'module',
	  'version' => '1.4',
	  'remove_tables' => 'prompt',
	  );
$installdefs = array (
  'id' => 'AlineaSolCommonBase',
 
  'layoutdefs' => array (),
  'relationships' => array (),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Administration',
      'to' => 'modules/Administration',
    ),
	1 => 
    array (
      'from' => '<basepath>/custom',
      'to' => 'custom',
    ),
  ),
  'language' => 
  array (
    0 =>
	array(
	  'from' => '<basepath>/language/en_us.administration.php' ,
	  'to_module' => 'Administration' ,
	  'language' => 'en_us'
	),
	1 =>
	array(
	  'from' => '<basepath>/language/sp_ve.administration.php' ,
	  'to_module' => 'Administration' ,
	  'language' => 'sp_ve'
	),
	2 =>
	array(
	  'from' => '<basepath>/language/es_es.administration.php' ,
	  'to_module' => 'Administration' ,
	  'language' => 'es_es'
	),
	3 =>
	array(
	  'from' => '<basepath>/language/fr_FR.administration.php' ,
	  'to_module' => 'Administration' ,
	  'language' => 'fr_FR'
	),
	4 =>
	array(
	  'from' => '<basepath>/language/pt_PT.administration.php' ,
	  'to_module' => 'Administration' ,
	  'language' => 'pt_PT'
	),
  ),
  
	'pre_execute' => array (
		0 => '<basepath>/actions/pre_install.php',
	),
	
	'post_execute' => array (
		0 => '<basepath>/actions/post_install.php',
	),

	'pre_uninstall' => array (
		0 => '<basepath>/actions/pre_uninstall.php',
	),
	
	'post_uninstall' => array (
		0 => '<basepath>/actions/post_uninstall.php',
	),
  
);