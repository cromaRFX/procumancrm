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
  'language_pack_name' => ' Magyar (Hungarian) - hu_HU',
  'moduleList' =>
  array (
    'Home' => 'Kezdőlap',
    'Contacts' => 'Kapcsolattartók',
    'Accounts' => 'Ügyfelek',
    'Opportunities' => 'Lehetőségek',
    'Cases' => 'Esetek',
    'Notes' => 'Megjegyzések',
    'Calls' => 'Hívások',
    'Emails' => 'Emailek',
    'Meetings' => 'Találkozók',
    'Tasks' => 'Feladatok',
    'Calendar' => 'Naptár',
    'Leads' => 'Érdeklődők',
    'Currencies' => 'Pénznemek',
    'Activities' => 'Tevékenységek',
    'Bugs' => 'Hibák',
    'Feeds' => 'RSS',
    'iFrames'=>'Weboldalaim',
    'TimePeriods'=>'Időszakok',
    'TaxRates'=>'Adókulcsok',
    'ContractTypes' => 'Szerződés típusok',
    'Schedulers'=>'Ütemezők',
    'Project'=>'Projektek',
    'ProjectTask'=>'Projektfeladatok',
    'Campaigns'=>'Kampányok',
    'CampaignLog'=>'Kampány napló',
    'Documents'=>'Dokumentumok',
    'DocumentRevisions'=>'Dokumentum verziók',
    'Connectors'=>'Összekötők',
    'Roles'=>'Szerepkörök',
    'Notifications'=>'Értesítések',
    'Sync'=>'Szinkronizálás',
    'Users' => 'Felhasználók',
    'Employees' => 'Munkatársak',
    'Administration' => 'Adminisztráció',
    'ACLRoles' => 'Szerepkörök',
    'InboundEmail' => 'Bejövő email',
    'Releases' => 'Kiadások',
    'Prospects' => 'Ügyféljelöltek',
    'Queues' => 'Várakozási sor',
    'EmailMarketing' => 'Email Marketing',
    'EmailTemplates' => 'Email sablonok',
    'SNIP' => "Email-archiválás",
    'ProspectLists' => 'Ügyféljelölt listák',
    'SavedSearch' => 'Mentett keresések',
    'UpgradeWizard' => 'Verziófrissítő varázsló',
    'Trackers' => 'Követők',
    'TrackerPerfs' => 'Követő teljesítmény',
    'TrackerSessions' => 'Követő munkamenetek',
    'TrackerQueries' => 'Követő lekérdezések',
    'FAQ' => 'FAQ',
    'Newsletters' => 'Hírlevelek',
    'SugarFeed'=>'SuiteCRM Feed',
    'KBDocuments' => 'Tudásbázis',
  'SugarFavorites'=>'SuiteCRM Favorites',

    'OAuthKeys' => 'Oauth kulcsok',
    'OAuthTokens' => 'OAuth Tokens',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Kezdőlap',
    'Dashboard' => 'Vezérlőpult',
    'Contacts' => 'Kapcsolattartó',
    'Accounts' => 'Ügyfél',
    'Opportunities' => 'Lehetőség',
    'Cases' => 'Eset',
    'Notes' => 'Megjegyzés',
    'Calls' => 'Hívás',
    'Emails' => 'Email',
    'Meetings' => 'Találkozó',
    'Tasks' => 'Feladat',
    'Calendar' => 'Naptár',
    'Leads' => 'Megkeresések',
    'Activities' => 'Tevékenység',
    'Bugs' => 'Hiba',
    'KBDocuments' => 'Tudásbázis',
    'Feeds' => 'RSS',
    'iFrames'=>'Weboldalaim',
    'TimePeriods'=>'Időszak',
    'Project'=>'Projekt',
    'ProjectTask'=>'Projektfeladat',
    'Prospects' => 'Ügyféljelölt',
    'Campaigns'=>'Kampány',
    'Documents'=>'Dokumentum',
    'SugarFollowing'=>'SuiteCRM Following',
    'Sync'=>'Szinkronizálás',
    'Users' => 'Felhasználó',
  'SugarFavorites'=>'SuiteCRM Favorites'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Igen',
    '2'=>'Nem',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Elemző',
    'Competitor' => 'Versenytárs',
    'Customer' => 'Ügyfél',
    'Integrator' => 'Integrátor',
    'Investor' => 'Befektető',
    'Partner' => 'Partner',
    'Press' => 'Sajtó',
    'Prospect' => 'Kilátás',
    'Reseller' => 'Viszonteladó',
    'Other' => 'Egyéb',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Ruházat/konfekcióipar',
    'Banking' => 'Bank',
    'Biotechnology' => 'Biotechnológia',
    'Chemicals' => 'Vegyipar',
    'Communications' => 'Kommunikáció',
    'Construction' => 'Építőipar',
    'Consulting' => 'Tanácsadás',
    'Education' => 'Oktatás',
    'Electronics' => 'Elektronika',
    'Energy' => 'Energia szektor',
    'Engineering' => 'Mérnöki tevékenység',
    'Entertainment' => 'Szórakoztatóipar',
    'Environmental' => 'Környezetvédelem',
    'Finance' => 'Pénzügyek',
    'Government' => 'Államigazgatás',
    'Healthcare' => 'Egészségügy',
    'Hospitality' => 'Vendéglátás',
    'Insurance' => 'Biztosítás',
    'Machinery' => 'Gépipar',
    'Manufacturing' => 'Gyártás',
    'Media' => 'Média',
    'Not For Profit' => 'Non-profit',
    'Recreation' => 'Szabadidő',
    'Retail' => 'Kiskereskedelem',
    'Shipping' => 'Szállítás',
    'Technology' => 'Technológia',
    'Telecommunications' => 'Telekommunikáció',
    'Transportation' => 'Közlekedés',
    'Utilities' => 'Közművek',
    'Other' => 'Egyéb',
  ),
  'lead_source_default_key' => 'Önálló megkeresés',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Hideg hívás',
    'Existing Customer' => 'Meglévő ügyfél',
    'Self Generated' => 'Önálló megkeresés',
    'Employee' => 'Alkalmazottól',
    'Partner' => 'Partner',
    'Public Relations' => 'PR',
    'Direct Mail' => 'Levélreklám',
    'Conference' => 'Konferencia',
    'Trade Show' => 'Kiállítás',
    'Web Site' => 'Weboldal',
    'Word of mouth' => 'Személyes ajánlás',
    'Email' => 'Email',
    'Campaign'=>'Kampány',
    'Other' => 'Egyéb',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Meglévő üzlet',
    'New Business' => 'Új üzlet',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Bevétel',
    'Investment'=>'Befektetés',
    'Expected_Revenue'=>'Várható bevétel',
    'Budget'=>'Költségvetés',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Elsődleges döntéshozó',
    'Business Decision Maker' => 'Üzleti döntéshozó',
    'Business Evaluator' => 'Üzleti elemző',
    'Technical Decision Maker' => 'Technikai döntéshozó',
    'Technical Evaluator' => 'Technikai elemző',
    'Executive Sponsor' => 'Vezető szponzor',
    'Influencer' => 'Befolyásoló',
    'Other' => 'Egyéb',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Elsődleges kapcsolattartó',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Elsődleges kapcsolattartó',
    'Alternate Contact' => 'Másodlagos kapcsolattartó',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => 'Net 15',
    'Net 30' => 'Net 30',
  ),
  'sales_stage_default_key' => 'Felmérés',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'Rugalmas keresés'
  ),
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Felmérés',
    'Qualification' => 'Minősítés',
    'Needs Analysis' => 'Elemzés',
    'Value Proposition' => 'Termékpozícionálás',
    'Id. Decision Makers' => 'Döntéshozók beazonosítása',
    'Perception Analysis' => 'Hatáselemzés',
    'Proposal/Price Quote' => 'Árajánlat',
    'Negotiation/Review' => 'Tárgyalás/felülvizsgálat',
    'Closed Won' => 'Lezárt, megnyert',
    'Closed Lost' => 'Lezárt, elvesztett',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Tervezet',
    'Negotiation' => 'Tárgyalás',
    'Delivered' => 'Teljesítve',
    'On Hold' => 'Várakozik',
    'Confirmed' => 'Megerősített',
    'Closed Accepted' => 'Lezárt, elfogadott',
    'Closed Lost' => 'Lezárt, elvesztett',
    'Closed Dead' => 'Lezárt, halott',
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
    'Call' => 'Hívás',
    'Meeting' => 'Találkozó',
    'Task' => 'Feladat',
    'Email' => 'Email',
    'Note' => 'Megjegyzés',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Úr',
        'Ms.' => 'Kisasszony',
        'Mrs.' => 'Asszony',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 90000,
  'reminder_time_options' => array( 60=> '1 perccel előtte',
                                  300=> '5 perccel előtte',
                                  600=> '10 perccel előtte',
                                  900=> '15 perccel előtte',
                                  1800=> '30 perccel előtte',
                                  3600=> '1 órával előtte',
                                  7200 => '2 órával előtte',
                                  10800 => '3 órával előtte',
                                  18000 => '5 órával előtte',
                                  86400 => '1 nappal előtte',
                                 ),

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => 'Magas',
    'Medium' => 'Közepes',
    'Low' => 'Alacsony',
  ),
  'task_status_default' => 'Nincs elkezdve',
  'task_status_dom' =>
  array (
    'Not Started' => 'Nincs elkezdve',
    'In Progress' => 'Folyamatban',
    'Completed' => 'Befejezve',
    'Pending Input' => 'Válaszra vár',
    'Deferred' => 'Elhalasztva',
  ),
  'meeting_status_default' => 'Tervezett',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Tervezett',
    'Held' => 'Megtartott',
    'Not Held' => 'Elmaradt',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Egyéb',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Tervezett',
  'call_status_dom' =>
  array (
    'Planned' => 'Tervezett',
    'Held' => 'Megtartott',
    'Not Held' => 'Elmaradt',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Bejövő',
    'Outbound' => 'Kimenő',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Új',
    'Assigned' => 'Hozzárendelt',
    'In Process' => 'Feldolgozás alatt',
    'Converted' => 'Konvertált',
    'Recycled' => 'Megújított',
    'Dead' => 'Halott',
  ),
   'gender_list' =>
  array (
    'male' => 'Férfi',
    'female' => 'Nő',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Új',
  'case_status_dom' =>
  array (
    'New' => 'Új',
    'Assigned' => 'Hozzárendelt',
    'Closed' => 'Lezárt',
    'Pending Input' => 'Válaszra vár',
    'Rejected' => 'Elutasítva',
    'Duplicate' => 'Másolat',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Magas',
    'P2' => 'Közepes',
    'P3' => 'Alacsony',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Normál felhasználó',
    'Administrator' => 'Rendszergazda',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Aktív',
    'Inactive' => 'Inaktív',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Aktív',
    'Terminated' => 'Elbocsátott',
    'Leave of Absence' => 'Rendkívüli szabadságon',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Magas',
        'Medium' => 'Közepes',
        'Low' => 'Alacsony',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array (
        'Not Started' => 'Nincs elkezdve',
        'In Progress' => 'Folyamatban',
        'Completed' => 'Befejezve',
        'Pending Input' => 'Válaszra vár',
        'Deferred' => 'Elhalasztva',
    ),
    'project_task_utilization_options' => array (
        '0' => 'semmi',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Tervezet',
        'In Review' => 'Felülvizsgálat alatt',
        'Underway' => 'Folyamatban',
        'On_Hold' => 'Várakozik',
        'Completed' => 'Befejezve',
    ),
    'project_status_default' => 'Vázlat',

    'project_duration_units_dom' => array (
        'Days' => 'Nap',
        'Hours' => 'Óra',
    ),

    'project_priority_options' => array (
        'High' => 'Magas',
        'Medium' => 'Közepes',
        'Low' => 'Alacsony',
    ),
    'project_priority_default' => 'Medium',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Ügyfelek',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Ügyfél',
    'Opportunities' => 'Lehetőség',
    'Cases' => 'Eset',
    'Leads' => 'Érdeklődő',
    'Contacts' => 'Kapcsolattartó', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Hiba',
    'Project' => 'Projekt',

    'Prospects' => 'Ügyféljelölt',
    'ProjectTask' => 'Projektfeladat',


    'Tasks' => 'Feladat',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Ügyfél',
    'Contacts' => 'Kapcsolattartó',
    'Opportunities' => 'Lehetőség',
    'Tasks' => 'Feladat',
    'Emails' => 'Email',

    'Bugs' => 'Hiba',
    'Project' => 'Projekt',
    'ProjectTask' => 'Projektfeladat',
    'Prospects' => 'Ügyféljelölt',
    'Cases' => 'Eset',
    'Leads' => 'Érdeklődő',

    'Meetings' => 'Találkozó',
    'Calls' => 'Hívás',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Ügyfél',
    'Contacts' => 'Kapcsolattartó',
    'Tasks' => 'Feladat',
    'Opportunities' => 'Lehetőség',



    'Bugs' => 'Hiba',
    'Cases' => 'Eset',
    'Leads' => 'Érdeklődő',

    'Project' => 'Projekt',
    'ProjectTask' => 'Projektfeladat',

    'Prospects' => 'Ügyféljelölt',

  ),

  'issue_priority_default_key' => 'Medium',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Sürgős',
    'High' => 'Magas',
    'Medium' => 'Közepes',
    'Low' => 'Alacsony',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Elfogadva',
    'Duplicate' => 'Másolat',
    'Closed' => 'Lezárva',
    'Out of Date' => 'Elévült',
    'Invalid' => 'Érvénytelen',
  ),

  'issue_status_default_key' => 'Új',
  'issue_status_dom' =>
  array (
    'New' => 'Új',
    'Assigned' => 'Hozzárendelt',
    'Closed' => 'Lezárva',
    'Pending' => 'Függőben',
    'Rejected' => 'Elutasítva',
  ),

  'bug_priority_default_key' => 'Medium',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Sürgős',
    'High' => 'Magas',
    'Medium' => 'Közepes',
    'Low' => 'Alacsony',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Elfogadva',
    'Duplicate' => 'Másolat',
    'Fixed' => 'Javítva',
    'Out of Date' => 'Elévült',
    'Invalid' => 'Érvénytelen',
    'Later' => 'Később',
  ),
  'bug_status_default_key' => 'Új',
  'bug_status_dom' =>
  array (
    'New' => 'Új',
    'Assigned' => 'Hozzárendelt',
    'Closed' => 'Lezárva',
    'Pending' => 'Függőben',
    'Rejected' => 'Elutasítva',
  ),
   'bug_type_default_key' => 'Hiba',
  'bug_type_dom' =>
  array (
    'Defect' => 'Hiba',
    'Feature' => 'Funkció',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Adminisztráció',
    'Product' => 'Termék',
    'User' => 'Felhasználó',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Belső',
    'Forum' => 'Fórum',
    'Web' => 'Internet',
    'InboundEmail' => 'Email'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Ügyfelek',
    'Activities' => 'Tevékenységek',
    'Bugs' => 'Hibák',
    'Calendar' => 'Naptár',
    'Calls' => 'Hívások',
    'Campaigns' => 'Kampányok',
    'Cases' => 'Esetek',
    'Contacts' => 'Kapcsolattartók',
    'Currencies' => 'Pénznemek',
  'Dashboard' => 'Vezérlőpult',
  'Documents' => 'Dokumentumok',
    'Emails' => 'Emailek',
    'Feeds' => 'Hírcsatornák',
    'Forecasts' => 'Előrejelzések',
    'Help' => 'Súgó',
    'Home' => 'Kezdőlap',
  'Leads' => 'Érdeklődő',
  'Meetings' => 'Találkozók',
    'Notes' => 'Megjegyzések',
    'Opportunities' => 'Lehetőségek',
    'Outlook Plugin' => 'Outlook bővítmény',
    'Projects' => 'Projektek',
    'Quotes' => 'Ajánlatok',
    'Releases' => 'Kiadások',
    'RSS' => 'RSS',
    'Studio' => 'Stúdió',
    'Upgrade' => 'Frissítés',
    'Users' => 'Felhasználók',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Tervezés',
        'Active' => 'Aktív',
        'Inactive' => 'Inaktív',
        'Complete' => 'Befejezett',
        'In Queue' => 'Besorolt',
        'Sending'=> 'Küldés',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telesales',
        'Mail' => 'Mail',
        'Email' => 'Email',
        'Print' => 'Nyomtatás',
        'Web' => 'Internet',
        'Radio' => 'Rádió',
        'Television' => 'Televízió',
        'NewsLetter' => 'Hírlevél',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Heti',
        'Monthly' => 'Havi',
        'Quarterly' => 'Negyedéves',
        'Annually' => 'Éves',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"január",
                '2'=>"február",
                '3'=>"március",
                '4'=>"április",
                '5'=>"május",
                '6'=>"június",
                '7'=>"július",
                '8'=>"augusztus",
                '9'=>"szeptember",
                '10'=>"október",
                '11'=>"november",
                '12'=>"december",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"jan",
                '2'=>"febr",
                '3'=>"márc",
                '4'=>"ápr",
                '5'=>"máj",
                '6'=>"jún",
                '7'=>"júl",
                '8'=>"aug",
                '9'=>"szept",
                '10'=>"okt",
                '11'=>"nov",
                '12'=>"dec",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"vasárnap",
                '2'=>"hétfő",
                '3'=>"kedd",
                '4'=>"szerda",
                '5'=>"csütörtök",
                '6'=>"péntek",
                '7'=>"szombat",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"v",
                '2'=>"h",
                '3'=>"k",
                '4'=>"sze",
                '5'=>"cs",
                '6'=>"p",
                '7'=>"szo",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"de",
                'pm'=>"du"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'DE',
                 'PM'=>'DU'
        ),

    'dom_report_types'=>array(
                'tabular'=>'Sorok és oszlopok',
                'summary'=>'Összegzés',
                'detailed_summary'=>'Részletes összegzés',
                'Matrix' => 'Mátrix',
        ),


    'dom_email_types'=> array(
        'out'       => 'Elküldött',
        'archived'  => 'Archivált',
        'draft'     => 'Piszkozat',
        'inbound'   => 'Bejövő',
        'campaign'  => 'Kampány'
    ),
    'dom_email_status' => array (
        'archived'  => 'Archivált',
        'closed'    => 'Lezárt',
        'draft'     => 'Piszkozat',
        'read'      => 'Olvasott',
        'replied'   => 'Megválaszolt',
        'sent'      => 'Elküldött',
        'send_error'=> 'Küldési hiba',
        'unread'    => 'Olvasatlan',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Archivált',
    ),

    'dom_email_server_type' => array(   ''          => '--Semmi--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--Semmi--',
                                     'createcase'  => 'Eset létrehozása',
                                     'bounce'   => 'Bounce Handling',
    ),
    'dom_email_distribution'=> array(''             => '--Semmi--',
                                     'direct'       => 'Közvetlen hozzárendelés',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_errors'      => array(1 => 'Csak egy felhasználót választhat közvetlen hozzárendeléskor.',
                                     2 => 'Csak ellenőrzött elemeket választhat közvetlen hozzárendeléskor.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Igen',
                                     'bool_false' => 'Nem',
    ),
    'dom_int_bool'          => array(1 => 'Igen',
                                     0 => 'Nem',
    ),
    'dom_switch_bool'       => array ('on' => 'Igen',
                                        'off' => 'Nem',
                                        '' => 'Nem', ),

    'dom_email_link_type'   => array(   'sugar'     => 'SuiteCRM Email Client',
                                        'mailto'    => 'Külső levelező kliens'),


    'dom_email_editor_option'=> array(  ''          => 'Alapértelmezett email formátum',
                                        'html'      => 'HTML Email',
                                        'plain'     => 'Sima szöveges email'),

    'schedulers_times_dom'  => array(   'not run'       => 'Futási idő letelt, nem futtatott',
                                        'ready'         => 'Kész',
                                        'in progress'   => 'Folyamatban',
                                        'failed'        => 'Sikertelen',
                                        'completed'     => 'Befejezve',
                                        'no curl'       => 'Nem fut: nincs elérhető cURL',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Aktív',
        'Inactive' => 'Inaktív',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Perc',
        'hour' => 'Óra',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Aktív',
    'Inactive' => 'Inaktív',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Közvetlen',
    'Rollup' => 'Összegző',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Tudásbázis',
    'Sales' => 'Értékesítés',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Marketing Collateral',
    'Product Brochures' => 'Termék prospektusok',
    'FAQ' => 'FAQ',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Aktív',
    'Draft' => 'Vázlat',
    'FAQ' => 'FAQ',
    'Expired' => 'Lejárt',
    'Under Review' => 'Felülvizsgálat alatt',
    'Pending' => 'Függőben',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Körlevél',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'Licencszerződés',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Elfogadás',
    'decline' => 'Elutasítás',
    'tentative' => 'Talán',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Elfogadva',
    'decline' => 'Elutasítva',
    'tentative' => 'Feltételes',
    'none'      => 'Semmi',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => 'Semmi',
    	'Daily'	=> 'Napi',
	'Weekly' => 'Heti',
	'Monthly' => 'Havi',
	'Yearly' => 'Éves',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'nap(ok)',
        'Weekly' => 'hét(ek)',
        'Monthly' => 'hónap(ok)',
        'Yearly' => 'év(ek)',
    ),

    'duration_dom' => array(
    	'' => 'Semmi',
    	'900' => '15 perc',
	'1800' => '30 perc',
	'2700' => '45 perc',
	'3600' => '1 óra',
	'5400' => '1,5 óra',
	'7200' => '2 óra',
	'10800' => '3 óra',
	'21600' => '6 óra',
	'86400' => '1 nap',
	'172800' => '2 nap',
	'259200' => '3 nap',
	'604800' => '1 hét',
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
    'default' => 'Alapértelmezett',
    'seed' => 'Seed',
    'exempt_domain' => 'Suppression List - By Domain',
    'exempt_address' => 'Suppression List - By Email Address',
    'exempt' => 'Suppression List - By Id',
    'test' => 'Teszt',
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
    'active'=>'Aktív',
    'inactive'=>'Inaktív'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Üzenet elküldve/megkísérelve',
    'send error'=>'Visszapattant üzenetek, egyéb',
    'invalid email'=>'Visszapattant üzenetek, érvénytelen email',
    'link'=>'Átkattintási hivatkozás',
    'viewed'=>'Megtekintett üzenet',
    'removed'=>'Leiratkozott',
    'lead'=>'Létrehozott érdeklődők',
    'contact'=>'Létrehozott kapcsolattartók',
    'blocked'=>'Suppressed by address or domain',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Kapcsolattartók',
    'Users'=>'Felhasználók',
    'Prospects'=>'Ügyféljelöltek',
    'Leads'=>'Érdeklődők',
    'Accounts'=>'Ügyfelek',
  ),
  'merge_operators_dom' => array (
    'like'=>'Tartalmazza',
    'exact'=>'Megegyezik',
    'start'=>'Kezdődik',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Igen',
    'false'=>'Nem',
    'required'=>'Kötelező',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Letiltva',
        '1'=>'Alacsony megerősítés',
        '2'=>'Közepes megerősítés',
        '3'=>'Magas megerősítés',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Letiltva',
        1=>'Engedélyezve',
  ),

  'navigation_paradigms' => array(
        'm'=>'Modulok',
        'gm'=>'Csoportosított modulok',
  ),


    'projects_priority_options' => array (
        'high'      => 'Magas',
        'medium'    => 'Közepes',
        'low'       => 'Alacsony',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Nincs elkezdve',
        'inprogress'    => 'Folyamatban',
        'completed'     => 'Befejezve',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Felirat kibontása',
        'collapselegend'    => 'Felirat bezárása',
        'clickfordrilldown' => 'Kattintson a kibontáshoz',
        'drilldownoptions'  => 'Részletezés beállítás',
        'detailview'        => 'További részletek...',
        'piechart'          => 'Kördiagram',
        'groupchart'        => 'Csoportosított diagram',
        'stackedchart'      => 'Halmozott diagram',
        'barchart'      => 'Oszlopdiagram',
        'horizontalbarchart'   => 'Sávdiagram',
        'linechart'         => 'Vonaldiagram',
        'noData'            => 'Nem áll rendelkezésre adat',
        'print'       => 'Nyomtatás',
        'pieWedgeName'      => 'szakaszok',
    ),
    'release_status_dom' =>
    array (
        'Active' => 'Aktív',
        'Inactive' => 'Inaktív',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Aposztróf (\')',
        '"' => 'Idézőjel (")',
        '' => 'Semmi',
        'other' => 'Egyéb:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Egyéb:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Új ablak',
        '_self' => 'Ugyanabban az ablakban',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => 'Nincs automatikus frissítés',
        '30'  => '30 másodpercenként',
        '60'  => '1 percenként',
        '180'   => '3 percenként',
        '300'   => '5 percenként',
        '600'   => '10 percenként',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Soha',
        '30'  => '30 másodpercenként',
        '60'  => '1 percenként',
        '180'   => '3 percenként',
        '300'   => '5 percenként',
        '600'   => '10 percenként',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'Ekkor',
    'not_equal' => 'Nem ekkor',
    'greater_than' => 'Után',
    'less_than' => 'Előtt',
    'last_7_days' => 'Utolsó 7 nap',
    'next_7_days' => 'Következő 7 nap',
    'last_30_days' => 'Elmúlt 30 nap',
    'next_30_days' => 'Következő 30 nap',
    'last_month' => 'Előző hónap',
    'this_month' => 'Aktuális hónap',
    'next_month' => 'Következő hónap',
    'last_year' => 'Előző év',
    'this_year' => 'Aktuális év',
    'next_year' => 'Következő év',
    'between' => 'Között',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'Egyenlő',
    'not_equal' => 'Nem egyenlő',
    'greater_than' => 'Nagyobb mint',
    'greater_than_equals' => 'Nagyobb vagy egyenlő',
    'less_than' => 'Kisebb mint',
    'less_than_equals' => 'Kisebb vagy egyenlő',
    'between' => 'Között',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Másolás',
        'move' => 'Áthelyezés',
        'donothing' => 'Nem csinál semmit',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Következő',
  'LBL_TOUR_SKIP' => 'Átugrás',
  'LBL_TOUR_BACK' => 'Vissza',
  'LBL_TOUR_CLOSE' => 'Bezárás',
  'LBL_TOUR_TAKE_TOUR' => 'Bemutató megtekintése',
  'LBL_MY_AREA_LINKS' => 'Saját terület linkek: ' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Üdvözöljük' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Összetett keresés' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'További részletek' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Beágyazás szerkesztése' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Megtekintés' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Keresés' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Eltávolítás' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Hozzáadás' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Oszlop' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 oszlop' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 oszlop' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Összetett keresés' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Hozzáadás' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Elrejtés/megjelenítés' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Törlés' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Hozzáadás' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Alaphelyzet' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Eltávolítás' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Hozzáadás' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Céglogó' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Naptár' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Speciális',
    'LBL_BASIC' => 'Alap',
    'LBL_MODULE_FILTER' => 'Filter By',
    'LBL_CONNECTORS_POPUPS'=>'Connectors Popups',
    'LBL_CLOSEINLINE'=>'Bezárás',
    'LBL_EDITINLINE'=>'Szerkesztés',
    'LBL_VIEWINLINE'=>'Megtekintés',
    'LBL_INFOINLINE'=>'Info',
    'LBL_POWERED_BY_SUGARCRM' => 'Működtető motor: SugarCRM',
    'LBL_PRINT' => 'Nyomtatás',
    'LBL_HELP' => 'Súgó',
    'LBL_ID_FF_SELECT' => 'Kiválasztás',
    'DEFAULT'                              => 'Alap',
    'LBL_SORT'                              => 'Rendezés',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Szerver hozzáadása...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'SMTP engedélyezése SSL vagy TLS kapcsolaton keresztül?',
    'LBL_NO_ACTION'                         => 'Nincs művelet ezen a néven.',
    'LBL_NO_DATA'                           => 'Nincs adat',
    'LBL_ROUTING_ADD_RULE'                  => 'Szabály hozzáadása',
    'LBL_ROUTING_ALL'                       => 'Legalább',
    'LBL_ROUTING_ANY'                       => 'Bármely',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Mégsem',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Szabály mentése',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Email másolása',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Delete SuiteCRM Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Fájl törlése',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Email törlése',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Email továbbítása',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Email megjelölése',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Olvasottnak jelöl',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Olvasatlannak jelöl',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Email áthelyezése',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Hajtsa végre a következő műveleteket',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Válasz emailre',

    'LBL_ROUTING_CHECK_RULE'                => 'Hiba történt:\n',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Kérjük, ellenőrizzen minden megjelölt mezőt.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Biztosan törölni szeretné ezt a szabályt?\nNem lehet visszavonni.',

    'LBL_ROUTING_FLAGGED'                   => 'megjelölve',
    'LBL_ROUTING_FORM_DESC'                 => 'Mentett szabályok azonnal aktívak.',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Szabályok',
    'LBL_ROUTING_MATCH'                     => 'Ha',
    'LBL_ROUTING_MATCH_2'                   => 'a következő feltételek teljesülnek:',
    'LBL_NOTIFICATIONS'                     => 'Értesítések',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Tartalom',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'Feladó',
    'LBL_ROUTING_MATCH_NAME'                => 'Tárgy',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Magas prioritású',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normál prioritású',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Alacsony prioritású',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'Címzett',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Tartalmazza',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Nem tartalmazza',

    'LBL_ROUTING_NAME'                      => 'Szabály neve',
    'LBL_ROUTING_NEW_NAME'                  => 'Új szabály',
    'LBL_ROUTING_ONE_MOMENT'                => 'Egy pillanat...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Eredeti üzenet következik.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Szabály mentése',
    'LBL_ROUTING_SUB_DESC'                  => 'Megjelölt szabályok aktívak. Kattintson a nevére a módosításhoz.',
    'LBL_ROUTING_TO'                        => 'to',
    'LBL_ROUTING_TO_ADDRESS'                => 'címre',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'sablonnal',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'This record currently contains values in the Office Phone and Address fields. To overwrite these values with the following Office Phone and Address of the Account that you selected, click "OK". To keep the current values, click "Cancel".',
  'LBL_DROP_HERE' => '[Húzza ide]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Szerkesztés',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Alapértelmezett Gmail&#153; beállítások kitöltése',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Név',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Kimenő levelező-szerver tulajdonságok',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Levéltovábbító ügynök',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'SMTP hitelesítés használata?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP jelszó',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port:',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP szerver',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'SSL használata kapcsolódáskor',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP felhasználónév',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Alapértelmezett',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Figyelmeztetés: a kimenő email fióknál hiányzó felhasználónév és jelszó.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'SMTP felhasználónév szükséges',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'SMTP jelszó szükséges',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Levelező fiók kezelés',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'A POP3 levelező-szerver protokoll a következő kiadásban nem lesz támogatott. Csak az IMAP protokoll.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'Levelező fiók beállítása az email fiókjába érkező levelek megtekintéséhez.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'SMTP levelező-szerver információk beállítása a levelező fiókok kimenő leveleinek használatához.',
    'LBL_EMAIL_ADD'                         => 'Cím hozzáadása',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Kész',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Alaphelyzet',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'To:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Új lista',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Email cím',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Jelenleg csak a kapcsolattartó módosítása támogatott.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Szűrő',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Utónév/fióknév',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Vezetéknév',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Kapcsolattartóim',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Levelezőlistáim',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Név',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Nincsenek címek',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Mentés és címjegyzékhez adás',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Keresés',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Email címzettek kiválasztása',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Címjegyzék',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Jelentések',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Figyelmeztetés! A törölni kívánt kimenő fiók hozzá van rendelve egy meglévő bejövő fiókhoz. Biztosan folytatni kívánja?',
    'LBL_EMAIL_ADDRESSES'                   => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Email cím',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Email címek',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Import to SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Hozzárendelés',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Csatolás',
    'LBL_EMAIL_ATTACHMENT'                  => 'Csatolás',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Helyi rendszerből',
    'LBL_EMAIL_ATTACHMENTS2'                => 'From SuiteCRM Documents',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Sablon mellékletek',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Fájl',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Dokumentum',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Beágyazott',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Mégsem',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Karakterkészlet',
    'LBL_EMAIL_CHECK'                       => 'Levelek ellenőrzése',
    'LBL_EMAIL_CHECKING_NEW'                => 'Új emailek ellenőrzése',
    'LBL_EMAIL_CHECKING_DESC'               => 'Egy pillanat...<br><br>Ha ez az első ellenőrzése a levelező fióknak, akkor eltarthat egy kis ideig.',
    'LBL_EMAIL_CLOSE'                       => 'Bezárás',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Új emailek ellenőrzése.<br><br>Nagy levelező fiókok esetében ez hosszabb ideig is eltarthat.',
    'LBL_EMAIL_COMMON'                      => 'Általános',

    'LBL_EMAIL_COMPOSE'                     => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Kérjük, írja be a címzett(ek)et.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Társítása',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Az üzenetnek nincs szövege.  Biztosan elküldi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Az üzenetnek nincs tárgya. Biztosan elküldi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(nincs tárgy)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Olvasás és levélírás',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Küldés levelező fiókból',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Beállítások',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Kérjük, érvényes email címet adjon meg a címzett, másolat és titkos másolat mezőknél',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Email elvetése?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Eltávolítja ezeket a bejegyzéseket a címjegyzékéből?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Biztosan törli ezt az aláírást?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Létrehozás mentéskor--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Többszörös',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Üres',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Küldés dátuma',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Érkezés dátuma',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'Felhasználóhoz rendelt',
    'LBL_EMAIL_DATE_TODAY'                  => 'Ma',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Tegnap',
    'LBL_EMAIL_DD_TEXT'                     => 'kiválasztott email(ek).',
    'LBL_EMAIL_DEFAULTS'                    => 'Alapértelmezett',
    'LBL_EMAIL_DELETE'                      => 'Törlés',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Törli a kijelölt üzeneteket?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Email sikeresen törölve.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Üzenet törlése',
    'LBL_EMAIL_DETAILS'                     => 'Részletek',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Email(ek) {0} - {1} / {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Email cím(ek) {0} - {1} / {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Kapcsolattartó szerkesztése',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Csak az elsődleges cím használható a kapcsolattartókkal végezhető műveletekhez.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Levelezési lista szerkesztése',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Lomtár kiürítése',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Kimenő szerver törlése',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Gyorsítótár-fájlok törlése',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Nincsenek megjeleníthető emailek.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Nincsenek megjeleníthető email címek.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Mappa nem törölhető. A mappa vagy almappa emaileket vagy hozzárendelt levelező fiókot tartalmazhat.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Nem lehet meghatározni a kívánt mappát az összefüggésből.  Próbálja újra.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Kérjük, ellenőrizze a beállításokat.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Kérjük, győződjön meg róla, hogy megadta a vezetéknevet.',
    'LBL_EMAIL_ERROR_DESC'                  => 'A rendszer hibákat talált: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Ön nem férhet hozzá ehhez az oldalhoz. A hozzáféréshez lépjen kapcsolatba a rendszergazdával.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'SuiteCRM Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Kérjük, adjon meg néhány keresési feltételt.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Hiba történt',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Email lista az adott névvel már létezik',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Üzenet törölve a szerverről',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Az üzenet eltávolítva a szerverről vagy egy másik mappába áthelyezve',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Nem sikerült kapcsolódni a levelező-szerverhez. Lépjen kapcsolatba a rendszergazdával',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Emailek áthelyezése szerver és/vagy levelezési fiókok között pillanatnyilag nem támogatott.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Áthelyezési hiba',
    'LBL_EMAIL_ERROR_NAME'                  => 'A név szükséges.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Feladó címe szükséges.  Adjon meg egy érvényes email címet.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Kérjük, adja meg a fájlt.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP mappa átnevezése pillanatnyilag nem támogatott.',
    'LBL_EMAIL_ERROR_SERVER'                => 'A levelező-szerver címe szükséges.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'A levelező fiók esetleg nem lett mentve.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Hiba történt a levelező-szerverrel történő kommunikáció során.',
    'LBL_EMAIL_ERROR_USER'                  => 'Bejelentkezési név szükséges.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'Jelszó szükséges.',
    'LBL_EMAIL_ERROR_PORT'                  => 'A levelező-szerver port szükséges.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'A szerver protokoll szükséges.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Ellenőrizendő mappa szükséges.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Lomtár mappa szükséges.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Ez az információ nem áll rendelkezésre',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'Nincs kimenő levelező-szerver megadva.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Folders',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Áthelyezés',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Hozzáadás',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Új mappa hozzáadása',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Mappa átnevezése',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Mentés',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Kiválasztott mappa hozzáadása',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Ez a mappa nem módosítható',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Biztosan törölni szeretné ezt a mappát?\nEz folyamat nem visszafordítható.\nMappa törlése az összes almappát törli.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Új mappanév',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Kérjük, válasszon egy mappát a művelet végrehajtása előtt.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Mappakezelés',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Csoport használata',

    'LBL_EMAIL_FORWARD'                     => 'Továbbítás',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Letöltve [[count]] / [[total]] email',
    'LBL_EMAIL_FOUND'                       => 'Találat',
    'LBL_EMAIL_FROM'                        => 'Feladó',
    'LBL_EMAIL_GROUP'                       => 'csoport',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Csoport',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Kezdőlap',
    'LBL_EMAIL_HTML_RTF'                    => 'HTML küldés',
    'LBL_EMAIL_IE_DELETE'                   => 'Levelező fiók törlése',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Aláírás törlése',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Biztosan törölni szeretné ezt a levelező fiókot?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Törlés sikeres.',
    'LBL_EMAIL_IE_SAVE'                     => 'Levelező fiók adatainak mentése',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Email importálása',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Import to SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Beállítások importálása',
    'LBL_EMAIL_INVALID'                     => 'Érvénytelen',
    'LBL_EMAIL_LOADING'                     => 'Betöltés...',
    'LBL_EMAIL_MARK'                        => 'Megjelölés',
    'LBL_EMAIL_MARK_FLAGGED'                => 'Megjelöltként',
    'LBL_EMAIL_MARK_READ'                   => 'Olvasottként',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'Jelöletlenként',
    'LBL_EMAIL_MARK_UNREAD'                 => 'Olvasatlanként',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Hozzárendel',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Mappa létrehozása',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Új levél',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Mappa törlése',
    'LBL_EMAIL_MENU_EDIT'                   => 'Szerkesztés',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Lomtár ürítése',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Szinkronizálás',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Gyorsítótár-fájlok törlése',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Eltávolítás',
    'LBL_EMAIL_MENU_RENAME'                 => 'Átnevezés',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Mappa átnevezése',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Mappa átnevezés',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Kérjük, a művelet végrehajtása előtt válasszon.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archive these email(s) to SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Email küldése a kiválasztott levelezési listákra',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Email küldése a kapcsolattartónak',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Kapcsolattartó eltávolítása',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Email(ek) törlése',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Kapcsolattartó szerkesztése',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Levelezési lista szerkesztése',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'A levelező fiók minden lomtár mappájának ürítése',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Email(ek) megjelölése',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Email(ek) megjelölése olvasottként',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Email(ek) megjelölésének törlése',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Email(ek) megjelölése olvasatlanként',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Levelezési listák eltávolítása',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Rename a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Válasz ezen email(ek)re',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Válasz ezen email(ek) összes címzettjének',

    'LBL_EMAIL_MESSAGES'                    => 'üzenetek',

    'LBL_EMAIL_ML_NAME'                     => 'Lista neve',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Kiválasztott lista címei',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Rendelkezésre álló lista címei',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl+kattintás</b> többszörös kiválasztás<br />(Mac felhasználóknak <b>CMD+kattintás</b>)',

    'LBL_EMAIL_NO'                          => 'Nem',
    'LBL_EMAIL_NOT_SENT'                    => 'A rendszer nem tudja feldolgozni a kérelmet. Kérjük, lépjen kapcsolatba a rendszergazdával.',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Egy pillanat...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Több üzenet megnyitása',
    'LBL_EMAIL_OPTIONS'                     => 'Beállítások',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Gyors üzenet',
    'LBL_EMAIL_OPT_OUT'                     => 'Leiratkozott',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Leiratkozott és érvénytelen',
    'LBL_EMAIL_PAGE_AFTER'                  => '{0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Oldal',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Feladat végrehajtása',
    'LBL_EMAIL_PRIMARY'                     => 'Elsődleges',
    'LBL_EMAIL_PRINT'                       => 'Nyomtatás',

    'LBL_EMAIL_QC_BUGS'                     => 'Hiba',
    'LBL_EMAIL_QC_CASES'                    => 'Eset',
    'LBL_EMAIL_QC_LEADS'                    => 'Érdeklődő',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Kapcsolattartó',
    'LBL_EMAIL_QC_TASKS'                    => 'Feladat',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Lehetőség',
    'LBL_EMAIL_QUICK_CREATE'                => 'Gyors létrehozás',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Mappák újraépítése',
    'LBL_EMAIL_RELATE_TO'                   => 'Kapcsolódik',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Kapcsolatok megtekintése',
    'LBL_EMAIL_RECORD'                => 'Email rekord',
    'LBL_EMAIL_REMOVE'                      => 'Eltávolítás',
    'LBL_EMAIL_REPLY'                       => 'Válasz',
    'LBL_EMAIL_REPLY_ALL'                   => 'Válasz mindenkinek',
    'LBL_EMAIL_REPLY_TO'                    => 'Válaszol',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Email lista beolvasása',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Üzenet beolvasása',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Email rekord beolvasása',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Kérjük, csak egy email rekordot válasszon',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Visszatérés az előző modulhoz?',
    'LBL_EMAIL_REVERT'                      => 'Visszatérés',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE'                 => 'Szabályok kezelése',

    'LBL_EMAIL_SAVE'                        => 'Mentés',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Mentés és válasz',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Piszkozat mentése',

    'LBL_EMAIL_SEARCHING'                   => 'Conducting Search',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Összetett keresés',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Dátumtól',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Dátumig',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Szövegtörzs',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Nincs a keresési feltételeknek megfelelő találat.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Keresési eredmények',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Egyszerű keresés',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Email fiók keresése',

    'LBL_EMAIL_SELECT'                      => 'Kiválasztás',

    'LBL_EMAIL_SEND'                        => 'Küldés',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Email küldése',

    'LBL_EMAIL_SETTINGS'                    => 'Beállítások',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 sor',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 oszlop',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Elrendezési stílus',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Levelező fiókok',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Űrlap törlése',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Email importálása megtekintés után',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Új üzenet ellenőrzése',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Betekintő ablaktábla használata',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Felugró ablak használata',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Emailek száma oldalanként',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Levelezési fiók szerkesztése',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Mappák',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Feladó címe',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email cím teszt értesítéshez:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'Címzett',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Feladó neve',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Válaszcím',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Teljes képernyős',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Összes email fiók szinkronizálása',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'A megadott kimenő email beállításokkal egy üzenet lett elküldve a megadott email címre. Kérjük, ellenőrizze, hogy az emailt megkapta, így igazolva a beállítások helyességét.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'A művelet végrehajtása szinkronizálja a levelező fiókokat és azok tartalmát.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Teljes szinkronizálás végrehajtása?\nNagy levelező fiókok esetén több percet is igénybe vehet.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Használja a Shift vagy a Ctrl gombot több mappa kiválasztásához.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Általános',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Rendelkezésre álló mappacsoportok',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Mappacsoport létrehozása',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Mappacsoport mentése',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Mappacsoport beolvasása',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Mappacsoport szerkesztése',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Levelező fiók neve',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Válassza ki a beérkező üzenetek mappához az oldalanként megjelenítendő elemek számát. A beállítás érvénybe lépéséhez frissítse újra az oldalt.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Levelező fiók beolvasása',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Szabályok',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Beállítások mentve.\n\nA beállítások érvénybe lépéséhez frissítse újra az oldalt.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Csak sima szöveges email küldése',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Aktív',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Emailek oldalanként',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Lapok elhelyezése alul',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Vizuális beállítások',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Tulajdonságok',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Speciális beállítások megjelenítése',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Rendelkezésre álló felhasználói mappák',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Hiba:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'A használt levelező fiókhoz kiválasztott kimenő levelező szerver érvénytelen. Ellenőrizze a beállításokat vagy válasszon egy másik levelező szervert a fiókhoz.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Az emailek küldéséhez nincs beállítva kimenő levelező szerver. Kérjük, állítson be egy kimenő levelező szervert vagy válasszon egy kimenő levelező szervert a fiókjához itt: Beállítások >> Levelező fiók.',
    'LBL_EMAIL_SHOW_READ'                   => 'Összes megjelenítése',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Csak olvasatlanok megjelenítése',
    'LBL_EMAIL_SIGNATURES'                  => 'Aláírások',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Aláírás létrehozása',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Aláírás neve',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Aláírás törzs',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Egyéb',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Távoli mappák ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ SuiteCRM Folders ]',
    'LBL_EMAIL_SUBJECT'                     => 'Tárgy',
    'LBL_EMAIL_SUCCESS'                     => 'Sikeres',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Email sablon törzs üres',
    'LBL_EMAIL_TEMPLATES'                   => 'Sablonok',
    'LBL_EMAIL_TEXT_FIRST'                  => 'Első oldal',
    'LBL_EMAIL_TEXT_PREV'                   => 'Előző oldal',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Következő oldal',
    'LBL_EMAIL_TEXT_LAST'                   => 'Utolsó oldal',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Frissítés',
    'LBL_EMAIL_TO'                          => 'Címzett',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Lista ki-be',
    'LBL_EMAIL_VIEW'                        => 'Nézet',
    'LBL_EMAIL_VIEWS'                       => 'Nézetek',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Fejlécek megjelenítése',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Nyomtatható változat',
    'LBL_EMAIL_VIEW_RAW'                    => 'Email nyers forrásának megjelenítése',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Ez a funkció nem támogatott POP3 használatakor.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Alapértelmezett hivatkozás szövege.',
    'LBL_EMAIL_YES'                         => 'Igen',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Teszt email küldése',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Teszt email elküldve',
    'LBL_EMAIL_MESSAGE_NO'                  => 'Üzenet szám',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Importálás befejezve',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Nem sikerült importálni, mert az üzenetet vagy már importálták vagy törlésre került  a szerveren',

    'LBL_LINK_NONE'=> 'Semmi',
    'LBL_LINK_ALL'=> 'Összes',
    'LBL_LINK_RECORDS'=> 'Rekordok',
    'LBL_LINK_SELECT'=> 'Kiválasztás',
    'LBL_LINK_ACTIONS'=> 'Műveletek',
    'LBL_LINK_MORE'=> 'Több',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Megerősítés",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "Be szeretné zárni ezt a modult: #module#?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Ne jelenjen meg ez az üzenet a jövőben: &nbsp;",
    'LBL_INVALID_FILE_EXTENSION' => 'Érvénytelen fájlkiterjesztés',


    'ERR_AJAX_LOAD'     => 'Hiba történt:',
    'ERR_AJAX_LOAD_FAILURE'     => 'Hiba történt a kérelem feldolgozása közben. Kérjük, próbálja újra később.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ha a hiba továbbra is fennáll, kérje meg rendszergazdáját, hogy tiltsa le az Ajax-ot ehhez a modulhoz',
    'ERR_CREATING_FIELDS' => 'Hiba a mezők kitöltésekor: ',
    'ERR_CREATING_TABLE' => 'Hiba a tábla létrehozásakor: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "A tizedesjel nem lehet ugyanaz a karakter, mint az ezres elválasztó.\n\n Kérjük, változtassa meg az értékeket.",
    'ERR_DELETE_RECORD' => 'Egy rekord számot meg kell adni a kapcsolattartó törléséhez.',
    'ERR_EXPORT_DISABLED' => 'Exportálás letiltva.',
    'ERR_EXPORT_TYPE' => 'Exportálási hiba ',
    'ERR_INVALID_AMOUNT' => 'Kérjük, érvényes összeget adjon meg.',
    'ERR_INVALID_DATE_FORMAT' => 'A dátum formátuma legyen: ',
    'ERR_INVALID_DATE' => 'Kérjük, érvényes dátumot adjon meg.',
    'ERR_INVALID_DAY' => 'Kérjük, érvényes napot adjon meg.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nem érvényes email cím.',
    'ERR_INVALID_FILE_REFERENCE' => 'Érvénytelen fájlhivatkozás',
    'ERR_INVALID_HOUR' => 'Kérjük, érvényes órát adjon meg.',
    'ERR_INVALID_MONTH' => 'Kérjük, érvényes hónapot adjon meg.',
    'ERR_INVALID_TIME' => 'Kérjük, érvényes időpontot adjon meg.',
    'ERR_INVALID_YEAR' => 'Kérjük, érvényes négyjegyű évszámot adjon meg.',
    'ERR_NEED_ACTIVE_SESSION' => 'Aktív munkamenet szükséges a tartalom exportálásához.',
    'ERR_NO_HEADER_ID' => 'Ez a funkció nem érhető el ennél a témánál.',
    'ERR_NOT_ADMIN' => "Jogosulatlan hozzáférés az adminisztrációhoz.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Hiányzó kötelező mező:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Érvénytelen kötelező mező:',
    'ERR_INVALID_VALUE' => 'Érvénytelen érték:',
    'ERR_NO_SUCH_FILE' =>'A fájl nem létezik a rendszerben',
    'ERR_NO_SINGLE_QUOTE' => 'Nem használható a szimpla idézőjel ',
    'ERR_NOTHING_SELECTED' =>'Kérjük, a művelet folytatása előtt válasszon.',
    'ERR_OPPORTUNITY_NAME_DUPE' => '%s névvel már létezik egy lehetőség. Kérjük, adjon meg egy másik nevet.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Egy lehetőség neve nem lett megadva. Kérjük, adjon meg egy lehetőség nevet.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Felhasználó nem jelenthet önmagának.',
    'ERR_SINGLE_QUOTE'  => 'A szimpla idézőjel nem támogatott ennél a mezőnél. Kérjük, változtassa meg az értéket.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nem egyezik a mezővel: ',
    'ERR_SQS_NO_MATCH' =>'Nincs egyezés',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Adja meg a "kulcs" indexet a displayParams attribútumban a Meta-adatok meghatározásánál',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Hiba történt a külső fiókba mentéskor.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Hiba történt a feltöltéskor.  Kérjük, győződjön meg róla, hogy a feltölteni kívánt fájl nem üres.',
    'ERR_NO_DB' => 'Nem sikerült csatlakozni az adatbázishoz. Kérjük, a részletekért tekintse át a suitecrm.log fájlt.',
    'ERR_DB_FAIL' => 'Database failure. Please refer to suitecrm.log for details.',
    'ERR_EXTERNAL_API_403' => 'Engedély megtagadva. Fájltípus nem támogatott.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth hozzáférési token hiányzik.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} fájlok csak SuiteCRM {1} adatbázissal használhatóak.',


    'LBL_ACCOUNT'=>'Fiók',
    'LBL_OLD_ACCOUNT_LINK'=>'Régi fiók',
    'LBL_ACCOUNTS'=>'Fiókok',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Tevékenységek',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Összegzés megtekintése',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Összegzés megtekintése',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Hozzáadás',
    'LBL_ADD_BUTTON' => 'Hozzáadás',
    'LBL_ADD_DOCUMENT' => 'Dokumentum hozzáadása',
    'LBL_REPLACE_BUTTON' => 'Csere',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Hozzáadás ügyféljelölt listához',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Hozzáadás ügyféljelölt listához',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kattintson a bezáráshoz',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Bezárás',
    'LBL_ADDITIONAL_DETAILS' => 'További részletek',
    'LBL_ADMIN' => 'Rendszergazda',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiválás',
    'LBL_ASSIGNED_TO_USER'=>'Felhasználóhoz rendelt',
    'LBL_ASSIGNED_TO' => 'Felelős:',
    'LBL_BACK' => 'Vissza',
    'LBL_BILL_TO_ACCOUNT'=>'Számlázás ügyfélnek',
    'LBL_BILL_TO_CONTACT'=>'Számlázás kapcsolattartónak',
    'LBL_BILLING_ADDRESS'=>'Számlázási cím',
    'LBL_QUICK_CREATE_TITLE' => 'Gyors létrehozás',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS'=>'Hibák',
    'LBL_BY' => 'által',
    'LBL_CALLS'=>'Hívások',
    'LBL_CALL'=>'Hívás',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Besorolt kampány emailek küldése',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Küldés',
    'LBL_CASE'=>'Eset',
    'LBL_CASES'=>'Esetek',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Jelszó módosítása',
    'LBL_CHANGE_BUTTON_LABEL' => 'Módosítás',
    'LBL_CHANGE_BUTTON_TITLE' => 'Módosítás',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Összes kijelölése',
    'LBL_CITY' => 'Város',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Törlés',
    'LBL_CLEAR_BUTTON_TITLE' => 'Törlés',
    'LBL_CLEARALL' => 'Összes törlése',
    'LBL_CLOSE_BUTTON_TITLE' =>'Bezárás',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Ablak bezárása',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Összes bezárása',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Összes bezárása',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Bezárás és új létrehozása',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Bezárás és új létrehozása',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Nyitott tételek:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Email írása',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Email írása',
    'LBL_SEARCH_DROPDOWN_YES'=>'Igen',
    'LBL_SEARCH_DROPDOWN_NO'=>'Nem',
    'LBL_CONTACT_LIST' => 'Kapcsolattartó-lista',
    'LBL_CONTACT'=>'Kapcsolattartó',
    'LBL_CONTACTS'=>'Kapcsolattartók',
    'LBL_CONTRACTS'=>'Szerződések',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_CREATE_BUTTON_LABEL' => 'Létrehozás',
    'LBL_CREATED_BY_USER'=>'Felhasználó által létrehozva',
    'LBL_CREATED_USER'=>'Felhasználó által létrehozva',
    'LBL_CREATED_ID' => 'Létrehozó azonosító',
    'LBL_CREATED' => 'Létrehozta:',
    'LBL_CURRENT_USER_FILTER' => 'Saját tételeim:',
    'LBL_CURRENCY'=>'Pénznem:',
    'LBL_DOCUMENTS'=>'Dokumentumok',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma:',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma:',
    'LBL_EDIT_BUTTON' => 'Szerkesztés',
    'LBL_DUPLICATE_BUTTON' => 'Megkettőzés',
    'LBL_DELETE_BUTTON' => 'Törlés',
    'LBL_DELETE' => 'Törlés',
    'LBL_DELETED'=>'Törölve',
    'LBL_DIRECT_REPORTS'=>'Direct Reports',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Kész',
    'LBL_DONE_BUTTON_TITLE' => 'Kész',
    'LBL_DST_NEEDS_FIXIN' => 'The application requires a Daylight Saving Time fix to be applied.  Please go to the <a href="index.php?module=Administration&action=DstFix">Repair</a> link in the Admin console and apply the Daylight Saving Time fix.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Szerkesztés újként',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Szerkesztés újként',
    'LBL_FAVORITES' => 'Kedvencek',
    'LBL_FILTER_MENU_BY' => 'Menü szűrése',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Kérjük, válasszon egy vCard fájlt',
    'LBL_EMPTY_REQUIRED_VCARD' => 'A vCard nem rendelkezik minden, az ehhez a modulhoz szükséges mezővel. Kérjük, a részletekért tekintse át a suitecrm.log fájlt.',
    'LBL_VCARD_ERROR_FILESIZE' => 'A feltöltött fájl mérete meghaladja a HTML űrlapban megadott 30000 byte méretkorlátot.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Hiba történt a vCard fájl feltöltése közben. Kérjük, a részletekért tekintse át a suitecrm.log fájlt.',
    'LBL_IMPORT_VCARD' => 'vCard importálása:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'vCard importálása',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'vCard importálása',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Megtekintés',
    'LBL_VIEW_BUTTON_TITLE' => 'Megtekintés',
    'LBL_VIEW_BUTTON' => 'Megtekintés',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email PDF-ként',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email PDF-ként',
    'LBL_EMAILS'=>'Emailek',
    'LBL_EMPLOYEES' => 'Munkatársak',
    'LBL_ENTER_DATE' => 'Adja meg az időpontot',
    'LBL_EXPORT_ALL' => 'Összes exportálása',
    'LBL_EXPORT' => 'Export',
    'LBL_FAVORITES_FILTER' => 'Kedvenceim:',
    'LBL_GO_BUTTON_LABEL' => 'Indítás',
    'LBL_GS_HELP' => 'A keresésben a modulban használt mezők felül jelennek meg. A kijelölt szöveg megfelel a keresési feltételeknek.',
    'LBL_HIDE'=>'Elrejtés',
    'LBL_ID'=>'Azonosító',
    'LBL_IMPORT' => 'Importálás',
    'LBL_IMPORT_STARTED' => 'Importálás elkezdve: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Adjon meg egy egyéni elválasztót.',
    'LBL_LAST_VIEWED' => 'Utoljára megtekintett',
    'LBL_SHOW_LESS' => 'Kevesebb megjelenítése',
    'LBL_SHOW_MORE' => 'Több megjelenítése',
    'LBL_TODAYS_ACTIVITIES' => 'Mai tevékenységek',
    'LBL_LEADS'=>'Érdeklődők',
    'LBL_LESS' => 'kevesebb',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LBL_CAMPAIGNLOG' => 'Kampány napló',
    'LBL_CAMPAIGN_CONTACT'=>'Kampányok',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'Oldaltérkép',
    'LBL_THEME'=>'Téma:',
    'LBL_THEME_PICKER'=>'Oldalstílus',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Figyelmeztetés: az Internet Explorer 6 nem támogatja a kiválasztott témát. Kattintson az OK gombra, ha mégis szeretné kiválasztani, vagy kattintson a Mégsem gombra másik téma választáshoz.',
    'LBL_FOUND_IN_RELEASE'=>'Találatok ebben a kiadásban',
    'LBL_FIXED_IN_RELEASE'=>'Javítások ebben a kiadásban',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_ASSIGNED_USER' => 'Felhasználó',
    'LBL_LIST_CONTACT_NAME' => 'Kapcsolattartó neve',
    'LBL_LIST_CONTACT_ROLE' => 'Contact Role',
    'LBL_LIST_DATE_ENTERED'=>'Létrehozás dátuma',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_OF' => 'of',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Kapcsolódik',
    'LBL_LIST_USER_NAME' => 'Felhasználói név',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Biztosan frissíteni szeretné a teljes listát?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Kérjük, válasszon legalább 1 rekordot a folytatáshoz.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Kérjük, válasszon legalább 2 rekordot a folytatáshoz.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Kérjük, válasszon kevesebb, mint 10 rekordot a folytatáshoz.',
    'LBL_LISTVIEW_ALL' => 'Összes',
    'LBL_LISTVIEW_NONE' => 'Kijelölés megszüntetése',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Oldal kijelölése',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Teljes lista',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Kiválasztott rekordok',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Kiválasztva: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Béla',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Kis',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Kérjük, jelentkezzen be, hogy hozzáférhessen ehhez a területhez.',
    'LBL_LOGOUT' => 'Kijelentkezés',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Körlevél',
    'LBL_MASS_UPDATE' => 'Tömeges frissítés',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nem áll rendelkezésre mező a tömeges frissítéshez',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Leiratkozott elsődleges email',
    'LBL_MEETINGS'=>'Találkozók',
    'LBL_MEETING'=>'Találkozó',
    'LBL_MEETING_GO_BACK'=>'Visszatérés találkozóhoz',
    'LBL_MEMBERS'=>'Tagok',
    'LBL_MEMBER_OF'=>'Tagság',
    'LBL_MODIFIED_BY_USER'=>'Felhasználó által módosítva',
    'LBL_MODIFIED_USER'=>'Felhasználó által módosítva',
    'LBL_MODIFIED' => 'Módosította:',
    'LBL_MODIFIED_NAME'=>'Módosítás név szerint',
    'LBL_MODIFIED_ID'=>'Módosítás azonosító szerint',
    'LBL_MORE' => 'Több',
    'LBL_MY_ACCOUNT' => 'Beállításaim',
    'LBL_NAME' => 'Név',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Létrehozás',
    'LBL_NEW_BUTTON_TITLE' => 'Létrehozás',
    'LBL_NEXT_BUTTON_LABEL' => 'Következő',
    'LBL_NONE' => '--Semmi--',
    'LBL_NOTES'=>'Megjegyzések',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Összes megnyitása',
    'LBL_OPENALL_BUTTON_TITLE' => 'Összes megnyitása',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Megnyitás ide: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Megnyitás ide:',
    'LBL_OPPORTUNITIES'=>'Lehetőségek',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség neve',
    'LBL_OPPORTUNITY'=>'Lehetőség',
    'LBL_OR' => 'VAGY',
    'LBL_LOWER_OR' => 'vagy',
    'LBL_PANEL_OVERVIEW' => 'Áttekintés',
    'LBL_PANEL_ASSIGNMENT' => 'Egyéb',
    'LBL_PANEL_ADVANCED' => 'További információk',
    'LBL_PARENT_TYPE' => 'Szülő típus',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Tartomány',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím, város:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges cím, ország:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím, irányítószám:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím, állam:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Elsődleges cím, utca 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Elsődleges cím, utca 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím, utca:',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',

	'LBL_BILLING_STREET'=> 'Utca:',
	'LBL_SHIPPING_STREET'=> 'Utca:',

    'LBL_PROSPECTS'=>'Kilátások',
    'LBL_PRODUCT_BUNDLES'=>'Termékcsoportok',
    'LBL_PRODUCTS'=>'Termékek',
    'LBL_PROJECT_TASKS'=>'Projektfeladatok',
    'LBL_PROJECTS'=>'Projektek',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Lehetőség készítése ajánlatból',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Lehetőség készítése ajánlatból',
    'LBL_QUOTES_SHIP_TO'=>'Ajánlatok küldése:',
    'LBL_QUOTES'=>'Ajánlatok',

    'LBL_RELATED' => 'Kapcsolódó',
    'LBL_RELATED_INFORMATION' => 'Kapcsolódó információk',
    'LBL_RELATED_RECORDS' => 'Kapcsolódó rekordok',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_REPORTS_TO' => 'Jelentést tesz',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Megjelölt mezők kötelezőek',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Kész',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Mentés másként',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Mentés másként',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Teljes képernyő',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Teljes képernyő',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Mentés és új létrehozása',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Mentés és új létrehozása',
    'LBL_SAVE_OBJECT' => '{0} mentése',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Keresés',
    'LBL_SEARCH_BUTTON_TITLE' => 'Keresés',
    'LBL_SEARCH' => 'Keresés',
    'LBL_SEARCH_TIPS' => "Nyomja meg a keresés gombot vagy nyomjon entert az egyezés kereséséhez.",
    'LBL_SEARCH_TIPS_2' => "Nyomja meg a keresés gombot vagy nyomjon entert a kereséséhez:",
    'LBL_SEARCH_MORE' => 'több',
    'LBL_SEE_ALL' => 'Összes',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Érvénytelen fájlformátum, csak képfájl tölthető fel.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Kiválasztás',
    'LBL_SELECT_BUTTON_TITLE' => 'Kiválasztás',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Csapat(ok) hozzáadása',
    'LBL_SELECT_TEAMS_TITLE' => 'Csapat(ok) hozzáadása',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Dokumentumok böngészése',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Dokumentumok böngészése',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Kapcsolattartó kiválasztása',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Kapcsolattartó kiválasztása',
    'LBL_GRID_SELECTED_FILE' => 'kiválasztott fájl',
    'LBL_GRID_SELECTED_FILES' => 'kiválasztott fájlok',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Kiválasztás jelentésből',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Jelentés kiválasztása',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Felhasználó kiválasztása',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Felhasználó kiválasztása',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Kiválasztás törlése',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Kiválasztás törlése',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Kiválasztás törlése',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Kiválasztás törlése',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Fájl kiválasztása',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Fájl kiválasztása',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Fájl törlése',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Fájl törlése',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Felhasználó kiválasztása',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Felhasználó kiválasztása',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Felhasználó törlése',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Felhasználó törlése',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Ügyfél kiválasztása',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Ügyfél kiválasztása',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Ügyfél törlése',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Ügyfél törlése',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Kampány kiválasztása',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Kampány kiválasztása',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Kampány törlése',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Kampány törlése',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Kapcsolattartó kiválasztása',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Kapcsolattartó kiválasztása',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Kapcsolattartó törlése',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Kapcsolattartó törlése',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Csapat kiválasztása',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Csapat kiválasztása',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Csapat törlése',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Csapat törlése',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Az oldal (lekérdezések, fájlok) létrehozásához használt erőforrások',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'másodperc.',
    'LBL_SERVER_RESPONSE_TIME' => 'Szerver válaszidő:',
    'LBL_SERVER_MEMORY_BYTES' => 'byte',
    'LBL_SERVER_MEMORY_USAGE' => 'Szerver memóriahasználat: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Használat: - modul: {0} - művelet: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Szerver memóriahasználat csúcsértéke: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Szállítás ügyfélhez',
    'LBL_SHIP_TO_CONTACT'=>'Szállítás kapcsolattartónak',
    'LBL_SHIPPING_ADDRESS'=>'Szállítási cím',
    'LBL_SHORTCUTS' => 'Parancsikonok',
    'LBL_SHOW'=>'Megjelenítés',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Állam:',
    'LBL_STATUS_UPDATED'=>'Frissült az állapota erre az eseményre!',
    'LBL_STATUS'=>'Állapot:',
    'LBL_STREET'=>'Utca',
    'LBL_SUBJECT' => 'Tárgy',

    'LBL_INBOUNDEMAIL_ID' => 'Bejövő email azonosító',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2013 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',


    'LBL_SYNC' => 'Szinkronizálás',
    'LBL_TABGROUP_ALL' => 'Összes',
    'LBL_TABGROUP_ACTIVITIES' => 'Tevékenységek',
    'LBL_TABGROUP_COLLABORATION' => 'Együttműködés',
    'LBL_TABGROUP_HOME' => 'Vezérlőpult',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Weboldalaim',
    'LBL_TABGROUP_OTHER' => 'Egyéb',
    'LBL_TABGROUP_REPORTS' => 'Jelentések',
    'LBL_TABGROUP_SALES' => 'Értékesítés',
    'LBL_TABGROUP_SUPPORT' => 'Támogatás',
    'LBL_TABGROUP_TOOLS' => 'Eszközök',
    'LBL_TASKS'=>'Feladatok',
    'LBL_TEAMS_LINK'=>'Csapatok',
    'LBL_THEME_COLOR'=>'Szín',
    'LBL_THEME_FONT'=>'Betűtípus',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Email archiválása',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Email archíválása',
    'LBL_UNAUTH_ADMIN' => 'Jogosulatlan hozzáférés az adminisztrációhoz',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Helyreállítás',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Helyreállítás',
    'LBL_UNDELETE_BUTTON' => 'Helyreállítás',
    'LBL_UNDELETE' => 'Helyreállítás',
    'LBL_UNSYNC' => 'Unsync',
    'LBL_UPDATE' => 'Frissítés',
    'LBL_USER_LIST' => 'Felhasználói lista',
    'LBL_USERS_SYNC'=>'Felhasználók szinkronizálása',
    'LBL_USERS'=>'Felhasználók',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Meglévő email bejegyzés ellenőrzése...',
    'LBL_VERIFY_PORTAL_NAME'=>'Meglévő portálnév ellenőrzése...',
    'LBL_VIEW_IMAGE' => 'nézet',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Nyomtatás PDF-ként',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Nyomtatás PDF-ként',


    'LNK_ABOUT' => 'Névjegy',
    'LNK_ADVANCED_SEARCH' => 'Összetett keresés',
    'LNK_BASIC_SEARCH' => 'Egyszerű keresés',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Összes találat megtekintése',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Összes megjelenítése',
    'LNK_CLOSE' => 'bezár',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Aktuális keresés módosítása',
    'LNK_SAVED_VIEWS' => 'Elrendezési beállítások',
    'LNK_DELETE_ALL' => 'Törli mind',
    'LNK_DELETE' => 'törlés',
    'LNK_EDIT' => 'szerkesztés',
    'LNK_GET_LATEST'=>'Get latest',
    'LNK_GET_LATEST_TOOLTIP'=>'Felülírás a legutóbbi verzióval',
    'LNK_HELP' => 'Súgó',
    'LNK_CREATE' => 'Létrehozás',
    'LNK_LIST_END' => 'Vége',
    'LNK_LIST_NEXT' => 'Következő',
    'LNK_LIST_PREVIOUS' => 'Előző',
    'LNK_LIST_RETURN' => 'Vissza a listához',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED'=>'Aláír',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Felülírja az aláírt dokumentummal',
    'LNK_PRINT' => 'Nyomtatás',
    'LNK_BACKTOTOP' => 'Vissza az elejére',
    'LNK_REMOVE' => 'eltávolítás',
    'LNK_RESUME' => 'Folytatás',
    'LNK_VIEW_CHANGE_LOG' => 'Változások listájának megtekintése',


    'NTC_CLICK_BACK' => 'Kattintson a böngésző vissza gombjára és javítsa a hibát.',
    'NTC_DATE_FORMAT' => '(éééé-hh-nn)',
    'NTC_DATE_TIME_FORMAT' => '(éééé-hh-nn 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Biztosan törölni szeretné a kijelölt rekordo(ka)t?',
    'NTC_TEMPLATE_IS_USED' => 'A sablon legalább egy email marketing rekordban használt. Biztosan törölni szeretné?',
    'NTC_TEMPLATES_IS_USED' => 'A sablonok email marketing rekordokban használtak. Biztosan törölni szeretné őket?\n',
    'NTC_DELETE_CONFIRMATION' => 'Biztosan törölni szeretné ezt a rekordot?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Biztosan törölni szeretné a ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Biztosan frissíteni szeretné a ',
    'NTC_DELETE_SELECTED_RECORDS' =>' kiválasztott rekordo(ka)t?',
    'NTC_LOGIN_MESSAGE' => 'Kérjük, adja meg a felhasználónevét és jelszavát.',
    'NTC_NO_ITEMS_DISPLAY' => 'semmi',
    'NTC_REMOVE_CONFIRMATION' => 'Biztosan el szeretné távolítani ezt a kapcsolatot? Csak a kapcsolat lesz törölve. A rekord nem lesz törölve.',
    'NTC_REQUIRED' => 'Megjelölt mezők kötelezőek',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Üdvözöljük',
    'NTC_YEAR_FORMAT' => '(éééé)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SuiteCRM logos.',
    'WARN_ONLY_ADMINS'=> "Bejelentkezés csak rendszergazdáknak.",
    'WARN_UNSAVED_CHANGES'=> "Arra készül, hogy a változtatások mentése nélkül elhagyja ezt rekordot. Biztosan el kívánja hagyni ezt a rekordot?",
    'ERROR_NO_RECORD' => 'Hiba a rekord megjelenítésében. Ez a rekord vagy törölve lett, vagy nem rendelkezik megfelelő jogosultságokkal a megtekintéséhez.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Figyelmeztetés:</b> A böngésző verziója már nem támogatott, vagy egy nem támogatott böngészőt használ.<p></p>A következő böngészők ajánlottak:<p></p><ul><li>Internet Explorer 10 (kompatibilitási nézet nem támogatott)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Figyelmeztetés:</b> Az ön böngészője kompatibilitási nézetben van, mely nem támogatott.",
    'ERROR_TYPE_NOT_VALID' => 'Hiba. Ez a típus nem érvényes.',
    'ERROR_NO_BEAN' => 'Nem sikerült lekérni a bean-t.', 
    'LBL_DUP_MERGE'=>'Azonosak keresése',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Feliratkozások kezelése',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Feliratkozások kezelése: ',
    'LBL_SUBSCRIBE'=>'Feliratkozás',
    'LBL_UNSUBSCRIBE'=>'Leiratkozás',
    // Ajax status strings
    'LBL_LOADING' => 'Betöltés ...',
    'LBL_SEARCHING' => 'Keresés...',
    'LBL_SAVING_LAYOUT' => 'Elrendezés mentése ...',
    'LBL_SAVED_LAYOUT' => 'Elrendezés mentve.',
    'LBL_SAVED' => 'Mentve',
    'LBL_SAVING' => 'Mentés',
    'LBL_FAILED' => 'Sikertelen!',
    'LBL_DISPLAY_COLUMNS' => 'Oszlopok megjelenítése',
    'LBL_HIDE_COLUMNS' => 'Oszlopok elrejtése',
    'LBL_SEARCH_CRITERIA' => 'Keresési feltételek',
    'LBL_SAVED_VIEWS' => 'Mentett nézetek',
    'LBL_PROCESSING_REQUEST'=>'Feldolgozás...',
    'LBL_REQUEST_PROCESSED'=>'Kész',
    'LBL_AJAX_FAILURE' => 'Ajax hiba',
    'LBL_MERGE_DUPLICATES'  => 'Egyesítés',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Mentett keresések',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Keresés a fenti keresési űrlap használatával',
    'LBL_DETAILVIEW'=>'Részletes nézet',
    'LBL_LISTVIEW'=>'Lista nézet',
    'LBL_EDITVIEW'=>'Nézet szerkesztése',
    'LBL_SEARCHFORM'=>'Keresési űrlap',
    'LBL_SAVED_SEARCH_ERROR' => 'Kérjük, adjon meg egy nevet a nézethez.',
    'LBL_DISPLAY_LOG' => 'Napló megjelenítése',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Rendszer',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Munkamenet időtúllépés',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'A munkamenete 2 percen belül lejár. Kérjük, mentse a munkáját.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'A munkamenete lejárt.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nNapirend: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Találkozó',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Hívás',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Idő: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Helyszín: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Leírás: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Állapot: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Kapcsolódik: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nKattintson az OK gombra a hívás megtekintéséhez, vagy kattintson a Mégsem gombra az üzenet bezárásához.",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nKattintson az OK gombra a találkozó megtekintéséhez, vagy kattintson a Mégsem gombra az üzenet bezárásához.",
	'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
	'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "Nincs találat.",
	'MSG_LIST_VIEW_NO_RESULTS' => "Nincs találat erre: <item1>",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "<item1> létrehozása mint egy új <item2>",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "Jelenleg még nincs mentett rekordja. <item2> vagy <item3> most.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4> hogy többet megtudjon a(z) <item1> modulról. További információk eléréséhez használja a fő navigációs sávon található felhasználói legördülő menü Súgó pontját.",

    'LBL_CLICK_HERE' => "Kattintson ide",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Hozzáadás a kedvencekhez',
    'LBL_MARK_AS_FAVORITES' => 'Megjelölés kedvencként',
    'LBL_CREATE_CONTACT' => 'Kapcsolattartó létrehozása',
    'LBL_CREATE_CASE' => 'Eset létrehozása',
    'LBL_CREATE_NOTE' => 'Megjegyzés létrehozása',
    'LBL_CREATE_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LBL_SCHEDULE_CALL' => 'Hívásnapló',
    'LBL_SCHEDULE_MEETING' => 'Találkozó ütemezése',
    'LBL_CREATE_TASK' => 'Feladat létrehozása',
    'LBL_REMOVE_FROM_FAVORITES' => 'Eltávolítás a kedvencekből',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Űrlap létrehozása',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Webes lehetőség űrlap mentése',

    'LBL_PLEASE_SELECT' => 'Kérjük, válasszon',
    'LBL_REDIRECT_URL'=>'URL átiránytása',
    'LBL_RELATED_CAMPAIGN' =>'Kapcsolódó kampány',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Összes mező hozzáadása',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Összes mező eltávolítása',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Csak a következő típusú képek beágyazása támogatott mellékletként: JPG, PNG.',
    'LBL_TRAINING' => 'Támogatás',
    'ERR_DATABASE_CONN_DROPPED'=>'Hiba a lekérdezés végrehajtásában. Valószínűleg megszakadt az adatbázissal a kapcsolat. Kérjük, frissítse ezt az oldalt, vagy esetleg indítsa újra a webszervert.',
    'ERR_MSSQL_DB_CONTEXT' =>'Az adatbázis környezet megváltozott:',
  'ERR_MSSQL_WARNING' =>'Figyelmeztetés:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Figyelmeztetés: [[field]] mező nem tartalmaz hozzárendelt bejegyzést a [moduleDir] vardefs.php fájlban',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Hiba: [[file]] fájl hiányzik. Nem hozható létre, mert a megfelelő HTML fájl nem található.',
  'ERR_CANNOT_FIND_MODULE' => 'Hiba: [module] modul nem létezik.',
  'LBL_ALT_ADDRESS' => 'Egyéb cím:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Hiba: egymástól eltérő számú paraméterek találhatóak a \'key\' és \'copy\' elemekhez a displayParams tömbben.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Hiányzó index a displayParams tömbben: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Általános',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Szűrők',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Csak a saját tételeim',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Megnevezés',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Sorok megjelenítése',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Új oldal létrehozása ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Biztosan törölni szeretné ezt az oldalt?',
    'LBL_SAVING_PAGE_TITLE' => 'Oldal címének mentése ...',
    'LBL_RETRIEVING_PAGE' => 'Oldal beolvasása ...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your adminstrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Oldal hozzáadása',
    'LBL_DELETE_PAGE' => 'Oldal törlése',
    'LBL_CHANGE_LAYOUT' => 'Elrendezés módosítása',
    'LBL_RENAME_PAGE' => 'Oldal átnevezése',

    'LBL_LOADING_PAGE' => 'Oldal betöltése, kis türelmet...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Dashlet hozzáadása',
    'LBL_CLOSE_DASHLETS' => 'Bezárás',
    'LBL_OPTIONS' => 'Beállítások',
    'LBL_NUMBER_OF_COLUMNS' => 'Válassza ki az oszlopok számát',
    'LBL_1_COLUMN' => '1 oszlop',
    'LBL_2_COLUMN' => '2 oszlop',
    'LBL_3_COLUMN' => '3 oszlop',
    'LBL_PAGE_NAME' => 'Oldal neve',

    'LBL_SEARCH_RESULTS' => 'Keresési eredmények',
    'LBL_SEARCH_MODULES' => 'Modulok',
    'LBL_SEARCH_CHARTS' => 'Diagramok',
    'LBL_SEARCH_REPORT_CHARTS' => 'Jelentés diagramok',
    'LBL_SEARCH_TOOLS' => 'Eszközök',
    'LBL_SEARCH_HELP_TITLE' => 'Keresési tippek',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Bezárás',
    'LBL_SEARCH_RESULTS_FOUND' => 'Keresési találat',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Kérjük, adjon meg egy oldalnevet.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nincs kép',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Cím másolása balról:',
    'LBL_SAVE_AND_CONTINUE' => 'Mentés és folytatás',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad.  For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'Felhasználói azonosító',
    'LBL_MODULE_NAME' => 'Modulnév',
    'LBL_ITEM_ID' => 'Tétel azonosító',
    'LBL_ITEM_SUMMARY' => 'Tétel összesítő',
    'LBL_ACTION' => 'Művelet',
    'LBL_SESSION_ID' => 'Munkamenet-azonosító',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Rekord látható',
    'LBL_DATE_LAST_ACTION' => 'Utolsó művelet időpontja',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nincs előtte',
  'MSG_IS_MORE_THAN' => 'több, mint',
  'MSG_IS_LESS_THAN' => 'kevesebb, mint',
  'MSG_SHOULD_BE' => 'kell lennie',
  'MSG_OR_GREATER' => 'vagy nagyobb',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Hibajelentés',
    'LBL_NO_RECORDS_FOUND' => '- 0 rekord -',

    'DATA_TYPE_DUE' => 'Határidő:',
    'DATA_TYPE_START' => 'Kezdete:',
    'DATA_TYPE_SENT' => 'Elküldve:',
    'DATA_TYPE_MODIFIED' => 'Módosítva:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Számlál',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'objektum képe',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Dátum kiválasztása',

    'LBL_VALIDATE_RANGE' => 'kívül esik az érvényes tartományon',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Kérjük, válassza ki a kezdő és befejező időpontokat',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Kérjük, válassza ki a kezdő és a befejező tartomány részeket',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Összes',

    'LBL_OPERATOR_IN_TEXT' => 'az alábbiak egyike:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'nem az alábbiak egyike:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Get Data',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Biztosan le szeretné tiltani a csatlakozót ehhez a modulhoz?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'Az optimális élményhez használjon IIS / FastCGI api-t, és állítsa a fstcgi.logging -ot 0-ra a php.ini-ben. ',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'A globális csoport nem törölhető.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'Privát csapatot [{0}] nem lehet törölni, amíg a felhasználó [{1}] nem törli.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Adobe flash hiba.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Név',
  'LBL_COLLECTION_PRIMARY' => 'Elsődleges',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Üres kötelező mező',
    'LBL_COLLECTION_EXACT' => 'Pontos',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_DESCRIPTION' => 'Leírás',

  'LBL_YESTERDAY'=> 'tegnap',
  'LBL_TODAY'=>'ma',
  'LBL_TOMORROW'=>'holnap',
  'LBL_NEXT_WEEK'=> 'jövő héten',
  'LBL_NEXT_MONDAY'=>'jövő hétfőn',
  'LBL_NEXT_FRIDAY'=>'jövő pénteken',
  'LBL_TWO_WEEKS'=> 'két hét',
  'LBL_NEXT_MONTH'=> 'jövő hónapban',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'következő hónap első napján',
  'LBL_THREE_MONTHS'=> 'három hónap',
  'LBL_SIXMONTHS'=> 'hat hónap',
  'LBL_NEXT_YEAR'=> 'jövőre',
    'LBL_FILTERED' => 'Szűrt',

    //Datetimecombo fields
    'LBL_HOURS' => 'Órák',
    'LBL_MINUTES' => 'Percek',
    'LBL_MERIDIEM' => 'Dél',
    'LBL_DATE' => 'Dátum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatikus frissítés',

    'LBL_DURATION_DAY' => 'nap',
    'LBL_DURATION_HOUR' => 'óra',
    'LBL_DURATION_MINUTE' => 'perc',
    'LBL_DURATION_DAYS' => 'napok',
    'LBL_DURATION_HOURS' => 'órák',
    'LBL_DURATION_MINUTES' => 'percek',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Válassza ki a hónapot',
    'LBL_ENTER_YEAR' => 'Adja meg az évet',
    'LBL_ENTER_VALID_YEAR' => 'Adjon meg egy érvényes évet',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Kérem, adjon meg numerikus telefonszámot, körzetszámmal együtt.',

    //File write error label
    'ERR_FILE_WRITE' => 'Hiba: Nem lehet írni a fájlt: {0}.  Kérem, ellenőrizze a rendszer és a web szerver engedélyeket.',
  'ERR_FILE_NOT_FOUND' => 'Hiba: Nem sikerült betölteni a fájlt: {0}.  Kérjük, ellenőrizze a rendszer és a web szerver engedélyeket.',

    'LBL_AND' => 'És',
    'LBL_BEFORE' => 'Előtt',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Feltöltés az ön számítógépéről',
    'LBL_SEARCH_EXTERNAL_API' => 'A külső forrás fájl',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Biztonsági',
    'LBL_SHARE_PRIVATE' => 'Privát',
    'LBL_SHARE_COMPANY' => 'Vállalat',
    'LBL_SHARE_LINKABLE' => 'Csatolható',
    'LBL_SHARE_PUBLIC' => 'Nyilvános',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS Feed',
    'LBL_RSS_RECORDS_FOUND' => 'rekord(ok) található(ak)',
    'ERR_RSS_INVALID_INPUT' => 'RSS nem érvényes input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS nem érvényes response_type',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Dokumentum nem támogatja a megadott formátumban.',

    'LBL_EMPTY' => 'Üres',
    'LBL_IS_EMPTY' => 'Üres',
    'LBL_IS_NOT_EMPTY' => 'Nem üres',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Ez egy minta, mely tartalmaz egy példafájlt"
"A fájl vesszővel tagolt .csv típusú, melyben idézőjelek a mező határolók."

"A fejléc-sor a legfelső sor a fájlban, és tartalmazzák a mezőcímkéket."

"Megjegyzés: az adatbázis nevét is lehet használni a fejlécsorban. Ez akkor hasznos, ha használ phpMyAdmin-t"
"Az Oszlopsorrend nem kritikus, mivel az importálási folyamat az adatokat a megfelelő mezőkbe a fejléc-sor alapján helyezi."


"Ezt a fájlt sablonként a következőképpen használhatja:" "1. távolítsa el a mintát adatsorok közül" "2. Távolítsa el a súgószöveget, amely éppen most olvasott""3. Mentse saját adatait a megfelelő sorokba és oszlopokba""4. Mentse a fájlt egy elérhető helyre""5. Kattintson a Műveletek menü az alkalmazásban az import lehetőségre, és válassza ki a feltöltendő fájlt"
   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Jelentést tesz ID',
    'LBL_EXPORT_FULL_NAME' => 'Név:',
    'LBL_EXPORT_TEAM_ID' => 'Csapat Id',
    'LBL_EXPORT_TEAM_NAME' => 'Csapat',
    'LBL_EXPORT_TEAM_SET_ID' => 'Csapat-készlet Id',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navigálás... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Értesítések',
    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Új csapat sor hozzáadása',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Csapat eltávolítás',
    'LBL_ALT_SPOT_SEARCH' => 'Csúcs keresés',
    'LBL_ALT_SORT_DESC' => 'Rendezett, csökkenő',
    'LBL_ALT_SORT_ASC' => 'Rendezett, növekvő',
    'LBL_ALT_SORT' => 'Rendezés',
    'LBL_ALT_SHOW_OPTIONS' => 'Beállítások megjelenítése',
    'LBL_ALT_HIDE_OPTIONS' => 'Beállítások elrejtése',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Kijelölt tétel áthelyezése a lista bal oldalára',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Kijelölt tétel áthelyezése a lista jobb oldalára',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Kijelölt tétel áthelyezése a lista tetejére',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Kijelölt tétel áthelyezése a lista aljára',
    'LBL_ALT_INFO' => 'Információk',
	'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below.  Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'Email',
    'LBL_EMAIL_OPT_TITLE' => 'Email választás',
    'LBL_EMAIL_INV_TITLE' => 'Érvénytelen e-mail cím',
    'LBL_EMAIL_PRIM_TITLE' => 'elsődleges e-mail cím',
    'LBL_SELECT_ALL_TITLE' => 'Összes kijelölése',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Sor kijelölése',
    'LBL_TEAM_SELECTED_TITLE' => 'Team Selected ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Tegye elsődlegessé a csapatot',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'Hiba: Nem sikerült a feltöltés. Hibakód: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Hiba: Nem sikerült a feltöltés. Hibakód: {0} - {1}. Az upload_maxsize  {2}',
    'UPLOAD_ERROR_HOME_TEXT'     => 'Hiba: Nem sikerült a a feltöltés, kérjük forduljon a rendszergazdához segítségért.',
    'UPLOAD_MAXIMUM_EXCEEDED'    => 'Feltöltés ({0} bájt) meghaladta a megengedett maximális méretet: {1} bájt',
    'UPLOAD_REQUEST_ERROR'    => 'Hiba történt. Kérjük, frissítse a lapot, és próbálja újra.',


    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Szerkesztés',
    'LBL_EDIT_BUTTON_TITLE' => 'Szerkesztés',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Megkettőzés',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Megkettőzés',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Törlés',
    'LBL_DELETE_BUTTON_TITLE' => 'Törlés [Alt+D]',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Mentés',
    'LBL_SAVE_BUTTON_TITLE' => 'Mentés',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Mégsem',
    'LBL_CANCEL_BUTTON_TITLE' => 'Mégsem',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Billentyűzet parancsok',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => '{0} konektor tömb helytelenül van meghatározva, vagy üres, és nem használható.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Rossz válasz a kiszolgálótól',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Árajánlat',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Sale Price',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'Manuális',
        '5' => '5 percenként',
        '15' => '15 percenként',
        '30' => '30 percenként',
        '60' => 'Óránként',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.'

    );

$app_list_strings['moduleList']['Library'] = 'Könyvtár';
$app_list_strings['library_type'] = array('Books'=>'Könyv', 'Music'=>'Zene', 'DVD'=>'DVD', 'Magazines'=>'Magazinok');
$app_list_strings['moduleList']['EmailAddresses'] = 'Email cím';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Magas',
    'Medium' => 'Közepes',
    'Low' => 'Alacsony',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Vázlat',
    'Expired' => 'Lejárt',
    'In Review' => 'Felülvizsgálat',
    'Published' => 'Publikálta',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Rendszergazda műveletek--',
    'Create New Tag' => 'Új címke létrehozása',
    'Delete Tag'=>'Címke törlése',
    'Rename Tag'=>'Címke átnevezése',
    'Move Selected Articles'=>'Kiválasztott cikk áthelyezése',
    'Apply Tags On Articles'=>'Cikkek címkékkel',
    'Delete Selected Articles'=>'Törli a kijelölt Cikket',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Melléklettel rendelkezik',
        'none' => 'Nem',
        'mime' => 'Adja meg a Mime-típust',
        'name' => 'Adjon meg nevet',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Tudásbázis';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Első 5',
    'Top_10' => 'Első 10',
    'Top_20' => 'Első 20',
    'Bot_5'  => 'Utolsó 5',
    'Bot_10' => 'Utolsó 10',
    'Bot_20' => 'Utolsó 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Összes',
        'added' => 'Elmúlt 30 nap hozzáadva',
        'pending' => 'Jóváhagyásra váró',
        'updated' =>'Utolsó 30 napban frissített',
        'faqs' => 'FAQ',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'Be',
    'before' => 'Előtt',
    'after' => 'Után',
    'between_dates' => 'Között',
    'last_7_days' => 'Utolsó 7 nap',
    'next_7_days' => 'Következő 7 nap',
    'last_month' => 'A múlt hónapban',
    'this_month' => 'Ebben a hónapban',
    'next_month' => 'Jövő hónapban',
    'last_30_days' => 'Elmúlt 30 nap',
    'next_30_days' => 'Következő 30 nap',
    'last_year' => 'Tavaly',
    'this_year' => 'Ebben az évben',
    'next_year' => 'Jövőre',
    'isnull' => 'Üres',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'Afganisztán',
        'ALBANIA' => 'Albánia',
        'ALGERIA' => 'Algéria',
        'AMERICAN SAMOA' => 'AMERIKAI SZAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARKTISZ',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'Argentína',
        'ARMENIA' => 'Örményország',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'Ausztrália',
        'AUSTRIA' => 'Ausztria',
        'AZERBAIJAN' => 'Azerbajdzsán',
        'BAHAMAS' => 'BAHAMA-SZIGETEK',
        'BAHRAIN' => 'Bahrein',
        'BANGLADESH' => 'BANGLADES',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'Fehéroroszország',
        'BELGIUM' => 'Belgium',
        'BELIZE' => 'Belize',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTÁN',
        'BOLIVIA' => 'Bolívia',
        'BOSNIA' => 'BOSZNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET-SZIGET',
        'BRAZIL' => 'Brazília',
        'BRITISH ANTARCTICA TERRITORY' => 'BRIT ANTARKTISZ TERÜLETÉN',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRIT INDIAI-ÓCEÁNI TERÜLET',
        'BRITISH VIRGIN ISLANDS' => 'BRIT VIRGIN-SZIGETEK',
        'BRITISH WEST INDIES' => 'BRIT NYUGAT-INDIA',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'Bulgária',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'KAMBODZSA',
        'CAMEROON' => 'KAMERUN',
        'CANADA' => 'Kanada',
        'CANAL ZONE' => 'CSATORNA ÖVEZET',
        'CANARY ISLAND' => 'KANÁRI-SZIGETEK',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI SZIGETEK',
        'CAYMAN ISLANDS' => 'KAJMÁN-SZIGETEK',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CSÁD',
        'CHANNEL ISLAND UK' => 'CSATORNA-SZIGETEK, BRIT',
        'CHILE' => 'Chile',
        'CHINA' => 'KÍNA',
        'CHRISTMAS ISLAND' => 'KARÁCSONY-SZIGET',
        'COCOS (KEELING) ISLAND' => 'KÓKUSZ-SZIGET',
        'COLOMBIA' => 'Kolumbia',
        'COMORO ISLANDS' => 'COMORE-SZIGETEK',
        'CONGO' => 'KONGÓ',
        'CONGO KINSHASA' => 'KONGÓ-KINSHASA',
        'COOK ISLANDS' => 'COOK-SZIGETEK',
        'COSTA RICA' => 'Costa Rica',
        'CROATIA' => 'Horvátország',
        'CUBA' => 'KUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CIPRUS',
        'CZECH REPUBLIC' => 'Cseh Köztársaság',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'Dánia',
        'DJIBOUTI' => 'DZSIBUTI',
        'DOMINICA' => 'DOMINIKA',
        'DOMINICAN REPUBLIC' => 'Dominikai Köztársaság',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'Ecuador',
        'EGYPT' => 'Egyiptom',
        'EL SALVADOR' => 'El Salvador',
        'EQUATORIAL GUINEA' => 'EGYENLÍTŐI-GUINEA',
        'ESTONIA' => 'Észtország',
        'ETHIOPIA' => 'ETIÓPIA',
        'FAEROE ISLANDS' => 'FERÖER-SZIGETEK',
        'FALKLAND ISLANDS' => 'FALKLAND-SZIGETEK',
        'FIJI' => 'FIDZSI-SZIGETEK',
        'FINLAND' => 'Finnország',
        'FRANCE' => 'Franciaország',
        'FRENCH GUIANA' => 'FRANCIA GUYANA',
        'FRENCH POLYNESIA' => 'FRANCIA POLINÉZIA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'Grúzia',
        'GERMANY' => 'Németország',
        'GHANA' => 'GHÁNA',
        'GIBRALTAR' => 'GIBRALTÁR',
        'GREECE' => 'Görögország',
        'GREENLAND' => 'GRÖNLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'Guatemala',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'Honduras',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'Magyarország',
        'ICELAND' => 'Izland',
        'IFNI' => 'IFNI',
        'INDIA' => 'India',
        'INDONESIA' => 'Indonézia',
        'IRAN' => 'Irán',
        'IRAQ' => 'Irak',
        'IRELAND' => 'Írország',
        'ISRAEL' => 'Izrael',
        'ITALY' => 'Olaszország',
        'IVORY COAST' => 'ELEFÁNTCSONTPART',
        'JAMAICA' => 'Jamaica',
        'JAPAN' => 'Japán',
        'JORDAN' => 'Jordánia',
        'KAZAKHSTAN' => 'Kazahsztán',
        'KENYA' => 'Kenya',
        'KOREA' => 'Korea',
        'KOREA, SOUTH' => 'DÉL-KOREA',
        'KUWAIT' => 'Kuvait',
        'KYRGYZSTAN' => 'Kirgizisztán',
        'LAOS' => 'LAOSZ',
        'LATVIA' => 'Lettország',
        'LEBANON' => 'Libanon',
        'LEEWARD ISLANDS' => 'LEEWARD-SZIGETEK',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'Líbia',
        'LIECHTENSTEIN' => 'Liechtenstein',
        'LITHUANIA' => 'Litvánia',
        'LUXEMBOURG' => 'Luxemburg',
        'MACAO' => 'MAKAÓ',
        'MACEDONIA' => 'MACEDÓNIA',
        'MADAGASCAR' => 'MADAGASZKÁR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'Malajzia',
        'MALDIVES' => 'MALDÍV-SZIGETEK',
        'MALI' => 'MALI',
        'MALTA' => 'Málta',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURITÁNIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANÉZIA',
        'MEXICO' => 'Mexikó',
        'MOLDOVIA' => 'MOLDOVIA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'Mongólia',
        'MOROCCO' => 'Marokkó',
        'MOZAMBIQUE' => 'MOZAMBIK',
        'MYANAMAR' => 'MYANAMAR',
        'NAMIBIA' => 'NAMÍBIA',
        'NEPAL' => 'Nepál',
        'NETHERLANDS' => 'Hollandia',
        'NETHERLANDS ANTILLES' => 'HOLLAND ANTILLÁK',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'HOLLAND ANTILLÁK SEMLEGES ZÓNA',
        'NEW CALADONIA' => 'ÚJ CALADONIA',
        'NEW HEBRIDES' => 'ÚJ-HEBRIDÁK',
        'NEW ZEALAND' => 'Új-Zéland',
        'NICARAGUA' => 'Nicaragua',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGÉRIA',
        'NORFOLK ISLAND' => 'NORFOLK-SZIGET',
        'NORWAY' => 'Norvégia',
        'OMAN' => 'Omán',
        'OTHER' => 'EGYÉB',
        'PACIFIC ISLAND' => 'CSENDES-ÓCEÁNI SZIGET',
        'PAKISTAN' => 'PAKISZTÁN',
        'PANAMA' => 'Panama',
        'PAPUA NEW GUINEA' => 'PÁPUA ÚJ-GUINEA',
        'PARAGUAY' => 'Paraguay',
        'PERU' => 'Peru',
        'PHILIPPINES' => 'FÜLÖP-SZIGETEK',
        'POLAND' => 'Lengyelország',
        'PORTUGAL' => 'Portugália',
        'PORTUGUESE TIMOR' => 'EAST TIMOR',
        'PUERTO RICO' => 'Puerto Rico',
        'QATAR' => 'Katar',
        'REPUBLIC OF BELARUS' => 'A BELARUSZ KÖZTÁRSASÁG',
        'REPUBLIC OF SOUTH AFRICA' => 'A DÉL-AFRIKAI KÖZTÁRSASÁG',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'Románia',
        'RUSSIA' => 'Oroszország',
        'RWANDA' => 'RUANDA',
        'RYUKYU ISLANDS' => 'RYUKYU-SZIGETEK',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'Szaúd-Arábia',
        'SENEGAL' => 'SZENEGÁL',
        'SERBIA' => 'Szerbia',
        'SEYCHELLES' => 'SEYCHELLE-SZIGETEK',
        'SIERRA LEONE' => 'SIERRA LEONE-I',
        'SINGAPORE' => 'Szingapúr',
        'SLOVAKIA' => 'Szlovákia',
        'SLOVENIA' => 'Szlovénia',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'Dél-Afrika',
        'SOUTH YEMEN' => 'DÉL-JEMEN',
        'SPAIN' => 'Spanyolország',
        'SPANISH SAHARA' => 'SPANYOL SZAHARA',
        'SRI LANKA' => 'SRÍ LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS ÉS NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SZUDÁN',
        'SURINAM' => 'SURINAMEI',
        'SW AFRICA' => 'SW AFRIKA',
        'SWAZILAND' => 'SZVÁZIFÖLD',
        'SWEDEN' => 'Svédország',
        'SWITZERLAND' => 'Svájc',
        'SYRIA' => 'Szíria',
        'TAIWAN' => 'Tajvan',
        'TAJIKISTAN' => 'TÁDZSIKISZTÁN',
        'TANZANIA' => 'TANZÁNIA',
        'THAILAND' => 'Thaiföld',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'Tunézia',
        'TURKEY' => 'Törökország',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'Ukrajna',
        'UNITED ARAB EMIRATES' => 'EGYESÜLT ARAB EMÍRSÉGEK',
        'UNITED KINGDOM' => 'Egyesült Királyság',
        'UPPER VOLTA' => 'FELSŐ-VOLTA',
        'URUGUAY' => 'Uruguay',
        'US PACIFIC ISLAND' => 'AMERIKAI CSENDES-ÓCEÁNI SZIGET',
        'US VIRGIN ISLANDS' => 'AMERIKAI VIRGIN-SZIGETEK',
        'USA' => 'AMERIKAI EGYESÜLT ÁLLAMOK',
        'UZBEKISTAN' => 'Üzbegisztán',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATIKÁN',
        'VENEZUELA' => 'Venezuela',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE-SZIGET',
        'WEST INDIES' => 'NYUGAT-INDIA',
        'WESTERN SAHARA' => 'NYUGAT-SZAHARA',
        'YEMEN' => 'Jemen',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'Zimbabwe',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'NAGY-5 (tajvani és Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrillic)',
    'CP1252'    => 'CP1252 (MS Western European & US)',
    'EUC-CN'    => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix Japanese)',
    'EUC-KR'    => 'EUC-KR (koreai)',
    'EUC-TW'    => 'EUC-TW (tajvani)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japán)',
    'ISO-2022-KR' => 'ISO-2022-KR (koreai)',
    'ISO-8859-1'  => 'ISO-8859-1 (Nyugat-európai és amerikai)',
    'ISO-8859-2'  => 'ISO-8859-2 (Közép- és kelet-európai)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (cirill betűs)',
    'ISO-8859-6'  => 'ISO-8859-6 (arab)',
    'ISO-8859-7'  => 'ISO-8859-7 (görög)',
    'ISO-8859-8'  => 'ISO-8859-8 (héber)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin-5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (cirill betűs orosz)',
    'KOI8-U'    => 'KOI8-U (cirill ukrán)',
    'SJIS'      => 'SJIS (MS Japán)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

  'Africa/Algiers' => 'Afrika/Algír',
  'Africa/Luanda' => 'Afrika/Luanda',
  'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
  'Africa/Gaborone' => 'Afrika/Gaborone',
  'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
  'Africa/Bujumbura' => 'Afrika/Bujumbura',
  'Africa/Douala' => 'Afrika/Douala',
  'Atlantic/Cape_Verde' => 'Atlanti-óceán/Cape Verde',
  'Africa/Bangui' => 'Afrika/Bangui',
  'Africa/Ndjamena' => 'Afrika/Ndjamena',
  'Indian/Comoro' => 'Indiai-óceán/Comoro',
  'Africa/Kinshasa' => 'Afrika/Kinshasa',
  'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
  'Africa/Brazzaville' => 'Afrika/Brazzaville',
  'Africa/Abidjan' => 'Afrika/Abidjan',
  'Africa/Djibouti' => 'Afrika/Dzsibuti',
  'Africa/Cairo' => 'Afrika/Kairó',
  'Africa/Malabo' => 'Afrika/Malabo',
  'Africa/Asmera' => 'Afrika/Asmera',
  'Africa/Addis_Ababa' => 'Afrika/Addis Ababa',
  'Africa/Libreville' => 'Afrika/Libreville',
  'Africa/Banjul' => 'Afrika/Banjul',
  'Africa/Accra' => 'Afrika/Accra',
  'Africa/Conakry' => 'Afrika/Conakry',
  'Africa/Bissau' => 'Afrika/Bissau',
  'Africa/Nairobi' => 'Afrika/Nairobi',
  'Africa/Maseru' => 'Afrika/Maseru',
  'Africa/Monrovia' => 'Afrika/Monrovia',
  'Africa/Tripoli' => 'Afrika/Tripoli',
  'Indian/Antananarivo' => 'Indiai-óceán/Antananarivo',
  'Africa/Blantyre' => 'Afrika/Blantyre',
  'Africa/Bamako' => 'Afrika/Bamako',
  'Africa/Nouakchott' => 'Afrika/Nouakchott',
  'Indian/Mauritius' => 'Indiai-óceán/Mauritius',
  'Indian/Mayotte' => 'Indiai-óceán/Mayotte',
  'Africa/Casablanca' => 'Afrika/Casablanca',
  'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
  'Africa/Maputo' => 'Afrika/Maputo',
  'Africa/Windhoek' => 'Afrika/Windhoek',
  'Africa/Niamey' => 'Afrika/Niamey',
  'Africa/Lagos' => 'Afrika/Lagos',
  'Indian/Reunion' => 'Indiai-óceán/Reunion',
  'Africa/Kigali' => 'Afrika/Kigali',
  'Atlantic/St_Helena' => 'Atlanti-óceán/St_Helena',
  'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
  'Africa/Dakar' => 'Afrika/Dakar',
  'Indian/Mahe' => 'Indiai-óceán/Mahe',
  'Africa/Freetown' => 'Afrika/Freetown',
  'Africa/Mogadishu' => 'Afrika/Mogadishu',
  'Africa/Johannesburg' => 'Afrika/Johannesburg',
  'Africa/Khartoum' => 'Afrika/Khartoum',
  'Africa/Mbabane' => 'Afrika/Mbabane',
  'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salaam',
  'Africa/Lome' => 'Afrika/Lome',
  'Africa/Tunis' => 'Afrika/Tunis',
  'Africa/Kampala' => 'Afrika/Kampala',
  'Africa/Lusaka' => 'Afrika/Lusaka',
  'Africa/Harare' => 'Afrika/Harare',
  'Antarctica/Casey' => 'Antarktisz/Casey',
  'Antarctica/Davis' => 'Antarktisz/Davis',
  'Antarctica/Mawson' => 'Antarktisz/Mawson',
  'Indian/Kerguelen' => 'Indiai-óceán/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarktisz/DumontDUrville',
  'Antarctica/Syowa' => 'Antarktisz/Syowa',
  'Antarctica/Vostok' => 'Antarktisz/Vosztok',
  'Antarctica/Rothera' => 'Antarktisz/Rothera',
  'Antarctica/Palmer' => 'Antarktisz/Palmer',
  'Antarctica/McMurdo' => 'Antarktisz/McMurdo',
  'Asia/Kabul' => 'Ázsia/Kabul',
  'Asia/Yerevan' => 'Ázsia/Jereván',
  'Asia/Baku' => 'Ázsia/Baku',
  'Asia/Bahrain' => 'Ázsia/Bahrain',
  'Asia/Dhaka' => 'Ázsia/Dhaka',
  'Asia/Thimphu' => 'Ázsia/Thimphu',
  'Indian/Chagos' => 'Indiai-óceán/Chagos',
  'Asia/Brunei' => 'Ázsia/Brunei',
  'Asia/Rangoon' => 'Ázsia/Rangoon',
  'Asia/Phnom_Penh' => 'Ázsia/Phnom_Penh',
  'Asia/Beijing' => 'Ázsia/Peking',
  'Asia/Harbin' => 'Ázsia/Harbin',
  'Asia/Shanghai' => 'Ázsia/Sanghaj',
  'Asia/Chongqing' => 'Ázsia/Sanghaj',
  'Asia/Urumqi' => 'Ázsia/Urumqi',
  'Asia/Kashgar' => 'Ázsia/Kashgar',
  'Asia/Hong_Kong' => 'Ázsia/Hong_Kong',
  'Asia/Taipei' => 'Ázsia/Taipei',
  'Asia/Macau' => 'Ázsia/Makaó',
  'Asia/Nicosia' => 'Ázsia/Nicosia',
  'Asia/Tbilisi' => 'Ázsia/Tbiliszi',
  'Asia/Dili' => 'Ázsia/Dili',
  'Asia/Calcutta' => 'Ázsia/Calcutta',
  'Asia/Jakarta' => 'Ázsia/Jakarta',
  'Asia/Pontianak' => 'Ázsia/Pontianak',
  'Asia/Makassar' => 'Ázsia/Makassar',
  'Asia/Jayapura' => 'Ázsia/Jayapura',
  'Asia/Tehran' => 'Ázsia/Teherán',
  'Asia/Baghdad' => 'Ázsia/Bagdad',
  'Asia/Jerusalem' => 'Ázsia/Jeruzsálem',
  'Asia/Tokyo' => 'Ázsia/Tokió',
  'Asia/Amman' => 'Ázsia/Amman',
  'Asia/Almaty' => 'Ázsia/Almaty',
  'Asia/Qyzylorda' => 'Ázsia/Qyzylorda',
  'Asia/Aqtobe' => 'Ázsia/Aqtobe',
  'Asia/Aqtau' => 'Ázsia/Aktau',
  'Asia/Oral' => 'Ázsia/Oral',
  'Asia/Bishkek' => 'Ázsia/Bishkek',
  'Asia/Seoul' => 'Ázsia/Szöul',
  'Asia/Pyongyang' => 'Ázsia/Pyongyang',
  'Asia/Kuwait' => 'Ázsia/Kuvait',
  'Asia/Vientiane' => 'Ázsia/Vientiane',
  'Asia/Beirut' => 'Ázsia/Bejrút',
  'Asia/Kuala_Lumpur' => 'Ázsia/Kuala_Lumpur',
  'Asia/Kuching' => 'Ázsia/Kuching',
  'Indian/Maldives' => 'Indiai-óceán/Maldív-szigetek',
  'Asia/Hovd' => 'Ázsia/Hovd',
  'Asia/Ulaanbaatar' => 'Ázsia/Ulánbátor',
  'Asia/Choibalsan' => 'Ázsia/Csojbalszan',
  'Asia/Katmandu' => 'Ázsia/Katmandu',
  'Asia/Muscat' => 'Ázsia/Muscat',
  'Asia/Karachi' => 'Ázsia/Karachi',
  'Asia/Gaza' => 'Ázsia/Gáza',
  'Asia/Manila' => 'Ázsia/Manila',
  'Asia/Qatar' => 'Ázsia/Katar',
  'Asia/Riyadh' => 'Ázsia/Rijád',
  'Asia/Singapore' => 'Ázsia/Szingapúr',
  'Asia/Colombo' => 'Ázsia/Colombo',
  'Asia/Damascus' => 'Ázsia/Damaszkusz',
  'Asia/Dushanbe' => 'Ázsia/Dusanbe',
  'Asia/Bangkok' => 'Ázsia/Bangkok',
  'Asia/Ashgabat' => 'Ázsia/Ashgabat',
  'Asia/Dubai' => 'Ázsia/Dubai',
  'Asia/Samarkand' => 'Ázsia/Szamarkand',
  'Asia/Tashkent' => 'Ázsia/Taskent',
  'Asia/Saigon' => 'Ázsia/Saigon',
  'Asia/Aden' => 'Ázsia/Aden',
  'Australia/Darwin' => 'Ausztrália/Darwin',
  'Australia/Perth' => 'Ausztrália/Perth',
  'Australia/Brisbane' => 'Ausztrália/Brisbane',
  'Australia/Lindeman' => 'Ausztrália/Lindeman',
  'Australia/Adelaide' => 'Ausztrália/Adelaide',
  'Australia/Hobart' => 'Ausztrália/Hobart',
  'Australia/Currie' => 'Ausztrália/Currie',
  'Australia/Melbourne' => 'Ausztrália/Melbourne',
  'Australia/Sydney' => 'Ausztrália/Sydney',
  'Australia/Broken_Hill' => 'Ausztrália/Broken_Hill',
  'Indian/Christmas' => 'Indiai-óceán/Karácsony',
  'Pacific/Rarotonga' => 'Csendes-óceán/Rarotonga',
  'Indian/Cocos' => 'Indiai-óceán/Cocos',
  'Pacific/Fiji' => 'Csendes-óceán/Fidzsi-szigetek',
  'Pacific/Gambier' => 'Csendes-óceán/Gambier',
  'Pacific/Marquesas' => 'Csendes-óceán/Marquesas',
  'Pacific/Tahiti' => 'Csendes-óceán/Tahiti',
  'Pacific/Guam' => 'Csendes-óceán/Guam',
  'Pacific/Tarawa' => 'Csendes-óceán/Tarawa',
  'Pacific/Enderbury' => 'Csendes-óceán/Enderbury',
  'Pacific/Kiritimati' => 'Csendes-óceán/Kiritimati',
  'Pacific/Saipan' => 'Csendes-óceán/Saipan',
  'Pacific/Majuro' => 'Csendes-óceán/Majuro',
  'Pacific/Kwajalein' => 'Csendes-óceán/Kwajalein',
  'Pacific/Truk' => 'Csendes-óceán/Truk',
  'Pacific/Pohnpei' => 'Pacific/Pohnpei',
  'Pacific/Kosrae' => 'Csendes-óceán/Kosrae',
  'Pacific/Nauru' => 'Csendes-óceán/Nauru',
  'Pacific/Noumea' => 'Csendes-óceán/Noumea',
  'Pacific/Auckland' => 'Csendes-óceán/Auckland',
  'Pacific/Chatham' => 'Csendes-óceán/Chatham',
  'Pacific/Niue' => 'Csendes-óceán/Niue',
  'Pacific/Norfolk' => 'Csendes-óceán/Norfolk',
  'Pacific/Palau' => 'Csendes-óceán/Palau',
  'Pacific/Port_Moresby' => 'Csendes-óceán/Port_Moresby',
  'Pacific/Pitcairn' => 'Csendes-óceán/Pitcairn',
  'Pacific/Pago_Pago' => 'Csendes-óceán/Pago_Pago',
  'Pacific/Apia' => 'Csendes-óceán/Apia',
  'Pacific/Guadalcanal' => 'Csendes-óceán/Guadalcanal',
  'Pacific/Fakaofo' => 'Csendes-óceán/Fakaofo',
  'Pacific/Tongatapu' => 'Csendes-óceán/Tongatapu',
  'Pacific/Funafuti' => 'Csendes-óceán/Funafuti',
  'Pacific/Johnston' => 'Csendes-óceán/Johnston',
  'Pacific/Midway' => 'Csendes-óceán/Midway',
  'Pacific/Wake' => 'Csendes-óceán/Wake',
  'Pacific/Efate' => 'Csendes-óceán/Efate',
  'Pacific/Wallis' => 'Csendes-óceán/Wallis',
  'Europe/London' => 'Európa/London',
  'Europe/Dublin' => 'Európa/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'Számított levegőben töltött idő',
  'Europe/Tirane' => 'Európa/Tirana',
  'Europe/Andorra' => 'Európa/Andorra',
  'Europe/Vienna' => 'Európa/Bécs',
  'Europe/Minsk' => 'Európa/Minszk',
  'Europe/Brussels' => 'Európa/Brüsszel',
  'Europe/Sofia' => 'Európa/Szófia',
  'Europe/Prague' => 'Európa/Prága',
  'Europe/Copenhagen' => 'Európa/Koppenhága',
  'Atlantic/Faeroe' => 'Atlanti-óceán/Feröer-',
  'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
  'America/Scoresbysund' => 'Amerika/Scoresbysund',
  'America/Godthab' => 'Amerika/Godthab',
  'America/Thule' => 'Amerika/Thule',
  'Europe/Tallinn' => 'Európa/Tallin',
  'Europe/Helsinki' => 'Európa/Helsinki',
  'Europe/Paris' => 'Európa/Párizs',
  'Europe/Berlin' => 'Európa/Berlin',
  'Europe/Gibraltar' => 'Európa/Gibraltár',
  'Europe/Athens' => 'Európa/Athén',
  'Europe/Budapest' => 'Európa/Budapest',
  'Atlantic/Reykjavik' => 'Atlanti-óceán/Reykjavik',
  'Europe/Rome' => 'Európa/Róma',
  'Europe/Riga' => 'Európa/Riga',
  'Europe/Vaduz' => 'Európa/Vaduz',
  'Europe/Vilnius' => 'Európa/Vilnius',
  'Europe/Luxembourg' => 'Európa/Luxemburg',
  'Europe/Malta' => 'Európa/Málta',
  'Europe/Chisinau' => 'Európa/Chisinau',
  'Europe/Monaco' => 'Európa/Monaco',
  'Europe/Amsterdam' => 'Európa/Amszterdam',
  'Europe/Oslo' => 'Európa/Oslo',
  'Europe/Warsaw' => 'Európa/Varsó',
  'Europe/Lisbon' => 'Európa/Liszabon',
  'Atlantic/Azores' => 'Atlanti-óceán/Azori-szigetek',
  'Atlantic/Madeira' => 'Atlanti-óceán/Madeira',
  'Europe/Bucharest' => 'Európa/Bukarest',
  'Europe/Kaliningrad' => 'Európa/Kalinyingrád',
  'Europe/Moscow' => 'Európa/Moszkva',
  'Europe/Samara' => 'Európa/Samara',
  'Asia/Yekaterinburg' => 'Ázsia/Jekatyerinburg',
  'Asia/Omsk' => 'Ázsia/Omszk',
  'Asia/Novosibirsk' => 'Ázsia/Novoszibirszk',
  'Asia/Krasnoyarsk' => 'Ázsia/Krasznojarszk',
  'Asia/Irkutsk' => 'Ázsia/Irkutszk',
  'Asia/Yakutsk' => 'Ázsia/Jakutszk',
  'Asia/Vladivostok' => 'Ázsia/Vlagyivosztok',
  'Asia/Sakhalin' => 'Ázsia/Szahalin',
  'Asia/Magadan' => 'Ázsia/Magadan',
  'Asia/Kamchatka' => 'Ázsia/Kamcsatka',
  'Asia/Anadyr' => 'Ázsia/Anadir',
  'Europe/Belgrade' => 'Európa/Belgrád' ,
  'Europe/Madrid' =>'Európa/Madrid' ,
  'Africa/Ceuta' => 'Afrika/Ceuta',
  'Atlantic/Canary' => 'Atlanti-óceán/Kanári-szigetek',
  'Europe/Stockholm' => 'Európa/Stckholm',
  'Europe/Zurich' => 'Európa/Zürich' ,
  'Europe/Istanbul' => 'Európa/Isztambul',
  'Europe/Kiev' => 'Európa/Kijev',
  'Europe/Uzhgorod' => 'Európa/Ungvár',
  'Europe/Zaporozhye' => 'Európa/Zaporozsje',
  'Europe/Simferopol' => 'Európa/Szimferopol',
  'America/New_York' => 'Amerika/New-York',
  'America/Chicago' =>'Amerika/Chicago' ,
  'America/North_Dakota/Center' => 'Amerika/North_Dakota/központ',
  'America/Denver' => 'Amerika/Denver',
  'America/Los_Angeles' => 'Amerika/Los-Angeles',
  'America/Juneau' => 'Amerika/Juneau',
  'America/Yakutat' => 'Amerika/Yakutat',
  'America/Anchorage' => 'Amerika/Anchorage',
  'America/Nome' =>'Amerika/Nome' ,
  'America/Adak' => 'Amerika/Adak',
  'Pacific/Honolulu' => 'Csendes-óceán/Honolulu',
  'America/Phoenix' => 'Amerika/Phoenix',
  'America/Boise' => 'Amerika/Boise',
  'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
  'America/Indiana/Knox' =>  'Amerika/Indiana/Knox',
  'America/Indiana/Vevay' => 'Amerika/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'Amerika/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'Amerika/Kentucky/Monticello' ,
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
  'Atlantic/Bermuda' => 'Atlanti-óceán/Bermuda',
  'America/Cayman' => 'Amerika/Cayman',
  'America/Costa_Rica' => 'Amerika/Costa_Rica',
  'America/Havana' => 'Amerika/Havanna',
  'America/Dominica' => 'Amerika/Dominika',
  'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
  'America/El_Salvador' => 'Amerika/El_Salvador',
  'America/Grenada' => 'Amerika/Grenada',
  'America/Guadeloupe' => 'Amerika/Guadeloupe',
  'America/Guatemala' => 'Amerika/Guatemala',
  'America/Port-au-Prince' => 'Amerika/Port-au-Prince',
  'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
  'America/Jamaica' => 'Amerika/Jamaica',
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
  'America/Argentina/Buenos_Aires' => 'Amerika/Argentína/Buenos_Aires',
  'America/Argentina/Cordoba' => 'Amerika/Argentína/Cordoba',
  'America/Argentina/Tucuman' => 'Amerika/Argentína/Tucuman',
  'America/Argentina/La_Rioja' => 'Amerika/Argentína/La_Rioja',
  'America/Argentina/San_Juan' => 'Amerika/Argentína/San_Juan',
  'America/Argentina/Jujuy' => 'Amerika/Argentína/Jujuy',
  'America/Argentina/Catamarca' => 'Amerika/Argentína/Catamarca',
  'America/Argentina/Mendoza' => 'Amerika/Argentína/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'Amerika/Argentína/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'Amerika/Argentína/Ushuaia',
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
  'America/Eirunepe' => 'Amerika/Manaus',
  'America/Rio_Branco' => 'Amerika/Rio_Branco',
  'America/Santiago' => 'Amerika/Santiago',
  'Pacific/Easter' => 'Csendes-óceán/Húsvét' ,
  'America/Bogota' => 'Amerika/Bogota',
  'America/Curacao' => 'Amerika/Curacao',
  'America/Guayaquil' => 'Amerika/Guayaquil',
  'Pacific/Galapagos' => 'Csendes-óceán/Galapagos' ,
  'Atlantic/Stanley' => 'Atlanti-óceán/Stanley',
  'America/Cayenne' => 'Amerika/Cayenne',
  'America/Guyana' => 'Amerika/Guyana',
  'America/Asuncion' => 'Amerika/Asuncion',
  'America/Lima' => 'Amerika/Lima',
  'Atlantic/South_Georgia' => 'Atlanti-óceán/South_Georgia',
  'America/Paramaribo' => 'Amerika/Paramaribo',
  'America/Port_of_Spain' => 'Amerika/Port_of_Spain',
  'America/Montevideo' => 'Amerika/Montevideo',
  'America/Caracas' => 'Amerika/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Kedvencek';
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
        1 => 'Kérelem',
        2 => 'Hozzáférés',
        3 => 'Érvénytelen',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Kampány' ,
    'email' => 'Email',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Kampány' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Kampány' ,
    'email' => 'Email',
  );
