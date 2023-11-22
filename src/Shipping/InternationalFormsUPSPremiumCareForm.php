<?php
/**
 * InternationalFormsUPSPremiumCareForm
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
 * InternationalFormsUPSPremiumCareForm Class Doc Comment
 *
 * @category Class
 * @description UPS Premium Care Form is required if UPS Premium Care Indicator is present on a package.  Valid only for Canada to Canada movements.
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InternationalFormsUPSPremiumCareForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InternationalForms_UPSPremiumCareForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_date' => 'string',
        'page_size' => 'string',
        'print_type' => 'string',
        'num_of_copies' => 'string',
        'language_for_ups_premium_care' => '\AntibodiesOnline\UpsApi\Shipping\UPSPremiumCareFormLanguageForUPSPremiumCare'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_date' => null,
        'page_size' => null,
        'print_type' => null,
        'num_of_copies' => null,
        'language_for_ups_premium_care' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipment_date' => false,
		'page_size' => false,
		'print_type' => false,
		'num_of_copies' => false,
		'language_for_ups_premium_care' => false
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
        'shipment_date' => 'ShipmentDate',
        'page_size' => 'PageSize',
        'print_type' => 'PrintType',
        'num_of_copies' => 'NumOfCopies',
        'language_for_ups_premium_care' => 'LanguageForUPSPremiumCare'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_date' => 'setShipmentDate',
        'page_size' => 'setPageSize',
        'print_type' => 'setPrintType',
        'num_of_copies' => 'setNumOfCopies',
        'language_for_ups_premium_care' => 'setLanguageForUpsPremiumCare'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_date' => 'getShipmentDate',
        'page_size' => 'getPageSize',
        'print_type' => 'getPrintType',
        'num_of_copies' => 'getNumOfCopies',
        'language_for_ups_premium_care' => 'getLanguageForUpsPremiumCare'
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
        $this->setIfExists('shipment_date', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('print_type', $data ?? [], null);
        $this->setIfExists('num_of_copies', $data ?? [], null);
        $this->setIfExists('language_for_ups_premium_care', $data ?? [], null);
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

        if ($this->container['shipment_date'] === null) {
            $invalidProperties[] = "'shipment_date' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ((mb_strlen($this->container['page_size']) > 2)) {
            $invalidProperties[] = "invalid value for 'page_size', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['page_size']) < 2)) {
            $invalidProperties[] = "invalid value for 'page_size', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['print_type'] === null) {
            $invalidProperties[] = "'print_type' can't be null";
        }
        if ((mb_strlen($this->container['print_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'print_type', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['print_type']) < 2)) {
            $invalidProperties[] = "invalid value for 'print_type', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['num_of_copies'] === null) {
            $invalidProperties[] = "'num_of_copies' can't be null";
        }
        if ((mb_strlen($this->container['num_of_copies']) > 2)) {
            $invalidProperties[] = "invalid value for 'num_of_copies', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['num_of_copies']) < 2)) {
            $invalidProperties[] = "invalid value for 'num_of_copies', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['language_for_ups_premium_care'] === null) {
            $invalidProperties[] = "'language_for_ups_premium_care' can't be null";
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
     * Gets shipment_date
     *
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param string $shipment_date Shipment Date associated with UPS Premium Care Shipment.   Valid Format: yyyyMMdd
     *
     * @return self
     */
    public function setShipmentDate($shipment_date)
    {
        if (is_null($shipment_date)) {
            throw new \InvalidArgumentException('non-nullable shipment_date cannot be null');
        }


        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param string $page_size Size of UPS Premium Care Form.  Valid values:  01 = A4 Size 02 = Letter Size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }
        if ((mb_strlen($page_size) > 2)) {
            throw new \InvalidArgumentException('invalid length for $page_size when calling InternationalFormsUPSPremiumCareForm., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($page_size) < 2)) {
            throw new \InvalidArgumentException('invalid length for $page_size when calling InternationalFormsUPSPremiumCareForm., must be bigger than or equal to 2.');
        }

        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets print_type
     *
     * @return string
     */
    public function getPrintType()
    {
        return $this->container['print_type'];
    }

    /**
     * Sets print_type
     *
     * @param string $print_type Format of UPS Premium Care Form.  Valid values:  01 = PNG 02 = PDF
     *
     * @return self
     */
    public function setPrintType($print_type)
    {
        if (is_null($print_type)) {
            throw new \InvalidArgumentException('non-nullable print_type cannot be null');
        }
        if ((mb_strlen($print_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $print_type when calling InternationalFormsUPSPremiumCareForm., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($print_type) < 2)) {
            throw new \InvalidArgumentException('invalid length for $print_type when calling InternationalFormsUPSPremiumCareForm., must be bigger than or equal to 2.');
        }

        $this->container['print_type'] = $print_type;

        return $this;
    }

    /**
     * Gets num_of_copies
     *
     * @return string
     */
    public function getNumOfCopies()
    {
        return $this->container['num_of_copies'];
    }

    /**
     * Sets num_of_copies
     *
     * @param string $num_of_copies Number of Copies of UPS Premium Care Form.  Valid value is 02.
     *
     * @return self
     */
    public function setNumOfCopies($num_of_copies)
    {
        if (is_null($num_of_copies)) {
            throw new \InvalidArgumentException('non-nullable num_of_copies cannot be null');
        }
        if ((mb_strlen($num_of_copies) > 2)) {
            throw new \InvalidArgumentException('invalid length for $num_of_copies when calling InternationalFormsUPSPremiumCareForm., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($num_of_copies) < 2)) {
            throw new \InvalidArgumentException('invalid length for $num_of_copies when calling InternationalFormsUPSPremiumCareForm., must be bigger than or equal to 2.');
        }

        $this->container['num_of_copies'] = $num_of_copies;

        return $this;
    }

    /**
     * Gets language_for_ups_premium_care
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\UPSPremiumCareFormLanguageForUPSPremiumCare
     */
    public function getLanguageForUpsPremiumCare()
    {
        return $this->container['language_for_ups_premium_care'];
    }

    /**
     * Sets language_for_ups_premium_care
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\UPSPremiumCareFormLanguageForUPSPremiumCare $language_for_ups_premium_care language_for_ups_premium_care
     *
     * @return self
     */
    public function setLanguageForUpsPremiumCare($language_for_ups_premium_care)
    {
        if (is_null($language_for_ups_premium_care)) {
            throw new \InvalidArgumentException('non-nullable language_for_ups_premium_care cannot be null');
        }
        $this->container['language_for_ups_premium_care'] = $language_for_ups_premium_care;

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


