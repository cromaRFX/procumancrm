<?php
$module_name = 'rfxa_RFXA';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'rfxa_id' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_RFXA_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'rfxa_id',
      ),
      'from_vendor' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_FROM_VENDOR',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'from_vendor',
      ),
      'received_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RECEIVED_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'received_date',
      ),
      'rfxa_selection' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RFXA_SELECTION',
        'width' => '10%',
        'default' => true,
        'name' => 'rfxa_selection',
      ),
    ),
    'advanced_search' => 
    array (
      'rfxa_id' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_RFXA_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'rfxa_id',
      ),
      'from_vendor' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_FROM_VENDOR',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'from_vendor',
      ),
      'received_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RECEIVED_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'received_date',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
