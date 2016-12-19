<?php
/**
 * KintoApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * kinto
 *
 * Kinto is a minimalist JSON storage service with synchronisation and sharing abilities. It is meant to be easy to use and easy to self-host.  **Limitations of this OpenAPI specification:**   1. Validation on OR clauses is not supported (e.g. provide `data` or `permissions`   in patch operations).   2. [Filtering](http://kinto.readthedocs.io/en/stable/api/1.x/filtering.html)   is supported on any field by using `?{prefix}{field_name}={value}`.   3. [Backoff headers](http://kinto.readthedocs.io/en/stable/api/1.x/backoff.html)   may occur with any response, but they are only present if the server is under   in heavy load, so we cannot validate them on every request. They are listed only   on the default error message.   4. [Collection schemas](http://kinto.readthedocs.io/en/stable/api/1.x/collections.html#collection-json-schema)   can be provided when defining a collection, but they are not validated by   this specification.
 *
 * OpenAPI spec version: 1.13
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * KintoApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KintoApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test case for batch
     *
     * .
     *
     */
    public function testBatch()
    {

    }

    /**
     * Test case for contribute
     *
     * .
     *
     */
    public function testContribute()
    {

    }

    /**
     * Test case for createBucket
     *
     * .
     *
     */
    public function testCreateBucket()
    {

    }

    /**
     * Test case for createCollection
     *
     * .
     *
     */
    public function testCreateCollection()
    {

    }

    /**
     * Test case for createGroup
     *
     * .
     *
     */
    public function testCreateGroup()
    {

    }

    /**
     * Test case for createRecord
     *
     * .
     *
     */
    public function testCreateRecord()
    {

    }

    /**
     * Test case for deleteBucket
     *
     * .
     *
     */
    public function testDeleteBucket()
    {

    }

    /**
     * Test case for deleteBuckets
     *
     * .
     *
     */
    public function testDeleteBuckets()
    {

    }

    /**
     * Test case for deleteCollection
     *
     * .
     *
     */
    public function testDeleteCollection()
    {

    }

    /**
     * Test case for deleteCollections
     *
     * .
     *
     */
    public function testDeleteCollections()
    {

    }

    /**
     * Test case for deleteGroup
     *
     * .
     *
     */
    public function testDeleteGroup()
    {

    }

    /**
     * Test case for deleteGroups
     *
     * .
     *
     */
    public function testDeleteGroups()
    {

    }

    /**
     * Test case for deleteRecord
     *
     * .
     *
     */
    public function testDeleteRecord()
    {

    }

    /**
     * Test case for deleteRecords
     *
     * .
     *
     */
    public function testDeleteRecords()
    {

    }

    /**
     * Test case for getBucket
     *
     * .
     *
     */
    public function testGetBucket()
    {

    }

    /**
     * Test case for getBuckets
     *
     * .
     *
     */
    public function testGetBuckets()
    {

    }

    /**
     * Test case for getCollection
     *
     * .
     *
     */
    public function testGetCollection()
    {

    }

    /**
     * Test case for getCollections
     *
     * .
     *
     */
    public function testGetCollections()
    {

    }

    /**
     * Test case for getGroup
     *
     * .
     *
     */
    public function testGetGroup()
    {

    }

    /**
     * Test case for getGroups
     *
     * .
     *
     */
    public function testGetGroups()
    {

    }

    /**
     * Test case for getRecord
     *
     * .
     *
     */
    public function testGetRecord()
    {

    }

    /**
     * Test case for getRecords
     *
     * .
     *
     */
    public function testGetRecords()
    {

    }

    /**
     * Test case for heartbeat
     *
     * .
     *
     */
    public function testHeartbeat()
    {

    }

    /**
     * Test case for lbheartbeat
     *
     * .
     *
     */
    public function testLbheartbeat()
    {

    }

    /**
     * Test case for patchBucket
     *
     * .
     *
     */
    public function testPatchBucket()
    {

    }

    /**
     * Test case for patchCollection
     *
     * .
     *
     */
    public function testPatchCollection()
    {

    }

    /**
     * Test case for patchGroup
     *
     * .
     *
     */
    public function testPatchGroup()
    {

    }

    /**
     * Test case for patchRecord
     *
     * .
     *
     */
    public function testPatchRecord()
    {

    }

    /**
     * Test case for serverInfo
     *
     * .
     *
     */
    public function testServerInfo()
    {

    }

    /**
     * Test case for updateBucket
     *
     * .
     *
     */
    public function testUpdateBucket()
    {

    }

    /**
     * Test case for updateCollection
     *
     * .
     *
     */
    public function testUpdateCollection()
    {

    }

    /**
     * Test case for updateGroup
     *
     * .
     *
     */
    public function testUpdateGroup()
    {

    }

    /**
     * Test case for updateRecord
     *
     * .
     *
     */
    public function testUpdateRecord()
    {

    }

    /**
     * Test case for version
     *
     * .
     *
     */
    public function testVersion()
    {

    }

}
