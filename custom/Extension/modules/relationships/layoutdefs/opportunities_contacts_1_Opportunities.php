<?php
 // created: 2019-10-08 23:51:03
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'ForOpportunities',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'opportunities_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
