<?php
$viewdefs ['Contacts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          'SEND_CONFIRM_OPT_IN_EMAIL' => 
          array (
            'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'Contacts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Contacts\'; this.form.module_tab.value=\'Contacts\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'htmlOptions' => 
              array (
                'class' => 'button hidden',
                'id' => 'send_confirm_opt_in_email',
                'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Contacts\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'send_confirm_opt_in_email',
                'disabled' => true,
              ),
            ),
          ),
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'Manage Subscriptions',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
          'AOP_CREATE' => 
          array (
            'customCode' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'createPortalUser\';" value="{$MOD.LBL_CREATE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CREATE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'createPortalUser\';',
                'name' => 'buttonCreatePortalUser',
                'id' => 'createPortalUser_button',
              ),
              'template' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_DISABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'disablePortalUser\';" value="{$MOD.LBL_DISABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'disablePortalUser\';',
                'name' => 'buttonDisablePortalUser',
                'id' => 'disablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_ENABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'enablePortalUser\';" value="{$MOD.LBL_ENABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'enablePortalUser\';',
                'name' => 'buttonENablePortalUser',
                'id' => 'enablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Contacts/Contact.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION_DETAIL' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL11' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL14' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL13' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL11' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL10' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL9' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information_detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
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
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
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
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
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
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'referraltype_c',
            'studio' => 'visible',
            'label' => 'LBL_REFERRALTYPE',
          ),
          1 => 
          array (
            'name' => 'referral_c',
            'label' => 'LBL_REFERRAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'contactdate_c',
            'label' => 'LBL_CONTACTDATE',
          ),
          1 => 
          array (
            'name' => 'intakedate_c',
            'label' => 'LBL_INTAKEDATE',
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
            'name' => 'preferredpronoun_c',
            'label' => 'LBL_PREFERREDPRONOUN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ethnicity_c',
            'studio' => 'visible',
            'label' => 'LBL_ETHNICITY',
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
            'name' => 'marital_c',
            'label' => 'LBL_MARITAL',
          ),
          1 => 
          array (
            'name' => 'otherguard_c',
            'label' => 'LBL_OTHERGUARD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'children_c',
            'label' => 'LBL_CHILDREN',
          ),          
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => '',
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
      'lbl_editview_panel11' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assistancerequest_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSISTANCEREQUEST',
          ),
          1 => 
          array (
            'name' => 'other_assist_c',
            'label' => 'LBL_OTHER_ASSIST',
          ),
        ),
      ),
      'lbl_editview_panel14' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'jobassistance_c',
            'studio' => 'visible',
            'label' => 'LBL_JOBASSISTANCE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'resumeav_c',
            'studio' => 'visible',
            'label' => 'LBL_RESUMEAV',
          ),
          1 => 
          array (
            'name' => 'resumelink_c',
            'studio' => 'visible',
            'label' => 'LBL_RESUMELINK',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'presently_employed_c',
            'studio' => 'visible',
            'label' => 'LBL_PRESENTLY_EMPLOYED',
          ),
          1 => 
          array (
            'name' => 'previouslyemployed_c',
            'studio' => 'visible',
            'label' => 'LBL_PREVIOUSLYEMPLOYED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'employer_c',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'workauth_c',
            'studio' => 'visible',
            'label' => 'LBL_WORKAUTH',
          ),
          1 => 
          array (
            'name' => 'work_visa_c',
            'studio' => 'visible',
            'label' => 'LBL_WORK_VISA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'failedback_c',
            'studio' => 'visible',
            'label' => 'LBL_FAILEDBACK',
          ),
          1 => 
          array (
            'name' => 'bgrnd_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_BGRND_DESC',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mockinterviewdate_c',
            'label' => 'LBL_MOCKINTERVIEWDATE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel13' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'education_c',
            'studio' => 'visible',
            'label' => 'LBL_EDUCATION',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'school_c',
            'label' => 'LBL_SCHOOL',
          ),
          1 => 
          array (
            'name' => 'degree_c',
            'label' => 'LBL_DEGREE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'college_attendance_c',
            'label' => 'LBL_COLLEGE_ATTENDANCE',
          ),
          1 => 
          array (
            'name' => 'current_education_c',
            'label' => 'LBL_CURRENT_EDUCATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'educationplan_c',
            'label' => 'LBL_EDUCATIONPLAN',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'veteran_c',
            'label' => 'LBL_VETERAN',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'veteranstatus_c',
            'studio' => 'visible',
            'label' => 'LBL_VETERANSTATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dischargedate_c',
            'label' => 'LBL_DISCHARGEDATE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'disabled_c',
            'label' => 'LBL_DISABLED',
          ),
          1 => 
          array (
            'name' => 'disability_c',
            'label' => 'LBL_DISABILITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mentallyill_c',
            'label' => 'LBL_MENTALLYILL',
          ),
          1 => 
          array (
            'name' => 'mental_illness_c',
            'label' => 'LBL_MENTAL_ILLNESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'felon_c',
            'label' => 'LBL_FELON',
          ),
          1 => 
          array (
            'name' => 'incarcerated_c',
            'label' => 'LBL_INCARCERATED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'drug_addict_c',
            'label' => 'LBL_DRUG_ADDICT',
          ),
          1 => 
          array (
            'name' => 'foster_c',
            'label' => 'LBL_FOSTER',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'homeless_c',
            'label' => 'LBL_HOMELESS',
          ),
          1 => 
          array (
            'name' => 'housing_c',
            'studio' => 'visible',
            'label' => 'LBL_HOUSING',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'shelter_name_c',
            'label' => 'LBL_SHELTER_NAME',
          ),
          1 => 
          array (
            'name' => 'vispdat_screen_c',
            'label' => 'LBL_VISPDAT_SCREEN',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'financialrequests_c',
            'studio' => 'visible',
            'label' => 'LBL_FINANCIALREQUESTS',
          ),
        ),
      ),
      'lbl_detailview_panel11' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'monthly_income_c',
            'studio' => 'visible',
            'label' => 'LBL_MONTHLY_INCOME',
          ),
          1 => 
          array (
            'name' => 'savings_c',
            'studio' => 'visible',
            'label' => 'LBL_SAVINGS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rent_c',
            'studio' => 'visible',
            'label' => 'LBL_RENT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'transportation_c',
            'studio' => 'visible',
            'label' => 'LBL_TRANSPORTATION',
          ),
          1 => 
          array (
            'name' => 'carinsurance_c',
            'studio' => 'visible',
            'label' => 'LBL_CARINSURANCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'food_c',
            'studio' => 'visible',
            'label' => 'LBL_FOOD',
          ),
          1 => 
          array (
            'name' => 'utilities_c',
            'studio' => 'visible',
            'label' => 'LBL_UTILITIES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cellphone_c',
            'studio' => 'visible',
            'label' => 'LBL_CELLPHONE',
          ),
          1 => 
          array (
            'name' => 'diapers_c',
            'studio' => 'visible',
            'label' => 'LBL_DIAPERS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'clothes_c',
            'studio' => 'visible',
            'label' => 'LBL_CLOTHES',
          ),
          1 => 
          array (
            'name' => 'internet_c',
            'studio' => 'visible',
            'label' => 'LBL_INTERNET',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'daycare_c',
            'studio' => 'visible',
            'label' => 'LBL_DAYCARE',
          ),
          1 => 
          array (
            'name' => 'medicaldental_c',
            'studio' => 'visible',
            'label' => 'LBL_MEDICALDENTAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'educationbill_c',
            'studio' => 'visible',
            'label' => 'LBL_EDUCATIONBILL',
          ),
          1 => 
          array (
            'name' => 'traffictickets_c',
            'studio' => 'visible',
            'label' => 'LBL_TRAFFICTICKETS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'fun_c',
            'studio' => 'visible',
            'label' => 'LBL_FUN',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'other_c',
            'studio' => 'visible',
            'label' => 'LBL_OTHER',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'total_c',
            'label' => 'LBL_TOTAL',
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
            'label' => 'LBL_EMERGENCYFIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'emergencylast_name_c',
            'label' => 'LBL_EMERGENCYLAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emergency_email_c',
            'label' => 'LBL_EMERGENCY_EMAIL',
          ),
          1 => 
          array (
            'name' => 'emergency_phone_c',
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
      'lbl_editview_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_detailview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'outcome_c',
            'label' => 'LBL_OUTCOME',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hours_c',
            'label' => 'LBL_HOURS',
          ),
          1 => 
          array (
            'name' => 'returningclient_c',
            'label' => 'LBL_RETURNINGCLIENT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
