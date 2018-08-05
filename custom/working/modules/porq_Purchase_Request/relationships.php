<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 */


$relationships = array (
  'porq_purchase_request_modified_user' => 
  array (
    'id' => '19891590-7c6c-a6b4-00b3-5b4898b94f9b',
    'relationship_name' => 'porq_purchase_request_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'porq_Purchase_Request',
    'rhs_table' => 'porq_purchase_request',
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
  'porq_purchase_request_created_by' => 
  array (
    'id' => '1a061f10-62ed-69b5-b73c-5b489820da8b',
    'relationship_name' => 'porq_purchase_request_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'porq_Purchase_Request',
    'rhs_table' => 'porq_purchase_request',
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
  'porq_purchase_request_assigned_user' => 
  array (
    'id' => '1a831d6b-8bb3-ee5a-473b-5b4898d699da',
    'relationship_name' => 'porq_purchase_request_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'porq_Purchase_Request',
    'rhs_table' => 'porq_purchase_request',
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
  'securitygroups_porq_purchase_request' => 
  array (
    'id' => '1b001367-4d4d-7cde-ae4b-5b489887917d',
    'relationship_name' => 'securitygroups_porq_purchase_request',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'porq_Purchase_Request',
    'rhs_table' => 'porq_purchase_request',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'porq_Purchase_Request',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'default',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'aos_quotes_porq_purchase_request_1' => 
  array (
    'id' => '48a79cd1-0c24-6f0b-d20a-5b4898861104',
    'relationship_name' => 'aos_quotes_porq_purchase_request_1',
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'porq_Purchase_Request',
    'rhs_table' => 'porq_purchase_request',
    'rhs_key' => 'id',
    'join_table' => 'aos_quotes_porq_purchase_request_1_c',
    'join_key_lhs' => 'aos_quotes_porq_purchase_request_1aos_quotes_ida',
    'join_key_rhs' => 'aos_quotes_porq_purchase_request_1porq_purchase_request_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'porq_purchase_request_pay_payments_1' => 
  array (
    'id' => '4fbc1187-2fd0-1dcf-75a2-5b4898d95dae',
    'relationship_name' => 'porq_purchase_request_pay_payments_1',
    'lhs_module' => 'porq_Purchase_Request',
    'lhs_table' => 'porq_purchase_request',
    'lhs_key' => 'id',
    'rhs_module' => 'pay_payments',
    'rhs_table' => 'pay_payments',
    'rhs_key' => 'id',
    'join_table' => 'porq_purchase_request_pay_payments_1_c',
    'join_key_lhs' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
    'join_key_rhs' => 'porq_purchase_request_pay_payments_1pay_payments_idb',
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
  'porq_po_request_appr_approvals' => 
  array (
    'id' => '54dc9d26-dc26-77d7-b14b-5b48982dd6a1',
    'relationship_name' => 'porq_po_request_appr_approvals',
    'lhs_module' => 'porq_Purchase_Request',
    'lhs_table' => 'porq_purchase_request',
    'lhs_key' => 'id',
    'rhs_module' => 'appr_Approvals',
    'rhs_table' => 'appr_approvals',
    'rhs_key' => 'id',
    'join_table' => 'porq_po_request_appr_approvals_c',
    'join_key_lhs' => 'porq_po_request_appr_approvalsporq_purchase_request_ida',
    'join_key_rhs' => 'porq_po_request_appr_approvalsappr_approvals_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'porq_purchase_request_documents_1' => 
  array (
    'id' => '56921618-9da9-25fa-dd0d-5b4898107912',
    'relationship_name' => 'porq_purchase_request_documents_1',
    'lhs_module' => 'porq_Purchase_Request',
    'lhs_table' => 'porq_purchase_request',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'porq_purchase_request_documents_1_c',
    'join_key_lhs' => 'porq_purchase_request_documents_1porq_purchase_request_ida',
    'join_key_rhs' => 'porq_purchase_request_documents_1documents_idb',
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
  'porq_purchase_request_porq_purchase_request_lines_1' => 
  array (
    'rhs_label' => 'PR Line Items',
    'lhs_label' => 'Purchase Requisitions',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'porq_Purchase_Request',
    'rhs_module' => 'porq_Purchase_Request_Lines',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'porq_purchase_request_porq_purchase_request_lines_1',
  ),
);