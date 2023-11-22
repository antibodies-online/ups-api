# # AlternateDeliveryAddressAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line** | **string[]** | Address Line of the Retail Location. |
**city** | **string** | Retail Location City. |
**state_province_code** | **string** | Retail Location state or province code. Required for US or Canada. | [optional]
**postal_code** | **string** | If the Alternate Delivery Address country or territory is US or Puerto Rico, 5 or 9 digits are required. The character - may be used to separate the first five digits and the last four digits. If the Alternate Delivery Address country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit. Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long. | [optional]
**country_code** | **string** | Retail Location country or territory code. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
