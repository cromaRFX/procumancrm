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
  'language_pack_name' => 'Türkçe (Turkish) - tr_TR',
  'moduleList' =>
  array (
    'Home' => 'Ana Sayfa',
    'Contacts' => 'İlgililer',
    'Accounts' => 'Müşteriler',
    'Opportunities' => 'Fırsatlar',
    'Cases' => 'Şikayetler',
    'Notes' => 'Notlar',
    'Calls' => 'Tel.Aramaları',
    'Emails' => 'E-postalar',
    'Meetings' => 'Toplantılar',
    'Tasks' => 'Görevler',
    'Calendar' => 'Takvim',
    'Leads' => 'Talepler',
    'Currencies' => 'Para Birimleri',
    'Activities' => 'Etkinlikler',
    'Bugs' => 'Hatalar',
    'Feeds' => 'RSS',
    'iFrames'=>'Portal',
    'TimePeriods'=>'Zaman Aralıkları',
    'TaxRates'=>'Vergi Oranları',
    'ContractTypes' => 'Sözleşme türleri',
    'Schedulers'=>'Zaman Çizelgeleri',
    'Project'=>'Projeler',
    'ProjectTask'=>'Proje Görevleri',
    'Campaigns'=>'Kampanyalar',
    'CampaignLog'=>'Kampanya Günlüğü',
    'Documents'=>'Dökümanlar',
    'DocumentRevisions'=>'Belge Revizyonları',
    'Connectors'=>'Bağlayıcılar',
    'Roles'=>'Roller',
    'Notifications'=>'Bildirimler',
    'Sync'=>'Eşitle',
    'Users' => 'Kullanıcılar',
    'Employees' => 'Çalışanlar',
    'Administration' => 'Yönetim',
    'ACLRoles' => 'Roller',
    'InboundEmail' => 'E-posta',
    'Releases' => 'Yayımlar',
    'Prospects' => 'Hedefler',
    'Queues' => 'Kuyruklar',
    'EmailMarketing' => 'E-posta Pazarlama',
    'EmailTemplates' => 'E-Posta Şablonları',
    'SNIP' => "E-posta arşivleme",
    'ProspectLists' => 'Hedef Listeler',
    'SavedSearch' => 'Kayıtlı Aramalar',
    'UpgradeWizard' => 'Yükseltme Sihirbazı',
    'Trackers' => 'İzleyiciler',
    'TrackerPerfs' => 'İzleyici Performansı ',
    'TrackerSessions' => 'İzleyici oturumları',
    'TrackerQueries' => 'İzleyici sorguları',
    'FAQ' => 'SSS',
    'Newsletters' => 'Haber Bülteni',
    'SugarFeed'=>'SuiteCRM Feed',
    'KBDocuments' => 'Bilgi Tabanı',
  'SugarFavorites'=>'SuiteCRM Favorites',

    'OAuthKeys' => 'OAuth Müsteri Anahtarları',
    'OAuthTokens' => 'OAuth belirteçleri',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Ana Sayfa',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'İlgililer',
    'Accounts' => 'Müşteriler',
    'Opportunities' => 'Fırsatlar',
    'Cases' => 'Şikayetler',
    'Notes' => 'Notlar',
    'Calls' => 'Tel.Aramaları',
    'Emails' => 'E-postalar',
    'Meetings' => 'Toplantılar',
    'Tasks' => 'Görevler',
    'Calendar' => 'Takvim',
    'Leads' => 'Talepler',
    'Activities' => 'Etkinlikler',
    'Bugs' => 'Hata İzleme',
    'KBDocuments' => 'Bilgi Tabanı',
    'Feeds' => 'RSS',
    'iFrames'=>'Portalım',
    'TimePeriods'=>'Zaman Aralıkları',
    'Project'=>'Projeler',
    'ProjectTask'=>'Proje Görevleri',
    'Prospects' => 'Hedefler',
    'Campaigns'=>'Kampanyalar',
    'Documents'=>'Dökümanlar',
    'SugarFollowing'=>'SuiteCRM Following',
    'Sync'=>'Eşitle',
    'Users' => 'Kullanıcılar',
  'SugarFavorites'=>'SuiteCRM Favorites'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Evet',
    '2'=>'Hayır',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Analist',
    'Competitor' => 'Rakip',
    'Customer' => 'Müşteri',
    'Integrator' => 'Integrator',
    'Investor' => 'Yatırımcı',
    'Partner' => 'Ortak',
    'Press' => 'Basın',
    'Prospect' => 'Olası Müşteri',
    'Reseller' => 'Bayii',
    'Other' => 'Diğer',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Giyim',
    'Banking' => 'Bankacılık',
    'Biotechnology' => 'Bioteknoloji',
    'Chemicals' => 'Kimya',
    'Communications' => 'İletişim',
    'Construction' => 'İnşaat',
    'Consulting' => 'Danışmanlık',
    'Education' => 'Eğitim',
    'Electronics' => 'Elektronik',
    'Energy' => 'Enerji',
    'Engineering' => 'Mühendislik',
    'Entertainment' => 'Eğlence',
    'Environmental' => 'Çevre',
    'Finance' => 'Finans',
    'Government' => 'Kamu',
    'Healthcare' => 'Sağlık',
    'Hospitality' => 'Hastane',
    'Insurance' => 'Sigorta',
    'Machinery' => 'Makina',
    'Manufacturing' => 'Üretim',
    'Media' => 'Medya',
    'Not For Profit' => 'Sivil Toplum Kuruluşu',
    'Recreation' => 'Rekreasyon',
    'Retail' => 'Toptancı',
    'Shipping' => 'Taşıma',
    'Technology' => 'Teknolji',
    'Telecommunications' => 'Telekomünikasyon',
    'Transportation' => 'Taşıma',
    'Utilities' => 'Alt Yapı',
    'Other' => 'Diğer',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Sıradan Arama',
    'Existing Customer' => 'Mevcut Müşteri',
    'Self Generated' => 'Kendi Kendine ',
    'Employee' => 'Çalışan',
    'Partner' => 'Ortak',
    'Public Relations' => 'Halkla İlişkiler',
    'Direct Mail' => 'Doğrudan Posta',
    'Conference' => 'Konferans',
    'Trade Show' => 'Ticari Etkinlik',
    'Web Site' => 'Web Sitesi',
    'Word of mouth' => 'Tavsiyeyle',
    'Email' => 'E-posta',
    'Campaign'=>'Kampanya',
    'Other' => 'Diğer',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Mevcut Firma',
    'New Business' => 'Yeni Firma',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Ciro',
    'Investment'=>'Yatırım',
    'Expected_Revenue'=>'Beklenen Gelir',
    'Budget'=>'Bütçe',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Karar Verici',
    'Business Decision Maker' => 'Ticari Karar Verici',
    'Business Evaluator' => 'Ticari Değerlendirici',
    'Technical Decision Maker' => 'Teknik Karar Verici',
    'Technical Evaluator' => 'Teknik Değerlendirici',
    'Executive Sponsor' => 'Yönetici Sponsor',
    'Influencer' => 'Etkileyici',
    'Other' => 'Diğer',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Öncelikli İlgili Kişi',
    'Alternate Contact' => 'Alternatif İletişim',
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
      'Elastic' => 'Benzer Arama'
  ),
  'sales_stage_dom' =>
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
    'Closed Lost' => 'Kapandı-Başarısız',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Taslak',
    'Negotiation' => 'Pazarlık',
    'Delivered' => 'Teslim edildi',
    'On Hold' => 'Askıda',
    'Confirmed' => 'Onaylandı',
    'Closed Accepted' => 'Kabul-Kapandı',
    'Closed Lost' => 'Kapandı-Başarısız',
    'Closed Dead' => 'Kapandı-Sonlandı',
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
    'Call' => 'Tel.Araması',
    'Meeting' => 'Toplantı',
    'Task' => 'Görev',
    'Email' => 'E-posta',
    'Note' => 'Not',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Bay',
        'Ms.' => 'Bayan',
        'Mrs.' => 'Bayan',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 90000,
  'reminder_time_options' => array( 60=> 'bir dakika öncesinde',
                                  300=> '5 dakika önceden',
                                  600=> '10 dakika önceden',
                                  900=> '15 dakika önceden',
                                  1800=> '30 dakika öncesinde',
                                  3600=> '1 saat öncesinde',
                                  7200 => '2 saat önce',
                                  10800 => '3 saat önce',
                                  18000 => '5 saat önce',
                                  86400 => '1 gün önceden',
                                 ),

  'task_priority_default' => 'Orta',
  'task_priority_dom' =>
  array (
    'High' => 'Yüksek',
    'Medium' => 'Orta',
    'Low' => 'Düşük',
  ),
  'task_status_default' => 'Başlamadı',
  'task_status_dom' =>
  array (
    'Not Started' => 'Başlamadı',
    'In Progress' => 'İşlemde',
    'Completed' => 'Tamamlandı',
    'Pending Input' => 'Cevap Bekleniyor',
    'Deferred' => 'Ertelendi',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Planlanmış',
    'Held' => 'Askıda',
    'Not Held' => 'Serbest',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Diğer',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Planlanmış',
    'Held' => 'Askıda',
    'Not Held' => 'Serbest',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Gelen',
    'Outbound' => 'Gİden',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Yeni',
    'Assigned' => 'Atanmış',
    'In Process' => 'İşlemde',
    'Converted' => 'Dönüştü',
    'Recycled' => 'Geri dönüşüm',
    'Dead' => 'Sonlandı',
  ),
   'gender_list' =>
  array (
    'male' => 'Bay',
    'female' => 'Bayan',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Yeni',
  'case_status_dom' =>
  array (
    'New' => 'Yeni',
    'Assigned' => 'Atanmış',
    'Closed' => 'Kapandı',
    'Pending Input' => 'Cevap Bekleniyor',
    'Rejected' => 'Reddedildi',
    'Duplicate' => 'Eş Kayıt Oluştur',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Yüksek',
    'P2' => 'Orta',
    'P3' => 'Düşük',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Normal kullanıcı',
    'Administrator' => 'Yönetici',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Aktif',
    'Inactive' => 'Aktif değil',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Aktif',
    'Terminated' => 'İptal edildi',
    'Leave of Absence' => 'Leave of Absence',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Yüksek',
        'Medium' => 'Orta',
        'Low' => 'Düşük',
    ),
    'project_task_priority_default' => 'Orta',

    'project_task_status_options' => array (
        'Not Started' => 'Başlamadı',
        'In Progress' => 'İşlemde',
        'Completed' => 'Tamamlandı',
        'Pending Input' => 'Cevap Bekleniyor',
        'Deferred' => 'Ertelendi',
    ),
    'project_task_utilization_options' => array (
        '0' => 'Etkisiz',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Taslak',
        'In Review' => 'İncelemede',
        'Underway' => 'Çalışmalar devam etmektedir',
        'On_Hold' => 'Askıda',
        'Completed' => 'Tamamlandı',
    ),
    'project_status_default' => 'Taslak',

    'project_duration_units_dom' => array (
        'Days' => 'Gün',
        'Hours' => 'Saat',
    ),

    'project_priority_options' => array (
        'High' => 'Yüksek',
        'Medium' => 'Orta',
        'Low' => 'Düşük',
    ),
    'project_priority_default' => 'Orta',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Müşteriler',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Müşteriler',
    'Opportunities' => 'Fırsatlar',
    'Cases' => 'Şikayetler',
    'Leads' => 'Talepler',
    'Contacts' => 'İlgililer', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Hata İzleme',
    'Project' => 'Projeler',

    'Prospects' => 'Hedefler',
    'ProjectTask' => 'Proje Görevleri',


    'Tasks' => 'Görevler',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Müşteriler',
    'Contacts' => 'İlgililer',
    'Opportunities' => 'Fırsatlar',
    'Tasks' => 'Görevler',
    'Emails' => 'E-postalar',

    'Bugs' => 'Hata İzleme',
    'Project' => 'Projeler',
    'ProjectTask' => 'Proje Görevleri',
    'Prospects' => 'Hedefler',
    'Cases' => 'Şikayetler',
    'Leads' => 'Talepler',

    'Meetings' => 'Toplantılar',
    'Calls' => 'Tel.Aramaları',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Müşteriler',
    'Contacts' => 'İlgililer',
    'Tasks' => 'Görevler',
    'Opportunities' => 'Fırsatlar',



    'Bugs' => 'Hata İzleme',
    'Cases' => 'Şikayetler',
    'Leads' => 'Talepler',

    'Project' => 'Projeler',
    'ProjectTask' => 'Proje Görevleri',

    'Prospects' => 'Hedefler',

  ),

  'issue_priority_default_key' => 'Orta',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Acil',
    'High' => 'Yüksek',
    'Medium' => 'Orta',
    'Low' => 'Düşük',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Kabul',
    'Duplicate' => 'Eş Kayıt Oluştur',
    'Closed' => 'Kapandı',
    'Out of Date' => 'Geçersiz',
    'Invalid' => 'Geçersiz',
  ),

  'issue_status_default_key' => 'Yeni',
  'issue_status_dom' =>
  array (
    'New' => 'Yeni',
    'Assigned' => 'Atanmış',
    'Closed' => 'Kapandı',
    'Pending' => 'Askıda',
    'Rejected' => 'Reddedildi',
  ),

  'bug_priority_default_key' => 'Orta',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Acil',
    'High' => 'Yüksek',
    'Medium' => 'Orta',
    'Low' => 'Düşük',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Kabul',
    'Duplicate' => 'Eş Kayıt Oluştur',
    'Fixed' => 'Sabit',
    'Out of Date' => 'Geçersiz',
    'Invalid' => 'Geçersiz',
    'Later' => 'Sonra',
  ),
  'bug_status_default_key' => 'Yeni',
  'bug_status_dom' =>
  array (
    'New' => 'Yeni',
    'Assigned' => 'Atanmış',
    'Closed' => 'Kapandı',
    'Pending' => 'Askıda',
    'Rejected' => 'Reddedildi',
  ),
   'bug_type_default_key' => 'Hata İzleme',
  'bug_type_dom' =>
  array (
    'Defect' => 'Hatalı',
    'Feature' => 'Özellik',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Yönetim',
    'Product' => 'Ürün',
    'User' => 'Kullanıcı',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Dahili',
    'Forum' => 'Forum',
    'Web' => 'Web',
    'InboundEmail' => 'E-posta'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Müşteriler',
    'Activities' => 'Etkinlikler',
    'Bugs' => 'Hatalar',
    'Calendar' => 'Takvim',
    'Calls' => 'Tel.Aramaları',
    'Campaigns' => 'Kampanyalar',
    'Cases' => 'Şikayetler',
    'Contacts' => 'İlgililer',
    'Currencies' => 'Para Birimleri',
  'Dashboard' => 'Dashboard',
  'Documents' => 'Dökümanlar',
    'Emails' => 'E-postalar',
    'Feeds' => 'Özet akışları',
    'Forecasts' => 'Öngörüler',
    'Help' => 'Yardım',
    'Home' => 'Ana Sayfa',
  'Leads' => 'Talepler',
  'Meetings' => 'Toplantılar',
    'Notes' => 'Notlar',
    'Opportunities' => 'Fırsatlar',
    'Outlook Plugin' => 'Outlook Plugin',
    'Projects' => 'Projeler',
    'Quotes' => 'Fiyat Teklifleri',
    'Releases' => 'Yayımlar',
    'RSS' => 'RSS',
    'Studio' => 'Stüdyo',
    'Upgrade' => 'Yükselt',
    'Users' => 'Kullanıcılar',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Planlama',
        'Active' => 'Aktif',
        'Inactive' => 'Aktif değil',
        'Complete' => 'Tamamlandı',
        'In Queue' => 'Kuyrukta',
        'Sending'=> 'Gönderiliyor',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Tele Satış',
        'Mail' => 'Posta',
        'Email' => 'E-posta',
        'Print' => 'Yazdır',
        'Web' => 'Web',
        'Radio' => 'Radyo',
        'Television' => 'TV',
        'NewsLetter' => 'Haber Bülteni',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Haftalık',
        'Monthly' => 'Aylık',
        'Quarterly' => 'Çeyrek',
        'Annually' => 'Yıllık',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"Ocak",
                '2'=>"Şubat",
                '3'=>"Mart",
                '4'=>"Nisan",
                '5'=>"Mayıs",
                '6'=>"Haziran",
                '7'=>"Temmuz",
                '8'=>"Ağustos",
                '9'=>"Eylül",
                '10'=>"Ekim",
                '11'=>"Kasım",
                '12'=>"Aralık",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Oca",
                '2'=>"Şub",
                '3'=>"Mar",
                '4'=>"Nis",
                '5'=>"Mayıs",
                '6'=>"Haz",
                '7'=>"Tem",
                '8'=>"Ağu",
                '9'=>"Eyl",
                '10'=>"Eki",
                '11'=>"Kas",
                '12'=>"Ara",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Pazar",
                '2'=>"Pazartesi",
                '3'=>"Salı",
                '4'=>"Çarşamba",
                '5'=>"Perşembe",
                '6'=>"Cuma",
                '7'=>"Cumartesi",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"Paz",
                '2'=>"Pts",
                '3'=>"Sal",
                '4'=>"Çar",
                '5'=>"Per",
                '6'=>"Cum",
                '7'=>"Cts",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"öö",
                'pm'=>"ös"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'ÖÖ',
                 'PM'=>'ÖS'
        ),

    'dom_report_types'=>array(
                'tabular'=>'Satırlar ve Sütunlar',
                'summary'=>'Toplam',
                'detailed_summary'=>'Detaylı Toplam',
                'Matrix' => 'Matris',
        ),


    'dom_email_types'=> array(
        'out'       => 'Gönderildi',
        'archived'  => 'Arşivlendi',
        'draft'     => 'Tasarımda',
        'inbound'   => 'Gelen',
        'campaign'  => 'Kampanya'
    ),
    'dom_email_status' => array (
        'archived'  => 'Arşivlendi',
        'closed'    => 'Kapandı',
        'draft'     => 'Tasarımda',
        'read'      => 'Okundu',
        'replied'   => 'Cevaplandı',
        'sent'      => 'Gönderildi',
        'send_error'=> 'Gönderide hata',
        'unread'    => 'Okunmadı',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Arşivlendi',
    ),

    'dom_email_server_type' => array(   ''          => '--boş--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => 'Oluştur [herhangi]',
                                     'createcase'  => 'Şikayet Oluştur',
                                     'bounce'   => 'Bounce Handling',
    ),
    'dom_email_distribution'=> array(''             => '--boş--',
                                     'direct'       => 'Doğrudan atama',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_errors'      => array(1 => 'Yalnızca tek bir kullanıcı doğrudan öğeleri atarken seçin.',
                                     2 => 'Yalnızca işaretli öğeleri doğrudan öğeleri atarken atamanız gerekir.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Evet',
                                     'bool_false' => 'Hayır',
    ),
    'dom_int_bool'          => array(1 => 'Evet',
                                     0 => 'Hayır',
    ),
    'dom_switch_bool'       => array ('on' => 'Evet',
                                        'off' => 'Hayır',
                                        '' => '--boş--', ),

    'dom_email_link_type'   => array(   'sugar'     => 'SuiteCRM Email Client',
                                        'mailto'    => 'Harici Posta İstemcisi'),


    'dom_email_editor_option'=> array(  ''          => '--boş--',
                                        'html'      => 'HTML E-posta',
                                        'plain'     => 'Düz Metin E-posta'),

    'schedulers_times_dom'  => array(   'not run'       => 'Past Run Time, Not Executed',
                                        'ready'         => 'Hazır',
                                        'in progress'   => 'İşlemde',
                                        'failed'        => 'Hatalı',
                                        'completed'     => 'Tamamlandı',
                                        'no curl'       => 'Çalışmıyor: cURL mevcut değil',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Aktif',
        'Inactive' => 'Aktif değil',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'dakika',
        'hour' => 'Saat',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Aktif',
    'Inactive' => 'Aktif değil',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Doğrudan',
    'Rollup' => 'Arttırmak',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Pazarlama',
    'Knowledege Base' => 'Bilgi Tabanı',
    'Sales' => 'Satışlar',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Pazarlama Yardımcıları',
    'Product Brochures' => 'Ürün Broşürleri',
    'FAQ' => 'SSS',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Aktif',
    'Draft' => 'Taslak',
    'FAQ' => 'SSS',
    'Expired' => 'Süresi geçmiş',
    'Under Review' => 'İncelemede',
    'Pending' => 'Askıda',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Posta Birleştir',
    'eula'=>'SKLS',
    'nda'=>'NDA',
    'license'=>'Lisans Sözleşmesi',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Kabul',
    'decline' => 'Reddedildi',
    'tentative' => 'Geçici',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Kabul',
    'decline' => 'Reddedilmiş',
    'tentative' => 'Geçici',
    'none'      => 'boş',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => '--boş--',
    	'Daily'	=> 'Günlük',
	'Weekly' => 'Haftalık',
	'Monthly' => 'Aylık',
	'Yearly' => 'Yıllık',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'gün(ler)',
        'Weekly' => 'hafta(lar)',
        'Monthly' => 'ay(lar)',
        'Yearly' => 'yıl(lar)',
    ),

    'duration_dom' => array(
    	'' => '--boş--',
    	'900' => '15 dk. önce',
	'1800' => '30 dk. önce',
	'2700' => '45 dakika',
	'3600' => '1 saat önce',
	'5400' => '1.5 saat',
	'7200' => '2 saat',
	'10800' => '3 saat',
	'21600' => '6 saat',
	'86400' => '1 gün',
	'172800' => '2 gün',
	'259200' => '3 gün',
	'604800' => '1 hafta',
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
    'default' => 'Varsayılan',
    'seed' => 'Seed',
    'exempt_domain' => 'Suppression List - By Domain',
    'exempt_address' => 'Suppression List - By Email Address',
    'exempt' => 'Suppression List - By Id',
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
    'inactive'=>'Aktif değil'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Message Sent/Attempted',
    'send error'=>'Bounced Messages,Other',
    'invalid email'=>'Karşılıksız mesajlar,geçersiz e-posta',
    'link'=>'Click-thru Link',
    'viewed'=>'Görüntülenmiş Mesaj',
    'removed'=>'Opted Out',
    'lead'=>'Talepler Oluşturuldu',
    'contact'=>'İlgililer oluşturuldu',
    'blocked'=>'Suppressed by address or domain',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'İlgililer',
    'Users'=>'Kullanıcılar',
    'Prospects'=>'Hedefler',
    'Leads'=>'Talepler',
    'Accounts'=>'Müşteriler',
  ),
  'merge_operators_dom' => array (
    'like'=>'İçerir',
    'exact'=>'Tam',
    'start'=>'Başlangıç',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Evet',
    'false'=>'Hayır',
    'required'=>'Gerekli',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Etkisiz',
        '1'=>'Düşük Destek',
        '2'=>'Orta destek',
        '3'=>'Yüksek Destek',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Etkisiz',
        1=>'Etkin',
  ),

  'navigation_paradigms' => array(
        'm'=>'Modüller',
        'gm'=>'Gruplanmış Modüller',
  ),


    'projects_priority_options' => array (
        'high'      => 'Yüksek',
        'medium'    => 'Orta',
        'low'       => 'Düşük',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Başlamadı',
        'inprogress'    => 'İşlemde',
        'completed'     => 'Tamamlandı',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Expand Legend',
        'collapselegend'    => 'Collapse Legend',
        'clickfordrilldown' => 'Detaylar için tıkla',
        'drilldownoptions'  => 'Detaylar için seçenekler',
        'detailview'        => 'Detay görüntüleme...',
        'piechart'          => 'Pie Chart',
        'groupchart'        => 'Group Chart',
        'stackedchart'      => 'Stacked Chart',
        'barchart'      => 'Çubuk grafik',
        'horizontalbarchart'   => 'Yatay çubuk grafik',
        'linechart'         => 'Line Chart',
        'noData'            => 'Veri mevcut değil',
        'print'       => 'Yazdır',
        'pieWedgeName'      => 'bölümler',
    ),
    'release_status_dom' =>
    array (
        'Active' => 'Aktif',
        'Inactive' => 'Aktif değil',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Tek tırnak (\')',
        '"' => 'Çift tırnak (\'\')',
        '' => '--boş--',
        'other' => 'Diğer Telefon',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Diğer Telefon',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Yeni pencere',
        '_self' => 'Aynı pencere',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => '(GMT - 1) Azores',
        '30'  => 'Every 30 seconds',
        '60'  => '1 dk. önce',
        '180'   => 'Her 3 dakikada',
        '300'   => '5 dk. önce',
        '600'   => '10 dk. önce',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Asla',
        '30'  => 'Her 30 saniyede',
        '60'  => '1 dk. önce',
        '180'   => 'Her 3 dakikada',
        '300'   => '5 dk. önce',
        '600'   => '10 dk. önce',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'Eşittir',
    'not_equal' => 'Üzerinde değil',
    'greater_than' => 'Sonra',
    'less_than' => 'Önce',
    'last_7_days' => 'Son  7 gün',
    'next_7_days' => 'Sonraki 7 gün',
    'last_30_days' => 'Son 30 gün',
    'next_30_days' => 'Sonraki 30 gün',
    'last_month' => 'Son ay',
    'this_month' => 'Bu az',
    'next_month' => 'Sonraki ay',
    'last_year' => 'Son yıl',
    'this_year' => 'Bu yıl',
    'next_year' => 'Sonraki yıl',
    'between' => 'arasında',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'Eşittir',
    'not_equal' => 'Eşit değildir',
    'greater_than' => 'Daha Büyük',
    'greater_than_equals' => 'Büyüktür veya eşittir',
    'less_than' => 'Daha Küçük',
    'less_than_equals' => 'Küçük veya eşit',
    'between' => 'arasında',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Kopyala',
        'move' => 'Taşı',
        'donothing' => 'Hiçbir şey yapma',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Sonraki',
  'LBL_TOUR_SKIP' => 'Atla',
  'LBL_TOUR_BACK' => 'Geri',
  'LBL_TOUR_CLOSE' => 'Kapat',
  'LBL_TOUR_TAKE_TOUR' => 'Tur atın',
  'LBL_MY_AREA_LINKS' => 'Alan bağlantılarım: ' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Hava al' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Başla' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Detaylı Arama' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'Daha fazla detay' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Satır içi düzenleme' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Görünüm' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Ara' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Sil' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Ekle' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Sütun' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 sütun' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 sütun' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Detaylı Arama' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Ekle' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Gizle/göster' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Sil' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Ekle' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Temizle' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Sil' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Ekle' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Şirket logosu' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Takvim' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Advanced',
    'LBL_BASIC' => 'Basit',
    'LBL_MODULE_FILTER' => 'Filtre ölçütü',
    'LBL_CONNECTORS_POPUPS'=>'Bağlayıcılar açılan kutular',
    'LBL_CLOSEINLINE'=>'Kapat',
    'LBL_EDITINLINE'=>'Düzenle',
    'LBL_VIEWINLINE'=>'Görünüm',
    'LBL_INFOINLINE'=>'Bilgi:',
    'LBL_POWERED_BY_SUGARCRM' => 'SugarCRM tarafından desteklenmektedir',
    'LBL_PRINT' => 'Yazdır',
    'LBL_HELP' => 'Yardım',
    'LBL_ID_FF_SELECT' => 'Seç ( Alt + T )',
    'DEFAULT'                              => 'Basit',
    'LBL_SORT'                              => 'Sırala',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Sunucu Ekle...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'SMTP SSL ya da TLS etkinleştirilsin mi?',
    'LBL_NO_ACTION'                         => 'Bu adı taşıyan bir eylem yok.',
    'LBL_NO_DATA'                           => 'Veri yok',
    'LBL_ROUTING_ADD_RULE'                  => 'Kural ekle',
    'LBL_ROUTING_ALL'                       => 'En azından',
    'LBL_ROUTING_ANY'                       => 'Herhangi bir',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Vazgeç',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Kural kaydet',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Posta kopyala',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Delete SuiteCRM Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Dosya Sil',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'E-Posta Sil',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'E-Posta İlet',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'E-Posta İşaretle',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Okunmuş Olarak İşaretle',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Okunmamış Olarak İşaretle',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'E-Posta Taşı',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Aşağıdaki aksiyonları yerine getirin',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'E-Postayı Yanıtla',

    'LBL_ROUTING_CHECK_RULE'                => 'Bir hata tespit edildi.',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Lütfen işaretli alanları kontrol edin.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Bu kuralı silmek istediğinizden emin misiniz?',

    'LBL_ROUTING_FLAGGED'                   => 'işaret koy',
    'LBL_ROUTING_FORM_DESC'                 => 'Kaydedilmiş Kurallar hemen aktif hale geçer.',
    'LBL_ROUTING_FW'                        => 'İlet:',
    'LBL_ROUTING_LIST_TITLE'                => 'Kurallar',
    'LBL_ROUTING_MATCH'                     => 'Eğer',
    'LBL_ROUTING_MATCH_2'                   => 'ait aşağıdaki kurallar gerçekleşti:',
    'LBL_NOTIFICATIONS'                     => 'Bildirimler',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'Bilgi',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Metin İçeriği',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'From',
    'LBL_ROUTING_MATCH_NAME'                => 'Konu',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Yüksek Öncelikli',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normal Öncelikli',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Az Öncelikli',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'A',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'İçerir',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'İçermeyen',

    'LBL_ROUTING_NAME'                      => 'Kural Adı',
    'LBL_ROUTING_NEW_NAME'                  => 'Yeni Kural',
    'LBL_ROUTING_ONE_MOMENT'                => 'Bir dakika lütfen...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Ardından orjinal mesaj.',
    'LBL_ROUTING_RE'                        => 'CVP:',
    'LBL_ROUTING_SAVING_RULE'               => 'Kural Kaydediliyor',
    'LBL_ROUTING_SUB_DESC'                  => 'İşaretlenmiş kurallar etkindir.Düzenlemek için adına tıklayınız.',
    'LBL_ROUTING_TO'                        => 'a',
    'LBL_ROUTING_TO_ADDRESS'                => 'Kime adresi',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'Şablon ile',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Telefon ve Adres alanları için formunuzda değer var. Seçmiş olduğunuz Müşteri kaydından telefon/adres bilgileriyle ezmek için, "OK" tuşuna basınız. Şu anki değerleri korumak için, "Cancel" tuşuna basınız.',
  'LBL_DROP_HERE' => 'Buraya bırak',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Düzenle',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Paket Adı:',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Giden Posta Sunucusu',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Mail transfer Agent',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'SMTP Kimlik Doğrulaması Kullanılsın mı?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Şifresi',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Bağlanırken SSL kullan',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Kullanıcı adı',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Varsayılan',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Dikkat: Giden e-posta hesabına ait kullanıcı ismi ve şifresi eksik',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'SMTP Kullanıcı Adı gerekli',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'SMTP Şifresi gerekli',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Posta Hesabı Yönetimi',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Posta Sunucusu Protokolü POP3 bir sonraki versiyonda desteklenmeyecek. Yalnızca IMAP desteklenecek.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'E-posta hesabından gelen e-postaları görüntüleyebilmek için E-posta hesaplarını ayarla',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'Posta Hesaplarındaki giden e-posta için kullanmak amacıyla SMTP posta sunucu bilgilerini temin ediniz.',
    'LBL_EMAIL_ADD'                         => 'Adres Ekle',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Tamam',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Temizle',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'Kime:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'Kime/CC/Gizli',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Yeni Liste',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'E-posta',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Yalnızca kontak değişikliği şu anda desteklenmektedir.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Süzgeçler',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Adı',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Soyadı',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'İlgili Kişilerim',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Posta Listelelerim',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Paket Adı:',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Adres Bulunamadı',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Kaydet ve Adres Defterine Ekle',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Ara',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Adres Defteri Girişlerini Seç',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Adres Defteri',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Raporlar',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Uyarı! Silmeye çalıştığınız giden hesabı mevcuttaki bir gelen hesabı ile ortaktır. Devam etmek istediğinizden emin misiniz?',
    'LBL_EMAIL_ADDRESSES'                   => 'E-posta',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'E-posta Adresi',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'E-posta Adresleri',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Import to SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Atama',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Ekle',
    'LBL_EMAIL_ATTACHMENT'                  => 'Ekle',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Yerel Sistemden',
    'LBL_EMAIL_ATTACHMENTS2'                => 'From SuiteCRM Documents',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Şablon Ekleri',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'DOsya adı ',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Belge',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Gömülmüş',
    'LBL_EMAIL_BCC'                         => 'GizliBilgi',
    'LBL_EMAIL_CANCEL'                      => 'Vazgeç',
    'LBL_EMAIL_CC'                          => 'Bilgi',
    'LBL_EMAIL_CHARSET'                     => 'Karakter Seti',
    'LBL_EMAIL_CHECK'                       => 'Posta kontrol et',
    'LBL_EMAIL_CHECKING_NEW'                => 'Yeni E-Postaları Kontrol Ediyor',
    'LBL_EMAIL_CHECKING_DESC'               => 'Yeni E-Postaları Kontrol Ediyor. <br><br>Posta hesabı için ilk kontol ise biraz daha zaman alabilir.',
    'LBL_EMAIL_CLOSE'                       => 'Kapat',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Yeni E-Postaları Kontrol Ediyor. <br><br>Büyük posta hesapların işlenmesi uzun zaman alabilir.',
    'LBL_EMAIL_COMMON'                      => 'Ortak',

    'LBL_EMAIL_COMPOSE'                     => 'E-posta',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Lütfen bu e-posta için alıcı(ları) girin',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'İlişkili olarak',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Mesaj içeriği boş. Yine de gönderilsin mi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Bu e-posta konu satırı içermiyor. Yine de gönderilsin mi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(konu yok)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Oku & Yeni E-Posta Oluştur',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Posta Hesabından Gönder',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Seçenekler',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Kime, Bilgi ve GizliBilgi alanları için geçerli e-posta adresi giriniz',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Bu e-postayı dikkate alma?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Adres defterinizden bu girişler kaldırılsın mı?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Bu imzayı silmeye emin misiniz?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Kayıt Sırasında Oluştur--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Birden fazla',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Boş',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Gönderen Tarafından Gönderim Tarihi',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Geliş Tarihi',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'Kullanýcýya Atandý',
    'LBL_EMAIL_DATE_TODAY'                  => 'Bugün',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Dün',
    'LBL_EMAIL_DD_TEXT'                     => 'E-Posta(lar) seçildi.',
    'LBL_EMAIL_DEFAULTS'                    => 'Varsayılanlar',
    'LBL_EMAIL_DELETE'                      => 'Sil',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Seçili mesajlar silinsin mi?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'E-Posta başarı ile silindi.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Mesajlar siliniyor',
    'LBL_EMAIL_DETAILS'                     => 'Detaylar',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'E-Posta(ları) gösteriyor. Toplam {2} adetin {0} - {1} aralığı',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'E-Posta adresini(lerini) gösteriyor. Toplam {2} adetin {0} - {1} aralığı',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Kontak Düzenle',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Kontaklar ile çalışırken sadece Asıl Adres kullanılır.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Posta Listesi Değiştir',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Çöp Kutusu Boşaltılıyor',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Gönderim İçin Kullanılan Sunucu Siliniyor',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Ön Bellek Dosyaları Temizleniyor',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Gösterilecek e-posta yok.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Gösterilecek e-posta adresleri yok.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Dizin silinemiyor. Dizin veya alt dizini ilişkilendirilmiş bir posta kutusuna sahip.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Amaçlanan dizini içerikten bulamadı.  Tekrar deneyin.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Lütfen ayarlarınızı kontrol edin.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Soyadı girdiğinizden emin olun.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Tespit edilen hata:',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Bu bölüme erişim izniniz yok. İzin için lütfen site yöneticiniz ile temasa geçin.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'SuiteCRM Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Lütfen arama kriteri giriniz.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Bir hata oluştu',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Bu isimli e-posta listesi zaten mevcut',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Mesaj Sunucudan Silindi',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Mesaj Sunucudan Silindi veya başka bir dizine taşındı',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Posta Sunucusuna bağlantı hata aldı. Lütfen Sistem Yöneticisi ile görüşünüz.',
    'LBL_EMAIL_ERROR_MOVE'                  => 'E-Posta, sunucular arasında taşınıyor ve/veya posta hesabı şu anda desteklenmiyor.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Taşıma hatası',
    'LBL_EMAIL_ERROR_NAME'                  => 'Bir isim gerekli',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Gönderen Adres zorunlu.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Lütfen bir dosya sağlayın.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP dizin isim değişikliği şu anda desteklenmiyor.',
    'LBL_EMAIL_ERROR_SERVER'                => 'Bir Posta Sunucusu adresi gerekiyor.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'Posta hesabı kaydedilmemiş olabilir.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Posta Sunucusu ile iletişim sırasında bir hata oluştu.',
    'LBL_EMAIL_ERROR_USER'                  => 'Bağlantı ismi gerekli.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'Şifre gerekli.',
    'LBL_EMAIL_ERROR_PORT'                  => 'Posta Sunucusu Portu gerekli.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'Sunucu Protokolü gerekli.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'İzlenen Dizin gerekli.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Silinenler Dizini gerekli.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Bu bilgi yok',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'Giden posta sunucusu belirlenmemiştir.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Klasörler',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Taşı',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Ekle',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Yeni Dizin Ekle',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Dizin İsmini Değiştir',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Kaydet',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Bu dizini ekle:',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Bu dizin değiştirilemez',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Bu dizini silmek istediğinizden emin misiniz?\nBu işlem geri döndürülemez.\nDizin silme bütün alt dizilere de uygulanacak.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Yeni Dizin Adı',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Lütfen bu aksiyonu yerine getirmeden önce dizin seçiniz.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Sugar Dizin Yönetimi',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Grup Kullanıyor',

    'LBL_EMAIL_FORWARD'                     => 'Forward',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Toplam [[total]] e-postanın [[count]] adedini İndirdi',
    'LBL_EMAIL_FOUND'                       => 'Bulundu',
    'LBL_EMAIL_FROM'                        => 'From',
    'LBL_EMAIL_GROUP'                       => 'Grup',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Grup',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Başla',
    'LBL_EMAIL_HTML_RTF'                    => 'HTML Gönder',
    'LBL_EMAIL_IE_DELETE'                   => 'Posta Hesabı Siliniyor',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'İmza siliniyor',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Bu posta hesabını silmek istediğinizden emin misiniz?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Silme başarı ile gerçekleşti',
    'LBL_EMAIL_IE_SAVE'                     => 'Posta hesabı bilgisi kaydediliyor',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'E-Posta içeri alınıyor',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Import to SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'İçeri Aktar',
    'LBL_EMAIL_INVALID'                     => 'Geçersiz',
    'LBL_EMAIL_LOADING'                     => 'Yükleniyor...',
    'LBL_EMAIL_MARK'                        => 'İşaretle',
    'LBL_EMAIL_MARK_FLAGGED'                => 'İşaretlendi',
    'LBL_EMAIL_MARK_READ'                   => 'Okundu',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'İşaretlenmedi',
    'LBL_EMAIL_MARK_UNREAD'                 => 'Okunmadı',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Atandı',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Dizin oluştur',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Oluştur',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Dizin Sil',
    'LBL_EMAIL_MENU_EDIT'                   => 'Düzenle',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Silinenleri Boşalt',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Senkronize',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Ön Bellek dosyalarını temizle',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Sil',
    'LBL_EMAIL_MENU_RENAME'                 => 'Yeniden Adlandır',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Dizini Yeniden Adlandır',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Dizini Yeniden Adlandırıyor',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Bu işlemi tekrar etmeden önce lütfen bir seçim yapın.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archive these email(s) to SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Seçili Posta Listelerine E-Posta Gönder',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Bu Kontağa E-Posta Gönder',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Kontağı Kaldır',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Bu E-Posta(ları) sil',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Kontak Düzenle',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Posta Listesi Değiştir',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Bütün Posta Kutunuzdaki Silinmiş dizinlerini temizler',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'E-Posta(ları) İşaretlenmiş olarak işaretle',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'E-Posta(ları) Okunmuş olarak işaretle',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'E-Posta(ları) İşaretlenmemiş olarak işaretle',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'E-Posta(ları) Okunmamış olarak işaretle',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Posta Listelerini Siler',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Rename a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Bu E-Postaları Yanıtlandır',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'E-Postaların Tüm Alıcılarına Yanıt Gönder',

    'LBL_EMAIL_MESSAGES'                    => 'mesajlar',

    'LBL_EMAIL_ML_NAME'                     => 'Liste Adı',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Seçilmiş Liste Adresleri',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Mevcut Liste Adresleri',

    'LBL_EMAIL_MULTISELECT'                 => 'Birden fazla seçmek için <b>Ctrl-Tıkla</b><br />(Mac kullanıcıları <b>CMD-Tıkla</b> kullanın)',

    'LBL_EMAIL_NO'                          => 'Hayır',
    'LBL_EMAIL_NOT_SENT'                    => 'Sistem talebinizi yerine getiremiyor. Lütfen sistem yöneticisine başvurun.',

    'LBL_EMAIL_OK'                          => 'Tamam',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Bir dakika lütfen...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Birden Fazla Mesaj Aç',
    'LBL_EMAIL_OPTIONS'                     => 'Seçenekler',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Hızlı E-Posta Yarat',
    'LBL_EMAIL_OPT_OUT'                     => 'Opted Out',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Opted Out and Invalid',
    'LBL_EMAIL_PAGE_AFTER'                  => '{0} adetin',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Sayfa',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Adımı Gerçekleştiriyor',
    'LBL_EMAIL_PRIMARY'                     => 'Birincil',
    'LBL_EMAIL_PRINT'                       => 'Yazdır',

    'LBL_EMAIL_QC_BUGS'                     => 'Hata İzleme',
    'LBL_EMAIL_QC_CASES'                    => 'Şikayetler',
    'LBL_EMAIL_QC_LEADS'                    => 'Talepler',
    'LBL_EMAIL_QC_CONTACTS'                 => 'İlgili ',
    'LBL_EMAIL_QC_TASKS'                    => 'Görev',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Fırsatlar',
    'LBL_EMAIL_QUICK_CREATE'                => 'Hızlı Oluştur',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Dizinleri Tekrar Oluşturuyor',
    'LBL_EMAIL_RELATE_TO'                   => 'Bağlantı kur',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'İlişkileri Görüntüleme',
    'LBL_EMAIL_RECORD'                => 'E-Posta Kaydı',
    'LBL_EMAIL_REMOVE'                      => 'Sil',
    'LBL_EMAIL_REPLY'                       => 'Yanıtla',
    'LBL_EMAIL_REPLY_ALL'                   => 'Tümünü Yanıtla',
    'LBL_EMAIL_REPLY_TO'                    => 'Yanıt',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'E-Posta Listesi Getiriliyor',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Mesaj Getiriliyor',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'E-Posta Kaydını Getiriyor',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Lütfen yalnızca bir e-posta seçiniz',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Bir önceki modüle dönmek istiyor musunuz?',
    'LBL_EMAIL_REVERT'                      => 'Geri Al',
    'LBL_EMAIL_RELATE_EMAIL'                => 'E-Posta İlişkilendir',

    'LBL_EMAIL_RULES_TITLE'                 => 'Kural Yönetimi',

    'LBL_EMAIL_SAVE'                        => 'Kaydet',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Kaydet & Yanıtla',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Taslak Kaydet',

    'LBL_EMAIL_SEARCHING'                   => 'Arama Başlatıyor',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Detaylı Arama',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Başlangıç Tarihi',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Bitiş Tarihi',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'E-Posta İçi Metin',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Arama Kriterinizle Eşleşen Kayıt Bulunamadı.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Arama sonucu',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Basit Arama',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'E-Posta Hesabı Arama',

    'LBL_EMAIL_SELECT'                      => 'Seç ( Alt + T )',

    'LBL_EMAIL_SEND'                        => 'Gönder [Alt+S]',
    'LBL_EMAIL_SENDING_EMAIL'               => 'E-Posta Gönderiliyor',

    'LBL_EMAIL_SETTINGS'                    => 'Ayarlar',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 Satır',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 sütun',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Sayfa Düzeni Stili',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Posta Hesapları',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Formu Temizle',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Görüntülemek İçin E-Posta Yükle',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Yeni E-Posta Kontrol Et',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Ön İzleme Panelini Kullan',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Açılır Pencere Kullan',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Sayfa başına e-posta sayısı',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Posta Hesabı Düzenle',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Dizinler',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'From Address',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Test Bildirisi için E-Posta Adresi',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'E-posta Adresine',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => '"Kimden" İsim',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Adrese Cevap ver',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Tam Ekran',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Bütün Posta Hesaplarını Senkronize Et',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'Temin edilen giden posta ayarlarını kullanarak bir e-posta belirlenen e-posta adresine gönderildi.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Bu aksiyon posta hesaplarını ve içeriklerini senkronize edecek.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Tam Senkronizasyon İstiyor musunuz?\nBüyük posta hesapları birkaç dakika alabilir.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Birden fazla dizin seçmek için Shift tuşuna veya Ctrl tuşuna basınız.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Genel',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Mevcut Grup Dizinleri',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Grup Dizinleri Oluştur',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Grup Dizinlerini Kaydediyor',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Grup Dizinini Getiriyor',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Grup Dizini Düzenle',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Paket Adı:',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Bu ayarların aktif hale gelmesi için sayfanın yeniden yüklenmesi gerekebilir.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Posta hesabı alınıyor',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Kurallar',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Ayarlar saklandı.\n\nYeni ayarların etkisini görmek için sayfayı yükleyiniz.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Düz Metin Olarak E-Posta Gönder',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Aktif',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Sayfa Başına E-Posta Sayısı',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Sekmeleri alta yerleştir',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Görsel ayarlar',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Tercihler',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Show Advanced',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Kullanılabilir kullanıcı klasörleri',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Hata:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Kullandığınız posta hesabı için seçilmiş posta sunucusu geçersizdir. Ayarları kontorl ediniz veya posta hesabınız için farklı bir posta sunucusu seçiniz.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Bir giden posta sunucusu e-posta göndermek için yapıalndırılmamıştır. Lütfen giden mesaj sunucusunu yapılandırın veya Ayarlar\'da kullandığınız posta hesabı için bir giden posta sunucusu seçiniz.',
    'LBL_EMAIL_SHOW_READ'                   => 'Tümünü göster',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Yalnızca okunmamışları göster',
    'LBL_EMAIL_SIGNATURES'                  => 'İmzalar',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'İmza oluştur',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'İmza adı',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'İmza alanı',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! posta',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Diğer',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Uzaktaki Dizinler ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ SuiteCRM Folders ]',
    'LBL_EMAIL_SUBJECT'                     => 'Konu',
    'LBL_EMAIL_SUCCESS'                     => 'Başarılı',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'E-Posta Şablon içeriği boş',
    'LBL_EMAIL_TEMPLATES'                   => 'Şablonlar',
    'LBL_EMAIL_TEXT_FIRST'                  => 'İlk sayfa',
    'LBL_EMAIL_TEXT_PREV'                   => 'Önceki sayfa',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Sonraki sayfa',
    'LBL_EMAIL_TEXT_LAST'                   => 'Son sayfa',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Yenile',
    'LBL_EMAIL_TO'                          => 'A',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Listeyi Aç/Kapa',
    'LBL_EMAIL_VIEW'                        => 'Görünüm',
    'LBL_EMAIL_VIEWS'                       => 'Görünümler',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Başlıkları görüntüle',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Yazdırılabilir Sürüm',
    'LBL_EMAIL_VIEW_RAW'                    => 'Ham e-posta görüntüleme',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'POP3 ile kullanıldığında, bu özellik desteklenmez.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Varsayılan bağlantı metni.',
    'LBL_EMAIL_YES'                         => 'Evet',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Sınama e-posta gönder',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Sınama e-posta gönderildi',
    'LBL_EMAIL_MESSAGE_NO'                  => 'İleti No',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Veri Yükleme Başarılı',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Veri Yükleme Başarısız, mesaj zaten yüklenmiş veya sunucudan silinmiş olabilir',

    'LBL_LINK_NONE'=> 'boş',
    'LBL_LINK_ALL'=> 'Tümü',
    'LBL_LINK_RECORDS'=> 'Kayıtlar',
    'LBL_LINK_SELECT'=> 'Seç ( Alt + T )',
    'LBL_LINK_ACTIONS'=> 'Eylemler',
    'LBL_LINK_MORE'=> 'Daha',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Onayla",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "#module# 'ü kapamak istiyor musunuz?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Bu mesajı daha sonra gösterme:",
    'LBL_INVALID_FILE_EXTENSION' => 'Geçersiz dosya uzantısı',


    'ERR_AJAX_LOAD'     => 'Bir hata oluştu:',
    'ERR_AJAX_LOAD_FAILURE'     => 'There was an error processing your request, please try again at a later time.',
    'ERR_AJAX_LOAD_FOOTER' => 'If this error persists, please have your administrator disable Ajax for this module',
    'ERR_CREATING_FIELDS' => 'Ek detay alanlarýnda doldurma hatasý',
    'ERR_CREATING_TABLE' => 'Tablo Yaratýrken Hata',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "Ondalık ayıracı karakteri Binlik ayıracı ile aynı olamaz.\n\n  Lütfen değerleri değiştiriniz.",
    'ERR_DELETE_RECORD' => 'Ýlgili Kiþi Silmek Ýçin Bir Kayýt Numarasý Olmalýdýr',
    'ERR_EXPORT_DISABLED' => 'Veri Aktarma Etkisizleştirildi.',
    'ERR_EXPORT_TYPE' => 'Dýþarý Atýlýrken Hata',
    'ERR_INVALID_AMOUNT' => 'Lütfen geçerli bir miktar girin',
    'ERR_INVALID_DATE_FORMAT' => 'The date format must be: ',
    'ERR_INVALID_DATE' => 'Lütfen geçerli bir tarih girin',
    'ERR_INVALID_DAY' => 'Lütfen geçerli bir gün girin',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Email  geçerli deðil',
    'ERR_INVALID_FILE_REFERENCE' => 'Referans Dosyasý Geçersiz',
    'ERR_INVALID_HOUR' => 'Lütfen geçerli bir saat girin',
    'ERR_INVALID_MONTH' => 'Lütfen geçerli bi ay girin',
    'ERR_INVALID_TIME' => 'Lütfen geçerli bi zaman girin',
    'ERR_INVALID_YEAR' => 'Lütfen geçerli bir yýl girin, 4 rakamdan olþucak',
    'ERR_NEED_ACTIVE_SESSION' => 'İçeriğin aktarılabilmesi için aktif bir oturum gerekmektedir.',
    'ERR_NO_HEADER_ID' => 'Bu özellik bu temada geçersizdir.',
    'ERR_NOT_ADMIN' => "Yönetim giriþine izin verilmedi",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Gerekli alan eksik:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Zorunlu alanda geçersiz değer:',
    'ERR_INVALID_VALUE' => 'Geçersiz Deðer:',
    'ERR_NO_SUCH_FILE' =>'Sistemde dosya mevcut deðil',
    'ERR_NO_SINGLE_QUOTE' => 'Tek parça iþaret için kullanýlmaz',
    'ERR_NOTHING_SELECTED' =>'Lütfen başlamadan önce bir seçim yapınız.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Fýrsat ismi zaten var.Lutfen baska bi isim girin.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Fýrsat ismi girilmedi.Lutfen fýrsat ismi altýna girin.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Kullanıcısı kendi kendisine raporlayamaz',
    'ERR_SINGLE_QUOTE'  => 'Bu alan için tek tırnak işaretinin kullanımı desteklememektedir.  Lütfen değeri değiştirin.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Alan için karþýlýk yok',
    'ERR_SQS_NO_MATCH' =>'karþýlýk yok',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Lütfen Meta-Data tanımı için displayParams parametresinde \'key\' endeksini belirtin',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Hata: Portal İsmi başka bir kontağa zaten atanmış.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Kesinlik değeri ile alan değeri uyumlu değil',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'An error occurred while uploading.  Please ensure the file you are uploading is not empty.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to SuiteCRM error log file for details.',
    'ERR_DB_FAIL' => 'Database failure. Please refer to SuiteCRM error log file for details.',
    'ERR_EXTERNAL_API_403' => 'Permission Denied. File type is not supported.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth Access Token is missing.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} files may only be used with a SuiteCRM {1} database.',


    'LBL_ACCOUNT'=>'Müþteri',
    'LBL_OLD_ACCOUNT_LINK'=>'Eski hesap',
    'LBL_ACCOUNTS'=>'Müþteriler',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Etkinlikler',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Özeti Göster',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Özeti Gözster [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Ekle [Alt + A]',
    'LBL_ADD_BUTTON' => 'Ekle',
    'LBL_ADD_DOCUMENT' => 'Doküman Ekle',
    'LBL_REPLACE_BUTTON' => 'Değiştir',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Hedef Listesine Ekle',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Hedef Listesine Ekle',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kapata týklayýn',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Kapat',
    'LBL_ADDITIONAL_DETAILS' => 'Ek Detaylar',
    'LBL_ADMIN' => 'Yönetici',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arþiv',
    'LBL_ASSIGNED_TO_USER'=>'Kullanýcýya Atandý',
    'LBL_ASSIGNED_TO' => 'Kime Atandý',
    'LBL_BACK' => 'Geri',
    'LBL_BILL_TO_ACCOUNT'=>'Müþteriye Fatura',
    'LBL_BILL_TO_CONTACT'=>'Ýlgili Kiþiye Fatura',
    'LBL_BILLING_ADDRESS'=>'Fatura adresi',
    'LBL_QUICK_CREATE_TITLE' => 'Hızlı Oluştur',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS'=>'Hatalar',
    'LBL_BY' => 'tarafýndan',
    'LBL_CALLS'=>'Aramalar',
    'LBL_CALL'=>'Tel.Araması',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Gönder',
    'LBL_CASE'=>'Sorun',
    'LBL_CASES'=>'Sorunlar',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Parola Değiştir',
    'LBL_CHANGE_BUTTON_LABEL' => 'Deðiþtir',
    'LBL_CHANGE_BUTTON_TITLE' => 'Deðiþtir [ Alt + G ]',
    'LBL_CHARSET' => 'ISO-8859-9',
    'LBL_CHECKALL' => 'Hepsini Ýþaretle',
    'LBL_CITY' => 'Şehir',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Sil',
    'LBL_CLEAR_BUTTON_TITLE' => 'Sil [ Alt + C ]',
    'LBL_CLEARALL' => 'Hepsini Sil',
    'LBL_CLOSE_BUTTON_TITLE' =>'Kapat',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Ekraný Kapat',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Hespini Kapat',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Hespini Kapat [ Alt + I ]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Kapat ve Yeni Yarat [ Alt + C ]',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Kapat ve Yeni Yarat [ Alt + C ]',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Açık öğeler:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Email Birleþtir',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Email Birleþtir [ Alt + L ]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Evet',
    'LBL_SEARCH_DROPDOWN_NO'=>'Hayır',
    'LBL_CONTACT_LIST' => 'Ýlgili Kiþi Listesi',
    'LBL_CONTACT'=>'Ýlgili Kiþi',
    'LBL_CONTACTS'=>'Ýlgili Kiþiler',
    'LBL_CONTRACTS'=>'Kontratlar',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_CREATE_BUTTON_LABEL' => 'Yarat',
    'LBL_CREATED_BY_USER'=>'Kullanýcýdan Yaratýldý',
    'LBL_CREATED_USER'=>'Oluşturan Kullanıcı',
    'LBL_CREATED_ID' => 'Oluşturan Id:',
    'LBL_CREATED' => 'Yaratan',
    'LBL_CURRENT_USER_FILTER' => 'Sadece Benim Olanlar',
    'LBL_CURRENCY'=>'Para Birimi',
    'LBL_DOCUMENTS'=>'Dökümanlar',
    'LBL_DATE_ENTERED' => 'Yaratýldýðý Tarih',
    'LBL_DATE_MODIFIED' => 'Son Deðiþiklik',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_DUPLICATE_BUTTON' => 'Çift',
    'LBL_DELETE_BUTTON' => 'Sil',
    'LBL_DELETE' => 'Sil',
    'LBL_DELETED'=>'Silindi',
    'LBL_DIRECT_REPORTS'=>'Direkt Raporlar',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Tamamlanmýþ',
    'LBL_DONE_BUTTON_TITLE' => 'Tamamlanmýþ [ Alt + X ]',
    'LBL_DST_NEEDS_FIXIN' => 'The application requires a Daylight Saving Time fix to be applied.  Please go to the <a href="index.php?module=Administration&action=DstFix">Repair</a> link in the Admin console and apply the Daylight Saving Time fix.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Yeni olarak düzenle',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Yeni olarak düzenle',
    'LBL_FAVORITES' => 'Sık Kullanılanlar',
    'LBL_FILTER_MENU_BY' => 'Filter Menu By',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Lütfen bir vCard dosyası seçiniz',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'vCard Verisini Yükle:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'vCard İçeri Aktar',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'vCard İçeri Aktar',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Görünüm',
    'LBL_VIEW_BUTTON_TITLE' => 'Görünüm ( Alt + V )',
    'LBL_VIEW_BUTTON' => 'Görünüm',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'PDF Olarak Gönder',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'PDF Olarak Gönder [ Alt + M ]',
    'LBL_EMAILS'=>'Emailler',
    'LBL_EMPLOYEES' => 'Çalýþanlar',
    'LBL_ENTER_DATE' => 'Tarih Giriþi',
    'LBL_EXPORT_ALL' => 'Hepsini Dýþarý Al',
    'LBL_EXPORT' => 'Dýþarý Al',
    'LBL_FAVORITES_FILTER' => 'Favorilerim:',
    'LBL_GO_BUTTON_LABEL' => 'Git',
    'LBL_GS_HELP' => 'The fields in this module used in this search appear above.  The highlighted text matches your search criteria.',
    'LBL_HIDE'=>'Gizle',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => 'Ekle',
    'LBL_IMPORT_STARTED' => 'Ekleme baþlatýldý',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'sugar tarafýndan yazýlabýlýr olmalý',
    'LBL_LAST_VIEWED' => 'Son Görüntü',
    'LBL_SHOW_LESS' => 'Daha az göster',
    'LBL_SHOW_MORE' => 'Daha fazla göster',
    'LBL_TODAYS_ACTIVITIES' => 'Bugünün Aktiviteleri',
    'LBL_LEADS'=>'Kaynaklar',
    'LBL_LESS' => 'daha az',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CAMPAIGNLOG' => 'KampanyaLogu',
    'LBL_CAMPAIGN_CONTACT'=>'Kampanyalar',
    'LBL_CAMPAIGN_ID'=>'Kampanya_ID',
    'LBL_SITEMAP'=>'Site Haritası',
    'LBL_THEME'=>'Tema',
    'LBL_THEME_PICKER'=>'Sayfa stili',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Warning: Internet Explorer 6 is not supported for the selected theme. Click OK to select it anyways or Cancel to select a different theme.',
    'LBL_FOUND_IN_RELEASE'=>'Bulunduğu Versiyon',
    'LBL_FIXED_IN_RELEASE'=>'Sürümde sabit',
    'LBL_LIST_ACCOUNT_NAME' => 'Müþteri Ýsmi',
    'LBL_LIST_ASSIGNED_USER' => 'Kullanýcý',
    'LBL_LIST_CONTACT_NAME' => 'Ýlgili Kiþi Ýsmi',
    'LBL_LIST_CONTACT_ROLE' => 'Ýlgili Kiþi Rolü',
    'LBL_LIST_DATE_ENTERED'=>'Giriş Tarihi',
    'LBL_LIST_EMAIL' => 'E-postalar',
    'LBL_LIST_NAME' => 'Ýsim',
    'LBL_LIST_OF' => '/',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'İlişkili ',
    'LBL_LIST_USER_NAME' => 'Kullanýcý Ýsmi',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Tam listeyi güncellemek istediðinize eminmisiniz  ?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Lütfen işlem için en az bir kayıt seçin',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Lütfen işlem için en azından 2 kayıt seçin',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Lütfen devam etmek için 10 kayıttan daha az seçin.',
    'LBL_LISTVIEW_ALL' => 'Tümü',
    'LBL_LISTVIEW_NONE' => 'Tümünü Kaldır',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Þu Andaki Sayfa',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Giriþ Listesi',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Kayýtlarý Seç',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Seçildi',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Bay',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Program Geliştirme Uzmanı',
    'LBL_LOGIN_TO_ACCESS' => 'Lütfen bu alana erişmek için oturum açın.',
    'LBL_LOGOUT' => 'Oturumdan Çýk',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'posta birleþtir',
    'LBL_MASS_UPDATE' => 'TOPLU GÜNCELLEME',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Asıl E-Postayı Listeden Çıkar',
    'LBL_MEETINGS'=>'Toplantýlar',
    'LBL_MEETING'=>'Toplantı',
    'LBL_MEETING_GO_BACK'=>'Go back to the meeting',
    'LBL_MEMBERS'=>'Üyeler',
    'LBL_MEMBER_OF'=>'Üyesi',
    'LBL_MODIFIED_BY_USER'=>'Kullanýcý tarafýndan deðiþtirildi:',
    'LBL_MODIFIED_USER'=>'Değiştiren Kullanıcı',
    'LBL_MODIFIED' => 'Deðiþtiren',
    'LBL_MODIFIED_NAME'=>'Değiştiren Adı:',
    'LBL_MODIFIED_ID'=>'Değiştiren ID:',
    'LBL_MORE' => 'Daha fazla',
    'LBL_MY_ACCOUNT' => 'Kendi Hesabým',
    'LBL_NAME' => 'Ýsim',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Yarat',
    'LBL_NEW_BUTTON_TITLE' => 'Yarat [ Alt + N ]',
    'LBL_NEXT_BUTTON_LABEL' => 'Ýleri',
    'LBL_NONE' => 'Yok',
    'LBL_NOTES'=>'Notlar',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Tümünü Aç',
    'LBL_OPENALL_BUTTON_TITLE' => 'Tümünü Aç',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Aç',
    'LBL_OPENTO_BUTTON_TITLE' => 'Aç: [ Alt + T ]',
    'LBL_OPPORTUNITIES'=>'Fýrsatlar',
    'LBL_OPPORTUNITY_NAME' => 'Fýrsat Ýsmi',
    'LBL_OPPORTUNITY'=>'Fýrsat',
    'LBL_OR' => 'veya',
    'LBL_LOWER_OR' => 'veya',
    'LBL_PANEL_OVERVIEW' => 'Hedef Bilgi',
    'LBL_PANEL_ASSIGNMENT' => 'Diğer',
    'LBL_PANEL_ADVANCED' => 'Daha fazla bilgi',
    'LBL_PARENT_TYPE' => 'Ana Tipi',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Aralık',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Öncelikli Adres Şehir:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Öncelikli Adres Ülke:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Öncelikli Adres Posta Kodu:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Öncelikli Adres Eyalet:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Öncelikli Adres Cadde 2 :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Öncelikli Adres Cadde 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Öncelikli Adres Cadde:',
    'LBL_PRIMARY_ADDRESS' => 'Öncelikli Adres:',

	'LBL_BILLING_STREET'=> 'Cadde:',
	'LBL_SHIPPING_STREET'=> 'Cadde:',

    'LBL_PROSPECTS'=>'Olası Müşteriler ',
    'LBL_PRODUCT_BUNDLES'=>'Product Bundles',
    'LBL_PRODUCTS'=>'Ürünler',
    'LBL_PROJECT_TASKS'=>'Proje Görevleri',
    'LBL_PROJECTS'=>'Projeler',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Teklifden Fýrsat Yarat',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Teklifden Fýrsat Yarat [ Alt + O ]',
    'LBL_QUOTES_SHIP_TO'=>'Faturanýn gönderim yeri',
    'LBL_QUOTES'=>'Verilen fiyatlar',

    'LBL_RELATED' => 'Bağlantılı',
    'LBL_RELATED_INFORMATION' => 'İlgili bilgiler',
    'LBL_RELATED_RECORDS' => 'Ýlgili kayýtlar',
    'LBL_REMOVE' => 'Sil',
    'LBL_REPORTS_TO' => 'Raporlanacak Kişi',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Gerekli Alanýn Belirtisi',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Tamam',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Farklý Kaydet',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Farklý Kaydet',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Görünüþü tam göster',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Görünüþü tam göster [Alt + F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Kaydet ve Yeni Oluþtur',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Kaydet ve Yeni Oluþtur [Alt + V]',
    'LBL_SAVE_OBJECT' => '{0} Kaydet',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Ara',
    'LBL_SEARCH_BUTTON_TITLE' => 'Search [Alt+Q]',
    'LBL_SEARCH' => 'Ara',
    'LBL_SEARCH_TIPS' => "Arama düğmesine basın veya tam bir eşleşme almak için Enter tuşuna tıklatın",
    'LBL_SEARCH_TIPS_2' => "Arama düğmesine basın veya tam bir eşleşme almak için Enter tuşuna tıklatın",
    'LBL_SEARCH_MORE' => 'daha fazla',
    'LBL_SEE_ALL' => 'Hepsini gör',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Geçersiz dosya biçimi, yalnızca görüntü dosyasını yüklenebilir.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Seç',
    'LBL_SELECT_BUTTON_TITLE' => 'Seç ( Alt + T )',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Takım(ları)  Ekle',
    'LBL_SELECT_TEAMS_TITLE' => 'Takım(ları)  Ekle',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Belgelere göz atın',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Belgelere göz atın',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Ýlgili Kiþi Seç',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Kontak Seç [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'Seçimi Temizle',
    'LBL_GRID_SELECTED_FILES' => 'Seçimi Temizle',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Raporlardan Seç',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Raporlar Seç:',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Kullanýcýyý Seç',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Kullanýcýyý Seç',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Seçimi Temizle',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Seçimi Temizle',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Seçimi Temizle',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Seçimi Temizle',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Dosya seç',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Dosya seç',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Dosya temizle',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Dosya temizle',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Kullanýcýyý Seç',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Kullanýcýyý Seç',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Kullanıcı temizle',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Kullanıcı temizle',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Müşteri Seç',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Müşteri Seç',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Hesabı temizle',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Hesabı temizle',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Kampanyayı seç',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Kampanyayı seç',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Kampanya temizle',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Kampanya temizle',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Kontak Seç [Alt+T]',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Kontak Seç [Alt+T]',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'İlgilileri temizle',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'İlgilileri temizle',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Takım seç',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Takım seç',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Takımı temizle',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Takımı temizle',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Bu sayfayý oluþturmak için kullanýlan kaynaklar (sorgular, dosyalar)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'saniye.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server response time:',
    'LBL_SERVER_MEMORY_BYTES' => 'bayt sayısı',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Memory Usage: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Gönderilecek Müşteri',
    'LBL_SHIP_TO_CONTACT'=>'Gönderilecek Kontak',
    'LBL_SHIPPING_ADDRESS'=>'Teslim adresi',
    'LBL_SHORTCUTS' => 'Kýsayol',
    'LBL_SHOW'=>'Göster',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Eyalet:',
    'LBL_STATUS_UPDATED'=>'Bu Etkinlik için durumunuz güncellendi!',
    'LBL_STATUS'=>'Statüler',
    'LBL_STREET'=>'Sokak',
    'LBL_SUBJECT' => 'Konu',

    'LBL_INBOUNDEMAIL_ID' => 'Gelen e-posta ID',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2011 SugarCRM Inc. Program BU HALİYLE, garanti verilmeden sunulmaktadır.  <a href="LICENSE.txt" target="_blank" class="copyRightLink">GPLv3</a> başlığı altında lisanslanmaktadır.<br /> Diğer tüm şirket ve ürün isimleri ilişkili olduğu şirketlerin ticari markası olabilir.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2011 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Tüm Hakları Saklıdır.<br />SugarCRM, SugarCRM, Inc. in ticari markasıdır. Diğer tüm şirket ve ürün isimleri ilişkili olduğu şirketlerin ticari markası olabilir.',


    'LBL_SYNC' => 'Senkronize',
    'LBL_TABGROUP_ALL' => 'Hepsi',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiviteler',
    'LBL_TABGROUP_COLLABORATION' => 'Ýþ Birliði',
    'LBL_TABGROUP_HOME' => 'Anasayfa',
    'LBL_TABGROUP_MARKETING' => 'Pazarlama',
    'LBL_TABGROUP_MY_PORTALS' => 'portalým',
    'LBL_TABGROUP_OTHER' => 'Diðer',
    'LBL_TABGROUP_REPORTS' => 'Raporlar',
    'LBL_TABGROUP_SALES' => 'Satýþ',
    'LBL_TABGROUP_SUPPORT' => 'Destek',
    'LBL_TABGROUP_TOOLS' => 'Araçlar',
    'LBL_TASKS'=>'Görevler',
    'LBL_TEAMS_LINK'=>'Takým',
    'LBL_THEME_COLOR'=>'Renk',
    'LBL_THEME_FONT'=>'Yazı tipi',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arþiv Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arþiv Email',
    'LBL_UNAUTH_ADMIN' => 'Sistem Yönetimi Fonksiyonlarına izinsiz erişim',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Silmeyi geri al',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Silmeyi geri al',
    'LBL_UNDELETE_BUTTON' => 'Silmeyi geri al',
    'LBL_UNDELETE' => 'Silmeyi geri al',
    'LBL_UNSYNC' => 'Senkronizasyonu Kaldır',
    'LBL_UPDATE' => 'Güncelle',
    'LBL_USER_LIST' => 'Kullanýcý Listesi',
    'LBL_USERS_SYNC'=>'Kullanýcý Senkronizasyonu',
    'LBL_USERS'=>'Kullanýcýlar',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Varolan e-posta girişi için denetleniyor...',
    'LBL_VERIFY_PORTAL_NAME'=>'Varolan portal adı için denetleniyor...',
    'LBL_VIEW_IMAGE' => 'Görünüm',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'PDF Olarak Yazdır',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'PDF Olarak Yazdır [Alt+P]',


    'LNK_ABOUT' => 'Hakkýnda',
    'LNK_ADVANCED_SEARCH' => 'Ýleri Ara',
    'LNK_BASIC_SEARCH' => 'Basit Arama',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Tüm sonuçları göster',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Tümünü göster',
    'LNK_CLOSE' => 'Kapat',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Şu anki aramayı değiştir',
    'LNK_SAVED_VIEWS' => 'Kayýtlý Aramalar & Liste Formatý',
    'LNK_DELETE_ALL' => 'Hepsini Sil',
    'LNK_DELETE' => 'Sil',
    'LNK_EDIT' => 'Düzenle',
    'LNK_GET_LATEST'=>'Son versiyonu getir',
    'LNK_GET_LATEST_TOOLTIP'=>'En güncel versiyon ile deðiþtir',
    'LNK_HELP' => 'Yardým',
    'LNK_CREATE' => 'Oluştur',
    'LNK_LIST_END' => 'Son',
    'LNK_LIST_NEXT' => 'Ýleri',
    'LNK_LIST_PREVIOUS' => 'Geri',
    'LNK_LIST_RETURN' => 'Listeye geri dön',
    'LNK_LIST_START' => 'Baþla',
    'LNK_LOAD_SIGNED'=>'Ýmza',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Ýmzalý döküman ile deðiþtir',
    'LNK_PRINT' => 'Yazdýr',
    'LNK_BACKTOTOP' => 'Başa dön',
    'LNK_REMOVE' => 'rem',
    'LNK_RESUME' => 'Devam et',
    'LNK_VIEW_CHANGE_LOG' => 'Deðiþen Kayýtlarý Göster',


    'NTC_CLICK_BACK' => 'Lütfen web tarayıcısının "geri" tuşuna basın ve hatayı düzeltin.',
    'NTC_DATE_FORMAT' => '(yyyy-aa-gg)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-aa-gg 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Seçilmiþ Kayýtlarý Silmek Ýstediðinizden Eminmisiniz?',
    'NTC_TEMPLATE_IS_USED' => 'Şablon en azından bir e-posta pazarlama kaydında kullanılmış. Silmek istediğinizden emin misiniz?',
    'NTC_TEMPLATES_IS_USED' => 'Aşağıdaki Şablonlar e-posta pazarlama kayıtlarında kullanılmış. Silmek istediğinizden emin misiniz?',
    'NTC_DELETE_CONFIRMATION' => 'Bu Kayýdý Silmek Ýstediðinizden Eminmisiniz?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Silmek istediğinizden emin misiniz ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Güncelleştirmek istediğiniz emin misin ',
    'NTC_DELETE_SELECTED_RECORDS' =>' Seçili kayıt(lar)?',
    'NTC_LOGIN_MESSAGE' => 'Lütfen kullanıcı adı ve şifrenizi giriniz.',
    'NTC_NO_ITEMS_DISPLAY' => 'Yok',
    'NTC_REMOVE_CONFIRMATION' => 'Bu iliþkiyi çýkarmak istediðinize eminmisiniz ?',
    'NTC_REQUIRED' => 'Gerekli Alanýn Belirtisi',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Hoþgeldin ',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SuiteCRM logos.',
    'WARN_ONLY_ADMINS'=> "Yalnızca yöneticiler oturum açabilir.",
    'WARN_UNSAVED_CHANGES'=> "Bu kayıtta yaptığınız değişiklikleri kaydetmeden çıkıyorsunuz. İlgili kayıttan çıkmak istediğinizden emin misiniz?",
    'ERROR_NO_RECORD' => 'Kayıt almada hata. Bu kayıt silinmiş olabilir veya görüntülemek için izniniz yok.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Warning:</b> Your browser is in IE compatibility view which is not supported.",
    'ERROR_TYPE_NOT_VALID' => 'Bir hata oluştu. Bu tür geçerli değil.',
    'ERROR_NO_BEAN' => 'Failed to get bean.', 
    'LBL_DUP_MERGE'=>'Kopyasýný bul',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Abonelikleri Yönet',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Abonelikleri yönet',
    'LBL_SUBSCRIBE'=>'Abone ol',
    'LBL_UNSUBSCRIBE'=>'Aboneliği Kaldır',
    // Ajax status strings
    'LBL_LOADING' => 'Yükleme ...',
    'LBL_SEARCHING' => 'Aranıyor...',
    'LBL_SAVING_LAYOUT' => 'Saving Layout ...',
    'LBL_SAVED_LAYOUT' => 'Düzen Kaydedildi',
    'LBL_SAVED' => 'Kaydedildi',
    'LBL_SAVING' => 'Saving',
    'LBL_FAILED' => 'Hata Oluþtu',
    'LBL_DISPLAY_COLUMNS' => 'Görünen sütun',
    'LBL_HIDE_COLUMNS' => 'Kolonlarý Gizle',
    'LBL_SEARCH_CRITERIA' => 'Kriter Ara',
    'LBL_SAVED_VIEWS' => 'Kaydedilmiş Görünümler',
    'LBL_PROCESSING_REQUEST'=>'İşleniyor..',
    'LBL_REQUEST_PROCESSED'=>'Tamamlanmýþ',
    'LBL_AJAX_FAILURE' => 'Ajax hatası',
    'LBL_MERGE_DUPLICATES'  => 'Kopyayý birleþtir',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Kayitli Aramalar',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Perform a search using the search form above',
    'LBL_DETAILVIEW'=>'Detaylý Görüntü',
    'LBL_LISTVIEW'=>'Görüntü listele',
    'LBL_EDITVIEW'=>'Görüntü Düzenle',
    'LBL_SEARCHFORM'=>'Form Ara',
    'LBL_SAVED_SEARCH_ERROR' => 'Bu Görünüm için bir isim verin.',
    'LBL_DISPLAY_LOG' => 'Günlüğü görüntüle',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistem',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Oturum zaman aşımı',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Oturum zaman aşımı için 2 dakika içinde olacak. Lütfen çalışmanızı kaydedin.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Oturumunuz zaman aşımına uğradı.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Ajanda:",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Toplantı',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Tel.Araması',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Zaman: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Yer: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Tanım:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Durum: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'İlgili: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
	'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
	'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "Sonuç bulunamadı.",
	'MSG_LIST_VIEW_NO_RESULTS' => "<item1>İçin sonuç bulunamadı",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "Create <item1> as a new <item2>",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "You currently have no records saved. <item2> or <item3> one now.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4> to learn more about the <item1> module. In order to access more information, use the user menu drop down located on the main navigation bar to access Help.",

    'LBL_CLICK_HERE' => "Buraya tıklayın",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Favorilerime Ekle',
    'LBL_MARK_AS_FAVORITES' => 'Favori olarak işaretle',
    'LBL_CREATE_CONTACT' => 'İlgili Oluştur',
    'LBL_CREATE_CASE' => 'Şikayet Oluştur',
    'LBL_CREATE_NOTE' => 'Not ya da Ek oluştur',
    'LBL_CREATE_OPPORTUNITY' => 'Fırsat Oluştur',
    'LBL_SCHEDULE_CALL' => 'Tel.Araması Planlama',
    'LBL_SCHEDULE_MEETING' => 'Toplantı Planlama',
    'LBL_CREATE_TASK' => 'Görev Oluştur',
    'LBL_REMOVE_FROM_FAVORITES' => 'Sık Kullanılanlarımdan Kaldır',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Form oluştur',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Web\'den Potansiyel Kaydet Formu',

    'LBL_PLEASE_SELECT' => 'Lütfen seçin',
    'LBL_REDIRECT_URL'=>'URL Yönlendir',
    'LBL_RELATED_CAMPAIGN' =>'İlgili kampanya',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Tüm alanlar ekleme',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Tüm alanları kaldır',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Yalnızca Resim tipindeki ek kabul edilmektedir',
    'LBL_TRAINING' => 'Pazarlama & Destek Sayfası',
    'ERR_DATABASE_CONN_DROPPED'=>'Sorgu yürütülürken bir hata oluştu. Belki de, veritabanı bağlantısı kesildi. Lütfen bu sayfayı yenileyin, web sunucusunu yeniden başlatmanız gerekebilir.',
    'ERR_MSSQL_DB_CONTEXT' =>'Değiştirilen veritabanı içeriği',
  'ERR_MSSQL_WARNING' =>'Uyarı:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Uyarı: alan [[field]] ,  [moduleDir] vardefs.php dosyasında bir giriş ile eşlenmemiş.',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Hata: Dosya [[dosya]] eksik.  Hiçbir karşılık gelen HTML dosyasını bulunmadığından oluşturulamıyor.',
  'ERR_CANNOT_FIND_MODULE' => 'Hata: Modül [modül] yok.',
  'LBL_ALT_ADDRESS' => 'Diğer Adres:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Hata : There are an unequal number of arguments for the \\\'key\\\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'DisplayParams dizisi içinde eksik indeks: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Genel',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Süzgeçler',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'My Items Only',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Ünvan',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Satırları Göster',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Yeni sayfa oluşturma...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Bu sayfayı simek istediğinizden emin misiniz?',
    'LBL_SAVING_PAGE_TITLE' => 'Sayfa başlığı kaydediliyor...',
    'LBL_RETRIEVING_PAGE' => 'Sayfa alınıyor...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your adminstrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Sayfa Ekle',
    'LBL_DELETE_PAGE' => 'Sayfa Sil',
    'LBL_CHANGE_LAYOUT' => 'Yerleşimi Değiştir',
    'LBL_RENAME_PAGE' => 'Sayfayı yeniden adlandır',

    'LBL_LOADING_PAGE' => 'Sayfa yükleniyor, lütfen bekleyin...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Panel ekle',
    'LBL_CLOSE_DASHLETS' => 'Kapat',
    'LBL_OPTIONS' => 'Seçenekler',
    'LBL_NUMBER_OF_COLUMNS' => 'Sütun sayısını seçin',
    'LBL_1_COLUMN' => '1 sütun',
    'LBL_2_COLUMN' => '2 sütun',
    'LBL_3_COLUMN' => '3 sütun',
    'LBL_PAGE_NAME' => 'Sayfa adı',

    'LBL_SEARCH_RESULTS' => 'Arama sonucu',
    'LBL_SEARCH_MODULES' => 'Modül',
    'LBL_SEARCH_CHARTS' => 'Grafikler',
    'LBL_SEARCH_REPORT_CHARTS' => 'Rapor Grafikleri',
    'LBL_SEARCH_TOOLS' => 'Araçlar',
    'LBL_SEARCH_HELP_TITLE' => 'Arama İpuçları',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Kapat',
    'LBL_SEARCH_RESULTS_FOUND' => 'Arama sonuç bulundu',
    'LBL_SEARCH_RESULTS_TIME' => 'Bayan',
    'ERR_BLANK_PAGE_NAME' => 'Bir sayfa adı girin.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Resim yok',

    'LBL_MODULE' => 'Modül',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Adresi soldan Kopyala:',
    'LBL_SAVE_AND_CONTINUE' => 'Kaydet ve devam et',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click to select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,  click first value and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Hata: Sorgu limiti olan $limit, $module modülü için ulaşıldı.',
    'ERROR_NOTIFY_OVERRIDE' => 'Hata: ResourceObserver->notify() tekrar yazılması gerekir.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Hata: İzleyici meta veri dosyası boş veya dosya var olmadığından oluşturulamıyor.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Hata: İstenen ad için yapılandırılmış bir izleyici yok ortada.',
    'ERR_UNDEFINED_METRIC' => 'Hata: Tanımlanmamış ölçüsü değer ayarlanamıyor',
    'ERR_STORE_FILE_MISSING' => 'Hata: Depolama uygulama dosyası bulunamıyor',

    'LBL_MONITOR_ID' => 'Monitör ID',
    'LBL_USER_ID' => 'Kullanıcı ID',
    'LBL_MODULE_NAME' => 'Modül adı',
    'LBL_ITEM_ID' => 'Öğe ID',
    'LBL_ITEM_SUMMARY' => 'Madde Özeti',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Oturum ID',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack Kullanıcı ID\'si {0} olan kullanıcı için yaratıldı',
    'LBL_VISIBLE' => 'Kayıt görünür',
    'LBL_DATE_LAST_ACTION' => 'Son işlem tarihi',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'daha önce değil',
  'MSG_IS_MORE_THAN' => 'daha fazla',
  'MSG_IS_LESS_THAN' => 'daha az',
  'MSG_SHOULD_BE' => 'olmalı',
  'MSG_OR_GREATER' => 'veya daha büyük',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Hata Oluştur',
    'LBL_NO_RECORDS_FOUND' => '-0 kayıt bulundu-',

    'DATA_TYPE_DUE' => 'Teslim:',
    'DATA_TYPE_START' => 'Başlangıç:',
    'DATA_TYPE_SENT' => 'Gönderdi:',
    'DATA_TYPE_MODIFIED' => 'Değiştirildi:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Sayı',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'nesne görüntüsü',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Tarih seçin',

    'LBL_VALIDATE_RANGE' => 'Geçerli Aralık içinde değil',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Lütfen hem bir başlangıç ve bitiş tarih aralığı seçiniz',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Lütfen başlangıç ve bitiş aralığı girişleri seçin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tümü',

    'LBL_OPERATOR_IN_TEXT' => 'aşağıdakilerden biri:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'aşağıdakilerden biri değil:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Hata: Dizi parametre sayısını sonuçları ile dizi sayısı eşleşmiyor.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Hata: modül için eşleme girdisi eksik.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Hata: {0} bağlamak için veri alınamadı.  Hizmet şu anda erişilemiyor olabilir veya yapılandırma ayarları geçersiz olabilir.  Bağlayıcı hata iletisi: ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Veri Al',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Bu modül için bağlayıcı Tümleştirme devre dışı bırakmak istediğinizden emin misiniz?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'IIS/FastCGI sapı kullanarak en iyi deneyimi için fastcgi.logging php.ini dosyasında 0 olarak ayarlayın.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Küresel takım silinemez.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'Kullanıcı [{1}] silininceye kadar bu özel takım [{0}] silinemez.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Merhaba, Flash kapalı veya Adobe Flash Player\'ın eski bir sürümünü kullanıyorsunuz. Lütfen <a href="http://www.adobe.com/go/getflashplayer/">Flash Player en son versiyonunu indirin</a> veya flash\'ı açın.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Paket Adı:',
  'LBL_COLLECTION_PRIMARY' => 'Birincil',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Gerekli alan boş ',
    'LBL_COLLECTION_EXACT' => 'Tam',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Atama',
    'LBL_DESCRIPTION' => 'Tanım',

  'LBL_YESTERDAY'=> 'Dün',
  'LBL_TODAY'=>'bugün',
  'LBL_TOMORROW'=>'yarın ',
  'LBL_NEXT_WEEK'=> 'sonraki hafta ',
  'LBL_NEXT_MONDAY'=>'Önümüzdeki Pazartesi',
  'LBL_NEXT_FRIDAY'=>'gelecek Cuma',
  'LBL_TWO_WEEKS'=> 'iki hafta',
  'LBL_NEXT_MONTH'=> 'sonraki ay',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'gelecek ayın ilk günü',
  'LBL_THREE_MONTHS'=> 'Üç ay',
  'LBL_SIXMONTHS'=> 'altı ay',
  'LBL_NEXT_YEAR'=> 'gelecek yıl',
    'LBL_FILTERED' => 'Filtre',

    //Datetimecombo fields
    'LBL_HOURS' => 'Saat',
    'LBL_MINUTES' => 'dakika',
    'LBL_MERIDIEM' => 'Öğleden',
    'LBL_DATE' => 'Tarih',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Otomatik yenileme',

    'LBL_DURATION_DAY' => 'gün',
    'LBL_DURATION_HOUR' => 'Saat',
    'LBL_DURATION_MINUTE' => 'dakika',
    'LBL_DURATION_DAYS' => 'gün',
    'LBL_DURATION_HOURS' => 'Saat',
    'LBL_DURATION_MINUTES' => 'dakika',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Ay seçin',
    'LBL_ENTER_YEAR' => 'Yıl girin',
    'LBL_ENTER_VALID_YEAR' => 'Lütfen geçerli bir yıl girin',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Lütfen sayısal bir ABD telefon numarasını, alan koduyla birlikte girin.',

    //File write error label
    'ERR_FILE_WRITE' => 'Hata: {0} dosyası yazılamadı.  Sistemi ve web sunucusu izinlerini gözden geçirin.',
  'ERR_FILE_NOT_FOUND' => 'Hata: {0} dosyası yüklenemedi.  Sistemi ve web sunucusu izinlerini gözden geçirin.',

    'LBL_AND' => 'Ve',
    'LBL_BEFORE' => 'Önce',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Bilgisayarınızdan yüklendi',
    'LBL_SEARCH_EXTERNAL_API' => 'Dış kaynak dosyası',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Güvenlik',
    'LBL_SHARE_PRIVATE' => 'Özel',
    'LBL_SHARE_COMPANY' => 'Şirket',
    'LBL_SHARE_LINKABLE' => 'İlişkilendirilebilinir',
    'LBL_SHARE_PUBLIC' => 'Ortak',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS beslemesi',
    'LBL_RSS_RECORDS_FOUND' => 'Kayıt(lar) bulundu',
    'ERR_RSS_INVALID_INPUT' => 'RSS geçerli bir giriş tipi değil',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS bu yöntemi için geçerli bir cevap tipi değil',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Dokümanlar sağlanan dosya biçimini desteklemiyor.',

    'LBL_EMPTY' => 'Boş',
    'LBL_IS_EMPTY' => 'Boş',
    'LBL_IS_NOT_EMPTY' => 'Boş değil',
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
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'LBL_ASSIGNED_USER_NAME',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atanan Kullanıcı',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Rapor Edilen Kişi ID',
    'LBL_EXPORT_FULL_NAME' => 'Tam İsim',
    'LBL_EXPORT_TEAM_ID' => 'Takım ID',
    'LBL_EXPORT_TEAM_NAME' => 'Takım',
    'LBL_EXPORT_TEAM_SET_ID' => 'Takım kümesi ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Gitme... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Bildirimler',
    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Yeni takım Satır Ekle',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Takım Kaldır',
    'LBL_ALT_SPOT_SEARCH' => 'Spot arama',
    'LBL_ALT_SORT_DESC' => 'Azalan sıralı',
    'LBL_ALT_SORT_ASC' => 'Artan sıralı',
    'LBL_ALT_SORT' => 'Sırala',
    'LBL_ALT_SHOW_OPTIONS' => 'Seçenekleri göster',
    'LBL_ALT_HIDE_OPTIONS' => 'Seçeneklerini gizle',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Seçilen giriş sol taraftaki listeye taşı',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Seçili girişi sağ taraftaki listeye taşı',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Seçili girişi görüntülenen listede sırada yukarı taşı',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Seçili girişi görüntülenen listede sırada aşağı taşı',
    'LBL_ALT_INFO' => 'Bilgi',
	'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below.  Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'E-posta',
    'LBL_EMAIL_OPT_TITLE' => 'tercih edilen e-posta adresi',
    'LBL_EMAIL_INV_TITLE' => 'Geçersiz e-posta adresi',
    'LBL_EMAIL_PRIM_TITLE' => 'birincil e-posta adresi',
    'LBL_SELECT_ALL_TITLE' => 'Tümünü Seç',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Bu satırı seç',
    'LBL_TEAM_SELECTED_TITLE' => 'Seçili takım ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Bu takım için birincil seçin',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'Hata: Yükleme sırasında bir hata oluştu. Hata kodu: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Hata: Yükleme sırasında bir hata oluştu. Hata kodu: {0} - {1}. upload_maxsize  {2}',
    'UPLOAD_ERROR_HOME_TEXT'     => 'Hata: Yükleme sırasında bir hata oluştu, lütfen yardım için bir yöneticiye başvurun.',
    'UPLOAD_MAXIMUM_EXCEEDED'    => 'Upload ({0} bayt) aşıldı izin verilen maksimum boyutu: {1} bayt',
    'UPLOAD_REQUEST_ERROR'    => 'Bir hata oluştu. Lütfen, sayfayı yenileyin ve yeniden deneyin.',


    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Düzenle',
    'LBL_EDIT_BUTTON_TITLE' => 'Düzenle [ Alt + E ]',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Çift',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Çift [ Alt + U ]',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Sil',
    'LBL_DELETE_BUTTON_TITLE' => 'Sil [ Alt + D ]',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Kaydet',
    'LBL_SAVE_BUTTON_TITLE' => 'Kaydet [Alt+S]',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Ýptal',
    'LBL_CANCEL_BUTTON_TITLE' => 'Ýptal [ Alt + X ]',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Klavye kısayolları',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Sunucudan kötü yanıt',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Teklif',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Satış Fiyatı',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'El ile',
        '5' => '5 dk. önce',
        '15' => 'Her 15 dakikada',
        '30' => 'Her 30 dakikada',
        '60' => 'Her saat',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.'

    );

$app_list_strings['moduleList']['Library'] = 'Kütüphane';
$app_list_strings['library_type'] = array('Books'=>'Kitap', 'Music'=>'Müzik', 'DVD'=>'DVD', 'Magazines'=>'Dergiler');
$app_list_strings['moduleList']['EmailAddresses'] = 'E-posta Adresi';
$app_list_strings['project_priority_default'] = 'Orta';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Yüksek',
    'Medium' => 'Orta',
    'Low' => 'Düşük',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Taslak',
    'Expired' => 'Süresi geçmiş',
    'In Review' => 'İncelemede',
    'Published' => 'Yayınlandı',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--boş--',
    'Create New Tag' => 'Yeni Tag Oluştur',
    'Delete Tag'=>'Tag sil',
    'Rename Tag'=>'Tag İsmini Değiştir',
    'Move Selected Articles'=>'Seçili yazıları taşı',
    'Apply Tags On Articles'=>'Apply Tags To Articles',
    'Delete Selected Articles'=>'Seçili Makaleleri Sil',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Ekleri var',
        'none' => 'boş',
        'mime' => 'Mime Tipi Belirtme',
        'name' => 'İsim Belirtme',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Bilgi Tabanı';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'İlk 5',
    'Top_10' => 'İlk 10',
    'Top_20' => 'İlk 20',
    'Bot_5'  => 'Son 5',
    'Bot_10' => 'Son10',
    'Bot_20' => 'Son 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Tümü',
        'added' => 'Added Last 30 days',
        'pending' => 'Onayımı bekliyor',
        'updated' =>'Son 30 gün için güncellenmiş',
        'faqs' => 'SSS',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'üzerinde / tarihinde',
    'before' => 'Önce',
    'after' => 'Sonra',
    'between_dates' => 'arasında',
    'last_7_days' => 'Son  7 gün',
    'next_7_days' => 'Sonraki 7 gün',
    'last_month' => 'Son ay',
    'this_month' => 'Bu az',
    'next_month' => 'Sonraki ay',
    'last_30_days' => 'Son 30 gün',
    'next_30_days' => 'Sonraki 30 gün',
    'last_year' => 'Son yıl',
    'this_year' => 'Bu yıl',
    'next_year' => 'Sonraki yıl',
    'isnull' => 'Is Null',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DABİ',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGANİSTAN',
        'ALBANIA' => 'ARNAVUTLUK',
        'ALGERIA' => 'CEZAYİR',
        'AMERICAN SAMOA' => 'AMERİKAN SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARTİKA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARJANTİN',
        'ARMENIA' => 'ERMENİSTAN',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AVUSTRALYA',
        'AUSTRIA' => 'AVUSTURYA',
        'AZERBAIJAN' => 'AZERBAYCAN',
        'BAHAMAS' => 'BAHAMALAR',
        'BAHRAIN' => 'BAHREYN',
        'BANGLADESH' => 'BANGLADEŞ',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BEYAZ RUSYA',
        'BELGIUM' => 'BELÇİKA',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BUTAH',
        'BOLIVIA' => 'BOLIVYA',
        'BOSNIA' => 'BOSNA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET ADASI',
        'BRAZIL' => 'BREZİLYA',
        'BRITISH ANTARCTICA TERRITORY' => 'İNGİLİZ ANTARTİKA BÖLGESİ',
        'BRITISH INDIAN OCEAN TERRITORY' => 'İNGİLİZ HİNT OKYANUSU BÖLGESİ',
        'BRITISH VIRGIN ISLANDS' => 'İNGİLİZ VİRJİN ADALARI',
        'BRITISH WEST INDIES' => 'İNGİLİZ BATI HİNTLERİ',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARİSTAN',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'KAMBOÇYA',
        'CAMEROON' => 'KAMERUN',
        'CANADA' => 'KANADA',
        'CANAL ZONE' => 'KANAL BÖLGESİ',
        'CANARY ISLAND' => 'KANARYA ADALARI',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI ADALARI',
        'CAYMAN ISLANDS' => 'CAYMAN ADALARI',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'ÇAD',
        'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
        'CHILE' => 'ŞİLİ',
        'CHINA' => 'ÇİN ',
        'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
        'COCOS (KEELING) ISLAND' => 'COCOS ADASI',
        'COLOMBIA' => 'KOLOMBİYA',
        'COMORO ISLANDS' => 'COMORO ADALARI',
        'CONGO' => 'KONGO',
        'CONGO KINSHASA' => 'KONGO KINSHASA',
        'COOK ISLANDS' => 'COOK ADALARI',
        'COSTA RICA' => 'KOSTARİKA',
        'CROATIA' => 'HIRVATİSTAN',
        'CUBA' => 'KÜBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'KKTC',
        'CZECH REPUBLIC' => 'ÇEK CUMHURİYETİ',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DANİMARKA',
        'DJIBOUTI' => 'CİBUTİ',
        'DOMINICA' => 'DOMİNİK',
        'DOMINICAN REPUBLIC' => 'DOMİNİK CUMHURİYETİ',
        'DUBAI' => 'DUBAİ',
        'ECUADOR' => 'EKVATOR',
        'EGYPT' => 'MISIR',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'EKVATOR GİNESİ',
        'ESTONIA' => 'ESTONYA',
        'ETHIOPIA' => 'ETİYOPYA',
        'FAEROE ISLANDS' => 'FAROE ADALARI',
        'FALKLAND ISLANDS' => 'FALKLAND ADALARI',
        'FIJI' => 'FİJİ SAHİLLERİ',
        'FINLAND' => 'FİNLANDİYA',
        'FRANCE' => 'FRANSA',
        'FRENCH GUIANA' => 'FRANSIZ GUYANASI',
        'FRENCH POLYNESIA' => 'FRANSIZ POLONEZYASI',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GÜRCİSTAN',
        'GERMANY' => 'ALMANYA',
        'GHANA' => 'GANA',
        'GIBRALTAR' => 'CEBELİTARIK',
        'GREECE' => 'YUNANİSTAN',
        'GREENLAND' => 'GREENLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'YENİ GİNE',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAİTİ',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'MACARİSTAN',
        'ICELAND' => 'İZLANDA',
        'IFNI' => 'IFNI',
        'INDIA' => 'HİNDİSTAN',
        'INDONESIA' => 'ENDONEZYA',
        'IRAN' => 'İRAN',
        'IRAQ' => 'IRAK',
        'IRELAND' => 'İRLANDA',
        'ISRAEL' => 'İSRAİL',
        'ITALY' => 'İTALYA',
        'IVORY COAST' => 'FİLDİŞİ SAHİLLERİ',
        'JAMAICA' => 'JAMAİKA',
        'JAPAN' => 'JAPONYA',
        'JORDAN' => 'ÜRDÜN',
        'KAZAKHSTAN' => 'KAZAKİSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'GÜNEY KORE',
        'KOREA, SOUTH' => 'GÜNEY KORE',
        'KUWAIT' => 'KUVEYT',
        'KYRGYZSTAN' => 'KIRGIZİSTAN',
        'LAOS' => 'LAGOS',
        'LATVIA' => 'LETONYA',
        'LEBANON' => 'LÜBNAN',
        'LEEWARD ISLANDS' => 'LEEWARD ADALARI',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LİBYA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LİTVANYA',
        'LUXEMBOURG' => 'LÜXEMBURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MAKEDONYA',
        'MADAGASCAR' => 'MADAGASKAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALEZYA',
        'MALDIVES' => 'MALDİVLER',
        'MALI' => 'MALİ',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MORİTANYA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIA',
        'MEXICO' => 'MEKSİKA',
        'MOLDOVIA' => 'MOLDOVA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MOĞOLİSTAN',
        'MOROCCO' => 'FAS',
        'MOZAMBIQUE' => 'MOZAMBİK',
        'MYANAMAR' => 'BRUNEİ',
        'NAMIBIA' => 'NAMİBYA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'HOLLANDA',
        'NETHERLANDS ANTILLES' => 'HOLLANDA ANTİLLERİ',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'HOLLANDA ANTİLLERİ TARAFSIZ BÖLGE',
        'NEW CALADONIA' => 'NEW CALADONIA',
        'NEW HEBRIDES' => 'NEW HEBRIDES',
        'NEW ZEALAND' => 'YENİ ZELANDA',
        'NICARAGUA' => 'NIKARAGUA',
        'NIGER' => 'NİJER',
        'NIGERIA' => 'NİJERYA',
        'NORFOLK ISLAND' => 'NORFOLK ADASI',
        'NORWAY' => 'NORVEÇ',
        'OMAN' => 'UMMAN',
        'OTHER' => 'DİĞER',
        'PACIFIC ISLAND' => 'PASİFİK ADALARI',
        'PAKISTAN' => 'PAKİSTAM',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA YENİ GİNE',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'FİLİPİNLER',
        'POLAND' => 'POLONYA',
        'PORTUGAL' => 'PORTEKİZ',
        'PORTUGUESE TIMOR' => 'EAST TIMOR',
        'PUERTO RICO' => 'PORTO RİKO',
        'QATAR' => 'KATAR',
        'REPUBLIC OF BELARUS' => 'BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'GÜNEY AFRİKA CUMHURİYETİ',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'ROMANYA',
        'RUSSIA' => 'RUSYA',
        'RWANDA' => 'RWANRUANDADA',
        'RYUKYU ISLANDS' => 'RYUKYU ADALARI',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARİNO',
        'SAUDI ARABIA' => 'SUUDİ ARABİSTAN',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SIRBİSTAN',
        'SEYCHELLES' => 'ŞEYSEL ADALARI',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SİNGAPUR',
        'SLOVAKIA' => 'SLOVAKYA',
        'SLOVENIA' => 'SLOVENYA',
        'SOMALILIAND' => 'SOMALI',
        'SOUTH AFRICA' => 'GÜNEY AFRİKA',
        'SOUTH YEMEN' => 'GÜNEY YEMEN',
        'SPAIN' => 'İSPANYA',
        'SPANISH SAHARA' => 'İSPANYOL SAHRASI',
        'SRI LANKA' => 'SRİLANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'GÜNEY AFRİKA CUM.',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'İŞVEÇ',
        'SWITZERLAND' => 'İŞVİÇRE',
        'SYRIA' => 'SURİYE',
        'TAIWAN' => 'TAYVAN',
        'TAJIKISTAN' => 'TACİKİSTAN',
        'TANZANIA' => 'TANZANYA',
        'THAILAND' => 'TAYLAND',
        'TONGA' => 'TONGO',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNUS',
        'TURKEY' => 'TÜRKİYE',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAYNA',
        'UNITED ARAB EMIRATES' => 'BİRLEŞİK ARAP EMİRLİKLERİ',
        'UNITED KINGDOM' => 'BİRLEŞİK KRALLIK',
        'UPPER VOLTA' => 'AŞAĞI VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'ABD PASİFİK ADALARI',
        'US VIRGIN ISLANDS' => 'ABD VİRGİN ADALARI',
        'USA' => 'ABD',
        'UZBEKISTAN' => 'ÖZBEKİSTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATİKAN',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ADASI',
        'WEST INDIES' => 'BATI HİNT',
        'WESTERN SAHARA' => 'BATI SAHRA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BÜYÜK-5 (Tayvan ve Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Kiril)',
    'CP1252'    => 'CP1252 (MS Batı Avrupa & u.s.)',
    'EUC-CN'    => 'EUC-CN (Basitleştirilmiş Çince GB2312)',
    'EUC-JP'    => 'EUC-JP (UNIX Japonca)',
    'EUC-KR'    => 'EUC-KR (Korece)',
    'EUC-TW'    => 'EUC-TW (Tayvan)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japonca)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korece)',
    'ISO-8859-1'  => 'ISO-8859-1 (Batı Avrupa ve ABD)',
    'ISO-8859-2'  => 'ISO-8859-2 (orta ve Doğu Avrupa)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Kiril)',
    'ISO-8859-6'  => 'ISO-8859-6 (Arapça)',
    'ISO-8859-7'  => 'ISO-8859-7 (Yunanca)',
    'ISO-8859-8'  => 'ISO-8859-8 (İbranice)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latince 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latince 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latince 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latince 9)',
    'KOI8-R'    => 'KOI8-R (Kiril Rusça)',
    'KOI8-U'    => 'KOI8-U (Kiril Ukrayna dili)',
    'SJIS'      => 'SJIS (MS Japonca)',
    'UTF-8'     => 'ISO-8859-9',
  );

  $app_list_strings['timezone_dom'] = array(

  'Africa/Algiers' => 'Afrika/Algiers',
  'Africa/Luanda' => 'Afrika/Luanda',
  'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
  'Africa/Gaborone' => 'Afrika/Gaborone',
  'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
  'Africa/Bujumbura' => 'Afrika/Bujumbura',
  'Africa/Douala' => 'Afrika/Douala',
  'Atlantic/Cape_Verde' => 'Atlantik/Cape_Verde',
  'Africa/Bangui' => 'Afrika/Bangui',
  'Africa/Ndjamena' => 'Afrika/Ndjamena',
  'Indian/Comoro' => 'Hint/Komorlar',
  'Africa/Kinshasa' => 'Afrika/Kinshasa',
  'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
  'Africa/Brazzaville' => 'Afrika/Brazzaville',
  'Africa/Abidjan' => 'Afrika/Abidjan',
  'Africa/Djibouti' => 'Afrika/Cibuti',
  'Africa/Cairo' => 'Afrika/Cairo',
  'Africa/Malabo' => 'Afrika/Malabo',
  'Africa/Asmera' => 'Afrika/Asmera',
  'Africa/Addis_Ababa' => 'Afrika/Addis_Ababa',
  'Africa/Libreville' => 'Afrika/Libreville',
  'Africa/Banjul' => 'Afrika/Banjul',
  'Africa/Accra' => 'Afrika/Accra',
  'Africa/Conakry' => 'Afrika/Conakry',
  'Africa/Bissau' => 'Afrika/Bissau',
  'Africa/Nairobi' => 'Afrika/Nairobi',
  'Africa/Maseru' => 'Afrika/Maseru',
  'Africa/Monrovia' => 'Afrika/Monrovia',
  'Africa/Tripoli' => 'Afrika/Tripoli',
  'Indian/Antananarivo' => 'Hint/Antananarivo',
  'Africa/Blantyre' => 'Afrika/Blantyre',
  'Africa/Bamako' => 'Afrika/Bamako',
  'Africa/Nouakchott' => 'Afrika/Nouakchott',
  'Indian/Mauritius' => 'Hint/Mauritius',
  'Indian/Mayotte' => 'Hint/Mayotte',
  'Africa/Casablanca' => 'Afrika/Casablanca',
  'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
  'Africa/Maputo' => 'Afrika/Maputo',
  'Africa/Windhoek' => 'Afrika/Windhoek',
  'Africa/Niamey' => 'Afrika/Niam',
  'Africa/Lagos' => 'Afrika/Lagos',
  'Indian/Reunion' => 'Hint/Reunion',
  'Africa/Kigali' => 'Afrika/Kigali',
  'Atlantic/St_Helena' => 'Atlantik/St_Helena',
  'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
  'Africa/Dakar' => 'Afrika/Dakar',
  'Indian/Mahe' => 'Hint/Mahe',
  'Africa/Freetown' => 'Afrika/Freetown',
  'Africa/Mogadishu' => 'Afrika/Mogadişu',
  'Africa/Johannesburg' => 'Afrika/Johannesburg',
  'Africa/Khartoum' => 'Afrika/Khartoum',
  'Africa/Mbabane' => 'Afrika/Mbabane',
  'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salaam',
  'Africa/Lome' => 'Afrika/Lome',
  'Africa/Tunis' => 'Afrika/Tunus',
  'Africa/Kampala' => 'Afrika/Kampala',
  'Africa/Lusaka' => 'Afrika/Lusaka',
  'Africa/Harare' => 'Afrika/Harare',
  'Antarctica/Casey' => 'Antarktika/Casey',
  'Antarctica/Davis' => 'Antarktika/Davis',
  'Antarctica/Mawson' => 'Antarktika/Mawson',
  'Indian/Kerguelen' => 'Hint/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarktika/DumontDUrville',
  'Antarctica/Syowa' => 'Antarktika/Syowa',
  'Antarctica/Vostok' => 'Antarktika/Vostok İstasyonu',
  'Antarctica/Rothera' => 'Antarktika/Rothera',
  'Antarctica/Palmer' => 'Antarktika Palmer\'ı',
  'Antarctica/McMurdo' => 'Antarktika/McMurdo',
  'Asia/Kabul' => 'Asya/kabil',
  'Asia/Yerevan' => 'Asya/Yerevan',
  'Asia/Baku' => 'Asya/Bakü',
  'Asia/Bahrain' => 'Asya/Bahreyn',
  'Asia/Dhaka' => 'Asya/Dhaka',
  'Asia/Thimphu' => 'Asya/Thimphu',
  'Indian/Chagos' => 'Hint/Chagos',
  'Asia/Brunei' => 'Asya/Brunei',
  'Asia/Rangoon' => 'Asya/Rangoon',
  'Asia/Phnom_Penh' => 'Asya/Phnom_Penh',
  'Asia/Beijing' => 'Asya/Beijing',
  'Asia/Harbin' => 'Asya/Harbin',
  'Asia/Shanghai' => 'Asya/Şangay',
  'Asia/Chongqing' => 'Asya/Chongqing',
  'Asia/Urumqi' => 'Asya/Urumçi',
  'Asia/Kashgar' => 'Asya/Kaşgar',
  'Asia/Hong_Kong' => 'Asya/Hong_Kong',
  'Asia/Taipei' => 'Asya/Taipei',
  'Asia/Macau' => 'Asya/Macau',
  'Asia/Nicosia' => 'Asya/Nicosia',
  'Asia/Tbilisi' => 'Asya/Tbilisi',
  'Asia/Dili' => 'Asya/Dili',
  'Asia/Calcutta' => 'Asya/Calcutta',
  'Asia/Jakarta' => 'Asya/Jakarta',
  'Asia/Pontianak' => 'Asya/Pontianak',
  'Asia/Makassar' => 'Asya/Makassar',
  'Asia/Jayapura' => 'Asya/Jayapura',
  'Asia/Tehran' => 'Asya/Tehran',
  'Asia/Baghdad' => 'Asya/Bağdat',
  'Asia/Jerusalem' => 'Asya/Jerusalem',
  'Asia/Tokyo' => 'Asya/Tokyo',
  'Asia/Amman' => 'Asya/Amman',
  'Asia/Almaty' => 'Asya/Almaty',
  'Asia/Qyzylorda' => 'Asya/Qyzylorda',
  'Asia/Aqtobe' => 'Asya/Aktobe',
  'Asia/Aqtau' => 'Asya/Aktav',
  'Asia/Oral' => 'Asya/Oral',
  'Asia/Bishkek' => 'Asya/Bişkek',
  'Asia/Seoul' => 'Asya/Seoul',
  'Asia/Pyongyang' => 'Asya/Pyongyang',
  'Asia/Kuwait' => 'Asya/Kuveyt',
  'Asia/Vientiane' => 'Asya/Vientiane',
  'Asia/Beirut' => 'Asya/Beyrut',
  'Asia/Kuala_Lumpur' => 'Asya/Kuala_Lumpur',
  'Asia/Kuching' => 'Asya/Kuching',
  'Indian/Maldives' => 'Hint/Maldivler',
  'Asia/Hovd' => 'Asya/Hovd',
  'Asia/Ulaanbaatar' => 'Asya/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asya/Choibalsan',
  'Asia/Katmandu' => 'Asya/Katmandu',
  'Asia/Muscat' => 'Asya/Muscat',
  'Asia/Karachi' => 'Asya/Karachi',
  'Asia/Gaza' => 'Asya/Gazze',
  'Asia/Manila' => 'Asya/Manila',
  'Asia/Qatar' => 'Asya/Katar',
  'Asia/Riyadh' => 'Asya/Riyadh',
  'Asia/Singapore' => 'Asya/Singapur',
  'Asia/Colombo' => 'Asya/Colombo',
  'Asia/Damascus' => 'Asya/Damascus',
  'Asia/Dushanbe' => 'Asya/Duşanbe',
  'Asia/Bangkok' => 'Asya/Bangkok',
  'Asia/Ashgabat' => 'Asya/Aşkabat',
  'Asia/Dubai' => 'Asya/Dubai',
  'Asia/Samarkand' => 'Asya/Samarkand',
  'Asia/Tashkent' => 'Asya/Taşkent',
  'Asia/Saigon' => 'Asya/Saigon',
  'Asia/Aden' => 'Asya/Aden',
  'Australia/Darwin' => 'Avustralya/Darwin',
  'Australia/Perth' => 'Avustralya/Perth',
  'Australia/Brisbane' => 'Avustralya/Brisbane',
  'Australia/Lindeman' => 'Avustralya/Lindeman',
  'Australia/Adelaide' => 'Avustralya/Adelaide',
  'Australia/Hobart' => 'Avustralya/Hobart',
  'Australia/Currie' => 'Avustralya/Currie',
  'Australia/Melbourne' => 'Avustralya/Melbourne',
  'Australia/Sydney' => 'Avustralya/Sydney',
  'Australia/Broken_Hill' => 'Avustralya/Broken_Hill',
  'Indian/Christmas' => 'Hint/Noel',
  'Pacific/Rarotonga' => 'Pasifik/Rarotonga',
  'Indian/Cocos' => 'Hint/Cocos Adaları',
  'Pacific/Fiji' => 'Pasifik/Fiji',
  'Pacific/Gambier' => 'Pasifik/Gambier',
  'Pacific/Marquesas' => 'Pasifik/Markiz',
  'Pacific/Tahiti' => 'Pasifik/Tahiti',
  'Pacific/Guam' => 'Pasifik/Guam',
  'Pacific/Tarawa' => 'Pasifik/Tarawa',
  'Pacific/Enderbury' => 'Pasifik/Enderbury',
  'Pacific/Kiritimati' => 'Pasifik/Kiritimati',
  'Pacific/Saipan' => 'Pasifik/Saipan',
  'Pacific/Majuro' => 'Pasifik/Majuro',
  'Pacific/Kwajalein' => 'Pasifik/Kwajalein',
  'Pacific/Truk' => 'Pasifik/Truck',
  'Pacific/Pohnpei' => 'Pacific/Pohnpei',
  'Pacific/Kosrae' => 'Pasifik/Kosrae',
  'Pacific/Nauru' => 'Pasifik/Nauru',
  'Pacific/Noumea' => 'Pasifik/Noumea',
  'Pacific/Auckland' => 'Pasifik/Auckland',
  'Pacific/Chatham' => 'Pasifik/Chatham',
  'Pacific/Niue' => 'Pasifik/Niue',
  'Pacific/Norfolk' => 'Pasifik/Norfolk',
  'Pacific/Palau' => 'Pasifik/Palau',
  'Pacific/Port_Moresby' => 'Pasifik/Port_Moresby',
  'Pacific/Pitcairn' => 'Pasifik/Pitcairn',
  'Pacific/Pago_Pago' => 'Pasifik/Pago_Pago',
  'Pacific/Apia' => 'Pasifik/Apia',
  'Pacific/Guadalcanal' => 'Pasifik/Guadalcanal',
  'Pacific/Fakaofo' => 'Pasifik/Fakaofo',
  'Pacific/Tongatapu' => 'Pasifik/Tongatapu',
  'Pacific/Funafuti' => 'Pasifik/Funafuti',
  'Pacific/Johnston' => 'Pasifik/Johnston',
  'Pacific/Midway' => 'Pasifik/Midway',
  'Pacific/Wake' => 'Pasifik/uyanmak',
  'Pacific/Efate' => 'Pasifik/Efate',
  'Pacific/Wallis' => 'Pasifik/Wallis',
  'Europe/London' => 'Europe/Londra',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'PE3',
  'CET' => 'CET',
  'MET' => 'BİR ARAYA GELDİ',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Viyana',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brüksel',
  'Europe/Sofia' => 'Europe/Sofya',
  'Europe/Prague' => 'Europe/Prag',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantik/Faeroe',
  'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
  'America/Scoresbysund' => 'Amerika/Scoresbysund',
  'America/Godthab' => 'Amerika/Godthab',
  'America/Thule' => 'Amerika/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Cebelitarık',
  'Europe/Athens' => 'Europe/Atina',
  'Europe/Budapest' => 'Europe/Budapeşte',
  'Atlantic/Reykjavik' => 'Atlantik/Rekyavik',
  'Europe/Rome' => 'Europe/Roma',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Lüksemburg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Varşova',
  'Europe/Lisbon' => 'Europe/Lizbon',
  'Atlantic/Azores' => 'Atlantik/Azores',
  'Atlantic/Madeira' => 'Atlantik/Madeira',
  'Europe/Bucharest' => 'Europe/Bükreş',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moskova',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Asya/Yekaterinburg',
  'Asia/Omsk' => 'Asya/Omsk',
  'Asia/Novosibirsk' => 'Asya/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asya/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asya/Irkutsk',
  'Asia/Yakutsk' => 'Asya/Yakutsk',
  'Asia/Vladivostok' => 'Asya/Vladivostok',
  'Asia/Sakhalin' => 'Asya/Sakhalin',
  'Asia/Magadan' => 'Asya/Magadan',
  'Asia/Kamchatka' => 'Asya/Kamchatka',
  'Asia/Anadyr' => 'Asya/Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrad' ,
  'Europe/Madrid' =>'Europe/Madrid' ,
  'Africa/Ceuta' => 'Afrika/Ceuta',
  'Atlantic/Canary' => 'Atlantik/Kanarya',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zürih' ,
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'Amerika/New_York',
  'America/Chicago' =>'Amerika/Chicago' ,
  'America/North_Dakota/Center' => 'Amerika/North_Dakota/Merkez',
  'America/Denver' => 'Amerika/Denver',
  'America/Los_Angeles' => 'Amerika/Los_Angeles',
  'America/Juneau' => 'Amerika/Juneau',
  'America/Yakutat' => 'Amerika/Yakutat',
  'America/Anchorage' => 'Amerika/ankraj',
  'America/Nome' =>'Amerika/Nome' ,
  'America/Adak' => 'Amerika/Adak',
  'Pacific/Honolulu' => 'Pasifik/Honolulu',
  'America/Phoenix' => 'Amerika/Anka',
  'America/Boise' => 'Amerika/Boise',
  'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
  'America/Indiana/Knox' =>  'Indiana-Amerika-Knox',
  'America/Indiana/Vevay' => 'Indiana-Amerika-Vevay',
  'America/Kentucky/Louisville' =>'Kentucky-Amerika-Louisville'  ,
  'America/Kentucky/Monticello' =>  'Kentucky-Amerika-Monticello' ,
  'America/Detroit' => 'Amerika/Detroit',
  'America/Menominee' => 'Amerika/Menominee',
  'America/St_Johns' => 'Amerika/St_Johns',
  'America/Goose_Bay' => 'Amerika/Goose_Bay' ,
  'America/Halifax' => 'Amerika/Halifax',
  'America/Glace_Bay' =>'Amerika/Glace_Bay' ,
  'America/Montreal' => 'Amerika/Montreal',
  'America/Toronto' => 'Amerika/Toronto',
  'America/Thunder_Bay' => 'Amerika/Thunder_Bay' ,
  'America/Nipigon' => 'Amerika/Nipigon',
  'America/Rainy_River' => 'Amerika/Rainy_River',
  'America/Winnipeg' => 'Amerika/Winnipeg',
  'America/Regina' => 'Amerika/Regina',
  'America/Swift_Current' => 'Amerika/Swift_Current',
  'America/Edmonton' =>  'Amerika/Edmonton',
  'America/Vancouver' => 'Amerika/Vancouver',
  'America/Dawson_Creek' => 'Amerika/Dawson_Creek',
  'America/Pangnirtung' => 'Amerika/Pangnirtung'  ,
  'America/Iqaluit' => 'Amerika/Iqaluit' ,
  'America/Coral_Harbour' => 'Amerika/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
  'America/Cambridge_Bay' => 'Amerika/Cambridge_Bay',
  'America/Yellowknife' => 'Amerika/Yellowknife',
  'America/Inuvik' =>'Amerika/Inuvik' ,
  'America/Whitehorse' => 'Amerika/Whitehorse' ,
  'America/Dawson' => 'Amerika/Dawson',
  'America/Cancun' => 'Amerika/Cancun',
  'America/Merida' => 'Amerika/Merida',
  'America/Monterrey' => 'Amerika/Monterrey',
  'America/Mexico_City' => 'Amerika/Mexico_City',
  'America/Chihuahua' => 'Amerika/Chihuahua',
  'America/Hermosillo' => 'Amerika/Hermosillo',
  'America/Mazatlan' => 'Amerika/Mazatlan',
  'America/Tijuana' => 'Amerika/Tijuana',
  'America/Anguilla' => 'Amerika/Anguilla',
  'America/Antigua' => 'Amerika/Antigua',
  'America/Nassau' =>'Amerika/Nassau' ,
  'America/Barbados' => 'Amerika/Barbados',
  'America/Belize' => 'Amerika/Belize',
  'Atlantic/Bermuda' => 'Atlantik/Bermuda',
  'America/Cayman' => 'Amerika/Kayman',
  'America/Costa_Rica' => 'Amerika/Costa_Rica',
  'America/Havana' => 'Amerika/Havana',
  'America/Dominica' => 'Amerika/Dominika',
  'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
  'America/El_Salvador' => 'Amerika/El_Salvador',
  'America/Grenada' => 'Amerika/Grenada',
  'America/Guadeloupe' => 'Amerika/Guadeloupe',
  'America/Guatemala' => 'Amerika/Guatemala',
  'America/Port-au-Prince' => 'Amerika/miniport-au-Prince',
  'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
  'America/Jamaica' => 'Amerika/Türkiye',
  'America/Martinique' => 'Amerika/Martinique',
  'America/Montserrat' => 'Amerika/Montserrat',
  'America/Managua' => 'Amerika/Managua',
  'America/Panama' => 'Amerika/Panama',
  'America/Puerto_Rico' =>'Amerika/Puerto_Rico' ,
  'America/St_Kitts' => 'Amerika/St_Kitts',
  'America/St_Lucia' => 'Amerika/St_Lucia',
  'America/Miquelon' => 'Amerika/Miquelon',
  'America/St_Vincent' => 'Amerika/St_Vincent',
  'America/Grand_Turk' => 'Amerika/Grand_Turk',
  'America/Tortola' => 'Amerika/Tortola',
  'America/St_Thomas' => 'Amerika/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'Amerika/Arjantin/Buenos_Aires',
  'America/Argentina/Cordoba' => 'Amerika/Arjantin/Cordoba',
  'America/Argentina/Tucuman' => 'Amerika/Arjantin/Tucuman',
  'America/Argentina/La_Rioja' => 'Amerika/Arjantin/La_Rioja',
  'America/Argentina/San_Juan' => 'Amerika/Arjantin/San_Juan',
  'America/Argentina/Jujuy' => 'Jujuy/Amerika/Arjantin',
  'America/Argentina/Catamarca' => 'Amerika/Arjantin/Catamarca',
  'America/Argentina/Mendoza' => 'Amerika/Arjantin/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'Amerika/Arjantin/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'Amerika/Arjantin/Ushuaia',
  'America/Aruba' => 'Amerika/Aruba',
  'America/La_Paz' => 'Amerika/La_Paz',
  'America/Noronha' => 'Amerika/Noronha',
  'America/Belem' => 'Amerika/Belem',
  'America/Fortaleza' => 'Amerika/Fortaleza',
  'America/Recife' => 'Amerika/Recife',
  'America/Araguaina' => 'Amerika/Araguaina',
  'America/Maceio' => 'Amerika/Maceio',
  'America/Bahia' => 'Amerika/Bahia',
  'America/Sao_Paulo' => 'Amerika/Sao_Paulo',
  'America/Campo_Grande' => 'Amerika/Campo_Grande',
  'America/Cuiaba' => 'Amerika/Cuiaba',
  'America/Porto_Velho' => 'Amerika/Porto_Velho',
  'America/Boa_Vista' => 'Amerika/Boa_Vista',
  'America/Manaus' => 'Amerika/Manaus',
  'America/Eirunepe' => 'Amerika/Eirunepe',
  'America/Rio_Branco' => 'Amerika/Rio_Branco',
  'America/Santiago' => 'Amerika/Santiago',
  'Pacific/Easter' => 'Pasifik/Paskalya' ,
  'America/Bogota' => 'Amerika/Bogota',
  'America/Curacao' => 'Amerika/Curacao',
  'America/Guayaquil' => 'Amerika/Guayaquil',
  'Pacific/Galapagos' => 'Pasifik/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantik/Stanley',
  'America/Cayenne' => 'Amerika/Cayenne',
  'America/Guyana' => 'Amerika/Guyana',
  'America/Asuncion' => 'Amerika/Asuncion',
  'America/Lima' => 'Amerika/Lima',
  'Atlantic/South_Georgia' => 'Atlantik/South_Georgia',
  'America/Paramaribo' => 'Amerika/Paramaribo',
  'America/Port_of_Spain' => 'Amerika/Port_of_Spain',
  'America/Montevideo' => 'Amerika/Montevideo',
  'America/Caracas' => 'Amerika/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Sık Kullanılanlar';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'SuiteCRM',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'GoToMeeting',
    'IBMSmartCloud'=>'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.NET',
    'Facebook'=>'Facebook',
    'Twitter'=>'Twitter',
  );
  $app_list_strings['eapm_list_import']= array(
  	'Google' => 'Google Rehber',
  );
