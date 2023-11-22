# AntibodiesOnline\UpsApi\DefaultApi

All URIs are relative to https://wwwcie.ups.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rate()**](DefaultApi.md#rate) | **POST** /rating/{version}/{requestoption} | Rating |


## `rate()`

```php
rate($version, $requestoption, $rate_request_wrapper, $trans_id, $transaction_src, $additionalinfo): \AntibodiesOnline\UpsApi\Rating\RATEResponseWrapper
```

Rating

The Rating API is used when rating or shopping a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = AntibodiesOnline\UpsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AntibodiesOnline\UpsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'v1'; // string | Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5
$requestoption = 'requestoption_example'; // string | Valid Values: Rate = The server rates (The default Request option is Rate if a Request Option is not provided). Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10
$rate_request_wrapper = {"RateRequest":{"Request":{"TransactionReference":{"CustomerContext":"CustomerContext"}},"Shipment":{"Shipper":{"Name":"ShipperName","ShipperNumber":"ShipperNumber","Address":{"AddressLine":["ShipperAddressLine","ShipperAddressLine","ShipperAddressLine"],"City":"TIMONIUM","StateProvinceCode":"MD","PostalCode":"21093","CountryCode":"US"}},"ShipTo":{"Name":"ShipToName","Address":{"AddressLine":["ShipToAddressLine","ShipToAddressLine","ShipToAddressLine"],"City":"Alpharetta","StateProvinceCode":"GA","PostalCode":"30005","CountryCode":"US"}},"ShipFrom":{"Name":"ShipFromName","Address":{"AddressLine":["ShipFromAddressLine","ShipFromAddressLine","ShipFromAddressLine"],"City":"TIMONIUM","StateProvinceCode":"MD","PostalCode":"21093","CountryCode":"US"}},"PaymentDetails":{"ShipmentCharge":{"Type":"01","BillShipper":{"AccountNumber":"ShipperNumber"}}},"Service":{"Code":"03","Description":"Ground"},"NumOfPieces":"1","Package":{"SimpleRate":{"Description":"SimpleRateDescription","Code":"XS"},"PackagingType":{"Code":"02","Description":"Packaging"},"Dimensions":{"UnitOfMeasurement":{"Code":"IN","Description":"Inches"},"Length":"5","Width":"5","Height":"5"},"PackageWeight":{"UnitOfMeasurement":{"Code":"LBS","Description":"Pounds"},"Weight":"1"}}}}}; // \AntibodiesOnline\UpsApi\Rating\RATERequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \"Authorize\" and enter your application credentials, then populate the required parameters above and click \"Try it out\".
$trans_id = 'trans_id_example'; // string | An identifier unique to the request. Length 32
$transaction_src = 'testing'; // string | An identifier of the client/source application that is making the request.Length 512
$additionalinfo = 'additionalinfo_example'; // string | Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15

try {
    $result = $apiInstance->rate($version, $requestoption, $rate_request_wrapper, $trans_id, $transaction_src, $additionalinfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->rate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5 | [default to &#39;v1&#39;] |
| **requestoption** | **string**| Valid Values: Rate &#x3D; The server rates (The default Request option is Rate if a Request Option is not provided). Shop &#x3D; The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10 | |
| **rate_request_wrapper** | [**\AntibodiesOnline\UpsApi\Rating\RATERequestWrapper**](../Model/RATERequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. | |
| **trans_id** | **string**| An identifier unique to the request. Length 32 | [optional] |
| **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [optional] [default to &#39;testing&#39;] |
| **additionalinfo** | **string**| Valid Values: timeintransit &#x3D; The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15 | [optional] |

### Return type

[**\AntibodiesOnline\UpsApi\Rating\RATEResponseWrapper**](../Model/RATEResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
