<?php
$module_name = 'FP_events';
$listViewDefs [$module_name] = 
array (
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_START' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '15%',
    'default' => true,
  ),
  'DATE_END' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_END',
    'width' => '15%',
    'default' => true,
  ),
  'DURATION_HOURS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURATION_HOURS',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
