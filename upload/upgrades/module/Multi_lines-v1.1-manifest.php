<?php
global $manifest;
global $installdefs;

$manifest = array (
    'acceptable_sugar_versions' => array (
		  '6.*',
		  '7.*',
    ),
    'published_date' => '2016-08-27 12:30:00',
    'version' => '1.1',
    'author' => 'Bilal Khan',
    'description' => 'Adds Multi Line Items',
    'is_uninstallable' => true,
    'name' => 'Multi_lines',
    'type' => 'module',
    'remove_tables' => 'prompt',
);

$installdefs = array (

    'id' => 'Multi_lines',
    'language'=> array(
      array(
			'from'=> '<basepath>/language/application.en_us.php',
			'to_module'=> 'application',
			'language'=>'en_us'
		),
		array(
			'from'=> '<basepath>/language/editcustomfields.en_us.php',
			'to_module'=> 'DynamicFields',
			'language'=>'en_us'
		),
		array(
			'from'=> '<basepath>/language/modulebuilder.en_us.php',
			'to_module'=> 'ModuleBuilder',
			'language'=>'en_us'
		),
    ),
    'copy' => array(
        array('from'=> '<basepath>/install/include/SugarFields/Fields/Multi_lines/',
              'to'=> 'include/SugarFields/Fields/Multi_lines/',
        ),
        array('from'=> '<basepath>/install/modules/DynamicFields/templates/Fields/TemplateMulti_lines.php',
              'to'=> 'modules/DynamicFields/templates/Fields/TemplateMulti_lines.php',
        ),
        array('from'=> '<basepath>/install/modules/DynamicFields/templates/Fields/Forms/multi_lines.php',
              'to'=> 'modules/DynamicFields/templates/Fields/Forms/multi_lines.php',
        ),
        array('from'=> '<basepath>/install/modules/DynamicFields/templates/Fields/Forms/multi_lines.tpl',
              'to'=> 'modules/DynamicFields/templates/Fields/Forms/multi_lines.tpl',
        ),
        array('from'=> '<basepath>/install/images',
              'to'=> 'custom/themes/default/images',
        ),
    ),
);
?>
