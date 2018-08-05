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
  'language_pack_name' => 'Dansk (Denmark) - da_DK',
  'moduleList' =>
  array (
    'Home' => 'Hjem',
    'Contacts' => 'Kontakter',
    'Accounts' => 'Kunder',
    'Opportunities' => 'Muligheder',
    'Cases' => 'Sager',
    'Notes' => 'Noter',
    'Calls' => 'Opkald',
    'Emails' => 'Emails',
    'Meetings' => 'Møder',
    'Tasks' => 'Opgaver',
    'Calendar' => 'Kalender',
    'Leads' => 'Emner',
    'Currencies' => 'Valutaer',
    'Activities' => 'Aktiviteter',
    'Bugs' => 'Fejlrapport',
    'Feeds' => 'RSS',
    'iFrames'=>'Portal',
    'TimePeriods'=>'Time Periods',
    'TaxRates'=>'Tax Rates',
    'ContractTypes' => 'Kontrakttyper',
    'Schedulers'=>'Scheduler',
    'Project'=>'Projekter',
    'ProjectTask'=>'Projektopgaver',
    'Campaigns'=>'Kampagner',
    'CampaignLog'=>'Kampagne Log',
    'Documents'=>'Dokumenter',
    'DocumentRevisions'=>'Dokument revisioner',
    'Connectors'=>'Forbindelser',
    'Roles'=>'Roller',
    'Notifications'=>'Notifikationer',
    'Sync'=>'Sync',
    'Users' => 'Users',
    'Employees' => 'Medarbejdere',
    'Administration' => 'Administration',
    'ACLRoles' => 'Roller',
    'InboundEmail' => 'Email',
    'Releases' => 'Releases',
    'Prospects' => 'Målgrupper',
    'Queues' => 'Køer',
    'EmailMarketing' => 'Email Marketing',
    'EmailTemplates' => 'Email Skabeloner',
    'SNIP' => "Email Archiving",
    'ProspectLists' => 'Målgruppeliste',
    'SavedSearch' => 'Gemte søgninger',
    'UpgradeWizard' => 'Guiden Opgradering',
    'Trackers' => 'Trackers',
    'TrackerPerfs' => 'Sporingsperformance',
    'TrackerSessions' => 'Sporingssessioner',
    'TrackerQueries' => 'Sporingsforespørgsler',
    'FAQ' => 'FAQ',
    'Newsletters' => 'Nyhedsbrev',
    'SugarFeed'=>'SuiteCRM Feed',
    'KBDocuments' => 'Knowledge Base',
  'SugarFavorites'=>'SuiteCRM Favorites',

    'OAuthKeys' => 'OAuth Consumer Keys',
    'OAuthTokens' => 'OAuth Tokens',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Hjem',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Contakten',
    'Accounts' => 'Kunder',
    'Opportunities' => 'Muligheder',
    'Cases' => 'Sager',
    'Notes' => 'Noter',
    'Calls' => 'Opkald',
    'Emails' => 'Emails',
    'Meetings' => 'Møder',
    'Tasks' => 'Opgaver',
    'Calendar' => 'Kalender',
    'Leads' => 'Emner',
    'Activities' => 'Aktiviteter',
    'Bugs' => 'Fejlrapporter',
    'KBDocuments' => 'Knowledge Base',
    'Feeds' => 'RSS',
    'iFrames'=>'Min Portal',
    'TimePeriods'=>'Tidsperioder',
    'Project'=>'Projekter',
    'ProjectTask'=>'Projektopgaver',
    'Prospects' => 'Målgrupper',
    'Campaigns'=>'Kampagner',
    'Documents'=>'Dokumenter',
    'SugarFollowing'=>'SuiteCRM Following',
    'Sync'=>'Sync',
    'Users' => 'Brugere',
  'SugarFavorites'=>'SuiteCRM Favorites'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Yes',
    '2'=>'Nej',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Rådgiver',
    'Competitor' => 'Konkurrent',
    'Customer' => 'Kunde',
    'Integrator' => 'Integrator',
    'Investor' => 'Investor',
    'Partner' => 'Partner',
    'Press' => 'Presse',
    'Prospect' => 'Prospekt',
    'Reseller' => 'Forhandler',
    'Other' => 'Andre',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Beklædning',
    'Banking' => 'Bank',
    'Biotechnology' => 'Bioteknologi',
    'Chemicals' => 'Kemi',
    'Communications' => 'Kommunikation',
    'Construction' => 'Konstruktion',
    'Consulting' => 'Konsulent',
    'Education' => 'Uddannelse',
    'Electronics' => 'Elektronik',
    'Energy' => 'Energi',
    'Engineering' => 'Rådgivning',
    'Entertainment' => 'Underholdning',
    'Environmental' => 'Miljø',
    'Finance' => 'Finans',
    'Government' => 'Offentlig',
    'Healthcare' => 'Sundhed',
    'Hospitality' => 'Hotel og ophold',
    'Insurance' => 'Forsikring',
    'Machinery' => 'Maskiner',
    'Manufacturing' => 'Produktion',
    'Media' => 'Medie',
    'Not For Profit' => 'Non-profit',
    'Recreation' => 'Rekreation',
    'Retail' => 'Detail',
    'Shipping' => 'Fragt',
    'Technology' => 'Teknologi',
    'Telecommunications' => 'Telekommunikation',
    'Transportation' => 'Transport',
    'Utilities' => 'Offentligselskab',
    'Other' => 'Andre',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Kold canvas',
    'Existing Customer' => 'Eksisterende kunde',
    'Self Generated' => 'Selvgenereret',
    'Employee' => 'Medarbejder',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Direct Mail' => 'Direct Mail',
    'Conference' => 'Konference',
    'Trade Show' => 'Udstilling',
    'Web Site' => 'Hjemmeside',
    'Word of mouth' => 'Mund-til-mund',
    'Email' => 'Emails',
    'Campaign'=>'Kampagne',
    'Other' => 'Andre',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Eksisterende forretning',
    'New Business' => 'Ny forretning',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Omsætning',
    'Investment'=>'Investering',
    'Expected_Revenue'=>'Forventet omsætning',
    'Budget'=>'Budget',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Primær beslutningstager',
    'Business Decision Maker' => 'Forretningsbeslutningstager',
    'Business Evaluator' => 'Forretningsrådgiver',
    'Technical Decision Maker' => 'Teknisk beslutningstager',
    'Technical Evaluator' => 'Teknisk rådgiver',
    'Executive Sponsor' => 'Ledelse',
    'Influencer' => 'Meningsdanner',
    'Other' => 'Andre',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Primær kontakt',
    'Alternate Contact' => 'Alternativ kontakt',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => 'Netto 15 dage',
    'Net 30' => 'Netto 30 dage',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'elasticsearch'
  ),
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Prospekt',
    'Qualification' => 'Kvalifikation',
    'Needs Analysis' => 'Behov for analyse',
    'Value Proposition' => 'Værdi',
    'Id. Decision Makers' => 'Beslutning',
    'Perception Analysis' => 'Analyse',
    'Proposal/Price Quote' => 'Tilbud',
    'Negotiation/Review' => 'Forhandling',
    'Closed Won' => 'Lukket og vundet',
    'Closed Lost' => 'Lukket og tabt',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Udkast',
    'Negotiation' => 'Forhandling',
    'Delivered' => 'Leveret',
    'On Hold' => 'På hold',
    'Confirmed' => 'Bekræftet',
    'Closed Accepted' => 'Lukket og accepteret',
    'Closed Lost' => 'Lukket og tabt',
    'Closed Dead' => 'Lukket og død',
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
    'Call' => 'Opkald',
    'Meeting' => 'Møde',
    'Task' => 'Opgave',
    'Email' => 'Emails',
    'Note' => 'Noter',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Hr.',
        'Ms.' => 'Frøken.',
        'Mrs.' => 'Fru.',
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

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => 'Høj',
    'Medium' => 'Medium',
    'Low' => 'Lav',
  ),
  'task_status_default' => 'Ikke startet',
  'task_status_dom' =>
  array (
    'Not Started' => 'Ikke startet',
    'In Progress' => 'I gang',
    'Completed' => 'Afsluttet',
    'Pending Input' => 'Afventer input',
    'Deferred' => 'Aflyst',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Planlagt',
    'Held' => 'Afholdt',
    'Not Held' => 'Ikke afholdt',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Andre',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Planlagt',
    'Held' => 'Afholdt',
    'Not Held' => 'Ikke afholdt',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Indgående',
    'Outbound' => 'Udgående',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Ny',
    'Assigned' => 'Tildelt',
    'In Process' => 'I gang',
    'Converted' => 'Konverteret',
    'Recycled' => 'Genbrugt',
    'Dead' => 'Død',
  ),
   'gender_list' =>
  array (
    'male' => 'Mand',
    'female' => 'Kvinde',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Ny',
  'case_status_dom' =>
  array (
    'New' => 'Ny',
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'Pending Input' => 'Afventer input',
    'Rejected' => 'Afvist',
    'Duplicate' => 'Kopi',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Høj',
    'P2' => 'Medium',
    'P3' => 'Lav',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Almindelig bruger',
    'Administrator' => 'Administrator',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Aktiv',
    'Terminated' => 'Stoppet',
    'Leave of Absence' => 'Fravær',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Høj',
        'Medium' => 'Medium',
        'Low' => 'Lav',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array (
        'Not Started' => 'Ikke startet',
        'In Progress' => 'I gang',
        'Completed' => 'Afsluttet',
        'Pending Input' => 'Afventer input',
        'Deferred' => 'Aflyst',
    ),
    'project_task_utilization_options' => array (
        '0' => 'ingen',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Udkast',
        'In Review' => 'Til gennemsyn',
        'Underway' => 'Underway',
        'On_Hold' => 'På hold',
        'Completed' => 'Afsluttet',
    ),
    'project_status_default' => 'Udkast',

    'project_duration_units_dom' => array (
        'Days' => 'Dage',
        'Hours' => 'Timer',
    ),

    'project_priority_options' => array (
        'High' => 'Høj',
        'Medium' => 'Medium',
        'Low' => 'Lav',
    ),
    'project_priority_default' => 'Medium',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Kunder',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Kunder',
    'Opportunities' => 'Muligheder',
    'Cases' => 'Sager',
    'Leads' => 'Emner',
    'Contacts' => 'Contakten', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Fejlrapporter',
    'Project' => 'Projekter',

    'Prospects' => 'Målgrupper',
    'ProjectTask' => 'Projektopgaver',


    'Tasks' => 'Opgaver',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Kunder',
    'Contacts' => 'Contakten',
    'Opportunities' => 'Muligheder',
    'Tasks' => 'Opgaver',
    'Emails' => 'Emails',

    'Bugs' => 'Fejlrapporter',
    'Project' => 'Projekter',
    'ProjectTask' => 'Projektopgaver',
    'Prospects' => 'Målgrupper',
    'Cases' => 'Sager',
    'Leads' => 'Emner',

    'Meetings' => 'Møder',
    'Calls' => 'Opkald',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Kunder',
    'Contacts' => 'Contakten',
    'Tasks' => 'Opgaver',
    'Opportunities' => 'Muligheder',



    'Bugs' => 'Fejlrapporter',
    'Cases' => 'Sager',
    'Leads' => 'Emner',

    'Project' => 'Projekter',
    'ProjectTask' => 'Projektopgaver',

    'Prospects' => 'Målgrupper',

  ),

  'issue_priority_default_key' => 'Medium',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Haster',
    'High' => 'Høj',
    'Medium' => 'Medium',
    'Low' => 'Lav',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Accepteret',
    'Duplicate' => 'Kopi',
    'Closed' => 'Lukket',
    'Out of Date' => 'Udløbet',
    'Invalid' => 'Ugyldig',
  ),

  'issue_status_default_key' => 'Ny',
  'issue_status_dom' =>
  array (
    'New' => 'Ny',
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'Pending' => 'Afventer',
    'Rejected' => 'Afvist',
  ),

  'bug_priority_default_key' => 'Medium',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Haster',
    'High' => 'Høj',
    'Medium' => 'Medium',
    'Low' => 'Lav',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Accepteret',
    'Duplicate' => 'Kopi',
    'Fixed' => 'Løst',
    'Out of Date' => 'Udløbet',
    'Invalid' => 'Ugyldig',
    'Later' => 'Senere',
  ),
  'bug_status_default_key' => 'Ny',
  'bug_status_dom' =>
  array (
    'New' => 'Ny',
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'Pending' => 'Afventer',
    'Rejected' => 'Afvist',
  ),
   'bug_type_default_key' => 'Fejlrapporter',
  'bug_type_dom' =>
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Funktion',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Administration',
    'Product' => 'Produkt',
    'User' => 'Bruger',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Intern',
    'Forum' => 'Forum',
    'Web' => 'Internettet',
    'InboundEmail' => 'Emails'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Kunder',
    'Activities' => 'Aktiviteter',
    'Bugs' => 'Fejlrapport',
    'Calendar' => 'Kalender',
    'Calls' => 'Opkald',
    'Campaigns' => 'Kampagner',
    'Cases' => 'Sager',
    'Contacts' => 'Kontakter',
    'Currencies' => 'Valuta',
  'Dashboard' => 'Dashboard',
  'Documents' => 'Dokumenter',
    'Emails' => 'Emails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Prognoser',
    'Help' => 'Hjælp',
    'Home' => 'Hjem',
  'Leads' => 'Emner',
  'Meetings' => 'Møder',
    'Notes' => 'Noter',
    'Opportunities' => 'Muligheder',
    'Outlook Plugin' => 'Outlook Plugin',
    'Projects' => 'Projekter',
    'Quotes' => 'Tilbud',
    'Releases' => 'Udgivelser',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Opgradering',
    'Users' => 'Users',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Planlagt',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Afsluttet',
        'In Queue' => 'I kø',
        'Sending'=> 'Sender',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telesalg',
        'Mail' => 'Brev',
        'Email' => 'Emails',
        'Print' => 'Print',
        'Web' => 'Internettet',
        'Radio' => 'Radio',
        'Television' => 'Television',
        'NewsLetter' => 'Nyhedsbrev',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Ugentlig',
        'Monthly' => 'Månedlig',
        'Quarterly' => 'Kvartal',
        'Annually' => 'Årlig',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"January",
                '2'=>"Februar",
                '3'=>"Marts",
                '4'=>"April",
                '5'=>"Maj",
                '6'=>"Juni",
                '7'=>"Juli",
                '8'=>"August",
                '9'=>"September",
                '10'=>"Oktober",
                '11'=>"November",
                '12'=>"December",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Jan",
                '2'=>"Feb",
                '3'=>"Mar",
                '4'=>"Apr",
                '5'=>"Maj",
                '6'=>"Jun",
                '7'=>"Jul",
                '8'=>"Aug",
                '9'=>"Sep",
                '10'=>"Okt",
                '11'=>"Nov",
                '12'=>"Dec",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Søndag",
                '2'=>"Mandag",
                '3'=>"Tirsdag",
                '4'=>"Onsdag",
                '5'=>"Torsdag",
                '6'=>"Fredag",
                '7'=>"Lørdag",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"Søn",
                '2'=>"Man",
                '3'=>"Tirs",
                '4'=>"Ons",
                '5'=>"Tors",
                '6'=>"Fre",
                '7'=>"Lør",
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
                'tabular'=>'Rækker og kolonner',
                'summary'=>'Summering',
                'detailed_summary'=>'Summering med detaljer',
                'Matrix' => 'Matrix',
        ),


    'dom_email_types'=> array(
        'out'       => 'Sendt',
        'archived'  => 'Arkiveret',
        'draft'     => 'Udkast',
        'inbound'   => 'Indgående',
        'campaign'  => 'Kampagne'
    ),
    'dom_email_status' => array (
        'archived'  => 'Arkiveret',
        'closed'    => 'Lukket',
        'draft'     => 'Udkast',
        'read'      => 'Læst',
        'replied'   => 'Besvaret',
        'sent'      => 'Sendt',
        'send_error'=> 'Sendt med fejl',
        'unread'    => 'Ej læst',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Arkiveret',
    ),

    'dom_email_server_type' => array(   ''          => '--Ingen--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => 'Opret [alle]',
                                     'createcase'  => 'Opret sag',
                                     'bounce'   => 'Afvisningshåndtering',
    ),
    'dom_email_distribution'=> array(''             => '--Ingen--',
                                     'direct'       => 'Direkte tildelt',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Mindst-travl',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Mindst-travl',
    ),
    'dom_email_errors'      => array(1 => 'Only select one user when Direct Assigning items.',
                                     2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Ja',
                                     'bool_false' => 'Nej',
    ),
    'dom_int_bool'          => array(1 => 'Ja',
                                     0 => 'Nej',
    ),
    'dom_switch_bool'       => array ('on' => 'På',
                                        'off' => 'Nej',
                                        '' => '--Ingen--', ),

    'dom_email_link_type'   => array(   'sugar'     => 'SuiteCRM Email Client',
                                        'mailto'    => 'Ekstern Mail klient'),


    'dom_email_editor_option'=> array(  ''          => '--Ingen--',
                                        'html'      => 'HTML-e-mail',
                                        'plain'     => 'E-mail i almindeligt tekstformat'),

    'schedulers_times_dom'  => array(   'not run'       => 'Past Run Time, Not Executed',
                                        'ready'         => 'Klar',
                                        'in progress'   => 'I gang',
                                        'failed'        => 'Mislykket',
                                        'completed'     => 'Afsluttet',
                                        'no curl'       => 'Ikke kørt: Der findes ingen cURL',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Minutter',
        'hour' => 'Timer',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Direkte',
    'Rollup' => 'Opløft',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Markedsføring',
    'Knowledege Base' => 'Knowledge Base',
    'Sales' => 'Salg',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Markedsføringsmateriale',
    'Product Brochures' => 'Produktbrochurer',
    'FAQ' => 'FAQ',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Aktiv',
    'Draft' => 'Udkast',
    'FAQ' => 'FAQ',
    'Expired' => 'Udløbet',
    'Under Review' => 'Til gennemsyn',
    'Pending' => 'Afventer',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Brevfletning',
    'eula'=>'Slutbrugerlicensaftale',
    'nda'=>'Hemmeligholdelsesaftale',
    'license'=>'Licensaftale',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Accepteret',
    'decline' => 'Afvist',
    'tentative' => 'Foreløbig',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Accepteret',
    'decline' => 'Declined',
    'tentative' => 'Foreløbig',
    'none'      => 'Ingen',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => '--Ingen--',
    	'Daily'	=> 'Daily',
	'Weekly' => 'Ugentlig',
	'Monthly' => 'Månedlig',
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
    	'' => '--Ingen--',
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
    'default' => 'Standard',
    'seed' => 'Spire',
    'exempt_domain' => 'Suppression Liste - efter Domain',
    'exempt_address' => 'Suppression Liste - efter Email Adresse',
    'exempt' => 'Suppression Liste - efter Id',
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
    'active'=>'Aktiv',
    'inactive'=>'Inaktiv'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Meddelelse afsendt',
    'send error'=>'Meddelelse mislykkes',
    'invalid email'=>'Ugyldig email',
    'link'=>'Klik Link',
    'viewed'=>'Set meddelelse',
    'removed'=>'Opted Out',
    'lead'=>'Emner oprettet',
    'contact'=>'Opret kontakt',
    'blocked'=>'Undertrykt af adresse eller domain',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Kontakter',
    'Users'=>'Users',
    'Prospects'=>'Målgrupper',
    'Leads'=>'Emner',
    'Accounts'=>'Kunder',
  ),
  'merge_operators_dom' => array (
    'like'=>'Indeholder',
    'exact'=>'Præcis',
    'start'=>'Starter med',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Ja',
    'false'=>'Nej',
    'required'=>'Obligatorisk',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Slukket',
        '1'=>'Low Boost',
        '2'=>'Medium Boost',
        '3'=>'High Boost',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Slukket',
        1=>'Tændt',
  ),

  'navigation_paradigms' => array(
        'm'=>'Moduler',
        'gm'=>'Grupperet moduler',
  ),


    'projects_priority_options' => array (
        'high'      => 'Høj',
        'medium'    => 'Medium',
        'low'       => 'Lav',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Ikke startet',
        'inprogress'    => 'I gang',
        'completed'     => 'Afsluttet',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Udvid',
        'collapselegend'    => 'Sammentræk',
        'clickfordrilldown' => 'Klik for detaljer',
        'drilldownoptions'  => 'Muligheder',
        'detailview'        => 'Detalje oversigt...',
        'piechart'          => 'Lagkage',
        'groupchart'        => 'Gruppe',
        'stackedchart'      => 'Stabel',
        'barchart'      => 'Søjlediagram',
        'horizontalbarchart'   => 'Liggende søjlediagram',
        'linechart'         => 'Linje',
        'noData'            => 'Data findes ikke',
        'print'       => 'Udskriv',
        'pieWedgeName'      => 'sektioner',
    ),
    'release_status_dom' =>
    array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Enkelt anførselstegn "\'"',
        '"' => 'Dobbelt anførselstegn "\'\'"',
        '' => '--Ingen--',
        'other' => 'Andre:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Andre:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Nyt vindue',
        '_self' => 'samme vindue',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => 'Auto-refresh ikke',
        '30'  => 'Every 30 seconds',
        '60'  => 'Hver minut',
        '180'   => 'Hver 3. minut',
        '300'   => 'Hver 5 . minut',
        '600'   => 'Hvar 10. minut',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Aldrig',
        '30'  => 'Hver 30. sekund',
        '60'  => 'Hver minut',
        '180'   => 'Hver 3. minut',
        '300'   => 'Hver 5 . minut',
        '600'   => 'Hvar 10. minut',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'Lig med',
    'not_equal' => 'Ikke lig med',
    'greater_than' => 'Større end',
    'less_than' => 'Mindre end',
    'last_7_days' => 'Sidste 7 dage',
    'next_7_days' => 'Næste 7 dage',
    'last_30_days' => 'Sidste 30 dage',
    'next_30_days' => 'Næste 30 dage',
    'last_month' => 'Sidste måned',
    'this_month' => 'Denne måned',
    'next_month' => 'Næste måned',
    'last_year' => 'Sidste år',
    'this_year' => 'Dette pr',
    'next_year' => 'Næste år',
    'between' => 'Er mellem',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'Lig med',
    'not_equal' => 'Does Not Equal',
    'greater_than' => 'Greater Than',
    'greater_than_equals' => 'Større end eller lig med',
    'less_than' => 'Less Than',
    'less_than_equals' => 'Mindre ned eller lig med',
    'between' => 'Er mellem',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Copy',
        'move' => 'Move',
        'donothing' => 'Do Nothing',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Næste',
  'LBL_TOUR_SKIP' => 'Spring over',
  'LBL_TOUR_BACK' => 'Tilbage',
  'LBL_TOUR_CLOSE' => 'Luk',
  'LBL_TOUR_TAKE_TOUR' => 'Take the tour',
  'LBL_MY_AREA_LINKS' => 'My area links: ' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Velkommen' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Advanceret søgning' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'More Detail' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Edit Inline' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Se' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Søg' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Slet' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Tilføj' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Kolonne' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 Columns' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 Kolonner' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Advanceret søgning' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Tilføj' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Hide/Show' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Slet' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Tilføj' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Ryd [Alt+C]' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Slet' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Tilføj' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Company logo' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Kalender' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Advanceret',
    'LBL_BASIC' => 'Grundlæggende',
    'LBL_MODULE_FILTER' => 'Filter By',
    'LBL_CONNECTORS_POPUPS'=>'Connectors Popups',
    'LBL_CLOSEINLINE'=>'Luk',
    'LBL_EDITINLINE'=>'Rediger',
    'LBL_VIEWINLINE'=>'Se',
    'LBL_INFOINLINE'=>'Info',
    'LBL_POWERED_BY_SUGARCRM' => 'Powered by SugarCRM',
    'LBL_PRINT' => 'Print',
    'LBL_HELP' => 'Hjælp',
    'LBL_ID_FF_SELECT' => 'Vælg [Alt+T]',
    'DEFAULT'                              => 'Grundlæggende',
    'LBL_SORT'                              => 'Sort',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Tilføj Server...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'Enable SMTP over SSL or TLS?',
    'LBL_NO_ACTION'                         => 'There is no action by that name.',
    'LBL_NO_DATA'                           => 'No Data',
    'LBL_ROUTING_ADD_RULE'                  => 'Tilføj regel',
    'LBL_ROUTING_ALL'                       => 'Alle',
    'LBL_ROUTING_ANY'                       => 'Enhver',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Afbryd',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Gem regel',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Kopier brev',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Delete SuiteCRM Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Slet fil',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Slet email',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Videresend email',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Marker email',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Marker som læst',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Marker som ej læst',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Flyt email',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Udfør følgende aktioner',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Besvar email',

    'LBL_ROUTING_CHECK_RULE'                => 'Der komme en fejl:\n',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Check alle felter som er markeret.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Er du sikker på, at du ønsker at slette denne regel?\n Dette kan ikke ske.',

    'LBL_ROUTING_FLAGGED'                   => 'flag er sat',
    'LBL_ROUTING_FORM_DESC'                 => 'Gemte regler er aktive.',
    'LBL_ROUTING_FW'                        => 'VS: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Regler',
    'LBL_ROUTING_MATCH'                     => 'Hvis',
    'LBL_ROUTING_MATCH_2'                   => 'følgende konditioner opfyldes:',
    'LBL_NOTIFICATIONS'                     => 'Notifikationer',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Indhold',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'Fra',
    'LBL_ROUTING_MATCH_NAME'                => 'Emne',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Høj prioritet',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normal prioritet',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Lav prioritet',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'Til',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'indeholder',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'indeholder ikke',

    'LBL_ROUTING_NAME'                      => 'Regelnavn',
    'LBL_ROUTING_NEW_NAME'                  => 'Ny regel',
    'LBL_ROUTING_ONE_MOMENT'                => 'Et øjeblik...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Original meddelelse følger.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Gemmer regel',
    'LBL_ROUTING_SUB_DESC'                  => 'Checkede regler er aktive. Klik på navn for redigering.',
    'LBL_ROUTING_TO'                        => 'til',
    'LBL_ROUTING_TO_ADDRESS'                => 'til adresse',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'med skabelon',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'This record currently contains values in the Office Phone and Address fields. To overwrite these values with the following Office Phone and Address of the Account that you selected, click "OK". To keep the current values, click "Cancel".',
  'LBL_DROP_HERE' => '[Slip her]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Rediger',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Sæt Gmail standarder',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Navn',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Udgående Mail Server',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Mail transfer agent',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Use SMTP Authentication?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Adgangskode',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Brug SSL ved connecting',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Brugernavn',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Standard',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Warning: Missing username and password for outgoing mail account.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'SMTP Username is required',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'SMTP Password is required',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Email vedligeholdelse',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Mail Server Protocol of type POP3 will not be supported in the next release. Only IMAP will be supported.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'Set up Mail Accounts to view incoming emails from your email accounts.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'Provide SMTP mail server information to use for outgoing email in Mail Accounts.',
    'LBL_EMAIL_ADD'                         => 'Tilføj adresse',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Tilføj',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Ryd [Alt+C]',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'To:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Tilføj liste',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Email',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Du kan kun redigere kontaktoplysninger.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Fornavn',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Efternavn',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Mine kontakter',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Min Mailing Liste',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Navn',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Ingen adresse fundet',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Gem & tilføj til adressebog',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Søg',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Vælg adressebogselementer',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Adressebog',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Rappoter',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Warning! The outbound account you are trying to delete is associated to an existing inbound account.  Are you sure you want to continue?',
    'LBL_EMAIL_ADDRESSES'                   => 'Email adresser',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Email',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Email adresser',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Import to SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Ansvar',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Vedhæft fil til email',
    'LBL_EMAIL_ATTACHMENT'                  => 'Vedhæft',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Vedhæft filer',
    'LBL_EMAIL_ATTACHMENTS2'                => 'From SuiteCRM Documents',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Skabelon vedhæft',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Filnavn',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Dokumenter',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Embeded',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Afbryd',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Karaktersæt',
    'LBL_EMAIL_CHECK'                       => 'Check mail',
    'LBL_EMAIL_CHECKING_NEW'                => 'Check for nye emails',
    'LBL_EMAIL_CHECKING_DESC'               => 'Første check for nye kunder kan tage lidt tid.',
    'LBL_EMAIL_CLOSE'                       => 'Luk',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Store mailbokse tager lang tid.',
    'LBL_EMAIL_COMMON'                      => 'Almindelig',

    'LBL_EMAIL_COMPOSE'                     => 'Sammensæt email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Denne email har ingen modtagere.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Relation til',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Der er ingen tekst i emailen. Ønsker du at sende?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Denne email har intet emne. Ønsker du at sende?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(intet emne)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Læs & sammensæt email',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Sendt fra konto',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Optioner',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Please enter valid email address for To, CC and BCC fields',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Slet denne email?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Slet disse elementer fra adressebogen?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Are you sure you want to delete this signature?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Oprettes ved gem--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Multiple',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Empty',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Date Sent by Sender',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Modtaget dato',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'Tildelt til bruger',
    'LBL_EMAIL_DATE_TODAY'                  => 'I dag',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'I går',
    'LBL_EMAIL_DD_TEXT'                     => 'valgte emails.',
    'LBL_EMAIL_DEFAULTS'                    => 'Standarder',
    'LBL_EMAIL_DELETE'                      => 'Slet',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Slet valgte meddelelser?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Email slettet.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Sletter meddelelse',
    'LBL_EMAIL_DETAILS'                     => 'Detaljer',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Displaying email(s) {0} - {1} of {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Displaying email address(es) {0} - {1} of {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Rediger kontakt',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Kun den primære adresse vil blive anvendt ifm kontakter.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Rediger Mailing Liste',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Tømmer affald',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Deleteting outbound server',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'CLearing cache files',
    'LBL_EMAIL_EMPTY_MSG'                   => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Cannot delete a folder. Either the folder or its children has emails or a mail box associated to it.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Kan ikke bestemme hvilken folder.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Check dine indstillinger.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Du skal indtaste efternavn.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Der blev fundet fejl: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Du har ikke adgang til dette område. Kontakt din administartor for at få adgang.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'SuiteCRM Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Du skal indtaste søgningskriterier.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Der opstod en fejl',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'An email list with that name already exists',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Meddelelse fjernet fra Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Either message Removed from Server or moved to a different folder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Connection to the mail server failed. Please contact your Administrator',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Flytte email mellem servere eller konti er desværre ikke muligt.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Flyt fejl',
    'LBL_EMAIL_ERROR_NAME'                  => 'Et navn er nødvendigt.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'From Address is required.  Please enter a valid email address.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Angiv en fil.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP folder navngivning er ikke mulig.',
    'LBL_EMAIL_ERROR_SERVER'                => 'En mail server adresse er nødvendig.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'The mail account may not have been saved.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Mail serveren har ikke svaret',
    'LBL_EMAIL_ERROR_USER'                  => 'Et login navn er nødvendig.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'En adgangskode er nødvendig.',
    'LBL_EMAIL_ERROR_PORT'                  => 'En mail server port er nødvendig.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'En server protokol er nødvendig.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Monitored Folder is required.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Trash Folder is required.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'This information is not available',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'No outgoing mail server specified.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Folders',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Flyt til',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Tilføj',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Tilføj en ny folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Omdøb folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Tilføj en ny gruppe folder',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Tilføj denne folder til',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Denne folder kan ikke ændres',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Er du sikker på, at du ønsker at slette denne folder?',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Ny folder',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Du skal vælge en folder.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Sugar folder vedligeholdelse',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Anvend gruppe',

    'LBL_EMAIL_FORWARD'                     => 'Videresend',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Downloaded [[count]] of [[total]] emails',
    'LBL_EMAIL_FOUND'                       => 'Fundet',
    'LBL_EMAIL_FROM'                        => 'Fra',
    'LBL_EMAIL_GROUP'                       => 'gruppe',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Group',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Hjem',
    'LBL_EMAIL_HTML_RTF'                    => 'Send HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Slet konto',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Deleting signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Er du sikker på, at du ønsker at slette denne konto?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Sletning lykkes.',
    'LBL_EMAIL_IE_SAVE'                     => 'Gemmer konto information',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Importer email',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Import to SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Importer',
    'LBL_EMAIL_INVALID'                     => 'Ugyldig',
    'LBL_EMAIL_LOADING'                     => 'Loading...',
    'LBL_EMAIL_MARK'                        => 'Marker',
    'LBL_EMAIL_MARK_FLAGGED'                => 'som markeret',
    'LBL_EMAIL_MARK_READ'                   => 'som læst',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'som umarkeret',
    'LBL_EMAIL_MARK_UNREAD'                 => 'som ej læst',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Assign To',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Opret folder',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Sammensæt til',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Slet folder',
    'LBL_EMAIL_MENU_EDIT'                   => 'Rediger',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Tøm affald',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Synchronize',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Clear cache files',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Slet',
    'LBL_EMAIL_MENU_RENAME'                 => 'Rename',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Omdøb folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Renaming Folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Du skal vælge før du kan udføre denne handling.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archive these email(s) to SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Email udvalgte Mailing Lister',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Email denne kontakt',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Slet en kontakt',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Slet disse emails',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Rediger en kontakt',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Rediger en Mailing Liste',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Tømmer alle affaldsfoldere for dine konti',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Marker disse emails',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Marker disse emails som læst',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Fjern markering på disse emails',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Marker disse emails som ej læst',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Fjerner Mailing Lister',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Rename a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Besvar disse emails',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Besvar alle modtagere for disse emails',

    'LBL_EMAIL_MESSAGES'                    => 'meddelelser',

    'LBL_EMAIL_ML_NAME'                     => 'Listenavn',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Vælg liste adresser',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Mulige liste adresser',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Klik</b> for at vælge flere<br />(Mac brugere brug <b>CMD-Klik</b>)',

    'LBL_EMAIL_NO'                          => 'Nej',
    'LBL_EMAIL_NOT_SENT'                    => 'Systemet kan ikke behandle din anmodning. Kontakt systemadministratoren.',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Et øjeblok...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Åben flere meddelelser',
    'LBL_EMAIL_OPTIONS'                     => 'Optioner',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Quick Compose',
    'LBL_EMAIL_OPT_OUT'                     => 'Opted Out',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Opted Out and Invalid',
    'LBL_EMAIL_PAGE_AFTER'                  => 'of {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Page',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Udfører opgave',
    'LBL_EMAIL_PRIMARY'                     => 'Primær',
    'LBL_EMAIL_PRINT'                       => 'Print',

    'LBL_EMAIL_QC_BUGS'                     => 'Fejl',
    'LBL_EMAIL_QC_CASES'                    => 'Sag',
    'LBL_EMAIL_QC_LEADS'                    => 'Emne',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Kontakt',
    'LBL_EMAIL_QC_TASKS'                    => 'Opgave',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Mulighed',
    'LBL_EMAIL_QUICK_CREATE'                => 'Kvik opret',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Opbygger foldere',
    'LBL_EMAIL_RELATE_TO'                   => 'Relater',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Vis relationer',
    'LBL_EMAIL_RECORD'                => 'Email Record',
    'LBL_EMAIL_REMOVE'                      => 'Slet',
    'LBL_EMAIL_REPLY'                       => 'Besvar',
    'LBL_EMAIL_REPLY_ALL'                   => 'Besvar alle',
    'LBL_EMAIL_REPLY_TO'                    => 'Besvar-til',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Modtager Email Liste',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Modtagere meddelelse',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Tilbage til forrige modul?',
    'LBL_EMAIL_REVERT'                      => 'Fortryd',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE'                 => 'Regel vedligeholdelse',

    'LBL_EMAIL_SAVE'                        => 'Gem',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Save & Reply',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Gem udkast',

    'LBL_EMAIL_SEARCHING'                   => 'Søger',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Advanceret søgning',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Dato fra',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Dato til',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Tekst',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Ingen resultater fundet på din søgning.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Søge resultater',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Simpel søgning',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Search email account',

    'LBL_EMAIL_SELECT'                      => 'Vælg',

    'LBL_EMAIL_SEND'                        => 'Send',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Sender Email',

    'LBL_EMAIL_SETTINGS'                    => 'Indstillinger',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 Rækker',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 Kolonner',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Layout Style',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Konti',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Ryd Form',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Importer email i oversigt',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Check efter nye emails',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Use Preview Pane',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Brug Popup',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Antal emails pr side',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Rediger konto',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Foldere',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Fra adresse',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email Address For Test Notification:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'To Email Address',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Fra navn',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Reply to Address',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Fuld Skærm',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Synkroniser alle konti',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'An email was sent to the specified email address using the provided outgoing mail settings. Please check to see if the email was received to verify the settings are correct.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Hvis du udfører denne handling, så synkroniseres alle email konti.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Synkronisering kan tage flere minutter.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Click the Shift key or the Ctrl key to select multiple folders.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Generel',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Mulige gruppe foldere',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Opret gruppe folder',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Saving Group Folders',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Retrieving Group Folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edit Group Folder',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Navn',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Disse indstillinger kræver muligvis en opdatering af siden.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Modtager',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Regler',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Indstillinger gemt',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Send email som tekst',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Aktive konto',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Antal emails pr side',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Placer Tabs i bunden',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Visuel indstillinger',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Præferencer',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Vis udvidet',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Mulige bruger foldere',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Fejl:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'The outbound mail server selected for the mail account you are using is invalid.  Check the settings or select a different mail server for the mail account.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'An outgoing mail server is not configured to send emails. Please configure an outgoing mail server or select an outgoing mail server for the mail account that you are using in Settings >> Mail Account.',
    'LBL_EMAIL_SHOW_READ'                   => 'Vis alle',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Vis kun ej læste',
    'LBL_EMAIL_SIGNATURES'                  => 'Signatur',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Opret Signatur',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Signatur navn',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Signatur tekst',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Andre',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Foldere udenfor Sugar ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ SuiteCRM Folders ]',
    'LBL_EMAIL_SUBJECT'                     => 'Emne',
    'LBL_EMAIL_SUCCESS'                     => 'Lykkes',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Email template body is empty',
    'LBL_EMAIL_TEMPLATES'                   => 'Skabeloner',
    'LBL_EMAIL_TEXT_FIRST'                  => 'First Page',
    'LBL_EMAIL_TEXT_PREV'                   => 'Previous Page',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Next Page',
    'LBL_EMAIL_TEXT_LAST'                   => 'Last Page',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Gentegn',
    'LBL_EMAIL_TO'                          => 'Til',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Toggle Liste',
    'LBL_EMAIL_VIEW'                        => 'Oversigt',
    'LBL_EMAIL_VIEWS'                       => 'Oversigt',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Vis hoved',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Printable Version',
    'LBL_EMAIL_VIEW_RAW'                    => 'Vis den rå Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Denne feature er ikke supportet når du anvender POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Default link text.',
    'LBL_EMAIL_YES'                         => 'Ja',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Send Test Email',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email Sent',
    'LBL_EMAIL_MESSAGE_NO'                  => 'Message No',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Import Passed',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Import Failed because either the message is already imported or deleted from server',

    'LBL_LINK_NONE'=> 'Ingen',
    'LBL_LINK_ALL'=> 'Alle',
    'LBL_LINK_RECORDS'=> 'Rækker',
    'LBL_LINK_SELECT'=> 'Vælg',
    'LBL_LINK_ACTIONS'=> 'Actions',
    'LBL_LINK_MORE'=> 'mere',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Confirm",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "Do you want to close this #module#?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Do not display this message in the future: &nbsp;",
    'LBL_INVALID_FILE_EXTENSION' => 'Invalid File Extension',


    'ERR_AJAX_LOAD'     => 'An error has occurred:',
    'ERR_AJAX_LOAD_FAILURE'     => 'There was an error processing your request, please try again at a later time.',
    'ERR_AJAX_LOAD_FOOTER' => 'If this error persists, please have your administrator disable Ajax for this module',
    'ERR_CREATING_FIELDS' => 'Fejl ved udfyldelse af felter: ',
    'ERR_CREATING_TABLE' => 'Fejl ved oprettelse af tabel: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "Decimal seperator skal være forskellig fra tusind seperator.",
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette kontakten.',
    'ERR_EXPORT_DISABLED' => 'Export er ikke slået til.',
    'ERR_EXPORT_TYPE' => 'Fejl ved export ',
    'ERR_INVALID_AMOUNT' => 'Indtast en gyldig værdi.',
    'ERR_INVALID_DATE_FORMAT' => 'Dato format skal være: ',
    'ERR_INVALID_DATE' => 'Indtast en gyldig dato.',
    'ERR_INVALID_DAY' => 'Indtast en gyldig dag.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'er ikke en gyldig email adresse.',
    'ERR_INVALID_FILE_REFERENCE' => 'Ugyldig fil reference',
    'ERR_INVALID_HOUR' => 'Indtast gyldig time.',
    'ERR_INVALID_MONTH' => 'Indtast gyldig måned.',
    'ERR_INVALID_TIME' => 'Indtast en gyldig tid.',
    'ERR_INVALID_YEAR' => 'Indtast et gyldigt år på 4 cifre.',
    'ERR_NEED_ACTIVE_SESSION' => 'En aktiv session er nødvendig ved export.',
    'ERR_NO_HEADER_ID' => 'Denne feature er ikketilgængelig i dette tema.',
    'ERR_NOT_ADMIN' => "Uautoriseret adgang til administration.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Mangler nødvendige felter:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Invalid required field:',
    'ERR_INVALID_VALUE' => 'Ugyldig værdi:',
    'ERR_NO_SUCH_FILE' =>'File does not exist on system',
    'ERR_NO_SINGLE_QUOTE' => 'Du kan ikke angive single quotation for ',
    'ERR_NOTHING_SELECTED' =>'Foretag et valg før du kan fortsætte.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Der findes allerede en mulighed med dette navn %s.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Du skal angive et navn til muligheden.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SuiteCRM.',
    'ERR_SELF_REPORTING' => 'En bruger kan ikke rapporter til sig selv.',
    'ERR_SINGLE_QUOTE'  => 'Du kan ikke anvende single quote i dette felt.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Ingen match fundet for felt: ',
    'ERR_SQS_NO_MATCH' =>'Ingen match fundet',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Angiv metadata definition',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'An error occurred while uploading.  Please ensure the file you are uploading is not empty.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to SuiteCRM error log file for details.',
    'ERR_DB_FAIL' => 'Database failure. Please refer to SuiteCRM error log file for details.',
    'ERR_EXTERNAL_API_403' => 'Permission Denied. File type is not supported.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth Access Token is missing.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} files may only be used with a SuiteCRM {1} database.',


    'LBL_ACCOUNT'=>'Kunde',
    'LBL_OLD_ACCOUNT_LINK'=>'Old Account',
    'LBL_ACCOUNTS'=>'Kunder',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vis summering',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vis Summering [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Tilføj [Alt+A]',
    'LBL_ADD_BUTTON' => 'Tilføj',
    'LBL_ADD_DOCUMENT' => 'Tilføj dokument',
    'LBL_REPLACE_BUTTON' => 'Replace',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Tilføj til målgruppe listen',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Tilføj til målgruppe listen',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klik for at lukke',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Luk',
    'LBL_ADDITIONAL_DETAILS' => 'Yderligere detaljer',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arkiver',
    'LBL_ASSIGNED_TO_USER'=>'Tildelt til bruger',
    'LBL_ASSIGNED_TO' => 'Tildelt til:',
    'LBL_BACK' => 'Tilbage',
    'LBL_BILL_TO_ACCOUNT'=>'Faktura til kunde',
    'LBL_BILL_TO_CONTACT'=>'Faktura til kontakt',
    'LBL_BILLING_ADDRESS'=>'Billing Address',
    'LBL_QUICK_CREATE_TITLE' => 'Kvik opret',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS'=>'Fejl',
    'LBL_BY' => 'af',
    'LBL_CALLS'=>'Opkald',
    'LBL_CALL'=>'Opkald',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send opsamlede kampagne Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Send',
    'LBL_CASE'=>'Sag',
    'LBL_CASES'=>'Sager',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Change password',
    'LBL_CHANGE_BUTTON_LABEL' => 'Ændre',
    'LBL_CHANGE_BUTTON_TITLE' => 'Ændre [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Check alle',
    'LBL_CITY' => 'By',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Ryd',
    'LBL_CLEAR_BUTTON_TITLE' => 'Ryd [Alt+C]',
    'LBL_CLEARALL' => 'Ryd alle',
    'LBL_CLOSE_BUTTON_TITLE' =>'Luk',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Luk vindue',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Luk alle',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Luk alle [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Luk og opret ny',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Luk og opret ny',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sammensæt Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Sammensæt Email [Alt+L]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Ja',
    'LBL_SEARCH_DROPDOWN_NO'=>'Nej',
    'LBL_CONTACT_LIST' => 'Kontakt liste',
    'LBL_CONTACT'=>'Kontakt',
    'LBL_CONTACTS'=>'Kontakter',
    'LBL_CONTRACTS'=>'Kontrakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATE_BUTTON_LABEL' => 'Opret',
    'LBL_CREATED_BY_USER'=>'Oprettet af bruger',
    'LBL_CREATED_USER'=>'Oprettet af bruger',
    'LBL_CREATED_ID' => 'Oprettet af Id',
    'LBL_CREATED' => 'Oprettet af',
    'LBL_CURRENT_USER_FILTER' => 'Kun mine elementer:',
    'LBL_CURRENCY'=>'Valuta:',
    'LBL_DOCUMENTS'=>'Dokumenter',
    'LBL_DATE_ENTERED' => 'Oprettelsesdato:',
    'LBL_DATE_MODIFIED' => 'Sidst ændret:',
    'LBL_EDIT_BUTTON' => 'Rediger',
    'LBL_DUPLICATE_BUTTON' => 'Kopier',
    'LBL_DELETE_BUTTON' => 'Slet',
    'LBL_DELETE' => 'Slet',
    'LBL_DELETED'=>'Slet',
    'LBL_DIRECT_REPORTS'=>'Rapporter',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Gjort',
    'LBL_DONE_BUTTON_TITLE' => 'Gjort [Alt+X]',
    'LBL_DST_NEEDS_FIXIN' => 'Applikationen kræver sommer/vintertid.  Gå til <a href="index.php?module=Administration&action=DstFix">Repair</a> linket i Admin konsolen og angiv Daylight Saving Time fix.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Edit As New',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Edit As New',
    'LBL_FAVORITES' => 'Favoritter',
    'LBL_FILTER_MENU_BY' => 'Filter Menu By',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Please select a vCard file',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Import vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Se',
    'LBL_VIEW_BUTTON_TITLE' => 'Se [Alt+V]',
    'LBL_VIEW_BUTTON' => 'Se',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email som PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email som PDF [Alt+M]',
    'LBL_EMAILS'=>'Emails',
    'LBL_EMPLOYEES' => 'Medarbejdere',
    'LBL_ENTER_DATE' => 'Indtast dato',
    'LBL_EXPORT_ALL' => 'Exporter alle',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Gå',
    'LBL_GS_HELP' => 'The fields in this module used in this search appear above.  The highlighted text matches your search criteria.',
    'LBL_HIDE'=>'Skjul',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import startet: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Du skal angive et adskille tegn.',
    'LBL_LAST_VIEWED' => 'Sidst set',
    'LBL_SHOW_LESS' => 'Show Less',
    'LBL_SHOW_MORE' => 'Show More',
    'LBL_TODAYS_ACTIVITIES' => 'Today\'s Activities',
    'LBL_LEADS'=>'Emner',
    'LBL_LESS' => 'mindre',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_CAMPAIGNS' => 'Kampagner',
    'LBL_CAMPAIGNLOG' => 'CampaignLog',
    'LBL_CAMPAIGN_CONTACT'=>'Kampagner',
    'LBL_CAMPAIGN_ID'=>'kampagne_id',
    'LBL_SITEMAP'=>'Sitemap',
    'LBL_THEME'=>'Tema:',
    'LBL_THEME_PICKER'=>'Page Style',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Warning: Internet Explorer 6 is not supported for the selected theme. Click OK to select it anyways or Cancel to select a different theme.',
    'LBL_FOUND_IN_RELEASE'=>'Found In Release',
    'LBL_FIXED_IN_RELEASE'=>'Fixed In Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_LIST_ASSIGNED_USER' => 'Bruger',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
    'LBL_LIST_CONTACT_ROLE' => 'Kontakt rolle',
    'LBL_LIST_DATE_ENTERED'=>'Oprettelsesdato',
    'LBL_LIST_EMAIL' => 'Emails',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_OF' => 'af',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Relateret til',
    'LBL_LIST_USER_NAME' => 'Brugernavn',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Er du sikker på, at du ønsker at slette hele listen?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Du skal vælge mindst en række.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Du skal vælge mindst to rækker.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Please select less than 10 records to proceed.',
    'LBL_LISTVIEW_ALL' => 'Alle',
    'LBL_LISTVIEW_NONE' => 'Ingen',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Denne side',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Alle rækker',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Valgte rækker',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valgte: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Please sign in to access this area.',
    'LBL_LOGOUT' => 'Log ud',
    'LBL_PROFILE' => 'Profile',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Mail flet',
    'LBL_MASS_UPDATE' => 'Masse opdatering',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Primary Email',
    'LBL_MEETINGS'=>'Møder',
    'LBL_MEETING'=>'Møde',
    'LBL_MEETING_GO_BACK'=>'Go back to the meeting',
    'LBL_MEMBERS'=>'Medlemmer',
    'LBL_MEMBER_OF'=>'Medlem af',
    'LBL_MODIFIED_BY_USER'=>'Ændret af bruger',
    'LBL_MODIFIED_USER'=>'Ændret af bruger',
    'LBL_MODIFIED' => 'Ændret af',
    'LBL_MODIFIED_NAME'=>'Ændret af navn',
    'LBL_MODIFIED_ID'=>'Ændret af Id',
    'LBL_MORE' => 'mere',
    'LBL_MY_ACCOUNT' => 'Min konto',
    'LBL_NAME' => 'Navn',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Opret',
    'LBL_NEW_BUTTON_TITLE' => 'Opret [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => 'Næste',
    'LBL_NONE' => '--Ingen--',
    'LBL_NOTES'=>'Noter',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Åben alle',
    'LBL_OPENALL_BUTTON_TITLE' => 'Åben alle [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Åben for: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Åben for: [Alt+T]',
    'LBL_OPPORTUNITIES'=>'Muligheder',
    'LBL_OPPORTUNITY_NAME' => 'Navn for mulighed',
    'LBL_OPPORTUNITY'=>'Mulighed',
    'LBL_OR' => 'eller',
    'LBL_LOWER_OR' => 'af',
    'LBL_PANEL_OVERVIEW' => 'Målgruppe Information',
    'LBL_PANEL_ASSIGNMENT' => 'Andre',
    'LBL_PANEL_ADVANCED' => 'Mere information',
    'LBL_PARENT_TYPE' => 'Moder Type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Range',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær adresse By:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær adresse Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær adresse Postnr:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær adresse Stat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primær adresse Gadenavn 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primær adresse Gadenavn 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær adresse Gade:',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',

	'LBL_BILLING_STREET'=> 'Street:',
	'LBL_SHIPPING_STREET'=> 'Street:',

    'LBL_PROSPECTS'=>'Prospects',
    'LBL_PRODUCT_BUNDLES'=>'Produktsammensætning',
    'LBL_PRODUCTS'=>'Produkter',
    'LBL_PROJECT_TASKS'=>'Projektopgaver',
    'LBL_PROJECTS'=>'Projekter',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Opret mulighed fra kvote',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Opret mulighed fra kvote [Alt+O]',
    'LBL_QUOTES_SHIP_TO'=>'Kvote afsendt til',
    'LBL_QUOTES'=>'Kvoter',

    'LBL_RELATED' => 'Relateret',
    'LBL_RELATED_INFORMATION' => 'Related Information',
    'LBL_RELATED_RECORDS' => 'Relaterede rækker',
    'LBL_REMOVE' => 'Slet',
    'LBL_REPORTS_TO' => 'Overordnet',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indikerer nødvendige felter',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Færdig.',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Gem som',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Gem som [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Fuld Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Fuld Form [Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Gem & opret ny',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Gem & opret ny [Alt+V]',
    'LBL_SAVE_OBJECT' => 'Save {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Søg',
    'LBL_SEARCH_BUTTON_TITLE' => 'Søg [Alt+Q]',
    'LBL_SEARCH' => 'Søg',
    'LBL_SEARCH_TIPS' => "Press the search button or click enter to get an exact match for them.",
    'LBL_SEARCH_TIPS_2' => "Press the search button or click enter to get an exact match for",
    'LBL_SEARCH_MORE' => 'more',
    'LBL_SEE_ALL' => 'See All',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Invalid file format, only image file can be uploaded.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Vælg',
    'LBL_SELECT_BUTTON_TITLE' => 'Vælg [Alt+T]',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Add Team(s)',
    'LBL_SELECT_TEAMS_TITLE' => 'Add Teams(s)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Browse Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Vælg kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Vælg kontakt [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'Vælg filer',
    'LBL_GRID_SELECTED_FILES' => 'Vælg filer',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Vælg fra rapporter',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Vælg rapporter',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Vælg bruger',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Vælg bruger [Alt+U]',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Vælg fil',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Vælg fil',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Vælg bruger [Alt+U]',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Vælg bruger [Alt+U]',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Clear User',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Vælg kunde',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Vælg kunde',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Clear Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Clear Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Select Campaign',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Select Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Clear Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Clear Campaign',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Vælg kontakt [Alt+T]',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Vælg kontakt [Alt+T]',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressourcer anvendt til at danne denne side er (forespørgsler og filer)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekunder.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server svartid:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Memory Usage: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Afsend til kunde',
    'LBL_SHIP_TO_CONTACT'=>'Afsend til kontakt',
    'LBL_SHIPPING_ADDRESS'=>'Shipping Address',
    'LBL_SHORTCUTS' => 'Shortcuts',
    'LBL_SHOW'=>'Vis',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Stat:',
    'LBL_STATUS_UPDATED'=>'Din status på denne begivenhed er opdateret!',
    'LBL_STATUS'=>'Status',
    'LBL_STREET'=>'Gade',
    'LBL_SUBJECT' => 'Emne',

    'LBL_INBOUNDEMAIL_ID' => 'Inbound Email ID',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2013 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',


    'LBL_SYNC' => 'Sync',
    'LBL_TABGROUP_ALL' => 'Alle',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiviteter',
    'LBL_TABGROUP_COLLABORATION' => 'Samarbejde',
    'LBL_TABGROUP_HOME' => 'Hjem',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Min Portal',
    'LBL_TABGROUP_OTHER' => 'Andre',
    'LBL_TABGROUP_REPORTS' => 'Rappoter',
    'LBL_TABGROUP_SALES' => 'Salg',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TABGROUP_TOOLS' => 'Værktøjer',
    'LBL_TASKS'=>'Opgaver',
    'LBL_TEAMS_LINK'=>'Team',
    'LBL_THEME_COLOR'=>'Farve',
    'LBL_THEME_FONT'=>'Skrifttype',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkiver Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkiver Email [Alt+K]',
    'LBL_UNAUTH_ADMIN' => 'Uautoriceret adgang til administration',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Fortryd',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Fortryd [Alt+D]',
    'LBL_UNDELETE_BUTTON' => 'Fortryd',
    'LBL_UNDELETE' => 'Fortryd',
    'LBL_UNSYNC' => 'Fortryd sync',
    'LBL_UPDATE' => 'Opdater',
    'LBL_USER_LIST' => 'Bruger liste',
    'LBL_USERS_SYNC'=>'Bruger Sync',
    'LBL_USERS'=>'Bruger',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME'=>'Checking for existing portal name...',
    'LBL_VIEW_IMAGE' => 'view',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Print som PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Print som PDF [Alt+P]',


    'LNK_ABOUT' => 'Om',
    'LNK_ADVANCED_SEARCH' => 'Advanceret søgning',
    'LNK_BASIC_SEARCH' => 'Søgning',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'View all results',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Vis alle',
    'LNK_CLOSE' => 'close',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Ændre nuværende søgning',
    'LNK_SAVED_VIEWS' => 'Gemte søgninger',
    'LNK_DELETE_ALL' => 'Slet alle',
    'LNK_DELETE' => 'Slet',
    'LNK_EDIT' => 'rediger',
    'LNK_GET_LATEST'=>'Hent seneste',
    'LNK_GET_LATEST_TOOLTIP'=>'Erstat med seneste version',
    'LNK_HELP' => 'Hjælp',
    'LNK_CREATE' => 'Opret [Alt+N]',
    'LNK_LIST_END' => 'Slut',
    'LNK_LIST_NEXT' => 'Næste',
    'LNK_LIST_PREVIOUS' => 'Forrige',
    'LNK_LIST_RETURN' => 'Tilbage til liste',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED'=>'Underskriv',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Erstat med underskrevet dokument',
    'LNK_PRINT' => 'Print',
    'LNK_BACKTOTOP' => 'Back to top',
    'LNK_REMOVE' => 'Slet',
    'LNK_RESUME' => 'Resume',
    'LNK_VIEW_CHANGE_LOG' => 'Se ændringslog',


    'NTC_CLICK_BACK' => 'Klik på browserens tilbage knap og løs problemet.',
    'NTC_DATE_FORMAT' => '(dd-mm-yyyy)',
    'NTC_DATE_TIME_FORMAT' => '(24:00 dd-mm-yyyy)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Er du sikker på, at du ønsker at slette de valgte rækker?',
    'NTC_TEMPLATE_IS_USED' => 'The template is used in at least one email marketing record. Are you sure you want to delete it?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?\n',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du ønsker at slette denne række?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Are you sure you want to delete the ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Are you sure you want to update the ',
    'NTC_DELETE_SELECTED_RECORDS' =>' selected record(s)?',
    'NTC_LOGIN_MESSAGE' => 'Indtast brugernavn og adgangskode.',
    'NTC_NO_ITEMS_DISPLAY' => 'ingen',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikkerpå, at du ønsker at fjerne denne relation?',
    'NTC_REQUIRED' => 'Indikerer nødvendige felter',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Velkommen',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SuiteCRM logos.',
    'WARN_ONLY_ADMINS'=> "Only admins may log in.",
    'WARN_UNSAVED_CHANGES'=> "You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?",
    'ERROR_NO_RECORD' => 'Fejl ved hentning af rækker.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Warning:</b> Your browser is in IE compatibility view which is not supported.",
    'ERROR_TYPE_NOT_VALID' => 'Error. This type is not valid.',
    'ERROR_NO_BEAN' => 'Failed to get bean.', 
    'LBL_DUP_MERGE'=>'Find dupletter',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Vedligehold abonnement',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Vedligehold abonnement for ',
    'LBL_SUBSCRIBE'=>'Abonnement',
    'LBL_UNSUBSCRIBE'=>'Opsige abonnement',
    // Ajax status strings
    'LBL_LOADING' => 'Loading ...',
    'LBL_SEARCHING' => 'Søger...',
    'LBL_SAVING_LAYOUT' => 'Gemmer Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout er gemt.',
    'LBL_SAVED' => 'Gemt',
    'LBL_SAVING' => 'Gemmer',
    'LBL_FAILED' => 'Mislykkes!',
    'LBL_DISPLAY_COLUMNS' => 'Vis kolonner',
    'LBL_HIDE_COLUMNS' => 'Skjul kolonner',
    'LBL_SEARCH_CRITERIA' => 'Søgekriterier',
    'LBL_SAVED_VIEWS' => 'Gemte oversigter',
    'LBL_PROCESSING_REQUEST'=>'Behandler..',
    'LBL_REQUEST_PROCESSED'=>'Færdig',
    'LBL_AJAX_FAILURE' => 'Ajax failure',
    'LBL_MERGE_DUPLICATES'  => 'Flet dupletter',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Gemte søgninger',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Udfør en søgning ved at anvende en søgeform',
    'LBL_DETAILVIEW'=>'Detaljeoversigt',
    'LBL_LISTVIEW'=>'Liste oversigt',
    'LBL_EDITVIEW'=>'Rediger oversigt',
    'LBL_SEARCHFORM'=>'Søgeform',
    'LBL_SAVED_SEARCH_ERROR' => 'Angiv et navn for denne oversigt.',
    'LBL_DISPLAY_LOG' => 'Vis Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Din session har timeout om 2 minutter. Gem dit arbejde.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Din session er timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Møde',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Opkald',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Tidspunkt: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Sted: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Beskrivelse: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
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
    'LBL_ADD_TO_FAVORITES' => 'Tilføj til mine favoritter',
    'LBL_MARK_AS_FAVORITES' => 'Mark as Favorite',
    'LBL_CREATE_CONTACT' => 'Opret kontakt',
    'LBL_CREATE_CASE' => 'Opret sag',
    'LBL_CREATE_NOTE' => 'Opret note',
    'LBL_CREATE_OPPORTUNITY' => 'Opret mulighed',
    'LBL_SCHEDULE_CALL' => 'Planlæg opkald',
    'LBL_SCHEDULE_MEETING' => 'Planlæg møde',
    'LBL_CREATE_TASK' => 'Opret opgave',
    'LBL_REMOVE_FROM_FAVORITES' => 'Slet fra mine favoritter',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generering af Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Gem Web til Emne Form',

    'LBL_PLEASE_SELECT' => 'Vælg',
    'LBL_REDIRECT_URL'=>'Redirect URL',
    'LBL_RELATED_CAMPAIGN' =>'Relateret kampagne',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Tilføj alle felter',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Slet alle felter',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Kun billed typer kan vedhæftes',
    'LBL_TRAINING' => 'Uddannelse',
    'ERR_DATABASE_CONN_DROPPED'=>'Fejl ved forespørgsel.',
    'ERR_MSSQL_DB_CONTEXT' =>'Ændre database context til',
  'ERR_MSSQL_WARNING' =>'Advarsel:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Warning: field [[field]] does not have a mapped entry in [moduleDir] vardefs.php file',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing.  Unable to create because no corresponding HTML file was found.',
  'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] does not exist.',
  'LBL_ALT_ADDRESS' => 'Anden adresse:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Missing index in displayParams Array for: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generel',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Kun mine elementer',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vis rækker',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Opretter ny side ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Er du sikker på, at du ønsker at slette denne side?',
    'LBL_SAVING_PAGE_TITLE' => 'Gemmer side titel ...',
    'LBL_RETRIEVING_PAGE' => 'Henter side ...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your adminstrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Tilføj side',
    'LBL_DELETE_PAGE' => 'Slet side',
    'LBL_CHANGE_LAYOUT' => 'Ændre Layout',
    'LBL_RENAME_PAGE' => 'Omdøb side',

    'LBL_LOADING_PAGE' => 'Henter side...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Tilføj Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Luk',
    'LBL_OPTIONS' => 'Optioner',
    'LBL_NUMBER_OF_COLUMNS' => 'Klik på et ikon for at vælge antal kolonner',
    'LBL_1_COLUMN' => '1 kolonne',
    'LBL_2_COLUMN' => '2 kolonne',
    'LBL_3_COLUMN' => '3 kolonne',
    'LBL_PAGE_NAME' => 'Sidenavn',

    'LBL_SEARCH_RESULTS' => 'Søge resultat',
    'LBL_SEARCH_MODULES' => 'Moduler',
    'LBL_SEARCH_CHARTS' => 'Grafer',
    'LBL_SEARCH_REPORT_CHARTS' => 'Rapport grafer',
    'LBL_SEARCH_TOOLS' => 'Værktøjer',
    'LBL_SEARCH_HELP_TITLE' => 'Search Tips',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Luk',
    'LBL_SEARCH_RESULTS_FOUND' => 'Search Results Found',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Indtast et sidenavn.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Intet billede',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopier adressen fra venstre:',
    'LBL_SAVE_AND_CONTINUE' => 'Gem og fortsæt',

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
    'LBL_USER_ID' => 'User Id',
    'LBL_MODULE_NAME' => 'Module Name',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Handling',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Date of Last Action',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is not before',
  'MSG_IS_MORE_THAN' => 'is more than',
  'MSG_IS_LESS_THAN' => 'is less than',
  'MSG_SHOULD_BE' => 'should be',
  'MSG_OR_GREATER' => 'or greater',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'List',
    'LBL_CREATE_BUG' => 'Opret fejl',
    'LBL_NO_RECORDS_FOUND' => '- 0 Records Found -',

    'DATA_TYPE_DUE' => 'Due:',
    'DATA_TYPE_START' => 'Start:',
    'DATA_TYPE_SENT' => 'Sent:',
    'DATA_TYPE_MODIFIED' => 'Modified:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Count',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Select Date',

    'LBL_VALIDATE_RANGE' => 'is not within the valid range',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Alle',

    'LBL_OPERATOR_IN_TEXT' => 'is one of the following:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'is not one of the following:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Get Data',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Are you sure you want to disable connector integration for this module?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'Du kan få den optimale oplevelse med IIS/FastCGI sapi ved at angive fastcgi.logging til 0 i filen php.ini.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'The Global team cannot be deleted.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'This private team [{0}] cannot be deleted until the user [{1}] is deleted.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'You either have Abobe Flash turned off or are using an older version of the Adobe Flash Player. To get the latest version of the Flash Player, <a href="http://www.adobe.com/go/getflashplayer/">click here</a>.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Navn',
  'LBL_COLLECTION_PRIMARY' => 'Primær',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',
    'LBL_COLLECTION_EXACT' => 'Exact',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_DESCRIPTION' => 'Beskrivelse',

  'LBL_YESTERDAY'=> 'yesterday',
  'LBL_TODAY'=>'i dag',
  'LBL_TOMORROW'=>'i morgen',
  'LBL_NEXT_WEEK'=> 'næste uge',
  'LBL_NEXT_MONDAY'=>'next monday',
  'LBL_NEXT_FRIDAY'=>'next friday',
  'LBL_TWO_WEEKS'=> 'two weeks',
  'LBL_NEXT_MONTH'=> 'næste måned',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'first day of next month',
  'LBL_THREE_MONTHS'=> 'three months',
  'LBL_SIXMONTHS'=> 'six months',
  'LBL_NEXT_YEAR'=> 'next year',
    'LBL_FILTERED' => 'Filtered',

    //Datetimecombo fields
    'LBL_HOURS' => 'Timer',
    'LBL_MINUTES' => 'Minutter',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Dato',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Auto-Refresh',

    'LBL_DURATION_DAY' => 'dag',
    'LBL_DURATION_HOUR' => 'hour',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'dage',
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
    'LBL_BEFORE' => 'Før',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Upload From Your Computer',
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',
    'LBL_SHARE_PRIVATE' => 'Private',
    'LBL_SHARE_COMPANY' => 'Firma',
    'LBL_SHARE_LINKABLE' => 'Linkable',
    'LBL_SHARE_PUBLIC' => 'Public',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS Feed',
    'LBL_RSS_RECORDS_FOUND' => 'record(s) found',
    'ERR_RSS_INVALID_INPUT' => 'RSS is not a valid input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS is not a valid response_type for this method',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs does not support the file format you provided.',

    'LBL_EMPTY' => 'Empty',
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
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt til',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt bruger',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Overordnet ID',
    'LBL_EXPORT_FULL_NAME' => 'Fuldenavn',
    'LBL_EXPORT_TEAM_ID' => 'Team ID',
    'LBL_EXPORT_TEAM_NAME' => 'Team',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navigating... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Notifikationer',
    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Add new team row',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Remove team',
    'LBL_ALT_SPOT_SEARCH' => 'Spot Search',
    'LBL_ALT_SORT_DESC' => 'Sorted Descending',
    'LBL_ALT_SORT_ASC' => 'Sorted Ascending',
    'LBL_ALT_SORT' => 'Sort',
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
    'LBL_EDIT_BUTTON_LABEL' => 'Rediger',
    'LBL_EDIT_BUTTON_TITLE' => 'Rediger [Alt+E]',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Kopier',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Kopier [Alt+U]',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Slet',
    'LBL_DELETE_BUTTON_TITLE' => 'Slet [Alt+D]',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Gem',
    'LBL_SAVE_BUTTON_TITLE' => 'Gem [Alt+S]',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Afbryd',
    'LBL_CANCEL_BUTTON_TITLE' => 'Afbryd [Alt+X]',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Keyboard Shortcuts',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bad response from the server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Tilbud',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Sale Price',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'Manuelt',
        '5' => 'Hver 5 . minut',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.'

    );

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['library_type'] = array('Books'=>'Bøger', 'Music'=>'Musik', 'DVD'=>'DVD', 'Magazines'=>'Magasiner');
$app_list_strings['moduleList']['EmailAddresses'] = 'Email adresse';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Høj',
    'Medium' => 'Medium',
    'Low' => 'Lav',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Udkast',
    'Expired' => 'Udløbet',
    'In Review' => 'Til gennemsyn',
    'Published' => 'Udgivet',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Ingen--',
    'Create New Tag' => 'Opret nyt mærke',
    'Delete Tag'=>'Slet mærke',
    'Rename Tag'=>'Omdøb mærke',
    'Move Selected Articles'=>'Flyt valgte artikler',
    'Apply Tags On Articles'=>'Anvend mærker til artikler',
    'Delete Selected Articles'=>'Slet valgte artikler',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Har vedhæftede filer',
        'none' => 'Ingen',
        'mime' => 'Angiv Mime-type',
        'name' => 'Angiv navn',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Knowledge Base';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Top 5',
    'Top_10' => 'Top 10',
    'Top_20' => 'Top 20',
    'Bot_5'  => 'Nederste 5',
    'Bot_10' => 'Nederste 10',
    'Bot_20' => 'Nederste 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Alle',
        'added' => 'Tilføjet de sidste 30 dage',
        'pending' => 'Afventer min godkendelse',
        'updated' =>'Opdateret de sidste 30 dage',
        'faqs' => 'Ofte stillede spørgsmål',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'On',
    'before' => 'Før',
    'after' => 'Efter',
    'between_dates' => 'Er mellem',
    'last_7_days' => 'Sidste 7 dage',
    'next_7_days' => 'Næste 7 dage',
    'last_month' => 'Sidste måned',
    'this_month' => 'Denne måned',
    'next_month' => 'Næste måned',
    'last_30_days' => 'Sidste 30 dage',
    'next_30_days' => 'Næste 30 dage',
    'last_year' => 'Sidste år',
    'this_year' => 'Dette pr',
    'next_year' => 'Næste år',
    'isnull' => 'Er null',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIEN',
        'ALGERIA' => 'ALGERIET',
        'AMERICAN SAMOA' => 'AMERIKANSK SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARKTIS',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMENIEN',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIEN',
        'AUSTRIA' => 'ØSTRIG',
        'AZERBAIJAN' => 'ASERBAJDSJAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BELARUS',
        'BELGIUM' => 'BELGIEN',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIA',
        'BOSNIA' => 'BOSNIEN',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVETØ',
        'BRAZIL' => 'BRASILIEN',
        'BRITISH ANTARCTICA TERRITORY' => 'DET BRITISKE TERRITORIUM I ANTARKTIS',
        'BRITISH INDIAN OCEAN TERRITORY' => 'DET BRITISKE TERRITORIUM I DET INDISKE OCEAN',
        'BRITISH VIRGIN ISLANDS' => 'DE BRITISKE JOMFRUØER',
        'BRITISH WEST INDIES' => 'DE BRITISKE VESTINDISKE ØER',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIEN',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODJA',
        'CAMEROON' => 'CAMEROUN',
        'CANADA' => 'CANADA',
        'CANAL ZONE' => 'KANALZONEN',
        'CANARY ISLAND' => 'DE KANARISKE ØER',
        'CAPE VERDI ISLANDS' => 'KAP VERDE',
        'CAYMAN ISLANDS' => 'CAYMANØERNE',
        'CEVLON' => 'SRI LANKA',
        'CHAD' => 'TCHAD',
        'CHANNEL ISLAND UK' => 'DE BRITISKE KANALØER',
        'CHILE' => 'CHILE',
        'CHINA' => 'KINA',
        'CHRISTMAS ISLAND' => 'JULEØEN',
        'COCOS (KEELING) ISLAND' => 'COCOSØERNE "KEELINGØERNE"',
        'COLOMBIA' => 'COLOMBIA',
        'COMORO ISLANDS' => 'COMORERNE',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO KINSHASA',
        'COOK ISLANDS' => 'COOKØERNE',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'KROATIEN',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPERN',
        'CZECH REPUBLIC' => 'TJEKKIET',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DANMARK',
        'DJIBOUTI' => 'DJIBOUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DEN DOMINIKANSKE REPUBLIK',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'EGYPTEN',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'ÆKVATORIALGUINEA',
        'ESTONIA' => 'ESTLAND',
        'ETHIOPIA' => 'ETIOPIEN',
        'FAEROE ISLANDS' => 'FÆRØERNE',
        'FALKLAND ISLANDS' => 'FALKLANDSØERNE',
        'FIJI' => 'FIJI',
        'FINLAND' => 'FINLAND',
        'FRANCE' => 'FRANKRIG',
        'FRENCH GUIANA' => 'FRANSK GUYANA',
        'FRENCH POLYNESIA' => 'FRANSK POLYNESIEN',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIEN',
        'GERMANY' => 'TYSKLAND',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GRÆKENLAND',
        'GREENLAND' => 'GRØNLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONGKONG',
        'HUNGARY' => 'UNGARN',
        'ICELAND' => 'ISLAND',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIEN',
        'INDONESIA' => 'INDONESIEN',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAK',
        'IRELAND' => 'IRLAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALIEN',
        'IVORY COAST' => 'ELFENBENSKYSTEN',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDAN',
        'KAZAKHSTAN' => 'KASAKHSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'SYDKOREA',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KIRGISISTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LETLAND',
        'LEBANON' => 'LIBANON',
        'LEEWARD ISLANDS' => 'LEEWARDØERNE',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBYEN',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITAUEN',
        'LUXEMBOURG' => 'LUXEMBOURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MAKEDONIEN',
        'MADAGASCAR' => 'MADAGASKAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALDIVERNE',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURETANIEN',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIEN',
        'MEXICO' => 'MEXICO',
        'MOLDOVIA' => 'MOLDOVA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLIET',
        'MOROCCO' => 'MAROKKO',
        'MOZAMBIQUE' => 'MOZAMBIQUE',
        'MYANAMAR' => 'MYANMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NEDERLANDENE',
        'NETHERLANDS ANTILLES' => 'DE NEDERLANDSKE ANTILLER',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'DE NEDERLANDSKE ANTILLER, NEUTRAL ZONE',
        'NEW CALADONIA' => 'NY KALEDONIEN',
        'NEW HEBRIDES' => 'NY HEBRIDERNE',
        'NEW ZEALAND' => 'NEW ZEALAND',
        'NICARAGUA' => 'NICARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK ISLAND',
        'NORWAY' => 'NORGE',
        'OMAN' => 'OMAN',
        'OTHER' => 'ANDET',
        'PACIFIC ISLAND' => 'STILLEHAVSØERNE',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NY GUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'FILIPPINERNE',
        'POLAND' => 'POLEN',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'EAST TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'QATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIKKEN BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'DEN SYDAFRIKANSKE REPUBLIK',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'RUMÆNIEN',
        'RUSSIA' => 'RUSLAND',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RYUKYUØERNE',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI-ARABIEN',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIEN',
        'SEYCHELLES' => 'SEYCHELLERNE',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPORE',
        'SLOVAKIA' => 'SLOVAKIET',
        'SLOVENIA' => 'SLOVENIEN',
        'SOMALILIAND' => 'SOMALIA',
        'SOUTH AFRICA' => 'SYDAFRIKA',
        'SOUTH YEMEN' => 'SYDYEMEN',
        'SPAIN' => 'SPANIEN',
        'SPANISH SAHARA' => 'SPANSK SAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'SAINT KITTS OG NEVIS',
        'ST. LUCIA' => 'SAINT LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SYDVESTAFRIKA',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'SVERIGE',
        'SWITZERLAND' => 'SCHWEIZ',
        'SYRIA' => 'SYRIEN',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TADSJIKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNESIEN',
        'TURKEY' => 'TYRKIET',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'DE FORENEDE ARABISKE EMIRATER',
        'UNITED KINGDOM' => 'STORBRITANNIEN',
        'UPPER VOLTA' => 'ØVRE VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'DE AMERIKANSKE STILLEHAVSØER',
        'US VIRGIN ISLANDS' => 'DE AMERIKANSKE JOMFRUØER',
        'USA' => 'USA',
        'UZBEKISTAN' => 'USBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATIKANSTATEN',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ISLAND',
        'WEST INDIES' => 'DE VESTINDISKE ØER',
        'WESTERN SAHARA' => 'VESTSAHARA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 "Taiwan og Hongkong"',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 "MS kyrillisk"',
    'CP1252'    => 'CP1252 "MS vesteuropæisk og amerikansk"',
    'EUC-CN'    => 'EUC-CN "forenklet kinesisk GB2312"',
    'EUC-JP'    => 'EUC-JP "Unix japansk"',
    'EUC-KR'    => 'EUC-KR "koreansk"',
    'EUC-TW'    => 'EUC-TW "taiwanesisk"',
    'ISO-2022-JP' => 'ISO-2022-JP "japansk"',
    'ISO-2022-KR' => 'ISO-2022-KR "koreansk"',
    'ISO-8859-1'  => 'ISO-8859-1 "vesteuropæisk og amerikansk"',
    'ISO-8859-2'  => 'ISO-8859-2 "central- og østeuropæisk"',
    'ISO-8859-3'  => 'ISO-8859-3 "latinsk 3"',
    'ISO-8859-4'  => 'ISO-8859-4 "latinsk 4"',
    'ISO-8859-5'  => 'ISO-8859-5 "kyrillisk"',
    'ISO-8859-6'  => 'ISO-8859-6 "arabisk"',
    'ISO-8859-7'  => 'ISO-8859-7 "græsk"',
    'ISO-8859-8'  => 'ISO-8859-8 "hebraisk"',
    'ISO-8859-9'  => 'ISO-8859-9 "latinsk 5"',
    'ISO-8859-10' => 'ISO-8859-10 "latinsk 6"',
    'ISO-8859-13' => 'ISO-8859-13 "latinsk 7"',
    'ISO-8859-14' => 'ISO-8859-14 "latinsk 8"',
    'ISO-8859-15' => 'ISO-8859-15 "latinsk 9"',
    'KOI8-R'    => 'KOI8-R "kyrillisk russisk"',
    'KOI8-U'    => 'KOI8-U "kyrillisk ukrainsk"',
    'SJIS'      => 'SJIS "MS japansk"',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

  'Africa/Algiers' => 'Afrika/Algier',
  'Africa/Luanda' => 'Afrika/Luanda',
  'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
  'Africa/Gaborone' => 'Afrika/Gaborone',
  'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
  'Africa/Bujumbura' => 'Afrika/Bujumbura',
  'Africa/Douala' => 'Afrika/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Kap_Verde',
  'Africa/Bangui' => 'Afrika/Bangui',
  'Africa/Ndjamena' => 'Afrika/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Afrika/Kinshasa',
  'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
  'Africa/Brazzaville' => 'Afrika/Brazzaville',
  'Africa/Abidjan' => 'Afrika/Abidjan',
  'Africa/Djibouti' => 'Afrika/Djibouti',
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
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Afrika/Blantyre',
  'Africa/Bamako' => 'Afrika/Bamako',
  'Africa/Nouakchott' => 'Afrika/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Afrika/Casablanca',
  'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
  'Africa/Maputo' => 'Afrika/Maputo',
  'Africa/Windhoek' => 'Afrika/Windhoek',
  'Africa/Niamey' => 'Afrika/Niamey',
  'Africa/Lagos' => 'Afrika/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Afrika/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/Saint_Helena',
  'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
  'Africa/Dakar' => 'Afrika/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
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
  'Antarctica/Casey' => 'Antarktis/Casey',
  'Antarctica/Davis' => 'Antarktis/Davis',
  'Antarctica/Mawson' => 'Antarktis/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarktis/DumontDUrville',
  'Antarctica/Syowa' => 'Antarktis/Syowa',
  'Antarctica/Vostok' => 'Antarktis/Vostok',
  'Antarctica/Rothera' => 'Antarktis/Rothera',
  'Antarctica/Palmer' => 'Antarktis/Palmer',
  'Antarctica/McMurdo' => 'Antarktis/McMurdo',
  'Asia/Kabul' => 'Asien/Kabul',
  'Asia/Yerevan' => 'Asien/Yeravan',
  'Asia/Baku' => 'Asien/Baku',
  'Asia/Bahrain' => 'Asien/Bahrain',
  'Asia/Dhaka' => 'Asien/Dhaka',
  'Asia/Thimphu' => 'Asien/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Asien/Brunei',
  'Asia/Rangoon' => 'Asien/Rangoon',
  'Asia/Phnom_Penh' => 'Asien/Phnom_Penh',
  'Asia/Beijing' => 'Asien/Beijing',
  'Asia/Harbin' => 'Asien/Harbin',
  'Asia/Shanghai' => 'Asien/Shanghai',
  'Asia/Chongqing' => 'Asien/Chongquing',
  'Asia/Urumqi' => 'Asien/Urumqi',
  'Asia/Kashgar' => 'Asien/Kashgar',
  'Asia/Hong_Kong' => 'Asien/Hongkong',
  'Asia/Taipei' => 'Asien/Taipei',
  'Asia/Macau' => 'Asien/Macau',
  'Asia/Nicosia' => 'Asien/Nicosia',
  'Asia/Tbilisi' => 'Asien/Tbilisi',
  'Asia/Dili' => 'Asien/Dili',
  'Asia/Calcutta' => 'Asien/Calcutta',
  'Asia/Jakarta' => 'Asien/Jakarta',
  'Asia/Pontianak' => 'Asien/Pontianak',
  'Asia/Makassar' => 'Asien/Makassar',
  'Asia/Jayapura' => 'Asien/Jayapura',
  'Asia/Tehran' => 'Asien/Tehran',
  'Asia/Baghdad' => 'Asien/Baghdad',
  'Asia/Jerusalem' => 'Asien/Jerusalem',
  'Asia/Tokyo' => 'Asien/Tokyo',
  'Asia/Amman' => 'Asien/Amman',
  'Asia/Almaty' => 'Asien/Almaty',
  'Asia/Qyzylorda' => 'Asien/Qyzylorda',
  'Asia/Aqtobe' => 'Asien/Aqtobe',
  'Asia/Aqtau' => 'Asien/Aqtau',
  'Asia/Oral' => 'Asien/Oral',
  'Asia/Bishkek' => 'Asien/Bishkek',
  'Asia/Seoul' => 'Asien/Seoul',
  'Asia/Pyongyang' => 'Asien/Pyongyang',
  'Asia/Kuwait' => 'Asien/Kuwait',
  'Asia/Vientiane' => 'Asien/Vientiane',
  'Asia/Beirut' => 'Asien/Beirut',
  'Asia/Kuala_Lumpur' => 'Asien/Kuala_Lumpur',
  'Asia/Kuching' => 'Asien/Kuching',
  'Indian/Maldives' => 'Indian/Maldiverne',
  'Asia/Hovd' => 'Asien/Hovd',
  'Asia/Ulaanbaatar' => 'Asien/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asien/Choibalsan',
  'Asia/Katmandu' => 'Asien/Katmandu',
  'Asia/Muscat' => 'Asien/Muscat',
  'Asia/Karachi' => 'Asien/Karachi',
  'Asia/Gaza' => 'Asien/Gaza',
  'Asia/Manila' => 'Asien/Manila',
  'Asia/Qatar' => 'Asien/Qatar',
  'Asia/Riyadh' => 'Asien/Riyadh',
  'Asia/Singapore' => 'Asien/Singapore',
  'Asia/Colombo' => 'Asien/Colombo',
  'Asia/Damascus' => 'Asien/Damaskus',
  'Asia/Dushanbe' => 'Asien/Dushanbe',
  'Asia/Bangkok' => 'Asien/Bangkok',
  'Asia/Ashgabat' => 'Asien/Ashgabat',
  'Asia/Dubai' => 'Asien/Dubai',
  'Asia/Samarkand' => 'Asien/Samarkand',
  'Asia/Tashkent' => 'Asien/Tashkent',
  'Asia/Saigon' => 'Asien/Saigon',
  'Asia/Aden' => 'Asien/Aden',
  'Australia/Darwin' => 'Australien/Darwin',
  'Australia/Perth' => 'Australien/Perth',
  'Australia/Brisbane' => 'Australien/Brisbane',
  'Australia/Lindeman' => 'Australien/Lindeman',
  'Australia/Adelaide' => 'Australien/Adelaide',
  'Australia/Hobart' => 'Australien/Hobart',
  'Australia/Currie' => 'Australien/Currie',
  'Australia/Melbourne' => 'Australien/Melbourne',
  'Australia/Sydney' => 'Australien/Sydney',
  'Australia/Broken_Hill' => 'Australien/Broken_Hill',
  'Indian/Christmas' => 'Indian/Juleøen',
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
  'Europe/London' => 'Europa/London',
  'Europe/Dublin' => 'Europa/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europa/Tirana',
  'Europe/Andorra' => 'Europa/Andorra',
  'Europe/Vienna' => 'Europa/Wien',
  'Europe/Minsk' => 'Europa/Minsk',
  'Europe/Brussels' => 'Europa/Bruxelles',
  'Europe/Sofia' => 'Europa/Sofia',
  'Europe/Prague' => 'Europa/Prag',
  'Europe/Copenhagen' => 'Europa/København',
  'Atlantic/Faeroe' => 'Atlantic/Færøerne',
  'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
  'America/Scoresbysund' => 'Amerika/Scoresbysund',
  'America/Godthab' => 'Amerika/Nuuk',
  'America/Thule' => 'Amerika/Thule',
  'Europe/Tallinn' => 'Europa/Tallinn',
  'Europe/Helsinki' => 'Europa/Helsinki',
  'Europe/Paris' => 'Europa/Paris',
  'Europe/Berlin' => 'Europa/Berlin',
  'Europe/Gibraltar' => 'Europa/Gibraltar',
  'Europe/Athens' => 'Europa/Athen',
  'Europe/Budapest' => 'Europa/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europa/Rom',
  'Europe/Riga' => 'Europa/Riga',
  'Europe/Vaduz' => 'Europa/Vaduz',
  'Europe/Vilnius' => 'Europa/Vilnius',
  'Europe/Luxembourg' => 'Europa/Luxembourg',
  'Europe/Malta' => 'Europa/Malta',
  'Europe/Chisinau' => 'Europa/Chisinau',
  'Europe/Monaco' => 'Europa/Monaco',
  'Europe/Amsterdam' => 'Europa/Amsterdam',
  'Europe/Oslo' => 'Europa/Oslo',
  'Europe/Warsaw' => 'Europa/Warszawa',
  'Europe/Lisbon' => 'Europa/Lissabon',
  'Atlantic/Azores' => 'Atlantic/Azorerne',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europa/Bukarest',
  'Europe/Kaliningrad' => 'Europa/Kaliningrad',
  'Europe/Moscow' => 'Europa/Moskva',
  'Europe/Samara' => 'Europa/Samara',
  'Asia/Yekaterinburg' => 'Asien/Yekaterinburg',
  'Asia/Omsk' => 'Asien/Omsk',
  'Asia/Novosibirsk' => 'Asien/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asien/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asien/Irkutsk',
  'Asia/Yakutsk' => 'Asien/Yakutsk',
  'Asia/Vladivostok' => 'Asien/Vladivostok',
  'Asia/Sakhalin' => 'Asien/Sakhalin',
  'Asia/Magadan' => 'Asien/Magadan',
  'Asia/Kamchatka' => 'Asien/Kamchatka',
  'Asia/Anadyr' => 'Asien/Anadyr',
  'Europe/Belgrade' => 'Europa/Beograd' ,
  'Europe/Madrid' =>'Europa/Madrid' ,
  'Africa/Ceuta' => 'Afrika/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europa/Stockholm',
  'Europe/Zurich' => 'Europa/Zurich' ,
  'Europe/Istanbul' => 'Europa/Istanbul',
  'Europe/Kiev' => 'Europa/Kiev',
  'Europe/Uzhgorod' => 'Europa/Uzhgorod',
  'Europe/Zaporozhye' => 'Europa/Zaporozhye',
  'Europe/Simferopol' => 'Europa/Simferopol',
  'America/New_York' => 'Amerika/New_York',
  'America/Chicago' =>'Amerika/Chicago' ,
  'America/North_Dakota/Center' => 'America/North Dakota/Center',
  'America/Denver' => 'Amerika/Denver',
  'America/Los_Angeles' => 'Amerika/Los_Angeles',
  'America/Juneau' => 'Amerika/Juneau',
  'America/Yakutat' => 'Amerika/Yakutat',
  'America/Anchorage' => 'Amerika/Anchorage',
  'America/Nome' =>'Amerika/Nome' ,
  'America/Adak' => 'Amerika/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
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
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'Amerika/Cayman',
  'America/Costa_Rica' => 'Amerika/Costa_Rica',
  'America/Havana' => 'Amerika/Havana',
  'America/Dominica' => 'Amerika/Dominica',
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
  'America/St_Kitts' => 'Amerika/Saint_Kitts',
  'America/St_Lucia' => 'Amerika/Saint_Lucia',
  'America/Miquelon' => 'Amerika/Miquelon',
  'America/St_Vincent' => 'Amerika/Saint_Vincent',
  'America/Grand_Turk' => 'Amerika/Grand_Turk',
  'America/Tortola' => 'Amerika/Tortola',
  'America/St_Thomas' => 'Amerika/Saint_Thomas',
  'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'Amerika/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'Amerika/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'Amerika/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'Amerika/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'Amerika/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'Amerika/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'Amerika/Argentina/Ushuaia',
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
  'Pacific/Easter' => 'Pacific/Easter' ,
  'America/Bogota' => 'Amerika/Bogota',
  'America/Curacao' => 'Amerika/Curacao',
  'America/Guayaquil' => 'Amerika/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'Amerika/Cayenne',
  'America/Guyana' => 'Amerika/Guyana',
  'America/Asuncion' => 'Amerika/Asuncion',
  'America/Lima' => 'Amerika/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
  'America/Paramaribo' => 'Amerika/Paramaribo',
  'America/Port_of_Spain' => 'Amerika/Port_of_Spain',
  'America/Montevideo' => 'Amerika/Montevideo',
  'America/Caracas' => 'Amerika/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Favoritter';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'SuiteCRM',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'GoToMeeting',
    'IBMSmartCloud'=>'IBM SmartCloud',
    'Google' => 'Google Docs',
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
        2 => 'Adgang',
        3 => 'Ugyldig',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Kampagne' ,
    'email' => 'Emails',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Kampagne' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Kampagne' ,
    'email' => 'Emails',
  );
