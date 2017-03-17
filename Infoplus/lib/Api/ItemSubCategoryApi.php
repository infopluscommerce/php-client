<?php
/**
 * ItemSubCategoryApi
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Infoplus\Api;

use \Infoplus\Configuration;
use \Infoplus\ApiClient;
use \Infoplus\ApiException;
use \Infoplus\ObjectSerializer;

/**
 * ItemSubCategoryApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemSubCategoryApi
{

    /**
     * API Client
     * @var \Infoplus\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Infoplus\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Infoplus\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Infoplus\ApiClient $apiClient set the API client
     * @return ItemSubCategoryApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addItemSubCategory
     *
     * Create an itemSubCategory
     *
     * @param \Infoplus\Model\ItemSubCategory $body ItemSubCategory to be inserted. (required)
     * @return \Infoplus\Model\ItemSubCategory
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSubCategory($body)
    {
        list($response, $statusCode, $httpHeader) = $this->addItemSubCategoryWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addItemSubCategoryWithHttpInfo
     *
     * Create an itemSubCategory
     *
     * @param \Infoplus\Model\ItemSubCategory $body ItemSubCategory to be inserted. (required)
     * @return Array of \Infoplus\Model\ItemSubCategory, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSubCategoryWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addItemSubCategory');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\ItemSubCategory'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSubCategory', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSubCategory', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 405:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ApiResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * addItemSubCategoryAudit
     *
     * Add new audit for an itemSubCategory
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to add an audit to (required)
     * @param string $item_sub_category_audit The audit to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSubCategoryAudit($item_sub_category_id, $item_sub_category_audit)
    {
        list($response, $statusCode, $httpHeader) = $this->addItemSubCategoryAuditWithHttpInfo ($item_sub_category_id, $item_sub_category_audit);
        return $response; 
    }


    /**
     * addItemSubCategoryAuditWithHttpInfo
     *
     * Add new audit for an itemSubCategory
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to add an audit to (required)
     * @param string $item_sub_category_audit The audit to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSubCategoryAuditWithHttpInfo($item_sub_category_id, $item_sub_category_audit)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling addItemSubCategoryAudit');
        }
        // verify the required parameter 'item_sub_category_audit' is set
        if ($item_sub_category_audit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_audit when calling addItemSubCategoryAudit');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/{itemSubCategoryId}/audit/{itemSubCategoryAudit}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }// path params
        
        if ($item_sub_category_audit !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryAudit" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_audit),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * addItemSubCategoryTag
     *
     * Add new tags for an itemSubCategory.
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to add a tag to (required)
     * @param string $item_sub_category_tag The tag to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->addItemSubCategoryTagWithHttpInfo ($item_sub_category_id, $item_sub_category_tag);
        return $response; 
    }


    /**
     * addItemSubCategoryTagWithHttpInfo
     *
     * Add new tags for an itemSubCategory.
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to add a tag to (required)
     * @param string $item_sub_category_tag The tag to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSubCategoryTagWithHttpInfo($item_sub_category_id, $item_sub_category_tag)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling addItemSubCategoryTag');
        }
        // verify the required parameter 'item_sub_category_tag' is set
        if ($item_sub_category_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_tag when calling addItemSubCategoryTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/{itemSubCategoryId}/tag/{itemSubCategoryTag}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }// path params
        
        if ($item_sub_category_tag !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_tag),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteItemSubCategory
     *
     * Delete an itemSubCategory
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to be deleted. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSubCategory($item_sub_category_id)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteItemSubCategoryWithHttpInfo ($item_sub_category_id);
        return $response; 
    }


    /**
     * deleteItemSubCategoryWithHttpInfo
     *
     * Delete an itemSubCategory
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to be deleted. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSubCategoryWithHttpInfo($item_sub_category_id)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling deleteItemSubCategory');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/{itemSubCategoryId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteItemSubCategoryTag
     *
     * Delete a tag for an itemSubCategory.
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to remove tag from (required)
     * @param string $item_sub_category_tag The tag to delete (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteItemSubCategoryTagWithHttpInfo ($item_sub_category_id, $item_sub_category_tag);
        return $response; 
    }


    /**
     * deleteItemSubCategoryTagWithHttpInfo
     *
     * Delete a tag for an itemSubCategory.
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to remove tag from (required)
     * @param string $item_sub_category_tag The tag to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSubCategoryTagWithHttpInfo($item_sub_category_id, $item_sub_category_tag)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling deleteItemSubCategoryTag');
        }
        // verify the required parameter 'item_sub_category_tag' is set
        if ($item_sub_category_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_tag when calling deleteItemSubCategoryTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/{itemSubCategoryId}/tag/{itemSubCategoryTag}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }// path params
        
        if ($item_sub_category_tag !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_tag),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getDuplicateItemSubCategoryById
     *
     * Get a duplicated an itemSubCategory by id
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to be duplicated. (required)
     * @return \Infoplus\Model\ItemSubCategory
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateItemSubCategoryById($item_sub_category_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateItemSubCategoryByIdWithHttpInfo ($item_sub_category_id);
        return $response; 
    }


    /**
     * getDuplicateItemSubCategoryByIdWithHttpInfo
     *
     * Get a duplicated an itemSubCategory by id
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to be duplicated. (required)
     * @return Array of \Infoplus\Model\ItemSubCategory, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateItemSubCategoryByIdWithHttpInfo($item_sub_category_id)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling getDuplicateItemSubCategoryById');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/duplicate/{itemSubCategoryId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\ItemSubCategory'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSubCategory', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSubCategory', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getItemSubCategoryByFilter
     *
     * Search itemSubCategorys by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\ItemSubCategory[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSubCategoryByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getItemSubCategoryByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getItemSubCategoryByFilterWithHttpInfo
     *
     * Search itemSubCategorys by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\ItemSubCategory[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSubCategoryByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/search";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\ItemSubCategory[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSubCategory[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSubCategory[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getItemSubCategoryById
     *
     * Get an itemSubCategory by id
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to be returned. (required)
     * @return \Infoplus\Model\ItemSubCategory
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSubCategoryById($item_sub_category_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getItemSubCategoryByIdWithHttpInfo ($item_sub_category_id);
        return $response; 
    }


    /**
     * getItemSubCategoryByIdWithHttpInfo
     *
     * Get an itemSubCategory by id
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to be returned. (required)
     * @return Array of \Infoplus\Model\ItemSubCategory, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSubCategoryByIdWithHttpInfo($item_sub_category_id)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling getItemSubCategoryById');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/{itemSubCategoryId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\ItemSubCategory'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSubCategory', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSubCategory', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getItemSubCategoryTags
     *
     * Get the tags for an itemSubCategory.
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to get tags for (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSubCategoryTags($item_sub_category_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getItemSubCategoryTagsWithHttpInfo ($item_sub_category_id);
        return $response; 
    }


    /**
     * getItemSubCategoryTagsWithHttpInfo
     *
     * Get the tags for an itemSubCategory.
     *
     * @param int $item_sub_category_id Id of the itemSubCategory to get tags for (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSubCategoryTagsWithHttpInfo($item_sub_category_id)
    {
        
        // verify the required parameter 'item_sub_category_id' is set
        if ($item_sub_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sub_category_id when calling getItemSubCategoryTags');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory/{itemSubCategoryId}/tag";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($item_sub_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSubCategoryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sub_category_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * updateItemSubCategory
     *
     * Update an itemSubCategory
     *
     * @param \Infoplus\Model\ItemSubCategory $body ItemSubCategory to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateItemSubCategory($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateItemSubCategoryWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateItemSubCategoryWithHttpInfo
     *
     * Update an itemSubCategory
     *
     * @param \Infoplus\Model\ItemSubCategory $body ItemSubCategory to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateItemSubCategoryWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateItemSubCategory');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSubCategory";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
}
