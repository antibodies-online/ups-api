<?php
/**
 * PackageServiceOptionsDryIce
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
 * PackageServiceOptionsDryIce Class Doc Comment
 *
 * @category Class
 * @description Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PackageServiceOptionsDryIce implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageServiceOptions_DryIce';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'regulation_set' => 'string',
        'dry_ice_weight' => '\AntibodiesOnline\UpsApi\Shipping\DryIceDryIceWeight',
        'medical_use_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'regulation_set' => null,
        'dry_ice_weight' => null,
        'medical_use_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'regulation_set' => false,
		'dry_ice_weight' => false,
		'medical_use_indicator' => false
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
        'regulation_set' => 'RegulationSet',
        'dry_ice_weight' => 'DryIceWeight',
        'medical_use_indicator' => 'MedicalUseIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'regulation_set' => 'setRegulationSet',
        'dry_ice_weight' => 'setDryIceWeight',
        'medical_use_indicator' => 'setMedicalUseIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'regulation_set' => 'getRegulationSet',
        'dry_ice_weight' => 'getDryIceWeight',
        'medical_use_indicator' => 'getMedicalUseIndicator'
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
        $this->setIfExists('regulation_set', $data ?? [], null);
        $this->setIfExists('dry_ice_weight', $data ?? [], null);
        $this->setIfExists('medical_use_indicator', $data ?? [], null);
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

        if ($this->container['regulation_set'] === null) {
            $invalidProperties[] = "'regulation_set' can't be null";
        }
        if ((mb_strlen($this->container['regulation_set']) > 4)) {
            $invalidProperties[] = "invalid value for 'regulation_set', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['regulation_set']) < 3)) {
            $invalidProperties[] = "invalid value for 'regulation_set', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['dry_ice_weight'] === null) {
            $invalidProperties[] = "'dry_ice_weight' can't be null";
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
     * Gets regulation_set
     *
     * @return string
     */
    public function getRegulationSet()
    {
        return $this->container['regulation_set'];
    }

    /**
     * Sets regulation_set
     *
     * @param string $regulation_set Regulation set for dryIce Shipment. Valid values: CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA= Worldwide Air movement.  The following values are valid: IATA, CFR.
     *
     * @return self
     */
    public function setRegulationSet($regulation_set)
    {
        if (is_null($regulation_set)) {
            throw new \InvalidArgumentException('non-nullable regulation_set cannot be null');
        }
        if ((mb_strlen($regulation_set) > 4)) {
            throw new \InvalidArgumentException('invalid length for $regulation_set when calling PackageServiceOptionsDryIce., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($regulation_set) < 3)) {
            throw new \InvalidArgumentException('invalid length for $regulation_set when calling PackageServiceOptionsDryIce., must be bigger than or equal to 3.');
        }

        $this->container['regulation_set'] = $regulation_set;

        return $this;
    }

    /**
     * Gets dry_ice_weight
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\DryIceDryIceWeight
     */
    public function getDryIceWeight()
    {
        return $this->container['dry_ice_weight'];
    }

    /**
     * Sets dry_ice_weight
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\DryIceDryIceWeight $dry_ice_weight dry_ice_weight
     *
     * @return self
     */
    public function setDryIceWeight($dry_ice_weight)
    {
        if (is_null($dry_ice_weight)) {
            throw new \InvalidArgumentException('non-nullable dry_ice_weight cannot be null');
        }
        $this->container['dry_ice_weight'] = $dry_ice_weight;

        return $this;
    }

    /**
     * Gets medical_use_indicator
     *
     * @return string|null
     */
    public function getMedicalUseIndicator()
    {
        return $this->container['medical_use_indicator'];
    }

    /**
     * Sets medical_use_indicator
     *
     * @param string|null $medical_use_indicator Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 Kgs or 5.7 Lbs.
     *
     * @return self
     */
    public function setMedicalUseIndicator($medical_use_indicator)
    {
        if (is_null($medical_use_indicator)) {
            throw new \InvalidArgumentException('non-nullable medical_use_indicator cannot be null');
        }


        $this->container['medical_use_indicator'] = $medical_use_indicator;

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


