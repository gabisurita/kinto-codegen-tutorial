# swagger_client.UtilitiesApi

All URIs are relative to *https://kinto.dev.mozaws.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contribute**](UtilitiesApi.md#contribute) | **GET** /contribute.json | 
[**heartbeat**](UtilitiesApi.md#heartbeat) | **GET** /__heartbeat__ | 
[**lbheartbeat**](UtilitiesApi.md#lbheartbeat) | **GET** /__lbheartbeat__ | 
[**server_info**](UtilitiesApi.md#server_info) | **GET** / | 
[**version**](UtilitiesApi.md#version) | **GET** /__version__ | 


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
api_instance = swagger_client.UtilitiesApi()

try: 
    api_response = api_instance.contribute()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UtilitiesApi->contribute: %s\n" % e)
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
api_instance = swagger_client.UtilitiesApi()

try: 
    api_response = api_instance.heartbeat()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UtilitiesApi->heartbeat: %s\n" % e)
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
api_instance = swagger_client.UtilitiesApi()

try: 
    api_response = api_instance.lbheartbeat()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UtilitiesApi->lbheartbeat: %s\n" % e)
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
api_instance = swagger_client.UtilitiesApi()

try: 
    api_response = api_instance.server_info()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UtilitiesApi->server_info: %s\n" % e)
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
api_instance = swagger_client.UtilitiesApi()

try: 
    api_response = api_instance.version()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling UtilitiesApi->version: %s\n" % e)
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

