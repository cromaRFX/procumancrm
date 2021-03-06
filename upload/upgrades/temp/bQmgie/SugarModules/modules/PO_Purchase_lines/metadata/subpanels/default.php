<?php
$module_name='PO_Purchase_lines';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'PO_Purchase_lines',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'line_nr' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_LINE_NR',
      'width' => '10%',
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'product_ref' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PRODUCT_REF',
      'id' => 'AOS_PRODUCTS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'AOS_Products',
      'target_record_key' => 'aos_products_id_c',
    ),
    'quantity' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_QUANTITY',
      'width' => '10%',
      'default' => true,
    ),
    'price' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_PRICE',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'PO_Purchase_lines',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'PO_Purchase_lines',
      'width' => '5%',
      'default' => true,
    ),
  ),
);