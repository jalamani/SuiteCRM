<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => // Contact Details panel
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'middle_name_c',
            'label' => 'LBL_MIDDLE_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'Contact fax number',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => // Education History panel
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => // Additional Info panel
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'age_c',
            'label' => 'LBL_AGE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => //Identification of Disability panel
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => // Gender, Ethnicity, Veteran Status panel
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
          1 => 
          array (
            'name' => 'ethnicity_c',
            'studio' => 'visible',
            'label' => 'LBL_ETHNICITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'veteran_c',
            'label' => 'LBL_VETERAN',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => //Job Specific Panel
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'work_visa_c',
            'studio' => 'visible',
            'label' => 'LBL_WORK_VISA',
          ),
        ),
        1 => 
        array (
          0 => array (
            'name' => 'workauth_c',
            'studio' => 'visible',
            'label' => 'LBL_WORKAUTH',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
