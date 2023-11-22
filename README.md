# antibodies-online/ups-api

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/antibodies-online/ups-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = AntibodiesOnline\UpsApi\Shipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AntibodiesOnline\UpsApi\Shipping\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'v1'; // string | When UPS introduces new elements in the  response that are not associated with new  request elements, Subversion is used. This  ensures backward compatibility.  v1  original features of the application. No  support for CODTurn-inPage, HighValueReport  or InternationalForms features returned in the  response v1701  includes support for CODTurn-inPage  features returned in the response. V1903  Length 5
$labelrecovery_request_wrapper = {"LabelRecoveryRequest":{"LabelDelivery":{"LabelLinkIndicator":"","ResendEmailIndicator":""},"LabelSpecification":{"HTTPUserAgent":"Mozilla/4.5","LabelImageFormat":{"Code":"ZPL"},"LabelStockSize":{"Height":"6","Width":"4"}},"Request":{"RequestOption":"Non_Validate","SubVersion":"1903","TransactionReference":{"CustomerContext":""}},"TrackingNumber":"1Z12345E8791315509","Translate":{"Code":"01","DialectCode":"US","LanguageCode":"eng"}}}; // \AntibodiesOnline\UpsApi\Shipping\Model\LABELRECOVERYRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \"Authorize\" and enter your application credentials, then populate the required parameters above and click \"Try it out\".
$trans_id = 'trans_id_example'; // string | An identifier unique to the request. Length 32
$transaction_src = 'testing'; // string | An identifier of the client/source application that is making the request.Length 512

