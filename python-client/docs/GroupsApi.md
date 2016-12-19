# swagger_client.GroupsApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_group**](GroupsApi.md#create_group) | **POST** /buckets/{bucket_id}/groups | 
[**delete_group**](GroupsApi.md#delete_group) | **DELETE** /buckets/{bucket_id}/groups/{group_id} | 
[**delete_groups**](GroupsApi.md#delete_groups) | **DELETE** /buckets/{bucket_id}/groups | 
[**get_group**](GroupsApi.md#get_group) | **GET** /buckets/{bucket_id}/groups/{group_id} | 
[**get_groups**](GroupsApi.md#get_groups) | **GET** /buckets/{bucket_id}/groups | 
[**patch_group**](GroupsApi.md#patch_group) | **PATCH** /buckets/{bucket_id}/groups/{group_id} | 
[**update_group**](GroupsApi.md#update_group) | **PUT** /buckets/{bucket_id}/groups/{group_id} | 


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
api_instance = swagger_client.GroupsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group = swagger_client.Group() # Group | Group information.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)

try: 
    api_response = api_instance.create_group(bucket_id, group, if_match=if_match, if_none_match=if_none_match)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling GroupsApi->create_group: %s\n" % e)
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
api_instance = swagger_client.GroupsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group_id = 'group_id_example' # str | Group id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.delete_group(bucket_id, group_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling GroupsApi->delete_group: %s\n" % e)
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
api_instance = swagger_client.GroupsApi()
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
    print("Exception when calling GroupsApi->delete_groups: %s\n" % e)
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
api_instance = swagger_client.GroupsApi()
bucket_id = 'bucket_id_example' # str | Bucket id.
group_id = 'group_id_example' # str | Group id.
if_match = 'if_match_example' # str | Provide a timestamp to see if a resource has changed, avoid changes and returns 412 if it does. (optional)
if_none_match = 'if_none_match_example' # str | Provide a timestamp to see if a resource has changed, avoid overwriting objects with the same id if it does. Returns 304 with empty body if nothing has changed. (optional)
fields = ['fields_example'] # list[str] | Fields to compose response (id and last_modified are always returned). (optional)

try: 
    api_response = api_instance.get_group(bucket_id, group_id, if_match=if_match, if_none_match=if_none_match, fields=fields)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling GroupsApi->get_group: %s\n" % e)
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
api_instance = swagger_client.GroupsApi()
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
    print("Exception when calling GroupsApi->get_groups: %s\n" % e)
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
api_instance = swagger_client.GroupsApi()
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
    print("Exception when calling GroupsApi->patch_group: %s\n" % e)
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
api_instance = swagger_client.GroupsApi()
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
    print("Exception when calling GroupsApi->update_group: %s\n" % e)
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

