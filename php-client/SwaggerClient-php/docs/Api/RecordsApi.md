# Swagger\Client\RecordsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRecord**](RecordsApi.md#createRecord) | **POST** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**deleteRecord**](RecordsApi.md#deleteRecord) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**deleteRecords**](RecordsApi.md#deleteRecords) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**getRecord**](RecordsApi.md#getRecord) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**getRecords**](RecordsApi.md#getRecords) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**patchRecord**](RecordsApi.md#patchRecord) | **PATCH** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**updateRecord**](RecordsApi.md#updateRecord) | **PUT** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 


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

$api_instance = new Swagger\Client\Api\RecordsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$collection_id = "collection_id_example"; // string | Collection id.
$record = new \Swagger\Client\Model\Record(); // \Swagger\Client\Model\Record | Record information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createRecord($bucket_id, $collection_id, $record, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->createRecord: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\RecordsApi();
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
    echo 'Exception when calling RecordsApi->deleteRecord: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\RecordsApi();
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
    echo 'Exception when calling RecordsApi->deleteRecords: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\RecordsApi();
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
    echo 'Exception when calling RecordsApi->getRecord: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\RecordsApi();
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
    echo 'Exception when calling RecordsApi->getRecords: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\RecordsApi();
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
    echo 'Exception when calling RecordsApi->patchRecord: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\RecordsApi();
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
    echo 'Exception when calling RecordsApi->updateRecord: ', $e->getMessage(), PHP_EOL;
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

