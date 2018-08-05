<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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


$mod_strings = array(

    'LBL_ADD_MODULE' => 'Hinzufügen',
    'LBL_ADDRCITY' => 'Stadt',
    'LBL_ADDRCOUNTRY' => 'Land',
    'LBL_ADDRCOUNTRY_ID' => 'Länder ID',
    'LBL_ADDRSTATEPROV' => 'Bundesland',
    'LBL_ADMINISTRATION' => 'Konnektorverwaltung',
    'LBL_ADMINISTRATION_MAIN' => 'Konnektoreinstellungen',
    'LBL_AVAILABLE' => 'Verfügbar',
    'LBL_BACK' => '< Zurück',
    'LBL_COMPANY_ID' => 'Firmen ID',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Einige benötigte Felder wurden freigelassen. Fortfahren, um Änderungen zu speichern?',
    'LBL_CONNECTOR' => 'Konnektor',
    'LBL_CONNECTOR_FIELDS' => 'Konnektorfelder',
    'LBL_DATA' => 'Daten',
    'LBL_DEFAULT' => 'Standard',
    'LBL_DELETE_MAPPING_ENTRY' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
    'LBL_DISABLED' => 'Inaktiv',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'Keine passenden Treffer für Ihre Suchkriterien.',
    'LBL_ENABLED' => 'Aktiv',
    'LBL_EXTERNAL' => 'Benutzern erlauben, externe Kontoinformationen für diesen Konnektor zu erstellen.',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'Um diesen Konnektor auch verwenden zu können, müssen die Konnektoreinstellungen auf der entsprechenden Seite gesetzt worden sein.',
    'LBL_FINSALES' => 'Umsatz',
    'LBL_MARKET_CAP' => 'Marktkapitalisierung',
    'LBL_MERGE' => 'Zusammenführen',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Konnektoren aktivieren',
    'LBL_MODIFY_DISPLAY_DESC' => 'Wählen Sie aus, welche Module für den jeweiligen Konnektor aktiviert werden sollen.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Konnektoreinstellungen: Konnektoren aktivieren',
    'LBL_MODULE_FIELDS' => 'Modulfelder',
    'LBL_MODIFY_MAPPING_TITLE' => 'Konnektorfelder zuordnen',
    'LBL_MODIFY_MAPPING_DESC' => 'Ordnen Sie Konnektorfelder den Modulfeldern zu, um zu bestimmen, welche Konnektordaten gesehen bzw. in die Moduleinträge miteinbezogen werden sollen.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Konnektoreinstellungen: Konnektorfelder zuordnen',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Konnektoreigenschaften setzen',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Konfigurieren Sie die Einstellungen für jeden Konnektor, inklusive URLs und API Schlüsseln.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Konnektoreinstellungen: Konnektoreigenschaften setzen',
    'LBL_MODIFY_SEARCH_TITLE' => 'Konnektorsuche verwalten',
    'LBL_MODIFY_SEARCH' => 'Suchen',
    'LBL_MODIFY_SEARCH_DESC' => 'Wählen Sie die Konnektorfelder aus, mit denen in dem jeweiligen Modul nach Daten gesucht werden soll.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Konnektoreinstellungen: Konnektorsuche verwalten',
    'LBL_MODULE_NAME' => 'Konnektoren',
    'LBL_NO_PROPERTIES' => 'Für diesen Konnektor gibt es keine konfigurierbaren Eigenschaften.',
    'LBL_PARENT_DUNS' => 'Eltern DUNS',
    'LBL_PREVIOUS' => '< Zurück',
    'LBL_QUOTE' => 'Angebot',
    'LBL_RECNAME' => 'Firmenname',
    'LBL_RESET_TO_DEFAULT' => 'Zurücksetzen auf Standard',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Sind Sie sicher, dass Sie auf die Standardeinstellungen zurücksetzen wollen?',
    'LBL_RESET_BUTTON_TITLE' => 'Zurücksetzen',
    'LBL_RESULT_LIST' => 'Ergebnisliste',
    'LBL_RUN_WIZARD' => 'Assistent starten',
    'LBL_SAVE' => 'Speichern',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Suche...',
    'LBL_SHOW_IN_LISTVIEW' => 'In zusammengeführter Listenansicht anzeigen',
    'LBL_SMART_COPY' => 'Intelligente Kopie',
    'LBL_SUMMARY' => 'Zusammenfassung',
    'LBL_STEP1' => 'Daten suchen und anzeigen',
    'LBL_STEP2' => 'Einträge zusammenführen mit',
    'LBL_TEST_SOURCE' => 'Test Konnektor',
    'LBL_TEST_SOURCE_FAILED' => 'Test fehlgeschlagen',
    'LBL_TEST_SOURCE_RUNNING' => 'Test wird ausgeführt...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test erfolgreich',
    'LBL_TITLE' => 'Daten zusammenführen',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Muttergesellschaft DUNS',

    'ERROR_RECORD_NOT_SELECTED' => 'Fehler: Bitte wählen Sie einen Eintrag aus der Liste, bevor Sie fortfahren.',
    'ERROR_EMPTY_WRAPPER' => 'Fehler: Kann nicht auf Wrapperinstanz für Quelle [{$source_id}] zugreifen',
    'ERROR_EMPTY_SOURCE_ID' => 'Fehler: Quell-ID nicht angegeben oder leer.',
    'ERROR_EMPTY_RECORD_ID' => 'Fehler: Datensatz-ID nicht angegeben oder leer.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Fehler: Für diesen Eintrag wurden keine weiteren Angaben gefunden.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Für diese Verbindung wurden keine Module aktiviert. Wählen Sie ein Modul auf der Seite für Verbindungsaktivierung.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Fehler: Keine Verbindungen aktiviert, für die Suchfelder definiert wurden.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Fehler: Die Datei sourcedefs.php konnte nicht gefunden werden.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Fehler: Es wurden keine Quellen festgelegt, von denen Daten abgerufen werden können.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Fehler: Diesem Modul sind keine Verbindungen zugeordnet.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Fehler: Es wurden keine Suchfelder für das Modul und die Verbindungen definiert. Bitte kontaktieren Sie den Systemadministrator.',
    'ERROR_NO_FIELDS_MAPPED' => 'Fehler: Für jeden Moduleintrag muss einem Modulfeld mindestens ein Verbindungsfeld zugeordnet werden.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Fehler: Es wurden keine Modulfelder für die Anzeige des Resultats festgelegt. Bitte kontaktieren Sie den Systemadministrator.',
    'LBL_TWITTER_USER' => 'Twitter Benutzer',
    'LBL_FACEBOOK_USER' => 'Facebook Benutzer',
    'LBL_INFO_INLINE' => 'Information' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Schließen' /*for 508 compliance fix*/,

);

?>