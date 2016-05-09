# Infoplus\CustomerApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomer**](CustomerApi.md#addCustomer) | **POST** /v1.0/customer | Create a customer
[**deleteCustomer**](CustomerApi.md#deleteCustomer) | **DELETE** /v1.0/customer/{customerId} | Delete a customer
[**getCustomerByFilter**](CustomerApi.md#getCustomerByFilter) | **GET** /v1.0/customer/search | Search customers by filter
[**getCustomerById**](CustomerApi.md#getCustomerById) | **GET** /v1.0/customer/{customerId} | Get a customer by id
[**getCustomerBygetByCustomerNo**](CustomerApi.md#getCustomerBygetByCustomerNo) | **GET** /v1.0/customer/getByCustomerNo | Get a customer by Customer No
[**updateCustomer**](CustomerApi.md#updateCustomer) | **PUT** /v1.0/customer | Update a customer


# **addCustomer**
> \Infoplus\Model\Customer addCustomer($body)

Create a customer

Inserts a new customer using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerApi();
$body = new \Infoplus\Model\Customer(); // \Infoplus\Model\Customer | Customer to be inserted.

try { 
    $result = $api_instance->addCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->addCustomer: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Customer**](\Infoplus\Model\Customer.md)| Customer to be inserted. | 

### Return type

[**\Infoplus\Model\Customer**](Customer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteCustomer**
> deleteCustomer($customer_id)

Delete a customer

Deletes the customer identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerApi();
$customer_id = 56; // int | Id of the customer to be deleted.

try { 
    $api_instance->deleteCustomer($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCustomerByFilter**
> \Infoplus\Model\Customer[] getCustomerByFilter($filter, $page, $limit, $sort)

Search customers by filter

Returns the list of customers that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getCustomerByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Customer[]**](Customer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCustomerById**
> \Infoplus\Model\Customer getCustomerById($customer_id)

Get a customer by id

Returns the customer identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerApi();
$customer_id = 56; // int | Id of the customer to be returned.

try { 
    $result = $api_instance->getCustomerById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to be returned. | 

### Return type

[**\Infoplus\Model\Customer**](Customer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCustomerBygetByCustomerNo**
> \Infoplus\Model\Customer getCustomerBygetByCustomerNo($lob_id, $customer_no)

Get a customer by Customer No

Returns the customer identified by the specified parameters.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerApi();
$lob_id = 56; // int | lobId of the customer to be returned.
$customer_no = "customer_no_example"; // string | customerNo of the customer to be returned.

try { 
    $result = $api_instance->getCustomerBygetByCustomerNo($lob_id, $customer_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerBygetByCustomerNo: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lob_id** | **int**| lobId of the customer to be returned. | 
 **customer_no** | **string**| customerNo of the customer to be returned. | 

### Return type

[**\Infoplus\Model\Customer**](Customer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCustomer**
> updateCustomer($body)

Update a customer

Updates an existing customer using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CustomerApi();
$body = new \Infoplus\Model\Customer(); // \Infoplus\Model\Customer | Customer to be updated.

try { 
    $api_instance->updateCustomer($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Customer**](\Infoplus\Model\Customer.md)| Customer to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
