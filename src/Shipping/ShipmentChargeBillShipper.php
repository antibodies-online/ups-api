<?php
/**
 * ShipmentChargeBillShipper
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
 * ShipmentChargeBillShipper Class Doc Comment
 *
 * @category Class
 * @description Container for the BillShipper billing option. The three payment methods that are available for the Bill Shipper billing option are alternate payment method, account number or credit card.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentChargeBillShipper implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentCharge_BillShipper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_number' => 'string',
        'credit_card' => '\AntibodiesOnline\UpsApi\Shipping\BillShipperCreditCard',
        'alternate_payment_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_number' => null,
        'credit_card' => null,
        'alternate_payment_method' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_number' => false,
		'credit_card' => false,
		'alternate_payment_method' => false
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
        'account_number' => 'AccountNumber',
        'credit_card' => 'CreditCard',
        'alternate_payment_method' => 'AlternatePaymentMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'credit_card' => 'setCreditCard',
        'alternate_payment_method' => 'setAlternatePaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'credit_card' => 'getCreditCard',
        'alternate_payment_method' => 'getAlternatePaymentMethod'
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
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('credit_card', $data ?? [], null);
        $this->setIfExists('alternate_payment_method', $data ?? [], null);
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

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 6)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) < 6)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['alternate_payment_method']) && (mb_strlen($this->container['alternate_payment_method']) > 2)) {
            $invalidProperties[] = "invalid value for 'alternate_payment_method', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['alternate_payment_method']) && (mb_strlen($this->container['alternate_payment_method']) < 2)) {
            $invalidProperties[] = "invalid value for 'alternate_payment_method', the character length must be bigger than or equal to 2.";
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
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number UPS account number.  Must be the same UPS account number as the one provided in Shipper/ShipperNumber.   Either this element or one of the sibling elements CreditCard or AlternatePaymentMethod must be provided, but all of them may not be provided.
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        if ((mb_strlen($account_number) > 6)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling ShipmentChargeBillShipper., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($account_number) < 6)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling ShipmentChargeBillShipper., must be bigger than or equal to 6.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\BillShipperCreditCard|null
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\BillShipperCreditCard|null $credit_card credit_card
     *
     * @return self
     */
    public function setCreditCard($credit_card)
    {
        if (is_null($credit_card)) {
            throw new \InvalidArgumentException('non-nullable credit_card cannot be null');
        }
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets alternate_payment_method
     *
     * @return string|null
     */
    public function getAlternatePaymentMethod()
    {
        return $this->container['alternate_payment_method'];
    }

    /**
     * Sets alternate_payment_method
     *
     * @param string|null $alternate_payment_method Alternate Payment Method.  Valid value: 01= PayPal  Only valid for forward shipments. It is not valid for Return or Import Control shipments.   This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.   PayPal 01: Is only valid for forward shipments. It is not valid for Return or Import Control shipments.   This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.
     *
     * @return self
     */
    public function setAlternatePaymentMethod($alternate_payment_method)
    {
        if (is_null($alternate_payment_method)) {
            throw new \InvalidArgumentException('non-nullable alternate_payment_method cannot be null');
        }
        if ((mb_strlen($alternate_payment_method) > 2)) {
            throw new \InvalidArgumentException('invalid length for $alternate_payment_method when calling ShipmentChargeBillShipper., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($alternate_payment_method) < 2)) {
            throw new \InvalidArgumentException('invalid length for $alternate_payment_method when calling ShipmentChargeBillShipper., must be bigger than or equal to 2.');
        }

        $this->container['alternate_payment_method'] = $alternate_payment_method;

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

