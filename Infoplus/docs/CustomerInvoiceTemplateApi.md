# Infoplus\CustomerInvoiceTemplateApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomerInvoiceTemplate**](CustomerInvoiceTemplateApi.md#addCustomerInvoiceTemplate) | **POST** /beta/customerInvoiceTemplate | Create a customerInvoiceTemplate
[**addCustomerInvoiceTemplateAudit**](CustomerInvoiceTemplateApi.md#addCustomerInvoiceTemplateAudit) | **PUT** /beta/customerInvoiceTemplate/{customerInvoiceTemplateId}/audit/{customerInvoiceTemplateAudit} | Add new audit for a customerInvoiceTemplate
[**addCustomerInvoiceTemplateTag**](CustomerInvoiceTemplateApi.md#addCustomerInvoiceTemplateTag) | **PUT** /beta/customerInvoiceTemplate/{customerInvoiceTemplateId}/tag/{customerInvoiceTemplateTag} | Add new tags for a customerInvoiceTemplate.
[**deleteCustomerInvoiceTemplate**](CustomerInvoiceTemplateApi.md#deleteCustomerInvoiceTemplate) | **DELETE** /beta/customerInvoiceTemplate/{customerInvoiceTemplateId} | Delete a customerInvoiceTemplate
[**deleteCustomerInvoiceTemplateTag**](CustomerInvoiceTemplateApi.md#deleteCustomerInvoiceTemplateTag) | **DELETE** /beta/customerInvoiceTemplate/{customerInvoiceTemplateId}/tag/{customerInvoiceTemplateTag} | Delete a tag for a customerInvoiceTemplate.
[**getCustomerInvoiceTemplateByFilter**](CustomerInvoiceTemplateApi.md#getCustomerInvoiceTemplateByFilter) | **GET** /beta/customerInvoiceTemplate/search | Search customerInvoiceTemplates by filter
[**getCustomerInvoiceTemplateById**](CustomerInvoiceTemplateApi.md#getCustomerInvoiceTemplateById) | **GET** /beta/customerInvoiceTemplate/{customerInvoiceTemplateId} | Get a customerInvoiceTemplate by id
[**getCustomerInvoiceTemplateTags**](CustomerInvoiceTemplateApi.md#getCustomerInvoiceTemplateTags) | **GET** /beta/customerInvoiceTemplate/{customerInvoiceTemplateId}/tag | Get the tags for a customerInvoiceTemplate.
[**getDuplicateCustomerInvoiceTemplateById**](CustomerInvoiceTemplateApi.md#getDuplicateCustomerInvoiceTemplateById) | **GET** /beta/customerInvoiceTemplate/duplicate/{customerInvoiceTemplateId} | Get a duplicated a customerInvoiceTemplate by id
[**updateCustomerInvoiceTemplate**](CustomerInvoiceTemplateApi.md#updateCustomerInvoiceTemplate) | **PUT** /beta/customerInvoiceTemplate | Update a customerInvoiceTemplate


# **addCustomerInvoiceTemplate**
> \Infoplus\Model\CustomerInvoiceTemplate addCustomerInvoiceTemplate($body)

Create a customerInvoiceTemplate

Inserts a new customerInvoiceTemplate using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$body = new \Infoplus\Model\CustomerInvoiceTemplate(); // \Infoplus\Model\CustomerInvoiceTemplate | CustomerInvoiceTemplate to be inserted.

try { 
    $result = $api_instance->addCustomerInvoiceTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->addCustomerInvoiceTemplate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\CustomerInvoiceTemplate**](\Infoplus\Model\CustomerInvoiceTemplate.md)| CustomerInvoiceTemplate to be inserted. | 

### Return type

[**\Infoplus\Model\CustomerInvoiceTemplate**](CustomerInvoiceTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addCustomerInvoiceTemplateAudit**
> addCustomerInvoiceTemplateAudit($customer_invoice_template_id, $customer_invoice_template_audit)

Add new audit for a customerInvoiceTemplate

Adds an audit to an existing customerInvoiceTemplate.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to add an audit to
$customer_invoice_template_audit = "customer_invoice_template_audit_example"; // string | The audit to add

try { 
    $api_instance->addCustomerInvoiceTemplateAudit($customer_invoice_template_id, $customer_invoice_template_audit);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->addCustomerInvoiceTemplateAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to add an audit to | 
 **customer_invoice_template_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addCustomerInvoiceTemplateTag**
> addCustomerInvoiceTemplateTag($customer_invoice_template_id, $customer_invoice_template_tag)

Add new tags for a customerInvoiceTemplate.

Adds a tag to an existing customerInvoiceTemplate.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to add a tag to
$customer_invoice_template_tag = "customer_invoice_template_tag_example"; // string | The tag to add

try { 
    $api_instance->addCustomerInvoiceTemplateTag($customer_invoice_template_id, $customer_invoice_template_tag);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->addCustomerInvoiceTemplateTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to add a tag to | 
 **customer_invoice_template_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteCustomerInvoiceTemplate**
> deleteCustomerInvoiceTemplate($customer_invoice_template_id)

Delete a customerInvoiceTemplate

Deletes the customerInvoiceTemplate identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to be deleted.

try { 
    $api_instance->deleteCustomerInvoiceTemplate($customer_invoice_template_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->deleteCustomerInvoiceTemplate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteCustomerInvoiceTemplateTag**
> deleteCustomerInvoiceTemplateTag($customer_invoice_template_id, $customer_invoice_template_tag)

Delete a tag for a customerInvoiceTemplate.

Deletes an existing customerInvoiceTemplate tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to remove tag from
$customer_invoice_template_tag = "customer_invoice_template_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteCustomerInvoiceTemplateTag($customer_invoice_template_id, $customer_invoice_template_tag);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->deleteCustomerInvoiceTemplateTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to remove tag from | 
 **customer_invoice_template_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCustomerInvoiceTemplateByFilter**
> \Infoplus\Model\CustomerInvoiceTemplate[] getCustomerInvoiceTemplateByFilter($filter, $page, $limit, $sort)

Search customerInvoiceTemplates by filter

Returns the list of customerInvoiceTemplates that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getCustomerInvoiceTemplateByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->getCustomerInvoiceTemplateByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\CustomerInvoiceTemplate[]**](CustomerInvoiceTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCustomerInvoiceTemplateById**
> \Infoplus\Model\CustomerInvoiceTemplate getCustomerInvoiceTemplateById($customer_invoice_template_id)

Get a customerInvoiceTemplate by id

Returns the customerInvoiceTemplate identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to be returned.

try { 
    $result = $api_instance->getCustomerInvoiceTemplateById($customer_invoice_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->getCustomerInvoiceTemplateById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to be returned. | 

### Return type

[**\Infoplus\Model\CustomerInvoiceTemplate**](CustomerInvoiceTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCustomerInvoiceTemplateTags**
> getCustomerInvoiceTemplateTags($customer_invoice_template_id)

Get the tags for a customerInvoiceTemplate.

Get all existing customerInvoiceTemplate tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to get tags for

try { 
    $api_instance->getCustomerInvoiceTemplateTags($customer_invoice_template_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->getCustomerInvoiceTemplateTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateCustomerInvoiceTemplateById**
> \Infoplus\Model\CustomerInvoiceTemplate getDuplicateCustomerInvoiceTemplateById($customer_invoice_template_id)

Get a duplicated a customerInvoiceTemplate by id

Returns a duplicated customerInvoiceTemplate identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$customer_invoice_template_id = 56; // int | Id of the customerInvoiceTemplate to be duplicated.

try { 
    $result = $api_instance->getDuplicateCustomerInvoiceTemplateById($customer_invoice_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->getDuplicateCustomerInvoiceTemplateById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_id** | **int**| Id of the customerInvoiceTemplate to be duplicated. | 

### Return type

[**\Infoplus\Model\CustomerInvoiceTemplate**](CustomerInvoiceTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCustomerInvoiceTemplate**
> updateCustomerInvoiceTemplate($body)

Update a customerInvoiceTemplate

Updates an existing customerInvoiceTemplate using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerInvoiceTemplateApi();
$body = new \Infoplus\Model\CustomerInvoiceTemplate(); // \Infoplus\Model\CustomerInvoiceTemplate | CustomerInvoiceTemplate to be updated.

try { 
    $api_instance->updateCustomerInvoiceTemplate($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateApi->updateCustomerInvoiceTemplate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\CustomerInvoiceTemplate**](\Infoplus\Model\CustomerInvoiceTemplate.md)| CustomerInvoiceTemplate to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
