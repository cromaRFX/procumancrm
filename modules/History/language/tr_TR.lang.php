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
  'LBL_MODULE_NAME' => 'Tarihçe',
  'LBL_MODULE_TITLE' => 'Tahihçe: Ana Menü',
  'LBL_SEARCH_FORM_TITLE' => 'Tarihçede Ara',
  'LBL_LIST_FORM_TITLE' => 'Tarihçe',
  'LBL_LIST_SUBJECT' => 'Konu',
  'LBL_LIST_CONTACT' => 'İlgili ',
  'LBL_LIST_RELATED_TO' => 'İlişkili ',
  'LBL_LIST_DATE' => 'Tarih',
  'LBL_LIST_TIME' => 'Başlangıç Saati',
  'LBL_LIST_CLOSE' => 'Kapat',
  'LBL_SUBJECT' => 'Konu:',
  'LBL_STATUS' => 'Durum:',
  'LBL_LOCATION' => 'Yer:',
  'LBL_DATE_TIME' => 'Başlangıç Tarih & Zaman:',
  'LBL_DATE' => 'Başlangıç Tarihi:',
  'LBL_TIME' => 'Başlangıç Saati:',
  'LBL_DURATION' => 'Süre:',
  'LBL_HOURS_MINS' => '(saat/dakika)',
  'LBL_CONTACT_NAME' => 'İlgili Adı',
  'LBL_MEETING' => 'Toplantı:',
  'LBL_DESCRIPTION_INFORMATION' => 'Tanım Bilgisi',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planlanmış',
  'LNK_NEW_CALL' => 'Tel.Araması Planlama',
  'LNK_NEW_MEETING' => 'Toplantı Planlama',
  'LNK_NEW_TASK' => 'Görev Oluştur',
  'LNK_NEW_NOTE' => 'Not ya da Ek oluştur',
  'LNK_NEW_EMAIL' => 'E-posta Arşivle',
  'LNK_CALL_LIST' => 'Tel.Aramaları',
  'LNK_MEETING_LIST' => 'Toplantılar',
  'LNK_TASK_LIST' => 'Görevler',
  'LNK_NOTE_LIST' => 'Notlar',
  'LNK_EMAIL_LIST' => 'E-postalar',
  'ERR_DELETE_RECORD' => 'Müşteriyi silmek için bir kayıt nosu belirtilmelidir.',
  'NTC_REMOVE_INVITEE' => 'Toplantıdan bu davetliyi kaldırmak istediğinizden emin misiniz? ',
  'LBL_INVITEE' => 'Davetliler',
  'LBL_LIST_DIRECTION' => 'Yön',
  'LBL_DIRECTION' => 'Yön',
  'LNK_NEW_APPOINTMENT' => 'Yeni Randevu',
  'LNK_VIEW_CALENDAR' => 'Bugün',
  'LBL_OPEN_ACTIVITIES' => 'Etkinlikleri Aç',
  'LBL_HISTORY' => 'Tarihçe',
  'LBL_UPCOMING' => 'Gelecek Randevularım',
  'LBL_TODAY' => 'aracılığıyla ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Görev Oluştur',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Görev Oluştur',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Toplantı Planlama',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Toplantı Planlama',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Tel.Araması Planlama',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Tel.Araması Planlama',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Not ya da Ek oluştur',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Not ya da Ek oluştur',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-posta Arşivle',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-posta Arşivle',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_DUE_DATE' => 'Teslim Tarihi',
  'LBL_LIST_LAST_MODIFIED' => 'Son Değiştirme:',
  'NTC_NONE_SCHEDULED' => 'Hiçbir şey zamanlanmamış.',
  'appointment_filter_dom' => array(
  	 'today' => 'bugün'
  	,'tomorrow' => 'yarın '
  	,'this Saturday' => 'bu hafta'
  	,'next Saturday' => 'sonraki hafta '
  	,'last this_month' => 'bu az '
  	,'last next_month' => 'sonraki ay'
  ),
  'LNK_IMPORT_NOTES'=>'Notları içeri aktar',
  'NTC_NONE'=>'boş',
	'LBL_ACCEPT_THIS'=>'Kabul mü?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tarihçe',
);

?>