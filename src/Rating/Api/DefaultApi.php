<?php
/**
 * DefaultApi
 * PHP version 7.4
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi\Rating
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rate
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AntibodiesOnline\UpsApi\Rating\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AntibodiesOnline\UpsApi\Rating\ApiException;
use AntibodiesOnline\UpsApi\Rating\Configuration;
use AntibodiesOnline\UpsApi\Rating\HeaderSelector;
use AntibodiesOnline\UpsApi\Rating\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi\Rating
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DefaultApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'rate' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation rate
     *
     * Rating
     *
     * @param  string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5 (required)
     * @param  string $requestoption Valid Values: Rate &#x3D; The server rates (The default Request option is Rate if a Request Option is not provided). Shop &#x3D; The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10 (required)
     * @param  \AntibodiesOnline\UpsApi\Rating\Model\RATERequestWrapper $rate_request_wrapper Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (optional)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (optional, default to 'testing')
     * @param  string $additionalinfo Valid Values: timeintransit &#x3D; The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rate'] to see the possible values for this operation
     *
     * @throws \AntibodiesOnline\UpsApi\Rating\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper
     */
    public function rate($version, $requestoption, $rate_request_wrapper, $trans_id = null, $transaction_src = 'testing', $additionalinfo = null, string $contentType = self::contentTypes['rate'][0])
    {
        list($response) = $this->rateWithHttpInfo($version, $requestoption, $rate_request_wrapper, $trans_id, $transaction_src, $additionalinfo, $contentType);
        return $response;
    }

    /**
     * Operation rateWithHttpInfo
     *
     * Rating
     *
     * @param  string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5 (required)
     * @param  string $requestoption Valid Values: Rate &#x3D; The server rates (The default Request option is Rate if a Request Option is not provided). Shop &#x3D; The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10 (required)
     * @param  \AntibodiesOnline\UpsApi\Rating\Model\RATERequestWrapper $rate_request_wrapper Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (optional)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (optional, default to 'testing')
     * @param  string $additionalinfo Valid Values: timeintransit &#x3D; The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rate'] to see the possible values for this operation
     *
     * @throws \AntibodiesOnline\UpsApi\Rating\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper, HTTP status code, HTTP response headers (array of strings)
     */
    public function rateWithHttpInfo($version, $requestoption, $rate_request_wrapper, $trans_id = null, $transaction_src = 'testing', $additionalinfo = null, string $contentType = self::contentTypes['rate'][0])
    {
        $request = $this->rateRequest($version, $requestoption, $rate_request_wrapper, $trans_id, $transaction_src, $additionalinfo, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                 );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rateAsync
     *
     * Rating
     *
     * @param  string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5 (required)
     * @param  string $requestoption Valid Values: Rate &#x3D; The server rates (The default Request option is Rate if a Request Option is not provided). Shop &#x3D; The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10 (required)
     * @param  \AntibodiesOnline\UpsApi\Rating\Model\RATERequestWrapper $rate_request_wrapper Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (optional)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (optional, default to 'testing')
     * @param  string $additionalinfo Valid Values: timeintransit &#x3D; The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rateAsync($version, $requestoption, $rate_request_wrapper, $trans_id = null, $transaction_src = 'testing', $additionalinfo = null, string $contentType = self::contentTypes['rate'][0])
    {
        return $this->rateAsyncWithHttpInfo($version, $requestoption, $rate_request_wrapper, $trans_id, $transaction_src, $additionalinfo, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rateAsyncWithHttpInfo
     *
     * Rating
     *
     * @param  string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5 (required)
     * @param  string $requestoption Valid Values: Rate &#x3D; The server rates (The default Request option is Rate if a Request Option is not provided). Shop &#x3D; The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10 (required)
     * @param  \AntibodiesOnline\UpsApi\Rating\Model\RATERequestWrapper $rate_request_wrapper Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (optional)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (optional, default to 'testing')
     * @param  string $additionalinfo Valid Values: timeintransit &#x3D; The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rateAsyncWithHttpInfo($version, $requestoption, $rate_request_wrapper, $trans_id = null, $transaction_src = 'testing', $additionalinfo = null, string $contentType = self::contentTypes['rate'][0])
    {
        $returnType = '\AntibodiesOnline\UpsApi\Rating\Model\RATEResponseWrapper';
        $request = $this->rateRequest($version, $requestoption, $rate_request_wrapper, $trans_id, $transaction_src, $additionalinfo, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rate'
     *
     * @param  string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5 (required)
     * @param  string $requestoption Valid Values: Rate &#x3D; The server rates (The default Request option is Rate if a Request Option is not provided). Shop &#x3D; The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10 (required)
     * @param  \AntibodiesOnline\UpsApi\Rating\Model\RATERequestWrapper $rate_request_wrapper Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (optional)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (optional, default to 'testing')
     * @param  string $additionalinfo Valid Values: timeintransit &#x3D; The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rateRequest($version, $requestoption, $rate_request_wrapper, $trans_id = null, $transaction_src = 'testing', $additionalinfo = null, string $contentType = self::contentTypes['rate'][0])
    {

        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling rate'
            );
        }
        
        // verify the required parameter 'requestoption' is set
        if ($requestoption === null || (is_array($requestoption) && count($requestoption) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $requestoption when calling rate'
            );
        }
        
        // verify the required parameter 'rate_request_wrapper' is set
        if ($rate_request_wrapper === null || (is_array($rate_request_wrapper) && count($rate_request_wrapper) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rate_request_wrapper when calling rate'
            );
        }



        

        $resourcePath = '/rating/{version}/{requestoption}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $additionalinfo,
            'additionalinfo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($trans_id !== null) {
            $headerParams['transId'] = ObjectSerializer::toHeaderValue($trans_id);
        }
        // header params
        if ($transaction_src !== null) {
            $headerParams['transactionSrc'] = ObjectSerializer::toHeaderValue($transaction_src);
        }

        // path params
        if ($version !== null) {
            $resourcePath = str_replace(
                '{' . 'version' . '}',
                ObjectSerializer::toPathValue($version),
                $resourcePath
            );
        }
        // path params
        if ($requestoption !== null) {
            $resourcePath = str_replace(
                '{' . 'requestoption' . '}',
                ObjectSerializer::toPathValue($requestoption),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($rate_request_wrapper)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($rate_request_wrapper));
            } else {
                $httpBody = $rate_request_wrapper;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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