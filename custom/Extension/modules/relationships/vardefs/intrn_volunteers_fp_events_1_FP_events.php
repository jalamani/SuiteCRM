<?php
// created: 2020-02-24 22:07:43
$dictionary["FP_events"]["fields"]["intrn_volunteers_fp_events_1"] = array (
  'name' => 'intrn_volunteers_fp_events_1',
  'type' => 'link',
  'relationship' => 'intrn_volunteers_fp_events_1',
  'source' => 'non-db',
  'module' => 'intrn_Volunteers',
  'bean_name' => 'intrn_Volunteers',
  'vname' => 'LBL_INTRN_VOLUNTEERS_FP_EVENTS_1_FROM_INTRN_VOLUNTEERS_TITLE',
  'id_name' => 'intrn_volunteers_fp_events_1intrn_volunteers_ida',
);
$dictionary["FP_events"]["fields"]["intrn_volunteers_fp_events_1_name"] = array (
  'name' => 'intrn_volunteers_fp_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INTRN_VOLUNTEERS_FP_EVENTS_1_FROM_INTRN_VOLUNTEERS_TITLE',
  'save' => true,
  'id_name' => 'intrn_volunteers_fp_events_1intrn_volunteers_ida',
  'link' => 'intrn_volunteers_fp_events_1',
  'table' => 'intrn_volunteers',
  'module' => 'intrn_Volunteers',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["FP_events"]["fields"]["intrn_volunteers_fp_events_1intrn_volunteers_ida"] = array (
  'name' => 'intrn_volunteers_fp_events_1intrn_volunteers_ida',
  'type' => 'link',
  'relationship' => 'intrn_volunteers_fp_events_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INTRN_VOLUNTEERS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
);
