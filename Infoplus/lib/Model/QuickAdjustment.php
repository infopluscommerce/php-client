<?php
/**
 * QuickAdjustment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Model;

use \ArrayAccess;
/**
 * QuickAdjustment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuickAdjustment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'warehouse_id' => 'int',
        'location_id' => 'int',
        'adjustment_code' => 'string',
        'total_quantity' => 'int',
        'message' => 'string',
        'status' => 'string',
        'sku' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'warehouse_id' => 'warehouseId',
        'location_id' => 'locationId',
        'adjustment_code' => 'adjustmentCode',
        'total_quantity' => 'totalQuantity',
        'message' => 'message',
        'status' => 'status',
        'sku' => 'sku'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'warehouse_id' => 'setWarehouseId',
        'location_id' => 'setLocationId',
        'adjustment_code' => 'setAdjustmentCode',
        'total_quantity' => 'setTotalQuantity',
        'message' => 'setMessage',
        'status' => 'setStatus',
        'sku' => 'setSku'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'warehouse_id' => 'getWarehouseId',
        'location_id' => 'getLocationId',
        'adjustment_code' => 'getAdjustmentCode',
        'total_quantity' => 'getTotalQuantity',
        'message' => 'getMessage',
        'status' => 'getStatus',
        'sku' => 'getSku'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $create_date 
      * @var \DateTime
      */
    protected $create_date;
    
    /**
      * $modify_date 
      * @var \DateTime
      */
    protected $modify_date;
    
    /**
      * $warehouse_id 
      * @var int
      */
    protected $warehouse_id;
    
    /**
      * $location_id 
      * @var int
      */
    protected $location_id;
    
    /**
      * $adjustment_code 
      * @var string
      */
    protected $adjustment_code;
    
    /**
      * $total_quantity 
      * @var int
      */
    protected $total_quantity;
    
    /**
      * $message 
      * @var string
      */
    protected $message;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    
    /**
      * $sku 
      * @var string
      */
    protected $sku;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->create_date = $data["create_date"];
            $this->modify_date = $data["modify_date"];
            $this->warehouse_id = $data["warehouse_id"];
            $this->location_id = $data["location_id"];
            $this->adjustment_code = $data["adjustment_code"];
            $this->total_quantity = $data["total_quantity"];
            $this->message = $data["message"];
            $this->status = $data["status"];
            $this->sku = $data["sku"];
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets create_date
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }
  
    /**
     * Sets create_date
     * @param \DateTime $create_date 
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        
        $this->create_date = $create_date;
        return $this;
    }
    
    /**
     * Gets modify_date
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->modify_date;
    }
  
    /**
     * Sets modify_date
     * @param \DateTime $modify_date 
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        
        $this->modify_date = $modify_date;
        return $this;
    }
    
    /**
     * Gets warehouse_id
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->warehouse_id;
    }
  
    /**
     * Sets warehouse_id
     * @param int $warehouse_id 
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        
        $this->warehouse_id = $warehouse_id;
        return $this;
    }
    
    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param int $location_id 
     * @return $this
     */
    public function setLocationId($location_id)
    {
        
        $this->location_id = $location_id;
        return $this;
    }
    
    /**
     * Gets adjustment_code
     * @return string
     */
    public function getAdjustmentCode()
    {
        return $this->adjustment_code;
    }
  
    /**
     * Sets adjustment_code
     * @param string $adjustment_code 
     * @return $this
     */
    public function setAdjustmentCode($adjustment_code)
    {
        
        $this->adjustment_code = $adjustment_code;
        return $this;
    }
    
    /**
     * Gets total_quantity
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->total_quantity;
    }
  
    /**
     * Sets total_quantity
     * @param int $total_quantity 
     * @return $this
     */
    public function setTotalQuantity($total_quantity)
    {
        
        $this->total_quantity = $total_quantity;
        return $this;
    }
    
    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
  
    /**
     * Sets message
     * @param string $message 
     * @return $this
     */
    public function setMessage($message)
    {
        
        $this->message = $message;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
  
    /**
     * Sets sku
     * @param string $sku 
     * @return $this
     */
    public function setSku($sku)
    {
        
        $this->sku = $sku;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Infoplus\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Infoplus\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
