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
  'language_pack_name' => 'Polski (Poland) - pl_PL',
  'moduleList' =>
  array (
    'Home' => 'Strona Główna',
    'Contacts' => 'Kontakty',
    'Accounts' => 'Konta',
    'Opportunities' => 'Okazje',
    'Cases' => 'Zgłoszenia',
    'Notes' => 'Notatki',
    'Calls' => 'Rozmowy Telefoniczne',
    'Emails' => 'Wiadomości Email',
    'Meetings' => 'Spotkania',
    'Tasks' => 'Zadania',
    'Calendar' => 'Kalendarz',
    'Leads' => 'Potencjalni Klienci',
    'Currencies' => 'Waluty',
    'Activities' => 'Działania',
    'Bugs' => 'Błędy',
    'Feeds' => 'RSS',
    'iFrames'=>'Moje Portale',
    'TimePeriods'=>'Przedziały czasowe',
    'TaxRates'=>'Stawki podatkowe',
    'ContractTypes' => 'Rodzaje umowy',
    'Schedulers'=>'Harmonogramy',
    'Project'=>'Projekty',
    'ProjectTask'=>'Zadania Projektowe',
    'Campaigns'=>'Kampanie',
    'CampaignLog'=>'Kampania Log',
    'Documents'=>'Dokumenty',
    'DocumentRevisions'=>'Korekty Dokumentów',
    'Connectors'=>'Łączniki',
    'Roles'=>'Role',
    'Notifications'=>'Powiadomienia',
    'Sync'=>'Synchronizuj',
    'Users' => 'Użytkownicy',
    'Employees' => 'Pracownicy',
    'Administration' => 'Administrator',
    'ACLRoles' => 'Role',
    'InboundEmail' => 'Email',
    'Releases' => 'Publikacje',
    'Prospects' => 'Targety',
    'Queues' => 'Kolejki',
    'EmailMarketing' => 'Mailing marketingowy',
    'EmailTemplates' => 'Szablony Wiadomości',
    'SNIP' => "Archiwizacja e-mail",
    'ProspectLists' => 'Listy Targetowe',
    'SavedSearch' => 'Zapis Wyników Wyszukiwania',
    'UpgradeWizard' => 'Kreator uaktualniania',
    'Trackers' => 'Trakery',
    'TrackerPerfs' => 'Wydajność tropiciela',
    'TrackerSessions' => 'Sesje tropiciela',
    'TrackerQueries' => 'Zapytania tropiciela',
    'FAQ' => 'FAQ',
    'Newsletters' => 'Newsletter',
    'SugarFeed'=>'Kanał SuiteCRM',
    'KBDocuments' => 'Baza Wiedzy',
  'SugarFavorites'=>'Ulubione SuiteCRM',

    'OAuthKeys' => 'OAuth - klucze klienta',
    'OAuthTokens' => 'OAuth - tokeny',
  ),

  'moduleListSingular' =>
  array (
    'Home' => 'Strona Główna',
    'Dashboard' => 'Kokpit',
    'Contacts' => 'Kontakty',
    'Accounts' => 'Konta',
    'Opportunities' => 'Okazje',
    'Cases' => 'Zgłoszenia',
    'Notes' => 'Notatki',
    'Calls' => 'Rozmowy Telefoniczne',
    'Emails' => 'Wiadomości Email',
    'Meetings' => 'Spotkania',
    'Tasks' => 'Zadania',
    'Calendar' => 'Kalendarz',
    'Leads' => 'Potencjalny Klient',
    'Activities' => 'Działania',
    'Bugs' => 'Wykrywacz Błędów',
    'KBDocuments' => 'Baza Wiedzy',
    'Feeds' => 'RSS',
    'iFrames'=>'Mój Portal',
    'TimePeriods'=>'Przedział  Czasu',
    'Project'=>'Projekty',
    'ProjectTask'=>'Zadania Projektowe',
    'Prospects' => 'Targety',
    'Campaigns'=>'Kampanie',
    'Documents'=>'Dokumenty',
    'SugarFollowing'=>'Obserwowanie SuiteCRM',
    'Sync'=>'Sync',
    'Users' => 'Użytkownicy',
  'SugarFavorites'=>'Ulubione SuiteCRM'

        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Tak',
    '2'=>'Nie',
  ),

  //e.g. en franï¿½ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Ekspert',
    'Competitor' => 'Konkurent',
    'Customer' => 'Klient',
    'Integrator' => 'Integrator',
    'Investor' => 'Inwestor',
    'Partner' => 'Partner',
    'Press' => 'Prasa',
    'Prospect' => 'Szansa',
    'Reseller' => 'Pośrednik',
    'Other' => 'Inny',
  ),
  //e.g. en espaï¿½ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Branża Odzieżowa',
    'Banking' => 'Bankowość',
    'Biotechnology' => 'Biotechnologia',
    'Chemicals' => 'Branża Chemiczna',
    'Communications' => 'Branża Samochodowa',
    'Construction' => 'Budownictwo',
    'Consulting' => 'Doradztwo',
    'Education' => 'Edukacja/Szkolnictwo',
    'Electronics' => 'Branża Elektroniczna',
    'Energy' => 'Branża Energetyczna',
    'Engineering' => 'Inżynieria',
    'Entertainment' => 'Branża Rozrywkowa',
    'Environmental' => 'Ochrona Środowiska',
    'Finance' => 'Usługi Finansowe',
    'Government' => 'Instytucje Publiczne',
    'Healthcare' => 'Opieka Zdrowotna',
    'Hospitality' => 'Szpitale',
    'Insurance' => 'Ubezpieczenia',
    'Machinery' => 'Branża Maszynowa',
    'Manufacturing' => 'Drobna Wytwórczość',
    'Media' => 'Media',
    'Not For Profit' => 'Organizacje Non Profit',
    'Recreation' => 'Turystyka i Rekreacja',
    'Retail' => 'Handel Detaliczny',
    'Shipping' => 'Spedycja',
    'Technology' => 'Branża IT',
    'Telecommunications' => 'Telekomunikacja',
    'Transportation' => 'Transport',
    'Utilities' => 'Użyteczność Publiczna',
    'Other' => 'Inny',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Telemarketing',
    'Existing Customer' => 'Istniejący Klient',
    'Self Generated' => 'Samodzielne Pozyskanie',
    'Employee' => 'Pracownik',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Direct Mail' => 'Reklama Bezpośrednia',
    'Conference' => 'Uczestnik Konferencji',
    'Trade Show' => 'Uczestnik Prezentacji',
    'Web Site' => 'Ze strony www',
    'Word of mouth' => 'Z polecenia',
    'Email' => 'Wiadomości Email',
    'Campaign'=>'Kampania',
    'Other' => 'Inny',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Istniejący Projekt',
    'New Business' => 'Nowy Projekt',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Zysk',
    'Investment'=>'Inwestycja',
    'Expected_Revenue'=>'Szacowany Dochód',
    'Budget'=>'Budżet',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Główna Osoba Decyzyzjna',
    'Business Decision Maker' => 'Biznesowa Osoba Decyzyjna',
    'Business Evaluator' => 'Ewaluator Biznesu',
    'Technical Decision Maker' => 'Techniczna Osoba Decyzyjna',
    'Technical Evaluator' => 'Techniczny Ewaluator',
    'Executive Sponsor' => 'Główny Sponsor',
    'Influencer' => 'Osoba Wpływowa',
    'Other' => 'Inny',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Główny Kontakt',
    'Alternate Contact' => 'Alternatywny Kontakt',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => '15',
    'Net 30' => '30',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'fts_type' => array (
      '' => '',
      'Elastic' => 'elasticsearch'
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
    'Closed Lost' => 'Odrzucone',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Wersja Robocza',
    'Negotiation' => 'Negocjacje',
    'Delivered' => 'Dostarczone',
    'On Hold' => 'Wstrzymane',
    'Confirmed' => 'Potwierdzone',
    'Closed Accepted' => 'Zaakceptowane',
    'Closed Lost' => 'Odrzucone',
    'Closed Dead' => 'Zamknięte Niedostępne',
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
    'Call' => 'Połączenie',
    'Meeting' => 'Spotkanie',
    'Task' => 'Zadanie',
    'Email' => 'Wiadomości Email',
    'Note' => 'Uwaga',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Sz. Pan',
        'Ms.' => 'Sz. Pani',
        'Mrs.' => 'Sz. Pani',
        'Dr.' => 'Dr',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time' => 90000,
  'reminder_time_options' => array( 60=> '1 minuta przed',
                                  300=> '5 minut przed',
                                  600=> '10 minut przed',
                                  900=> '15 minut przed',
                                  1800=> '30 minut przed',
                                  3600=> '1 godzina przed',
                                  7200 => '2 godziny przed',
                                  10800 => '3 godziny przed',
                                  18000 => '5 godzin przed',
                                  86400 => '1 dzień przed',
                                 ),

  'task_priority_default' => 'Średni',
  'task_priority_dom' =>
  array (
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
  ),
  'task_status_default' => 'Nie rozpoczęte',
  'task_status_dom' =>
  array (
    'Not Started' => 'Nie rozpoczęte',
    'In Progress' => 'W realizacji',
    'Completed' => 'Ukończone',
    'Pending Input' => 'Oczekujący',
    'Deferred' => 'Przełożone',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Zaplanowane',
    'Held' => 'Odbyte',
    'Not Held' => 'Nie odbyte',
  ),
  'extapi_meeting_password' =>
  array (
      'WebEx' => 'WebEx',
  ),
  'meeting_type_dom' =>
   array (
      'Other' => 'Inny',
      'Sugar' => 'SuiteCRM',
   ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Zaplanowane',
    'Held' => 'Odbyte',
    'Not Held' => 'Nie odbyte',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Przychodzące',
    'Outbound' => 'Wychodzące',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Nowy',
    'Assigned' => 'Przypisany',
    'In Process' => 'W Trakcie Realizacji',
    'Converted' => 'Skonwertowany',
    'Recycled' => 'Przetworzony',
    'Dead' => 'Martwy',
  ),
   'gender_list' =>
  array (
    'male' => 'Strona Główna',
    'female' => 'Kobieta',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'Nowy',
  'case_status_dom' =>
  array (
    'New' => 'Nowy',
    'Assigned' => 'Przypisany',
    'Closed' => 'Zamknięty',
    'Pending Input' => 'Oczekujący',
    'Rejected' => 'Odrzucony',
    'Duplicate' => 'Duplikat',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Wysoki',
    'P2' => 'Średni',
    'P3' => 'Niski',
  ),
  'user_type_dom' =>
  array (
    'RegularUser' => 'Normalny użytkownik',
    'Administrator' => 'Administrator',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Aktywny',
    'Inactive' => 'Nieaktywny',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Aktywny',
    'Terminated' => 'Zakończony',
    'Leave of Absence' => 'Usprawiedliwiona Nieobecność',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),
    'project_task_priority_options' => array (
        'High' => 'Wysoki',
        'Medium' => 'Średni',
        'Low' => 'Niski',
    ),
    'project_task_priority_default' => 'Średni',

    'project_task_status_options' => array (
        'Not Started' => 'Nie rozpoczęte',
        'In Progress' => 'W realizacji',
        'Completed' => 'Ukończone',
        'Pending Input' => 'Oczekujący',
        'Deferred' => 'Przełożone',
    ),
    'project_task_utilization_options' => array (
        '0' => 'Niedostępne',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Wersja Robocza',
        'In Review' => 'W trakcie rozpatrzania',
        'Underway' => 'W trakcie',
        'On_Hold' => 'Wstrzymane',
        'Completed' => 'Ukończone',
    ),
    'project_status_default' => 'W Roboczych',

    'project_duration_units_dom' => array (
        'Days' => 'Dni',
        'Hours' => 'Godziny',
    ),

    'project_priority_options' => array (
        'High' => 'Wysoki',
        'Medium' => 'Średni',
        'Low' => 'Niski',
    ),
    'project_priority_default' => 'Średni',
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Konta',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Konta',
    'Opportunities' => 'Okazje',
    'Cases' => 'Zgłoszenia',
    'Leads' => 'Potencjalny Klient',
    'Contacts' => 'Kontakty', // cn (11/22/2005) added to support Emails


    'Bugs' => 'Wykrywacz Błędów',
    'Project' => 'Projekty',

    'Prospects' => 'Targety',
    'ProjectTask' => 'Zadania Projektowe',


    'Tasks' => 'Zadania',

  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Konta',
    'Contacts' => 'Kontakty',
    'Opportunities' => 'Okazje',
    'Tasks' => 'Zadania',
    'Emails' => 'Wiadomości Email',

    'Bugs' => 'Wykrywacz Błędów',
    'Project' => 'Projekty',
    'ProjectTask' => 'Zadania Projektowe',
    'Prospects' => 'Targety',
    'Cases' => 'Zgłoszenia',
    'Leads' => 'Potencjalny Klient',

    'Meetings' => 'Spotkania',
    'Calls' => 'Rozmowy Telefoniczne',
  ),

  'parent_type_display' =>
  array (
    'Accounts' => 'Konta',
    'Contacts' => 'Kontakty',
    'Tasks' => 'Zadania',
    'Opportunities' => 'Okazje',



    'Bugs' => 'Wykrywacz Błędów',
    'Cases' => 'Zgłoszenia',
    'Leads' => 'Potencjalny Klient',

    'Project' => 'Projekty',
    'ProjectTask' => 'Zadania Projektowe',

    'Prospects' => 'Targety',

  ),

  'issue_priority_default_key' => 'Średni',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Pilny',
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Zaakceptowany',
    'Duplicate' => 'Duplikat',
    'Closed' => 'Zamknięty',
    'Out of Date' => 'Nieaktualny',
    'Invalid' => 'Nieprawidłowy',
  ),

  'issue_status_default_key' => 'Nowy',
  'issue_status_dom' =>
  array (
    'New' => 'Nowy',
    'Assigned' => 'Przypisany',
    'Closed' => 'Zamknięty',
    'Pending' => 'Oczekujący',
    'Rejected' => 'Odrzucony',
  ),

  'bug_priority_default_key' => 'Średni',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Pilny',
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Zaakceptowany',
    'Duplicate' => 'Duplikat',
    'Fixed' => 'Naprawiony',
    'Out of Date' => 'Nieaktualny',
    'Invalid' => 'Nieprawidłowy',
    'Later' => 'Przełożony',
  ),
  'bug_status_default_key' => 'Nowy',
  'bug_status_dom' =>
  array (
    'New' => 'Nowy',
    'Assigned' => 'Przypisany',
    'Closed' => 'Zamknięty',
    'Pending' => 'Oczekujący',
    'Rejected' => 'Odrzucony',
  ),
   'bug_type_default_key' => 'Wykrywacz Błędów',
  'bug_type_dom' =>
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Cecha',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Administrator',
    'Product' => 'Produkt',
    'User' => 'Użytkownik',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Wewnętrzne',
    'Forum' => 'Forum',
    'Web' => 'Sieć',
    'InboundEmail' => 'Wiadomości Email'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Konta',
    'Activities' => 'Działania',
    'Bugs' => 'Błędy',
    'Calendar' => 'Kalendarz',
    'Calls' => 'Rozmowy Telefoniczne',
    'Campaigns' => 'Kampanie',
    'Cases' => 'Zgłoszenia',
    'Contacts' => 'Kontakty',
    'Currencies' => 'Waluty',
  'Dashboard' => 'Kokpit',
  'Documents' => 'Dokumenty',
    'Emails' => 'Wiadomości Email',
    'Feeds' => 'Kanały',
    'Forecasts' => 'Prognozy',
    'Help' => 'Pomoc',
    'Home' => 'Strona Główna',
  'Leads' => 'Potencjalni Klienci',
  'Meetings' => 'Spotkania',
    'Notes' => 'Notatki',
    'Opportunities' => 'Okazje',
    'Outlook Plugin' => 'Wtyczki Outlook ',
    'Projects' => 'Projekty',
    'Quotes' => 'Zamówienia',
    'Releases' => 'Publikacje',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Aktualizacja',
    'Users' => 'Użytkownicy',
  ),
  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Planowanie',
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
        'Complete' => 'Zakończ',
        'In Queue' => 'W Kolejce',
        'Sending'=> 'Wysyłanie',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telesprzedaż',
        'Mail' => 'Przesyłka Pocztowa',
        'Email' => 'Wiadomości Email',
        'Print' => 'Wydruk',
        'Web' => 'Sieć',
        'Radio' => 'Radio',
        'Television' => 'Telewizja',
        'NewsLetter' => 'Newsletter',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Tygodniowo',
        'Monthly' => 'Miesięczny',
        'Quarterly' => 'Kwartalny',
        'Annually' => 'Roczny',
        ),

  'notifymail_sendtype' =>
  array (
    'SMTP' => 'SMTP',
  ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"Styczeń",
                '2'=>"Luty",
                '3'=>"Marzec",
                '4'=>"Kwiecień",
                '5'=>"Maj",
                '6'=>"Czerwiec",
                '7'=>"Lipiec",
                '8'=>"Sierpień",
                '9'=>"Wrzesień",
                '10'=>"Październik",
                '11'=>"Listopad",
                '12'=>"Grudzień",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Styczeń",
                '2'=>"Luty",
                '3'=>"Marzec",
                '4'=>"Kwiecień",
                '5'=>"Maj",
                '6'=>"Czerwiec",
                '7'=>"Lipiec",
                '8'=>"Sierpień",
                '9'=>"Wrzesień",
                '10'=>"Październik",
                '11'=>"Listopad",
                '12'=>"Grudzień",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Niedziela",
                '2'=>"Poniedziałek",
                '3'=>"Wtorek",
                '4'=>"Środa",
                '5'=>"Czwartek",
                '6'=>"Piątek",
                '7'=>"Sobota",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"Niedziela",
                '2'=>"Poniedziałek",
                '3'=>"Wtorek",
                '4'=>"Środa",
                '5'=>"Czwartek",
                '6'=>"Piątek",
                '7'=>"Sobota",
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
                'tabular'=>'Rzędy i Kolumny',
                'summary'=>'Sumowanie',
                'detailed_summary'=>'Sumowanie z detalami',
                'Matrix' => 'Macierz',
        ),


    'dom_email_types'=> array(
        'out'       => 'Wysłane',
        'archived'  => 'Zarchiwizowane',
        'draft'     => 'W Roboczych',
        'inbound'   => 'Przychodzące',
        'campaign'  => 'Kampania'
    ),
    'dom_email_status' => array (
        'archived'  => 'Zarchiwizowane',
        'closed'    => 'Zamknięty',
        'draft'     => 'W Roboczych',
        'read'      => 'Przeczytane',
        'replied'   => 'Z odpowiedzią',
        'sent'      => 'Wysłane',
        'send_error'=> 'Błąd',
        'unread'    => 'Nieprzeczytane',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Zarchiwizowane',
    ),

    'dom_email_server_type' => array(   ''          => '--Brak--',
                                        'imap'      => 'IMAP',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => 'Stworzyć [Jakiekolwiek]',
                                     'createcase'  => 'Utwórz Zgłoszenie',
                                     'bounce'   => 'Opcja Odbijania Wiadomości do Nadawcy',
    ),
    'dom_email_distribution'=> array(''             => '--Brak--',
                                     'direct'       => 'Przypisywanie Bezpośrednie',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Pierwszy Wolny',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Pierwszy Wolny',
    ),
    'dom_email_errors'      => array(1 => 'Only select one user when Direct Assigning items.',
                                     2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Tak',
                                     'bool_false' => 'Nie',
    ),
    'dom_int_bool'          => array(1 => 'Tak',
                                     0 => 'Nie',
    ),
    'dom_switch_bool'       => array ('on' => 'Tak',
                                        'off' => 'Nie',
                                        '' => '--Brak--', ),

    'dom_email_link_type'   => array(   'sugar'     => 'Klient e-mail SuiteCRM',
                                        'mailto'    => 'Zewnętrzna Poczta Klienta'),


    'dom_email_editor_option'=> array(  ''          => '--Brak--',
                                        'html'      => 'Wiadomość HTML',
                                        'plain'     => 'Email Tekstowy'),

    'schedulers_times_dom'  => array(   'not run'       => 'Minął Czas Wykonania/ Nie wykonano',
                                        'ready'         => 'Gotowy',
                                        'in progress'   => 'W realizacji',
                                        'failed'        => 'Nieudany',
                                        'completed'     => 'Ukończone',
                                        'no curl'       => 'Nie można uruchomić: Niedostępny cURL',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Minuty',
        'hour' => 'Godziny',
        ),
    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Aktywny',
    'Inactive' => 'Nieaktywny',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Bezpośrednio',
    'Rollup' => 'Zawinąć',
  ),
    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Baza Wiedzy',
    'Sales' => 'Sprzedaż',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Marketing Dodatkowy',
    'Product Brochures' => 'Broszury Produktowe',
    'FAQ' => 'FAQ',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Aktywny',
    'Draft' => 'Wersja Robocza',
    'FAQ' => 'FAQ',
    'Expired' => 'Przedawniony',
    'Under Review' => 'Do Rozpatrzenia',
    'Pending' => 'Oczekujący',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Integracja Poczty',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'Umowa Licencyjna',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Akceptować',
    'decline' => 'Spadek',
    'tentative' => 'Tymczasowy',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Zaakceptowany',
    'decline' => 'Odrzucony',
    'tentative' => 'Tymczasowy',
    'none'      => 'Nie',
  ),
    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45',
  ),
    'repeat_type_dom' => array(
    	'' => '--Brak--',
    	'Daily'	=> 'Dziennie',
	'Weekly' => 'Tygodniowo',
	'Monthly' => 'Miesięczny',
	'Yearly' => 'Rocznie',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dzień(-ni)',
        'Weekly' => 'tydzień(-ni)',
        'Monthly' => 'miesiąc(-ęcy)',
        'Yearly' => 'rok(lat)',
    ),

    'duration_dom' => array(
    	'' => '--Brak--',
    	'900' => '15 minut przed',
	'1800' => '30 minut przed',
	'2700' => '45 minut',
	'3600' => '1 godzina przed',
	'5400' => '1.5 godziny',
	'7200' => '2 godziny',
	'10800' => '3 godziny',
	'21600' => '6 godzin',
	'86400' => '1 dzień',
	'172800' => '2 dni',
	'259200' => '3 dni',
	'604800' => '1 tydzień',
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
    'default' => 'Lista Domyślna',
    'seed' => 'Początkowe Namiary',
    'exempt_domain' => 'Lista Wykluczająca - Według Domeny',
    'exempt_address' => 'Lista Wykluczająca - Według Adresów Emailowych',
    'exempt' => 'Lista Wykluczająca - Według Id',
    'test' => 'Lista Testowa',
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
    'active'=>'Aktywny',
    'inactive'=>'Nieaktywny'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Wiadomośc Wysłana/Próba Podjęta',
    'send error'=>'Wiadomości Zwrotne, Inne',
    'invalid email'=>'Wiadomości Zwrotne, Nieprawidłowy Email',
    'link'=>'Kliknij-na Link',
    'viewed'=>'Wiadomość Przejrzana',
    'removed'=>'Rezygnacja',
    'lead'=>'Utworzono Potencjalnych Klientów',
    'contact'=>'Utworzono Kontakty',
    'blocked'=>'Zatrzymany przez adres lub domenę',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Kontakty',
    'Users'=>'Użytkownicy',
    'Prospects'=>'Targety',
    'Leads'=>'Potencjalni Klienci',
    'Accounts'=>'Konta',
  ),
  'merge_operators_dom' => array (
    'like'=>'Zawiera',
    'exact'=>'Dokładnie',
    'start'=>'Zaczyna się z',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Tak',
    'false'=>'Nie',
    'required'=>'Wymagane',
  ),

    'Elastic_boost_options' => array (
        '0' =>'Niedostępne',
        '1'=>'Low Boost',
        '2'=>'Medium Boost',
        '3'=>'High Boost',
    ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Niedostępne',
        1=>'Dostępne',
  ),

  'navigation_paradigms' => array(
        'm'=>'Moduły',
        'gm'=>'Pogrupowane Moduły',
  ),


    'projects_priority_options' => array (
        'high'      => 'Wysoki',
        'medium'    => 'Średni',
        'low'       => 'Niski',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Nie rozpoczęte',
        'inprogress'    => 'W realizacji',
        'completed'     => 'Ukończone',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Rozwiń legendę',
        'collapselegend'    => 'Zwiń legendę',
        'clickfordrilldown' => 'Kliknij, aby zobaczyć głębiej',
        'drilldownoptions'  => 'Opcje głębszych warstw',
        'detailview'        => 'Szczegóły...',
        'piechart'          => 'Wykres kołowy',
        'groupchart'        => 'Wykres grupowy',
        'stackedchart'      => 'Wykres łączny',
        'barchart'      => 'Wykres słupkowy',
        'horizontalbarchart'   => 'Wykres słupkowy poziomy',
        'linechart'         => 'Wykres liniowy',
        'noData'            => 'Dane nie są dostępne',
        'print'       => 'Wydruk',
        'pieWedgeName'      => 'sekcje',
    ),
    'release_status_dom' =>
    array (
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
    ),
    'email_settings_for_ssl' =>
    array (
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' =>
    array (
        '\'' => 'Apostrof (\')',
        '"' => 'Cudzysłów (")',
        '' => '--Brak--',
        'other' => 'Inne:',
    ),
    'import_delimeter_options' =>
    array (
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Inne:',
    ),
    'link_target_dom' =>
    array (
        '_blank' => 'Nowe okno',
        '_self' => 'W tym samym oknie',
    ),
    'dashlet_auto_refresh_options' =>
    array (
        '-1'  => '(GMT - 1) Azory',
        '30'  => 'Co 30 sekund',
        '60'  => 'Co 1 minutę',
        '180'   => 'Co 3 minuty',
        '300'   => 'Co 5 minut',
        '600'   => 'Co 10 minut',
    ),
  'dashlet_auto_refresh_options_admin' =>
    array (
        '-1'  => 'Nigdy',
        '30'  => 'Co 30 sekund',
        '60'  => 'Co 1 minutę',
        '180'   => 'Co 3 minuty',
        '300'   => 'Co 5 minut',
        '600'   => 'Co 10 minut',
    ),
  'date_range_search_dom' =>
  array(
    '=' => 'równe',
    'not_equal' => 'Nie jest równe',
    'greater_than' => 'przed',
    'less_than' => 'po',
    'last_7_days' => 'Ostatnie 7 Dni',
    'next_7_days' => 'Następne 7 Dni',
    'last_30_days' => 'Ostatnie 30 Dni',
    'next_30_days' => 'Następne 30 Dni',
    'last_month' => 'Ostatni Miesiąc',
    'this_month' => 'W tym Miesiącu',
    'next_month' => 'Przyszły miesiąc',
    'last_year' => 'Ostatni Rok',
    'this_year' => 'Ten Rok',
    'next_year' => 'Następny Rok',
    'between' => 'pomiędzy',
  ),
  'numeric_range_search_dom' =>
  array(
    '=' => 'równe',
    'not_equal' => 'nie jest równe',
    'greater_than' => 'Większe niż',
    'greater_than_equals' => 'większe lub równe',
    'less_than' => 'Mniejsze niż',
    'less_than_equals' => 'mniejsze lub równe',
    'between' => 'pomiędzy',
  ),
  'lead_conv_activity_opt' =>
  array(
        'copy' => 'Kopiuj',
        'move' => 'Przenieś',
        'donothing' => 'Nie rób nic',
  ),
);

