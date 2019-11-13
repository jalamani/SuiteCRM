<?php
// created: 2019-10-31 22:53:24
$dictionary[""]["fields"]["time_monthlytimesheet_intrn_interns"] = array (
  'name' => 'time_monthlytimesheet_intrn_interns',
  'type' => 'link',
  'relationship' => 'time_monthlytimesheet_intrn_interns',
  'source' => 'non-db',
  'module' => 'intrn_Interns',
  'bean_name' => 'intrn_Interns',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_INTRN_INTERNS_TITLE',
  'id_name' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
);
$dictionary[""]["fields"]["time_monthlytimesheet_intrn_interns_name"] = array (
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
$dictionary[""]["fields"]["time_monthlytimesheet_intrn_internsintrn_interns_ida"] = array (
  'name' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
  'type' => 'link',
  'relationship' => 'time_monthlytimesheet_intrn_interns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_TIME_MONTHLYTIMESHEET_TITLE',
);
