<?php 
 $GLOBALS["dictionary"]["Meeting"]=array (
  'table' => 'meetings',
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'comment' => 'Meeting activities',
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
      'vname' => 'LBL_SUBJECT',
      'required' => true,
      'type' => 'name',
      'dbType' => 'varchar',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'len' => '50',
      'comment' => 'Meeting name',
      'importable' => 'required',
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
      'relationship' => 'meetings_created_by',
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
      'relationship' => 'meetings_modified_user',
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
      'relationship' => 'meetings_assigned_user',
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
      'relationship' => 'securitygroups_meetings',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'accept_status' => 
    array (
      'name' => 'accept_status',
      'vname' => 'LBL_ACCEPT_STATUS',
      'type' => 'varchar',
      'dbType' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'set_accept_links' => 
    array (
      'name' => 'accept_status',
      'vname' => 'LBL_ACCEPT_LINK',
      'type' => 'varchar',
      'dbType' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'location' => 
    array (
      'name' => 'location',
      'vname' => 'LBL_LOCATION',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting location',
    ),
    'password' => 
    array (
      'name' => 'password',
      'vname' => 'LBL_PASSWORD',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting password',
      'studio' => 'false',
    ),
    'join_url' => 
    array (
      'name' => 'join_url',
      'vname' => 'LBL_URL',
      'type' => 'varchar',
      'len' => '200',
      'comment' => 'Join URL',
      'studio' => 'false',
      'reportable' => false,
    ),
    'host_url' => 
    array (
      'name' => 'host_url',
      'vname' => 'LBL_HOST_URL',
      'type' => 'varchar',
      'len' => '400',
      'comment' => 'Host URL',
      'studio' => 'false',
      'reportable' => false,
    ),
    'displayed_url' => 
    array (
      'name' => 'displayed_url',
      'vname' => 'LBL_DISPLAYED_URL',
      'type' => 'url',
      'len' => '400',
      'comment' => 'Meeting URL',
      'studio' => 'false',
    ),
    'creator' => 
    array (
      'name' => 'creator',
      'vname' => 'LBL_CREATOR',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting creator',
      'studio' => 'false',
    ),
    'external_id' => 
    array (
      'name' => 'external_id',
      'vname' => 'LBL_EXTERNALID',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting ID for external app API',
      'studio' => 'false',
    ),
    'duration_hours' => 
    array (
      'name' => 'duration_hours',
      'vname' => 'LBL_DURATION_HOURS',
      'type' => 'int',
      'group' => 'duration',
      'len' => '3',
      'comment' => 'Duration (hours)',
      'importable' => 'required',
      'required' => true,
      'studio' => 'false',
    ),
    'duration_minutes' => 
    array (
      'name' => 'duration_minutes',
      'vname' => 'LBL_DURATION_MINUTES',
      'type' => 'int',
      'group' => 'duration',
      'len' => '2',
      'comment' => 'Duration (minutes)',
      'studio' => 'false',
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'comment' => 'Date of start of meeting',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'date_end',
        'blank' => false,
      ),
    ),
    'date_end' => 
    array (
      'name' => 'date_end',
      'vname' => 'LBL_DATE_END',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'massupdate' => false,
      'comment' => 'Date meeting ends',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'parent_type',
      'dbType' => 'varchar',
      'group' => 'parent_name',
      'options' => 'parent_type_display',
      'len' => 100,
      'comment' => 'Module meeting is associated with',
      'studio' => 
      array (
        'searchview' => false,
      ),
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'len' => 100,
      'options' => 'meeting_status_dom',
      'comment' => 'Meeting status (ex: Planned, Held, Not held)',
      'default' => 'Planned',
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'len' => 255,
      'function' => 'getMeetingsExternalApiDropDown',
      'comment' => 'Meeting type (ex: WebEx, Other)',
      'options' => 'eapm_list',
      'default' => 'Sugar',
      'massupdate' => false,
      'studio' => 'false',
    ),
    'direction' => 
    array (
      'name' => 'direction',
      'vname' => 'LBL_DIRECTION',
      'type' => 'enum',
      'len' => 100,
      'options' => 'call_direction_dom',
      'comment' => 'Indicates whether call is inbound or outbound',
      'source' => 'non-db',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'vname' => 'LBL_PARENT_ID',
      'type' => 'id',
      'group' => 'parent_name',
      'reportable' => false,
      'comment' => 'ID of item indicated by parent_type',
      'studio' => 
      array (
        'searchview' => false,
      ),
    ),
    'reminder_checked' => 
    array (
      'name' => 'reminder_checked',
      'vname' => 'LBL_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the reminder value is set (Meta-data only)',
      'massupdate' => false,
      'studio' => false,
    ),
    'reminder_time' => 
    array (
      'name' => 'reminder_time',
      'vname' => 'LBL_REMINDER_TIME',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'reminder_time_options',
      'reportable' => false,
      'massupdate' => false,
      'default' => -1,
      'comment' => 'Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
      'studio' => false,
    ),
    'email_reminder_checked' => 
    array (
      'name' => 'email_reminder_checked',
      'vname' => 'LBL_EMAIL_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the email reminder value is set (Meta-data only)',
      'massupdate' => false,
      'studio' => false,
    ),
    'email_reminder_time' => 
    array (
      'name' => 'email_reminder_time',
      'vname' => 'LBL_EMAIL_REMINDER_TIME',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'reminder_time_options',
      'reportable' => false,
      'massupdate' => false,
      'default' => -1,
      'comment' => 'Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
      'studio' => false,
    ),
    'email_reminder_sent' => 
    array (
      'name' => 'email_reminder_sent',
      'vname' => 'LBL_EMAIL_REMINDER_SENT',
      'default' => 0,
      'type' => 'bool',
      'comment' => 'Whether email reminder is already sent',
      'studio' => false,
      'massupdate' => false,
    ),
    'reminders' => 
    array (
      'required' => false,
      'name' => 'reminders',
      'vname' => 'LBL_REMINDERS',
      'type' => 'function',
      'source' => 'non-db',
      'massupdate' => 0,
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'function' => 
      array (
        'name' => 'Reminder::getRemindersListView',
        'returns' => 'html',
        'include' => 'modules/Reminders/Reminder.php',
      ),
    ),
    'outlook_id' => 
    array (
      'name' => 'outlook_id',
      'vname' => 'LBL_OUTLOOK_ID',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => false,
      'comment' => 'When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID',
    ),
    'sequence' => 
    array (
      'name' => 'sequence',
      'vname' => 'LBL_SEQUENCE',
      'type' => 'int',
      'len' => '11',
      'reportable' => false,
      'default' => 0,
      'comment' => 'Meeting update sequence for meetings as per iCalendar standards',
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'last_name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'id_name' => 'contact_id',
      'massupdate' => false,
      'vname' => 'LBL_CONTACT_NAME',
      'type' => 'relate',
      'link' => 'contacts',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'join_name' => 'contacts',
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'studio' => 'false',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'meetings_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'parent_type_display',
    ),
    'users' => 
    array (
      'name' => 'users',
      'type' => 'link',
      'relationship' => 'meetings_users',
      'source' => 'non-db',
      'vname' => 'LBL_USERS',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'meetings_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'opportunity' => 
    array (
      'name' => 'opportunity',
      'type' => 'link',
      'relationship' => 'opportunity_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITY',
    ),
    'case' => 
    array (
      'name' => 'case',
      'type' => 'link',
      'relationship' => 'case_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_CASE',
    ),
    'aos_contracts' => 
    array (
      'name' => 'aos_contracts',
      'type' => 'link',
      'relationship' => 'aos_contracts_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_CONTRACT',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'meetings_notes',
      'module' => 'Notes',
      'bean_name' => 'Note',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'type' => 'id',
      'source' => 'non-db',
    ),
    'repeat_type' => 
    array (
      'name' => 'repeat_type',
      'vname' => 'LBL_REPEAT_TYPE',
      'type' => 'enum',
      'len' => 36,
      'options' => 'repeat_type_dom',
      'comment' => 'Type of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_interval' => 
    array (
      'name' => 'repeat_interval',
      'vname' => 'LBL_REPEAT_INTERVAL',
      'type' => 'int',
      'len' => 3,
      'default' => 1,
      'comment' => 'Interval of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_dow' => 
    array (
      'name' => 'repeat_dow',
      'vname' => 'LBL_REPEAT_DOW',
      'type' => 'varchar',
      'len' => 7,
      'comment' => 'Days of week in recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_until' => 
    array (
      'name' => 'repeat_until',
      'vname' => 'LBL_REPEAT_UNTIL',
      'type' => 'date',
      'comment' => 'Repeat until specified date',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_count' => 
    array (
      'name' => 'repeat_count',
      'vname' => 'LBL_REPEAT_COUNT',
      'type' => 'int',
      'len' => 7,
      'comment' => 'Number of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_parent_id' => 
    array (
      'name' => 'repeat_parent_id',
      'vname' => 'LBL_REPEAT_PARENT_ID',
      'type' => 'id',
      'len' => 36,
      'comment' => 'Id of the first element of recurring records',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'recurring_source' => 
    array (
      'name' => 'recurring_source',
      'vname' => 'LBL_RECURRING_SOURCE',
      'type' => 'varchar',
      'len' => 36,
      'comment' => 'Source of recurring meeting',
      'importable' => false,
      'massupdate' => false,
      'reportable' => false,
      'studio' => false,
    ),
    'duration' => 
    array (
      'name' => 'duration',
      'vname' => 'LBL_DURATION',
      'type' => 'enum',
      'options' => 'duration_dom',
      'source' => 'non-db',
      'comment' => 'Duration handler dropdown',
      'massupdate' => false,
      'reportable' => false,
      'importable' => false,
    ),
  ),
  'relationships' => 
  array (
    'meetings_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'meetings_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'meetings_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_meetings' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Meetings',
    ),
    'meetings_notes' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Meetings',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'meetingspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_mtg_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_meet_par_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
        2 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_meet_stat_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'status',
        2 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_meet_date_start',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
      ),
    ),
  ),
  'optimistic_locking' => true,
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);