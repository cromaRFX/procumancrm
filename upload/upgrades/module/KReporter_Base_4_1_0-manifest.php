<?php
/* * *******************************************************************************
* This file is part of KReporter. KReporter is an enhancement developed
* by aac services k.s.. All rights are (c) 2016 by aac services k.s.
*
* This Version of the KReporter is licensed software and may only be used in
* alignment with the License Agreement received with this Software.
* This Software is copyrighted and may not be further distributed without
* witten consent of aac services k.s.
*
* You can contact us at info@kreporter.org
******************************************************************************* */
$manifest = array(
	'acceptable_sugar_flavors' => array(
		'CE',
        'PRO',
		'CORP',
        'ENT', 
		'ULT'
	),
	'acceptable_sugar_versions' => array(
	    '6.*.*', 
            '7.*.*'
	),
	'is_uninstallable' => true,
	'name' => 'KReporter Base Package',
	'author' => 'aac services k.s.',
	'description' => 'K Base Enhancement package',
	'published_date' => '2016/11/03',
	'version' => 'v4.1.0',
	'type' => 'module',
);

$installdefs = array(
	'id' => 'kbasepackage',
	'copy' => array(
         array(
			'from' => '<basepath>/custom/k',
			'to' => 'custom/k',
         ),
		 array(
			'from' => '<basepath>/KREST',
			'to' => 'KREST/extensions',
         ),
		 array(
			'from' => '<basepath>/vendor',
			'to' => 'vendor',
         ), 
	)
);