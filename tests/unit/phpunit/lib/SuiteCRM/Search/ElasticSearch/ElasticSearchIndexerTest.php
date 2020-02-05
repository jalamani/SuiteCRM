<?php
/** @noinspection PhpMethodParametersCountMismatchInspection */
/** @noinspection PhpUnhandledExceptionInspection */

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

use Mockery as m;
use SuiteCRM\Search\ElasticSearch\ElasticSearchIndexer;
use SuiteCRM\Search\ElasticSearch\ElasticSearchIndexer as i;
use SuiteCRM\Search\Index\Documentify\SearchDefsDocumentifier;
use SuiteCRM\Search\SearchTestAbstract;
use SuiteCRM\Utility\BeanJsonSerializerTestData\BeanMock;

include_once __DIR__ . '/../../Utility/BeanJsonSerializerTestData/BeanMock.php';
include_once __DIR__ . '/../SearchTestAbstract.php';

class ElasticSearchIndexerTest extends SearchTestAbstract
{
    public function testGetModulesToIndex()
    {
        $indexer = new ElasticSearchIndexer(null);

        $modules = $indexer->getModulesToIndex();

        self::assertTrue(is_array($modules), "Result is not an array.");

        self::assertTrue(count($modules) > 0, "The array is empty.");

        self::assertTrue(in_array('Contacts', $modules), "Contacts was not found in the list of modules to index");
    }

