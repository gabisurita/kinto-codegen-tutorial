# swagger_client.RecordsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_record**](RecordsApi.md#create_record) | **POST** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**delete_record**](RecordsApi.md#delete_record) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**delete_records**](RecordsApi.md#delete_records) | **DELETE** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**get_record**](RecordsApi.md#get_record) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**get_records**](RecordsApi.md#get_records) | **GET** /buckets/{bucket_id}/collections/{collection_id}/records | 
[**patch_record**](RecordsApi.md#patch_record) | **PATCH** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 
[**update_record**](RecordsApi.md#update_record) | **PUT** /buckets/{bucket_id}/collections/{collection_id}/records/{record_id} | 


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
api_instance = swagger_client.RecordsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
collection_id = 'collection_id_example' # str | Collection id.
record = swagger_client.Record() # Record | Record information. (optional)
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_record(bucket_id, collection_id, record=record, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordsApi->create_record: %s\n" % e)
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
api_instance = swagger_client.RecordsApi()
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
    print("Exception when calling RecordsApi->delete_record: %s\n" % e)
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
api_instance = swagger_client.RecordsApi()
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
    print("Exception when calling RecordsApi->delete_records: %s\n" % e)
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
api_instance = swagger_client.RecordsApi()
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
    print("Exception when calling RecordsApi->get_record: %s\n" % e)
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
api_instance = swagger_client.RecordsApi()
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
    print("Exception when calling RecordsApi->get_records: %s\n" % e)
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
api_instance = swagger_client.RecordsApi()
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
    print("Exception when calling RecordsApi->patch_record: %s\n" % e)
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
api_instance = swagger_client.RecordsApi()
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
    print("Exception when calling RecordsApi->update_record: %s\n" % e)
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

