<?php
// created: 2019-10-31 22:53:24
$dictionary["time_monthlytimesheet_intrn_interns"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'time_monthlytimesheet_intrn_interns' => 
    array (
      'lhs_module' => 'intrn_Interns',
      'lhs_table' => 'intrn_interns',
      'lhs_key' => 'id',
      'rhs_module' => 'time_MonthlyTimesheet',
      'rhs_table' => 'time_monthlytimesheet',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'time_monthlytimesheet_intrn_interns_c',
      'join_key_lhs' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
      'join_key_rhs' => 'time_monthlytimesheet_intrn_internstime_monthlytimesheet_idb',
    ),
  ),
  'table' => 'time_monthlytimesheet_intrn_interns_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'time_monthlytimesheet_intrn_internstime_monthlytimesheet_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'time_monthlytimesheet_intrn_internsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'time_monthlytimesheet_intrn_interns_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'time_monthlytimesheet_intrn_internsintrn_interns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'time_monthlytimesheet_intrn_interns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'time_monthlytimesheet_intrn_internstime_monthlytimesheet_idb',
      ),
    ),
  ),
);