# # LabelRecoveryRequestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sub_version** | **string** | When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.  To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.  Format: YYMM &#x3D; Year and month of the release. Example: 1701 &#x3D; 2017 January  Supported values: 1701, 1707, 1903 | [optional]
**request_option** | **string** | Request option is no longer used. | [optional]
**transaction_reference** | [**\AntibodiesOnline\UpsApi\Shipping\Model\LRRequestTransactionReference**](LRRequestTransactionReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
