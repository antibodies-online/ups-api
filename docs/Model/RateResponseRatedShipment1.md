# # RateResponseRatedShipment1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disclaimer** | [**\AntibodiesOnline\UpsApi\Rating\Model\RateResponseRatedShipmentDisclaimer**](RateResponseRatedShipmentDisclaimer.md) |  | [optional]
**service** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentService**](RatedShipmentService.md) |  |
**rate_chart** | **string** | Rate Type with which Shipment is rated. Possible RateChart values for different regions will be: US 48 origin: 1 \&quot; Daily Rates 3 \&quot; Standard List Rates 4 \&quot; Retail Rates. Alaska/Hawaii origin:1 \&quot; Daily Rates 3 \&quot; Standard List Rates 4 \&quot; Retail Rates.  All Other origins:1 \&quot; Rates 5 - Regional Rates 6 - General List Rates. 3 and 4 do not apply | [optional]
**rated_shipment_alert** | [**\AntibodiesOnline\UpsApi\Rating\Model\RateResponseRatedShipmentRatedShipmentAlert**](RateResponseRatedShipmentRatedShipmentAlert.md) |  | [optional]
**billable_weight_calculation_method** | **string** | Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 &#x3D; Shipment Billable Weight02 &#x3D; Package Billable Weight | [optional]
**rating_method** | **string** | Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 &#x3D; Shipment level02 &#x3D; Package level | [optional]
**billing_weight** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentBillingWeight**](RatedShipmentBillingWeight.md) |  |
**transportation_charges** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentTransportationCharges**](RatedShipmentTransportationCharges.md) |  |
**base_service_charge** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentBaseServiceCharge**](RatedShipmentBaseServiceCharge.md) |  | [optional]
**itemized_charges** | [**\AntibodiesOnline\UpsApi\Rating\Model\RateResponseRatedShipmentItemizedCharges**](RateResponseRatedShipmentItemizedCharges.md) |  | [optional]
**frs_shipment_data** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentFRSShipmentData**](RatedShipmentFRSShipmentData.md) |  | [optional]
**service_options_charges** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentServiceOptionsCharges**](RatedShipmentServiceOptionsCharges.md) |  |
**tax_charges** | [**\AntibodiesOnline\UpsApi\Rating\Model\RateResponseRatedShipmentTaxCharges**](RateResponseRatedShipmentTaxCharges.md) |  | [optional]
**total_charges** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentTotalCharges**](RatedShipmentTotalCharges.md) |  |
**total_charges_with_taxes** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentTotalChargesWithTaxes**](RatedShipmentTotalChargesWithTaxes.md) |  | [optional]
**negotiated_rate_charges** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentNegotiatedRateCharges**](RatedShipmentNegotiatedRateCharges.md) |  | [optional]
**rated_package** | [**\AntibodiesOnline\UpsApi\Rating\Model\RateResponseRatedShipmentRatedPackage**](RateResponseRatedShipmentRatedPackage.md) |  |
**time_in_transit** | [**\AntibodiesOnline\UpsApi\Rating\Model\RatedShipmentTimeInTransit**](RatedShipmentTimeInTransit.md) |  | [optional]
**scheduled_delivery_date** | **string** | The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract. | [optional]
**roar_rated_indicator** | **string** | Informational only | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
