<?php
$module_name='time_MonthlyTimesheet';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'time_MonthlyTimesheet',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'object_image' => 
    array (
      'widget_class' => 'SubPanelIcon',
      'width' => '2%',
      'image2' => 'attachment',
      'image2_url_field' => 
      array (
        'id_field' => 'selected_revision_id',
        'filename_field' => 'selected_revision_filename',
      ),
      'attachment_image_only' => true,
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'width' => '45%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'time_MonthlyTimesheet',
      'width' => '5%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'time_MonthlyTimesheet',
      'width' => '5%',
    ),
  ),
);