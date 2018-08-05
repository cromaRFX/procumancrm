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

    'LBL_ADD_MODULE' => 'Tilføj',
    'LBL_ADDRCITY' => 'By',
    'LBL_ADDRCOUNTRY' => 'Land',
    'LBL_ADDRCOUNTRY_ID' => 'Lande-id',
    'LBL_ADDRSTATEPROV' => 'Stat',
    'LBL_ADMINISTRATION' => 'Forbindelsesadministration',
    'LBL_ADMINISTRATION_MAIN' => 'Forbindelsesindstillinger',
    'LBL_AVAILABLE' => 'Tilgængelige',
    'LBL_BACK' => '< Tilbage',
    'LBL_COMPANY_ID' => 'Firma-id',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Nogle obligatoriske felter er tomme. Vil du fortsætte for at gemme ændringer?',
    'LBL_CONNECTOR' => 'Forbindelse',
    'LBL_CONNECTOR_FIELDS' => 'Forbindelsesfelter',
    'LBL_DATA' => 'Data',
    'LBL_DEFAULT' => 'Standard',
    'LBL_DELETE_MAPPING_ENTRY' => 'Er du sikker på, at du vil slette denne post?',
    'LBL_DISABLED' => 'Deaktiveret',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'Ingen resultater blev fundet, der matcher dine søgekriterier.',
    'LBL_ENABLED' => 'Aktiveret',
    'LBL_EXTERNAL' => 'Giv brugerne mulighed for at oprette eksterne konto-poster til denne connector. For at bruge denne connector skal egenskaber også sættes i "Set Connector egenskaber".',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' In order to use this connector, the properties should also be set in the Set Connector Properties settings page.',
    'LBL_FINSALES' => 'Endeligt salg',
    'LBL_MARKET_CAP' => 'Markedskap.',
    'LBL_MERGE' => 'Flet',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Aktivér forbindelser',
    'LBL_MODIFY_DISPLAY_DESC' => 'Vælg, hvilke moduler der skal aktiveres for hver forbindelse.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Forbindelsesindstillinger: Aktivér forbindelser',
    'LBL_MODULE_FIELDS' => 'Modulfelter',
    'LBL_MODIFY_MAPPING_TITLE' => 'Tilknyt forbindelsesfelter',
    'LBL_MODIFY_MAPPING_DESC' => 'Knyt forbindelsesfelter til modulfelter for at bestemme, hvilke forbindelsesdata der kan vises og flettes ind i modulposterne.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Forbindelsesindstillinger: Tilknyt forbindelsesfelter',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Angiv forbindelsesegenskaber',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Konfigurer egenskaberne for hver forbindelse, herunder URL\'er og API-nøgler.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Forbindelsesindstillinger: Angiv forbindelsesegenskaber',
    'LBL_MODIFY_SEARCH_TITLE' => 'Administrer forbindelsessøgning',
    'LBL_MODIFY_SEARCH' => 'Søg',
    'LBL_MODIFY_SEARCH_DESC' => 'Vælg, hvilke forbindelsesfelter der skal bruges til at søge efter data for hvert modul.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Forbindelsesindstillinger: Administrer forbindelsessøgning',
    'LBL_MODULE_NAME' => 'Forbindelser',
    'LBL_NO_PROPERTIES' => 'Der er ingen konfigurerbare egenskaber til denne forbindelse.',
    'LBL_PARENT_DUNS' => 'Overordnet DUNS',
    'LBL_PREVIOUS' => '< Tilbage',
    'LBL_QUOTE' => 'Tilbud',
    'LBL_RECNAME' => 'Firmanavn',
    'LBL_RESET_TO_DEFAULT' => 'Nulstil til standard',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Er du sikker på, at du vil nulstille til standardkonfigurationen?',
    'LBL_RESET_BUTTON_TITLE' => 'Nulstil [Alt+R]',
    'LBL_RESULT_LIST' => 'Dataliste',
    'LBL_RUN_WIZARD' => 'Kør guide',
    'LBL_SAVE' => 'Gem',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Søger...',
    'LBL_SHOW_IN_LISTVIEW' => 'Vis i Flet listevisning',
    'LBL_SMART_COPY' => 'Smart kopi',
    'LBL_SUMMARY' => 'Oversigt',
    'LBL_STEP1' => 'Søg efter og vis data',
    'LBL_STEP2' => 'Flet poster med',
    'LBL_TEST_SOURCE' => 'Test forbindelse',
    'LBL_TEST_SOURCE_FAILED' => 'Testen mislykkedes',
    'LBL_TEST_SOURCE_RUNNING' => 'Udfører test...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Testen lykkedes',
    'LBL_TITLE' => 'Datafletning',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Ultimativ overordnet DUNS',

    'ERROR_RECORD_NOT_SELECTED' => 'Fejl: Vælg en post fra listen, før du fortsætter.',
    'ERROR_EMPTY_WRAPPER' => 'Fejl: Wrapper-forekomsten kunne ikke hentes til kilden [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Fejl: Kilde-id\'et er ikke angivet eller er tomt.',
    'ERROR_EMPTY_RECORD_ID' => 'Fejl: Post-id\'et er ikke angivet eller er tomt.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Fejl: Ingen yderligere detaljer blev fundet til posten.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Ingen moduler er aktiveret for denne forbindelse. Vælg et modul til denne forbindelse på siden Aktivér forbindelser.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Fejl: Der er ingen forbindelser aktiveret som kan have søgefelter defineret.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Fejl: Filen sourcedefs.php blev ikke fundet.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Fejl: Ingen kilder er angivet, som der kan hentes data fra.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Fejl: Der er ingen forbindelser knyttet til dette modul',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Fejl: Der er ingen søgefelter defineret for modulet og forbindelsen. Kontakt systemadministratoren.',
    'ERROR_NO_FIELDS_MAPPED' => 'Fejl: Du skal knytte mindst ét forbindelsesfelt til et modulfelt for hver modulpost.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Fejl: Der er ingen modulfelter tilknyttet, der kan vises i resultaterne. Kontakt systemadministratoren.',
    'LBL_TWITTER_USER' => 'Twitter Bruger',
    'LBL_FACEBOOK_USER' => 'Facebook User',
    'LBL_INFO_INLINE' => 'Info' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Luk' /*for 508 compliance fix*/,

);

?>