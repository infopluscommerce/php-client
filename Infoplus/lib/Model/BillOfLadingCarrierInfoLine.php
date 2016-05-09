<?php
/**
 * BillOfLadingCarrierInfoLine
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
 * BillOfLadingCarrierInfoLine Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillOfLadingCarrierInfoLine implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'seq_no' => 'int',
        'hu_quantity' => 'int',
        'hu_type' => 'string',
        'package_quantity' => 'int',
        'package_type' => 'string',
        'weight' => 'int',
        'is_hazardous_material' => 'bool',
        'commodity_description' => 'string',
        'nfmc_no' => 'string',
        'carrier_class' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'seq_no' => 'seqNo',
        'hu_quantity' => 'huQuantity',
        'hu_type' => 'huType',
        'package_quantity' => 'packageQuantity',
        'package_type' => 'packageType',
        'weight' => 'weight',
        'is_hazardous_material' => 'isHazardousMaterial',
        'commodity_description' => 'commodityDescription',
        'nfmc_no' => 'nfmcNo',
        'carrier_class' => 'carrierClass'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'seq_no' => 'setSeqNo',
        'hu_quantity' => 'setHuQuantity',
        'hu_type' => 'setHuType',
        'package_quantity' => 'setPackageQuantity',
        'package_type' => 'setPackageType',
        'weight' => 'setWeight',
        'is_hazardous_material' => 'setIsHazardousMaterial',
        'commodity_description' => 'setCommodityDescription',
        'nfmc_no' => 'setNfmcNo',
        'carrier_class' => 'setCarrierClass'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'seq_no' => 'getSeqNo',
        'hu_quantity' => 'getHuQuantity',
        'hu_type' => 'getHuType',
        'package_quantity' => 'getPackageQuantity',
        'package_type' => 'getPackageType',
        'weight' => 'getWeight',
        'is_hazardous_material' => 'getIsHazardousMaterial',
        'commodity_description' => 'getCommodityDescription',
        'nfmc_no' => 'getNfmcNo',
        'carrier_class' => 'getCarrierClass'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $seq_no 
      * @var int
      */
    protected $seq_no;
    
    /**
      * $hu_quantity 
      * @var int
      */
    protected $hu_quantity;
    
    /**
      * $hu_type 
      * @var string
      */
    protected $hu_type;
    
    /**
      * $package_quantity 
      * @var int
      */
    protected $package_quantity;
    
    /**
      * $package_type 
      * @var string
      */
    protected $package_type;
    
    /**
      * $weight 
      * @var int
      */
    protected $weight;
    
    /**
      * $is_hazardous_material 
      * @var bool
      */
    protected $is_hazardous_material = false;
    
    /**
      * $commodity_description 
      * @var string
      */
    protected $commodity_description;
    
    /**
      * $nfmc_no 
      * @var string
      */
    protected $nfmc_no;
    
    /**
      * $carrier_class 
      * @var string
      */
    protected $carrier_class;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->seq_no = $data["seq_no"];
            $this->hu_quantity = $data["hu_quantity"];
            $this->hu_type = $data["hu_type"];
            $this->package_quantity = $data["package_quantity"];
            $this->package_type = $data["package_type"];
            $this->weight = $data["weight"];
            $this->is_hazardous_material = $data["is_hazardous_material"];
            $this->commodity_description = $data["commodity_description"];
            $this->nfmc_no = $data["nfmc_no"];
            $this->carrier_class = $data["carrier_class"];
        }
    }
    
    /**
     * Gets seq_no
     * @return int
     */
    public function getSeqNo()
    {
        return $this->seq_no;
    }
  
    /**
     * Sets seq_no
     * @param int $seq_no 
     * @return $this
     */
    public function setSeqNo($seq_no)
    {
        
        $this->seq_no = $seq_no;
        return $this;
    }
    
    /**
     * Gets hu_quantity
     * @return int
     */
    public function getHuQuantity()
    {
        return $this->hu_quantity;
    }
  
    /**
     * Sets hu_quantity
     * @param int $hu_quantity 
     * @return $this
     */
    public function setHuQuantity($hu_quantity)
    {
        
        $this->hu_quantity = $hu_quantity;
        return $this;
    }
    
    /**
     * Gets hu_type
     * @return string
     */
    public function getHuType()
    {
        return $this->hu_type;
    }
  
    /**
     * Sets hu_type
     * @param string $hu_type 
     * @return $this
     */
    public function setHuType($hu_type)
    {
        
        $this->hu_type = $hu_type;
        return $this;
    }
    
    /**
     * Gets package_quantity
     * @return int
     */
    public function getPackageQuantity()
    {
        return $this->package_quantity;
    }
  
    /**
     * Sets package_quantity
     * @param int $package_quantity 
     * @return $this
     */
    public function setPackageQuantity($package_quantity)
    {
        
        $this->package_quantity = $package_quantity;
        return $this;
    }
    
    /**
     * Gets package_type
     * @return string
     */
    public function getPackageType()
    {
        return $this->package_type;
    }
  
    /**
     * Sets package_type
     * @param string $package_type 
     * @return $this
     */
    public function setPackageType($package_type)
    {
        
        $this->package_type = $package_type;
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
     * Gets is_hazardous_material
     * @return bool
     */
    public function getIsHazardousMaterial()
    {
        return $this->is_hazardous_material;
    }
  
    /**
     * Sets is_hazardous_material
     * @param bool $is_hazardous_material 
     * @return $this
     */
    public function setIsHazardousMaterial($is_hazardous_material)
    {
        
        $this->is_hazardous_material = $is_hazardous_material;
        return $this;
    }
    
    /**
     * Gets commodity_description
     * @return string
     */
    public function getCommodityDescription()
    {
        return $this->commodity_description;
    }
  
    /**
     * Sets commodity_description
     * @param string $commodity_description 
     * @return $this
     */
    public function setCommodityDescription($commodity_description)
    {
        
        $this->commodity_description = $commodity_description;
        return $this;
    }
    
    /**
     * Gets nfmc_no
     * @return string
     */
    public function getNfmcNo()
    {
        return $this->nfmc_no;
    }
  
    /**
     * Sets nfmc_no
     * @param string $nfmc_no 
     * @return $this
     */
    public function setNfmcNo($nfmc_no)
    {
        
        $this->nfmc_no = $nfmc_no;
        return $this;
    }
    
    /**
     * Gets carrier_class
     * @return string
     */
    public function getCarrierClass()
    {
        return $this->carrier_class;
    }
  
    /**
     * Sets carrier_class
     * @param string $carrier_class 
     * @return $this
     */
    public function setCarrierClass($carrier_class)
    {
        
        $this->carrier_class = $carrier_class;
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