$app_list_strings['eapm_list_documents']= array(
  	'Google' => 'Google Dokümanlar',
  );
	$app_list_strings['token_status'] = array(
        1 => 'Request',
        2 => 'Erişim',
        3 => 'Geçersiz',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Kampanya' ,
    'email' => 'E-posta',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Kampanya' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Kampanya' ,
    'email' => 'E-posta',
  );
$app_strings ['documentation'] = array (
    'LBL_DOCS' => 'Belge',
    'ULT' => '02_Sugar_Ultimate',
	'ENT' => '02_Sugar_Enterprise',
	'CORP' => '03_Sugar_Corporate',
	'PRO' => '04_Sugar_Professional',
	'COM' => '05_Sugar_Community_Edition'
);


// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Bilgi Tabanı';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Taslak';
$app_list_strings['aok_status_list']['Expired'] = 'Süresi geçmiş';
$app_list_strings['aok_status_list']['In_Review'] = 'İncelemede';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Özel';
$app_list_strings['aok_status_list']['published_public'] = 'Ortak';


$app_list_strings['moduleList']['Reminders'] = 'Reminders';
$app_list_strings['moduleListSingular']['Reminders'] = 'Reminder';

$app_list_strings['moduleList']['Reminders_Invitees'] = 'Reminders_Invitees';
$app_list_strings['moduleListSingular']['Reminders_Invitees'] = 'Reminder_Invitee';

