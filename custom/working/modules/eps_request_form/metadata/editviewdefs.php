<?php
$module_name = 'eps_request_form';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
            'name' => 'rf_number_c',
            'label' => 'LBL_RF_NUMBER',
          ),
          1 => 
          array (
            'name' => 'rf_status_c',
            'label' => 'LBL_RF_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'requestor_c',
            'label' => 'LBL_REQUESTOR',
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
            'name' => 'rf_date_c',
            'label' => 'LBL_RF_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'item_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ITEM_TYPE',
          ),
          1 => 
          array (
            'name' => 'delivery_date_c',
            'label' => 'LBL_DELIVERY_DATE',
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
            'name' => 'location_c',
            'label' => 'LBL_LOCATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'business_area_c',
            'label' => 'LBL_BUSINESS_AREA',
          ),
          1 => 
          array (
            'name' => 'req_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_REQ_DESC',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'req_objective_c',
            'studio' => 'visible',
            'label' => 'LBL_REQ_OBJECTIVE',
          ),
          1 => 
          array (
            'name' => 'req_background_c',
            'studio' => 'visible',
            'label' => 'LBL_REQ_BACKGROUND',
          ),
        ),
        7 => 
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
