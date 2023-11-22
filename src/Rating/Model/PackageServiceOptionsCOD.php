<?php
/**
 * PackageServiceOptionsCOD
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi\Rating
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

namespace AntibodiesOnline\UpsApi\Rating\Model;

use \ArrayAccess;
use \AntibodiesOnline\UpsApi\Rating\ObjectSerializer;

/**
 * PackageServiceOptionsCOD Class Doc Comment
 *
 * @category Class
 * @description COD Container. Indicates COD is requested.   Valid for the following country or territory combinations: US/PR to US/PRCA to CACA to USNot allowed for CA to US for packages that are designated as Letters or Envelopes.
 * @package  AntibodiesOnline\UpsApi\Rating
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PackageServiceOptionsCOD implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageServiceOptions_COD';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cod_funds_code' => 'string',
        'cod_amount' => '\AntibodiesOnline\UpsApi\Rating\Model\CODCODAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cod_funds_code' => null,
        'cod_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cod_funds_code' => false,
		'cod_amount' => false
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
        'cod_funds_code' => 'CODFundsCode',
        'cod_amount' => 'CODAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cod_funds_code' => 'setCodFundsCode',
        'cod_amount' => 'setCodAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cod_funds_code' => 'getCodFundsCode',
        'cod_amount' => 'getCodAmount'
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
        $this->setIfExists('cod_funds_code', $data ?? [], null);
        $this->setIfExists('cod_amount', $data ?? [], null);
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

        if ($this->container['cod_funds_code'] === null) {
            $invalidProperties[] = "'cod_funds_code' can't be null";
        }
        if ((mb_strlen($this->container['cod_funds_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'cod_funds_code', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['cod_funds_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'cod_funds_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['cod_amount'] === null) {
            $invalidProperties[] = "'cod_amount' can't be null";
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
     * Gets cod_funds_code
     *
     * @return string
     */
    public function getCodFundsCode()
    {
        return $this->container['cod_funds_code'];
    }

    /**
     * Sets cod_funds_code
     *
     * @param string $cod_funds_code For valid values, refer to\"Rating and Shipping COD Supported Countries or Territories in the Appendix.
     *
     * @return self
     */
    public function setCodFundsCode($cod_funds_code)
    {
        if (is_null($cod_funds_code)) {
            throw new \InvalidArgumentException('non-nullable cod_funds_code cannot be null');
        }
        if ((mb_strlen($cod_funds_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cod_funds_code when calling PackageServiceOptionsCOD., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($cod_funds_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cod_funds_code when calling PackageServiceOptionsCOD., must be bigger than or equal to 1.');
        }

        $this->container['cod_funds_code'] = $cod_funds_code;

        return $this;
    }

    /**
     * Gets cod_amount
     *
     * @return \AntibodiesOnline\UpsApi\Rating\Model\CODCODAmount
     */
    public function getCodAmount()
    {
        return $this->container['cod_amount'];
    }

    /**
     * Sets cod_amount
     *
     * @param \AntibodiesOnline\UpsApi\Rating\Model\CODCODAmount $cod_amount cod_amount
     *
     * @return self
     */
    public function setCodAmount($cod_amount)
    {
        if (is_null($cod_amount)) {
            throw new \InvalidArgumentException('non-nullable cod_amount cannot be null');
        }
        $this->container['cod_amount'] = $cod_amount;

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

