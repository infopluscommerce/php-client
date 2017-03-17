<?php
/**
 * InventoryAdjustmentApi
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
 * InventoryAdjustmentApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryAdjustmentApi
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
     * @return InventoryAdjustmentApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addInventoryAdjustmentAudit
     *
     * Add new audit for an inventoryAdjustment
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to add an audit to (required)
     * @param string $inventory_adjustment_audit The audit to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addInventoryAdjustmentAudit($inventory_adjustment_id, $inventory_adjustment_audit)
    {
        list($response, $statusCode, $httpHeader) = $this->addInventoryAdjustmentAuditWithHttpInfo ($inventory_adjustment_id, $inventory_adjustment_audit);
        return $response; 
    }


    /**
     * addInventoryAdjustmentAuditWithHttpInfo
     *
     * Add new audit for an inventoryAdjustment
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to add an audit to (required)
     * @param string $inventory_adjustment_audit The audit to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addInventoryAdjustmentAuditWithHttpInfo($inventory_adjustment_id, $inventory_adjustment_audit)
    {
        
        // verify the required parameter 'inventory_adjustment_id' is set
        if ($inventory_adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_id when calling addInventoryAdjustmentAudit');
        }
        // verify the required parameter 'inventory_adjustment_audit' is set
        if ($inventory_adjustment_audit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_audit when calling addInventoryAdjustmentAudit');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/{inventoryAdjustmentId}/audit/{inventoryAdjustmentAudit}";
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
        
        if ($inventory_adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_id),
                $resourcePath
            );
        }// path params
        
        if ($inventory_adjustment_audit !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentAudit" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_audit),
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
     * addInventoryAdjustmentTag
     *
     * Add new tags for an inventoryAdjustment.
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to add a tag to (required)
     * @param string $inventory_adjustment_tag The tag to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addInventoryAdjustmentTag($inventory_adjustment_id, $inventory_adjustment_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->addInventoryAdjustmentTagWithHttpInfo ($inventory_adjustment_id, $inventory_adjustment_tag);
        return $response; 
    }


    /**
     * addInventoryAdjustmentTagWithHttpInfo
     *
     * Add new tags for an inventoryAdjustment.
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to add a tag to (required)
     * @param string $inventory_adjustment_tag The tag to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addInventoryAdjustmentTagWithHttpInfo($inventory_adjustment_id, $inventory_adjustment_tag)
    {
        
        // verify the required parameter 'inventory_adjustment_id' is set
        if ($inventory_adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_id when calling addInventoryAdjustmentTag');
        }
        // verify the required parameter 'inventory_adjustment_tag' is set
        if ($inventory_adjustment_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_tag when calling addInventoryAdjustmentTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/{inventoryAdjustmentId}/tag/{inventoryAdjustmentTag}";
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
        
        if ($inventory_adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_id),
                $resourcePath
            );
        }// path params
        
        if ($inventory_adjustment_tag !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_tag),
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
     * deleteInventoryAdjustmentTag
     *
     * Delete a tag for an inventoryAdjustment.
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to remove tag from (required)
     * @param string $inventory_adjustment_tag The tag to delete (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteInventoryAdjustmentTag($inventory_adjustment_id, $inventory_adjustment_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteInventoryAdjustmentTagWithHttpInfo ($inventory_adjustment_id, $inventory_adjustment_tag);
        return $response; 
    }


    /**
     * deleteInventoryAdjustmentTagWithHttpInfo
     *
     * Delete a tag for an inventoryAdjustment.
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to remove tag from (required)
     * @param string $inventory_adjustment_tag The tag to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteInventoryAdjustmentTagWithHttpInfo($inventory_adjustment_id, $inventory_adjustment_tag)
    {
        
        // verify the required parameter 'inventory_adjustment_id' is set
        if ($inventory_adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_id when calling deleteInventoryAdjustmentTag');
        }
        // verify the required parameter 'inventory_adjustment_tag' is set
        if ($inventory_adjustment_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_tag when calling deleteInventoryAdjustmentTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/{inventoryAdjustmentId}/tag/{inventoryAdjustmentTag}";
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
        
        if ($inventory_adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_id),
                $resourcePath
            );
        }// path params
        
        if ($inventory_adjustment_tag !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_tag),
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
     * getDuplicateInventoryAdjustmentById
     *
     * Get a duplicated an inventoryAdjustment by id
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to be duplicated. (required)
     * @return \Infoplus\Model\InventoryAdjustment
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateInventoryAdjustmentById($inventory_adjustment_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateInventoryAdjustmentByIdWithHttpInfo ($inventory_adjustment_id);
        return $response; 
    }


    /**
     * getDuplicateInventoryAdjustmentByIdWithHttpInfo
     *
     * Get a duplicated an inventoryAdjustment by id
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to be duplicated. (required)
     * @return Array of \Infoplus\Model\InventoryAdjustment, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateInventoryAdjustmentByIdWithHttpInfo($inventory_adjustment_id)
    {
        
        // verify the required parameter 'inventory_adjustment_id' is set
        if ($inventory_adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_id when calling getDuplicateInventoryAdjustmentById');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/duplicate/{inventoryAdjustmentId}";
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
        
        if ($inventory_adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_id),
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
                $headerParams, '\Infoplus\Model\InventoryAdjustment'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\InventoryAdjustment', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\InventoryAdjustment', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getInventoryAdjustmentByFilter
     *
     * Search inventoryAdjustments by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\InventoryAdjustment[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getInventoryAdjustmentByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getInventoryAdjustmentByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getInventoryAdjustmentByFilterWithHttpInfo
     *
     * Search inventoryAdjustments by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\InventoryAdjustment[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getInventoryAdjustmentByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/search";
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
                $headerParams, '\Infoplus\Model\InventoryAdjustment[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\InventoryAdjustment[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\InventoryAdjustment[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getInventoryAdjustmentById
     *
     * Get an inventoryAdjustment by id
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to be returned. (required)
     * @return \Infoplus\Model\InventoryAdjustment
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getInventoryAdjustmentById($inventory_adjustment_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getInventoryAdjustmentByIdWithHttpInfo ($inventory_adjustment_id);
        return $response; 
    }


    /**
     * getInventoryAdjustmentByIdWithHttpInfo
     *
     * Get an inventoryAdjustment by id
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to be returned. (required)
     * @return Array of \Infoplus\Model\InventoryAdjustment, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getInventoryAdjustmentByIdWithHttpInfo($inventory_adjustment_id)
    {
        
        // verify the required parameter 'inventory_adjustment_id' is set
        if ($inventory_adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_id when calling getInventoryAdjustmentById');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/{inventoryAdjustmentId}";
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
        
        if ($inventory_adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_id),
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
                $headerParams, '\Infoplus\Model\InventoryAdjustment'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\InventoryAdjustment', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\InventoryAdjustment', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getInventoryAdjustmentTags
     *
     * Get the tags for an inventoryAdjustment.
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to get tags for (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getInventoryAdjustmentTags($inventory_adjustment_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getInventoryAdjustmentTagsWithHttpInfo ($inventory_adjustment_id);
        return $response; 
    }


    /**
     * getInventoryAdjustmentTagsWithHttpInfo
     *
     * Get the tags for an inventoryAdjustment.
     *
     * @param int $inventory_adjustment_id Id of the inventoryAdjustment to get tags for (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getInventoryAdjustmentTagsWithHttpInfo($inventory_adjustment_id)
    {
        
        // verify the required parameter 'inventory_adjustment_id' is set
        if ($inventory_adjustment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_adjustment_id when calling getInventoryAdjustmentTags');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/{inventoryAdjustmentId}/tag";
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
        
        if ($inventory_adjustment_id !== null) {
            $resourcePath = str_replace(
                "{" . "inventoryAdjustmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($inventory_adjustment_id),
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
     * updateInventoryAdjustmentCustomFields
     *
     * Update an inventoryAdjustment custom fields
     *
     * @param \Infoplus\Model\InventoryAdjustment $body InventoryAdjustment to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateInventoryAdjustmentCustomFields($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateInventoryAdjustmentCustomFieldsWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateInventoryAdjustmentCustomFieldsWithHttpInfo
     *
     * Update an inventoryAdjustment custom fields
     *
     * @param \Infoplus\Model\InventoryAdjustment $body InventoryAdjustment to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateInventoryAdjustmentCustomFieldsWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateInventoryAdjustmentCustomFields');
        }
  
        // parse inputs
        $resourcePath = "/beta/inventoryAdjustment/customFields";
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
