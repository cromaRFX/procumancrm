<?php
// created: 2016-04-26 16:15:57
$dictionary["gla_GL_Accounts"]["fields"]["gla_gl_accounts_aos_quotes"] = array (
  'name' => 'gla_gl_accounts_aos_quotes',
  'type' => 'link',
  'relationship' => 'gla_gl_accounts_aos_quotes',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_GLA_GL_ACCOUNTS_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'gla_gl_accounts_aos_quotesaos_quotes_idb',
);
$dictionary["gla_GL_Accounts"]["fields"]["gla_gl_accounts_aos_quotes_name"] = array (
  'name' => 'gla_gl_accounts_aos_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GLA_GL_ACCOUNTS_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'gla_gl_accounts_aos_quotesaos_quotes_idb',
  'link' => 'gla_gl_accounts_aos_quotes',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["gla_GL_Accounts"]["fields"]["gla_gl_accounts_aos_quotesaos_quotes_idb"] = array (
  'name' => 'gla_gl_accounts_aos_quotesaos_quotes_idb',
  'type' => 'link',
  'relationship' => 'gla_gl_accounts_aos_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_GLA_GL_ACCOUNTS_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
);
