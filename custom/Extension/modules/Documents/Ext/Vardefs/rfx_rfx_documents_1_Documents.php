<?php
// created: 2016-04-01 06:37:43
$dictionary["Document"]["fields"]["rfx_rfx_documents_1"] = array (
  'name' => 'rfx_rfx_documents_1',
  'type' => 'link',
  'relationship' => 'rfx_rfx_documents_1',
  'source' => 'non-db',
  'module' => 'RFX_RFx',
  'bean_name' => 'RFX_RFx',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_RFX_RFX_TITLE',
  'id_name' => 'rfx_rfx_documents_1rfx_rfx_ida',
);
$dictionary["Document"]["fields"]["rfx_rfx_documents_1_name"] = array (
  'name' => 'rfx_rfx_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_RFX_RFX_TITLE',
  'save' => true,
  'id_name' => 'rfx_rfx_documents_1rfx_rfx_ida',
  'link' => 'rfx_rfx_documents_1',
  'table' => 'rfx_rfx',
  'module' => 'RFX_RFx',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["rfx_rfx_documents_1rfx_rfx_ida"] = array (
  'name' => 'rfx_rfx_documents_1rfx_rfx_ida',
  'type' => 'link',
  'relationship' => 'rfx_rfx_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
