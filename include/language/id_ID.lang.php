<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'Bahasa Indonesia - id_ID',
  'moduleList' =>
  array (
    'Home' => 'Rumah',
    'Contacts' => 'Kontak',
    'Accounts' => 'Rekening',
    'Opportunities' => 'Peluang',
    'Cases' => 'Kasus',
    'Notes' => 'Catatan',
    'Calls' => 'Panggilan',
    'Emails' => 'Emails',
    'Meetings' => 'Rapat',
    'Tasks' => 'Tugas',
    'Calendar' => 'Kalender',
    'Leads' => 'Lead',
    'Currencies' => 'Kurs',
    'Activities' => 'Aktivitas',
    'Bugs' => 'Kerusakan',
    'Feeds' => 'RSS',
    'iFrames'=>'Portal Saya',
    'TimePeriods'=>'Periode Waktu',
    'TaxRates'=>'Tarif Pajak',
    'ContractTypes' => 'Jenis Kontrak',
    'Schedulers'=>'Penjadwal',
    'Project'=>'Proyek',
    'ProjectTask'=>'Tugas Proyek',
    'Campaigns'=>'Kampanye',
    'CampaignLog'=>'Log Kampanye',
    'Documents'=>'Dokumen',
    'DocumentRevisions'=>'Revisi Dokumen',
    'Connectors'=>'Konektor',
    'Roles'=>'Peran',
    'Notifications'=>'Notifikasi',
    'Sync'=>'Sync',
    'Users' => 'Pemakai',
    'Employees' => 'Karyawan',
    'Administration' => 'Administrasi',
    'ACLRoles' => 'Peran',
    'InboundEmail' => 'Email Masuk',
    'Releases' => 'Rilis',
    'Prospects' => 'Target',
    'Queues' => 'Antri',
    'EmailMarketing' => 'E-Mail Marketing',
    'EmailTemplates' => 'Template Email',
    'SNIP' => "Email Archiving",
    'ProspectLists' => 'Daftar Sasaran',
    'SavedSearch' => 'Pencarian Tersimpan',
    'UpgradeWizard' => 'Upgrade Wizard',
    'Trackers' => 'Trackers',
    'TrackerPerfs' => 'Petunjuk Tracker',
    'TrackerSessions' => 'Tracker Sesi',
    'TrackerQueries' => 'Tracker Query',
    'FAQ' => 'FAQ',
    'Newsletters' => 'Laporan',
    'SugarFeed'=>'SuiteCRM Feed',
    'KBDocuments' => 'Knowledge Base',
  'SugarFavorites'=>'SuiteCRM Favorites',

    'OAuthKeys' => 'OAuth Consumer Keys',
    'OAuthTokens' => 'OAuth Tokens',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Rumah',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Kontak',
    'Accounts' => 'Account',
    'Opportunities' => 'Peluang',
    'Cases' => 'Kasus',
    'Notes' => 'Catatan',
    'Calls' => 'Panggilan',
    'Emails' => 'E-Mail',
    'Meetings' => 'Rapat',
    'Tasks' => 'Tugas',
    'Calendar' => 'Kalender',
    'Leads' => 'Lead',
    'Activities' => 'Aktivitas',
    'Bugs' => 'Kerusakan',
    'KBDocuments' => 'Knowledge Base',
    'Feeds' => 'RSS',
    'iFrames'=>'Portal Saya',
    'TimePeriods'=>'Periode Waktu',
    'Project'=>'Proyek',
    'ProjectTask'=>'Tugas Proyek',
    'Prospects' => 'Sasaran',
    'Campaigns'=>'Kampanye',
    'Documents'=>'Dokumen',
    'SugarFollowing'=>'SuiteCRM Following',
    'Sync'=>'Sinkronisasi',
    'Users' => 'Pemakai',
  'SugarFavorites'=>'SuiteCRM Favorites'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Yes',
    '2'=>'Tidak',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Analis',
    'Competitor' => 'Saingan',
    'Customer' => 'Langganan',
    'Integrator' => 'Integrator',
    'Investor' => 'Penanam Modal',
    'Partner' => 'Rekanan',
    'Press' => 'Pers',
    'Prospect' => 'Sasaran',
    'Reseller' => 'Pengecer',
    'Other' => 'Lainnya',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Pakaian',
    'Banking' => 'Per-bank-an',
    'Biotechnology' => 'Bioteknologi',
    'Chemicals' => 'Bahan Kimia',
    'Communications' => 'Komunikasi',
    'Construction' => 'Konstruksi',
    'Consulting' => 'Konsultasi',
    'Education' => 'Pendidikan',
    'Electronics' => 'Elektronik',
    'Energy' => 'Energi',
    'Engineering' => 'Ahli Teknik',
    'Entertainment' => 'Hiburan',
    'Environmental' => 'Lingkungan',
    'Finance' => 'Keuangan',
    'Government' => 'Pemerintahan',
    'Healthcare' => 'Kesehatan',
    'Hospitality' => 'Rumah Sakit',
    'Insurance' => 'Asuransi',
    'Machinery' => 'Mesin',
    'Manufacturing' => 'Produksi',
    'Media' => 'Media',
    'Not For Profit' => 'Lembaga Sosial Masyarakat',
    'Recreation' => 'Rekreasi',
    'Retail' => 'Eceran',
    'Shipping' => 'Pengiriman',
    'Technology' => 'Teknologi',
    'Telecommunications' => 'Telekomunikasi',
    'Transportation' => 'Transportasi',
    'Utilities' => 'Utilities',
    'Other' => 'Lainnya',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Cold Call',
    'Existing Customer' => 'Customer yang ada',
    'Self Generated' => 'Dihasilkan sendiri',
    'Employee' => 'Karyawan',
    'Partner' => 'Rekanan',
    'Public Relations' => 'Humas',
    'Direct Mail' => 'Direct Mail',
    'Conference' => 'Konferensi',
    'Trade Show' => 'Pameran',
    'Web Site' => 'Web Site',
    'Word of mouth' => 'Word of mouth',
    'Email' => 'E-Mail',
    'Campaign'=>'Kampanye',
    'Other' => 'Lainnya',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Bisnis yang sudah ada',
    'New Business' => 'Bisnis Baru',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Hasil',
    'Investment'=>'Investasi',
    'Expected_Revenue'=>'Hasil Yang Diharapkan',
    'Budget'=>'Anggaran',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Pembuat Keputusan Utama',
    'Business Decision Maker' => 'Pembuat Keputusan Bisnis',
    'Business Evaluator' => 'Penilai Bisnis',
    'Technical Decision Maker' => 'Pembuat Keputusan Teknis',
    'Technical Evaluator' => 'Penilai Teknis',
    'Executive Sponsor' => 'Sponsor Eksekutif',
    'Influencer' => 'Yang Mempengaruhi',
    'Other' => 'Lainnya',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Kontak Utama',
    'Alternate Contact' => 'Kontak Alternatif',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => 'Net 15',
    'Net 30' => 'Net 30',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'elasticsearch'
  ),
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Prospecting',
    'Qualification' => 'Kualifikasi',
    'Needs Analysis' => 'Analisis Kebutuhan',
    'Value Proposition' => 'Nilai Saran',
    'Id. Decision Makers' => 'Identitas Pembuat Keputusan.',
    'Perception Analysis' => 'Tanggapan Analis',
    'Proposal/Price Quote' => 'Proposal/Price Quote',
    'Negotiation/Review' => 'Negosiasi/Tinjauan',
    'Closed Won' => 'Berakhir Menang',
    'Closed Lost' => 'Berakhir Kalah',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Konsep',
    'Negotiation' => 'Negosiasi',
    'Delivered' => 'Terkirim',
    'On Hold' => 'On Hold',
    'Confirmed' => 'Konfirmasi',
    'Closed Accepted' => 'Berakhir Diterima',
    'Closed Lost' => 'Berakhir Kalah',
    'Closed Dead' => 'Berakhir Tidak Dilanjutkan',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Panggilan',
    'Meeting' => 'Rapat',
    'Task' => 'Tugas',
    'Email' => 'E-Mail',
    'Note' => 'Catatan',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Tn.',
        'Ms.' => 'Nn.',
        'Mrs.' => 'Ny.',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 90000,
  'reminder_time_options' => array( 60=> '1 minute prior',
                                  300=> '5 minutes prior',
                                  600=> '10 minutes prior',
                                  900=> '15 minutes prior',
                                  1800=> '30 minutes prior',
                                  3600=> '1 hour prior',
                                  7200 => '2 hours prior',
                                  10800 => '3 hours prior',
                                  18000 => '5 hours prior',
                                  86400 => '1 day prior',
                                 ),

  'task_priority_default' => 'Menengah',
  'task_priority_dom' =>
  array (
    'High' => 'Tinggi',
    'Medium' => 'Menengah',
    'Low' => 'Rendah',
  ),
  'task_status_default' => 'Belum Dimulai',
  'task_status_dom' =>
  array (
    'Not Started' => 'Belum Memulai',
    'In Progress' => 'Dalam Proses',
    'Completed' => 'Lengkap',
    'Pending Input' => 'Input Tertunda',
    'Deferred' => 'Menunda',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Merencanakan',
    'Held' => 'Mengadakan',
    'Not Held' => 'Tidak Mengadakan',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Lainnya',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Merencanakan',
    'Held' => 'Mengadakan',
    'Not Held' => 'Tidak Mengadakan',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Panggilan Masuk',
    'Outbound' => 'Panggilan Keluar',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Baru',
    'Assigned' => 'Ditugaskan',
    'In Process' => 'Dalam Proses',
    'Converted' => 'Dirubah',
    'Recycled' => 'Dikembalikan',
    'Dead' => 'Meninggal',
  ),
   'gender_list' =>
  array (
    'male' => 'Laki-laki',
    'female' => 'Perempuan',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Baru',
  'case_status_dom' =>
  array (
    'New' => 'Baru',
    'Assigned' => 'Ditugaskan',
    'Closed' => 'Ditutup',
    'Pending Input' => 'Input Tertunda',
    'Rejected' => 'Dinolak',
    'Duplicate' => 'Duplikat',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Tinggu',
    'P2' => 'Menengah',
    'P3' => 'Rendah',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Regular User',
    'Administrator' => 'Administrator',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Aktif',
    'Inactive' => 'Tidak Aktif',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Aktif',
    'Terminated' => 'Terminasi',
    'Leave of Absence' => 'Cuti Absen',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Tinggi',
        'Medium' => 'Menengah',
        'Low' => 'Rendah',
    ),
    'project_task_priority_default' => 'Menengah',

    'project_task_status_options' => array (
        'Not Started' => 'Belum Memulai',
        'In Progress' => 'Dalam Proses',
        'Completed' => 'Lengkap',
        'Pending Input' => 'Input Tertunda',
        'Deferred' => 'Menunda',
    ),
    'project_task_utilization_options' => array (
        '0' => 'Nihil',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Konsep',
        'In Review' => 'Dalam Tinjauan',
        'Underway' => 'Underway',
        'On_Hold' => 'On Hold',
        'Completed' => 'Lengkap',
    ),
    'project_status_default' => 'Konsep',

    'project_duration_units_dom' => array (
        'Days' => 'Hari',
        'Hours' => 'Jam',
    ),

    'project_priority_options' => array (
        'High' => 'Tinggi',
        'Medium' => 'Menengah',
        'Low' => 'Rendah',
    ),
    'project_priority_default' => 'Menengah',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Account',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Account',
    'Opportunities' => 'Peluang',
    'Cases' => 'Kasus',
    'Leads' => 'Lead',
    'Contacts' => 'Kontak', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Kerusakan',
    'Project' => 'Proyek',

    'Prospects' => 'Sasaran',
    'ProjectTask' => 'Tugas Proyek',


    'Tasks' => 'Tugas',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Account',
    'Contacts' => 'Kontak',
    'Opportunities' => 'Peluang',
    'Tasks' => 'Tugas',
    'Emails' => 'E-Mail',

    'Bugs' => 'Kerusakan',
    'Project' => 'Proyek',
    'ProjectTask' => 'Tugas Proyek',
    'Prospects' => 'Sasaran',
    'Cases' => 'Kasus',
    'Leads' => 'Lead',

    'Meetings' => 'Rapat',
    'Calls' => 'Panggilan',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Account',
    'Contacts' => 'Kontak',
    'Tasks' => 'Tugas',
    'Opportunities' => 'Peluang',



    'Bugs' => 'Kerusakan',
    'Cases' => 'Kasus',
    'Leads' => 'Lead',

    'Project' => 'Proyek',
    'ProjectTask' => 'Tugas Proyek',

    'Prospects' => 'Sasaran',

  ),

  'issue_priority_default_key' => 'Menengah',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Mendesak',
    'High' => 'Tinggi',
    'Medium' => 'Menengah',
    'Low' => 'Rendah',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Diterima',
    'Duplicate' => 'Duplikat',
    'Closed' => 'Ditutup',
    'Out of Date' => 'Kadaluwarsa',
    'Invalid' => 'Tidak Berlaku',
  ),

  'issue_status_default_key' => 'Baru',
  'issue_status_dom' =>
  array (
    'New' => 'Baru',
    'Assigned' => 'Ditugaskan',
    'Closed' => 'Ditutup',
    'Pending' => 'Ditunda',
    'Rejected' => 'Dinolak',
  ),

  'bug_priority_default_key' => 'Menengah',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Mendesak',
    'High' => 'Tinggi',
    'Medium' => 'Menengah',
    'Low' => 'Rendah',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Diterima',
    'Duplicate' => 'Duplikat',
    'Fixed' => 'Harga Tetap',
    'Out of Date' => 'Kadaluwarsa',
    'Invalid' => 'Tidak Berlaku',
    'Later' => 'Nanti',
  ),
  'bug_status_default_key' => 'Baru',
  'bug_status_dom' =>
  array (
    'New' => 'Baru',
    'Assigned' => 'Ditugaskan',
    'Closed' => 'Ditutup',
    'Pending' => 'Ditunda',
    'Rejected' => 'Dinolak',
  ),
   'bug_type_default_key' => 'Kerusakan',
  'bug_type_dom' =>
  array (
    'Defect' => 'Kerusakan',
    'Feature' => 'Fitur',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Administrasi',
    'Product' => 'Produk',
    'User' => 'Pemakai',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Internal',
    'Forum' => 'Forum',
    'Web' => 'Web',
    'InboundEmail' => 'Email Masuk'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Rekening',
    'Activities' => 'Aktivitas',
    'Bugs' => 'Kerusakan',
    'Calendar' => 'Kalender',
    'Calls' => 'Panggilan',
    'Campaigns' => 'Kampanye',
    'Cases' => 'Kasus',
    'Contacts' => 'Kontak',
    'Currencies' => 'Kurs',
  'Dashboard' => 'Dashboard',
  'Documents' => 'Dokumen',
    'Emails' => 'Emails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Perkiraan',
    'Help' => 'Help',
    'Home' => 'Rumah',
  'Leads' => 'Lead',
  'Meetings' => 'Rapat',
    'Notes' => 'Catatan',
    'Opportunities' => 'Peluang',
    'Outlook Plugin' => 'Outlook Plugin',
    'Projects' => 'Proyek',
    'Quotes' => 'Penawaran',
    'Releases' => 'Rilis',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Upgrade',
    'Users' => 'Pemakai',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Perencanaan',
        'Active' => 'Aktif',
        'Inactive' => 'Tidak Aktif',
        'Complete' => 'Lengkap',
        'In Queue' => 'Dalam Antrian',
        'Sending'=> 'Mengirim',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telesales',
        'Mail' => 'Surat',
        'Email' => 'E-Mail',
        'Print' => 'Cetak',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'TV',
        'NewsLetter' => 'Koran',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Mingguan',
        'Monthly' => 'Bulanan',
        'Quarterly' => 'Tiga Bulanan',
        'Annually' => 'Tahunan',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"January",
                '2'=>"February",
                '3'=>"Mar",
                '4'=>"Apr",
                '5'=>"Mei",
                '6'=>"Jun",
                '7'=>"Jul",
                '8'=>"Agu",
                '9'=>"Sep",
                '10'=>"Okt",
                '11'=>"Nov",
                '12'=>"Des",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Jan",
                '2'=>"Feb",
                '3'=>"Mar",
                '4'=>"Apr",
                '5'=>"Mei",
                '6'=>"Jun",
                '7'=>"Jul",
                '8'=>"Aug",
                '9'=>"Sep",
                '10'=>"Oct",
                '11'=>"Nov",
                '12'=>"Dec",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Minggu",
                '2'=>"Senin",
                '3'=>"Selasa",
                '4'=>"Rabu",
                '5'=>"Kamis",
                '6'=>"Jum'at",
                '7'=>"Sabtu",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"Sun",
                '2'=>"Mon",
                '3'=>"Tue",
                '4'=>"Wed",
                '5'=>"Thu",
                '6'=>"Fri",
                '7'=>"Sat",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"am",
                'pm'=>"pm"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'AM',
                 'PM'=>'PM'
        ),

    'dom_report_types'=>array(
                'tabular'=>'Rows and Columns',
                'summary'=>'Rangkuman',
                'detailed_summary'=>'Rangkuman dan Rincian',
                'Matrix' => 'Matriks',
        ),


    'dom_email_types'=> array(
        'out'       => 'Kirim',
        'archived'  => 'Arsip',
        'draft'     => 'Konsep',
        'inbound'   => 'Panggilan Masuk',
        'campaign'  => 'Kampanye'
    ),
    'dom_email_status' => array (
        'archived'  => 'Arsip',
        'closed'    => 'Berakhir',
        'draft'     => 'Konsep',
        'read'      => 'Baca',
        'replied'   => 'Balas',
        'sent'      => 'Kirim',
        'send_error'=> 'Kirim Kesalahan',
        'unread'    => 'Belum Dibaca',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Arsip',
    ),

    'dom_email_server_type' => array(   ''          => '--None--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--None--',
                                     'createcase'  => 'Buat Kasus',
                                     'bounce'   => 'Penanganan Bounce',
    ),
    'dom_email_distribution'=> array(''             => '--None--',
                                     'direct'       => 'Menugaskan Langsung',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_errors'      => array(1 => 'Only select one user when Direct Assigning items.',
                                     2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Ya',
                                     'bool_false' => 'Tidak',
    ),
    'dom_int_bool'          => array(1 => 'Ya',
                                     0 => 'Tidak',
    ),
    'dom_switch_bool'       => array ('on' => 'Ya',
                                        'off' => 'Tidak',
                                        '' => '--None--', ),

    'dom_email_link_type'   => array(   'sugar'     => 'SuiteCRM Email Client',
                                        'mailto'    => 'Mail Client Eksternal'),


    'dom_email_editor_option'=> array(  ''          => '--None--',
                                        'html'      => 'HTML Email',
                                        'plain'     => 'Email Teks'),

    'schedulers_times_dom'  => array(   'not run'       => 'Past Run Time, Tidak Dieksekusi',
                                        'ready'         => 'Siap',
                                        'in progress'   => 'Dalam Proses',
                                        'failed'        => 'Gagal',
                                        'completed'     => 'Lengkap',
                                        'no curl'       => 'Tidak Jalan: Tidak ada cURL yang tersedia',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Aktif',
        'Inactive' => 'Tidak Aktif',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Menit',
        'hour' => 'Jam',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Aktif',
    'Inactive' => 'Tidak Aktif',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Langsung',
    'Rollup' => 'Rollup',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Pemasaran',
    'Knowledege Base' => 'Knowledge Base',
    'Sales' => 'Penjualan',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Agunan Pemasaran',
    'Product Brochures' => 'Brosur Produk',
    'FAQ' => 'FAQ',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Aktif',
    'Draft' => 'Konsep',
    'FAQ' => 'FAQ',
    'Expired' => 'Kadaluwarsa',
    'Under Review' => 'Sedang di-review',
    'Pending' => 'Ditunda',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Mail Merge',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'License Agreement',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Diterima',
    'decline' => 'Decline',
    'tentative' => 'Sementara',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Diterima',
    'decline' => 'Declined',
    'tentative' => 'Sementara',
    'none'      => 'None',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => '--None--',
    	'Daily'	=> 'Daily',
	'Weekly' => 'Mingguan',
	'Monthly' => 'Bulanan',
	'Yearly' => 'Yearly',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'day(s)',
        'Weekly' => 'week(s)',
        'Monthly' => 'month(s)',
        'Yearly' => 'year(s)',
    ),

    'duration_dom' => array(
    	'' => '--None--',
    	'900' => '15 minutes',
	'1800' => '30 minutes',
	'2700' => '45 minutes',
	'3600' => '1 hour',
	'5400' => '1.5 hours',
	'7200' => '2 hours',
	'10800' => '3 hours',
	'21600' => '6 hours',
	'86400' => '1 day',
	'172800' => '2 days',
	'259200' => '3 days',
	'604800' => '1 week',
    ),

// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
    'Users' => 'Users',
    'Mailbox' => 'Mailbox',
),
*/
//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'Default',
    'seed' => 'Seed',
    'exempt_domain' => 'Daftar Singkat - Dengan Domain',
    'exempt_address' => 'Daftar Singkat - Dengan Email Address',
    'exempt' => 'Daftar Singkat - Dengan ID',
    'test' => 'Test',
  ),

  'email_settings_num_dom' =>
  array(
        '10'    => '10',
        '20'    => '20',
        '50'    => '50'
    ),
  'email_marketing_status_dom' =>
  array (
    '' => '',
    'active'=>'Aktif',
    'inactive'=>'Tidak Aktif'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Pesan Terkirim/Mencoba',
    'send error'=>'Pesan Tidak Terkirim, Lainnya',
    'invalid email'=>'Pesan Tidak Terkirim, Email tidak valid',
    'link'=>'Click-thru Link',
    'viewed'=>'Lihat Pesan',
    'removed'=>'Dihapus',
    'lead'=>'Buat Leads',
    'contact'=>'Buat Kontak',
    'blocked'=>'Diblokir oleh DOmain',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Kontak',
    'Users'=>'Pemakai',
    'Prospects'=>'Target',
    'Leads'=>'Lead',
    'Accounts'=>'Rekening',
  ),
  'merge_operators_dom' => array (
    'like'=>'Yang Termasuk',
    'exact'=>'Exactly',
    'start'=>'Starts With',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Ya',
    'false'=>'Tidak',
    'required'=>'Required',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Tidak Diaktifkan',
        '1'=>'Low Boost',
        '2'=>'Medium Boost',
        '3'=>'High Boost',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Tidak Diaktifkan',
        1=>'Diaktifkan',
  ),

  'navigation_paradigms' => array(
        'm'=>'Modul',
        'gm'=>'Grup Modul',
  ),


    'projects_priority_options' => array (
        'high'      => 'Tinggi',
        'medium'    => 'Menengah',
        'low'       => 'Rendah',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Belum Dimulai',
        'inprogress'    => 'Sedang Dibuat',
        'completed'     => 'Lengkap',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Tampilkan Semua Legenda',
        'collapselegend'    => 'Sembunyikan Semua Legenda',
        'clickfordrilldown' => 'Klik untuk Click for Menyelusuri',
        'drilldownoptions'  => 'Pilihan Penelusuran',
        'detailview'        => 'Lebih Detil',
        'piechart'          => 'Pie Chart',
        'groupchart'        => 'Group Chart',
        'stackedchart'      => 'Stacked Chart',
        'barchart'      => 'Bar Chart',
        'horizontalbarchart'   => 'Horizontal Bar Chart',
        'linechart'         => 'Line Chart',
        'noData'            => 'Data tidak tersedia',
        'print'       => 'Cetak',
        'pieWedgeName'      => 'Bagian',
    ),
    'release_status_dom' =>
    array (
        'Active' => 'Aktif',
        'Inactive' => 'Tidak Aktif',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Tanda Kutip 1 ',
        '"' => 'Tanda Kutip 2 (")',
        '' => '--None--',
        'other' => 'Lainnya:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Lainnya:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Window Baru',
        '_self' => 'Window yang sama',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => 'Secara Manual',
        '30'  => 'Every 30 seconds',
        '60'  => 'Setiap Jam',
        '180'   => 'Every 3 minutes',
        '300'   => 'Every 5 minutes',
        '600'   => 'Every 10 minutes',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Tidak Pernah',
        '30'  => 'Every 30 seconds',
        '60'  => 'Setiap Jam',
        '180'   => 'Every 3 minutes',
        '300'   => 'Every 5 minutes',
        '600'   => 'Every 10 minutes',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'Equals',
    'not_equal' => 'Not On',
    'greater_than' => 'Sesudah',
    'less_than' => 'Sebelum',
    'last_7_days' => '7 hari terakhir',
    'next_7_days' => '7 hari ke depan',
    'last_30_days' => '30 Hari Terakhir',
    'next_30_days' => '30 hari ke depan',
    'last_month' => 'Bulan Lalu',
    'this_month' => 'Bulan Ini',
    'next_month' => 'Bulan Depan',
    'last_year' => 'Tahun Lalu',
    'this_year' => 'Tahun Ini',
    'next_year' => 'Tahun Depan',
    'between' => 'Diantara',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'Equals',
    'not_equal' => 'Does Not Equal',
    'greater_than' => 'Greater Than',
    'greater_than_equals' => 'Greater Than Or Equal To',
    'less_than' => 'Less Than',
    'less_than_equals' => 'Less Than Or Equal To',
    'between' => 'Diantara',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Copy',
        'move' => 'Move',
        'donothing' => 'Do Nothing',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Berikutnya',
  'LBL_TOUR_SKIP' => 'Lewat',
  'LBL_TOUR_BACK' => 'Kembali',
  'LBL_TOUR_CLOSE' => 'Tutup',
  'LBL_TOUR_TAKE_TOUR' => 'Take the tour',
  'LBL_MY_AREA_LINKS' => 'My area links: ' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Selamat Datang' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Pencarian Lanjut' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'More Detail' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Edit Inline' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Lihat' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Cari' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Menghapus' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Tambah' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Column' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 Columns' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 kolom' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Pencarian Lanjut' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Tambah' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Hide/Show' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Hapus' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Tambah' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Bersihkan [Alt+C]' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Menghapus' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Tambah' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Company logo' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Kalender' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Melanjutkan',
    'LBL_BASIC' => 'Basic',
    'LBL_MODULE_FILTER' => 'Filter By',
    'LBL_CONNECTORS_POPUPS'=>'Connectors Popups',
    'LBL_CLOSEINLINE'=>'Tutup',
    'LBL_EDITINLINE'=>'Edit',
    'LBL_VIEWINLINE'=>'Lihat',
    'LBL_INFOINLINE'=>'Info',
    'LBL_POWERED_BY_SUGARCRM' => 'Powered by SugarCRM',
    'LBL_PRINT' => 'Cetak',
    'LBL_HELP' => 'Membantu',
    'LBL_ID_FF_SELECT' => 'Pilih [Alt+T]',
    'DEFAULT'                              => 'Basic',
    'LBL_SORT'                              => 'Sortir',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Tambah Server...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'Mampukan SMTP lewat SSL atau TLS',
    'LBL_NO_ACTION'                         => 'Tidak ada tindakan.',
    'LBL_NO_DATA'                           => 'Tidak Ada Data',
    'LBL_ROUTING_ADD_RULE'                  => 'Tambah Aturan',
    'LBL_ROUTING_ALL'                       => 'Semua',
    'LBL_ROUTING_ANY'                       => 'Apa Saja',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Cancel',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Simpan Peraturan',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Salin Pesan',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Delete SuiteCRM Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Hapus Arsip',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Hapus E-Mail',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Teruskan E-Mail',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Bendera E-Mail',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Tandai Baca',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Tandai Belum Dibaca',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Pindahkan E-Mail',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Perform the following actions',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Balas ke E-Mail',

    'LBL_ROUTING_CHECK_RULE'                => 'Kesalahan Terdeteksi:\n',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Mohon verifikasi semua kolom yang diberi tanda.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Anda yakin ingin menghapus peraturan ini?\nData yang telah dihapus tidak dapat dikembalikan.',

    'LBL_ROUTING_FLAGGED'                   => 'Set Bendera',
    'LBL_ROUTING_FORM_DESC'                 => 'Simpan peraturan segera aktif.',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Peraturan',
    'LBL_ROUTING_MATCH'                     => 'Jika',
    'LBL_ROUTING_MATCH_2'                   => 'Semua kondisi dibawah ini terpenuhi:',
    'LBL_NOTIFICATIONS'                     => 'Notifikasi',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Body Content',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'Dari',
    'LBL_ROUTING_MATCH_NAME'                => 'Subjek',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Prioritas Tinggi',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Prioritas Normal',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Prioritas Rendah',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'Kepada',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Yang Termasuk',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Yang Tidak Termasuk',

    'LBL_ROUTING_NAME'                      => 'Nama Peraturan',
    'LBL_ROUTING_NEW_NAME'                  => 'Peraturan Baru',
    'LBL_ROUTING_ONE_MOMENT'                => 'Mohon tunggu sebentar...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Original message follows.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Simpan Peraturan',
    'LBL_ROUTING_SUB_DESC'                  => 'Periksa peraturan yang aktif. Klik nama untuk edit.',
    'LBL_ROUTING_TO'                        => 'Kepada',
    'LBL_ROUTING_TO_ADDRESS'                => 'Kepada Alamat',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'Dengan template',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Anda telah mengisi data nomor Telepon dan alamat di form yang ada. Untuk menggantikan data yang ada dengan data nomor Telepon dan alamat yang baru , klik "Oke". Untuk tetap menggunakan data yang telah ada, klik "Batal".',
  'LBL_DROP_HERE' => '[Drop Here]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Edit',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Set Gmail Defaults',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Nama',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Outbound Mail Server',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Mail transfer agent',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Use SMTP Authentication?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Password',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Use SSL when connecting',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Username',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Default',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Warning: Tidak ada username dan password untuk outgoing mail account.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'Username SMTP dibutuhkan',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'Password SMTP dibutuhkan',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Manajemen Account Email',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Protokol Mail Server POP3 tidak akan didukung di keluaran SugarCRM terbaru. Hanya IMAP yang akan didukung.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'Mengatur account Email untuk melihat email masuk dari Email Account Anda.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'Isi informasi SMTP mail server untuk email keluar di Account Email.',
    'LBL_EMAIL_ADD'                         => 'Tambah Alamat',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Tambah',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Hapus',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'To:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Daftar Baru',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Alamat E-Mail',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Hanya edit kontak yang didukung saat ini.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Nama Pertama',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Nama Terakhir',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Kontak Saya',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Daftar Pesan Saya',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Nama',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Alamat Tidak Ditemukan',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Simpan & Tambah ke Buku Alamat',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Cari',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Pilih Catatan Buku Alamat',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Buku Alamat',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Laporan',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Peringatan! Account Surat Keluar yang ingin Anda hapus terkait dengan account Surat Masuk yang sudah ada. Anda yakin ingin melanjutkan?',
    'LBL_EMAIL_ADDRESSES'                   => 'Alamat E-Mail',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Alamat E-Mail Utama',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Alamat E-Mail',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Import to SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Menugaskan',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Lampiran',
    'LBL_EMAIL_ATTACHMENT'                  => 'Lampiran',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Dari System Lokal',
    'LBL_EMAIL_ATTACHMENTS2'                => 'From SuiteCRM Documents',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Lampiran Template',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Arsip',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Dokumen',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Embeded',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Batal',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Set Karakter',
    'LBL_EMAIL_CHECK'                       => 'Cek Pesan',
    'LBL_EMAIL_CHECKING_NEW'                => 'Cek Pesan Baru',
    'LBL_EMAIL_CHECKING_DESC'               => 'Cek Pesan Baru. <br><br>If this is the first check for the mail account, it may take some time.',
    'LBL_EMAIL_CLOSE'                       => 'Berakhir',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Cek Pesan Baru. <br><br>Large mail accounts may take a considerable amount of time.',
    'LBL_EMAIL_COMMON'                      => 'Common',

    'LBL_EMAIL_COMPOSE'                     => 'Tulis Pesan',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Mohon isi penerima pesan ini.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Rekanan Dengan',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Isi pesan ini kosong.  Tetap dikirim?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Pesan ini tidak bersubyek.  Tetap dikirim?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(Tidak Bersubyek)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Baca & Tulis Pesan',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Kirim dari Account Pesan',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Pilihan',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Mohon masukkan alamat E-Mail yang valid untuk kolom Kepada, CC dan BCC',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Buang pesan ini?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Buang catatan ini dari buku alamat anda?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Anda yakin mau menghapus tanda-tangan ini?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Create On Save--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Multiple',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Kosong',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Tanggal Kirim Oleh Pengirim',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Tanggal Terima',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'Menugaskan ke Pengguna',
    'LBL_EMAIL_DATE_TODAY'                  => 'Hari ini',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Kemarin',
    'LBL_EMAIL_DD_TEXT'                     => 'Pesan dipilih.',
    'LBL_EMAIL_DEFAULTS'                    => 'Defaults',
    'LBL_EMAIL_DELETE'                      => 'Hapus',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Hapus pesan yang dipilih?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Pesan sukses dihapus.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Hapus Pesan',
    'LBL_EMAIL_DETAILS'                     => 'Detail',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Tampilkan pesan {0} - {1} of {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Tampilkan alamat pesan {0} - {1} of {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Edit Kontak',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Hanya alamat utama yang digunakan dengan Kontak saat bekerja.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Edit Daftar Pesan',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Kosongkan Sampah',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Menghapus outbound server',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Clearing cache files',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Tidak ada pesan untuk ditampilkan.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Tidak ada alamat pesan untuk ditampilkan.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Folder tidak dapat dihapus. Hal ini dikarenakan didalam folder ataupun subfolder tersebut terdapat sebuah mail box yang sehubungan dengan itu.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Tidak dapat menentukan intended folder dari konteks.  Coba lagi.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Mohon cek settings anda.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Mohon pastikan anda memasukkan nama terakhir.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Kesalahan dideteksi: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Anda tidak memiliki akses ke area ini. Hubungi administrator anda untuk untuk mendapat akses.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'SuiteCRM Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Mohon masukkan kriteria pencarian.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Terjadi kesalahan',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Daftar pesan dengan nama itu sudah ada',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Pesan dihapus dari Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Pesan dihapus dari Server atau pindah ke map lain',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Sambungan ke server pesan gagal. Mohon hubungi administrator anda',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Memindahkan email antara server dan/atau account email tidak berjalan saat ini.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Pemindahan Error',
    'LBL_EMAIL_ERROR_NAME'                  => 'Nama diperlukan.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Alamat dari diperlukan.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Please provide a file.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP folder renaming is not supported at this time.',
    'LBL_EMAIL_ERROR_SERVER'                => 'Alamat server Email diperlukan.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'Account Email mungkin belum tersimpan.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Ada Error yang muncul saat berkomunikasi dengan Server Email.',
    'LBL_EMAIL_ERROR_USER'                  => 'Login Name diperlukan.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'Password diperlukan.',
    'LBL_EMAIL_ERROR_PORT'                  => 'Port server pesan diperlukan.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'Protokol server diperlukan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Monitored Folder diperlukan.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Folder sampah diperlukan.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Informasi ini tidak tersedia',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'Tidak ada server Outgoing Email yang dikonfigurasi.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Folders',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Pindah ke',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Tambah',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Tambah Folder Baru',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Ubah nama Folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Simpan',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Tambah Folder ini ke',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Folder ini tidak bisa dirubah',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Anda yakin akan menghapus folder ini?\nData yang telah dihapus tidak dapat dikembalikan.\nPenghapusan terhadap folder juga akan dilakukan terhadap subfolder didalamnya.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Nama Folder Baru',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Silahkan pilih sebuah folder sebelum melakukan aksi ini.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Manajemen Folder',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Menggunakan Grup',

    'LBL_EMAIL_FORWARD'                     => 'Forward',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Unduh [[count]] dari [[total]] pesan',
    'LBL_EMAIL_FOUND'                       => 'Ditemukan',
    'LBL_EMAIL_FROM'                        => 'Dari',
    'LBL_EMAIL_GROUP'                       => 'group',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Group',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Rumah',
    'LBL_EMAIL_HTML_RTF'                    => 'Kirim HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Hapus Account Pesan',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Hapus tanda-tangan',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Anda yakin akan menghapus Account pesan ini?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Penghapusan berhasil dilakukan.',
    'LBL_EMAIL_IE_SAVE'                     => 'Simpan Informasi Account Pesan',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Mengimpor Email',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Import to SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Pengaturan Import',
    'LBL_EMAIL_INVALID'                     => 'Tidak Valid',
    'LBL_EMAIL_LOADING'                     => 'Memuat...',
    'LBL_EMAIL_MARK'                        => 'Tanda',
    'LBL_EMAIL_MARK_FLAGGED'                => 'Bendera',
    'LBL_EMAIL_MARK_READ'                   => 'Baca',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'Tidak berbendera',
    'LBL_EMAIL_MARK_UNREAD'                 => 'Tidak dibaca',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Assign To',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Buat Folder',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Buat ke',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Hapus Folder',
    'LBL_EMAIL_MENU_EDIT'                   => 'Edit',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Kosongkan Sampah',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Synchronize',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Bersihkan arsip cache',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Menghapus',
    'LBL_EMAIL_MENU_RENAME'                 => 'Ganti Nama',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Ganti Nama Folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Ganti Nama Folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Please make a selection before trying this operation.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archive these email(s) to SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Kirimkan Email ke Mailing Lists yang terpilih',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Kirim pesan Kontak ini',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Hapus Kontak',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Hapus Pesan ini',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Edit Kontak',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Edit Daftar Pesan',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Kosongkan semua map sampah untuk Account pesan anda',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Tandai pesan ini bendera',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Tandai pesan ini baca',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Tandai pesan ini tidak berbendera',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Tandai pesan ini tidak dibaca',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Hapus Daftar Pesan',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Rename a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Balas ke pesan ini',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Balas ke semua penerima pesan ini',

    'LBL_EMAIL_MESSAGES'                    => 'pesan',

    'LBL_EMAIL_ML_NAME'                     => 'Daftar Nama',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Pilih Daftar Alamat',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Daftar Alamat Tersedia',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Klik</b> untuk memilih lebih dari 1 <br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO'                          => 'Tidak',
    'LBL_EMAIL_NOT_SENT'                    => 'Sistem tidak bisa memproses request Anda. Silahkan hubungi Administrator Sistem. ',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Mohon Tunggu Sebentar...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Membuka Beberapa Email',
    'LBL_EMAIL_OPTIONS'                     => 'Pilihan',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Compose Cepat',
    'LBL_EMAIL_OPT_OUT'                     => 'Dihapus',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Opted Out and Invalid',
    'LBL_EMAIL_PAGE_AFTER'                  => 'dari {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Halaman',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Melakukan Tugas',
    'LBL_EMAIL_PRIMARY'                     => 'Utama',
    'LBL_EMAIL_PRINT'                       => 'Cetak',

    'LBL_EMAIL_QC_BUGS'                     => 'Kerusakan',
    'LBL_EMAIL_QC_CASES'                    => 'Kasus',
    'LBL_EMAIL_QC_LEADS'                    => 'Lead',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Kontak',
    'LBL_EMAIL_QC_TASKS'                    => 'Tugas',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Peluang',
    'LBL_EMAIL_QUICK_CREATE'                => 'Buat Cepat',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Membuat Ulang Folders',
    'LBL_EMAIL_RELATE_TO'                   => 'Hubungkan',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Lihat relasi',
    'LBL_EMAIL_RECORD'                => 'record Email',
    'LBL_EMAIL_REMOVE'                      => 'Hapus',
    'LBL_EMAIL_REPLY'                       => 'Balas',
    'LBL_EMAIL_REPLY_ALL'                   => 'Balas Semua',
    'LBL_EMAIL_REPLY_TO'                    => 'Balas ke',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Mengakses Email List',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Mengakses Message',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Mengakses Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Silahkan pilih hanya satu record email',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Kembali ke modul sebelumnya?',
    'LBL_EMAIL_REVERT'                      => 'Kembalikan',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Email Terkait',

    'LBL_EMAIL_RULES_TITLE'                 => 'Manajemen Peraturan',

    'LBL_EMAIL_SAVE'                        => 'Simpan',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Simpan & Balas',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Simpan Konsep',

    'LBL_EMAIL_SEARCHING'                   => 'Melakukan Pencarian',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Pencarian Lanjut',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Dari Tanggal',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Sampai Tanggal',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Teks Body',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Tidak ada hasil dari kriteria pencarian yang dimasukkan.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Hasil Pencarian',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Pencarian Sederhana',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Pencarian Account Email',

    'LBL_EMAIL_SELECT'                      => 'Pilih',

    'LBL_EMAIL_SEND'                        => 'Kirim',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Kirim Pesan',

    'LBL_EMAIL_SETTINGS'                    => 'Pengaturan',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 baris',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 kolom',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Layout Style',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Email Accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Kosongkan Form',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Impor Email Saat Dilihat',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Cek Pesan Baru',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Gunakan Preview Pane',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Gunakan Popup Window',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Jumlah Email per halaman',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Edit Email Account',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Folder',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Dari Alamat',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Alamat Email untuk tes notifikasi:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'Alamat Email Tujuan',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Dari Nama',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Balas ke Alamat',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Full Screen',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Sinkronisasi Semua Email Account',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'Sebuah email telah dikirim ke alamat email menggunakan setting email yang ada. Silahkan cek apakah email tersebut telah diterima, dengan tujuan untuk melihat apakah pengaturannya sudah benar.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Aksi ini akan mensinkronisasi Email Account dan isinya.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Lakukan sinkronisasi penuh?\n Email Account yang berukuran besar akan membutuhkan waktu lama.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Klik tombol Shift or tombol Ctrl untuk memilih lebih dari 1 folder.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'General',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Group Folder yang tersedia',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Buat Group Folder',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Simpan Group Folder',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Mengakses Group Folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edit Group Folder',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Nama',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Pengaturan ini akan membutuhkan halaman ini untuk di-refresh.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Mengakses Email Account',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Peraturan',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Pengaturan ini telah disimpan.\n\nAnda harus me-refresh halaman ini untuk melihat hasil/perubahannya.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Kirim Pesan sebagai Plain Text',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Email Account Aktif',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Jumlah email per halaman',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Letakkan Tabs di Bawah',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Pengaturan Visual',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Preferensi',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Tampilkan Advanced',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'User Folders yang ada',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Error Mengirim Email:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Outbound mail server yang dipilih untuk Email Account yang Anda gunakan salah. Periksa pengaturannya atau pilih mail server yang berbeda untuk Email Account tersebut.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Outband mail server belum dikonfigurasi untuk Outgoing Email Account yang Anda gunakan. Silahkan pilih outband mail server yang lain atau tambah yang baru untuk Email account tersebut.',
    'LBL_EMAIL_SHOW_READ'                   => 'Tampilkan Semua',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Tampilkan Hanya yang belum dibaca',
    'LBL_EMAIL_SIGNATURES'                  => 'Tanda-tangan',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Buat Tanda-tangan',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Nama Tanda-tangan',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Isi Tanda-tangan',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Lain',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Remote Folders ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ SuiteCRM Folders ]',
    'LBL_EMAIL_SUBJECT'                     => 'Subjek',
    'LBL_EMAIL_SUCCESS'                     => 'Sukses',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Isi dari template email masih kosong',
    'LBL_EMAIL_TEMPLATES'                   => 'Templates',
    'LBL_EMAIL_TEXT_FIRST'                  => 'Halaman Pertama',
    'LBL_EMAIL_TEXT_PREV'                   => 'Halaman Sebelumnya',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Halaman Selanjutnya',
    'LBL_EMAIL_TEXT_LAST'                   => 'Halaman Terakhir',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Refresh',
    'LBL_EMAIL_TO'                          => 'Kepada',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Toggle List',
    'LBL_EMAIL_VIEW'                        => 'Lihat',
    'LBL_EMAIL_VIEWS'                       => 'Lihat',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Tampilkan Headers',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Versi Printable',
    'LBL_EMAIL_VIEW_RAW'                    => 'Tampilkan Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Fitur ini bisa dijalankan jika menggunakan POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Default link text.',
    'LBL_EMAIL_YES'                         => 'Ya',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Kirim Email untuk test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email telah dikirim',
    'LBL_EMAIL_MESSAGE_NO'                  => 'Tidak ada Pesan. ',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Import Berhasil',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Import Gagal karena pesan ini telah di-import atau dihapus dari server',

    'LBL_LINK_NONE'=> 'Tak Satupun',
    'LBL_LINK_ALL'=> 'Semua',
    'LBL_LINK_RECORDS'=> 'Record',
    'LBL_LINK_SELECT'=> 'Pilih',
    'LBL_LINK_ACTIONS'=> 'Aksi',
    'LBL_LINK_MORE'=> 'lebih banyak',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Confirm",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "Do you want to close this #module#?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Do not display this message in the future: &nbsp;",
    'LBL_INVALID_FILE_EXTENSION' => 'Invalid File Extension',


    'ERR_AJAX_LOAD'     => 'An error has occurred:',
    'ERR_AJAX_LOAD_FAILURE'     => 'There was an error processing your request, please try again at a later time.',
    'ERR_AJAX_LOAD_FOOTER' => 'If this error persists, please have your administrator disable Ajax for this module',
    'ERR_CREATING_FIELDS' => 'Gagal membuat kolom: ',
    'ERR_CREATING_TABLE' => 'Gagal membuat tabel: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "Pemisah desimal tidak bisa memakai karakter yang sama dengan pemisah ribuan. \n\n  Silahkan diubah nilainya.",
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'ERR_EXPORT_DISABLED' => 'Exports Tidak Diaktifkan.',
    'ERR_EXPORT_TYPE' => 'Error saat mengekspor ',
    'ERR_INVALID_AMOUNT' => 'Mohon masukkan jumlah yang valid.',
    'ERR_INVALID_DATE_FORMAT' => 'Format tanggal harus: ',
    'ERR_INVALID_DATE' => 'Mohon masukkan tanggal yang valid.',
    'ERR_INVALID_DAY' => 'Mohon masukkan hari yang valid.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Alamat Email tidak valid.',
    'ERR_INVALID_FILE_REFERENCE' => 'Referensi file tidak valid',
    'ERR_INVALID_HOUR' => 'Mohon masukkan jam yang valid.',
    'ERR_INVALID_MONTH' => 'Mohon masukkan bulan yang valid.',
    'ERR_INVALID_TIME' => 'Mohon masukkan waktu yang valid.',
    'ERR_INVALID_YEAR' => 'Mohon masukkan 4 angka tahun.',
    'ERR_NEED_ACTIVE_SESSION' => 'Sesi yang aktif diperlukan untuk mengekspor.',
    'ERR_NO_HEADER_ID' => 'Fitur ini tidak tersedia di theme ini.',
    'ERR_NOT_ADMIN' => "Tidak memiliki akses untuk administrasi.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Field yang dibutuhkan tidak ada:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Field yang dibutuhkan salah:',
    'ERR_INVALID_VALUE' => 'Nilai tidak valid:',
    'ERR_NO_SUCH_FILE' =>'File tidak ada di dalam sistem',
    'ERR_NO_SINGLE_QUOTE' => 'Tidak bisa memakai tanda kutip tunggal untuk ',
    'ERR_NOTHING_SELECTED' =>'Silahkan memilih sebelum melanjutkan.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Sebuah peluang dengan nama tersebut sudah ada. Silahkan memasukkan nama lainnya di bawah.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Nama peluang belum dimasukkan. Silahkan memasukkan nama peluang di bawah.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Pengguna tidak bisa melapor ke dirinya sendiri.',
    'ERR_SINGLE_QUOTE'  => 'Field ini tidak diperbolehkan menggunakan tanda kutip tunggal. Silahkan mengubah nilainya.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Tidak ada yang cocok untuk field: ',
    'ERR_SQS_NO_MATCH' =>'Tidak Cocok',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Mohon dibuat spesifik \'key\' index di displayParams attribute untuk definisi  Meta-Data',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Error: Nama portal tersebut sudah di-assign ke kontak lain.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Nilai field tidak kompatibel dengan nilai presisi',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'An error occurred while uploading.  Please ensure the file you are uploading is not empty.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to SuiteCRM error log file for details.',
    'ERR_DB_FAIL' => 'Database failure. Please refer to SuiteCRM error log file for details.',
    'ERR_EXTERNAL_API_403' => 'Permission Denied. File type is not supported.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth Access Token is missing.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} files may only be used with a SuiteCRM {1} database.',


    'LBL_ACCOUNT'=>'Account',
    'LBL_OLD_ACCOUNT_LINK'=>'Accounts Lama',
    'LBL_ACCOUNTS'=>'Account',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktivitas',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'j',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Lihat Ringkasan',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Lihat Ringkasan [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Tambah [Alt+A]',
    'LBL_ADD_BUTTON' => 'Tambah',
    'LBL_ADD_DOCUMENT' => 'Tambah Dokumen',
    'LBL_REPLACE_BUTTON' => 'Gantikan',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Tambah ke Daftar Sasaran',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Tambah ke Daftar Sasaran',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klik untuk Menutup',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Menutup',
    'LBL_ADDITIONAL_DETAILS' => 'Rincian Tambahan',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arsip',
    'LBL_ASSIGNED_TO_USER'=>'Menugaskan ke Pengguna',
    'LBL_ASSIGNED_TO' => 'Menugaskan ke:',
    'LBL_BACK' => 'Kembali',
    'LBL_BILL_TO_ACCOUNT'=>'Tagihan ke Account',
    'LBL_BILL_TO_CONTACT'=>'Tagihan ke Kontak',
    'LBL_BILLING_ADDRESS'=>'Alamat Tagihan',
    'LBL_QUICK_CREATE_TITLE' => 'Buat Cepat',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS'=>'Kerusakan',
    'LBL_BY' => 'Oleh',
    'LBL_CALLS'=>'Panggilan',
    'LBL_CALL'=>'Panggilan',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Kirim Antrian Pesan Kampanye',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Submit',
    'LBL_CASE'=>'Kasus',
    'LBL_CASES'=>'Kasus',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Change password',
    'LBL_CHANGE_BUTTON_LABEL' => 'Ganti',
    'LBL_CHANGE_BUTTON_TITLE' => 'Ganti [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Cek Semua',
    'LBL_CITY' => 'Kota',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Bersihkan',
    'LBL_CLEAR_BUTTON_TITLE' => 'Bersihkan [Alt+C]',
    'LBL_CLEARALL' => 'Bersihkan Semua',
    'LBL_CLOSE_BUTTON_TITLE' =>'Tutup',
    'LBL_CLOSE_BUTTON_KEY'=>'C',
    'LBL_CLOSE_WINDOW'=>'Tutup Jendela',
    'LBL_CLOSEALL_BUTTON_KEY' => 'C',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Tutup Semua',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Tutup Semua [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Tutup dan Buat Baru',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Tutup dan Buat Baru',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Tulis Pesan',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Tulis Pesan [Alt+L]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Ya',
    'LBL_SEARCH_DROPDOWN_NO'=>'Tidak',
    'LBL_CONTACT_LIST' => 'Daftar Kontak',
    'LBL_CONTACT'=>'Kontak',
    'LBL_CONTACTS'=>'Kontak',
    'LBL_CONTRACTS'=>'Kontrak',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_CREATE_BUTTON_LABEL' => 'Buat',
    'LBL_CREATED_BY_USER'=>'Dibuat oleh Pemakai',
    'LBL_CREATED_USER'=>'Dibuat oleh Pemakai',
    'LBL_CREATED_ID' => 'Dibuat oleh Id',
    'LBL_CREATED' => 'Dibuat oleh',
    'LBL_CURRENT_USER_FILTER' => 'Item Saya:',
    'LBL_CURRENCY'=>'Mata Uang:',
    'LBL_DOCUMENTS'=>'Dokumen',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat:',
    'LBL_DATE_MODIFIED' => 'Tanggal Diubah:',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_DUPLICATE_BUTTON' => 'Duplikat',
    'LBL_DELETE_BUTTON' => 'Hapus',
    'LBL_DELETE' => 'Hapus',
    'LBL_DELETED'=>'Hapus',
    'LBL_DIRECT_REPORTS'=>'Laporan Langsung',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Selesai',
    'LBL_DONE_BUTTON_TITLE' => 'Selesai [Alt+X]',
    'LBL_DST_NEEDS_FIXIN' => 'Aplikasi memerlukan update zona waktu. Gunakan <a href="index.php?module=Administration&action=DstFix">Repair</a> pada panel Administrasi dan lakukan pembaharuan.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Edit Sebagai Baru',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Edit Sebagai Baru',
    'LBL_FAVORITES' => 'Favorit',
    'LBL_FILTER_MENU_BY' => 'Filter Menu By',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Silahkan pilih vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Impor vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Impor vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Impor vCard [Alt+I]',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'V',
    'LBL_VIEW_BUTTON_TITLE' => 'Lihat [Alt+V]',
    'LBL_VIEW_BUTTON' => 'Lihat',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'm',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email sebagai PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email sebagai PDF [Alt+M]',
    'LBL_EMAILS'=>'Emails',
    'LBL_EMPLOYEES' => 'Karyawan',
    'LBL_ENTER_DATE' => 'Tanggal Masuk',
    'LBL_EXPORT_ALL' => 'Ekspor Semua',
    'LBL_EXPORT' => 'Ekspor',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Go',
    'LBL_GS_HELP' => 'The fields in this module used in this search appear above.  The highlighted text matches your search criteria.',
    'LBL_HIDE'=>'Tersembunyi',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => 'Impor',
    'LBL_IMPORT_STARTED' => 'Proses Impor Dimulai: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Harus memasukkan pemisah tertentu.',
    'LBL_LAST_VIEWED' => 'Dilihat Terakhir',
    'LBL_SHOW_LESS' => 'Show Less',
    'LBL_SHOW_MORE' => 'Show More',
    'LBL_TODAYS_ACTIVITIES' => 'Aktifitas Hari Ini',
    'LBL_LEADS'=>'Lead',
    'LBL_LESS' => 'kurang',
    'LBL_CAMPAIGN' => 'Kampanye:',
    'LBL_CAMPAIGNS' => 'Kampanye',
    'LBL_CAMPAIGNLOG' => 'Log Kampanye',
    'LBL_CAMPAIGN_CONTACT'=>'Kampanye',
    'LBL_CAMPAIGN_ID'=>'Kampanye_id',
    'LBL_SITEMAP'=>'Peta Situs',
    'LBL_THEME'=>'Tema:',
    'LBL_THEME_PICKER'=>'Tema Halaman ',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Catatan: Internet Explorer 6 tidak didukung untuk tema yang dipilih. Klik OK untuk memilih tema itu, atau Batal untuk memilih tema yang lain.',
    'LBL_FOUND_IN_RELEASE'=>'Ditemukan di Release',
    'LBL_FIXED_IN_RELEASE'=>'Diperbaiki di Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Account',
    'LBL_LIST_ASSIGNED_USER' => 'Pemakai',
    'LBL_LIST_CONTACT_NAME' => 'Nama Kontak',
    'LBL_LIST_CONTACT_ROLE' => 'Peran Kontak',
    'LBL_LIST_DATE_ENTERED'=>'Tanggal Dibuat',
    'LBL_LIST_EMAIL' => 'E-Mail',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_OF' => 'dari',
    'LBL_LIST_PHONE' => 'Telp',
    'LBL_LIST_RELATED_TO' => 'Terkait dengan',
    'LBL_LIST_USER_NAME' => 'Nama Pemakai',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Anda yakin ingin mengupdate seluruh list?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Silahkan pilih setidaknya 1 record untuk melanjutkan.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Silahkan pilih setidaknya 2 record untuk melanjutkan.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Silahkan pilih setidaknya 10 record untuk melanjutkan.',
    'LBL_LISTVIEW_ALL' => 'Semua',
    'LBL_LISTVIEW_NONE' => 'Tidak Ada',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Halaman Ini',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Semua Record',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Record Terpilih',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Terpilih: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Budiman',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Suryagantara',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Bpk.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Silahkan sign in untuk mengakses area ini.',
    'LBL_LOGOUT' => 'Keluar',
    'LBL_PROFILE' => 'Profile',
    'LBL_MAILMERGE_KEY' => 'm',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MASS_UPDATE' => 'Update Masal',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Email Utama',
    'LBL_MEETINGS'=>'Rapat',
    'LBL_MEETING'=>'Rapat',
    'LBL_MEETING_GO_BACK'=>'Go back to the meeting',
    'LBL_MEMBERS'=>'Anggota',
    'LBL_MEMBER_OF'=>'Anggota Dari',
    'LBL_MODIFIED_BY_USER'=>'Modifikasi oleh Pemakai',
    'LBL_MODIFIED_USER'=>'Modifikasi oleh Pemakai',
    'LBL_MODIFIED' => 'Modifikasi oleh',
    'LBL_MODIFIED_NAME'=>'Modifikasi berdasarkan Nama',
    'LBL_MODIFIED_ID'=>'Modifikasi berdasarkan ID',
    'LBL_MORE' => 'lebih banyak',
    'LBL_MY_ACCOUNT' => 'Pengaturan Saya',
    'LBL_NAME' => 'Nama',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Buat',
    'LBL_NEW_BUTTON_TITLE' => 'Buat [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => 'Lanjut',
    'LBL_NONE' => '--None--',
    'LBL_NOTES'=>'Catatan',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Buka Semua',
    'LBL_OPENALL_BUTTON_TITLE' => 'Buka Semua [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Buka untuk: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Buka untuk: [Alt+T]',
    'LBL_OPPORTUNITIES'=>'Peluang',
    'LBL_OPPORTUNITY_NAME' => 'Nama Peluang',
    'LBL_OPPORTUNITY'=>'Peluang',
    'LBL_OR' => 'Atau',
    'LBL_LOWER_OR' => 'atau',
    'LBL_PANEL_OVERVIEW' => 'Informasi Target',
    'LBL_PANEL_ASSIGNMENT' => 'Lain',
    'LBL_PANEL_ADVANCED' => 'Informasi lebih lengkap',
    'LBL_PARENT_TYPE' => 'Tipe Parent',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Fase',
    'LBL_POSTAL_CODE' => 'Kode Pos:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Alamat Utama Kota:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Alamat Utama Negara:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kode Pos Utama:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Alamat Utama Negara Bagian:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Alamat Utama 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Alamat Utama 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Alamat Utama:',
    'LBL_PRIMARY_ADDRESS' => 'Alamat Utama:',

	'LBL_BILLING_STREET'=> 'Street:',
	'LBL_SHIPPING_STREET'=> 'Street:',

    'LBL_PROSPECTS'=>'Prospects',
    'LBL_PRODUCT_BUNDLES'=>'Berkas Produk',
    'LBL_PRODUCTS'=>'Produk',
    'LBL_PROJECT_TASKS'=>'Tugas Proyek',
    'LBL_PROJECTS'=>'Proyek',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Buat Peluang dari Kutipan',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Buat Peluang dari Kutipan [Alt+O]',
    'LBL_QUOTES_SHIP_TO'=>'Penawaran dikirim kepada',
    'LBL_QUOTES'=>'Penawaran',

    'LBL_RELATED' => 'Terkait',
    'LBL_RELATED_INFORMATION' => 'Informasi terkait',
    'LBL_RELATED_RECORDS' => 'Record terkait',
    'LBL_REMOVE' => 'Hapus',
    'LBL_REPORTS_TO' => 'Laporkan ke',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Menandakan Field yang diperlukan',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Selesai',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Simpan Sebagai',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Simpan Sebagai [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formulir Lengkap',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formulir Lengkap [Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Simpan & Buat Baru',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Simpan & Buat Baru [Alt+V]',
    'LBL_SAVE_OBJECT' => 'Save {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => 'Cari',
    'LBL_SEARCH_BUTTON_TITLE' => 'Cari [Alt+Q]',
    'LBL_SEARCH' => 'Cari',
    'LBL_SEARCH_TIPS' => "Press the search button or click enter to get an exact match for them.",
    'LBL_SEARCH_TIPS_2' => "Press the search button or click enter to get an exact match for",
    'LBL_SEARCH_MORE' => 'more',
    'LBL_SEE_ALL' => 'Lihat Semua',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format file salah, hanya file gambar yang bisa diupload.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Pilih',
    'LBL_SELECT_BUTTON_TITLE' => 'Pilih [Alt+T]',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Tambah TIm',
    'LBL_SELECT_TEAMS_TITLE' => 'Tambah Tim [Alt+Z]',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Browse Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents [Alt+B]',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Pilih Kontak',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Pilih Kontak [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'Arsip Terpilih',
    'LBL_GRID_SELECTED_FILES' => 'Arsip Terpilih',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Pilih dari Laporan',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Pilih Laporan',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Pilih Pemakai',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Pilih Pemakai [Alt+U]',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Pilih File',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Pilih File',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Pilih Pemakai [Alt+U]',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Pilih Pemakai [Alt+U]',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Clear User',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Pilih Account',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Pilih Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Clear Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Clear Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'm',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Select Campaign',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Select Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Clear Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Clear Campaign',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Pilih Kontak [Alt+T]',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Pilih Kontak [Alt+T]',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resources yang digunakan untuk membuat halaman ini (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'detik.',
    'LBL_SERVER_RESPONSE_TIME' => 'Waktu Respon Server:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Memory Usage: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Kirim ke Account',
    'LBL_SHIP_TO_CONTACT'=>'Kirim ke Contact',
    'LBL_SHIPPING_ADDRESS'=>'Alamat Pengiriman',
    'LBL_SHORTCUTS' => 'Shortcut',
    'LBL_SHOW'=>'Tampilkan',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Negara Bagian:',
    'LBL_STATUS_UPDATED'=>'Status Anda untuk event ini belum diperbaharui!',
    'LBL_STATUS'=>'Status',
    'LBL_STREET'=>'Alamat Jalan',
    'LBL_SUBJECT' => 'Subyek',

    'LBL_INBOUNDEMAIL_ID' => 'Inbound Email ID',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2010 SugarCRM Inc. Program ini disediakan sebagaimana adanya, tanpa garansi.  Dilisensi berdasarkan <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',


    'LBL_SYNC' => 'Sync',
    'LBL_TABGROUP_ALL' => 'Semua',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivitas',
    'LBL_TABGROUP_COLLABORATION' => 'Kolaborasi',
    'LBL_TABGROUP_HOME' => 'Home',
    'LBL_TABGROUP_MARKETING' => 'Pemasaran',
    'LBL_TABGROUP_MY_PORTALS' => 'Portal Saya',
    'LBL_TABGROUP_OTHER' => 'Lain',
    'LBL_TABGROUP_REPORTS' => 'Laporan',
    'LBL_TABGROUP_SALES' => 'Penjualan',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TABGROUP_TOOLS' => 'Tools',
    'LBL_TASKS'=>'Tugas',
    'LBL_TEAMS_LINK'=>'Tim',
    'LBL_THEME_COLOR'=>'Warna',
    'LBL_THEME_FONT'=>'Huruf',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arsip Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arsip Email [Alt+K]',
    'LBL_UNAUTH_ADMIN' => 'Tidak diijinkan mengakses Administrasi',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Undelete',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Undelete [Alt+D]',
    'LBL_UNDELETE_BUTTON' => 'Undelete',
    'LBL_UNDELETE' => 'Undelete',
    'LBL_UNSYNC' => 'Unsync',
    'LBL_UPDATE' => 'Update',
    'LBL_USER_LIST' => 'Daftar Pemakai',
    'LBL_USERS_SYNC'=>'Users Sync',
    'LBL_USERS'=>'Pemakai',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Melakukan cek email entry yang sudah ada...',
    'LBL_VERIFY_PORTAL_NAME'=>'Melakukan cek nama portal yang sudah ada...',
    'LBL_VIEW_IMAGE' => 'lihat',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Cetak sebagai PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Cetak sebagai PDF [Alt+P]',


    'LNK_ABOUT' => 'Tentang',
    'LNK_ADVANCED_SEARCH' => 'Pencarian Lanjut',
    'LNK_BASIC_SEARCH' => 'Basic Search',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'View all results',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Tampilkan Semua',
    'LNK_CLOSE' => 'close',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Ubah current search',
    'LNK_SAVED_VIEWS' => 'Layout dan Pencarian Tersimpan',
    'LNK_DELETE_ALL' => 'Hapus Semua',
    'LNK_DELETE' => 'Hapus',
    'LNK_EDIT' => 'Edit',
    'LNK_GET_LATEST'=>'Get latest',
    'LNK_GET_LATEST_TOOLTIP'=>'Ganti dengan versi terakhir',
    'LNK_HELP' => 'Help',
    'LNK_CREATE' => 'Buat [Alt+N]',
    'LNK_LIST_END' => 'End',
    'LNK_LIST_NEXT' => 'Selanjutnya',
    'LNK_LIST_PREVIOUS' => 'Sebelumnya',
    'LNK_LIST_RETURN' => 'Kembali ke Daftar',
    'LNK_LIST_START' => 'Mulai',
    'LNK_LOAD_SIGNED'=>'Tanda',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Ganti dengan dokumen bertanda',
    'LNK_PRINT' => 'Cetak',
    'LNK_BACKTOTOP' => 'Back to top',
    'LNK_REMOVE' => 'Hapus',
    'LNK_RESUME' => 'Kembalikan',
    'LNK_VIEW_CHANGE_LOG' => 'Lihat Log Perubahan',


    'NTC_CLICK_BACK' => 'Klik button Back pada browser dan perbaiki penyebab error.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Anda yakin mau menghapus record yang dipilih?',
    'NTC_TEMPLATE_IS_USED' => 'Template ini digunakan oleh setidaknya satu record pemasaran. Anda yakin ingin menghapus?',
    'NTC_TEMPLATES_IS_USED' => 'Template ini digunakan oleh setidaknya satu email record pemasaran. Anda yakin ingin menghapus?\n',
    'NTC_DELETE_CONFIRMATION' => 'Anda yakin mau menghapus record ini?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Anda yakin ingin menghapus ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Anda yakin ingin memperbaharui ',
    'NTC_DELETE_SELECTED_RECORDS' =>' Record terpilih ?',
    'NTC_LOGIN_MESSAGE' => 'Masukkan nama Pengguna dan Password:',
    'NTC_NO_ITEMS_DISPLAY' => 'Tidak Ada',
    'NTC_REMOVE_CONFIRMATION' => 'Anda yakin ingin menghapus relasi ini?',
    'NTC_REQUIRED' => 'Menandakan Field yang diperlukan',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Selamat Datang',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SuiteCRM logos.',
    'WARN_ONLY_ADMINS'=> "Hanya Admin yang bisa login.",
    'WARN_UNSAVED_CHANGES'=> "You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?",
    'ERROR_NO_RECORD' => 'Error mengakses record.  Record ini mungkin telah dihapus atau Anda tidak memiliki hak akses untuk melihatnya.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Warning:</b> Your browser is in IE compatibility view which is not supported.",
    'ERROR_TYPE_NOT_VALID' => 'Error. Tipe ini tidak valid.',
    'ERROR_NO_BEAN' => 'Failed to get bean.', 
    'LBL_DUP_MERGE'=>'Mencari Duplikat',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Mengatur Langganan',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Mengatur langganan untuk ',
    'LBL_SUBSCRIBE'=>'Berlangganan',
    'LBL_UNSUBSCRIBE'=>'Berhenti Berlangganan',
    // Ajax status strings
    'LBL_LOADING' => 'Memuat ...',
    'LBL_SEARCHING' => 'Mencari...',
    'LBL_SAVING_LAYOUT' => 'Menyimpan Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout telah disimpan.',
    'LBL_SAVED' => 'Tersimpan',
    'LBL_SAVING' => 'Sedang menyimpan',
    'LBL_FAILED' => 'Gagal!',
    'LBL_DISPLAY_COLUMNS' => 'Tampilkan kolom',
    'LBL_HIDE_COLUMNS' => 'Menyembunyikan Kolom',
    'LBL_SEARCH_CRITERIA' => 'Kriteria Pencarian',
    'LBL_SAVED_VIEWS' => 'Tampilan Tersimpan',
    'LBL_PROCESSING_REQUEST'=>'Sedang Proses..',
    'LBL_REQUEST_PROCESSED'=>'Selesai',
    'LBL_AJAX_FAILURE' => 'Ajax Gagal',
    'LBL_MERGE_DUPLICATES'  => 'Merge Duplikat',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Pencarian Tersimpan',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Lakukan pencarian dengan menggunakan form pencarian di atas.',
    'LBL_DETAILVIEW'=>'Detail View',
    'LBL_LISTVIEW'=>'List View',
    'LBL_EDITVIEW'=>'Edit View',
    'LBL_SEARCHFORM'=>'Formulir Pencarian',
    'LBL_SAVED_SEARCH_ERROR' => 'Silahkan sediakan nama untuk tampilan ini.',
    'LBL_DISPLAY_LOG' => 'Display Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Session ada telah timeout selama 2 menit. Silahkan simpan apa yang Anda kerjakan.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Session Anda telah timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Rapat',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Panggilan',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Waktu: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokasi: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Deskripsi: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Related To: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
	'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
	'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "No results found.",
	'MSG_LIST_VIEW_NO_RESULTS' => "No results found for <item1>",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "Create <item1> as a new <item2>",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "You currently have no records saved. <item2> or <item3> one now.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4> to learn more about the <item1> module. In order to access more information, use the user menu drop down located on the main navigation bar to access Help.",

    'LBL_CLICK_HERE' => "Click here",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Tambah ke Fovorit Saya',
    'LBL_MARK_AS_FAVORITES' => 'Tandai sebagai Favorit',
    'LBL_CREATE_CONTACT' => 'Buat Kontak',
    'LBL_CREATE_CASE' => 'Buat Kasus',
    'LBL_CREATE_NOTE' => 'Buat Catatan',
    'LBL_CREATE_OPPORTUNITY' => 'Buat Peluang',
    'LBL_SCHEDULE_CALL' => 'Jadwal Panggilan',
    'LBL_SCHEDULE_MEETING' => 'Jadwal Rapat',
    'LBL_CREATE_TASK' => 'Buat Tugas',
    'LBL_REMOVE_FROM_FAVORITES' => 'Pindahkan dari Favorit Saya',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Buat Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Simpan Web ke Lead Form',

    'LBL_PLEASE_SELECT' => 'Mohon Pilih',
    'LBL_REDIRECT_URL'=>'Redirect URL',
    'LBL_RELATED_CAMPAIGN' =>'Kampanye terkait',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Tambah Semua Field',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Hapus Semua Fields',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Hanya attachment bertipe image yang bisa ditambahkan',
    'LBL_TRAINING' => 'Pelatihan',
    'ERR_DATABASE_CONN_DROPPED'=>'Error mengeksekusi sebuah query. Kemungkinan, database memutuskan koneksi. Silahkan refresh halaman ini, Anda mungkin perlu restart web server.',
    'ERR_MSSQL_DB_CONTEXT' =>'Changed database context to',
  'ERR_MSSQL_WARNING' =>'Catatan:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Peringatan: field [[field]] tidak memiliki sebuah mapped entry di [moduleDir] vardefs.php file',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] tidak ditemukan.  Tidak dapat membuatnya karena file HTML terkait tidak bisa ditemukan.',
  'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] tidak ada.',
  'LBL_ALT_ADDRESS' => 'Alamat Lain:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: Jumlah argumen yang tidak sama untuk \'key\' dan \'copy\' element di array displayParams.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Index tidak ditemukan di array displayParams untuk: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Hanya Item Saya',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Judul',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Menampilkan baris',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Buat Halaman Baru ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Anda yakin mau menghapus halaman ini?',
    'LBL_SAVING_PAGE_TITLE' => 'Simpan Judul Halaman ...',
    'LBL_RETRIEVING_PAGE' => 'Mengakses Halaman ...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your adminstrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Tambah Halaman',
    'LBL_DELETE_PAGE' => 'Hapus Halaman',
    'LBL_CHANGE_LAYOUT' => 'Ganti Tampilan',
    'LBL_RENAME_PAGE' => 'Ganti Nama Halaman',

    'LBL_LOADING_PAGE' => 'Memuat halaman, mohon tunggu...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Tambah Sugar Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Tutup',
    'LBL_OPTIONS' => 'Pilihan',
    'LBL_NUMBER_OF_COLUMNS' => 'Pilih jumlah kolom',
    'LBL_1_COLUMN' => '1 Kolom',
    'LBL_2_COLUMN' => '2 Kolom',
    'LBL_3_COLUMN' => '3 Kolom',
    'LBL_PAGE_NAME' => 'Nama Halaman',

    'LBL_SEARCH_RESULTS' => 'Hasil Pencarian',
    'LBL_SEARCH_MODULES' => 'Modul',
    'LBL_SEARCH_CHARTS' => 'Bagan',
    'LBL_SEARCH_REPORT_CHARTS' => 'Report Charts',
    'LBL_SEARCH_TOOLS' => 'Tools',
    'LBL_SEARCH_HELP_TITLE' => 'Tips Pencarian',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Tutup',
    'LBL_SEARCH_RESULTS_FOUND' => 'Search Results Found',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Mohon masukkan nama halaman.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Tidak ada gambar',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Salin alamat dari kiri:',
    'LBL_SAVE_AND_CONTINUE' => 'Simpan dan Lanjutkan',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Kik pada suatu nilai untuk mendapatkan atribut.</li><li>Ctrl-klik&nbsp;to&nbsp;untuk memilih lebih dari satu. Pengguna Mac gunakan CMD-click.</li><li>Untuk memilih semua nilai di antara 2 atributTo select all values between two attributes,&nbsp; Pertama-tama klik value yang pertama value&nbsp;lalu shift-click value terakhir.</li></ul><p><strong>Pencarian lanjutan & Pilihan Layout</strong><br><br>Menggunakan <b>Pencarian Tersimpan & pilihan Layout</b> , Anda bisa menyimpan sekumpulan parameter pencarian dan/atau mengkustomisasi layout List View dengan tujuan di kemudian hari dapat secara cepat mendapatkan hasil pencarian yang diinginkan. Anda bisa menyimpan kustomisasi dan layout pencarian dalam jumlah tak terbatas. Semua Pencarian Tersimpan akan muncul di list Pencarian Tersimpan, dengan Pencarian Tersimpan yang terakhir dipakai akan muncul di baris paling atas. <br><br>Untuk mengubah layout List View, gunakan kotak Hide Columns dan Display Columns untuk memilih field apa saja yang muncul di hasil pencarian. Contohnya Anda bisa menampilkan atau menyembunyikan rincian seperti nama, user yang ditugaskan, dan tim yang ditugaskan pada hasil pencarian. Untuk menambah sebuah kolom pada List View, pilihkan field dari list Hide Columns dan gunakan panah kiri untuk memindahkan ke Display Column List. Untuk memindahkan sebuah kolom dari List View, pilihlah dari list Display Columns dan gunakan panah kanan untuk memindahkannya ke list Hide Columns. <br><br>Jika Anda menyimpan pengaturan layout, Anda bisa menggunakannya lagi kapanpun untuk mendapatkan hasil pencarian dengan field yang diinginkan.<br><br>Untuk menyimpan dan memperbaharui pencarian dan/atau layout :<ol><li>Masukkan nama dari hasil pencarian di field <b>Save this search as</b> field dan klik <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, pilihlah dari list Saved Searches. Hasil pencarian akan ditampilkan di List View.</li><li>Untuk memperbaharui nilai dari Pencarian Tersimpan, pilihlah dari list, masukkan kriteria pencarian yang baru dan/atau pilihan layout di Advanced Search, pilihlah dari list Saved Searches, klik <b>Delete</b> di sebelah <b>Modify Current Search</b>, lalu klik  <b>OK</b> untuk konfirmasi penghapusan.</li></ol>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Limit query $limit telah tercapai untuk $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() perlu ditimpa.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Tidak bisa membuat monitor karena file metadata kosong atau file tidak ada.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: Tidak ada monitor yang dibuat untuk nama yang diminta',
    'ERR_UNDEFINED_METRIC' => 'Error: Tidak bisa mengisi  value untuk undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Tidak bisa menemukan Store implementation file',

    'LBL_MONITOR_ID' => 'ID Monitor',
    'LBL_USER_ID' => 'ID Pengguna',
    'LBL_MODULE_NAME' => 'Nama Modul',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Ringkasan Item',
    'LBL_ACTION' => 'Aksi',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack telah dibuat untuk Pengguna dengan ID {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Tanggal Aksi Terakhir',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'bukan sebelum',
  'MSG_IS_MORE_THAN' => 'lebih dari',
  'MSG_IS_LESS_THAN' => 'kurang dari',
  'MSG_SHOULD_BE' => 'seharusnya',
  'MSG_OR_GREATER' => 'atau lebih besar',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Daftar',
    'LBL_CREATE_BUG' => 'Buat Keruskan',
    'LBL_NO_RECORDS_FOUND' => '- 0 Laporan Ditemukan -',

    'DATA_TYPE_DUE' => 'Due:',
    'DATA_TYPE_START' => 'Mulai:',
    'DATA_TYPE_SENT' => 'Kirim:',
    'DATA_TYPE_MODIFIED' => 'Modifikasi:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Count',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'Gambar Obyek',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Pilih Tanggal',

    'LBL_VALIDATE_RANGE' => 'tidak berada dalam range yang valid',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Semua',

    'LBL_OPERATOR_IN_TEXT' => 'adalah satu dari berikut:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'bukanlah satu dari berikut:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: Jumlah array dari bean parameter tidak sesuai dengan jumlah array dari  hasilnya. ',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Mapping entry untuk modul tidak ditemukan.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Tidak bisa mengakses data untuk konektor {0} .  Service mungkin sedang tidak bisa diakses atau konfigurasinya tidak valid. Pesan Error Connector : ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Ambil Data',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Anda yakin ingin disable integrasi konektor untuk modul ini?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'Untuk penggunaan IIS/FastCGI sapi yang optimal, ubah fastcgi.logging menjadi 0 di file php.ini.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Maaf, Anda tidak bisa mendelete tim global. Membatalkan',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'This private team [{0}] cannot be deleted until the user [{1}] is deleted.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Hello, Anda mungkin mematikan FLash atau hanya tersedia Adobe Flash Player versi lama. Silahkan ke <a href="http://www.adobe.com/go/getflashplayer/">untuk mendapatkan Flash Player terbaru</a> aktifkan Flash di browser Anda.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Nama',
  'LBL_COLLECTION_PRIMARY' => 'Utama',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Field yang dibutuhkan kosong',
    'LBL_COLLECTION_EXACT' => 'Tepat',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_DESCRIPTION' => 'Deskripsi',

  'LBL_YESTERDAY'=> 'kemarin',
  'LBL_TODAY'=>'hari ini',
  'LBL_TOMORROW'=>'besok',
  'LBL_NEXT_WEEK'=> 'minggu depan',
  'LBL_NEXT_MONDAY'=>'senin depan',
  'LBL_NEXT_FRIDAY'=>'jumat depan',
  'LBL_TWO_WEEKS'=> 'dua minggu',
  'LBL_NEXT_MONTH'=> 'bulan depan',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'hari pertama bulan depan',
  'LBL_THREE_MONTHS'=> 'tiga bulan',
  'LBL_SIXMONTHS'=> 'enam bulan',
  'LBL_NEXT_YEAR'=> 'tahun depan',
    'LBL_FILTERED' => 'Filtered',

    //Datetimecombo fields
    'LBL_HOURS' => 'Jam',
    'LBL_MINUTES' => 'Menit',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Tanggal',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Auto-Refresh',

    'LBL_DURATION_DAY' => 'day',
    'LBL_DURATION_HOUR' => 'hour',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'hari',
    'LBL_DURATION_HOURS' => 'hours',
    'LBL_DURATION_MINUTES' => 'minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choose Month',
    'LBL_ENTER_YEAR' => 'Enter Year',
    'LBL_ENTER_VALID_YEAR' => 'Please enter a valid year',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Please enter a numeric U.S. phone number, including area code.',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: Could not write file {0}.  Please check system and web server permissions.',
  'ERR_FILE_NOT_FOUND' => 'Error: Could not load file {0}.  Please check system and web server permissions.',

    'LBL_AND' => 'E',
    'LBL_BEFORE' => 'Sebelum',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Upload From Your Computer',
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',
    'LBL_SHARE_PRIVATE' => 'Private',
    'LBL_SHARE_COMPANY' => 'Company',
    'LBL_SHARE_LINKABLE' => 'Linkable',
    'LBL_SHARE_PUBLIC' => 'Public',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS Feed',
    'LBL_RSS_RECORDS_FOUND' => 'record(s) found',
    'ERR_RSS_INVALID_INPUT' => 'RSS is not a valid input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS is not a valid response_type for this method',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs does not support the file format you provided.',

    'LBL_EMPTY' => 'Kosong',
    'LBL_IS_EMPTY' => 'Is empty',
    'LBL_IS_NOT_EMPTY' => 'Is not empty',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"This is a sample import file which provides an example of the expected contents of a file that is ready for import."
"The file is a comma-delimited .csv file, using double-quotes as the field qualifier."

"The header row is the top-most row in the file and contains the field labels as you would see them in the application."
"These labels are used for mapping the data in the file to the fields in the application."

"Notes: The database names could also be used in the header row. This is useful when you are using phpMyAdmin or another database tool to provide an exported list of data to import."
"The column order is not critical as the import process matches the data to the appropriate fields based on the header row."


"To use this file as a template, do the following:"
"1. Remove the sample rows of data"
"2. Remove the help text that you are reading right now"
"3. Input your own data into the appropriate rows and columns"
"4. Save the file to a known location on your system"
"5. Click on the Import option from the Actions menu in the application and choose the file to upload"
   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ditugaskan  kepada',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Pengguna yang ditugaskan',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Laporan Untuk ID',
    'LBL_EXPORT_FULL_NAME' => 'Full Name',
    'LBL_EXPORT_TEAM_ID' => 'Team ID',
    'LBL_EXPORT_TEAM_NAME' => 'Tim',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navigating... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Notifikasi',
    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Add new team row',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Remove team',
    'LBL_ALT_SPOT_SEARCH' => 'Spot Search',
    'LBL_ALT_SORT_DESC' => 'Sorted Descending',
    'LBL_ALT_SORT_ASC' => 'Sorted Ascending',
    'LBL_ALT_SORT' => 'Sortir',
    'LBL_ALT_SHOW_OPTIONS' => 'Show Options',
    'LBL_ALT_HIDE_OPTIONS' => 'Hide Options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'Information',
	'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below.  Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'Email',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'invalid email address',
    'LBL_EMAIL_PRIM_TITLE' => 'primary email address',
    'LBL_SELECT_ALL_TITLE' => 'Select all',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Select this row',
    'LBL_TEAM_SELECTED_TITLE' => 'Team Selected ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Select to make this team primary',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'ERROR: There was an error during upload. Error code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: There was an error during upload. Error code: {0} - {1}. The upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT'     => 'ERROR: There was an error during your upload, please contact an administrator for help.',
    'UPLOAD_MAXIMUM_EXCEEDED'    => 'Size of Upload ({0} bytes) Exceeded Allowed Maximum: {1} bytes',
    'UPLOAD_REQUEST_ERROR'    => 'An error has occured. Please refresh your page and try again.',


    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Edit',
    'LBL_EDIT_BUTTON_TITLE' => 'Edit [Alt+E]',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikat [Alt+U]',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Hapus',
    'LBL_DELETE_BUTTON_TITLE' => 'Hapus [Alt+D]',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Simpan',
    'LBL_SAVE_BUTTON_TITLE' => 'Simpan [Alt+S]',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancel',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancel [Alt+X]',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Keyboard Shortcuts',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bad response from the server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Sale Price',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'Secara Manual',
        '5' => 'Every 5 minutes',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.'

    );

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['library_type'] = array('Books'=>'Buku', 'Music'=>'Musik', 'DVD'=>'DVD', 'Magazines'=>'Majalah');
$app_list_strings['moduleList']['EmailAddresses'] = 'Alamat E-Mail';
$app_list_strings['project_priority_default'] = 'Menengah';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Tinggi',
    'Medium' => 'Menengah',
    'Low' => 'Rendah',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Konsep',
    'Expired' => 'Kadaluwarsa',
    'In Review' => 'Dalam Tinjauan',
    'Published' => 'Publikasi',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--None--',
    'Create New Tag' => 'Buat Tag Baru',
    'Delete Tag'=>'Hapus Tag',
    'Rename Tag'=>'Ganti Nama Tag',
    'Move Selected Articles'=>'Pindahkan Artikel yang Dipilih',
    'Apply Tags On Articles'=>'Berikan Tags ke artikel',
    'Delete Selected Articles'=>'Hapus Artikel yang Dipilih',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Ada Attachment',
        'none' => 'None',
        'mime' => 'Tentukan Mime Type',
        'name' => 'Tentukan Nama',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Knowledge Base';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => '5 Teratas',
    'Top_10' => '10 Teratas',
    'Top_20' => '20 Teratas',
    'Bot_5'  => '5 Terbawah',
    'Bot_10' => '10 Terbawah',
    'Bot_20' => '20 Terbawah',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Semua yang terkait',
        'added' => 'Ditambah 30 hari terakhir',
        'pending' => 'Tunda Persetujuan Saya',
        'updated' =>'Di-update dalam 30 hari terakhir',
        'faqs' => 'FAQs',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'On',
    'before' => 'Sebelum',
    'after' => 'Sesudah',
    'between_dates' => 'Diantara',
    'last_7_days' => '7 hari terakhir',
    'next_7_days' => '7 hari ke depan',
    'last_month' => 'Bulan Lalu',
    'this_month' => 'Bulan Ini',
    'next_month' => 'Bulan Depan',
    'last_30_days' => '30 Hari Terakhir',
    'next_30_days' => '30 hari ke depan',
    'last_year' => 'Tahun Lalu',
    'this_year' => 'Tahun Ini',
    'next_year' => 'Tahun Depan',
    'isnull' => 'Is Null',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIA',
        'ALGERIA' => 'ALGERIA',
        'AMERICAN SAMOA' => 'AMERICAN SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARCTICA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMENIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIA',
        'AUSTRIA' => 'AUSTRIA',
        'AZERBAIJAN' => 'AZERBAIJAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BELARUS',
        'BELGIUM' => 'BELGIUM',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIA',
        'BOSNIA' => 'BOSNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET ISLAND',
        'BRAZIL' => 'BRAZIL',
        'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
        'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODIA',
        'CAMEROON' => 'CAMEROON',
        'CANADA' => 'CANADA',
        'CANAL ZONE' => 'CANAL ZONE',
        'CANARY ISLAND' => 'CANARY ISLAND',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
        'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CHAD',
        'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
        'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
        'COLOMBIA' => 'COLOMBIA',
        'COMORO ISLANDS' => 'COMORO ISLANDS',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO KINSHASA',
        'COOK ISLANDS' => 'COOK ISLANDS',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'CROATIA',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPRUS',
        'CZECH REPUBLIC' => 'CZECH REPUBLIC',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DENMARK',
        'DJIBOUTI' => 'DJIBOUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'EGYPT',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
        'ESTONIA' => 'ESTONIA',
        'ETHIOPIA' => 'ETHIOPIA',
        'FAEROE ISLANDS' => 'FAEROE ISLANDS',
        'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
        'FIJI' => 'FIJI',
        'FINLAND' => 'FINLAND',
        'FRANCE' => 'FRANCE',
        'FRENCH GUIANA' => 'FRENCH GUIANA',
        'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIA',
        'GERMANY' => 'GERMANY',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GREECE',
        'GREENLAND' => 'GREENLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'HUNGARY',
        'ICELAND' => 'ICELAND',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIA',
        'INDONESIA' => 'INDONESIA',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAQ',
        'IRELAND' => 'IRELAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALY',
        'IVORY COAST' => 'IVORY COAST',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDAN',
        'KAZAKHSTAN' => 'KAZAKHSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'KOREA, SOUTH',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KYRGYZSTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LATVIA',
        'LEBANON' => 'LEBANON',
        'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBYA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITHUANIA',
        'LUXEMBOURG' => 'LUXEMBOURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MACEDONIA',
        'MADAGASCAR' => 'MADAGASCAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALDIVES',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURITANIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIA',
        'MEXICO' => 'MEXICO',
        'MOLDOVIA' => 'MOLDOVIA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLIA',
        'MOROCCO' => 'MOROCCO',
        'MOZAMBIQUE' => 'MOZAMBIQUE',
        'MYANAMAR' => 'MYANAMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NETHERLANDS',
        'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
        'NEW CALADONIA' => 'NEW CALADONIA',
        'NEW HEBRIDES' => 'NEW HEBRIDES',
        'NEW ZEALAND' => 'NEW ZEALAND',
        'NICARAGUA' => 'NICARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK ISLAND',
        'NORWAY' => 'NORWAY',
        'OMAN' => 'OMAN',
        'OTHER' => 'OTHER',
        'PACIFIC ISLAND' => 'PACIFIC ISLAND',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'PHILIPPINES',
        'POLAND' => 'POLAND',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'EAST TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'QATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'ROMANIA',
        'RUSSIA' => 'RUSSIA',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI ARABIA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIA',
        'SEYCHELLES' => 'SEYCHELLES',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPORE',
        'SLOVAKIA' => 'SLOVAKIA',
        'SLOVENIA' => 'SLOVENIA',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'SOUTH AFRICA',
        'SOUTH YEMEN' => 'SOUTH YEMEN',
        'SPAIN' => 'SPAIN',
        'SPANISH SAHARA' => 'SPANISH SAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SW AFRICA',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'SWEDEN',
        'SWITZERLAND' => 'SWITZERLAND',
        'SYRIA' => 'SYRIA',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TAJIKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNISIA',
        'TURKEY' => 'TURKEY',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
        'UNITED KINGDOM' => 'UNITED KINGDOM',
        'UPPER VOLTA' => 'UPPER VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
        'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
        'USA' => 'USA',
        'UZBEKISTAN' => 'UZBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATICAN CITY',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ISLAND',
        'WEST INDIES' => 'WEST INDIES',
        'WESTERN SAHARA' => 'WESTERN SAHARA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (Taiwan und Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrillisch)',
    'CP1252'    => 'CP1252 (MS Westeuropa & US)',
    'EUC-CN'    => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix Japanisch)',
    'EUC-KR'    => 'EUC-KR (Koreanisch)',
    'EUC-TW'    => 'EUC-TW (Taiwanesisch)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanisch)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreanisch)',
    'ISO-8859-1'  => 'ISO-8859-1 (Westeuropa und US)',
    'ISO-8859-2'  => 'ISO-8859-2 (Zentral- und Osteuropa)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6'  => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7'  => 'ISO-8859-7 (Greek)',
    'ISO-8859-8'  => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U'    => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS'      => 'SJIS (MS Japanese)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

  'Africa/Algiers' => 'Africa/Algiers',
  'Africa/Luanda' => 'Africa/Luanda',
  'Africa/Porto-Novo' => 'Africa/Porto-Novo',
  'Africa/Gaborone' => 'Africa/Gaborone',
  'Africa/Ouagadougou' => 'Africa/Ouagadougou',
  'Africa/Bujumbura' => 'Africa/Bujumbura',
  'Africa/Douala' => 'Africa/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Cape Verde',
  'Africa/Bangui' => 'Africa/Bangui',
  'Africa/Ndjamena' => 'Africa/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Africa/Kinshasa',
  'Africa/Lubumbashi' => 'Africa/Lubumbashi',
  'Africa/Brazzaville' => 'Africa/Brazzaville',
  'Africa/Abidjan' => 'Africa/Abidjan',
  'Africa/Djibouti' => 'Africa/Djibouti',
  'Africa/Cairo' => 'Africa/Cairo',
  'Africa/Malabo' => 'Africa/Malabo',
  'Africa/Asmera' => 'Africa/Asmera',
  'Africa/Addis_Ababa' => 'Africa/Addis Ababa',
  'Africa/Libreville' => 'Africa/Libreville',
  'Africa/Banjul' => 'Africa/Banjul',
  'Africa/Accra' => 'Africa/Accra',
  'Africa/Conakry' => 'Africa/Conakry',
  'Africa/Bissau' => 'Africa/Bissau',
  'Africa/Nairobi' => 'Africa/Nairobi',
  'Africa/Maseru' => 'Africa/Maseru',
  'Africa/Monrovia' => 'Africa/Monrovia',
  'Africa/Tripoli' => 'Africa/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Africa/Blantyre',
  'Africa/Bamako' => 'Africa/Bamako',
  'Africa/Nouakchott' => 'Africa/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Africa/Casablanca',
  'Africa/El_Aaiun' => 'Africa/El Aaiun',
  'Africa/Maputo' => 'Africa/Maputo',
  'Africa/Windhoek' => 'Africa/Windhoek',
  'Africa/Niamey' => 'Africa/Niamey',
  'Africa/Lagos' => 'Africa/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Africa/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/St. Helena',
  'Africa/Sao_Tome' => 'Africa/Sao Tome',
  'Africa/Dakar' => 'Africa/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'Africa/Freetown',
  'Africa/Mogadishu' => 'Africa/Mogadishu',
  'Africa/Johannesburg' => 'Africa/Johannesburg',
  'Africa/Khartoum' => 'Africa/Khartoum',
  'Africa/Mbabane' => 'Africa/Mbabane',
  'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
  'Africa/Lome' => 'Africa/Lome',
  'Africa/Tunis' => 'Africa/Tunis',
  'Africa/Kampala' => 'Africa/Kampala',
  'Africa/Lusaka' => 'Africa/Lusaka',
  'Africa/Harare' => 'Africa/Harare',
  'Antarctica/Casey' => 'Antarctica/Casey',
  'Antarctica/Davis' => 'Antarctica/Davis',
  'Antarctica/Mawson' => 'Antarctica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
  'Antarctica/Syowa' => 'Antarctica/Syowa',
  'Antarctica/Vostok' => 'Antarctica/Vostok',
  'Antarctica/Rothera' => 'Antarctica/Rothera',
  'Antarctica/Palmer' => 'Antarctica/Palmer',
  'Antarctica/McMurdo' => 'Antarctica/McMurdo',
  'Asia/Kabul' => 'Asia/Kabul',
  'Asia/Yerevan' => 'Asia/Yerevan',
  'Asia/Baku' => 'Asia/Baku',
  'Asia/Bahrain' => 'Asia/Bahrain',
  'Asia/Dhaka' => 'Asia/Dhaka',
  'Asia/Thimphu' => 'Asia/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Asia/Brunei',
  'Asia/Rangoon' => 'Asia/Rangoon',
  'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
  'Asia/Beijing' => 'Asia/Beijing',
  'Asia/Harbin' => 'Asia/Harbin',
  'Asia/Shanghai' => 'Asia/Shanghai',
  'Asia/Chongqing' => 'Asia/Chongqing',
  'Asia/Urumqi' => 'Asia/Urumqi',
  'Asia/Kashgar' => 'Asia/Kashgar',
  'Asia/Hong_Kong' => 'Asia/Hong Kong',
  'Asia/Taipei' => 'Asia/Taipei',
  'Asia/Macau' => 'Asia/Macau',
  'Asia/Nicosia' => 'Asia/Nicosia',
  'Asia/Tbilisi' => 'Asia/Tbilisi',
  'Asia/Dili' => 'Asia/Dili',
  'Asia/Calcutta' => 'Asia/Calcutta',
  'Asia/Jakarta' => 'Asia/Jakarta',
  'Asia/Pontianak' => 'Asia/Pontianak',
  'Asia/Makassar' => 'Asia/Makassar',
  'Asia/Jayapura' => 'Asia/Jayapura',
  'Asia/Tehran' => 'Asia/Tehran',
  'Asia/Baghdad' => 'Asia/Baghdad',
  'Asia/Jerusalem' => 'Asia/Jerusalem',
  'Asia/Tokyo' => 'Asia/Tokyo',
  'Asia/Amman' => 'Asia/Amman',
  'Asia/Almaty' => 'Asia/Almaty',
  'Asia/Qyzylorda' => 'Asia/Qyzylorda',
  'Asia/Aqtobe' => 'Asia/Aqtobe',
  'Asia/Aqtau' => 'Asia/Aqtau',
  'Asia/Oral' => 'Asia/Oral',
  'Asia/Bishkek' => 'Asia/Bishkek',
  'Asia/Seoul' => 'Asia/Seoul',
  'Asia/Pyongyang' => 'Asia/Pyongyang',
  'Asia/Kuwait' => 'Asia/Kuwait',
  'Asia/Vientiane' => 'Asia/Vientiane',
  'Asia/Beirut' => 'Asia/Beirut',
  'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
  'Asia/Kuching' => 'Asia/Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Asia/Hovd',
  'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asia/Choibalsan',
  'Asia/Katmandu' => 'Asia/Katmandu',
  'Asia/Muscat' => 'Asia/Muscat',
  'Asia/Karachi' => 'Asia/Karachi',
  'Asia/Gaza' => 'Asia/Gaza',
  'Asia/Manila' => 'Asia/Manila',
  'Asia/Qatar' => 'Asia/Qatar',
  'Asia/Riyadh' => 'Asia/Riyadh',
  'Asia/Singapore' => 'Asia/Singapore',
  'Asia/Colombo' => 'Asia/Colombo',
  'Asia/Damascus' => 'Asia/Damascus',
  'Asia/Dushanbe' => 'Asia/Dushanbe',
  'Asia/Bangkok' => 'Asia/Bangkok',
  'Asia/Ashgabat' => 'Asia/Ashgabat',
  'Asia/Dubai' => 'Asia/Dubai',
  'Asia/Samarkand' => 'Asia/Samarkand',
  'Asia/Tashkent' => 'Asia/Tashkent',
  'Asia/Saigon' => 'Asia/Saigon',
  'Asia/Aden' => 'Asia/Aden',
  'Australia/Darwin' => 'Australia/Darwin',
  'Australia/Perth' => 'Australia/Perth',
  'Australia/Brisbane' => 'Australia/Brisbane',
  'Australia/Lindeman' => 'Australia/Lindeman',
  'Australia/Adelaide' => 'Australia/Adelaide',
  'Australia/Hobart' => 'Australia/Hobart',
  'Australia/Currie' => 'Australia/Currie',
  'Australia/Melbourne' => 'Australia/Melbourne',
  'Australia/Sydney' => 'Australia/Sydney',
  'Australia/Broken_Hill' => 'Australia/Broken Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacific/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacific/Fiji',
  'Pacific/Gambier' => 'Pacific/Gambier',
  'Pacific/Marquesas' => 'Pacific/Marquesas',
  'Pacific/Tahiti' => 'Pacific/Tahiti',
  'Pacific/Guam' => 'Pacific/Guam',
  'Pacific/Tarawa' => 'Pacific/Tarawa',
  'Pacific/Enderbury' => 'Pacific/Enderbury',
  'Pacific/Kiritimati' => 'Pacific/Kiritimati',
  'Pacific/Saipan' => 'Pacific/Saipan',
  'Pacific/Majuro' => 'Pacific/Majuro',
  'Pacific/Kwajalein' => 'Pacific/Kwajalein',
  'Pacific/Truk' => 'Pacific/Truk',
  'Pacific/Pohnpei' => 'Pacific/Pohnpei',
  'Pacific/Kosrae' => 'Pacific/Kosrae',
  'Pacific/Nauru' => 'Pacific/Nauru',
  'Pacific/Noumea' => 'Pacific/Noumea',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacific/Chatham',
  'Pacific/Niue' => 'Pacific/Niue',
  'Pacific/Norfolk' => 'Pacific/Norfolk',
  'Pacific/Palau' => 'Pacific/Palau',
  'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
  'Pacific/Pitcairn' => 'Pacific/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
  'Pacific/Apia' => 'Pacific/Apia',
  'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacific/Fakaofo',
  'Pacific/Tongatapu' => 'Pacific/Tongatapu',
  'Pacific/Funafuti' => 'Pacific/Funafuti',
  'Pacific/Johnston' => 'Pacific/Johnston',
  'Pacific/Midway' => 'Pacific/Midway',
  'Pacific/Wake' => 'Pacific/Wake',
  'Pacific/Efate' => 'Pacific/Efate',
  'Pacific/Wallis' => 'Pacific/Wallis',
  'Europe/London' => 'Europe/London',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Vienna',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brussels',
  'Europe/Sofia' => 'Europe/Sofia',
  'Europe/Prague' => 'Europe/Prague',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantic/Faeroe',
  'America/Danmarkshavn' => 'America/Danmarkshavn',
  'America/Scoresbysund' => 'America/Scoresbysund',
  'America/Godthab' => 'America/Godthab',
  'America/Thule' => 'America/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Gibraltar',
  'Europe/Athens' => 'Europe/Athens',
  'Europe/Budapest' => 'Europe/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europe/Rome',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Luxembourg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Warsaw',
  'Europe/Lisbon' => 'Europe/Lisbon',
  'Atlantic/Azores' => 'Atlantic/Azores',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europe/Bucharest',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moscow',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
  'Asia/Omsk' => 'Asia/Omsk',
  'Asia/Novosibirsk' => 'Asia/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asia/Irkutsk',
  'Asia/Yakutsk' => 'Asia/Yakutsk',
  'Asia/Vladivostok' => 'Asia/Vladivostok',
  'Asia/Sakhalin' => 'Asia/Sakhalin',
  'Asia/Magadan' => 'Asia/Magadan',
  'Asia/Kamchatka' => 'Asia/Kamchatka',
  'Asia/Anadyr' => 'Asia/Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrade' ,
  'Europe/Madrid' =>'Europe/Madrid' ,
  'Africa/Ceuta' => 'Africa/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zurich' ,
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'America/New York',
  'America/Chicago' =>'America/Chicago' ,
  'America/North_Dakota/Center' => 'America/North Dakota/Center',
  'America/Denver' => 'America/Denver',
  'America/Los_Angeles' => 'America/Los Angeles',
  'America/Juneau' => 'America/Juneau',
  'America/Yakutat' => 'America/Yakutat',
  'America/Anchorage' => 'America/Anchorage',
  'America/Nome' =>'America/Nome' ,
  'America/Adak' => 'America/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
  'America/Phoenix' => 'America/Phoenix',
  'America/Boise' => 'America/Boise',
  'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'America/Indiana/Marengo',
  'America/Indiana/Knox' =>  'America/Indiana/Knox',
  'America/Indiana/Vevay' => 'America/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'America/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'America/Kentucky/Monticello' ,
  'America/Detroit' => 'America/Detroit',
  'America/Menominee' => 'America/Menominee',
  'America/St_Johns' => 'America/St. Johns',
  'America/Goose_Bay' => 'America/Goose_Bay' ,
  'America/Halifax' => 'America/Halifax',
  'America/Glace_Bay' =>'America/Glace Bay' ,
  'America/Montreal' => 'America/Montreal',
  'America/Toronto' => 'America/Toronto',
  'America/Thunder_Bay' => 'America/Thunder Bay' ,
  'America/Nipigon' => 'America/Nipigon',
  'America/Rainy_River' => 'America/Rainy River',
  'America/Winnipeg' => 'America/Winnipeg',
  'America/Regina' => 'America/Regina',
  'America/Swift_Current' => 'America/Swift Current',
  'America/Edmonton' =>  'America/Edmonton',
  'America/Vancouver' => 'America/Vancouver',
  'America/Dawson_Creek' => 'America/Dawson Creek',
  'America/Pangnirtung' => 'America/Pangnirtung'  ,
  'America/Iqaluit' => 'America/Iqaluit' ,
  'America/Coral_Harbour' => 'America/Coral Harbour' ,
  'America/Rankin_Inlet' => 'America/Rankin Inlet',
  'America/Cambridge_Bay' => 'America/Cambridge Bay',
  'America/Yellowknife' => 'America/Yellowknife',
  'America/Inuvik' =>'America/Inuvik' ,
  'America/Whitehorse' => 'America/Whitehorse' ,
  'America/Dawson' => 'America/Dawson',
  'America/Cancun' => 'America/Cancun',
  'America/Merida' => 'America/Merida',
  'America/Monterrey' => 'America/Monterrey',
  'America/Mexico_City' => 'America/Mexico City',
  'America/Chihuahua' => 'America/Chihuahua',
  'America/Hermosillo' => 'America/Hermosillo',
  'America/Mazatlan' => 'America/Mazatlan',
  'America/Tijuana' => 'America/Tijuana',
  'America/Anguilla' => 'America/Anguilla',
  'America/Antigua' => 'America/Antigua',
  'America/Nassau' =>'America/Nassau' ,
  'America/Barbados' => 'America/Barbados',
  'America/Belize' => 'America/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'America/Cayman',
  'America/Costa_Rica' => 'America/Costa Rica',
  'America/Havana' => 'America/Havana',
  'America/Dominica' => 'America/Dominica',
  'America/Santo_Domingo' => 'America/Santo Domingo',
  'America/El_Salvador' => 'America/El Salvador',
  'America/Grenada' => 'America/Grenada',
  'America/Guadeloupe' => 'America/Guadeloupe',
  'America/Guatemala' => 'America/Guatemala',
  'America/Port-au-Prince' => 'America/Port-au-Prince',
  'America/Tegucigalpa' => 'America/Tegucigalpa',
  'America/Jamaica' => 'America/Jamaica',
  'America/Martinique' => 'America/Martinique',
  'America/Montserrat' => 'America/Montserrat',
  'America/Managua' => 'America/Managua',
  'America/Panama' => 'America/Panama',
  'America/Puerto_Rico' =>'America/Puerto_Rico' ,
  'America/St_Kitts' => 'America/St_Kitts',
  'America/St_Lucia' => 'America/St_Lucia',
  'America/Miquelon' => 'America/Miquelon',
  'America/St_Vincent' => 'America/St. Vincent',
  'America/Grand_Turk' => 'America/Grand Turk',
  'America/Tortola' => 'America/Tortola',
  'America/St_Thomas' => 'America/St. Thomas',
  'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
  'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
  'America/Argentina/Ushuaia' =>  'America/Argentina/Ushuaia',
  'America/Aruba' => 'America/Aruba',
  'America/La_Paz' => 'America/La Paz',
  'America/Noronha' => 'America/Noronha',
  'America/Belem' => 'America/Belem',
  'America/Fortaleza' => 'America/Fortaleza',
  'America/Recife' => 'America/Recife',
  'America/Araguaina' => 'America/Araguaina',
  'America/Maceio' => 'America/Maceio',
  'America/Bahia' => 'America/Bahia',
  'America/Sao_Paulo' => 'America/Sao Paulo',
  'America/Campo_Grande' => 'America/Campo Grande',
  'America/Cuiaba' => 'America/Cuiaba',
  'America/Porto_Velho' => 'America/Porto_Velho',
  'America/Boa_Vista' => 'America/Boa Vista',
  'America/Manaus' => 'America/Manaus',
  'America/Eirunepe' => 'America/Eirunepe',
  'America/Rio_Branco' => 'America/Rio Branco',
  'America/Santiago' => 'America/Santiago',
  'Pacific/Easter' => 'Pacific/Easter' ,
  'America/Bogota' => 'America/Bogota',
  'America/Curacao' => 'America/Curacao',
  'America/Guayaquil' => 'America/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'America/Cayenne',
  'America/Guyana' => 'America/Guyana',
  'America/Asuncion' => 'America/Asuncion',
  'America/Lima' => 'America/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
  'America/Paramaribo' => 'America/Paramaribo',
  'America/Port_of_Spain' => 'America/Port-of-Spain',
  'America/Montevideo' => 'America/Montevideo',
  'America/Caracas' => 'America/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Favorit';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'SuiteCRM',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'GoToMeeting',
    'IBMSmartCloud'=>'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook'=>'Facebook',
    'Twitter'=>'Twitter',
  );
  $app_list_strings['eapm_list_import']= array(
  	'Google' => 'Google Contacts',
  );
$app_list_strings['eapm_list_documents']= array(
  	'Google' => 'Google Docs',
  );
	$app_list_strings['token_status'] = array(
        1 => 'Request',
        2 => 'Akses',
        3 => 'Tidak Valid',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Kampanye' ,
    'email' => 'E-Mail',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Kampanye' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Kampanye' ,
    'email' => 'E-Mail',
  );
$app_strings ['documentation'] = array (
    'LBL_DOCS' => 'Dokumentasi',
    'ULT' => '02_Sugar_Ultimate',
	'ENT' => '02_Sugar_Enterprise',
	'CORP' => '03_Sugar_Corporate',
	'PRO' => '04_Sugar_Professional',
	'COM' => '05_Sugar_Community_Edition'
);


// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Knowledge Base';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Konsep';
$app_list_strings['aok_status_list']['Expired'] = 'Kadaluwarsa';
$app_list_strings['aok_status_list']['In_Review'] = 'Dalam Tinjauan';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Private';
$app_list_strings['aok_status_list']['published_public'] = 'Public';


$app_list_strings['moduleList']['Reminders'] = 'Reminders';
$app_list_strings['moduleListSingular']['Reminders'] = 'Reminder';

$app_list_strings['moduleList']['Reminders_Invitees'] = 'Reminders_Invitees';
$app_list_strings['moduleListSingular']['Reminders_Invitees'] = 'Reminder_Invitee';

$app_list_strings['moduleList']['FP_events'] = 'Events';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locations';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invited';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Not Invited';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Attended';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Not Attended';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Diterima';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Declined';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Terima Status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Halaman Ini';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Semua Record';
$app_strings['LBL_LISTVIEW_NONE'] = 'Tidak Ada';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indeks Kegiatan';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Case Updates';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array (
        'Open' => 'Opened',
        'Closed' => 'Tutup',
    );

$app_list_strings['case_status_default_key'] = 'Baru';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Baru',
        'Open_Assigned' => 'Di-Assign',
        'Closed_Closed' => 'Tutup',
        'Open_Pending Input' => 'Input Tertunda',
        'Closed_Rejected' => 'Ditolak',
        'Closed_Duplicate' => 'Duplikat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'Use AOP Default',
    'singleUser' => 'Single User',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Laporan';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Charts';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'Yang Termasuk';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Starts With';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aor_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aor_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aor_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aor_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aor_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aor_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aor_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aor_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aor_condition_operator_list']['And'] = 'E';
$app_list_strings['aor_condition_operator_list']['OR'] = 'Atau';
$app_list_strings['aor_condition_type_list']['Value'] = 'Nilai';
$app_list_strings['aor_condition_type_list']['Field'] = 'Nama Field';
$app_list_strings['aor_condition_type_list']['Date'] = 'Tanggal';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Menit';
$app_list_strings['aor_date_type_list']['hour'] = 'Jam';
$app_list_strings['aor_date_type_list']['day'] = 'Hari';
$app_list_strings['aor_date_type_list']['week'] = 'Minggu';
$app_list_strings['aor_date_type_list']['month'] = 'Bulan';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Naik';
$app_list_strings['aor_sort_operator']['DESC'] = 'Turun';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Count';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Count';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Pie chart';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['polar'] = 'Polar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Bulanan';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Mingguan';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Daily';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktif';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Tidak Aktif';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-Mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Pemakai';
$app_list_strings['aor_email_type_list']['Users'] = 'Pemakai';
$app_list_strings['aor_assign_options']['all'] = 'ALL Users';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'Hari ini';
$app_list_strings['date_time_period_list']['yesterday'] = 'Kemarin';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Minggu terakhir';
$app_list_strings['date_time_period_list']['last_month'] = 'Bulan Lalu';
$app_list_strings['date_time_period_list']['this_quarter'] = 'This Quarter';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Last Quarter';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Melanjutkan';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Hari';
$app_strings['LBL_CRON_MONTH'] = 'Bulan';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Daily';
$app_strings['LBL_CRON_WEEKLY'] = 'Mingguan';
$app_strings['LBL_CRON_MONTHLY'] = 'Bulanan';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontrak';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Invoices';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Katagori Produk';
$app_list_strings['moduleList']['AOS_Products'] = 'Produk';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Item baris';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Penawaran';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analis';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Pesaing';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Pelanggan';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Penanam Modal';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Rekanan';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Pers';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Sasaran';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Penjual';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Lainnya';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Konsep';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negosiasi';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Terkirim';
$app_list_strings['quote_stage_dom']['On Hold'] = 'On Hold';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Konfirmasi';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Berakhir Diterima';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Berakhir Kalah';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Berakhir Tidak Dilanjutkan';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approved';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Not Approved';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analis';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Pesaing';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Pelanggan';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Penanam Modal';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Rekanan';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Pers';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Sasaran';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Penjual';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Lainnya';
$app_list_strings['invoice_status_dom']['Paid'] = 'Paid';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Unpaid';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancelled';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Not Invoiced';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Invoiced';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Good';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Penawaran';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Invoices';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontrak';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Penawaran';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Invoices';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontrak';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Account';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontak';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Lead';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Belum Dimulai';
$app_list_strings['contract_status_list']['In Progress'] = 'Dalam Proses';
$app_list_strings['contract_status_list']['Signed'] = 'Signed';
$app_list_strings['contract_type_list']['Type'] = 'Tipe';
$app_strings['LBL_GENERATE_LETTER'] = 'Generate Letter';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Please Select a Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNo templates found.\nPlease go to the PDF templates module and create one';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow Conditions';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'Aktif';
$app_list_strings['aow_status_list']['Inactive'] = 'Tidak Aktif';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'Yang Termasuk';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Starts With';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Is Null';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Lengkap';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'Tertunda';
$app_list_strings['aow_process_status_list']['Failed'] = 'Gagal';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'Atau';
$app_list_strings['aow_condition_type_list']['Value'] = 'Nilai';
$app_list_strings['aow_condition_type_list']['Field'] = 'Nama Field';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Tanggal';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Nilai';
$app_list_strings['aow_action_type_list']['Field'] = 'Nama Field';
$app_list_strings['aow_action_type_list']['Date'] = 'Tanggal';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Nilai';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Nama Field';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Menit';
$app_list_strings['aow_date_type_list']['hour'] = 'Jam';
$app_list_strings['aow_date_type_list']['day'] = 'Hari';
$app_list_strings['aow_date_type_list']['week'] = 'Minggu';
$app_list_strings['aow_date_type_list']['month'] = 'Bulan';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Hari ini';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-Mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Pemakai';
$app_list_strings['aow_email_type_list']['Users'] = 'Pemakai';
$app_list_strings['aow_email_to_list']['to'] = 'Kepada';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Always';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Project Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Project Holidays';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kontak';
$app_list_strings['holiday_resource_dom']['Users'] = 'Pemakai';
$app_list_strings['duration_unit_dom']['Days'] = 'Hari';
$app_list_strings['duration_unit_dom']['Hours'] = 'Jam';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'View Gantt';
$app_strings['LBL_CREATE_PROJECT'] = 'Buat Proyek';

//gmaps
$app_strings['LBL_MAP'] = 'Map';
$app_strings['LBL_MAPS'] = 'Maps';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Address';
$app_strings['LBL_BUG_FIX'] = 'Bug Fix';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Maps';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Map Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Map Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Map Address Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'Account';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontak';
$app_list_strings['map_module_type_list']['Cases'] = 'Kasus';
$app_list_strings['map_module_type_list']['Leads'] = 'Lead';
$app_list_strings['map_module_type_list']['Meetings'] = 'Rapat';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Peluang';
$app_list_strings['map_module_type_list']['Project'] = 'Proyek';
$app_list_strings['map_module_type_list']['Prospects'] = 'Target';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Account';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontak';
$app_list_strings['map_relate_type_list']['Cases'] = 'Kasus';
$app_list_strings['map_relate_type_list']['Leads'] = 'Lead';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Rapat';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Peluang';
$app_list_strings['map_relate_type_list']['Project'] = 'Proyek';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Sasaran';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administrasi';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aircraft Small';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Airplane Tourism';
$app_list_strings['marker_image_list']['airport'] = 'Airport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Apartment';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Beach';
$app_list_strings['marker_image_list']['beautiful'] = 'Beautiful';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bicycle Parking';
$app_list_strings['marker_image_list']['big_city'] = 'Big City';
$app_list_strings['marker_image_list']['bridge'] = 'Bridge';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Bridge Modern';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Cable Car';
$app_list_strings['marker_image_list']['car'] = 'Car';
$app_list_strings['marker_image_list']['car_rental'] = 'Car Rental';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'Castle';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathedral';
$app_list_strings['marker_image_list']['chapel'] = 'Chapel';
$app_list_strings['marker_image_list']['church'] = 'Church';
$app_list_strings['marker_image_list']['city_square'] = 'City Square';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Coffee';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Company';
$app_list_strings['marker_image_list']['conference'] = 'Konferensi';
$app_list_strings['marker_image_list']['construction'] = 'Konstruksi';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Court';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Currency Exchange';
$app_list_strings['marker_image_list']['customs'] = 'Customs';
$app_list_strings['marker_image_list']['cycling'] = 'Cycling';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['days_dim'] = 'Days Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Days Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Days Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Days Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Days Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Days Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Days Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Days Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Days Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Days Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Days Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Days Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Days Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Days Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Days Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Days Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Days Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentist';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Deptartment Store';
$app_list_strings['marker_image_list']['disability'] = 'Disability';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Disabled Parking';
$app_list_strings['marker_image_list']['doctor'] = 'Doctor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Down';
$app_list_strings['marker_image_list']['down_left'] = 'Down Left';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Embassy';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Factory';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Falling Rocks';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forest';
$app_list_strings['marker_image_list']['fountain'] = 'Fountain';
$app_list_strings['marker_image_list']['friday'] = 'Jum\'at';
$app_list_strings['marker_image_list']['garden'] = 'Garden';
$app_list_strings['marker_image_list']['gas_station'] = 'Gas Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gifts';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'Rumah';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Library';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'Senin';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcycle';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palace';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Places Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'Places Visited';
$app_list_strings['marker_image_list']['playground'] = 'Playground';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Power Plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Public Art';
$app_list_strings['marker_image_list']['rain'] = 'Rain';
$app_list_strings['marker_image_list']['real_estate'] = 'Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant African';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Fish';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant Greek';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indian';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant Italian';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant Japanese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Korean';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterranean';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexican';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantic';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turkish';
$app_list_strings['marker_image_list']['right'] = 'Right';
$app_list_strings['marker_image_list']['right_then_down'] = 'Right Then Down';
$app_list_strings['marker_image_list']['right_then_up'] = 'Right Then Up';
$app_list_strings['marker_image_list']['satursday'] = 'Satursday';
$app_list_strings['marker_image_list']['school'] = 'School';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Shore';
$app_list_strings['marker_image_list']['sight'] = 'Sight';
$app_list_strings['marker_image_list']['small_city'] = 'Small City';
$app_list_strings['marker_image_list']['snow'] = 'Snow';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Speed 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Speed 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Speed 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Speed 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Speed 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Speed 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Speed 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Speed 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Speed 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Speed 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Speed 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Speed 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadium';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Steam Train';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Subway';
$app_list_strings['marker_image_list']['sun'] = 'Sun';
$app_list_strings['marker_image_list']['sunday'] = 'Minggu';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'Telephone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'Kamis';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'Selasa';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Turn Left';
$app_list_strings['marker_image_list']['turn_right'] = 'Turn Right';
$app_list_strings['marker_image_list']['university'] = 'University';
$app_list_strings['marker_image_list']['up'] = 'Up';
$app_list_strings['marker_image_list']['up_left'] = 'Up Left';
$app_list_strings['marker_image_list']['up_right'] = 'Up Right';
$app_list_strings['marker_image_list']['up_then_left'] = 'Up Then Left';
$app_list_strings['marker_image_list']['up_then_right'] = 'Up Then Right';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Water';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterfall';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'Rabu';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';


//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Out of Office';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In a Meeting';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Please enter the reschedule information';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Tanggal:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Reason:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Please select a valid date';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Please select a reason';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Call attempt history';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Call Attempts';

//SecurityGroups
$app_list_strings["moduleList"]["SecurityGroups"] = 'Security Groups Management';
$app_strings['LBL_LOGIN_AS'] = "Login as ";
$app_strings['LBL_LOGOUT_AS'] = "Logout as ";
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook User';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter User';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Buat Account';
$app_strings['LBL_QUICK_CONTACT'] = 'Buat Kontak';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Buat Peluang';
$app_strings['LBL_QUICK_LEAD'] = 'Buat Lead';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Buat Dokumen';
$app_strings['LBL_QUICK_CALL'] = 'Jadwal Panggilan';
$app_strings['LBL_QUICK_TASK'] = 'Buat Tugas';
$app_strings['LBL_COLLECTION_TYPE'] = 'Tipe';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Dashboard';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Pilih jumlah kolom';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Are you sure you want to delete the';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Discover SuiteCRM';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Tugas', 'Meetings' => 'Rapat', 'Calls' => 'Panggilan', 'Notes' => 'Catatan', 'Emails' => 'Emails' );

?>
