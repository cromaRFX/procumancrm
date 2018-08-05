<?php 
 $GLOBALS["dictionary"]["KReport"]=array (
  'table' => 'kreports',
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
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
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
      'relationship' => 'kreports_created_by',
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
      'relationship' => 'kreports_modified_user',
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
      'relationship' => 'kreports_assigned_user',
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
    'report_module' => 
    array (
      'name' => 'report_module',
      'type' => 'enum',
      'options' => 'moduleList',
      'len' => '45',
      'vname' => 'LBL_MODULE',
      'massupdate' => false,
    ),
    'report_status' => 
    array (
      'name' => 'report_status',
      'type' => 'enum',
      'options' => 'kreportstatus',
      'len' => '1',
      'vname' => 'LBL_REPORT_STATUS',
    ),
    'union_modules' => 
    array (
      'name' => 'union_modules',
      'type' => 'text',
    ),
    'reportoptions' => 
    array (
      'name' => 'reportoptions',
      'type' => 'text',
      'vname' => 'LBL_REPORTOPTIONS',
    ),
    'listtype' => 
    array (
      'name' => 'listtype',
      'type' => 'varchar',
      'len' => '10',
      'vname' => 'LBL_LISTTYPE',
      'massupdate' => false,
    ),
    'listtypeproperties' => 
    array (
      'name' => 'listtypeproperties',
      'type' => 'text',
    ),
    'selectionlimit' => 
    array (
      'name' => 'selectionlimit',
      'type' => 'varchar',
      'len' => '25',
      'vname' => 'LBL_SELECTIONLIMIT',
      'massupdate' => false,
    ),
    'presentation_params' => 
    array (
      'name' => 'presentation_params',
      'type' => 'text',
      'vname' => 'LBL_PRESENTATION_PARAMS',
    ),
    'visualization_params' => 
    array (
      'name' => 'visualization_params',
      'type' => 'text',
      'vname' => 'LBL_VISUALIZATION_PARAMS',
    ),
    'integration_params' => 
    array (
      'name' => 'integration_params',
      'type' => 'text',
      'vname' => 'LBL_INTEGRATION_PARAMS',
    ),
    'wheregroups' => 
    array (
      'name' => 'wheregroups',
      'type' => 'text',
      'vname' => 'LBL_WHEREGROUPS',
      'default' => '[]',
    ),
    'whereconditions' => 
    array (
      'name' => 'whereconditions',
      'type' => 'text',
      'vname' => 'LBL_WHERECONDITION',
      'default' => '[]',
    ),
    'listfields' => 
    array (
      'name' => 'listfields',
      'type' => 'text',
      'vname' => 'LBL_LISTFIELDS',
    ),
    'unionlistfields' => 
    array (
      'name' => 'unionlistfields',
      'type' => 'text',
      'vname' => 'LBL_UNIONLISTFIELDS',
    ),
    'advancedoptions' => 
    array (
      'name' => 'advancedoptions',
      'type' => 'text',
      'vname' => 'LBL_ADVANCEDOPTIONS',
    ),
    'category_id' => 
    array (
      'name' => 'category_id',
      'type' => 'id',
      'vname' => 'LBL_CATEGORIES_ID',
    ),
    'category_name' => 
    array (
      'name' => 'category_name',
      'type' => 'name',
      'vname' => 'LBL_CATEGORIES_NAME',
      'source' => 'non-db',
    ),
    'category_priority' => 
    array (
      'name' => 'category_priority',
      'type' => 'int',
      'len' => 6,
      'vname' => 'LBL_CATEGORIES_PRIORITY',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'kreportspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_reminder_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cat',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'category_id',
      ),
    ),
  ),
  'optimistic_locking' => true,
  'relationships' => 
  array (
    'kreports_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KReports',
      'rhs_table' => 'kreports',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'kreports_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KReports',
      'rhs_table' => 'kreports',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'kreports_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KReports',
      'rhs_table' => 'kreports',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);