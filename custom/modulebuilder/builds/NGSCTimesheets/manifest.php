<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'time',
  'author' => 'Janpaul Alamani',
  'description' => 'Clock in and out',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'NGSCTimesheets',
  'published_date' => '2019-10-31 21:53:23',
  'type' => 'module',
  'version' => 1572558804,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'NGSCTimesheets',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'time_MonthlyTimesheet',
      'class' => 'time_MonthlyTimesheet',
      'path' => 'modules/time_MonthlyTimesheet/time_MonthlyTimesheet.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/time_monthlytimesheet_users_Users.php',
      'to_module' => 'Users',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/time_monthlytimesheet_intrn_interns_intrn_Interns.php',
      'to_module' => 'intrn_Interns',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/time_monthlytimesheet_usersMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/time_monthlytimesheet_intrn_internsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/time_MonthlyTimesheet',
      'to' => 'modules/time_MonthlyTimesheet',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/time_MonthlyTimesheet.php',
      'to_module' => 'time_MonthlyTimesheet',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/time_MonthlyTimesheet.php',
      'to_module' => 'time_MonthlyTimesheet',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/intrn_Interns.php',
      'to_module' => 'intrn_Interns',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/time_monthlytimesheet_users_time_MonthlyTimesheet.php',
      'to_module' => 'time_MonthlyTimesheet',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/time_monthlytimesheet_users_Users.php',
      'to_module' => 'Users',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/time_monthlytimesheet_intrn_interns_time_MonthlyTimesheet.php',
      'to_module' => 'time_MonthlyTimesheet',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/time_monthlytimesheet_intrn_interns_intrn_Interns.php',
      'to_module' => 'intrn_Interns',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);