$app_strings ['documentation'] = array (
    'LBL_DOCS' => 'Dokumentáció',
    'ULT' => '02_Sugar_Ultimate',
	'ENT' => '02_Sugar_Enterprise',
	'CORP' => '03_Sugar_Corporate',
	'PRO' => '04_Sugar_Professional',
	'COM' => '05_Sugar_Community_Edition'
);


// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Knowledge Base';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Vázlat';
$app_list_strings['aok_status_list']['Expired'] = 'Expired';
$app_list_strings['aok_status_list']['In_Review'] = 'Felülvizsgálat alatt';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privát';
$app_list_strings['aok_status_list']['published_public'] = 'Nyilvános';


$app_list_strings['moduleList']['Reminders'] = 'Reminders';
$app_list_strings['moduleListSingular']['Reminders'] = 'Reminder';

$app_list_strings['moduleList']['Reminders_Invitees'] = 'Reminders_Invitees';
$app_list_strings['moduleListSingular']['Reminders_Invitees'] = 'Reminder_Invitee';

$app_list_strings['moduleList']['FP_events'] = 'Események';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Helyszínek';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Meghívott';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nem hívott';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Résztvevő';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nem vesz részt';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Elfogadott';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Elutasítva';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nincs válasz';

$app_strings['LBL_STATUS_EVENT'] = 'Meghívás állapota';
$app_strings['LBL_ACCEPT_STATUS'] = 'Status elfogadva';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Oldal kijelölése';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Teljes lista';
$app_strings['LBL_LISTVIEW_NONE'] = 'Kijelölés megszüntetése';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index esemény';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Események';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Esemény frissítés';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Események';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Esemény frissítés';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array (
        'Open' => 'Opened',
        'Closed' => 'Lezárt',
    );

