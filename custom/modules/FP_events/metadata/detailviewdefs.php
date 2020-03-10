<?php
$module_name = 'FP_events';
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
        'hidden' => 
        array (
          0 => '<input id="custom_hidden_1" type="hidden" name="custom_hidden_1" value=""/>',
          1 => '<input id="custom_hidden_2" type="hidden" name="custom_hidden_2" value=""/>',
        ),
      ),
      'maxColumns' => '2',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/checkbox.js',
        ),
        1 => 
        array (
          'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
        ),
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_PANEL_OVERVIEW' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_PANEL_OVERVIEW' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'intrn_interns_fp_events_1_name',
            'label' => 'LBL_INTRN_INTERNS_FP_EVENTS_1_FROM_INTRN_INTERNS_TITLE',
          ),
          1 => 
          array (
            'name' => 'intrn_volunteers_fp_events_1_name',
            'label' => 'LBL_INTRN_VOLUNTEERS_FP_EVENTS_1_FROM_INTRN_VOLUNTEERS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'comment' => 'Date of start of meeting',
            'label' => 'LBL_DATE',
          ),
          1 => 
          array (
            'name' => 'date_end',
            'comment' => 'Date meeting ends',
            'label' => 'LBL_DATE_END',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'customCode' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV} ',
            'label' => 'LBL_DURATION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
