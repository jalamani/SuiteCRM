<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-01-16 23:08:59
$dictionary["group_Partner"]["fields"]["group_partner_contacts"] = array (
  'name' => 'group_partner_contacts',
  'type' => 'link',
  'relationship' => 'group_partner_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_GROUP_PARTNER_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'group_partner_contactscontacts_ida',
);
$dictionary["group_Partner"]["fields"]["group_partner_contacts_name"] = array (
  'name' => 'group_partner_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GROUP_PARTNER_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'group_partner_contactscontacts_ida',
  'link' => 'group_partner_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["group_Partner"]["fields"]["group_partner_contactscontacts_ida"] = array (
  'name' => 'group_partner_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'group_partner_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GROUP_PARTNER_CONTACTS_FROM_GROUP_PARTNER_TITLE',
);

?>