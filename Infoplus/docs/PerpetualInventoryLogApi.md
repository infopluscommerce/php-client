# Infoplus\PerpetualInventoryLogApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPerpetualInventoryLogAudit**](PerpetualInventoryLogApi.md#addPerpetualInventoryLogAudit) | **PUT** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/audit/{perpetualInventoryLogAudit} | Add new audit for a perpetualInventoryLog
[**addPerpetualInventoryLogTag**](PerpetualInventoryLogApi.md#addPerpetualInventoryLogTag) | **PUT** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/tag/{perpetualInventoryLogTag} | Add new tags for a perpetualInventoryLog.
[**deletePerpetualInventoryLogTag**](PerpetualInventoryLogApi.md#deletePerpetualInventoryLogTag) | **DELETE** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/tag/{perpetualInventoryLogTag} | Delete a tag for a perpetualInventoryLog.
[**getDuplicatePerpetualInventoryLogById**](PerpetualInventoryLogApi.md#getDuplicatePerpetualInventoryLogById) | **GET** /beta/perpetualInventoryLog/duplicate/{perpetualInventoryLogId} | Get a duplicated a perpetualInventoryLog by id
[**getPerpetualInventoryLogByFilter**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogByFilter) | **GET** /beta/perpetualInventoryLog/search | Search perpetualInventoryLogs by filter
[**getPerpetualInventoryLogById**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogById) | **GET** /beta/perpetualInventoryLog/{perpetualInventoryLogId} | Get a perpetualInventoryLog by id
[**getPerpetualInventoryLogTags**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogTags) | **GET** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/tag | Get the tags for a perpetualInventoryLog.


# **addPerpetualInventoryLogAudit**
> addPerpetualInventoryLogAudit($perpetual_inventory_log_id, $perpetual_inventory_log_audit)

Add new audit for a perpetualInventoryLog

Adds an audit to an existing perpetualInventoryLog.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to add an audit to
$perpetual_inventory_log_audit = "perpetual_inventory_log_audit_example"; // string | The audit to add

try { 
    $api_instance->addPerpetualInventoryLogAudit($perpetual_inventory_log_id, $perpetual_inventory_log_audit);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->addPerpetualInventoryLogAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to add an audit to | 
 **perpetual_inventory_log_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addPerpetualInventoryLogTag**
> addPerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag)

Add new tags for a perpetualInventoryLog.

Adds a tag to an existing perpetualInventoryLog.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to add a tag to
$perpetual_inventory_log_tag = "perpetual_inventory_log_tag_example"; // string | The tag to add

try { 
    $api_instance->addPerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->addPerpetualInventoryLogTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to add a tag to | 
 **perpetual_inventory_log_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deletePerpetualInventoryLogTag**
> deletePerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag)

Delete a tag for a perpetualInventoryLog.

Deletes an existing perpetualInventoryLog tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to remove tag from
$perpetual_inventory_log_tag = "perpetual_inventory_log_tag_example"; // string | The tag to delete

try { 
    $api_instance->deletePerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->deletePerpetualInventoryLogTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to remove tag from | 
 **perpetual_inventory_log_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicatePerpetualInventoryLogById**
> \Infoplus\Model\PerpetualInventoryLog getDuplicatePerpetualInventoryLogById($perpetual_inventory_log_id)

Get a duplicated a perpetualInventoryLog by id

Returns a duplicated perpetualInventoryLog identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to be duplicated.

try { 
    $result = $api_instance->getDuplicatePerpetualInventoryLogById($perpetual_inventory_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getDuplicatePerpetualInventoryLogById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to be duplicated. | 

### Return type

[**\Infoplus\Model\PerpetualInventoryLog**](PerpetualInventoryLog.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPerpetualInventoryLogByFilter**
> \Infoplus\Model\PerpetualInventoryLog[] getPerpetualInventoryLogByFilter($filter, $page, $limit, $sort)

Search perpetualInventoryLogs by filter

Returns the list of perpetualInventoryLogs that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getPerpetualInventoryLogByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogByFilter: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Query string, used to filter results. | [optional] 
 **page** | **int**| Result page number.  Defaults to 1. | [optional] 
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional] 
 **sort** | **string**| Sort results by specified field. | [optional] 

### Return type

[**\Infoplus\Model\PerpetualInventoryLog[]**](PerpetualInventoryLog.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPerpetualInventoryLogById**
> \Infoplus\Model\PerpetualInventoryLog getPerpetualInventoryLogById($perpetual_inventory_log_id)

Get a perpetualInventoryLog by id

Returns the perpetualInventoryLog identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to be returned.

try { 
    $result = $api_instance->getPerpetualInventoryLogById($perpetual_inventory_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to be returned. | 

### Return type

[**\Infoplus\Model\PerpetualInventoryLog**](PerpetualInventoryLog.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPerpetualInventoryLogTags**
> getPerpetualInventoryLogTags($perpetual_inventory_log_id)

Get the tags for a perpetualInventoryLog.

Get all existing perpetualInventoryLog tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PerpetualInventoryLogApi();
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to get tags for

try { 
    $api_instance->getPerpetualInventoryLogTags($perpetual_inventory_log_id);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
