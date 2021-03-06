<?php
// created: 2018-07-20 09:02:56
$sugar_config = array (
  'IAD_BreadCrumb_buttoncolor' => '#50a855',
  'IAD_BreadCrumb_linecolor' => '#31a69c',
  'IAD_BreadCrumb_maincolor' => '#086653',
  'IAD_BreadCrumb_showlogo' => '0',
  'SAML_X509Cert' => '',
  'SAML_loginurl' => '',
  'addAjaxBannedModules' => 
  array (
    0 => 'SecurityGroups',
    1 => 'KReports',
    2 => 'AOS_Quotes',
    3 => 'Accounts',
    4 => 'RFX_RFx',
    5 => 'asol_Reports',
    6 => 'porq_Purchase_Request',
    7 => 'AOS_PDF_Templates',
    8 => 'appr_Approvals',
    9 => 'asol_Reports',
    10 => 'asol_Reports',
    11 => 'asol_Reports',
    13 => 'asol_Reports',
    12 => 'asol_Reports',
    15 => 'asol_Reports',
    14 => 'asol_Reports',
    16 => 'asol_Reports',
    17 => 'asol_Reports',
    18 => 'asol_Reports',
    19 => 'asol_Reports',
    20 => 'asol_Reports',
    21 => 'asol_Reports',
    22 => 'asol_Reports',
    23 => 'asol_Reports',
    24 => 'asol_Reports',
    25 => 'asol_Reports',
    26 => 'asol_Reports',
    27 => 'asol_Reports',
    28 => 'asol_Reports',
    29 => 'asol_Reports',
    30 => 'asol_Reports',
    31 => 'asol_Reports',
    32 => 'asol_Reports',
    33 => 'asol_Reports',
    34 => 'asol_Reports',
    35 => 'asol_Reports',
    36 => 'asol_Reports',
    37 => 'asol_Reports',
    38 => 'asol_Reports',
    39 => 'asol_Reports',
    40 => 'asol_Reports',
    41 => 'asol_Reports',
    42 => 'asol_Reports',
    43 => 'asol_Reports',
    44 => 'asol_Reports',
    45 => 'asol_Reports',
    46 => 'asol_Reports',
  ),
  'admin_access_control' => false,
  'admin_export_only' => false,
  'authenticationClass' => '',
  'cache_dir' => 'cache/',
  'calculate_response_time' => false,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'show_completed_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => 1000,
  ),
  'chartEngine' => 'Jit',
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 30,
    'min_cron_interval' => 30,
    'allowed_cron_users' => 
    array (
      0 => 'dev9',
      1 => 'kreatifdev',
    ),
  ),
  'currency' => '',
  'dashlet_auto_refresh_min' => '600',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'm/d/Y',
  'dbconfig' => 
  array (
    'db_host_name' => 'localhost',
    'db_host_instance' => 'SQLEXPRESS',
    'db_user_name' => 'root',
    'db_password' => 'admin',
    'db_name' => 'procumancrm',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'MysqliManager',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => true,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
    'collation' => 'utf8_general_ci',
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Australian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '�',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '&#65509;',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '�',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '&#8360;',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '&#8361;',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '�',
    ),
    'MXM' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXM',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '&#3647;',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
    'MXN' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXN',
      'symbol' => '$',
    ),
  ),
  'default_currency_iso4217' => 'IDR',
  'default_currency_name' => 'ID Rupiah',
  'default_currency_significant_digits' => 2,
  'default_currency_symbol' => 'R',
  'default_date_format' => 'd/m/Y',
  'default_decimal_seperator' => '.',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'en_us',
  'default_locale_name_format' => 's f l',
  'default_max_tabs' => 10,
  'default_module' => 'Home',
  'default_module_favicon' => false,
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 493,
    'file_mode' => 420,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => false,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'SuitePImproved',
  'default_time_format' => 'h:ia',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'no',
  'developerMode' => true,
  'disable_convert_lead' => false,
  'disable_export' => false,
  'disable_persistent_connections' => 'false',
  'disabled_languages' => 'es_es,ru_ru,de_DE,fr_FR,pt_BR,it_IT,nl_NL,da_DK,hu_HU,pl_PL,tr_TR,es_ES',
  'disabled_themes' => '',
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => false,
  'email_address_separator' => ',',
  'email_confirm_opt_in_email_template_id' => '7d250230-7036-7426-b4d7-5b487b1e8bd0',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => true,
  'email_default_editor' => 'html',
  'email_enable_auto_send_opt_in' => true,
  'email_enable_confirm_opt_in' => 'not-opt-in',
  'email_xss' => 'YToxMzp7czo2OiJhcHBsZXQiO3M6NjoiYXBwbGV0IjtzOjQ6ImJhc2UiO3M6NDoiYmFzZSI7czo1OiJlbWJlZCI7czo1OiJlbWJlZCI7czo0OiJmb3JtIjtzOjQ6ImZvcm0iO3M6NToiZnJhbWUiO3M6NToiZnJhbWUiO3M6ODoiZnJhbWVzZXQiO3M6ODoiZnJhbWVzZXQiO3M6NjoiaWZyYW1lIjtzOjY6ImlmcmFtZSI7czo2OiJpbXBvcnQiO3M6ODoiXD9pbXBvcnQiO3M6NToibGF5ZXIiO3M6NToibGF5ZXIiO3M6NDoibGluayI7czo0OiJsaW5rIjtzOjY6Im9iamVjdCI7czo2OiJvYmplY3QiO3M6MzoieG1wIjtzOjM6InhtcCI7czo2OiJzY3JpcHQiO3M6Njoic2NyaXB0Ijt9',
  'enable_action_menu' => false,
  'enable_line_editing_detail' => false,
  'enable_line_editing_list' => true,
  'export_delimiter' => ',',
  'export_excel_compatible' => false,
  'hide_history_contacts_emails' => 
  array (
    'Cases' => false,
    'Accounts' => true,
    'Opportunities' => true,
  ),
  'hide_subpanels' => false,
  'history_max_viewed' => 50,
  'host_name' => 'kreatifdev.procuman.com',
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100,
  'import_max_records_total_limit' => '',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 86400,
  ),
  'js_custom_version' => 1,
  'js_lang_version' => 106,
  'languages' => 
  array (
    'en_us' => 'English (US)',
    'es_es' => 'Espanol (ES)',
    'ru_ru' => '&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (RU)',
    'de_DE' => 'Deutsch (Germany) - de_DE',
    'fr_FR' => 'Français (France) - fr_FR',
    'pt_BR' => ' Português (Brasil) - pt_BR',
    'it_IT' => 'Italian (Italy) - it_IT',
    'nl_NL' => 'NL (Netherlands) - nl_NL',
    'da_DK' => 'Dansk (Denmark) - da_DK',
    'id_ID' => 'Bahasa Indonesia - id_ID',
    'hu_HU' => ' Magyar (Hungarian) - hu_HU',
    'pl_PL' => 'Polski (Poland) - pl_PL',
    'tr_TR' => 'Türkçe (Turkish) - tr_TR',
    'es_ES' => 'Español (España) - es_ES',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'donothing',
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 10,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => true,
  'log_dir' => '.',
  'log_file' => 'suitecrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'error',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'sugarcrm',
      'dateFormat' => '%c',
      'maxSize' => '10MB',
      'maxLogs' => 10,
      'suffix' => '',
    ),
  ),
  'max_dashlets_homepage' => '15',
  'name_formats' => 
  array (
    's f l' => 's f l',
    'f l' => 'f l',
    's l' => 's l',
    'l, s f' => 'l, s f',
    'l, f' => 'l, f',
    's l, f' => 's l, f',
    'l s f' => 'l s f',
    'l f s' => 'l f s',
  ),
  'passwordsetting' => 
  array (
    'SystemGeneratedPasswordON' => '0',
    'generatepasswordtmpl' => '36d51cea-b8e3-4ad4-5dd5-5b487b66a0b6',
    'lostpasswordtmpl' => '22c60847-23e1-7a51-d4f5-58105b941a1a',
    'forgotpasswordON' => '1',
    'linkexpiration' => '1',
    'linkexpirationtime' => '2',
    'linkexpirationtype' => '60',
    'systexpiration' => '',
    'systexpirationtime' => '',
    'systexpirationtype' => 1,
    'systexpirationlogin' => '',
    'factoremailtmpl' => '63441f37-a6f4-62ad-f8a0-5b487beb6c67',
  ),
  'portal_view' => 'single_user',
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 50000,
    'special_query_modules' => 
    array (
      0 => 'Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 20000,
  ),
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'securitysuite_additive' => true,
  'securitysuite_filter_user_list' => true,
  'securitysuite_inbound_email' => false,
  'securitysuite_inherit_assigned' => true,
  'securitysuite_inherit_creator' => true,
  'securitysuite_inherit_parent' => false,
  'securitysuite_popup_select' => false,
  'securitysuite_strict_rights' => false,
  'securitysuite_user_popup' => false,
  'securitysuite_user_role_precedence' => false,
  'session_dir' => '',
  'showDetailData' => true,
  'showThemePicker' => true,
  'site_url' => 'http://kreatifdev.procuman.com',
  'slow_query_time_msec' => '100',
  'stack_trace_errors' => false,
  'sugar_version' => '6.5.25',
  'sugarbeet' => true,
  'suitecrm_version' => '7.10.6',
  'system_email_templates' => 
  array (
    'confirm_opt_in_template_id' => '7d250230-7036-7426-b4d7-5b487b1e8bd0',
  ),
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'h:i a' => '11:00 pm',
    'h:i A' => '11:00 PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
    'h.i a' => '11.00 pm',
    'h.i A' => '11.00 PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tracker_max_display_length' => 15,
  'translation_string_prefix' => false,
  'unique_key' => '92859c99e2f996dc4cd2e048397eb1ae',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
    13 => 'phtml',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 30000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'vcal_time' => '2',
  'verify_client_ip' => false,
);