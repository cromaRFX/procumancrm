<?php
$manifest = array(
    'acceptable_sugar_flavors' => array(
        'CE',
        'CORP',
        'PRO',
		'ULT',
        'ENT'
    ),
    'acceptable_sugar_versions' => array(
        '6.*.*', 
		'7.*.*'
    ),
    'is_uninstallable' => true,
    'remove_tables' => 'prompt',
    'name' => 'KREST Core',
    'author' => 'aac services k.s.',
    'description' => 'REST Interface for SugarCRM',
    'published_date' => '2016/11/15',
    'version' => 'v2.5.2',
    'type' => 'module'
);

$installdefs = array(
    'copy' => array(
        array(
            'from' => '<basepath>/KREST',
            'to' => 'KREST',
        )
    )
);