$app_strings = array (
  'LBL_TOUR_NEXT' => 'Dalej',
  'LBL_TOUR_SKIP' => 'Pomiń',
  'LBL_TOUR_BACK' => 'Powrót',
  'LBL_TOUR_CLOSE' => 'Zamknij',
  'LBL_TOUR_TAKE_TOUR' => 'Rozpocznij',
  'LBL_MY_AREA_LINKS' => 'Moje linki' /*for 508 compliance fix*/,
  'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
  'LBL_WELCOMEBAR' => 'Witamy' /*for 508 compliance fix*/,
  'LBL_ADVANCEDSEARCH' => 'Wyszukiwanie Zaawansowane' /*for 508 compliance fix*/,
  'LBL_MOREDETAIL' => 'Więcej szczegółów' /*for 508 compliance fix*/,
  'LBL_EDIT_INLINE' => 'Edytuj w linii' /*for 508 compliance fix*/,
  'LBL_VIEW_INLINE' => 'Widok' /*for 508 compliance fix*/,
  'LBL_BASIC_SEARCH' => 'Wyszukaj' /*for 508 compliance fix*/,
  'LBL_PROJECT_MINUS' => 'Usuń' /*for 508 compliance fix*/,
  'LBL_PROJECT_PLUS' => 'Dodaj' /*for 508 compliance fix*/,
  'LBL_Blank' => ' ' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_1' => 'Kolumna' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_2' => '2 kolumny' /*for 508 compliance fix*/,
  'LBL_ICON_COLUMN_3' => '3 kolumny' /*for 508 compliance fix*/,
  'LBL_ADVANCED_SEARCH' => 'Wyszukiwanie Zaawansowane' /*for 508 compliance fix*/,
  'LBL_ID_FF_ADD' => 'Dodaj' /*for 508 compliance fix*/,
  'LBL_HIDE_SHOW' => 'Ukryj/Pokaż' /*for 508 compliance fix*/,
  'LBL_DELETE_INLINE' => 'Usuń' /*for 508 compliance fix*/,
  'LBL_PLUS_INLINE' => 'Dodaj' /*for 508 compliance fix*/,
  'LBL_ID_FF_CLEAR' => 'Wyczyść [Alt+C]' /*for 508 compliance fix*/,
  'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
  'LBL_ID_FF_REMOVE' => 'Usuń' /*for 508 compliance fix*/,
  'LBL_ADD' => 'Dodaj' /*for 508 compliance fix*/,
  'LBL_COMPANY_LOGO' => 'Logo firmy' /*for 508 compliance fix*/,
  'LBL_JS_CALENDAR' => 'Kalendarz' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Zaawansowane',
    'LBL_BASIC' => 'Podstawowy',
    'LBL_MODULE_FILTER' => 'Filter By',
    'LBL_CONNECTORS_POPUPS'=>'Connectors Popups',
    'LBL_CLOSEINLINE'=>'Zamknij',
    'LBL_EDITINLINE'=>'Edytuj',
    'LBL_VIEWINLINE'=>'Widok',
    'LBL_INFOINLINE'=>'Informacja',
    'LBL_POWERED_BY_SUGARCRM' => 'Wspierany przez SugarCRM',
    'LBL_PRINT' => 'Wydruk',
    'LBL_HELP' => 'Pomoc',
    'LBL_ID_FF_SELECT' => 'Wybierz [Alt+T]',
    'DEFAULT'                              => 'Podstawowy',
    'LBL_SORT'                              => 'Sortuj',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Dodaj serwer...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS'         => 'Włączyć protokół SSL lub TLS dla SMTP?',
    'LBL_NO_ACTION'                         => 'Akcja o takiej nazwie nie istnieje. ',
    'LBL_NO_DATA'                           => 'Brak danych',
    'LBL_ROUTING_ADD_RULE'                  => 'Dodaj regułę',
    'LBL_ROUTING_ALL'                       => 'Co najmniej',
    'LBL_ROUTING_ANY'                       => 'Każdy',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Anuluj [Alt+X]',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Zapisz regułę',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Kopiuj wiadomość',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Usuń Obiekt SuiteCRM',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Usuń plik',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Usuń e-mail',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Przekaż e-mail',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Oznacz e-mail',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Oznacz jako przeczytane',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Oznacz jako nieprzeczytanie',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Przenieś e-mail',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Przeprowadź następujące akcje',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Odpowiedz',

    'LBL_ROUTING_CHECK_RULE'                => 'Wystąpił błąd:\n',
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Sprawdź czy są zaznaczone wszystkie pola.',
    'LBL_ROUTING_CONFIRM_DELETE'            => 'Czy jesteś pewien/a że chcesz usunąć tą regułę?\n Ta operacja nie może zostać cofnięta.',

    'LBL_ROUTING_FLAGGED'                   => 'flaga ustawiona',
    'LBL_ROUTING_FORM_DESC'                 => 'Zapisane reguły zostaną zaraz aktywowane.',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Reguły',
    'LBL_ROUTING_MATCH'                     => 'Jeżeli',
    'LBL_ROUTING_MATCH_2'                   => 'z tych warunków są spełnione:',
    'LBL_NOTIFICATIONS'                     => 'Powiadomienia',
    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Treść',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'Od',
    'LBL_ROUTING_MATCH_NAME'                => 'Temat',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Wysoki',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normalny',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Niski',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'Do',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Zawiera',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Nie zawiera',

    'LBL_ROUTING_NAME'                      => 'Nazwa reguły',
    'LBL_ROUTING_NEW_NAME'                  => 'Nowa reguła',
    'LBL_ROUTING_ONE_MOMENT'                => 'Proszę chwilę poczekać...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Treść oryginalnej wiadomości.',
    'LBL_ROUTING_RE'                        => 'Re:',
    'LBL_ROUTING_SAVING_RULE'               => 'Zapisz regułę',
    'LBL_ROUTING_SUB_DESC'                  => 'Zaznaczone reguły są aktywne. Kliknij w nazwę aby zmienić.',
    'LBL_ROUTING_TO'                        => 'do',
    'LBL_ROUTING_TO_ADDRESS'                => 'do adresata',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'używając szablonu',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Występują wartości w polach Numer telefonu i Adres w Twoim formularzu. Aby nadpisać te wartości w formularzu Klienta, którego wybrałeś, kliknij [OK], aby zachować obecne wartości, kliknij [Anuluj]',
  'LBL_DROP_HERE' => '[Upuść tutaj]',
    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Edytuj',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Nazwa',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Ustawienia serwera poczty wychodzącej',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Agent Przesyłania Wiadomości',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Użyć Uwierzytelnienia SMTP?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'Hasło SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'Serwer SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Użyj SSL do połączenia',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'Nazwa Użytkownika SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT'        => 'Lista Domyślna',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS'  => 'Uwaga: Brak nazwy użytkownika i hasła dla konta poczty wychodzącej.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD'      => 'SMTP: wymagana nazwa uzytkownika',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD'      => 'SMTP: wymagane hasło',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Zarządzanie kontem pocztowym',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE'     => 'Protokół POP3 nie będzie wspierany w następnych wydaniach. Pozostanie wspierany tylko protokół IMAP.',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE'           => 'Skonfiguruj konto pocztowe aby widzieć pocztę przychodzącą.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'  => 'Wprowadź ustawienia serwera SMTP aby móc wysyłać wiadomości pocztowe.',
    'LBL_EMAIL_ADD'                         => 'Dodaj adres',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Wykonane',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR'          => 'Wyczyść [Alt+C]',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'         => 'Do:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'         => 'Do Wiadomości:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'        => 'Ukryci Adresaci:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE'   => 'Do/Kopia/Ukryta kopia',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Nowa Lista',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Email',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'W chwili obecnej dostepna jest jedynie edycja kontaktu.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filtr',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Imię/Nazwa konta',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Nazwisko',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Moje Kontakty',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Moje listy mailingowe',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Nazwa',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Nie znaleziono adresu',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Zapisz i dodaj do książki adresowej',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Wyszukaj',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Wybierz odbiorców wiadomości',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Książka adresowa',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Raporty',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', "", null, null, ".gif", 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT'     => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, ".gif", ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING'         => 'Uwaga! Konto poczty wychodzącej jest powiązane z istniejącym kontem poczty przychodzącej. Czy chcesz je usunąć?',
    'LBL_EMAIL_ADDRESSES'                   => 'Wiadomości Email',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Adres Email',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Adres e-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Importuj do SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Przypisywanie',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Załącz',
    'LBL_EMAIL_ATTACHMENT'                  => 'Załącz',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Z lokalnego systemu',
    'LBL_EMAIL_ATTACHMENTS2'                => 'Z Dokumentów SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Wzór załącznika',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Nazwa Pliku',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Dokumenty',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Zagnieżdżony',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Anuluj [Alt+X]',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Zestaw znaków',
    'LBL_EMAIL_CHECK'                       => 'Sprawdź Maila',
    'LBL_EMAIL_CHECKING_NEW'                => 'Odbieranie nowych wiadomości',
    'LBL_EMAIL_CHECKING_DESC'               => 'Chwileczkę.... <br><br>Jeżeli jest to pierwsze sprawdzenie poczty może to chwilę potrwać.',
    'LBL_EMAIL_CLOSE'                       => 'Zamknij',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Sprawdzanie poczty. <br><br>W przypadku dużych kont pocztowych może to chwilę potrwać.',
    'LBL_EMAIL_COMMON'                      => 'Wspólne',

    'LBL_EMAIL_COMPOSE'                     => 'Wiadomości Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Proszę podać odbiorcę(ów) tej wiadomości.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Powiązane z',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Brak treści wiadomości. Wysłać mimo to?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Brak tematu wiadomości. Wysłać mimo to?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(brak tematu)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Przeczytaj i utwórz e-mail',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Wyślij z konta pocztowego',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Opcje',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Podaj poprawny adres e-mail w polach Do, Kopia oraz ukryta kopia',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Odrzucić tą wiadomość?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Usunąć te wpisy z Twojej książki adresowej?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Czy na pewno usunąć tą sygnaturę?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Utwórz przy zapisie--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS'  => 'Wielokrotność',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Pusty',
    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => 'Data wysłania przez nadawcę',
  'LBL_EMAIL_DATE_RECEIVED'               => 'Data otrzymania',
    'LBL_EMAIL_ASSIGNED_TO_USER'            => 'Przypisany do Użytkownika',
    'LBL_EMAIL_DATE_TODAY'                  => 'Dziś',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Wczoraj',
    'LBL_EMAIL_DD_TEXT'                     => 'wiadomość(-i) wybrany(e)',
    'LBL_EMAIL_DEFAULTS'                    => 'Domyslnie',
    'LBL_EMAIL_DELETE'                      => 'Usuń',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Usunąć wybrane wiadomości?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Wiadomość została usunięta.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Usuwanie wiadomości.',
    'LBL_EMAIL_DETAILS'                     => 'Szczegóły',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Wyświetlam wiadomości {0} - {1} z {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Wyświetlam adresy wiadomości  {0} - {1} z {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Edytuj kontakt',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Przy pracy z kontaktami będzie wykorzystywany tylko główny adres e-mail.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Edytuj listę mailingową.',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Opróżnianie kosza',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Usuwanie serwera poczty wychodzącej.',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Usuwanie plików tymczasowych',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Brak wiadomości do wyswietlenia.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Brak adresów e-mail do wyświetlenia.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Nie można usunąć folderu. Folder, podfoldery lub powiązana skrzynka pocztowa zawierają wiadomości.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Nie mogę określić przeznaczenia folderu na podstawie kontekstu. Spróbuj jeszcze raz.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Proszę sprawdzić swoje ustawienia.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Upewnij się czy zostało wpisane nazwisko.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Wykryto błędy:',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Nie masz tutaj dostępu. Proszę skontaktować się z administratorem strony jeśli uważasz że powinieneś mieć dostęp.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'Nazwy Folderów SuiteCRM muszą być unikalne.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Podaj kryteria wyszukiwania.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Wystąpił błąd',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Lista adresów o tej nazwie już istnieje',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Wiadomość usunięta z serwera',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Wiadomości zostały usunięte z serwera lub przeniesione do innego folderu',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Błąd połączenia z serwerem pocztowym. Skontaktuj się z administratorem',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Przenoszenie wiadomości między serwerami i/lub kontami pocztowymi nie jest możliwe w chwili obecnej.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Błąd przenoszenia',
    'LBL_EMAIL_ERROR_NAME'                  => 'Nazwa jest wymagana',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Adres Od jest wymagany. Wprowadź poprawny adres e-mail.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Dodaj plik.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Zmiana nazwy folderów IMAP nie jest możliwa w chwili obecnej.',
    'LBL_EMAIL_ERROR_SERVER'                => 'Adres serwera pocztowego jest wymagany.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'Konto pocztowe nie może zostać zapisane.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Wystąpił błąd podczas komunikacji z serwerem pocztowym.',
    'LBL_EMAIL_ERROR_USER'                  => 'Nazwa użytkownika jest wymagana.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'Hasło jest wymagane.',
    'LBL_EMAIL_ERROR_PORT'                  => 'Port serwera pocztowego jest wymagany.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'Protokół serwera pocztowego jest wymagany.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Jest wymagany monitorowany folder.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Folder Kosz jest wymagany.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Ta informacja nie jest dostępna.',
    'LBL_EMAIL_ERROR_NO_OUTBOUND'           => 'Brak wybranego serwera poczty wychodzącej.',
    'LBL_EMAIL_FOLDERS'                     => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", '').'Folders',
    'LBL_EMAIL_FOLDERS_SHORT'               => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Przenieś do',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Dodaj',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Dodaj nowy folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Zmień nazwę folderu',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Zapisz [Alt+S]',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Dodaj ten folder do',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Ten folder nie może zostać zmieniony',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Czy na pewno usunąć ten folder?\n Usunięcie folderu nie będzie mogło być cofnięte. Usunięte zostaną rownież wszystkie podfoldery.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Nowa nazwa folderu',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Przed wykonaniem tej czynności należy wybrać folder.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Zarządzanie folderami',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Korzystanie z grupy',

    'LBL_EMAIL_FORWARD'                     => 'Następny',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Pobrano [[count]] z [[total]] wiadomości',
    'LBL_EMAIL_FOUND'                       => 'Znalezione',
    'LBL_EMAIL_FROM'                        => 'Od',
    'LBL_EMAIL_GROUP'                       => 'grupa',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Grupa',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Start',
    'LBL_EMAIL_HTML_RTF'                    => 'Wyślij w HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Usuwanie konta pocztowego',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Usuwanie sygnatury',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Czy na pewno usunąć to konto pocztowe?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Usuwanie zostało zakończone pomyslnie',
    'LBL_EMAIL_IE_SAVE'                     => 'Zapisywanie informacji o koncie pocztowym',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Importowanie wiadomości',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Importuj do SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Importuj',
    'LBL_EMAIL_INVALID'                     => 'Nieprawidłowy',
    'LBL_EMAIL_LOADING'                     => 'Ładowanie...',
    'LBL_EMAIL_MARK'                        => 'Oznacz',
    'LBL_EMAIL_MARK_FLAGGED'                => 'jako oflagowanie',
    'LBL_EMAIL_MARK_READ'                   => 'jako przeczytane',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'jako nie oflagowane',
    'LBL_EMAIL_MARK_UNREAD'                 => 'jako nieprzeczytane',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Przypisz do',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Utwórz folder',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Utwórz',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Usuń folder',
    'LBL_EMAIL_MENU_EDIT'                   => 'Edytuj',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Opróżnij kosz',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Synchronizuj',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Usuń pliki tymczasowe',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Usuń',
    'LBL_EMAIL_MENU_RENAME'                 => 'Zmień nazwę',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Zmień nazwę folderu',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Zmienianie nazwy folderu',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Proszę dokonać wyboru przed próbą wykonania tej operacji',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Utwórz Folder (zdalny lub w SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archiwizuj wiadomość(ci) w SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Wyslij wybraną listę e-mailem.',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Wyślij ten kontakt e-mailem',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Usuń kontakt',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Usuń te(-n) wiadomość(-ci)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Usuń Folder (zdalny lub w SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Edytuj kontakt',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Edytuj listę mailingową',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Opróżnij wszystkie kosze w Twoim koncie pocztowym',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Zaznacz tę wiadomość(ci) jako oflagowaną',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Oznacz email(e) jako przeczytane',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Zaznacz tę wiadomość(ci) jako nieoflagowaną',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Oznacz email(e) jako nieprzeczytane',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Usuń listy mailingowe',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Zmień nazwę Folderu (zdalnego lub w SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Odpowiedz na email(e)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Odpowiedz do wszystkich adresatów tej wiadomości',

    'LBL_EMAIL_MESSAGES'                    => 'wiadomości',

    'LBL_EMAIL_ML_NAME'                     => 'Lista nazw',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Wybrane adresy pocztowe',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Dostępna lista adresów',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Kliknij Ctrl/b> by wybrać więcej<br />(Użytkownicy Makówek <b>klikają CMD</b>)',

    'LBL_EMAIL_NO'                          => 'Nie',
    'LBL_EMAIL_NOT_SENT'                    => 'System nie jest w stanie przetworzyć Twojego zgłoszenia. Skontaktuj się z administratorem systemu.',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Proszę chwilę poczekać...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Otwórz więcej wiadomości',
    'LBL_EMAIL_OPTIONS'                     => 'Opcje',
    'LBL_EMAIL_QUICK_COMPOSE'       => 'Szybko utwórz',
    'LBL_EMAIL_OPT_OUT'                     => 'Rezygnacja',
    'LBL_EMAIL_OPT_OUT_AND_INVALID'         => 'po rezygnacji i niepoprawny',
    'LBL_EMAIL_PAGE_AFTER'                  => 'z {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Strona',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Przeprowadzam zadanie',
    'LBL_EMAIL_PRIMARY'                     => 'Pierwszy',
    'LBL_EMAIL_PRINT'                       => 'Wydruk',

    'LBL_EMAIL_QC_BUGS'                     => 'Wykrywacz Błędów',
    'LBL_EMAIL_QC_CASES'                    => 'Zgłoszenie',
    'LBL_EMAIL_QC_LEADS'                    => 'Potencjalny Klient',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Kontakt',
    'LBL_EMAIL_QC_TASKS'                    => 'Zadania',
    'LBL_EMAIL_QC_OPPORTUNITIES'            => 'Szansa Sprzedaży',
    'LBL_EMAIL_QUICK_CREATE'                => 'Utwórz Szybko',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Przebudowuję foldery',
    'LBL_EMAIL_RELATE_TO'                   => 'Powiązane',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Zobacz zależności',
    'LBL_EMAIL_RECORD'                => 'Rekord wiadomości',
    'LBL_EMAIL_REMOVE'                      => 'Usuń',
    'LBL_EMAIL_REPLY'                       => 'Odpowiedz',
    'LBL_EMAIL_REPLY_ALL'                   => 'Odpowiedz wszystkim',
    'LBL_EMAIL_REPLY_TO'                    => 'Odpowiedz do',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Odzyskiwanie listy wiadomości',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Odzyskiwanie wiadomości',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Przeglądanie wiadomości pocztowych',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Wybierz tylko jeden rekord wiadomości',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Powrócić do poprzedniego Modułu?',
    'LBL_EMAIL_REVERT'                      => 'Odwróć',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Powiązane wiadomości',

    'LBL_EMAIL_RULES_TITLE'                 => 'Zarządznianie regułami',

    'LBL_EMAIL_SAVE'                        => 'Zapisz [Alt+S]',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Zapisz i odpowiedz',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Zapisz jako Wersja Robocza [Alt+R]',

    'LBL_EMAIL_SEARCHING'                   => 'Przeprowadzanie wyszukiwania',
    'LBL_EMAIL_SEARCH'                      => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_SHORT'                => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, ".gif", ''),
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Wyszukiwanie Zaawansowane',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Od daty',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Do daty',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Tekst wiadomości',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Nie ma wyników, spełniających Twoje kryteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Wyszukaj Rezultaty',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Wyszukiwanie proste',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Przeszukaj konto pocztowe',

    'LBL_EMAIL_SELECT'                      => 'Wybierz [Alt+T]',

    'LBL_EMAIL_SEND'                        => 'Wyślij',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Wysyłanie wiadomości',

    'LBL_EMAIL_SETTINGS'                    => 'Ustawienia',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 wiersze',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 kolumny',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Wygląd',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Konta pocztowe',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Wyczyść Formularz',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Zaimportuj i pokaż wiadomości',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Sprawdź, czy jest nowa poczta',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Użyj przezroczystego widoku',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Użyj wyskakujących okienek',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Liczba wiadomości na stronie',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Edytuj konto pocztowe',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Foldery',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Adres Od',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adres e-mail dla powiadomieć testowych:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR'      => 'Do adresu e-mail',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Od',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR'      =>'Odpowiedz na adres',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Pełny ekran',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Synchronizuj wszystkie konta pocztowe',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT'      => 'E-mail został wysłany do określonego adresu e-mail używając podanych ustawień poczty wychodzącej. Proszę sprawdź czy e-mail został otrzymany, aby zweryfikować poprawność ustawień.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Wykonanie tego działania zsynchronizuje konta pocztowe i ich zawartość.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Przeprowadź pełną synchronizację? \nDla dużych kont pocztowych może to potrwać kilka minut.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Kliknij kalwisz Shift, lub Ctrl, aby wybrać więcej niż jeden folder.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Ogólny',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Dostępne foldery grupowe',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Tworzenie folderów grupowych',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Zapisywanie folderów grupy',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Przywracanie folderu grupy',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edytuj foldery grupy',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Nazwa',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Te ustawienia mogą wymagać odświeżenia strony, aby zaczęły działać.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Przywracanie konta pocztowego',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Reguły',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Ustawienia zostały zapisane.\n\nMusisz przeładować stornę, aby zaczęły działać.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Wyślij wiadomość jako zwykły tekst',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Aktywny',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Liczba wiadomości na stronie',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Umieść zakładki na dole',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Ustawienia wyglądu',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Ustawienia',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Pokaż Zaawansowane',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Dostępne foldery użytkownika',
    'LBL_EMAIL_ERROR_PREPEND'               => 'Błąd:',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serwer poczty wychodzącej wybrany dla konta pocztowego, którego używasz jest niepoprawny. Sprawdź ustawienia lub wybierz inny serwer poczty dla konta pocztowego.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Serwer poczty wychodzącej nie jest skonfigurowany do wysyłania wiadmości. Proszę skonfiguruj serwer poczty wychodzącej lub wybierz serwer poczty wychodzącej dla konta pocztowego, którego używasz w Ustawienia >> Konto pocztowe.',
    'LBL_EMAIL_SHOW_READ'                   => 'Pokaż wszystko',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Pokaż tylko nieprzeczytane',
    'LBL_EMAIL_SIGNATURES'                  => 'Podpisy',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Stwórz sygnaturę',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Nazwa sygnatury',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Treść sygnatury',
  'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
  'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
  'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER'                  => 'Inny',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Foldery zdalne ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ Foldery SuiteCRM ]',
    'LBL_EMAIL_SUBJECT'                     => 'Temat',
    'LBL_EMAIL_SUCCESS'                     => 'Zakończone powodzeniem',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'Folder SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'    => 'Brak treści szablonu wiadomości',
    'LBL_EMAIL_TEMPLATES'                   => 'Szablony',
    'LBL_EMAIL_TEXT_FIRST'                  => 'Pierwsza strona',
    'LBL_EMAIL_TEXT_PREV'                   => 'Poprzednia strona',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Następna strona',
    'LBL_EMAIL_TEXT_LAST'                   => 'Ostatnia strona',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Odśwież',
    'LBL_EMAIL_TO'                          => 'Do',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Przełącz Listę',
    'LBL_EMAIL_VIEW'                        => 'Widok',
    'LBL_EMAIL_VIEWS'                       => 'Widoki',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Wyświetl nagłówki',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Wersja do druku',
    'LBL_EMAIL_VIEW_RAW'                    => 'Wyświetl źródło wiadomości',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Ta funkcja nie jest wspierana przez POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Domyślny tekst linku.',
    'LBL_EMAIL_YES'                         => 'Tak',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS'      => 'Wyślij wiadomość testową',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Wiadomość testowa została wysłana',
    'LBL_EMAIL_MESSAGE_NO'                  => 'Numer wiadomości',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Import zakończony pomyślnie',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Import nie powiódł się, ponieważ wiadomość została już zaimportowana, lub usunięta z serwera',

    'LBL_LINK_NONE'=> 'Nie',
    'LBL_LINK_ALL'=> 'Wszystko',
    'LBL_LINK_RECORDS'=> 'Rekordy',
    'LBL_LINK_SELECT'=> 'Wybierz [Alt+T]',
    'LBL_LINK_ACTIONS'=> 'Działania',
    'LBL_LINK_MORE'=> 'Więcej',
    'LBL_CLOSE_ACTIVITY_HEADER' => "Potwierdź",
    'LBL_CLOSE_ACTIVITY_CONFIRM' => "Czy chcesz zamknąć ten #moduł#?",
    'LBL_CLOSE_ACTIVITY_REMEMBER' => "Nie wyświetlaj tej wiadomości w przyszłości:",
    'LBL_INVALID_FILE_EXTENSION' => 'Nieprawidłowe rozszerzenie pliku',


    'ERR_AJAX_LOAD'     => 'Wystąpił błąd',
    'ERR_AJAX_LOAD_FAILURE'     => 'There was an error processing your request, please try again at a later time.',
    'ERR_AJAX_LOAD_FOOTER' => 'If this error persists, please have your administrator disable Ajax for this module',
    'ERR_CREATING_FIELDS' => 'Bład zapełniający dodatkowy szczegół pól: ',
    'ERR_CREATING_TABLE' => 'Błąd podczas tworzenia tabeli: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "Separator dziesiętny nie może korzystać z tego samego charakteru co separator tysięczny .\n\n. Proszę zmienić wartość.",
    'ERR_DELETE_RECORD' => 'Numer zapisów musi być określona, aby usunąć kontakt.',
    'ERR_EXPORT_DISABLED' => 'Eksport wyłączony.',
    'ERR_EXPORT_TYPE' => 'Błąd podczas eksportu  ',
    'ERR_INVALID_AMOUNT' => 'Proszę wprowadzić ważna sumę.',
    'ERR_INVALID_DATE_FORMAT' => 'Data formatu musi być: ',
    'ERR_INVALID_DATE' => 'Proszę wprowadzić ważną datę.',
    'ERR_INVALID_DAY' => 'Prosze wprowadzić nieważny dzień.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nie ważny adres e-mail.',
    'ERR_INVALID_FILE_REFERENCE' => 'Plik Uszkodzony',
    'ERR_INVALID_HOUR' => 'Proszę wprowadzić ważną godzinę.',
    'ERR_INVALID_MONTH' => 'Prosze wprowadzić nieważny miesiąc.',
    'ERR_INVALID_TIME' => 'Proszę wprowadzić ważny czas.',
    'ERR_INVALID_YEAR' => 'Proszę wprowadzić 4 ważne cyfry roku.',
    'ERR_NEED_ACTIVE_SESSION' => 'Wymagana jest aktywna sesja, aby wyeksportować zawartość.',
    'ERR_NO_HEADER_ID' => 'Ta funkcja nie jest dostępna w tym temacie.',
    'ERR_NOT_ADMIN' => "Nieautoryzowany dostęp do modułu administracji.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Brakujące żądane pole',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Niepoprawne wymagane pole:',
    'ERR_INVALID_VALUE' => 'Niepoprawna Wartość:',
    'ERR_NO_SUCH_FILE' =>'Plik nie istnieje w systemie',
    'ERR_NO_SINGLE_QUOTE' => 'Bez używania cudzysłowu dla ',
    'ERR_NOTHING_SELECTED' =>'Proszę dokonać selekcji przed następną czynnością.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Szansa Sprzedaży z nazwą %s już istnieje. Proszę wprowadzić inną nazwę poniżej.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Nazwa Szansy Sprzedaży nie została wprowadzona. Proszę wprowadź nazwę Szansy Sprzedaży poniżej.',
    'ERR_POTENTIAL_SEGFAULT' => 'Wykryto potencjalne naruszenie ochrony pamięci serwera Apache. Powiadom administratora Twojego systemu, aby potwierdzić ten problem i zgłosić go do SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Użytkownik nie może raportować do siebie.',
    'ERR_SINGLE_QUOTE'  => 'Nie można używać apostrofu w tym polu. Proszę zmienić wartość.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nie pasuje do pola',
    'ERR_SQS_NO_MATCH' =>'Nie pasuje',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Określ indeks &#39;klucza&#39; w atrybucie displayParams definicji meta-danych',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Błąd: Nazwa portalu została już przydzielona do innego kontaktu.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Wartości w polach nie są wyrażone z odpowiednią dokładnością.',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Wystąpił błąd podczas próby zapisu do konta zewnętrznego.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Wystapił błąd podczas ładowania. Proszę upewnij się, że plik nie jest pusty.',
    'ERR_NO_DB' => 'Nie można połączyć się z bazą danych. Szczegóły zapisano w logu SuiteCRM.',
    'ERR_DB_FAIL' => 'Awaria bazy danych. Szczegóły zapisano w logu SuiteCRM.',
    'ERR_EXTERNAL_API_403' => 'Odmowa dostępu. Niewspierany format pliku.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth Access Token is missing.',
    'ERR_DB_VERSION' => 'Pliki SuiteCRM {0} mogą być używane tylko z bazą danych SuiteCRM {1}.',


    'LBL_ACCOUNT'=>'Konto',
    'LBL_OLD_ACCOUNT_LINK'=>'Stary klient',
    'LBL_ACCOUNTS'=>'Konta',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Podsumowanie',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Podsumowanie [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Dodaj [Alt+A]',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_DOCUMENT' => 'Dodaj Dokument',
    'LBL_REPLACE_BUTTON' => 'Zastąp',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'F',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj do Listy Targetowej',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Dodaj do Listy Targetowej',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliknij by Zamknąć',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Zamknij',
    'LBL_ADDITIONAL_DETAILS' => 'Dodatkowe Detale',
    'LBL_ADMIN' => 'Administrator',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiwum',
    'LBL_ASSIGNED_TO_USER'=>'Przypisany do Użytkownika',
    'LBL_ASSIGNED_TO' => 'Przypisane do:',
    'LBL_BACK' => 'Powrót',
    'LBL_BILL_TO_ACCOUNT'=>'Dodaj do Konta',
    'LBL_BILL_TO_CONTACT'=>'Dodaj do Kontaktów',
    'LBL_BILLING_ADDRESS'=>'Adres do fakturowania',
    'LBL_QUICK_CREATE_TITLE' => 'Utwórz Szybko',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Otwarty CRM',
    'LBL_BUGS'=>'Błędy',
    'LBL_BY' => 'przez',
    'LBL_CALLS'=>'Rozmowy Telefoniczne',
    'LBL_CALL'=>'Połączenie',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Wyślij w Kolejności Emaile Kampanii',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Zapisz',
    'LBL_CASE'=>'Zgłoszenie',
    'LBL_CASES'=>'Zgłoszenia',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Zmiana hasła',
    'LBL_CHANGE_BUTTON_LABEL' => 'Zmień',
    'LBL_CHANGE_BUTTON_TITLE' => 'Zmień [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Sprawdź Wszystkie',
    'LBL_CITY' => 'Miasto',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Wyczyść',
    'LBL_CLEAR_BUTTON_TITLE' => 'Wyczyść [Alt+C]',
    'LBL_CLEARALL' => 'Usuń Wszystkie',
    'LBL_CLOSE_BUTTON_TITLE' =>'Zamknij',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Zamknij Okno',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Zamknij Wszystkie',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Zamknij Wszystkie [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zamknij i Utwórz Nowe',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zamknij i Utwórz Nowe [Alt+C]',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Otwarte pozycje:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'F',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Utwórz Wiadomość',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Zamknij Email [Alt+L]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Tak',
    'LBL_SEARCH_DROPDOWN_NO'=>'Nie',
    'LBL_CONTACT_LIST' => 'Lista Kontaktów',
    'LBL_CONTACT'=>'Kontakt',
    'LBL_CONTACTS'=>'Kontakty',
    'LBL_CONTRACTS'=>'Kontrakty',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATE_BUTTON_LABEL' => 'Utwórz',
    'LBL_CREATED_BY_USER'=>'Utworzomy przez Użytkownika',
    'LBL_CREATED_USER'=>'Utworzomy przez Użytkownika',
    'LBL_CREATED_ID' => 'ID Tworzącego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_CURRENT_USER_FILTER' => 'Tylko Moje Elementy',
    'LBL_CURRENCY'=>'Waluta:',
    'LBL_DOCUMENTS'=>'Dokumenty',
    'LBL_DATE_ENTERED' => 'Data Utworzenia:',
    'LBL_DATE_MODIFIED' => 'Ostatnia Modyfikacja:',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_DUPLICATE_BUTTON' => 'Duplikat',
    'LBL_DELETE_BUTTON' => 'Usuń',
    'LBL_DELETE' => 'Usuń',
    'LBL_DELETED'=>'Usunięte',
    'LBL_DIRECT_REPORTS'=>'Bezpośredni Raport',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Wykonane',
    'LBL_DONE_BUTTON_TITLE' => 'Zrobione [Alt+X]',
    'LBL_DST_NEEDS_FIXIN' => 'Aplikacja wymaga Naprawy Czasu Letniego. Przejdź do linku <a href="index.php?module=Administration&action=DstFix">Napraw</A> w Konsoli Administracyjnej i zastosuj Czas Letni.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Edytuj jako nowe',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Edytuj jako nowe',
    'LBL_FAVORITES' => 'Ulubione',
    'LBL_FILTER_MENU_BY' => 'Filter Menu By',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Wybierz plik vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Importuj vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importuj vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importuj vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Widok',
    'LBL_VIEW_BUTTON_TITLE' => 'Przegląd [Alt+V]',
    'LBL_VIEW_BUTTON' => 'Widok',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'min.',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Wyślj w Formacie PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Wyślj w Formacie PDF [Alt+M]',
    'LBL_EMAILS'=>'Wiadomości Email',
    'LBL_EMPLOYEES' => 'Pracownicy',
    'LBL_ENTER_DATE' => 'Wprowadź Datę',
    'LBL_EXPORT_ALL' => 'Eksportuj Wszystkie',
    'LBL_EXPORT' => 'Eksportuj',
    'LBL_FAVORITES_FILTER' => 'Ulubione:',
    'LBL_GO_BUTTON_LABEL' => 'Go',
    'LBL_GS_HELP' => 'The fields in this module used in this search appear above.  The highlighted text matches your search criteria.',
    'LBL_HIDE'=>'Ukryj',
    'LBL_ID'=>'ID',
    'LBL_IMPORT' => 'Importuj',
    'LBL_IMPORT_STARTED' => 'Import Rozpoczęty: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Musisz określić delimiter',
    'LBL_LAST_VIEWED' => 'Ostatnio Przeglądane',
    'LBL_SHOW_LESS' => 'Pokaż mniej',
    'LBL_SHOW_MORE' => 'Pokaż wiecej',
    'LBL_TODAYS_ACTIVITIES' => 'Dzisiejsze działania',
    'LBL_LEADS'=>'Potencjalni Klienci',
    'LBL_LESS' => 'mniej',
    'LBL_CAMPAIGN' => 'Kampania:',
    'LBL_CAMPAIGNS' => 'Kampanie',
    'LBL_CAMPAIGNLOG' => 'Log kampanii',
    'LBL_CAMPAIGN_CONTACT'=>'Kampanie',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'Mapa strony',
    'LBL_THEME'=>'Theme:',
    'LBL_THEME_PICKER'=>'Szablon strony',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Uwaga: Wybrany szablon nie wspiera przeglądarki Internet Explorer 6. Kliknij OK aby wybrać szablon mimo wszystko lub Anuluj aby wybrać inny szablon.',
    'LBL_FOUND_IN_RELEASE'=>'Znaleziono w wydaniu',
    'LBL_FIXED_IN_RELEASE'=>'Naprawiono w wydaniu',
    'LBL_LIST_ACCOUNT_NAME' => 'Konto',
    'LBL_LIST_ASSIGNED_USER' => 'Użytkownik',
    'LBL_LIST_CONTACT_NAME' => 'Kontakt',
    'LBL_LIST_CONTACT_ROLE' => 'Rola Kontaktów',
    'LBL_LIST_DATE_ENTERED'=>'Wprowadzona Data',
    'LBL_LIST_EMAIL' => 'Wiadomości Email',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_OF' => 'of',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Powiązany z',
    'LBL_LIST_USER_NAME' => 'Nazwa Użytkownika',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Czy na pewno chcesz uaktualnić całą listę?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Proszę wybrać co najmniej 1 rekord w celu kontynuowania.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Wybierz co najmniej dwa rekordy, aby kontynuować.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Wybierz mniej niż 10 wierszy aby kontynuować.',
    'LBL_LISTVIEW_ALL' => 'Wszystko',
    'LBL_LISTVIEW_NONE' => 'Odznacz wszystko',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Strona Bieżąca',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Cała lista',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Wybrane Rekordy',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Wybrane: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Kowalski',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Sz. Pan',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Zaloguj się aby mieć dostęp do tej strefy.',
    'LBL_LOGOUT' => 'Wyloguj',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE_KEY' => 'min.',
    'LBL_MAILMERGE' => 'Integracja Poczty',
    'LBL_MASS_UPDATE' => 'Masowa Aktualizacja',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Pierwszy wybrany adres e-mail',
    'LBL_MEETINGS'=>'Spotkania',
    'LBL_MEETING'=>'Spotkanie',
    'LBL_MEETING_GO_BACK'=>'Go back to the meeting',
    'LBL_MEMBERS'=>'Członkowie',
    'LBL_MEMBER_OF'=>'Członek',
    'LBL_MODIFIED_BY_USER'=>'Zmodyfikowany przez Użytkownika',
    'LBL_MODIFIED_USER'=>'Zmodyfikowany przez Użytkownika',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME'=>'Imię Modyfikującego',
    'LBL_MODIFIED_ID'=>'ID Modyfikującego',
    'LBL_MORE' => 'Więcej',
    'LBL_MY_ACCOUNT' => 'Moje Konto',
    'LBL_NAME' => 'Nazwa',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Utwórz',
    'LBL_NEW_BUTTON_TITLE' => 'Utwórz [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => 'Dalej',
    'LBL_NONE' => '--Brak--',
    'LBL_NOTES'=>'Notatki',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Otwórz Wszystkie',
    'LBL_OPENALL_BUTTON_TITLE' => 'Otwórz Wszystkie [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Otwórz Do: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Otwórz Do: [Alt+T]',
    'LBL_OPPORTUNITIES'=>'Szanse Sprzedaży',
    'LBL_OPPORTUNITY_NAME' => 'Nazwa Szansy Sprzedaży',
    'LBL_OPPORTUNITY'=>'Szansa Sprzedaży',
    'LBL_OR' => 'lub',
    'LBL_LOWER_OR' => 'of',
    'LBL_PANEL_OVERVIEW' => 'Informacje o Kliencie',
    'LBL_PANEL_ASSIGNMENT' => 'Inny',
    'LBL_PANEL_ADVANCED' => 'Więcej Informacji',
    'LBL_PARENT_TYPE' => 'Typ Macierzysty',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Faza',
    'LBL_POSTAL_CODE' => 'Kod Pocztowy:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Główny Adres - Miasto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Główny Adres - Kraj:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Główny Adres - Kod Pocztowy:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Główny Adres - Kraj:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Główny Adres - Ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Główny Adres - Ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Główny Adres - Ulica:',
    'LBL_PRIMARY_ADDRESS' => 'Główny Adres:',

	'LBL_BILLING_STREET'=> 'Ulica:',
	'LBL_SHIPPING_STREET'=> 'Ulica:',

    'LBL_PROSPECTS'=>'Prospects',
    'LBL_PRODUCT_BUNDLES'=>'Pliki Produktów',
    'LBL_PRODUCTS'=>'Produkty',
    'LBL_PROJECT_TASKS'=>'Zadania Projektowe',
    'LBL_PROJECTS'=>'Projekty',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Utwórz Szansę Sprzedaży z Zamówienia',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Utwórz Szansę Sprzedaży z Zamówienia',
    'LBL_QUOTES_SHIP_TO'=>'Zamówienia Dostarczone do',
    'LBL_QUOTES'=>'Zamówienia',

    'LBL_RELATED' => 'Powiązany',
    'LBL_RELATED_INFORMATION' => 'Informacje powiązane',
    'LBL_RELATED_RECORDS' => 'Powiązane Rekordy',
    'LBL_REMOVE' => 'Usuń',
    'LBL_REPORTS_TO' => 'Raporty do',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Zaznaczone Wypełnij',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Wykonane',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Zapisz jako',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Zapisz jako [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Wypełnij Formularz',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Wypełnij Formularz [Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Zapisz & Utwórz Nowe',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Zapisz & Utwórz Nowe [Alt+V]',
    'LBL_SAVE_OBJECT' => 'Zapisz {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Wyszukaj',
    'LBL_SEARCH_BUTTON_TITLE' => 'Wyszukaj [Alt+Q]',
    'LBL_SEARCH' => 'Wyszukaj',
    'LBL_SEARCH_TIPS' => "Press the search button or click enter to get an exact match for them.",
    'LBL_SEARCH_TIPS_2' => "Press the search button or click enter to get an exact match for",
    'LBL_SEARCH_MORE' => 'więcej',
    'LBL_SEE_ALL' => 'Zobacz wszystko',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Błędny format pliku. Można wysłać tylko pliki graficzne.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Wybierz',
    'LBL_SELECT_BUTTON_TITLE' => 'Wybierz [Alt+T]',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Dodaj zespół(-oły)',
    'LBL_SELECT_TEAMS_TITLE' => 'Dodaj zespół(-oły)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Przeglądaj dokumenty',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Przeglądaj dokumenty',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Wybierz Kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Wybierz Kontakt [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'wybrany plik',
    'LBL_GRID_SELECTED_FILES' => 'wybrane pliki',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Wybierz z Raportów',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Wybierz Raporty',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Wybierz Użytkownika',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Wybierz Użytkownika [Alt+U]',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Wybierz Plik',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Wybierz Plik',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Wyczyść plik',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Wyczyść plik',


    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Wybierz Użytkownika [Alt+U]',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Wybierz Użytkownika [Alt+U]',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Wyczyść użytkownika',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Wyczyść użytkownika',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Wybierz Konto',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Wybierz Konto',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Wyczyść konto',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Wyczyść konto',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'min.',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Wybierz kampanię',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Wybierz kampanię',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Wyczyść kampanię',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Wyczyść kampanię',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Wybierz Kontakt [Alt+T]',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Wybierz Kontakt [Alt+T]',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Wyczyść kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Wyczyść kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Wybierz zespół',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Wybierz zespół',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Wyczyść zespół',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Wyczyść zespół',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Użyto źródeł do zbudowania tej strony (zapytania, pliki)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundy.',
    'LBL_SERVER_RESPONSE_TIME' => 'Czas odpowiedzi Serwera',
    'LBL_SERVER_MEMORY_BYTES' => 'bajtów',
    'LBL_SERVER_MEMORY_USAGE' => 'Zużycie pamięci serwera: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT'=>'Ładuj do Konta',
    'LBL_SHIP_TO_CONTACT'=>'Ładuj do Kontaktu',
    'LBL_SHIPPING_ADDRESS'=>'Adres dostawy',
    'LBL_SHORTCUTS' => 'Skróty',
    'LBL_SHOW'=>'Pokaż',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Województwo:',
    'LBL_STATUS_UPDATED'=>'Twój Status dla tego wydarzenia został zaktualizowany',
    'LBL_STATUS'=>'Status',
    'LBL_STREET'=>'Ulica',
    'LBL_SUBJECT' => 'Temat',

    'LBL_INBOUNDEMAIL_ID' => 'ID przychodzących wiadomości email',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '© 2004-2008 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.',



    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '© 2004-2011 SugarCRM Inc. Wszystkie prawa zastrzeżone.<br />SugarCRM jest znakiem handlowym SugarCRM, Inc. Wszystkie inne nazwy firm i produktów mogą być znakami handlowymi odpowiednich firm, z którymi są one powiązane.',


    'LBL_SYNC' => 'Synchronizuj',
    'LBL_TABGROUP_ALL' => 'Wszystko',
    'LBL_TABGROUP_ACTIVITIES' => 'Działania',
    'LBL_TABGROUP_COLLABORATION' => 'Współpraca',
    'LBL_TABGROUP_HOME' => 'Strona Główna',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Moje Portale',
    'LBL_TABGROUP_OTHER' => 'Inny',
    'LBL_TABGROUP_REPORTS' => 'Raporty',
    'LBL_TABGROUP_SALES' => 'Sprzedaż',
    'LBL_TABGROUP_SUPPORT' => 'Wsparcie',
    'LBL_TABGROUP_TOOLS' => 'Narzędzia',
    'LBL_TASKS'=>'Zadania',
    'LBL_TEAMS_LINK'=>'Zespół',
    'LBL_THEME_COLOR'=>'Kolor',
    'LBL_THEME_FONT'=>'Czcionka',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiwum Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiwum Email [Alt+K]',
    'LBL_UNAUTH_ADMIN' => 'Nieautoryzowany dostęp do administracji',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Nie Usuwaj',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Nie Usuwaj[Alt+D]',
    'LBL_UNDELETE_BUTTON' => 'Nie Usuwaj',
    'LBL_UNDELETE' => 'Nie Usuwaj',
    'LBL_UNSYNC' => 'Unsync',
    'LBL_UPDATE' => 'Aktualizuj',
    'LBL_USER_LIST' => 'Lista Użytkowników',
    'LBL_USERS_SYNC'=>'Użytkownicy Sync',
    'LBL_USERS'=>'Użytkownicy',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Sprawdzanie możliwości duplikacji wprowadzanej wiadomości...',
    'LBL_VERIFY_PORTAL_NAME'=>'Sprawdzanie możliwośći duplikacji wprowadzanego portalu...',
    'LBL_VIEW_IMAGE' => 'zobacz',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Drukuj w Formacie PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Drukuj w Formacie PDF [Alt+P]',


    'LNK_ABOUT' => 'O Firmie',
    'LNK_ADVANCED_SEARCH' => 'Wyszukiwanie Zaawansowane',
    'LNK_BASIC_SEARCH' => 'Wyszukiwanie Podstawowe',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Zobacz wszystkie wyniki',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Pokaż wszystko',
    'LNK_CLOSE' => 'zamknij',
    'LBL_MODIFY_CURRENT_SEARCH'=> 'Modyfikuj aktualne wyszukiwanie',
    'LNK_SAVED_VIEWS' => 'Zapisz Wyniki Wyszukiwania & Layout',
    'LNK_DELETE_ALL' => 'del all',
    'LNK_DELETE' => 'usuń',
    'LNK_EDIT' => 'edytuj',
    'LNK_GET_LATEST'=>'Pobierz co najmniej',
    'LNK_GET_LATEST_TOOLTIP'=>'Zamień z ostatnią wersją',
    'LNK_HELP' => 'Pomoc',
    'LNK_CREATE' => 'Utwórz [Alt+N]',
    'LNK_LIST_END' => 'Zakończ',
    'LNK_LIST_NEXT' => 'Dalej',
    'LNK_LIST_PREVIOUS' => 'Poprzednie',
    'LNK_LIST_RETURN' => 'Wróć do Listy',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED'=>'Znak',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Zamień z podpisanym dokumentem',
    'LNK_PRINT' => 'Wydruk',
    'LNK_BACKTOTOP' => 'Na górę',
    'LNK_REMOVE' => 'Usuń',
    'LNK_RESUME' => 'Wznów',
    'LNK_VIEW_CHANGE_LOG' => 'Pokaż Historię Zmian',


    'NTC_CLICK_BACK' => 'Proszę kliknąć na wsteczny przycisk przeglądarki i naprawić błąd.',
    'NTC_DATE_FORMAT' => '(rrrr-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => 'Rrrr-mm-dd 24:00',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Jesteś pewny że chcesz usunąć wybrane Rekordy?',
    'NTC_TEMPLATE_IS_USED' => 'Szablon jest używany w przynajmniej jednym rekordzie email marketingu lub ustawieniach systemowych. Czy na pewno chcesz usunąć szablon?',
    'NTC_TEMPLATES_IS_USED' => 'Następujące szablony są używane w rekordach email marketingu lub ustawieniach systemowych. Czy na pewno chcesz je usunąć?',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten zapis?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Czy na pewno chcesz usunąć',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Czy na pewno chcesz zaktualizować',
    'NTC_DELETE_SELECTED_RECORDS' =>'zaznaczonych rekordów?',
    'NTC_LOGIN_MESSAGE' => 'Proszę wprowadzić nazwę użytkownika i hasło.',
    'NTC_NO_ITEMS_DISPLAY' => 'Nie',
    'NTC_REMOVE_CONFIRMATION' => 'Jesteś pewny że chcesz usunąć to powiązanie?',
    'NTC_REQUIRED' => 'Zaznaczone Wypełnij',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Witamy',
    'NTC_YEAR_FORMAT' => '(rrrr)',
    'LOGIN_LOGO_ERROR'=> 'Proszę zastąpić logo SuiteCRM.',
    'WARN_ONLY_ADMINS'=> "Tylko administratorzy mają uprawnienia do logowania.",
    'WARN_UNSAVED_CHANGES'=> "Masz zamiar opuścić ten rekord bez zachowania zmian. Czy na pewno chcesz opuścić ten rekord?",
    'ERROR_NO_RECORD' => 'Błąd wyszukiwania rekordu.  Został on prawdopodobnie usunięty, lub nie masz uprawnien, aby go zobaczyć.',
    'WARN_BROWSER_VERSION_WARNING' => "<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>",
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => "<b>Warning:</b> Your browser is in IE compatibility view which is not supported.",
    'ERROR_TYPE_NOT_VALID' => 'Błąd. Ten typ jest niepoprawny.',
    'ERROR_NO_BEAN' => 'Failed to get bean.', 
    'LBL_DUP_MERGE'=>'Wyszukaj Duplikaty',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Zarządzaj Subskrypcjami',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Zarządzaj Subskrypcjami dla ',
    'LBL_SUBSCRIBE'=>'Subskrybowanie',
    'LBL_UNSUBSCRIBE'=>'Brak Subskrybowania',
    // Ajax status strings
    'LBL_LOADING' => 'Ładuję...',
    'LBL_SEARCHING' => 'Szukam...',
    'LBL_SAVING_LAYOUT' => 'Zapisz wygląd ...',
    'LBL_SAVED_LAYOUT' => 'Wygląd został zapisany.',
    'LBL_SAVED' => 'Zapisane',
    'LBL_SAVING' => 'Zapisuję',
    'LBL_FAILED' => 'Nieudane!',
    'LBL_DISPLAY_COLUMNS' => 'Wyświetl Kolumny',
    'LBL_HIDE_COLUMNS' => 'Ukryj Kolumny',
    'LBL_SEARCH_CRITERIA' => 'Kryteria Wyszukiwania',
    'LBL_SAVED_VIEWS' => 'Zapisane widoki',
    'LBL_PROCESSING_REQUEST'=>'W toku...',
    'LBL_REQUEST_PROCESSED'=>'Wykonane',
    'LBL_AJAX_FAILURE' => 'Błąd Ajax',
    'LBL_MERGE_DUPLICATES'  => 'Połącz Duplikaty',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Zapis Wyników Wyszukiwania',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Wyszukaj używając powyższego formularza',
    'LBL_DETAILVIEW'=>'Detale Widoku',
    'LBL_LISTVIEW'=>'Widok Listy',
    'LBL_EDITVIEW'=>'Edytuj Widok',
    'LBL_SEARCHFORM'=>'Formularz Wyszukiwania',
    'LBL_SAVED_SEARCH_ERROR' => 'Wprowadź nazwę dla widoku.',
    'LBL_DISPLAY_LOG' => 'Wyświetl Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Wygaśnięcie Sesji',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sesja wygaśnie w ciągu 2 minut. Proszę zapisać zmiany.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Twoja sesja została zakończona.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Agenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Spotkanie',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Połączenie',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Czas: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokalizacja: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Opis:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Powiązany z:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "Kliknij OK, aby zobaczyć tą rozmowę telefniczną lub Anuluj, aby oddalić tą wiadomość.",
  	'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Kliknij OK, aby zobaczyć to spotkanie lub kliknij Anuluj, aby oddalić tą wiadomość.",
	'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Zdarzenie',
	'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Lokalizacja nie jest ustawiona.',
	'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Data początkowa nie jest zdefiniowana.',
 	'MSG_LIST_VIEW_NO_RESULTS_BASIC' => "Brak wyników",
	'MSG_LIST_VIEW_NO_RESULTS' => "Brak wyników dla <item1>",
 	'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => "Utwórz <item1> jako nowy <item2>",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => "You currently have no records saved. <item2> or <item3> one now.",
	'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' =>	"<item4> to learn more about the <item1> module. In order to access more information, use the user menu drop down located on the main navigation bar to access Help.",

    'LBL_CLICK_HERE' => "Kliknij tutaj",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Dodaj do Moich Ulubionych',
    'LBL_MARK_AS_FAVORITES' => 'Zaznacz jako ulubioną',
    'LBL_CREATE_CONTACT' => 'Utwórz Kontakt',
    'LBL_CREATE_CASE' => 'Utwórz Zgłoszenie',
    'LBL_CREATE_NOTE' => 'Utwórz Notatkę',
    'LBL_CREATE_OPPORTUNITY' => 'Utwórz Szansę Sprzedaży',
    'LBL_SCHEDULE_CALL' => 'Zaplanuj Rozmowę',
    'LBL_SCHEDULE_MEETING' => 'Zaplanuj Spotkanie',
    'LBL_CREATE_TASK' => 'Utwórz Zadanie',
    'LBL_REMOVE_FROM_FAVORITES' => 'Usuń z Moich Ulubionych',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Okno Generowania',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Zapisz stronę web jako formularz Potencjalnego Klienta',

    'LBL_PLEASE_SELECT' => 'Prosze Wybrać',
    'LBL_REDIRECT_URL'=>'Przekieruj URL',
    'LBL_RELATED_CAMPAIGN' =>'Powiązana Kampania',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Dodaj Wszystkie Pola',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Usuń Wszystkie Pola',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Akceptowane są tylko załączniki obrazkowe',
    'LBL_TRAINING' => 'Training',
    'ERR_DATABASE_CONN_DROPPED'=>'Błąd podczas wykonywania zapytania. Prawdopodobnie Twoja baza danych mogła zawiesić połączenie. Odśwież stronę; w tym celu powinieneś restartować serwer web.',
    'ERR_MSSQL_DB_CONTEXT' =>'Zmieniony kontekst bazy danych na',
  'ERR_MSSQL_WARNING' =>'Ostrzeżenie:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Uwaga: pole [[field]] nie ma zamapowanego wpisu w [moduleDir] pliku vardefs.php',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Błąd: Nie można odnaleźć pliku [[file]] . Nie można utworzyć, ponieważ nie znaleziono właściwego pliku HTML.',
  'ERR_CANNOT_FIND_MODULE' => 'Błąd: Moduł [module] nie istnieje.',
  'LBL_ALT_ADDRESS' => 'Inny Adres:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Błąd: Różny numer argumentu dla elementów &#39;klucza&#39; i &#39;kopii&#39; macierzy displayParams.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Zgubiony indeks w macierzy displayParams Array dla:',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Ogólny',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtry',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tylko Moje Zakładki',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tytuł',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Wyświetl ',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Tworzenie nowej strony ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Czy na pewno usunąć tą stronę?',
    'LBL_SAVING_PAGE_TITLE' => 'Europa/Tirana',
    'LBL_RETRIEVING_PAGE' => 'Przywracanie strony ...',
    'LBL_MAX_DASHLETS_REACHED' => 'Osiągnięto maksymalną ustawioną przez administratora ilość Kontrolek SuiteCRM. Usuń którąś, by móc dodać kolejną.',
    'LBL_ADDING_DASHLET' => 'Dodawanie Kontrolki SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Kontrolka SuiteCRM została dodana',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Czy potwierdzasz usunięcie Kontrolki SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Usuwanie Kontrolki SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Kontrolka SuiteCRM została usunięta',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Dodaj Stronę',
    'LBL_DELETE_PAGE' => 'Usuń Stronę',
    'LBL_CHANGE_LAYOUT' => 'Zmień układ',
    'LBL_RENAME_PAGE' => 'Zmień nazwę strony',

    'LBL_LOADING_PAGE' => 'Ładowanie strony, proszę czekać...',

    'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()">Przeładuj okno </a> w celu użycia Kontrolki SuiteCRM.',
    'LBL_ADD_DASHLETS' => 'Dodaj zakładki',
    'LBL_CLOSE_DASHLETS' => 'Zamknij',
    'LBL_OPTIONS' => 'Opcje',
    'LBL_NUMBER_OF_COLUMNS' => 'Wybierz liczbę kolumn',
    'LBL_1_COLUMN' => '1 kolumna',
    'LBL_2_COLUMN' => '2 kolumny',
    'LBL_3_COLUMN' => '3 kolumny',
    'LBL_PAGE_NAME' => 'Nazwa strony',

    'LBL_SEARCH_RESULTS' => 'Wyszukaj Rezultaty',
    'LBL_SEARCH_MODULES' => 'Moduł',
    'LBL_SEARCH_CHARTS' => 'Wykresy',
    'LBL_SEARCH_REPORT_CHARTS' => 'Wykresy raportu',
    'LBL_SEARCH_TOOLS' => 'Narzędzia',
    'LBL_SEARCH_HELP_TITLE' => 'Praca z wielokrotnym wyborem i zapisywaniem widoków wyszukiwania',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Zamknij',
    'LBL_SEARCH_RESULTS_FOUND' => 'Search Results Found',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Wpisz nazwę strony.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Brak Zdjęcia',

    'LBL_MODULE' => 'Moduł',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiuj adres z lewej:',
    'LBL_SAVE_AND_CONTINUE' => 'Zapisz i Kontynuuj',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click to select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,  click first value and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Błąd: Osiągnięto limit zapytania dla $limit zakresu dla modułu $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Błąd: Obserwator źródła ->notify() musi być nadpisany.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Błąd: Nie można utworzyć monitora, ponieważ plik meta jest pusty, lub nie istnieje.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Błąd: Nie skonfigurowano monitora dla zadanej nazwy',
    'ERR_UNDEFINED_METRIC' => 'Błąd: Nie można ustawić wartości dla niezidentyfikowanej jednostki miary',
    'ERR_STORE_FILE_MISSING' => 'Błąd: Nie można odnaleźć implementacji pliku składowania',

    'LBL_MONITOR_ID' => 'ID monitora',
    'LBL_USER_ID' => 'ID użytkownika',
    'LBL_MODULE_NAME' => 'Nazwa Modułu',
    'LBL_ITEM_ID' => 'ID przedmiotu',
    'LBL_ITEM_SUMMARY' => 'Podsumowanie dla przedmiotu',
    'LBL_ACTION' => 'Działanie',
    'LBL_SESSION_ID' => 'ID sesji',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack utworzony dla użytkownika o id {0}',
    'LBL_VISIBLE' => 'Rekord widoczny',
    'LBL_DATE_LAST_ACTION' => 'Data Ostatniego Działania',





    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nie jest przed',
  'MSG_IS_MORE_THAN' => 'wynosi więcej niż',
  'MSG_IS_LESS_THAN' => 'wynosi mniej niż',
  'MSG_SHOULD_BE' => 'powinna być',
  'MSG_OR_GREATER' => 'lub większa',

    'LBL_PORTAL_WELCOME_TITLE' => 'Witamy w SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Utwórz Błąd',
    'LBL_NO_RECORDS_FOUND' => '- Znaleziono 0 rekordów -',

    'DATA_TYPE_DUE' => 'Wykonanie:',
    'DATA_TYPE_START' => 'Start:',
    'DATA_TYPE_SENT' => 'Wysłano:',
    'DATA_TYPE_MODIFIED' => 'Zmodyfikowano:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Ilość',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'obraz obiektu',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Wybierz datę',

    'LBL_VALIDATE_RANGE' => 'nie mieści się we właściwym zakresie',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Wszystko',

    'LBL_OPERATOR_IN_TEXT' => 'jest jednym z następujących:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'nie jest jednym z następujących:',


  //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Błąd: Liczba listków macierzy nie pasuje do liczby listków macierzy wyników.',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Błąd: Nie odnaleziono danych mapowania dla modułu.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Błąd: Nie można pobrać danych dla łącznika.',
  'LBL_MERGE_CONNECTORS' => 'Pobierz dane',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_REMOVE_MODULE_ENTRY' => 'Czy na pewno chcesz wyłączyć łącznik integrujący dla tego modułu?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING'      => 'Dla optymalnego doświadczenia używając IIS/FastCGI sapi, ustaw fastcgi.logging na 0 w twoim pliku php.ini.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Nie możesz usunąć globalnego zespołu, przykro mi. Przerywam.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS'=>'Ten prywatny zespół [{0}] nie może zostać usunięty dopóki użytkownik [{1}] nie jest usunięty.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Masz wyłączoną obsługę Flash, lub wersja Twojego Adobe&#39;s Flash Player jest zbyt stara. Wejdź na stronę <a href="http://www.adobe.com/go/getflashplayer/"> i pobierz najnowszą wersję, lub włącz obsługę plików Flash.',
  //Collection Field
  'LBL_COLLECTION_NAME' => 'Nazwa',
  'LBL_COLLECTION_PRIMARY' => 'Główny',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Puste wymagane pole',
    'LBL_COLLECTION_EXACT' => 'Dokładny',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Przypisany Do Nazwy',
    'LBL_DESCRIPTION' => 'Opis',

  'LBL_YESTERDAY'=> 'wczoraj',
  'LBL_TODAY'=>'Dziś',
  'LBL_TOMORROW'=>'Jutro',
  'LBL_NEXT_WEEK'=> 'Przyszły tydzień',
  'LBL_NEXT_MONDAY'=>'w przyszły poniedziałek',
  'LBL_NEXT_FRIDAY'=>'w przyszły piątek',
  'LBL_TWO_WEEKS'=> 'dwa tygodnie',
  'LBL_NEXT_MONTH'=> 'Przyszły miesiąc',
  'LBL_FIRST_DAY_OF_NEXT_MONTH'=> 'pierwszy dzień przyszłego miesiąca',
  'LBL_THREE_MONTHS'=> 'trzy miesiące',
  'LBL_SIXMONTHS'=> 'sześć miesięcy',
  'LBL_NEXT_YEAR'=> 'w przyszłym roku',
    'LBL_FILTERED' => 'Przefiltrowane',

    //Datetimecombo fields
    'LBL_HOURS' => 'Godziny',
    'LBL_MINUTES' => 'Minuty',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Data',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatycznie odśwież',

    'LBL_DURATION_DAY' => 'dzień',
    'LBL_DURATION_HOUR' => 'godzina',
    'LBL_DURATION_MINUTE' => 'minuta',
    'LBL_DURATION_DAYS' => 'dni',
    'LBL_DURATION_HOURS' => 'godzin',
    'LBL_DURATION_MINUTES' => 'minuty',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Wybierz miesiąc',
    'LBL_ENTER_YEAR' => 'Wprowadź rok',
    'LBL_ENTER_VALID_YEAR' => 'Proszę wprowadź poprawny rok',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Proszę wprowadź numeryczny numer telefonu, łącznie z kodem pocztowym.',

    //File write error label
    'ERR_FILE_WRITE' => 'Błąd: Nie można zapisać pliku {0}. Proszę wybierz system i uprawnienia web serwera.',
  'ERR_FILE_NOT_FOUND' => 'Błąd: Nie można załadować pliku {0}. Proszę wybierz system i uprawnienia web serwera.',

    'LBL_AND' => 'i',
    'LBL_BEFORE' => 'po',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Załaduj ze swojego komputera',
    'LBL_SEARCH_EXTERNAL_API' => 'Plik w źródle zewnętrznym',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Ochrona',
    'LBL_SHARE_PRIVATE' => 'Prywatny',
    'LBL_SHARE_COMPANY' => 'Firma',
    'LBL_SHARE_LINKABLE' => 'Linkowalny',
    'LBL_SHARE_PUBLIC' => 'Publiczny',


    // Web Services REST RSS
    'LBL_RSS_FEED' => 'Kanał RSS',
    'LBL_RSS_RECORDS_FOUND' => 'znaleziono rekord(y)',
    'ERR_RSS_INVALID_INPUT' => 'RSS nie jest poprawnym input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS nie jest poprawnym response_type dla tej metody',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs nie wspomaga format pliku, który podałeś.',

    'LBL_EMPTY' => 'Pusty',
    'LBL_IS_EMPTY' => 'Jest pusty',
    'LBL_IS_NOT_EMPTY' => 'Nie jest pusty',
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
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Przypisany do',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Użytkownik Przypisany',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Raporty do ID',
    'LBL_EXPORT_FULL_NAME' => 'Pełna Nazwa',
    'LBL_EXPORT_TEAM_ID' => 'ID zespołu',
    'LBL_EXPORT_TEAM_NAME' => 'Zespół',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION'=> 'Navigating... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Powiadomienia',
    'LBL_NOTIFICATIONS_NONE' => 'Nie ma bieżących powiadomień',
    'LBL_ALT_ADD_TEAM_ROW' => 'Add new team row',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Usuń zespół',
    'LBL_ALT_SPOT_SEARCH' => 'Spot Search',
    'LBL_ALT_SORT_DESC' => 'Posortowane Malejąco',
    'LBL_ALT_SORT_ASC' => 'Posortowane Rosnąco',
    'LBL_ALT_SORT' => 'Sortuj',
    'LBL_ALT_SHOW_OPTIONS' => 'Pokaż Opcje',
    'LBL_ALT_HIDE_OPTIONS' => 'Ukryj opcje',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' =>'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'Informacje',
	'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below.  Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'Email',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'nieprawidłowy adres e-mail',
    'LBL_EMAIL_PRIM_TITLE' => 'podstawowy adres e-mail',
    'LBL_SELECT_ALL_TITLE' => 'Wybierz wszystko',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Zaznacz ten wiersz',
    'LBL_TEAM_SELECTED_TITLE' => 'Zaznaczone Zespoły',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Wybierz aby oznaczyć ten zespół jako domyślny',

    //for upload errors
    'UPLOAD_ERROR_TEXT'          => 'BŁĄD: Wystąpił błąd podczas przesyłania pliku. Kod błędu: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: There was an error during upload. Error code: {0} - {1}. The upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT'     => 'ERROR: There was an error during your upload, please contact an administrator for help.',
    'UPLOAD_MAXIMUM_EXCEEDED'    => 'Rozmiar uploadu ({0} bajtów) przekracza dozwolone maksimum: {1} bajtów',
    'UPLOAD_REQUEST_ERROR'    => 'Wystąpił błąd. Proszę odświeżyć stronę i spróbować ponownie.',


    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Edytuj',
    'LBL_EDIT_BUTTON_TITLE' => 'Edytuj [Alt+E]',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikat [Alt+U]',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Usuń',
    'LBL_DELETE_BUTTON_TITLE' => 'Usuń [Alt+D]',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Zapisz',
    'LBL_SAVE_BUTTON_TITLE' => 'Zapisz [Alt+S]',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Anuluj',
    'LBL_CANCEL_BUTTON_TITLE' => 'Anuluj [Alt+X]',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Skróty klawiaturowe',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>' ,

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Błąd odpowiedzi serwera',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Zapytanie',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Cena Sprzedaży',
    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => 'Ręcznie',
        '5' => 'Co 5 minut',
        '15' => 'Co 15 minut',
        '30' => 'Co 30 minut',
        '60' => 'Co godzinę',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Przypomnienie jest puste lub nieprawidłowe.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.'

    );

$app_list_strings['moduleList']['Library'] = 'Biblioteka';
$app_list_strings['library_type'] = array('Books'=>'Książki', 'Music'=>'Muzyka', 'DVD'=>'DVD', 'Magazines'=>'Czasopisma');
$app_list_strings['moduleList']['EmailAddresses'] = 'Adres Email';
$app_list_strings['project_priority_default'] = 'Średni';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
);

$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Wersja Robocza',
    'Expired' => 'Przedawniony',
    'In Review' => 'W trakcie rozpatrzania',
    'Published' => 'Opublikowany',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Brak--',
    'Create New Tag' => 'Utwórz nowy znacznik',
    'Delete Tag'=>'Usuń znacznik',
    'Rename Tag'=>'Zmień nazwę',
    'Move Selected Articles'=>'Przenieś zaznaczone artykuły',
    'Apply Tags On Articles'=>'Zaakceptuj znacznik dla artykułu',
    'Delete Selected Articles'=>'Usuń wybrane artykuły',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Posiada załączniki',
        'none' => 'Nie',
        'mime' => 'Podaj typ Mime',
        'name' => 'Podaj nazwę',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Baza Wiedzy';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Top 5',
    'Top_10' => 'Top 10',
    'Top_20' => 'Top 20',
    'Bot_5'  => 'Najgorsze 5',
    'Bot_10' => 'Najgorsze 10',
    'Bot_20' => 'Najgorsze 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'Wszystko',
        'added' => 'Dodane w ciągu ostatnich 30 dni',
        'pending' => 'Oczekuje na moje zatwierdzenie',
        'updated' =>'Aktualizowane w ciągu ostatnich 30 dni',
        'faqs' => 'FAQ',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'Włączony',
    'before' => 'po',
    'after' => 'przed',
    'between_dates' => 'pomiędzy',
    'last_7_days' => 'Ostatnie 7 Dni',
    'next_7_days' => 'Następne 7 Dni',
    'last_month' => 'Ostatni Miesiąc',
    'this_month' => 'W tym Miesiącu',
    'next_month' => 'Przyszły miesiąc',
    'last_30_days' => 'Ostatnie 30 Dni',
    'next_30_days' => 'Następne 30 Dni',
    'last_year' => 'Ostatni Rok',
    'this_year' => 'Ten Rok',
    'next_year' => 'Następny Rok',
    'isnull' => 'Jest pusty',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGANISTAN',
        'ALBANIA' => 'ALBANIA',
        'ALGERIA' => 'ALGIERIA',
        'AMERICAN SAMOA' => 'SAMOA AMERYKAŃSKIE',
        'ANDORRA' => 'ANDORA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARKTYKA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTYNA',
        'ARMENIA' => 'ARMENIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIA',
        'AUSTRIA' => 'AUSTRIA',
        'AZERBAIJAN' => 'AZERBEJDŻAN',
        'BAHAMAS' => 'BAHAMY',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESZ',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BIAŁORUŚ',
        'BELGIUM' => 'BELGIA',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDY',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIWIA',
        'BOSNIA' => 'BOŚNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'WYSPA BOUVETA',
        'BRAZIL' => 'BRAZYLIA',
        'BRITISH ANTARCTICA TERRITORY' => 'BRYTYJSKIE TERYTORIUM ANTARKTYCZNE',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRYTYJSKIE TERYTORIUM OCEANU INDYJSKIEGO',
        'BRITISH VIRGIN ISLANDS' => 'BRYTYJSKIE WYSPY DZIEWICZE',
        'BRITISH WEST INDIES' => 'BRYTYJSKIE INDIE ZACHODNIE',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BUŁGARIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'KAMBODŻA',
        'CAMEROON' => 'KAMERUN',
        'CANADA' => 'KANADA',
        'CANAL ZONE' => 'STREFA KANAŁU PANAMSKIEGO',
        'CANARY ISLAND' => 'WYSPY KANARYJSKIE',
        'CAPE VERDI ISLANDS' => 'REPUBLIKA ZIELONEGO PRZYLĄDKA',
        'CAYMAN ISLANDS' => 'KAJMANY',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CZAD',
        'CHANNEL ISLAND UK' => 'WYSPY KANAŁU LA MANCHE',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINY',
        'CHRISTMAS ISLAND' => 'WYSPA BOŻEGO NARODZENIA',
        'COCOS (KEELING) ISLAND' => 'WYSPA KOKOSOWA',
        'COLOMBIA' => 'KOLUMBIA',
        'COMORO ISLANDS' => 'KOMORY',
        'CONGO' => 'KONGO',
        'CONGO KINSHASA' => 'REPUBLIKA KONGO',
        'COOK ISLANDS' => 'WYSPY COOKA',
        'COSTA RICA' => 'KOSTARYKA',
        'CROATIA' => 'CHORWACJA',
        'CUBA' => 'KUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPR',
        'CZECH REPUBLIC' => 'CZECHY',
        'DAHOMEY' => 'DAHOMEJ',
        'DENMARK' => 'DANIA',
        'DJIBOUTI' => 'DŻIBUTI',
        'DOMINICA' => 'DOMINIKA',
        'DOMINICAN REPUBLIC' => 'DOMINIKANA',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'EKWADOR',
        'EGYPT' => 'EGIPT',
        'EL SALVADOR' => 'SALWADOR',
        'EQUATORIAL GUINEA' => 'GWINEA RÓWNIKOWA',
        'ESTONIA' => 'ESTONIA',
        'ETHIOPIA' => 'ETIOPIA',
        'FAEROE ISLANDS' => 'WYSPY OWCZE',
        'FALKLAND ISLANDS' => 'FALKLANDY',
        'FIJI' => 'FIDŻI',
        'FINLAND' => 'FINLANDIA',
        'FRANCE' => 'FRANCJA',
        'FRENCH GUIANA' => 'GUJANA FRANCUSKA',
        'FRENCH POLYNESIA' => 'POLINEZJA FRANCUSKA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GRUZJA',
        'GERMANY' => 'NIEMCY',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GRECJA',
        'GREENLAND' => 'GRENLANDIA',
        'GUADELOUPE' => 'GWADELUPA',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GWATEMALIA',
        'GUINEA' => 'GWINEA',
        'GUYANA' => 'GUJANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'WĘGRY',
        'ICELAND' => 'ISLANDIA',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIE',
        'INDONESIA' => 'INDONEZJA',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAK',
        'IRELAND' => 'IRLANDIA',
        'ISRAEL' => 'IZRAEL',
        'ITALY' => 'WŁOCHY',
        'IVORY COAST' => 'WYBRZEŻE KOŚCI SŁONIOWEJ',
        'JAMAICA' => 'JAMAJKA',
        'JAPAN' => 'JAPONIA',
        'JORDAN' => 'JORDANIA',
        'KAZAKHSTAN' => 'KAZACHSTAN',
        'KENYA' => 'KENIA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'KOREA POŁUDNIOWA',
        'KUWAIT' => 'KUWEJT',
        'KYRGYZSTAN' => 'KIRGISTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'ŁOTWA',
        'LEBANON' => 'LIBAN',
        'LEEWARD ISLANDS' => 'WYSPY PODWIETRZNE',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBIA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITWA',
        'LUXEMBOURG' => 'LUKSEMBURG',
        'MACAO' => 'MAKAO',
        'MACEDONIA' => 'MACEDONIA',
        'MADAGASCAR' => 'MADAGASKAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALEZJA',
        'MALDIVES' => 'MALEDIWY',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTYNIKA',
        'MAURITANIA' => 'MAURETANIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MALANEZJA',
        'MEXICO' => 'MEKSYK',
        'MOLDOVIA' => 'MOŁDAWIA',
        'MONACO' => 'MONAKO',
        'MONGOLIA' => 'MONGOLIA',
        'MOROCCO' => 'MAROKO',
        'MOZAMBIQUE' => 'MOZAMBIK',
        'MYANAMAR' => 'MIJANMA',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'HOLANDIA',
        'NETHERLANDS ANTILLES' => 'ANTYLE HOLENDERSKIE',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ANTYLE HOLENDERSKIE',
        'NEW CALADONIA' => 'NOWA KALEDONIA',
        'NEW HEBRIDES' => 'NOWE HEBRYDY',
        'NEW ZEALAND' => 'NOWA ZELANDIA',
        'NICARAGUA' => 'NIKARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK',
        'NORWAY' => 'NORWEGIA',
        'OMAN' => 'OMAN',
        'OTHER' => 'INNE',
        'PACIFIC ISLAND' => 'WYSPY PACYFIKU',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NOWA GWINEA',
        'PARAGUAY' => 'PARAGWAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'FILIPINY',
        'POLAND' => 'POLSKA',
        'PORTUGAL' => 'PORTUGALIA',
        'PORTUGUESE TIMOR' => 'EAST TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'KATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIKA BIAŁORUSI',
        'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIKA POŁUDNIOWEJ AFRYKI',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'RUMUNIA',
        'RUSSIA' => 'ROSJA',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RIUKIU',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'ARABIA SAUDYJSKA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIA',
        'SEYCHELLES' => 'SESZELE',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPUR',
        'SLOVAKIA' => 'SŁOWACJA',
        'SLOVENIA' => 'SŁOWENIA',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'AFRYKA POŁUDNIOWA',
        'SOUTH YEMEN' => 'REPUBLIKA JEMENU',
        'SPAIN' => 'HISZPANIA',
        'SPANISH SAHARA' => 'SAHARA HISZPAŃSKA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SW AFRICA',
        'SWAZILAND' => 'SUAZI',
        'SWEDEN' => 'SZWECJA',
        'SWITZERLAND' => 'SZWAJCARIA',
        'SYRIA' => 'SYRIA',
        'TAIWAN' => 'TAJWAN',
        'TAJIKISTAN' => 'TADŻYKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'TAJLANDIA',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNEZJA',
        'TURKEY' => 'TURCJA',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINA',
        'UNITED ARAB EMIRATES' => 'ZJEDNOCZONE EMIRATY ARABSKIE',
        'UNITED KINGDOM' => 'WIELKA BRYTANIA',
        'UPPER VOLTA' => 'UPPER VOLTA',
        'URUGUAY' => 'URUGWAJ',
        'US PACIFIC ISLAND' => 'WYSPY PACYFIKU',
        'US VIRGIN ISLANDS' => 'WYSPY DZIEWICZE',
        'USA' => 'USA',
        'UZBEKISTAN' => 'UZBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'WATYKAN',
        'VENEZUELA' => 'WENEZUELA',
        'VIETNAM' => 'WIETNAM',
        'WAKE ISLAND' => 'WAKE',
        'WEST INDIES' => 'INDIE ZACHODNIE',
        'WESTERN SAHARA' => 'SAHARA ZACHODNIA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIR',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (Tajwan i Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrilica)',
    'CP1252'    => 'CP1252 (MS Europa zachodnia & US)',
    'EUC-CN'    => 'EUC-CN (Uporoszczony Chiński GB2312)',
    'EUC-JP'    => 'EUC-JP (Japoński Unix)',
    'EUC-KR'    => 'EUC-KR (Koreański)',
    'EUC-TW'    => 'EUC-TW (Tajwański)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japoński)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreański)',
    'ISO-8859-1'  => 'ISO-8859-1 (Europa zachodnia i US)',
    'ISO-8859-2'  => 'ISO-8859-2 (Europa Środkowa i Wschodnia)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Cyrilica)',
    'ISO-8859-6'  => 'ISO-8859-6 (Arabski)',
    'ISO-8859-7'  => 'ISO-8859-7 (Grecki)',
    'ISO-8859-8'  => 'ISO-8859-8 (Hebrajski)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (Rosyjska cyrylica)',
    'KOI8-U'    => 'KOI8-U (Ukraińska cyrylica)',
    'SJIS'      => 'SJIS (MS Japoński)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

  'Africa/Algiers' => 'Afryka/Algieria',
  'Africa/Luanda' => 'Afryka/Luanda',
  'Africa/Porto-Novo' => 'Afryka/Porto-Novo',
  'Africa/Gaborone' => 'Afryka/Gaborone',
  'Africa/Ouagadougou' => 'Afryka/Ouagadougou',
  'Africa/Bujumbura' => 'Afryka/Bużumbura',
  'Africa/Douala' => 'Afryka/Duala',
  'Atlantic/Cape_Verde' => 'dzień(dni)',
  'Africa/Bangui' => 'Afryka/Bangi',
  'Africa/Ndjamena' => 'Afryka/Ndjamena',
  'Indian/Comoro' => 'Ocean_indyjski/Komory',
  'Africa/Kinshasa' => 'Afryka/Kinszasa',
  'Africa/Lubumbashi' => 'Afryka/Lubumbashi',
  'Africa/Brazzaville' => 'Afryka/Brazzaville',
  'Africa/Abidjan' => 'Afryka/Abidżan',
  'Africa/Djibouti' => 'Afryka/Dżibuti',
  'Africa/Cairo' => 'Afryka/Kair',
  'Africa/Malabo' => 'Afryka/Malabo',
  'Africa/Asmera' => 'Afryka/Asmera',
  'Africa/Addis_Ababa' => 'Afryka/Addis_Ababa',
  'Africa/Libreville' => 'Afryka/Libreville',
  'Africa/Banjul' => 'Afryka/Bandżul',
  'Africa/Accra' => 'Afryka/Akra',
  'Africa/Conakry' => 'Afryka/Konakry',
  'Africa/Bissau' => 'Afryka/Bissau',
  'Africa/Nairobi' => 'Afryka/Nairobi',
  'Africa/Maseru' => 'Afryka/Maseru',
  'Africa/Monrovia' => 'Afryka/Monrovia',
  'Africa/Tripoli' => 'Afryka/Trypolis',
  'Indian/Antananarivo' => 'Ocean_Indyjski/Antananarivo',
  'Africa/Blantyre' => 'Afryka/Blantyre',
  'Africa/Bamako' => 'Afryka/Bamako',
  'Africa/Nouakchott' => 'Afryka/Nouakchott',
  'Indian/Mauritius' => 'Ocean_Indyjski/Mauritius',
  'Indian/Mayotte' => 'Ocean_Indyjski/Majotty',
  'Africa/Casablanca' => 'Afryka/Casablanca',
  'Africa/El_Aaiun' => 'Afryka/El_Aaiun',
  'Africa/Maputo' => 'Afryka/Maputo',
  'Africa/Windhoek' => 'Afryka/Windhoek',
  'Africa/Niamey' => 'Afryka/Niamey',
  'Africa/Lagos' => 'Afryka/Lagos',
  'Indian/Reunion' => 'Ocean_Indyjski/Reunion',
  'Africa/Kigali' => 'Afryka/Kigali',
  'Atlantic/St_Helena' => 'Atlantyk/St_Helena',
  'Africa/Sao_Tome' => 'Afryka/Sao_Tome',
  'Africa/Dakar' => 'Afryka/Dakar',
  'Indian/Mahe' => 'Ocean_Indyjski/Mahe',
  'Africa/Freetown' => 'Afryka/Freetown',
  'Africa/Mogadishu' => 'Afryka/Mogadiszu',
  'Africa/Johannesburg' => 'Afryka/Johannesburg',
  'Africa/Khartoum' => 'Afryka/Khartoum',
  'Africa/Mbabane' => 'Afryka/Mbabane',
  'Africa/Dar_es_Salaam' => 'Afryka/Dar_es_Salaam',
  'Africa/Lome' => 'Afryka/Lome',
  'Africa/Tunis' => 'Afryka/Tunis',
  'Africa/Kampala' => 'Afryka/Kampala',
  'Africa/Lusaka' => 'Afryka/Lusaka',
  'Africa/Harare' => 'Afryka/Harare',
  'Antarctica/Casey' => 'Antarktyda/Casey',
  'Antarctica/Davis' => 'Antarktyda/Davis',
  'Antarctica/Mawson' => 'Antarktyda/Mawsona',
  'Indian/Kerguelen' => 'Ocean_Indyjski/Kerguelena',
  'Antarctica/DumontDUrville' => 'Antarktyda/DumontDUrville',
  'Antarctica/Syowa' => 'Antarktyda/Syowa',
  'Antarctica/Vostok' => 'Antarktyda/Wostok',
  'Antarctica/Rothera' => 'Antarktyda/Rothera',
  'Antarctica/Palmer' => 'Antarktyda/Palmer',
  'Antarctica/McMurdo' => 'Antarktyda/McMurdo',
  'Asia/Kabul' => 'Azja/Kabul',
  'Asia/Yerevan' => 'Azja/Yerevan',
  'Asia/Baku' => 'Azja/Baku',
  'Asia/Bahrain' => 'Azja/Bahrajn',
  'Asia/Dhaka' => 'Azja/Dhaka',
  'Asia/Thimphu' => 'Azja/Thimphu',
  'Indian/Chagos' => 'Ocean_Indyjski/Chagos',
  'Asia/Brunei' => 'Azja/Brunei',
  'Asia/Rangoon' => 'Azja/Rangun',
  'Asia/Phnom_Penh' => 'Azja/Phnom_Penh',
  'Asia/Beijing' => 'Azja/Pekin',
  'Asia/Harbin' => 'Azja/Harbin',
  'Asia/Shanghai' => 'Azja/Szanghaj',
  'Asia/Chongqing' => 'Azja/Chongqing',
  'Asia/Urumqi' => 'Azja/Urumqi',
  'Asia/Kashgar' => 'Azja/Kaszgar',
  'Asia/Hong_Kong' => 'Azja/Hong_Kong',
  'Asia/Taipei' => 'Azja/Tajpej',
  'Asia/Macau' => 'Azja/Makau',
  'Asia/Nicosia' => 'Azja/Nicosia',
  'Asia/Tbilisi' => 'Azja/Tbilisi',
  'Asia/Dili' => 'Azja/Dili',
  'Asia/Calcutta' => 'Azja/Kalkuta',
  'Asia/Jakarta' => 'Azja/Dżakarta',
  'Asia/Pontianak' => 'Azja/Pontianak',
  'Asia/Makassar' => 'Azja/Makassar',
  'Asia/Jayapura' => 'Azja/Jayapura',
  'Asia/Tehran' => 'Azja/Teheran',
  'Asia/Baghdad' => 'Azja/Bagdad',
  'Asia/Jerusalem' => 'Azja/Jerozolima',
  'Asia/Tokyo' => 'Azja/Tokio',
  'Asia/Amman' => 'Azja/Amman',
  'Asia/Almaty' => 'Azja/Ałma-Ata',
  'Asia/Qyzylorda' => 'Azja/Qyzylorda',
  'Asia/Aqtobe' => 'Azja/Aqtobe',
  'Asia/Aqtau' => 'Azja/Aqtau',
  'Asia/Oral' => 'Azja/Oral',
  'Asia/Bishkek' => 'Azja/Biszkek',
  'Asia/Seoul' => 'Azja/Seul',
  'Asia/Pyongyang' => 'Azja/Pyongyang',
  'Asia/Kuwait' => 'Azja/Kuwejt',
  'Asia/Vientiane' => 'Azja/Wientian',
  'Asia/Beirut' => 'Azja/Bejrut',
  'Asia/Kuala_Lumpur' => 'Azja/Kuala_Lumpur',
  'Asia/Kuching' => 'Azja/Kuching',
  'Indian/Maldives' => 'Ocean_Indyjski/Malediwy',
  'Asia/Hovd' => 'Azja/Hovd',
  'Asia/Ulaanbaatar' => 'Azja/Ułan_Bator',
  'Asia/Choibalsan' => 'Azja/Czojbalsan',
  'Asia/Katmandu' => 'Azja/Katmandu',
  'Asia/Muscat' => 'Azja/Maskat',
  'Asia/Karachi' => 'Azja/Karaczi',
  'Asia/Gaza' => 'Azja/Gaza',
  'Asia/Manila' => 'Azja/Manila',
  'Asia/Qatar' => 'Azja/Katar',
  'Asia/Riyadh' => 'Azja/Rijad',
  'Asia/Singapore' => 'Azja/Singapur',
  'Asia/Colombo' => 'Azja/Kolombo',
  'Asia/Damascus' => 'Azja/Damaszek',
  'Asia/Dushanbe' => 'Azja/Duszanbe',
  'Asia/Bangkok' => 'Azja/Bangkok',
  'Asia/Ashgabat' => 'Azja/Aszchabad',
  'Asia/Dubai' => 'Azja/Dubaj',
  'Asia/Samarkand' => 'Azja/Samarkanda',
  'Asia/Tashkent' => 'Azja/Taszkent',
  'Asia/Saigon' => 'Azja/Saigon',
  'Asia/Aden' => 'Azja/Aden',
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
  'Indian/Christmas' => 'Ocean_Indyjski/Wyspa_Bożego_Narodzenia',
  'Pacific/Rarotonga' => 'Pacyfik/Rarotonga',
  'Indian/Cocos' => 'Ocean_Indyjski/Wyspy_Kokosowe',
  'Pacific/Fiji' => 'Pacyfik/Fidżi',
  'Pacific/Gambier' => 'Pacyfik/Gambier',
  'Pacific/Marquesas' => 'Pacyfik/Markizy',
  'Pacific/Tahiti' => 'Pacyfik/Tahiti',
  'Pacific/Guam' => 'Pacyfik/Guam',
  'Pacific/Tarawa' => 'Pacyfik/Tarawa',
  'Pacific/Enderbury' => 'Pacyfik/Enderbury',
  'Pacific/Kiritimati' => 'Pacyfik/Kiritimati',
  'Pacific/Saipan' => 'Pacyfik/Saipan',
  'Pacific/Majuro' => 'Pacyfik/Majuro',
  'Pacific/Kwajalein' => 'Pacyfik/Kwajalein',
  'Pacific/Truk' => 'Pacyfik/Truk',
  'Pacific/Pohnpei' => 'Pacific/Pohnpei',
  'Pacific/Kosrae' => 'Pacyfik/Kosrae',
  'Pacific/Nauru' => 'Pacyfik/Nauru',
  'Pacific/Noumea' => 'Pacyfik/Nouméa',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacyfik/Chatham',
  'Pacific/Niue' => 'Pacyfik/Niue',
  'Pacific/Norfolk' => 'Pacyfik/Norfolk',
  'Pacific/Palau' => 'Pacyfik/Palau',
  'Pacific/Port_Moresby' => 'Pacyfik/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacyfik/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacyfik/Pago_Pago',
  'Pacific/Apia' => 'Pacyfik/Apia',
  'Pacific/Guadalcanal' => 'Pacyfik/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacyfik/Fakaofo',
  'Pacific/Tongatapu' => 'Pacyfik/Tonga',
  'Pacific/Funafuti' => 'Pacyfik/Funafuti',
  'Pacific/Johnston' => 'Pacyfik/Johnston',
  'Pacific/Midway' => 'Pacyfik/Midway',
  'Pacific/Wake' => 'Pacyfik/Wake',
  'Pacific/Efate' => 'Pacyfik/Efate',
  'Pacific/Wallis' => 'Pacyfik/Wallis',
  'Europe/London' => 'Europa/Londyn',
  'Europe/Dublin' => 'Europa/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europa/Tirana',
  'Europe/Andorra' => 'Europa/Andora',
  'Europe/Vienna' => 'Europa/Wiedeń',
  'Europe/Minsk' => 'Europa/Mińsk',
  'Europe/Brussels' => 'Europa/Bruksela',
  'Europe/Sofia' => 'Europa/Sofia',
  'Europe/Prague' => 'Europa/Praga',
  'Europe/Copenhagen' => 'Europa/Kopenhaga',
  'Atlantic/Faeroe' => 'Atlantyk/Wyspy_Owcze',
  'America/Danmarkshavn' => 'Ameryka/Danmarkshavn',
  'America/Scoresbysund' => 'Ameryka/Scoresbysund',
  'America/Godthab' => 'Ameryka/Godthab',
  'America/Thule' => 'Ameryka/Thule',
  'Europe/Tallinn' => 'Europa/Tallinn',
  'Europe/Helsinki' => 'Europa/Helsinki',
  'Europe/Paris' => 'Europa/Paryż',
  'Europe/Berlin' => 'Europa/Berlin',
  'Europe/Gibraltar' => 'Europa/Gibraltar',
  'Europe/Athens' => 'Europa/Ateny',
  'Europe/Budapest' => 'Europa/Budapeszt',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europa/Rzym',
  'Europe/Riga' => 'Europa/Ryga',
  'Europe/Vaduz' => 'Europa/Vaduz',
  'Europe/Vilnius' => 'Europa/Vilnius',
  'Europe/Luxembourg' => 'Europa/Luksemburg',
  'Europe/Malta' => 'Europa/Malta',
  'Europe/Chisinau' => 'Europa/Kiszyniów',
  'Europe/Monaco' => 'Europa/Monako',
  'Europe/Amsterdam' => 'Europa/Amsterdam',
  'Europe/Oslo' => 'Europa/Oslo',
  'Europe/Warsaw' => 'Europe/Warszawa',
  'Europe/Lisbon' => 'Europa/Lizbona',
  'Atlantic/Azores' => 'Atlantyk/Azory',
  'Atlantic/Madeira' => 'Atlantyk/Madera',
  'Europe/Bucharest' => 'Europa/Bukareszt',
  'Europe/Kaliningrad' => 'Europa/Kaliningrad',
  'Europe/Moscow' => 'Europa/Moskwa',
  'Europe/Samara' => 'Europa/Samara',
  'Asia/Yekaterinburg' => 'Azja/Jekaterynburg',
  'Asia/Omsk' => 'Azja/Omsk',
  'Asia/Novosibirsk' => 'Azja/Nowosybirsk',
  'Asia/Krasnoyarsk' => 'Azja/Krasnojarsk',
  'Asia/Irkutsk' => 'Azja/Irkuck',
  'Asia/Yakutsk' => 'Azja/Jakuck',
  'Asia/Vladivostok' => 'Azja/Władywostok',
  'Asia/Sakhalin' => 'Azja/Sachalin',
  'Asia/Magadan' => 'Azja/Magadan',
  'Asia/Kamchatka' => 'Azja/Kamczatka',
  'Asia/Anadyr' => 'Azja/Anadyr',
  'Europe/Belgrade' => 'Europa/Belgrad' ,
  'Europe/Madrid' =>'Europa/Madryt' ,
  'Africa/Ceuta' => 'Afryka/Ceuta',
  'Atlantic/Canary' => 'Atlantyk/Wyspy_Kanaryjskie',
  'Europe/Stockholm' => 'Europa/Sztokcholm',
  'Europe/Zurich' => 'Europa/Zurych' ,
  'Europe/Istanbul' => 'Europa/Istanbuł',
  'Europe/Kiev' => 'Europa/Kijów',
  'Europe/Uzhgorod' => 'Europa/Użgorod',
  'Europe/Zaporozhye' => 'Europa/Zaporozhye',
  'Europe/Simferopol' => 'Europa/Simferopol',
  'America/New_York' => 'Ameryka/Nowy Jork',
  'America/Chicago' =>'Ameryka/Chicago' ,
  'America/North_Dakota/Center' => 'Ameryka/Północna_Dakota/Center',
  'America/Denver' => 'Ameryka/Denver',
  'America/Los_Angeles' => 'Ameryka/Los_angeles',
  'America/Juneau' => 'Ameryka/Juneau',
  'America/Yakutat' => 'Ameryka/Yakutat',
  'America/Anchorage' => 'Ameryka/Anchorage',
  'America/Nome' =>'Ameryka/Nome' ,
  'America/Adak' => 'Ameryka/Adak',
  'Pacific/Honolulu' => 'Pacyfik/Honolulu',
  'America/Phoenix' => 'Ameryka/Phoenix',
  'America/Boise' => 'Ameryka/Boise',
  'America/Indiana/Indianapolis' => 'Ameryka/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'Ameryka/Indiana/Marengo',
  'America/Indiana/Knox' =>  'Ameryka/Indiana/Knox',
  'America/Indiana/Vevay' => 'Ameryka/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'Ameryka/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'Ameryka/Kentucky/Monticello' ,
  'America/Detroit' => 'Ameryka/Detroit',
  'America/Menominee' => 'Ameryka/Menominee',
  'America/St_Johns' => 'Ameryka/St_Johns',
  'America/Goose_Bay' => 'Ameryka/Goose_Bay' ,
  'America/Halifax' => 'Ameryka/Halifax',
  'America/Glace_Bay' =>'Ameryka/Glace_Bay' ,
  'America/Montreal' => 'Ameryka/Montreal',
  'America/Toronto' => 'Ameryka/Toronto',
  'America/Thunder_Bay' => 'Ameryka/Thunder_Bay' ,
  'America/Nipigon' => 'Ameryka/Nipigon',
  'America/Rainy_River' => 'Ameryka/Rainy_River',
  'America/Winnipeg' => 'Ameryka/Winnipeg',
  'America/Regina' => 'Ameryka/Regina',
  'America/Swift_Current' => 'Ameryka/Swift_Current',
  'America/Edmonton' =>  'Ameryka/Edmonton',
  'America/Vancouver' => 'Ameryka/Vancouver',
  'America/Dawson_Creek' => 'Ameryka/Dawson_Creek',
  'America/Pangnirtung' => 'Ameryka/Pangnirtung'  ,
  'America/Iqaluit' => 'Ameryka/Iqaluit' ,
  'America/Coral_Harbour' => 'Ameryka/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'Ameryka/Rankin_Inlet',
  'America/Cambridge_Bay' => 'Ameryka/Cambridge_Bay',
  'America/Yellowknife' => 'Ameryka/Yellowknife',
  'America/Inuvik' =>'Ameryka/Inuvik' ,
  'America/Whitehorse' => 'Ameryka/Whitehorse' ,
  'America/Dawson' => 'Ameryka/Dawson',
  'America/Cancun' => 'Ameryka/Cancun',
  'America/Merida' => 'Ameryka/Merida',
  'America/Monterrey' => 'Ameryka/Monterrey',
  'America/Mexico_City' => 'Ameryka/Meksyk',
  'America/Chihuahua' => 'Ameryka/Chihuahua',
  'America/Hermosillo' => 'Ameryka/Hermosillo',
  'America/Mazatlan' => 'Ameryka/Mazatlan',
  'America/Tijuana' => 'Ameryka/Tijuana',
  'America/Anguilla' => 'Ameryka/Anguilla',
  'America/Antigua' => 'Ameryka/Antigua',
  'America/Nassau' =>'Ameryka/Nassau' ,
  'America/Barbados' => 'Ameryka/Barbados',
  'America/Belize' => 'Ameryka/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermudy',
  'America/Cayman' => 'Ameryka/Kajmany',
  'America/Costa_Rica' => 'Ameryka/Costa_Rica',
  'America/Havana' => 'Ameryka/Havana',
  'America/Dominica' => 'Ameryka/Dominika',
  'America/Santo_Domingo' => 'Ameryka/Santo_Domingo',
  'America/El_Salvador' => 'Ameryka/El_Salvador',
  'America/Grenada' => 'Ameryka/Grenada',
  'America/Guadeloupe' => 'Ameryka/Guadeloupe',
  'America/Guatemala' => 'Ameryka/Gwatemali',
  'America/Port-au-Prince' => 'Ameryka/Port-au-Prince',
  'America/Tegucigalpa' => 'Ameryka/Tegucigalpa',
  'America/Jamaica' => 'Ameryka/Jamajka',
  'America/Martinique' => 'Ameryka/Martynika',
  'America/Montserrat' => 'Ameryka/Montserrat',
  'America/Managua' => 'Ameryka/Managua',
  'America/Panama' => 'Ameryka/Panama',
  'America/Puerto_Rico' =>'Ameryka/Puerto_Rico' ,
  'America/St_Kitts' => 'Ameryka/St_Kitts',
  'America/St_Lucia' => 'Ameryka/St_Lucia',
  'America/Miquelon' => 'Ameryka/Miquelon',
  'America/St_Vincent' => 'Ameryka/St_Vincent',
  'America/Grand_Turk' => 'Ameryka/Grand_Turk',
  'America/Tortola' => 'Ameryka/Tortola',
  'America/St_Thomas' => 'Ameryka/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'Ameryka/Argentyna/Buenos_Aires',
  'America/Argentina/Cordoba' => 'Ameryka/Argentyna/Cordoba',
  'America/Argentina/Tucuman' => 'Ameryka/Argentyna/Tucuman',
  'America/Argentina/La_Rioja' => 'Ameryka/Argentyna/La_Rioja',
  'America/Argentina/San_Juan' => 'Ameryka/Argentyna/San_Juan',
  'America/Argentina/Jujuy' => 'Ameryka/Argentyna/Jujuy',
  'America/Argentina/Catamarca' => 'Ameryka/Argentyna/Catamarca',
  'America/Argentina/Mendoza' => 'Ameryka/Argentyna/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'Ameryka/Argentyna/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'Ameryka/Argentyna/Ushuaia',
  'America/Aruba' => 'Ameryka/Aruba',
  'America/La_Paz' => 'Ameryka/La_Paz',
  'America/Noronha' => 'Ameryka/Noronha',
  'America/Belem' => 'Ameryka/Belem',
  'America/Fortaleza' => 'Ameryka/Fortaleza',
  'America/Recife' => 'Ameryka/Recife',
  'America/Araguaina' => 'Ameryka/Araguaina',
  'America/Maceio' => 'Ameryka/Maceio',
  'America/Bahia' => 'Ameryka/Bahia',
  'America/Sao_Paulo' => 'Ameryka/Sao_Paulo',
  'America/Campo_Grande' => 'Ameryka/Campo_Grande',
  'America/Cuiaba' => 'Ameryka/Cuiaba',
  'America/Porto_Velho' => 'Ameryka/Porto_Velho',
  'America/Boa_Vista' => 'Ameryka/Boa_Vista',
  'America/Manaus' => 'Ameryka/Manaus',
  'America/Eirunepe' => 'Ameryka/Eirunepe',
  'America/Rio_Branco' => 'Ameryka/Rio_Branco',
  'America/Santiago' => 'Ameryka/Santiago',
  'Pacific/Easter' => 'Pacyfik/Wyspa_Wielkanocna' ,
  'America/Bogota' => 'Ameryka/Bogota',
  'America/Curacao' => 'Ameryka/Curacao',
  'America/Guayaquil' => 'Ameryka/Guayaquil',
  'Pacific/Galapagos' => 'Pacyfik/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantyk/Stanley',
  'America/Cayenne' => 'Ameryka/Kajenna',
  'America/Guyana' => 'Ameryka/Gujana',
  'America/Asuncion' => 'Ameryka/Asuncion',
  'America/Lima' => 'Ameryka/Lima',
  'Atlantic/South_Georgia' => 'Atlantyk/Georgia_Południowa_i_Sandwich_Południowy',
  'America/Paramaribo' => 'Ameryka/Paramaribo',
  'America/Port_of_Spain' => 'Ameryka/Port_of_Spain',
  'America/Montevideo' => 'Ameryka/Montevideo',
  'America/Caracas' => 'Ameryka/Caracas',
  );

  $app_list_strings['moduleList']['Sugar_Favorites'] = 'Ulubione';
  $app_list_strings['eapm_list']= array(
    'Sugar'=>'SuiteCRM',
    'WebEx'=>'WebEx',
    'GoToMeeting'=>'Idź na spotkanie',
    'IBMSmartCloud'=>'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook'=>'Facebook',
    'Twitter'=>'Twitter',
  );
  $app_list_strings['eapm_list_import']= array(
  	'Google' => 'Kontakty Google',
  );
$app_list_strings['eapm_list_documents']= array(
  	'Google' => 'Dokumenty Google',
  );
	$app_list_strings['token_status'] = array(
        1 => 'Żądanie',
        2 => 'Dostęp',
        3 => 'Nieprawidłowy',
    );

$app_list_strings ['emailTemplates_type_list'] = array (
    '' => '' ,
    'campaign' => 'Kampania' ,
    'email' => 'Wiadomości Email',
  );

$app_list_strings ['emailTemplates_type_list_campaigns'] = array (
    '' => '' ,
    'campaign' => 'Kampania' ,
  );

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array (
    '' => '' ,
    'campaign' => 'Kampania' ,
    'email' => 'Wiadomości Email',
  );
$app_strings ['documentation'] = array (
    'LBL_DOCS' => 'Dokumentacja',
    'ULT' => '02_Sugar_Ultimate',
	'ENT' => '02_Sugar_Enterprise',
	'CORP' => '03_Sugar_Corporate',
	'PRO' => '04_Sugar_Professional',
	'COM' => '05_Sugar_Community_Edition'
);


// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Baza Wiedzy';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB Categories';
$app_list_strings['aok_status_list']['Draft'] = 'W Roboczych';
$app_list_strings['aok_status_list']['Expired'] = 'Przedawniony';
$app_list_strings['aok_status_list']['In_Review'] = 'W trakcie rozpatrzania';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Prywatny';
$app_list_strings['aok_status_list']['published_public'] = 'Publiczny';


$app_list_strings['moduleList']['Reminders'] = 'Reminders';
$app_list_strings['moduleListSingular']['Reminders'] = 'Reminder';

$app_list_strings['moduleList']['Reminders_Invitees'] = 'Reminders_Invitees';
$app_list_strings['moduleListSingular']['Reminders_Invitees'] = 'Reminder_Invitee';

$app_list_strings['moduleList']['FP_events'] = 'Zdarzenia';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokalizacja';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Zaproszenie';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nie zaproszony';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Udział';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Brak udziału';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Zaakceptowany';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Odrzucony';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Brak odpowiedzi';

$app_strings['LBL_STATUS_EVENT'] = 'Status Zaproszenia';
$app_strings['LBL_ACCEPT_STATUS'] = 'Przyjęty Status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Strona Bieżąca';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Cała lista';
$app_strings['LBL_LISTVIEW_NONE'] = 'Odznacz wszystko';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Wykaz Spotkań';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Zdarzenia związane ze zgłoszeniami';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Aktualizacje zgłoszeń';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Zdarzenia związane ze zgłoszeniami';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Aktualizacje zgłoszeń';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array (
        'Open' => 'Opened',
        'Closed' => 'Zamknięty',
    );

$app_list_strings['case_status_default_key'] = 'Nowy';
$app_list_strings['case_status_dom'] =
    array (
        'Open_New' => 'Nowy',
        'Open_Assigned' => 'Przypisany',
        'Closed_Closed' => 'Zamknięty',
        'Open_Pending Input' => 'Oczekujący',
        'Closed_Rejected' => 'Odrzucony',
        'Closed_Duplicate' => 'Duplikat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Pojedynczy użytkownik',
        'Account' => 'Konto użytkownika',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'Użyć AOP Domyślnych',
    'singleUser' => 'Pojedynczy użytkownik',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Pierwszy Wolny',
    'random' => 'Dowolny',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Raporty';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Warunki Raportu';
$app_list_strings['moduleList']['AOR_Charts'] = 'Wykresy raportu';
$app_list_strings['moduleList']['AOR_Fields'] = 'Pola raportu';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Raporty zaplanowane';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Jest równe';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Jest różne od';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Większe niż';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mniejsze niż';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Większe lub równe ';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mniejsze lub równe';
$app_list_strings['aor_operator_list']['Contains'] = 'Zawiera';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Zaczyna się z';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Kończy się na';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'i';
$app_list_strings['aor_condition_operator_list']['OR'] = 'lub';
$app_list_strings['aor_condition_type_list']['Value'] = 'Wartość';
$app_list_strings['aor_condition_type_list']['Field'] = 'Pole';
$app_list_strings['aor_condition_type_list']['Date'] = 'Data';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Jeden z';
$app_list_strings['aor_condition_type_list']['Period'] = 'Okres';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Bieżący użytkownik';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuty';
$app_list_strings['aor_date_type_list']['hour'] = 'Godziny';
$app_list_strings['aor_date_type_list']['day'] = 'Dni';
$app_list_strings['aor_date_type_list']['week'] = 'Tygodnie';
$app_list_strings['aor_date_type_list']['month'] = 'Miesiące';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Godziny pracy';
$app_list_strings['aor_date_options']['now'] = 'Teraz';
$app_list_strings['aor_date_options']['field'] = 'To pole';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Rosnąco';
$app_list_strings['aor_sort_operator']['DESC'] = 'Malejąco';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Ilość';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Suma';
$app_list_strings['aor_function_list']['AVG'] = 'Średnia';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Ilość';
$app_list_strings['aor_total_options']['SUM'] = 'Suma';
$app_list_strings['aor_total_options']['AVG'] = 'Średnia';
$app_list_strings['aor_chart_types']['bar'] = 'Wykres słupkowy';
$app_list_strings['aor_chart_types']['line'] = 'Wykres liniowy';
$app_list_strings['aor_chart_types']['pie'] = 'Wykres kołowy';
$app_list_strings['aor_chart_types']['radar'] = 'Wykres radarowy';
$app_list_strings['aor_chart_types']['polar'] = 'Wykres polarny';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Miesięczny';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Tygodniowo';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Dziennie';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktywny';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Nieaktywny';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Wiadomości Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Użytkownik';
$app_list_strings['aor_email_type_list']['Users'] = 'Użytkownicy';
$app_list_strings['aor_assign_options']['all'] = 'Wszyscy użytkownicy';
$app_list_strings['aor_assign_options']['role'] = 'Wszyscy użytkownicy w roli';
$app_list_strings['aor_assign_options']['security_group'] = 'Wszyscy użytkownicy w grupie zabezpieczeń';
$app_list_strings['date_time_period_list']['today'] = 'Dziś';
$app_list_strings['date_time_period_list']['yesterday'] = 'Wczoraj';
$app_list_strings['date_time_period_list']['this_week'] = 'Ten Tydzień';
$app_list_strings['date_time_period_list']['last_week'] = 'W ostatnim tygodniu';
$app_list_strings['date_time_period_list']['last_month'] = 'Ostatni Miesiąc';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ten kwartał';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Ostatni kwartał';
$app_list_strings['date_time_period_list']['this_year'] = 'Ten Rok';
$app_list_strings['date_time_period_list']['last_year'] = 'Ubiegły Rok';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'na';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'na';
$app_strings['LBL_CRON_AT'] = 'w';
$app_strings['LBL_CRON_RAW'] = 'Zaawansowane';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Godzina';
$app_strings['LBL_CRON_DAY'] = 'Dniowy';
$app_strings['LBL_CRON_MONTH'] = 'Miesięczny';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Dziennie';
$app_strings['LBL_CRON_WEEKLY'] = 'Tygodniowo';
$app_strings['LBL_CRON_MONTHLY'] = 'Miesięczny';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontrakty';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Faktury';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'Szablony PDF';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Kategorie produktów';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkty';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Pozycje';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Elementy pozycji';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Zamówienia';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analityk';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurencja';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Inwestor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Prasa';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Szansa';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Pośrednik';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Inny';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'W Roboczych';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negocjacje';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Dostarczone';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Wstrzymane';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Potwierdzone';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Zaakceptowane';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Odrzucone';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Zamknięte Niedostępne';
$app_list_strings['quote_term_dom']['Net 15'] = 'Netto 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Netto 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Zaakceptowany';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Nie zaakceptowany';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'proc';
$app_list_strings['discount_list']['Amount'] = 'Ilość';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analityk';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurencja';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Inwestor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Prasa';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Szansa';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Pośrednik';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Inny';
$app_list_strings['invoice_status_dom']['Paid'] = 'Opłacone';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Brak płatności';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Anulowane';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Niezafakturowane';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Zafakturowane';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptopy';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktopy';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Dobry';
$app_list_strings['product_type_dom']['Service'] = 'Usługi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Zamówienia';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Faktury';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontrakty';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Zamówienia';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Faktury';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontrakty';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Konta';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakty';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potencjalni Klienci';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nie rozpoczęte';
$app_list_strings['contract_status_list']['In Progress'] = 'W realizacji';
$app_list_strings['contract_status_list']['Signed'] = 'Podpisane';
$app_list_strings['contract_type_list']['Type'] = 'Typ';
$app_strings['LBL_GENERATE_LETTER'] = 'Wygeneruj list';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Proszę wybrać szablon';
$app_strings['LBL_NO_TEMPLATE'] = 'Błąd\nNie znaleziono szablonu.\nProszę przejść do Szablonów PDF i utworzyć szablon.';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Przepływ pracy';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Warunki przepływu pracy';
$app_list_strings['moduleList']['AOW_Processed'] = 'Audyt procesu';
$app_list_strings['moduleList']['AOW_Actions'] = 'Przepływ pracy - działania';
$app_list_strings['aow_status_list']['Active'] = 'Aktywny';
$app_list_strings['aow_status_list']['Inactive'] = 'Nieaktywny';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Jest równe';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Jest różne od';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Większe niż';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mniejsze niż';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Większe lub równe ';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mniejsze lub równe';
$app_list_strings['aow_operator_list']['Contains'] = 'Zawiera';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Zaczyna się z';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Kończy się na';
$app_list_strings['aow_operator_list']['is_null'] = 'Jest pusty';
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
$app_list_strings['aow_process_status_list']['Complete'] = 'Zakończ';
$app_list_strings['aow_process_status_list']['Running'] = 'Uruchomiony';
$app_list_strings['aow_process_status_list']['Pending'] = 'Oczekujący';
$app_list_strings['aow_process_status_list']['Failed'] = 'Nieudany';
$app_list_strings['aow_condition_operator_list']['And'] = 'i';
$app_list_strings['aow_condition_operator_list']['OR'] = 'lub';
$app_list_strings['aow_condition_type_list']['Value'] = 'Wartość';
$app_list_strings['aow_condition_type_list']['Field'] = 'Pole';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Jakakolwiek zmiana';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'W SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Jeden z';
$app_list_strings['aow_action_type_list']['Value'] = 'Wartość';
$app_list_strings['aow_action_type_list']['Field'] = 'Pole';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Algorytm karuzelowy (Round-Robin)';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Najmniej zajęty';
$app_list_strings['aow_action_type_list']['Random'] = 'Dowolny';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Wartość';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Pole';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuty';
$app_list_strings['aow_date_type_list']['hour'] = 'Godziny';
$app_list_strings['aow_date_type_list']['day'] = 'Dni';
$app_list_strings['aow_date_type_list']['week'] = 'Tygodnie';
$app_list_strings['aow_date_type_list']['month'] = 'Miesiące';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Godziny pracy';
$app_list_strings['aow_date_options']['now'] = 'Teraz';
$app_list_strings['aow_date_options']['today'] = 'Dziś';
$app_list_strings['aow_date_options']['field'] = 'To pole';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Wszyscy użytkownicy';
$app_list_strings['aow_assign_options']['role'] = 'Wszyscy użytkownicy w roli';
$app_list_strings['aow_assign_options']['security_group'] = 'Wszyscy użytkownicy w grupie zabezpieczeń';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Wiadomości Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'E-mail Rekordu';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Powiązane pole';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Użytkownik';
$app_list_strings['aow_email_type_list']['Users'] = 'Użytkownicy';
$app_list_strings['aow_email_to_list']['to'] = 'Do';
$app_list_strings['aow_email_to_list']['cc'] = 'Kopia';
$app_list_strings['aow_email_to_list']['bcc'] = 'Ukryta kopia';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Wszystkie rekordy';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nowe rekordy';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Zmodyfikowane rekordy';
$app_list_strings['aow_run_when_list']['Always'] = 'Zawsze';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Tylko Przy Zapisie';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Tylko w Scheduler\'ze';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Szablony Projektu';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Szablony Zadań';
$app_list_strings['relationship_type_list']['FS'] = 'Koniec - początek';
$app_list_strings['relationship_type_list']['SS'] = 'Początek - początek';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Dni wolne';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kontakty';
$app_list_strings['holiday_resource_dom']['Users'] = 'Użytkownicy';
$app_list_strings['duration_unit_dom']['Days'] = 'Dni';
$app_list_strings['duration_unit_dom']['Hours'] = 'Godziny';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Zobaczy Wykres Gantta';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Zobaczy Wykres Gantta';
$app_strings['LBL_CREATE_PROJECT'] = 'Utwórz projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';
$app_strings['LBL_MAPS'] = 'Mapy';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Długość geograficzna';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Szerokości geograficznej';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status geokodu';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adres';
$app_strings['LBL_BUG_FIX'] = 'Poprawka Błędu';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mapy';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Znaczniki mapy';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Obszary mapy';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Pamięć podręczna mapy adresów';

$app_list_strings['map_unit_type_list']['mi'] = 'Mile';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometry';

$app_list_strings['map_module_type_list']['Accounts'] = 'Konta';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakty';
$app_list_strings['map_module_type_list']['Cases'] = 'Zgłoszenia';
$app_list_strings['map_module_type_list']['Leads'] = 'Potencjalni Klienci';
$app_list_strings['map_module_type_list']['Meetings'] = 'Spotkania';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Okazje';
$app_list_strings['map_module_type_list']['Project'] = 'Projekty';
$app_list_strings['map_module_type_list']['Prospects'] = 'Targety';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Konta';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakty';
$app_list_strings['map_relate_type_list']['Cases'] = 'Zgłoszenia';
$app_list_strings['map_relate_type_list']['Leads'] = 'Potencjalny Klient';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Spotkania';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Okazje';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekty';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Targety';

$app_list_strings['marker_image_list']['accident'] = 'Wypadek';
$app_list_strings['marker_image_list']['administration'] = 'Administracja';
$app_list_strings['marker_image_list']['agriculture'] = 'Rolnictwo';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Mały samolot';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Turystyka lotnicza';
$app_list_strings['marker_image_list']['airport'] = 'Lotnisko';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatr';
$app_list_strings['marker_image_list']['apartment'] = 'Apartament';
$app_list_strings['marker_image_list']['aquarium'] = 'Akwarium';
$app_list_strings['marker_image_list']['arch'] = 'Łuk';
$app_list_strings['marker_image_list']['atm'] = 'Bankomat';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Funt';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plaża';
$app_list_strings['marker_image_list']['beautiful'] = 'Piękny';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parking rowerowy';
$app_list_strings['marker_image_list']['big_city'] = 'Duże miasto';
$app_list_strings['marker_image_list']['bridge'] = 'Most';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Most Nowoczesny';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Kolejka linowa';
$app_list_strings['marker_image_list']['car'] = 'Samochód';
$app_list_strings['marker_image_list']['car_rental'] = 'Wypożyczalnia samochodów';
$app_list_strings['marker_image_list']['carrepair'] = 'Warsztat samochodowy';
$app_list_strings['marker_image_list']['castle'] = 'Zamek';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedra';
$app_list_strings['marker_image_list']['chapel'] = 'Kaplica';
$app_list_strings['marker_image_list']['church'] = 'Kościół';
$app_list_strings['marker_image_list']['city_square'] = 'Rynek';
$app_list_strings['marker_image_list']['cluster'] = 'Grupa';
$app_list_strings['marker_image_list']['cluster_2'] = 'Grupa 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Grupa 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Grupa 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Grupa 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kawa';
$app_list_strings['marker_image_list']['community_centre'] = 'Ośrodek Kultury';
$app_list_strings['marker_image_list']['company'] = 'Firma';
$app_list_strings['marker_image_list']['conference'] = 'Uczestnik Konferencji';
$app_list_strings['marker_image_list']['construction'] = 'Budownictwo';
$app_list_strings['marker_image_list']['convenience'] = 'Sklep Spożywczy';
$app_list_strings['marker_image_list']['court'] = 'Sąd';
$app_list_strings['marker_image_list']['cruise'] = 'Rejs';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Kantor';
$app_list_strings['marker_image_list']['customs'] = 'Urząd Celny';
$app_list_strings['marker_image_list']['cycling'] = 'Jazda na rowerze';
$app_list_strings['marker_image_list']['dam'] = 'Tama';
$app_list_strings['marker_image_list']['days_dim'] = 'Dni Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Dni Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Dni Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Dni Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Dni Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Dni Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Dnie Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Dni Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Dni Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Dni Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Dni Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Dni Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Dni Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Dnie Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Dni Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Dni Van';
$app_list_strings['marker_image_list']['days_vie'] = 'Dni Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentysta';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Dom Towarowy';
$app_list_strings['marker_image_list']['disability'] = 'Niepełnosprawność';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking dla niepełnosprawnych';
$app_list_strings['marker_image_list']['doctor'] = 'Lekarz';
$app_list_strings['marker_image_list']['dog_leash'] = 'Smycz dla Psa';
$app_list_strings['marker_image_list']['down'] = 'W dół';
$app_list_strings['marker_image_list']['down_left'] = 'Dół lewo';
$app_list_strings['marker_image_list']['down_right'] = 'Dół prawo';
$app_list_strings['marker_image_list']['down_then_left'] = 'W doł, a następnie w lewo';
$app_list_strings['marker_image_list']['down_then_right'] = 'W dół, a następnie w prawo';
$app_list_strings['marker_image_list']['drugs'] = 'Leki';
$app_list_strings['marker_image_list']['elevator'] = 'Winda';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasada';
$app_list_strings['marker_image_list']['expert'] = 'Ekspert';
$app_list_strings['marker_image_list']['factory'] = 'Fabryka';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Osypiska skalne';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festiwal';
$app_list_strings['marker_image_list']['fjord'] = 'Fiord';
$app_list_strings['marker_image_list']['forest'] = 'Las';
$app_list_strings['marker_image_list']['fountain'] = 'Fontanna';
$app_list_strings['marker_image_list']['friday'] = 'Piątek';
$app_list_strings['marker_image_list']['garden'] = 'Ogród';
$app_list_strings['marker_image_list']['gas_station'] = 'Stacja benzynowa';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzer';
$app_list_strings['marker_image_list']['gifts'] = 'Prezenty';
$app_list_strings['marker_image_list']['gourmet'] = 'Smakołyki';
$app_list_strings['marker_image_list']['grocery'] = 'Sklep spożywczy';
$app_list_strings['marker_image_list']['hairsalon'] = 'Fryzjer';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Autostrada';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Dzielnica Zabytkowa';
$app_list_strings['marker_image_list']['home'] = 'Strona Główna';
$app_list_strings['marker_image_list']['hospital'] = 'Szpital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5-gwiazdkowy';
$app_list_strings['marker_image_list']['info'] = 'Informacja';
$app_list_strings['marker_image_list']['justice'] = 'Sąd';
$app_list_strings['marker_image_list']['lake'] = 'Jezioro';
$app_list_strings['marker_image_list']['laundromat'] = 'Pralnia samoobsługowa';
$app_list_strings['marker_image_list']['left'] = 'W lewo';
$app_list_strings['marker_image_list']['left_then_down'] = 'W lewo, a następnie w dół';
$app_list_strings['marker_image_list']['left_then_up'] = 'W lewo, a następnie w górę';
$app_list_strings['marker_image_list']['library'] = 'Biblioteka';
$app_list_strings['marker_image_list']['lighthouse'] = 'Latarnia';
$app_list_strings['marker_image_list']['liquor'] = 'Monopolowy';
$app_list_strings['marker_image_list']['lock'] = 'Blokada';
$app_list_strings['marker_image_list']['main_road'] = 'Główna droga';
$app_list_strings['marker_image_list']['massage'] = 'Masaż';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Wieża GSM';
$app_list_strings['marker_image_list']['modern_tower'] = 'Nowoczesna wieża';
$app_list_strings['marker_image_list']['monastery'] = 'Klasztor';
$app_list_strings['marker_image_list']['monday'] = 'Poniedziałek';
$app_list_strings['marker_image_list']['monument'] = 'Pomnik';
$app_list_strings['marker_image_list']['mosque'] = 'Meczet';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocykl';
$app_list_strings['marker_image_list']['museum'] = 'Muzeum';
$app_list_strings['marker_image_list']['music_live'] = 'Muzyka na żywo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Pompa oleju';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Pałac';
$app_list_strings['marker_image_list']['panoramic'] = 'Punkt widokowy';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parkuj i jedź';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Zdjęcie';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Nieodwiedzone miejsca';
$app_list_strings['marker_image_list']['places_visited'] = 'Odwiedzone miejsca';
$app_list_strings['marker_image_list']['playground'] = 'Plac zabaw';
$app_list_strings['marker_image_list']['police'] = 'Policja';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Poczta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Słup energetyczny';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrownia';
$app_list_strings['marker_image_list']['power_substation'] = 'Podstacja energetyczna';
$app_list_strings['marker_image_list']['public_art'] = 'Sztuka Publiczna';
$app_list_strings['marker_image_list']['rain'] = 'Deszcz';
$app_list_strings['marker_image_list']['real_estate'] = 'Nieruchomości';
$app_list_strings['marker_image_list']['regroup'] = 'Przegrupowanie';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restauracja';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restauracja afrykańska';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restauracja grillowa';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bar';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restauracja chińska';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restauracja rybna';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restauracja z Rybą i Frytkami';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restauracja dla smakoszy';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restauracja grecka';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restauracja indiańska';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restauracja włoska';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restauracja japońska';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restauracja kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restauracja koreańska';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restauracja śródziemnomorska';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restauracja meksykańska';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restauracja romantyczna';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restauracja tajska';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restauracja turecka';
$app_list_strings['marker_image_list']['right'] = 'W prawo';
$app_list_strings['marker_image_list']['right_then_down'] = 'W prawo potem w dół';
$app_list_strings['marker_image_list']['right_then_up'] = 'W prawo potem w górę';
$app_list_strings['marker_image_list']['satursday'] = 'Sobota';
$app_list_strings['marker_image_list']['school'] = 'Szkoła';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centrum handlowe';
$app_list_strings['marker_image_list']['shore'] = 'Brzeg';
$app_list_strings['marker_image_list']['sight'] = 'Widok';
$app_list_strings['marker_image_list']['small_city'] = 'Miasteczko';
$app_list_strings['marker_image_list']['snow'] = 'Śnieg';
$app_list_strings['marker_image_list']['spaceport'] = 'Centrum lotów kosmicznych';
$app_list_strings['marker_image_list']['speed_100'] = 'Prędkość 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Prędkość 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Prędkość 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Prędkość 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Prędkość 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Prędkość 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Prędkość 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Prędkość 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Prędkość 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Prędkość 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Prędkość 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Prędkość 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Próg zwalniający';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Statua';
$app_list_strings['marker_image_list']['steam_train'] = 'Pociąg parowy';
$app_list_strings['marker_image_list']['stop'] = 'Znak STOP';
$app_list_strings['marker_image_list']['stoplight'] = 'Światła';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Niedziela';
$app_list_strings['marker_image_list']['sunday'] = 'Niedziela';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksówka';
$app_list_strings['marker_image_list']['taxiway'] = 'Pas dla taksówek';
$app_list_strings['marker_image_list']['teahouse'] = 'Herbaciarnia';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Świątynia Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Taras';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Teatr';
$app_list_strings['marker_image_list']['theme_park'] = 'Park tematyczny';
$app_list_strings['marker_image_list']['thursday'] = 'Czwartek';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Punkt opłat';
$app_list_strings['marker_image_list']['tower'] = 'Wieża';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Fotoradar';
$app_list_strings['marker_image_list']['train'] = 'Pociąg';
$app_list_strings['marker_image_list']['tram'] = 'Tramwaj';
$app_list_strings['marker_image_list']['truck'] = 'Ciężarówka';
$app_list_strings['marker_image_list']['tuesday'] = 'Wtorek';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Skręć w lewo';
$app_list_strings['marker_image_list']['turn_right'] = 'Skręć w prawo';
$app_list_strings['marker_image_list']['university'] = 'Uniwersytet';
$app_list_strings['marker_image_list']['up'] = 'W górę';
$app_list_strings['marker_image_list']['up_left'] = 'W górę i w lewo';
$app_list_strings['marker_image_list']['up_right'] = 'W górę i w prawo';
$app_list_strings['marker_image_list']['up_then_left'] = 'W górę, potem w lewo';
$app_list_strings['marker_image_list']['up_then_right'] = 'W górę, potem w prawo';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Wideo';
$app_list_strings['marker_image_list']['villa'] = 'Willa';
$app_list_strings['marker_image_list']['water'] = 'Woda';
$app_list_strings['marker_image_list']['waterfall'] = 'Wodospad';
$app_list_strings['marker_image_list']['watermill'] = 'Młyn wodny';
$app_list_strings['marker_image_list']['waterpark'] = 'Park wodny';
$app_list_strings['marker_image_list']['watertower'] = 'Wieża wodna';
$app_list_strings['marker_image_list']['wednesday'] = 'Środa';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Elektrownia wiatrowa';
$app_list_strings['marker_image_list']['windmill'] = 'Młyn';
$app_list_strings['marker_image_list']['winery'] = 'Winiarnia';
$app_list_strings['marker_image_list']['work_office'] = 'Biuro';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Światowego Dziedzictwa UNESCO';
$app_list_strings['marker_image_list']['zoo'] = 'ZOO';


//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Poza biurem';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Na spotkaniu';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Przełóż';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Wprowadź informację o zmianie';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Data:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Powód:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Wybierz poprawną datę';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Wybierz przyczynę';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Przełóż';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historia prób połączeń';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Próby połączenia';

//SecurityGroups
$app_list_strings["moduleList"]["SecurityGroups"] = 'Zarządzanie bezpieczeństwem Grupy';
$app_strings['LBL_LOGIN_AS'] = "Zaloguj się jako";
$app_strings['LBL_LOGOUT_AS'] = "Wyloguj jako";
$app_strings['LBL_SECURITYGROUP'] = 'Grupa bezpieczeństwa';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Nazwa użytkownika - Facebook';
$app_strings['LBL_TWITTER_USER_C'] = 'Nazwa użytkownika - Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Szczegóły Kanału Społecznościowego ';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtr';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Utwórz Konto';
$app_strings['LBL_QUICK_CONTACT'] = 'Utwórz Kontakt';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Utwórz Szansę Sprzedaży';
$app_strings['LBL_QUICK_LEAD'] = 'Utwórz Potencjalnego Klienta';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Utwórz Dokument';
$app_strings['LBL_QUICK_CALL'] = 'Zaplanuj Rozmowę';
$app_strings['LBL_QUICK_TASK'] = 'Utwórz Zadanie';
$app_strings['LBL_COLLECTION_TYPE'] = 'Typ';

$app_strings['LBL_ADD_TAB'] = 'Dodaj Zakładkę';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Pulpit SuiteCRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Wpisz nazwę pulpitu';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Wybierz liczbę kolumn';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Czy na pewno chcesz usunąć';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'pulpit?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Dodaj stronę pulpitu';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Usuń aktualną stronę pulpitu';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Zmień nazwę strony pulpitu';

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Odkryj SuiteCRM';

$app_list_strings['collection_temp_list'] = array ( 'Tasks' => 'Zadania', 'Meetings' => 'Spotkania', 'Calls' => 'Rozmowy Telefoniczne', 'Notes' => 'Notatki', 'Emails' => 'Wiadomości Email' );

?>
