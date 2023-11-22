# # ShipmentPackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Merchandise description of package.  Required for shipment with return service. | [optional]
**pallet_description** | **string** | Description of articles &amp; special marks. Applicable for Air Freight only | [optional]
**num_of_pieces** | **string** | Number of Pieces. Applicable for Air Freight only | [optional]
**unit_price** | **string** | Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including \&quot;.\&quot; and can hold up to 2 decimal place. (e.g. 999999999.99) | [optional]
**packaging** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackagePackaging**](PackagePackaging.md) |  |
**dimensions** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageDimensions**](PackageDimensions.md) |  | [optional]
**dim_weight** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageDimWeight**](PackageDimWeight.md) |  | [optional]
**package_weight** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackagePackageWeight**](PackagePackageWeight.md) |  | [optional]
**large_package_indicator** | **string** | Presence of the indicator mentions that the package is Large Package.  This is an empty tag, any value inside is ignored. | [optional]
**reference_number** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageReferenceNumber[]**](PackageReferenceNumber.md) |  | [optional]
**additional_handling_indicator** | **string** | Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it&#39;s a non-corrugated package. | [optional]
**simple_rate** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageSimpleRate**](PackageSimpleRate.md) |  | [optional]
**ups_premier** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageUPSPremier**](PackageUPSPremier.md) |  | [optional]
**package_service_options** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackagePackageServiceOptions**](PackagePackageServiceOptions.md) |  | [optional]
**commodity** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageCommodity**](PackageCommodity.md) |  | [optional]
**haz_mat_package_information** | [**\AntibodiesOnline\UpsApi\Shipping\Model\PackageHazMatPackageInformation**](PackageHazMatPackageInformation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
