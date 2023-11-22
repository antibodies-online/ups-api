# # PackagePackageServiceOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_confirmation** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsDeliveryConfirmation**](PackageServiceOptionsDeliveryConfirmation.md) |  | [optional]
**declared_value** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsDeclaredValue**](PackageServiceOptionsDeclaredValue.md) |  | [optional]
**cod** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsCOD**](PackageServiceOptionsCOD.md) |  | [optional]
**access_point_cod** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsAccessPointCOD**](PackageServiceOptionsAccessPointCOD.md) |  | [optional]
**shipper_release_indicator** | **string** | The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service. | [optional]
**notification** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsNotification**](PackageServiceOptionsNotification.md) |  | [optional]
**haz_mat** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsHazMat[]**](PackageServiceOptionsHazMat.md) |  | [optional]
**dry_ice** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageServiceOptionsDryIce**](PackageServiceOptionsDryIce.md) |  | [optional]
**ups_premium_care_indicator** | **string** | An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present.   The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required.   UPSPremiumCareIndicator is valid for following Return services:  Returns Exchange (available with a contract) Print Return Label Print and Mail Electronic Return Label  Return Service Three Attempt  The UPSPremiumCareIndicator can be requested with following UPS services:  UPS Express Early UPS Express UPS Express Saver  UPS Standard Valid only for Canada to Canada movements. | [optional]
**proactive_indicator** | **string** | Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse. | [optional]
**package_identifier** | **string** | Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701. | [optional]
**clinical_trials_id** | **string** | Unique identifier for clinical trials | [optional]
**refrigeration_indicator** | **string** | Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
