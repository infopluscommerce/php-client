<?php
/**
 * LineOfBusinessApi
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infoplus API
 *
 * Infoplus API.
 *
 * OpenAPI spec version: beta
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Infoplus\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Infoplus\ApiException;
use Infoplus\Configuration;
use Infoplus\HeaderSelector;
use Infoplus\ObjectSerializer;

/**
 * LineOfBusinessApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineOfBusinessApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getLineOfBusinessById
     *
     * Get a lineOfBusiness by id
     *
     * @param  string $line_of_business_id Id of lineOfBusiness to be returned. (required)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Infoplus\Infoplus\Model\LineOfBusiness
     */
    public function getLineOfBusinessById($line_of_business_id)
    {
        list($response) = $this->getLineOfBusinessByIdWithHttpInfo($line_of_business_id);
        return $response;
    }

    /**
     * Operation getLineOfBusinessByIdWithHttpInfo
     *
     * Get a lineOfBusiness by id
     *
     * @param  string $line_of_business_id Id of lineOfBusiness to be returned. (required)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Infoplus\Infoplus\Model\LineOfBusiness, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLineOfBusinessByIdWithHttpInfo($line_of_business_id)
    {
        $returnType = '\Infoplus\Infoplus\Model\LineOfBusiness';
        $request = $this->getLineOfBusinessByIdRequest($line_of_business_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Infoplus\Infoplus\Model\LineOfBusiness',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLineOfBusinessByIdAsync
     *
     * Get a lineOfBusiness by id
     *
     * @param  string $line_of_business_id Id of lineOfBusiness to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLineOfBusinessByIdAsync($line_of_business_id)
    {
        return $this->getLineOfBusinessByIdAsyncWithHttpInfo($line_of_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLineOfBusinessByIdAsyncWithHttpInfo
     *
     * Get a lineOfBusiness by id
     *
     * @param  string $line_of_business_id Id of lineOfBusiness to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLineOfBusinessByIdAsyncWithHttpInfo($line_of_business_id)
    {
        $returnType = '\Infoplus\Infoplus\Model\LineOfBusiness';
        $request = $this->getLineOfBusinessByIdRequest($line_of_business_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLineOfBusinessById'
     *
     * @param  string $line_of_business_id Id of lineOfBusiness to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLineOfBusinessByIdRequest($line_of_business_id)
    {
        // verify the required parameter 'line_of_business_id' is set
        if ($line_of_business_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $line_of_business_id when calling getLineOfBusinessById'
            );
        }

        $resourcePath = '/beta/lineOfBusiness/{lineOfBusinessId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($line_of_business_id !== null) {
            $resourcePath = str_replace(
                '{' . 'lineOfBusinessId' . '}',
                ObjectSerializer::toPathValue($line_of_business_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('API-Key');
        if ($apiKey !== null) {
            $headers['API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getLineOfBusinessBySearchText
     *
     * Search lineOfBusinesses
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Infoplus\Infoplus\Model\LineOfBusiness[]
     */
    public function getLineOfBusinessBySearchText($search_text = null, $page = null, $limit = null)
    {
        list($response) = $this->getLineOfBusinessBySearchTextWithHttpInfo($search_text, $page, $limit);
        return $response;
    }

    /**
     * Operation getLineOfBusinessBySearchTextWithHttpInfo
     *
     * Search lineOfBusinesses
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Infoplus\Infoplus\Model\LineOfBusiness[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLineOfBusinessBySearchTextWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        $returnType = '\Infoplus\Infoplus\Model\LineOfBusiness[]';
        $request = $this->getLineOfBusinessBySearchTextRequest($search_text, $page, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Infoplus\Infoplus\Model\LineOfBusiness[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLineOfBusinessBySearchTextAsync
     *
     * Search lineOfBusinesses
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLineOfBusinessBySearchTextAsync($search_text = null, $page = null, $limit = null)
    {
        return $this->getLineOfBusinessBySearchTextAsyncWithHttpInfo($search_text, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLineOfBusinessBySearchTextAsyncWithHttpInfo
     *
     * Search lineOfBusinesses
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLineOfBusinessBySearchTextAsyncWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        $returnType = '\Infoplus\Infoplus\Model\LineOfBusiness[]';
        $request = $this->getLineOfBusinessBySearchTextRequest($search_text, $page, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLineOfBusinessBySearchText'
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLineOfBusinessBySearchTextRequest($search_text = null, $page = null, $limit = null)
    {

        $resourcePath = '/beta/lineOfBusiness/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search_text !== null) {
            $queryParams['searchText'] = ObjectSerializer::toQueryValue($search_text);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('API-Key');
        if ($apiKey !== null) {
            $headers['API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
