<?php
/**
 * PackagePackageServiceOptions
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
 * PackagePackageServiceOptions Class Doc Comment
 *
 * @category Class
 * @description Package Service Options container.
 * @package  AntibodiesOnline\UpsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PackagePackageServiceOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Package_PackageServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_confirmation' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDeliveryConfirmation',
        'declared_value' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDeclaredValue',
        'cod' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsCOD',
        'access_point_cod' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsAccessPointCOD',
        'shipper_release_indicator' => 'string',
        'notification' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsNotification',
        'haz_mat' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsHazMat[]',
        'dry_ice' => '\AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDryIce',
        'ups_premium_care_indicator' => 'string',
        'proactive_indicator' => 'string',
        'package_identifier' => 'string',
        'clinical_trials_id' => 'string',
        'refrigeration_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_confirmation' => null,
        'declared_value' => null,
        'cod' => null,
        'access_point_cod' => null,
        'shipper_release_indicator' => null,
        'notification' => null,
        'haz_mat' => null,
        'dry_ice' => null,
        'ups_premium_care_indicator' => null,
        'proactive_indicator' => null,
        'package_identifier' => null,
        'clinical_trials_id' => null,
        'refrigeration_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delivery_confirmation' => false,
		'declared_value' => false,
		'cod' => false,
		'access_point_cod' => false,
		'shipper_release_indicator' => false,
		'notification' => false,
		'haz_mat' => false,
		'dry_ice' => false,
		'ups_premium_care_indicator' => false,
		'proactive_indicator' => false,
		'package_identifier' => false,
		'clinical_trials_id' => false,
		'refrigeration_indicator' => false
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
        'delivery_confirmation' => 'DeliveryConfirmation',
        'declared_value' => 'DeclaredValue',
        'cod' => 'COD',
        'access_point_cod' => 'AccessPointCOD',
        'shipper_release_indicator' => 'ShipperReleaseIndicator',
        'notification' => 'Notification',
        'haz_mat' => 'HazMat',
        'dry_ice' => 'DryIce',
        'ups_premium_care_indicator' => 'UPSPremiumCareIndicator',
        'proactive_indicator' => 'ProactiveIndicator',
        'package_identifier' => 'PackageIdentifier',
        'clinical_trials_id' => 'ClinicalTrialsID',
        'refrigeration_indicator' => 'RefrigerationIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_confirmation' => 'setDeliveryConfirmation',
        'declared_value' => 'setDeclaredValue',
        'cod' => 'setCod',
        'access_point_cod' => 'setAccessPointCod',
        'shipper_release_indicator' => 'setShipperReleaseIndicator',
        'notification' => 'setNotification',
        'haz_mat' => 'setHazMat',
        'dry_ice' => 'setDryIce',
        'ups_premium_care_indicator' => 'setUpsPremiumCareIndicator',
        'proactive_indicator' => 'setProactiveIndicator',
        'package_identifier' => 'setPackageIdentifier',
        'clinical_trials_id' => 'setClinicalTrialsId',
        'refrigeration_indicator' => 'setRefrigerationIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_confirmation' => 'getDeliveryConfirmation',
        'declared_value' => 'getDeclaredValue',
        'cod' => 'getCod',
        'access_point_cod' => 'getAccessPointCod',
        'shipper_release_indicator' => 'getShipperReleaseIndicator',
        'notification' => 'getNotification',
        'haz_mat' => 'getHazMat',
        'dry_ice' => 'getDryIce',
        'ups_premium_care_indicator' => 'getUpsPremiumCareIndicator',
        'proactive_indicator' => 'getProactiveIndicator',
        'package_identifier' => 'getPackageIdentifier',
        'clinical_trials_id' => 'getClinicalTrialsId',
        'refrigeration_indicator' => 'getRefrigerationIndicator'
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
        $this->setIfExists('delivery_confirmation', $data ?? [], null);
        $this->setIfExists('declared_value', $data ?? [], null);
        $this->setIfExists('cod', $data ?? [], null);
        $this->setIfExists('access_point_cod', $data ?? [], null);
        $this->setIfExists('shipper_release_indicator', $data ?? [], null);
        $this->setIfExists('notification', $data ?? [], null);
        $this->setIfExists('haz_mat', $data ?? [], null);
        $this->setIfExists('dry_ice', $data ?? [], null);
        $this->setIfExists('ups_premium_care_indicator', $data ?? [], null);
        $this->setIfExists('proactive_indicator', $data ?? [], null);
        $this->setIfExists('package_identifier', $data ?? [], null);
        $this->setIfExists('clinical_trials_id', $data ?? [], null);
        $this->setIfExists('refrigeration_indicator', $data ?? [], null);
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

        if (!is_null($this->container['package_identifier']) && (mb_strlen($this->container['package_identifier']) > 5)) {
            $invalidProperties[] = "invalid value for 'package_identifier', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['package_identifier']) && (mb_strlen($this->container['package_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'package_identifier', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['clinical_trials_id']) && (mb_strlen($this->container['clinical_trials_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'clinical_trials_id', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['clinical_trials_id']) && (mb_strlen($this->container['clinical_trials_id']) < 20)) {
            $invalidProperties[] = "invalid value for 'clinical_trials_id', the character length must be bigger than or equal to 20.";
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
     * Gets delivery_confirmation
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDeliveryConfirmation|null
     */
    public function getDeliveryConfirmation()
    {
        return $this->container['delivery_confirmation'];
    }

    /**
     * Sets delivery_confirmation
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDeliveryConfirmation|null $delivery_confirmation delivery_confirmation
     *
     * @return self
     */
    public function setDeliveryConfirmation($delivery_confirmation)
    {
        if (is_null($delivery_confirmation)) {
            throw new \InvalidArgumentException('non-nullable delivery_confirmation cannot be null');
        }
        $this->container['delivery_confirmation'] = $delivery_confirmation;

        return $this;
    }

    /**
     * Gets declared_value
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDeclaredValue|null
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDeclaredValue|null $declared_value declared_value
     *
     * @return self
     */
    public function setDeclaredValue($declared_value)
    {
        if (is_null($declared_value)) {
            throw new \InvalidArgumentException('non-nullable declared_value cannot be null');
        }
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets cod
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsCOD|null
     */
    public function getCod()
    {
        return $this->container['cod'];
    }

    /**
     * Sets cod
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsCOD|null $cod cod
     *
     * @return self
     */
    public function setCod($cod)
    {
        if (is_null($cod)) {
            throw new \InvalidArgumentException('non-nullable cod cannot be null');
        }
        $this->container['cod'] = $cod;

        return $this;
    }

    /**
     * Gets access_point_cod
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsAccessPointCOD|null
     */
    public function getAccessPointCod()
    {
        return $this->container['access_point_cod'];
    }

    /**
     * Sets access_point_cod
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsAccessPointCOD|null $access_point_cod access_point_cod
     *
     * @return self
     */
    public function setAccessPointCod($access_point_cod)
    {
        if (is_null($access_point_cod)) {
            throw new \InvalidArgumentException('non-nullable access_point_cod cannot be null');
        }
        $this->container['access_point_cod'] = $access_point_cod;

        return $this;
    }

    /**
     * Gets shipper_release_indicator
     *
     * @return string|null
     */
    public function getShipperReleaseIndicator()
    {
        return $this->container['shipper_release_indicator'];
    }

    /**
     * Sets shipper_release_indicator
     *
     * @param string|null $shipper_release_indicator The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @return self
     */
    public function setShipperReleaseIndicator($shipper_release_indicator)
    {
        if (is_null($shipper_release_indicator)) {
            throw new \InvalidArgumentException('non-nullable shipper_release_indicator cannot be null');
        }


        $this->container['shipper_release_indicator'] = $shipper_release_indicator;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsNotification|null
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsNotification|null $notification notification
     *
     * @return self
     */
    public function setNotification($notification)
    {
        if (is_null($notification)) {
            throw new \InvalidArgumentException('non-nullable notification cannot be null');
        }
        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets haz_mat
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsHazMat[]|null
     */
    public function getHazMat()
    {
        return $this->container['haz_mat'];
    }

    /**
     * Sets haz_mat
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsHazMat[]|null $haz_mat haz_mat
     *
     * @return self
     */
    public function setHazMat($haz_mat)
    {
        if (is_null($haz_mat)) {
            throw new \InvalidArgumentException('non-nullable haz_mat cannot be null');
        }


        $this->container['haz_mat'] = $haz_mat;

        return $this;
    }

    /**
     * Gets dry_ice
     *
     * @return \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDryIce|null
     */
    public function getDryIce()
    {
        return $this->container['dry_ice'];
    }

    /**
     * Sets dry_ice
     *
     * @param \AntibodiesOnline\UpsApi\Shipping\PackageServiceOptionsDryIce|null $dry_ice dry_ice
     *
     * @return self
     */
    public function setDryIce($dry_ice)
    {
        if (is_null($dry_ice)) {
            throw new \InvalidArgumentException('non-nullable dry_ice cannot be null');
        }
        $this->container['dry_ice'] = $dry_ice;

        return $this;
    }

    /**
     * Gets ups_premium_care_indicator
     *
     * @return string|null
     */
    public function getUpsPremiumCareIndicator()
    {
        return $this->container['ups_premium_care_indicator'];
    }

    /**
     * Sets ups_premium_care_indicator
     *
     * @param string|null $ups_premium_care_indicator An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present.   The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required.   UPSPremiumCareIndicator is valid for following Return services:  Returns Exchange (available with a contract) Print Return Label Print and Mail Electronic Return Label  Return Service Three Attempt  The UPSPremiumCareIndicator can be requested with following UPS services:  UPS Express Early UPS Express UPS Express Saver  UPS Standard Valid only for Canada to Canada movements.
     *
     * @return self
     */
    public function setUpsPremiumCareIndicator($ups_premium_care_indicator)
    {
        if (is_null($ups_premium_care_indicator)) {
            throw new \InvalidArgumentException('non-nullable ups_premium_care_indicator cannot be null');
        }


        $this->container['ups_premium_care_indicator'] = $ups_premium_care_indicator;

        return $this;
    }

    /**
     * Gets proactive_indicator
     *
     * @return string|null
     */
    public function getProactiveIndicator()
    {
        return $this->container['proactive_indicator'];
    }

    /**
     * Sets proactive_indicator
     *
     * @param string|null $proactive_indicator Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
     *
     * @return self
     */
    public function setProactiveIndicator($proactive_indicator)
    {
        if (is_null($proactive_indicator)) {
            throw new \InvalidArgumentException('non-nullable proactive_indicator cannot be null');
        }


        $this->container['proactive_indicator'] = $proactive_indicator;

        return $this;
    }

    /**
     * Gets package_identifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier
     *
     * @param string|null $package_identifier Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @return self
     */
    public function setPackageIdentifier($package_identifier)
    {
        if (is_null($package_identifier)) {
            throw new \InvalidArgumentException('non-nullable package_identifier cannot be null');
        }
        if ((mb_strlen($package_identifier) > 5)) {
            throw new \InvalidArgumentException('invalid length for $package_identifier when calling PackagePackageServiceOptions., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($package_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $package_identifier when calling PackagePackageServiceOptions., must be bigger than or equal to 1.');
        }

        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }

    /**
     * Gets clinical_trials_id
     *
     * @return string|null
     */
    public function getClinicalTrialsId()
    {
        return $this->container['clinical_trials_id'];
    }

    /**
     * Sets clinical_trials_id
     *
     * @param string|null $clinical_trials_id Unique identifier for clinical trials
     *
     * @return self
     */
    public function setClinicalTrialsId($clinical_trials_id)
    {
        if (is_null($clinical_trials_id)) {
            throw new \InvalidArgumentException('non-nullable clinical_trials_id cannot be null');
        }
        if ((mb_strlen($clinical_trials_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $clinical_trials_id when calling PackagePackageServiceOptions., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($clinical_trials_id) < 20)) {
            throw new \InvalidArgumentException('invalid length for $clinical_trials_id when calling PackagePackageServiceOptions., must be bigger than or equal to 20.');
        }

        $this->container['clinical_trials_id'] = $clinical_trials_id;

        return $this;
    }

    /**
     * Gets refrigeration_indicator
     *
     * @return string|null
     */
    public function getRefrigerationIndicator()
    {
        return $this->container['refrigeration_indicator'];
    }

    /**
     * Sets refrigeration_indicator
     *
     * @param string|null $refrigeration_indicator Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @return self
     */
    public function setRefrigerationIndicator($refrigeration_indicator)
    {
        if (is_null($refrigeration_indicator)) {
            throw new \InvalidArgumentException('non-nullable refrigeration_indicator cannot be null');
        }


        $this->container['refrigeration_indicator'] = $refrigeration_indicator;

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


