<?php
/**
 * ParcelShipment
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
 * ParcelShipment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ParcelShipment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'ship_date' => '\DateTime',
        'delivered_date' => '\DateTime',
        'tracking_no' => 'string',
        'warehouse_id' => 'int',
        'lob_id' => 'int',
        'order_no' => 'double',
        'carton_no' => 'int',
        'number_of_cartons' => 'int',
        'status' => 'string',
        'shipped' => 'bool',
        'carrier_service_id' => 'int',
        'dim1_in' => 'double',
        'dim2_in' => 'double',
        'dim3_in' => 'double',
        'estimated_zone' => 'string',
        'parcel_account_no' => 'string',
        'third_party_parcel_account_no' => 'string',
        'manifest_id' => 'int',
        'residential' => 'bool',
        'billing_option' => 'string',
        'weight_lbs' => 'double',
        'dim_weight' => 'double',
        'license_plate_number' => 'string',
        'charged_freight_amount' => 'double',
        'published_freight_amount' => 'double',
        'retail_freight_amount' => 'double'
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
        'ship_date' => 'shipDate',
        'delivered_date' => 'deliveredDate',
        'tracking_no' => 'trackingNo',
        'warehouse_id' => 'warehouseId',
        'lob_id' => 'lobId',
        'order_no' => 'orderNo',
        'carton_no' => 'cartonNo',
        'number_of_cartons' => 'numberOfCartons',
        'status' => 'status',
        'shipped' => 'shipped',
        'carrier_service_id' => 'carrierServiceId',
        'dim1_in' => 'dim1In',
        'dim2_in' => 'dim2In',
        'dim3_in' => 'dim3In',
        'estimated_zone' => 'estimatedZone',
        'parcel_account_no' => 'parcelAccountNo',
        'third_party_parcel_account_no' => 'thirdPartyParcelAccountNo',
        'manifest_id' => 'manifestId',
        'residential' => 'residential',
        'billing_option' => 'billingOption',
        'weight_lbs' => 'weightLbs',
        'dim_weight' => 'dimWeight',
        'license_plate_number' => 'licensePlateNumber',
        'charged_freight_amount' => 'chargedFreightAmount',
        'published_freight_amount' => 'publishedFreightAmount',
        'retail_freight_amount' => 'retailFreightAmount'
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
        'ship_date' => 'setShipDate',
        'delivered_date' => 'setDeliveredDate',
        'tracking_no' => 'setTrackingNo',
        'warehouse_id' => 'setWarehouseId',
        'lob_id' => 'setLobId',
        'order_no' => 'setOrderNo',
        'carton_no' => 'setCartonNo',
        'number_of_cartons' => 'setNumberOfCartons',
        'status' => 'setStatus',
        'shipped' => 'setShipped',
        'carrier_service_id' => 'setCarrierServiceId',
        'dim1_in' => 'setDim1In',
        'dim2_in' => 'setDim2In',
        'dim3_in' => 'setDim3In',
        'estimated_zone' => 'setEstimatedZone',
        'parcel_account_no' => 'setParcelAccountNo',
        'third_party_parcel_account_no' => 'setThirdPartyParcelAccountNo',
        'manifest_id' => 'setManifestId',
        'residential' => 'setResidential',
        'billing_option' => 'setBillingOption',
        'weight_lbs' => 'setWeightLbs',
        'dim_weight' => 'setDimWeight',
        'license_plate_number' => 'setLicensePlateNumber',
        'charged_freight_amount' => 'setChargedFreightAmount',
        'published_freight_amount' => 'setPublishedFreightAmount',
        'retail_freight_amount' => 'setRetailFreightAmount'
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
        'ship_date' => 'getShipDate',
        'delivered_date' => 'getDeliveredDate',
        'tracking_no' => 'getTrackingNo',
        'warehouse_id' => 'getWarehouseId',
        'lob_id' => 'getLobId',
        'order_no' => 'getOrderNo',
        'carton_no' => 'getCartonNo',
        'number_of_cartons' => 'getNumberOfCartons',
        'status' => 'getStatus',
        'shipped' => 'getShipped',
        'carrier_service_id' => 'getCarrierServiceId',
        'dim1_in' => 'getDim1In',
        'dim2_in' => 'getDim2In',
        'dim3_in' => 'getDim3In',
        'estimated_zone' => 'getEstimatedZone',
        'parcel_account_no' => 'getParcelAccountNo',
        'third_party_parcel_account_no' => 'getThirdPartyParcelAccountNo',
        'manifest_id' => 'getManifestId',
        'residential' => 'getResidential',
        'billing_option' => 'getBillingOption',
        'weight_lbs' => 'getWeightLbs',
        'dim_weight' => 'getDimWeight',
        'license_plate_number' => 'getLicensePlateNumber',
        'charged_freight_amount' => 'getChargedFreightAmount',
        'published_freight_amount' => 'getPublishedFreightAmount',
        'retail_freight_amount' => 'getRetailFreightAmount'
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
      * $ship_date 
      * @var \DateTime
      */
    protected $ship_date;
    
    /**
      * $delivered_date 
      * @var \DateTime
      */
    protected $delivered_date;
    
    /**
      * $tracking_no 
      * @var string
      */
    protected $tracking_no;
    
    /**
      * $warehouse_id 
      * @var int
      */
    protected $warehouse_id;
    
    /**
      * $lob_id 
      * @var int
      */
    protected $lob_id;
    
    /**
      * $order_no 
      * @var double
      */
    protected $order_no;
    
    /**
      * $carton_no 
      * @var int
      */
    protected $carton_no;
    
    /**
      * $number_of_cartons 
      * @var int
      */
    protected $number_of_cartons;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    
    /**
      * $shipped 
      * @var bool
      */
    protected $shipped = false;
    
    /**
      * $carrier_service_id 
      * @var int
      */
    protected $carrier_service_id;
    
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
      * $estimated_zone 
      * @var string
      */
    protected $estimated_zone;
    
    /**
      * $parcel_account_no 
      * @var string
      */
    protected $parcel_account_no;
    
    /**
      * $third_party_parcel_account_no 
      * @var string
      */
    protected $third_party_parcel_account_no;
    
    /**
      * $manifest_id 
      * @var int
      */
    protected $manifest_id;
    
    /**
      * $residential 
      * @var bool
      */
    protected $residential = false;
    
    /**
      * $billing_option 
      * @var string
      */
    protected $billing_option;
    
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
      * $license_plate_number 
      * @var string
      */
    protected $license_plate_number;
    
    /**
      * $charged_freight_amount 
      * @var double
      */
    protected $charged_freight_amount;
    
    /**
      * $published_freight_amount 
      * @var double
      */
    protected $published_freight_amount;
    
    /**
      * $retail_freight_amount 
      * @var double
      */
    protected $retail_freight_amount;
    

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
            $this->ship_date = $data["ship_date"];
            $this->delivered_date = $data["delivered_date"];
            $this->tracking_no = $data["tracking_no"];
            $this->warehouse_id = $data["warehouse_id"];
            $this->lob_id = $data["lob_id"];
            $this->order_no = $data["order_no"];
            $this->carton_no = $data["carton_no"];
            $this->number_of_cartons = $data["number_of_cartons"];
            $this->status = $data["status"];
            $this->shipped = $data["shipped"];
            $this->carrier_service_id = $data["carrier_service_id"];
            $this->dim1_in = $data["dim1_in"];
            $this->dim2_in = $data["dim2_in"];
            $this->dim3_in = $data["dim3_in"];
            $this->estimated_zone = $data["estimated_zone"];
            $this->parcel_account_no = $data["parcel_account_no"];
            $this->third_party_parcel_account_no = $data["third_party_parcel_account_no"];
            $this->manifest_id = $data["manifest_id"];
            $this->residential = $data["residential"];
            $this->billing_option = $data["billing_option"];
            $this->weight_lbs = $data["weight_lbs"];
            $this->dim_weight = $data["dim_weight"];
            $this->license_plate_number = $data["license_plate_number"];
            $this->charged_freight_amount = $data["charged_freight_amount"];
            $this->published_freight_amount = $data["published_freight_amount"];
            $this->retail_freight_amount = $data["retail_freight_amount"];
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
     * Gets ship_date
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->ship_date;
    }
  
    /**
     * Sets ship_date
     * @param \DateTime $ship_date 
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        
        $this->ship_date = $ship_date;
        return $this;
    }
    
    /**
     * Gets delivered_date
     * @return \DateTime
     */
    public function getDeliveredDate()
    {
        return $this->delivered_date;
    }
  
    /**
     * Sets delivered_date
     * @param \DateTime $delivered_date 
     * @return $this
     */
    public function setDeliveredDate($delivered_date)
    {
        
        $this->delivered_date = $delivered_date;
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
     * Gets lob_id
     * @return int
     */
    public function getLobId()
    {
        return $this->lob_id;
    }
  
    /**
     * Sets lob_id
     * @param int $lob_id 
     * @return $this
     */
    public function setLobId($lob_id)
    {
        
        $this->lob_id = $lob_id;
        return $this;
    }
    
    /**
     * Gets order_no
     * @return double
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }
  
    /**
     * Sets order_no
     * @param double $order_no 
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        
        $this->order_no = $order_no;
        return $this;
    }
    
    /**
     * Gets carton_no
     * @return int
     */
    public function getCartonNo()
    {
        return $this->carton_no;
    }
  
    /**
     * Sets carton_no
     * @param int $carton_no 
     * @return $this
     */
    public function setCartonNo($carton_no)
    {
        
        $this->carton_no = $carton_no;
        return $this;
    }
    
    /**
     * Gets number_of_cartons
     * @return int
     */
    public function getNumberOfCartons()
    {
        return $this->number_of_cartons;
    }
  
    /**
     * Sets number_of_cartons
     * @param int $number_of_cartons 
     * @return $this
     */
    public function setNumberOfCartons($number_of_cartons)
    {
        
        $this->number_of_cartons = $number_of_cartons;
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
     * Gets shipped
     * @return bool
     */
    public function getShipped()
    {
        return $this->shipped;
    }
  
    /**
     * Sets shipped
     * @param bool $shipped 
     * @return $this
     */
    public function setShipped($shipped)
    {
        
        $this->shipped = $shipped;
        return $this;
    }
    
    /**
     * Gets carrier_service_id
     * @return int
     */
    public function getCarrierServiceId()
    {
        return $this->carrier_service_id;
    }
  
    /**
     * Sets carrier_service_id
     * @param int $carrier_service_id 
     * @return $this
     */
    public function setCarrierServiceId($carrier_service_id)
    {
        
        $this->carrier_service_id = $carrier_service_id;
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
     * Gets estimated_zone
     * @return string
     */
    public function getEstimatedZone()
    {
        return $this->estimated_zone;
    }
  
    /**
     * Sets estimated_zone
     * @param string $estimated_zone 
     * @return $this
     */
    public function setEstimatedZone($estimated_zone)
    {
        
        $this->estimated_zone = $estimated_zone;
        return $this;
    }
    
    /**
     * Gets parcel_account_no
     * @return string
     */
    public function getParcelAccountNo()
    {
        return $this->parcel_account_no;
    }
  
    /**
     * Sets parcel_account_no
     * @param string $parcel_account_no 
     * @return $this
     */
    public function setParcelAccountNo($parcel_account_no)
    {
        
        $this->parcel_account_no = $parcel_account_no;
        return $this;
    }
    
    /**
     * Gets third_party_parcel_account_no
     * @return string
     */
    public function getThirdPartyParcelAccountNo()
    {
        return $this->third_party_parcel_account_no;
    }
  
    /**
     * Sets third_party_parcel_account_no
     * @param string $third_party_parcel_account_no 
     * @return $this
     */
    public function setThirdPartyParcelAccountNo($third_party_parcel_account_no)
    {
        
        $this->third_party_parcel_account_no = $third_party_parcel_account_no;
        return $this;
    }
    
    /**
     * Gets manifest_id
     * @return int
     */
    public function getManifestId()
    {
        return $this->manifest_id;
    }
  
    /**
     * Sets manifest_id
     * @param int $manifest_id 
     * @return $this
     */
    public function setManifestId($manifest_id)
    {
        
        $this->manifest_id = $manifest_id;
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
     * Gets billing_option
     * @return string
     */
    public function getBillingOption()
    {
        return $this->billing_option;
    }
  
    /**
     * Sets billing_option
     * @param string $billing_option 
     * @return $this
     */
    public function setBillingOption($billing_option)
    {
        
        $this->billing_option = $billing_option;
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
     * Gets license_plate_number
     * @return string
     */
    public function getLicensePlateNumber()
    {
        return $this->license_plate_number;
    }
  
    /**
     * Sets license_plate_number
     * @param string $license_plate_number 
     * @return $this
     */
    public function setLicensePlateNumber($license_plate_number)
    {
        
        $this->license_plate_number = $license_plate_number;
        return $this;
    }
    
    /**
     * Gets charged_freight_amount
     * @return double
     */
    public function getChargedFreightAmount()
    {
        return $this->charged_freight_amount;
    }
  
    /**
     * Sets charged_freight_amount
     * @param double $charged_freight_amount 
     * @return $this
     */
    public function setChargedFreightAmount($charged_freight_amount)
    {
        
        $this->charged_freight_amount = $charged_freight_amount;
        return $this;
    }
    
    /**
     * Gets published_freight_amount
     * @return double
     */
    public function getPublishedFreightAmount()
    {
        return $this->published_freight_amount;
    }
  
    /**
     * Sets published_freight_amount
     * @param double $published_freight_amount 
     * @return $this
     */
    public function setPublishedFreightAmount($published_freight_amount)
    {
        
        $this->published_freight_amount = $published_freight_amount;
        return $this;
    }
    
    /**
     * Gets retail_freight_amount
     * @return double
     */
    public function getRetailFreightAmount()
    {
        return $this->retail_freight_amount;
    }
  
    /**
     * Sets retail_freight_amount
     * @param double $retail_freight_amount 
     * @return $this
     */
    public function setRetailFreightAmount($retail_freight_amount)
    {
        
        $this->retail_freight_amount = $retail_freight_amount;
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