$app_list_strings['moduleList']['FP_events'] = 'Etkinlikler';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Konumlar';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Davetli';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Davetli değil';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Katılınan';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Katılınan değil';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Kabul';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Reddedilmiş';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Cevapsız';

$app_strings['LBL_STATUS_EVENT'] = 'Davet Durumu';
$app_strings['LBL_ACCEPT_STATUS'] = 'Kabul Durumu';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Þu Andaki Sayfa';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Giriþ Listesi';
$app_strings['LBL_LISTVIEW_NONE'] = 'Tümünü Kaldır';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'İndeks Olayı';
$app_list_strings['moduleList']['AOD_Index'] = 'İndeks';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Şikayet Eylemleri';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Durum güncellemeleri';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Şikayet Eylemleri';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Durum güncellemeleri';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array (
        'Open' => 'Opened',
        'Closed' => 'Kapandı',
    );

$app_list_strings['case_status_default_key'] = 'Yeni';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Yeni',
        'Open_Assigned' => 'Atanmış',
        'Closed_Closed' => 'Kapandı',
        'Open_Pending Input' => 'Cevap Bekleniyor',
        'Closed_Rejected' => 'Reddedildi',
        'Closed_Duplicate' => 'Eş Kayıt Oluştur',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Tek Kullanıcı',
        'Account' => 'Hesap kullanıcısı',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'AOP varsayılan olarak kullan',
    'singleUser' => 'Tek Kullanıcı',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Rastgele',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Raporlar';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Rapor Koşulları';
