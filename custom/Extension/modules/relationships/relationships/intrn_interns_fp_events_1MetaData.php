<?php
// created: 2020-02-24 22:05:06
$dictionary["intrn_interns_fp_events_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'intrn_interns_fp_events_1' => 
    array (
      'lhs_module' => 'intrn_Interns',
      'lhs_table' => 'intrn_interns',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_events',
      'rhs_table' => 'fp_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'intrn_interns_fp_events_1_c',
      'join_key_lhs' => 'intrn_interns_fp_events_1intrn_interns_ida',
      'join_key_rhs' => 'intrn_interns_fp_events_1fp_events_idb',
    ),
  ),
  'table' => 'intrn_interns_fp_events_1_c',
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
      'name' => 'intrn_interns_fp_events_1intrn_interns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'intrn_interns_fp_events_1fp_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'intrn_interns_fp_events_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'intrn_interns_fp_events_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'intrn_interns_fp_events_1intrn_interns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'intrn_interns_fp_events_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'intrn_interns_fp_events_1fp_events_idb',
      ),
    ),
  ),
);