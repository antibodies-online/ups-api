<?php
/**
 * PackageResultsRateModifier
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
 * PackageResultsRateModifier Class Doc Comment
 *
 * @category Class
 * @description Container for returned Rate Modifier information. Applies only if SubVersion is 2205 or greater.
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PackageResultsRateModifier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageResults_RateModifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'modifier_type' => 'string',
        'modifier_desc' => 'string',
        'amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'modifier_type' => null,
        'modifier_desc' => null,
        'amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'modifier_type' => false,
		'modifier_desc' => false,
		'amount' => false
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
        'modifier_type' => 'ModifierType',
        'modifier_desc' => 'ModifierDesc',
        'amount' => 'Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modifier_type' => 'setModifierType',
        'modifier_desc' => 'setModifierDesc',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modifier_type' => 'getModifierType',
        'modifier_desc' => 'getModifierDesc',
        'amount' => 'getAmount'
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
        $this->setIfExists('modifier_type', $data ?? [], null);
        $this->setIfExists('modifier_desc', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
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

        if ($this->container['modifier_type'] === null) {
            $invalidProperties[] = "'modifier_type' can't be null";
        }
        if ((mb_strlen($this->container['modifier_type']) > 3)) {
            $invalidProperties[] = "invalid value for 'modifier_type', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['modifier_type']) < 3)) {
            $invalidProperties[] = "invalid value for 'modifier_type', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['modifier_desc'] === null) {
            $invalidProperties[] = "'modifier_desc' can't be null";
        }
        if ((mb_strlen($this->container['modifier_desc']) > 50)) {
            $invalidProperties[] = "invalid value for 'modifier_desc', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['modifier_desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'modifier_desc', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->container['amount']) > 16)) {
            $invalidProperties[] = "invalid value for 'amount', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'amount', the character length must be bigger than or equal to 1.";
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
     * Gets modifier_type
     *
     * @return string
     */
    public function getModifierType()
    {
        return $this->container['modifier_type'];
    }

    /**
     * Sets modifier_type
     *
     * @param string $modifier_type Rate Modifier Type. Example: \"ORM\". Applies only if SubVersion is 2205 or greater.
     *
     * @return self
     */
    public function setModifierType($modifier_type)
    {
        if (is_null($modifier_type)) {
            throw new \InvalidArgumentException('non-nullable modifier_type cannot be null');
        }
        if ((mb_strlen($modifier_type) > 3)) {
            throw new \InvalidArgumentException('invalid length for $modifier_type when calling PackageResultsRateModifier., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($modifier_type) < 3)) {
            throw new \InvalidArgumentException('invalid length for $modifier_type when calling PackageResultsRateModifier., must be bigger than or equal to 3.');
        }

        $this->container['modifier_type'] = $modifier_type;

        return $this;
    }

    /**
     * Gets modifier_desc
     *
     * @return string
     */
    public function getModifierDesc()
    {
        return $this->container['modifier_desc'];
    }

    /**
     * Sets modifier_desc
     *
     * @param string $modifier_desc Rate Modifier Description. Example: \"Origin Modifier\". Applies only if SubVersion is 2205 or greater.
     *
     * @return self
     */
    public function setModifierDesc($modifier_desc)
    {
        if (is_null($modifier_desc)) {
            throw new \InvalidArgumentException('non-nullable modifier_desc cannot be null');
        }
        if ((mb_strlen($modifier_desc) > 50)) {
            throw new \InvalidArgumentException('invalid length for $modifier_desc when calling PackageResultsRateModifier., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($modifier_desc) < 1)) {
            throw new \InvalidArgumentException('invalid length for $modifier_desc when calling PackageResultsRateModifier., must be bigger than or equal to 1.');
        }

        $this->container['modifier_desc'] = $modifier_desc;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Amount. Example: \"-1.00\",\"0.25\". It contains positive or negative values. Applies only if SubVersion is 2205 or greater.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        if ((mb_strlen($amount) > 16)) {
            throw new \InvalidArgumentException('invalid length for $amount when calling PackageResultsRateModifier., must be smaller than or equal to 16.');
        }
        if ((mb_strlen($amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $amount when calling PackageResultsRateModifier., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

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