$app_strings ['documentation'] = array (
    'LBL_DOCS' => 'Dokumentation',
    'ULT' => '02_Sugar_Ultimate',
	'ENT' => '02_Sugar_Enterprise',
	'CORP' => '03_Sugar_Corporate',
	'PRO' => '04_Sugar_Professional',
	'COM' => '05_Sugar_Community_Edition'
);


// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Knowledge Base';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Udkast';
$app_list_strings['aok_status_list']['Expired'] = 'Udløbet';
$app_list_strings['aok_status_list']['In_Review'] = 'Til gennemsyn';
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
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepteret';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Declined';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accepter status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Denne side';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Alle rækker';
$app_strings['LBL_LISTVIEW_NONE'] = 'Ingen';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

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
        'Closed' => 'Lukket',
    );

$app_list_strings['case_status_default_key'] = 'Ny';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Ny',
        'Open_Assigned' => 'Tildelt',
        'Closed_Closed' => 'Lukket',
        'Open_Pending Input' => 'Afventer input',
        'Closed_Rejected' => 'Afvist',
        'Closed_Duplicate' => 'Kopi',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'En bruger',
        'Account' => 'Konto bruger',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'Use AOP Default',
    'singleUser' => 'En bruger',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Mindst-travl',
    'random' => 'Tilfældig',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rappoter';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Rapport grafer';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'Indeholder';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Starter med';
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
$app_list_strings['aor_condition_operator_list']['OR'] = 'eller';
$app_list_strings['aor_condition_type_list']['Value'] = 'Værdi';
$app_list_strings['aor_condition_type_list']['Field'] = 'Felt';
$app_list_strings['aor_condition_type_list']['Date'] = 'Dato';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutter';
$app_list_strings['aor_date_type_list']['hour'] = 'Timer';
$app_list_strings['aor_date_type_list']['day'] = 'Dage';
$app_list_strings['aor_date_type_list']['week'] = 'Uger';
$app_list_strings['aor_date_type_list']['month'] = 'Måneder';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Stigende';
$app_list_strings['aor_sort_operator']['DESC'] = 'Faldende';
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
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Månedlig';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Ugentlig';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Daily';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktive konto';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inaktiv';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Bruger';
$app_list_strings['aor_email_type_list']['Users'] = 'Users';
$app_list_strings['aor_assign_options']['all'] = 'ALL Users';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'I dag';
$app_list_strings['date_time_period_list']['yesterday'] = 'I går';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Sidste uge';
$app_list_strings['date_time_period_list']['last_month'] = 'Sidste måned';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Dette kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Sidste kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Advanceret';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Dag';
$app_strings['LBL_CRON_MONTH'] = 'Måned';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Daily';
$app_strings['LBL_CRON_WEEKLY'] = 'Ugentlig';
$app_strings['LBL_CRON_MONTHLY'] = 'Månedlig';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF Skabeloner';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produktkategorier';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkter';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Rådgiver';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Forhandler';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Andre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Udkast';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Forhandling';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Leveret';
$app_list_strings['quote_stage_dom']['On Hold'] = 'På hold';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Bekræftet';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Lukket og accepteret';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Lukket og tabt';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Lukket og død';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Godkendt';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Ikke Godkendt';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'pct.';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Rådgiver';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Forhandler';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Andre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Betalt';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Ikke Betalt';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annuleret';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Ikke Faktureret';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Faktureret';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'God';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Kunder';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakter';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Emner';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Ikke startet';
$app_list_strings['contract_status_list']['In Progress'] = 'I gang';
$app_list_strings['contract_status_list']['Signed'] = 'Underskrevet';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_GENERATE_LETTER'] = 'Generér Brev';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Vælg en Skabelon';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNo templates found.\nPlease go to the PDF templates module and create one';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow Conditions';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'Aktive konto';
$app_list_strings['aow_status_list']['Inactive'] = 'Inaktiv';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'Indeholder';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Starter med';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Er null';
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
$app_list_strings['aow_process_status_list']['Complete'] = 'Afsluttet';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'Afventer';
$app_list_strings['aow_process_status_list']['Failed'] = 'Mislykket';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'eller';
$app_list_strings['aow_condition_type_list']['Value'] = 'Værdi';
$app_list_strings['aow_condition_type_list']['Field'] = 'Felt';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Dato';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Værdi';
$app_list_strings['aow_action_type_list']['Field'] = 'Felt';
$app_list_strings['aow_action_type_list']['Date'] = 'Dato';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Tilfældig';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Værdi';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Felt';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutter';
$app_list_strings['aow_date_type_list']['hour'] = 'Timer';
$app_list_strings['aow_date_type_list']['day'] = 'Dage';
$app_list_strings['aow_date_type_list']['week'] = 'Uger';
$app_list_strings['aow_date_type_list']['month'] = 'Måneder';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'I dag';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Bruger';
$app_list_strings['aow_email_type_list']['Users'] = 'Users';
$app_list_strings['aow_email_to_list']['to'] = 'Til';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Altid';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Project Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Project Holidays';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kontakter';
$app_list_strings['holiday_resource_dom']['Users'] = 'Users';
$app_list_strings['duration_unit_dom']['Days'] = 'Dage';
$app_list_strings['duration_unit_dom']['Hours'] = 'Timer';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'View Gantt';
$app_strings['LBL_CREATE_PROJECT'] = 'Opret projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Map';
$app_strings['LBL_MAPS'] = 'Kort';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';
$app_strings['LBL_BUG_FIX'] = 'Bug Fix';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kort';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Map Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Map Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Map Address Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'Kunder';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakter';
$app_list_strings['map_module_type_list']['Cases'] = 'Sager';
$app_list_strings['map_module_type_list']['Leads'] = 'Emner';
$app_list_strings['map_module_type_list']['Meetings'] = 'Møder';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Muligheder';
$app_list_strings['map_module_type_list']['Project'] = 'Projekter';
$app_list_strings['map_module_type_list']['Prospects'] = 'Målgrupper';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Kunder';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contakten';
$app_list_strings['map_relate_type_list']['Cases'] = 'Sager';
$app_list_strings['map_relate_type_list']['Leads'] = 'Emner';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Møder';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Muligheder';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekter';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Målgrupper';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
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
$app_list_strings['marker_image_list']['company'] = 'Firma';
$app_list_strings['marker_image_list']['conference'] = 'Konference';
$app_list_strings['marker_image_list']['construction'] = 'Konstruktion';
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
$app_list_strings['marker_image_list']['friday'] = 'Fredag';
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
$app_list_strings['marker_image_list']['home'] = 'Hjem';
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
$app_list_strings['marker_image_list']['monday'] = 'Mandag';
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
$app_list_strings['marker_image_list']['photo'] = 'Billede';
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
$app_list_strings['marker_image_list']['sun'] = 'Søn';
$app_list_strings['marker_image_list']['sunday'] = 'Søndag';
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
$app_list_strings['marker_image_list']['thursday'] = 'Torsdag';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'Tirsdag';
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
$app_list_strings['marker_image_list']['wednesday'] = 'Onsdag';
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
$app_strings['LBL_RESCHEDULE_DATE'] = 'Dato';
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
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter Bruger';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Ny kunde';
$app_strings['LBL_QUICK_CONTACT'] = 'Opret kontakt';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Opret mulighed';
$app_strings['LBL_QUICK_LEAD'] = 'Opret emne';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Opret dokument';
$app_strings['LBL_QUICK_CALL'] = 'Planlæg opkald';
$app_strings['LBL_QUICK_TASK'] = 'Opret opgave';
$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Dashboard';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Klik på et ikon for at vælge antal kolonner';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Are you sure you want to delete the';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Discover SuiteCRM';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Opgaver', 'Meetings' => 'Møder', 'Calls' => 'Opkald', 'Notes' => 'Noter', 'Emails' => 'Emails' );

?>
