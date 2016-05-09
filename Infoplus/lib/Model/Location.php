<?php
/**
 * Location
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
 * Location Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Location implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'warehouse_id' => 'int',
        'building_id' => 'int',
        'zone_id' => 'int',
        'aisle_id' => 'int',
        'billing_type_id' => 'int',
        'behavior_type' => 'string',
        'footprint_id' => 'int',
        'address_scheme_id' => 'int',
        'origin' => 'int',
        'address' => 'string',
        'level' => 'int',
        'bay' => 'int',
        'number' => 'int',
        'online' => 'bool',
        'priority_code' => 'int',
        'allow_item_mixing' => 'bool',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime'
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
        'warehouse_id' => 'warehouseId',
        'building_id' => 'buildingId',
        'zone_id' => 'zoneId',
        'aisle_id' => 'aisleId',
        'billing_type_id' => 'billingTypeId',
        'behavior_type' => 'behaviorType',
        'footprint_id' => 'footprintId',
        'address_scheme_id' => 'addressSchemeId',
        'origin' => 'origin',
        'address' => 'address',
        'level' => 'level',
        'bay' => 'bay',
        'number' => 'number',
        'online' => 'online',
        'priority_code' => 'priorityCode',
        'allow_item_mixing' => 'allowItemMixing',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate'
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
        'warehouse_id' => 'setWarehouseId',
        'building_id' => 'setBuildingId',
        'zone_id' => 'setZoneId',
        'aisle_id' => 'setAisleId',
        'billing_type_id' => 'setBillingTypeId',
        'behavior_type' => 'setBehaviorType',
        'footprint_id' => 'setFootprintId',
        'address_scheme_id' => 'setAddressSchemeId',
        'origin' => 'setOrigin',
        'address' => 'setAddress',
        'level' => 'setLevel',
        'bay' => 'setBay',
        'number' => 'setNumber',
        'online' => 'setOnline',
        'priority_code' => 'setPriorityCode',
        'allow_item_mixing' => 'setAllowItemMixing',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate'
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
        'warehouse_id' => 'getWarehouseId',
        'building_id' => 'getBuildingId',
        'zone_id' => 'getZoneId',
        'aisle_id' => 'getAisleId',
        'billing_type_id' => 'getBillingTypeId',
        'behavior_type' => 'getBehaviorType',
        'footprint_id' => 'getFootprintId',
        'address_scheme_id' => 'getAddressSchemeId',
        'origin' => 'getOrigin',
        'address' => 'getAddress',
        'level' => 'getLevel',
        'bay' => 'getBay',
        'number' => 'getNumber',
        'online' => 'getOnline',
        'priority_code' => 'getPriorityCode',
        'allow_item_mixing' => 'getAllowItemMixing',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate'
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
      * $warehouse_id 
      * @var int
      */
    protected $warehouse_id;
    
    /**
      * $building_id 
      * @var int
      */
    protected $building_id;
    
    /**
      * $zone_id 
      * @var int
      */
    protected $zone_id;
    
    /**
      * $aisle_id 
      * @var int
      */
    protected $aisle_id;
    
    /**
      * $billing_type_id 
      * @var int
      */
    protected $billing_type_id;
    
    /**
      * $behavior_type 
      * @var string
      */
    protected $behavior_type;
    
    /**
      * $footprint_id 
      * @var int
      */
    protected $footprint_id;
    
    /**
      * $address_scheme_id 
      * @var int
      */
    protected $address_scheme_id;
    
    /**
      * $origin 
      * @var int
      */
    protected $origin;
    
    /**
      * $address 
      * @var string
      */
    protected $address;
    
    /**
      * $level 
      * @var int
      */
    protected $level;
    
    /**
      * $bay 
      * @var int
      */
    protected $bay;
    
    /**
      * $number 
      * @var int
      */
    protected $number;
    
    /**
      * $online 
      * @var bool
      */
    protected $online = false;
    
    /**
      * $priority_code 
      * @var int
      */
    protected $priority_code;
    
    /**
      * $allow_item_mixing 
      * @var bool
      */
    protected $allow_item_mixing = false;
    
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
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->warehouse_id = $data["warehouse_id"];
            $this->building_id = $data["building_id"];
            $this->zone_id = $data["zone_id"];
            $this->aisle_id = $data["aisle_id"];
            $this->billing_type_id = $data["billing_type_id"];
            $this->behavior_type = $data["behavior_type"];
            $this->footprint_id = $data["footprint_id"];
            $this->address_scheme_id = $data["address_scheme_id"];
            $this->origin = $data["origin"];
            $this->address = $data["address"];
            $this->level = $data["level"];
            $this->bay = $data["bay"];
            $this->number = $data["number"];
            $this->online = $data["online"];
            $this->priority_code = $data["priority_code"];
            $this->allow_item_mixing = $data["allow_item_mixing"];
            $this->create_date = $data["create_date"];
            $this->modify_date = $data["modify_date"];
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
     * Gets building_id
     * @return int
     */
    public function getBuildingId()
    {
        return $this->building_id;
    }
  
    /**
     * Sets building_id
     * @param int $building_id 
     * @return $this
     */
    public function setBuildingId($building_id)
    {
        
        $this->building_id = $building_id;
        return $this;
    }
    
    /**
     * Gets zone_id
     * @return int
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }
  
    /**
     * Sets zone_id
     * @param int $zone_id 
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        
        $this->zone_id = $zone_id;
        return $this;
    }
    
    /**
     * Gets aisle_id
     * @return int
     */
    public function getAisleId()
    {
        return $this->aisle_id;
    }
  
    /**
     * Sets aisle_id
     * @param int $aisle_id 
     * @return $this
     */
    public function setAisleId($aisle_id)
    {
        
        $this->aisle_id = $aisle_id;
        return $this;
    }
    
    /**
     * Gets billing_type_id
     * @return int
     */
    public function getBillingTypeId()
    {
        return $this->billing_type_id;
    }
  
    /**
     * Sets billing_type_id
     * @param int $billing_type_id 
     * @return $this
     */
    public function setBillingTypeId($billing_type_id)
    {
        
        $this->billing_type_id = $billing_type_id;
        return $this;
    }
    
    /**
     * Gets behavior_type
     * @return string
     */
    public function getBehaviorType()
    {
        return $this->behavior_type;
    }
  
    /**
     * Sets behavior_type
     * @param string $behavior_type 
     * @return $this
     */
    public function setBehaviorType($behavior_type)
    {
        
        $this->behavior_type = $behavior_type;
        return $this;
    }
    
    /**
     * Gets footprint_id
     * @return int
     */
    public function getFootprintId()
    {
        return $this->footprint_id;
    }
  
    /**
     * Sets footprint_id
     * @param int $footprint_id 
     * @return $this
     */
    public function setFootprintId($footprint_id)
    {
        
        $this->footprint_id = $footprint_id;
        return $this;
    }
    
    /**
     * Gets address_scheme_id
     * @return int
     */
    public function getAddressSchemeId()
    {
        return $this->address_scheme_id;
    }
  
    /**
     * Sets address_scheme_id
     * @param int $address_scheme_id 
     * @return $this
     */
    public function setAddressSchemeId($address_scheme_id)
    {
        
        $this->address_scheme_id = $address_scheme_id;
        return $this;
    }
    
    /**
     * Gets origin
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }
  
    /**
     * Sets origin
     * @param int $origin 
     * @return $this
     */
    public function setOrigin($origin)
    {
        
        $this->origin = $origin;
        return $this;
    }
    
    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param string $address 
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
        return $this;
    }
    
    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
  
    /**
     * Sets level
     * @param int $level 
     * @return $this
     */
    public function setLevel($level)
    {
        
        $this->level = $level;
        return $this;
    }
    
    /**
     * Gets bay
     * @return int
     */
    public function getBay()
    {
        return $this->bay;
    }
  
    /**
     * Sets bay
     * @param int $bay 
     * @return $this
     */
    public function setBay($bay)
    {
        
        $this->bay = $bay;
        return $this;
    }
    
    /**
     * Gets number
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
  
    /**
     * Sets number
     * @param int $number 
     * @return $this
     */
    public function setNumber($number)
    {
        
        $this->number = $number;
        return $this;
    }
    
    /**
     * Gets online
     * @return bool
     */
    public function getOnline()
    {
        return $this->online;
    }
  
    /**
     * Sets online
     * @param bool $online 
     * @return $this
     */
    public function setOnline($online)
    {
        
        $this->online = $online;
        return $this;
    }
    
    /**
     * Gets priority_code
     * @return int
     */
    public function getPriorityCode()
    {
        return $this->priority_code;
    }
  
    /**
     * Sets priority_code
     * @param int $priority_code 
     * @return $this
     */
    public function setPriorityCode($priority_code)
    {
        
        $this->priority_code = $priority_code;
        return $this;
    }
    
    /**
     * Gets allow_item_mixing
     * @return bool
     */
    public function getAllowItemMixing()
    {
        return $this->allow_item_mixing;
    }
  
    /**
     * Sets allow_item_mixing
     * @param bool $allow_item_mixing 
     * @return $this
     */
    public function setAllowItemMixing($allow_item_mixing)
    {
        
        $this->allow_item_mixing = $allow_item_mixing;
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