$app_list_strings['case_status_default_key'] = 'Új';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Új',
        'Open_Assigned' => 'Kiszignált',
        'Closed_Closed' => 'Lezárt',
        'Open_Pending Input' => 'Válaszra vár',
        'Closed_Rejected' => 'Elutasítva',
        'Closed_Duplicate' => 'Másolat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Felhasználó',
        'Account' => 'Fiók felhasználó',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'AOP alapértelmezett',
    'singleUser' => 'Egyetlen felhasználó',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Véletlen',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Jelentések';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Jelentés feltételek';
$app_list_strings['moduleList']['AOR_Charts'] = 'Jelentés diagramok';
$app_list_strings['moduleList']['AOR_Fields'] = 'Jelentés mezők';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Ütemezett jelentések';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Egyenlő';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Nem egyenlő';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Nagyobb mint';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Kisebb mint';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Nagyobb vagy egyenlő';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Kisebb vagy egyenlő';
$app_list_strings['aor_operator_list']['Contains'] = 'Tartalmazza';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Kezdődik';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'És';
$app_list_strings['aor_condition_operator_list']['OR'] = 'VAGY';
$app_list_strings['aor_condition_type_list']['Value'] = 'Érték';
$app_list_strings['aor_condition_type_list']['Field'] = 'Mező';
$app_list_strings['aor_condition_type_list']['Date'] = 'Dátum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Egyik';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Perc';
$app_list_strings['aor_date_type_list']['hour'] = 'Óra';
$app_list_strings['aor_date_type_list']['day'] = 'Nap';
$app_list_strings['aor_date_type_list']['week'] = 'Hetek';
$app_list_strings['aor_date_type_list']['month'] = 'Hónap';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Munkaórák';
$app_list_strings['aor_date_options']['now'] = 'Most';
$app_list_strings['aor_date_options']['field'] = 'Mező';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Növekvő';
$app_list_strings['aor_sort_operator']['DESC'] = 'Csökkenő';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Számlál';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Összegez';
$app_list_strings['aor_function_list']['AVG'] = 'Átlagol';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Számlál';
$app_list_strings['aor_total_options']['SUM'] = 'Összegez';
$app_list_strings['aor_total_options']['AVG'] = 'Átlagol';
$app_list_strings['aor_chart_types']['bar'] = 'Oszlopdiagram';
$app_list_strings['aor_chart_types']['line'] = 'Vonaldiagram';
$app_list_strings['aor_chart_types']['pie'] = 'Kördiagram';
$app_list_strings['aor_chart_types']['radar'] = 'Radardiagram';
$app_list_strings['aor_chart_types']['polar'] = 'Polárdiagram';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Havi';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Heti';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Napi';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktív';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inaktív';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Felhasználó';
$app_list_strings['aor_email_type_list']['Users'] = 'Felhasználók';
$app_list_strings['aor_assign_options']['all'] = 'Minden felhasználó';
$app_list_strings['aor_assign_options']['role'] = 'Minden felhasználó a szerepkörben';
$app_list_strings['aor_assign_options']['security_group'] = 'Minden felhasználó a biztonsági csoportban';
$app_list_strings['date_time_period_list']['today'] = 'Ma';
$app_list_strings['date_time_period_list']['yesterday'] = 'Tegnap';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Múlt hét';
$app_list_strings['date_time_period_list']['last_month'] = 'Előző hónap';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Aktuális negyedév';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Elmúlt negyedév';
$app_list_strings['date_time_period_list']['this_year'] = 'Aktuális év';
$app_list_strings['date_time_period_list']['last_year'] = 'Előző év';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Speciális';
$app_strings['LBL_CRON_MIN'] = 'Perc';
$app_strings['LBL_CRON_HOUR'] = 'Óra';
$app_strings['LBL_CRON_DAY'] = 'Nap';
$app_strings['LBL_CRON_MONTH'] = 'Hónap';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Napi';
$app_strings['LBL_CRON_WEEKLY'] = 'Heti';
$app_strings['LBL_CRON_MONTHLY'] = 'Havi';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Szerződések';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Számlák';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF sablonok';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Termékkategóriák';
$app_list_strings['moduleList']['AOS_Products'] = 'Termékek';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Tételek';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Tétel csoportok';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Ajánlatok';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Elemző';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Versenytárs';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Vásárló';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Befektető';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Hirdetésre jelentkező';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Kilátás';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Viszonteladó';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Más';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Vázlat';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Tárgyalás';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Teljesítve';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Várakozik';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Megerősített';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Lezárt, elfogadott';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Lezárt, elvesztett';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Lezárt, halott';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Jóváhagyott';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Nem jóváhagyott';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Elemző';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Versenytárs';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Vásárló';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Befektető';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Hirdetésre jelentkező';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Kilátás';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Viszonteladó';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Más';
$app_list_strings['invoice_status_dom']['Paid'] = 'Fizetve';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Kifizetetlen';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Sztornó';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nem számlázott';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Számlázott';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Notebookok';
$app_list_strings['product_category_dom']['Desktops'] = 'Asztali számítógépek';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Haszon';
$app_list_strings['product_type_dom']['Service'] = 'Szervíz';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Ajánlatok';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Számlák';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Szerződések';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Ajánlatok';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Számlák';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Szerződések';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Ügyfelek';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kapcsolattartók';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Érdeklődők';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nincs elkezdve';
$app_list_strings['contract_status_list']['In Progress'] = 'Folyamatban';
$app_list_strings['contract_status_list']['Signed'] = 'Aláírt';
$app_list_strings['contract_type_list']['Type'] = 'Típus';
$app_strings['LBL_GENERATE_LETTER'] = 'Levél létrehozás';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Kérem, válasszon sablont';
$app_strings['LBL_NO_TEMPLATE'] = 'HIBA\nNincs sablon.\nA PDF sablonok modulban hozhat létre egyet!';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Munkafolyamat';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Munkafolyamat feltételek';
$app_list_strings['moduleList']['AOW_Processed'] = 'Folyamat ellenőrzés';
$app_list_strings['moduleList']['AOW_Actions'] = 'Munkafolyamat események';
$app_list_strings['aow_status_list']['Active'] = 'Aktív';
$app_list_strings['aow_status_list']['Inactive'] = 'Inaktív';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Egyenlő';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Nem egyenlő';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Nagyobb mint';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Kisebb mint';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Nagyobb vagy egyenlő';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Kisebb vagy egyenlő';
$app_list_strings['aow_operator_list']['Contains'] = 'Tartalmazza';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Kezdődik';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Üres';
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
$app_list_strings['aow_process_status_list']['Complete'] = 'Befejezett';
$app_list_strings['aow_process_status_list']['Running'] = 'Futó';
$app_list_strings['aow_process_status_list']['Pending'] = 'Függőben';
$app_list_strings['aow_process_status_list']['Failed'] = 'Sikertelen';
$app_list_strings['aow_condition_operator_list']['And'] = 'És';
$app_list_strings['aow_condition_operator_list']['OR'] = 'VAGY';
$app_list_strings['aow_condition_type_list']['Value'] = 'Érték';
$app_list_strings['aow_condition_type_list']['Field'] = 'Mező';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Bármilyen változtatás';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Biztonsági csoportban';
$app_list_strings['aow_condition_type_list']['Date'] = 'Dátum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Egyik';
$app_list_strings['aow_action_type_list']['Value'] = 'Érték';
$app_list_strings['aow_action_type_list']['Field'] = 'Mező';
$app_list_strings['aow_action_type_list']['Date'] = 'Dátum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Véletlen';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Érték';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Mező';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Perc';
$app_list_strings['aow_date_type_list']['hour'] = 'Óra';
$app_list_strings['aow_date_type_list']['day'] = 'Nap';
$app_list_strings['aow_date_type_list']['week'] = 'Hetek';
$app_list_strings['aow_date_type_list']['month'] = 'Hónap';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Munkaórák';
$app_list_strings['aow_date_options']['now'] = 'Most';
$app_list_strings['aow_date_options']['today'] = 'Ma';
$app_list_strings['aow_date_options']['field'] = 'Mező';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Minden felhasználó';
$app_list_strings['aow_assign_options']['role'] = 'Minden felhasználó a szerepkörben';
$app_list_strings['aow_assign_options']['security_group'] = 'Minden felhasználó a biztonsági csoportban';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Email mentése';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Kapcsolódó mező';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Felhasználó';
$app_list_strings['aow_email_type_list']['Users'] = 'Felhasználók';
$app_list_strings['aow_email_to_list']['to'] = 'Címzett';
$app_list_strings['aow_email_to_list']['cc'] = 'Másolat';
$app_list_strings['aow_email_to_list']['bcc'] = 'Titkos másolat';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Minden tétel';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Új tételek';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Módosított tételek';
$app_list_strings['aow_run_when_list']['Always'] = 'Mindig';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projekt sablonok';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Projekt esemény sablonok';
$app_list_strings['relationship_type_list']['FS'] = 'Befejezés indítása';
$app_list_strings['relationship_type_list']['SS'] = 'Kezdés indítás';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Projekt szünidő';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kapcsolattartók';
$app_list_strings['holiday_resource_dom']['Users'] = 'Felhasználók';
$app_list_strings['duration_unit_dom']['Days'] = 'Nap';
$app_list_strings['duration_unit_dom']['Hours'] = 'Óra';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Gantt';
$app_strings['LBL_CREATE_PROJECT'] = 'Projekt létrehozása';

