<?php
// created: 2018-04-08 06:53:34
$dictionary["pay_payments"]["fields"]["aos_quotes_pay_payments_1"] = array (
  'name' => 'aos_quotes_pay_payments_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_pay_payments_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
);
$dictionary["pay_payments"]["fields"]["aos_quotes_pay_payments_1_name"] = array (
  'name' => 'aos_quotes_pay_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
  'link' => 'aos_quotes_pay_payments_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["pay_payments"]["fields"]["aos_quotes_pay_payments_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_pay_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
);
