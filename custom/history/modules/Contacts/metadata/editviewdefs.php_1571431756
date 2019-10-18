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
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
          1 => 
          array (
            'name' => 'photo',
            'studio' => 
            array (
              'listview' => true,
            ),
            'label' => 'LBL_PHOTO',
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'education_c',
            'label' => 'LBL_EDUCATION',
          ),
          1 => 
          array (
            'name' => 'degree_c',
            'label' => 'LBL_DEGREE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'educationplan_c',
            'label' => 'LBL_EDUCATIONPLAN',
          ),
          1 => 
          array (
            'name' => 'college_attendance_c',
            'label' => 'LBL_COLLEGE_ATTENDANCE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'current_education_c',
            'label' => 'LBL_CURRENT_EDUCATION',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emergencyfirst_name_c',
            'studio' => 'visible',
            'label' => 'LBL_EMERGENCYFIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'emergencylast_name_c',
            'studio' => 'visible',
            'label' => 'LBL_EMERGENCYLAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emergency_email_c',
            'studio' => 'visible',
            'label' => 'LBL_EMERGENCY_EMAIL',
          ),
          1 => 
          array (
            'name' => 'emergency_phone_c',
            'studio' => 'visible',
            'label' => 'LBL_EMERGENCY_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'emergency_relationship_c',
            'studio' => 'visible',
            'label' => 'LBL_EMERGENCY_RELATIONSHIP',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'disabled_c',
            'studio' => 'visible',
            'label' => 'LBL_DISABLED',
          ),
          1 => 
          array (
            'name' => 'disability_c',
            'studio' => 'visible',
            'label' => 'LBL_DISABILITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'drug_addict_c',
            'studio' => 'visible',
            'label' => 'LBL_DRUG_ADDICT',
          ),
          1 => 
          array (
            'name' => 'drugs_problem_c',
            'studio' => 'visible',
            'label' => 'LBL_DRUGS_PROBLEM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'felon_c',
            'studio' => 'visible',
            'label' => 'LBL_FELON',
          ),
          1 => 
          array (
            'name' => 'incarcerated_c',
            'studio' => 'visible',
            'label' => 'LBL_INCARCERATED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mentallyill_c',
            'studio' => 'visible',
            'label' => 'LBL_MENTALLYILL',
          ),
          1 => 
          array (
            'name' => 'mental_illness_c',
            'studio' => 'visible',
            'label' => 'LBL_MENTAL_ILLNESS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
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
          1 => 
          array (
            'name' => 'age_c',
            'label' => 'LBL_AGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'children_c',
            'label' => 'LBL_CHILDREN',
          ),
          1 => 
          array (
            'name' => 'marrital_c',
            'label' => 'LBL_MARRITAL',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
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
          0 => 
          array (
            'name' => 'workauth_c',
            'studio' => 'visible',
            'label' => 'LBL_WORKAUTH',
          ),
          1 => 
          array (
            'name' => 'bgrnd_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_BGRND_DESC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'failedback_c',
            'studio' => 'visible',
            'label' => 'LBL_FAILEDBACK',
          ),
          1 => 
          array (
            'name' => 'presently_employed_c',
            'studio' => 'visible',
            'label' => 'LBL_PRESENTLY_EMPLOYED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'referral_c',
            'studio' => 'visible',
            'label' => 'LBL_REFERRAL',
          ),
          1 => 
          array (
            'name' => 'referraltype_c',
            'studio' => 'visible',
            'label' => 'LBL_REFERRALTYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'resume_c',
            'studio' => 'visible',
            'label' => 'LBL_RESUME',
          ),
          1 => 
          array (
            'name' => 'resumeav_c',
            'studio' => 'visible',
            'label' => 'LBL_RESUMEAV',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'vispdat_screen_c',
            'studio' => 'visible',
            'label' => 'LBL_VISPDAT_SCREEN',
          ),
          1 => 
          array (
            'name' => 'public_assistance_c',
            'studio' => 'visible',
            'label' => 'LBL_PUBLIC_ASSISTANCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'homeless_c',
            'studio' => 'visible',
            'label' => 'LBL_HOMELESS',
          ),
          1 => 
          array (
            'name' => 'housing_c',
            'studio' => 'visible',
            'label' => 'LBL_HOUSING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lifecoach_c',
            'studio' => 'visible',
            'label' => 'LBL_LIFECOACH',
          ),
          1 => 
          array (
            'name' => 'monthly_income_c',
            'studio' => 'visible',
            'label' => 'LBL_MONTHLY_INCOME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'shelter_name_c',
            'studio' => 'visible',
            'label' => 'LBL_SHELTER_NAME',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'other_assist_c',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_ASSIST',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'birth_certificate_c',
            'studio' => 'visible',
            'label' => 'LBL_BIRTH_CERTIFICATE',
          ),
          1 => 
          array (
            'name' => 'dd214_c',
            'studio' => 'visible',
            'label' => 'LBL_DD214',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'driver_license_c',
            'studio' => 'visible',
            'label' => 'LBL_DRIVER_LICENSE',
          ),
          1 => 
          array (
            'name' => 'driver_license_image_c',
            'studio' => 'visible',
            'label' => 'LBL_DRIVER_LICENSE_IMAGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'passport_c',
            'studio' => 'visible',
            'label' => 'LBL_PASSPORT',
          ),
          1 => 
          array (
            'name' => 'passport_image_c',
            'studio' => 'visible',
            'label' => 'LBL_PASSPORT_IMAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ssn_c',
            'studio' => 'visible',
            'label' => 'LBL_SSN',
          ),
          1 => 
          array (
            'name' => 'ssndoc_c',
            'studio' => 'visible',
            'label' => 'LBL_SSNDOC',
          ),
        ),
      ),
      
    ),
  ),
);
;
?>
