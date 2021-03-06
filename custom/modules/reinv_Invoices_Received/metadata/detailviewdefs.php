<?php
$module_name = 'reinv_Invoices_Received';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'purchase_order',
            'studio' => 'visible',
            'label' => 'LBL_PURCHASE_ORDER',
          ),
          1 => 
          array (
            'name' => 'po_number_c',
            'label' => 'LBL_PO_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'invoice_received_date_c',
            'label' => 'LBL_INVOICE_RECEIVED_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'invoice_date',
            'label' => 'LBL_INVOICE_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'subtotal_before_tax_c',
            'label' => 'LBL_SUBTOTAL_BEFORE_TAX',
          ),
          1 => 
          array (
            'name' => 'tax_c',
            'label' => 'LBL_TAX',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_discounts_c',
            'label' => 'LBL_TOTAL_DISCOUNTS',
          ),
          1 => 
          array (
            'name' => 'total_shipping_c',
            'label' => 'LBL_TOTAL_SHIPPING',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'invoice_status_c',
            'studio' => 'visible',
            'label' => 'LBL_INVOICE_STATUS_C',
          ),
          1 => 
          array (
            'name' => 'invoice_value',
            'label' => 'LBL_INVOICE_VALUE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reference_c',
            'label' => 'LBL_REFERENCE',
          ),
          1 => 
          array (
            'name' => 'terms_c',
            'studio' => 'visible',
            'label' => 'LBL_TERMS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'gl_account_c',
            'studio' => 'visible',
            'label' => 'LBL_GL_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'invoice_paid',
            'label' => 'LBL_INVOICE_PAID',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'cost_center_c',
            'studio' => 'visible',
            'label' => 'LBL_COST_CENTER',
          ),
          1 => 'assigned_user_name',
        ),
        9 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'supplier_sales_order_c',
            'label' => 'LBL_SUPPLIER_SALES_ORDER',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'portal_inv_url_c',
            'label' => 'LBL_PORTAL_INV_URL',
          'type'=>'readonly',
'customCode' => '{if !empty($fields.portal_inv_url_c.value)}<span><a href="{$fields.portal_inv_url_c.value}" target="_new" >Download Portal Invoice</a></span>{/if}',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
