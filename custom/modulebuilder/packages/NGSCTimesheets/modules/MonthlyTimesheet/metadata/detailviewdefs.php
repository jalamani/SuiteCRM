<?php
$module_name = 'time_MonthlyTimesheet';
$_object_name = 'time_monthlytimesheet';
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
            'name' => 'time_monthlytimesheet_intrn_interns_name',
            'label' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_INTRN_INTERNS_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered2',
            'label' => 'LBL_DATE_ENTERED2',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_exited',
            'label' => 'LBL_DATE_EXITED',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
