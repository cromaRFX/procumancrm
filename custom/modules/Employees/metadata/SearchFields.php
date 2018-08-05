<?php
// created: 2016-08-27 20:35:41
$searchFields['Employees'] = array (
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
  'open_only_active_users' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'employee_status',
    ),
    'vname' => 'LBL_ONLY_ACTIVE',
    'type' => 'bool',
  ),
  'employee_status' => 
  array (
    'query_type' => 'default',
    'options' => 'employee_status_dom',
    'template_var' => 'STATUS_OPTIONS',
    'options_add_blank' => true,
  ),
);