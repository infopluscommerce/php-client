# Infoplus\LineOfBusinessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLineOfBusinessById**](LineOfBusinessApi.md#getLineOfBusinessById) | **GET** /v1.0/lineOfBusiness/{lineOfBusinessId} | Get a lineOfBusiness by id
[**getLineOfBusinessBySearchText**](LineOfBusinessApi.md#getLineOfBusinessBySearchText) | **GET** /v1.0/lineOfBusiness/search | Search lineOfBusinesses


# **getLineOfBusinessById**
> \Infoplus\Model\LineOfBusiness getLineOfBusinessById($line_of_business_id)

Get a lineOfBusiness by id

Returns the lineOfBusiness identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LineOfBusinessApi();
$line_of_business_id = "line_of_business_id_example"; // string | Id of lineOfBusiness to be returned.

try { 
    $result = $api_instance->getLineOfBusinessById($line_of_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getLineOfBusinessById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **string**| Id of lineOfBusiness to be returned. | 

### Return type

[**\Infoplus\Model\LineOfBusiness**](LineOfBusiness.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLineOfBusinessBySearchText**
> \Infoplus\Model\LineOfBusiness[] getLineOfBusinessBySearchText($search_text, $page, $limit)

Search lineOfBusinesses

Returns the list of lineOfBusinesses that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LineOfBusinessApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getLineOfBusinessBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getLineOfBusinessBySearchText: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text, used to filter results. | [optional] 
 **page** | **int**| Result page number.  Defaults to 1. | [optional] 
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional] 

### Return type

[**\Infoplus\Model\LineOfBusiness[]**](LineOfBusiness.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
