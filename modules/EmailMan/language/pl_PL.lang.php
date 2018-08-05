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

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Wyślij Datę',
	'LBL_IN_QUEUE'								=> 'W kolejce?',
	'LBL_IN_QUEUE_DATE'							=> 'Data kolejkowania',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Tylko cyfry są dozwolone przy określaniu Liczby wiadomości wysyłanych w serii',

	'LBL_ATTACHMENT_AUDIT'						=> ' zostały wysłane. Nie zostały zduplikowane lokalnie, by nie zajmować miejsca na dysku.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfiguruj',
	'LBL_CUSTOM_LOCATION'						=> 'Definiowane przez użytkownika',
	'LBL_DEFAULT_LOCATION'						=> 'Domyślne',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Dodaje Stopkę o niejawności do każdej Wiadomości',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Treść Stopki o niejawności',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Uwaga: Ta wiadomość jest skierowana wyłączenie do użytku określonych odbiorców i może zawierać treści przeznaczone tylko dla nich. Jakiekolwiek nieautoryzowane ujawnianie, używanie, lub dystrybuowanie tych treści jest zabrionione. Jeśli nie jesteś adresatem tej wiadomości, usuń jej wszystkie kopie i powiadom nadawcę, aby poprawił swoją książkę adresową. Dziekujemy',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Komponuj wiadomości pocztowe w tym zestawie znaków',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Napisz wiadomość, korzystając z tego klienta poczty',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Usuń połączone notatki i załączniki połączone z usuniętymi Wiadomościami Pocztowymi',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Wypełnij domyślne ustawienia dla Gmail',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Liczba wiadomości wysłanych w serii:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Włącz SMTP przez SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Użyj domyślnego adresu email',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Konfiguracja poczty wychodzącej',
	'LBL_EMAILS_PER_RUN'						=> 'Liczba wiadomości wysyłanych w serii:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Kampania reklamowa',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Trwające',
	'LBL_LIST_FORM_TITLE'						=> 'Oczekujące',
	'LBL_LIST_FROM_EMAIL'						=> 'Adres nadawcy',
	'LBL_LIST_FROM_NAME'						=> 'Nazwa nadawcy',
	'LBL_LIST_IN_QUEUE'							=> 'W trakcie',
	'LBL_LIST_MESSAGE_NAME'						=> 'Wiadomość marketingowa',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Adres odbiorcy',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nazwa odbiorcy',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Próba wysłania',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Wysłane O',
	'LBL_LIST_USER_NAME'						=> 'Nazwa użytkownika',
	'LBL_LOCATION_ONLY'							=> 'Lokalizacja',
	'LBL_LOCATION_TRACK'						=> 'Lokalizacja pliku śledzenia trwania kampanii (jak campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Zachowaj kopię wiadomości kampanii:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Czy chcesz zachować kompletną kopię wiadomości wysłanych podczas wszystkich kampani? <bold>Zaleca się pozostawienie opcji w domyślnym ustawieniu - nie</bold>. Wybierając nie, zachowane zostaną wzory i niezbędne zmienne wiadomości, aby odtworzyć indywidualną wiadomość.',
	'LBL_MAIL_SENDTYPE'							=> 'Agenta przekazywania poczty MTA:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Użyj uwierzytelniania SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Hasło:',
	'LBL_MAIL_SMTPPORT'							=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Mail Server:',
	'LBL_MAIL_SMTPUSER'							=> 'Nazwa użytkownika SMTP:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Wybierz operatora e-mail:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Hasło',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail użytkonika',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Hasło',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Adres e-mail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Hasło',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Nazwa użytkownika',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Serwer',
	'LBL_EMAIL_LINK_TYPE'				=> 'Klient e-mail',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar klient poczty:</b> Wyślij e-mail za pomocą klienta poczty w aplikacji Sugar.<br><b>Zewnętrzny klient poczty:</b> Wyślij e-mail za pomocą klienta poczty poza aplikacją Sugar, takich jak Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing Id',
    'LBL_MODULE_ID'                             => 'Zarządzanie pocztą',
	'LBL_MODULE_NAME'							=> 'Masowa wysyłka',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Ustawienia wiadomości kampanii reklamowych',
	'LBL_MODULE_TITLE'							=> 'Zarządzanie kolejkowaniem masowej wysyłki',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Wysyłaj powiadomienie emailem, gdy rekordy są powiązane.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Adres "Od":',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nazwa "Od":',
	'LBL_NOTIFY_ON'								=> 'Powiadomienia włączone?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Wysyła powiadomienia domyślnie dla nowych Użytkowników?',
	'LBL_NOTIFY_TITLE'							=> 'Opcje powiadomień email',
	'LBL_OLD_ID'								=> 'Wcześniejszy Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opcje dla wiadomości wychodzących',
	'LBL_RELATED_ID'							=> 'Powiązany Id',
	'LBL_RELATED_TYPE'							=> 'Powiązany typ',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Zapisz źródło wiadomości wychodzących',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Przeprowadź poszukiwanie',
	'LBL_SEARCH_FORM_TITLE'						=> 'Przeszukaj oczekujące',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Pogdląd trwającej wysyłki',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Pogdląd oczekującej wysyłki',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Wartość zmiennej site_urlw pliku Config.php',
	'TXT_REMOVE_ME_ALT'							=> 'Aby usunąć siebie z listy wysyłkowej idź do',
	'TXT_REMOVE_ME_CLICK'						=> 'kliknij tutaj',
	'TXT_REMOVE_ME'								=> 'Aby usunąć siebie z tej listy wysyłkowej ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Czy wysłać powiadomienie z przydzielonego do użytkownika adresu?',

	'LBL_SECURITY_TITLE'						=> 'Ustawienia zabezpieczeń wiadomości pocztowych',
	'LBL_SECURITY_DESC'							=> 'Poniżej zaznacz elementy, które NIE powinny być dozwolone w poczcie przychodzącej, lub wyświetlane w Module Poczty.',
	'LBL_SECURITY_APPLET'						=> 'Znacznik apletu',
	'LBL_SECURITY_BASE'							=> 'Znacznik podstawowy',
	'LBL_SECURITY_EMBED'						=> 'Znacznik osadzony',
	'LBL_SECURITY_FORM'							=> 'Znacznik formularza',
	'LBL_SECURITY_FRAME'						=> 'Znacznik ramki',
	'LBL_SECURITY_FRAMESET'						=> 'Znacznik zestawu ramek',
	'LBL_SECURITY_IFRAME'						=> 'Znacznik iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Znacznik importu',
	'LBL_SECURITY_LAYER'						=> 'Znacznik warstwy',
	'LBL_SECURITY_LINK'							=> 'Znacznik linku',
	'LBL_SECURITY_OBJECT'						=> 'Znacznik obiektu',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Wybierz domyślne minimalne środki bezpieczeństwa Outlooka (błędy na prawidłowo wyświetlonej stronie).',
	'LBL_SECURITY_SCRIPT'						=> 'Znacznik skryptu',
	'LBL_SECURITY_STYLE'						=> 'Znacznik stylu',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Zaznacz wszystko',
	'LBL_SECURITY_XMP'							=> 'Znacznik Xmp',
    'LBL_YES'                                   => 'Tak',
    'LBL_NO'                                    => 'Nie',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Próba wysłania',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfiguracja domyślna serwera poczty wychodzącej do wysyłania powiadomień, w tym powiadomień obiegu informacji.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Zezwalaj użytkownikom na korzystanie z tego konta dla poczty wychodzącej:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Kiedy ta opcja jest zaznaczona, użytkownicy będą mogli wysyłać e-maile przy użyciu tego samego konta poczty wychodzącej które używane jest do wysyłania powiadomień systemowych i alertów. Jeśli opcja nie jest zaznaczona, użytkownicy mogą nadal korzystać z serwera poczty wychodzącej po podaniu swoich danych.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Po włączeniu tej opcji nazwisko i adres e-mail przydzielonych użytkowniów zostanie uwzględniony w polu Od wiadomości e-mail. Ta funkcja może nie działać z serwerami SMTP, które nie pozwalają wysyłanie z innego konta e-mail niż konto serwera.',
	'LBL_GMAIL_LOGO' => 'Gmail Logo' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail Logo' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange Logo' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Pomoc' /*for 508 compliance fix*/,
);

?>