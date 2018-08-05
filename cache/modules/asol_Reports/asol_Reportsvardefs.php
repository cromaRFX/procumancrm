<?php 
 $GLOBALS["dictionary"]["asol_Reports"]=array (
  'table' => 'asol_reports',
  'audited' => true,
  'unified_search' => true,
  'duplicate_merge' => true,
  'comment' => 'AlineaSol Reports module',
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
      'comment' => 'Report description',
      'importable' => 'required',
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
      'relationship' => 'asol_reports_created_by',
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
      'relationship' => 'asol_reports_modified_user',
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
      'relationship' => 'asol_reports_assigned_user',
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
    'internal_id' => 
    array (
      'name' => 'internal_id',
      'vname' => 'LBL_REPORT_INTERNAL_ID',
      'type' => 'char',
      'len' => '36',
      'comment' => 'Internal Id of the report',
      'importable' => 'required',
    ),
    'last_run' => 
    array (
      'name' => 'last_run',
      'vname' => 'LBL_REPORT_LAST_RUN',
      'type' => 'datetime',
      'comment' => 'Last execution of the report',
      'importable' => 'required',
    ),
    'report_module' => 
    array (
      'name' => 'report_module',
      'vname' => 'LBL_REPORT_MODULE',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'Module of the report',
      'importable' => 'required',
    ),
    'report_scope' => 
    array (
      'name' => 'report_scope',
      'vname' => 'LBL_REPORT_SCOPE',
      'type' => 'text',
      'comment' => 'Scope of the report',
    ),
    'report_fields' => 
    array (
      'name' => 'report_fields',
      'vname' => 'LBL_REPORT_FIELDS',
      'type' => 'longtext',
      'comment' => 'Fields of the report',
    ),
    'report_filters' => 
    array (
      'name' => 'report_filters',
      'vname' => 'LBL_REPORT_FILTERS',
      'type' => 'longtext',
      'comment' => 'Filters of the report',
    ),
    'report_charts_detail' => 
    array (
      'name' => 'report_charts_detail',
      'vname' => 'LBL_REPORT_CHARTS_DETAIL',
      'type' => 'longtext',
      'comment' => 'Charts of the report',
    ),
    'report_type' => 
    array (
      'name' => 'report_type',
      'vname' => 'LBL_REPORT_TYPE',
      'type' => 'text',
      'comment' => 'report type: manual, scheduled or stored',
      'importable' => 'required',
    ),
    'report_scheduled_type' => 
    array (
      'name' => 'report_scheduled_type',
      'vname' => 'LBL_REPORT_SCHEDULED_TYPE',
      'type' => 'text',
      'comment' => 'report scheduled type: email or application',
      'importable' => 'required',
    ),
    'report_attachment_format' => 
    array (
      'name' => 'report_attachment_format',
      'vname' => 'LBL_REPORT_FILE_FORMAT',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'report attachment format: html, pdf or csv',
      'importable' => 'required',
    ),
    'report_tasks' => 
    array (
      'name' => 'report_tasks',
      'vname' => 'LBL_REPORT_TASKS',
      'type' => 'text',
      'comment' => 'Tasks of the report',
    ),
    'report_charts' => 
    array (
      'name' => 'report_charts',
      'vname' => 'LBL_REPORT_CHARTS',
      'type' => 'varchar',
      'len' => '4',
      'comment' => 'Display or not report charts',
    ),
    'report_charts_engine' => 
    array (
      'name' => 'report_charts_engine',
      'vname' => 'LBL_REPORT_CHARTS_ENGINE',
      'type' => 'varchar',
      'len' => '8',
      'comment' => 'report charts engine: flash, html5 or nvd3',
      'importable' => 'required',
    ),
    'email_list' => 
    array (
      'name' => 'email_list',
      'vname' => 'LBL_REPORT_EMAIL_LIST',
      'type' => 'text',
      'comment' => 'Email list to distribute scheduled or manual reports',
    ),
    'scheduled_images' => 
    array (
      'name' => 'scheduled_images',
      'vname' => 'LBL_REPORT_EMAIL_LINK',
      'type' => 'tinyint',
      'len' => '1',
      'comment' => 'Activates or deactivates the images on scheduled report emails',
    ),
    'dynamic_tables' => 
    array (
      'name' => 'dynamic_tables',
      'vname' => 'LBL_REPORT_DYNAMIC_TABLES',
      'type' => 'tinyint',
      'len' => '1',
      'default' => '0',
      'comment' => 'Makes report usable for dynamic tables',
    ),
    'dynamic_sql' => 
    array (
      'name' => 'dynamic_sql',
      'vname' => 'LBL_REPORT_DYNAMIC_TABLE_SQL',
      'type' => 'varchar',
      'len' => '255',
      'default' => '',
      'comment' => 'Makes report usable for dynamic tables',
    ),
    'audited_report' => 
    array (
      'name' => 'audited_report',
      'vname' => 'LBL_REPORT_AUDIT_TABLE',
      'type' => 'tinyint',
      'len' => '1',
      'default' => '0',
      'comment' => 'Makes report for Modules audited table',
    ),
    'row_index_display' => 
    array (
      'name' => 'row_index_display',
      'vname' => 'LBL_REPORT_ROW_INDEX',
      'type' => 'tinyint',
      'len' => '1',
      'default' => '0',
      'comment' => 'Activates or deactivates the index display at display screen',
    ),
    'results_limit' => 
    array (
      'name' => 'results_limit',
      'vname' => 'LBL_REPORT_RESULTS',
      'type' => 'varchar',
      'len' => '255',
      'default' => 'all',
      'comment' => 'limit the entries for the Report main query: first or last n entries',
    ),
    'alternative_database' => 
    array (
      'name' => 'alternative_database',
      'vname' => 'LBL_REPORT_USE_ALTERNATIVE_DB',
      'type' => 'varchar',
      'len' => '255',
      'default' => '-1',
      'comment' => 'Non CRM Database usage definition',
    ),
    'is_meta' => 
    array (
      'name' => 'is_meta',
      'vname' => 'LBL_REPORT_IS_META',
      'type' => 'tinyint',
      'len' => '1',
      'default' => '0',
      'comment' => 'Defines if report is meta',
    ),
    'meta_html' => 
    array (
      'name' => 'meta_html',
      'vname' => 'LBL_REPORT_META_HTML',
      'type' => 'mediumtext',
      'comment' => 'Meta report defined html',
    ),
  ),
  'optimistic_locking' => true,
  'relationships' => 
  array (
    'asol_reports_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'asol_Reports',
      'rhs_table' => 'asol_reports',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'asol_reports_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'asol_Reports',
      'rhs_table' => 'asol_reports',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'asol_reports_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'asol_Reports',
      'rhs_table' => 'asol_reports',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'asol_reportspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);