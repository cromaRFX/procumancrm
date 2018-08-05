<?php
$module_name='mapol_master_product_list';
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
      'popup_module' => 'mapol_master_product_list',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'internal_item_code' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_INTERNAL_ITEM_CODE',
      'width' => '10%',
      'default' => true,
    ),
    'preferred_product' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PREFERRED_PRODUCT',
      'id' => 'AOS_PRODUCTS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'AOS_Products',
      'target_record_key' => 'aos_products_id_c',
    ),
    'product_category' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PRODUCT_CATEGORY',
      'id' => 'AOS_PRODUCT_CATEGORIES_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'AOS_Product_Categories',
      'target_record_key' => 'aos_product_categories_id_c',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'mapol_master_product_list',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mapol_master_product_list',
      'width' => '5%',
      'default' => true,
    ),
  ),
);