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
    'LBL_MODULE_NAME' => 'Proyek',
    'LBL_MODULE_TITLE' => 'Proyek: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian Proyek',
    'LBL_LIST_FORM_TITLE' => 'Daftar Proyek',
    'LBL_HISTORY_TITLE' => 'Histori',

    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat:',
    'LBL_DATE_MODIFIED' => 'Tanggal diubah:',
    'LBL_ASSIGNED_USER_ID' => 'Ditugaskan Ke:',
    'LBL_ASSIGNED_USER_NAME' => 'Ditugaskan ke:',
    'LBL_MODIFIED_USER_ID' => 'User ID Diubah:',
    'LBL_CREATED_BY' => 'Dibuat Oleh:',
    'LBL_TEAM_ID' => 'Tim:',
    'LBL_NAME' => 'Nama:',
    'LBL_PDF_PROJECT_NAME' => 'Nama:',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Dihapus:',
    'LBL_DATE' => 'Tanggal:',
    'LBL_DATE_START' => 'Tanggal Mulai',
    'LBL_DATE_END' => 'Tanggal akhir:',
    'LBL_PRIORITY' => 'Prioritas:',
    'LBL_STATUS' => 'Status',
    'LBL_MY_PROJECTS' => 'Proyek saya',
    'LBL_MY_PROJECT_TASKS' => 'Tugas proyek saya',

    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Total Perkiraan Usaha (jam):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Total Usaha sebenarnya(jam) :',

    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_DAYS' => 'hari',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ditugaskan kepada',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total Perkiraan Usaha (jam)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total Aktual Usaha (jam)',
    'LBL_LIST_UPCOMING_TASKS' => 'Tugas (1 Minggu mendatang)',
    'LBL_LIST_OVERDUE_TASKS' => 'tempo Tugas',
    'LBL_LIST_OPEN_CASES' => 'Buka Kasus',
    'LBL_LIST_END_DATE' => 'Tanggal Akhir',
    'LBL_LIST_TEAM_ID' => 'Tim',


    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyek',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tugas Proyek',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontak',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Account',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Peluang',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tanda Kutip',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Proyek baru',

    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Apakah anda yakin ingin menghapus kontak dari proyek ini?',

    'LNK_NEW_PROJECT' => 'Buat Proyek',
    'LNK_PROJECT_LIST' => 'Lihat Daftar Proyek',
    'LNK_NEW_PROJECT_TASK' => 'Buat Tugas Proyek',
    'LNK_PROJECT_TASK_LIST' => 'Lihat Tugas Proyek',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proyek',
    'LBL_ACTIVITIES_TITLE' => 'Kegiatan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kegiatan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histori',
    'LBL_QUICK_NEW_PROJECT' => 'Proyek baru',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tugas proyek',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Account',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Peluang',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kasus',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produk',


    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nama Tugas',
    'LBL_DURATION' => 'Durasi',
    'LBL_ACTUAL_DURATION' => 'Aktual Durasi',
    'LBL_START' => 'Mulai',
    'LBL_FINISH' => 'Selesai',
    'LBL_PREDECESSORS' => 'pendahulu',
    'LBL_PERCENT_COMPLETE' => '% selesai',
    'LBL_MORE' => 'Lebih ...',

    'LBL_PERCENT_BUSY' => '% Sibuk',
    'LBL_TASK_ID_WIDGET' => 'ID',
    'LBL_TASK_NAME_WIDGET' => 'Deskripsi',
    'LBL_DURATION_WIDGET' => 'Durasi',
    'LBL_START_WIDGET' => 'Tanggal Mulai',
    'LBL_FINISH_WIDGET' => 'Tanggal Akhir',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'Persen selesai',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Edit Tugas Proyek',

    'LBL_OPPORTUNITIES' => 'Peluang',
    'LBL_LAST_WEEK' => 'Sebelumnya',
    'LBL_NEXT_WEEK' => 'Berikutnya',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Project Resources',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tugas Proyek',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Libur',
    'LBL_PROJECT_INFORMATION' => 'Informasi Proyek',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Insert Rows' /*for 508 compliance fix*/,

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tugas proyek',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durasi',
    'LBL_ASSIGNED_USER_NAME' => 'Ditugaskan ke:',
    'LBL_ASSIGNED_USER_ID' => 'Ditugaskan Ke:',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_PREDECESSOR_TITLE' => 'Edit Predecessor',
    'LBL_START_DATE_TITLE' => 'Select Start Date',
    'LBL_END_DATE_TITLE' => 'Select End Date',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Edit %Complete',
    'LBL_ACTUAL_DURATION_TITLE' => 'Edit Actual Duration',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Hari',
    'LBL_HOURS' => 'Jam',
    'LBL_MONTHS' => 'Bulan',
    'LBL_SUBTASK' => 'Tugas',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_PERCENT_COMPLETE' => '% selesai',
    'LBL_RESOURCE_CHART' => 'Resource Chart',
    'LBL_RESOURCE_CHART_START' => 'Date Start:',
    'LBL_RESOURCE_CHART_END' => 'Date End:',
    'LBL_RESOURCES' => 'Select Resources:',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_TASK_NAME' => 'Nama Tugas',
    'LBL_PREDECESSORS' => 'pendahulu',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ditugaskan kepada',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Project Holidays',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Proyek',
    'LBL_TOOLTIP_TASK_NAME' => 'Nama Tugas',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durasi',
    'LBL_PROJECT_TITLE_HOVER' => 'Project Detail View',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Bulan Sebelumnya',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Bulan Depan',
    'LBL_RESOURCE_CHART_WEEK' => 'Minggu',
    'LBL_RESOURCE_CHART_DAY' => 'Hari',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Proyek saya',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
);
?>
