<?php
// created: 2016-03-06 18:43:50
$dictionary["AOS_Quotes"]["fields"]["costc_cost_center_aos_quotes_1"] = array (
  'name' => 'costc_cost_center_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'costc_cost_center_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'costc_cost_center',
  'bean_name' => 'costc_cost_center',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_COSTC_COST_CENTER_TITLE',
  'id_name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
);
$dictionary["AOS_Quotes"]["fields"]["costc_cost_center_aos_quotes_1_name"] = array (
  'name' => 'costc_cost_center_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_COSTC_COST_CENTER_TITLE',
  'save' => true,
  'id_name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
  'link' => 'costc_cost_center_aos_quotes_1',
  'table' => 'costc_cost_center',
  'module' => 'costc_cost_center',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["costc_cost_center_aos_quotes_1costc_cost_center_ida"] = array (
  'name' => 'costc_cost_center_aos_quotes_1costc_cost_center_ida',
  'type' => 'link',
  'relationship' => 'costc_cost_center_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);
