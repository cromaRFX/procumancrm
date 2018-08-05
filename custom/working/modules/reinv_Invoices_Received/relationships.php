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
  'reinv_invoices_received_modified_user' => 
  array (
    'id' => '4995fceb-49fd-8e6b-6074-5ac9bc69197f',
    'relationship_name' => 'reinv_invoices_received_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'reinv_Invoices_Received',
    'rhs_table' => 'reinv_invoices_received',
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
  'reinv_invoices_received_created_by' => 
  array (
    'id' => '49cb8b72-f77e-f003-e86a-5ac9bccca2ff',
    'relationship_name' => 'reinv_invoices_received_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'reinv_Invoices_Received',
    'rhs_table' => 'reinv_invoices_received',
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
  'reinv_invoices_received_assigned_user' => 
  array (
    'id' => '4a05dfcb-d14b-4825-8b68-5ac9bc9c9e18',
    'relationship_name' => 'reinv_invoices_received_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'reinv_Invoices_Received',
    'rhs_table' => 'reinv_invoices_received',
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
  'reinv_invoices_received_aos_quotes' => 
  array (
    'id' => '4a42a1e2-c76a-0220-861d-5ac9bc80f19d',
    'relationship_name' => 'reinv_invoices_received_aos_quotes',
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'reinv_Invoices_Received',
    'rhs_table' => 'reinv_invoices_received',
    'rhs_key' => 'aos_quotes_id_c',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'reinv_invoices_received_documents_1' => 
  array (
    'id' => '82474f7a-9369-d475-d481-5ac9bcbd3695',
    'relationship_name' => 'reinv_invoices_received_documents_1',
    'lhs_module' => 'reinv_Invoices_Received',
    'lhs_table' => 'reinv_invoices_received',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'reinv_invoices_received_documents_1_c',
    'join_key_lhs' => 'reinv_invoices_received_documents_1reinv_invoices_received_ida',
    'join_key_rhs' => 'reinv_invoices_received_documents_1documents_idb',
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
  'securitygroups_reinv_invoices_received_1' => 
  array (
    'id' => '847414d2-d5b0-75de-8df9-5ac9bc0ecd8c',
    'relationship_name' => 'securitygroups_reinv_invoices_received_1',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'reinv_Invoices_Received',
    'rhs_table' => 'reinv_invoices_received',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_reinv_invoices_received_1_c',
    'join_key_lhs' => 'securitygroups_reinv_invoices_received_1securitygroups_ida',
    'join_key_rhs' => 'securitygrd1f7eceived_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'admin',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'reinv_invoices_received_gdrcp_goods_receipt_1' => 
  array (
    'id' => '85052e1f-4a82-3e78-467c-5ac9bc85b0db',
    'relationship_name' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
    'lhs_module' => 'reinv_Invoices_Received',
    'lhs_table' => 'reinv_invoices_received',
    'lhs_key' => 'id',
    'rhs_module' => 'gdrcp_Goods_Receipt',
    'rhs_table' => 'gdrcp_goods_receipt',
    'rhs_key' => 'id',
    'join_table' => 'reinv_invoices_received_gdrcp_goods_receipt_1_c',
    'join_key_lhs' => 'reinv_invoa2ffeceived_ida',
    'join_key_rhs' => 'reinv_invoc7edreceipt_idb',
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
  'reinv_invoices_received_pay_payments_1' => 
  array (
    'rhs_label' => 'Payments',
    'lhs_label' => 'Invoices Received',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'reinv_Invoices_Received',
    'rhs_module' => 'pay_payments',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'reinv_invoices_received_pay_payments_1',
  ),
);