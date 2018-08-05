<?php 
 $GLOBALS["dictionary"]["EmailAddress"]=array (
  'table' => 'email_addresses',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
      'vname' => 'LBL_EMAIL_ADDRESS_ID',
      'required' => true,
    ),
    'email_address' => 
    array (
      'name' => 'email_address',
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL_ADDRESS',
      'length' => 100,
      'required' => true,
    ),
    'email_address_caps' => 
    array (
      'name' => 'email_address_caps',
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL_ADDRESS_CAPS',
      'length' => 100,
      'required' => true,
      'reportable' => false,
    ),
    'invalid_email' => 
    array (
      'name' => 'invalid_email',
      'type' => 'bool',
      'default' => 0,
      'vname' => 'LBL_INVALID_EMAIL',
    ),
    'opt_out' => 
    array (
      'name' => 'opt_out',
      'type' => 'bool',
      'default' => 0,
      'vname' => 'LBL_OPT_OUT',
      'audited' => true,
    ),
    'confirm_opt_in' => 
    array (
      'name' => 'confirm_opt_in',
      'type' => 'enum',
      'length' => 255,
      'default' => 'not-opt-in',
      'options' => 'email_settings_opt_in_dom',
      'vname' => 'LBL_CONFIRM_OPT_IN',
      'audited' => true,
    ),
    'confirm_opt_in_date' => 
    array (
      'name' => 'confirm_opt_in_date',
      'type' => 'datetime',
      'vname' => 'LBL_CONFIRM_OPT_IN_DATE',
    ),
    'confirm_opt_in_sent_date' => 
    array (
      'name' => 'confirm_opt_in_sent_date',
      'type' => 'datetime',
      'vname' => 'LBL_CONFIRM_OPT_IN_SENT_DATE',
    ),
    'confirm_opt_in_fail_date' => 
    array (
      'name' => 'confirm_opt_in_fail_date',
      'type' => 'datetime',
      'vname' => 'LBL_CONFIRM_OPT_IN_FAIL_DATE',
    ),
    'confirm_opt_in_token' => 
    array (
      'name' => 'confirm_opt_in_token',
      'type' => 'varchar',
      'len' => 255,
      'vname' => 'LBL_CONFIRM_OPT_IN_TOKEN',
    ),
    'date_created' => 
    array (
      'name' => 'date_created',
      'type' => 'datetime',
      'vname' => 'LBL_DATE_CREATE',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
      'vname' => 'LBL_DATE_MODIFIED',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
      'vname' => 'LBL_DELETED',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'email_addressespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ea_caps_opt_out_invalid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'email_address_caps',
        1 => 'opt_out',
        2 => 'invalid_email',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ea_opt_out_invalid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'email_address',
        1 => 'opt_out',
        2 => 'invalid_email',
      ),
    ),
  ),
  'custom_fields' => false,
);