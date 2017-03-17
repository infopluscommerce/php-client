<?php
/**
 * EmailTemplate
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
 * EmailTemplate Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmailTemplate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'lob_id' => 'int',
        'subject_text' => 'string',
        'name' => 'string',
        'from_name' => 'string',
        'from_address' => 'string',
        'email_template_type' => 'string',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
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
        'id' => 'id',
        'lob_id' => 'lobId',
        'subject_text' => 'subjectText',
        'name' => 'name',
        'from_name' => 'fromName',
        'from_address' => 'fromAddress',
        'email_template_type' => 'emailTemplateType',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
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
        'id' => 'setId',
        'lob_id' => 'setLobId',
        'subject_text' => 'setSubjectText',
        'name' => 'setName',
        'from_name' => 'setFromName',
        'from_address' => 'setFromAddress',
        'email_template_type' => 'setEmailTemplateType',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
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
        'id' => 'getId',
        'lob_id' => 'getLobId',
        'subject_text' => 'getSubjectText',
        'name' => 'getName',
        'from_name' => 'getFromName',
        'from_address' => 'getFromAddress',
        'email_template_type' => 'getEmailTemplateType',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'custom_fields' => 'getCustomFields'
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
      * $lob_id 
      * @var int
      */
    protected $lob_id;
    
    /**
      * $subject_text 
      * @var string
      */
    protected $subject_text;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $from_name 
      * @var string
      */
    protected $from_name;
    
    /**
      * $from_address 
      * @var string
      */
    protected $from_address;
    
    /**
      * $email_template_type 
      * @var string
      */
    protected $email_template_type;
    
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
            $this->id = $data["id"];
            $this->lob_id = $data["lob_id"];
            $this->subject_text = $data["subject_text"];
            $this->name = $data["name"];
            $this->from_name = $data["from_name"];
            $this->from_address = $data["from_address"];
            $this->email_template_type = $data["email_template_type"];
            $this->create_date = $data["create_date"];
            $this->modify_date = $data["modify_date"];
            $this->custom_fields = $data["custom_fields"];
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
     * Gets subject_text
     * @return string
     */
    public function getSubjectText()
    {
        return $this->subject_text;
    }
  
    /**
     * Sets subject_text
     * @param string $subject_text 
     * @return $this
     */
    public function setSubjectText($subject_text)
    {
        
        $this->subject_text = $subject_text;
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
     * Gets from_name
     * @return string
     */
    public function getFromName()
    {
        return $this->from_name;
    }
  
    /**
     * Sets from_name
     * @param string $from_name 
     * @return $this
     */
    public function setFromName($from_name)
    {
        
        $this->from_name = $from_name;
        return $this;
    }
    
    /**
     * Gets from_address
     * @return string
     */
    public function getFromAddress()
    {
        return $this->from_address;
    }
  
    /**
     * Sets from_address
     * @param string $from_address 
     * @return $this
     */
    public function setFromAddress($from_address)
    {
        
        $this->from_address = $from_address;
        return $this;
    }
    
    /**
     * Gets email_template_type
     * @return string
     */
    public function getEmailTemplateType()
    {
        return $this->email_template_type;
    }
  
    /**
     * Sets email_template_type
     * @param string $email_template_type 
     * @return $this
     */
    public function setEmailTemplateType($email_template_type)
    {
        
        $this->email_template_type = $email_template_type;
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
