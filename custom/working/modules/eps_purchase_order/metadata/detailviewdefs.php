<?php
$module_name = 'eps_purchase_order';
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
            'name' => 'username_c',
            'label' => 'LBL_USERNAME',
          ),
          1 => 
          array (
            'name' => 'vs_id_c',
            'label' => 'LBL_VS_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'supplier_c',
            'label' => 'LBL_SUPPLIER',
          ),
          1 => 
          array (
            'name' => 'po_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PO_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'company_code_c',
            'label' => 'LBL_COMPANY_CODE',
          ),
          1 => 
          array (
            'name' => 'po_number_c',
            'label' => 'LBL_PO_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'po_date_c',
            'label' => 'LBL_PO_DATE',
          ),
          1 => 
          array (
            'name' => 'asset_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'department_c',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'section_c',
            'label' => 'LBL_SECTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'po_status_c',
            'label' => 'LBL_PO_STATUS',
          ),
          1 => 
          array (
            'name' => 'location_c',
            'studio' => 'visible',
            'label' => 'LBL_LOCATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'business_area_c',
            'studio' => 'visible',
            'label' => 'LBL_BUSINESS_AREA',
          ),
          1 => 
          array (
            'name' => 'payment_term_c',
            'label' => 'LBL_PAYMENT_TERM',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'contact_person_c',
            'label' => 'LBL_CONTACT_PERSON',
          ),
          1 => 
          array (
            'name' => 'delivery_date_c',
            'label' => 'LBL_DELIVERY_DATE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'req_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_REQ_DESC',
          ),
          1 => 
          array (
            'name' => 'total_price_po_c',
            'label' => 'LBL_TOTAL_PRICE_PO',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'req_background_c',
            'label' => 'LBL_REQ_BACKGROUND',
          ),
          1 => 
          array (
            'name' => 'req_objective_c',
            'studio' => 'visible',
            'label' => 'LBL_REQ_OBJECTIVE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'sap_po_number_c',
            'label' => 'LBL_SAP_PO_NUMBER',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'line_items_c',
            'studio' => 'visible',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
