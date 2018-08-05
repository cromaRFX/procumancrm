<?php
// created: 2016-04-26 16:45:59
$dictionary["AOS_Quotes"]["fields"]["gla_gl_accounts_aos_quotes"] = array (
  'name' => 'gla_gl_accounts_aos_quotes',
  'type' => 'link',
  'relationship' => 'gla_gl_accounts_aos_quotes',
  'source' => 'non-db',
  'module' => 'gla_GL_Accounts',
  'bean_name' => 'gla_GL_Accounts',
  'vname' => 'LBL_GLA_GL_ACCOUNTS_AOS_QUOTES_FROM_GLA_GL_ACCOUNTS_TITLE',
  'id_name' => 'gla_gl_accounts_aos_quotesgla_gl_accounts_ida',
);
$dictionary["AOS_Quotes"]["fields"]["gla_gl_accounts_aos_quotes_name"] = array (
  'name' => 'gla_gl_accounts_aos_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GLA_GL_ACCOUNTS_AOS_QUOTES_FROM_GLA_GL_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'gla_gl_accounts_aos_quotesgla_gl_accounts_ida',
  'link' => 'gla_gl_accounts_aos_quotes',
  'table' => 'gla_gl_accounts',
  'module' => 'gla_GL_Accounts',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["gla_gl_accounts_aos_quotesgla_gl_accounts_ida"] = array (
  'name' => 'gla_gl_accounts_aos_quotesgla_gl_accounts_ida',
  'type' => 'link',
  'relationship' => 'gla_gl_accounts_aos_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_GLA_GL_ACCOUNTS_AOS_QUOTES_FROM_GLA_GL_ACCOUNTS_TITLE',
);
