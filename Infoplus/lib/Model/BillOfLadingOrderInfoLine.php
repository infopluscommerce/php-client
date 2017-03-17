<?php
/**
 * BillOfLadingOrderInfoLine
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
 * BillOfLadingOrderInfoLine Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillOfLadingOrderInfoLine implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'customer_order_no' => 'string',
        'no_packages' => 'int',
        'weight' => 'int',
        'palletslip' => 'bool',
        'additional_shipper_info' => 'string',
        'custom_fields' => 'map[string,object]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'customer_order_no' => 'customerOrderNo',
        'no_packages' => 'noPackages',
        'weight' => 'weight',
        'palletslip' => 'palletslip',
        'additional_shipper_info' => 'additionalShipperInfo',
        'custom_fields' => 'customFields'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'customer_order_no' => 'setCustomerOrderNo',
        'no_packages' => 'setNoPackages',
        'weight' => 'setWeight',
        'palletslip' => 'setPalletslip',
        'additional_shipper_info' => 'setAdditionalShipperInfo',
        'custom_fields' => 'setCustomFields'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'customer_order_no' => 'getCustomerOrderNo',
        'no_packages' => 'getNoPackages',
        'weight' => 'getWeight',
        'palletslip' => 'getPalletslip',
        'additional_shipper_info' => 'getAdditionalShipperInfo',
        'custom_fields' => 'getCustomFields'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $customer_order_no 
      * @var string
      */
    protected $customer_order_no;
    
    /**
      * $no_packages 
      * @var int
      */
    protected $no_packages;
    
    /**
      * $weight 
      * @var int
      */
    protected $weight;
    
    /**
      * $palletslip 
      * @var bool
      */
    protected $palletslip = false;
    
    /**
      * $additional_shipper_info 
      * @var string
      */
    protected $additional_shipper_info;
    
    /**
      * $custom_fields 
      * @var map[string,object]
      */
    protected $custom_fields;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->customer_order_no = $data["customer_order_no"];
            $this->no_packages = $data["no_packages"];
            $this->weight = $data["weight"];
            $this->palletslip = $data["palletslip"];
            $this->additional_shipper_info = $data["additional_shipper_info"];
            $this->custom_fields = $data["custom_fields"];
        }
    }
    
    /**
     * Gets customer_order_no
     * @return string
     */
    public function getCustomerOrderNo()
    {
        return $this->customer_order_no;
    }
  
    /**
     * Sets customer_order_no
     * @param string $customer_order_no 
     * @return $this
     */
    public function setCustomerOrderNo($customer_order_no)
    {
        
        $this->customer_order_no = $customer_order_no;
        return $this;
    }
    
    /**
     * Gets no_packages
     * @return int
     */
    public function getNoPackages()
    {
        return $this->no_packages;
    }
  
    /**
     * Sets no_packages
     * @param int $no_packages 
     * @return $this
     */
    public function setNoPackages($no_packages)
    {
        
        $this->no_packages = $no_packages;
        return $this;
    }
    
    /**
     * Gets weight
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }
  
    /**
     * Sets weight
     * @param int $weight 
     * @return $this
     */
    public function setWeight($weight)
    {
        
        $this->weight = $weight;
        return $this;
    }
    
    /**
     * Gets palletslip
     * @return bool
     */
    public function getPalletslip()
    {
        return $this->palletslip;
    }
  
    /**
     * Sets palletslip
     * @param bool $palletslip 
     * @return $this
     */
    public function setPalletslip($palletslip)
    {
        
        $this->palletslip = $palletslip;
        return $this;
    }
    
    /**
     * Gets additional_shipper_info
     * @return string
     */
    public function getAdditionalShipperInfo()
    {
        return $this->additional_shipper_info;
    }
  
    /**
     * Sets additional_shipper_info
     * @param string $additional_shipper_info 
     * @return $this
     */
    public function setAdditionalShipperInfo($additional_shipper_info)
    {
        
        $this->additional_shipper_info = $additional_shipper_info;
        return $this;
    }
    
    /**
     * Gets custom_fields
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }
  
    /**
     * Sets custom_fields
     * @param map[string,object] $custom_fields 
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        
        $this->custom_fields = $custom_fields;
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
