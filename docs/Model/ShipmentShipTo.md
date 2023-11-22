# # ShipmentShipTo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Consignee&#39;s company name.  All other accounts must be either a daily pickup account or an occasional account. |
**attention_name** | **string** | Contact name at the consignee&#39;s location.  Required for: UPS Next Day Air Early service, and when ShipTo country or territory is different than ShipFrom country or territory.   Required if Invoice International form is requested. | [optional]
**company_displayable_name** | **string** | Not applicable for ShipTo | [optional]
**tax_identification_number** | **string** | Consignee&#39;s tax identification number. | [optional]
**phone** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipToPhone**](ShipToPhone.md) |  | [optional]
**fax_number** | **string** | Consignee&#39;s fax number.  If ShipTo country or territory is US 10 digits allowed, otherwise 1-15 digits allowed. | [optional]
**e_mail_address** | **string** | Consignee&#39;s email address. | [optional]
**address** | [**\AntibodiesOnline\UpsApi\Shipping\Model\ShipToAddress**](ShipToAddress.md) |  |
**location_id** | **string** | Location ID is a unique identifier referring to a specific shipping/receiving location.  Location ID must be alphanumeric characters. All letters must be capitalized. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