$app_list_strings['moduleList']['AOR_Charts'] = 'Rapor Grafikleri';
$app_list_strings['moduleList']['AOR_Fields'] = 'Rapor Alanları';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Zamanlanmış Raporlar';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Eşit';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Eşit Değil';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Daha Büyük';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Daha Küçük';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Daha büyük veya Eşit';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Daha Küçük veya Eşit';
$app_list_strings['aor_operator_list']['Contains'] = 'İçerir';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Başlangıç';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-a-g';
$app_list_strings['aor_format_options']['Ymd'] = 'Yag';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-a';
$app_list_strings['aor_format_options']['d/m/Y'] = 'g/a/Y';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'Ve';
$app_list_strings['aor_condition_operator_list']['OR'] = 'veya';
$app_list_strings['aor_condition_type_list']['Value'] = 'Değer:';
$app_list_strings['aor_condition_type_list']['Field'] = 'Alan';
$app_list_strings['aor_condition_type_list']['Date'] = 'Tarih';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Bunlardan biri';
$app_list_strings['aor_condition_type_list']['Period'] = 'Aralık';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'dakika';
$app_list_strings['aor_date_type_list']['hour'] = 'Saat';
$app_list_strings['aor_date_type_list']['day'] = 'Gün';
$app_list_strings['aor_date_type_list']['week'] = 'Haftalar';
$app_list_strings['aor_date_type_list']['month'] = 'Aylar';
$app_list_strings['aor_date_type_list']['business_hours'] = 'İş Saatleri';
$app_list_strings['aor_date_options']['now'] = 'Şimdi';
$app_list_strings['aor_date_options']['field'] = 'Bu Alan';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Artan';
$app_list_strings['aor_sort_operator']['DESC'] = 'Azalan';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Sayı';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Toplam';
$app_list_strings['aor_function_list']['AVG'] = 'Ortalama';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Sayı';
$app_list_strings['aor_total_options']['SUM'] = 'Toplam';
$app_list_strings['aor_total_options']['AVG'] = 'Ortalama';
$app_list_strings['aor_chart_types']['bar'] = 'Çubuk Grafik';
$app_list_strings['aor_chart_types']['line'] = 'Çizgi Grafik';
$app_list_strings['aor_chart_types']['pie'] = 'Pasta Grafik';
$app_list_strings['aor_chart_types']['radar'] = 'Radar Grafik';
$app_list_strings['aor_chart_types']['polar'] = 'Polar Grafik';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Aylık';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Haftalık';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Günlük';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktif';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Aktif değil';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-postalar';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Kullanıcı';
$app_list_strings['aor_email_type_list']['Users'] = 'Kullanıcılar';
$app_list_strings['aor_assign_options']['all'] = 'TÜM Kullanıcılar';
$app_list_strings['aor_assign_options']['role'] = 'TÜM Kullanıcı Rolleri';
$app_list_strings['aor_assign_options']['security_group'] = 'Güvenlik Grubundaki TÜM Kullanıcılar';
$app_list_strings['date_time_period_list']['today'] = 'Bugün';
$app_list_strings['date_time_period_list']['yesterday'] = 'Dün';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Geçen Hafta';
$app_list_strings['date_time_period_list']['last_month'] = 'Son ay';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Bu Çeyrek';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Son Çeyrek';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'üzerinde';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'üzerinde';
$app_strings['LBL_CRON_AT'] = 'sırasında';
$app_strings['LBL_CRON_RAW'] = 'Advanced';
$app_strings['LBL_CRON_MIN'] = 'Dak';
$app_strings['LBL_CRON_HOUR'] = 'Saat';
$app_strings['LBL_CRON_DAY'] = 'Gün';
$app_strings['LBL_CRON_MONTH'] = 'Ay';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Günlük';
$app_strings['LBL_CRON_WEEKLY'] = 'Haftalık';
$app_strings['LBL_CRON_MONTHLY'] = 'Aylık';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontratlar';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Faturalar';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF Şablonu';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Ürün Kategorileri';
$app_list_strings['moduleList']['AOS_Products'] = 'Ürünler';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Satır Öğeleri';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Satır Öğesi Grupları';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Fiyat Teklifleri';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Rakip';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Müşteri';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Yatırımcı';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Ortak';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Basın';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Olası Müşteri';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Bayii';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Diğer';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Taslak';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Pazarlık';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Teslim edildi';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Askıda';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Onaylandı';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Kabul-Kapandı';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Kapandı-Başarısız';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Kapandı-Sonlandı';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Onaylandı';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Onaylanmadı';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Oran';
$app_list_strings['discount_list']['Amount'] = 'Tutar';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Rakip';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Müşteri';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Yatırımcı';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Ortak';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Basın';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Olası Müşteri';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Bayii';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Diğer';
$app_list_strings['invoice_status_dom']['Paid'] = 'Ödenen';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Ödenmemiş';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'İptal edilmiş';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Faturalanmamış';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Faturalanmış';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Taşınabilir';
$app_list_strings['product_category_dom']['Desktops'] = 'Masaüstü';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Mal';
$app_list_strings['product_type_dom']['Service'] = 'Servis';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Fiyat Teklifleri';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Faturalar';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontratlar';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Fiyat Teklifleri';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Faturalar';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontratlar';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Müşteriler';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'İlgililer';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Talepler';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Başlamadı';
$app_list_strings['contract_status_list']['In Progress'] = 'İşlemde';
$app_list_strings['contract_status_list']['Signed'] = 'İmzalanmış';
$app_list_strings['contract_type_list']['Type'] = 'Türü:';
$app_strings['LBL_GENERATE_LETTER'] = 'Mektup Oluştur';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Lütfen bir Şablon Seçin';
$app_strings['LBL_NO_TEMPLATE'] = 'HATA\nŞablon bulunamadı.\nLütfen PDF şablonları modülü için gidip bir tane oluşturun ';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'İş Akışı';
$app_list_strings['moduleList']['AOW_Conditions'] = 'İş Akışı Koşulları';
$app_list_strings['moduleList']['AOW_Processed'] = 'Proses Denetimi';
$app_list_strings['moduleList']['AOW_Actions'] = 'İş Akışı Eylemleri';
$app_list_strings['aow_status_list']['Active'] = 'Aktif';
$app_list_strings['aow_status_list']['Inactive'] = 'Aktif değil';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Eşit';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Eşit Değil';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Daha Büyük';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Daha Küçük';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Daha büyük veya Eşit';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Daha Küçük veya Eşit';
$app_list_strings['aow_operator_list']['Contains'] = 'İçerir';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Başlangıç';
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
$app_list_strings['aow_process_status_list']['Complete'] = 'Tamamlandı';
$app_list_strings['aow_process_status_list']['Running'] = 'Çalışan';
$app_list_strings['aow_process_status_list']['Pending'] = 'Askıda';
$app_list_strings['aow_process_status_list']['Failed'] = 'Hatalı';
$app_list_strings['aow_condition_operator_list']['And'] = 'Ve';
$app_list_strings['aow_condition_operator_list']['OR'] = 'veya';
$app_list_strings['aow_condition_type_list']['Value'] = 'Değer:';
$app_list_strings['aow_condition_type_list']['Field'] = 'Alan';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Değişiklik?';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Güvenlik Grubunda';
$app_list_strings['aow_condition_type_list']['Date'] = 'Tarih';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Bunlardan biri';
$app_list_strings['aow_action_type_list']['Value'] = 'Değer:';
$app_list_strings['aow_action_type_list']['Field'] = 'Alan';
$app_list_strings['aow_action_type_list']['Date'] = 'Tarih';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'En Az Meşgul';
$app_list_strings['aow_action_type_list']['Random'] = 'Rastgele';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Değer:';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Alan';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'dakika';
$app_list_strings['aow_date_type_list']['hour'] = 'Saat';
$app_list_strings['aow_date_type_list']['day'] = 'Gün';
$app_list_strings['aow_date_type_list']['week'] = 'Haftalar';
$app_list_strings['aow_date_type_list']['month'] = 'Aylar';
$app_list_strings['aow_date_type_list']['business_hours'] = 'İş Saatleri';
$app_list_strings['aow_date_options']['now'] = 'Şimdi';
$app_list_strings['aow_date_options']['today'] = 'Bugün';
$app_list_strings['aow_date_options']['field'] = 'Bu Alan';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TÜM Kullanıcılar';
$app_list_strings['aow_assign_options']['role'] = 'TÜM Kullanıcı Rolleri';
$app_list_strings['aow_assign_options']['security_group'] = 'Güvenlik Grubundaki TÜM Kullanıcılar';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-postalar';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Postayı Kaydet';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Bağlantılı Alan';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Kullanıcı';
$app_list_strings['aow_email_type_list']['Users'] = 'Kullanıcılar';
$app_list_strings['aow_email_to_list']['to'] = 'A';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc:';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc:';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tüm Kayıtlar';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Yeni Kayıtlar';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Değiştirilen Kayıtlar';
$app_list_strings['aow_run_when_list']['Always'] = 'Her zaman';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Proje şablonları';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Proje görev şablonları';
$app_list_strings['relationship_type_list']['FS'] = 'Başlamak için Bitir';
$app_list_strings['relationship_type_list']['SS'] = 'Başlamak için Başlat';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Proje tatilleri';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'İlgililer';
$app_list_strings['holiday_resource_dom']['Users'] = 'Kullanıcılar';
$app_list_strings['duration_unit_dom']['Days'] = 'Gün';
$app_list_strings['duration_unit_dom']['Hours'] = 'Saat';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Gantt görünümü';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Gantt görünümü';
$app_strings['LBL_CREATE_PROJECT'] = 'Proje  Yarat';

