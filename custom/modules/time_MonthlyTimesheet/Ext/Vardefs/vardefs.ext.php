<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-10-30 23:58:40
$dictionary["time_MonthlyTimesheet"]["fields"]["time_monthlytimesheet_intrn_interns"] = array (
  'name' => 'time_monthlytimesheet_intrn_interns',
  'type' => 'link',
  'relationship' => 'time_monthlytimesheet_intrn_interns',
  'source' => 'non-db',
  'module' => 'intrn_Interns',
  'bean_name' => 'intrn_Interns',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_INTRN_INTERNS_TITLE',
  'id_name' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
);
$dictionary["time_MonthlyTimesheet"]["fields"]["time_monthlytimesheet_intrn_interns_name"] = array (
  'name' => 'time_monthlytimesheet_intrn_interns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_INTRN_INTERNS_TITLE',
  'save' => true,
  'id_name' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
  'link' => 'time_monthlytimesheet_intrn_interns',
  'table' => 'intrn_interns',
  'module' => 'intrn_Interns',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["time_MonthlyTimesheet"]["fields"]["time_monthlytimesheet_intrn_internsintrn_interns_ida"] = array (
  'name' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
  'type' => 'link',
  'relationship' => 'time_monthlytimesheet_intrn_interns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_TIME_MONTHLYTIMESHEET_TITLE',
);


// created: 2019-10-30 23:58:40
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


 // created: 2019-10-31 00:21:01
$dictionary['time_MonthlyTimesheet']['fields']['clockin_c']['inline_edit']='1';
$dictionary['time_MonthlyTimesheet']['fields']['clockin_c']['labelValue']='Clock-in';

 

 // created: 2019-10-31 00:21:51
$dictionary['time_MonthlyTimesheet']['fields']['clockout_c']['inline_edit']='1';
$dictionary['time_MonthlyTimesheet']['fields']['clockout_c']['labelValue']='Clock-out';

 

 // created: 2019-10-31 00:17:14
$dictionary['time_MonthlyTimesheet']['fields']['date_entered']['required']=false;
$dictionary['time_MonthlyTimesheet']['fields']['date_entered']['options']='';

 

 // created: 2019-10-31 00:41:21

 
?>