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
      4 => '6.5.24',
    ),
    'regex_matches' => 
    array (
    ),
  ),

    'acceptable_php_versions' =>
        array (
            'exact_matches' =>
                array (
		    /* php version exact */
		/* /php version exact */
                ),
            'regex_matches' =>
                array (
		    /* php version regex */
			'^5\.[3-9](.*)', '^7\.(.*)'
		/* /php version regex */
                ),
        ),
    'acceptable_suitecrm_versions' =>
        array (
            'exact_matches' =>
                array (
		    /* suitecrm version exact */
			'7.7'
		/* /suitecrm version exact */
                ),
            'regex_matches' =>
                array (
		    /* suitecrm version regex */
			'^7\.7\.(.*)'
		/* /suitecrm version regex */
                ),
        ),       
  'author' => 'SalesAgility',
  'copy_files' => 
  array (
    'from_dir' => 'SuiteCRM-Upgrade-7.7.x-to-7.7.9',
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
  'published_date' => '2016-12-31 17:00:00',
  'type' => 'patch',
  'version' => '7.7.9',
);
?>