//gmaps
$app_strings['LBL_MAP'] = 'Harita';
$app_strings['LBL_MAPS'] = 'Haritalar';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Boylam';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Enlem';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode durumu';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adres';
$app_strings['LBL_BUG_FIX'] = 'Hata düzeltme';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Haritalar';
$app_list_strings['moduleList']['jjwg_Markers'] = 'İşaretleyicileri göster';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Alanları göster';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Harita adresi Önbelleği';

$app_list_strings['map_unit_type_list']['mi'] = 'Mil';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometre';

$app_list_strings['map_module_type_list']['Accounts'] = 'Müşteriler';
$app_list_strings['map_module_type_list']['Contacts'] = 'İlgililer';
$app_list_strings['map_module_type_list']['Cases'] = 'Şikayetler';
$app_list_strings['map_module_type_list']['Leads'] = 'Talepler';
$app_list_strings['map_module_type_list']['Meetings'] = 'Toplantılar';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Fırsatlar';
$app_list_strings['map_module_type_list']['Project'] = 'Projeler';
$app_list_strings['map_module_type_list']['Prospects'] = 'Hedefler';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Müşteriler';
$app_list_strings['map_relate_type_list']['Contacts'] = 'İlgililer';
$app_list_strings['map_relate_type_list']['Cases'] = 'Şikayetler';
$app_list_strings['map_relate_type_list']['Leads'] = 'Talepler';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Toplantılar';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Fırsatlar';
$app_list_strings['map_relate_type_list']['Project'] = 'Projeler';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Hedefler';

