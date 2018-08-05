<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'A kapcsolat eltávolításához meg kell adni a rekordsorszámot.',
    'LBL_ACCOUNT_ID' => 'Ügyfél ID:',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_ADD_BUSINESSCARD' => 'Névjegykártya hozzáadása',
    'LBL_ADDMORE_BUSINESSCARD' => 'Újabb névjegykártya hozzáadása',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatív cím Város:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatív cím Ország:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatív cím Irányítószám:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatív cím Állam:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatív cím Utca 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatív cím Utca 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatív cím Utca:',
    'LBL_ALTERNATE_ADDRESS' => 'Egyéb Cím:',
    'LBL_ALT_ADDRESS' => 'Egyéb cím:',
    'LBL_ANY_ADDRESS' => 'Általános Cím:',
    'LBL_ANY_EMAIL' => 'Általános Email:',
    'LBL_ANY_PHONE' => 'Általános Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Hozzárendelt felhasználó neve:',
    'LBL_ASSIGNED_TO_ID' => 'Felelős',
    'LBL_ASSISTANT_PHONE' => 'Aszisztens telefon:',
    'LBL_ASSISTANT' => 'Aszisztens:',
    'LBL_BIRTHDATE' => 'Születési dátum:',
    'LBL_BUSINESSCARD' => 'Névjegykártya',
    'LBL_CITY' => 'Város:',
    'LBL_CAMPAIGN_ID' => 'Kampány azonosító',
    'LBL_CONTACT_INFORMATION' => 'Kapcsolat Információ',
    'LBL_CONTACT_NAME' => 'Kapcsolattartó neve:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kapcsolattartó-Lehetőség:',
    'LBL_CONTACT_ROLE' => 'Szerepkör:',
    'LBL_CONTACT' => 'Kapcsolattartó:',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_CREATED_ACCOUNT' => 'Új ügyfél létrehozva',
    'LBL_CREATED_CALL' => 'Új hívás létrehozva',
    'LBL_CREATED_CONTACT' => 'Új kapcsolattartó létrehozva',
    'LBL_CREATED_MEETING' => 'Új találkozó létrehozva',
    'LBL_CREATED_OPPORTUNITY' => 'Új lehetőség létrehozva',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_DESCRIPTION_INFORMATION' => 'Leíró jellegű információ',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direkt jelentések',
    'LBL_DO_NOT_CALL' => 'Nem szabad felhívni:',
    'LBL_DUPLICATE' => 'Lehetséges Kapcsolat duplikációk',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Egy létező céget használt',
    'LBL_EXISTING_CONTACT' => 'Egy létező kapcsolatot használt',
    'LBL_EXISTING_OPPORTUNITY' => 'Egy létező lehetőséget használt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_FULL_NAME' => 'Teljes név:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'vCard Importálása',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikusan létrehoz egy új kapcsolatot az Ön állományrendszerén található vCard állományból',
    'LBL_INVALID_EMAIL' => 'Érvénytelen Email:',
    'LBL_INVITEE' => 'Direkt Jelentések',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_LEAD_SOURCE' => 'Megkeresés forrás:',
    'LBL_LIST_ACCEPT_STATUS' => 'Státusz elfogadva',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_CONTACT_NAME' => 'Kapcsolat név',
    'LBL_LIST_CONTACT_ROLE' => 'Szerepkör',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Keresztnév',
    'LBL_LIST_FORM_TITLE' => 'Kapcsolat Lista',
    'LBL_VIEW_FORM_TITLE' => 'Kapcsolat Nézet',
    'LBL_LIST_LAST_NAME' => 'Vezetéknév',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Egyéb Email',
    'LBL_LIST_PHONE' => 'Irodai Telefon',
    'LBL_LIST_TITLE' => 'Titlulus',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Módosító felhasználó ID:',
    'LBL_MODULE_NAME' => 'Kapcsolatok',
    'LBL_MODULE_TITLE' => 'Kapcsolatok: Home',
    'LBL_NAME' => 'Név:',
    'LBL_NEW_FORM_TITLE' => 'Új kapcsolat',
    'LBL_NEW_PORTAL_PASSWORD' => 'Új Kapcsolat Jelszó:',
    'LBL_NOTE_SUBJECT' => 'Feljegyzés Tárgya',
    'LBL_OFFICE_PHONE' => 'Irodai Telefon:',
    'LBL_OPP_NAME' => 'Lehetőség Neve:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Lehetőség Szerepkör ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Lehetőség Szerepkör',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb Email:',
    'LBL_OTHER_PHONE' => 'Egyéb Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Portál Aktív:',
    'LBL_PORTAL_APP' => 'Portál Alkalmazás:',
    'LBL_PORTAL_INFORMATION' => 'Portál Információ',
    'LBL_PORTAL_NAME' => 'Portál Név:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portál Jelszó Beállítva:',
    'LBL_STREET' => 'Utca',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím Város:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges cím Ország:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím Irányítószám:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím Állam:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Elsődleges cím Utca 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Elsődleges cím Utca 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím Utca:',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',
    'LBL_PRODUCTS_TITLE' => 'Termékek',
    'LBL_RELATED_CONTACTS_TITLE' => 'Kapcsolódó Kapcsolatok',
    'LBL_REPORTS_TO_ID' => 'Jelentést tesz ID:',
    'LBL_REPORTS_TO' => 'Jelentést tesz:',
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_SALUTATION' => 'Üdvözlés:',
    'LBL_SAVE_CONTACT' => 'Kapcsolat mentése',
    'LBL_SEARCH_FORM_TITLE' => 'Kapcsolat keresése',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Ellenőrzött kapcsolatok kiválasztása',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Ellenőrzött kapcsolatok kiválasztása',
    'LBL_STATE' => 'Állam:',
    'LBL_SYNC_CONTACT' => 'Kapcsolat Sync:',
    'LBL_PROSPECT_LIST' => 'Lehetséges vevő lista',
    'LBL_TITLE' => 'Titulus:',
    'LNK_CONTACT_LIST' => 'Kapcsolatok',
    'LNK_IMPORT_VCARD' => 'Létrehozás vCard-ból',
    'LNK_NEW_ACCOUNT' => 'Cég létrehozása',
    'LNK_NEW_APPOINTMENT' => 'Megbeszélés létrehozása',
    'LNK_NEW_CALL' => 'Hívás beütemezése',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_CONTACT' => 'Kapcsolat létrehozása',
    'LNK_NEW_EMAIL' => 'Email Archiválása',
    'LNK_NEW_MEETING' => 'Találkozó beütemezése',
    'LNK_NEW_NOTE' => 'Feljegyzés létrehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_SELECT_ACCOUNT' => "Cég kiválasztása",
    'MSG_DUPLICATE' => 'A kapcsolat létrehozása egy duplikáció létrehozását eredményezheti. Kiválaszhatja alább a kapcsolatot a listából, vagy kiválaszhatja a Kapcsolat Létrehozása opciót, hogy fölvegye a kapcsolatot a korábban megadott adatokkal.',
    'MSG_SHOW_DUPLICATES' => 'A kapcsolat létrehozása egy duplikáció létrehozását eredményezheti. Kiválaszhatja a Folytatás opciót, hogy fölvegye a kapcsolatot a korábban megadott adatokkal, vagy választhatja a Mégsem lehetőséget.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Alternatív cím másolása az elsődleges címbe',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Elsődleges cím másolása az alternatív címbe',
    'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törli ezt a tételt?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'A lehetőség létrehozásához szükség van egy cégre.nKérem hozzon létre egy új céget, vagy válasszon ki egy már létezőt.',
    'NTC_REMOVE_CONFIRMATION' => 'Biztos benne, hogy eltávolítja ezt a kapcsolatot az esetből?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Biztos benne, hogy eltávolítja ezt a tételt mint direkt jelentést?',

    'LBL_USER_PASSWORD' => 'Jelszó: ',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Megkeresések',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Elsődleges cím másolása',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Másodlagos cím másolása',

    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibák',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_PROJECTS_RESOURCES' => 'Projekt forrás',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Kampányok (célja) :',
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampány napló',
    'LBL_LIST_CITY' => 'Város',
    'LBL_LIST_STATE' => 'Régió',
    'LBL_HOMEPAGE_TITLE' => 'Kapcsolataim',
    'LBL_OPPORTUNITIES' => 'Lehetőség',

    'LBL_CHECKOUT_DATE' => 'Checkout Date',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampányok',
    'LNK_IMPORT_CONTACTS' => 'Kapcsolatok importja',

    //For export labels
    'LBL_PHONE_HOME' => 'Otthoni telefon',
    'LBL_PHONE_MOBILE' => 'Mobil:',
    'LBL_PHONE_WORK' => 'Munkahelyi telefon',
    'LBL_PHONE_OTHER' => 'Egyéb telefon',
    'LBL_PHONE_FAX' => 'Fax:',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős felhasználó',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős felhasználó ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Módosítás ID szerint',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozva ID szerint',
    'LBL_EXPORT_PHONE_HOME' => 'Otthoni Telefon:',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobil telefon',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Kapcsolódó kapcsolattartó eMail',
    'LBL_USER_SYNC' => 'Felhasználó szink,',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Események',
    'LBL_FP_EVENT_DELEGATES_CONTACTS_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    'LBL_AOP_CASE_UPDATES' => 'Esemény frissítés',
    'LBL_CREATE_PORTAL_USER' => 'Portal felhasználó létrehozása',
    'LBL_ENABLE_PORTAL_USER' => 'Portal felhasználó engedélyezése',
    'LBL_DISABLE_PORTAL_USER' => 'Portál felhasználó tiltása',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nem sikerült létrehozni a Portal felhasználót',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Nem sikerült a Portálfelhasználót engedélyezni',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Nem sikerült a Portal felhasználó tiltása',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Létrehozott Portal felhasználó',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Engedélyezett Portal felhasználó',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portal felhasználó tiltása',
    'LBL_NO_JOOMLA_URL' => 'Nincs Portal URL megadva',
    'LBL_PORTAL_USER_TYPE' => 'Portal felhasználó típus',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Felhasználói fiók tiltva',
);

?>
