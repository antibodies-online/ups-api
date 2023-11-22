<?php
/**
 * InternationalFormsCN22Form
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
 * InternationalFormsCN22Form Class Doc Comment
 *
 * @category Class
 * @description Container for the CN22 form.  Required if the customer wants to use the UPS generated CN22.
 * @package  AntibodiesOnline\UpsApi\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InternationalFormsCN22Form implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InternationalForms_CN22Form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_size' => 'string',
        'prints_per_page' => 'string',
        'label_print_type' => 'string',
        'cn22_type' => 'string',
        'cn22_other_description' => 'string',
        'fold_here_text' => 'string',
        'cn22_content' => '\AntibodiesOnline\UpsApi\Shipping\Model\CN22FormCN22Content[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_size' => null,
        'prints_per_page' => null,
        'label_print_type' => null,
        'cn22_type' => null,
        'cn22_other_description' => null,
        'fold_here_text' => null,
        'cn22_content' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label_size' => false,
		'prints_per_page' => false,
		'label_print_type' => false,
		'cn22_type' => false,
		'cn22_other_description' => false,
		'fold_here_text' => false,
		'cn22_content' => false
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
        'label_size' => 'LabelSize',
        'prints_per_page' => 'PrintsPerPage',
        'label_print_type' => 'LabelPrintType',
        'cn22_type' => 'CN22Type',
        'cn22_other_description' => 'CN22OtherDescription',
        'fold_here_text' => 'FoldHereText',
        'cn22_content' => 'CN22Content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_size' => 'setLabelSize',
        'prints_per_page' => 'setPrintsPerPage',
        'label_print_type' => 'setLabelPrintType',
        'cn22_type' => 'setCn22Type',
        'cn22_other_description' => 'setCn22OtherDescription',
        'fold_here_text' => 'setFoldHereText',
        'cn22_content' => 'setCn22Content'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_size' => 'getLabelSize',
        'prints_per_page' => 'getPrintsPerPage',
        'label_print_type' => 'getLabelPrintType',
        'cn22_type' => 'getCn22Type',
        'cn22_other_description' => 'getCn22OtherDescription',
        'fold_here_text' => 'getFoldHereText',
        'cn22_content' => 'getCn22Content'
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
        $this->setIfExists('label_size', $data ?? [], null);
        $this->setIfExists('prints_per_page', $data ?? [], null);
        $this->setIfExists('label_print_type', $data ?? [], null);
        $this->setIfExists('cn22_type', $data ?? [], null);
        $this->setIfExists('cn22_other_description', $data ?? [], null);
        $this->setIfExists('fold_here_text', $data ?? [], null);
        $this->setIfExists('cn22_content', $data ?? [], null);
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

        if ($this->container['label_size'] === null) {
            $invalidProperties[] = "'label_size' can't be null";
        }
        if ((mb_strlen($this->container['label_size']) > 2)) {
            $invalidProperties[] = "invalid value for 'label_size', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['label_size']) < 2)) {
            $invalidProperties[] = "invalid value for 'label_size', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['prints_per_page'] === null) {
            $invalidProperties[] = "'prints_per_page' can't be null";
        }
        if ((mb_strlen($this->container['prints_per_page']) > 1)) {
            $invalidProperties[] = "invalid value for 'prints_per_page', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['prints_per_page']) < 1)) {
            $invalidProperties[] = "invalid value for 'prints_per_page', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['label_print_type'] === null) {
            $invalidProperties[] = "'label_print_type' can't be null";
        }
        if ((mb_strlen($this->container['label_print_type']) > 4)) {
            $invalidProperties[] = "invalid value for 'label_print_type', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['label_print_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'label_print_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['cn22_type'] === null) {
            $invalidProperties[] = "'cn22_type' can't be null";
        }
        if ((mb_strlen($this->container['cn22_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'cn22_type', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['cn22_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'cn22_type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['cn22_other_description']) && (mb_strlen($this->container['cn22_other_description']) > 20)) {
            $invalidProperties[] = "invalid value for 'cn22_other_description', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['cn22_other_description']) && (mb_strlen($this->container['cn22_other_description']) < 20)) {
            $invalidProperties[] = "invalid value for 'cn22_other_description', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['fold_here_text']) && (mb_strlen($this->container['fold_here_text']) > 35)) {
            $invalidProperties[] = "invalid value for 'fold_here_text', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['fold_here_text']) && (mb_strlen($this->container['fold_here_text']) < 35)) {
            $invalidProperties[] = "invalid value for 'fold_here_text', the character length must be bigger than or equal to 35.";
        }

        if ($this->container['cn22_content'] === null) {
            $invalidProperties[] = "'cn22_content' can't be null";
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
     * Gets label_size
     *
     * @return string
     */
    public function getLabelSize()
    {
        return $this->container['label_size'];
    }

    /**
     * Sets label_size
     *
     * @param string $label_size Provide the valid values:  6 = 4X6 1 = 8.5X11   Required if the CN22 form container is present.
     *
     * @return self
     */
    public function setLabelSize($label_size)
    {
        if (is_null($label_size)) {
            throw new \InvalidArgumentException('non-nullable label_size cannot be null');
        }
        if ((mb_strlen($label_size) > 2)) {
            throw new \InvalidArgumentException('invalid length for $label_size when calling InternationalFormsCN22Form., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($label_size) < 2)) {
            throw new \InvalidArgumentException('invalid length for $label_size when calling InternationalFormsCN22Form., must be bigger than or equal to 2.');
        }

        $this->container['label_size'] = $label_size;

        return $this;
    }

    /**
     * Gets prints_per_page
     *
     * @return string
     */
    public function getPrintsPerPage()
    {
        return $this->container['prints_per_page'];
    }

    /**
     * Sets prints_per_page
     *
     * @param string $prints_per_page Number of label per page. Currently 1 per page is supported.  Required if the CN22 form container is present.
     *
     * @return self
     */
    public function setPrintsPerPage($prints_per_page)
    {
        if (is_null($prints_per_page)) {
            throw new \InvalidArgumentException('non-nullable prints_per_page cannot be null');
        }
        if ((mb_strlen($prints_per_page) > 1)) {
            throw new \InvalidArgumentException('invalid length for $prints_per_page when calling InternationalFormsCN22Form., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($prints_per_page) < 1)) {
            throw new \InvalidArgumentException('invalid length for $prints_per_page when calling InternationalFormsCN22Form., must be bigger than or equal to 1.');
        }

        $this->container['prints_per_page'] = $prints_per_page;

        return $this;
    }

    /**
     * Gets label_print_type
     *
     * @return string
     */
    public function getLabelPrintType()
    {
        return $this->container['label_print_type'];
    }

    /**
     * Sets label_print_type
     *
     * @param string $label_print_type Valid Values are pdf, png, gif, zpl, star, epl2 and spl.   Required if the CN22 form container is present.
     *
     * @return self
     */
    public function setLabelPrintType($label_print_type)
    {
        if (is_null($label_print_type)) {
            throw new \InvalidArgumentException('non-nullable label_print_type cannot be null');
        }
        if ((mb_strlen($label_print_type) > 4)) {
            throw new \InvalidArgumentException('invalid length for $label_print_type when calling InternationalFormsCN22Form., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($label_print_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $label_print_type when calling InternationalFormsCN22Form., must be bigger than or equal to 1.');
        }

        $this->container['label_print_type'] = $label_print_type;

        return $this;
    }

    /**
     * Gets cn22_type
     *
     * @return string
     */
    public function getCn22Type()
    {
        return $this->container['cn22_type'];
    }

    /**
     * Sets cn22_type
     *
     * @param string $cn22_type Valid values:  1 = GIFT 2 = DOCUMENTS 3 = COMMERCIAL SAMPLE 4 = OTHER  Required if the CN22 form container is present.
     *
     * @return self
     */
    public function setCn22Type($cn22_type)
    {
        if (is_null($cn22_type)) {
            throw new \InvalidArgumentException('non-nullable cn22_type cannot be null');
        }
        if ((mb_strlen($cn22_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cn22_type when calling InternationalFormsCN22Form., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($cn22_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cn22_type when calling InternationalFormsCN22Form., must be bigger than or equal to 1.');
        }

        $this->container['cn22_type'] = $cn22_type;

        return $this;
    }

    /**
     * Gets cn22_other_description
     *
     * @return string|null
     */
    public function getCn22OtherDescription()
    {
        return $this->container['cn22_other_description'];
    }

    /**
     * Sets cn22_other_description
     *
     * @param string|null $cn22_other_description Required if CN22Type is OTHER.  Required if the CN22 form container is present.
     *
     * @return self
     */
    public function setCn22OtherDescription($cn22_other_description)
    {
        if (is_null($cn22_other_description)) {
            throw new \InvalidArgumentException('non-nullable cn22_other_description cannot be null');
        }
        if ((mb_strlen($cn22_other_description) > 20)) {
            throw new \InvalidArgumentException('invalid length for $cn22_other_description when calling InternationalFormsCN22Form., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($cn22_other_description) < 20)) {
            throw new \InvalidArgumentException('invalid length for $cn22_other_description when calling InternationalFormsCN22Form., must be bigger than or equal to 20.');
        }

        $this->container['cn22_other_description'] = $cn22_other_description;

        return $this;
    }

    /**
     * Gets fold_here_text
     *
     * @return string|null
     */
    public function getFoldHereText()
    {
        return $this->container['fold_here_text'];
    }

    /**
     * Sets fold_here_text
     *
     * @param string|null $fold_here_text String will replace default \"Fold Here\" text displayed on the label.
     *
     * @return self
     */
    public function setFoldHereText($fold_here_text)
    {
        if (is_null($fold_here_text)) {
            throw new \InvalidArgumentException('non-nullable fold_here_text cannot be null');
        }
        if ((mb_strlen($fold_here_text) > 35)) {
            throw new \InvalidArgumentException('invalid length for $fold_here_text when calling InternationalFormsCN22Form., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($fold_here_text) < 35)) {
            throw new \InvalidArgumentException('invalid length for $fold_here_text when calling InternationalFormsCN22Form., must be bigger than or equal to 35.');
        }

        $this->container['fold_here_text'] = $fold_here_text;

        return $this;
    }

    /**
     * Gets cn22_content
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\Model\CN22FormCN22Content[]
     */
    public function getCn22Content()
    {
        return $this->container['cn22_content'];
    }

    /**
     * Sets cn22_content
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\Model\CN22FormCN22Content[] $cn22_content cn22_content
     *
     * @return self
     */
    public function setCn22Content($cn22_content)
    {
        if (is_null($cn22_content)) {
            throw new \InvalidArgumentException('non-nullable cn22_content cannot be null');
        }


        $this->container['cn22_content'] = $cn22_content;

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

