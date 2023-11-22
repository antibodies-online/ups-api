# # ShipmentDeliveryTimeInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_bill_type** | **string** | Valid values are:02 - Document only 03 - Non-Document04 - WWEF Pallet07 - Domestic PalletIf 04 is included, Worldwide Express Freight and UPS Worldwide Express Freight Midday services (if applicable) will be included in the response. |
**pickup** | [**\AntibodiesOnline\UpsApi\Rating\DeliveryTimeInformationPickup**](DeliveryTimeInformationPickup.md) |  | [optional]
**return_contract_services** | [**\AntibodiesOnline\UpsApi\Rating\DeliveryTimeInformationReturnContractServices[]**](DeliveryTimeInformationReturnContractServices.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
