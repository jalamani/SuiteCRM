<?php
$dashletData['time_MonthlyTimesheetDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['time_MonthlyTimesheetDashlet']['columns'] = array (
  'date_modified' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
  ),
  'created_by' => 
  array (
    'width' => '8',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
  ),
);
