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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'I seguenti moduli sono stati installati:',
	'DESC_MODULES_QUEUED'						=> 'I seguenti moduli sono pronti per essere installati:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Impossibile determinare il Gruppo',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Impossibile determinare il Proprietario',
	'ERR_UW_CONFIG_WRITE'						=> 'Si è verificato un errore durante l´aggiornamento del file config.php con la nuova versione.',
	'ERR_UW_CONFIG'								=> 'Assicurati che il file config.php sia scrivibile, poi ricarica questa pagina.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'La cartella è in sola lettura',
	'ERR_UW_FILE_NOT_COPIED'					=> 'File non copiato',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problemi durante la rimozione del pacchetto',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Il file non è leggibile.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Il file non può essere spostato o scritto in',
	'ERR_UW_FLAVOR_2'							=> 'Versione dell´Aggiornamento:',
	'ERR_UW_FLAVOR'								=> 'Versione del sistema SuiteCRM:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log non può essere creato o reso scrivible. Si prega di sistemare i permessi della directory SuiteCRM.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload impostato ad un valore maggiore di 1.  Si prega di cambiare il parametro in php.ini e riavviare il web server.',
	'ERR_UW_MYSQL_VERSION'						=> 'Il software richiede MySQL versione 4.1.2 o superiori. Versione attuale:',
	'ERR_UW_OCI8_VERSION'				        => 'La versione di Oracle usata non è supportata da SuiteCRM. E&amp;#39; necessario installare una versione che sia compatibile con SuiteCRM. Si prega di consultare la Matrice di Compatibilità nelle Note di rilascio per conoscere le versioni di Oracle supportate. Versione attuale:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Si prega di specificare un file e riprovare!',
	'ERR_UW_NO_FILES'							=> 'Si è verificato un errore, nessun file da controllare.',
	'ERR_UW_NO_MANIFEST'						=> 'Impossibile procedere, nel file zip manca il documento manifest.php',
	'ERR_UW_NO_VIEW'							=> 'E´ stata specificata una vista non valida.',
	'ERR_UW_NO_VIEW2'							=> 'Vista non definita. Vai nel pannello di Amministrazione per ritornare in questa pagina.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Caricamento non valido.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Impossibile creare la cartella temporanea. Controlla i permessi sul file.',
	'ERR_UW_ONLY_PATCHES'						=> 'In questa pagina puoi caricare solo patches.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Errori trovati durante il controllo di completezza',
	'ERR_UW_UPLOAD_ERR'							=> 'Si è verificato un errore durante il caricamento del file, si prega di riprovare.',
	'ERR_UW_VERSION'							=> 'Versione di SuiteCRM :',
	'ERR_UW_WRONG_TYPE'							=> 'Questa pagina non è eseguibile.',
	'LBL_BUTTON_BACK'							=> '< Indietro',
	'LBL_BUTTON_CANCEL'							=> 'Annulla',
	'LBL_BUTTON_DELETE'							=> 'Elimina Pacchetto',
	'LBL_BUTTON_DONE'							=> 'Fatto',
	'LBL_BUTTON_EXIT'							=> 'Esci',
	'LBL_BUTTON_INSTALL'						=> 'Verifica Aggiornamento',
	'LBL_BUTTON_NEXT'							=> 'Avanti >',
	'LBL_BUTTON_RECHECK'						=> 'Ricontrolla',
	'LBL_BUTTON_RESTART'						=> 'Ricomincia',

	'LBL_UPLOAD_UPGRADE'						=> 'Carica un pacchetto di aggiornamento:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'File caricato non trovato',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Backup File',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'I file salvati da questo aggiornamento si trovano in',
	'LBL_UW_BACKUP'								=> 'File BACKUP',
	'LBL_UW_CANCEL_DESC'						=> 'L´aggiornamento è stato annullato. Tutti i file temporanei che sono stati copiati e tutti i file per l´aggiornamento che erano stati caricati sono stati cancellati.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Cambiamenti allo Schema del Set di Caratteri',
	'LBL_UW_CHECK_ALL'							=> 'Seleziona tutti',
	'LBL_UW_CHECKLIST'							=> 'Passi per l´Aggiornamento',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Una copia dei file sovrascritti sono nella seguente cartella:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Unisci manualmente i seguenti files:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Processo di Aggiornamento: Unisci Manualmente i Files',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Usa il metodo di comparazione a te più familiare per unire questi files. Finchè non applicherai queste modifiche SuiteCRM si troverà in uno stato incerto e l´aggiornamento non sarà completo.',
	'LBL_UW_COMPLETE'							=> 'Completo',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Questa nuova versione di SuiteCRM contiene un nuovo accordo di licenza.  Desideri Continuare?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Tutti i requisiti di sistema sono presenti',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Impostazione PHP: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Modulo cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Modulo IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Modulo MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Impostazioni PHP: Limite della Memoria',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Impostazione PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versione MySQL minima',
    'LBL_UW_COMPLIANCE_DB'                      => 'Versione Database Minima',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Posizione di php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versione minima di PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Impostazioni PHP: Modalità Sicura',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Controllo Impostazioni Server',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Impostazioni Rilevate',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML Parsing',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Supporto Zip',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'Versione PCRE',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'File Copiati Correttamente',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Cambiamenti nello Schema delle Tabelle Personalizzate',

	'LBL_UW_DB_CHOICE1'							=> 'La Guida di Aggiornamento esegue SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Query SQL manuali',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERIMENTO fallito - i valori confrontati sono differenti',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilegi Database',
	'LBL_UW_DB_ISSUES'							=> 'Problemi di Database',
	'LBL_UW_DB_METHOD'							=> 'Metodo di Caricamento nel Database',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Tutti i Privilegi Disponibili',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilegi Necessari',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'I seguenti aggiornamenti sono stati installati:',
	'LBL_UW_END_DESC'							=> 'Il sistema è stato aggiornato.',
	'LBL_UW_END_DESC2'							=> 'Se hai scelto di eseguire manualmente qualche passo come l´unione dei files o l´esecuzione delle query SQL, procedi ora. Il sistema non sarà stabile finchè non avrai completato questi passi.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'L´aggiornamento è completato.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Clicca Fatto per uscire dall´aggiornamento guidato.',
	'LBL_UW_END_LOGOUT'							=> 'Se si prevede di applicare un altro pacchetto di aggiornamento tramite l´Aggiornamento guidato, prima di farlo disconnettersi e accedere di nuovo.',
	'LBL_UW_END_LOGOUT2'						=> 'Logout',
	'LBL_UW_REPAIR_INDEX'						=> 'Per aumentare le prestazioni del database, esegui lo script <a href="index.php?module=Administration&amp;action=RepairIndex" target="_blank">Riparazione Indici</a>.',

	'LBL_UW_FILE_DELETED'						=> "è stato rimosso.",
	'LBL_UW_FILE_GROUP'							=> 'Gruppo',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permessi File',
	'LBL_UW_FILE_ISSUES'						=> 'Problemi File',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'I file richiedono un confronto manuale',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Tutti i File sono Scrivibili</b>',
	'LBL_UW_FILE_OWNER'							=> 'Proprietario',
	'LBL_UW_FILE_PERMS'							=> 'Permessi',
	'LBL_UW_FILE_UPLOADED'						=> 'è stato caricato',
	'LBL_UW_FILE'								=> 'Nome File',
	'LBL_UW_FILES_QUEUED'						=> 'I seguenti aggiornamenti sono pronti per l´installazione:',
	'LBL_UW_FILES_REMOVED'						=> "I seguenti files verranno rimossi dal sistema:",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Clicca Avanti per caricare i pacchetti per l´aggiornamento.",
	'LBL_UW_FROZEN'								=> 'Prima di procedere caricare il pacchetto.',
	'LBL_UW_HIDE_DETAILS'						=> 'Nascondi Dettagli',
	'LBL_UW_IN_PROGRESS'						=> 'In Corso',
	'LBL_UW_INCLUDING'							=> 'Incluso',
	'LBL_UW_INCOMPLETE'							=> 'Incompleto',
	'LBL_UW_INSTALL'							=> 'File INSTALLAZIONE',
	'LBL_UW_MANUAL_MERGE'						=> 'Unione File',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Il modulo è pronto per essere disinstallato. Cliccare \"Esegui\" per procedere con la disinstallazione.",
	'LBL_UW_MODULE_READY'						=> "Il modulo è pronto per essere installato. Cliccare \"Esegui\" per procedere con l´installazione.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nessun Aggiornamento registrato rilevato.',
	'LBL_UW_NONE'								=> 'Nessuno',
	'LBL_UW_NOT_AVAILABLE'						=> 'Non disponibile',
	'LBL_UW_OVERWRITE_DESC'						=> "Tutti i file modificati verranno sovrascritti - inclusa qualsiasi personalizzazione del codice o dei template grafici. Sei sicuro di voler procedere?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Sovrascrivi Tutti i Files',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Unione Manuale - Mantieni Tutto',
	'LBL_UW_OVERWRITE_FILES'					=> 'Metodo Unione',
	'LBL_UW_PATCH_READY'						=> 'La patch è pronta per essere eseguita. Clicca il pulsante "Esegui" per completare l´aggiornamento.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Nota: Trovati Aspetti Personalizzati</h2><br />I seguenti files contengono nuovi campi o aspetti modificati attraverso lo Studio. Anche la correzione (patch) che stai per installare contiene modifiche a questi files. Per <u>ogni file</u> puoi:<br><ul><li>[<b>Default</b>] Mantenere la tua versione lasciando bianca questa casella. Le modifiche della patch verranno ignorate.</li>oppure<li>Accettare l´aggiornamento selezionando questa casella. Le tue modifiche dovranno essere riapplicate attraverso lo Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Creare un Compito per l´Unione Manuale?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Controllo di Verifica',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differenziati',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Vuoi ricevere una mail come Reminder per  l´Unione Manuale?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'I file elencati sono stati modificati. Deseleziona quelli che richiedono una modifica manuale. <i>I file con modifiche al layout vengono rilevati automaticamente e deselezionati; seleziona quelli che desideri vengano sovrascritti.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Non è richiesta nessuna unione manuale.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Non necessario.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Files auto-preservati:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Tutti i controlli di verifica sono stati superati.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Clicca Avanti per copiare i file aggiornati nel sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> 'Nota: il rimanente del processo di aggiornamento è obbligatorio, e cliccando il tasto Avanti completerai il processo. Se non vuoi continuare, clicca il tasto Annulla.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Seleziona Tutti i Files',

	'LBL_UW_REBUILD_TITLE'						=> 'Ricostruisci Risultato',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Modifiche Schema',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Mostra Impostazioni Rilevate',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Mostra Permessi Database Mancanti',
	'LBL_UW_SHOW_DETAILS'						=> 'Mostra Dettagli',
	'LBL_UW_SHOW_DIFFS'							=> 'Mostra Files che richiedono l´Unione Manuale',
	'LBL_UW_SHOW_NW_FILES'						=> 'Mostra Files con Permessi Errati',
	'LBL_UW_SHOW_SCHEMA'						=> 'Mostra Script con modifiche allo Schema',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Mostra Query con Problemi',
	'LBL_UW_SHOW'								=> 'Mostra',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'File Saltati',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Sovrascrittura File Saltata - Selezionata l´Unione Manuale.',
	'LBL_UW_SQL_RUN'							=> 'Seleziona quando l´SQL è stato eseguito manualmente',
	'LBL_UW_START_DESC'							=> 'Benvenuto nella nuova Guida di Aggiornamento. Questa guida è progettata per assistere gli amministratori nella fase di aggiornamento del software. Segui attentamente le istruzioni fornite.',
	'LBL_UW_START_DESC2'						=> 'Si raccomanda di eseguire l´aggiornamento su una copia dell´installazione e non direttamente sul server di produzione. Prima di procedere fai una copia del database e di tutti i files nella cartella del CRM.',
	'LBL_UW_START_DESC3'						=> 'Clicca il tasto Avanti per eseguire un controllo sul tuo sistema e assicurarti che sia pronto per l´aggiornamento. Il controllo comprende i permessi dei file, i privilegi del database e le impostazioni del server.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'La nuova Guida di Aggiornamento riprenderà ora il processo di aggiornamento. Continuare.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Benvenuto nella nuova Guida di Aggiornamento',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Controllo in corso, attendere prego. Il controllo potrebbe richiedere circa 30 secondi.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Ricerca di tutti i file pertinenti per il controllo.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Files',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Trovato',

	'LBL_UW_TITLE_CANCEL'						=> 'Annulla',
	'LBL_UW_TITLE_COMMIT'						=> 'Esegui l´Aggiornamento',
	'LBL_UW_TITLE_END'							=> 'Riepilogo',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Controllo di Completezza',
	'LBL_UW_TITLE_START'						=> 'Benvenuto',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Controlli del Sistema',
	'LBL_UW_TITLE_UPLOAD'						=> 'Carica Pacchetto',
	'LBL_UW_TITLE'								=> 'Guida Aggiornamenti',
	'LBL_UW_UNINSTALL'							=> 'Disinstalla',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Accetti Licenza',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Converti Licenza',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Moduli Aggiornati/Personalizzati',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'I seguenti moduli sono stai rilevati come personalizzati e preservati',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'I seguenti moduli sono stai rilevati come  Studio-personalizzati e sono stati aggiornati',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'The SuiteCRM Community Edition 5.0 uses GNU Affero General Public License version 3. This upgrade will convert your existing license to the new license displayed below.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Avvio in corso',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Controllo Sistema in corso',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Controllo Licenza in corso',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Controllo Preflight in corso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Copia file in corso',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Esecuzione Aggiornamento in corso',
    'LBL_UW_COMMIT_DESC'						=> 'Cliccare il tasto Avanti per eseguire gli script di aggiornamenti aggiuntivi.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Aggiornamento Scripts in corso',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Aggiornamento Sommario in corso',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'in corso',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tempo Passato',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Annullamento aggiornamento in corso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'L´aggiornamento può richiedere del tempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Controlli aggiornamenti in corso',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Caricamento aggiornamento pacchetto...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Vuoi che SuiteCRM elimini lo schema 451?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Upgrade Wizard elimina i vecchi 451 schemi',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Manual Drop Schema Post Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Metodo eliminazione vecchio schema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Mostra il vecchio schema che può essere eliminato',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Queries Saltate',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'È richiesta la versione 5 o superiore del Php.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'La vostra versione di php non è supportata da SuiteCRM.  Si deve installare una versione compatibile con l´applicazione SuiteCRM.  Si prega di consultare la Compatibility Matrix nella Release Notes per le versioni di PHP supportate. La tua versione è',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Backward Compatibility mode è attivo. Impostare zend.ze1_compatibility_mode ad Off per continuare',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Azione',
    'LBL_ML_CANCEL'             => 'Annulla',
    'LBL_ML_COMMIT'=>'Esegui',
    'LBL_ML_DESCRIPTION' => 'Descrizione',
    'LBL_ML_INSTALLED' => 'Data Intallazione',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data Pubblicazione',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Disinstallabile',
    'LBL_ML_VERSION' => 'Versione',
	'LBL_ML_INSTALL'=>'Installa',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Impostazioni indicatore',
	'LBL_CURRENT_PHP_VERSION' => '(La versione attuale di php è',
	'LBL_RECOMMENDED_PHP_VERSION' => '. La versione di php consigliata è la 5.2.1 o successive)',
	'LBL_MODULE_NAME' => 'Guida Aggiornamento',
	'LBL_UPLOAD_SUCCESS' => 'Il pacchetto per l´aggiornamento è stato caricato con successo. Clicca Avanti per eseguire il controllo finale.',
	'LBL_UW_TITLE_LAYOUTS' => 'Conferma Layout',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layout',
	'LBL_LAYOUT_MERGE_DESC' => 'Ci sono nuovi campi disponibili che sono stati aggiunti come parte di questo aggiornamento che possono essere automaticamente aggiunti al layout esistente dei moduli. Per saperne di più sui nuovi campi, consulta le Note di Rilascio della versione alla quale stai facendo l´upgrade.',
	'LBL_LAYOUT_MERGE_TITLE' => 'Clicca Avanti per confermare le modifiche e per finire l´aggiornamento.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Clicca Avanti per completare l´aggiornamento.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Conferma Layout',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Conferma Risultati Layout',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'I seguenti layouts sono stati uniti con successo:',
	'LBL_SELECT_FILE' => 'Seleziona File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Il file caricato non è compatibile con questa versione di SuiteCRM:',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'Il file caricato non è compatibile con questa versione(Community Edition, Professional, o Enterprise) di SuiteCRM:',
	'LBL_LANGPACKS' => 'Pacchetti Lingua' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Carica Moduli' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Aggiornamento' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temi' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'WorkFlow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Aggiornamento' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Elaborazione' /*for 508 compliance fix*/,

	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Il file caricato supera la dimensione massima impostata nel file php.ini',
													2 => 'Il file caricato supera la dimensione massima specificata nel modulo HTML (MAX_FILE_SIZE)',
													3 => 'Il file è stato caricato solo parzialmente',
													4 => 'Nessun file caricato',
													5 => 'Errore sconosciuto.',
													6 => 'Cartella temporanea mancante.',
													7 => 'Impossibile scrivere sul disco.',
													8 => 'Caricamento file bloccato per l´estensione.',
),
);
