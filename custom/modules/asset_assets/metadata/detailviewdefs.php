<?php
$module_name = 'asset_assets';
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
            'name' => 'company_code_c',
            'studio' => 'visible',
            'label' => 'LBL_COMPANY_CODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'asset_class_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_CLASS',
          ),
          1 => 
          array (
            'name' => 'description_2_c',
            'label' => 'LBL_DESCRIPTION_2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'asset_main_no_text_c',
            'label' => 'LBL_ASSET_MAIN_NO_TEXT',
          ),
          1 => 
          array (
            'name' => 'inventory_number_c',
            'label' => 'LBL_INVENTORY_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'business_area_c',
            'studio' => 'visible',
            'label' => 'LBL_BUSINESS_AREA',
          ),
          1 => 
          array (
            'name' => 'cost_center_c',
            'studio' => 'visible',
            'label' => 'LBL_COST_CENTER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'evaluation_gp_1_c',
            'studio' => 'visible',
            'label' => 'LBL_EVALUATION_GP_1',
          ),
          1 => 
          array (
            'name' => 'evaluation_gp_2_c',
            'studio' => 'visible',
            'label' => 'LBL_EVALUATION_GP_2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'evaluation_gp_3_c',
            'studio' => 'visible',
            'label' => 'LBL_EVALUATION_GP_3',
          ),
          1 => 
          array (
            'name' => 'evaluation_gp_4_c',
            'studio' => 'visible',
            'label' => 'LBL_EVALUATION_GP_4',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'evaluation_gp_5_c',
            'studio' => 'visible',
            'label' => 'LBL_EVALUATION_GP_5',
          ),
          1 => 
          array (
            'name' => 'location_c',
            'studio' => 'visible',
            'label' => 'LBL_LOCATION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
