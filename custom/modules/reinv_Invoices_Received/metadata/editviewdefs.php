<?php
$module_name = 'reinv_Invoices_Received';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="via_quotes" id="via_quotes" value="">',
        ),
      ),
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
      'syncDetailEditViews' => false,
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
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'aos_quotes_id_c',
                'name' => 'purchase_order',
                'number' => 'po_number_c',
                'term' => 'terms_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'po_number_c',
            'label' => 'LBL_PO_NUMBER',
            'customCode' => '<input type="text" name="po_number_c" id="po_number_c" size="30" maxlength="10" value="{$fields.po_number_c.value}" title="" tabindex="0" style="background-color:#b1b1b1;" readonly="readonly">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reference_c',
            'label' => 'LBL_REFERENCE',
          ),
          1 => 'assigned_user_name',
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
            'name' => 'invoice_received_date_c',
            'label' => 'LBL_INVOICE_RECEIVED_DATE',
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
            'name' => 'invoice_date',
            'label' => 'LBL_INVOICE_DATE',
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
            'name' => 'tax_c',
            'label' => 'LBL_TAX',
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
            'name' => 'total_shipping_c',
            'label' => 'LBL_TOTAL_SHIPPING',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'terms_c',
            'studio' => 'visible',
            'label' => 'LBL_TERMS',
          ),
          1 => 
          array (
            'name' => 'invoice_value',
            'label' => 'LBL_INVOICE_VALUE',
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
            'name' => 'supplier_sales_order_c',
            'label' => 'LBL_SUPPLIER_SALES_ORDER',
          ),
          1 => 
          array (
            'name' => 'cost_center_c',
            'studio' => 'visible',
            'label' => 'LBL_COST_CENTER',
          ),
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
