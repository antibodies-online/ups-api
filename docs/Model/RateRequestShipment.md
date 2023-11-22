# # RateRequestShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origin_record_transaction_timestamp** | **string** | The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701. | [optional]
**shipper** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipper**](ShipmentShipper.md) |  |
**ship_to** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipTo**](ShipmentShipTo.md) |  |
**ship_from** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipFrom**](ShipmentShipFrom.md) |  | [optional]
**alternate_delivery_address** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentAlternateDeliveryAddress**](ShipmentAlternateDeliveryAddress.md) |  | [optional]
**shipment_indication_type** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipmentIndicationType[]**](ShipmentShipmentIndicationType.md) |  | [optional]
**payment_details** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentPaymentDetails**](ShipmentPaymentDetails.md) |  | [optional]
**frs_payment_information** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentFRSPaymentInformation**](ShipmentFRSPaymentInformation.md) |  | [optional]
**freight_shipment_information** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentFreightShipmentInformation**](ShipmentFreightShipmentInformation.md) |  | [optional]
**goods_not_in_free_circulation_indicator** | **string** | Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly. | [optional]
**service** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentService**](ShipmentService.md) |  | [optional]
**num_of_pieces** | **string** | Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments. | [optional]
**shipment_total_weight** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipmentTotalWeight**](ShipmentShipmentTotalWeight.md) |  | [optional]
**documents_only_indicator** | **string** | Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag. | [optional]
**package** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentPackage[]**](ShipmentPackage.md) |  |
**shipment_service_options** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipmentServiceOptions**](ShipmentShipmentServiceOptions.md) |  | [optional]
**shipment_rating_options** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentShipmentRatingOptions**](ShipmentShipmentRatingOptions.md) |  | [optional]
**invoice_line_total** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentInvoiceLineTotal**](ShipmentInvoiceLineTotal.md) |  | [optional]
**rating_method_requested_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response. | [optional]
**tax_information_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates. | [optional]
**promotional_discount_information** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentPromotionalDiscountInformation**](ShipmentPromotionalDiscountInformation.md) |  | [optional]
**delivery_time_information** | [**\AntibodiesOnline\UpsApi\Rating\ShipmentDeliveryTimeInformation**](ShipmentDeliveryTimeInformation.md) |  | [optional]
**master_carton_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates. | [optional]
**wwe_shipment_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption&#x3D;Shop or  RequestOption&#x3D;Shoptimeintransit  RequestOption&#x3D;Shop or  RequestOption&#x3D;Shoptimeintransit | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
