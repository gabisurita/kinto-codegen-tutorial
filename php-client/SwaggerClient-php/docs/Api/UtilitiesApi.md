# Swagger\Client\UtilitiesApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contribute**](UtilitiesApi.md#contribute) | **GET** /contribute.json | 
[**heartbeat**](UtilitiesApi.md#heartbeat) | **GET** /__heartbeat__ | 
[**lbheartbeat**](UtilitiesApi.md#lbheartbeat) | **GET** /__lbheartbeat__ | 
[**serverInfo**](UtilitiesApi.md#serverInfo) | **GET** / | 
[**version**](UtilitiesApi.md#version) | **GET** /__version__ | 


# **contribute**
> object contribute()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $result = $api_instance->contribute();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->contribute: ', $e->getMessage(), PHP_EOL;
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

# **heartbeat**
> map[string,bool] heartbeat()



Return the status of dependent services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $result = $api_instance->heartbeat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->heartbeat: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $result = $api_instance->lbheartbeat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->lbheartbeat: ', $e->getMessage(), PHP_EOL;
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

# **serverInfo**
> object serverInfo()



Information about the running instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $result = $api_instance->serverInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->serverInfo: ', $e->getMessage(), PHP_EOL;
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

# **version**
> object version()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $result = $api_instance->version();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->version: ', $e->getMessage(), PHP_EOL;
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

