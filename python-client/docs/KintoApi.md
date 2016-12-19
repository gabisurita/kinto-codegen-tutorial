# swagger_client.KintoApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batch**](KintoApi.md#batch) | **POST** /batch | 
[**contribute**](KintoApi.md#contribute) | **GET** /contribute.json | 
[**create_bucket**](KintoApi.md#create_bucket) | **POST** /buckets | 
[**create_collection**](KintoApi.md#create_collection) | **POST** /buckets/{bucket_id}/collections | 
[**create_group**](KintoApi.md#create_group) | **POST** /buckets/{bucket_id}/groups | 
[**create_record**](KintoApi.md#create_record) | **POST** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**delete_bucket**](KintoApi.md#delete_bucket) | **DELETE** /buckets/{bucket_id} | 
[**delete_buckets**](KintoApi.md#delete_buckets) | **DELETE** /buckets | 
[**delete_collection**](KintoApi.md#delete_collection) | **DELETE** /buckets/{bucket_id}/collections/{collection_id} | 
[**delete_collections**](KintoApi.md#delete_collections) | **DELETE** /buckets/{bucket_id}/collections | 
[**delete_group**](KintoApi.md#delete_group) | **DELETE** /buckets/{bucket_id}/groups/{group_id} | 
[**delete_groups**](KintoApi.md#delete_groups) | **DELETE** /buckets/{bucket_id}/groups | 
[**delete_record**](KintoApi.md#delete_record) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**delete_records**](KintoApi.md#delete_records) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**get_bucket**](KintoApi.md#get_bucket) | **GET** /buckets/{bucket_id} | 
[**get_buckets**](KintoApi.md#get_buckets) | **GET** /buckets | 
[**get_collection**](KintoApi.md#get_collection) | **GET** /buckets/{bucket_id}/collections/{collection_id} | 
[**get_collections**](KintoApi.md#get_collections) | **GET** /buckets/{bucket_id}/collections | 
[**get_group**](KintoApi.md#get_group) | **GET** /buckets/{bucket_id}/groups/{group_id} | 
[**get_groups**](KintoApi.md#get_groups) | **GET** /buckets/{bucket_id}/groups | 
[**get_record**](KintoApi.md#get_record) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**get_records**](KintoApi.md#get_records) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**heartbeat**](KintoApi.md#heartbeat) | **GET** /__heartbeat__ | 
[**lbheartbeat**](KintoApi.md#lbheartbeat) | **GET** /__lbheartbeat__ | 
[**patch_bucket**](KintoApi.md#patch_bucket) | **PATCH** /buckets/{bucket_id} | 
[**patch_collection**](KintoApi.md#patch_collection) | **PATCH** /buckets/{bucket_id}/collections/{collection_id} | 
[**patch_group**](KintoApi.md#patch_group) | **PATCH** /buckets/{bucket_id}/groups/{group_id} | 
[**patch_record**](KintoApi.md#patch_record) | **PATCH** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**server_info**](KintoApi.md#server_info) | **GET** / | 
[**update_bucket**](KintoApi.md#update_bucket) | **PUT** /buckets/{bucket_id} | 
[**update_collection**](KintoApi.md#update_collection) | **PUT** /buckets/{bucket_id}/collections/{collection_id} | 
[**update_group**](KintoApi.md#update_group) | **PUT** /buckets/{bucket_id}/groups/{group_id} | 
[**update_record**](KintoApi.md#update_record) | **PUT** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**version**](KintoApi.md#version) | **GET** /__version__ | 


# **batch**
> InlineResponse200 batch(batch)



Send multiple operations in one request.

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
api_instance = swagger_client.KintoApi()
batch = swagger_client.Batch() # Batch | Batch operation properties.

try: 
    api_response = api_instance.batch(batch)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->batch: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | [**Batch**](Batch.md)| Batch operation properties. | 

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **contribute**
> object contribute()



### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.KintoApi()

try: 
    api_response = api_instance.contribute()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->contribute: %s\n" % e)
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

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
api_instance = swagger_client.KintoApi()
bucket = swagger_client.Bucket() # Bucket | Bucket information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_bucket(bucket=bucket, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->create_bucket: %s\n" % e)
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

# **create_collection**
> Collection create_collection(bucket_id, collection=collection, if_match=if_match, if_none_match=if_none_match)



Create a collection.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection = swagger_client.Collection() # Collection | Collection information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_collection(bucket_id, collection=collection, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->create_collection: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection** | [**Collection**](Collection.md)| Collection information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 

### Return type

[**Collection**](Collection.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_group**
> Group create_group(bucket_id, group, if_match=if_match, if_none_match=if_none_match)



Create a group.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group = swagger_client.Group() # Group | Group information.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_group(bucket_id, group, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->create_group: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **group** | [**Group**](Group.md)| Group information. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 

### Return type

[**Group**](Group.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **create_record**
> Record create_record(bucket_id, collection_id, record=record, if_match=if_match, if_none_match=if_none_match)



Upload a record.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Collection id.
record = swagger_client.Record() # Record | Record information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_record(bucket_id, collection_id, record=record, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->create_record: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Collection id. | 
 **record** | [**Record**](Record.md)| Record information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 

### Return type

[**Record**](Record.md)

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_bucket(bucket_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_bucket: %s\n" % e)
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
api_instance = swagger_client.KintoApi()
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.delete_buckets(since=since, before=before, sort=sort, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_buckets: %s\n" % e)
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

# **delete_collection**
> Deleted delete_collection(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Delete a collection.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_collection(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_collection: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
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

# **delete_collections**
> List delete_collections(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort)



Delete writable collections.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)

try: 
    api_response = api_instance.delete_collections(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_collections: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **since** | **int**| Get entries after a timestamp. | [optional] 
 **before** | **int**| Get entries before a timestamp. | [optional] 
 **sort** | [**list[str]**](str.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional] 

### Return type

[**List**](List.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_group**
> Deleted delete_group(bucket_id, group_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Delete a group.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group_id = 'group_id_example' # str | Group id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_group(bucket_id, group_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_group: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **group_id** | **str**| Group id. | 
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

# **delete_groups**
> List delete_groups(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort)



Delete writable groups.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)

try: 
    api_response = api_instance.delete_groups(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_groups: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **since** | **int**| Get entries after a timestamp. | [optional] 
 **before** | **int**| Get entries before a timestamp. | [optional] 
 **sort** | [**list[str]**](str.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional] 

### Return type

[**List**](List.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_record**
> Deleted delete_record(bucket_id, collection_id, record_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Delete a single record.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
record_id = 'record_id_example' # str | Record id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_record(bucket_id, collection_id, record_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_record: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **record_id** | **str**| Record id. | 
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

# **delete_records**
> List delete_records(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort)



Delete stored records.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Collection id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)

try: 
    api_response = api_instance.delete_records(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->delete_records: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Collection id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **since** | **int**| Get entries after a timestamp. | [optional] 
 **before** | **int**| Get entries before a timestamp. | [optional] 
 **sort** | [**list[str]**](str.md)| Comma separeted list of fields to sort ascending on a list (use -field to sort descending). | [optional] 

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_bucket(bucket_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_bucket: %s\n" % e)
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
api_instance = swagger_client.KintoApi()
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
    print("Exception when calling KintoApi->get_buckets: %s\n" % e)
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

# **get_collection**
> Collection get_collection(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Retreive an existing collection.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_collection(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_collection: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Collection**](Collection.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_collections**
> List get_collections(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)



List bucket’s collections.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)
limit = 56 # int | Limit objects on a list. (optional)
token = 'token_example' # str | Continuation token of a limited list. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_collections(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_collections: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
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

# **get_group**
> Group get_group(bucket_id, group_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Retrieve a group.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group_id = 'group_id_example' # str | Group id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_group(bucket_id, group_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_group: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **group_id** | **str**| Group id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Group**](Group.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_groups**
> List get_groups(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)



Retrieve the list of bucket’s group.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)
limit = 56 # int | Limit objects on a list. (optional)
token = 'token_example' # str | Continuation token of a limited list. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_groups(bucket_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_groups: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
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

# **get_record**
> Record get_record(bucket_id, collection_id, record_id, if_match=if_match, if_none_match=if_none_match, fields=fields)



Retrieve a single record.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
record_id = 'record_id_example' # str | Record id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_record(bucket_id, collection_id, record_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_record: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **record_id** | **str**| Record id. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Record**](Record.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_records**
> List get_records(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)



Retrieve stored records.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Collection id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
since = 56 # int | Get entries after a timestamp. (optional)
before = 56 # int | Get entries before a timestamp. (optional)
sort = ['sort_example'] # list[str] | Comma separeted list of fields to sort ascending on a list (use -field to sort descending). (optional)
limit = 56 # int | Limit objects on a list. (optional)
token = 'token_example' # str | Continuation token of a limited list. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_records(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, since=since, before=before, sort=sort, limit=limit, token=token, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->get_records: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Collection id. | 
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

# **heartbeat**
> dict(str, bool) heartbeat()



Return the status of dependent services.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.KintoApi()

try: 
    api_response = api_instance.heartbeat()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->heartbeat: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**dict(str, bool)**](dict.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **lbheartbeat**
> object lbheartbeat()



### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.KintoApi()

try: 
    api_response = api_instance.lbheartbeat()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->lbheartbeat: %s\n" % e)
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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
bucket = swagger_client.Bucket() # Bucket | Bucket information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.patch_bucket(bucket_id, bucket=bucket, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->patch_bucket: %s\n" % e)
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

# **patch_collection**
> Collection patch_collection(bucket_id, collection_id, collection=collection, if_match=if_match, if_none_match=if_none_match, fields=fields)



Modify an existing collection.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
collection = swagger_client.Collection() # Collection | Collection information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.patch_collection(bucket_id, collection_id, collection=collection, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->patch_collection: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **collection** | [**Collection**](Collection.md)| Collection information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Collection**](Collection.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **patch_group**
> Group patch_group(bucket_id, group_id, group, if_match=if_match, if_none_match=if_none_match, fields=fields)



Modify an existing group.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group_id = 'group_id_example' # str | Group id.
group = swagger_client.Group() # Group | Group information.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.patch_group(bucket_id, group_id, group, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->patch_group: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **group_id** | **str**| Group id. | 
 **group** | [**Group**](Group.md)| Group information. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Group**](Group.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **patch_record**
> Record patch_record(bucket_id, collection_id, record_id, record=record, if_match=if_match, if_none_match=if_none_match, fields=fields)



Modify an existing record.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
record_id = 'record_id_example' # str | Record id.
record = swagger_client.Record() # Record | Record information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.patch_record(bucket_id, collection_id, record_id, record=record, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->patch_record: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **record_id** | **str**| Record id. | 
 **record** | [**Record**](Record.md)| Record information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Record**](Record.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json, application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **server_info**
> object server_info()



Information about the running instance.

### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.KintoApi()

try: 
    api_response = api_instance.server_info()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->server_info: %s\n" % e)
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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
bucket = swagger_client.Bucket() # Bucket | Bucket information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.update_bucket(bucket_id, bucket=bucket, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->update_bucket: %s\n" % e)
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

# **update_collection**
> Collection update_collection(bucket_id, collection_id, collection=collection, if_match=if_match, if_none_match=if_none_match, fields=fields)



Create or replace a collection.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
collection = swagger_client.Collection() # Collection | Collection information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.update_collection(bucket_id, collection_id, collection=collection, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->update_collection: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **collection** | [**Collection**](Collection.md)| Collection information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Collection**](Collection.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_group**
> Group update_group(bucket_id, group_id, group, if_match=if_match, if_none_match=if_none_match, fields=fields)



Update a group.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group_id = 'group_id_example' # str | Group id.
group = swagger_client.Group() # Group | Group information.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.update_group(bucket_id, group_id, group, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->update_group: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **group_id** | **str**| Group id. | 
 **group** | [**Group**](Group.md)| Group information. | 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Group**](Group.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **update_record**
> Record update_record(bucket_id, collection_id, record_id, record=record, if_match=if_match, if_none_match=if_none_match, fields=fields)



Create or replace a record.

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
api_instance = swagger_client.KintoApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
record_id = 'record_id_example' # str | Record id.
record = swagger_client.Record() # Record | Record information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.update_record(bucket_id, collection_id, record_id, record=record, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->update_record: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **str**| Bucket id. | 
 **collection_id** | **str**| Colection id. | 
 **record_id** | **str**| Record id. | 
 **record** | [**Record**](Record.md)| Record information. | [optional] 
 **if_match** | **str**| Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. | [optional] 
 **if_none_match** | **str**| Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. | [optional] 
 **fields** | [**list[str]**](str.md)| Fields to compose response (id and last_modified are always returned). | [optional] 

### Return type

[**Record**](Record.md)

### Authorization

[basicAuth](../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **version**
> object version()



### Example 
```python
from __future__ import print_statement
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.KintoApi()

try: 
    api_response = api_instance.version()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling KintoApi->version: %s\n" % e)
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

