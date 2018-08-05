<?php
// created: 2016-12-06 19:08:17
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'part_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PART_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'price' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'in_stock_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_IN_STOCK',
    'width' => '10%',
  ),
  'reorder_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_REORDER',
    'width' => '10%',
  ),
  'price_valid_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PRICE_VALID',
    'width' => '10%',
  ),
  'aos_product_category_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
    'id' => 'AOS_PRODUCT_CATEGORY_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Product_Categories',
    'target_record_key' => 'aos_product_category_id',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AOS_Products',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AOS_Products',
    'width' => '5%',
    'default' => true,
  ),
);