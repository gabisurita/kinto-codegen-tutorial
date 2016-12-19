# swagger_client.BucketsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_bucket**](BucketsApi.md#create_bucket) | **POST** /buckets | 
[**delete_bucket**](BucketsApi.md#delete_bucket) | **DELETE** /buckets/{bucket_id} | 
[**delete_buckets**](BucketsApi.md#delete_buckets) | **DELETE** /buckets | 
[**get_bucket**](BucketsApi.md#get_bucket) | **GET** /buckets/{bucket_id} | 
[**get_buckets**](BucketsApi.md#get_buckets) | **GET** /buckets | 
[**patch_bucket**](BucketsApi.md#patch_bucket) | **PATCH** /buckets/{bucket_id} | 
[**update_bucket**](BucketsApi.md#update_bucket) | **PUT** /buckets/{bucket_id} | 


# **create_bucket**
> Bucket create_bucket(bucket=bucket, if_match=if_match, if_none_match=if_none_match)



Create a bucket.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
bucket = swagger_client.Bucket() # Bucket | Bucket information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_bucket(bucket=bucket, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->create_bucket: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket** | [**Bucket**](Bucket.md)| Bucket information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 

### Return type

[**Bucket**](Bucket.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_bucket**
> Deleted delete_bucket(bucket_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Delete a bucket.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_bucket(bucket_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->delete_bucket: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Deleted**](Deleted.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_buckets**
> List delete_buckets(since=since, before=before, sort=sort, if_match=if_match, if_none_match=if_none_match)



Delete all writable buckets.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.delete_buckets(since=since, before=before, sort=sort, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->delete_buckets: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **int**| Get entries after a timestamp. | [optional] 
 **before** | **int**| Get entries before a timestamp. | [optional] 
 **sort** | [**list[str]**](str.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 

### Return type

[**List**](List.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_bucket**
> Bucket get_bucket(bucket_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Retrieve an existing bucket.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_bucket(bucket_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->get_bucket: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Bucket**](Bucket.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_buckets**
> List get_buckets(if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)



List all acessible buckets.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)
limit = 56 # int | Limit objects on a list. (optional)
token = 'token_example' # str | Continuation token of a limited list. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_buckets(if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->get_buckets: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **since** | **int**| Get entries after a timestamp. | [optional] 
 **before** | **int**| Get entries before a timestamp. | [optional] 
 **sort** | [**list[str]**](str.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional] 
 **limit** | **int**| Limit objects on a list. | [optional] 
 **token** | **str**| Continuation token of a limited list. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**List**](List.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **patch_bucket**
> Bucket patch_bucket(bucket_id, bucket=bucket, if_match=if_match, if_none_match=if_none_match, fields=fields)



Modify an existing bucket.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
bucket = swagger_client.Bucket() # Bucket | Bucket information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.patch_bucket(bucket_id, bucket=bucket, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->patch_bucket: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **bucket** | [**Bucket**](Bucket.md)| Bucket information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Bucket**](Bucket.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_bucket**
> Bucket update_bucket(bucket_id, bucket=bucket, if_match=if_match, if_none_match=if_none_match, fields=fields)



Create or replace a bucket.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Configure HTTP basic authorization: basicAuth
swagger_client.configuration.username = 'YOUR_USERNAME'
swagger_client.configuration.password = 'YOUR_PASSWORD'

# create an instance of the API class
api_instance = swagger_client.BucketsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
bucket = swagger_client.Bucket() # Bucket | Bucket information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.update_bucket(bucket_id, bucket=bucket, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling BucketsApi->update_bucket: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **bucket** | [**Bucket**](Bucket.md)| Bucket information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Bucket**](Bucket.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

