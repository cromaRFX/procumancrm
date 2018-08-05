<?php
// created: 2017-01-19 13:44:05
$searchFields['Users'] = array (
  'user_name' => 
  array (
    'query_type' => 'default',
  ),
  'first_name' => 
  array (
    'query_type' => 'default',
  ),
  'last_name' => 
  array (
    'query_type' => 'default',
  ),
  'search_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
    ),
    'force_unifiedsearch' => true,
  ),
  'is_admin' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'input_type' => 'checkbox',
  ),
  'is_group' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'input_type' => 'checkbox',
  ),
  'status' => 
  array (
    'query_type' => 'default',
    'options' => 'user_status_dom',
    'template_var' => 'STATUS_OPTIONS',
    'options_add_blank' => true,
  ),
  'email' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 and ea.email_address LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 
    array (
      0 => 'SELECT id FROM users where phone_home LIKE ',
      1 => 'SELECT id FROM users where phone_fax LIKE',
      2 => 'SELECT id FROM users where phone_other LIKE',
      3 => 'SELECT id FROM users where phone_work LIKE',
      4 => 'SELECT id FROM users where phone_mobile LIKE',
      'OR' => true,
    ),
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
);