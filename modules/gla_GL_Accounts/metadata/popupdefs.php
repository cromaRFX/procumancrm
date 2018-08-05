<?php
$popupMeta = array (
    'moduleMain' => 'gla_GL_Accounts',
    'varName' => 'gla_GL_Accounts',
    'orderBy' => 'gla_gl_accounts.name',
    'whereClauses' => array (
  'name' => 'gla_gl_accounts.name',
  'account_description' => 'gla_gl_accounts.account_description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'account_description',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'account_description' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_DESCRIPTION',
    'width' => '10%',
    'name' => 'account_description',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_DESCRIPTION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_DESCRIPTION',
    'width' => '10%',
    'default' => true,
  ),
),
);
