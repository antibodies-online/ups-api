# # ShipmentResultsPackageResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Package 1Z number.   For Mail Innovations shipments, please use the USPSPICNumber when tracking packages (a non-1Z number Mail Manifest Id is returned).  Applicable only for ShipmentResponse and ShipAcceptResponse. |
**rate_modifier** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsRateModifier**](PackageResultsRateModifier.md) |  | [optional]
**base_service_charge** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsBaseServiceCharge**](PackageResultsBaseServiceCharge.md) |  | [optional]
**service_options_charges** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsServiceOptionsCharges**](PackageResultsServiceOptionsCharges.md) |  | [optional]
**shipping_label** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsShippingLabel**](PackageResultsShippingLabel.md) |  | [optional]
**shipping_receipt** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsShippingReceipt**](PackageResultsShippingReceipt.md) |  | [optional]
**uspspic_number** | **string** | USPSPICNumber is USPS Package Identification; it should be used for tracking Mail Innovations shipments. | [optional]
**cn22_number** | **string** | USPS defined CN22 ID number format varies based on destination country or territory.  Not applicable as of Jan 2015.  Mail Innovations shipments US to VI, PR, and GU are not considered international. | [optional]
**accessorial** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsPackageResultsAccessorial**](ShipmentResultsPackageResultsAccessorial.md) |  | [optional]
**simple_rate** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsSimpleRate**](PackageResultsSimpleRate.md) |  | [optional]
**form** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsForm**](PackageResultsForm.md) |  | [optional]
**itemized_charges** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsPackageResultsItemizedCharges**](ShipmentResultsPackageResultsItemizedCharges.md) |  | [optional]
**negotiated_charges** | [**\AntibodiesOnline\UpsApi\Shipping\PackageResultsNegotiatedCharges**](PackageResultsNegotiatedCharges.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
