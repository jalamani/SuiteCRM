<?php
$module_name = 'time_MonthlyTimesheet';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
    ),
    'advanced_search' => 
    array (
      'category_id' => 
      array (
        'name' => 'category_id',
        'default' => true,
      ),
      'subcategory_id' => 
      array (
        'name' => 'subcategory_id',
        'default' => true,
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
        'default' => true,
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
