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

use SuiteCRM\Search\SearchQuery;
use SuiteCRM\Search\SearchTestAbstract;

class SearchQueryTest extends SearchTestAbstract
{
    public function testFromString()
    {
        $searchString = 'hello test';
        $size = 20;
        $from = 50;
        $engine = 'TestEngine';
        $options = ['foo' => 'bar'];

        $query = SearchQuery::fromString($searchString, $size, $from, $engine, $options);

        self::assertEquals($searchString, $query->getSearchString());
        self::assertEquals($size, $query->getSize());
        self::assertEquals($from, $query->getFrom());
        self::assertEquals($engine, $query->getEngine());
        self::assertEquals($options, $query->getOptions());
        self::assertEquals('bar', $query->getOption('foo'));
    }

    public function testIsEmpty()
    {
        $nonEmptyQuery = SearchQuery::fromString('foo');
        $emptyQuery = SearchQuery::fromString('');

        self::assertFalse($nonEmptyQuery->isEmpty());
        self::assertTrue($emptyQuery->isEmpty());
    }

    public function testTrim()
    {
        $string = ' hello test world    ';
        $query = SearchQuery::fromString($string);
        $query->trim();

        self::assertEquals('hello test world', $query->getSearchString());
    }


    public function testToLowerCase()
    {
        $string = ' HelLo tEsT WorLD    ';
        $expected = ' hello test world    ';

        $query = SearchQuery::fromString($string);
        $query->toLowerCase();

        self::assertEquals($expected, $query->getSearchString());
    }

    public function testReplace()
    {
        $string = '-HELLO_WOR-LD-';
        $expString = 'HELLO_WORLD';

        $query = SearchQuery::fromString($string);
        $query->replace('-', '');

        self::assertEquals($expString, $query->getSearchString());
    }

    public function testStripSlashes()
    {
        $string = "Is your name O\'reilly? :\\\\";
        $expected = "Is your name O'reilly? :\\";

        $query = SearchQuery::fromString($string);
        $query->stripSlashes();

        self::assertEquals($expected, $query->getSearchString());
    }

    public function testEscapeRegex()
    {
        $string = '$40 for a g3/400';
        $expected = '\$40 for a g3\/400';

        $query = SearchQuery::fromString($string);
        $query->escapeRegex();

        self::assertEquals($expected, $query->getSearchString());
    }

    public function testConvertEncoding()
    {
        $string = 'Foo &#xA9; bar &#x1D306; baz &#x2603; qux';
        $expected = 'Foo © bar 𝌆 baz ☃ qux';

        $query = SearchQuery::fromString($string);
        $query->convertEncoding();

        self::assertEquals($expected, $query->getSearchString());
    }

    public function testFromRequestArray()
    {
        $request = $this->getRequest();

        $query = SearchQuery::fromRequestArray($request);

        $this->assertRequest($query);
    }

    public function testFromRequestArray2()
    {
        $request = [
            'query_string' => 'FOO',
            'foo' => 'bar',
        ];

        $query = SearchQuery::fromRequestArray($request);

        self::assertEquals($query->getSearchString(), 'FOO');
        self::assertEquals($query->getSize(), 10);
        self::assertEquals($query->getFrom(), 0);
        self::assertNull($query->getEngine());
        self::assertEquals($query->getOptions(), ['foo' => 'bar']);
        self::assertEquals($query->getOption('foo'), 'bar');
    }

    public function testFromGetRequest()
    {
        $old = $_GET;

        $_GET = $this->getRequest();

        $query = SearchQuery::fromGetRequest();

        $this->assertRequest($query);

        $_GET = $old;
    }

    /**
     * @return array
     */
    private function getRequest()
    {
        $request = [
            'search-query-string' => 'FOO',
            'search-query-size' => '123',
            'search-query-from' => 3,
            'search-engine' => 'TestEngine',
            'foo' => 'bar',
        ];
        return $request;
    }

    /**
     * @param SearchQuery $query
     */
    private function assertRequest(SearchQuery $query)
    {
        self::assertEquals($query->getSearchString(), 'FOO');
        self::assertEquals($query->getSize(), 123);
        self::assertEquals($query->getFrom(), 3);
        self::assertEquals($query->getEngine(), 'TestEngine');
        self::assertEquals($query->getOptions(), ['foo' => 'bar']);
        self::assertEquals($query->getOption('foo'), 'bar');
    }
}
