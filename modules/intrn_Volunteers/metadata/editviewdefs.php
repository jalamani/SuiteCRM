<?php
$module_name = 'intrn_Volunteers';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_CONSENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'phone_work',
        ),
        1 => 
        array (
          0 => 'last_name',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 'title',
          1 => 'phone_home',
        ),
        3 => 
        array (
          0 => 'department',
          1 => 'phone_other',
        ),
        4 => 
        array (
          0 => '',
          1 => 'phone_fax',
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => 'do_not_call',
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_consent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'started',
            'label' => 'LBL_STARTED ',
          ),
          1 => 
          array (
            'name' => 'finished',
            'label' => 'LBL_FINISHED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'testimonial',
            'label' => 'LBL_TESTIMONIAL',
          ),
        ),
      ),
    ),
  ),
);
;
?>
