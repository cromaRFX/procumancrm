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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Aktif Kullanıcıları Göster',
		  'ShowLastModifiedRecords' => 'Değiştirilmiş son 10 kayıt ',
		  'ShowTopUser' => 'En çok kullanan kullanıcılar',
		  'ShowMyModuleUsage' => 'Modülümün Kullanımı',
		  'ShowMyWeeklyActivities' => 'Haftalık etkinliklerim',
		  'ShowTop3ModulesUsed' => 'En Sık Kullandığım ilk 3 modül',
		  'ShowLoggedInUserCount' => 'Etkin kullanıcı sayısı',
		  'ShowMyCumulativeLoggedInTime' => 'Toplu oturum açma zamanım (Bu hafta)',
		  'ShowUsersCumulativeLoggedInTime' => 'Kullanıcıların toplu oturum açma saat (Bu hafta)',
		  
		  //Column header mapping
		  'action' => 'Eylem',
		  'active_users' => 'Etkin kullanıcı sayısı',
		  'date_modified' => 'Son işlem tarihi',
		  'different_modules_accessed' => 'Erişilen Modüllerin Sayısı',
		  'first_name' => 'Adı',
		  'item_id' => 'ID',
		  'item_summary' => 'Paket Adı:',
		  'last_action' => 'Son Aksiyon Tarihi / Saati',
		  'last_name' => 'Soyadı',
		  'module_name' => 'Modül adı',
		  'records_modified' => 'Toplam Geliştirilmiş Kayıtlar',
		  'top_module' => 'En Yüksek Seviyede Erişilen Modül',
		  'total_count' => 'Toplam Sayfa Görüntüleri',
		  'total_login_time' => 'Saat (sa:dk:sn)',
		  'user_name' => 'SMTP Kullanıcı adı',
		  'users' => 'Kullanıcılar',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Etkin',
		  'LBL_MODULE_NAME_TITLE' => 'İzleyiciler',
		  'LBL_MODULE_NAME' => 'İzleyiciler',
		  'LBL_TRACKER_SETTINGS' => 'Takipçi Ayarları',
		  'LBL_TRACKER_QUERIES_DESC' => 'İzleyici sorguları',
		  'LBL_TRACKER_QUERIES_HELP' => '"Yavaş sorgulamayı kaydet" etkinleştirildiğinde ve sorgu çalıştırma süresi "Yavaş sorgu zaman eşiği" değerini aştığı durumlarda SQL ifadelerini takip et',
		  'LBL_TRACKER_PERF_DESC' => 'İzleyici Performansı ',
		  'LBL_TRACKER_PERF_HELP' => 'Veritabanı ile iletişim, erişilen dosyalar ve hafıza kullanımını takip eder',
		  'LBL_TRACKER_SESSIONS_DESC' => 'İzleyici oturumları',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Aktif kullanıcıları ve kullanıcıların oturum bilgilerini takip eder',
		  'LBL_TRACKER_DESC' => 'Takipçi Aksiyonları',
		  'LBL_TRACKER_HELP' => 'Kullanıcıların sayfa görüntülerini (erişilen modüller ve kayıtlar) ve kayıtlarını takip eder',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Planlayıcı tabloları kısalttığında takipçi verinin saklanacağı gün sayısı',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Gün Sayısı',
);
?>