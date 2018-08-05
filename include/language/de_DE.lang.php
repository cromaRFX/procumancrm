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
  'language_pack_name' => 'Deutsch (Germany) - de_DE',
  'moduleList' =>
  array (
    'Home' => 'Startseite',
    'Contacts' => 'Kontakte',
    'Accounts' => 'Firmen',
    'Opportunities' => 'Verkaufschancen',
    'Cases' => 'Fälle',
    'Notes' => 'Notizen',
    'Calls' => 'Anrufe',
    'Emails' => 'E-Mails',
    'Meetings' => 'Termine',
    'Tasks' => 'Aufgaben',
    'Calendar' => 'Kalender',
    'Leads' => 'Interessenten',
    'Currencies' => 'Währungen',
    'Activities' => 'Aktivitäten',
    'Bugs' => 'Fehler',
    'Feeds' => 'RSS',
    'iFrames'=>'Meine Portale',
    'TimePeriods'=>'Zeiträume',
    'TaxRates'=>'Steuersätze',
    'ContractTypes' => 'Vertragsarten',
    'Schedulers'=>'Geplante Aufgaben',
    'Project'=>'Projekte',
    'ProjectTask'=>'Projektaufgaben',
    'Campaigns'=>'Kampagnen',
    'CampaignLog'=>'Kampagnen Log',
    'Documents'=>'Dokumente',
    'DocumentRevisions'=>'Dokument Überarbeitungen',
    'Connectors'=>'Konnektoren',
    'Roles'=>'Rollen',
    'Notifications'=>'Benachrichtigungen',
    'Sync'=>'Synchronisieren',
    'Users' => 'Benutzer',
    'Employees' => 'Mitarbeiter',
    'Administration' => 'Verwaltung',
    'ACLRoles' => 'Rollen',
    'InboundEmail' => 'Eingehende E-Mail',
    'Releases' => 'Versionen',
    'Prospects' => 'Zielkontakte',
    'Queues' => 'Warteschlangen',
    'EmailMarketing' => 'E-Mail Marketing',
    'EmailTemplates' => 'E-Mail Vorlagen',
    'SNIP' => "Email Archivierung",
    'ProspectLists' => 'Zielkontaktlisten',
    'SavedSearch' => 'Gespeicherte Suchen',
    'UpgradeWizard' => 'Aktualisierungsassistent',
    'Trackers' => 'Tracker Links',
    'TrackerPerfs' => 'Tracker Leistung',
    'TrackerSessions' => 'Tracker Sitzungen',
    'TrackerQueries' => 'Tracker-Abfragen',
    'FAQ' => 'Häufig gestellte Fragen',
    'Newsletters' => 'Newsletter',
    'SugarFeed'=>'SuiteCRM Feed',
    'KBDocuments' => 'Wissensbasis',
  'SugarFavorites'=>'SuiteCRM Favoriten',

    'OAuthKeys' => 'OAuth Nachfrager Schlüssel',
    'OAuthTokens' => 'OAuth Token',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Startseite',
    'Dashboard' => 'Übersicht',
    'Contacts' => 'Kontakte',
    'Accounts' => 'Firmen',
    'Opportunities' => 'Verkaufschancen',
    'Cases' => 'Fälle',
    'Notes' => 'Notizen',
    'Calls' => 'Anrufe',
    'Emails' => 'E-Mails',
    'Meetings' => 'Meetings',
    'Tasks' => 'Aufgaben',
    'Calendar' => 'Kalender',
    'Leads' => 'Interessenten',
    'Activities' => 'Aktivitäten',
    'Bugs' => 'Fehler',
    'KBDocuments' => 'Wissensdatenbank',
    'Feeds' => 'RSS',
    'iFrames'=>'Meine Seiten',
    'TimePeriods'=>'Zeiträume',
    'Project'=>'Projekte',
    'ProjectTask'=>'Projektaufgaben',
    'Prospects' => 'Zielkontakte',
    'Campaigns'=>'Kampagnen',
    'Documents'=>'Dokumente',
    'SugarFollowing'=>'SuiteCRM Following',
    'Sync'=>'Synchronisieren',
    'Users' => 'Benutzer',
  'SugarFavorites'=>'SuiteCRM Favoriten'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Ja',
    '2'=>'Nr.',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Analyst',
    'Competitor' => 'Mitbewerber',
    'Customer' => 'Kunden',
    'Integrator' => 'Systemintegrator',
    'Investor' => 'Investor',
    'Partner' => 'Partner',
    'Press' => 'Drücken Sie die EINGABETASTE',
    'Prospect' => 'Zielkontakt',
    'Reseller' => 'Fachhändler',
    'Other' => 'Andere',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Bekleidungsindustrie',
    'Banking' => 'Bankwesen',
    'Biotechnology' => 'Biotechnologie',
    'Chemicals' => 'Chemieindustrie',
    'Communications' => 'Kommunikation',
    'Construction' => 'Baugewerbe',
    'Consulting' => 'Beratung',
    'Education' => 'Bildungswesen',
    'Electronics' => 'Elektronik',
    'Energy' => 'Energie',
    'Engineering' => 'Ingenieurwesen',
    'Entertainment' => 'Unterhaltungsindustrie',
    'Environmental' => 'Umwelt',
    'Finance' => 'Finanzsektor',
    'Government' => 'Regierung',
    'Healthcare' => 'Gesundheitswesen',
    'Hospitality' => 'Gastgewerbe',
    'Insurance' => 'Versicherung',
    'Machinery' => 'Maschinenbau',
    'Manufacturing' => 'Produktion',
    'Media' => 'Medien',
    'Not For Profit' => 'Gemeinnützige Organisation',
    'Recreation' => 'Freizeitindustrie',
    'Retail' => 'Einzelhandel',
    'Shipping' => 'Versand',
    'Technology' => 'Technologie',
    'Telecommunications' => 'Telekommunikation',
    'Transportation' => 'Transportwesen',
    'Utilities' => 'Energieversorger',
    'Other' => 'Andere',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Kalt Akquise',
    'Existing Customer' => 'Bestehender Kunde',
    'Self Generated' => 'Selbst generierter Kunde',
    'Employee' => 'Mitarbeiter',
    'Partner' => 'Partner',
    'Public Relations' => 'Öffentlichkeitsarbeit',
    'Direct Mail' => 'Direktmail',
    'Conference' => 'Konferenz',
    'Trade Show' => 'Messe',
    'Web Site' => 'Webseite',
    'Word of mouth' => 'Mund zu Mund Propaganda',
    'Email' => 'E-Mail',
    'Campaign'=>'Kampagne',
    'Other' => 'Andere',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Vorhandene Business',
    'New Business' => 'Neues Geschäft',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Umsatz',
    'Investment'=>'Investition',
    'Expected_Revenue'=>'Erwarteter Umsatz',
    'Budget'=>'Budget',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Hauptentscheidungsträger',
    'Business Decision Maker' => 'Business Entscheidungsträger',
    'Business Evaluator' => 'Business Vorentscheider',
    'Technical Decision Maker' => 'Technischer Entscheidungsträger',
    'Technical Evaluator' => 'Technik Vorentscheider',
    'Executive Sponsor' => 'Führungskraft',
    'Influencer' => 'Einflussreiche Person',
    'Other' => 'Andere',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Hauptkontakt',
    'Alternate Contact' => 'Zweitkontakt',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => '15 Tage netto',
    'Net 30' => '30 Tage netto',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'Elastic Search'
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
    'Closed Lost' => 'Verloren',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Entwurf',
    'Negotiation' => 'Verhandlung',
    'Delivered' => 'Geliefert',
    'On Hold' => 'Abwarten',
    'Confirmed' => 'Bestätigt',
    'Closed Accepted' => 'Gewonnen',
    'Closed Lost' => 'Verloren',
    'Closed Dead' => 'Wird nicht realisiert',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => 'Alle 30 Minuten',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Anruf',
    'Meeting' => 'Meetings',
    'Task' => 'Aufgabe',
    'Email' => 'E-Mail',
    'Note' => 'Notiz',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Hr.',
        'Ms.' => 'Fr.',
        'Mrs.' => 'Fr.',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 90000,
  'reminder_time_options' => array( 60=> '1 Minute vorher',
                                  300=> '5 Minuten vorher',
                                  600=> '10 Minuten vorher',
                                  900=> '15 Minuten vorher',
                                  1800=> '30 Minuten vorher',
                                  3600=> '1 Stunde vorher',
                                  7200 => '2 Stunden vorher',
                                  10800 => '3 Stunden vorher',
                                  18000 => '5 Stunden vorher',
                                  86400 => '1 Tag vorher',
                                 ),

  'task_priority_default' => 'Mittel',
  'task_priority_dom' =>
  array (
    'High' => 'Hoch',
    'Medium' => 'Mittel',
    'Low' => 'Niedrig',
  ),
  'task_status_default' => 'Nicht begonnen',
  'task_status_dom' =>
  array (
    'Not Started' => 'Nicht begonnen',
    'In Progress' => 'In Bearbeitung',
    'Completed' => 'Abgeschlossen',
    'Pending Input' => 'Rückmeldung ausstehend',
    'Deferred' => 'Zurückgestellt',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Geplant',
    'Held' => 'Durchgeführt',
    'Not Held' => 'Nicht durchgeführt',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Andere',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Geplant',
    'Held' => 'Durchgeführt',
    'Not Held' => 'Nicht durchgeführt',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Eingehend',
    'Outbound' => 'Ausgehend',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Neue',
    'Assigned' => 'Zugewiesen',
    'In Process' => 'In Arbeit',
    'Converted' => 'Umgewandelt',
    'Recycled' => 'Wiedereröffnet',
    'Dead' => '\'Gestorben\'',
  ),
   'gender_list' =>
  array (
    'male' => 'Männlich',
    'female' => 'Weiblich',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Neu',
  'case_status_dom' =>
  array (
    'New' => 'Neue',
    'Assigned' => 'Zugewiesen',
    'Closed' => 'Abgeschlossen',
    'Pending Input' => 'Rückmeldung ausstehend',
    'Rejected' => 'Abgelehnt',
    'Duplicate' => 'Duplizieren',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Hoch',
    'P2' => 'Mittel',
    'P3' => 'Niedrig',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Stammbenutzer',
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
    'Terminated' => 'Beendet',
    'Leave of Absence' => 'Abwesend',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Hoch',
        'Medium' => 'Mittel',
        'Low' => 'Niedrig',
    ),
    'project_task_priority_default' => 'Mittel',

    'project_task_status_options' => array (
        'Not Started' => 'Nicht begonnen',
        'In Progress' => 'In Bearbeitung',
        'Completed' => 'Abgeschlossen',
        'Pending Input' => 'Rückmeldung ausstehend',
        'Deferred' => 'Zurückgestellt',
    ),
    'project_task_utilization_options' => array (
        '0' => 'Keine Einträge vorhanden',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Entwurf',
        'In Review' => 'In Durchsicht',
        'Underway' => 'Laufend',
        'On_Hold' => 'Gesperrt',
        'Completed' => 'Abgeschlossen',
    ),
    'project_status_default' => 'Entwurf',

    'project_duration_units_dom' => array (
        'Days' => 'Tage',
        'Hours' => 'Stunden',
    ),

    'project_priority_options' => array (
        'High' => 'Hoch',
        'Medium' => 'Mittel',
        'Low' => 'Niedrig',
    ),
    'project_priority_default' => 'Mittel',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Firmen',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Firmen',
    'Opportunities' => 'Verkaufschancen',
    'Cases' => 'Fälle',
    'Leads' => 'Interessenten',
    'Contacts' => 'Kontakte', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Fehler',
    'Project' => 'Projekte',

    'Prospects' => 'Zielkontakte',
    'ProjectTask' => 'Projektaufgaben',


    'Tasks' => 'Aufgaben',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Firmen',
    'Contacts' => 'Kontakte',
    'Opportunities' => 'Verkaufschancen',
    'Tasks' => 'Aufgaben',
    'Emails' => 'E-Mails',

    'Bugs' => 'Fehler',
    'Project' => 'Projekte',
    'ProjectTask' => 'Projektaufgaben',
    'Prospects' => 'Zielkontakte',
    'Cases' => 'Fälle',
    'Leads' => 'Interessenten',

    'Meetings' => 'Meetings',
    'Calls' => 'Anrufe',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Firmen',
    'Contacts' => 'Kontakte',
    'Tasks' => 'Aufgaben',
    'Opportunities' => 'Verkaufschancen',



    'Bugs' => 'Fehler',
    'Cases' => 'Fälle',
    'Leads' => 'Interessenten',

    'Project' => 'Projekte',
    'ProjectTask' => 'Projektaufgaben',

    'Prospects' => 'Zielkontakte',

  ),

  'issue_priority_default_key' => 'Mittel',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Dringend',
    'High' => 'Hoch',
    'Medium' => 'Mittel',
    'Low' => 'Niedrig',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Akzeptiert',
    'Duplicate' => 'Duplizieren',
    'Closed' => 'Abgeschlossen',
    'Out of Date' => 'Abgelaufen',
    'Invalid' => 'Ungültige',
  ),

  'issue_status_default_key' => 'Neu',
  'issue_status_dom' =>
  array (
    'New' => 'Neue',
    'Assigned' => 'Zugewiesen',
    'Closed' => 'Abgeschlossen',
    'Pending' => 'Ausstehend',
    'Rejected' => 'Abgelehnt',
  ),

  'bug_priority_default_key' => 'Mittel',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Dringend',
    'High' => 'Hoch',
    'Medium' => 'Mittel',
    'Low' => 'Niedrig',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Akzeptiert',
    'Duplicate' => 'Duplizieren',
    'Fixed' => 'Festgelegt',
    'Out of Date' => 'Abgelaufen',
    'Invalid' => 'Ungültige',
    'Later' => 'Später',
  ),
  'bug_status_default_key' => 'Neu',
  'bug_status_dom' =>
  array (
    'New' => 'Neue',
    'Assigned' => 'Zugewiesen',
    'Closed' => 'Abgeschlossen',
    'Pending' => 'Ausstehend',
    'Rejected' => 'Abgelehnt',
  ),
   'bug_type_default_key' => 'Fehler',
  'bug_type_dom' =>
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Eigenschaft',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Verwaltung',
    'Product' => 'Produkt',
    'User' => 'Benutzer',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Intern',
    'Forum' => 'Forum',
    'Web' => 'Web',
    'InboundEmail' => 'Eingehende E-Mail'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Firmen',
    'Activities' => 'Aktivitäten',
    'Bugs' => 'Fehler',
    'Calendar' => 'Kalender',
    'Calls' => 'Anrufe',
    'Campaigns' => 'Kampagnen',
    'Cases' => 'Fälle',
    'Contacts' => 'Kontakte',
    'Currencies' => 'Währungen',
  'Dashboard' => 'Übersicht',
  'Documents' => 'Dokumente',
    'Emails' => 'E-Mails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Planungen',
    'Help' => 'Hilfe',
    'Home' => 'Startseite',
  'Leads' => 'Interessenten',
  'Meetings' => 'Termine',
    'Notes' => 'Notizen',
    'Opportunities' => 'Verkaufschancen',
    'Outlook Plugin' => 'Outlook-Plugin',
    'Projects' => 'Projekte',
    'Quotes' => 'Angebote',
    'Releases' => 'Versionen',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Aktualisieren',
    'Users' => 'Benutzer',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Planung',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Fertig',
        'In Queue' => 'In Warteschlange',
        'Sending'=> 'Wird gesendet',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telefonverkauf',
        'Mail' => 'Postversand',
        'Email' => 'E-Mail',
        'Print' => 'Drucken',
        'Web' => 'Web',
        'Radio' => 'Radio ',
        'Television' => 'Fernsehen',
        'NewsLetter' => 'Newsletter',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Wöchentlich',
        'Monthly' => 'Monatlich',
        'Quarterly' => 'Vierteljährlich',
        'Annually' => 'Jährlich',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"Januar",
                '2'=>"Februar",
                '3'=>"(GMT + 3) Moskau",
                '4'=>"(GMT + 4) Kabul",
                '5'=>"Alle 5 Minuten",
                '6'=>"(GMT + 6) Astana",
                '7'=>"(GMT + 7) Bangkok",
                '8'=>"(GMT + 8) Perth",
                '9'=>"(GMT + 9) Seoul",
                '10'=>"10",
                '11'=>"(GMT + 11) Solomonen Inseln",
                '12'=>"(GMT + 12) Auckland",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Jan",
                '2'=>"Feb",
                '3'=>"Mär",
                '4'=>"Apr",
                '5'=>"Alle 5 Minuten",
                '6'=>"Jun",
                '7'=>"Jul",
                '8'=>"Aug",
                '9'=>"Sept",
                '10'=>"Okt",
                '11'=>"Nov",
                '12'=>"Dez",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Sonntag",
                '2'=>"Montag",
                '3'=>"Dienstag",
                '4'=>"Mittwoch",
                '5'=>"Donnerstag",
                '6'=>"Freitag",
                '7'=>"Samstag",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"So",
                '2'=>"Mo",
                '3'=>"Di",
                '4'=>"Mi",
                '5'=>"Do",
                '6'=>"Fr",
                '7'=>"Sa",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"vormittags",
                'pm'=>"PM"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'UHR',
                 'PM'=>'Nachmittags'
        ),

    'dom_report_types'=>array(
                'tabular'=>'Zeilen und Spalten',
                'summary'=>'Summe',
                'detailed_summary'=>'Summe mit Details',
                'Matrix' => 'Matrix',
        ),


    'dom_email_types'=> array(
        'out'       => 'Gesendet',
        'archived'  => 'Archiviert',
        'draft'     => 'Entwurf',
        'inbound'   => 'Eingehend',
        'campaign'  => 'Kampagne'
    ),
    'dom_email_status' => array (
        'archived'  => 'Archiviert',
        'closed'    => 'Abgeschlossen',
        'draft'     => 'Entwurf',
        'read'      => 'Gelesen',
        'replied'   => 'Beantwortet',
        'sent'      => 'Gesendet',
        'send_error'=> 'Fehlermeldung senden',
        'unread'    => 'Ungelesen',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Archiviert',
    ),

    'dom_email_server_type' => array(   ''          => 'Standard E-Mail Format',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--Kein(e)--',
                                     'createcase'  => 'Fall erstellen',
                                     'bounce'   => 'Nicht zustellbare bearbeiten',
    ),
    'dom_email_distribution'=> array(''             => 'Standard E-Mail Format',
                                     'direct'       => 'Direkt zuweisen',
                                     'roundRobin'   => 'Umlaufverfahren',
                                     'leastBusy'    => 'geringste Auslastung',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Umlaufverfahren',
                                                     'leastBusy'    => 'geringste Auslastung',
    ),
    'dom_email_errors'      => array(1 => 'Wählen Sie nur einen User aus wenn sie die Artikel direkt zuordnen',
                                     2 => 'Beim direkt Zuweisen müssen die markierten zugewiesen werden.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Ja',
                                     'bool_false' => 'Nein',
    ),
    'dom_int_bool'          => array(1 => 'Am',
                                     0 => 'Nein',
    ),
    'dom_switch_bool'       => array ('on' => 'Am',
                                        'off' => 'Nein',
                                        '' => 'Standard E-Mail Format', ),

    'dom_email_link_type'   => array(   'sugar'     => 'SuiteCRM E-Mail-Client',
                                        'mailto'    => 'Externer E-Mail Client'),


    'dom_email_editor_option'=> array(  ''          => 'Standard E-Mail Format',
                                        'html'      => 'HTML E-Mail',
                                        'plain'     => 'Reine Text E-Mail'),

    'schedulers_times_dom'  => array(   'not run'       => 'Zeitvorgabe abgelaufen, nicht ausgeführt',
                                        'ready'         => 'Bereit',
                                        'in progress'   => 'In Bearbeitung',
                                        'failed'        => 'Fehler bei',
                                        'completed'     => 'Abgeschlossen',
                                        'no curl'       => 'Nicht gelaufen: cURL nicht verfügbar',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Minuten',
        'hour' => 'Stunden',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Direkt',
    'Rollup' => 'Rollup',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Wissensgrundlage',
    'Sales' => 'Verkauf',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Werbematerial',
    'Product Brochures' => 'Produktbroschüren',
    'FAQ' => 'Häufig gestellte Fragen',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Aktiv',
    'Draft' => 'Entwurf',
    'FAQ' => 'Häufig gestellte Fragen',
    'Expired' => 'Abgelaufen',
    'Under Review' => 'Wird überprüft',
    'Pending' => 'Ausstehend',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Serienbrief',
    'eula'=>'ENDBENUTZER-LIZENZVERTRAG',
    'nda'=>'NDA',
    'license'=>'Lizenzvereinbarung',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Bestätigen',
    'decline' => 'Ablehnen',
    'tentative' => 'Vorläufig',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Akzeptiert',
    'decline' => 'Abegelehnt',
    'tentative' => 'Vorläufig',
    'none'      => 'Kein(e)',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'Alle 15 Minuten',
                                    '30'=>'Alle 30 Minuten',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => 'Standard E-Mail Format',
    	'Daily'	=> 'Tag(e)',
	'Weekly' => 'Wöchentlich',
	'Monthly' => 'Monatlich',
	'Yearly' => 'Jahr(e)',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'Tag(e)',
        'Weekly' => 'Woche(n)',
        'Monthly' => 'Monat(e)',
        'Yearly' => 'Jahr(e)',
    ),

    'duration_dom' => array(
    	'' => 'Standard E-Mail Format',
    	'900' => '15 Minuten',
	'1800' => '30 Minuten',
	'2700' => '45 Minuten',
	'3600' => '1 Stunde',
	'5400' => '1.5 Stunden',
	'7200' => '2 Stunden',
	'10800' => '3 Stunden',
	'21600' => '6 Stunden',
	'86400' => '1 Tag',
	'172800' => '2 Tage',
	'259200' => '3 Tage',
	'604800' => '1 Woche',
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
    'seed' => 'Muster',
    'exempt_domain' => 'Unterdrückungsliste - nach Domäne',
    'exempt_address' => 'Unterdrückungsliste - nach E-Mail Adresse',
    'exempt' => 'Unterdrückungsliste - nach ID',
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
    'targeted' => 'Nachricht gesendet/versucht',
    'send error'=>'Nicht zustellbar, andere',
    'invalid email'=>'Nicht zustellbar, ungültige E-Mail',
    'link'=>'Geklickter Link',
    'viewed'=>'Gelesene Mitteilung',
    'removed'=>'Abgemeldet',
    'lead'=>'Erstellte Interessenten',
    'contact'=>'Neue Kontakte',
    'blocked'=>'Abgelehnt durch Adresse oder Domain',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Kontakte',
    'Users'=>'Benutzer',
    'Prospects'=>'Zielkontakte',
    'Leads'=>'Interessenten',
    'Accounts'=>'Firmen',
  ),
  'merge_operators_dom' => array (
    'like'=>'Enthält',
    'exact'=>'Genau',
    'start'=>'Beginnt mit',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'"Ja"',
    'false'=>'Nr.',
    'required'=>'Erforderlich',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Inaktiv',
        '1'=>'Geringe Verstärkung',
        '2'=>'Mittlere Verstärkung',
        '3'=>'Hoher Verstärkung',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Inaktiv',
        1=>'Aktiv',
  ),

  'navigation_paradigms' => array(
        'm'=>'Module',
        'gm'=>'Gruppierte Module',
  ),


    'projects_priority_options' => array (
        'high'      => 'Hoch',
        'medium'    => 'Mittel',
        'low'       => 'Niedrig',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Nicht begonnen',
        'inprogress'    => 'In Bearbeitung',
        'completed'     => 'Abgeschlossen',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Legende anzeigen',
        'collapselegend'    => 'Legende verbergen',
        'clickfordrilldown' => 'Klick zum Drilldown',
        'drilldownoptions'  => 'Drill Down Optionen',
        'detailview'        => 'Detailansicht...',
        'piechart'          => 'Tortendiagramm',
        'groupchart'        => 'Gruppendiagramm',
        'stackedchart'      => 'Stapelgrafik',
        'barchart'      => 'Balkendiagramm',
        'horizontalbarchart'   => 'Waagrechtes Balkendiagramm',
        'linechart'         => 'Liniendiagramm',
        'noData'            => 'Daten nicht verfügbar',
        'print'       => 'Drucken',
        'pieWedgeName'      => 'Segmente',
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
        '\'' => 'Apostroph (\')',
        '"' => 'Doppelte Anführungszeichen (")',
        '' => 'Standard E-Mail Format',
        'other' => 'Andere:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Andere:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Neues Fenster',
        '_self' => 'Gleiches Fenster',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => 'Manuell',
        '30'  => 'Alle 30 Sekunden',
        '60'  => 'Jede Stunde',
        '180'   => 'Alle 3 Minuten',
        '300'   => 'Alle 5 Minuten',
        '600'   => 'Alle 10 Minuten',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Nie',
        '30'  => 'Alle 30 Sekunden',
        '60'  => 'Jede Stunde',
        '180'   => 'Alle 3 Minuten',
        '300'   => 'Alle 5 Minuten',
        '600'   => 'Alle 10 Minuten',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'Gleich',
    'not_equal' => 'Nicht an',
    'greater_than' => 'Nach',
    'less_than' => 'Vor dem',
    'last_7_days' => 'Letzte 7 Tage',
    'next_7_days' => 'Nächsten 7 Tage',
    'last_30_days' => 'Letzte 30 Tage',
    'next_30_days' => 'Nächsten 30 Tage',
    'last_month' => 'Letzten Monat',
    'this_month' => 'Diesen Monat',
    'next_month' => 'Nächster Monat',
    'last_year' => 'Letztes Jahr',
    'this_year' => 'Dieses Jahr',
    'next_year' => 'Nächstes Jahr',
    'between' => 'ist zwischen',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'Gleich',
    'not_equal' => 'Ist Ungleich',
    'greater_than' => 'Groesser als',
    'greater_than_equals' => 'Größer oder gleich ',
    'less_than' => 'Kleiner als',
    'less_than_equals' => 'Kleiner oder gleich ',
    'between' => 'ist zwischen',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Kopieren',
        'move' => 'Verschieben',
        'donothing' => 'Nichts Unternehmen',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Weiter',
  'LBL_TOUR_SKIP' => 'Überspringen',
  'LBL_TOUR_BACK' => 'Zurück',
  'LBL_TOUR_CLOSE' => 'Schließen',
  'LBL_TOUR_TAKE_TOUR' => 'Kommen Sie mit auf einen Rundgang',
  'LBL_MY_AREA_LINKS' => 'Meine Gebietslinks:' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Luft bekommen' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Willkommen' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Erweiterte Suche' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'Weitere Details' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Inline editieren' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Ansicht' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Suchen' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Entfernen' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Hinzufügen' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Spalte' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 Spalten' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 Spalten' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Erweiterte Suche' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Hinzufügen' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Verstecken/Anzeigen' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Löschen' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Hinzufügen' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Leeren' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Entfernen' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Hinzufügen' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Firmenlogo' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Kalender' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Erweitert',
    'LBL_BASIC' => 'Einfach',
    'LBL_MODULE_FILTER' => 'Filtern nach',
    'LBL_CONNECTORS_POPUPS'=>'Konnektoren Pop-ups',
    'LBL_CLOSEINLINE'=>'Schließen',
    'LBL_EDITINLINE'=>'Bearbeiten',
    'LBL_VIEWINLINE'=>'Ansicht',
    'LBL_INFOINLINE'=>'Information',
    'LBL_POWERED_BY_SUGARCRM' => 'Powered by SugarCRM',
    'LBL_PRINT' => 'Drucken',
    'LBL_HELP' => 'Hilfe',
    'LBL_ID_FF_SELECT' => 'Auswählen',
    'DEFAULT'                              => 'Einfach',
    'LBL_SORT'                              => 'Sortieren',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Server hinzufügen...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'SMTP über SSL oder TLS aktivieren',
    'LBL_NO_ACTION'                         => 'Es gibt keine Aktion mit diesem Namen.',
    'LBL_NO_DATA'                           => 'Keine Daten',
    'LBL_ROUTING_ADD_RULE'                  => 'Regel hinzufügen',
    'LBL_ROUTING_ALL'                       => 'Mindestens',
    'LBL_ROUTING_ANY'                       => 'Beliebige',
    'LBL_ROUTING_BREAK'                     => 'Minus',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Abbrechen',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Regel speichern',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'E-Mail kopieren',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Lösche SuiteCRM Objekt',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Datei löschen',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'E-Mail löschen',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'E-Mail weiterleiten',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'E-Mail markieren',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Als gelesen markieren',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Als ungelesen markieren',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'E-Mail verschieben',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Die folgenden Aktionen durchführen',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Auf E-Mail antworten',

    'LBL_ROUTING_CHECK_RULE'                => 'Es wurde ein Fehler gefunden:"',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Bitte überprüfen ob alle Felder markiert sind.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Sind Sie sicher, dass Sie diese Regel löschen wollen?"',

    'LBL_ROUTING_FLAGGED'                   => 'Markierung gesetzt',
    'LBL_ROUTING_FORM_DESC'                 => 'Gespeicherte Regeln werden sofort wirksam.',
    'LBL_ROUTING_FW'                        => 'WG:',
    'LBL_ROUTING_LIST_TITLE'                => 'Regeln',
    'LBL_ROUTING_MATCH'                     => 'Falls',
    'LBL_ROUTING_MATCH_2'                   => 'Von den folgenden Bedingungen sind erfüllt:',
    'LBL_NOTIFICATIONS'                     => 'Benachrichtigungen',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Mailinhalt',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'Aus',
    'LBL_ROUTING_MATCH_NAME'                => 'Betreff',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Hohe Priorität',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normale Priorität',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Niedrige Priorität',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'An',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Enthält',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Enthält nicht',

    'LBL_ROUTING_NAME'                      => 'Regelname',
    'LBL_ROUTING_NEW_NAME'                  => 'Neue Regel',
    'LBL_ROUTING_ONE_MOMENT'                => 'Einen Moment bitte...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Originalnachricht folgt.',
    'LBL_ROUTING_RE'                        => 'AW:',
    'LBL_ROUTING_SAVING_RULE'               => 'Regel speichern',
    'LBL_ROUTING_SUB_DESC'                  => 'Ausgewählte Regeln sind aktiv. Wählen Sie einen Namen um zu bearbeiten.',
    'LBL_ROUTING_TO'                        => 'bis',
    'LBL_ROUTING_TO_ADDRESS'                => 'an Adresse',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'mit Vorlage',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Dieser Eintrag enthält zur Zeit Werte in den Feldern Telefon Büro und Adresse. Um die Einträge mit jenen der Firma die Sie ausgewählt haben zu überschreiben, klicken Sie aufOK". Um die jetzigen Werte zu behalten klicken Sie aufAbbrechen"."',
  'LBL_DROP_HERE' => '[Hier ablegen]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Bearbeiten',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Mit GMail Standardwerten füllen',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Name',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Ausgehender Mail Server Eigenschaften',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Mailserver',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'SMTP Authentifizierung verwenden?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Kennwort',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'SSL bei der Verbindung verwenden',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Benutzername',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Standard',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Achtung: Fehlender Benutzername und Passwort für SMTP Server (ausgehendes Postfach).',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'Ein SMTP Benutzername wird benötigt',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'Ein SMTP Passwort wird benötigt',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'E-Mail Konto Verwaltung',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Das POP3 Protokoll wird in der nächsten SuiteCRM Version nicht mehr unterstützt. Es wird nur mehr IMAP unterstützt.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'E-Mail Konten zur Überwachung eingehender E-Mail konfigurieren',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'SMPT Mail Server Informationen für ausgehende E-Mails angeben.',
    'LBL_EMAIL_ADD'                         => 'E-Mail hinzufügen',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Fertig',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Leeren',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'An:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'Um/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Neue Liste',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'E-Mail Adresse',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Momentan können nur Kontakte editiert werden.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filtern',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Vorname/Firmenname',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Nachname',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Meine Kontakte',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Meine Verteilerliste',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Name',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Keine Adressen gefunden',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Speichern & zum Adressbuch hinzufügen',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Suchen',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'E-Mail Empfänger auswählen',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Adressbuch',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Berichte',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Adressbuch',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Achtung! Das ausgehende Konto das Sie zu löschen versuchen, ist mit einem eingehenden Konto verbunden. Sind Sie sicher dass Sie fortfahren wollen?',
    'LBL_EMAIL_ADDRESSES'                   => 'E-Mail',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'E-Mail Adresse',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'E-Mail Adressen',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Nach SuiteCRM importieren',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Aufgabe',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Anlage',
    'LBL_EMAIL_ATTACHMENT'                  => 'Anlage',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Vom lokalen System',
    'LBL_EMAIL_ATTACHMENTS2'                => 'SuiteCRM Dokumente anhängen',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Vorlage Anhänge',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Datei',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Dokument',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Eingebettet',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Abbrechen',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Zeichensatz',
    'LBL_EMAIL_CHECK'                       => 'E-Mails abrufen',
    'LBL_EMAIL_CHECKING_NEW'                => 'Nach neuen E-Mails überprüfen',
    'LBL_EMAIL_CHECKING_DESC'               => 'Einen Moment bitte... <br><br>Wenn das die erste Überprüfung ist,  kann der Vorgang einige Zeit dauern.',
    'LBL_EMAIL_CLOSE'                       => 'Schließen',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Überprüfe nach neuen E-Mails.<br><br>Bei großen Postfächern kann der Vorgang ggf. sehr lange dauern. Bitte warten...',
    'LBL_EMAIL_COMMON'                      => 'Allgemein',

    'LBL_EMAIL_COMPOSE'                     => 'E-Mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Bitte Empfänger für diese E-Mail angeben.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Gehört zu',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Diese E-Mail hat keinen Inhalt. Trotzdem senden?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Diese E-Mail hat kein Betreff. Trotzdem senden?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(kein Betreff)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Lesen & Neue E-Mail',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Senden von E-Mail Konto',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Optionen',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Bitte eine gültige E-Mail Adresse in An, CC und BCC verwenden',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'E-Mail verwerfen?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Diese Einträge aus dem Adressbuch entfernen?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Sind Sie sicher diese Signatur löschen zu wollen?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Erstellen beim Speichern--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Mehrere',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Leere',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Sendungsdatum',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Empfangsdatum',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'An Benutzer zugewiesen',
    'LBL_EMAIL_DATE_TODAY'                  => 'Heute',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Gestern',
    'LBL_EMAIL_DD_TEXT'                     => 'Ausgewählte E-Mail(s).',
    'LBL_EMAIL_DEFAULTS'                    => 'Standardeinstellungen',
    'LBL_EMAIL_DELETE'                      => 'Löschen',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Ausgewählte Nachrichten löschen?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'E-Mail erfolgreich gelöscht.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Nachricht wird gelöscht',
    'LBL_EMAIL_DETAILS'                     => 'Details',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'E-Mail(s) anzeigen {0} - {1} von {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'E-Mail Adresse(n) anzeigen {0} - {1} von {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Kontakt bearbeiten',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Bei Kontakten wird nur die Hauptadresse verwendet',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Verteilerliste anpassen',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Papierkorb leeren',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Ausgehenden Server löschen',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Cache Dateien leeren',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Keine E-Mails zur Anzeige.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Keine E-Mail Adressen zur Anzeige.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Ordnernamen müssen eindeutig und nicht leer sein. Bitte nochmals versuchen',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Der Ordner kann nicht gelöscht werden. Dieser bzw. dessen Unterordner haben E-Mails oder ein Postfach zugeordnet.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Der Ordner kann vom Inhalt her nicht bestimmt werden. Bitte erneut versuchen.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Bitte Ihre Einstellungen überprüfen.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Bitte Nachnamen eintragen.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Fehler gefunden:',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Sie haben keinen Zugang zu diesem Bereich. Bitte kontaktieren Sie den Administrator, um Zugriff zu erhalten.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'SuiteCRM Ordnernamen müssen eindeutig sein.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Bitte Suchkriterien eingeben.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Ein Fehler ist aufgetreten.',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Eine E-Mail Liste mit diesem Namen existiert bereits',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Nachricht vom Server entfernt',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Die E-Mail wurde entweder entfernt oder in einen anderen Ordner verschoben',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Verbindung mit dem Mailserver fehlgeschlagen. Bitte kontaktieren Sie Ihren Administrator.',
    'LBL_EMAIL_ERROR_MOVE'                  => 'E-Mails zwischen Servern und/oder E-Mail Konten zu verschieben wird momentan nicht unterstützt.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Fehler beim Verschieben.',
    'LBL_EMAIL_ERROR_NAME'                  => 'Ein Name wird benötigt.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => '"Von" Adresse wird benötigt. Bitte eine gültige E-Mail Adresse eingeben."',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Bitte eine Datei auswählen.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP Ordner können derzeit nicht umbenannt werden.',
    'LBL_EMAIL_ERROR_SERVER'                => 'Eine Mailserver Adresse wird benötigt.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'Das E-Mail-Konto könnte nicht gespeichert worden sein.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Kommunikationsfehler mit dem Mailserver',
    'LBL_EMAIL_ERROR_USER'                  => 'Es wird ein Loginname benötigt.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'Es wird ein Passwort benötigt.',
    'LBL_EMAIL_ERROR_PORT'                  => 'Ein Mailserver-Port wird benötigt.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'Es wird ein Serverprotokoll benötigt.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Es wird ein überwachter Ordner benötigt.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Es wird ein Papierkorb benötigt.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Diese Informationen sind nicht verfügbar',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'Es ist kein ausgehender Mail Server festgelegt.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Verzeichnisse',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Verschieben nach',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Hinzufügen',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Neuen Order hinzufügen',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Ordner umbenennen',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Speichern',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Diesen Order hinzufügen zu',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Dieser Ordner kann nicht geändert werden',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Wollen Sie diesen Ordner wirklich löschen?\nDieser Vorgang kann nicht rückgängig gemacht werden.\nAlle Unterordner werden auch gelöscht.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Neuer Ordnername',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Bevor diese Aktion durchgeführt werden kann bitte zuerst einen Ordner auswählen,',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Ordner-Management',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Gruppe verwenden',

    'LBL_EMAIL_FORWARD'                     => 'Weiterleiten',
    'LBL_EMAIL_DELIMITER'                   => '::"',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => '[[count]] von [[total]] E-Mails heruntergeladen',
    'LBL_EMAIL_FOUND'                       => 'Gefunden',
    'LBL_EMAIL_FROM'                        => 'Aus',
    'LBL_EMAIL_GROUP'                       => 'Gruppe',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Gruppe',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Startseite',
    'LBL_EMAIL_HTML_RTF'                    => 'HTML senden',
    'LBL_EMAIL_IE_DELETE'                   => 'E-Mail-Konto wird gelöscht',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Signatur wird gelöscht',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Wollen Sie dieses E-Mail-Konto wirklich löschen?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Erfolgreich gelöscht.',
    'LBL_EMAIL_IE_SAVE'                     => 'E-Mail-Kontoinformationen speichern',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'E-Mail importieren',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Importiere nach SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Einstellungen importieren',
    'LBL_EMAIL_INVALID'                     => 'Ungültige',
    'LBL_EMAIL_LOADING'                     => 'Wird geladen…',
    'LBL_EMAIL_MARK'                        => 'Markieren',
    'LBL_EMAIL_MARK_FLAGGED'                => 'Als markiert',
    'LBL_EMAIL_MARK_READ'                   => 'Als gelesen',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'Als unmarkiert',
    'LBL_EMAIL_MARK_UNREAD'                 => 'Als ungelesen',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Zuweisen an',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Ordner erstellen',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Neue E-Mail',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Ordner löschen',
    'LBL_EMAIL_MENU_EDIT'                   => 'Bearbeiten',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Papierkorb leeren',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Synchronisieren',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Cache Dateien leeren',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Entfernen',
    'LBL_EMAIL_MENU_RENAME'                 => 'Umbenennen',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Ordner umbenennen',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Umbenennen des Ordners',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Bitte treffen Sie Ihre Auswahl bevor Sie diesen Vorgang ausprobieren.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Ordner erstellen (Remote oder in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'E-Mail(s) nach SuiteCRM archiveren',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Den gewählten Verteilerliste e-mailen',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Diesem Kontakt e-mailen',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Kontakt entfernen',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Diese E-Mail(s) löschen',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Ordner löschen (Remote oder in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Kontakt bearbeiten',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Verteilerliste bearbeiten',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Alle Papierkörbe für Ihre Postfächer löschen',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Diese E-Mail(s) markieren',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Diese E-Mail(s) als gelesen markieren',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Markierung dieser E-Mail(s) aufheben',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Diese E-Mail(s) als ungelesen markieren',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Entfernt Verteilerlisten',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Ordner umbennenen (Remote oder in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Diese E-Mail(s) beantworten',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Allen Empfängern dieser E-Mail(s) antworten',

    'LBL_EMAIL_MESSAGES'                    => 'Nachrichten',

    'LBL_EMAIL_ML_NAME'                     => 'Listenname',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Gewählte Adresslisten',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Verfügbare Adresslisten',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Click</b> um mehrere auszuwählen<br/>(Mac Users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO'                          => 'Nr.',
    'LBL_EMAIL_NOT_SENT'                    => 'Ihre Anfrage kann vom System nicht bearbeitet werden. Bitte setzen Sie sich mit dem Systemadministrator in Verbindung.',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Einen Moment bitte...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Mehrere Nachrichten öffnen',
    'LBL_EMAIL_OPTIONS'                     => 'Optionen',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Schnelles Erstellen',
    'LBL_EMAIL_OPT_OUT'                     => 'Abgemeldet',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'Abgemeldet und ungültig',
    'LBL_EMAIL_PAGE_AFTER'                  => 'von {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Seite',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Aufgabe wird ausgeführt',
    'LBL_EMAIL_PRIMARY'                     => 'Primär',
    'LBL_EMAIL_PRINT'                       => 'Drucken',

    'LBL_EMAIL_QC_BUGS'                     => 'Fehler',
    'LBL_EMAIL_QC_CASES'                    => 'Anfrage',
    'LBL_EMAIL_QC_LEADS'                    => 'Interessent',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Kontakt',
    'LBL_EMAIL_QC_TASKS'                    => 'Aufgabe',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Verkaufschance',
    'LBL_EMAIL_QUICK_CREATE'                => 'Schnelles Erstellen',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Ordner wiederherstellen',
    'LBL_EMAIL_RELATE_TO'                   => 'Verknüpfen',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Beziehungen anzeigen',
    'LBL_EMAIL_RECORD'                => 'E-Mail Eintrag',
    'LBL_EMAIL_REMOVE'                      => 'Entfernen',
    'LBL_EMAIL_REPLY'                       => 'Antwort',
    'LBL_EMAIL_REPLY_ALL'                   => 'Allen Antworten',
    'LBL_EMAIL_REPLY_TO'                    => 'Antwort an',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'E-Mail Liste aufrufen',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'E-Mail Nachrichten aufrufen',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'E-Mail Einträge aufrufen',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Bitte wählen Sie nur einen E-Mail Eintrag aus',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Zum vorherigen Modul zurückkehren?',
    'LBL_EMAIL_REVERT'                      => 'Zurückkehren',
    'LBL_EMAIL_RELATE_EMAIL'                => 'E-Mail zuordnen',

    'LBL_EMAIL_RULES_TITLE'                 => 'Management regeln',

    'LBL_EMAIL_SAVE'                        => 'Speichern',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Speichern & Antworten',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Entwurf speichern',

    'LBL_EMAIL_SEARCHING'                   => 'Suche wird durchgeführt',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Erweiterte Suche',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Datum von',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Datum bis',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Textkörper',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Es wurden keine Treffer für Ihre Suchkriterien gefunden.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Suchergebnisse',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Einfache Suche',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'E-Mail-Konto suchen',

    'LBL_EMAIL_SELECT'                      => 'Auswählen',

    'LBL_EMAIL_SEND'                        => 'Senden',
    'LBL_EMAIL_SENDING_EMAIL'               => 'E-Mail wird gesendet',

    'LBL_EMAIL_SETTINGS'                    => 'Einstellungen',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 Zeilen',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 Spalten',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Layoutform',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'E-Mail-Konten',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Formular leeren',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'E-Mail bei Ansicht importieren',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Eingang neuer E-Mails überprüfen',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Vorschaufenster verwenden',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Popup-Fenster verwenden',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Anzahl an E-Mails pro Seite',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'E-Mail-Konto bearbeiten',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Ordner',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Von Adresse',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-Mail Adresse für Testnachrichten',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'An E-Mail Adresse',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Von Name',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'An diese Adresse antworten',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Vollbildschirm',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Alle E-Mail Konten synchronisieren',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'Es wurde soeben eine E-Mail mit den vorgesehenen Einstellungen für  Ausgangspost an die ausgewählte E-Mailadresse gesendet. Bitte stellen Sie sicher ob die E-Mail angekommen ist um zu überprüfen, ob die Einstellungen korrekt sind.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Dieser Vorgang synchronisiert alle E-Mail Konten und deren Inhalte.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Möchten Sie eine komplette Synchronisation durchführen?\nGroße E-Mail-Konten benötigen möglicherweise einige Minuten.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Halten Sie die Umschalttaste oder die Steuerungstaste gedrückt um mehrere Ordner auszuwählen.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Allgemein',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Verfügbare Gruppe von Ordnern',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Gruppenordner erstellen',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Gruppenordner speichern',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Gruppenordner wiederherstellen',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Gruppenordner bearbeiten',

    'LBL_EMAIL_SETTINGS_NAME'               => 'E-Mail Kontoname',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Wählen Sie die im Posteingang angezeigte Anzahl an E-Mails pro Seite.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'E-Mail-Konto wiederherstellen',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Regeln',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Die Einstellungen wurden gespeichert.\n\nUm die neuen Einstellungen zu übernommen, muss die Seite neu geladen werden.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Nur einfache Text-E-Mails senden',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Aktiv',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'E-Mail-Nachrichten pro Seite',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Reiter am Ende setzen',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Visuelle Einstellungen',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Einstellungen',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Zeige erweiterte Einstellungen',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Verfügbare-Ordner',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Fehler:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Der gewählte Postausgangs-Server für das genutzte E-Mail-Konto ist ungültig. Überprüfen Sie die Einstellungen oder wählen Sie einen anderen Postausgangs-Server aus.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Für das Senden von E-Mails wurde noch kein Postausgangs-Server konfiguriert. Bitte konfigurieren Sie einen Postausgangs-Server oder wählen Sie einen Postausgangs-Server für den verwendetn E-Mail Account unter Einstellungen >> E-Mail Account',
    'LBL_EMAIL_SHOW_READ'                   => 'Alle zeigen',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Alle ungelesenen zeigen',
    'LBL_EMAIL_SIGNATURES'                  => 'Signaturen',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Signatur erstellen',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Signatur Name',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Signatur Inhalt',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Andere',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Remote-Ordner ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ SuiteCRM-Ordner ]',
    'LBL_EMAIL_SUBJECT'                     => 'Betreff',
    'LBL_EMAIL_SUCCESS'                     => 'Erfolg',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SuiteCRM-Ordner',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Der Textteil der E-Mail Vorlage ist leer',
    'LBL_EMAIL_TEMPLATES'                   => 'Vorlagen',
    'LBL_EMAIL_TEXT_FIRST'                  => 'Erste Seite',
    'LBL_EMAIL_TEXT_PREV'                   => 'Vorherige Seite',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Nächste Seite',
    'LBL_EMAIL_TEXT_LAST'                   => 'Letzte Seite',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Aktualisieren',
    'LBL_EMAIL_TO'                          => 'An',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Liste umschalten',
    'LBL_EMAIL_VIEW'                        => 'Ansicht',
    'LBL_EMAIL_VIEWS'                       => 'Ansichten',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Header anzeigen',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Druckversion',
    'LBL_EMAIL_VIEW_RAW'                    => 'E-Mail Quelltext anzeigen',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Diese Funktion wird nicht unterstützt, wenn sie gemeinsam mit POP3 verwendet wird.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Standard Link Text',
    'LBL_EMAIL_YES'                         => '"Ja"',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Test E-Mail senden',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test E-Mail gesendet',
    'LBL_EMAIL_MESSAGE_NO'                  => 'Nachricht Nr.',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Import durchgeführt',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Der Import schlug fehl da die Nachricht entweder bereits importiert oder vom Server gelöscht wurde.',

    'LBL_LINK_NONE'=> 'Kein(e)',
    'LBL_LINK_ALL'=> 'Alle',
    'LBL_LINK_RECORDS'=> 'Datensätze',
    'LBL_LINK_SELECT'=> 'Auswählen',
    'LBL_LINK_ACTIONS'=> 'Aktionen',
    'LBL_LINK_MORE'=> 'Mehr',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Bestätigen",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "Möchten Sie dieses #Modul# schließen?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Diese Meldung in Zukunft nicht mehr anzeigen:",
    'LBL_INVALID_FILE_EXTENSION' => 'Ungültige Dateierweiterung',


    'ERR_AJAX_LOAD'     => 'Ein Fehler ist aufgetreten:',
    'ERR_AJAX_LOAD_FAILURE'     => 'Bei der Bearbeitung Ihrer Anfrage kam es zu einem Fehler, bitte versuchen Sie es später noch einmal.',
    'ERR_AJAX_LOAD_FOOTER' => 'Sollte der Fehler bestehen bleiben, dann lassen Sie bitte Ajax für diesen Modul durch Ihren Administrator deaktivieren.',
    'ERR_CREATING_FIELDS' => 'Fehler beim Ausfüllen von zusätzlichen Detailfeldern:',
    'ERR_CREATING_TABLE' => 'Fehler beim Anlegen der Tabelle:',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "Für die Dezimal- und Tausendertrennzeichen dürfen nicht die selben Zeichen verwendet werden.\n\n Bitte ändern Sie die Werte.",
    'ERR_DELETE_RECORD' => 'Es muss eine Datensatznummer angegeben werden, um diesen Kontakt zu löschen.',
    'ERR_EXPORT_DISABLED' => 'Exporte deaktiviert.',
    'ERR_EXPORT_TYPE' => 'Fehler beim Exportieren',
    'ERR_INVALID_AMOUNT' => 'Bitte einen gültigen Betrag eingeben.',
    'ERR_INVALID_DATE_FORMAT' => 'Das Datumsformat muss sein:',
    'ERR_INVALID_DATE' => 'Bitte ein gültiges Datum eingeben.',
    'ERR_INVALID_DAY' => 'Bitte einen gültigen Tag eingeben.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Keine gültige E-Mail Adresse.',
    'ERR_INVALID_FILE_REFERENCE' => 'Ungültiger Dateiverweis.',
    'ERR_INVALID_HOUR' => 'Bitte eine gültige Stunde eingeben.',
    'ERR_INVALID_MONTH' => 'Bitte einen gültigen Monat eingeben.',
    'ERR_INVALID_TIME' => 'Bitte eine gültige Uhrzeit eingeben.',
    'ERR_INVALID_YEAR' => 'Bitte eine gültige Jahreszahl mit 4 Stellen eingeben.',
    'ERR_NEED_ACTIVE_SESSION' => 'Um Inhalte zu exportieren, muss eine aktive Session vorhanden sein.',
    'ERR_NO_HEADER_ID' => 'Diese Funktion ist für dieses Design nicht verfügbar.',
    'ERR_NOT_ADMIN' => "Unautorisierter Zugriff auf die Administration.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Fehlendes Pflichtfeld:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Ungültiges Pflichtfeld:',
    'ERR_INVALID_VALUE' => 'Ungültiger Wert:',
    'ERR_NO_SUCH_FILE' =>'Diese Datei existiert im System nicht.',
    'ERR_NO_SINGLE_QUOTE' => 'Hochkomma kann nicht verwendet werden als',
    'ERR_NOTHING_SELECTED' =>'Treffen Sie eine Auswahl, bevor Sie fortfahren.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Eine Verkaufschance mit dem Namen %s ist bereits vorhanden. Bitte einen anderen Namen unten eingeben.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Es wurde kein Name für die Verkaufschance eingegeben. Bitte geben Sie unten einen Namen für die Verkaufschance ein.',
    'ERR_POTENTIAL_SEGFAULT' => 'Ein möglicher Apache Segmentation Fault wurde gefunden. Bitte informieren Sie Ihren System Administrator um das Problem zu bestätigen damit er/sie SuiteCRM informieren kann.',
    'ERR_SELF_REPORTING' => 'Mitarbeiter kann nicht an sich selbst berichten.',
    'ERR_SINGLE_QUOTE'  => 'Hochkommas werden für dieses Feld nicht unterstützt. Bitte ändern.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Kein passender Eintrag:',
    'ERR_SQS_NO_MATCH' =>'Kein Treffer',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Spezifizieren Sie den \'key\' Index in den displayParams Attributen für die Meta-Daten Definition',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Fehler: Der Portalname ist bereits einem anderen Kontakt zugeordnet',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Der Feldwert ist nicht kompatibel mit den verlangten Kommastellen',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Beim Speichern auf ein externes Konto ist ein Fehler aufgetreten.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Fehler beim Hochladen. Bitte stellen Sie sicher, dass die Datei, die Sie hochladen, nicht leer ist.',
    'ERR_NO_DB' => 'Kann keine Verbindung zur Datenbank aufbauen. Bitte sehen Sie in der Datei suitecrm.log nach.',
    'ERR_DB_FAIL' => 'Datenbank Fehler. Bitte sehen Sie in der Datei suitecrm.log nach.',
    'ERR_EXTERNAL_API_403' => 'Zugriff verweigert. Dateityp wird nicht unterstützt.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth Zugangs Token fehlt.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} Dateien können nur mit einer SuiteCRM {1} Datenbank benutzt werden.',


    'LBL_ACCOUNT'=>'Firma',
    'LBL_OLD_ACCOUNT_LINK'=>'Alte Firma',
    'LBL_ACCOUNTS'=>'Firmen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktivitäten',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Zusammenfassung anzeigen',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Zusammenfassung anzeigen',
    'LBL_ADD_BUTTON_KEY' => 'EIN',
    'LBL_ADD_BUTTON_TITLE' => 'Hinzufügen',
    'LBL_ADD_BUTTON' => 'Hinzufügen',
    'LBL_ADD_DOCUMENT' => 'Dokument hinzufügen',
    'LBL_REPLACE_BUTTON' => 'Ersetzen',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Zu einer Kontaktliste hinzufügen',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Zu einer Kontaktliste hinzufügen',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Zum Schließen klicken',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Schließen',
    'LBL_ADDITIONAL_DETAILS' => 'Weitere Details',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archivieren',
    'LBL_ASSIGNED_TO_USER'=>'Zugewiesen an Benutzer',
    'LBL_ASSIGNED_TO' => 'Zugewiesen an:',
    'LBL_BACK' => 'Zurück',
    'LBL_BILL_TO_ACCOUNT'=>'Rechnung an Firma',
    'LBL_BILL_TO_CONTACT'=>'Rechnung an Kontakt',
    'LBL_BILLING_ADDRESS'=>'Rechnungsadresse',
    'LBL_QUICK_CREATE_TITLE' => 'Schnelles Erstellen',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Kommerzielles Open-Source CRM',
    'LBL_BUGS'=>'Fehler',
    'LBL_BY' => 'durch',
    'LBL_CALLS'=>'Anrufe',
    'LBL_CALL'=>'Anruf',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Sende Kampagnen E-Mails in Warteschlange',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Ausführen',
    'LBL_CASE'=>'Anfrage',
    'LBL_CASES'=>'Fälle',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Kennwort ändern',
    'LBL_CHANGE_BUTTON_LABEL' => 'Ändern',
    'LBL_CHANGE_BUTTON_TITLE' => 'Ändern',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Alle markieren',
    'LBL_CITY' => 'Stadt',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Löschen',
    'LBL_CLEAR_BUTTON_TITLE' => 'Löschen',
    'LBL_CLEARALL' => 'Alle Markierungen entfernen',
    'LBL_CLOSE_BUTTON_TITLE' =>'Schließen',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Fenster schließen',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Alle schließen',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Alle schließen',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Schließen & neu erstellen',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Schließen & neu erstellen',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Offene Einträge:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'E-Mail verfassen',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'E-Mail verfassen',
    'LBL_SEARCH_DROPDOWN_YES'=>'"Ja"',
    'LBL_SEARCH_DROPDOWN_NO'=>'Nr.',
    'LBL_CONTACT_LIST' => 'Kontaktliste',
    'LBL_CONTACT'=>'Kontakt',
    'LBL_CONTACTS'=>'Kontakte',
    'LBL_CONTRACTS'=>'Verträge',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATE_BUTTON_LABEL' => 'Erstellen',
    'LBL_CREATED_BY_USER'=>'Erstellt von Benutzer',
    'LBL_CREATED_USER'=>'Erstellt von Benutzer',
    'LBL_CREATED_ID' => 'Erstellt von Id',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_CURRENT_USER_FILTER' => 'Meine Einträge:',
    'LBL_CURRENCY'=>'Währung:',
    'LBL_DOCUMENTS'=>'Dokumente',
    'LBL_DATE_ENTERED' => 'Erstellungsdatum:',
    'LBL_DATE_MODIFIED' => 'Änderungsdatum:',
    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_DUPLICATE_BUTTON' => 'Duplizieren',
    'LBL_DELETE_BUTTON' => 'Löschen',
    'LBL_DELETE' => 'Löschen',
    'LBL_DELETED'=>'Gelöscht',
    'LBL_DIRECT_REPORTS'=>'Direkte Berichte',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Fertig',
    'LBL_DONE_BUTTON_TITLE' => 'Fertig',
    'LBL_DST_NEEDS_FIXIN' => 'Das Programm benötigt die Anwendung des Sommerzeit-Patches. Bitte klicken Sie auf den Reparaturlink im Admin-Bereich und wenden Sie den Sommerzeit-Patch an.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Als neu bearbeiten',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Als neu bearbeiten',
    'LBL_FAVORITES' => 'Favoriten',
    'LBL_FILTER_MENU_BY' => 'Menü filtern nach',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Bitte wählen Sie eine vCard Datei aus',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard hat nicht alle benötigten Felder für dieses Modul. Bitte sehen Sie sich dazu die Datei suitecrm.log an.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Die hochgeladene Datei übersteigt das 30000 byte Limit, das im HTML Formular spezifiziert war.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Beim Hochladen der vCard-Datei ist ein Fehler aufgetreten. Bitte sehen Sie in der suitecrm.log Datei nach.',
    'LBL_IMPORT_VCARD' => 'vCard importieren:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'VCard importieren',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'VCard importieren',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Ansicht',
    'LBL_VIEW_BUTTON_TITLE' => 'Ansicht',
    'LBL_VIEW_BUTTON' => 'Ansicht',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-Mail als PDF-Datei',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-Mail als PDF-Datei',
    'LBL_EMAILS'=>'E-Mails',
    'LBL_EMPLOYEES' => 'Mitarbeiter',
    'LBL_ENTER_DATE' => 'Datum eingeben',
    'LBL_EXPORT_ALL' => 'Alle exportieren',
    'LBL_EXPORT' => 'Exportieren',
    'LBL_FAVORITES_FILTER' => 'Favoriten:',
    'LBL_GO_BUTTON_LABEL' => 'Los',
    'LBL_GS_HELP' => 'Die Felder dieses Moduls, die in dieser Suche verwendet wurden, erscheinen oben. Der markierte Text deckt sich mit Ihren Suchkriterien.',
    'LBL_HIDE'=>'Ausblenden',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => 'Importieren',
    'LBL_IMPORT_STARTED' => 'Import gestartet:',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Ein benutzerdefiniertes Trennzeichen muss angegeben werden.',
    'LBL_LAST_VIEWED' => 'Zuletzt angezeigt',
    'LBL_SHOW_LESS' => 'Weniger anzeigen',
    'LBL_SHOW_MORE' => 'Mehr anzeigen',
    'LBL_TODAYS_ACTIVITIES' => 'Aktuelle Aktivitäten',
    'LBL_LEADS'=>'Interessenten',
    'LBL_LESS' => 'weniger',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LBL_CAMPAIGNLOG' => 'KampagnenLog',
    'LBL_CAMPAIGN_CONTACT'=>'Kampagnen',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'Sitemap',
    'LBL_THEME'=>'Design:',
    'LBL_THEME_PICKER'=>'Seitendesign',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Achtung: Internet Explorer 6 wird von diesem Design nicht unterstützt. Klicken Sie auf OK, um es trotzdem zu verwenden, oder auf Abbrechen, um ein anderes Design auszuwählen.',
    'LBL_FOUND_IN_RELEASE'=>'Gefunden in Version',
    'LBL_FIXED_IN_RELEASE'=>'Behoben in Version',
    'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
    'LBL_LIST_ASSIGNED_USER' => 'Benutzer',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktname',
    'LBL_LIST_CONTACT_ROLE' => 'Kontakt Rolle',
    'LBL_LIST_DATE_ENTERED'=>'Erstellungsdatum',
    'LBL_LIST_EMAIL' => 'E-Mail',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_OF' => 'der',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Gehört zu:',
    'LBL_LIST_USER_NAME' => 'Benutzername',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Möchten Sie wirklich die gesamte Liste aktualisieren?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Bitte mindestens 1 Datensatz auswählen, um fortzufahren.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Bitte wählen Sie mindestens 2 Datensätze aus, um fortzufahren.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Bitte weniger als 10 Datensätze auswählen, um fortzufahren.',
    'LBL_LISTVIEW_ALL' => 'Alle',
    'LBL_LISTVIEW_NONE' => 'Alle abwählen',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Diese Seite auswählen',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Alle auswählen',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Ausgewählte Datensätze',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Ausgewählt: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Hans',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Muster',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Vorstandsvorsitzender',
    'LBL_LOGIN_TO_ACCESS' => 'Bitte einloggen, um auf diesen Bereich zuzugreifen.',
    'LBL_LOGOUT' => 'Abmelden',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Serienbrief',
    'LBL_MASS_UPDATE' => 'Massenänderung',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Es gibt keine verfügbaren Felder für eine Massenaktualisierung',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Haupt-E-mail abmelden',
    'LBL_MEETINGS'=>'Termine',
    'LBL_MEETING'=>'Meetings',
    'LBL_MEETING_GO_BACK'=>'Zurück zum Meeting',
    'LBL_MEMBERS'=>'Mitglieder',
    'LBL_MEMBER_OF'=>'Mitglied von',
    'LBL_MODIFIED_BY_USER'=>'Geändert von Benutzer',
    'LBL_MODIFIED_USER'=>'Geändert von Benutzer',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME'=>'Geändert von Name',
    'LBL_MODIFIED_ID'=>'Geändert von Id',
    'LBL_MORE' => 'Mehr',
    'LBL_MY_ACCOUNT' => 'Meine Einstellungen',
    'LBL_NAME' => 'Name',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Erstellen',
    'LBL_NEW_BUTTON_TITLE' => 'Erstellen',
    'LBL_NEXT_BUTTON_LABEL' => 'Weiter',
    'LBL_NONE' => '-kein(e)-',
    'LBL_NOTES'=>'Notizen',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Alle öffnen',
    'LBL_OPENALL_BUTTON_TITLE' => 'Alle öffnen',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Öffnen zu:',
    'LBL_OPENTO_BUTTON_TITLE' => 'Öffnen zu:',
    'LBL_OPPORTUNITIES'=>'Verkaufschancen',
    'LBL_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_OPPORTUNITY'=>'Verkaufschance',
    'LBL_OR' => 'ODER',
    'LBL_LOWER_OR' => 'oder',
    'LBL_PANEL_OVERVIEW' => '(Übersicht)',
    'LBL_PANEL_ASSIGNMENT' => 'Andere',
    'LBL_PANEL_ADVANCED' => 'Mehr Informationen',
    'LBL_PARENT_TYPE' => 'Eltern-Typ',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Bereich',
    'LBL_POSTAL_CODE' => 'Postleitzahl:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Stadt:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Hauptadresse Straße 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Hauptadresse Straße 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Straße:',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',

	'LBL_BILLING_STREET'=> 'Straße:',
	'LBL_SHIPPING_STREET'=> 'Straße:',

    'LBL_PROSPECTS'=>'Zielkontakte',
    'LBL_PRODUCT_BUNDLES'=>'Produktpakete',
    'LBL_PRODUCTS'=>'Produkte',
    'LBL_PROJECT_TASKS'=>'Projektaufgaben',
    'LBL_PROJECTS'=>'Projekte',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Verkaufschance von Angebot erstellen ',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Verkaufschance von Angebot erstellen ',
    'LBL_QUOTES_SHIP_TO'=>'Angebote liefern an',
    'LBL_QUOTES'=>'Angebote',

    'LBL_RELATED' => 'Verknüpft',
    'LBL_RELATED_INFORMATION' => 'Verknüpfte Information',
    'LBL_RELATED_RECORDS' => 'Verknüpfte Einträge',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_REPORTS_TO' => 'Berichtet an',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Pflichtfeld',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Fertig',
    'LBL_SAVE_AS_BUTTON_KEY' => 'EIN',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Speichern unter',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Speichern unter',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Komplettes Formular',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Komplettes Formular',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Speichern & Neu erstellen',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Speichern & Neu erstellen',
    'LBL_SAVE_OBJECT' => '{0} speichern',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Suchen',
    'LBL_SEARCH_BUTTON_TITLE' => 'Suchen',
    'LBL_SEARCH' => 'Suchen',
    'LBL_SEARCH_TIPS' => "Klicken Sie auf die Suchen Schaltfläche oder auf Enter um eine exakte Übereinstimmung dafür zu bekommen.",
    'LBL_SEARCH_TIPS_2' => "Klicken Sie auf die Suchen Schaltfläche oder auf Enter um eine exakte Übereinstimmung zu bekommen für",
    'LBL_SEARCH_MORE' => 'mehr',
    'LBL_SEE_ALL' => 'Alle einblenden',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Ungültiges Dateiformat, es kann nur eine Bild Datei hochgeladen werden.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Auswählen',
    'LBL_SELECT_BUTTON_TITLE' => 'Auswählen',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Team(s) hinzufügen',
    'LBL_SELECT_TEAMS_TITLE' => 'Team(s) hinzufügen',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Dokumente durchsuchen',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Dokumente durchsuchen',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Kontakt auswählen',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Kontakt auswählen',
    'LBL_GRID_SELECTED_FILE' => 'gewählte Datei',
    'LBL_GRID_SELECTED_FILES' => 'gewählte Dateien',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Aus Bericht wählen',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Wählen Sie Berichte',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Benutzer auswählen',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Benutzer auswählen',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Auswahl leeren',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Auswahl leeren',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Auswahl leeren',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Auswahl leeren',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Datei auswählen',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Datei auswählen',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Datei leeren',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Datei leeren',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Benutzer auswählen',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Benutzer auswählen',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Benutzer leeren',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Benutzer leeren',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'EIN',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Firma auswählen',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Firma auswählen',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Firma leeren',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Firma leeren',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Kampagne auswählen',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Kampagne auswählen',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Kampagne leeren',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Kampagne leeren',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Kontakt auswählen',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Kontakt auswählen',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Kontakt leeren',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Kontakt leeren',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Team auswählen',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Team auswählen',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Team leeren',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Team leeren',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressourcen zum Aufbau dieser Seite (Abfragen, Dateien)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'Sekunden.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server Antwortzeit:',
    'LBL_SERVER_MEMORY_BYTES' => 'Bytes.',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Speicherverbrauch: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Verbrauch: - Modul: {0} - Aktion: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Spitzenspeicherverbrauch: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Versenden an Firma',
    'LBL_SHIP_TO_CONTACT'=>'Versenden an Kontaktperson',
    'LBL_SHIPPING_ADDRESS'=>'Versandadresse',
    'LBL_SHORTCUTS' => 'Schnellmenü',
    'LBL_SHOW'=>'Zeigen',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Bundesland:',
    'LBL_STATUS_UPDATED'=>'Der Status für dieses Ereignis wurde aktualisiert!',
    'LBL_STATUS'=>'Status',
    'LBL_STREET'=>'Straße',
    'LBL_SUBJECT' => 'Betreff',

    'LBL_INBOUNDEMAIL_ID' => 'Eingehende E-Mail ID',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy, 2004-2013 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy, 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',


    'LBL_SYNC' => 'Synchronisieren',
    'LBL_TABGROUP_ALL' => 'Alle',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivitäten',
    'LBL_TABGROUP_COLLABORATION' => 'Zusammenarbeit',
    'LBL_TABGROUP_HOME' => 'Übersicht',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Meine Seiten',
    'LBL_TABGROUP_OTHER' => 'Andere',
    'LBL_TABGROUP_REPORTS' => 'Berichte',
    'LBL_TABGROUP_SALES' => 'Verkauf',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TABGROUP_TOOLS' => 'Tools',
    'LBL_TASKS'=>'Aufgaben',
    'LBL_TEAMS_LINK'=>'Team',
    'LBL_THEME_COLOR'=>'Farbe',
    'LBL_THEME_FONT'=>'Schriftart',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-Mail archivieren',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-Mail archivieren',
    'LBL_UNAUTH_ADMIN' => 'Unautorisierter Zugriff auf Administration',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Rückgängig',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Rückgängig',
    'LBL_UNDELETE_BUTTON' => 'Rückgängig',
    'LBL_UNDELETE' => 'Rückgängig',
    'LBL_UNSYNC' => 'Unsync',
    'LBL_UPDATE' => 'Aktualisieren',
    'LBL_USER_LIST' => 'Benutzerliste',
    'LBL_USERS_SYNC'=>'Benutzer Sync',
    'LBL_USERS'=>'Benutzer',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Suche nach existenten E-Mail Einträgen',
    'LBL_VERIFY_PORTAL_NAME'=>'Suche nach existentem Portal Namen...',
    'LBL_VIEW_IMAGE' => 'Ansicht',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Als PDF drucken',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Als PDF drucken',


    'LNK_ABOUT' => 'Über',
    'LNK_ADVANCED_SEARCH' => 'Erweiterte Suche',
    'LNK_BASIC_SEARCH' => 'Einfache Suche',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Alle Resultate anzeigen',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Alle zeigen',
    'LNK_CLOSE' => 'Schließen',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Suche ändern',
    'LNK_SAVED_VIEWS' => 'Layout Optionen',
    'LNK_DELETE_ALL' => 'alles löschen',
    'LNK_DELETE' => 'Löschen',
    'LNK_EDIT' => 'bearb.',
    'LNK_GET_LATEST'=>'Letzte anzeigen',
    'LNK_GET_LATEST_TOOLTIP'=>'Ersetzen mit letzter Version',
    'LNK_HELP' => 'Hilfe',
    'LNK_CREATE' => 'Erstellen',
    'LNK_LIST_END' => 'Ende',
    'LNK_LIST_NEXT' => 'Weiter',
    'LNK_LIST_PREVIOUS' => 'Zurück',
    'LNK_LIST_RETURN' => 'Zurück zur Liste',
    'LNK_LIST_START' => 'Starten',
    'LNK_LOAD_SIGNED'=>'Unterschreiben',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Ersetzen durch signiertes Dokument',
    'LNK_PRINT' => 'Drucken',
    'LNK_BACKTOTOP' => 'Zurück zum Anfang',
    'LNK_REMOVE' => 'Entfernen',
    'LNK_RESUME' => 'Fortfahren',
    'LNK_VIEW_CHANGE_LOG' => 'Änderungsprotokoll anzeigen',


    'NTC_CLICK_BACK' => 'Bitte den Zurück-Button des Browsers anklicken und den Fehler beheben.',
    'NTC_DATE_FORMAT' => '(jjjj-mm-tt)',
    'NTC_DATE_TIME_FORMAT' => '(jjjj-mm-tt 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Möchten Sie die ausgewählten Einträge wirklich löschen?',
    'NTC_TEMPLATE_IS_USED' => 'Die Vorlage wurde zumindest in einer E-Mail Marketing Nachricht verwendet.  Wollen Sie wirklich löschen?',
    'NTC_TEMPLATES_IS_USED' => 'Die folgenden Vorlagen werden in E-Mail Marketing Nachrichten benützt. Sind Sie sicher dass Sie diese löschen wollen?"',
    'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Wollen Sie wirklich löschen?',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Wollen Sie wirklich aktualisieren?',
    'NTC_DELETE_SELECTED_RECORDS' =>'ausgewählte(r) Datensatz/Datensätze?',
    'NTC_LOGIN_MESSAGE' => 'Bitte geben Sie Ihren Benutzernamen und Ihr Passwort ein.',
    'NTC_NO_ITEMS_DISPLAY' => 'Keine Einträge vorhanden',
    'NTC_REMOVE_CONFIRMATION' => 'Sind Sie sicher dass Sie diese Beziehung entfernen wollen? Nur die Beziehung wird entfernt, der Datensatz wird nicht gelöscht.',
    'NTC_REQUIRED' => 'Pflichtfeld',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Willkommen',
    'NTC_YEAR_FORMAT' => '(JJJJ)',
    'LOGIN_LOGO_ERROR'=> 'Bitte die SuiteCRM Logos ersetzen.',
    'WARN_ONLY_ADMINS'=> "Es können leider nur Administratoren einloggen.",
    'WARN_UNSAVED_CHANGES'=> "Sie sind dabei, diesen Datensatz zu verlassen, ohne eventuell gemachte Änderungen zu speichern. Sind Sie sicher, dass Sie fortfahren wollen?",
    'ERROR_NO_RECORD' => 'Fehler beim Anzeigen des Datensatzes. Dieser Datensatz wurde entweder gelöscht oder Sie sind nicht berechtigt ihn zu sehen.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Achtung:</b> Ihre Browser Version wird nicht mehr unterstützt oder Sie verwenden einen nicht unterstützten Browser..<p></p>Wir empfehlen folgende Versionen:<p></p><ul><li>Internet Explorer 10 (Kompatibilitätsmodus nicht unterstützt)<li>Firefox 24<li>Safari 5.1<li>Chrome 29</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Achtung:</b> Ihr Browser ist in der IE Kompatibilitätssicht, welche nicht unterstützt wird.",
    'ERROR_TYPE_NOT_VALID' => 'Fehler. Dieser Typ is nicht gültig.',
    'ERROR_NO_BEAN' => 'Kann Bean nicht holen.', 
    'LBL_DUP_MERGE'=>'Duplikate finden',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Verwalten von Abonnements',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Abonnements verwalten für',
    'LBL_SUBSCRIBE'=>'Anmelden',
    'LBL_UNSUBSCRIBE'=>'Abonnement kündigen',
    // Ajax status strings
    'LBL_LOADING' => 'Laden...',
    'LBL_SEARCHING' => 'Suche...',
    'LBL_SAVING_LAYOUT' => 'Layout wird gespeichert...',
    'LBL_SAVED_LAYOUT' => 'Layout wurde gespeichert.',
    'LBL_SAVED' => 'Gespeichert',
    'LBL_SAVING' => 'Speichern',
    'LBL_FAILED' => 'Ist fehlgeschlagen.',
    'LBL_DISPLAY_COLUMNS' => 'Spalten anzeigen',
    'LBL_HIDE_COLUMNS' => 'Spalten ausblenden',
    'LBL_SEARCH_CRITERIA' => 'Suchkriterien',
    'LBL_SAVED_VIEWS' => 'Gespeicherte Ansichten',
    'LBL_PROCESSING_REQUEST'=>'Verarbeiten...',
    'LBL_REQUEST_PROCESSED'=>'Fertig',
    'LBL_AJAX_FAILURE' => 'Ajax Fehler',
    'LBL_MERGE_DUPLICATES'  => 'Zusammenführen',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Gespeicherte Suchen',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Mit dem obigen Suchformular suchen',
    'LBL_DETAILVIEW'=>'Detailansicht',
    'LBL_LISTVIEW'=>'Listenansicht',
    'LBL_EDITVIEW'=>'Bearbeite Ansicht?',
    'LBL_SEARCHFORM'=>'Suchformular',
    'LBL_SAVED_SEARCH_ERROR' => 'Bitte geben Sie einen Namen für diese Ansicht ein.',
    'LBL_DISPLAY_LOG' => 'Log anzeigen',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Ihre Session läuft in 2 Minuten ab. Bitte speichern Sie Ihre Arbeit.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Ihre Session ist abgelaufen.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Agenda",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Meetings',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Anruf',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Zeit: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Ort:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Beschreibung: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Gehört zu:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\"Klicken Sie OK, um diesen Anruf anzuzeigen oder klicken Sie Abbrechen, um diese Nachricht zu verwerfen.\",\",Klicken Sie OK, um diesen Anruf anzuzeigen oder klicken Sie Abbrechen, um diese Nachricht zu verwerfen.\"",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\"Klicken Sie OK, um dieses Meeting anzuzeigen oder klicken Sie Abbrechen, um diese Meeting zu verwerfen.\",\",Klicken Sie OK, um dieses Meeting anzuzeigen oder klicken Sie Abbrechen, um dieses Meeting zu verwerfen.\"",
	'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Ereignis',
	'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Ort ist nicht gesetzt.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Anfangsdatum ist nicht gesetzt.',
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "Keine Resultate gefunden.",
	'MSG_LIST_VIEW_NO_RESULTS' => "Keine Resultate gefunden für <item1>",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "Erstelle <item1> als neues/n <item2>",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "Sie haben derzeit keine Datensätze gespeichert. <item2> oder <item3> Sie einen neuen Datensatz.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4> to learn more about the <item1> module. In order to access more information, use the user menu drop down located on the main navigation bar to access Help.",

    'LBL_CLICK_HERE' => "Hier klicken",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Zu meinen Favoriten hinzufügen',
    'LBL_MARK_AS_FAVORITES' => 'Als Favorit markieren',
    'LBL_CREATE_CONTACT' => 'Kontakt erstellen',
    'LBL_CREATE_CASE' => 'Fall erstellen',
    'LBL_CREATE_NOTE' => 'Hinweis erstellen',
    'LBL_CREATE_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LBL_SCHEDULE_CALL' => 'Anruf Log',
    'LBL_SCHEDULE_MEETING' => 'Neues Meeting',
    'LBL_CREATE_TASK' => 'Aufgabe erstellen',
    'LBL_REMOVE_FROM_FAVORITES' => 'Aus Favoriten entfernen',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Formular erstellen',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Web-2-Lead Formular speichern',

    'LBL_PLEASE_SELECT' => 'Bitte auswählen',
    'LBL_REDIRECT_URL'=>'Weiterleitungs-URL',
    'LBL_RELATED_CAMPAIGN' =>'Verknüpfte Kampagne',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Alle Felder hinzufügen',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Alle Felder entfernen',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Nur die folgenden unterstützten Bilddatei Typen können eingebettet werden: JPG, PNG',
    'LBL_TRAINING' => 'Support',
    'ERR_DATABASE_CONN_DROPPED'=>'Fehler bei der Abfrageausführung. Möglicherweise wurde die Verbindung zur Datenbank unterbrochen. Bitte die Seite erneut aufrufen, möglicherweise muss der Webserver neu gestartet werden.',
    'ERR_MSSQL_DB_CONTEXT' =>'DB Kontext geändert auf',
  'ERR_MSSQL_WARNING' =>'Warnung:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Warnung: Feld [[field]] hat keinen Eintrag in der [moduleDir] vardefs.php Datei',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Fehler: Datei [[file]] fehlt. Kann nichts erstellen da keine korrespondierende HTML Datei gefunden wurde.',
  'ERR_CANNOT_FIND_MODULE' => 'Fehler: Modul [module] existiert nicht.',
  'LBL_ALT_ADDRESS' => 'Weitere Adresse:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Fehler: Es gibt eine ungleiche Anzahl von \'key\' and \'copy\' Elementen im displayParams Array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Fehlender Index in displayParams Array für:',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Allgemein',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Nur meine Einträge',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Zeilen zeigen',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Neue Seite erstellen...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Sie haben eine neue Seite erstellt. Sie können nun mit der \'Dashlet hinzufügen\' Menü Option neue Inhalte einfügen.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Wollen Sie diese Seite wirklich löschen?',
    'LBL_SAVING_PAGE_TITLE' => 'Seitentitel wird gespeichert ...',
    'LBL_RETRIEVING_PAGE' => 'Seite laden ...',
    'LBL_MAX_DASHLETS_REACHED' => 'Sie haben die maximal Anzahl der SuiteCRM Dashlets, die der System Administrator gesetzt hat, erreicht. Bitte löschen Sie ein SuiteCRM Dashlet, um ein neues hinzuzufügen.',
    'LBL_ADDING_DASHLET' => 'SuiteCRM Dashlet wird hinzugefügt ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet hinzugefügt',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Wollen Sie dieses Dashlet wirklich löschen?',
    'LBL_REMOVING_DASHLET' => 'Dashlet wird entfernt ...',
    'LBL_REMOVED_DASHLET' => 'Dashlet entfernt',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Seite hinzufügen',
    'LBL_DELETE_PAGE' => 'Seite löschen',
    'LBL_CHANGE_LAYOUT' => 'Ansicht ändern',
    'LBL_RENAME_PAGE' => 'Seite umbenennen',

    'LBL_LOADING_PAGE' => 'Seite wird geladen, bitte warten...',

    'LBL_RELOAD_PAGE' => 'Bitte <a href="javascript: window.location.reload()">das Fenster neu laden</a> um dieses Dashlet zu verwenden.',
    'LBL_ADD_DASHLETS' => 'Dashlets hinzufügen',
    'LBL_CLOSE_DASHLETS' => 'Schließen',
    'LBL_OPTIONS' => 'Optionen',
    'LBL_NUMBER_OF_COLUMNS' => 'Wählen Sie die Anzahl der Spalten',
    'LBL_1_COLUMN' => '1 Spalte',
    'LBL_2_COLUMN' => '2 Spalten',
    'LBL_3_COLUMN' => '3 Spalten',
    'LBL_PAGE_NAME' => 'Seitenname',

    'LBL_SEARCH_RESULTS' => 'Suchergebnisse',
    'LBL_SEARCH_MODULES' => 'Module',
    'LBL_SEARCH_CHARTS' => 'Diagramme',
    'LBL_SEARCH_REPORT_CHARTS' => 'Bericht Diagramme',
    'LBL_SEARCH_TOOLS' => 'Tools',
    'LBL_SEARCH_HELP_TITLE' => 'Tipps zur Suche',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Schließen',
    'LBL_SEARCH_RESULTS_FOUND' => 'Suchresultate gefunden',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Bitte einen Seitennamen eintragen.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Kein Bild',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Adresse von links kopieren:',
    'LBL_SAVE_AND_CONTINUE' => 'Speichern und Weiter',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect Steuerungen</p><ul><li>Klicken Sie auf die Werte um ein Attribut auszuwählen.</li><li>STRG-Klick um mehrere auszuwählen. Mac Benutzer verwenden CMD-Klick.</li><li>Um alle Werte zwischen zwei Attributen auszuwählen, klicken Sie zuerst auf den ersten Wert und dann mit UMSCH-Klick auf den zweiten.</li></ul><p><strong>Erweiterte Suche und Layout Optionen</strong><br><br>Wenn Sie die <b>Gespeicherte Suche & Layout</b> Option verwenden, können Sie eine vordefinierte Suche bzw. eine angepasste Listenansicht speichern, um später schnell zu den gewünschten Ergebnissen zu kommen. Sie können eine unbegrenzte Anzahl solcher Selektionen speichern. Alle gespeicherten Selektionen scheinen in der \'Gespeicherte Suche\' Liste mit Namen auf, wobei die aktuell geladene Suche an der Spitze steht.<br><br>Um die Listenansicht anzupassen, verwenden Sie die \'Spalten anzeigen\' bzw. \'Spalten verstecken\' Kästchen. Sie können zum Beispiel Angaben wie Teams, zugewiesener Benutzer oder Datensatzname verbergen oder anzeigen. Um eine Spalte zur Listenansicht hinzuzufügen, wählen Sie das Feld aus der Liste der verborgenen Spalten und bewegen es mit der linken Pfeiltaste in die Spalte der angezeigten Begriffe. Um eine Spalte aus der Listenansicht zu entfernen, verfahren Sie genau umgekehrt.<br><br>Wenn Sie die Layout Einstellungen speichern, können Sie Ihre Suchergebnisse später immer in diesem Layout ausgeben.<br><br>Um eine Suche bzw. ein Layout zu speichern:<ol><li>Geben Sie einen Namen für das Suchresultat unter <b>Suche speichern unter</b> Feld ein und klicken Sie auf <b>Speichern</b>. Der Name wird nun in der Gespeicherten Suche Liste angezeigt, direkt neben der  Schaltfläche <b>Leeren</b>.</li><li>Um eine gespeicherte Suche aufzurufen, wählen Sie sie aus der Liste aus. Die Suchergebnisse werden in der Listenansicht dargestellt.</li><li>Um eine Gespeicherte Suche zu ändern wählen Sie die Suche aus der Liste aus, ändern die entsprechenden Such- und/oder Darstellungsparameter und klicken auf <b>Aktualisieren</b> neben <b>Aktuelle Suche ändern</b>.</li><li>Um eine Gespeicherte Suche zu löschen, wählen Sie die Suche aus der Liste aus, klicken <b>Löschen</b> neben <b>Aktuelle Suche ändern</b>, und klicken dann auf <b>OK</b> um das Löschen zu bestätigen.</li></ol><p><strong>Tipps</strong><br><br>Über die Verwendung des % Zeichens können Sie Ihre Suche ausweiten. Wenn Sie beispielsweise statt nachHuber" nachHuber%" suchen dann werden alle Begriffe gefunden die mit Huber beginnen aber auch noch andere Zeichen enthalten.</p>"' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Fehler: Abfragelimit von $limit erreicht für Modul $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Fehler: ResourceObserver->notify() muss überschrieben werden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Fehler: Kann Monitor nicht erstellen, da die metadata Datei leer ist oder nicht existiert.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Fehler: Kein Monitor für den angefragten Namen konfiguriert',
    'ERR_UNDEFINED_METRIC' => 'Fehler: Kann keinen Wert für undefinierte Metrik setzen',
    'ERR_STORE_FILE_MISSING' => 'Fehler: Kann die Store Implementation Datei nicht finden',

    'LBL_MONITOR_ID' => 'Monitor ID',
    'LBL_USER_ID' => 'User ID',
    'LBL_MODULE_NAME' => 'Modulname',
    'LBL_ITEM_ID' => 'Item ID',
    'LBL_ITEM_SUMMARY' => 'Item Zusammenfassung',
    'LBL_ACTION' => 'Aktion',
    'LBL_SESSION_ID' => 'Sitzungs ID',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack erstellt für Benutzer ID {0}',
    'LBL_VISIBLE' => 'Datensätze sichtbar',
    'LBL_DATE_LAST_ACTION' => 'Datum der letzten Aktion',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'ist nicht vor',
  'MSG_IS_MORE_THAN' => 'ist mehr als',
  'MSG_IS_LESS_THAN' => 'ist kleiner als',
  'MSG_SHOULD_BE' => 'sollte sein',
  'MSG_OR_GREATER' => 'oder größer als',

    'LBL_PORTAL_WELCOME_TITLE' => 'Willkommen beim SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Fehler erstellen',
    'LBL_NO_RECORDS_FOUND' => '- 0 Einträge gefunden -',

    'DATA_TYPE_DUE' => 'Fällig:',
    'DATA_TYPE_START' => 'Starten:',
    'DATA_TYPE_SENT' => 'Gesendet:',
    'DATA_TYPE_MODIFIED' => 'Verändert:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Zähler',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'Objekt Bild',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Datum auswählen',

    'LBL_VALIDATE_RANGE' => 'ist nicht innerhalb des gültigen Bereichs',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Bitte wählen Sie sowohl einen Start- als auch einen Endzeitraum',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Bitte wählen Sie sowohl Start- als auch Endzeiteinträge',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Alle',

    'LBL_OPERATOR_IN_TEXT' => 'ist eine(s) der folgenden:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'ist nicht eine(s) der folgenden:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Fehler: Die Anzahl der Bean Parameter im Array ist nicht gleich der Anzahl im Resultat.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Fehler: Fehlender Zuordnungseintrag für Modul',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Fehler: Kann keine Daten für Konnektor {0} finden.  Der Service ist momentan  nicht erreichbar oder die Einstellungen sind ungültig. Konnektor Fehlermeldung: ({1}).',
  'LBL_MERGE_CONNECTORS' => 'Daten holen',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Sind Sie sicher, dass Sie die Konnektor Integration für dieses Modul deaktivieren wollen?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'Für optimales Funktionieren bei der Verwendung von IIS/FastCGI sapi, setzen Sie fastcgi.logging in Ihrer php.ini Datei auf 0.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Das globale Team kann nicht gelöscht werden.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'Das private Team [{0}] kann nicht gelöscht werden bis der Benutzer [{1}] gelöscht ist.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Sie haben entweder Abobe Flash deaktiviert oder verwenden eine ältere Version des Adobe Flash Player. Um die neueste Version des Flash Player zu bekommen <a href=\\"http://www.adobe.com/go/getflashplayer/\\">klicken Sie bitte hier</a>."',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Name',
  'LBL_COLLECTION_PRIMARY' => 'Primär',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Leeres Pflichtfeld',
    'LBL_COLLECTION_EXACT' => 'Exakt',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_DESCRIPTION' => 'Beschreibung',

  'LBL_YESTERDAY'=> 'gestern',
  'LBL_TODAY'=>'heute',
  'LBL_TOMORROW'=>'morgen',
  'LBL_NEXT_WEEK'=> 'Nächste Woche',
  'LBL_NEXT_MONDAY'=>'nächsten Montag',
  'LBL_NEXT_FRIDAY'=>'nächsten Freitag',
  'LBL_TWO_WEEKS'=> 'zwei Wochen',
  'LBL_NEXT_MONTH'=> 'nächster Monat',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'Erster Tag des nächsten Monats',
  'LBL_THREE_MONTHS'=> 'drei Monate',
  'LBL_SIXMONTHS'=> 'sechs Monate',
  'LBL_NEXT_YEAR'=> 'Nächstes Jahr',
    'LBL_FILTERED' => 'Gefiltert',

    //Datetimecombo fields
    'LBL_HOURS' => 'Stunden',
    'LBL_MINUTES' => 'Minuten',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Datum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatisches Aktualisieren',

    'LBL_DURATION_DAY' => 'Tag',
    'LBL_DURATION_HOUR' => 'Stunde',
    'LBL_DURATION_MINUTE' => 'Minute',
    'LBL_DURATION_DAYS' => 'Tage',
    'LBL_DURATION_HOURS' => 'Stunden',
    'LBL_DURATION_MINUTES' => 'Minuten',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Monat auswählen',
    'LBL_ENTER_YEAR' => 'Jahr eingeben',
    'LBL_ENTER_VALID_YEAR' => 'Bitte ein gültiges Jahr eingeben',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Bitte geben Sie eine numerische Telefonnummer inklusive Vorwahl ein.',

    //File write error label
    'ERR_FILE_WRITE' => 'Fehler: Konnte Datei {0} nicht schreiben. Bitte überprüfen Sie System und Webserver Berechtigungen.',
  'ERR_FILE_NOT_FOUND' => 'Fehler: Konnte Datei {0} nicht laden. Bitte überprüfen Sie System und Webserver Berechtigungen.',

    'LBL_AND' => 'Und',
    'LBL_BEFORE' => 'Vor dem',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Hochladen von Ihrem Computer',
    'LBL_SEARCH_EXTERNAL_API' => 'Datei aus externer Quelle',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sicherheit',
    'LBL_SHARE_PRIVATE' => 'Privat',
    'LBL_SHARE_COMPANY' => 'Unternehmen',
    'LBL_SHARE_LINKABLE' => 'Verlinkbar',
    'LBL_SHARE_PUBLIC' => 'Öffentlich',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS-Feed',
    'LBL_RSS_RECORDS_FOUND' => 'Eintragung(en) gefunden',
    'ERR_RSS_INVALID_INPUT' => 'RSS ist kein gültiger input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS ist kein gültiger response_type für diese Methode',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs unterstützt dieses Dateiformat nicht.',

    'LBL_EMPTY' => 'Leere',
    'LBL_IS_EMPTY' => 'Ist leer',
    'LBL_IS_NOT_EMPTY' => 'Ist nicht leer.',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => 'Dies ist das Muster eines importierten Dokuments, um den zu erwartenden Inhalt eines zu importierenden Dokuments zu illustrieren. Dies ist ein durch Kommas begrenztes .csv Dokument, mit doppelten Anführungszeichen als Feldkennzeichner. Die Titelzeile ist die oberste Zeile des Dokuments und enthält die Feldkennzeichnungen, wie man sie in der Anwendung findet. Diese Kennzeichnungen werden für Datenmapping zwischen den Dokumentdaten und den Daten in der Anwendung genutzt. Bemerkungen: Die Datenbanknamen könnten ebenfalls in der Titelzeile verwendet werden. Dies ist nützlich, wenn man phpMyAdmin oder einen anderes Datenbankwerkzeug benutzt, um eine zu importierende exportierte Datenliste zur Verfügung zu stellen. Die Reihenfolge der Spalten ist nicht von Bedeutung, da der Importprozess die Daten mit den entsprechenden Feldern abgleicht, wobei die Titelzeile als Referenz dient. Um dieses Dokument als Vorlage zu nutzen, tun Sie bitte Folgendes: 1. Entfernen Sie die Daten aus den Musterzeilen 2. Entfernen Sie den Hilfstext, den Sie gerade lesen 3. Geben Sie Ihre eigenen Daten in die entsprechenden Zeilen und Spalten ein 4. Speichern sie das Dokument an einem bekannten Speicherort Ihres Systems 5. Klicken Sie auf die Importoption im Aktionsmenü der Anwendung und laden Sie das Dokument hoch.',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugew. Benutzer',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Berichte an ID',
    'LBL_EXPORT_FULL_NAME' => 'Vollständiger Name',
    'LBL_EXPORT_TEAM_ID' => 'Team ID',
    'LBL_EXPORT_TEAM_NAME' => 'Team',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navigiere...',

    'LBL_PENDING_NOTIFICATIONS' => 'Benachrichtigungen',
    'LBL_NOTIFICATIONS_NONE' => 'Keine aktuellen Benachrichtigung',
    'LBL_ALT_ADD_TEAM_ROW' => 'Neue Teamzeile hinzufügen',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Team entfernen',
    'LBL_ALT_SPOT_SEARCH' => 'Schnellsuche',
    'LBL_ALT_SORT_DESC' => 'Absteigend sortiert',
    'LBL_ALT_SORT_ASC' => 'Aufsteigend sortiert',
    'LBL_ALT_SORT' => 'Sortieren',
    'LBL_ALT_SHOW_OPTIONS' => 'Anzeigeoptionen',
    'LBL_ALT_HIDE_OPTIONS' => 'Optionen verbergen',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Ausgewählten Eintrag zu Liste links bewegen',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Ausgewählten Eintrag zu Liste rechts bewegen',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Ausgewählten Eintrag in der angezeigten Listenreihenfolge nach oben bewegen',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Ausgewählten Eintrag in der angezeigten Listenreihenfolge nach unten bewegen',
    'LBL_ALT_INFO' => 'Information',
	'MSG_DUPLICATE' => 'Der Datensatz vom Typ {0} den Sie gerade erstellen könnte eine Kopie eines bereits bestehenden Datensatzes sein. Datensätze vom Typ {1} mit ähnlichen Namen sind unten aufgeführt.<br>Klicken Sie auf {1} erstellen, um den Satz vom Typ {0} neu zu erstellen oder wählen Sie einen existierenden {0} aus den unten angeführten.',
    'MSG_SHOW_DUPLICATES' => 'Der Datensatz vom Typ {0} den Sie gerade erstellen könnte eine Kopie eines bereits bestehenden Datensatzes sein. Datensätze vom Typ {1} mit ähnlichen Namen sind unten aufgeführt. Klicken Sie auf Speichern, um diesen neuen Satz zu erstellen oder klicken Sie auf Abbrechen um zum Modul zurückzukehren ohne den Eintrag vom Typ {0} zu erstellen.',
    'LBL_EMAIL_TITLE' => 'E-Mail Adresse',
    'LBL_EMAIL_OPT_TITLE' => 'Abgemeldete E-Mail Adresse',
    'LBL_EMAIL_INV_TITLE' => 'Ungültige E-Mail Adresse',
    'LBL_EMAIL_PRIM_TITLE' => 'Haupt E-Mail Adresse',
    'LBL_SELECT_ALL_TITLE' => 'Alle auswählen',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Diese Zeile auswählen',
    'LBL_TEAM_SELECTED_TITLE' => 'Ausgewähltes Team',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Auswählen um dieses Team  zum primären zu machen',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'FEHLER: Fehler beim Hochladen. Fehlercode: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'FEHLER: Fehler beim Hochladen. Fehlercode: {0} - {1}. Die upload_maxsize ist {2}',
    'UPLOAD_ERROR_HOME_TEXT'     => 'FEHLER: Fehler beim Hochladen. Bitten Sie Ihren Administrator um Hilfe.',
    'UPLOAD_MAXIMUM_EXCEEDED'    => 'Upload Größe von ({0} Bytes) überschritten. Erlaubtes Maximum: {1} Bytes',
    'UPLOAD_REQUEST_ERROR'    => 'Ein Fehler ist aufgetreten, bitte aktualisieren Sie die Seite (F5) und versuchen Sie es erneut.',


    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'I',
    'LBL_EDIT_BUTTON_LABEL' => 'Bearbeiten',
    'LBL_EDIT_BUTTON_TITLE' => 'Bearbeiten',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplizieren',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplizieren',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Löschen',
    'LBL_DELETE_BUTTON_TITLE' => 'Löschen',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Speichern',
    'LBL_SAVE_BUTTON_TITLE' => 'Speichern',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Abbrechen',
    'LBL_CANCEL_BUTTON_TITLE' => 'Abbrechen',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Tastaturkürzel',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Maskenfunktionalität - Alt+</strong><br/> I = bearbe<b>I</b>ten (Detailansicht)<br/> U = d<b>U</b>plizieren (Detailansicht)<br/> D = <b>D</b>elete (Löschen - Detailansicht)<br/> A = s<b>A</b>ve (Speichern - Bearbeitungsansicht)<br/> L = cance<b>L</b> (Abbrechen - Bearbeitungsansicht) <br/><br/></p><p><strong>Suche und Navigation  - Alt+</strong><br/> 7 = Erstes Eingabefeld in Bearbeitungsansicht<br/> 8 = Erweiterte Suche<br/> 9 = Erstes Eingabefeld in Suchmaske<br/> 0 = Eingabefeld globale Suche<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'Konnektor Array in {0} ist nicht korrekt definiert oder ist leer und konnte nicht benutzt werden.',
    'ERR_SUHOSIN' => 'Das Hochladen wurde von Suhosin geblockt, bitte fügen Sieupload" zu suhosin.executor.include.whitelist hinzu (Beachten Sie den sugarcrm.log für mehr Informationen)"',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Falsche Antwort vom Server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Angebot',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Verkaufspreis',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'Manuell',
        '5' => 'Alle 5 Minuten',
        '15' => 'Alle 15 Minuten',
        '30' => 'Alle 30 Minuten',
        '60' => 'Jede Stunde',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Eine Erinnerung ist leer oder falsch.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Erinnerung ist nicht für Popup oder e-Mail festgelegt.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Kein Teilnehmer für die Erinnerung.'

    );

$app_list_strings['moduleList']['Library'] = 'Bibliothek';
$app_list_strings['library_type'] = array('Books'=>'Buch', 'Music'=>'Musik', 'DVD'=>'DVD', 'Magazines'=>'Magazine');
$app_list_strings['moduleList']['EmailAddresses'] = 'E-Mail Adresse';
$app_list_strings['project_priority_default'] = 'Mittel';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Hoch',
    'Medium' => 'Mittel',
    'Low' => 'Niedrig',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Entwurf',
    'Expired' => 'Abgelaufen',
    'In Review' => 'In Durchsicht',
    'Published' => 'Veröffentlicht',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => 'Standard E-Mail Format',
    'Create New Tag' => 'Neues Tag erstellen',
    'Delete Tag'=>'Tag löschen',
    'Rename Tag'=>'Kategorie umbenennen',
    'Move Selected Articles'=>'Ausgewählte Artikel verschieben',
    'Apply Tags On Articles'=>'Tags auf Artikel anwenden',
    'Delete Selected Articles'=>'Ausgewählte Artikel löschen',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Hat Anhänge',
        'none' => 'Kein(e)',
        'mime' => 'Mime Typ angeben',
        'name' => 'Name angeben',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Wissensbasis';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Ersten 5',
    'Top_10' => 'Ersten 10',
    'Top_20' => 'Ersten 20',
    'Bot_5'  => 'Letzten 5',
    'Bot_10' => 'Letzten 10',
    'Bot_20' => 'Letzten 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Alle',
        'added' => 'Letzten 30 Tage hinzugefügt',
        'pending' => 'Meine Genehmigung ausstehend',
        'updated' =>'Letzten 30 Tage aktualisiert',
        'faqs' => 'FAQs',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'Am',
    'before' => 'Vor dem',
    'after' => 'Nach',
    'between_dates' => 'liegt zwischen',
    'last_7_days' => 'Letzte 7 Tage',
    'next_7_days' => 'Nächsten 7 Tage',
    'last_month' => 'Letzten Monat',
    'this_month' => 'Diesen Monat',
    'next_month' => 'Nächster Monat',
    'last_30_days' => 'Letzte 30 Tage',
    'next_30_days' => 'Nächsten 30 Tage',
    'last_year' => 'Letztes Jahr',
    'this_year' => 'Dieses Jahr',
    'next_year' => 'Nächstes Jahr',
    'isnull' => 'Ist Null',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIEN',
        'ALGERIA' => 'ALGERIEN',
        'AMERICAN SAMOA' => 'AMERIKANISCH SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARKTIS',
        'ANTIGUA' => 'ANTIGUA UND BARBUDA',
        'ARGENTINA' => 'ARGENTINIEN',
        'ARMENIA' => 'ARMENIEN',
        'ARUBA' => 'ARUBA.',
        'AUSTRALIA' => 'AUSTRALIEN',
        'AUSTRIA' => 'ÖSTERREICH',
        'AZERBAIJAN' => 'ASERBAIDSCHAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESCH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'WEISSRUSSLAND',
        'BELGIUM' => 'BELGIEN',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIEN',
        'BOSNIA' => 'BOSNIEN-HERZEGOWINA',
        'BOTSWANA' => 'BOTSUANA',
        'BOUVET ISLAND' => 'BOUVETINSEL',
        'BRAZIL' => 'BRASILIEN',
        'BRITISH ANTARCTICA TERRITORY' => 'BRITISCH TERRITORIEN ANTARKTIS',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISCHES TERRITORIUM IM INDISCHEN OZEAN',
        'BRITISH VIRGIN ISLANDS' => 'BRITISCHE JUNGFERNINSELN',
        'BRITISH WEST INDIES' => 'BRITISCH WESTINDIEN',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIEN',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'KAMBODSCHA',
        'CAMEROON' => 'KAMERUN',
        'CANADA' => 'KANADA',
        'CANAL ZONE' => 'KANALZONE',
        'CANARY ISLAND' => 'KANARISCHE INSELN',
        'CAPE VERDI ISLANDS' => 'KAP VERDE',
        'CAYMAN ISLANDS' => 'KAIMANINSELN',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'TSCHAD',
        'CHANNEL ISLAND UK' => 'KANALINSELN UK',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'CHRISTMAS-INSEL',
        'COCOS (KEELING) ISLAND' => 'KOKOSINSELN',
        'COLOMBIA' => 'KOLUMBIEN',
        'COMORO ISLANDS' => 'KOMOREN',
        'CONGO' => 'KONGO',
        'CONGO KINSHASA' => 'KONGO KINSHASA',
        'COOK ISLANDS' => 'COOKINSELN',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'KROATIEN',
        'CUBA' => 'KUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'ZYPERN',
        'CZECH REPUBLIC' => 'TSCHECHISCHE REPUBLIK',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DÄNEMARK',
        'DJIBOUTI' => 'DSCHIBUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DOMINIKANISCHE REPUBLIK',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'ÄGYPTEN',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'ÄQUATORIALGUINEA',
        'ESTONIA' => 'ESTLAND',
        'ETHIOPIA' => 'ÄTHIOPIEN',
        'FAEROE ISLANDS' => 'FARÖER-INSELN',
        'FALKLAND ISLANDS' => 'FALKLANDINSELN',
        'FIJI' => 'FIDSCHI-INSELN',
        'FINLAND' => 'FINNLAND',
        'FRANCE' => 'FRANKREICH',
        'FRENCH GUIANA' => 'FRANZÖSISCH GUAYANA',
        'FRENCH POLYNESIA' => 'FRANZÖSISCH POLYNESIEN',
        'GABON' => 'GABUN',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIEN',
        'GERMANY' => 'DEUTSCHLAND',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GRIECHENLAND',
        'GREENLAND' => 'GRÖNLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'FRANZÖSISCH-GUAYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'Nach unten dann links',
        'HUNGARY' => 'UNGARN',
        'ICELAND' => 'ISLAND',
        'IFNI' => 'Nach unten dann rechts',
        'INDIA' => 'INDIEN',
        'INDONESIA' => 'INDONESIEN',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAK',
        'IRELAND' => 'IRLAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALIEN',
        'IVORY COAST' => 'ELFENBEINKÜSTE',
        'JAMAICA' => 'JAMAIKA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDANIEN',
        'KAZAKHSTAN' => 'KASACHSTAN',
        'KENYA' => 'KENIA',
        'KOREA' => 'NORDKOREA',
        'KOREA, SOUTH' => 'SÜDKOREA',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KIRGISISTAN',
        'LAOS' => 'LAOTISCHE REPUBLIK',
        'LATVIA' => 'LETTLAND',
        'LEBANON' => 'LIBANON',
        'LEEWARD ISLANDS' => 'del LEEWARD INSELN',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBERIA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITAUEN',
        'LUXEMBOURG' => 'LUXEMBURG',
        'MACAO' => 'MACAU',
        'MACEDONIA' => 'MAZEDONIEN',
        'MADAGASCAR' => 'MADAGASKAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALEDIVEN',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURETANIEN',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'del MELANESIA',
        'MEXICO' => 'MEXIKO',
        'MOLDOVIA' => 'MOLDAU',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLEI',
        'MOROCCO' => 'MAROKKO',
        'MOZAMBIQUE' => 'MOSAMBIK',
        'MYANAMAR' => 'MYANMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NIEDERLANDE',
        'NETHERLANDS ANTILLES' => 'NIEDERLÄNDISCHE ANTILLEN',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'del NIEDERLÄNDISCHE ANTILLEN NEUTRALE ZONE',
        'NEW CALADONIA' => 'NEUKALEDONIEN',
        'NEW HEBRIDES' => 'del VANUATU',
        'NEW ZEALAND' => 'NEUSEELAND',
        'NICARAGUA' => 'NIKARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLKINSELN',
        'NORWAY' => 'NORWEGEN',
        'OMAN' => 'OMAN',
        'OTHER' => 'ANDERE',
        'PACIFIC ISLAND' => 'del PAZIFISCE-INSEL',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NEUGUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'PHILIPPINEN',
        'POLAND' => 'POLEN',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'EAST TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'KATAR',
        'REPUBLIC OF BELARUS' => 'del BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'SÜDAFRIKA',
        'REUNION' => 'del REUNION',
        'ROMANIA' => 'RUMÄNIEN',
        'RUSSIA' => 'RUSSISCHE FÖDERATION',
        'RWANDA' => 'RUANDA',
        'RYUKYU ISLANDS' => 'del RYUKYU-INSELN',
        'SABAH' => 'del SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI ARABIEN',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIEN',
        'SEYCHELLES' => 'SEYCHELLEN',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPUR',
        'SLOVAKIA' => 'SLOWAKEI',
        'SLOVENIA' => 'SLOWENIEN',
        'SOMALILIAND' => 'SOMALIA',
        'SOUTH AFRICA' => 'del SÜDAFRIKA',
        'SOUTH YEMEN' => 'del JEMEN',
        'SPAIN' => 'SPANIEN',
        'SPANISH SAHARA' => 'del WESTSAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS UND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'del SW AFRIKA',
        'SWAZILAND' => 'SWASILAND',
        'SWEDEN' => 'SCHWEDEN',
        'SWITZERLAND' => 'SCHWEIZ',
        'SYRIA' => 'SYRIEN',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TADSCHIKISTAN',
        'TANZANIA' => 'TANSANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD UND TOBAGO',
        'TUNISIA' => 'TUNESIEN',
        'TURKEY' => 'TÜRKEI',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'VEREINIGTE ARABISCHE EMIRATE',
        'UNITED KINGDOM' => 'GROSSBRITANNIEN',
        'UPPER VOLTA' => 'BURKINA FASO',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'del US PAZIFISCHE-INSEL',
        'US VIRGIN ISLANDS' => 'AMERIKANISCHE JUNGFERNINSELN',
        'USA' => 'VEREINIGTE STAATEN',
        'UZBEKISTAN' => 'USBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATIKANSTADT',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'del WAKE ISLAND',
        'WEST INDIES' => 'del WEST INDIES',
        'WESTERN SAHARA' => 'WESTSAHARA',
        'YEMEN' => 'JEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'SAMBIA',
        'ZIMBABWE' => 'SIMBABWE',
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
    'ISO-8859-15' => 'ISO-8859-15 (Lateinisch 9)',
    'KOI8-R'    => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U'    => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS'      => 'SJIS (MS Japanese)',
    'UTF-8'     => 'UTF-8',
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
  'Indian/Comoro' => 'Indien/Comoro',
  'Africa/Kinshasa' => 'Afrika/Kinshasa',
  'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
  'Africa/Brazzaville' => 'Afrika/Brazzaville',
  'Africa/Abidjan' => 'Afrika/Abidjan',
  'Africa/Djibouti' => 'Afrika/Dschibuti',
  'Africa/Cairo' => 'Afrika/Kairo',
  'Africa/Malabo' => 'Afrika/Malabo',
  'Africa/Asmera' => 'Afrika/Asmera',
  'Africa/Addis_Ababa' => 'Afrika/Addis Abeba',
  'Africa/Libreville' => 'Afrika/Libreville',
  'Africa/Banjul' => 'Afrika/Banjul',
  'Africa/Accra' => 'Afrika/Accra',
  'Africa/Conakry' => 'Afrika/Conakry',
  'Africa/Bissau' => 'Afrika/Guinea-Bissau',
  'Africa/Nairobi' => 'Afrika/Nairobi',
  'Africa/Maseru' => 'Afrika/Maseru',
  'Africa/Monrovia' => 'Afrika/Monrovia',
  'Africa/Tripoli' => 'Afrika/Tripoli',
  'Indian/Antananarivo' => 'Indien/Antananarivo',
  'Africa/Blantyre' => 'Afrika/Blantyre',
  'Africa/Bamako' => 'Afrika/Bamako',
  'Africa/Nouakchott' => 'Afrika/Nouakchott',
  'Indian/Mauritius' => 'Indien/Mauritius',
  'Indian/Mayotte' => 'Indien/Mayotte',
  'Africa/Casablanca' => 'Afrika/Casablanca',
  'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
  'Africa/Maputo' => 'Afrika/Maputo',
  'Africa/Windhoek' => 'Afrika/Windhoek',
  'Africa/Niamey' => 'Afrika/Niamey',
  'Africa/Lagos' => 'Afrika/Lagos',
  'Indian/Reunion' => 'Indien/Reunion',
  'Africa/Kigali' => 'Afrika/Kigali',
  'Atlantic/St_Helena' => 'Atlantik/St_Helena',
  'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
  'Africa/Dakar' => 'Afrika/Dakar',
  'Indian/Mahe' => 'Indien/Mahe',
  'Africa/Freetown' => 'Afrika/Freetown',
  'Africa/Mogadishu' => 'Afrika/Mogadishu',
  'Africa/Johannesburg' => 'Afrika/Johannesburg',
  'Africa/Khartoum' => 'Afrika/Khartum',
  'Africa/Mbabane' => 'Afrika/Mbabane',
  'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salaam',
  'Africa/Lome' => 'Afrika/Lomé',
  'Africa/Tunis' => 'Afrika/Tunis',
  'Africa/Kampala' => 'Afrika/Kampala',
  'Africa/Lusaka' => 'Afrika/Lusaka',
  'Africa/Harare' => 'Afrika/Harare',
  'Antarctica/Casey' => 'Antarktis/Casey',
  'Antarctica/Davis' => 'Antarktis/Davis',
  'Antarctica/Mawson' => 'Antarktis/Mawson',
  'Indian/Kerguelen' => 'Indien/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarktis/DumontDUrville',
  'Antarctica/Syowa' => 'Antarktis/Syowa',
  'Antarctica/Vostok' => 'Antarktis/Vostok',
  'Antarctica/Rothera' => 'Antarktis/Rothera',
  'Antarctica/Palmer' => 'Antarktis/Palmer',
  'Antarctica/McMurdo' => 'Antarktis/McMurdo',
  'Asia/Kabul' => 'Asien/Kabul',
  'Asia/Yerevan' => 'Asien/Eriwan',
  'Asia/Baku' => 'Asien/Baku',
  'Asia/Bahrain' => 'Asien/Bahrain',
  'Asia/Dhaka' => 'Asien/Dhaka',
  'Asia/Thimphu' => 'Asien/Thimphu',
  'Indian/Chagos' => 'Indien/Chagos',
  'Asia/Brunei' => 'Asien/Brunei',
  'Asia/Rangoon' => 'Asien/Rangoon',
  'Asia/Phnom_Penh' => 'Asien/Phnom Penh',
  'Asia/Beijing' => 'Asia/Peking',
  'Asia/Harbin' => 'Asien/Helsinki',
  'Asia/Shanghai' => 'Asien/Shanghai',
  'Asia/Chongqing' => 'Asien/Chongqing',
  'Asia/Urumqi' => 'Asien/Urumchi',
  'Asia/Kashgar' => 'Asien/Kashgar',
  'Asia/Hong_Kong' => 'Asien/Hong_Kong',
  'Asia/Taipei' => 'Asien/Taipeh',
  'Asia/Macau' => 'Asien/Macau',
  'Asia/Nicosia' => 'Asien/Nicosia',
  'Asia/Tbilisi' => 'Asien/Tiflis',
  'Asia/Dili' => 'Asien/Dili',
  'Asia/Calcutta' => 'Asien/Kalkutta',
  'Asia/Jakarta' => 'Asien/Jakarta',
  'Asia/Pontianak' => 'Asien/Pontianak',
  'Asia/Makassar' => 'Asien/Makassar',
  'Asia/Jayapura' => 'Asien/Jayapura',
  'Asia/Tehran' => 'Asien/Teheran',
  'Asia/Baghdad' => 'Asien/Bagdad',
  'Asia/Jerusalem' => 'Asien/Jerusalem',
  'Asia/Tokyo' => 'Asien/Tokio',
  'Asia/Amman' => 'Asien/Amman',
  'Asia/Almaty' => 'Asien/Almaty',
  'Asia/Qyzylorda' => 'Asien/Qyzylorda',
  'Asia/Aqtobe' => 'Asien/Aqtobe',
  'Asia/Aqtau' => 'Asien/Aqtau',
  'Asia/Oral' => 'Asien/Oral',
  'Asia/Bishkek' => 'Asien/Bishkek',
  'Asia/Seoul' => 'Asien/Seoul',
  'Asia/Pyongyang' => 'Asien/Pjöngjang',
  'Asia/Kuwait' => 'Asien/Kuwait',
  'Asia/Vientiane' => 'Asien/Vientiane',
  'Asia/Beirut' => 'Asien/Beirut',
  'Asia/Kuala_Lumpur' => 'Asien/Kuala_Lumpur',
  'Asia/Kuching' => 'Asien/Kuching',
  'Indian/Maldives' => 'Indien/Malediven',
  'Asia/Hovd' => 'Asien/????',
  'Asia/Ulaanbaatar' => 'Asien/Ulan-Bator',
  'Asia/Choibalsan' => 'Asien/Choibalsan',
  'Asia/Katmandu' => 'Asien/Katmandu',
  'Asia/Muscat' => 'Asien/Muskat',
  'Asia/Karachi' => 'Asien/Karatschi',
  'Asia/Gaza' => 'Asien/Gazastreifen',
  'Asia/Manila' => 'Asien/Manila',
  'Asia/Qatar' => 'Asien/Katar',
  'Asia/Riyadh' => 'Asien/Riad',
  'Asia/Singapore' => 'Asien/Singapur',
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
  'Indian/Christmas' => 'Indien/Christmas',
  'Pacific/Rarotonga' => 'Pazifik/Rarotonga',
  'Indian/Cocos' => 'Indien/Cocos',
  'Pacific/Fiji' => 'Pazifik/Fiji',
  'Pacific/Gambier' => 'Pazifik/Gambier',
  'Pacific/Marquesas' => 'Pazifik/Marquesas',
  'Pacific/Tahiti' => 'Pazifik/Tahiti',
  'Pacific/Guam' => 'Pazifik/Guam',
  'Pacific/Tarawa' => 'Pazifik/Tarawa',
  'Pacific/Enderbury' => 'Pazifik/Enderbury',
  'Pacific/Kiritimati' => 'Pazifik/Kiritimati',
  'Pacific/Saipan' => 'Pazifik/Saipan',
  'Pacific/Majuro' => 'Pazifik/Majuro',
  'Pacific/Kwajalein' => 'Pazifik/Kwajalein',
  'Pacific/Truk' => 'Pazifik/Truk',
  'Pacific/Pohnpei' => 'Pacific/Pohnpei',
  'Pacific/Kosrae' => 'Pazifik/Kosrae',
  'Pacific/Nauru' => 'Pazifik/Nauru',
  'Pacific/Noumea' => 'Pazifik/Noumea',
  'Pacific/Auckland' => 'Pazifik/Auckland',
  'Pacific/Chatham' => 'Pazifik/Chatham',
  'Pacific/Niue' => 'Pazifik/Niue',
  'Pacific/Norfolk' => 'Pazifik/Norfolk',
  'Pacific/Palau' => 'Pazifik/Palau',
  'Pacific/Port_Moresby' => 'Pazifik/Port_Moresby',
  'Pacific/Pitcairn' => 'Pazifik/Pitcairn',
  'Pacific/Pago_Pago' => 'Pazifik/Pago_Pago',
  'Pacific/Apia' => 'Pazifik/Apia',
  'Pacific/Guadalcanal' => 'Pazifik/Guadalcanal',
  'Pacific/Fakaofo' => 'Pazifik/Fakaofo',
  'Pacific/Tongatapu' => 'Pazifik/Tongatapu',
  'Pacific/Funafuti' => 'Pazifik/Funafuti',
  'Pacific/Johnston' => 'Pazifik/Johnston',
  'Pacific/Midway' => 'Pazifik/Midway',
  'Pacific/Wake' => 'Pazifik/Wake',
  'Pacific/Efate' => 'Pazifik/Efate',
  'Pacific/Wallis' => 'Pazifik/Wallis',
  'Europe/London' => 'Europa/London',
  'Europe/Dublin' => 'Europa/Dublin',
  'WET' => 'WET',
  'CET' => 'MEZ',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europa/Tirane',
  'Europe/Andorra' => 'Europa/Andorra',
  'Europe/Vienna' => 'Europa/Wien',
  'Europe/Minsk' => 'Europa/Minsk',
  'Europe/Brussels' => 'Europa/Brüssel',
  'Europe/Sofia' => 'Europa/Sofia',
  'Europe/Prague' => 'Europa/Prag',
  'Europe/Copenhagen' => 'Europa/Kopenhagen',
  'Atlantic/Faeroe' => 'Atlantik/Faeroe',
  'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
  'America/Scoresbysund' => 'Amerika/Scoresbysund',
  'America/Godthab' => 'Amerika/Godthab',
  'America/Thule' => 'Amerika/Thule',
  'Europe/Tallinn' => 'Europa/Tallinn',
  'Europe/Helsinki' => 'Europa/Helsinki',
  'Europe/Paris' => 'Europa/Paris',
  'Europe/Berlin' => 'Europa/Berlin',
  'Europe/Gibraltar' => 'Europa/Gibraltar',
  'Europe/Athens' => 'Europa/Athens',
  'Europe/Budapest' => 'Europa/Budapest',
  'Atlantic/Reykjavik' => 'Atlantik/Reykjavik',
  'Europe/Rome' => 'Europa/Rome',
  'Europe/Riga' => 'Europa/Riga',
  'Europe/Vaduz' => 'Europa/Vaduz',
  'Europe/Vilnius' => 'Europa/Vilnius',
  'Europe/Luxembourg' => 'Europa/Luxembourg',
  'Europe/Malta' => 'Europa/Malta',
  'Europe/Chisinau' => 'Europa/Chisinau',
  'Europe/Monaco' => 'Europa/Monaco',
  'Europe/Amsterdam' => 'Europa/Amsterdam',
  'Europe/Oslo' => 'Europa/Oslo',
  'Europe/Warsaw' => 'Europa/Warsaw',
  'Europe/Lisbon' => 'Europa/Lisbon',
  'Atlantic/Azores' => 'Atlantik/Azores',
  'Atlantic/Madeira' => 'Atlantik/Madeira',
  'Europe/Bucharest' => 'Europa/Bucharest',
  'Europe/Kaliningrad' => 'Europa/Kaliningrad',
  'Europe/Moscow' => 'Europa/Moscow',
  'Europe/Samara' => 'Europa/Samara',
  'Asia/Yekaterinburg' => 'Asien/Yekaterinburg',
  'Asia/Omsk' => 'Asien/Omsk',
  'Asia/Novosibirsk' => 'Asien/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asien/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asien/Irkutsk',
  'Asia/Yakutsk' => 'Asien/Yakutsk',
  'Asia/Vladivostok' => 'Asien/Wladiwostok',
  'Asia/Sakhalin' => 'Asien/Sakhalin',
  'Asia/Magadan' => 'Asien/Magadan',
  'Asia/Kamchatka' => 'Asien/Kamchatka',
  'Asia/Anadyr' => 'Asien/Anadyr',
  'Europe/Belgrade' => 'Europa/Belgrade' ,
  'Europe/Madrid' =>'Europa/Madrid' ,
  'Africa/Ceuta' => 'Afrika/Ceuta',
  'Atlantic/Canary' => 'Atlantik/Canary',
  'Europe/Stockholm' => 'Europa/Stockholm',
  'Europe/Zurich' => 'Europa/Zurich' ,
  'Europe/Istanbul' => 'Europa/Istanbul',
  'Europe/Kiev' => 'Europa/Kiev',
  'Europe/Uzhgorod' => 'Europa/Uzhgorod',
  'Europe/Zaporozhye' => 'Europa/Zaporozhye',
  'Europe/Simferopol' => 'Europa/Simferopol',
  'America/New_York' => 'Amerika/New_York',
  'America/Chicago' =>'Amerika/Chicago' ,
  'America/North_Dakota/Center' => 'Amerika/North_Dakota/Center',
  'America/Denver' => 'Amerika/Denver',
  'America/Los_Angeles' => 'Amerika/Los_Angeles',
  'America/Juneau' => 'Amerika/Juneau',
  'America/Yakutat' => 'Amerika/Yakutat',
  'America/Anchorage' => 'Amerika/Anchorage',
  'America/Nome' =>'Amerika/Nome' ,
  'America/Adak' => 'Amerika/Adak',
  'Pacific/Honolulu' => 'Pazifik/Honolulu',
  'America/Phoenix' => 'Amerika/Phoenix',
  'America/Boise' => 'Amerika/Boise',
  'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
  'America/Indiana/Knox' =>  'Amerika, Indiana/Knox',
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
  'Atlantic/Bermuda' => 'Atlantik/Bermuda',
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
  'America/St_Kitts' => 'Amerika/St_Kitts',
  'America/St_Lucia' => 'Amerika/St_Lucia',
  'America/Miquelon' => 'Amerika/Miquelon',
  'America/St_Vincent' => 'Amerika/St_Vincent',
  'America/Grand_Turk' => 'Amerika/Grand_Turk',
  'America/Tortola' => 'Amerika/Tortola',
  'America/St_Thomas' => 'Amerika/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'Amerika/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'Amerika/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'Amerika/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'Amerika/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'Amerika/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'Amerika/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'Amerika/Argentinien/Ushuaia',
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
  'Pacific/Easter' => 'Pazifik/Easter' ,
  'America/Bogota' => 'Amerika/Bogota',
  'America/Curacao' => 'Amerika/Curacao',
  'America/Guayaquil' => 'Amerika/Guayaquil',
  'Pacific/Galapagos' => 'Pazifik/Galapagos' ,
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

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Favoriten';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'SuiteCRM',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'GoToMeeting',
    'IBMSmartCloud'=>'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.NET',
    'Facebook'=>'Facebook',
    'Twitter'=>'Twitter',
  );
  $app_list_strings['eapm_list_import']= array(
  	'Google' => 'Google Kontakte',
  );
$app_list_strings['eapm_list_documents']= array(
  	'Google' => 'Google Doks',
  );
	$app_list_strings['token_status'] = array(
        1 => 'Ersuchung',
        2 => 'Zugang',
        3 => 'Ungültig',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Kampagne' ,
    'email' => 'E-Mail',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Kampagne' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Kampagne' ,
    'email' => 'E-Mail',
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
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Wissensbasis';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Entwurf';
$app_list_strings['aok_status_list']['Expired'] = 'Abgelaufen';
$app_list_strings['aok_status_list']['In_Review'] = 'In Durchsicht';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privat';
$app_list_strings['aok_status_list']['published_public'] = 'Öffentlich';


$app_list_strings['moduleList']['Reminders'] = 'Erinnerungen';
$app_list_strings['moduleListSingular']['Reminders'] = 'Erinnerung';

$app_list_strings['moduleList']['Reminders_Invitees'] = 'Reminders_Invitees';
$app_list_strings['moduleListSingular']['Reminders_Invitees'] = 'Reminder_Invitee';

$app_list_strings['moduleList']['FP_events'] = 'Veranstaltungen';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Orte';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Eingeladen';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nicht eingeladen';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Teilgenommen';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nicht teilgenommen';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Akzeptiert';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Abegelehnt';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Keine Antwort';

$app_strings['LBL_STATUS_EVENT'] = 'Einladungs Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Status akzeptieren';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Diese Seite auswählen';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Alle auswählen';
$app_strings['LBL_LISTVIEW_NONE'] = 'Alle abwählen';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Ereignis';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Fall Ereignisse';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Fall Updates';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Fall Ereignisse';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Fall Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Antworten bitte über dieser Zeile ===';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array (
        'Open' => 'Opened',
        'Closed' => 'Abgeschlossen',
    );

$app_list_strings['case_status_default_key'] = 'Neu';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Neu',
        'Open_Assigned' => 'Zugewiesen',
        'Closed_Closed' => 'Abgeschlossen',
        'Open_Pending Input' => 'Rückmeldung ausstehend',
        'Closed_Rejected' => 'Abgelehnt',
        'Closed_Duplicate' => 'Duplizieren',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Benutzer',
        'Account' => 'Konto Benutzer',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'nehme AOP Default',
    'singleUser' => 'Benutzer',
    'roundRobin' => 'Umlaufverfahren',
    'leastBusy' => 'geringste Auslastung',
    'random' => 'Zufall',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Berichte';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Berichtsbedingungen';
$app_list_strings['moduleList']['AOR_Charts'] = 'Bericht Diagramme';
$app_list_strings['moduleList']['AOR_Fields'] = 'Berichtsfelder';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Geplante Berichte';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Gleich';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Ungleich';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Groesser als';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Kleiner als';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Größer oder gleich ';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Kleiner oder gleich ';
$app_list_strings['aor_operator_list']['Contains'] = 'Enthält';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Beginnt mit';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Endet mit';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'J-m-t';
$app_list_strings['aor_format_options']['Ymd'] = 'Jmt';
$app_list_strings['aor_format_options']['Y-m'] = 'J-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 't/M/J';
$app_list_strings['aor_format_options']['Y'] = 'Jahr';
$app_list_strings['aor_sql_operator_list']['Equal_To'] = 'Gleich';
$app_list_strings['aor_sql_operator_list']['Not_Equal_To'] = 'Ungleich';
$app_list_strings['aor_sql_operator_list']['Greater_Than'] = 'Grösser als';
$app_list_strings['aor_sql_operator_list']['Less_Than'] = 'Kleiner als';
$app_list_strings['aor_sql_operator_list']['Greater_Than_or_Equal_To'] = 'Grösser oder gleich';
$app_list_strings['aor_sql_operator_list']['Less_Than_or_Equal_To'] = 'Kleiner oder Gleich';
$app_list_strings['aor_sql_operator_list']['Contains'] = 'Enthält';
$app_list_strings['aor_sql_operator_list']['Starts_With'] = 'Enthält';
$app_list_strings['aor_sql_operator_list']['Ends_With'] = 'Enthält';
$app_list_strings['aor_condition_operator_list']['And'] = 'Und';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ODER';
$app_list_strings['aor_condition_type_list']['Value'] = 'Wert';
$app_list_strings['aor_condition_type_list']['Field'] = 'Feld';
$app_list_strings['aor_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Mehrere';
$app_list_strings['aor_condition_type_list']['Period'] = 'Periodisch';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Aktueller Benutzer';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuten';
$app_list_strings['aor_date_type_list']['hour'] = 'Stunden';
$app_list_strings['aor_date_type_list']['day'] = 'Tage';
$app_list_strings['aor_date_type_list']['week'] = 'Wochen';
$app_list_strings['aor_date_type_list']['month'] = 'Monate';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Öffnungszeiten';
$app_list_strings['aor_date_options']['now'] = 'Jetzt';
$app_list_strings['aor_date_options']['field'] = 'Dieses Feld';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = 'Plus';
$app_list_strings['aor_date_operator']['minus'] = 'Minus';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Aufsteigend';
$app_list_strings['aor_sort_operator']['DESC'] = 'Aufsteigend';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Zähler';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Summe';
$app_list_strings['aor_function_list']['AVG'] = 'Durchschnitt';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Zähler';
$app_list_strings['aor_total_options']['SUM'] = 'Summe';
$app_list_strings['aor_total_options']['AVG'] = 'Durchschnitt';
$app_list_strings['aor_chart_types']['bar'] = 'Balkendiagramm';
$app_list_strings['aor_chart_types']['line'] = 'Liniendiagramm';
$app_list_strings['aor_chart_types']['pie'] = 'Tortendiagramm';
$app_list_strings['aor_chart_types']['radar'] = 'Radardiagramm';
$app_list_strings['aor_chart_types']['polar'] = 'Polardiagramm';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Gestapelter Balken';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Gruppierter Balken';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Monatlich';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Wöchentlich';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Tag(e)';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktive E-Mailkonten';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inaktiv';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-Mails';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Benutzer';
$app_list_strings['aor_email_type_list']['Users'] = 'Benutzer';
$app_list_strings['aor_assign_options']['all'] = 'ALLE Benutzer';
$app_list_strings['aor_assign_options']['role'] = 'ALLE Benutzer in der Rolle';
$app_list_strings['aor_assign_options']['security_group'] = 'ALLE Benutzer in der Sicherheitsgruppe';
$app_list_strings['date_time_period_list']['today'] = 'Heute';
$app_list_strings['date_time_period_list']['yesterday'] = 'Gestern';
$app_list_strings['date_time_period_list']['this_week'] = 'In dieser Woche';
$app_list_strings['date_time_period_list']['last_week'] = 'Letzte Woche';
$app_list_strings['date_time_period_list']['last_month'] = 'Letzten Monat';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Dieses Quartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Letztes Quartal';
$app_list_strings['date_time_period_list']['this_year'] = 'In diesem Jahr';
$app_list_strings['date_time_period_list']['last_year'] = 'Im letzten Jahr';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'am';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'Ein';
$app_strings['LBL_CRON_AT'] = 'bei';
$app_strings['LBL_CRON_RAW'] = 'Erweitert';
$app_strings['LBL_CRON_MIN'] = 'Minimal';
$app_strings['LBL_CRON_HOUR'] = 'Stunde';
$app_strings['LBL_CRON_DAY'] = 'Tag';
$app_strings['LBL_CRON_MONTH'] = 'Monat';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Tag(e)';
$app_strings['LBL_CRON_WEEKLY'] = 'Wöchentlich';
$app_strings['LBL_CRON_MONTHLY'] = 'Monatlich';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Verträge';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Rechnungen';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF-Vorlagen';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produktkategorien';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkte';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Zeilenelemente';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Positionsgruppen';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Angebote';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyst';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Mitbewerber';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Systemintegrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Potentieller Kunde';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Wiederverkäufer';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Andere';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Entwurf';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Verhandlung';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Geliefert';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Abwarten';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Bestätigt';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Gewonnen';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Verloren';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Wird nicht realisiert';
$app_list_strings['quote_term_dom']['Net 15'] = 'Netto 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Netto 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Genehmigt';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Nicht genehmigt';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '0,05%';
$app_list_strings['vat_list']['7.5'] = '0,08%';
$app_list_strings['vat_list']['17.5'] = '0,18%';
$app_list_strings['vat_list']['20.0'] = '0,20%';
$app_list_strings['discount_list']['Percentage'] = '%';
$app_list_strings['discount_list']['Amount'] = 'Betr.';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyst';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Mitbewerber';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Systemintegrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Potentieller Kunde';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Wiederverkäufer';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Andere';
$app_list_strings['invoice_status_dom']['Paid'] = 'Bezahlt';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Nicht bezahlt';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Storniert';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'nicht berechnet';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'berechnet';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'JJJJ';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Ware';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Angebote';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Rechnungen';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Verträge';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Angebote';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Rechnungen';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Verträge';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Firmen';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakte';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Interessenten';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nicht begonnen';
$app_list_strings['contract_status_list']['In Progress'] = 'In Bearbeitung';
$app_list_strings['contract_status_list']['Signed'] = 'Unterzeichnet';
$app_list_strings['contract_type_list']['Type'] = 'Typ';
$app_strings['LBL_GENERATE_LETTER'] = 'Brief erzeugen';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Bitte Vorlage auswählen';
$app_strings['LBL_NO_TEMPLATE'] = 'FEHLER\nKeine Vorlagen gefunden.\nBitte gehen Sie zum PDF Vorlagenmodul und erstellen Sie eine Vorlage.';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Arbeitsablauf';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Workflow Bedingungen';
$app_list_strings['moduleList']['AOW_Processed'] = 'Prozessaudit';
$app_list_strings['moduleList']['AOW_Actions'] = 'Workflow Aktionen';
$app_list_strings['aow_status_list']['Active'] = 'Aktive E-Mailkonten';
$app_list_strings['aow_status_list']['Inactive'] = 'Inaktiv';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Gleich';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Ungleich';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Groesser als';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Kleiner als';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Größer oder gleich ';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Kleiner oder gleich ';
$app_list_strings['aow_operator_list']['Contains'] = 'Enthält';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Beginnt mit';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Endet mit';
$app_list_strings['aow_operator_list']['is_null'] = 'Ist Null';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = 'Gleich';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = 'Ungleich';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = 'Grösser als';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = 'Kleiner als';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = 'Grösser oder gleich';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = 'Kleiner oder Gleich';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'Enthält';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'Enthält';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'Enthält';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'Ist NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Fertig';
$app_list_strings['aow_process_status_list']['Running'] = 'Laufend';
$app_list_strings['aow_process_status_list']['Pending'] = 'Ausstehend';
$app_list_strings['aow_process_status_list']['Failed'] = 'Fehler bei';
$app_list_strings['aow_condition_operator_list']['And'] = 'Und';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ODER';
$app_list_strings['aow_condition_type_list']['Value'] = 'Wert';
$app_list_strings['aow_condition_type_list']['Field'] = 'Feld';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Beliebige Änderung';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In Berechtigungsgruppe';
$app_list_strings['aow_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Mehrere';
$app_list_strings['aow_action_type_list']['Value'] = 'Wert';
$app_list_strings['aow_action_type_list']['Field'] = 'Feld';
$app_list_strings['aow_action_type_list']['Date'] = 'Datum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Umlaufverfahren';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Am wenigsten beschäftigt';
$app_list_strings['aow_action_type_list']['Random'] = 'Zufall';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Wert';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Feld';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuten';
$app_list_strings['aow_date_type_list']['hour'] = 'Stunden';
$app_list_strings['aow_date_type_list']['day'] = 'Tage';
$app_list_strings['aow_date_type_list']['week'] = 'Wochen';
$app_list_strings['aow_date_type_list']['month'] = 'Monate';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Öffnungszeiten';
$app_list_strings['aow_date_options']['now'] = 'Jetzt';
$app_list_strings['aow_date_options']['today'] = 'Heute';
$app_list_strings['aow_date_options']['field'] = 'Dieses Feld';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = 'Plus';
$app_list_strings['aow_date_operator']['minus'] = 'Minus';
$app_list_strings['aow_assign_options']['all'] = 'ALLE Benutzer';
$app_list_strings['aow_assign_options']['role'] = 'ALLE Benutzer in der Rolle';
$app_list_strings['aow_assign_options']['security_group'] = 'ALLE Benutzer in der Sicherheitsgruppe';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-Mails';
$app_list_strings['aow_email_type_list']['Record Email'] = 'E-Mail erfassen';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Verknüpftes Feld';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Benutzer';
$app_list_strings['aow_email_type_list']['Users'] = 'Benutzer';
$app_list_strings['aow_email_to_list']['to'] = 'An';
$app_list_strings['aow_email_to_list']['cc'] = 'Kopie-Empfänger';
$app_list_strings['aow_email_to_list']['bcc'] = 'Blindkopie-Empfänger';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Alle Datensätze';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Neue Datensätze';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Geänderte Datensätze';
$app_list_strings['aow_run_when_list']['Always'] = 'Immer';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Nur beim Speichern';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Nur im Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projektvorlagen';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Vorlagen für Projektaufgaben';
$app_list_strings['relationship_type_list']['FS'] = 'Ende bis Anfang';
$app_list_strings['relationship_type_list']['SS'] = 'Anfang bis Anfang';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Projekt-Feiertage';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kontakte';
$app_list_strings['holiday_resource_dom']['Users'] = 'Benutzer';
$app_list_strings['duration_unit_dom']['Days'] = 'Tage';
$app_list_strings['duration_unit_dom']['Hours'] = 'Stunden';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Gantt ansehen';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Gantt ansehen';
$app_strings['LBL_CREATE_PROJECT'] = 'Neues Projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Anzeigen';
$app_strings['LBL_MAPS'] = 'Karten';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Länge';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Breitengrad';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';
$app_strings['LBL_BUG_FIX'] = 'Fehlerbehebung';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Karten';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Kartenmarker';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Kartengebiete';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Kartenadressen Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Meilen';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometer';

$app_list_strings['map_module_type_list']['Accounts'] = 'Firmen';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakte';
$app_list_strings['map_module_type_list']['Cases'] = 'Fälle';
$app_list_strings['map_module_type_list']['Leads'] = 'Interessenten';
$app_list_strings['map_module_type_list']['Meetings'] = 'Termine';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Verkaufschancen';
$app_list_strings['map_module_type_list']['Project'] = 'Projekte';
$app_list_strings['map_module_type_list']['Prospects'] = 'Zielkontakte';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Firmen';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakte';
$app_list_strings['map_relate_type_list']['Cases'] = 'Fälle';
$app_list_strings['map_relate_type_list']['Leads'] = 'Interessenten';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Meetings';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Verkaufschancen';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekte';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Zielkontakte';

$app_list_strings['marker_image_list']['accident'] = 'Unfall';
$app_list_strings['marker_image_list']['administration'] = 'Verwaltung';
$app_list_strings['marker_image_list']['agriculture'] = 'Landwirtschaft';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Kleinflugzeug';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Charterflugzeug';
$app_list_strings['marker_image_list']['airport'] = 'AirPort';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Wohnung';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Bogen';
$app_list_strings['marker_image_list']['atm'] = 'Bankomat';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pfund';
$app_list_strings['marker_image_list']['bar'] = 'Leiste';
$app_list_strings['marker_image_list']['beach'] = 'Strand';
$app_list_strings['marker_image_list']['beautiful'] = 'Schön';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Fahrrad Parkplatz';
$app_list_strings['marker_image_list']['big_city'] = 'Großstadt';
$app_list_strings['marker_image_list']['bridge'] = 'Brücke';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Bridge-Modern';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Straßenbahn';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Autovermietung';
$app_list_strings['marker_image_list']['carrepair'] = 'Werkstatt';
$app_list_strings['marker_image_list']['castle'] = 'Schloss';
$app_list_strings['marker_image_list']['cathedral'] = 'DOM';
$app_list_strings['marker_image_list']['chapel'] = 'Kapelle';
$app_list_strings['marker_image_list']['church'] = 'Kirche';
$app_list_strings['marker_image_list']['city_square'] = 'Platz';
$app_list_strings['marker_image_list']['cluster'] = 'Anhäufung';
$app_list_strings['marker_image_list']['cluster_2'] = 'Anhäufung 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Anhäufung 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Anhäufung 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Anhäufung 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kaffee';
$app_list_strings['marker_image_list']['community_centre'] = 'Bürgerzentrum';
$app_list_strings['marker_image_list']['company'] = 'Unternehmen';
$app_list_strings['marker_image_list']['conference'] = 'Konferenz';
$app_list_strings['marker_image_list']['construction'] = 'Baugewerbe';
$app_list_strings['marker_image_list']['convenience'] = 'Komfort';
$app_list_strings['marker_image_list']['court'] = 'Gericht';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Wechselstube';
$app_list_strings['marker_image_list']['customs'] = 'Zoll';
$app_list_strings['marker_image_list']['cycling'] = 'Fahrradfahren';
$app_list_strings['marker_image_list']['dam'] = 'DAM';
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
$app_list_strings['marker_image_list']['dentist'] = 'Zahnarzt';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Supermarkt';
$app_list_strings['marker_image_list']['disability'] = 'Personen mit Behinderungen';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Behindertenparkplaz';
$app_list_strings['marker_image_list']['doctor'] = 'Arzt';
$app_list_strings['marker_image_list']['dog_leash'] = 'Leine';
$app_list_strings['marker_image_list']['down'] = 'Nach unten';
$app_list_strings['marker_image_list']['down_left'] = 'Nach unten links';
$app_list_strings['marker_image_list']['down_right'] = 'Nach unten rechts';
$app_list_strings['marker_image_list']['down_then_left'] = 'Nach unten dann links';
$app_list_strings['marker_image_list']['down_then_right'] = 'Nach unten dann rechts';
$app_list_strings['marker_image_list']['drugs'] = 'Arzneimittel';
$app_list_strings['marker_image_list']['elevator'] = 'Lift';
$app_list_strings['marker_image_list']['embassy'] = 'Embassy';
$app_list_strings['marker_image_list']['expert'] = 'Experte';
$app_list_strings['marker_image_list']['factory'] = 'Factory';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Steinschlag';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast food';
$app_list_strings['marker_image_list']['festival'] = 'Fest';
$app_list_strings['marker_image_list']['fjord'] = 'Förde';
$app_list_strings['marker_image_list']['forest'] = 'Gesamtstruktur';
$app_list_strings['marker_image_list']['fountain'] = 'Quelle';
$app_list_strings['marker_image_list']['friday'] = 'Freitag';
$app_list_strings['marker_image_list']['garden'] = 'Garten';
$app_list_strings['marker_image_list']['gas_station'] = 'Tankstelle';
$app_list_strings['marker_image_list']['geyser'] = 'Springbrunnen';
$app_list_strings['marker_image_list']['gifts'] = 'Geschenke';
$app_list_strings['marker_image_list']['gourmet'] = 'Genießer';
$app_list_strings['marker_image_list']['grocery'] = 'Lebensmittel';
$app_list_strings['marker_image_list']['hairsalon'] = 'Friseur';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Kabelführung';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historisches Stadtviertel';
$app_list_strings['marker_image_list']['home'] = 'Startseite';
$app_list_strings['marker_image_list']['hospital'] = 'Krankenhaus';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Stern';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Sterne';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Sterne';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Sterne';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Sterne';
$app_list_strings['marker_image_list']['info'] = 'Information';
$app_list_strings['marker_image_list']['justice'] = 'Justiz';
$app_list_strings['marker_image_list']['lake'] = 'See';
$app_list_strings['marker_image_list']['laundromat'] = 'Waschsalon';
$app_list_strings['marker_image_list']['left'] = 'Nach links';
$app_list_strings['marker_image_list']['left_then_down'] = 'Links dann nach unten';
$app_list_strings['marker_image_list']['left_then_up'] = 'Links dann nach oben';
$app_list_strings['marker_image_list']['library'] = 'Bibliothek';
$app_list_strings['marker_image_list']['lighthouse'] = 'Von einem Leuchtturm';
$app_list_strings['marker_image_list']['liquor'] = 'Alkohol';
$app_list_strings['marker_image_list']['lock'] = 'Schloss';
$app_list_strings['marker_image_list']['main_road'] = 'Hauptstraße';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobilfunkmast';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderner  Turm';
$app_list_strings['marker_image_list']['monastery'] = 'Kloster';
$app_list_strings['marker_image_list']['monday'] = 'Montag';
$app_list_strings['marker_image_list']['monument'] = 'Denkmal';
$app_list_strings['marker_image_list']['mosque'] = 'Moschee';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorrad:';
$app_list_strings['marker_image_list']['museum'] = 'Nordsee';
$app_list_strings['marker_image_list']['music_live'] = 'Live-Musik';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Ölförderanlage';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Hamburg';
$app_list_strings['marker_image_list']['panoramic'] = 'Panorama';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park & Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parken';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Picknick';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Plätze nicht besucht';
$app_list_strings['marker_image_list']['places_visited'] = 'Plätze besucht';
$app_list_strings['marker_image_list']['playground'] = 'Effekt "Partikelsimulation"';
$app_list_strings['marker_image_list']['police'] = 'Polizei';
$app_list_strings['marker_image_list']['port'] = 'Anschluss';
$app_list_strings['marker_image_list']['postal'] = 'Post';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Strommast';
$app_list_strings['marker_image_list']['power_plant'] = 'Kraftwerk';
$app_list_strings['marker_image_list']['power_substation'] = 'Umspannwerk';
$app_list_strings['marker_image_list']['public_art'] = 'Öffentliche Kunst';
$app_list_strings['marker_image_list']['rain'] = 'Regen';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobilien';
$app_list_strings['marker_image_list']['regroup'] = 'Neu gruppieren';
$app_list_strings['marker_image_list']['resort'] = 'Urlaubsort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrikanische Restaurant';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant Grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinesisch';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Fisch';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fisch und Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant-Griechisch';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indisch';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant-Italienisch';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant-Japanisch';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant-Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Koreanisch';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterran';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexikanisch';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantische';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thailändisch';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Türkisch';
$app_list_strings['marker_image_list']['right'] = 'Rechts';
$app_list_strings['marker_image_list']['right_then_down'] = 'Rechts dann nach unten';
$app_list_strings['marker_image_list']['right_then_up'] = 'Rechts dann nach oben';
$app_list_strings['marker_image_list']['satursday'] = 'Samstag';
$app_list_strings['marker_image_list']['school'] = 'Schule';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Einkaufszentrum';
$app_list_strings['marker_image_list']['shore'] = 'Ufer';
$app_list_strings['marker_image_list']['sight'] = 'Aussicht';
$app_list_strings['marker_image_list']['small_city'] = 'Kleine Stadt';
$app_list_strings['marker_image_list']['snow'] = 'Schnee';
$app_list_strings['marker_image_list']['spaceport'] = 'Raumfahrtzentrum';
$app_list_strings['marker_image_list']['speed_100'] = 'Geschwindigkeit 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Geschwindigkeit 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Geschwindigkeit von 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Geschwindigkeit 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Geschwindigkeit 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Geschwindigkeit 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Geschwindigkeit 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Geschwindigkeit 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Geschwindigkeit 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Geschwindigkeit 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Geschwindigkeit 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Geschwindigkeit 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Rüttelschwelle';
$app_list_strings['marker_image_list']['stadium'] = 'Stadium';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Dampfzug';
$app_list_strings['marker_image_list']['stop'] = 'Beenden';
$app_list_strings['marker_image_list']['stoplight'] = 'Ampel';
$app_list_strings['marker_image_list']['subway'] = 'U-Bahn';
$app_list_strings['marker_image_list']['sun'] = 'So';
$app_list_strings['marker_image_list']['sunday'] = 'Sonntag';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarkt';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoge';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxispur';
$app_list_strings['marker_image_list']['teahouse'] = 'Teehaus';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu Tempel';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Freizeitpark';
$app_list_strings['marker_image_list']['thursday'] = 'Donnerstag';
$app_list_strings['marker_image_list']['toilets'] = 'Toiletten';
$app_list_strings['marker_image_list']['toll_station'] = 'Mautstation';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Verkehrskamera';
$app_list_strings['marker_image_list']['train'] = 'Zug';
$app_list_strings['marker_image_list']['tram'] = 'Straßenbahn';
$app_list_strings['marker_image_list']['truck'] = 'Lastwagen';
$app_list_strings['marker_image_list']['tuesday'] = 'Dienstag';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Links abbiegen';
$app_list_strings['marker_image_list']['turn_right'] = 'Rechts abbiegen';
$app_list_strings['marker_image_list']['university'] = 'Universität';
$app_list_strings['marker_image_list']['up'] = 'Nach oben';
$app_list_strings['marker_image_list']['up_left'] = 'Nach oben links';
$app_list_strings['marker_image_list']['up_right'] = 'Nach oben rechts';
$app_list_strings['marker_image_list']['up_then_left'] = 'Nach oben dann links';
$app_list_strings['marker_image_list']['up_then_right'] = 'Nach oben dann rechts';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Die Villa';
$app_list_strings['marker_image_list']['water'] = 'Wasser';
$app_list_strings['marker_image_list']['waterfall'] = 'Wasserfall';
$app_list_strings['marker_image_list']['watermill'] = 'Mühle';
$app_list_strings['marker_image_list']['waterpark'] = 'Wasserpark';
$app_list_strings['marker_image_list']['watertower'] = 'Wasserturm';
$app_list_strings['marker_image_list']['wednesday'] = 'Mittwoch';
$app_list_strings['marker_image_list']['wifi'] = 'W-LAN';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Windturbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windrad';
$app_list_strings['marker_image_list']['winery'] = 'Winzer';
$app_list_strings['marker_image_list']['work_office'] = 'Büro';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Weltkulturerbe';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';


//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Außerhalb des Büros';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In einem Meeting';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Wiedervorlage';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Bitte geben Sie die Wiedervorlage Information ein';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Datum:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Grund:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Bitte ein gültiges Datum auswählen';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Bitte einen Grund auswählen';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Wiedervorlage';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Verlauf Anrufversuche';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Rufen Sie Versuche';

//SecurityGroups
$app_list_strings["moduleList"]["SecurityGroups"] = 'Berechtigungsgruppen';
$app_strings['LBL_LOGIN_AS'] = "Einloggen als";
$app_strings['LBL_LOGOUT_AS'] = "Ausloggen als";
$app_strings['LBL_SECURITYGROUP'] = 'Berechtigungsgruppe:';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook Benutzer';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter Benutzer';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtern';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Neue Firma';
$app_strings['LBL_QUICK_CONTACT'] = 'Kontakt erstellen';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Verkaufschance erstellen';
$app_strings['LBL_QUICK_LEAD'] = 'Neuer Interessent';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Neues Dokument';
$app_strings['LBL_QUICK_CALL'] = 'Anruf Log';
$app_strings['LBL_QUICK_TASK'] = 'Aufgabe erstellen';
$app_strings['LBL_COLLECTION_TYPE'] = 'Typ';

$app_strings['LBL_ADD_TAB'] = 'Registerkarte hinzufügen';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Dashboard';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Einen Namen für die Übersicht eingeben:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Wählen Sie die Anzahl der Spalten';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Wollen Sie dies wirklich löschen?';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'Übersicht?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Übersichtsseite hinzufügen';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Aktuelle Übersichtsseite entfernen';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Übersichtsseite umbenennen';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'SuiteCRM entdecken';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Aufgaben', 'Meetings' => 'Termine', 'Calls' => 'Anrufe', 'Notes' => 'Notizen', 'Emails' => 'E-Mails' );

?>