try {
    $result = $apiInstance->labelRecovery($version, $labelrecovery_request_wrapper, $trans_id, $transaction_src);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->labelRecovery: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://wwwcie.ups.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**labelRecovery**](docs/Api/DefaultApi.md#labelrecovery) | **POST** /labels/{version}/recovery | Label Recovery
*DefaultApi* | [**shipment**](docs/Api/DefaultApi.md#shipment) | **POST** /shipments/{version}/ship | Shipment
*DefaultApi* | [**voidShipment**](docs/Api/DefaultApi.md#voidshipment) | **DELETE** /shipments/{version}/void/cancel/{shipmentidentificationnumber} | Void Shipment

## Models

- [AdjustedHeightUnitOfMeasurement](docs/Model/AdjustedHeightUnitOfMeasurement.md)
- [AlternateDeliveryAddressAddress](docs/Model/AlternateDeliveryAddressAddress.md)
- [BillReceiverAddress](docs/Model/BillReceiverAddress.md)
- [BillShipperCreditCard](docs/Model/BillShipperCreditCard.md)
- [BillThirdPartyAddress](docs/Model/BillThirdPartyAddress.md)
- [BillingWeightUnitOfMeasurement](docs/Model/BillingWeightUnitOfMeasurement.md)
- [CN22ContentCN22ContentWeight](docs/Model/CN22ContentCN22ContentWeight.md)
- [CN22ContentWeightUnitOfMeasurement](docs/Model/CN22ContentWeightUnitOfMeasurement.md)
- [CN22FormCN22Content](docs/Model/CN22FormCN22Content.md)
- [CODCODAmount](docs/Model/CODCODAmount.md)
- [CODTurnInPageImage](docs/Model/CODTurnInPageImage.md)
- [CommodityNMFC](docs/Model/CommodityNMFC.md)
- [ContactsForwardAgent](docs/Model/ContactsForwardAgent.md)
- [ContactsIntermediateConsignee](docs/Model/ContactsIntermediateConsignee.md)
- [ContactsProducer](docs/Model/ContactsProducer.md)
- [ContactsSoldTo](docs/Model/ContactsSoldTo.md)
- [ContactsUltimateConsignee](docs/Model/ContactsUltimateConsignee.md)
- [ControlLogReceiptImageFormat](docs/Model/ControlLogReceiptImageFormat.md)
- [CreditCardAddress](docs/Model/CreditCardAddress.md)
- [DDTCInformationUnitOfMeasurement](docs/Model/DDTCInformationUnitOfMeasurement.md)
- [DeclaredValueType](docs/Model/DeclaredValueType.md)
- [DimWeightUnitOfMeasurement](docs/Model/DimWeightUnitOfMeasurement.md)
- [DimensionsUnitOfMeasurement](docs/Model/DimensionsUnitOfMeasurement.md)
- [DryIceDryIceWeight](docs/Model/DryIceDryIceWeight.md)
- [DryIceWeightUnitOfMeasurement](docs/Model/DryIceWeightUnitOfMeasurement.md)
- [EEIFilingOptionShipperFiled](docs/Model/EEIFilingOptionShipperFiled.md)
- [EEIFilingOptionUPSFiled](docs/Model/EEIFilingOptionUPSFiled.md)
- [EEIInformationDDTCInformation](docs/Model/EEIInformationDDTCInformation.md)
- [EEIInformationLicense](docs/Model/EEIInformationLicense.md)
- [FRSPaymentInformationAddress](docs/Model/FRSPaymentInformationAddress.md)
- [FRSShipmentDataFreightDensityRate](docs/Model/FRSShipmentDataFreightDensityRate.md)
- [FRSShipmentDataHandlingUnits](docs/Model/FRSShipmentDataHandlingUnits.md)
- [FRSShipmentDataTransportationCharges](docs/Model/FRSShipmentDataTransportationCharges.md)
- [FormImage](docs/Model/FormImage.md)
- [ForwardAgentAddress](docs/Model/ForwardAgentAddress.md)
- [FreightDensityInfoAdjustedHeight](docs/Model/FreightDensityInfoAdjustedHeight.md)
- [FreightDensityInfoHandlingUnits](docs/Model/FreightDensityInfoHandlingUnits.md)
- [FreightShipmentInformationFreightDensityInfo](docs/Model/FreightShipmentInformationFreightDensityInfo.md)
- [HandlingUnitsAdjustedHeight](docs/Model/HandlingUnitsAdjustedHeight.md)
- [HandlingUnitsDimensions](docs/Model/HandlingUnitsDimensions.md)
- [HandlingUnitsType](docs/Model/HandlingUnitsType.md)
- [HandlingUnitsUnitOfMeasurement](docs/Model/HandlingUnitsUnitOfMeasurement.md)
- [HighValueReportImage](docs/Model/HighValueReportImage.md)
- [ImageImageFormat](docs/Model/ImageImageFormat.md)
- [IntermediateConsigneeAddress](docs/Model/IntermediateConsigneeAddress.md)
- [InternationalFormsBlanketPeriod](docs/Model/InternationalFormsBlanketPeriod.md)
- [InternationalFormsCN22Form](docs/Model/InternationalFormsCN22Form.md)
- [InternationalFormsContacts](docs/Model/InternationalFormsContacts.md)
- [InternationalFormsDiscount](docs/Model/InternationalFormsDiscount.md)
- [InternationalFormsEEIFilingOption](docs/Model/InternationalFormsEEIFilingOption.md)
- [InternationalFormsFreightCharges](docs/Model/InternationalFormsFreightCharges.md)
- [InternationalFormsInsuranceCharges](docs/Model/InternationalFormsInsuranceCharges.md)
- [InternationalFormsOtherCharges](docs/Model/InternationalFormsOtherCharges.md)
- [InternationalFormsProduct](docs/Model/InternationalFormsProduct.md)
- [InternationalFormsUPSPremiumCareForm](docs/Model/InternationalFormsUPSPremiumCareForm.md)
- [InternationalFormsUserCreatedForm](docs/Model/InternationalFormsUserCreatedForm.md)
- [LABELRECOVERYRequestWrapper](docs/Model/LABELRECOVERYRequestWrapper.md)
- [LABELRECOVERYResponseWrapper](docs/Model/LABELRECOVERYResponseWrapper.md)
- [LRCODTurnInPageImage](docs/Model/LRCODTurnInPageImage.md)
- [LRFormImage](docs/Model/LRFormImage.md)
- [LRRequestTransactionReference](docs/Model/LRRequestTransactionReference.md)
- [LRResponseResponseStatus](docs/Model/LRResponseResponseStatus.md)
- [LRResponseTransactionReference](docs/Model/LRResponseTransactionReference.md)
- [LabelDeliveryEMail](docs/Model/LabelDeliveryEMail.md)
- [LabelImageLabelImageFormat](docs/Model/LabelImageLabelImageFormat.md)
- [LabelRecoveryRequest](docs/Model/LabelRecoveryRequest.md)
- [LabelRecoveryRequestLabelDelivery](docs/Model/LabelRecoveryRequestLabelDelivery.md)
- [LabelRecoveryRequestLabelSpecification](docs/Model/LabelRecoveryRequestLabelSpecification.md)
- [LabelRecoveryRequestReferenceValues](docs/Model/LabelRecoveryRequestReferenceValues.md)
- [LabelRecoveryRequestRequest](docs/Model/LabelRecoveryRequestRequest.md)
- [LabelRecoveryRequestTranslate](docs/Model/LabelRecoveryRequestTranslate.md)
- [LabelRecoveryRequestUPSPremiumCareForm](docs/Model/LabelRecoveryRequestUPSPremiumCareForm.md)
- [LabelRecoveryResponse](docs/Model/LabelRecoveryResponse.md)
- [LabelRecoveryResponseCODTurnInPage](docs/Model/LabelRecoveryResponseCODTurnInPage.md)
- [LabelRecoveryResponseForm](docs/Model/LabelRecoveryResponseForm.md)
- [LabelRecoveryResponseHighValueReport](docs/Model/LabelRecoveryResponseHighValueReport.md)
- [LabelRecoveryResponseLabelResults](docs/Model/LabelRecoveryResponseLabelResults.md)
- [LabelRecoveryResponseLabelResults1](docs/Model/LabelRecoveryResponseLabelResults1.md)
- [LabelRecoveryResponseResponse](docs/Model/LabelRecoveryResponseResponse.md)
- [LabelRecoveryResponseTrackingCandidate](docs/Model/LabelRecoveryResponseTrackingCandidate.md)
- [LabelRecoveryResponseTrackingCandidate1](docs/Model/LabelRecoveryResponseTrackingCandidate1.md)
- [LabelResultsForm](docs/Model/LabelResultsForm.md)
- [LabelResultsLabelImage](docs/Model/LabelResultsLabelImage.md)
- [LabelResultsMailInnovationsLabelImage](docs/Model/LabelResultsMailInnovationsLabelImage.md)
- [LabelResultsReceipt](docs/Model/LabelResultsReceipt.md)
- [LabelSpecificationInstruction](docs/Model/LabelSpecificationInstruction.md)
- [LabelSpecificationLabelImageFormat](docs/Model/LabelSpecificationLabelImageFormat.md)
- [LabelSpecificationLabelStockSize](docs/Model/LabelSpecificationLabelStockSize.md)
- [MailInnovationsLabelImageLabelImageFormat](docs/Model/MailInnovationsLabelImageLabelImageFormat.md)
- [NegotiatedChargesItemizedCharges](docs/Model/NegotiatedChargesItemizedCharges.md)
- [NegotiatedRateChargesItemizedCharges](docs/Model/NegotiatedRateChargesItemizedCharges.md)
- [NegotiatedRateChargesTaxCharges](docs/Model/NegotiatedRateChargesTaxCharges.md)
- [NegotiatedRateChargesTotalCharge](docs/Model/NegotiatedRateChargesTotalCharge.md)
- [NegotiatedRateChargesTotalChargesWithTaxes](docs/Model/NegotiatedRateChargesTotalChargesWithTaxes.md)
- [NotificationEMail](docs/Model/NotificationEMail.md)
- [NotificationLocale](docs/Model/NotificationLocale.md)
- [NotificationTextMessage](docs/Model/NotificationTextMessage.md)
- [NotificationVoiceMessage](docs/Model/NotificationVoiceMessage.md)
- [PackageCommodity](docs/Model/PackageCommodity.md)
- [PackageDimWeight](docs/Model/PackageDimWeight.md)
- [PackageDimensions](docs/Model/PackageDimensions.md)
- [PackageHazMatPackageInformation](docs/Model/PackageHazMatPackageInformation.md)
- [PackageLevelResultStatus](docs/Model/PackageLevelResultStatus.md)
- [PackagePackageServiceOptions](docs/Model/PackagePackageServiceOptions.md)
- [PackagePackageWeight](docs/Model/PackagePackageWeight.md)
- [PackagePackaging](docs/Model/PackagePackaging.md)
- [PackageReferenceNumber](docs/Model/PackageReferenceNumber.md)
- [PackageResultsAccessorial](docs/Model/PackageResultsAccessorial.md)
- [PackageResultsBaseServiceCharge](docs/Model/PackageResultsBaseServiceCharge.md)
- [PackageResultsForm](docs/Model/PackageResultsForm.md)
- [PackageResultsItemizedCharges](docs/Model/PackageResultsItemizedCharges.md)
- [PackageResultsNegotiatedCharges](docs/Model/PackageResultsNegotiatedCharges.md)
- [PackageResultsNegotiatedChargesItemizedCharges](docs/Model/PackageResultsNegotiatedChargesItemizedCharges.md)
- [PackageResultsRateModifier](docs/Model/PackageResultsRateModifier.md)
- [PackageResultsServiceOptionsCharges](docs/Model/PackageResultsServiceOptionsCharges.md)
- [PackageResultsShippingLabel](docs/Model/PackageResultsShippingLabel.md)
- [PackageResultsShippingLabelGraphicImagePart](docs/Model/PackageResultsShippingLabelGraphicImagePart.md)
- [PackageResultsShippingReceipt](docs/Model/PackageResultsShippingReceipt.md)
- [PackageResultsSimpleRate](docs/Model/PackageResultsSimpleRate.md)
- [PackageServiceOptionsAccessPointCOD](docs/Model/PackageServiceOptionsAccessPointCOD.md)
- [PackageServiceOptionsCOD](docs/Model/PackageServiceOptionsCOD.md)
- [PackageServiceOptionsDeclaredValue](docs/Model/PackageServiceOptionsDeclaredValue.md)
- [PackageServiceOptionsDeliveryConfirmation](docs/Model/PackageServiceOptionsDeliveryConfirmation.md)
- [PackageServiceOptionsDryIce](docs/Model/PackageServiceOptionsDryIce.md)
- [PackageServiceOptionsHazMat](docs/Model/PackageServiceOptionsHazMat.md)
- [PackageServiceOptionsNotification](docs/Model/PackageServiceOptionsNotification.md)
- [PackageSimpleRate](docs/Model/PackageSimpleRate.md)
- [PackageUPSPremier](docs/Model/PackageUPSPremier.md)
- [PackageWeightUnitOfMeasurement](docs/Model/PackageWeightUnitOfMeasurement.md)
- [PackingListInfoPackageAssociated](docs/Model/PackingListInfoPackageAssociated.md)
- [PaymentInformationShipmentCharge](docs/Model/PaymentInformationShipmentCharge.md)
- [PreAlertNotificationEMailMessage](docs/Model/PreAlertNotificationEMailMessage.md)
- [PreAlertNotificationLocale](docs/Model/PreAlertNotificationLocale.md)
- [PreAlertNotificationTextMessage](docs/Model/PreAlertNotificationTextMessage.md)
- [PreAlertNotificationVoiceMessage](docs/Model/PreAlertNotificationVoiceMessage.md)
- [ProducerAddress](docs/Model/ProducerAddress.md)
- [ProducerPhone](docs/Model/ProducerPhone.md)
- [ProductEEIInformation](docs/Model/ProductEEIInformation.md)
- [ProductExcludeFromForm](docs/Model/ProductExcludeFromForm.md)
- [ProductNetCostDateRange](docs/Model/ProductNetCostDateRange.md)
- [ProductPackingListInfo](docs/Model/ProductPackingListInfo.md)
- [ProductProductWeight](docs/Model/ProductProductWeight.md)
- [ProductScheduleB](docs/Model/ProductScheduleB.md)
- [ProductUnit](docs/Model/ProductUnit.md)
- [ProductWeightUnitOfMeasurement](docs/Model/ProductWeightUnitOfMeasurement.md)
- [ReceiptImage](docs/Model/ReceiptImage.md)
- [ReceiptSpecificationImageFormat](docs/Model/ReceiptSpecificationImageFormat.md)
- [ReferenceValuesReferenceNumber](docs/Model/ReferenceValuesReferenceNumber.md)
- [RequestTransactionReference](docs/Model/RequestTransactionReference.md)
- [ResponseAlert](docs/Model/ResponseAlert.md)
- [ResponseResponseStatus](docs/Model/ResponseResponseStatus.md)
- [ResponseTransactionReference](docs/Model/ResponseTransactionReference.md)
- [SHIPRequestWrapper](docs/Model/SHIPRequestWrapper.md)
- [SHIPResponseWrapper](docs/Model/SHIPResponseWrapper.md)
- [ScheduleBUnitOfMeasurement](docs/Model/ScheduleBUnitOfMeasurement.md)
- [ShipFromAddress](docs/Model/ShipFromAddress.md)
- [ShipFromPhone](docs/Model/ShipFromPhone.md)
- [ShipFromTaxIDType](docs/Model/ShipFromTaxIDType.md)
- [ShipFromVendorInfo](docs/Model/ShipFromVendorInfo.md)
- [ShipToAddress](docs/Model/ShipToAddress.md)
- [ShipToPhone](docs/Model/ShipToPhone.md)
- [ShipmentAlternateDeliveryAddress](docs/Model/ShipmentAlternateDeliveryAddress.md)
- [ShipmentChargeBillReceiver](docs/Model/ShipmentChargeBillReceiver.md)
- [ShipmentChargeBillShipper](docs/Model/ShipmentChargeBillShipper.md)
- [ShipmentChargeBillThirdParty](docs/Model/ShipmentChargeBillThirdParty.md)
- [ShipmentChargesBaseServiceCharge](docs/Model/ShipmentChargesBaseServiceCharge.md)
- [ShipmentChargesItemizedCharges](docs/Model/ShipmentChargesItemizedCharges.md)
- [ShipmentChargesServiceOptionsCharges](docs/Model/ShipmentChargesServiceOptionsCharges.md)
- [ShipmentChargesTaxCharges](docs/Model/ShipmentChargesTaxCharges.md)
- [ShipmentChargesTotalCharges](docs/Model/ShipmentChargesTotalCharges.md)
- [ShipmentChargesTotalChargesWithTaxes](docs/Model/ShipmentChargesTotalChargesWithTaxes.md)
- [ShipmentChargesTransportationCharges](docs/Model/ShipmentChargesTransportationCharges.md)
- [ShipmentDGSignatoryInfo](docs/Model/ShipmentDGSignatoryInfo.md)
- [ShipmentFRSPaymentInformation](docs/Model/ShipmentFRSPaymentInformation.md)
- [ShipmentFreightShipmentInformation](docs/Model/ShipmentFreightShipmentInformation.md)
- [ShipmentInvoiceLineTotal](docs/Model/ShipmentInvoiceLineTotal.md)
- [ShipmentPackage](docs/Model/ShipmentPackage.md)
- [ShipmentPaymentInformation](docs/Model/ShipmentPaymentInformation.md)
- [ShipmentPromotionalDiscountInformation](docs/Model/ShipmentPromotionalDiscountInformation.md)
- [ShipmentReferenceNumber](docs/Model/ShipmentReferenceNumber.md)
- [ShipmentRequest](docs/Model/ShipmentRequest.md)
- [ShipmentRequestLabelSpecification](docs/Model/ShipmentRequestLabelSpecification.md)
- [ShipmentRequestReceiptSpecification](docs/Model/ShipmentRequestReceiptSpecification.md)
- [ShipmentRequestRequest](docs/Model/ShipmentRequestRequest.md)
- [ShipmentRequestShipment](docs/Model/ShipmentRequestShipment.md)
- [ShipmentResponse](docs/Model/ShipmentResponse.md)
- [ShipmentResponseResponse](docs/Model/ShipmentResponseResponse.md)
- [ShipmentResponseResponseAlert](docs/Model/ShipmentResponseResponseAlert.md)
- [ShipmentResponseShipmentResults](docs/Model/ShipmentResponseShipmentResults.md)
- [ShipmentResponseShipmentResultsControlLogReceipt](docs/Model/ShipmentResponseShipmentResultsControlLogReceipt.md)
- [ShipmentResponseShipmentResultsDGPaperImage](docs/Model/ShipmentResponseShipmentResultsDGPaperImage.md)
- [ShipmentResponseShipmentResultsDisclaimer](docs/Model/ShipmentResponseShipmentResultsDisclaimer.md)
- [ShipmentResponseShipmentResultsPackageResults](docs/Model/ShipmentResponseShipmentResultsPackageResults.md)
- [ShipmentResultsBillingWeight](docs/Model/ShipmentResultsBillingWeight.md)
- [ShipmentResultsCODTurnInPage](docs/Model/ShipmentResultsCODTurnInPage.md)
- [ShipmentResultsControlLogReceipt](docs/Model/ShipmentResultsControlLogReceipt.md)
- [ShipmentResultsDisclaimer](docs/Model/ShipmentResultsDisclaimer.md)
- [ShipmentResultsFRSShipmentData](docs/Model/ShipmentResultsFRSShipmentData.md)
- [ShipmentResultsFRSShipmentDataHandlingUnits](docs/Model/ShipmentResultsFRSShipmentDataHandlingUnits.md)
- [ShipmentResultsForm](docs/Model/ShipmentResultsForm.md)
- [ShipmentResultsHighValueReport](docs/Model/ShipmentResultsHighValueReport.md)
- [ShipmentResultsNegotiatedRateCharges](docs/Model/ShipmentResultsNegotiatedRateCharges.md)
- [ShipmentResultsNegotiatedRateChargesItemizedCharges](docs/Model/ShipmentResultsNegotiatedRateChargesItemizedCharges.md)
- [ShipmentResultsNegotiatedRateChargesTaxCharges](docs/Model/ShipmentResultsNegotiatedRateChargesTaxCharges.md)
- [ShipmentResultsPackageResults](docs/Model/ShipmentResultsPackageResults.md)
- [ShipmentResultsPackageResultsAccessorial](docs/Model/ShipmentResultsPackageResultsAccessorial.md)
- [ShipmentResultsPackageResultsItemizedCharges](docs/Model/ShipmentResultsPackageResultsItemizedCharges.md)
- [ShipmentResultsShipmentCharges](docs/Model/ShipmentResultsShipmentCharges.md)
- [ShipmentResultsShipmentChargesItemizedCharges](docs/Model/ShipmentResultsShipmentChargesItemizedCharges.md)
- [ShipmentResultsShipmentChargesTaxCharges](docs/Model/ShipmentResultsShipmentChargesTaxCharges.md)
- [ShipmentReturnService](docs/Model/ShipmentReturnService.md)
- [ShipmentService](docs/Model/ShipmentService.md)
- [ShipmentServiceOptionsAccessPointCOD](docs/Model/ShipmentServiceOptionsAccessPointCOD.md)
- [ShipmentServiceOptionsCOD](docs/Model/ShipmentServiceOptionsCOD.md)
- [ShipmentServiceOptionsDeliveryConfirmation](docs/Model/ShipmentServiceOptionsDeliveryConfirmation.md)
- [ShipmentServiceOptionsInternationalForms](docs/Model/ShipmentServiceOptionsInternationalForms.md)
- [ShipmentServiceOptionsLabelDelivery](docs/Model/ShipmentServiceOptionsLabelDelivery.md)
- [ShipmentServiceOptionsLabelMethod](docs/Model/ShipmentServiceOptionsLabelMethod.md)
- [ShipmentServiceOptionsNotification](docs/Model/ShipmentServiceOptionsNotification.md)
- [ShipmentServiceOptionsPreAlertNotification](docs/Model/ShipmentServiceOptionsPreAlertNotification.md)
- [ShipmentServiceOptionsRestrictedArticles](docs/Model/ShipmentServiceOptionsRestrictedArticles.md)
- [ShipmentShipFrom](docs/Model/ShipmentShipFrom.md)
- [ShipmentShipTo](docs/Model/ShipmentShipTo.md)
- [ShipmentShipmentIndicationType](docs/Model/ShipmentShipmentIndicationType.md)
- [ShipmentShipmentRatingOptions](docs/Model/ShipmentShipmentRatingOptions.md)
- [ShipmentShipmentServiceOptions](docs/Model/ShipmentShipmentServiceOptions.md)
- [ShipmentShipper](docs/Model/ShipmentShipper.md)
- [ShipperAddress](docs/Model/ShipperAddress.md)
- [ShipperPhone](docs/Model/ShipperPhone.md)
- [ShippingLabelImageFormat](docs/Model/ShippingLabelImageFormat.md)
- [ShippingReceiptImageFormat](docs/Model/ShippingReceiptImageFormat.md)
- [SoldToAddress](docs/Model/SoldToAddress.md)
- [SoldToPhone](docs/Model/SoldToPhone.md)
- [SummaryResultStatus](docs/Model/SummaryResultStatus.md)
- [TrackingCandidatePickupDateRange](docs/Model/TrackingCandidatePickupDateRange.md)
- [TransportationChargesDiscountAmount](docs/Model/TransportationChargesDiscountAmount.md)
- [TransportationChargesGrossCharge](docs/Model/TransportationChargesGrossCharge.md)
- [TransportationChargesNetCharge](docs/Model/TransportationChargesNetCharge.md)
- [UPSFiledPOA](docs/Model/UPSFiledPOA.md)
- [UPSPremierHandlingInstructions](docs/Model/UPSPremierHandlingInstructions.md)
- [UPSPremiumCareFormLanguageForUPSPremiumCare](docs/Model/UPSPremiumCareFormLanguageForUPSPremiumCare.md)
- [UltimateConsigneeAddress](docs/Model/UltimateConsigneeAddress.md)
- [UltimateConsigneeUltimateConsigneeType](docs/Model/UltimateConsigneeUltimateConsigneeType.md)
- [UnitUnitOfMeasurement](docs/Model/UnitUnitOfMeasurement.md)
- [VOIDSHIPMENTRequestWrapper](docs/Model/VOIDSHIPMENTRequestWrapper.md)
- [VOIDSHIPMENTResponseWrapper](docs/Model/VOIDSHIPMENTResponseWrapper.md)
- [VoidRequestTransactionReference](docs/Model/VoidRequestTransactionReference.md)
- [VoidResponseResponseStatus](docs/Model/VoidResponseResponseStatus.md)
- [VoidResponseTransactionReference](docs/Model/VoidResponseTransactionReference.md)
- [VoidShipmentRequest](docs/Model/VoidShipmentRequest.md)
- [VoidShipmentRequestRequest](docs/Model/VoidShipmentRequestRequest.md)
- [VoidShipmentRequestVoidShipment](docs/Model/VoidShipmentRequestVoidShipment.md)
- [VoidShipmentResponse](docs/Model/VoidShipmentResponse.md)
- [VoidShipmentResponsePackageLevelResult](docs/Model/VoidShipmentResponsePackageLevelResult.md)
- [VoidShipmentResponsePackageLevelResult1](docs/Model/VoidShipmentResponsePackageLevelResult1.md)
- [VoidShipmentResponseResponse](docs/Model/VoidShipmentResponseResponse.md)
- [VoidShipmentResponseSummaryResult](docs/Model/VoidShipmentResponseSummaryResult.md)

## Authorization

Authentication schemes defined for the API:
### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: ``
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
