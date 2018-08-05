<?php
$module_name = 'eps_vendor_selection';
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
            'name' => 'rfx_number_c',
            'label' => 'LBL_RFX_NUMBER',
          ),
          1 => 
          array (
            'name' => 'rfx_type_c',
            'studio' => 'visible',
            'label' => 'LBL_RFX_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rfx_deadline_c',
            'label' => 'LBL_RFX_DEADLINE',
          ),
          1 => 
          array (
            'name' => 'rfx_title_c',
            'label' => 'LBL_RFX_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'company_code_c',
            'studio' => 'visible',
            'label' => 'LBL_COMPANY_CODE',
          ),
          1 => 
          array (
            'name' => 'delivery_date_c',
            'label' => 'LBL_DELIVERY_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tender_description_c',
            'label' => 'LBL_TENDER_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'assign_to_c',
            'label' => 'LBL_ASSIGN_TO',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
