<?php
/**
 * Load
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
 * Load Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Load implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'load';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'lob_id' => 'int',
        'lpn' => 'string',
        'behavior_type' => 'string',
        'warehouse_id' => 'int',
        'location_id' => 'int',
        'parent_load_id' => 'int',
        'pallet_type_id' => 'int',
        'carton_type_id' => 'int',
        'order_no_list' => 'float[]',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'lob_id' => 'int32',
        'lpn' => null,
        'behavior_type' => null,
        'warehouse_id' => 'int32',
        'location_id' => 'int32',
        'parent_load_id' => 'int32',
        'pallet_type_id' => 'int32',
        'carton_type_id' => 'int32',
        'order_no_list' => null,
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
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'lob_id' => 'lobId',
        'lpn' => 'lpn',
        'behavior_type' => 'behaviorType',
        'warehouse_id' => 'warehouseId',
        'location_id' => 'locationId',
        'parent_load_id' => 'parentLoadId',
        'pallet_type_id' => 'palletTypeId',
        'carton_type_id' => 'cartonTypeId',
        'order_no_list' => 'orderNoList',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'lob_id' => 'setLobId',
        'lpn' => 'setLpn',
        'behavior_type' => 'setBehaviorType',
        'warehouse_id' => 'setWarehouseId',
        'location_id' => 'setLocationId',
        'parent_load_id' => 'setParentLoadId',
        'pallet_type_id' => 'setPalletTypeId',
        'carton_type_id' => 'setCartonTypeId',
        'order_no_list' => 'setOrderNoList',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'lob_id' => 'getLobId',
        'lpn' => 'getLpn',
        'behavior_type' => 'getBehaviorType',
        'warehouse_id' => 'getWarehouseId',
        'location_id' => 'getLocationId',
        'parent_load_id' => 'getParentLoadId',
        'pallet_type_id' => 'getPalletTypeId',
        'carton_type_id' => 'getCartonTypeId',
        'order_no_list' => 'getOrderNoList',
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['lpn'] = isset($data['lpn']) ? $data['lpn'] : null;
        $this->container['behavior_type'] = isset($data['behavior_type']) ? $data['behavior_type'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['parent_load_id'] = isset($data['parent_load_id']) ? $data['parent_load_id'] : null;
        $this->container['pallet_type_id'] = isset($data['pallet_type_id']) ? $data['pallet_type_id'] : null;
        $this->container['carton_type_id'] = isset($data['carton_type_id']) ? $data['carton_type_id'] : null;
        $this->container['order_no_list'] = isset($data['order_no_list']) ? $data['order_no_list'] : null;
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

        if ($this->container['lpn'] === null) {
            $invalidProperties[] = "'lpn' can't be null";
        }
        if ($this->container['behavior_type'] === null) {
            $invalidProperties[] = "'behavior_type' can't be null";
        }
        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
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

        if ($this->container['lpn'] === null) {
            return false;
        }
        if ($this->container['behavior_type'] === null) {
            return false;
        }
        if ($this->container['warehouse_id'] === null) {
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
     * Gets lob_id
     *
     * @return int
     */
    public function getLobId()
    {
        return $this->container['lob_id'];
    }

    /**
     * Sets lob_id
     *
     * @param int $lob_id lob_id
     *
     * @return $this
     */
    public function setLobId($lob_id)
    {
        $this->container['lob_id'] = $lob_id;

        return $this;
    }

    /**
     * Gets lpn
     *
     * @return string
     */
    public function getLpn()
    {
        return $this->container['lpn'];
    }

    /**
     * Sets lpn
     *
     * @param string $lpn lpn
     *
     * @return $this
     */
    public function setLpn($lpn)
    {
        $this->container['lpn'] = $lpn;

        return $this;
    }

    /**
     * Gets behavior_type
     *
     * @return string
     */
    public function getBehaviorType()
    {
        return $this->container['behavior_type'];
    }

    /**
     * Sets behavior_type
     *
     * @param string $behavior_type behavior_type
     *
     * @return $this
     */
    public function setBehaviorType($behavior_type)
    {
        $this->container['behavior_type'] = $behavior_type;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id warehouse_id
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets parent_load_id
     *
     * @return int
     */
    public function getParentLoadId()
    {
        return $this->container['parent_load_id'];
    }

    /**
     * Sets parent_load_id
     *
     * @param int $parent_load_id parent_load_id
     *
     * @return $this
     */
    public function setParentLoadId($parent_load_id)
    {
        $this->container['parent_load_id'] = $parent_load_id;

        return $this;
    }

    /**
     * Gets pallet_type_id
     *
     * @return int
     */
    public function getPalletTypeId()
    {
        return $this->container['pallet_type_id'];
    }

    /**
     * Sets pallet_type_id
     *
     * @param int $pallet_type_id pallet_type_id
     *
     * @return $this
     */
    public function setPalletTypeId($pallet_type_id)
    {
        $this->container['pallet_type_id'] = $pallet_type_id;

        return $this;
    }

    /**
     * Gets carton_type_id
     *
     * @return int
     */
    public function getCartonTypeId()
    {
        return $this->container['carton_type_id'];
    }

    /**
     * Sets carton_type_id
     *
     * @param int $carton_type_id carton_type_id
     *
     * @return $this
     */
    public function setCartonTypeId($carton_type_id)
    {
        $this->container['carton_type_id'] = $carton_type_id;

        return $this;
    }

    /**
     * Gets order_no_list
     *
     * @return float[]
     */
    public function getOrderNoList()
    {
        return $this->container['order_no_list'];
    }

    /**
     * Sets order_no_list
     *
     * @param float[] $order_no_list order_no_list
     *
     * @return $this
     */
    public function setOrderNoList($order_no_list)
    {
        $this->container['order_no_list'] = $order_no_list;

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

