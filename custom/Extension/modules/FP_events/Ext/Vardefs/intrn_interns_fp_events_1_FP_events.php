<?php
// created: 2020-02-24 22:05:07
$dictionary["FP_events"]["fields"]["intrn_interns_fp_events_1"] = array (
  'name' => 'intrn_interns_fp_events_1',
  'type' => 'link',
  'relationship' => 'intrn_interns_fp_events_1',
  'source' => 'non-db',
  'module' => 'intrn_Interns',
  'bean_name' => 'intrn_Interns',
  'vname' => 'LBL_INTRN_INTERNS_FP_EVENTS_1_FROM_INTRN_INTERNS_TITLE',
  'id_name' => 'intrn_interns_fp_events_1intrn_interns_ida',
);
$dictionary["FP_events"]["fields"]["intrn_interns_fp_events_1_name"] = array (
  'name' => 'intrn_interns_fp_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INTRN_INTERNS_FP_EVENTS_1_FROM_INTRN_INTERNS_TITLE',
  'save' => true,
  'id_name' => 'intrn_interns_fp_events_1intrn_interns_ida',
  'link' => 'intrn_interns_fp_events_1',
  'table' => 'intrn_interns',
  'module' => 'intrn_Interns',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["FP_events"]["fields"]["intrn_interns_fp_events_1intrn_interns_ida"] = array (
  'name' => 'intrn_interns_fp_events_1intrn_interns_ida',
  'type' => 'link',
  'relationship' => 'intrn_interns_fp_events_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INTRN_INTERNS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
);
