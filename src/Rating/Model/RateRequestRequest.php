<?php
/**
 * RateRequestRequest
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
 * RateRequestRequest Class Doc Comment
 *
 * @category Class
 * @description Request container.  N/A
 * @package  AntibodiesOnline\UpsApi\Rating
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RateRequestRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RateRequest_Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_option' => 'string',
        'sub_version' => 'string',
        'transaction_reference' => '\AntibodiesOnline\UpsApi\Rating\Model\RequestTransactionReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request_option' => null,
        'sub_version' => null,
        'transaction_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request_option' => false,
		'sub_version' => false,
		'transaction_reference' => false
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
        'request_option' => 'RequestOption',
        'sub_version' => 'SubVersion',
        'transaction_reference' => 'TransactionReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_option' => 'setRequestOption',
        'sub_version' => 'setSubVersion',
        'transaction_reference' => 'setTransactionReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_option' => 'getRequestOption',
        'sub_version' => 'getSubVersion',
        'transaction_reference' => 'getTransactionReference'
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
        $this->setIfExists('request_option', $data ?? [], null);
        $this->setIfExists('sub_version', $data ?? [], null);
        $this->setIfExists('transaction_reference', $data ?? [], null);
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

        if ($this->container['request_option'] === null) {
            $invalidProperties[] = "'request_option' can't be null";
        }
        if ((mb_strlen($this->container['request_option']) > 15)) {
            $invalidProperties[] = "invalid value for 'request_option', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['request_option']) < 1)) {
            $invalidProperties[] = "invalid value for 'request_option', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sub_version']) && (mb_strlen($this->container['sub_version']) > 4)) {
            $invalidProperties[] = "invalid value for 'sub_version', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['sub_version']) && (mb_strlen($this->container['sub_version']) < 4)) {
            $invalidProperties[] = "invalid value for 'sub_version', the character length must be bigger than or equal to 4.";
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
     * Gets request_option
     *
     * @return string
     */
    public function getRequestOption()
    {
        return $this->container['request_option'];
    }

    /**
     * Sets request_option
     *
     * @param string $request_option Used to define the request type.  Valid Values:Rate = The server rates (The default Request option is Rate if a Request Option is not provided). Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Ratetimeintransit = The server rates with transit time informationShoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.Rate is the only valid request option for UPS Ground Freight Pricing requests.
     *
     * @return self
     */
    public function setRequestOption($request_option)
    {
        if (is_null($request_option)) {
            throw new \InvalidArgumentException('non-nullable request_option cannot be null');
        }
        if ((mb_strlen($request_option) > 15)) {
            throw new \InvalidArgumentException('invalid length for $request_option when calling RateRequestRequest., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($request_option) < 1)) {
            throw new \InvalidArgumentException('invalid length for $request_option when calling RateRequestRequest., must be bigger than or equal to 1.');
        }

        $this->container['request_option'] = $request_option;

        return $this;
    }

    /**
     * Gets sub_version
     *
     * @return string|null
     */
    public function getSubVersion()
    {
        return $this->container['sub_version'];
    }

    /**
     * Sets sub_version
     *
     * @param string|null $sub_version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the What's New section for the latest Rate release. Supported values: 1601, 1607, 1701, 1707, 2108, 2205
     *
     * @return self
     */
    public function setSubVersion($sub_version)
    {
        if (is_null($sub_version)) {
            throw new \InvalidArgumentException('non-nullable sub_version cannot be null');
        }
        if ((mb_strlen($sub_version) > 4)) {
            throw new \InvalidArgumentException('invalid length for $sub_version when calling RateRequestRequest., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($sub_version) < 4)) {
            throw new \InvalidArgumentException('invalid length for $sub_version when calling RateRequestRequest., must be bigger than or equal to 4.');
        }

        $this->container['sub_version'] = $sub_version;

        return $this;
    }

    /**
     * Gets transaction_reference
     *
     * @return \AntibodiesOnline\UpsApi\Rating\Model\RequestTransactionReference|null
     */
    public function getTransactionReference()
    {
        return $this->container['transaction_reference'];
    }

    /**
     * Sets transaction_reference
     *
     * @param \AntibodiesOnline\UpsApi\Rating\Model\RequestTransactionReference|null $transaction_reference transaction_reference
     *
     * @return self
     */
    public function setTransactionReference($transaction_reference)
    {
        if (is_null($transaction_reference)) {
            throw new \InvalidArgumentException('non-nullable transaction_reference cannot be null');
        }
        $this->container['transaction_reference'] = $transaction_reference;

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


