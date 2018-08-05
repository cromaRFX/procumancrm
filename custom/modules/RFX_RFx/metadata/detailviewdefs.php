<?php
$module_name = 'RFX_RFx';
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
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'email\');" value="{$MOD.LBL_EMAIL_INVITE_PARTICIPANTS}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="CREATE PDF">',
          ),
		  6 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createPO\';" value="{$MOD.LBL_CREATE_PO}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PO}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_po_button',
                'title' => '{$MOD.LBL_CREATE_PO}',
                'onclick' => 'createPO();',
                'name' => 'Create PO',
              ),
            ),
          ),
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
	   'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/RFX_RFx/js/detailview.js',
        ),
		1 => 
        array (
          'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
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
          0 => 'name',
          1 => 
          array (
            'name' => 'rfx_title_c',
            'label' => 'LBL_RFX_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rfx_type',
            'studio' => 'visible',
            'label' => 'LBL_RFX_TYPE',
          ),
          1 => 
          array (
            'name' => 'request_sent_date_c',
            'label' => 'LBL_REQUEST_SENT_DATE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'branch_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rfx_valid_c',
            'label' => 'LBL_RFX_VALID',
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'delivery_dest_c',
            'label' => 'LBL_DELIVERY_DEST',
          ),
          1 => 
          array (
            'name' => 'delivery_terms_c',
            'studio' => 'visible',
            'label' => 'LBL_DELIVERY_TERMS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'prepaid_freight_c',
            'label' => 'LBL_PREPAID_FREIGHT',
          ),
          1 => 
          array (
            'name' => 'ship_carrier_c',
            'label' => 'LBL_SHIP_CARRIER',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'project_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT',
          ),
          1 => 
          array (
            'name' => 'required_delivery_c',
            'label' => 'LBL_REQUIRED_DELIVERY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'rfxa_url_c',
            'label' => 'LBL_RFXA_URL',
          ),
		  1 => 'visible_for_all_suppliers', 
        ),
		8 => 
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
?>