//gmaps
$app_strings['LBL_MAP'] = 'Térkép';
$app_strings['LBL_MAPS'] = 'Térképek';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Hosszúság';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Szélesség
';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geokód állapota';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Cím:';
$app_strings['LBL_BUG_FIX'] = 'Hibajavítás';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Térképek';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Térkép jelölő';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Térkép terület';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Térkép cím cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Mérföld';
$app_list_strings['map_unit_type_list']['km'] = 'Kilométer';

$app_list_strings['map_module_type_list']['Accounts'] = 'Ügyfelek';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kapcsolattartók';
$app_list_strings['map_module_type_list']['Cases'] = 'Esetek';
$app_list_strings['map_module_type_list']['Leads'] = 'Érdeklődők';
$app_list_strings['map_module_type_list']['Meetings'] = 'Találkozók';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Lehetőségek';
$app_list_strings['map_module_type_list']['Project'] = 'Projektek';
$app_list_strings['map_module_type_list']['Prospects'] = 'Ügyféljelöltek';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Ügyfél';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kapcsolattartó';
$app_list_strings['map_relate_type_list']['Cases'] = 'Eset';
$app_list_strings['map_relate_type_list']['Leads'] = 'Érdeklődő';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Találkozó';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Lehetőség';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekt';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Ügyféljelölt';

