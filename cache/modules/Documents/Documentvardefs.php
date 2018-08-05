<?php 
 $GLOBALS["dictionary"]["Document"]=array (
  'table' => 'documents',
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'source' => 'non-db',
      'type' => 'varchar',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'documents_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'documents_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'documents_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_documents',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'len' => '255',
      'required' => true,
      'importable' => 'required',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
    ),
    'doc_id' => 
    array (
      'name' => 'doc_id',
      'vname' => 'LBL_DOC_ID',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'Document ID from documents web server provider',
      'importable' => false,
      'studio' => 'false',
    ),
    'doc_type' => 
    array (
      'name' => 'doc_type',
      'vname' => 'LBL_DOC_TYPE',
      'type' => 'enum',
      'function' => 'getDocumentsExternalApiDropDown',
      'len' => '100',
      'comment' => 'Document type (ex: Google, box.net, IBM SmartCloud)',
      'popupHelp' => 'LBL_DOC_TYPE_POPUP',
      'massupdate' => false,
      'options' => 'eapm_list',
      'default' => 'Sugar',
      'studio' => 'false',
    ),
    'doc_url' => 
    array (
      'name' => 'doc_url',
      'vname' => 'LBL_DOC_URL',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'Document URL from documents web server provider',
      'importable' => false,
      'massupdate' => false,
      'studio' => 'false',
    ),
    'filename' => 
    array (
      'name' => 'filename',
      'vname' => 'LBL_FILENAME',
      'type' => 'file',
      'source' => 'non-db',
      'comment' => 'The filename of the document attachment',
      'required' => true,
      'noChange' => true,
      'allowEapm' => true,
      'fileId' => 'document_revision_id',
      'docType' => 'doc_type',
      'docUrl' => 'doc_url',
      'docId' => 'doc_id',
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'type' => 'date',
      'importable' => 'required',
      'required' => false,
      'display_default' => 'now',
      'inline_edit' => true,
      'merge_filter' => 'disabled',
      'enable_range_search' => false,
    ),
    'exp_date' => 
    array (
      'name' => 'exp_date',
      'vname' => 'LBL_DOC_EXP_DATE',
      'type' => 'date',
    ),
    'category_id' => 
    array (
      'name' => 'category_id',
      'vname' => 'LBL_SF_CATEGORY',
      'type' => 'enum',
      'len' => 100,
      'options' => 'document_category_dom',
      'reportable' => true,
    ),
    'subcategory_id' => 
    array (
      'name' => 'subcategory_id',
      'vname' => 'LBL_SF_SUBCATEGORY',
      'type' => 'enum',
      'len' => 100,
      'options' => 'document_subcategory_dom',
      'reportable' => true,
    ),
    'status_id' => 
    array (
      'name' => 'status_id',
      'vname' => 'LBL_DOC_STATUS',
      'type' => 'enum',
      'len' => 100,
      'options' => 'document_status_dom',
      'reportable' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_DOC_STATUS',
      'type' => 'varchar',
      'source' => 'non-db',
      'comment' => 'Document status for Meta-Data framework',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'varchar',
      'len' => '36',
      'reportable' => false,
    ),
    'revisions' => 
    array (
      'name' => 'revisions',
      'type' => 'link',
      'relationship' => 'document_revisions',
      'source' => 'non-db',
      'vname' => 'LBL_REVISIONS',
    ),
    'revision' => 
    array (
      'name' => 'revision',
      'vname' => 'LBL_DOC_VERSION',
      'type' => 'varchar',
      'reportable' => false,
      'required' => true,
      'source' => 'non-db',
      'importable' => 'required',
      'default' => '1',
    ),
    'last_rev_created_name' => 
    array (
      'name' => 'last_rev_created_name',
      'vname' => 'LBL_LAST_REV_CREATOR',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'last_rev_mime_type' => 
    array (
      'name' => 'last_rev_mime_type',
      'vname' => 'LBL_LAST_REV_MIME_TYPE',
      'type' => 'varchar',
      'reportable' => false,
      'studio' => 'false',
      'source' => 'non-db',
    ),
    'latest_revision' => 
    array (
      'name' => 'latest_revision',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'last_rev_create_date' => 
    array (
      'name' => 'last_rev_create_date',
      'type' => 'date',
      'table' => 'document_revisions',
      'link' => 'revisions',
      'join_name' => 'document_revisions',
      'vname' => 'LBL_LAST_REV_CREATE_DATE',
      'rname' => 'date_entered',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contracts' => 
    array (
      'name' => 'contracts',
      'type' => 'link',
      'relationship' => 'contracts_documents',
      'source' => 'non-db',
      'vname' => 'LBL_CONTRACTS',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'leads_documents',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'documents_accounts',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_SUBPANEL_TITLE',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'documents_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS_SUBPANEL_TITLE',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'documents_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES_SUBPANEL_TITLE',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'documents_cases',
      'source' => 'non-db',
      'vname' => 'LBL_CASES_SUBPANEL_TITLE',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'documents_bugs',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS_SUBPANEL_TITLE',
    ),
    'related_doc_id' => 
    array (
      'name' => 'related_doc_id',
      'vname' => 'LBL_RELATED_DOCUMENT_ID',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'varchar',
      'len' => '36',
    ),
    'related_doc_name' => 
    array (
      'name' => 'related_doc_name',
      'vname' => 'LBL_DET_RELATED_DOCUMENT',
      'type' => 'relate',
      'table' => 'documents',
      'id_name' => 'related_doc_id',
      'module' => 'Documents',
      'source' => 'non-db',
      'comment' => 'The related document name for Meta-Data framework',
    ),
    'related_doc_rev_id' => 
    array (
      'name' => 'related_doc_rev_id',
      'vname' => 'LBL_RELATED_DOCUMENT_REVISION_ID',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'varchar',
      'len' => '36',
    ),
    'related_doc_rev_number' => 
    array (
      'name' => 'related_doc_rev_number',
      'vname' => 'LBL_DET_RELATED_DOCUMENT_VERSION',
      'type' => 'varchar',
      'source' => 'non-db',
      'comment' => 'The related document version number for Meta-Data framework',
    ),
    'is_template' => 
    array (
      'name' => 'is_template',
      'vname' => 'LBL_IS_TEMPLATE',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
    ),
    'template_type' => 
    array (
      'name' => 'template_type',
      'vname' => 'LBL_TEMPLATE_TYPE',
      'type' => 'enum',
      'len' => 100,
      'options' => 'document_template_type_dom',
      'reportable' => false,
    ),
    'latest_revision_name' => 
    array (
      'name' => 'latest_revision_name',
      'vname' => 'LBL_LASTEST_REVISION_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_name' => 
    array (
      'name' => 'selected_revision_name',
      'vname' => 'LBL_SELECTED_REVISION_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contract_status' => 
    array (
      'name' => 'contract_status',
      'vname' => 'LBL_CONTRACT_STATUS',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contract_name' => 
    array (
      'name' => 'contract_name',
      'vname' => 'LBL_CONTRACT_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'linked_id' => 
    array (
      'name' => 'linked_id',
      'vname' => 'LBL_LINKED_ID',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_id' => 
    array (
      'name' => 'selected_revision_id',
      'vname' => 'LBL_SELECTED_REVISION_ID',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'latest_revision_id' => 
    array (
      'name' => 'latest_revision_id',
      'vname' => 'LBL_LATEST_REVISION_ID',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_filename' => 
    array (
      'name' => 'selected_revision_filename',
      'vname' => 'LBL_SELECTED_REVISION_FILENAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'aos_contracts' => 
    array (
      'name' => 'aos_contracts',
      'vname' => 'LBL_AOS_CONTRACTS',
      'type' => 'link',
      'relationship' => 'aos_contracts_documents',
      'source' => 'non-db',
      'module' => 'AOS_Contracts',
    ),
    'reinv_invoices_received_documents_1' => 
    array (
      'name' => 'reinv_invoices_received_documents_1',
      'type' => 'link',
      'relationship' => 'reinv_invoices_received_documents_1',
      'source' => 'non-db',
      'module' => 'reinv_Invoices_Received',
      'bean_name' => 'reinv_Invoices_Received',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
      'id_name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
    ),
    'reinv_invoices_received_documents_1_name' => 
    array (
      'name' => 'reinv_invoices_received_documents_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
      'save' => true,
      'id_name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
      'link' => 'reinv_invoices_received_documents_1',
      'table' => 'reinv_invoices_received',
      'module' => 'reinv_Invoices_Received',
      'rname' => 'name',
    ),
    'reinv_invoices_received_documents_1reinv_invoices_received_ida' => 
    array (
      'name' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
      'type' => 'link',
      'relationship' => 'reinv_invoices_received_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'rfx_rfx_documents_1' => 
    array (
      'name' => 'rfx_rfx_documents_1',
      'type' => 'link',
      'relationship' => 'rfx_rfx_documents_1',
      'source' => 'non-db',
      'module' => 'RFX_RFx',
      'bean_name' => 'RFX_RFx',
      'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_RFX_RFX_TITLE',
      'id_name' => 'rfx_rfx_documents_1rfx_rfx_ida',
    ),
    'rfx_rfx_documents_1_name' => 
    array (
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
    ),
    'rfx_rfx_documents_1rfx_rfx_ida' => 
    array (
      'name' => 'rfx_rfx_documents_1rfx_rfx_ida',
      'type' => 'link',
      'relationship' => 'rfx_rfx_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_RFX_RFX_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'asset_assets_documents_1' => 
    array (
      'name' => 'asset_assets_documents_1',
      'type' => 'link',
      'relationship' => 'asset_assets_documents_1',
      'source' => 'non-db',
      'module' => 'asset_assets',
      'bean_name' => 'asset_assets',
      'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_ASSET_ASSETS_TITLE',
      'id_name' => 'asset_assets_documents_1asset_assets_ida',
    ),
    'asset_assets_documents_1_name' => 
    array (
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
    ),
    'asset_assets_documents_1asset_assets_ida' => 
    array (
      'name' => 'asset_assets_documents_1asset_assets_ida',
      'type' => 'link',
      'relationship' => 'asset_assets_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ASSET_ASSETS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'project_documents_1' => 
    array (
      'name' => 'project_documents_1',
      'type' => 'link',
      'relationship' => 'project_documents_1',
      'source' => 'non-db',
      'module' => 'Project',
      'bean_name' => 'Project',
      'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
      'id_name' => 'project_documents_1project_ida',
    ),
    'project_documents_1_name' => 
    array (
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
    ),
    'project_documents_1project_ida' => 
    array (
      'name' => 'project_documents_1project_ida',
      'type' => 'link',
      'relationship' => 'project_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'porq_purchase_request_documents_1' => 
    array (
      'name' => 'porq_purchase_request_documents_1',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_documents_1',
      'source' => 'non-db',
      'module' => 'porq_Purchase_Request',
      'bean_name' => 'porq_Purchase_Request',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
      'id_name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
    ),
    'porq_purchase_request_documents_1_name' => 
    array (
      'name' => 'porq_purchase_request_documents_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
      'save' => true,
      'id_name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
      'link' => 'porq_purchase_request_documents_1',
      'table' => 'porq_purchase_request',
      'module' => 'porq_Purchase_Request',
      'rname' => 'name',
    ),
    'porq_purchase_request_documents_1porq_purchase_request_ida' => 
    array (
      'name' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'aos_quotes_documents_1' => 
    array (
      'name' => 'aos_quotes_documents_1',
      'type' => 'link',
      'relationship' => 'aos_quotes_documents_1',
      'source' => 'non-db',
      'module' => 'AOS_Quotes',
      'bean_name' => 'AOS_Quotes',
      'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_AOS_QUOTES_TITLE',
      'id_name' => 'aos_quotes_documents_1aos_quotes_ida',
    ),
    'aos_quotes_documents_1_name' => 
    array (
      'name' => 'aos_quotes_documents_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_AOS_QUOTES_TITLE',
      'save' => true,
      'id_name' => 'aos_quotes_documents_1aos_quotes_ida',
      'link' => 'aos_quotes_documents_1',
      'table' => 'aos_quotes',
      'module' => 'AOS_Quotes',
      'rname' => 'name',
    ),
    'aos_quotes_documents_1aos_quotes_ida' => 
    array (
      'name' => 'aos_quotes_documents_1aos_quotes_ida',
      'type' => 'link',
      'relationship' => 'aos_quotes_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_QUOTES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'aos_products_documents_1' => 
    array (
      'name' => 'aos_products_documents_1',
      'type' => 'link',
      'relationship' => 'aos_products_documents_1',
      'source' => 'non-db',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_AOS_PRODUCTS_TITLE',
      'id_name' => 'aos_products_documents_1aos_products_ida',
    ),
    'aos_products_documents_1_name' => 
    array (
      'name' => 'aos_products_documents_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_AOS_PRODUCTS_TITLE',
      'save' => true,
      'id_name' => 'aos_products_documents_1aos_products_ida',
      'link' => 'aos_products_documents_1',
      'table' => 'aos_products',
      'module' => 'AOS_Products',
      'rname' => 'name',
    ),
    'aos_products_documents_1aos_products_ida' => 
    array (
      'name' => 'aos_products_documents_1aos_products_ida',
      'type' => 'link',
      'relationship' => 'aos_products_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'gdrcp_goods_receipt_documents_1' => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1',
      'type' => 'link',
      'relationship' => 'gdrcp_goods_receipt_documents_1',
      'source' => 'non-db',
      'module' => 'gdrcp_Goods_Receipt',
      'bean_name' => 'gdrcp_Goods_Receipt',
      'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
      'id_name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
    ),
    'gdrcp_goods_receipt_documents_1_name' => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
      'save' => true,
      'id_name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
      'link' => 'gdrcp_goods_receipt_documents_1',
      'table' => 'gdrcp_goods_receipt',
      'module' => 'gdrcp_Goods_Receipt',
      'rname' => 'name',
    ),
    'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida' => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1gdrcp_goods_receipt_ida',
      'type' => 'link',
      'relationship' => 'gdrcp_goods_receipt_documents_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'documentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_doc_cat',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'category_id',
        1 => 'subcategory_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'documents_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'documents_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'documents_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_documents' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Documents',
    ),
    'document_revisions' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'id',
      'rhs_module' => 'DocumentRevisions',
      'rhs_table' => 'document_revisions',
      'rhs_key' => 'document_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);