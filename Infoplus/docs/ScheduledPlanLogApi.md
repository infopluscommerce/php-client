# Infoplus\ScheduledPlanLogApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addScheduledPlanLogAudit**](ScheduledPlanLogApi.md#addScheduledPlanLogAudit) | **PUT** /beta/scheduledPlanLog/{scheduledPlanLogId}/audit/{scheduledPlanLogAudit} | Add new audit for a scheduledPlanLog
[**addScheduledPlanLogTag**](ScheduledPlanLogApi.md#addScheduledPlanLogTag) | **PUT** /beta/scheduledPlanLog/{scheduledPlanLogId}/tag/{scheduledPlanLogTag} | Add new tags for a scheduledPlanLog.
[**deleteScheduledPlanLogTag**](ScheduledPlanLogApi.md#deleteScheduledPlanLogTag) | **DELETE** /beta/scheduledPlanLog/{scheduledPlanLogId}/tag/{scheduledPlanLogTag} | Delete a tag for a scheduledPlanLog.
[**getDuplicateScheduledPlanLogById**](ScheduledPlanLogApi.md#getDuplicateScheduledPlanLogById) | **GET** /beta/scheduledPlanLog/duplicate/{scheduledPlanLogId} | Get a duplicated a scheduledPlanLog by id
[**getScheduledPlanLogByFilter**](ScheduledPlanLogApi.md#getScheduledPlanLogByFilter) | **GET** /beta/scheduledPlanLog/search | Search scheduledPlanLogs by filter
[**getScheduledPlanLogById**](ScheduledPlanLogApi.md#getScheduledPlanLogById) | **GET** /beta/scheduledPlanLog/{scheduledPlanLogId} | Get a scheduledPlanLog by id
[**getScheduledPlanLogTags**](ScheduledPlanLogApi.md#getScheduledPlanLogTags) | **GET** /beta/scheduledPlanLog/{scheduledPlanLogId}/tag | Get the tags for a scheduledPlanLog.


# **addScheduledPlanLogAudit**
> addScheduledPlanLogAudit($scheduled_plan_log_id, $scheduled_plan_log_audit)

Add new audit for a scheduledPlanLog

Adds an audit to an existing scheduledPlanLog.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to add an audit to
$scheduled_plan_log_audit = "scheduled_plan_log_audit_example"; // string | The audit to add

try { 
    $api_instance->addScheduledPlanLogAudit($scheduled_plan_log_id, $scheduled_plan_log_audit);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->addScheduledPlanLogAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to add an audit to | 
 **scheduled_plan_log_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addScheduledPlanLogTag**
> addScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag)

Add new tags for a scheduledPlanLog.

Adds a tag to an existing scheduledPlanLog.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to add a tag to
$scheduled_plan_log_tag = "scheduled_plan_log_tag_example"; // string | The tag to add

try { 
    $api_instance->addScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->addScheduledPlanLogTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to add a tag to | 
 **scheduled_plan_log_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteScheduledPlanLogTag**
> deleteScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag)

Delete a tag for a scheduledPlanLog.

Deletes an existing scheduledPlanLog tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to remove tag from
$scheduled_plan_log_tag = "scheduled_plan_log_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->deleteScheduledPlanLogTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to remove tag from | 
 **scheduled_plan_log_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateScheduledPlanLogById**
> \Infoplus\Model\ScheduledPlanLog getDuplicateScheduledPlanLogById($scheduled_plan_log_id)

Get a duplicated a scheduledPlanLog by id

Returns a duplicated scheduledPlanLog identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to be duplicated.

try { 
    $result = $api_instance->getDuplicateScheduledPlanLogById($scheduled_plan_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getDuplicateScheduledPlanLogById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to be duplicated. | 

### Return type

[**\Infoplus\Model\ScheduledPlanLog**](ScheduledPlanLog.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getScheduledPlanLogByFilter**
> \Infoplus\Model\ScheduledPlanLog[] getScheduledPlanLogByFilter($filter, $page, $limit, $sort)

Search scheduledPlanLogs by filter

Returns the list of scheduledPlanLogs that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getScheduledPlanLogByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ScheduledPlanLog[]**](ScheduledPlanLog.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getScheduledPlanLogById**
> \Infoplus\Model\ScheduledPlanLog getScheduledPlanLogById($scheduled_plan_log_id)

Get a scheduledPlanLog by id

Returns the scheduledPlanLog identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to be returned.

try { 
    $result = $api_instance->getScheduledPlanLogById($scheduled_plan_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to be returned. | 

### Return type

[**\Infoplus\Model\ScheduledPlanLog**](ScheduledPlanLog.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getScheduledPlanLogTags**
> getScheduledPlanLogTags($scheduled_plan_log_id)

Get the tags for a scheduledPlanLog.

Get all existing scheduledPlanLog tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ScheduledPlanLogApi();
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to get tags for

try { 
    $api_instance->getScheduledPlanLogTags($scheduled_plan_log_id);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
