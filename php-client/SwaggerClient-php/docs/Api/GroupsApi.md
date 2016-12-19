# Swagger\Client\GroupsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGroup**](GroupsApi.md#createGroup) | **POST** /buckets/{bucket_id}/groups | 
[**deleteGroup**](GroupsApi.md#deleteGroup) | **DELETE** /buckets/{bucket_id}/groups/{group_id} | 
[**deleteGroups**](GroupsApi.md#deleteGroups) | **DELETE** /buckets/{bucket_id}/groups | 
[**getGroup**](GroupsApi.md#getGroup) | **GET** /buckets/{bucket_id}/groups/{group_id} | 
[**getGroups**](GroupsApi.md#getGroups) | **GET** /buckets/{bucket_id}/groups | 
[**patchGroup**](GroupsApi.md#patchGroup) | **PATCH** /buckets/{bucket_id}/groups/{group_id} | 
[**updateGroup**](GroupsApi.md#updateGroup) | **PUT** /buckets/{bucket_id}/groups/{group_id} | 


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

$api_instance = new Swagger\Client\Api\GroupsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | Group information.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.

try {
    $result = $api_instance->createGroup($bucket_id, $group, $if_match, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group_id = "group_id_example"; // string | Group id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->deleteGroup($bucket_id, $group_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();
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
    echo 'Exception when calling GroupsApi->deleteGroups: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();
$bucket_id = "bucket_id_example"; // string | Bucket id.
$group_id = "group_id_example"; // string | Group id.
$if_match = "if_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does.
$if_none_match = "if_none_match_example"; // string | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed.
$_fields = array("_fields_example"); // string[] | Fields to compose response (id and last_modified are always returned).

try {
    $result = $api_instance->getGroup($bucket_id, $group_id, $if_match, $if_none_match, $_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();
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
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();
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
    echo 'Exception when calling GroupsApi->patchGroup: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GroupsApi();
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
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
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

