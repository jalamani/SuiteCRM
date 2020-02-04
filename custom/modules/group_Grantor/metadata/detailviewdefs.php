<?php
$module_name = 'group_Grantor';
$_object_name = 'group_grantor';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DESCRIPTION_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
          ),
          1 => 'phone_fax',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'submitdate',
            'label' => 'LBL_SUBMITDATE',
          ),
          1 => 
          array (
            'name' => 'awarddate',
            'label' => 'LBL_AWARDDATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'result_c',
            'label' => 'LBL_RESULT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'grantamount',
            'label' => 'LBL_GRANTAMOUNT',
          ),
          1 => 
          array (
            'name' => 'reportstatus',
            'studio' => 'visible',
            'label' => 'LBL_REPORTSTATUS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reportdate',
            'label' => 'LBL_REPORTDATE',
          ),
          1 => 
          array (
            'name' => 'reportcompletedate',
            'label' => 'LBL_REPORTCOMPLETEDATE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'nextyeardeadline',
            'label' => 'LBL_NEXTYEARDEADLINE',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
