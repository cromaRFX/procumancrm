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
    'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
    'LBL_ACCOUNT_ID' => 'ID Azienda:',
    'LBL_ACCOUNT_NAME' => 'Nome azienda:',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADD_BUSINESSCARD' => 'Inserisci Biglietto da Visita',
    'LBL_ADDMORE_BUSINESSCARD' => 'Aggiungi un altro biglietto da visita',
    'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
    'LBL_ALT_ADDRESS_CITY' => 'Indirizzo Alternativo, Comune:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Indirizzo Alternativo, Nazione:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Indirizzo Alternativo, CAP:',
    'LBL_ALT_ADDRESS_STATE' => 'Indirizzo Alternativo, Provincia:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Indirizzo Alternativo, Via [2]:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Indirizzo Alternativo, Via [3]:',
    'LBL_ALT_ADDRESS_STREET' => 'Indirizzo Alternativo, Via:',
    'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ALT_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_EMAIL' => 'Altra Email:',
    'LBL_ANY_PHONE' => 'Altro Telefono:',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato',
    'LBL_ASSISTANT_PHONE' => 'Telefono Assistente:',
    'LBL_ASSISTANT' => 'Assistente:',
    'LBL_BIRTHDATE' => 'Data di nascita:',
    'LBL_BUSINESSCARD' => 'Biglietto da Visita',
    'LBL_CITY' => 'Comune:',
    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_CONTACT_INFORMATION' => 'Informazioni sul Contatto',
    'LBL_CONTACT_NAME' => 'Nome Contatto:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contatto-Opportunità:',
    'LBL_CONTACT_ROLE' => 'Ruolo:',
    'LBL_CONTACT' => 'Contatto:',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
    'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
    'LBL_CREATED_CONTACT' => 'Creato un nuovo contatto',
    'LBL_CREATED_MEETING' => 'Creata una nuova riunione',
    'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
    'LBL_DATE_MODIFIED' => 'Data Modifica:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contatti',
    'LBL_DEPARTMENT' => 'Divisione:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Dipende da',
    'LBL_DO_NOT_CALL' => 'Non chiamare:',
    'LBL_DUPLICATE' => 'Possibili Contatti Duplicati',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
    'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
    'LBL_EXISTING_CONTACT' => 'Usato un contatto esistente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usata un´opportunità esistente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_FULL_NAME' => 'Nome Completo:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importa vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo contatto importando una vCard dal tuo sistema.',
    'LBL_INVALID_EMAIL' => 'Email non valida:',
    'LBL_INVITEE' => 'Report Diretti',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_LEAD_SOURCE' => 'Fonte del lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CONTACT_NAME' => 'Nome contatto',
    'LBL_LIST_CONTACT_ROLE' => 'Ruolo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_FIRST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Elenco Contatti',
    'LBL_VIEW_FORM_TITLE' => 'Vista Contatti',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Altra Email',
    'LBL_LIST_PHONE' => 'Telefono Ufficio',
    'LBL_LIST_TITLE' => 'Funzione',
    'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
    'LBL_MODIFIED' => 'Modificato Da:',
    'LBL_MODULE_NAME' => 'Contatti',
    'LBL_MODULE_TITLE' => 'Contatti: Home',
    'LBL_NAME' => 'Nome completo:',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Contatto',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nuova Password Portale:',
    'LBL_NOTE_SUBJECT' => 'Oggetto della Nota',
    'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
    'LBL_OPP_NAME' => 'Nome Opportunità:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID Ruolo Opportunità:',
    'LBL_OPPORTUNITY_ROLE' => 'Ruolo Opportunità',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_PORTAL_ACTIVE' => 'Portale Attivo:',
    'LBL_PORTAL_APP' => 'Applicazione Portale',
    'LBL_PORTAL_INFORMATION' => 'Informazioni Portale',
    'LBL_PORTAL_NAME' => 'Nome Portale:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'La password del portale è impostata:',
    'LBL_STREET' => 'Via',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Indirizzo Primario, Via [2]:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Indirizzo Primario, Via [3]:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via:',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
    'LBL_PRODUCTS_TITLE' => 'Prodotti',
    'LBL_RELATED_CONTACTS_TITLE' => 'Contatti Correlati',
    'LBL_REPORTS_TO_ID' => 'Dipende da ID',
    'LBL_REPORTS_TO' => 'Dipende da:',
    'LBL_RESOURCE_NAME' => 'Nome Risorsa',
    'LBL_SALUTATION' => 'Titolo',
    'LBL_SAVE_CONTACT' => 'Salva Contatto',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Contatto',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Aggiungi i Contatti selezionati',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Aggiungi i Contatti selezionati',
    'LBL_STATE' => 'Provincia:',
    'LBL_SYNC_CONTACT' => 'Sincronizza in Outlook®:',
    'LBL_PROSPECT_LIST' => 'Lista Prospect',
    'LBL_TITLE' => 'Funzione:',
    'LNK_CONTACT_LIST' => 'Visualizza Contatti',
    'LNK_IMPORT_VCARD' => 'Crea Contatto da vCard',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_NEW_CALL' => 'Nuova Chiamata',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_CONTACT' => 'Nuovo Contatto',
    'LNK_NEW_EMAIL' => 'Archivia Email',
    'LNK_NEW_MEETING' => 'Nuova Riunione',
    'LNK_NEW_NOTE' => 'Nuova Nota',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_SELECT_ACCOUNT' => "Seleziona Azienda",
    'MSG_DUPLICATE' => 'La creazione di questo contatto potrebbe generare un duplicato. Il contatto contiene nomi simili e/o indirizzi email elencati qui sotto. Clicca Salva per continuare con la creazione di questo nuovo contatto, oppure clicca Annulla per ritornare al modulo senza creare il contatto.',
    'MSG_SHOW_DUPLICATES' => 'La creazione di questo contatto potrebbe generare un duplicato. Il contatto contiene nomi simili e/o indirizzi email elencati qui sotto. Clicca Salva per continuare con la creazione di questo nuovo contatto, oppure clicca Annulla per ritornare al modulo senza creare il contatto.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia indirizzo alternativo in quello primario',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copia indirizzo primario in quello alternativo',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creazione di un´opportunità richiede l´esistenza di un´azienda. Si prega di creare un´azienda o selezionarne una già esistente.',
    'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler eliminare il contatto da questo reclamo?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record come report diretto?',

    'LBL_USER_PASSWORD' => 'Password:',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copia indirizzo primario',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copia altro indirizzo',

    'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gestione Bug',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_PROJECTS_RESOURCES' => 'Risorse Progetti',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Campagne (Obiettivo di):',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagne',
    'LBL_LIST_CITY' => 'Comune',
    'LBL_LIST_STATE' => 'Provincia',
    'LBL_HOMEPAGE_TITLE' => 'I miei Contatti',
    'LBL_OPPORTUNITIES' => 'Opportunità',

    'LBL_CHECKOUT_DATE' => 'Data Checkout',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagne',
    'LNK_IMPORT_CONTACTS' => 'Importa Contatti',

    //For export labels
    'LBL_PHONE_HOME' => 'Telefono Abitazione',
    'LBL_PHONE_MOBILE' => 'Cellulare',
    'LBL_PHONE_WORK' => 'Telefono Ufficio',
    'LBL_PHONE_OTHER' => 'Altro Telefono',
    'LBL_PHONE_FAX' => 'Fax',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome Utente Assegnato',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
    'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
    'LBL_EXPORT_PHONE_HOME' => 'Telefono Abitazione',
    'LBL_EXPORT_PHONE_MOBILE' => 'Cellulare',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email Contatti Relazionati',
    'LBL_USER_SYNC' => 'Sync Utente',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Eventi',
    'LBL_FP_EVENT_DELEGATES_CONTACTS_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegati',

    'LBL_AOP_CASE_UPDATES' => 'Aggiornamenti Reclamo',
    'LBL_CREATE_PORTAL_USER' => 'Creazione Utente Portale',
    'LBL_ENABLE_PORTAL_USER' => 'Abilita Utente Portale',
    'LBL_DISABLE_PORTAL_USER' => 'Disabilita Utente Portale',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Creazione dell\'Utente Portale Fallita',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Abilitazione dell\'Utente Portale Fallita',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Disabilitazione dell\'Utente Portale Fallita',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Creazione Utente Portale',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Abilitazione Utente Portale',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabilitazione Utente Portale',
    'LBL_NO_JOOMLA_URL' => 'URL del portale non specificato',
    'LBL_PORTAL_USER_TYPE' => 'Tipo Utente Portale',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disattivato',
);

?>
