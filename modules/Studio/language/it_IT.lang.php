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






$mod_strings = array (
'LBL_EDIT_LAYOUT'=>'Modifica Layout',
'LBL_EDIT_ROWS'=>'Modifica Righe',
'LBL_EDIT_COLUMNS'=>'Modifica Colonne',
'LBL_EDIT_LABELS'=>'Modifica Labels',
'LBL_EDIT_FIELDS'=>'Modifica campi utente',
'LBL_ADD_FIELDS'=>'Aggiungi campi utente',
'LBL_DISPLAY_HTML'=>'Mostra Codice HTML',
'LBL_SELECT_FILE'=> 'Seleziona File',
'LBL_SAVE_LAYOUT'=> 'Salva Layout',
'LBL_SELECT_A_SUBPANEL' => 'Seleziona un Sotto-pannello',
'LBL_SELECT_SUBPANEL' => 'Seleziona Sotto-pannello',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Area Strumenti',
'LBL_STAGING_AREA' => 'Staging Area (trascina elementi qui)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campi SuiteCRM (Seleziona gli elementi da aggiungere in Staging Area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (Seleziona gli elementi da aggiungere in Staging Area)',
'LBL_VIEW_SUGAR_FIELDS' => 'Visualizza Campi SuiteCRM',
'LBL_VIEW_SUGAR_BIN' => 'Mostra Cestino',
'LBL_FAILED_TO_SAVE' => 'Salvataggio fallito',
'LBL_CONFIRM_UNSAVE' => 'Tutte le modifiche saranno perse. Vuoi continuare?',
'LBL_PUBLISHING' => 'In pubblicazione ...',
'LBL_PUBLISHED' => 'In pubblicazione',
'LBL_FAILED_PUBLISHED' => 'Non Pubblicato',
'LBL_DROP_HERE' => '[Trascina Qui]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nome',
'LBL_LABEL'=>'Etichetta',
'LBL_MASS_UPDATE'=>'Aggiornamento di massa',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Modulo',
'LBL_DEFAULT_VALUE'=>'Valore di default',
'LBL_REQUIRED'=>'Richiesto',
'LBL_DATA_TYPE'=>'Tipo',


'LBL_HISTORY'=>'Cronologia',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Benvenuto a Studio!</h2><br> Cosa vorresti fare oggi?<br><b> Seleziona tra le opzioni qui sotto.</b>',
'LBL_SW_EDIT_MODULE'=>'Modifica il Modulo',
'LBL_SW_EDIT_DROPDOWNS'=>'Modifica DropDown',
'LBL_SW_EDIT_TABS'=>'Configura Schede',
'LBL_SW_RENAME_TABS'=>'Rinomina Schede',
'LBL_SW_EDIT_GROUPTABS'=>'Configura Gruppo Schede',
'LBL_SW_EDIT_PORTAL'=>'Modifica Portale',
'LBL_SW_EDIT_WORKFLOW'=>'Modifica Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Ripara Campi personalizzati',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Esporta Campi personalizzati',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Benvenuto a Studio!</h2><br><b>Seleziona un modulo.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Modifica un Modulo</h2>Cosa vorresti fare con questo modulo?<br><b>Seleziona quale azione fare.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Modifica campi utente',
'LBL_SMA_EDIT_LAYOUT'=>'Modifica Layout',
'LBL_SMA_EDIT_LABELS' =>'Modifica Etichette',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Anteprima',
'LBL_MB_RESTORE'=>'Ripristina',
'LBL_MB_DELETE'=>'Elimina',
'LBL_MB_COMPARE'=>'Confronta',
'LBL_MB_WELCOME'=> '<h2>Cronologia</h2><br>La cronologia ti permette di visualizzare le precedenti versioni del file. Puoi confrontare e reinstallare le versioni precedenti.  Devi pubblicare prima di rendere visibile.<br> Cosa vuoi fare oggi?<br><b> Seleziona tra le opzioni.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Crea un Drop Down',
'LBL_ED_WELCOME'=>'<h2>Modifica Drop Down</h2><br><b>Puoi modificare una drop down esistente o crearne uno nuovo.',
'LBL_DROPDOWN_NAME' => 'Nome Dropdown:',
'LBL_DROPDOWN_LANGUAGE' => 'Lingua Dropdown:',
'LBL_TABGROUP_LANGUAGE' => 'Lingua Gruppo Schede:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Modifica campi utente</h2><br><b>Puoi visualizzare e modificare un campo esistente, creare un nuovo campo, o pulire i campi personalizzati in cache.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Visualizza campo personalizzato',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Crea campo personalizzato',
'LBL_EC_CLEAR_CACHE'=>'Svuota Cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Cronologia</h2><br><b>Seleziona il file che vuoi vedere.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Mostra Valore',
'LBL_DD_DATABASEVALUE'=>'Valore a Database',
'LBL_DD_ALL'=>'Tutto',

//BUTTONS
'LBL_BTN_SAVE'=>'Salva',
'LBL_BTN_CANCEL'=>'Annulla',
'LBL_BTN_SAVEPUBLISH'=>'Salva e Pubblica',
'LBL_BTN_HISTORY'=>'Cronologia',
'LBL_BTN_NEXT'=>'Avanti',
'LBL_BTN_BACK'=>'Indietro',
'LBL_BTN_ADDCOLS'=>'Aggiungi Colonne',
'LBL_BTN_ADDROWS'=>'Aggiungi Righe',
'LBL_BTN_UNDO'=>'Annulla',
'LBL_BTN_REDO'=>'Ripeti',
'LBL_BTN_ADDCUSTOMFIELD'=>'Aggiungi Campo Utente',
'LBL_BTN_TABINDEX'=>'Modifica Ordine di Tabulazione',

//TABS
'LBL_TAB_SUBTABS'=>'Sotto Pannelli',
'LBL_MODULES'=>'Moduli',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Amministrazione',
'LBL_CONFIGURE_GROUP_TABS' => 'Configura Gruppo Schede',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Il modello di Gruppo Schede seguente verrà usato quando l&amp;#39;utente sceglie la visualizzazione per Gruppi al posto di quella tradizionale per Moduli, all´interno dell´area Il mio Profilo->Opzioni Layout.',
'LBL_RENAME_TAB_WELCOME'=>'Per rinominare le schede, cliccare sui valori che compaiono nella colonna Mostra Valore.',
'LBL_DELETE_MODULE'=>'&amp;nbsp;Cancella&amp;nbsp;Modulo',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Selezionare per visualizzare la scheda "Altro" nella barra di navigazione.  Di default, la scheda "Altro" mostra tutti i moduli che non sono già inclusi in altri gruppi.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Per tradurre le etichette del gruppo schede in altre ligue, selezionare una lingua, modificare le etichette e clicca Salva &amp; Distribuisci.',
'LBL_ADD_GROUP'=>'Aggiungi Gruppo',
'LBL_NEW_GROUP'=>'Nuovo Gruppo',
'LBL_RENAME_TABS'=>'Rinomina Schede',
'LBL_DISPLAY_OTHER_TAB' => 'Visualizza &amp;#39;Altro&amp;#39; Scheda',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Default',
'LBL_ADDITIONAL'=>'Addizionale',
'LBL_AVAILABLE'=>'Disponibile',
'LBL_LISTVIEW_DESCRIPTION'=>'Ci sono tre colonne di seguito. Le colonne di default contengono i campi che sono visibili nella lista di Default, le colonne aggiuntive contengono campi che gli utenti possono scegliere per modificare la visualizzazione, e le colonne utente e di amministrazione possono essere modificate dalla parte di amministrazione ma attualmente non sono utilizzate.',
'LBL_LISTVIEW_EDIT'=>'Editor Vista Elenco',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Errore: Il campo esiste già',
'ERROR_INVALID_KEY_VALUE'=> "Errore: Valore chiave non valido: [´]",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portale SuiteCRM',
'LBL_SMP_WELCOME'=>'Si prega di selezionare il modulo che vuoi modificare dalla lista qui sotto',
'LBL_SP_WELCOME'=>'Benvenuto in Studio del Portale SuiteCRM. Puoi scegliere sia di modificare qui i moduli o sincronizzare un esempio di portale.<br> Si prega di scegliere dalla lista qui sotto.',
'LBL_SP_SYNC'=>'Sincronizzazione Portale',
'LBL_SYNCP_WELCOME'=>'Si prega di inserire url del portare che vuoi aggiornare poi selezioni il pulsante Vai.<br> Questo ti porterà ad un prompt per la tua username e password.<br> Si prega di inserire la tua username SuiteCRM e la password e poi premere il pulsante Inizio Sincronizzazione.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Qui sotto ci sono due colonne: Default dove ci sono i campi che saranno visualizzati e Disponibile dove ci sono i campi che non sono visualizzabili, ma disponibili per la visualizzazione. Basta trascinare i campi tra le due colonne. Potete anche riordinare gli elementi in una colonna trascinandoli.',
'LBL_SP_STYLESHEET'=>'Caricare uno stile del foglio',
'LBL_SP_UPLOADSTYLE'=>'Cliccare nel pulsante browse e selezionare lo stile del foglio dal tuo computer da caricare.<br> La prossima volta che sincronizzerai il portale ti porterai dietro lo stile del foglio.',
'LBL_SP_UPLOADED'=> 'Aggiornato',
'ERROR_SP_UPLOADED'=>'Si prega di assicurarsi che si stia caricando uno stile del foglio css.',
'LBL_SP_PREVIEW'=>'Questa è anteprima di come risulterà lo stile del tuo foglio.',

	'LBL_SAVE' => 'Salva' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Annulla' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Ripeti' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'In coda' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Elimina' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Aggiugi Campo' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Massimizza' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimizza' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Pubblica' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Aggiungi Righe' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Aggiungi Campo' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Modifica' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Seleziona la lingua da modificare.',
'LBL_SINGULAR' => 'Etichetta singola',
'LBL_PLURAL' => 'Etichetta plurale',
'LBL_RENAME_MOD_SAVE_HELP' => 'Clicca <b>Salva</b> per applicare le modifiche.'

);
?>