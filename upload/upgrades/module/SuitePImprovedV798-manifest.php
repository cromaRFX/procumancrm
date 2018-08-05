<?php

$manifest = array (
    'acceptable_sugar_versions' => array(
        'regex_matches' => array(
            0 => "6\\.5\\.*",
            1 => "6\\.6\\.*",
            2 => "6\\.7\\.*",
            3 => "6\\.8\\.*",
        ),
    ),
    'acceptable_sugar_flavors' =>
    array(
        0 => 'CE',
    ),
    'readme'           =>'',
    'author'           => 'Urdhva Tech Pvt Ltd',
    'description'      => 'SuiteP theme enhanced by Urdhva Tech for SuiteCRM version 7.9.8',
    'is_uninstallable' => true,
    'name'             => 'SuitePImproved',
    'published_date'   => '2018-01-11',
    'type'             => 'module',
    'version'          => '1.5',
    'icon'             => '',
);
    $installdefs = array(
    'id' => 'UrdhvaThemes',
    'copy' =>
    array(
        0 =>
        array(
            'from' => '<basepath>/SuitePImproved',
            'to' => 'themes/SuitePImproved',
        ),
    ),
);