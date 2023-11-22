# # ShipmentResponseShipmentResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disclaimer** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResponseShipmentResultsDisclaimer**](ShipmentResponseShipmentResultsDisclaimer.md) |  | [optional]
**shipment_charges** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsShipmentCharges**](ShipmentResultsShipmentCharges.md) |  | [optional]
**negotiated_rate_charges** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsNegotiatedRateCharges**](ShipmentResultsNegotiatedRateCharges.md) |  | [optional]
**frs_shipment_data** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsFRSShipmentData**](ShipmentResultsFRSShipmentData.md) |  | [optional]
**rating_method** | **string** | RatingMethod is to indicate whether the Shipment was rated as shipment level or package level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values: 01 &#x3D; Shipment level 02 &#x3D; Package level | [optional]
**billable_weight_calculation_method** | **string** | BillableWeightCalculationMethod is to indicate whether the billable weight calculation method utilized was - the package level or shipment level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values: 01 &#x3D; Shipment Billable Weight 02 &#x3D; Package Billable Weight | [optional]
**billing_weight** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsBillingWeight**](ShipmentResultsBillingWeight.md) |  |
**shipment_identification_number** | **string** | Returned UPS shipment ID number.1Z Number of the first package in the shipment. | [optional]
**mi_dual_return_shipment_key** | **string** | MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment.   The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments.   This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments and would be played back in response for second phase of Mail Innovations Dual Return Shipment.  If the shipment is a Package return shipment, the package tracking number will be concatenated with the system time (in the format YYYY-MM-DDHH.MM.SS.NNN) and followed by service code.   If the shipment is an MI Returns shipment, the Mail Manifest ID (MMI) will be concatenated with the system time. | [optional]
**bar_code_image** | **string** | Bar Code Image will be returned as Base 64 encoded graphic image. Bar Code Image will be returned if BarCodeImageIndicator or BarCodeAndLabelIndicator is present. | [optional]
**package_results** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResponseShipmentResultsPackageResults**](ShipmentResponseShipmentResultsPackageResults.md) |  | [optional]
**control_log_receipt** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResponseShipmentResultsControlLogReceipt**](ShipmentResponseShipmentResultsControlLogReceipt.md) |  | [optional]
**form** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsForm**](ShipmentResultsForm.md) |  | [optional]
**cod_turn_in_page** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsCODTurnInPage**](ShipmentResultsCODTurnInPage.md) |  | [optional]
**high_value_report** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResultsHighValueReport**](ShipmentResultsHighValueReport.md) |  | [optional]
**label_url** | **string** | URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LabelURL is returned only if the LabelLinksIndicator is requested for following shipments: Print/Electronic ImportControl shipment Print/Electronic Return shipment.  Forward shipment except for Mail Innovations Forward. | [optional]
**local_language_label_url** | **string** | URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageLabelURL is returned only if the LabelLinksIndicator is requested for following shipments: Print/Electronic ImportControl shipment Print/Electronic Return shipment.  Forward shipment except for Mail Innovations Forward.  Not returned if LabelLinksIndicator is requested with Locale element. | [optional]
**receipt_url** | **string** | URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. ReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments: Print/Electronic ImportControl shipment Print/Electronic Return shipment. | [optional]
**local_language_receipt_url** | **string** | URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments: Print/Electronic ImportControl shipment Print/Electronic Return shipment.   Not returned if LabelLinksIndicator is requested with Locale element. | [optional]
**dg_paper_image** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentResponseShipmentResultsDGPaperImage**](ShipmentResponseShipmentResultsDGPaperImage.md) |  | [optional]
**master_carton_id** | **string** | Master Carton ID. MasterCartonID will be return if MasterCartonIndicator is present in request. | [optional]
**roar_rated_indicator** | **string** | Informational only | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
