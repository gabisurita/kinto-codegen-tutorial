# Swagger\Client\CollectionsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCollection**](CollectionsApi.md#createCollection) | **POST** /buckets/{bucket_id}/collections | 
[**deleteCollection**](CollectionsApi.md#deleteCollection) | **DELETE** /buckets/{bucket_id}/collections/{collection_id} | 
[**deleteCollections**](CollectionsApi.md#deleteCollections) | **DELETE** /buckets/{bucket_id}/collections | 
[**getCollection**](CollectionsApi.md#getCollection) | **GET** /buckets/{bucket_id}/collections/{collection_id} | 
[**getCollections**](CollectionsApi.md#getCollections) | **GET** /buckets/{bucket_id}/collections | 
[**patchCollection**](CollectionsApi.md#patchCollection) | **PATCH** /buckets/{bucket_id}/collections/{collection_id} | 
[**updateCollection**](CollectionsApi.md#updateCollection) | **PUT** /buckets/{bucket_id}/collections/{collection_id} | 


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

$api_instance = new Swagger\Client\Api\CollectionsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection = new \Swagger\Client\Model\Collection(); // \Swagger\Client\Model\Collection | Collection information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createCollection($bucket_id, $collection, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createCollection: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteCollection($bucket_id, $collection_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
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
    echo 'Exception when calling CollectionsApi->deleteCollections: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Colection id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getCollection($bucket_id, $collection_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getCollection: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
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
    echo 'Exception when calling CollectionsApi->getCollections: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
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
    echo 'Exception when calling CollectionsApi->patchCollection: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
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
    echo 'Exception when calling CollectionsApi->updateCollection: ', $e->getMessage(), PHP_EOL;
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

