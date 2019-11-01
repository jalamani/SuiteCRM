<?php
// created: 2019-10-31 22:53:24
$dictionary["time_monthlytimesheet_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'time_monthlytimesheet_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'time_MonthlyTimesheet',
      'rhs_table' => 'time_monthlytimesheet',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'time_monthlytimesheet_users_c',
      'join_key_lhs' => 'time_monthlytimesheet_usersusers_ida',
      'join_key_rhs' => 'time_monthlytimesheet_userstime_monthlytimesheet_idb',
    ),
  ),
  'table' => 'time_monthlytimesheet_users_c',
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
      'name' => 'time_monthlytimesheet_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'time_monthlytimesheet_userstime_monthlytimesheet_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'time_monthlytimesheet_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'time_monthlytimesheet_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'time_monthlytimesheet_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'time_monthlytimesheet_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'time_monthlytimesheet_userstime_monthlytimesheet_idb',
      ),
    ),
  ),
);