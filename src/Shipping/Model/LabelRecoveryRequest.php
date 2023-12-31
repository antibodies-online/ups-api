<?php
/**
 * LabelRecoveryRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ship
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AntibodiesOnline\UpsApi\Shipping\Model;

use \ArrayAccess;
use \AntibodiesOnline\UpsApi\Shipping\ObjectSerializer;

/**
 * LabelRecoveryRequest Class Doc Comment
 *
 * @category Class
 * @description Request for obtaining the Label for the return shipment.
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LabelRecoveryRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelRecoveryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request' => '\AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestRequest',
        'label_specification' => '\AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestLabelSpecification',
        'translate' => '\AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestTranslate',
        'label_delivery' => '\AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestLabelDelivery',
        'tracking_number' => 'string',
        'mail_innovations_tracking_number' => 'string',
        'reference_values' => '\AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestReferenceValues',
        'locale' => 'string',
        'ups_premium_care_form' => '\AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestUPSPremiumCareForm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request' => null,
        'label_specification' => null,
        'translate' => null,
        'label_delivery' => null,
        'tracking_number' => null,
        'mail_innovations_tracking_number' => null,
        'reference_values' => null,
        'locale' => null,
        'ups_premium_care_form' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request' => false,
		'label_specification' => false,
		'translate' => false,
		'label_delivery' => false,
		'tracking_number' => false,
		'mail_innovations_tracking_number' => false,
		'reference_values' => false,
		'locale' => false,
		'ups_premium_care_form' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request' => 'Request',
        'label_specification' => 'LabelSpecification',
        'translate' => 'Translate',
        'label_delivery' => 'LabelDelivery',
        'tracking_number' => 'TrackingNumber',
        'mail_innovations_tracking_number' => 'MailInnovationsTrackingNumber',
        'reference_values' => 'ReferenceValues',
        'locale' => 'Locale',
        'ups_premium_care_form' => 'UPSPremiumCareForm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'label_specification' => 'setLabelSpecification',
        'translate' => 'setTranslate',
        'label_delivery' => 'setLabelDelivery',
        'tracking_number' => 'setTrackingNumber',
        'mail_innovations_tracking_number' => 'setMailInnovationsTrackingNumber',
        'reference_values' => 'setReferenceValues',
        'locale' => 'setLocale',
        'ups_premium_care_form' => 'setUpsPremiumCareForm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'label_specification' => 'getLabelSpecification',
        'translate' => 'getTranslate',
        'label_delivery' => 'getLabelDelivery',
        'tracking_number' => 'getTrackingNumber',
        'mail_innovations_tracking_number' => 'getMailInnovationsTrackingNumber',
        'reference_values' => 'getReferenceValues',
        'locale' => 'getLocale',
        'ups_premium_care_form' => 'getUpsPremiumCareForm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('request', $data ?? [], null);
        $this->setIfExists('label_specification', $data ?? [], null);
        $this->setIfExists('translate', $data ?? [], null);
        $this->setIfExists('label_delivery', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('mail_innovations_tracking_number', $data ?? [], null);
        $this->setIfExists('reference_values', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('ups_premium_care_form', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request'] === null) {
            $invalidProperties[] = "'request' can't be null";
        }
        if (!is_null($this->container['tracking_number']) && (mb_strlen($this->container['tracking_number']) > 18)) {
            $invalidProperties[] = "invalid value for 'tracking_number', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['tracking_number']) && (mb_strlen($this->container['tracking_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mail_innovations_tracking_number']) && (mb_strlen($this->container['mail_innovations_tracking_number']) > 34)) {
            $invalidProperties[] = "invalid value for 'mail_innovations_tracking_number', the character length must be smaller than or equal to 34.";
        }

        if (!is_null($this->container['mail_innovations_tracking_number']) && (mb_strlen($this->container['mail_innovations_tracking_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'mail_innovations_tracking_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['locale']) && (mb_strlen($this->container['locale']) > 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['locale']) && (mb_strlen($this->container['locale']) < 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 5.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets request
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestRequest
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestRequest $request request
     *
     * @return self
     */
    public function setRequest($request)
    {
        if (is_null($request)) {
            throw new \InvalidArgumentException('non-nullable request cannot be null');
        }
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets label_specification
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestLabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->container['label_specification'];
    }

    /**
     * Sets label_specification
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestLabelSpecification|null $label_specification label_specification
     *
     * @return self
     */
    public function setLabelSpecification($label_specification)
    {
        if (is_null($label_specification)) {
            throw new \InvalidArgumentException('non-nullable label_specification cannot be null');
        }
        $this->container['label_specification'] = $label_specification;

        return $this;
    }

    /**
     * Gets translate
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestTranslate|null
     */
    public function getTranslate()
    {
        return $this->container['translate'];
    }

    /**
     * Sets translate
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestTranslate|null $translate translate
     *
     * @return self
     */
    public function setTranslate($translate)
    {
        if (is_null($translate)) {
            throw new \InvalidArgumentException('non-nullable translate cannot be null');
        }
        $this->container['translate'] = $translate;

        return $this;
    }

    /**
     * Gets label_delivery
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestLabelDelivery|null
     */
    public function getLabelDelivery()
    {
        return $this->container['label_delivery'];
    }

    /**
     * Sets label_delivery
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestLabelDelivery|null $label_delivery label_delivery
     *
     * @return self
     */
    public function setLabelDelivery($label_delivery)
    {
        if (is_null($label_delivery)) {
            throw new \InvalidArgumentException('non-nullable label_delivery cannot be null');
        }
        $this->container['label_delivery'] = $label_delivery;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number Small Package Tracking Number. Required if Mail Innovations Tracking Number or ReferenceNumber/Value and ShipperNumber is not provided.  If only TrackingNumber is provided, the request will be treated as Small Package Shipment. Label Recovery will return label for Small Package Tracking Number. If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        if ((mb_strlen($tracking_number) > 18)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number when calling LabelRecoveryRequest., must be smaller than or equal to 18.');
        }
        if ((mb_strlen($tracking_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number when calling LabelRecoveryRequest., must be bigger than or equal to 1.');
        }

        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets mail_innovations_tracking_number
     *
     * @return string|null
     */
    public function getMailInnovationsTrackingNumber()
    {
        return $this->container['mail_innovations_tracking_number'];
    }

    /**
     * Sets mail_innovations_tracking_number
     *
     * @param string|null $mail_innovations_tracking_number Mail Innovations Tracking Number.  Required if Tracking Number or ReferenceNumber/Value is not populated.  If only MailInnovationsTrackingNumber is provided, the request will be treated as Single Mail Innovations Return Shipment. Label Recovery will return label for Mail Innovations Return Tracking Number. If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
     *
     * @return self
     */
    public function setMailInnovationsTrackingNumber($mail_innovations_tracking_number)
    {
        if (is_null($mail_innovations_tracking_number)) {
            throw new \InvalidArgumentException('non-nullable mail_innovations_tracking_number cannot be null');
        }
        if ((mb_strlen($mail_innovations_tracking_number) > 34)) {
            throw new \InvalidArgumentException('invalid length for $mail_innovations_tracking_number when calling LabelRecoveryRequest., must be smaller than or equal to 34.');
        }
        if ((mb_strlen($mail_innovations_tracking_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mail_innovations_tracking_number when calling LabelRecoveryRequest., must be bigger than or equal to 1.');
        }

        $this->container['mail_innovations_tracking_number'] = $mail_innovations_tracking_number;

        return $this;
    }

    /**
     * Gets reference_values
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestReferenceValues|null
     */
    public function getReferenceValues()
    {
        return $this->container['reference_values'];
    }

    /**
     * Sets reference_values
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestReferenceValues|null $reference_values reference_values
     *
     * @return self
     */
    public function setReferenceValues($reference_values)
    {
        if (is_null($reference_values)) {
            throw new \InvalidArgumentException('non-nullable reference_values cannot be null');
        }
        $this->container['reference_values'] = $reference_values;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions, Receipt instructions (if available for given tracking number) and High Value Report (if available for given tracking number) in desired language.  Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country code seperated by an underscore ('_') character. Example - de_DE. Please refer to Appendix for supported values for Locale.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        if ((mb_strlen($locale) > 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling LabelRecoveryRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($locale) < 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling LabelRecoveryRequest., must be bigger than or equal to 5.');
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets ups_premium_care_form
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestUPSPremiumCareForm|null
     */
    public function getUpsPremiumCareForm()
    {
        return $this->container['ups_premium_care_form'];
    }

    /**
     * Sets ups_premium_care_form
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\LabelRecoveryRequestUPSPremiumCareForm|null $ups_premium_care_form ups_premium_care_form
     *
     * @return self
     */
    public function setUpsPremiumCareForm($ups_premium_care_form)
    {
        if (is_null($ups_premium_care_form)) {
            throw new \InvalidArgumentException('non-nullable ups_premium_care_form cannot be null');
        }
        $this->container['ups_premium_care_form'] = $ups_premium_care_form;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


