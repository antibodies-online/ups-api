<?php
/**
 * ShipmentDGSignatoryInfo
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
 * ShipmentDGSignatoryInfo Class Doc Comment
 *
 * @category Class
 * @description DGSignatoryInfo Container  DGPaperImage will be returned if DGSignatoryInfo container present
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentDGSignatoryInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment_DGSignatoryInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'title' => 'string',
        'place' => 'string',
        'date' => 'string',
        'shipper_declaration' => 'string',
        'upload_only_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'title' => null,
        'place' => null,
        'date' => null,
        'shipper_declaration' => null,
        'upload_only_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'title' => false,
		'place' => false,
		'date' => false,
		'shipper_declaration' => false,
		'upload_only_indicator' => false
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
        'name' => 'Name',
        'title' => 'Title',
        'place' => 'Place',
        'date' => 'Date',
        'shipper_declaration' => 'ShipperDeclaration',
        'upload_only_indicator' => 'UploadOnlyIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'title' => 'setTitle',
        'place' => 'setPlace',
        'date' => 'setDate',
        'shipper_declaration' => 'setShipperDeclaration',
        'upload_only_indicator' => 'setUploadOnlyIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'title' => 'getTitle',
        'place' => 'getPlace',
        'date' => 'getDate',
        'shipper_declaration' => 'getShipperDeclaration',
        'upload_only_indicator' => 'getUploadOnlyIndicator'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('place', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('shipper_declaration', $data ?? [], null);
        $this->setIfExists('upload_only_indicator', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 35)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 35)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 35.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 35)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 35)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 35.";
        }

        if (!is_null($this->container['place']) && (mb_strlen($this->container['place']) > 35)) {
            $invalidProperties[] = "invalid value for 'place', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['place']) && (mb_strlen($this->container['place']) < 35)) {
            $invalidProperties[] = "invalid value for 'place', the character length must be bigger than or equal to 35.";
        }

        if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) > 8)) {
            $invalidProperties[] = "invalid value for 'date', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) < 8)) {
            $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['shipper_declaration']) && (mb_strlen($this->container['shipper_declaration']) > 2)) {
            $invalidProperties[] = "invalid value for 'shipper_declaration', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['shipper_declaration']) && (mb_strlen($this->container['shipper_declaration']) < 2)) {
            $invalidProperties[] = "invalid value for 'shipper_declaration', the character length must be bigger than or equal to 2.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the person signing the declaration.   Note: The name of person or department he/she is employed with, are both acceptable.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ShipmentDGSignatoryInfo., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($name) < 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ShipmentDGSignatoryInfo., must be bigger than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the person signing the declaration. Note: The title of the person or department he/she is employed with, are both acceptable.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 35)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ShipmentDGSignatoryInfo., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($title) < 35)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ShipmentDGSignatoryInfo., must be bigger than or equal to 35.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets place
     *
     * @return string|null
     */
    public function getPlace()
    {
        return $this->container['place'];
    }

    /**
     * Sets place
     *
     * @param string|null $place The city of the Signatory.
     *
     * @return self
     */
    public function setPlace($place)
    {
        if (is_null($place)) {
            throw new \InvalidArgumentException('non-nullable place cannot be null');
        }
        if ((mb_strlen($place) > 35)) {
            throw new \InvalidArgumentException('invalid length for $place when calling ShipmentDGSignatoryInfo., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($place) < 35)) {
            throw new \InvalidArgumentException('invalid length for $place when calling ShipmentDGSignatoryInfo., must be bigger than or equal to 35.');
        }

        $this->container['place'] = $place;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date Date of signing the declaration form.  Valid format is YYYYMMDD.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        if ((mb_strlen($date) > 8)) {
            throw new \InvalidArgumentException('invalid length for $date when calling ShipmentDGSignatoryInfo., must be smaller than or equal to 8.');
        }
        if ((mb_strlen($date) < 8)) {
            throw new \InvalidArgumentException('invalid length for $date when calling ShipmentDGSignatoryInfo., must be bigger than or equal to 8.');
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets shipper_declaration
     *
     * @return string|null
     */
    public function getShipperDeclaration()
    {
        return $this->container['shipper_declaration'];
    }

    /**
     * Sets shipper_declaration
     *
     * @param string|null $shipper_declaration Valid values: 01 = Shipment level 02 = Package level                                              Valid only for the Shipper Declaration paper. If missing or invalid DGPaperImage will be returned at package level.
     *
     * @return self
     */
    public function setShipperDeclaration($shipper_declaration)
    {
        if (is_null($shipper_declaration)) {
            throw new \InvalidArgumentException('non-nullable shipper_declaration cannot be null');
        }
        if ((mb_strlen($shipper_declaration) > 2)) {
            throw new \InvalidArgumentException('invalid length for $shipper_declaration when calling ShipmentDGSignatoryInfo., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($shipper_declaration) < 2)) {
            throw new \InvalidArgumentException('invalid length for $shipper_declaration when calling ShipmentDGSignatoryInfo., must be bigger than or equal to 2.');
        }

        $this->container['shipper_declaration'] = $shipper_declaration;

        return $this;
    }

    /**
     * Gets upload_only_indicator
     *
     * @return string|null
     */
    public function getUploadOnlyIndicator()
    {
        return $this->container['upload_only_indicator'];
    }

    /**
     * Sets upload_only_indicator
     *
     * @param string|null $upload_only_indicator Dangerous Goods Paper Upload Only Indicator. DG Paper will not be returned in response if UploadOnlyIndicator present.
     *
     * @return self
     */
    public function setUploadOnlyIndicator($upload_only_indicator)
    {
        if (is_null($upload_only_indicator)) {
            throw new \InvalidArgumentException('non-nullable upload_only_indicator cannot be null');
        }


        $this->container['upload_only_indicator'] = $upload_only_indicator;

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


