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
global $sugar_config;

$mod_strings = array(
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Süreç İşakışı Görevleri',
    'LBL_OOTB_REPORTS' => 'Rapor Üretimi Planlanmış Görevleri Çalıştır',
    'LBL_OOTB_IE' => 'Gelen Posta kutularını Kontrol et',
    'LBL_OOTB_BOUNCE' => 'Gecelik Çalışan Kampanya Geri Dönen E-postaları',
    'LBL_OOTB_CAMPAIGN' => 'Gecelik Çalışan Kitlesel E-posta Kampanyaları',
    'LBL_OOTB_PRUNE' => 'Ayın 1\'inde Veritabanındaki fazla kısımları at',
    'LBL_OOTB_TRACKER' => 'Takipçi Tabloları Kes',
    'LBL_OOTB_SUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'takipçi_oturumlar Çizelgesini Güncelle',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-posta hatırlatma bildirimlerini çalıştır',
    'LBL_OOTB_CLEANUP_QUEUE' => 'İş sırasını temizle',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Dosya sistemi belgelerden kaldırma',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Sıklık Derecesi:',
    'LBL_LIST_LIST_ORDER' => 'Planlayıcılar:',
    'LBL_LIST_NAME' => 'Planlayıcı:',
    'LBL_LIST_RANGE' => 'Aralık:',
    'LBL_LIST_REMOVE' => 'Kaldır:',
    'LBL_LIST_STATUS' => 'Durum:',
    'LBL_LIST_TITLE' => 'Planlayıcı Listesi:',
    'LBL_LIST_EXECUTE_TIME' => 'Burada Çalışacak:',
// human readable:
    'LBL_SUN' => 'Pazar',
    'LBL_MON' => 'Pazartesi',
    'LBL_TUE' => 'Salı',
    'LBL_WED' => 'Çarşamba',
    'LBL_THU' => 'Perşembe',
    'LBL_FRI' => 'Cuma',
    'LBL_SAT' => 'Cumartesi',
    'LBL_ALL' => 'Hergün',
    'LBL_EVERY_DAY' => 'Hergün',
    'LBL_AT_THE' => 'Burada',
    'LBL_EVERY' => 'Her',
    'LBL_FROM' => 'Kimden',
    'LBL_ON_THE' => 'Üstünde',
    'LBL_RANGE' => '-',
    'LBL_AT' => 'Burada',
    'LBL_IN' => 'içinde:',
    'LBL_AND' => 've',
    'LBL_MINUTES' => 'dakika',
    'LBL_HOUR' => 'saat',
    'LBL_HOUR_SING' => 'saat',
    'LBL_MONTH' => 'ay',
    'LBL_OFTEN' => 'Olabildiğince sık.',
    'LBL_MIN_MARK' => 'dakika işareti',


// crontabs
    'LBL_MINS' => 'dak',
    'LBL_HOURS' => 'sa',
    'LBL_DAY_OF_MONTH' => 'tarih',
    'LBL_MONTHS' => 'ay',
    'LBL_DAY_OF_WEEK' => 'gün',
    'LBL_CRONTAB_EXAMPLES' => 'Yukarısı standart crontab gösterimini kullanır.',
    'LBL_CRONTAB_SERVER_TIME_PRE' => 'The cron specifications run based on the server timezone (',
    'LBL_CRONTAB_SERVER_TIME_POST' => '). Please specify the scheduler execution time accordingly.',
// Labels
    'LBL_ALWAYS' => 'Her zaman',
    'LBL_CATCH_UP' => 'Vakti geçmiş ise çalıştır',
    'LBL_CATCH_UP_WARNING' => 'Eğer bu iş bir saniyeden daha fazla sürecek ise işareti kaldırın.',
    'LBL_DATE_TIME_END' => 'Tarih & Bitiş Zamanı',
    'LBL_DATE_TIME_START' => 'Tarih & Başlangıc Zamanı',
    'LBL_INTERVAL' => 'Sıklık Derecesi',
    'LBL_JOB' => 'Görev',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Son Başarılı Çalışma',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Planlayıcılar',
    'LBL_NAME' => 'Görev Adı',
    'LBL_NEVER' => 'Hiç',
    'LBL_NEW_FORM_TITLE' => 'Yeni Plan',
    'LBL_PERENNIAL' => 'sürekli',
    'LBL_SEARCH_FORM_TITLE' => 'Planlayıcı Arama',
    'LBL_SCHEDULER' => 'Planlayıcı:',
    'LBL_STATUS' => 'Durum',
    'LBL_TIME_FROM' => 'Aktif Form',
    'LBL_TIME_TO' => 'Aktifleştirmel İçin',
    'LBL_WARN_CURL_TITLE' => 'cURL Uyarısı:',
    'LBL_WARN_CURL' => 'Uyarı:',
    'LBL_WARN_NO_CURL' => 'Bu sistem PHP modülü içerisine etkinleştirilmiş/derlenmiş cURL kütüphanelerine sahip değil. Planlayıcı cURL işlevselliği olmadan görevlerini gerçekleştiremez.',
    'LBL_BASIC_OPTIONS' => 'Basit Kurulum',
    'LBL_ADV_OPTIONS' => 'Gelişmiş Seçenekler',
    'LBL_TOGGLE_ADV' => 'Gelişmiş Seçenekleri Göster',
    'LBL_TOGGLE_BASIC' => 'Temel Seçenekleri Göster',
// Links
    'LNK_LIST_SCHEDULER' => 'Planlayıcılar',
    'LNK_NEW_SCHEDULER' => 'Planlayıcı Oluştur',
    'LNK_LIST_SCHEDULED' => 'Planlanmış İşler',
// Messages
    'SOCK_GREETING' => "\"\nThis is the interface for SuiteCRM Schedulers Service. \n[ Available daemon commands: start|restart|shutdown|status ]\nTo quit, type \"quit\".  To shutdown the service \"shutdown\".\n\"",
    'ERR_DELETE_RECORD' => 'Bu planı silmek için bir kayıt numarası belirtmelisiniz.',
    'ERR_CRON_SYNTAX' => 'Geçersiz Cron söz dizimi',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinizden emin misiniz?',
    'NTC_STATUS' => 'Bu planlayıcının durumunu, İnaktif olarak belirleyerek Planlayıcı açılan listesinden kaldırın',
    'NTC_LIST_ORDER' => 'Bu planlayıcının, Planlayıcı açılan listesinde görünmesini istediğiniz sırayı belirleyin',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Windows Planlayıcı Kurulumu için',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Crontab Kurulumu için',
    'LBL_CRON_LINUX_DESC' => 'Note: In order to run SuiteCRM Schedulers, add the following line to the crontab file: ',
    'LBL_CRON_WINDOWS_DESC' => 'Note: In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands: ',
    'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent ' . $sugar_config['site_url'] . '/cron.php > /dev/null 2>&1',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Görev Logu',
    'LBL_EXECUTE_TIME' => 'Çalıştırılma Zamanı',

//jobstrings
    'LBL_REFRESHJOBS' => 'İşleri Yenile',
    'LBL_POLLMONITOREDINBOXES' => 'Kontrol Et',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Gecelik Çalışan Kitlesel E-Posta Kampanyaları',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Gecelik Çalışan Geri Dönen Kampanya E-Postaları',
    'LBL_PRUNEDATABASE' => 'Ayın 1\'inde Veritabanındaki fazla kısımları at',
    'LBL_TRIMTRACKER' => 'Takipçi Tabloları Kes',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Dosya sistemi belgelerden kaldırma',

    'LBL_AODOPTIMISEINDEX' => 'Gelişmiş OpenDiscovery dizin optimizasyonu',
    'LBL_AODINDEXUNINDEXED' => 'Sıralanmayan belgeleri dizin',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP anket izleme kutuları',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Zamanlanmış Raporları Çalıştır',
    'LBL_PROCESSAOW_WORKFLOW' => 'AOW iş akışı İşlemi ',
);
?>
