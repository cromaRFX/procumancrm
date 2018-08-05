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
    'LBL_MODULE_NAME' => 'Lehetőségek',
    'LBL_MODULE_TITLE' => 'Lehetőségek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Lehetőségek keresése',
    'LBL_VIEW_FORM_TITLE' => 'Lehetőségek megtekintése',
    'LBL_LIST_FORM_TITLE' => 'Lehetőségek listája',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség neve:',
    'LBL_OPPORTUNITY' => 'Lehetőség:',
    'LBL_NAME' => 'Lehetőség neve',
    'LBL_INVITEE' => 'Kapcsolatok',
    'LBL_CURRENCIES' => 'Pénznemek',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Név',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliens neve',
    'LBL_LIST_AMOUNT' => 'Lehetőség összege',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Összeg',
    'LBL_LIST_DATE_CLOSED' => 'Zárás',
    'LBL_LIST_SALES_STAGE' => 'Eladási szint:',
    'LBL_ACCOUNT_ID' => 'Kliens azonosító',
    'LBL_CURRENCY_ID' => 'Pénznem azonosító',
    'LBL_CURRENCY_NAME' => 'Pénznem neve',
    'LBL_CURRENCY_SYMBOL' => 'Pénznem szimbólum',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Lehetőség - Pénznem frissítése',
    'UPDATE_DOLLARAMOUNTS' => 'USA dollár összegek frissítése',
    'UPDATE_VERIFY' => 'Összegek ellenőrzése',
    'UPDATE_VERIFY_TXT' => 'Ellenőrzi, hogy az összegek érvényes decimális(.) vagy numerikus(0-9) karakterek-e.',
    'UPDATE_FIX' => 'Megerősített összegek',
    'UPDATE_FIX_TXT' => 'Megkísérli kijavítani az érvénytelen értékeket valós decimális értékekre. Minden módosított biztonsági mentés adatbázisban tárolódik. Ha futás közben hibát észlel, ne futtassa újra helyreállítás nélkül a biztonsági mentést, mert a régit felül fogja írni az új érvénytelen adattal.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Frissíti az USA dollár összegeket a beállított napi árfolyamok alapján. Ezen érték felhasználható a Grafikonok és a Lista Nézet Pénznem Értékek menüpontban.',
    'UPDATE_CREATE_CURRENCY' => 'Új pénznem létrehozás:',
    'UPDATE_VERIFY_FAIL' => 'Hibás rekord ellenőrzése:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Jelenlegi összeg:',
    'UPDATE_VERIFY_FIX' => 'A hibajavítás a következőt végzi el',
    'UPDATE_INCLUDE_CLOSE' => 'Zárt rekordokkal együtt',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Új összeg:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Új pénznem:',
    'UPDATE_DONE' => 'Kész',
    'UPDATE_BUG_COUNT' => 'Hibákat talált, és megkísérelte megoldani:',
    'UPDATE_BUGFOUND_COUNT' => 'Hibák talált:',
    'UPDATE_COUNT' => 'Rekordok Frissítve:',
    'UPDATE_RESTORE_COUNT' => 'Rekord összegei helyreállítva:',
    'UPDATE_RESTORE' => 'Összegek helyreállítása',
    'UPDATE_RESTORE_TXT' => 'Az összeg értékeinek helyreállítása biztonsági mentéssel.',
    'UPDATE_FAIL' => 'Nem sikerült frissíteni -',
    'UPDATE_NULL_VALUE' => 'Összeg NULL beállítása 0-ra',
    'UPDATE_MERGE' => 'Pénznemek egyesítése',
    'UPDATE_MERGE_TXT' => 'Több pénznem egyesítése egy pénznemre. Ha több pénznem tartozik ugyanahhoz a pénznemhez, egyesíthetjük őket. Ezeket az pénznemeknek az egyesítését az összes másik modulban is elvégezheti.',
    'LBL_ACCOUNT_NAME' => 'Kliens neve:',
    'LBL_AMOUNT' => 'Lehetőség összege:',
    'LBL_AMOUNT_USDOLLAR' => 'Összeg:',
    'LBL_CURRENCY' => 'Pénznem:',
    'LBL_DATE_CLOSED' => 'Várható lezárása dátuma:',
    'LBL_TYPE' => 'Típus:',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_NEXT_STEP' => 'Következő lépés:',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
    'LBL_SALES_STAGE' => 'Eladási szint:',
    'LBL_PROBABILITY' => 'Valószínűség (%):',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DUPLICATE' => 'Lehet, hogy duplikált lehetőség',
    'MSG_DUPLICATE' => 'A lehetőség rekord, amelyet duplikált, már létezik. Az alábbi lehetőség rekordok ugyanazzal a névvel szerepelnek. Folytatáshoz kattintson a Mentés gombra egy új lehetőség létrehozásához vagy a Mégsem gombra a modul visszatéréséhez a lehetőség létrehozása nélkül.',
    'LBL_NEW_FORM_TITLE' => 'Lehetőség létrehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_OPPORTUNITY_LIST' => 'Lehetőségek megtekintése',
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a lehetőség törléséhez!',
    'LBL_TOP_OPPORTUNITIES' => 'Legjobb nyitott lehetőségeim',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Biztos törölni akarja ezt az klienst a lehetőségekből?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Biztos törölni akarja ezt a lehetőséget a projektből?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_RAW_AMOUNT' => 'Nyers összeg',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Ajánlások',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Lezárt lehetőségeim',
    'LBL_TOTAL_OPPORTUNITIES' => 'Lehetőségek összesen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lezárt, megnyert lehetőségek',
    'LBL_ASSIGNED_TO_ID' => 'Hozzárendelt felhasználó:',
    'LBL_CREATED_ID' => 'Létrehozva azonosító alapján',
    'LBL_MODIFIED_ID' => 'Módosítva azonosító alapján',
    'LBL_MODIFIED_NAME' => 'Módosítva felhasználó neve szerint',
    'LBL_CREATED_USER' => 'Létrehozott felhasználó',
    'LBL_MODIFIED_USER' => 'Módosított felhasználó',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampányok',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LABEL_PANEL_ASSIGNMENT' => 'Feladat',
    'LNK_IMPORT_OPPORTUNITIES' => 'Lehetőségek importja',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampány azonosító',
    'LBL_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős felhasználó',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős felhasználó ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Módosítás ID szerint',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozva ID szerint',
    'LBL_EXPORT_NAME' => 'Név',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Kapcsolódó kapcsolattartó eMail',
    'TWITTER_USER_C' => 'Twitter felhasználó',
);

?>
