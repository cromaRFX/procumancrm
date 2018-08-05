<?php
$manifest = array (
  'acceptable_sugar_flavors' => 
  array (
    0 => 'CE',
  ),
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
      0 => '6.5.20',
      1 => '6.5.21',	
      2 => '6.5.22',
      3 => '6.5.23',
    ),
    'regex_matches' => 
    array (
    ),
  ),

    'acceptable_php_versions' =>
        array (
            'exact_matches' =>
                array (
                ),
            'regex_matches' =>
                array (
                  '^5\.[3-9](.*)', '^7\.(.*)'
                ),
        ),
    'acceptable_suitecrm_versions' =>
        array (
            'exact_matches' =>
                array (
                ),
            'regex_matches' =>
                array (
                  '^7.6$', '^7\.6\.(.*)'
                ),
        ),       
  'author' => 'SalesAgility',
  'copy_files' => 
  array (
    'from_dir' => 'SuiteCRM-Upgrade-7.6.x-to-7.6.4',
    'to_dir' => '',
    'force_copy' => 
    array (
    ),
  ),
  'description' => '',
  'icon' => '',
  'is_uninstallable' => false,
  'offline_client_applicable' => true,
  'name' => 'SuiteCRM',
  'published_date' => '2016-05-30 17:00:00',
  'type' => 'patch',
  'version' => '7.6.4',
);
?>
