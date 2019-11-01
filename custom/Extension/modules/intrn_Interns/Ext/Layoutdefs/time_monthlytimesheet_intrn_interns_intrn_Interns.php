<?php
 // created: 2019-10-31 22:53:24
$layout_defs["intrn_Interns"]["subpanel_setup"]['time_monthlytimesheet_intrn_interns'] = array (
  'order' => 100,
  'module' => 'time_MonthlyTimesheet',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_TIME_MONTHLYTIMESHEET_TITLE',
  'get_subpanel_data' => 'time_monthlytimesheet_intrn_interns',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
