<?php
$module_name = 'time_MonthlyTimesheet';
$OBJECT_NAME = 'TIME_MONTHLYTIMESHEET';
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
  'DATE_EXITED' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_EXITED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
