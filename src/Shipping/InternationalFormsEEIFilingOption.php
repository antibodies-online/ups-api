<?php
/**
 * InternationalFormsEEIFilingOption
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
 * InternationalFormsEEIFilingOption Class Doc Comment
 *
 * @category Class
 * @description EEI Filing option.  Applicable for EEI form and is required.
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InternationalFormsEEIFilingOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InternationalForms_EEIFilingOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'e_mail_address' => 'string',
        'description' => 'string',
        'ups_filed' => '\AntibodiesOnline\UpsApi\Shipping\EEIFilingOptionUPSFiled',
        'shipper_filed' => '\AntibodiesOnline\UpsApi\Shipping\EEIFilingOptionShipperFiled'
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
        'e_mail_address' => null,
        'description' => null,
        'ups_filed' => null,
        'shipper_filed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'e_mail_address' => false,
		'description' => false,
		'ups_filed' => false,
		'shipper_filed' => false
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
        'e_mail_address' => 'EMailAddress',
        'description' => 'Description',
        'ups_filed' => 'UPSFiled',
        'shipper_filed' => 'ShipperFiled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'e_mail_address' => 'setEMailAddress',
        'description' => 'setDescription',
        'ups_filed' => 'setUpsFiled',
        'shipper_filed' => 'setShipperFiled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'e_mail_address' => 'getEMailAddress',
        'description' => 'getDescription',
        'ups_filed' => 'getUpsFiled',
        'shipper_filed' => 'getShipperFiled'
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
        $this->setIfExists('e_mail_address', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('ups_filed', $data ?? [], null);
        $this->setIfExists('shipper_filed', $data ?? [], null);
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
        if ((mb_strlen($this->container['code']) > 1)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['code']) < 1)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['e_mail_address']) && (mb_strlen($this->container['e_mail_address']) > 50)) {
            $invalidProperties[] = "invalid value for 'e_mail_address', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['e_mail_address']) && (mb_strlen($this->container['e_mail_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'e_mail_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 20)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
     * @param string $code Required for EEI Form.  Applicable for EEI form. Valid values:  1 - Shipper filed, 2 - AES Direct,  3 - UPS filed.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        if ((mb_strlen($code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $code when calling InternationalFormsEEIFilingOption., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $code when calling InternationalFormsEEIFilingOption., must be bigger than or equal to 1.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets e_mail_address
     *
     * @return string|null
     */
    public function getEMailAddress()
    {
        return $this->container['e_mail_address'];
    }

    /**
     * Sets e_mail_address
     *
     * @param string|null $e_mail_address Email Address where the notification is sent. Valid for UPS filed (option 3), Shipper filed (option 1- A , 1-C)  Applicable for EEI form.
     *
     * @return self
     */
    public function setEMailAddress($e_mail_address)
    {
        if (is_null($e_mail_address)) {
            throw new \InvalidArgumentException('non-nullable e_mail_address cannot be null');
        }
        if ((mb_strlen($e_mail_address) > 50)) {
            throw new \InvalidArgumentException('invalid length for $e_mail_address when calling InternationalFormsEEIFilingOption., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($e_mail_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $e_mail_address when calling InternationalFormsEEIFilingOption., must be bigger than or equal to 1.');
        }

        $this->container['e_mail_address'] = $e_mail_address;

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
     * @param string|null $description Optional Description of Filing Code.  Applicable for EEI form.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 20)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InternationalFormsEEIFilingOption., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InternationalFormsEEIFilingOption., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ups_filed
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\EEIFilingOptionUPSFiled|null
     */
    public function getUpsFiled()
    {
        return $this->container['ups_filed'];
    }

    /**
     * Sets ups_filed
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\EEIFilingOptionUPSFiled|null $ups_filed ups_filed
     *
     * @return self
     */
    public function setUpsFiled($ups_filed)
    {
        if (is_null($ups_filed)) {
            throw new \InvalidArgumentException('non-nullable ups_filed cannot be null');
        }
        $this->container['ups_filed'] = $ups_filed;

        return $this;
    }

    /**
     * Gets shipper_filed
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\EEIFilingOptionShipperFiled|null
     */
    public function getShipperFiled()
    {
        return $this->container['shipper_filed'];
    }

    /**
     * Sets shipper_filed
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\EEIFilingOptionShipperFiled|null $shipper_filed shipper_filed
     *
     * @return self
     */
    public function setShipperFiled($shipper_filed)
    {
        if (is_null($shipper_filed)) {
            throw new \InvalidArgumentException('non-nullable shipper_filed cannot be null');
        }
        $this->container['shipper_filed'] = $shipper_filed;

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


