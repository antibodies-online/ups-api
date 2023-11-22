# # ShipmentFRSPaymentInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Container to hold the Ground Freight Pricing payment type information.  It is required if the request has Ground Freight Pricing shipment indicator. |
**account_number** | **string** | The UPS account number.  If the Ground Freight Pricing indicator and FreightShipmentInformation/DensityEligibleIndicator is present in the request, this account number must be validated to check if it is Ground Freight Pricing Density Based Rating enabled. |
**address** | [**\AntibodiesOnline\UpsApi\Shipping\Model\FRSPaymentInformationAddress**](FRSPaymentInformationAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
