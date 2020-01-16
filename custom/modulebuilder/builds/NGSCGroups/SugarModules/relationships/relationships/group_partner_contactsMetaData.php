<?php
// created: 2020-01-16 23:08:59
$dictionary["group_partner_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'group_partner_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'group_Partner',
      'rhs_table' => 'group_partner',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'group_partner_contacts_c',
      'join_key_lhs' => 'group_partner_contactscontacts_ida',
      'join_key_rhs' => 'group_partner_contactsgroup_partner_idb',
    ),
  ),
  'table' => 'group_partner_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'group_partner_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'group_partner_contactsgroup_partner_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'group_partner_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'group_partner_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'group_partner_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'group_partner_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'group_partner_contactsgroup_partner_idb',
      ),
    ),
  ),
);