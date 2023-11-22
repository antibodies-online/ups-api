# # ShipmentResultsShipmentCharges

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rate_chart** | **string** | Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:  US 48 origin:  1 - Daily Rates  3 - Standard List Rates  4 - Retail Rates.  Alaska/Hawaii origin:  1 - Daily Rates  3 - Standard List Rates  4 - Retail Rates.   All Other origins:  1 - Rates  5 - Regional Rates  6 - General List Rates.  3 and 4 do not apply. | [optional]
**base_service_charge** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentChargesBaseServiceCharge**](ShipmentChargesBaseServiceCharge.md) |  | [optional]
**transportation_charges** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentChargesTransportationCharges**](ShipmentChargesTransportationCharges.md) |  |
**itemized_charges** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentResultsShipmentChargesItemizedCharges**](ShipmentResultsShipmentChargesItemizedCharges.md) |  | [optional]
**service_options_charges** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentChargesServiceOptionsCharges**](ShipmentChargesServiceOptionsCharges.md) |  |
**tax_charges** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentResultsShipmentChargesTaxCharges**](ShipmentResultsShipmentChargesTaxCharges.md) |  | [optional]
**total_charges** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentChargesTotalCharges**](ShipmentChargesTotalCharges.md) |  |
**total_charges_with_taxes** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipmentChargesTotalChargesWithTaxes**](ShipmentChargesTotalChargesWithTaxes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
