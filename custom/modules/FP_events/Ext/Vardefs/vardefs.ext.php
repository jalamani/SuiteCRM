<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2019-11-12 23:20:53
$dictionary['FP_events']['fields']['date_entered']['comments']='Date record created';
$dictionary['FP_events']['fields']['date_entered']['merge_filter']='disabled';

 

 // created: 2019-11-12 23:23:12
$dictionary['FP_events']['fields']['date_start']['display_default']='now&09:00am';
$dictionary['FP_events']['fields']['date_start']['inline_edit']=true;
$dictionary['FP_events']['fields']['date_start']['merge_filter']='disabled';

 

 // created: 2019-11-12 23:11:44
$dictionary['FP_events']['fields']['name']['required']=false;
$dictionary['FP_events']['fields']['name']['inline_edit']=true;
$dictionary['FP_events']['fields']['name']['duplicate_merge']='disabled';
$dictionary['FP_events']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['FP_events']['fields']['name']['merge_filter']='disabled';
$dictionary['FP_events']['fields']['name']['unified_search']=false;

 
?>