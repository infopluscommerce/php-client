<?php
/**
 * LocationAddressScheme
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infoplus API
 *
 * Infoplus API.
 *
 * OpenAPI spec version: beta
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Infoplus\Model;

use \ArrayAccess;
use \Infoplus\ObjectSerializer;

/**
 * LocationAddressScheme Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationAddressScheme implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'locationAddressScheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'client_id' => 'int',
        'name' => 'string',
        'format_string' => 'string',
        'location_naming_scheme' => 'string',
        'location_number_zero_padded' => 'bool',
        'location_number_minimum_number_of_digits' => 'int',
        'level_naming_scheme' => 'string',
        'level_number_zero_padded' => 'bool',
        'level_number_minimum_number_of_digits' => 'int',
        'aisle_naming_scheme' => 'string',
        'aisle_number_zero_padded' => 'bool',
        'aisle_number_minimum_number_of_digits' => 'int',
        'bay_naming_scheme' => 'string',
        'bay_number_zero_padded' => 'bool',
        'bay_number_minimum_number_of_digits' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'client_id' => 'int32',
        'name' => null,
        'format_string' => null,
        'location_naming_scheme' => null,
        'location_number_zero_padded' => null,
        'location_number_minimum_number_of_digits' => 'int32',
        'level_naming_scheme' => null,
        'level_number_zero_padded' => null,
        'level_number_minimum_number_of_digits' => 'int32',
        'aisle_naming_scheme' => null,
        'aisle_number_zero_padded' => null,
        'aisle_number_minimum_number_of_digits' => 'int32',
        'bay_naming_scheme' => null,
        'bay_number_zero_padded' => null,
        'bay_number_minimum_number_of_digits' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'custom_fields' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'client_id' => 'clientId',
        'name' => 'name',
        'format_string' => 'formatString',
        'location_naming_scheme' => 'locationNamingScheme',
        'location_number_zero_padded' => 'locationNumberZeroPadded',
        'location_number_minimum_number_of_digits' => 'locationNumberMinimumNumberOfDigits',
        'level_naming_scheme' => 'levelNamingScheme',
        'level_number_zero_padded' => 'levelNumberZeroPadded',
        'level_number_minimum_number_of_digits' => 'levelNumberMinimumNumberOfDigits',
        'aisle_naming_scheme' => 'aisleNamingScheme',
        'aisle_number_zero_padded' => 'aisleNumberZeroPadded',
        'aisle_number_minimum_number_of_digits' => 'aisleNumberMinimumNumberOfDigits',
        'bay_naming_scheme' => 'bayNamingScheme',
        'bay_number_zero_padded' => 'bayNumberZeroPadded',
        'bay_number_minimum_number_of_digits' => 'bayNumberMinimumNumberOfDigits',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_id' => 'setClientId',
        'name' => 'setName',
        'format_string' => 'setFormatString',
        'location_naming_scheme' => 'setLocationNamingScheme',
        'location_number_zero_padded' => 'setLocationNumberZeroPadded',
        'location_number_minimum_number_of_digits' => 'setLocationNumberMinimumNumberOfDigits',
        'level_naming_scheme' => 'setLevelNamingScheme',
        'level_number_zero_padded' => 'setLevelNumberZeroPadded',
        'level_number_minimum_number_of_digits' => 'setLevelNumberMinimumNumberOfDigits',
        'aisle_naming_scheme' => 'setAisleNamingScheme',
        'aisle_number_zero_padded' => 'setAisleNumberZeroPadded',
        'aisle_number_minimum_number_of_digits' => 'setAisleNumberMinimumNumberOfDigits',
        'bay_naming_scheme' => 'setBayNamingScheme',
        'bay_number_zero_padded' => 'setBayNumberZeroPadded',
        'bay_number_minimum_number_of_digits' => 'setBayNumberMinimumNumberOfDigits',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_id' => 'getClientId',
        'name' => 'getName',
        'format_string' => 'getFormatString',
        'location_naming_scheme' => 'getLocationNamingScheme',
        'location_number_zero_padded' => 'getLocationNumberZeroPadded',
        'location_number_minimum_number_of_digits' => 'getLocationNumberMinimumNumberOfDigits',
        'level_naming_scheme' => 'getLevelNamingScheme',
        'level_number_zero_padded' => 'getLevelNumberZeroPadded',
        'level_number_minimum_number_of_digits' => 'getLevelNumberMinimumNumberOfDigits',
        'aisle_naming_scheme' => 'getAisleNamingScheme',
        'aisle_number_zero_padded' => 'getAisleNumberZeroPadded',
        'aisle_number_minimum_number_of_digits' => 'getAisleNumberMinimumNumberOfDigits',
        'bay_naming_scheme' => 'getBayNamingScheme',
        'bay_number_zero_padded' => 'getBayNumberZeroPadded',
        'bay_number_minimum_number_of_digits' => 'getBayNumberMinimumNumberOfDigits',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'custom_fields' => 'getCustomFields'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['format_string'] = isset($data['format_string']) ? $data['format_string'] : null;
        $this->container['location_naming_scheme'] = isset($data['location_naming_scheme']) ? $data['location_naming_scheme'] : null;
        $this->container['location_number_zero_padded'] = isset($data['location_number_zero_padded']) ? $data['location_number_zero_padded'] : false;
        $this->container['location_number_minimum_number_of_digits'] = isset($data['location_number_minimum_number_of_digits']) ? $data['location_number_minimum_number_of_digits'] : null;
        $this->container['level_naming_scheme'] = isset($data['level_naming_scheme']) ? $data['level_naming_scheme'] : null;
        $this->container['level_number_zero_padded'] = isset($data['level_number_zero_padded']) ? $data['level_number_zero_padded'] : false;
        $this->container['level_number_minimum_number_of_digits'] = isset($data['level_number_minimum_number_of_digits']) ? $data['level_number_minimum_number_of_digits'] : null;
        $this->container['aisle_naming_scheme'] = isset($data['aisle_naming_scheme']) ? $data['aisle_naming_scheme'] : null;
        $this->container['aisle_number_zero_padded'] = isset($data['aisle_number_zero_padded']) ? $data['aisle_number_zero_padded'] : false;
        $this->container['aisle_number_minimum_number_of_digits'] = isset($data['aisle_number_minimum_number_of_digits']) ? $data['aisle_number_minimum_number_of_digits'] : null;
        $this->container['bay_naming_scheme'] = isset($data['bay_naming_scheme']) ? $data['bay_naming_scheme'] : null;
        $this->container['bay_number_zero_padded'] = isset($data['bay_number_zero_padded']) ? $data['bay_number_zero_padded'] : false;
        $this->container['bay_number_minimum_number_of_digits'] = isset($data['bay_number_minimum_number_of_digits']) ? $data['bay_number_minimum_number_of_digits'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['format_string'] === null) {
            $invalidProperties[] = "'format_string' can't be null";
        }
        if ($this->container['location_naming_scheme'] === null) {
            $invalidProperties[] = "'location_naming_scheme' can't be null";
        }
        if ($this->container['location_number_zero_padded'] === null) {
            $invalidProperties[] = "'location_number_zero_padded' can't be null";
        }
        if ($this->container['level_naming_scheme'] === null) {
            $invalidProperties[] = "'level_naming_scheme' can't be null";
        }
        if ($this->container['level_number_zero_padded'] === null) {
            $invalidProperties[] = "'level_number_zero_padded' can't be null";
        }
        if ($this->container['aisle_naming_scheme'] === null) {
            $invalidProperties[] = "'aisle_naming_scheme' can't be null";
        }
        if ($this->container['aisle_number_zero_padded'] === null) {
            $invalidProperties[] = "'aisle_number_zero_padded' can't be null";
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

        if ($this->container['client_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['format_string'] === null) {
            return false;
        }
        if ($this->container['location_naming_scheme'] === null) {
            return false;
        }
        if ($this->container['location_number_zero_padded'] === null) {
            return false;
        }
        if ($this->container['level_naming_scheme'] === null) {
            return false;
        }
        if ($this->container['level_number_zero_padded'] === null) {
            return false;
        }
        if ($this->container['aisle_naming_scheme'] === null) {
            return false;
        }
        if ($this->container['aisle_number_zero_padded'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param int $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets format_string
     *
     * @return string
     */
    public function getFormatString()
    {
        return $this->container['format_string'];
    }

    /**
     * Sets format_string
     *
     * @param string $format_string format_string
     *
     * @return $this
     */
    public function setFormatString($format_string)
    {
        $this->container['format_string'] = $format_string;

        return $this;
    }

    /**
     * Gets location_naming_scheme
     *
     * @return string
     */
    public function getLocationNamingScheme()
    {
        return $this->container['location_naming_scheme'];
    }

    /**
     * Sets location_naming_scheme
     *
     * @param string $location_naming_scheme location_naming_scheme
     *
     * @return $this
     */
    public function setLocationNamingScheme($location_naming_scheme)
    {
        $this->container['location_naming_scheme'] = $location_naming_scheme;

        return $this;
    }

    /**
     * Gets location_number_zero_padded
     *
     * @return bool
     */
    public function getLocationNumberZeroPadded()
    {
        return $this->container['location_number_zero_padded'];
    }

    /**
     * Sets location_number_zero_padded
     *
     * @param bool $location_number_zero_padded location_number_zero_padded
     *
     * @return $this
     */
    public function setLocationNumberZeroPadded($location_number_zero_padded)
    {
        $this->container['location_number_zero_padded'] = $location_number_zero_padded;

        return $this;
    }

    /**
     * Gets location_number_minimum_number_of_digits
     *
     * @return int
     */
    public function getLocationNumberMinimumNumberOfDigits()
    {
        return $this->container['location_number_minimum_number_of_digits'];
    }

    /**
     * Sets location_number_minimum_number_of_digits
     *
     * @param int $location_number_minimum_number_of_digits location_number_minimum_number_of_digits
     *
     * @return $this
     */
    public function setLocationNumberMinimumNumberOfDigits($location_number_minimum_number_of_digits)
    {
        $this->container['location_number_minimum_number_of_digits'] = $location_number_minimum_number_of_digits;

        return $this;
    }

    /**
     * Gets level_naming_scheme
     *
     * @return string
     */
    public function getLevelNamingScheme()
    {
        return $this->container['level_naming_scheme'];
    }

    /**
     * Sets level_naming_scheme
     *
     * @param string $level_naming_scheme level_naming_scheme
     *
     * @return $this
     */
    public function setLevelNamingScheme($level_naming_scheme)
    {
        $this->container['level_naming_scheme'] = $level_naming_scheme;

        return $this;
    }

    /**
     * Gets level_number_zero_padded
     *
     * @return bool
     */
    public function getLevelNumberZeroPadded()
    {
        return $this->container['level_number_zero_padded'];
    }

    /**
     * Sets level_number_zero_padded
     *
     * @param bool $level_number_zero_padded level_number_zero_padded
     *
     * @return $this
     */
    public function setLevelNumberZeroPadded($level_number_zero_padded)
    {
        $this->container['level_number_zero_padded'] = $level_number_zero_padded;

        return $this;
    }

    /**
     * Gets level_number_minimum_number_of_digits
     *
     * @return int
     */
    public function getLevelNumberMinimumNumberOfDigits()
    {
        return $this->container['level_number_minimum_number_of_digits'];
    }

    /**
     * Sets level_number_minimum_number_of_digits
     *
     * @param int $level_number_minimum_number_of_digits level_number_minimum_number_of_digits
     *
     * @return $this
     */
    public function setLevelNumberMinimumNumberOfDigits($level_number_minimum_number_of_digits)
    {
        $this->container['level_number_minimum_number_of_digits'] = $level_number_minimum_number_of_digits;

        return $this;
    }

    /**
     * Gets aisle_naming_scheme
     *
     * @return string
     */
    public function getAisleNamingScheme()
    {
        return $this->container['aisle_naming_scheme'];
    }

    /**
     * Sets aisle_naming_scheme
     *
     * @param string $aisle_naming_scheme aisle_naming_scheme
     *
     * @return $this
     */
    public function setAisleNamingScheme($aisle_naming_scheme)
    {
        $this->container['aisle_naming_scheme'] = $aisle_naming_scheme;

        return $this;
    }

    /**
     * Gets aisle_number_zero_padded
     *
     * @return bool
     */
    public function getAisleNumberZeroPadded()
    {
        return $this->container['aisle_number_zero_padded'];
    }

    /**
     * Sets aisle_number_zero_padded
     *
     * @param bool $aisle_number_zero_padded aisle_number_zero_padded
     *
     * @return $this
     */
    public function setAisleNumberZeroPadded($aisle_number_zero_padded)
    {
        $this->container['aisle_number_zero_padded'] = $aisle_number_zero_padded;

        return $this;
    }

    /**
     * Gets aisle_number_minimum_number_of_digits
     *
     * @return int
     */
    public function getAisleNumberMinimumNumberOfDigits()
    {
        return $this->container['aisle_number_minimum_number_of_digits'];
    }

    /**
     * Sets aisle_number_minimum_number_of_digits
     *
     * @param int $aisle_number_minimum_number_of_digits aisle_number_minimum_number_of_digits
     *
     * @return $this
     */
    public function setAisleNumberMinimumNumberOfDigits($aisle_number_minimum_number_of_digits)
    {
        $this->container['aisle_number_minimum_number_of_digits'] = $aisle_number_minimum_number_of_digits;

        return $this;
    }

    /**
     * Gets bay_naming_scheme
     *
     * @return string
     */
    public function getBayNamingScheme()
    {
        return $this->container['bay_naming_scheme'];
    }

    /**
     * Sets bay_naming_scheme
     *
     * @param string $bay_naming_scheme bay_naming_scheme
     *
     * @return $this
     */
    public function setBayNamingScheme($bay_naming_scheme)
    {
        $this->container['bay_naming_scheme'] = $bay_naming_scheme;

        return $this;
    }

    /**
     * Gets bay_number_zero_padded
     *
     * @return bool
     */
    public function getBayNumberZeroPadded()
    {
        return $this->container['bay_number_zero_padded'];
    }

    /**
     * Sets bay_number_zero_padded
     *
     * @param bool $bay_number_zero_padded bay_number_zero_padded
     *
     * @return $this
     */
    public function setBayNumberZeroPadded($bay_number_zero_padded)
    {
        $this->container['bay_number_zero_padded'] = $bay_number_zero_padded;

        return $this;
    }

    /**
     * Gets bay_number_minimum_number_of_digits
     *
     * @return int
     */
    public function getBayNumberMinimumNumberOfDigits()
    {
        return $this->container['bay_number_minimum_number_of_digits'];
    }

    /**
     * Sets bay_number_minimum_number_of_digits
     *
     * @param int $bay_number_minimum_number_of_digits bay_number_minimum_number_of_digits
     *
     * @return $this
     */
    public function setBayNumberMinimumNumberOfDigits($bay_number_minimum_number_of_digits)
    {
        $this->container['bay_number_minimum_number_of_digits'] = $bay_number_minimum_number_of_digits;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets modify_date
     *
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->container['modify_date'];
    }

    /**
     * Sets modify_date
     *
     * @param \DateTime $modify_date modify_date
     *
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        $this->container['modify_date'] = $modify_date;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,object] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

