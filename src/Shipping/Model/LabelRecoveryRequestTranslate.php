<?php
/**
 * LabelRecoveryRequestTranslate
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
 * LabelRecoveryRequestTranslate Class Doc Comment
 *
 * @category Class
 * @description Translate container allows the user to specify the language he/she would like a specific portion of response to return.  The language is specified by the combination of language code and dialect code.  Valid combinations are: LanguageCode + DialectCode.  Either Translate container or Locale element can be present in a given request. Both can&#39;t be requested together in same request. Combinations:  eng GB &#x3D; Queen&#39;s English  Spa 97 &#x3D; Castilian Spanish  ita 97 &#x3D; Italian  fra 97 &#x3D; France French  fra CA &#x3D; Canadian French  deu 97 &#x3D; German  por 97 &#x3D; Portugal Portuguese  nld 97 &#x3D; Dutch  dan 97 &#x3D; Danish  fin 97 &#x3D; Finnish  swe 97 &#x3D; Swedish  eng CA &#x3D; Canadian English  Eng US &#x3D; US English  Default language is Queen&#39;s English   If the Ship from country or territory is Canada, the Language defaults to Canadian English.   If the ship from country or territory is US, the language defaults to US English.  If shipping from some other country or territory, the language defaults to Queens English.
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LabelRecoveryRequestTranslate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelRecoveryRequest_Translate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language_code' => 'string',
        'dialect_code' => 'string',
        'code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language_code' => null,
        'dialect_code' => null,
        'code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language_code' => false,
		'dialect_code' => false,
		'code' => false
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
        'language_code' => 'LanguageCode',
        'dialect_code' => 'DialectCode',
        'code' => 'Code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_code' => 'setLanguageCode',
        'dialect_code' => 'setDialectCode',
        'code' => 'setCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_code' => 'getLanguageCode',
        'dialect_code' => 'getDialectCode',
        'code' => 'getCode'
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
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('dialect_code', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
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

        if ($this->container['language_code'] === null) {
            $invalidProperties[] = "'language_code' can't be null";
        }
        if ((mb_strlen($this->container['language_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'language_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['language_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'language_code', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['dialect_code'] === null) {
            $invalidProperties[] = "'dialect_code' can't be null";
        }
        if ((mb_strlen($this->container['dialect_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'dialect_code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['dialect_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'dialect_code', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) > 2)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['code']) < 2)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 2.";
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
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code The Language code. The language codes are three letter language codes.  Supported languages are:  eng - English  spa - Spanish  ita - Italian fra - French  deu - German  por -Portuguese  nld  Dutch dan - Danish  fin - Finnish  swe  Swedish  nor  Norwegian
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }
        if ((mb_strlen($language_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $language_code when calling LabelRecoveryRequestTranslate., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($language_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $language_code when calling LabelRecoveryRequestTranslate., must be bigger than or equal to 2.');
        }

        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets dialect_code
     *
     * @return string
     */
    public function getDialectCode()
    {
        return $this->container['dialect_code'];
    }

    /**
     * Sets dialect_code
     *
     * @param string $dialect_code Valid dialect codes are:  CA - Canada GB - Great Britain US - United States 97  Not Applicable
     *
     * @return self
     */
    public function setDialectCode($dialect_code)
    {
        if (is_null($dialect_code)) {
            throw new \InvalidArgumentException('non-nullable dialect_code cannot be null');
        }
        if ((mb_strlen($dialect_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $dialect_code when calling LabelRecoveryRequestTranslate., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($dialect_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $dialect_code when calling LabelRecoveryRequestTranslate., must be bigger than or equal to 2.');
        }

        $this->container['dialect_code'] = $dialect_code;

        return $this;
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
     * @param string $code Used to specify what will be translated.  Valid code:  01 = label direction instructions and receipt
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        if ((mb_strlen($code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $code when calling LabelRecoveryRequestTranslate., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $code when calling LabelRecoveryRequestTranslate., must be bigger than or equal to 2.');
        }

        $this->container['code'] = $code;

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


