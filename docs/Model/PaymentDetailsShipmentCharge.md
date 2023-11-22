# # PaymentDetailsShipmentCharge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Values are 01 &#x3D; Transportation, 02 &#x3D; Duties and Taxes |
**bill_shipper** | [**\AntibodiesOnline\UpsApi\Rating\Model\ShipmentChargeBillShipper**](ShipmentChargeBillShipper.md) |  | [optional]
**bill_receiver** | [**\AntibodiesOnline\UpsApi\Rating\Model\ShipmentChargeBillReceiver**](ShipmentChargeBillReceiver.md) |  | [optional]
**bill_third_party** | [**\AntibodiesOnline\UpsApi\Rating\Model\ShipmentChargeBillThirdParty**](ShipmentChargeBillThirdParty.md) |  | [optional]
**consignee_billed_indicator** | **string** | Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  Empty Tag. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
