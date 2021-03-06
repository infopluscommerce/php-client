<?php
/**
 * Work
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
 * Work Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Work implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'work';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'source_warehouse_id' => 'int',
        'source_building_id' => 'int',
        'source_location' => 'string',
        'destination_warehouse_id' => 'int',
        'destination_building_id' => 'int',
        'destination_location' => 'string',
        'type' => 'string',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'priority_code' => 'int',
        'user_defined_message' => 'string',
        'status' => 'string',
        'user_id' => 'int',
        'lob_id' => 'int',
        'work_batch_id' => 'int',
        'work_product_list' => '\Infoplus\Infoplus\Model\WorkProduct[]',
        'fulfillment_process_id' => 'int',
        'pick_line_id' => 'int',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'source_warehouse_id' => 'int32',
        'source_building_id' => 'int32',
        'source_location' => null,
        'destination_warehouse_id' => 'int32',
        'destination_building_id' => 'int32',
        'destination_location' => null,
        'type' => null,
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'priority_code' => 'int32',
        'user_defined_message' => null,
        'status' => null,
        'user_id' => 'int32',
        'lob_id' => 'int32',
        'work_batch_id' => 'int32',
        'work_product_list' => null,
        'fulfillment_process_id' => 'int32',
        'pick_line_id' => 'int32',
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
        'source_warehouse_id' => 'sourceWarehouseId',
        'source_building_id' => 'sourceBuildingId',
        'source_location' => 'sourceLocation',
        'destination_warehouse_id' => 'destinationWarehouseId',
        'destination_building_id' => 'destinationBuildingId',
        'destination_location' => 'destinationLocation',
        'type' => 'type',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'priority_code' => 'priorityCode',
        'user_defined_message' => 'userDefinedMessage',
        'status' => 'status',
        'user_id' => 'userId',
        'lob_id' => 'lobId',
        'work_batch_id' => 'workBatchId',
        'work_product_list' => 'workProductList',
        'fulfillment_process_id' => 'fulfillmentProcessId',
        'pick_line_id' => 'pickLineId',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source_warehouse_id' => 'setSourceWarehouseId',
        'source_building_id' => 'setSourceBuildingId',
        'source_location' => 'setSourceLocation',
        'destination_warehouse_id' => 'setDestinationWarehouseId',
        'destination_building_id' => 'setDestinationBuildingId',
        'destination_location' => 'setDestinationLocation',
        'type' => 'setType',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'priority_code' => 'setPriorityCode',
        'user_defined_message' => 'setUserDefinedMessage',
        'status' => 'setStatus',
        'user_id' => 'setUserId',
        'lob_id' => 'setLobId',
        'work_batch_id' => 'setWorkBatchId',
        'work_product_list' => 'setWorkProductList',
        'fulfillment_process_id' => 'setFulfillmentProcessId',
        'pick_line_id' => 'setPickLineId',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source_warehouse_id' => 'getSourceWarehouseId',
        'source_building_id' => 'getSourceBuildingId',
        'source_location' => 'getSourceLocation',
        'destination_warehouse_id' => 'getDestinationWarehouseId',
        'destination_building_id' => 'getDestinationBuildingId',
        'destination_location' => 'getDestinationLocation',
        'type' => 'getType',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'priority_code' => 'getPriorityCode',
        'user_defined_message' => 'getUserDefinedMessage',
        'status' => 'getStatus',
        'user_id' => 'getUserId',
        'lob_id' => 'getLobId',
        'work_batch_id' => 'getWorkBatchId',
        'work_product_list' => 'getWorkProductList',
        'fulfillment_process_id' => 'getFulfillmentProcessId',
        'pick_line_id' => 'getPickLineId',
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
        $this->container['source_warehouse_id'] = isset($data['source_warehouse_id']) ? $data['source_warehouse_id'] : null;
        $this->container['source_building_id'] = isset($data['source_building_id']) ? $data['source_building_id'] : null;
        $this->container['source_location'] = isset($data['source_location']) ? $data['source_location'] : null;
        $this->container['destination_warehouse_id'] = isset($data['destination_warehouse_id']) ? $data['destination_warehouse_id'] : null;
        $this->container['destination_building_id'] = isset($data['destination_building_id']) ? $data['destination_building_id'] : null;
        $this->container['destination_location'] = isset($data['destination_location']) ? $data['destination_location'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['priority_code'] = isset($data['priority_code']) ? $data['priority_code'] : null;
        $this->container['user_defined_message'] = isset($data['user_defined_message']) ? $data['user_defined_message'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['work_batch_id'] = isset($data['work_batch_id']) ? $data['work_batch_id'] : null;
        $this->container['work_product_list'] = isset($data['work_product_list']) ? $data['work_product_list'] : null;
        $this->container['fulfillment_process_id'] = isset($data['fulfillment_process_id']) ? $data['fulfillment_process_id'] : null;
        $this->container['pick_line_id'] = isset($data['pick_line_id']) ? $data['pick_line_id'] : null;
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

        if ($this->container['source_warehouse_id'] === null) {
            $invalidProperties[] = "'source_warehouse_id' can't be null";
        }
        if ($this->container['source_building_id'] === null) {
            $invalidProperties[] = "'source_building_id' can't be null";
        }
        if ($this->container['source_location'] === null) {
            $invalidProperties[] = "'source_location' can't be null";
        }
        if ($this->container['destination_warehouse_id'] === null) {
            $invalidProperties[] = "'destination_warehouse_id' can't be null";
        }
        if ($this->container['destination_building_id'] === null) {
            $invalidProperties[] = "'destination_building_id' can't be null";
        }
        if ($this->container['destination_location'] === null) {
            $invalidProperties[] = "'destination_location' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['priority_code'] === null) {
            $invalidProperties[] = "'priority_code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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

        if ($this->container['source_warehouse_id'] === null) {
            return false;
        }
        if ($this->container['source_building_id'] === null) {
            return false;
        }
        if ($this->container['source_location'] === null) {
            return false;
        }
        if ($this->container['destination_warehouse_id'] === null) {
            return false;
        }
        if ($this->container['destination_building_id'] === null) {
            return false;
        }
        if ($this->container['destination_location'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['priority_code'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
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
     * Gets source_warehouse_id
     *
     * @return int
     */
    public function getSourceWarehouseId()
    {
        return $this->container['source_warehouse_id'];
    }

    /**
     * Sets source_warehouse_id
     *
     * @param int $source_warehouse_id source_warehouse_id
     *
     * @return $this
     */
    public function setSourceWarehouseId($source_warehouse_id)
    {
        $this->container['source_warehouse_id'] = $source_warehouse_id;

        return $this;
    }

    /**
     * Gets source_building_id
     *
     * @return int
     */
    public function getSourceBuildingId()
    {
        return $this->container['source_building_id'];
    }

    /**
     * Sets source_building_id
     *
     * @param int $source_building_id source_building_id
     *
     * @return $this
     */
    public function setSourceBuildingId($source_building_id)
    {
        $this->container['source_building_id'] = $source_building_id;

        return $this;
    }

    /**
     * Gets source_location
     *
     * @return string
     */
    public function getSourceLocation()
    {
        return $this->container['source_location'];
    }

    /**
     * Sets source_location
     *
     * @param string $source_location source_location
     *
     * @return $this
     */
    public function setSourceLocation($source_location)
    {
        $this->container['source_location'] = $source_location;

        return $this;
    }

    /**
     * Gets destination_warehouse_id
     *
     * @return int
     */
    public function getDestinationWarehouseId()
    {
        return $this->container['destination_warehouse_id'];
    }

    /**
     * Sets destination_warehouse_id
     *
     * @param int $destination_warehouse_id destination_warehouse_id
     *
     * @return $this
     */
    public function setDestinationWarehouseId($destination_warehouse_id)
    {
        $this->container['destination_warehouse_id'] = $destination_warehouse_id;

        return $this;
    }

    /**
     * Gets destination_building_id
     *
     * @return int
     */
    public function getDestinationBuildingId()
    {
        return $this->container['destination_building_id'];
    }

    /**
     * Sets destination_building_id
     *
     * @param int $destination_building_id destination_building_id
     *
     * @return $this
     */
    public function setDestinationBuildingId($destination_building_id)
    {
        $this->container['destination_building_id'] = $destination_building_id;

        return $this;
    }

    /**
     * Gets destination_location
     *
     * @return string
     */
    public function getDestinationLocation()
    {
        return $this->container['destination_location'];
    }

    /**
     * Sets destination_location
     *
     * @param string $destination_location destination_location
     *
     * @return $this
     */
    public function setDestinationLocation($destination_location)
    {
        $this->container['destination_location'] = $destination_location;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets priority_code
     *
     * @return int
     */
    public function getPriorityCode()
    {
        return $this->container['priority_code'];
    }

    /**
     * Sets priority_code
     *
     * @param int $priority_code priority_code
     *
     * @return $this
     */
    public function setPriorityCode($priority_code)
    {
        $this->container['priority_code'] = $priority_code;

        return $this;
    }

    /**
     * Gets user_defined_message
     *
     * @return string
     */
    public function getUserDefinedMessage()
    {
        return $this->container['user_defined_message'];
    }

    /**
     * Sets user_defined_message
     *
     * @param string $user_defined_message user_defined_message
     *
     * @return $this
     */
    public function setUserDefinedMessage($user_defined_message)
    {
        $this->container['user_defined_message'] = $user_defined_message;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * Gets work_batch_id
     *
     * @return int
     */
    public function getWorkBatchId()
    {
        return $this->container['work_batch_id'];
    }

    /**
     * Sets work_batch_id
     *
     * @param int $work_batch_id work_batch_id
     *
     * @return $this
     */
    public function setWorkBatchId($work_batch_id)
    {
        $this->container['work_batch_id'] = $work_batch_id;

        return $this;
    }

    /**
     * Gets work_product_list
     *
     * @return \Infoplus\Infoplus\Model\WorkProduct[]
     */
    public function getWorkProductList()
    {
        return $this->container['work_product_list'];
    }

    /**
     * Sets work_product_list
     *
     * @param \Infoplus\Infoplus\Model\WorkProduct[] $work_product_list work_product_list
     *
     * @return $this
     */
    public function setWorkProductList($work_product_list)
    {
        $this->container['work_product_list'] = $work_product_list;

        return $this;
    }

    /**
     * Gets fulfillment_process_id
     *
     * @return int
     */
    public function getFulfillmentProcessId()
    {
        return $this->container['fulfillment_process_id'];
    }

    /**
     * Sets fulfillment_process_id
     *
     * @param int $fulfillment_process_id fulfillment_process_id
     *
     * @return $this
     */
    public function setFulfillmentProcessId($fulfillment_process_id)
    {
        $this->container['fulfillment_process_id'] = $fulfillment_process_id;

        return $this;
    }

    /**
     * Gets pick_line_id
     *
     * @return int
     */
    public function getPickLineId()
    {
        return $this->container['pick_line_id'];
    }

    /**
     * Sets pick_line_id
     *
     * @param int $pick_line_id pick_line_id
     *
     * @return $this
     */
    public function setPickLineId($pick_line_id)
    {
        $this->container['pick_line_id'] = $pick_line_id;

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


