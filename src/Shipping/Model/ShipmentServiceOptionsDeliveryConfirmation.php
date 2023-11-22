<?php
/**
 * ShipmentServiceOptionsDeliveryConfirmation
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
 * ShipmentServiceOptionsDeliveryConfirmation Class Doc Comment
 *
 * @category Class
 * @description Delivery Confirmation container.   Valid for forward shipments only.  Refer to Delivery Confirmation Origin-Destination Pairs in the Appendix for a list of valid values.
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentServiceOptionsDeliveryConfirmation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentServiceOptions_DeliveryConfirmation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dcis_type' => 'string',
        'dcis_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dcis_type' => null,
        'dcis_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dcis_type' => false,
		'dcis_number' => false
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
        'dcis_type' => 'DCISType',
        'dcis_number' => 'DCISNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dcis_type' => 'setDcisType',
        'dcis_number' => 'setDcisNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dcis_type' => 'getDcisType',
        'dcis_number' => 'getDcisNumber'
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
        $this->setIfExists('dcis_type', $data ?? [], null);
        $this->setIfExists('dcis_number', $data ?? [], null);
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

        if ($this->container['dcis_type'] === null) {
            $invalidProperties[] = "'dcis_type' can't be null";
        }
        if ((mb_strlen($this->container['dcis_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'dcis_type', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['dcis_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'dcis_type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['dcis_number']) && (mb_strlen($this->container['dcis_number']) > 11)) {
            $invalidProperties[] = "invalid value for 'dcis_number', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['dcis_number']) && (mb_strlen($this->container['dcis_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'dcis_number', the character length must be bigger than or equal to 1.";
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
     * Gets dcis_type
     *
     * @return string
     */
    public function getDcisType()
    {
        return $this->container['dcis_type'];
    }

    /**
     * Sets dcis_type
     *
     * @param string $dcis_type Type of delivery confirmation.  Valid values:  1 - Delivery Confirmation Signature Required 2 - Delivery Confirmation Adult Signature Required. Valid for forward shipments only.
     *
     * @return self
     */
    public function setDcisType($dcis_type)
    {
        if (is_null($dcis_type)) {
            throw new \InvalidArgumentException('non-nullable dcis_type cannot be null');
        }
        if ((mb_strlen($dcis_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dcis_type when calling ShipmentServiceOptionsDeliveryConfirmation., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($dcis_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dcis_type when calling ShipmentServiceOptionsDeliveryConfirmation., must be bigger than or equal to 1.');
        }

        $this->container['dcis_type'] = $dcis_type;

        return $this;
    }

    /**
     * Gets dcis_number
     *
     * @return string|null
     */
    public function getDcisNumber()
    {
        return $this->container['dcis_number'];
    }

    /**
     * Sets dcis_number
     *
     * @param string|null $dcis_number Delivery Confirmation Control number associated with the delivery confirmation for the package.  Valid for forward shipments only.
     *
     * @return self
     */
    public function setDcisNumber($dcis_number)
    {
        if (is_null($dcis_number)) {
            throw new \InvalidArgumentException('non-nullable dcis_number cannot be null');
        }
        if ((mb_strlen($dcis_number) > 11)) {
            throw new \InvalidArgumentException('invalid length for $dcis_number when calling ShipmentServiceOptionsDeliveryConfirmation., must be smaller than or equal to 11.');
        }
        if ((mb_strlen($dcis_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dcis_number when calling ShipmentServiceOptionsDeliveryConfirmation., must be bigger than or equal to 1.');
        }

        $this->container['dcis_number'] = $dcis_number;

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


