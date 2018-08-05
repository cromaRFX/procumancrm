<?php
$module_name = 'rfxa_RFX_Answer';
$_object_name = 'rfxa_rfx_answer';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
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
            'name' => 'rfxa_id',
            'label' => 'LBL_RFXA_ID',
          ),
        ),
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'supplier_reference',
            'label' => 'LBL_SUPPLIER_REFERENCE',
          ),
          1 => 'exp_date',
        ),
        6 => 
        array (
          0 => 'document_name',
          1 => 'uploadfile',
        ),
        7 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'status_id',
            'studio' => 'visible',
            'label' => 'LBL_DOC_STATUS',
          ),
          1 => 
          array (
            'name' => 'supplier',
            'studio' => 'visible',
            'label' => 'LBL_SUPPLIER',
          ),
        ),
        9 => 
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
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'rfx_rfx_rfxa_rfx_answer_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