$app_list_strings['marker_image_list']['accident'] = 'Baleset';
$app_list_strings['marker_image_list']['administration'] = 'Adminisztráció';
$app_list_strings['marker_image_list']['agriculture'] = 'Mezőgazdaság';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Kisrepülőgépek';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Légi turizmus';
$app_list_strings['marker_image_list']['airport'] = 'Repülőtér';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteátrum';
$app_list_strings['marker_image_list']['apartment'] = 'Lakás';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvárium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Hang';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank font';
$app_list_strings['marker_image_list']['bar'] = 'Bár';
$app_list_strings['marker_image_list']['beach'] = 'Strand';
$app_list_strings['marker_image_list']['beautiful'] = 'Szép';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Kerékpár parkoló';
$app_list_strings['marker_image_list']['big_city'] = 'Nagyváros';
$app_list_strings['marker_image_list']['bridge'] = 'Híd';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Modern híd';
$app_list_strings['marker_image_list']['bus'] = 'Busz';
$app_list_strings['marker_image_list']['cable_car'] = 'Sikló';
$app_list_strings['marker_image_list']['car'] = 'Autó';
$app_list_strings['marker_image_list']['car_rental'] = 'Autókölcsönzés';
$app_list_strings['marker_image_list']['carrepair'] = 'Autójavító';
$app_list_strings['marker_image_list']['castle'] = 'Vár';
$app_list_strings['marker_image_list']['cathedral'] = 'Székesegyház';
$app_list_strings['marker_image_list']['chapel'] = 'Kápolna';
$app_list_strings['marker_image_list']['church'] = 'Templom';
$app_list_strings['marker_image_list']['city_square'] = 'Tér';
$app_list_strings['marker_image_list']['cluster'] = 'Csomópont';
$app_list_strings['marker_image_list']['cluster_2'] = '2. csomópont';
$app_list_strings['marker_image_list']['cluster_3'] = '3. csomópont';
$app_list_strings['marker_image_list']['cluster_4'] = '4. csomópont';
$app_list_strings['marker_image_list']['cluster_5'] = '5. csomópont';
$app_list_strings['marker_image_list']['coffee'] = 'Kávé';
$app_list_strings['marker_image_list']['community_centre'] = 'Közösségi központ';
$app_list_strings['marker_image_list']['company'] = 'Vállalat';
$app_list_strings['marker_image_list']['conference'] = 'Konferencia';
$app_list_strings['marker_image_list']['construction'] = 'Építőipar';
$app_list_strings['marker_image_list']['convenience'] = 'Pihenő';
$app_list_strings['marker_image_list']['court'] = 'Bíróság';
$app_list_strings['marker_image_list']['cruise'] = 'Hajókázás';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Valutaváltó';
$app_list_strings['marker_image_list']['customs'] = 'Vám';
$app_list_strings['marker_image_list']['cycling'] = 'Kerékpározás';
$app_list_strings['marker_image_list']['dam'] = 'Gát';
$app_list_strings['marker_image_list']['days_dim'] = 'Napok -Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Napok - Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Játéknapok';
$app_list_strings['marker_image_list']['days_jue'] = 'Napok - Cs';
$app_list_strings['marker_image_list']['days_lun'] = 'Napok - Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Napok - Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Napok - Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Napok - Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Nap alatt';
$app_list_strings['marker_image_list']['days_qui'] = 'Napok - Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Napok - Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Napok - Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Napok - seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Napok - Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Napok - Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Napok - Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Napok - Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Fogorvos';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Áruház';
$app_list_strings['marker_image_list']['disability'] = 'Fogyatékosság';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Mozgássérült parkoló';
$app_list_strings['marker_image_list']['doctor'] = 'Orvos';
$app_list_strings['marker_image_list']['dog_leash'] = 'Kutya póráz';
$app_list_strings['marker_image_list']['down'] = 'Le';
$app_list_strings['marker_image_list']['down_left'] = 'Le balra';
$app_list_strings['marker_image_list']['down_right'] = 'Le jobbra';
$app_list_strings['marker_image_list']['down_then_left'] = 'Le majd balra';
$app_list_strings['marker_image_list']['down_then_right'] = 'Le majd jobbra';
$app_list_strings['marker_image_list']['drugs'] = 'Kábítószer';
$app_list_strings['marker_image_list']['elevator'] = 'Lift';
$app_list_strings['marker_image_list']['embassy'] = 'Nagykövetség';
$app_list_strings['marker_image_list']['expert'] = 'Szakértő';
$app_list_strings['marker_image_list']['factory'] = 'Gyár';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Kőomlás';
$app_list_strings['marker_image_list']['fast_food'] = 'Gyorsétterem';
$app_list_strings['marker_image_list']['festival'] = 'Fesztivál';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Erdő';
$app_list_strings['marker_image_list']['fountain'] = 'Szökőkút';
$app_list_strings['marker_image_list']['friday'] = 'péntek';
$app_list_strings['marker_image_list']['garden'] = 'Kert';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzinkút';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzír';
$app_list_strings['marker_image_list']['gifts'] = 'Ajándékok';
$app_list_strings['marker_image_list']['gourmet'] = 'Ínyenc';
$app_list_strings['marker_image_list']['grocery'] = 'Élelmiszerbolt';
$app_list_strings['marker_image_list']['hairsalon'] = 'Fodrászat';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Országút';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Történelmi negyed';
$app_list_strings['marker_image_list']['home'] = 'Kezdőlap';
$app_list_strings['marker_image_list']['hospital'] = 'Kórház';
$app_list_strings['marker_image_list']['hostel'] = 'Diákszálló';
$app_list_strings['marker_image_list']['hotel'] = 'Szálloda';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Szálláshely 1 csillag';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 csillag';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 csillag';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 csillag';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 csillag';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Bíróság';
$app_list_strings['marker_image_list']['lake'] = 'Tó';
$app_list_strings['marker_image_list']['laundromat'] = 'Önkiszolgáló mosoda';
$app_list_strings['marker_image_list']['left'] = 'Balra';
$app_list_strings['marker_image_list']['left_then_down'] = 'Balra majd le';
$app_list_strings['marker_image_list']['left_then_up'] = 'Balra majd fel';
$app_list_strings['marker_image_list']['library'] = 'Könyvtár';
$app_list_strings['marker_image_list']['lighthouse'] = 'Világítótorony';
$app_list_strings['marker_image_list']['liquor'] = 'Ital';
$app_list_strings['marker_image_list']['lock'] = 'Zár';
$app_list_strings['marker_image_list']['main_road'] = 'Főútvonal';
$app_list_strings['marker_image_list']['massage'] = 'Masszázs';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobil átjátszó torony';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern torony';
$app_list_strings['marker_image_list']['monastery'] = 'Kolostor';
$app_list_strings['marker_image_list']['monday'] = 'hétfő';
$app_list_strings['marker_image_list']['monument'] = 'Emlékmű';
$app_list_strings['marker_image_list']['mosque'] = 'Mecset';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorkerékpár';
$app_list_strings['marker_image_list']['museum'] = 'Múzeum';
$app_list_strings['marker_image_list']['music_live'] = 'Élőzene';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Olajszivattyú';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palota';
$app_list_strings['marker_image_list']['panoramic'] = 'Körképszerű';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Sátatér';
$app_list_strings['marker_image_list']['parking'] = 'Parkoló';
$app_list_strings['marker_image_list']['photo'] = 'Fénykép';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Nem látogatott helyek';
$app_list_strings['marker_image_list']['places_visited'] = 'Meglátogatott helyek';
$app_list_strings['marker_image_list']['playground'] = 'Játszótér';
$app_list_strings['marker_image_list']['police'] = 'Rendőrség';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Postai';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Távvezeték tartó oszlop';
$app_list_strings['marker_image_list']['power_plant'] = 'Erőmű';
$app_list_strings['marker_image_list']['power_substation'] = 'Elektromos alállomás';
$app_list_strings['marker_image_list']['public_art'] = 'Kiállítás';
$app_list_strings['marker_image_list']['rain'] = 'Eső';
$app_list_strings['marker_image_list']['real_estate'] = 'Ingatlan';
$app_list_strings['marker_image_list']['regroup'] = 'Újraosztályoz';
$app_list_strings['marker_image_list']['resort'] = 'Erőforrás';
$app_list_strings['marker_image_list']['restaurant'] = 'Étterem';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrikai étterem';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Grillező';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Büfé';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Kínai étterem';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Halas étterem';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Hal sütöde';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Ínyenc étterem';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Görög étterem';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indiai étterem';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Olasz étterem';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japán étterem';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Koreai étterem';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Mediterrán étterem';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Mexikói étterem';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantikus étterem';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Thai étterem';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Török étterem';
$app_list_strings['marker_image_list']['right'] = 'Jobb';
$app_list_strings['marker_image_list']['right_then_down'] = 'Jobb majd le';
$app_list_strings['marker_image_list']['right_then_up'] = 'Jobb majd fel';
$app_list_strings['marker_image_list']['satursday'] = 'Szombat';
$app_list_strings['marker_image_list']['school'] = 'Iskola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Bevásárló központ';
$app_list_strings['marker_image_list']['shore'] = 'Part';
$app_list_strings['marker_image_list']['sight'] = 'Látvány';
$app_list_strings['marker_image_list']['small_city'] = 'Kisváros';
$app_list_strings['marker_image_list']['snow'] = 'Hó';
$app_list_strings['marker_image_list']['spaceport'] = 'Űrkikötő';
$app_list_strings['marker_image_list']['speed_100'] = 'Sebesség 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Sebesség 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Sebesség 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Sebesség 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Sebesség 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Sebesség 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Sebesség 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Sebesség 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Sebesség 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Sebesség 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Sebesség 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Sebesség 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Sebesség csúcs';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Szobor';
$app_list_strings['marker_image_list']['steam_train'] = 'Gőzmozdony';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Jelzőlámpa';
$app_list_strings['marker_image_list']['subway'] = 'Metró';
$app_list_strings['marker_image_list']['sun'] = 'v';
$app_list_strings['marker_image_list']['sunday'] = 'vasárnap';
$app_list_strings['marker_image_list']['supermarket'] = 'Szupermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Zsinagóga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiút';
$app_list_strings['marker_image_list']['teahouse'] = 'Teaház';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu templom';
$app_list_strings['marker_image_list']['terrace'] = 'Terasz';
$app_list_strings['marker_image_list']['text'] = 'Szöveg';
$app_list_strings['marker_image_list']['theater'] = 'Színház';
$app_list_strings['marker_image_list']['theme_park'] = 'Vidámpark';
$app_list_strings['marker_image_list']['thursday'] = 'csütörtök';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Autópálya pihenő';
$app_list_strings['marker_image_list']['tower'] = 'Torony';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Közlekedési kamera';
$app_list_strings['marker_image_list']['train'] = 'Vonat';
$app_list_strings['marker_image_list']['tram'] = 'Villamos';
$app_list_strings['marker_image_list']['truck'] = 'Teherautó';
$app_list_strings['marker_image_list']['tuesday'] = 'kedd';
$app_list_strings['marker_image_list']['tunnel'] = 'Alagút';
$app_list_strings['marker_image_list']['turn_left'] = 'Fordulás balra';
$app_list_strings['marker_image_list']['turn_right'] = 'Jobbra';
$app_list_strings['marker_image_list']['university'] = 'Egyetem';
$app_list_strings['marker_image_list']['up'] = 'Fel';
$app_list_strings['marker_image_list']['up_left'] = 'Fordulás balra';
$app_list_strings['marker_image_list']['up_right'] = 'Fordulás jobbra';
$app_list_strings['marker_image_list']['up_then_left'] = 'Fel majd balra';
$app_list_strings['marker_image_list']['up_then_right'] = 'Fel majd jobbra';
$app_list_strings['marker_image_list']['vespa'] = 'Segédmotoros kerékpár';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Víz';
$app_list_strings['marker_image_list']['waterfall'] = 'Vízesés';
$app_list_strings['marker_image_list']['watermill'] = 'Vizimalom';
$app_list_strings['marker_image_list']['waterpark'] = 'Vizipark';
$app_list_strings['marker_image_list']['watertower'] = 'Vizitorony';
$app_list_strings['marker_image_list']['wednesday'] = 'szerda';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Szélerőmű';
$app_list_strings['marker_image_list']['windmill'] = 'Szélmalom';
$app_list_strings['marker_image_list']['winery'] = 'Pincészet';
$app_list_strings['marker_image_list']['work_office'] = 'Munkahely';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Világörökség';
$app_list_strings['marker_image_list']['zoo'] = 'Állatkert';


