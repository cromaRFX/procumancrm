<?php
$module_name = 'eps_purchase_requisition';
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
            'name' => 'department_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'req_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_REQ_DESC',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_required_c',
            'label' => 'LBL_DATE_REQUIRED',
          ),
          1 => 
          array (
            'name' => 'deliver_to_c',
            'studio' => 'visible',
            'label' => 'LBL_DELIVER_TO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cost_center_c',
            'studio' => 'visible',
            'label' => 'LBL_COST_CENTER',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'line_item_c',
            'studio' => 'visible',
            'label' => 'LBL_LINE_ITEM',
          ),
        ),
      ),
    ),
  ),
);
;
?>
