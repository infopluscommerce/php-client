# Infoplus\ItemProductCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemProductCode**](ItemProductCodeApi.md#addItemProductCode) | **POST** /beta/itemProductCode | Create an itemProductCode
[**addItemProductCodeAudit**](ItemProductCodeApi.md#addItemProductCodeAudit) | **PUT** /beta/itemProductCode/{itemProductCodeId}/audit/{itemProductCodeAudit} | Add new audit for an itemProductCode
[**addItemProductCodeTag**](ItemProductCodeApi.md#addItemProductCodeTag) | **PUT** /beta/itemProductCode/{itemProductCodeId}/tag/{itemProductCodeTag} | Add new tags for an itemProductCode.
[**deleteItemProductCode**](ItemProductCodeApi.md#deleteItemProductCode) | **DELETE** /beta/itemProductCode/{itemProductCodeId} | Delete an itemProductCode
[**deleteItemProductCodeTag**](ItemProductCodeApi.md#deleteItemProductCodeTag) | **DELETE** /beta/itemProductCode/{itemProductCodeId}/tag/{itemProductCodeTag} | Delete a tag for an itemProductCode.
[**getDuplicateItemProductCodeById**](ItemProductCodeApi.md#getDuplicateItemProductCodeById) | **GET** /beta/itemProductCode/duplicate/{itemProductCodeId} | Get a duplicated an itemProductCode by id
[**getItemProductCodeByFilter**](ItemProductCodeApi.md#getItemProductCodeByFilter) | **GET** /beta/itemProductCode/search | Search itemProductCodes by filter
[**getItemProductCodeById**](ItemProductCodeApi.md#getItemProductCodeById) | **GET** /beta/itemProductCode/{itemProductCodeId} | Get an itemProductCode by id
[**getItemProductCodeTags**](ItemProductCodeApi.md#getItemProductCodeTags) | **GET** /beta/itemProductCode/{itemProductCodeId}/tag | Get the tags for an itemProductCode.
[**updateItemProductCode**](ItemProductCodeApi.md#updateItemProductCode) | **PUT** /beta/itemProductCode | Update an itemProductCode


# **addItemProductCode**
> \Infoplus\Model\ItemProductCode addItemProductCode($body)

Create an itemProductCode

Inserts a new itemProductCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$body = new \Infoplus\Model\ItemProductCode(); // \Infoplus\Model\ItemProductCode | ItemProductCode to be inserted.

try { 
    $result = $api_instance->addItemProductCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemProductCode**](\Infoplus\Model\ItemProductCode.md)| ItemProductCode to be inserted. | 

### Return type

[**\Infoplus\Model\ItemProductCode**](ItemProductCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemProductCodeAudit**
> addItemProductCodeAudit($item_product_code_id, $item_product_code_audit)

Add new audit for an itemProductCode

Adds an audit to an existing itemProductCode.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to add an audit to
$item_product_code_audit = "item_product_code_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemProductCodeAudit($item_product_code_id, $item_product_code_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCodeAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to add an audit to | 
 **item_product_code_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemProductCodeTag**
> addItemProductCodeTag($item_product_code_id, $item_product_code_tag)

Add new tags for an itemProductCode.

Adds a tag to an existing itemProductCode.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to add a tag to
$item_product_code_tag = "item_product_code_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemProductCodeTag($item_product_code_id, $item_product_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCodeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to add a tag to | 
 **item_product_code_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemProductCode**
> deleteItemProductCode($item_product_code_id)

Delete an itemProductCode

Deletes the itemProductCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to be deleted.

try { 
    $api_instance->deleteItemProductCode($item_product_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->deleteItemProductCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemProductCodeTag**
> deleteItemProductCodeTag($item_product_code_id, $item_product_code_tag)

Delete a tag for an itemProductCode.

Deletes an existing itemProductCode tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to remove tag from
$item_product_code_tag = "item_product_code_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemProductCodeTag($item_product_code_id, $item_product_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->deleteItemProductCodeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to remove tag from | 
 **item_product_code_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemProductCodeById**
> \Infoplus\Model\ItemProductCode getDuplicateItemProductCodeById($item_product_code_id)

Get a duplicated an itemProductCode by id

Returns a duplicated itemProductCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemProductCodeById($item_product_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getDuplicateItemProductCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemProductCode**](ItemProductCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemProductCodeByFilter**
> \Infoplus\Model\ItemProductCode[] getItemProductCodeByFilter($filter, $page, $limit, $sort)

Search itemProductCodes by filter

Returns the list of itemProductCodes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemProductCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemProductCode[]**](ItemProductCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemProductCodeById**
> \Infoplus\Model\ItemProductCode getItemProductCodeById($item_product_code_id)

Get an itemProductCode by id

Returns the itemProductCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to be returned.

try { 
    $result = $api_instance->getItemProductCodeById($item_product_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to be returned. | 

### Return type

[**\Infoplus\Model\ItemProductCode**](ItemProductCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemProductCodeTags**
> getItemProductCodeTags($item_product_code_id)

Get the tags for an itemProductCode.

Get all existing itemProductCode tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = 56; // int | Id of the itemProductCode to get tags for

try { 
    $api_instance->getItemProductCodeTags($item_product_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemProductCode**
> updateItemProductCode($body)

Update an itemProductCode

Updates an existing itemProductCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$body = new \Infoplus\Model\ItemProductCode(); // \Infoplus\Model\ItemProductCode | ItemProductCode to be updated.

try { 
    $api_instance->updateItemProductCode($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->updateItemProductCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemProductCode**](\Infoplus\Model\ItemProductCode.md)| ItemProductCode to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
