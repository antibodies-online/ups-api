<?php
/**
 * NotificationEMail
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
 * NotificationEMail Class Doc Comment
 *
 * @category Class
 * @description Container for the e-mail message.
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationEMail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Notification_EMail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'e_mail_address' => 'string[]',
        'undeliverable_e_mail_address' => 'string',
        'from_e_mail_address' => 'string',
        'from_name' => 'string',
        'memo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'e_mail_address' => null,
        'undeliverable_e_mail_address' => null,
        'from_e_mail_address' => null,
        'from_name' => null,
        'memo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'e_mail_address' => false,
		'undeliverable_e_mail_address' => false,
		'from_e_mail_address' => false,
		'from_name' => false,
		'memo' => false
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
        'e_mail_address' => 'EMailAddress',
        'undeliverable_e_mail_address' => 'UndeliverableEMailAddress',
        'from_e_mail_address' => 'FromEMailAddress',
        'from_name' => 'FromName',
        'memo' => 'Memo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'e_mail_address' => 'setEMailAddress',
        'undeliverable_e_mail_address' => 'setUndeliverableEMailAddress',
        'from_e_mail_address' => 'setFromEMailAddress',
        'from_name' => 'setFromName',
        'memo' => 'setMemo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'e_mail_address' => 'getEMailAddress',
        'undeliverable_e_mail_address' => 'getUndeliverableEMailAddress',
        'from_e_mail_address' => 'getFromEMailAddress',
        'from_name' => 'getFromName',
        'memo' => 'getMemo'
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
        $this->setIfExists('e_mail_address', $data ?? [], null);
        $this->setIfExists('undeliverable_e_mail_address', $data ?? [], null);
        $this->setIfExists('from_e_mail_address', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('memo', $data ?? [], null);
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

        if ($this->container['e_mail_address'] === null) {
            $invalidProperties[] = "'e_mail_address' can't be null";
        }
        if (!is_null($this->container['undeliverable_e_mail_address']) && (mb_strlen($this->container['undeliverable_e_mail_address']) > 50)) {
            $invalidProperties[] = "invalid value for 'undeliverable_e_mail_address', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['undeliverable_e_mail_address']) && (mb_strlen($this->container['undeliverable_e_mail_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'undeliverable_e_mail_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['from_e_mail_address']) && (mb_strlen($this->container['from_e_mail_address']) > 50)) {
            $invalidProperties[] = "invalid value for 'from_e_mail_address', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['from_e_mail_address']) && (mb_strlen($this->container['from_e_mail_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'from_e_mail_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['from_name']) && (mb_strlen($this->container['from_name']) > 35)) {
            $invalidProperties[] = "invalid value for 'from_name', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['from_name']) && (mb_strlen($this->container['from_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'from_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 150)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 1)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 1.";
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
     * Gets e_mail_address
     *
     * @return string[]
     */
    public function getEMailAddress()
    {
        return $this->container['e_mail_address'];
    }

    /**
     * Sets e_mail_address
     *
     * @param string[] $e_mail_address The destination email address of the receiver returns notification email.
     *
     * @return self
     */
    public function setEMailAddress($e_mail_address)
    {
        if (is_null($e_mail_address)) {
            throw new \InvalidArgumentException('non-nullable e_mail_address cannot be null');
        }


        $this->container['e_mail_address'] = $e_mail_address;

        return $this;
    }

    /**
     * Gets undeliverable_e_mail_address
     *
     * @return string|null
     */
    public function getUndeliverableEMailAddress()
    {
        return $this->container['undeliverable_e_mail_address'];
    }

    /**
     * Sets undeliverable_e_mail_address
     *
     * @param string|null $undeliverable_e_mail_address The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable.  Defaults to FromEMailAddress. Only allowed at the first package.
     *
     * @return self
     */
    public function setUndeliverableEMailAddress($undeliverable_e_mail_address)
    {
        if (is_null($undeliverable_e_mail_address)) {
            throw new \InvalidArgumentException('non-nullable undeliverable_e_mail_address cannot be null');
        }
        if ((mb_strlen($undeliverable_e_mail_address) > 50)) {
            throw new \InvalidArgumentException('invalid length for $undeliverable_e_mail_address when calling NotificationEMail., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($undeliverable_e_mail_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $undeliverable_e_mail_address when calling NotificationEMail., must be bigger than or equal to 1.');
        }

        $this->container['undeliverable_e_mail_address'] = $undeliverable_e_mail_address;

        return $this;
    }

    /**
     * Gets from_e_mail_address
     *
     * @return string|null
     */
    public function getFromEMailAddress()
    {
        return $this->container['from_e_mail_address'];
    }

    /**
     * Sets from_e_mail_address
     *
     * @param string|null $from_e_mail_address The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The \"From\" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
     *
     * @return self
     */
    public function setFromEMailAddress($from_e_mail_address)
    {
        if (is_null($from_e_mail_address)) {
            throw new \InvalidArgumentException('non-nullable from_e_mail_address cannot be null');
        }
        if ((mb_strlen($from_e_mail_address) > 50)) {
            throw new \InvalidArgumentException('invalid length for $from_e_mail_address when calling NotificationEMail., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($from_e_mail_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $from_e_mail_address when calling NotificationEMail., must be bigger than or equal to 1.');
        }

        $this->container['from_e_mail_address'] = $from_e_mail_address;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string|null $from_name The name the receiver return notification will appear to be from.  Defaults to the Shipper Name. Only allowed at the first package.
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        if (is_null($from_name)) {
            throw new \InvalidArgumentException('non-nullable from_name cannot be null');
        }
        if ((mb_strlen($from_name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $from_name when calling NotificationEMail., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($from_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $from_name when calling NotificationEMail., must be bigger than or equal to 1.');
        }

        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo User defined text that will be included in the email.  Only allowed at the first package.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (is_null($memo)) {
            throw new \InvalidArgumentException('non-nullable memo cannot be null');
        }
        if ((mb_strlen($memo) > 150)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling NotificationEMail., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($memo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling NotificationEMail., must be bigger than or equal to 1.');
        }

        $this->container['memo'] = $memo;

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

