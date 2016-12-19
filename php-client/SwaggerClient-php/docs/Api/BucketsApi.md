# Swagger\Client\BucketsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBucket**](BucketsApi.md#createBucket) | **POST** /buckets | 
[**deleteBucket**](BucketsApi.md#deleteBucket) | **DELETE** /buckets/{bucket_id} | 
[**deleteBuckets**](BucketsApi.md#deleteBuckets) | **DELETE** /buckets | 
[**getBucket**](BucketsApi.md#getBucket) | **GET** /buckets/{bucket_id} | 
[**getBuckets**](BucketsApi.md#getBuckets) | **GET** /buckets | 
[**patchBucket**](BucketsApi.md#patchBucket) | **PATCH** /buckets/{bucket_id} | 
[**updateBucket**](BucketsApi.md#updateBucket) | **PUT** /buckets/{bucket_id} | 


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

$api_instance = new Swagger\Client\Api\BucketsApi();
$bucket = new \Swagger\Client\Model\Bucket(); // \Swagger\Client\Model\Bucket | Bucket information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createBucket($bucket, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->createBucket: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BucketsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteBucket($bucket_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->deleteBucket: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BucketsApi();
$_since = 56; // int | Get entries after a timestamp.
$_before = 56; // int | Get entries before a timestamp.
$_sort = array("_sort_example"); // string[] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending).
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->deleteBuckets($_since, $_before, $_sort, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->deleteBuckets: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BucketsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getBucket($bucket_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->getBucket: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BucketsApi();
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
    echo 'Exception when calling BucketsApi->getBuckets: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BucketsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$bucket = new \Swagger\Client\Model\Bucket(); // \Swagger\Client\Model\Bucket | Bucket information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->patchBucket($bucket_id, $bucket, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->patchBucket: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\BucketsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$bucket = new \Swagger\Client\Model\Bucket(); // \Swagger\Client\Model\Bucket | Bucket information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->updateBucket($bucket_id, $bucket, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->updateBucket: ', $e->getMessage(), PHP_EOL;
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

