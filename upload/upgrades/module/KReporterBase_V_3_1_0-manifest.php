<?php
/*********************************************************************************
 * This file is part of KReporter. KReporter is an enhancement developed
 * by Christian Knoll. All rights are (c) 2015 by Christian Knoll
 *
 * This Version of the KReporter is licensed software and may only be used in
 * alignment with the License Agreement received with this Software.
 * This Software is copyrighted and may not be further distributed without
 * witten consent of Christian Knoll
 *
 * You can contact Christian Knoll at info@kreporter.org
 *
 ********************************************************************************/
$manifest = array(
	'acceptable_sugar_flavors' => array(
		'CE',
        'PRO',
		'CORP',
        'ENT'
	),
	'acceptable_sugar_versions' => array(
	    '6.*.*'
	),
	'is_uninstallable' => true,
	'name' => 'K Base Package',
	'author' => 'Christian Knoll',
	'description' => 'K Base Enhancement package',
	'published_date' => '2015/01/08',
	'version' => 'v3.1',
	'type' => 'module',
);

$installdefs = array(
	'id' => 'kbasepackage',
	'copy' => array(
         array(
			'from' => '<basepath>/custom/k',
			'to' => 'custom/k',
         ), 
	)
);