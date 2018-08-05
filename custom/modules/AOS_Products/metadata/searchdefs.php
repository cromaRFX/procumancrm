<?php
// created: 2018-07-13 10:15:08
$searchdefs['AOS_Products'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PART_NUMBER',
        'name' => 'part_number',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTRACT',
        'id' => 'AOS_CONTRACTS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'contract_c',
      ),
      2 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_AOS_PRODUCTS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_aos_products_1_name',
      ),
      3 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_PREFERRED',
        'width' => '10%',
        'name' => 'is_preferred_c',
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
        'name' => 'part_number',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'cost',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'price',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'created_by',
        'label' => 'LBL_CREATED',
        'type' => 'enum',
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
);