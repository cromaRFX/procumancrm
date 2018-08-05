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


$mod_strings = array(
    'LBL_MODULE_NAME' => 'Proje',
    'LBL_MODULE_TITLE' => 'Projeler: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Proje Arama',
    'LBL_LIST_FORM_TITLE' => 'Proje Listesi',
    'LBL_HISTORY_TITLE' => 'Tarihçe',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Giriş Tarihi:',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi:',
    'LBL_ASSIGNED_USER_ID' => 'Atanan Kişi:',
    'LBL_ASSIGNED_USER_NAME' => 'Atanan Kişi:',
    'LBL_MODIFIED_USER_ID' => 'Değiştiren Kullanıcı ID:',
    'LBL_CREATED_BY' => 'Oluşturan:',
    'LBL_TEAM_ID' => 'Takım',
    'LBL_NAME' => 'İsim:',
    'LBL_PDF_PROJECT_NAME' => 'Proje Adı:',
    'LBL_DESCRIPTION' => 'Tanım:',
    'LBL_DELETED' => 'Silindi:',
    'LBL_DATE' => 'Tarih:',
    'LBL_DATE_START' => 'Başlangıç Tarihi:',
    'LBL_DATE_END' => 'Bitiş Tarihi:',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_STATUS' => 'Durum:',
    'LBL_MY_PROJECTS' => 'Projelerım',
    'LBL_MY_PROJECT_TASKS' => 'Proje Görevlerim',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Toplam Tahmini Harcanacak Zaman(st.):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Toplam Gerçekleşen Harcanan Zaman (st.):',

    'LBL_LIST_NAME' => 'İsim',
    'LBL_LIST_DAYS' => 'gün',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Devredilen Kişi',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Toplam Tahmini Harcanacak Zaman(st.)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Toplam Gerçekleşen Harcanan Zaman (st.)',
    'LBL_LIST_UPCOMING_TASKS' => 'Gelecek Görevler(1 hafta)',
    'LBL_LIST_OVERDUE_TASKS' => 'Süresi Geçen Görevler',
    'LBL_LIST_OPEN_CASES' => 'Açık Şikayetler',
    'LBL_LIST_END_DATE' => 'Bitiş Tarihi',
    'LBL_LIST_TEAM_ID' => 'Takım',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Proje Görevleri',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'İlgililer',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Müşteriler',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Fiyat Teklifleri',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Yeni Proje',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Bu ilgiliyi, projeden kaldırmak istediğinizden emin misiniz?',

    'LNK_NEW_PROJECT' => 'Proje  Yarat',
    'LNK_PROJECT_LIST' => 'Proje Listesi',
    'LNK_NEW_PROJECT_TASK' => 'Proje Görevi Yarat',
    'LNK_PROJECT_TASK_LIST' => 'Proje Görevleri',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projeler',
    'LBL_ACTIVITIES_TITLE' => 'Etkinlikler',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Etkinlikler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarihçe',
    'LBL_QUICK_NEW_PROJECT' => 'Yeni Proje',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Proje Görevleri',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgililer',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Müşteriler',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Şikayetler',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Ürünler',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Görev Adı',
    'LBL_DURATION' => 'Süre',
    'LBL_ACTUAL_DURATION' => 'Fiili Süre',
    'LBL_START' => 'Başla',
    'LBL_FINISH' => 'Bitir',
    'LBL_PREDECESSORS' => 'Öncesindekiler',
    'LBL_PERCENT_COMPLETE' => '% tamamlandı',
    'LBL_MORE' => 'daha fazla...',

    'LBL_PERCENT_BUSY' => '% Meşgul',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'tanım',
    'LBL_DURATION_WIDGET' => 'süre',
    'LBL_START_WIDGET' => 'başlangıç_tarihi',
    'LBL_FINISH_WIDGET' => 'bitiş_tarihi',
    'LBL_PREDECESSORS_WIDGET' => 'öncekiler_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'tamamlanan_yüzde',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Proje Görevleri Düzenle',

    'LBL_OPPORTUNITIES' => 'Fırsatlar',
    'LBL_LAST_WEEK' => 'Önceki',
    'LBL_NEXT_WEEK' => 'Sonraki',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Proje Kaynakları',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Proje Görevleri',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'İzinler',
    'LBL_PROJECT_INFORMATION' => 'Projeye Genel Bakış',
    'LBL_EDITLAYOUT' => 'Sayfa Görünümü Düzenleme' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Insert Rows' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Proje Görevleri',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt görünümü',
    'LBL_VIEW_GANTT_DURATION' => 'Süre',
    'LBL_ASSIGNED_USER_NAME' => 'Atanan Kişi:',
    'LBL_ASSIGNED_USER_ID' => 'Atanan Kişi:',
    'LBL_TASK_TITLE' => 'Görevi Düzenle',
    'LBL_PREDECESSOR_TITLE' => 'Önceki düzenleme',
    'LBL_START_DATE_TITLE' => 'Başlangıç tarihi seçin',
    'LBL_END_DATE_TITLE' => 'Bitiş tarihi seçin',
    'LBL_DURATION_TITLE' => 'Süreyi Düzenle',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Edit %Complete',
    'LBL_ACTUAL_DURATION_TITLE' => 'Edit Actual Duration',
    'LBL_DESCRIPTION' => 'Tanım:',
    'LBL_LAG' => 'Gecikme',
    'LBL_DAYS' => 'Gün',
    'LBL_HOURS' => 'Saat',
    'LBL_MONTHS' => 'Aylar',
    'LBL_SUBTASK' => 'Görevler',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Yeni Görev Ekle',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Üst görev kimliği',
    'LBL_PERCENT_COMPLETE' => '% tamamlandı',
    'LBL_RESOURCE_CHART' => 'Resource Chart',
    'LBL_RESOURCE_CHART_START' => 'Date Start:',
    'LBL_RESOURCE_CHART_END' => 'Date End:',
    'LBL_RESOURCES' => 'Select Resources:',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_TASK_NAME' => 'Görev Adı',
    'LBL_PREDECESSORS' => 'Öncesindekiler',
    'LBL_ASSIGNED_TO' => 'Proje Yöneticisi',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Durum:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Devredilen Kişi',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Proje tatilleri',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projeler',
    'LBL_TOOLTIP_TASK_NAME' => 'Görev Adı',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Süre',
    'LBL_PROJECT_TITLE_HOVER' => 'Project Detail View',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Geçen Ay',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Sonraki ay',
    'LBL_RESOURCE_CHART_WEEK' => 'Hafta',
    'LBL_RESOURCE_CHART_DAY' => 'Gün',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Projelerım',
    'LBL_LIST_ASSIGNED_USER' => 'Proje Yöneticisi',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
);
?>
