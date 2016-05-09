<?php
/**
 * LocationAddressScheme
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
 * LocationAddressScheme Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocationAddressScheme implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
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
      * $client_id 
      * @var int
      */
    protected $client_id;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $format_string 
      * @var string
      */
    protected $format_string;
    
    /**
      * $location_naming_scheme 
      * @var string
      */
    protected $location_naming_scheme;
    
    /**
      * $location_number_zero_padded 
      * @var bool
      */
    protected $location_number_zero_padded = false;
    
    /**
      * $location_number_minimum_number_of_digits 
      * @var int
      */
    protected $location_number_minimum_number_of_digits;
    
    /**
      * $level_naming_scheme 
      * @var string
      */
    protected $level_naming_scheme;
    
    /**
      * $level_number_zero_padded 
      * @var bool
      */
    protected $level_number_zero_padded = false;
    
    /**
      * $level_number_minimum_number_of_digits 
      * @var int
      */
    protected $level_number_minimum_number_of_digits;
    
    /**
      * $aisle_naming_scheme 
      * @var string
      */
    protected $aisle_naming_scheme;
    
    /**
      * $aisle_number_zero_padded 
      * @var bool
      */
    protected $aisle_number_zero_padded = false;
    
    /**
      * $aisle_number_minimum_number_of_digits 
      * @var int
      */
    protected $aisle_number_minimum_number_of_digits;
    
    /**
      * $bay_naming_scheme 
      * @var string
      */
    protected $bay_naming_scheme;
    
    /**
      * $bay_number_zero_padded 
      * @var bool
      */
    protected $bay_number_zero_padded = false;
    
    /**
      * $bay_number_minimum_number_of_digits 
      * @var int
      */
    protected $bay_number_minimum_number_of_digits;
    
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
            $this->client_id = $data["client_id"];
            $this->name = $data["name"];
            $this->format_string = $data["format_string"];
            $this->location_naming_scheme = $data["location_naming_scheme"];
            $this->location_number_zero_padded = $data["location_number_zero_padded"];
            $this->location_number_minimum_number_of_digits = $data["location_number_minimum_number_of_digits"];
            $this->level_naming_scheme = $data["level_naming_scheme"];
            $this->level_number_zero_padded = $data["level_number_zero_padded"];
            $this->level_number_minimum_number_of_digits = $data["level_number_minimum_number_of_digits"];
            $this->aisle_naming_scheme = $data["aisle_naming_scheme"];
            $this->aisle_number_zero_padded = $data["aisle_number_zero_padded"];
            $this->aisle_number_minimum_number_of_digits = $data["aisle_number_minimum_number_of_digits"];
            $this->bay_naming_scheme = $data["bay_naming_scheme"];
            $this->bay_number_zero_padded = $data["bay_number_zero_padded"];
            $this->bay_number_minimum_number_of_digits = $data["bay_number_minimum_number_of_digits"];
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
     * Gets client_id
     * @return int
     */
    public function getClientId()
    {
        return $this->client_id;
    }
  
    /**
     * Sets client_id
     * @param int $client_id 
     * @return $this
     */
    public function setClientId($client_id)
    {
        
        $this->client_id = $client_id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets format_string
     * @return string
     */
    public function getFormatString()
    {
        return $this->format_string;
    }
  
    /**
     * Sets format_string
     * @param string $format_string 
     * @return $this
     */
    public function setFormatString($format_string)
    {
        
        $this->format_string = $format_string;
        return $this;
    }
    
    /**
     * Gets location_naming_scheme
     * @return string
     */
    public function getLocationNamingScheme()
    {
        return $this->location_naming_scheme;
    }
  
    /**
     * Sets location_naming_scheme
     * @param string $location_naming_scheme 
     * @return $this
     */
    public function setLocationNamingScheme($location_naming_scheme)
    {
        
        $this->location_naming_scheme = $location_naming_scheme;
        return $this;
    }
    
    /**
     * Gets location_number_zero_padded
     * @return bool
     */
    public function getLocationNumberZeroPadded()
    {
        return $this->location_number_zero_padded;
    }
  
    /**
     * Sets location_number_zero_padded
     * @param bool $location_number_zero_padded 
     * @return $this
     */
    public function setLocationNumberZeroPadded($location_number_zero_padded)
    {
        
        $this->location_number_zero_padded = $location_number_zero_padded;
        return $this;
    }
    
    /**
     * Gets location_number_minimum_number_of_digits
     * @return int
     */
    public function getLocationNumberMinimumNumberOfDigits()
    {
        return $this->location_number_minimum_number_of_digits;
    }
  
    /**
     * Sets location_number_minimum_number_of_digits
     * @param int $location_number_minimum_number_of_digits 
     * @return $this
     */
    public function setLocationNumberMinimumNumberOfDigits($location_number_minimum_number_of_digits)
    {
        
        $this->location_number_minimum_number_of_digits = $location_number_minimum_number_of_digits;
        return $this;
    }
    
    /**
     * Gets level_naming_scheme
     * @return string
     */
    public function getLevelNamingScheme()
    {
        return $this->level_naming_scheme;
    }
  
    /**
     * Sets level_naming_scheme
     * @param string $level_naming_scheme 
     * @return $this
     */
    public function setLevelNamingScheme($level_naming_scheme)
    {
        
        $this->level_naming_scheme = $level_naming_scheme;
        return $this;
    }
    
    /**
     * Gets level_number_zero_padded
     * @return bool
     */
    public function getLevelNumberZeroPadded()
    {
        return $this->level_number_zero_padded;
    }
  
    /**
     * Sets level_number_zero_padded
     * @param bool $level_number_zero_padded 
     * @return $this
     */
    public function setLevelNumberZeroPadded($level_number_zero_padded)
    {
        
        $this->level_number_zero_padded = $level_number_zero_padded;
        return $this;
    }
    
    /**
     * Gets level_number_minimum_number_of_digits
     * @return int
     */
    public function getLevelNumberMinimumNumberOfDigits()
    {
        return $this->level_number_minimum_number_of_digits;
    }
  
    /**
     * Sets level_number_minimum_number_of_digits
     * @param int $level_number_minimum_number_of_digits 
     * @return $this
     */
    public function setLevelNumberMinimumNumberOfDigits($level_number_minimum_number_of_digits)
    {
        
        $this->level_number_minimum_number_of_digits = $level_number_minimum_number_of_digits;
        return $this;
    }
    
    /**
     * Gets aisle_naming_scheme
     * @return string
     */
    public function getAisleNamingScheme()
    {
        return $this->aisle_naming_scheme;
    }
  
    /**
     * Sets aisle_naming_scheme
     * @param string $aisle_naming_scheme 
     * @return $this
     */
    public function setAisleNamingScheme($aisle_naming_scheme)
    {
        
        $this->aisle_naming_scheme = $aisle_naming_scheme;
        return $this;
    }
    
    /**
     * Gets aisle_number_zero_padded
     * @return bool
     */
    public function getAisleNumberZeroPadded()
    {
        return $this->aisle_number_zero_padded;
    }
  
    /**
     * Sets aisle_number_zero_padded
     * @param bool $aisle_number_zero_padded 
     * @return $this
     */
    public function setAisleNumberZeroPadded($aisle_number_zero_padded)
    {
        
        $this->aisle_number_zero_padded = $aisle_number_zero_padded;
        return $this;
    }
    
    /**
     * Gets aisle_number_minimum_number_of_digits
     * @return int
     */
    public function getAisleNumberMinimumNumberOfDigits()
    {
        return $this->aisle_number_minimum_number_of_digits;
    }
  
    /**
     * Sets aisle_number_minimum_number_of_digits
     * @param int $aisle_number_minimum_number_of_digits 
     * @return $this
     */
    public function setAisleNumberMinimumNumberOfDigits($aisle_number_minimum_number_of_digits)
    {
        
        $this->aisle_number_minimum_number_of_digits = $aisle_number_minimum_number_of_digits;
        return $this;
    }
    
    /**
     * Gets bay_naming_scheme
     * @return string
     */
    public function getBayNamingScheme()
    {
        return $this->bay_naming_scheme;
    }
  
    /**
     * Sets bay_naming_scheme
     * @param string $bay_naming_scheme 
     * @return $this
     */
    public function setBayNamingScheme($bay_naming_scheme)
    {
        
        $this->bay_naming_scheme = $bay_naming_scheme;
        return $this;
    }
    
    /**
     * Gets bay_number_zero_padded
     * @return bool
     */
    public function getBayNumberZeroPadded()
    {
        return $this->bay_number_zero_padded;
    }
  
    /**
     * Sets bay_number_zero_padded
     * @param bool $bay_number_zero_padded 
     * @return $this
     */
    public function setBayNumberZeroPadded($bay_number_zero_padded)
    {
        
        $this->bay_number_zero_padded = $bay_number_zero_padded;
        return $this;
    }
    
    /**
     * Gets bay_number_minimum_number_of_digits
     * @return int
     */
    public function getBayNumberMinimumNumberOfDigits()
    {
        return $this->bay_number_minimum_number_of_digits;
    }
  
    /**
     * Sets bay_number_minimum_number_of_digits
     * @param int $bay_number_minimum_number_of_digits 
     * @return $this
     */
    public function setBayNumberMinimumNumberOfDigits($bay_number_minimum_number_of_digits)
    {
        
        $this->bay_number_minimum_number_of_digits = $bay_number_minimum_number_of_digits;
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