//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Irodán kívül';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Találkozón';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Átütemezés';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Kérem adja meg az átütemezés adatait';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Dátum';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Indíték:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Valós dátumot adjon meg!';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Válasszon indítékot!';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Átütemezés';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Hívási kísérletek története';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Hívási kísérletek';

//SecurityGroups
$app_list_strings["moduleList"]["SecurityGroups"] = 'Biztonsági Csoportok Kezelése';
$app_strings['LBL_LOGIN_AS'] = "Belépés mint ";
$app_strings['LBL_LOGOUT_AS'] = "Kilépés mint ";
$app_strings['LBL_SECURITYGROUP'] = 'Biztonsági Csoportok';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook felhasználó';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter felhasználó';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed részletek';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Szűrő';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Ügyfél létrehozás';
$app_strings['LBL_QUICK_CONTACT'] = 'Kapcsolattartó létrehozása';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Lehetőség létrehozása';
$app_strings['LBL_QUICK_LEAD'] = 'Érdeklődő létrehozása';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Dokumentum létrehozása';
$app_strings['LBL_QUICK_CALL'] = 'Hívásnapló';
$app_strings['LBL_QUICK_TASK'] = 'Feladat létrehozása';
$app_strings['LBL_COLLECTION_TYPE'] = 'Típus';

$app_strings['LBL_ADD_TAB'] = 'Fül hozzáadása';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Dashboard';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Add meg a műszerfal nevét:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Válassza ki az oszlopok számát';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Biztos benne, hogy törli ';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'Műszerfal?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Műszerfal hozzáadás';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Aktuális műszerfal törlése';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Műszerfal átnevezése';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Fedezze fel a SuiteCRM-et!';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Feladatok', 'Meetings' => 'Találkozók', 'Calls' => 'Hívások', 'Notes' => 'Megjegyzések', 'Emails' => 'Emailek' );

?>
