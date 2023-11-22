# # ShipmentShipFrom

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The ship from location&#39;s name or company name.  35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML. |
**attention_name** | **string** | The ship from Attention name.  35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name. | [optional]
**company_displayable_name** | **string** | Not applicable for ShipFrom. | [optional]
**tax_identification_number** | **string** | Company&#39;s Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested.  Applies to EEI Form only. | [optional]
**tax_id_type** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipFromTaxIDType**](ShipFromTaxIDType.md) |  | [optional]
**phone** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipFromPhone**](ShipFromPhone.md) |  | [optional]
**fax_number** | **string** | The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed. | [optional]
**address** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipFromAddress**](ShipFromAddress.md) |  |
**vendor_info** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipFromVendorInfo**](ShipFromVendorInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
