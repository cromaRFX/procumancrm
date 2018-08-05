<?php
$module_name = 'rfxa_RFX_Answer';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
            'name' => 'supplier_name',
            'label' => 'LBL_SUPPLIER_NAME',
          ),
          1 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'supplier_address',
            'label' => 'LBL_SUPPLIER_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'supplier_address_city',
            'label' => 'LBL_SUPPLIER_ADDRESS_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'supplier_address_postalcode',
            'label' => 'LBL_SUPPLIER_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'supplier_address_state',
            'label' => 'LBL_SUPPLIER_ADDRESS_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'supplier_address_country',
            'label' => 'LBL_SUPPLIER_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'supplier_phone',
            'label' => 'LBL_SUPPLIER_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'supplier_reference',
            'label' => 'LBL_SUPPLIER_REFERENCE',
          ),
          1 => 'exp_date',
        ),
        5 => 
        array (
          0 => 'document_name',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 'assigned_user_name',
        ),
        7 => 
        array (
          0 => 'status_id',
          1 => 
          array (
            'name' => 'supplier',
            'studio' => 'visible',
            'label' => 'LBL_SUPPLIER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'selection_remark',
            'label' => 'LBL_SELECTION_REMARK',
          ),
          1 => 
          array (
            'name' => 'comparable_value',
            'label' => 'LBL_COMPARABLE_VALUE',
          ),
        ),
      ),
    ),
  ),
);
?>
