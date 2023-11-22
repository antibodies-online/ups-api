# # ShipmentServiceOptionsNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_code** | **string** | The type of notification requested.  Valid values:  5 - QV In-transit Notification 6 - QV Ship Notification 7 - QV Exception Notification 8 - QV Delivery Notification 2 - Return Notification or Label Creation Notification 012 - Alternate Delivery Location Notification 013 - UAP Shipper Notification |
**e_mail** | [**\AntibodiesOnline\UpsApi\Shipping\Model\NotificationEMail**](NotificationEMail.md) |  |
**voice_message** | [**\AntibodiesOnline\UpsApi\Shipping\Model\NotificationVoiceMessage**](NotificationVoiceMessage.md) |  | [optional]
**text_message** | [**\AntibodiesOnline\UpsApi\Shipping\Model\NotificationTextMessage**](NotificationTextMessage.md) |  | [optional]
**locale** | [**\AntibodiesOnline\UpsApi\Shipping\Model\NotificationLocale**](NotificationLocale.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
