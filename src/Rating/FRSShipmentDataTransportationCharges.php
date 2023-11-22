<?php
/**
 * FRSShipmentDataTransportationCharges
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rate
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

namespace AntibodiesOnline\UpsApi\Rating;

use \ArrayAccess;
use \AntibodiesOnline\UpsApi\ObjectSerializer;

/**
 * FRSShipmentDataTransportationCharges Class Doc Comment
 *
 * @category Class
 * @description Transportation Charges Container
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FRSShipmentDataTransportationCharges implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FRSShipmentData_TransportationCharges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gross_charge' => '\AntibodiesOnline\UpsApi\Rating\TransportationChargesGrossCharge',
        'discount_amount' => '\AntibodiesOnline\UpsApi\Rating\TransportationChargesDiscountAmount',
        'discount_percentage' => 'string',
        'net_charge' => '\AntibodiesOnline\UpsApi\Rating\TransportationChargesNetCharge'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'gross_charge' => null,
        'discount_amount' => null,
        'discount_percentage' => null,
        'net_charge' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gross_charge' => false,
		'discount_amount' => false,
		'discount_percentage' => false,
		'net_charge' => false
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
        'gross_charge' => 'GrossCharge',
        'discount_amount' => 'DiscountAmount',
        'discount_percentage' => 'DiscountPercentage',
        'net_charge' => 'NetCharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gross_charge' => 'setGrossCharge',
        'discount_amount' => 'setDiscountAmount',
        'discount_percentage' => 'setDiscountPercentage',
        'net_charge' => 'setNetCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gross_charge' => 'getGrossCharge',
        'discount_amount' => 'getDiscountAmount',
        'discount_percentage' => 'getDiscountPercentage',
        'net_charge' => 'getNetCharge'
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
        $this->setIfExists('gross_charge', $data ?? [], null);
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('discount_percentage', $data ?? [], null);
        $this->setIfExists('net_charge', $data ?? [], null);
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

        if ($this->container['gross_charge'] === null) {
            $invalidProperties[] = "'gross_charge' can't be null";
        }
        if ($this->container['discount_amount'] === null) {
            $invalidProperties[] = "'discount_amount' can't be null";
        }
        if ($this->container['discount_percentage'] === null) {
            $invalidProperties[] = "'discount_percentage' can't be null";
        }
        if ((mb_strlen($this->container['discount_percentage']) > 2)) {
            $invalidProperties[] = "invalid value for 'discount_percentage', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['discount_percentage']) < 2)) {
            $invalidProperties[] = "invalid value for 'discount_percentage', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['net_charge'] === null) {
            $invalidProperties[] = "'net_charge' can't be null";
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
     * Gets gross_charge
     *
     * @return \AntibodiesOnline\UpsApi\Rating\TransportationChargesGrossCharge
     */
    public function getGrossCharge()
    {
        return $this->container['gross_charge'];
    }

    /**
     * Sets gross_charge
     *
     * @param \AntibodiesOnline\UpsApi\Rating\TransportationChargesGrossCharge $gross_charge gross_charge
     *
     * @return self
     */
    public function setGrossCharge($gross_charge)
    {
        if (is_null($gross_charge)) {
            throw new \InvalidArgumentException('non-nullable gross_charge cannot be null');
        }
        $this->container['gross_charge'] = $gross_charge;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return \AntibodiesOnline\UpsApi\Rating\TransportationChargesDiscountAmount
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param \AntibodiesOnline\UpsApi\Rating\TransportationChargesDiscountAmount $discount_amount discount_amount
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        if (is_null($discount_amount)) {
            throw new \InvalidArgumentException('non-nullable discount_amount cannot be null');
        }
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return string
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param string $discount_percentage Discount Percentage
     *
     * @return self
     */
    public function setDiscountPercentage($discount_percentage)
    {
        if (is_null($discount_percentage)) {
            throw new \InvalidArgumentException('non-nullable discount_percentage cannot be null');
        }
        if ((mb_strlen($discount_percentage) > 2)) {
            throw new \InvalidArgumentException('invalid length for $discount_percentage when calling FRSShipmentDataTransportationCharges., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($discount_percentage) < 2)) {
            throw new \InvalidArgumentException('invalid length for $discount_percentage when calling FRSShipmentDataTransportationCharges., must be bigger than or equal to 2.');
        }

        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets net_charge
     *
     * @return \AntibodiesOnline\UpsApi\Rating\TransportationChargesNetCharge
     */
    public function getNetCharge()
    {
        return $this->container['net_charge'];
    }

    /**
     * Sets net_charge
     *
     * @param \AntibodiesOnline\UpsApi\Rating\TransportationChargesNetCharge $net_charge net_charge
     *
     * @return self
     */
    public function setNetCharge($net_charge)
    {
        if (is_null($net_charge)) {
            throw new \InvalidArgumentException('non-nullable net_charge cannot be null');
        }
        $this->container['net_charge'] = $net_charge;

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


