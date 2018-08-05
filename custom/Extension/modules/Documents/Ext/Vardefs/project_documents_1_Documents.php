<?php
// created: 2016-12-04 15:07:36
$dictionary["Document"]["fields"]["project_documents_1"] = array (
  'name' => 'project_documents_1',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_documents_1project_ida',
);
$dictionary["Document"]["fields"]["project_documents_1_name"] = array (
  'name' => 'project_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_documents_1project_ida',
  'link' => 'project_documents_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["project_documents_1project_ida"] = array (
  'name' => 'project_documents_1project_ida',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