$app_list_strings['marker_image_list']['accident'] = 'Kaza';
$app_list_strings['marker_image_list']['administration'] = 'Yönetim';
$app_list_strings['marker_image_list']['agriculture'] = 'Tarım';
$app_list_strings['marker_image_list']['aircraft_small'] = ' Küçük uçak ';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Uçak turizm';
$app_list_strings['marker_image_list']['airport'] = 'Havaalanı';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfi Tiyatro';
$app_list_strings['marker_image_list']['apartment'] = 'Daire';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvaryum';
$app_list_strings['marker_image_list']['arch'] = 'Yapı';
$app_list_strings['marker_image_list']['atm'] = 'ATM';
$app_list_strings['marker_image_list']['audio'] = 'Ses';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banka Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banka Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plaj';
$app_list_strings['marker_image_list']['beautiful'] = 'Güzel';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bisiklet park yeri';
$app_list_strings['marker_image_list']['big_city'] = 'Büyük şehir';
$app_list_strings['marker_image_list']['bridge'] = 'Köprü';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Modern köprü';
$app_list_strings['marker_image_list']['bus'] = 'Otobüs';
$app_list_strings['marker_image_list']['cable_car'] = 'Teleferik';
$app_list_strings['marker_image_list']['car'] = 'Araba';
$app_list_strings['marker_image_list']['car_rental'] = 'Araba Kiralama';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'Kale';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedral';
$app_list_strings['marker_image_list']['chapel'] = 'Şapel';
$app_list_strings['marker_image_list']['church'] = 'Kilise';
$app_list_strings['marker_image_list']['city_square'] = 'Kent Meydanı';
$app_list_strings['marker_image_list']['cluster'] = 'Küme';
$app_list_strings['marker_image_list']['cluster_2'] = 'Küme 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Küme 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Küme 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Küme 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kahve';
$app_list_strings['marker_image_list']['community_centre'] = 'İlçe Merkezi';
$app_list_strings['marker_image_list']['company'] = 'Şirket';
$app_list_strings['marker_image_list']['conference'] = 'Konferans';
$app_list_strings['marker_image_list']['construction'] = 'İnşaat';
$app_list_strings['marker_image_list']['convenience'] = 'Kolaylık';
$app_list_strings['marker_image_list']['court'] = 'Mahkeme';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Döviz Alım Satım';
$app_list_strings['marker_image_list']['customs'] = 'Gümrük';
$app_list_strings['marker_image_list']['cycling'] = 'Bisiklet';
$app_list_strings['marker_image_list']['dam'] = 'Baraj';
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
$app_list_strings['marker_image_list']['dentist'] = 'Diş hekimi';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Deptartment deposu';
$app_list_strings['marker_image_list']['disability'] = 'Sakatlık';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Engelli Parkı';
$app_list_strings['marker_image_list']['doctor'] = 'Doktor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Aşağı';
$app_list_strings['marker_image_list']['down_left'] = 'Aşağı sol';
$app_list_strings['marker_image_list']['down_right'] = 'Aşağı sağ';
$app_list_strings['marker_image_list']['down_then_left'] = 'Aşağıya sonra sola';
$app_list_strings['marker_image_list']['down_then_right'] = 'Aşağı sonra sağa';
$app_list_strings['marker_image_list']['drugs'] = 'Uyuşturucu';
$app_list_strings['marker_image_list']['elevator'] = 'Asansör';
$app_list_strings['marker_image_list']['embassy'] = 'Büyükelçilik';
$app_list_strings['marker_image_list']['expert'] = 'Uzman';
$app_list_strings['marker_image_list']['factory'] = 'Fabrika';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Kayalar düşebilir';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fiyord';
$app_list_strings['marker_image_list']['forest'] = 'Orman';
$app_list_strings['marker_image_list']['fountain'] = 'Çeşme';
$app_list_strings['marker_image_list']['friday'] = 'Cuma';
$app_list_strings['marker_image_list']['garden'] = 'Bahçe';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzin istasyonu';
$app_list_strings['marker_image_list']['geyser'] = 'Gayzer';
$app_list_strings['marker_image_list']['gifts'] = 'Hediyeler';
$app_list_strings['marker_image_list']['gourmet'] = 'Gurme';
$app_list_strings['marker_image_list']['grocery'] = 'Bakkal';
$app_list_strings['marker_image_list']['hairsalon'] = 'Kuaför';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Otoban';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Tarihi Meydan';
$app_list_strings['marker_image_list']['home'] = 'Ana Sayfa';
$app_list_strings['marker_image_list']['hospital'] = 'Hastane';
$app_list_strings['marker_image_list']['hostel'] = 'Konuk Evi';
$app_list_strings['marker_image_list']['hotel'] = 'Otel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Otel 1 yıldız';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Otel 2 yıldızlı';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Otel 3 yıldızlı';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Otel 4 yıldız';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Otel 5 yıldız';
$app_list_strings['marker_image_list']['info'] = 'Bilgi:';
$app_list_strings['marker_image_list']['justice'] = 'Adalet';
$app_list_strings['marker_image_list']['lake'] = 'Göl';
$app_list_strings['marker_image_list']['laundromat'] = 'Çamaşırhane';
$app_list_strings['marker_image_list']['left'] = 'Sol';
$app_list_strings['marker_image_list']['left_then_down'] = 'Aşağıya sonra sola';
$app_list_strings['marker_image_list']['left_then_up'] = 'Sonra yukarı soldan';
$app_list_strings['marker_image_list']['library'] = 'Kütüphane';
$app_list_strings['marker_image_list']['lighthouse'] = 'Deniz feneri';
$app_list_strings['marker_image_list']['liquor'] = 'Likör';
$app_list_strings['marker_image_list']['lock'] = 'Kilitle';
$app_list_strings['marker_image_list']['main_road'] = 'Ana Yol';
$app_list_strings['marker_image_list']['massage'] = 'Masaj';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Gezici telefon kulübesi';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Kule';
$app_list_strings['marker_image_list']['monastery'] = 'Manastır';
$app_list_strings['marker_image_list']['monday'] = 'Pazartesi';
$app_list_strings['marker_image_list']['monument'] = 'Anıt';
$app_list_strings['marker_image_list']['mosque'] = 'Camii';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motosiklet';
$app_list_strings['marker_image_list']['museum'] = 'Müze';
$app_list_strings['marker_image_list']['music_live'] = 'Canlı müzik';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Yakıt Pompası';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Saray';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramik';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parket ve yürü';
$app_list_strings['marker_image_list']['parking'] = 'Otopark';
$app_list_strings['marker_image_list']['photo'] = 'Resim';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Ziyaret edilmemiş yerler ';
$app_list_strings['marker_image_list']['places_visited'] = 'Ziyaret edilen yerler';
$app_list_strings['marker_image_list']['playground'] = 'Oyun bahçesi';
$app_list_strings['marker_image_list']['police'] = 'Polis';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Posta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Güç hattı direği';
$app_list_strings['marker_image_list']['power_plant'] = 'Enerji santrali';
$app_list_strings['marker_image_list']['power_substation'] = 'Güç Trafo Merkezi';
$app_list_strings['marker_image_list']['public_art'] = 'Genel sanatlar';
$app_list_strings['marker_image_list']['rain'] = 'Yağmur';
$app_list_strings['marker_image_list']['real_estate'] = 'Emlak';
$app_list_strings['marker_image_list']['regroup'] = 'Yeniden gruplandır';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoran';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restoran Afrika';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restoran ızgara';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restoran açık büfe';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restoran Çin';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Balık Restoran';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant balık kızartma';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restoran gurme';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restoran Yunan';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restoran Hint';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'İtalyan Restoran';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restoran Japon';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restoran kebap';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restoran Kore';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restoran Akdeniz';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restoran Meksika';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restoran romantik';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restoran Tay';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restoran Türk';
$app_list_strings['marker_image_list']['right'] = 'Sağ';
$app_list_strings['marker_image_list']['right_then_down'] = 'Sağa sonra aşağıya';
$app_list_strings['marker_image_list']['right_then_up'] = 'Sağa sonra yukarıya';
$app_list_strings['marker_image_list']['satursday'] = 'Cumartesi';
$app_list_strings['marker_image_list']['school'] = 'Okul';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Alışveriş Merkezi';
$app_list_strings['marker_image_list']['shore'] = 'Sahil';
$app_list_strings['marker_image_list']['sight'] = 'Manzara';
$app_list_strings['marker_image_list']['small_city'] = 'Küçük şehir';
$app_list_strings['marker_image_list']['snow'] = 'Kar';
$app_list_strings['marker_image_list']['spaceport'] = 'Uzaylimanı';
$app_list_strings['marker_image_list']['speed_100'] = 'Hızı 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Hız 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Hız 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Hız 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Hız 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Hız 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Hız 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Hız 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Hızı 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Hızı 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Hızı 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Hız 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Hız kamburu';
$app_list_strings['marker_image_list']['stadium'] = 'Stadyum';
$app_list_strings['marker_image_list']['statue'] = 'Heykel';
$app_list_strings['marker_image_list']['steam_train'] = 'Buharlı tren';
$app_list_strings['marker_image_list']['stop'] = 'Dur';
$app_list_strings['marker_image_list']['stoplight'] = 'Trafik ışığı';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Paz';
$app_list_strings['marker_image_list']['sunday'] = 'Pazar';
$app_list_strings['marker_image_list']['supermarket'] = 'Süpermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagog';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taksi yolu';
$app_list_strings['marker_image_list']['teahouse'] = 'Çay evi';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu tapınağı';
$app_list_strings['marker_image_list']['terrace'] = 'Teras';
$app_list_strings['marker_image_list']['text'] = 'Metin';
$app_list_strings['marker_image_list']['theater'] = 'Tiyatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Tema Parkı';
$app_list_strings['marker_image_list']['thursday'] = 'Perşembe';
$app_list_strings['marker_image_list']['toilets'] = 'Tuvaletler';
$app_list_strings['marker_image_list']['toll_station'] = 'Ödeme gişesi';
$app_list_strings['marker_image_list']['tower'] = 'Kule';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Trafik polis kamerası';
$app_list_strings['marker_image_list']['train'] = 'Tren';
$app_list_strings['marker_image_list']['tram'] = 'Tramvay';
$app_list_strings['marker_image_list']['truck'] = 'Kamyon';
$app_list_strings['marker_image_list']['tuesday'] = 'Salı';
$app_list_strings['marker_image_list']['tunnel'] = 'Tünel';
$app_list_strings['marker_image_list']['turn_left'] = 'Sola dön';
$app_list_strings['marker_image_list']['turn_right'] = 'Sağa dön';
$app_list_strings['marker_image_list']['university'] = 'Üniversite';
$app_list_strings['marker_image_list']['up'] = 'Yukarı';
$app_list_strings['marker_image_list']['up_left'] = 'Yukarı Sol';
$app_list_strings['marker_image_list']['up_right'] = 'Yukarı sağ';
$app_list_strings['marker_image_list']['up_then_left'] = 'yukarı sonra sola ';
$app_list_strings['marker_image_list']['up_then_right'] = 'Yukarı sonra sağa';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Su';
$app_list_strings['marker_image_list']['waterfall'] = 'Şelale';
$app_list_strings['marker_image_list']['watermill'] = 'Su değirmeni';
$app_list_strings['marker_image_list']['waterpark'] = 'Su Parkı';
$app_list_strings['marker_image_list']['watertower'] = 'Su kulesi';
$app_list_strings['marker_image_list']['wednesday'] = 'Çarşamba';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Rüzgar Türbini';
$app_list_strings['marker_image_list']['windmill'] = 'Yel değirmeni';
$app_list_strings['marker_image_list']['winery'] = 'Şarapcı';
$app_list_strings['marker_image_list']['work_office'] = 'Ofis iş';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Dünya Mirası';
$app_list_strings['marker_image_list']['zoo'] = 'Hayvanat Bahçesi';