    public function testIndexBeans()
    {
        $client = m::mock('\Elasticsearch\Client');

        $client
            ->shouldReceive('bulk')
            ->times(5);

        $mockedModule = 'Accounts';

        $bean1 = BeanFactory::newBean($mockedModule);
        $bean2 = BeanFactory::newBean($mockedModule);
        $bean3 = BeanFactory::newBean($mockedModule);
        $bean4 = BeanFactory::newBean($mockedModule);
        $bean5 = BeanFactory::newBean($mockedModule);
        $bean6 = BeanFactory::newBean($mockedModule);
        $bean7 = BeanFactory::newBean($mockedModule);
        $bean8 = BeanFactory::newBean($mockedModule);

        $bean1->fromArray(["id" => 1, 'name' => 'name 1', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name"]]);
        $bean2->fromArray(["id" => 2, 'name' => 'name 2', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name"]]);
        $bean3->fromArray(["id" => 3, 'name' => 'name 3', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name"]]);
        $bean4->fromArray(["id" => 4, 'name' => 'name 4', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name"]]);
        $bean5->fromArray(["id" => 5, 'name' => 'name 5', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name"]]);
        $bean6->fromArray(["id" => 6, 'name' => 'name 6', "deleted" => true, "module_name" => $mockedModule, "column_fields" => ["name"]]);
        $bean7->fromArray(["id" => 7, 'name' => 'name 7', "opt" => 'ciao', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name", "opt"]]);
        $bean8->fromArray(["id" => 8, 'name' => 'name 8', "opt" => 'ciao', "deleted" => false, "module_name" => $mockedModule, "column_fields" => ["name", "opt"]]);

        $mockedBeans = [$bean1, $bean2, $bean3, $bean4, $bean5, $bean6, $bean7, $bean8];

        $i = new i($client);

        $i->setBatchSize(2);

        $i->indexBeans($mockedModule, $mockedBeans);

        self::assertEquals(null, $i->getIndexedModulesCount(), "Wrong number of modules indexed");
        self::assertEquals(1, $i->getRemovedRecordsCount(), "Wrong number of records removed");
        self::assertEquals(7, $i->getIndexedRecordsCount(), "Wrong number of records indexed");
        self::assertEquals(9, $i->getIndexedFieldsCount(), "Wrong number of fields indexed");
    }

    public function testGettersAndSetters()
    {
        $batchSize = 20;
        $index = 'test1';
        $i = new i(null);

        $i->setBatchSize($batchSize);
        $i->setIndex($index);
        self::assertEquals($batchSize, $i->getBatchSize());
        self::assertEquals($index, $i->getIndex());

        $i = new i(null);
        $batchSize = 50;
        $index = 'test2';

        $i->setBatchSize($batchSize);
        $i->setIndex($index);
        self::assertEquals($batchSize, $i->getBatchSize());
        self::assertEquals($index, $i->getIndex());
    }

    public function testIndexBean()
    {
        $bean = $this->getTestBean();
        $client = m::mock('\Elasticsearch\Client');

        $client
            ->shouldReceive('index')
            ->once();

        $indexer = new ElasticSearchIndexer($client);

        $indexer->indexBean($bean);
    }

    /**
     * @return SugarBean
     */
    private function getTestBean()
    {
        /** @var SugarBean $bean */
        $bean = new BeanMock(__DIR__ . '/../../Utility/BeanJsonSerializerTestData/ContactBean.json');
        return $bean;
    }

    public function testMakeIndexParamsFromBean()
    {
        $bean = $this->getTestBean();
        $expected = $this->getExpectedHeader();
        $expected['body'] = $this->getExpectedBody();

        $indexer = new ElasticSearchIndexer(null);

        $actual = self::invokeMethod($indexer, 'makeIndexParamsFromBean', [$bean]);

        self::assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    private function getExpectedHeader()
    {
        $expected = [
            'index' => 'main',
            'type' => 'Contacts',
            'id' => '00000000-0000-0000-0000-000000000000',
        ];
        return $expected;
    }

    /**
     * @return array
     */
    private function getExpectedBody()
    {
        $expected = [
            'meta' =>
                [
                    'created' =>
                        [
                            'date' => '2018-06-12 11:01:34',
                            'user_id' => '1',
                            'user_name' => 'Administrator',
                        ],
                    'modified' =>
                        [
                            'date' => '2018-06-12 11:01:34',
                            'user_id' => '1',
                            'user_name' => 'Administrator',
                        ],
                    'assigned' =>
                        [
                            'user_id' => 'seed_max_id',
                            'user_name' => 'Max Jensen',
                        ],
                ],
            'name' =>
                [
                    'salutation' => 'Ms.',
                    'first' => 'Cindy',
                    'last' => 'Espana',
                ],
            'account' =>
                [
                    'title' => 'Director Operations',
                    'department' => 'Genetics',
                    'name' => 'Start Over Trust',
                    'id' => '39363e96-5eed-0221-9889-5b1fa86ebb52',
                ],
            'phone' =>
                [
                    'home' => '4451633872',
                    'mobile' => '9788363300',
                    'work' => '7111123512',
                ],
            'address' =>
                [
                    'primary' =>
                        [
                            'street' => '345 Sugar Blvd.',
                            'city' => 'Salt Lake City',
                            'state' => 'CA',
                            'postalcode' => '58821',
                            'country' => 'USA',
                        ],
                ],
            'lead' => [
                'type' => 'Web Site',
            ],
            'email' =>
                [
                    0 => 'kid79@example.co.jp',
                ],
        ];
        return $expected;
    }

    public function testMakeIndexParamsBodyFromBean1()
    {
        $bean = $this->getTestBean();
        $indexer = new ElasticSearchIndexer(null);
        $expected = $this->getExpectedBody();

        $actual = self::invokeMethod($indexer, 'makeIndexParamsBodyFromBean', [$bean]);
        self::assertEquals($expected, $actual);
    }

    public function testMakeIndexParamsBodyFromBean2()
    {
        $bean = $this->getTestBean();
        $indexer = new ElasticSearchIndexer(null);
        $indexer->setDocumentifier(new SearchDefsDocumentifier());

        $expected = [
            'name' => [
                'first' => 'Cindy',
                'last' => 'Espana',
            ],
            'phone' =>
                [
                    'mobile' => '9788363300',
                    'work' => '7111123512',
                    'home' => '4451633872',
                ],
            'address' => [
                'primary' => [
                    'street' => '345 Sugar Blvd.',
                    'city' => 'Salt Lake City',
                    'state' => 'CA',
                    'postalcode' => '58821',
                    'country' => 'USA',
                ],
            ],
            'meta' => [
                'created' =>
                    [
                        'date' => '2018-06-12 11:01:34',
                        'user_id' => '1',
                        'user_name' => 'Administrator',
                    ],
                'modified' =>
                    [
                        'date' => '2018-06-12 11:01:34',
                        'user_id' => '1',
                        'user_name' => 'Administrator',
                    ],
                'assigned' =>
                    [
                        'user_id' => 'seed_max_id',
                        'user_name' => 'Max Jensen',
                    ],
            ],
            'lead_source' => 'Web Site',
        ];

        $actual = self::invokeMethod($indexer, 'makeIndexParamsBodyFromBean', [$bean]);

        self::assertEquals($expected, $actual);
    }

    public function testRemoveBeans()
    {
        $mock = m::mock('Elasticsearch\Client');
        $beans = [$this->getTestBean(), $this->getTestBean()];

        $params = [
            'client' => [
                'ignore' => [404],
            ],
            'body' => [
                ['delete' => ['index' => 'main', 'type' => 'Contacts', 'id' => '00000000-0000-0000-0000-000000000000',]],
                ['delete' => ['index' => 'main', 'type' => 'Contacts', 'id' => '00000000-0000-0000-0000-000000000000',]],
            ]
        ];

        $mock
            ->shouldReceive('bulk')
            ->once()
            ->with($params);

        $indexer = new ElasticSearchIndexer($mock);

        $indexer->removeBeans($beans, true);
    }

    public function testRemoveBean()
    {
        $mock = m::mock('Elasticsearch\Client');
        $bean = $this->getTestBean();

        $params = [
            'index' => 'main',
            'type' => 'Contacts',
            'id' => '00000000-0000-0000-0000-000000000000',
        ];

        $mock
            ->shouldReceive('delete')
            ->once()
            ->with($params);

        $indexer = new ElasticSearchIndexer($mock);

        $indexer->removeBean($bean);
    }

    public function testMakeParamsHeaderFromBean()
    {
        /** @var SugarBean $bean */
        $bean = $this->getTestBean();
        $expected = $this->getExpectedHeader();

        $indexer = new ElasticSearchIndexer(null);

        $actual = self::invokeMethod($indexer, 'makeParamsHeaderFromBean', [$bean]);

        self::assertEquals($expected, $actual);
    }

    public function testRemoveIndex()
    {
        list($mockClient, $mockIndices) = $this->getMockIndices();

        $mockIndices
            ->shouldReceive('delete')
            ->once()
            ->with(['index' => 'main', 'client' => ['ignore' => [404]]]);

        $indexer = new ElasticSearchIndexer($mockClient);

        $indexer->removeIndex();
    }

    /**
     * @return array(\Elasticsearch\Client, \Elasticsearch\Namespaces\IndicesNamespace)
     */
    public function getMockIndices()
    {
        $mockClient = m::mock('Elasticsearch\Client');
        $mockIndices = m::mock('Elasticsearch\Namespaces\IndicesNamespace');

        $mockClient
            ->shouldReceive('indices')
            ->once()
            ->withNoArgs()
            ->andReturn($mockIndices);
        return [$mockClient, $mockIndices];
    }

    public function testRemoveIndex2()
    {
        $index = uniqid();
        list($mockClient, $mockIndices) = $this->getMockIndices();

        $mockIndices
            ->shouldReceive('delete')
            ->once()
            ->with(['index' => $index, 'client' => ['ignore' => [404]]]);

        $indexer = new ElasticSearchIndexer($mockClient);
        $indexer->removeIndex($index);
    }

    public function testDeleteAllIndexes()
    {
        list($mockClient, $mockIndices) = $this->getMockIndices();

        $mockIndices
            ->shouldReceive('delete')
            ->once()
            ->with(['index' => '_all']);

        $indexer = new ElasticSearchIndexer($mockClient);
        $indexer->removeAllIndices();
    }

    public function testDeleteAllIndexes2()
    {
        list($mockClient, $mockIndices) = $this->getMockIndices();

        $mockIndices
            ->shouldReceive('delete')
            ->once()
            ->with(['index' => '_all'])
            ->andThrow('\Elasticsearch\Common\Exceptions\Missing404Exception');

        $indexer = new ElasticSearchIndexer($mockClient);
        $indexer->removeAllIndices();

        // no exception should appear here, as the 404 has to be caught.
    }

    protected function tearDown()
    {
        m::close();
        parent::tearDown();
    }

    public function testPing()
    {
        $mockClient = m::mock('\Elasticsearch\Client');

        $mockClient
            ->shouldReceive('ping')
            ->withNoArgs()
            ->once()
            ->andReturnFalse();

        $indexer = new ElasticSearchIndexer($mockClient);
        $actual = $indexer->ping();
        self::assertFalse($actual);
    }

    public function testPing2()
    {
        $mockClient = m::mock('\Elasticsearch\Client');

        $mockClient
            ->shouldReceive('ping')
            ->withNoArgs()
            ->once()
            ->andReturnTrue();

        $indexer = new ElasticSearchIndexer($mockClient);
        $actual = $indexer->ping();
        self::assertNotFalse($actual);
        self::assertTrue(is_numeric($actual));
    }

    public function testPutMappings()
    {
        $meta = ['foo' => 'bar'];
        $module = 'Accounts';
        $index = 'test';

        $params = [
            'index' => $index,
            'type' => $module,
            'body' => ['_meta' => $meta]
        ];

        list($client, $indices) = $this->getMockIndices();

        $indices
            ->shouldReceive('putMapping')
            ->with($params)
            ->once();

        $i = new i($client);
        $i->setIndex($index);

        $i->putMeta($module, $meta);
    }

    public function testGetMeta()
    {
        $meta = ['foo' => 'bar'];
        $module = 'Accounts';
        $index = 'test';

        $params = ['index' => $index, 'filter_path' => "$index.mappings.$module._meta"];
        $response = [$index => ['mappings' => [$module => ['_meta' => $meta]]]];

        list($client, $indices) = $this->getMockIndices();

        $indices
            ->shouldReceive('getMapping')
            ->with($params)
            ->once()
            ->andReturn($response);

        $i = new i($client);

        $i->setIndex($index);

        $actual = $i->getMeta($module);

        self::assertEquals($meta, $actual);
    }

    public function testCreateIndex()
    {
        $index = 'test';
        $params = ['index' => $index];

        list($client, $indices) = $this->getMockIndices();

        $indices
            ->shouldReceive('create')
            ->with($params)
            ->once();

        $i = new i($client);

        $i->createIndex($index);
    }

    public function testCreateIndexWithBody()
    {
        $index = 'test';
        $body = ["mappings" => ['my_type' => ['_source' => ['enabled' => true]]]];
        $params = ['index' => $index, 'body' => $body];

        list($client, $indices) = $this->getMockIndices();

        $indices
            ->shouldReceive('create')
            ->with($params)
            ->once();

        $i = new i($client);

        $i->createIndex($index, $body);
    }
}
