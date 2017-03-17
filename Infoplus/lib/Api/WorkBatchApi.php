<?php
/**
 * WorkBatchApi
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
 * WorkBatchApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkBatchApi
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
     * @return WorkBatchApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addWorkBatchAudit
     *
     * Add new audit for a workBatch
     *
     * @param int $work_batch_id Id of the workBatch to add an audit to (required)
     * @param string $work_batch_audit The audit to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addWorkBatchAudit($work_batch_id, $work_batch_audit)
    {
        list($response, $statusCode, $httpHeader) = $this->addWorkBatchAuditWithHttpInfo ($work_batch_id, $work_batch_audit);
        return $response; 
    }


    /**
     * addWorkBatchAuditWithHttpInfo
     *
     * Add new audit for a workBatch
     *
     * @param int $work_batch_id Id of the workBatch to add an audit to (required)
     * @param string $work_batch_audit The audit to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addWorkBatchAuditWithHttpInfo($work_batch_id, $work_batch_audit)
    {
        
        // verify the required parameter 'work_batch_id' is set
        if ($work_batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_id when calling addWorkBatchAudit');
        }
        // verify the required parameter 'work_batch_audit' is set
        if ($work_batch_audit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_audit when calling addWorkBatchAudit');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/{workBatchId}/audit/{workBatchAudit}";
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
        
        if ($work_batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_id),
                $resourcePath
            );
        }// path params
        
        if ($work_batch_audit !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchAudit" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_audit),
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
     * addWorkBatchTag
     *
     * Add new tags for a workBatch.
     *
     * @param int $work_batch_id Id of the workBatch to add a tag to (required)
     * @param string $work_batch_tag The tag to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addWorkBatchTag($work_batch_id, $work_batch_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->addWorkBatchTagWithHttpInfo ($work_batch_id, $work_batch_tag);
        return $response; 
    }


    /**
     * addWorkBatchTagWithHttpInfo
     *
     * Add new tags for a workBatch.
     *
     * @param int $work_batch_id Id of the workBatch to add a tag to (required)
     * @param string $work_batch_tag The tag to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addWorkBatchTagWithHttpInfo($work_batch_id, $work_batch_tag)
    {
        
        // verify the required parameter 'work_batch_id' is set
        if ($work_batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_id when calling addWorkBatchTag');
        }
        // verify the required parameter 'work_batch_tag' is set
        if ($work_batch_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_tag when calling addWorkBatchTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/{workBatchId}/tag/{workBatchTag}";
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
        
        if ($work_batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_id),
                $resourcePath
            );
        }// path params
        
        if ($work_batch_tag !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_tag),
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
     * deleteWorkBatchTag
     *
     * Delete a tag for a workBatch.
     *
     * @param int $work_batch_id Id of the workBatch to remove tag from (required)
     * @param string $work_batch_tag The tag to delete (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteWorkBatchTag($work_batch_id, $work_batch_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteWorkBatchTagWithHttpInfo ($work_batch_id, $work_batch_tag);
        return $response; 
    }


    /**
     * deleteWorkBatchTagWithHttpInfo
     *
     * Delete a tag for a workBatch.
     *
     * @param int $work_batch_id Id of the workBatch to remove tag from (required)
     * @param string $work_batch_tag The tag to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteWorkBatchTagWithHttpInfo($work_batch_id, $work_batch_tag)
    {
        
        // verify the required parameter 'work_batch_id' is set
        if ($work_batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_id when calling deleteWorkBatchTag');
        }
        // verify the required parameter 'work_batch_tag' is set
        if ($work_batch_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_tag when calling deleteWorkBatchTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/{workBatchId}/tag/{workBatchTag}";
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
        
        if ($work_batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_id),
                $resourcePath
            );
        }// path params
        
        if ($work_batch_tag !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_tag),
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
     * getDuplicateWorkBatchById
     *
     * Get a duplicated a workBatch by id
     *
     * @param int $work_batch_id Id of the workBatch to be duplicated. (required)
     * @return \Infoplus\Model\WorkBatch
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateWorkBatchById($work_batch_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateWorkBatchByIdWithHttpInfo ($work_batch_id);
        return $response; 
    }


    /**
     * getDuplicateWorkBatchByIdWithHttpInfo
     *
     * Get a duplicated a workBatch by id
     *
     * @param int $work_batch_id Id of the workBatch to be duplicated. (required)
     * @return Array of \Infoplus\Model\WorkBatch, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateWorkBatchByIdWithHttpInfo($work_batch_id)
    {
        
        // verify the required parameter 'work_batch_id' is set
        if ($work_batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_id when calling getDuplicateWorkBatchById');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/duplicate/{workBatchId}";
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
        
        if ($work_batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_id),
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
                $headerParams, '\Infoplus\Model\WorkBatch'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\WorkBatch', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\WorkBatch', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getWorkBatchByFilter
     *
     * Search workBatchs by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\WorkBatch[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getWorkBatchByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getWorkBatchByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getWorkBatchByFilterWithHttpInfo
     *
     * Search workBatchs by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\WorkBatch[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getWorkBatchByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/workBatch/search";
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
                $headerParams, '\Infoplus\Model\WorkBatch[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\WorkBatch[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\WorkBatch[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getWorkBatchById
     *
     * Get a workBatch by id
     *
     * @param int $work_batch_id Id of the workBatch to be returned. (required)
     * @return \Infoplus\Model\WorkBatch
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getWorkBatchById($work_batch_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getWorkBatchByIdWithHttpInfo ($work_batch_id);
        return $response; 
    }


    /**
     * getWorkBatchByIdWithHttpInfo
     *
     * Get a workBatch by id
     *
     * @param int $work_batch_id Id of the workBatch to be returned. (required)
     * @return Array of \Infoplus\Model\WorkBatch, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getWorkBatchByIdWithHttpInfo($work_batch_id)
    {
        
        // verify the required parameter 'work_batch_id' is set
        if ($work_batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_id when calling getWorkBatchById');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/{workBatchId}";
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
        
        if ($work_batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_id),
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
                $headerParams, '\Infoplus\Model\WorkBatch'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\WorkBatch', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\WorkBatch', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getWorkBatchTags
     *
     * Get the tags for a workBatch.
     *
     * @param int $work_batch_id Id of the workBatch to get tags for (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getWorkBatchTags($work_batch_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getWorkBatchTagsWithHttpInfo ($work_batch_id);
        return $response; 
    }


    /**
     * getWorkBatchTagsWithHttpInfo
     *
     * Get the tags for a workBatch.
     *
     * @param int $work_batch_id Id of the workBatch to get tags for (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getWorkBatchTagsWithHttpInfo($work_batch_id)
    {
        
        // verify the required parameter 'work_batch_id' is set
        if ($work_batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_batch_id when calling getWorkBatchTags');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/{workBatchId}/tag";
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
        
        if ($work_batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "workBatchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_batch_id),
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
     * updateWorkBatchCustomFields
     *
     * Update a workBatch custom fields
     *
     * @param \Infoplus\Model\WorkBatch $body WorkBatch to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateWorkBatchCustomFields($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateWorkBatchCustomFieldsWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateWorkBatchCustomFieldsWithHttpInfo
     *
     * Update a workBatch custom fields
     *
     * @param \Infoplus\Model\WorkBatch $body WorkBatch to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateWorkBatchCustomFieldsWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateWorkBatchCustomFields');
        }
  
        // parse inputs
        $resourcePath = "/beta/workBatch/customFields";
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
