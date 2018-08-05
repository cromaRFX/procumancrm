<?php
// created: 2016-12-03 15:00:09
$dictionary["Document"]["fields"]["asset_assets_documents_1"] = array (
  'name' => 'asset_assets_documents_1',
  'type' => 'link',
  'relationship' => 'asset_assets_documents_1',
  'source' => 'non-db',
  'module' => 'asset_assets',
  'bean_name' => 'asset_assets',
  'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_ASSET_ASSETS_TITLE',
  'id_name' => 'asset_assets_documents_1asset_assets_ida',
);
$dictionary["Document"]["fields"]["asset_assets_documents_1_name"] = array (
  'name' => 'asset_assets_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_ASSET_ASSETS_TITLE',
  'save' => true,
  'id_name' => 'asset_assets_documents_1asset_assets_ida',
  'link' => 'asset_assets_documents_1',
  'table' => 'asset_assets',
  'module' => 'asset_assets',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["asset_assets_documents_1asset_assets_ida"] = array (
  'name' => 'asset_assets_documents_1asset_assets_ida',
  'type' => 'link',
  'relationship' => 'asset_assets_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
