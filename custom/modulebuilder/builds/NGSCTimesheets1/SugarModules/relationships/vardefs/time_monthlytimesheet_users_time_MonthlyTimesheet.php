<?php
// created: 2020-03-09 20:57:39
$dictionary["time_MonthlyTimesheet"]["fields"]["time_monthlytimesheet_users"] = array (
  'name' => 'time_monthlytimesheet_users',
  'type' => 'link',
  'relationship' => 'time_monthlytimesheet_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_USERS_FROM_USERS_TITLE',
  'id_name' => 'time_monthlytimesheet_usersusers_ida',
);
$dictionary["time_MonthlyTimesheet"]["fields"]["time_monthlytimesheet_users_name"] = array (
  'name' => 'time_monthlytimesheet_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'time_monthlytimesheet_usersusers_ida',
  'link' => 'time_monthlytimesheet_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["time_MonthlyTimesheet"]["fields"]["time_monthlytimesheet_usersusers_ida"] = array (
  'name' => 'time_monthlytimesheet_usersusers_ida',
  'type' => 'link',
  'relationship' => 'time_monthlytimesheet_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_USERS_FROM_TIME_MONTHLYTIMESHEET_TITLE',
);
