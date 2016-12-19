# Swagger\Client\BatchApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batch**](BatchApi.md#batch) | **POST** /batch | 


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

$api_instance = new Swagger\Client\Api\BatchApi();
$batch = new \Swagger\Client\Model\Batch(); // \Swagger\Client\Model\Batch | Batch operation properties.

try {
    $result = $api_instance->batch($batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batch: ', $e->getMessage(), PHP_EOL;
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

