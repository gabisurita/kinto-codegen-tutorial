# Swagger\Client\KintoApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batch**](KintoApi.md#batch) | **POST** /batch | 
[**contribute**](KintoApi.md#contribute) | **GET** /contribute.json | 
[**createBucket**](KintoApi.md#createBucket) | **POST** /buckets | 
[**createCollection**](KintoApi.md#createCollection) | **POST** /buckets/{bucket_id}/collections | 
[**createGroup**](KintoApi.md#createGroup) | **POST** /buckets/{bucket_id}/groups | 
[**createRecord**](KintoApi.md#createRecord) | **POST** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**deleteBucket**](KintoApi.md#deleteBucket) | **DELETE** /buckets/{bucket_id} | 
[**deleteBuckets**](KintoApi.md#deleteBuckets) | **DELETE** /buckets | 
[**deleteCollection**](KintoApi.md#deleteCollection) | **DELETE** /buckets/{bucket_id}/collections/{collection_id} | 
[**deleteCollections**](KintoApi.md#deleteCollections) | **DELETE** /buckets/{bucket_id}/collections | 
[**deleteGroup**](KintoApi.md#deleteGroup) | **DELETE** /buckets/{bucket_id}/groups/{group_id} | 
[**deleteGroups**](KintoApi.md#deleteGroups) | **DELETE** /buckets/{bucket_id}/groups | 
[**deleteRecord**](KintoApi.md#deleteRecord) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**deleteRecords**](KintoApi.md#deleteRecords) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**getBucket**](KintoApi.md#getBucket) | **GET** /buckets/{bucket_id} | 
[**getBuckets**](KintoApi.md#getBuckets) | **GET** /buckets | 
[**getCollection**](KintoApi.md#getCollection) | **GET** /buckets/{bucket_id}/collections/{collection_id} | 
[**getCollections**](KintoApi.md#getCollections) | **GET** /buckets/{bucket_id}/collections | 
[**getGroup**](KintoApi.md#getGroup) | **GET** /buckets/{bucket_id}/groups/{group_id} | 
[**getGroups**](KintoApi.md#getGroups) | **GET** /buckets/{bucket_id}/groups | 
[**getRecord**](KintoApi.md#getRecord) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**getRecords**](KintoApi.md#getRecords) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**heartbeat**](KintoApi.md#heartbeat) | **GET** /__heartbeat__ | 
[**lbheartbeat**](KintoApi.md#lbheartbeat) | **GET** /__lbheartbeat__ | 
[**patchBucket**](KintoApi.md#patchBucket) | **PATCH** /buckets/{bucket_id} | 
[**patchCollection**](KintoApi.md#patchCollection) | **PATCH** /buckets/{bucket_id}/collections/{collection_id} | 
[**patchGroup**](KintoApi.md#patchGroup) | **PATCH** /buckets/{bucket_id}/groups/{group_id} | 
[**patchRecord**](KintoApi.md#patchRecord) | **PATCH** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**serverInfo**](KintoApi.md#serverInfo) | **GET** / | 
[**updateBucket**](KintoApi.md#updateBucket) | **PUT** /buckets/{bucket_id} | 
[**updateCollection**](KintoApi.md#updateCollection) | **PUT** /buckets/{bucket_id}/collections/{collection_id} | 
[**updateGroup**](KintoApi.md#updateGroup) | **PUT** /buckets/{bucket_id}/groups/{group_id} | 
[**updateRecord**](KintoApi.md#updateRecord) | **PUT** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**version**](KintoApi.md#version) | **GET** /__version__ | 


# **batch**
> \Swagger\Client\Model\InlineResponse200 batch($batch)



Send multiple operations in one request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$batch = new \Swagger\Client\Model\Batch(); // \Swagger\Client\Model\Batch | Batch operation properties.

try {
    $result = $api_instance->batch($batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->batch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | [**\Swagger\Client\Model\Batch**](../Model/\Swagger\Client\Model\Batch.md)| Batch operation properties. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contribute**
> object contribute()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KintoApi();

try {
    $result = $api_instance->contribute();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->contribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBucket**
> \Swagger\Client\Model\Bucket createBucket($bucket, $if_match, $if_none_match)



Create a bucket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket = new \Swagger\Client\Model\Bucket(); // \Swagger\Client\Model\Bucket | Bucket information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createBucket($bucket, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->createBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket** | [**\Swagger\Client\Model\Bucket**](../Model/\Swagger\Client\Model\Bucket.md)| Bucket information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]

### Return type

[**\Swagger\Client\Model\Bucket**](../Model/Bucket.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCollection**
> \Swagger\Client\Model\Collection createCollection($bucket_id, $collection, $if_match, $if_none_match)



Create a collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection = new \Swagger\Client\Model\Collection(); // \Swagger\Client\Model\Collection | Collection information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createCollection($bucket_id, $collection, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection** | [**\Swagger\Client\Model\Collection**](../Model/\Swagger\Client\Model\Collection.md)| Collection information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]

### Return type

[**\Swagger\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \Swagger\Client\Model\Group createGroup($bucket_id, $group, $if_match, $if_none_match)



Create a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | Group information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createGroup($bucket_id, $group, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **group** | [**\Swagger\Client\Model\Group**](../Model/\Swagger\Client\Model\Group.md)| Group information. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRecord**
> \Swagger\Client\Model\Record createRecord($bucket_id, $collection_id, $record, $if_match, $if_none_match)



Upload a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Collection id.
$record = new \Swagger\Client\Model\Record(); // \Swagger\Client\Model\Record | Record information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createRecord($bucket_id, $collection_id, $record, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->createRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Collection id. |
 **record** | [**\Swagger\Client\Model\Record**](../Model/\Swagger\Client\Model\Record.md)| Record information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBucket**
> \Swagger\Client\Model\Deleted deleteBucket($bucket_id, $if_match, $if_none_match, $_fields)



Delete a bucket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteBucket($bucket_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Deleted**](../Model/Deleted.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuckets**
> \Swagger\Client\Model\ModelList deleteBuckets($_since, $_before, $_sort, $if_match, $if_none_match)



Delete all writable buckets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->deleteBuckets($_since, $_before, $_sort, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteBuckets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollection**
> \Swagger\Client\Model\Deleted deleteCollection($bucket_id, $collection_id, $if_match, $if_none_match, $_fields)



Delete a collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteCollection($bucket_id, $collection_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Deleted**](../Model/Deleted.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollections**
> \Swagger\Client\Model\ModelList deleteCollections($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort)



Delete writable collections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).

try {
    $result = $api_instance->deleteCollections($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> \Swagger\Client\Model\Deleted deleteGroup($bucket_id, $group_id, $if_match, $if_none_match, $_fields)



Delete a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group_id = "group_id_example"; // string | Group id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteGroup($bucket_id, $group_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **group_id** | **string**| Group id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Deleted**](../Model/Deleted.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroups**
> \Swagger\Client\Model\ModelList deleteGroups($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort)



Delete writable groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).

try {
    $result = $api_instance->deleteGroups($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecord**
> \Swagger\Client\Model\Deleted deleteRecord($bucket_id, $collection_id, $record_id, $if_match, $if_none_match, $_fields)



Delete a single record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$record_id = "record_id_example"; // string | Record id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteRecord($bucket_id, $collection_id, $record_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **record_id** | **string**| Record id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Deleted**](../Model/Deleted.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecords**
> \Swagger\Client\Model\ModelList deleteRecords($bucket_id, $collection_id, $if_match, $if_none_match, $_since, $_before, $_sort)



Delete stored records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Collection id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).

try {
    $result = $api_instance->deleteRecords($bucket_id, $collection_id, $if_match, $if_none_match, $_since, $_before, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->deleteRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Collection id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBucket**
> \Swagger\Client\Model\Bucket getBucket($bucket_id, $if_match, $if_none_match, $_fields)



Retrieve an existing bucket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getBucket($bucket_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Bucket**](../Model/Bucket.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuckets**
> \Swagger\Client\Model\ModelList getBuckets($if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields)



List all acessible buckets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).
$_limit = 56; // int | Limit objects on a list.
$_token = "_token_example"; // string | Continuation token of a limited list.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getBuckets($if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getBuckets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]
 **_limit** | **int**| Limit objects on a list. | [optional]
 **_token** | **string**| Continuation token of a limited list. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollection**
> \Swagger\Client\Model\Collection getCollection($bucket_id, $collection_id, $if_match, $if_none_match, $_fields)



Retreive an existing collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getCollection($bucket_id, $collection_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollections**
> \Swagger\Client\Model\ModelList getCollections($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields)



List bucket’s collections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).
$_limit = 56; // int | Limit objects on a list.
$_token = "_token_example"; // string | Continuation token of a limited list.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getCollections($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]
 **_limit** | **int**| Limit objects on a list. | [optional]
 **_token** | **string**| Continuation token of a limited list. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \Swagger\Client\Model\Group getGroup($bucket_id, $group_id, $if_match, $if_none_match, $_fields)



Retrieve a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group_id = "group_id_example"; // string | Group id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getGroup($bucket_id, $group_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **group_id** | **string**| Group id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Swagger\Client\Model\ModelList getGroups($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields)



Retrieve the list of bucket’s group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).
$_limit = 56; // int | Limit objects on a list.
$_token = "_token_example"; // string | Continuation token of a limited list.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getGroups($bucket_id, $if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]
 **_limit** | **int**| Limit objects on a list. | [optional]
 **_token** | **string**| Continuation token of a limited list. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecord**
> \Swagger\Client\Model\Record getRecord($bucket_id, $collection_id, $record_id, $if_match, $if_none_match, $_fields)



Retrieve a single record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$record_id = "record_id_example"; // string | Record id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getRecord($bucket_id, $collection_id, $record_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **record_id** | **string**| Record id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecords**
> \Swagger\Client\Model\ModelList getRecords($bucket_id, $collection_id, $if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields)



Retrieve stored records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Collection id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).
$_limit = 56; // int | Limit objects on a list.
$_token = "_token_example"; // string | Continuation token of a limited list.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getRecords($bucket_id, $collection_id, $if_match, $if_none_match, $_since, $_before, $_sort, $_limit, $_token, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->getRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Collection id. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_since** | **int**| Get entries after a timestamp. | [optional]
 **_before** | **int**| Get entries before a timestamp. | [optional]
 **_sort** | [**string[]**](../Model/string.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional]
 **_limit** | **int**| Limit objects on a list. | [optional]
 **_token** | **string**| Continuation token of a limited list. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **heartbeat**
> map[string,bool] heartbeat()



Return the status of dependent services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KintoApi();

try {
    $result = $api_instance->heartbeat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->heartbeat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,bool]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lbheartbeat**
> object lbheartbeat()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KintoApi();

try {
    $result = $api_instance->lbheartbeat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->lbheartbeat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBucket**
> \Swagger\Client\Model\Bucket patchBucket($bucket_id, $bucket, $if_match, $if_none_match, $_fields)



Modify an existing bucket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$bucket = new \Swagger\Client\Model\Bucket(); // \Swagger\Client\Model\Bucket | Bucket information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->patchBucket($bucket_id, $bucket, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->patchBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **bucket** | [**\Swagger\Client\Model\Bucket**](../Model/\Swagger\Client\Model\Bucket.md)| Bucket information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Bucket**](../Model/Bucket.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCollection**
> \Swagger\Client\Model\Collection patchCollection($bucket_id, $collection_id, $collection, $if_match, $if_none_match, $_fields)



Modify an existing collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$collection = new \Swagger\Client\Model\Collection(); // \Swagger\Client\Model\Collection | Collection information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->patchCollection($bucket_id, $collection_id, $collection, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->patchCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **collection** | [**\Swagger\Client\Model\Collection**](../Model/\Swagger\Client\Model\Collection.md)| Collection information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchGroup**
> \Swagger\Client\Model\Group patchGroup($bucket_id, $group_id, $group, $if_match, $if_none_match, $_fields)



Modify an existing group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group_id = "group_id_example"; // string | Group id.
$group = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | Group information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->patchGroup($bucket_id, $group_id, $group, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->patchGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **group_id** | **string**| Group id. |
 **group** | [**\Swagger\Client\Model\Group**](../Model/\Swagger\Client\Model\Group.md)| Group information. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRecord**
> \Swagger\Client\Model\Record patchRecord($bucket_id, $collection_id, $record_id, $record, $if_match, $if_none_match, $_fields)



Modify an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$record_id = "record_id_example"; // string | Record id.
$record = new \Swagger\Client\Model\Record(); // \Swagger\Client\Model\Record | Record information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->patchRecord($bucket_id, $collection_id, $record_id, $record, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->patchRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **record_id** | **string**| Record id. |
 **record** | [**\Swagger\Client\Model\Record**](../Model/\Swagger\Client\Model\Record.md)| Record information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverInfo**
> object serverInfo()



Information about the running instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KintoApi();

try {
    $result = $api_instance->serverInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->serverInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBucket**
> \Swagger\Client\Model\Bucket updateBucket($bucket_id, $bucket, $if_match, $if_none_match, $_fields)



Create or replace a bucket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$bucket = new \Swagger\Client\Model\Bucket(); // \Swagger\Client\Model\Bucket | Bucket information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->updateBucket($bucket_id, $bucket, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->updateBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **bucket** | [**\Swagger\Client\Model\Bucket**](../Model/\Swagger\Client\Model\Bucket.md)| Bucket information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Bucket**](../Model/Bucket.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollection**
> \Swagger\Client\Model\Collection updateCollection($bucket_id, $collection_id, $collection, $if_match, $if_none_match, $_fields)



Create or replace a collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$collection = new \Swagger\Client\Model\Collection(); // \Swagger\Client\Model\Collection | Collection information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->updateCollection($bucket_id, $collection_id, $collection, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **collection** | [**\Swagger\Client\Model\Collection**](../Model/\Swagger\Client\Model\Collection.md)| Collection information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \Swagger\Client\Model\Group updateGroup($bucket_id, $group_id, $group, $if_match, $if_none_match, $_fields)



Update a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group_id = "group_id_example"; // string | Group id.
$group = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | Group information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->updateGroup($bucket_id, $group_id, $group, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **group_id** | **string**| Group id. |
 **group** | [**\Swagger\Client\Model\Group**](../Model/\Swagger\Client\Model\Group.md)| Group information. |
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecord**
> \Swagger\Client\Model\Record updateRecord($bucket_id, $collection_id, $record_id, $record, $if_match, $if_none_match, $_fields)



Create or replace a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\KintoApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$record_id = "record_id_example"; // string | Record id.
$record = new \Swagger\Client\Model\Record(); // \Swagger\Client\Model\Record | Record information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->updateRecord($bucket_id, $collection_id, $record_id, $record, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->updateRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**| Bucket id. |
 **collection_id** | **string**| Colection id. |
 **record_id** | **string**| Record id. |
 **record** | [**\Swagger\Client\Model\Record**](../Model/\Swagger\Client\Model\Record.md)| Record information. | [optional]
 **if_match** | **string**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional]
 **if_none_match** | **string**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional]
 **_fields** | [**string[]**](../Model/string.md)| Fields to compose response (id and last_modified are always returned). | [optional]

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **version**
> object version()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KintoApi();

try {
    $result = $api_instance->version();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KintoApi->version: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

