<?php
// created: 2016-04-26 15:55:42
$dictionary["costc_cost_center"]["fields"]["dprt_departments_costc_cost_center"] = array (
  'name' => 'dprt_departments_costc_cost_center',
  'type' => 'link',
  'relationship' => 'dprt_departments_costc_cost_center',
  'source' => 'non-db',
  'module' => 'dprt_Departments',
  'bean_name' => false,
  'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
  'id_name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
);
$dictionary["costc_cost_center"]["fields"]["dprt_departments_costc_cost_center_name"] = array (
  'name' => 'dprt_departments_costc_cost_center_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
  'save' => true,
  'id_name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
  'link' => 'dprt_departments_costc_cost_center',
  'table' => 'dprt_departments',
  'module' => 'dprt_Departments',
  'rname' => 'name',
);
$dictionary["costc_cost_center"]["fields"]["dprt_departments_costc_cost_centerdprt_departments_ida"] = array (
  'name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
  'type' => 'link',
  'relationship' => 'dprt_departments_costc_cost_center',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_COSTC_COST_CENTER_TITLE',
);
