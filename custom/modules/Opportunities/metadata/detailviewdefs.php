<?php
// created: 2018-07-13 10:16:23
$viewdefs = array (
  'Opportunities' => 
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
              'name' => 'scouting_id_c',
              'label' => 'LBL_SCOUTING_ID',
            ),
            1 => '',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'account_name',
          ),
          2 => 
          array (
            0 => 'date_closed',
            1 => 'opportunity_type',
          ),
          3 => 
          array (
            0 => 'next_step',
            1 => 'campaign_name',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'nl2br' => true,
            ),
            1 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
        ),
      ),
    ),
  ),
);