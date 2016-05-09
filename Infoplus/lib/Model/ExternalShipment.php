<?php
/**
 * ExternalShipment
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
 * ExternalShipment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExternalShipment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'order_id' => 'double',
        'carrier_id' => 'int',
        'parcel_account_id' => 'int',
        'third_party_parcel_account_id' => 'int',
        'freight' => 'double',
        'tracking_no' => 'string',
        'dim1_in' => 'double',
        'dim2_in' => 'double',
        'dim3_in' => 'double',
        'weight_lbs' => 'double',
        'dim_weight' => 'double',
        'residential' => 'bool',
        'zone' => 'string',
        'status' => 'string'
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
        'order_id' => 'orderId',
        'carrier_id' => 'carrierId',
        'parcel_account_id' => 'parcelAccountId',
        'third_party_parcel_account_id' => 'thirdPartyParcelAccountId',
        'freight' => 'freight',
        'tracking_no' => 'trackingNo',
        'dim1_in' => 'dim1In',
        'dim2_in' => 'dim2In',
        'dim3_in' => 'dim3In',
        'weight_lbs' => 'weightLbs',
        'dim_weight' => 'dimWeight',
        'residential' => 'residential',
        'zone' => 'zone',
        'status' => 'status'
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
        'order_id' => 'setOrderId',
        'carrier_id' => 'setCarrierId',
        'parcel_account_id' => 'setParcelAccountId',
        'third_party_parcel_account_id' => 'setThirdPartyParcelAccountId',
        'freight' => 'setFreight',
        'tracking_no' => 'setTrackingNo',
        'dim1_in' => 'setDim1In',
        'dim2_in' => 'setDim2In',
        'dim3_in' => 'setDim3In',
        'weight_lbs' => 'setWeightLbs',
        'dim_weight' => 'setDimWeight',
        'residential' => 'setResidential',
        'zone' => 'setZone',
        'status' => 'setStatus'
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
        'order_id' => 'getOrderId',
        'carrier_id' => 'getCarrierId',
        'parcel_account_id' => 'getParcelAccountId',
        'third_party_parcel_account_id' => 'getThirdPartyParcelAccountId',
        'freight' => 'getFreight',
        'tracking_no' => 'getTrackingNo',
        'dim1_in' => 'getDim1In',
        'dim2_in' => 'getDim2In',
        'dim3_in' => 'getDim3In',
        'weight_lbs' => 'getWeightLbs',
        'dim_weight' => 'getDimWeight',
        'residential' => 'getResidential',
        'zone' => 'getZone',
        'status' => 'getStatus'
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
      * $order_id 
      * @var double
      */
    protected $order_id;
    
    /**
      * $carrier_id 
      * @var int
      */
    protected $carrier_id;
    
    /**
      * $parcel_account_id 
      * @var int
      */
    protected $parcel_account_id;
    
    /**
      * $third_party_parcel_account_id 
      * @var int
      */
    protected $third_party_parcel_account_id;
    
    /**
      * $freight 
      * @var double
      */
    protected $freight;
    
    /**
      * $tracking_no 
      * @var string
      */
    protected $tracking_no;
    
    /**
      * $dim1_in 
      * @var double
      */
    protected $dim1_in;
    
    /**
      * $dim2_in 
      * @var double
      */
    protected $dim2_in;
    
    /**
      * $dim3_in 
      * @var double
      */
    protected $dim3_in;
    
    /**
      * $weight_lbs 
      * @var double
      */
    protected $weight_lbs;
    
    /**
      * $dim_weight 
      * @var double
      */
    protected $dim_weight;
    
    /**
      * $residential 
      * @var bool
      */
    protected $residential = false;
    
    /**
      * $zone 
      * @var string
      */
    protected $zone;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    

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
            $this->order_id = $data["order_id"];
            $this->carrier_id = $data["carrier_id"];
            $this->parcel_account_id = $data["parcel_account_id"];
            $this->third_party_parcel_account_id = $data["third_party_parcel_account_id"];
            $this->freight = $data["freight"];
            $this->tracking_no = $data["tracking_no"];
            $this->dim1_in = $data["dim1_in"];
            $this->dim2_in = $data["dim2_in"];
            $this->dim3_in = $data["dim3_in"];
            $this->weight_lbs = $data["weight_lbs"];
            $this->dim_weight = $data["dim_weight"];
            $this->residential = $data["residential"];
            $this->zone = $data["zone"];
            $this->status = $data["status"];
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
     * Gets order_id
     * @return double
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param double $order_id 
     * @return $this
     */
    public function setOrderId($order_id)
    {
        
        $this->order_id = $order_id;
        return $this;
    }
    
    /**
     * Gets carrier_id
     * @return int
     */
    public function getCarrierId()
    {
        return $this->carrier_id;
    }
  
    /**
     * Sets carrier_id
     * @param int $carrier_id 
     * @return $this
     */
    public function setCarrierId($carrier_id)
    {
        
        $this->carrier_id = $carrier_id;
        return $this;
    }
    
    /**
     * Gets parcel_account_id
     * @return int
     */
    public function getParcelAccountId()
    {
        return $this->parcel_account_id;
    }
  
    /**
     * Sets parcel_account_id
     * @param int $parcel_account_id 
     * @return $this
     */
    public function setParcelAccountId($parcel_account_id)
    {
        
        $this->parcel_account_id = $parcel_account_id;
        return $this;
    }
    
    /**
     * Gets third_party_parcel_account_id
     * @return int
     */
    public function getThirdPartyParcelAccountId()
    {
        return $this->third_party_parcel_account_id;
    }
  
    /**
     * Sets third_party_parcel_account_id
     * @param int $third_party_parcel_account_id 
     * @return $this
     */
    public function setThirdPartyParcelAccountId($third_party_parcel_account_id)
    {
        
        $this->third_party_parcel_account_id = $third_party_parcel_account_id;
        return $this;
    }
    
    /**
     * Gets freight
     * @return double
     */
    public function getFreight()
    {
        return $this->freight;
    }
  
    /**
     * Sets freight
     * @param double $freight 
     * @return $this
     */
    public function setFreight($freight)
    {
        
        $this->freight = $freight;
        return $this;
    }
    
    /**
     * Gets tracking_no
     * @return string
     */
    public function getTrackingNo()
    {
        return $this->tracking_no;
    }
  
    /**
     * Sets tracking_no
     * @param string $tracking_no 
     * @return $this
     */
    public function setTrackingNo($tracking_no)
    {
        
        $this->tracking_no = $tracking_no;
        return $this;
    }
    
    /**
     * Gets dim1_in
     * @return double
     */
    public function getDim1In()
    {
        return $this->dim1_in;
    }
  
    /**
     * Sets dim1_in
     * @param double $dim1_in 
     * @return $this
     */
    public function setDim1In($dim1_in)
    {
        
        $this->dim1_in = $dim1_in;
        return $this;
    }
    
    /**
     * Gets dim2_in
     * @return double
     */
    public function getDim2In()
    {
        return $this->dim2_in;
    }
  
    /**
     * Sets dim2_in
     * @param double $dim2_in 
     * @return $this
     */
    public function setDim2In($dim2_in)
    {
        
        $this->dim2_in = $dim2_in;
        return $this;
    }
    
    /**
     * Gets dim3_in
     * @return double
     */
    public function getDim3In()
    {
        return $this->dim3_in;
    }
  
    /**
     * Sets dim3_in
     * @param double $dim3_in 
     * @return $this
     */
    public function setDim3In($dim3_in)
    {
        
        $this->dim3_in = $dim3_in;
        return $this;
    }
    
    /**
     * Gets weight_lbs
     * @return double
     */
    public function getWeightLbs()
    {
        return $this->weight_lbs;
    }
  
    /**
     * Sets weight_lbs
     * @param double $weight_lbs 
     * @return $this
     */
    public function setWeightLbs($weight_lbs)
    {
        
        $this->weight_lbs = $weight_lbs;
        return $this;
    }
    
    /**
     * Gets dim_weight
     * @return double
     */
    public function getDimWeight()
    {
        return $this->dim_weight;
    }
  
    /**
     * Sets dim_weight
     * @param double $dim_weight 
     * @return $this
     */
    public function setDimWeight($dim_weight)
    {
        
        $this->dim_weight = $dim_weight;
        return $this;
    }
    
    /**
     * Gets residential
     * @return bool
     */
    public function getResidential()
    {
        return $this->residential;
    }
  
    /**
     * Sets residential
     * @param bool $residential 
     * @return $this
     */
    public function setResidential($residential)
    {
        
        $this->residential = $residential;
        return $this;
    }
    
    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
  
    /**
     * Sets zone
     * @param string $zone 
     * @return $this
     */
    public function setZone($zone)
    {
        
        $this->zone = $zone;
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