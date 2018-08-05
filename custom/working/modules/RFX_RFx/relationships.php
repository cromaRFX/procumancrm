<?php
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

$relationships = array (
  'rfx_rfx_modified_user' => 
  array (
    'id' => '2d055884-cb4b-75ac-b3e1-575572c3996f',
    'relationship_name' => 'rfx_rfx_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RFX_RFx',
    'rhs_table' => 'rfx_rfx',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'rfx_rfx_created_by' => 
  array (
    'id' => '2d43b084-76eb-296f-f781-575572cbeb7a',
    'relationship_name' => 'rfx_rfx_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RFX_RFx',
    'rhs_table' => 'rfx_rfx',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'rfx_rfx_assigned_user' => 
  array (
    'id' => '2d7f43c4-4732-0931-d280-575572fa46cf',
    'relationship_name' => 'rfx_rfx_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RFX_RFx',
    'rhs_table' => 'rfx_rfx',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'rfx_rfx_rfxa_rfx_answer_1' => 
  array (
    'id' => '93aded90-768e-e3cd-d661-575572f46444',
    'relationship_name' => 'rfx_rfx_rfxa_rfx_answer_1',
    'lhs_module' => 'RFX_RFx',
    'lhs_table' => 'rfx_rfx',
    'lhs_key' => 'id',
    'rhs_module' => 'rfxa_RFX_Answer',
    'rhs_table' => 'rfxa_rfx_answer',
    'rhs_key' => 'id',
    'join_table' => 'rfx_rfx_rfxa_rfx_answer_1_c',
    'join_key_lhs' => 'rfx_rfx_rfxa_rfx_answer_1rfx_rfx_ida',
    'join_key_rhs' => 'rfx_rfx_rfxa_rfx_answer_1rfxa_rfx_answer_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'opportunities_rfx_rfx_1' => 
  array (
    'id' => '9443070a-0344-0827-54ee-575572f845aa',
    'relationship_name' => 'opportunities_rfx_rfx_1',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'RFX_RFx',
    'rhs_table' => 'rfx_rfx',
    'rhs_key' => 'id',
    'join_table' => 'opportunities_rfx_rfx_1_c',
    'join_key_lhs' => 'opportunities_rfx_rfx_1opportunities_ida',
    'join_key_rhs' => 'opportunities_rfx_rfx_1rfx_rfx_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'rfx_rfx_documents_1' => 
  array (
    'id' => '966f11a2-8773-022e-a2ab-57557271f11b',
    'relationship_name' => 'rfx_rfx_documents_1',
    'lhs_module' => 'RFX_RFx',
    'lhs_table' => 'rfx_rfx',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'rfx_rfx_documents_1_c',
    'join_key_lhs' => 'rfx_rfx_documents_1rfx_rfx_ida',
    'join_key_rhs' => 'rfx_rfx_documents_1documents_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'rfx_rfx_accounts_1' => 
  array (
    'rhs_label' => 'Suppliers',
    'lhs_label' => 'RFx',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'RFX_RFx',
    'rhs_module' => 'Accounts',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'rfx_rfx_accounts_1',
  ),
);