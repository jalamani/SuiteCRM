<?php
/**
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

use SuiteCRM\Search\SearchTestAbstract;

require_once 'include/utils/LogicHook.php';
require_once 'modules/Schedulers/Scheduler.php';

class ElasticSearchInstallTest extends SearchTestAbstract
{
    /**
     * Asserts if the after_save and after_delete logic hooks for ElasticSearchIndexer are correctly loaded.
     */
    public function testHooksPresent()
    {
        $LogicHook = new LogicHook();
        $default_hooks = $LogicHook->loadHooks('');

        $afterSave = $default_hooks['after_save'];
        $afterDelete = $default_hooks['after_delete'];

        $found = 0;

        foreach ($afterSave as $item) {
            if (
                $item[2] == "lib/Search/ElasticSearch/ElasticSearchHooks.php" &&
                $item[3] == "SuiteCRM\Search\ElasticSearch\ElasticSearchHooks" &&
                $item[4] == "beanSaved"
            ) {
                $found++;
            }
        }

        self::assertEquals(1, $found, "Found the wrong number of Elasticsearch after_save hooks.");

        $found = 0;

        foreach ($afterDelete as $item) {
            if (
                $item[2] == "lib/Search/ElasticSearch/ElasticSearchHooks.php" &&
                $item[3] == "SuiteCRM\Search\ElasticSearch\ElasticSearchHooks" &&
                $item[4] == "beanDeleted"
            ) {
                $found++;
            }
        }

        self::assertEquals(1, $found, 'Found the wrong number of Elasticsearch after_delete hooks.');
    }

    /**
     * Asserts if the ElasticSearchIndexer scheduler is correctly loaded
     */
    public function testSchedulerPresent()
    {
//        self::markTestIncomplete('environment dependency');
//
//        $scheduler = new Scheduler();
//
//        $jobs = $scheduler->getJobsList();
//
//        self::assertArrayHasKey('function::runElasticSearchIndexerScheduler', $jobs);
    }

    /**
     * Asserts that the configuration for the ElasticSearch are present in the global config array.
     */
    public function testConfigPresent()
    {
        global $sugar_config;

        self::assertArrayHasKey('search', $sugar_config, "Search config not present");

        self::assertArrayHasKey('ElasticSearch', $sugar_config['search']);

        self::assertArrayHasKey('enabled', $sugar_config['search']['ElasticSearch']);
        self::assertArrayHasKey('host', $sugar_config['search']['ElasticSearch']);
        self::assertArrayHasKey('user', $sugar_config['search']['ElasticSearch']);
        self::assertArrayHasKey('pass', $sugar_config['search']['ElasticSearch']);
    }
}
