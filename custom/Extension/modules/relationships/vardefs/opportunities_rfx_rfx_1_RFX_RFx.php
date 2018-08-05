<?php
// created: 2016-02-12 14:30:25
$dictionary["RFX_RFx"]["fields"]["opportunities_rfx_rfx_1"] = array (
  'name' => 'opportunities_rfx_rfx_1',
  'type' => 'link',
  'relationship' => 'opportunities_rfx_rfx_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_rfx_rfx_1opportunities_ida',
);
$dictionary["RFX_RFx"]["fields"]["opportunities_rfx_rfx_1_name"] = array (
  'name' => 'opportunities_rfx_rfx_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_rfx_rfx_1opportunities_ida',
  'link' => 'opportunities_rfx_rfx_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["RFX_RFx"]["fields"]["opportunities_rfx_rfx_1opportunities_ida"] = array (
  'name' => 'opportunities_rfx_rfx_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_rfx_rfx_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_RFX_RFX_1_FROM_RFX_RFX_TITLE',
);
