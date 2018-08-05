<?php
// created: 2018-07-13 10:15:08
$searchdefs['AOS_Quotes'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
    'maxColumnsBasic' => '3',
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'type' => 'int',
        'label' => 'LBL_QUOTE_NUMBER',
        'default' => true,
        'width' => '10%',
        'name' => 'number',
      ),
      1 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      3 => 
      array (
        'type' => 'date',
        'label' => 'LBL_EXPIRATION',
        'width' => '10%',
        'default' => true,
        'name' => 'expiration',
      ),
      4 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STAGE',
        'width' => '10%',
        'name' => 'stage',
      ),
      5 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'billing_account',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'number',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'stage',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
);