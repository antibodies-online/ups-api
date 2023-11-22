<?php
/**
 * ShipmentServiceOptionsRestrictedArticles
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
 * ShipmentServiceOptionsRestrictedArticles Class Doc Comment
 *
 * @category Class
 * @description Restricted Articles container.  Valid for UPS World Wide Express Freight shipments.
 * @package  AntibodiesOnline\UpsApi\Rating
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentServiceOptionsRestrictedArticles implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentServiceOptions_RestrictedArticles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alcoholic_beverages_indicator' => 'string',
        'diagnostic_specimens_indicator' => 'string',
        'perishables_indicator' => 'string',
        'plants_indicator' => 'string',
        'seeds_indicator' => 'string',
        'special_exceptions_indicator' => 'string',
        'tobacco_indicator' => 'string',
        'e_cigarettes_indicator' => 'string',
        'hemp_cbd_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alcoholic_beverages_indicator' => null,
        'diagnostic_specimens_indicator' => null,
        'perishables_indicator' => null,
        'plants_indicator' => null,
        'seeds_indicator' => null,
        'special_exceptions_indicator' => null,
        'tobacco_indicator' => null,
        'e_cigarettes_indicator' => null,
        'hemp_cbd_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'alcoholic_beverages_indicator' => false,
		'diagnostic_specimens_indicator' => false,
		'perishables_indicator' => false,
		'plants_indicator' => false,
		'seeds_indicator' => false,
		'special_exceptions_indicator' => false,
		'tobacco_indicator' => false,
		'e_cigarettes_indicator' => false,
		'hemp_cbd_indicator' => false
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
        'alcoholic_beverages_indicator' => 'AlcoholicBeveragesIndicator',
        'diagnostic_specimens_indicator' => 'DiagnosticSpecimensIndicator',
        'perishables_indicator' => 'PerishablesIndicator',
        'plants_indicator' => 'PlantsIndicator',
        'seeds_indicator' => 'SeedsIndicator',
        'special_exceptions_indicator' => 'SpecialExceptionsIndicator',
        'tobacco_indicator' => 'TobaccoIndicator',
        'e_cigarettes_indicator' => 'ECigarettesIndicator',
        'hemp_cbd_indicator' => 'HempCBDIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alcoholic_beverages_indicator' => 'setAlcoholicBeveragesIndicator',
        'diagnostic_specimens_indicator' => 'setDiagnosticSpecimensIndicator',
        'perishables_indicator' => 'setPerishablesIndicator',
        'plants_indicator' => 'setPlantsIndicator',
        'seeds_indicator' => 'setSeedsIndicator',
        'special_exceptions_indicator' => 'setSpecialExceptionsIndicator',
        'tobacco_indicator' => 'setTobaccoIndicator',
        'e_cigarettes_indicator' => 'setECigarettesIndicator',
        'hemp_cbd_indicator' => 'setHempCbdIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alcoholic_beverages_indicator' => 'getAlcoholicBeveragesIndicator',
        'diagnostic_specimens_indicator' => 'getDiagnosticSpecimensIndicator',
        'perishables_indicator' => 'getPerishablesIndicator',
        'plants_indicator' => 'getPlantsIndicator',
        'seeds_indicator' => 'getSeedsIndicator',
        'special_exceptions_indicator' => 'getSpecialExceptionsIndicator',
        'tobacco_indicator' => 'getTobaccoIndicator',
        'e_cigarettes_indicator' => 'getECigarettesIndicator',
        'hemp_cbd_indicator' => 'getHempCbdIndicator'
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
        $this->setIfExists('alcoholic_beverages_indicator', $data ?? [], null);
        $this->setIfExists('diagnostic_specimens_indicator', $data ?? [], null);
        $this->setIfExists('perishables_indicator', $data ?? [], null);
        $this->setIfExists('plants_indicator', $data ?? [], null);
        $this->setIfExists('seeds_indicator', $data ?? [], null);
        $this->setIfExists('special_exceptions_indicator', $data ?? [], null);
        $this->setIfExists('tobacco_indicator', $data ?? [], null);
        $this->setIfExists('e_cigarettes_indicator', $data ?? [], null);
        $this->setIfExists('hemp_cbd_indicator', $data ?? [], null);
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
     * Gets alcoholic_beverages_indicator
     *
     * @return string|null
     */
    public function getAlcoholicBeveragesIndicator()
    {
        return $this->container['alcoholic_beverages_indicator'];
    }

    /**
     * Sets alcoholic_beverages_indicator
     *
     * @param string|null $alcoholic_beverages_indicator This field is a flag to indicate if the package has Alcohol. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setAlcoholicBeveragesIndicator($alcoholic_beverages_indicator)
    {
        if (is_null($alcoholic_beverages_indicator)) {
            throw new \InvalidArgumentException('non-nullable alcoholic_beverages_indicator cannot be null');
        }


        $this->container['alcoholic_beverages_indicator'] = $alcoholic_beverages_indicator;

        return $this;
    }

    /**
     * Gets diagnostic_specimens_indicator
     *
     * @return string|null
     */
    public function getDiagnosticSpecimensIndicator()
    {
        return $this->container['diagnostic_specimens_indicator'];
    }

    /**
     * Sets diagnostic_specimens_indicator
     *
     * @param string|null $diagnostic_specimens_indicator This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments. Lane check will happen based on postal code/ city.
     *
     * @return self
     */
    public function setDiagnosticSpecimensIndicator($diagnostic_specimens_indicator)
    {
        if (is_null($diagnostic_specimens_indicator)) {
            throw new \InvalidArgumentException('non-nullable diagnostic_specimens_indicator cannot be null');
        }


        $this->container['diagnostic_specimens_indicator'] = $diagnostic_specimens_indicator;

        return $this;
    }

    /**
     * Gets perishables_indicator
     *
     * @return string|null
     */
    public function getPerishablesIndicator()
    {
        return $this->container['perishables_indicator'];
    }

    /**
     * Sets perishables_indicator
     *
     * @param string|null $perishables_indicator This field is a flag to indicate if the package has Perishables. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setPerishablesIndicator($perishables_indicator)
    {
        if (is_null($perishables_indicator)) {
            throw new \InvalidArgumentException('non-nullable perishables_indicator cannot be null');
        }


        $this->container['perishables_indicator'] = $perishables_indicator;

        return $this;
    }

    /**
     * Gets plants_indicator
     *
     * @return string|null
     */
    public function getPlantsIndicator()
    {
        return $this->container['plants_indicator'];
    }

    /**
     * Sets plants_indicator
     *
     * @param string|null $plants_indicator This field is a flag to indicate if the package has Plants. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setPlantsIndicator($plants_indicator)
    {
        if (is_null($plants_indicator)) {
            throw new \InvalidArgumentException('non-nullable plants_indicator cannot be null');
        }


        $this->container['plants_indicator'] = $plants_indicator;

        return $this;
    }

    /**
     * Gets seeds_indicator
     *
     * @return string|null
     */
    public function getSeedsIndicator()
    {
        return $this->container['seeds_indicator'];
    }

    /**
     * Sets seeds_indicator
     *
     * @param string|null $seeds_indicator This field is a flag to indicate if the package has Seeds. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setSeedsIndicator($seeds_indicator)
    {
        if (is_null($seeds_indicator)) {
            throw new \InvalidArgumentException('non-nullable seeds_indicator cannot be null');
        }


        $this->container['seeds_indicator'] = $seeds_indicator;

        return $this;
    }

    /**
     * Gets special_exceptions_indicator
     *
     * @return string|null
     */
    public function getSpecialExceptionsIndicator()
    {
        return $this->container['special_exceptions_indicator'];
    }

    /**
     * Sets special_exceptions_indicator
     *
     * @param string|null $special_exceptions_indicator This field is a flag to indicate if the package has Special Exceptions Restricted Materials. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setSpecialExceptionsIndicator($special_exceptions_indicator)
    {
        if (is_null($special_exceptions_indicator)) {
            throw new \InvalidArgumentException('non-nullable special_exceptions_indicator cannot be null');
        }


        $this->container['special_exceptions_indicator'] = $special_exceptions_indicator;

        return $this;
    }

    /**
     * Gets tobacco_indicator
     *
     * @return string|null
     */
    public function getTobaccoIndicator()
    {
        return $this->container['tobacco_indicator'];
    }

    /**
     * Sets tobacco_indicator
     *
     * @param string|null $tobacco_indicator This field is a flag to indicate if the package has Tobacco. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setTobaccoIndicator($tobacco_indicator)
    {
        if (is_null($tobacco_indicator)) {
            throw new \InvalidArgumentException('non-nullable tobacco_indicator cannot be null');
        }


        $this->container['tobacco_indicator'] = $tobacco_indicator;

        return $this;
    }

    /**
     * Gets e_cigarettes_indicator
     *
     * @return string|null
     */
    public function getECigarettesIndicator()
    {
        return $this->container['e_cigarettes_indicator'];
    }

    /**
     * Sets e_cigarettes_indicator
     *
     * @param string|null $e_cigarettes_indicator This field is a flag to indicate if the package has E-Cigarettes. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setECigarettesIndicator($e_cigarettes_indicator)
    {
        if (is_null($e_cigarettes_indicator)) {
            throw new \InvalidArgumentException('non-nullable e_cigarettes_indicator cannot be null');
        }


        $this->container['e_cigarettes_indicator'] = $e_cigarettes_indicator;

        return $this;
    }

    /**
     * Gets hemp_cbd_indicator
     *
     * @return string|null
     */
    public function getHempCbdIndicator()
    {
        return $this->container['hemp_cbd_indicator'];
    }

    /**
     * Sets hemp_cbd_indicator
     *
     * @param string|null $hemp_cbd_indicator This field is a flag to indicate if the package has Hemp/CBD. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return self
     */
    public function setHempCbdIndicator($hemp_cbd_indicator)
    {
        if (is_null($hemp_cbd_indicator)) {
            throw new \InvalidArgumentException('non-nullable hemp_cbd_indicator cannot be null');
        }


        $this->container['hemp_cbd_indicator'] = $hemp_cbd_indicator;

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

