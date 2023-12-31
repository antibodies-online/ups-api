<?php
/**
 * NegotiatedChargesItemizedCharges
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi
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

namespace AntibodiesOnline\UpsApi\Shipping;

use \ArrayAccess;
use \AntibodiesOnline\UpsApi\ObjectSerializer;

/**
 * NegotiatedChargesItemizedCharges Class Doc Comment
 *
 * @category Class
 * @description Negotiated Itemized Accessorial and SurCharges.  Negotiated itemized charges are only returned for certain contract-only shipments as well as Worldwide Express Freight, Ground Freight Pricing, and Hazmat movements.  Negotiated Itemized Accessorial and Sur Charges are returned only when the subversion element is present and greater than or equal to 1607.  Package level itemized charges are only returned for US domestic movements
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NegotiatedChargesItemizedCharges implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NegotiatedCharges_ItemizedCharges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'description' => 'string',
        'currency_code' => 'string',
        'monetary_value' => 'string',
        'sub_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'description' => null,
        'currency_code' => null,
        'monetary_value' => null,
        'sub_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'description' => false,
		'currency_code' => false,
		'monetary_value' => false,
		'sub_type' => false
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
        'code' => 'Code',
        'description' => 'Description',
        'currency_code' => 'CurrencyCode',
        'monetary_value' => 'MonetaryValue',
        'sub_type' => 'SubType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'currency_code' => 'setCurrencyCode',
        'monetary_value' => 'setMonetaryValue',
        'sub_type' => 'setSubType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'currency_code' => 'getCurrencyCode',
        'monetary_value' => 'getMonetaryValue',
        'sub_type' => 'getSubType'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('monetary_value', $data ?? [], null);
        $this->setIfExists('sub_type', $data ?? [], null);
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) > 3)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['code']) < 3)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ((mb_strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['currency_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['monetary_value'] === null) {
            $invalidProperties[] = "'monetary_value' can't be null";
        }
        if ((mb_strlen($this->container['monetary_value']) > 19)) {
            $invalidProperties[] = "invalid value for 'monetary_value', the character length must be smaller than or equal to 19.";
        }

        if ((mb_strlen($this->container['monetary_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'monetary_value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sub_type']) && (mb_strlen($this->container['sub_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'sub_type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['sub_type']) && (mb_strlen($this->container['sub_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'sub_type', the character length must be bigger than or equal to 1.";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Identification code for itemized charge.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        if ((mb_strlen($code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $code when calling NegotiatedChargesItemizedCharges., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $code when calling NegotiatedChargesItemizedCharges., must be bigger than or equal to 3.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of Itemized Charge that had been charged.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 50)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NegotiatedChargesItemizedCharges., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NegotiatedChargesItemizedCharges., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code The IATA currency code associated with the Itemized Charge costs for the shipment.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        if ((mb_strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling NegotiatedChargesItemizedCharges., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling NegotiatedChargesItemizedCharges., must be bigger than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets monetary_value
     *
     * @return string
     */
    public function getMonetaryValue()
    {
        return $this->container['monetary_value'];
    }

    /**
     * Sets monetary_value
     *
     * @param string $monetary_value Itemized Charges value amount.
     *
     * @return self
     */
    public function setMonetaryValue($monetary_value)
    {
        if (is_null($monetary_value)) {
            throw new \InvalidArgumentException('non-nullable monetary_value cannot be null');
        }
        if ((mb_strlen($monetary_value) > 19)) {
            throw new \InvalidArgumentException('invalid length for $monetary_value when calling NegotiatedChargesItemizedCharges., must be smaller than or equal to 19.');
        }
        if ((mb_strlen($monetary_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $monetary_value when calling NegotiatedChargesItemizedCharges., must be bigger than or equal to 1.');
        }

        $this->container['monetary_value'] = $monetary_value;

        return $this;
    }

    /**
     * Gets sub_type
     *
     * @return string|null
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param string|null $sub_type The sub-type of ItemizedCharges type.
     *
     * @return self
     */
    public function setSubType($sub_type)
    {
        if (is_null($sub_type)) {
            throw new \InvalidArgumentException('non-nullable sub_type cannot be null');
        }
        if ((mb_strlen($sub_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sub_type when calling NegotiatedChargesItemizedCharges., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($sub_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sub_type when calling NegotiatedChargesItemizedCharges., must be bigger than or equal to 1.');
        }

        $this->container['sub_type'] = $sub_type;

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