//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Ofis Dışında';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Toplantıda';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Yeniden zamanla';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Lütfen yeniden zamanlama bilgilerini girin';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Tarih:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Sebep:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Lütfen geçerli bir tarih seçin';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Lütfen bir neden seçin';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Yeniden zamanla';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Arama girişimleri tarihcesi';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Arama girişimleri';

//SecurityGroups
$app_list_strings["moduleList"]["SecurityGroups"] = 'Güvenlik grubu yönetimi';
$app_strings['LBL_LOGIN_AS'] = "Farklı Kullanıcı ile Giriş";
$app_strings['LBL_LOGOUT_AS'] = "Farklı Kullanıcı ile Çıkış";
$app_strings['LBL_SECURITYGROUP'] = 'Güvenlik Grubu';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook kullanıcısı';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter Kullanıcısı';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Sosyal besleme bilgileri';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Süzgeçler';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Müşteri Yarat';
$app_strings['LBL_QUICK_CONTACT'] = 'İlgili Oluştur';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Fırsat Oluştur';
$app_strings['LBL_QUICK_LEAD'] = 'Talep Oluştur';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Belge Oluştur';
$app_strings['LBL_QUICK_CALL'] = 'Tel.Araması Planlama';
$app_strings['LBL_QUICK_TASK'] = 'Görev Oluştur';
$app_strings['LBL_COLLECTION_TYPE'] = 'Türü:';

$app_strings['LBL_ADD_TAB'] = 'Sekme Ekle';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Gösterge Panosu';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Kontrol Paneli adı girin:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Sütun sayısını seçin';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Silmek istediğinizden emin misiniz';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'Kontrol Paneli?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Kontrol Paneli Sayfası Ekle';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Geçerli Kontrol Paneli sayfasını kaldır';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Kontrol Paneli sayfasını yeniden adlandır';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'SuiteCRM keşfedin';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Görevler', 'Meetings' => 'Toplantılar', 'Calls' => 'Tel.Aramaları', 'Notes' => 'Notlar', 'Emails' => 'E-postalar' );

?>
