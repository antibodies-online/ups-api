# # ServiceSummaryEstimatedArrival

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arrival** | [**\AntibodiesOnline\UpsApi\Rating\Model\EstimatedArrivalArrival**](EstimatedArrivalArrival.md) |  |
**business_days_in_transit** | **string** | Number of business days from Origin to Destination Locations. |
**pickup** | [**\AntibodiesOnline\UpsApi\Rating\Model\EstimatedArrivalPickup**](EstimatedArrivalPickup.md) |  |
**day_of_week** | **string** | Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT |
**customer_center_cutoff** | **string** | Customer Service call time. Returned for domestic as well as international requests. | [optional]
**delay_count** | **string** | Number of days delayed at customs. Returned for International requests. | [optional]
**holiday_count** | **string** | Number of National holidays during transit. Returned for International requests. | [optional]
**rest_days** | **string** | Number of rest days, i.e. non movement. Returned for International requests. | [optional]
**total_transit_days** | **string** | The total number of days in transit from one location to the next. Returned for International requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
