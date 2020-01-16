<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2020-01-16 23:08:59
$layout_defs["Contacts"]["subpanel_setup"]['group_partner_contacts'] = array (
  'order' => 100,
  'module' => 'group_Partner',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GROUP_PARTNER_CONTACTS_FROM_GROUP_PARTNER_TITLE',
  'get_subpanel_data' => 'group_partner_contacts',
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


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['opportunities']['override_subpanel_name'] = 'Contact_subpanel_opportunities';

?>