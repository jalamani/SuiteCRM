<?php
 // created: 2020-03-09 20:57:39
$layout_defs["Users"]["subpanel_setup"]['time_monthlytimesheet_users'] = array (
  'order' => 100,
  'module' => 'time_MonthlyTimesheet',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TIME_MONTHLYTIMESHEET_USERS_FROM_TIME_MONTHLYTIMESHEET_TITLE',
  'get_subpanel_data' => 'time_monthlytimesheet_users',
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
