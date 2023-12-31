<?php
/**
 * PushToImageRepositoryRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AntibodiesOnline\UpsApi\Paperless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Paperless Document
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

namespace AntibodiesOnline\UpsApi\Paperless\Model;

use \ArrayAccess;
use \AntibodiesOnline\UpsApi\Paperless\ObjectSerializer;

/**
 * PushToImageRepositoryRequest Class Doc Comment
 *
 * @category Class
 * @description Paperless Document API request container for push to Image Repository.  N/A
 * @package  AntibodiesOnline\UpsApi\Paperless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PushToImageRepositoryRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PushToImageRepositoryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request' => '\AntibodiesOnline\UpsApi\Paperless\Model\PushToImageRepositoryRequestRequest',
        'shipper_number' => 'string',
        'forms_history_document_id' => '\AntibodiesOnline\UpsApi\Paperless\Model\PushToImageRepositoryRequestFormsHistoryDocumentID',
        'forms_group_id' => 'string',
        'shipment_identifier' => 'string',
        'shipment_date_and_time' => 'string',
        'shipment_type' => 'string',
        'prq_confirmation_number' => 'string',
        'tracking_number' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request' => null,
        'shipper_number' => null,
        'forms_history_document_id' => null,
        'forms_group_id' => null,
        'shipment_identifier' => null,
        'shipment_date_and_time' => null,
        'shipment_type' => null,
        'prq_confirmation_number' => null,
        'tracking_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request' => false,
		'shipper_number' => false,
		'forms_history_document_id' => false,
		'forms_group_id' => false,
		'shipment_identifier' => false,
		'shipment_date_and_time' => false,
		'shipment_type' => false,
		'prq_confirmation_number' => false,
		'tracking_number' => false
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
        'request' => 'Request',
        'shipper_number' => 'ShipperNumber',
        'forms_history_document_id' => 'FormsHistoryDocumentID',
        'forms_group_id' => 'FormsGroupID',
        'shipment_identifier' => 'ShipmentIdentifier',
        'shipment_date_and_time' => 'ShipmentDateAndTime',
        'shipment_type' => 'ShipmentType',
        'prq_confirmation_number' => 'PRQConfirmationNumber',
        'tracking_number' => 'TrackingNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'shipper_number' => 'setShipperNumber',
        'forms_history_document_id' => 'setFormsHistoryDocumentId',
        'forms_group_id' => 'setFormsGroupId',
        'shipment_identifier' => 'setShipmentIdentifier',
        'shipment_date_and_time' => 'setShipmentDateAndTime',
        'shipment_type' => 'setShipmentType',
        'prq_confirmation_number' => 'setPrqConfirmationNumber',
        'tracking_number' => 'setTrackingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'shipper_number' => 'getShipperNumber',
        'forms_history_document_id' => 'getFormsHistoryDocumentId',
        'forms_group_id' => 'getFormsGroupId',
        'shipment_identifier' => 'getShipmentIdentifier',
        'shipment_date_and_time' => 'getShipmentDateAndTime',
        'shipment_type' => 'getShipmentType',
        'prq_confirmation_number' => 'getPrqConfirmationNumber',
        'tracking_number' => 'getTrackingNumber'
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
        $this->setIfExists('request', $data ?? [], null);
        $this->setIfExists('shipper_number', $data ?? [], null);
        $this->setIfExists('forms_history_document_id', $data ?? [], null);
        $this->setIfExists('forms_group_id', $data ?? [], null);
        $this->setIfExists('shipment_identifier', $data ?? [], null);
        $this->setIfExists('shipment_date_and_time', $data ?? [], null);
        $this->setIfExists('shipment_type', $data ?? [], null);
        $this->setIfExists('prq_confirmation_number', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
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

        if ($this->container['request'] === null) {
            $invalidProperties[] = "'request' can't be null";
        }
        if ($this->container['shipper_number'] === null) {
            $invalidProperties[] = "'shipper_number' can't be null";
        }
        if ((mb_strlen($this->container['shipper_number']) > 6)) {
            $invalidProperties[] = "invalid value for 'shipper_number', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['shipper_number']) < 6)) {
            $invalidProperties[] = "invalid value for 'shipper_number', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['forms_history_document_id'] === null) {
            $invalidProperties[] = "'forms_history_document_id' can't be null";
        }
        if (!is_null($this->container['forms_group_id']) && (mb_strlen($this->container['forms_group_id']) > 26)) {
            $invalidProperties[] = "invalid value for 'forms_group_id', the character length must be smaller than or equal to 26.";
        }

        if (!is_null($this->container['forms_group_id']) && (mb_strlen($this->container['forms_group_id']) < 26)) {
            $invalidProperties[] = "invalid value for 'forms_group_id', the character length must be bigger than or equal to 26.";
        }

        if ($this->container['shipment_identifier'] === null) {
            $invalidProperties[] = "'shipment_identifier' can't be null";
        }
        if ((mb_strlen($this->container['shipment_identifier']) > 19)) {
            $invalidProperties[] = "invalid value for 'shipment_identifier', the character length must be smaller than or equal to 19.";
        }

        if ((mb_strlen($this->container['shipment_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipment_identifier', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['shipment_type'] === null) {
            $invalidProperties[] = "'shipment_type' can't be null";
        }
        if ((mb_strlen($this->container['shipment_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'shipment_type', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['shipment_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipment_type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['prq_confirmation_number']) && (mb_strlen($this->container['prq_confirmation_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'prq_confirmation_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['prq_confirmation_number']) && (mb_strlen($this->container['prq_confirmation_number']) < 9)) {
            $invalidProperties[] = "invalid value for 'prq_confirmation_number', the character length must be bigger than or equal to 9.";
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
     * Gets request
     *
     * @return \AntibodiesOnline\UpsApi\Paperless\Model\PushToImageRepositoryRequestRequest
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param \AntibodiesOnline\UpsApi\Paperless\Model\PushToImageRepositoryRequestRequest $request request
     *
     * @return self
     */
    public function setRequest($request)
    {
        if (is_null($request)) {
            throw new \InvalidArgumentException('non-nullable request cannot be null');
        }
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets shipper_number
     *
     * @return string
     */
    public function getShipperNumber()
    {
        return $this->container['shipper_number'];
    }

    /**
     * Sets shipper_number
     *
     * @param string $shipper_number The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @return self
     */
    public function setShipperNumber($shipper_number)
    {
        if (is_null($shipper_number)) {
            throw new \InvalidArgumentException('non-nullable shipper_number cannot be null');
        }
        if ((mb_strlen($shipper_number) > 6)) {
            throw new \InvalidArgumentException('invalid length for $shipper_number when calling PushToImageRepositoryRequest., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($shipper_number) < 6)) {
            throw new \InvalidArgumentException('invalid length for $shipper_number when calling PushToImageRepositoryRequest., must be bigger than or equal to 6.');
        }

        $this->container['shipper_number'] = $shipper_number;

        return $this;
    }

    /**
     * Gets forms_history_document_id
     *
     * @return \AntibodiesOnline\UpsApi\Paperless\Model\PushToImageRepositoryRequestFormsHistoryDocumentID
     */
    public function getFormsHistoryDocumentId()
    {
        return $this->container['forms_history_document_id'];
    }

    /**
     * Sets forms_history_document_id
     *
     * @param \AntibodiesOnline\UpsApi\Paperless\Model\PushToImageRepositoryRequestFormsHistoryDocumentID $forms_history_document_id forms_history_document_id
     *
     * @return self
     */
    public function setFormsHistoryDocumentId($forms_history_document_id)
    {
        if (is_null($forms_history_document_id)) {
            throw new \InvalidArgumentException('non-nullable forms_history_document_id cannot be null');
        }
        $this->container['forms_history_document_id'] = $forms_history_document_id;

        return $this;
    }

    /**
     * Gets forms_group_id
     *
     * @return string|null
     */
    public function getFormsGroupId()
    {
        return $this->container['forms_group_id'];
    }

    /**
     * Sets forms_group_id
     *
     * @param string|null $forms_group_id FormsGroupID would be required in Push Request if user needs to update uploaded DocumentID(s) in Forms History.  N/A
     *
     * @return self
     */
    public function setFormsGroupId($forms_group_id)
    {
        if (is_null($forms_group_id)) {
            throw new \InvalidArgumentException('non-nullable forms_group_id cannot be null');
        }
        if ((mb_strlen($forms_group_id) > 26)) {
            throw new \InvalidArgumentException('invalid length for $forms_group_id when calling PushToImageRepositoryRequest., must be smaller than or equal to 26.');
        }
        if ((mb_strlen($forms_group_id) < 26)) {
            throw new \InvalidArgumentException('invalid length for $forms_group_id when calling PushToImageRepositoryRequest., must be bigger than or equal to 26.');
        }

        $this->container['forms_group_id'] = $forms_group_id;

        return $this;
    }

    /**
     * Gets shipment_identifier
     *
     * @return string
     */
    public function getShipmentIdentifier()
    {
        return $this->container['shipment_identifier'];
    }

    /**
     * Sets shipment_identifier
     *
     * @param string $shipment_identifier Shipment Identifier is required for this request.  N/A
     *
     * @return self
     */
    public function setShipmentIdentifier($shipment_identifier)
    {
        if (is_null($shipment_identifier)) {
            throw new \InvalidArgumentException('non-nullable shipment_identifier cannot be null');
        }
        if ((mb_strlen($shipment_identifier) > 19)) {
            throw new \InvalidArgumentException('invalid length for $shipment_identifier when calling PushToImageRepositoryRequest., must be smaller than or equal to 19.');
        }
        if ((mb_strlen($shipment_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shipment_identifier when calling PushToImageRepositoryRequest., must be bigger than or equal to 1.');
        }

        $this->container['shipment_identifier'] = $shipment_identifier;

        return $this;
    }

    /**
     * Gets shipment_date_and_time
     *
     * @return string|null
     */
    public function getShipmentDateAndTime()
    {
        return $this->container['shipment_date_and_time'];
    }

    /**
     * Sets shipment_date_and_time
     *
     * @param string|null $shipment_date_and_time The date and time of the processed shipment. Required only for small package shipments. The valid format is yyyy-MM-dd-HH.mm.ss  N/A
     *
     * @return self
     */
    public function setShipmentDateAndTime($shipment_date_and_time)
    {
        if (is_null($shipment_date_and_time)) {
            throw new \InvalidArgumentException('non-nullable shipment_date_and_time cannot be null');
        }


        $this->container['shipment_date_and_time'] = $shipment_date_and_time;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return string
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param string $shipment_type Valid values are: 1 = small package, 2 = freight.  N/A
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        if (is_null($shipment_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_type cannot be null');
        }
        if ((mb_strlen($shipment_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $shipment_type when calling PushToImageRepositoryRequest., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($shipment_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shipment_type when calling PushToImageRepositoryRequest., must be bigger than or equal to 1.');
        }

        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets prq_confirmation_number
     *
     * @return string|null
     */
    public function getPrqConfirmationNumber()
    {
        return $this->container['prq_confirmation_number'];
    }

    /**
     * Sets prq_confirmation_number
     *
     * @param string|null $prq_confirmation_number PRQ Confirmation being specified by client. Required for freight shipments.  N/A
     *
     * @return self
     */
    public function setPrqConfirmationNumber($prq_confirmation_number)
    {
        if (is_null($prq_confirmation_number)) {
            throw new \InvalidArgumentException('non-nullable prq_confirmation_number cannot be null');
        }
        if ((mb_strlen($prq_confirmation_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $prq_confirmation_number when calling PushToImageRepositoryRequest., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($prq_confirmation_number) < 9)) {
            throw new \InvalidArgumentException('invalid length for $prq_confirmation_number when calling PushToImageRepositoryRequest., must be bigger than or equal to 9.');
        }

        $this->container['prq_confirmation_number'] = $prq_confirmation_number;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string[]|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string[]|null $tracking_number UPS Tracking Number associated with this shipment. Required only for small package shipment.  N/A
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }


        $this->container['tracking_number'] = $tracking_number;

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


