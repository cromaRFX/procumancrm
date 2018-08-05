<?php
$manifest = array(
    'acceptable_sugar_flavors' => array(
        'CE',
        'CORP',
        'PRO',
        'ENT'
    ),
    'acceptable_sugar_versions' => array(
        '6.*.*'
    ),
    'is_uninstallable' => true,
    'remove_tables' => 'prompt',
    'name' => 'KReporter Core',
    'author' => 'Christian Knoll',
    'description' => 'Reporting Module for SugarCRM',
    'published_date' => '2015/01/08',
    'version' => 'v3.1',
    'type' => 'module'
);

$installdefs = array(
    'id' => 'KReporterCore',
    'image_dir' => '<basepath>/images',
    'beans' => array(
        array(
            'module' => 'KReports',
            'class' => 'KReport',
            'path' => 'modules/KReports/KReport.php',
            'tab' => true,
        )
    ),
    'language' => array(
        array(
            'from' => '<basepath>/language/en_us.KReports.php',
            'to_module' => 'application',
            'language' => 'en_us'
        )
    ),
    'copy' => array(
        array(
            'from' => '<basepath>/modules/KReports',
            'to' => 'modules/KReports',
        ),
        array(
            'from' => '<basepath>/include/KReports.AjaxBan.php',
            'to' => 'custom/Extension/application/Ext/Include/KReports.AjaxBan.php',
        ),
    ),
    'relationships' => array(
        array(
            'module' => 'KReporter',
            'meta_data' => '<basepath>/metadata/kreport.snapshot.metadata.php'
        ),
    )
);