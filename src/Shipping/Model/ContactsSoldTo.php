<?php
/**
 * ContactsSoldTo
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
 * ContactsSoldTo Class Doc Comment
 *
 * @category Class
 * @description SoldTo Container. The Sold To party&#39;s country code must be the same as the Ship To party&#39;s country code with the exception of Canada and satellite countries.  Applies to Invoice and NAFTA CO Forms. Required if Invoice or NAFTA CO (International Form) is requested.
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactsSoldTo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Contacts_SoldTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'attention_name' => 'string',
        'tax_identification_number' => 'string',
        'phone' => '\AntibodiesOnline\UpsApi\Shipping\Model\SoldToPhone',
        'option' => 'string',
        'address' => '\AntibodiesOnline\UpsApi\Shipping\Model\SoldToAddress',
        'e_mail_address' => 'string'
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
        'attention_name' => null,
        'tax_identification_number' => null,
        'phone' => null,
        'option' => null,
        'address' => null,
        'e_mail_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'attention_name' => false,
		'tax_identification_number' => false,
		'phone' => false,
		'option' => false,
		'address' => false,
		'e_mail_address' => false
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
        'attention_name' => 'AttentionName',
        'tax_identification_number' => 'TaxIdentificationNumber',
        'phone' => 'Phone',
        'option' => 'Option',
        'address' => 'Address',
        'e_mail_address' => 'EMailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'attention_name' => 'setAttentionName',
        'tax_identification_number' => 'setTaxIdentificationNumber',
        'phone' => 'setPhone',
        'option' => 'setOption',
        'address' => 'setAddress',
        'e_mail_address' => 'setEMailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'attention_name' => 'getAttentionName',
        'tax_identification_number' => 'getTaxIdentificationNumber',
        'phone' => 'getPhone',
        'option' => 'getOption',
        'address' => 'getAddress',
        'e_mail_address' => 'getEMailAddress'
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
        $this->setIfExists('attention_name', $data ?? [], null);
        $this->setIfExists('tax_identification_number', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('option', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('e_mail_address', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 35)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 35.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['attention_name'] === null) {
            $invalidProperties[] = "'attention_name' can't be null";
        }
        if ((mb_strlen($this->container['attention_name']) > 35)) {
            $invalidProperties[] = "invalid value for 'attention_name', the character length must be smaller than or equal to 35.";
        }

        if ((mb_strlen($this->container['attention_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'attention_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tax_identification_number']) && (mb_strlen($this->container['tax_identification_number']) > 15)) {
            $invalidProperties[] = "invalid value for 'tax_identification_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['tax_identification_number']) && (mb_strlen($this->container['tax_identification_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'tax_identification_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['option']) && (mb_strlen($this->container['option']) > 2)) {
            $invalidProperties[] = "invalid value for 'option', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['option']) && (mb_strlen($this->container['option']) < 2)) {
            $invalidProperties[] = "invalid value for 'option', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if (!is_null($this->container['e_mail_address']) && (mb_strlen($this->container['e_mail_address']) > 50)) {
            $invalidProperties[] = "invalid value for 'e_mail_address', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['e_mail_address']) && (mb_strlen($this->container['e_mail_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'e_mail_address', the character length must be bigger than or equal to 1.";
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Company Name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContactsSoldTo., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContactsSoldTo., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets attention_name
     *
     * @return string
     */
    public function getAttentionName()
    {
        return $this->container['attention_name'];
    }

    /**
     * Sets attention_name
     *
     * @param string $attention_name Sold to contact name.
     *
     * @return self
     */
    public function setAttentionName($attention_name)
    {
        if (is_null($attention_name)) {
            throw new \InvalidArgumentException('non-nullable attention_name cannot be null');
        }
        if ((mb_strlen($attention_name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $attention_name when calling ContactsSoldTo., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($attention_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $attention_name when calling ContactsSoldTo., must be bigger than or equal to 1.');
        }

        $this->container['attention_name'] = $attention_name;

        return $this;
    }

    /**
     * Gets tax_identification_number
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['tax_identification_number'];
    }

    /**
     * Sets tax_identification_number
     *
     * @param string|null $tax_identification_number SoldTo Tax Identification Number.
     *
     * @return self
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        if (is_null($tax_identification_number)) {
            throw new \InvalidArgumentException('non-nullable tax_identification_number cannot be null');
        }
        if ((mb_strlen($tax_identification_number) > 15)) {
            throw new \InvalidArgumentException('invalid length for $tax_identification_number when calling ContactsSoldTo., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($tax_identification_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tax_identification_number when calling ContactsSoldTo., must be bigger than or equal to 1.');
        }

        $this->container['tax_identification_number'] = $tax_identification_number;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\SoldToPhone|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\SoldToPhone|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets option
     *
     * @return string|null
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param string|null $option The text associated with the code will be printed in the sold to section of the NAFTA CO form.  The values indicate the following: 01 - Unknown.  Applies to NAFTA CO form. Possible Values are 01 and 02.
     *
     * @return self
     */
    public function setOption($option)
    {
        if (is_null($option)) {
            throw new \InvalidArgumentException('non-nullable option cannot be null');
        }
        if ((mb_strlen($option) > 2)) {
            throw new \InvalidArgumentException('invalid length for $option when calling ContactsSoldTo., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($option) < 2)) {
            throw new \InvalidArgumentException('invalid length for $option when calling ContactsSoldTo., must be bigger than or equal to 2.');
        }

        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\SoldToAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\SoldToAddress $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

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
     * @param string|null $e_mail_address SoldTo email address.
     *
     * @return self
     */
    public function setEMailAddress($e_mail_address)
    {
        if (is_null($e_mail_address)) {
            throw new \InvalidArgumentException('non-nullable e_mail_address cannot be null');
        }
        if ((mb_strlen($e_mail_address) > 50)) {
            throw new \InvalidArgumentException('invalid length for $e_mail_address when calling ContactsSoldTo., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($e_mail_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $e_mail_address when calling ContactsSoldTo., must be bigger than or equal to 1.');
        }

        $this->container['e_mail_address'] = $e_mail_address;

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


