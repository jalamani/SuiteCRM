<?php
$module_name = 'time_MonthlyTimesheet';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input id="SAVE_HEADER" class="button primary" type="submit" value="Clock in" name="button" onclick="var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" accesskey="a" title="Save">',
          ),
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'type' => 'readonly',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_exited',
            'label' => 'LBL_DATE_EXITED',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
