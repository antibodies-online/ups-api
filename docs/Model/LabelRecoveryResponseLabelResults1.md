# # LabelRecoveryResponseLabelResults1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Package Tracking number.  Package 1Z number. Returned only if TrackingNumber or Combination of Reference Number and Shipper Number present in request. | [optional]
**label_image** | [**\AntibodiesOnline\UpsApi\Shipping\Model\LabelResultsLabelImage**](LabelResultsLabelImage.md) |  | [optional]
**mail_innovations_tracking_number** | **string** | Mail Innovations Tracking Number.  Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request. | [optional]
**mail_innovations_label_image** | [**\AntibodiesOnline\UpsApi\Shipping\Model\LabelResultsMailInnovationsLabelImage**](LabelResultsMailInnovationsLabelImage.md) |  | [optional]
**receipt** | [**\AntibodiesOnline\UpsApi\Shipping\Model\LabelResultsReceipt**](LabelResultsReceipt.md) |  | [optional]
**form** | [**\AntibodiesOnline\UpsApi\Shipping\Model\LabelResultsForm**](LabelResultsForm.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
