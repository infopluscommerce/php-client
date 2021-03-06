<?php
/**
 * CartonContent
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
 * CartonContent Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartonContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cartonContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'group_order_id' => 'float',
        'order_no' => 'float',
        'carton_no' => 'int',
        'carton_id' => 'int',
        'line_item_id' => 'int',
        'sku' => 'string',
        'location' => 'string',
        'quantity' => 'int',
        'quantity_scanned' => 'int',
        'completed' => '\DateTime',
        'tote_id' => 'string',
        'picker_id' => 'string',
        'status' => 'string',
        'lob_id' => 'int',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'group_order_id' => null,
        'order_no' => null,
        'carton_no' => 'int32',
        'carton_id' => 'int32',
        'line_item_id' => 'int32',
        'sku' => null,
        'location' => null,
        'quantity' => 'int32',
        'quantity_scanned' => 'int32',
        'completed' => 'date-time',
        'tote_id' => null,
        'picker_id' => null,
        'status' => null,
        'lob_id' => 'int32',
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
        'group_order_id' => 'groupOrderId',
        'order_no' => 'orderNo',
        'carton_no' => 'cartonNo',
        'carton_id' => 'cartonId',
        'line_item_id' => 'lineItemId',
        'sku' => 'sku',
        'location' => 'location',
        'quantity' => 'quantity',
        'quantity_scanned' => 'quantityScanned',
        'completed' => 'completed',
        'tote_id' => 'toteId',
        'picker_id' => 'pickerId',
        'status' => 'status',
        'lob_id' => 'lobId',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_order_id' => 'setGroupOrderId',
        'order_no' => 'setOrderNo',
        'carton_no' => 'setCartonNo',
        'carton_id' => 'setCartonId',
        'line_item_id' => 'setLineItemId',
        'sku' => 'setSku',
        'location' => 'setLocation',
        'quantity' => 'setQuantity',
        'quantity_scanned' => 'setQuantityScanned',
        'completed' => 'setCompleted',
        'tote_id' => 'setToteId',
        'picker_id' => 'setPickerId',
        'status' => 'setStatus',
        'lob_id' => 'setLobId',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_order_id' => 'getGroupOrderId',
        'order_no' => 'getOrderNo',
        'carton_no' => 'getCartonNo',
        'carton_id' => 'getCartonId',
        'line_item_id' => 'getLineItemId',
        'sku' => 'getSku',
        'location' => 'getLocation',
        'quantity' => 'getQuantity',
        'quantity_scanned' => 'getQuantityScanned',
        'completed' => 'getCompleted',
        'tote_id' => 'getToteId',
        'picker_id' => 'getPickerId',
        'status' => 'getStatus',
        'lob_id' => 'getLobId',
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
        $this->container['group_order_id'] = isset($data['group_order_id']) ? $data['group_order_id'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['carton_no'] = isset($data['carton_no']) ? $data['carton_no'] : null;
        $this->container['carton_id'] = isset($data['carton_id']) ? $data['carton_id'] : null;
        $this->container['line_item_id'] = isset($data['line_item_id']) ? $data['line_item_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_scanned'] = isset($data['quantity_scanned']) ? $data['quantity_scanned'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['tote_id'] = isset($data['tote_id']) ? $data['tote_id'] : null;
        $this->container['picker_id'] = isset($data['picker_id']) ? $data['picker_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
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

        if ($this->container['order_no'] === null) {
            $invalidProperties[] = "'order_no' can't be null";
        }
        if ($this->container['carton_id'] === null) {
            $invalidProperties[] = "'carton_id' can't be null";
        }
        if ($this->container['line_item_id'] === null) {
            $invalidProperties[] = "'line_item_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
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

        if ($this->container['order_no'] === null) {
            return false;
        }
        if ($this->container['carton_id'] === null) {
            return false;
        }
        if ($this->container['line_item_id'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['lob_id'] === null) {
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
     * Gets group_order_id
     *
     * @return float
     */
    public function getGroupOrderId()
    {
        return $this->container['group_order_id'];
    }

    /**
     * Sets group_order_id
     *
     * @param float $group_order_id group_order_id
     *
     * @return $this
     */
    public function setGroupOrderId($group_order_id)
    {
        $this->container['group_order_id'] = $group_order_id;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return float
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param float $order_no order_no
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets carton_no
     *
     * @return int
     */
    public function getCartonNo()
    {
        return $this->container['carton_no'];
    }

    /**
     * Sets carton_no
     *
     * @param int $carton_no carton_no
     *
     * @return $this
     */
    public function setCartonNo($carton_no)
    {
        $this->container['carton_no'] = $carton_no;

        return $this;
    }

    /**
     * Gets carton_id
     *
     * @return int
     */
    public function getCartonId()
    {
        return $this->container['carton_id'];
    }

    /**
     * Sets carton_id
     *
     * @param int $carton_id carton_id
     *
     * @return $this
     */
    public function setCartonId($carton_id)
    {
        $this->container['carton_id'] = $carton_id;

        return $this;
    }

    /**
     * Gets line_item_id
     *
     * @return int
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param int $line_item_id line_item_id
     *
     * @return $this
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_scanned
     *
     * @return int
     */
    public function getQuantityScanned()
    {
        return $this->container['quantity_scanned'];
    }

    /**
     * Sets quantity_scanned
     *
     * @param int $quantity_scanned quantity_scanned
     *
     * @return $this
     */
    public function setQuantityScanned($quantity_scanned)
    {
        $this->container['quantity_scanned'] = $quantity_scanned;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return \DateTime
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param \DateTime $completed completed
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets tote_id
     *
     * @return string
     */
    public function getToteId()
    {
        return $this->container['tote_id'];
    }

    /**
     * Sets tote_id
     *
     * @param string $tote_id tote_id
     *
     * @return $this
     */
    public function setToteId($tote_id)
    {
        $this->container['tote_id'] = $tote_id;

        return $this;
    }

    /**
     * Gets picker_id
     *
     * @return string
     */
    public function getPickerId()
    {
        return $this->container['picker_id'];
    }

    /**
     * Sets picker_id
     *
     * @param string $picker_id picker_id
     *
     * @return $this
     */
    public function setPickerId($picker_id)
    {
        $this->container['picker_id'] = $picker_id;

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


