<?php
$module_name = 'time_MonthlyTimesheet';
$OBJECT_NAME = 'TIME_MONTHLYTIMESHEET';
$listViewDefs [$module_name] = 
array (
  'TIME_MONTHLYTIMESHEET_INTRN_INTERNS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TIME_MONTHLYTIMESHEET_INTRN_INTERNS_FROM_INTRN_INTERNS_TITLE',
    'id' => 'TIME_MONTHLYTIMESHEET_INTRN_INTERNSINTRN_INTERNS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED2' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_ENTERED2',
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
