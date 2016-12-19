# swagger_client.CollectionsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_collection**](CollectionsApi.md#create_collection) | **POST** /buckets/{bucket_id}/collections | 
[**delete_collection**](CollectionsApi.md#delete_collection) | **DELETE** /buckets/{bucket_id}/collections/{collection_id} | 
[**delete_collections**](CollectionsApi.md#delete_collections) | **DELETE** /buckets/{bucket_id}/collections | 
[**get_collection**](CollectionsApi.md#get_collection) | **GET** /buckets/{bucket_id}/collections/{collection_id} | 
[**get_collections**](CollectionsApi.md#get_collections) | **GET** /buckets/{bucket_id}/collections | 
[**patch_collection**](CollectionsApi.md#patch_collection) | **PATCH** /buckets/{bucket_id}/collections/{collection_id} | 
[**update_collection**](CollectionsApi.md#update_collection) | **PUT** /buckets/{bucket_id}/collections/{collection_id} | 


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
api_instance = swagger_client.CollectionsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection = swagger_client.Collection() # Collection | Collection information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_collection(bucket_id, collection=collection, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CollectionsApi->create_collection: %s\n" % e)
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
api_instance = swagger_client.CollectionsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_collection(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CollectionsApi->delete_collection: %s\n" % e)
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
api_instance = swagger_client.CollectionsApi()
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
    print("Exception when calling CollectionsApi->delete_collections: %s\n" % e)
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
api_instance = swagger_client.CollectionsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Colection id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_collection(bucket_id, collection_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CollectionsApi->get_collection: %s\n" % e)
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
api_instance = swagger_client.CollectionsApi()
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
    print("Exception when calling CollectionsApi->get_collections: %s\n" % e)
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
api_instance = swagger_client.CollectionsApi()
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
    print("Exception when calling CollectionsApi->patch_collection: %s\n" % e)
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
api_instance = swagger_client.CollectionsApi()
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
    print("Exception when calling CollectionsApi->update_collection: %s\n" % e)
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

