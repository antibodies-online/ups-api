# # ShipmentRequestShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Description of Goods for the shipment. Applies to international and domestic shipments.   Provide a detailed description of items being shipped for documents and non-documents.   Examples: \&quot;annual reports\&quot; and \&quot;9 mm steel screws\&quot;.  Required if all of the listed conditions are true:  ShipFrom and ShipTo countries or territories are not the same; The packaging type is not UPS Letter; The ShipFrom and or ShipTo countries or territories are not in the European Union or the ShipFrom and ShipTo countries or territories are both in the European Union and the shipments service type is not UPS Standard. | [optional]
**return_service** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentReturnService**](ShipmentReturnService.md) |  | [optional]
**documents_only_indicator** | **string** | Indicates a shipment contains written, typed, or printed communication of no commercial value.   If DocumentsOnly is not specified then it implies that the shipment contains non documents or documents of commercial value.   Default is a shipment contains non- documents or documents of commercial value.  This is an empty tag, any value inside is ignored.   Valid only for shipments with different origin and destination countries or territories. The origin country or territory is not US, and the destination country or territory is not CA, PR or MX. | [optional]
**shipper** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentShipper**](ShipmentShipper.md) |  |
**ship_to** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentShipTo**](ShipmentShipTo.md) |  |
**alternate_delivery_address** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentAlternateDeliveryAddress**](ShipmentAlternateDeliveryAddress.md) |  | [optional]
**ship_from** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentShipFrom**](ShipmentShipFrom.md) |  | [optional]
**payment_information** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentPaymentInformation**](ShipmentPaymentInformation.md) |  | [optional]
**frs_payment_information** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentFRSPaymentInformation**](ShipmentFRSPaymentInformation.md) |  | [optional]
**freight_shipment_information** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentFreightShipmentInformation**](ShipmentFreightShipmentInformation.md) |  | [optional]
**goods_not_in_free_circulation_indicator** | **string** | Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly. | [optional]
**promotional_discount_information** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentPromotionalDiscountInformation**](ShipmentPromotionalDiscountInformation.md) |  | [optional]
**dg_signatory_info** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentDGSignatoryInfo**](ShipmentDGSignatoryInfo.md) |  | [optional]
**shipment_rating_options** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentShipmentRatingOptions**](ShipmentShipmentRatingOptions.md) |  | [optional]
**movement_reference_number** | **string** | Movement Reference Number (MRN) information.  Must contain alphanumeric characters only. Must be a length of 18 characters. The 3rd and 4th Characters must be the Shipper country or territory ISO Code. | [optional]
**reference_number** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentReferenceNumber[]**](ShipmentReferenceNumber.md) |  | [optional]
**service** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentService**](ShipmentService.md) |  |
**invoice_line_total** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentInvoiceLineTotal**](ShipmentInvoiceLineTotal.md) |  | [optional]
**num_of_pieces_in_shipment** | **string** | Total number of pieces in all pallets in a UPS Worldwide Express Freight Shipment.  It is required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment. Valid values are 1 to 99999. | [optional]
**usps_endorsement** | **string** | USPS Endorsement. Valid values:  1 &#x3D; Return Service Requested  2 &#x3D; Forwarding Service Requested  3 &#x3D; Address Service Requested  4 &#x3D; Change Service Requested and  5 &#x3D; No Service Selected.  Note: For International Mail Innovations shipments use No Service Selected. International Mail Innovations shipments are applicable for Priority Mail Innovations and Mail Innovations Economy Mail Innovations services only.  Required for Mail Innovations forward shipments. | [optional]
**mi_label_cn22_indicator** | **string** | Indicates single label with both MI label and CN22 form.  International CN22 form is required. | [optional]
**sub_classification** | **string** | A component encoded on the barcode of the Mail Innovations label.   Valid values:  IR &#x3D; Irregular MA &#x3D; Machineable SubClass is only required if the customer&#39;s contract have them subclass the package not UPS. | [optional]
**cost_center** | **string** | Customer assigned identifier for report and billing summarization displays to the right of the Cost Center title.  Required for Mail Innovations Return shipments. It is shown on the bottom of the shipping label as reference 2.  Cost Center length is alphanumeric with a max length of 30 for Mail Innovations forward shipments.  Cost Center length is numeric with a max length of 4 for Mail Innovations Return shipments. | [optional]
**cost_center_barcode_indicator** | **string** | Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the CostCenter field to be barcoded at the bottom of the label. | [optional]
**package_id** | **string** | Customer-assigned unique piece identifier that returns visibility events.  Required only for Mail Innovations forward shipments. Alpha numeric values only. It is shown on the bottom of the shipping label as reference 1. | [optional]
**package_id_barcode_indicator** | **string** | Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the PackageID field to be barcoded at the bottom of the label. | [optional]
**irregular_indicator** | **string** | Mail classification defined by the USPS.   Valid values:  1 &#x3D; Balloon 2 &#x3D; Oversize 3 &#x3D; Not Applicable | [optional]
**shipment_indication_type** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentShipmentIndicationType[]**](ShipmentShipmentIndicationType.md) |  | [optional]
**mi_dual_return_shipment_key** | **string** | MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment.   The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments.   This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments.  Format:  For Package return shipments, the package tracking number is concatenated with the system time (YYYY-MM-DDHH.MM.SS.NNN), followed by service code.   For MI Return shipments, the Mail Manifest ID (MMI) is concatenated with the system time.  The unique identifier (key) is required to link the package and the Mail Innovations portion of Dual Return shipment.   If unique identifier (key) is empty in the request for UPS Mail Innovations Return Service, the request will be treated as the first phase of the Mail Innovations Dual Returns Request.   If the MIDualReturnShipmentIndicator is present with empty or null MIDualReturnShipmentKey in UPS Package Return Shipment, the request will be treated as the first phase of Dual MI Return Label Shipment.   This field would be ignored if MIDualReturnShipmentIndicator is not present in UPS Package Return Shipment request. | [optional]
**mi_dual_return_shipment_indicator** | **string** | MIDualReturnShipmentIndicator is an indicator to identify a Package Shipment is part of UPS Mail Innovations Dual Label Shipment.   Its presence means Package Shipment is part of UPS Mail Innovations Dual Label shipment.  If the indicator is present in Package Shipment request, shipment would be considered as part of a Dual Mail Innovations Returns.   This indicator is not valid with UPS Mail Innovations Returns Service code. | [optional]
**rating_method_requested_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method information and Rating Method information would be returned in response. | [optional]
**tax_information_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response. | [optional]
**shipment_service_options** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentShipmentServiceOptions**](ShipmentShipmentServiceOptions.md) |  | [optional]
**locale** | **string** | Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions and Receipt instructions (if applicable) in desired language.  Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country or territory code seperated by an underscore (&#39;_&#39;) character.  If Locale element is requested along with LabelLinksIndicator, the URL to retrieve Label and Receipts (if applicable) will be returned in the requested Locale. Please note only LabelURL and ReceiptURL (if applicable) will be returned. LocalLanguageLabelURL and LocalLanguageReceiptURL will not be returned if Locale element is present in request. Queen&#39;s English (en_GB) is the default | [optional]
**shipment_value_threshold_code** | **string** | Shipment Value Threshold Code. 01 &#x3D; Shipment value is below or equals to threshold value 02 &#x3D; Shipment value is above threshold value.     NA &#x3D; Not Applicable | [optional]
**master_carton_id** | **string** | Master Carton ID. If Economy Service (17 or 72) : Economy Shipment will be associated with given Master Carton ID. If Non-Economy Service: Master Carton Shipment will be created for given Master Carton ID. | [optional]
**master_carton_indicator** | **string** | Master Carton Indicator. Presence of the indicator means Master Carton ID will be created and returned to client.  This is an empty tag, any value inside is ignored.                                                                  MasterCartonIndicator is only valid with Econmoy Shipment (Service Code 17 or 72). Will be ignored if master carton id present. | [optional]
**shipment_date** | **string** | User can send up to 7 days in the future with current date as day zero. Format: YYYYMMDD | [optional]
**package** | [**\AntibodiesOnline\UpsApi\Shipping\ShipmentPackage[]**](ShipmentPackage.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)