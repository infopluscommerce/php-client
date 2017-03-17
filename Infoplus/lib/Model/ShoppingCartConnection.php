<?php
/**
 * ShoppingCartConnection
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
 * ShoppingCartConnection Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShoppingCartConnection implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'client_id' => 'int',
        'nonce' => 'string',
        'lob_id' => 'int',
        'order_source_id' => 'int',
        'integration_partner_id' => 'int',
        'connection_type' => 'string',
        'item_filter_id' => 'int',
        'infoplus_sku_field_to_map' => 'string',
        'shopping_cart_sku_field_to_map' => 'string',
        'name' => 'string',
        'shopping_cart_store_url' => 'string',
        'access_code' => 'string',
        'access_token' => 'string',
        'username' => 'string',
        'password' => 'string',
        'default_carrier_id' => 'int',
        'order_shipment_level' => 'string',
        'sync_orders' => 'bool',
        'sync_inventory' => 'bool',
        'sync_tracking_data' => 'bool',
        'fulfill_all_items' => 'bool',
        'sync_inventory_levels_last_run_time' => '\DateTime',
        'sync_orders_last_run_time' => '\DateTime',
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
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'client_id' => 'clientId',
        'nonce' => 'nonce',
        'lob_id' => 'lobId',
        'order_source_id' => 'orderSourceId',
        'integration_partner_id' => 'integrationPartnerId',
        'connection_type' => 'connectionType',
        'item_filter_id' => 'itemFilterId',
        'infoplus_sku_field_to_map' => 'infoplusSKUFieldToMap',
        'shopping_cart_sku_field_to_map' => 'shoppingCartSKUFieldToMap',
        'name' => 'name',
        'shopping_cart_store_url' => 'shoppingCartStoreURL',
        'access_code' => 'accessCode',
        'access_token' => 'accessToken',
        'username' => 'username',
        'password' => 'password',
        'default_carrier_id' => 'defaultCarrierId',
        'order_shipment_level' => 'orderShipmentLevel',
        'sync_orders' => 'syncOrders',
        'sync_inventory' => 'syncInventory',
        'sync_tracking_data' => 'syncTrackingData',
        'fulfill_all_items' => 'fulfillAllItems',
        'sync_inventory_levels_last_run_time' => 'syncInventoryLevelsLastRunTime',
        'sync_orders_last_run_time' => 'syncOrdersLastRunTime',
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
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'client_id' => 'setClientId',
        'nonce' => 'setNonce',
        'lob_id' => 'setLobId',
        'order_source_id' => 'setOrderSourceId',
        'integration_partner_id' => 'setIntegrationPartnerId',
        'connection_type' => 'setConnectionType',
        'item_filter_id' => 'setItemFilterId',
        'infoplus_sku_field_to_map' => 'setInfoplusSkuFieldToMap',
        'shopping_cart_sku_field_to_map' => 'setShoppingCartSkuFieldToMap',
        'name' => 'setName',
        'shopping_cart_store_url' => 'setShoppingCartStoreUrl',
        'access_code' => 'setAccessCode',
        'access_token' => 'setAccessToken',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'default_carrier_id' => 'setDefaultCarrierId',
        'order_shipment_level' => 'setOrderShipmentLevel',
        'sync_orders' => 'setSyncOrders',
        'sync_inventory' => 'setSyncInventory',
        'sync_tracking_data' => 'setSyncTrackingData',
        'fulfill_all_items' => 'setFulfillAllItems',
        'sync_inventory_levels_last_run_time' => 'setSyncInventoryLevelsLastRunTime',
        'sync_orders_last_run_time' => 'setSyncOrdersLastRunTime',
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
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'client_id' => 'getClientId',
        'nonce' => 'getNonce',
        'lob_id' => 'getLobId',
        'order_source_id' => 'getOrderSourceId',
        'integration_partner_id' => 'getIntegrationPartnerId',
        'connection_type' => 'getConnectionType',
        'item_filter_id' => 'getItemFilterId',
        'infoplus_sku_field_to_map' => 'getInfoplusSkuFieldToMap',
        'shopping_cart_sku_field_to_map' => 'getShoppingCartSkuFieldToMap',
        'name' => 'getName',
        'shopping_cart_store_url' => 'getShoppingCartStoreUrl',
        'access_code' => 'getAccessCode',
        'access_token' => 'getAccessToken',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'default_carrier_id' => 'getDefaultCarrierId',
        'order_shipment_level' => 'getOrderShipmentLevel',
        'sync_orders' => 'getSyncOrders',
        'sync_inventory' => 'getSyncInventory',
        'sync_tracking_data' => 'getSyncTrackingData',
        'fulfill_all_items' => 'getFulfillAllItems',
        'sync_inventory_levels_last_run_time' => 'getSyncInventoryLevelsLastRunTime',
        'sync_orders_last_run_time' => 'getSyncOrdersLastRunTime',
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
      * $client_id 
      * @var int
      */
    protected $client_id;
    
    /**
      * $nonce 
      * @var string
      */
    protected $nonce;
    
    /**
      * $lob_id 
      * @var int
      */
    protected $lob_id;
    
    /**
      * $order_source_id 
      * @var int
      */
    protected $order_source_id;
    
    /**
      * $integration_partner_id 
      * @var int
      */
    protected $integration_partner_id;
    
    /**
      * $connection_type 
      * @var string
      */
    protected $connection_type;
    
    /**
      * $item_filter_id 
      * @var int
      */
    protected $item_filter_id;
    
    /**
      * $infoplus_sku_field_to_map 
      * @var string
      */
    protected $infoplus_sku_field_to_map;
    
    /**
      * $shopping_cart_sku_field_to_map 
      * @var string
      */
    protected $shopping_cart_sku_field_to_map;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $shopping_cart_store_url 
      * @var string
      */
    protected $shopping_cart_store_url;
    
    /**
      * $access_code 
      * @var string
      */
    protected $access_code;
    
    /**
      * $access_token 
      * @var string
      */
    protected $access_token;
    
    /**
      * $username 
      * @var string
      */
    protected $username;
    
    /**
      * $password 
      * @var string
      */
    protected $password;
    
    /**
      * $default_carrier_id 
      * @var int
      */
    protected $default_carrier_id;
    
    /**
      * $order_shipment_level 
      * @var string
      */
    protected $order_shipment_level;
    
    /**
      * $sync_orders 
      * @var bool
      */
    protected $sync_orders = false;
    
    /**
      * $sync_inventory 
      * @var bool
      */
    protected $sync_inventory = false;
    
    /**
      * $sync_tracking_data 
      * @var bool
      */
    protected $sync_tracking_data = false;
    
    /**
      * $fulfill_all_items 
      * @var bool
      */
    protected $fulfill_all_items = false;
    
    /**
      * $sync_inventory_levels_last_run_time 
      * @var \DateTime
      */
    protected $sync_inventory_levels_last_run_time;
    
    /**
      * $sync_orders_last_run_time 
      * @var \DateTime
      */
    protected $sync_orders_last_run_time;
    
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
            $this->create_date = $data["create_date"];
            $this->modify_date = $data["modify_date"];
            $this->client_id = $data["client_id"];
            $this->nonce = $data["nonce"];
            $this->lob_id = $data["lob_id"];
            $this->order_source_id = $data["order_source_id"];
            $this->integration_partner_id = $data["integration_partner_id"];
            $this->connection_type = $data["connection_type"];
            $this->item_filter_id = $data["item_filter_id"];
            $this->infoplus_sku_field_to_map = $data["infoplus_sku_field_to_map"];
            $this->shopping_cart_sku_field_to_map = $data["shopping_cart_sku_field_to_map"];
            $this->name = $data["name"];
            $this->shopping_cart_store_url = $data["shopping_cart_store_url"];
            $this->access_code = $data["access_code"];
            $this->access_token = $data["access_token"];
            $this->username = $data["username"];
            $this->password = $data["password"];
            $this->default_carrier_id = $data["default_carrier_id"];
            $this->order_shipment_level = $data["order_shipment_level"];
            $this->sync_orders = $data["sync_orders"];
            $this->sync_inventory = $data["sync_inventory"];
            $this->sync_tracking_data = $data["sync_tracking_data"];
            $this->fulfill_all_items = $data["fulfill_all_items"];
            $this->sync_inventory_levels_last_run_time = $data["sync_inventory_levels_last_run_time"];
            $this->sync_orders_last_run_time = $data["sync_orders_last_run_time"];
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
     * Gets nonce
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }
  
    /**
     * Sets nonce
     * @param string $nonce 
     * @return $this
     */
    public function setNonce($nonce)
    {
        
        $this->nonce = $nonce;
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
     * Gets order_source_id
     * @return int
     */
    public function getOrderSourceId()
    {
        return $this->order_source_id;
    }
  
    /**
     * Sets order_source_id
     * @param int $order_source_id 
     * @return $this
     */
    public function setOrderSourceId($order_source_id)
    {
        
        $this->order_source_id = $order_source_id;
        return $this;
    }
    
    /**
     * Gets integration_partner_id
     * @return int
     */
    public function getIntegrationPartnerId()
    {
        return $this->integration_partner_id;
    }
  
    /**
     * Sets integration_partner_id
     * @param int $integration_partner_id 
     * @return $this
     */
    public function setIntegrationPartnerId($integration_partner_id)
    {
        
        $this->integration_partner_id = $integration_partner_id;
        return $this;
    }
    
    /**
     * Gets connection_type
     * @return string
     */
    public function getConnectionType()
    {
        return $this->connection_type;
    }
  
    /**
     * Sets connection_type
     * @param string $connection_type 
     * @return $this
     */
    public function setConnectionType($connection_type)
    {
        
        $this->connection_type = $connection_type;
        return $this;
    }
    
    /**
     * Gets item_filter_id
     * @return int
     */
    public function getItemFilterId()
    {
        return $this->item_filter_id;
    }
  
    /**
     * Sets item_filter_id
     * @param int $item_filter_id 
     * @return $this
     */
    public function setItemFilterId($item_filter_id)
    {
        
        $this->item_filter_id = $item_filter_id;
        return $this;
    }
    
    /**
     * Gets infoplus_sku_field_to_map
     * @return string
     */
    public function getInfoplusSkuFieldToMap()
    {
        return $this->infoplus_sku_field_to_map;
    }
  
    /**
     * Sets infoplus_sku_field_to_map
     * @param string $infoplus_sku_field_to_map 
     * @return $this
     */
    public function setInfoplusSkuFieldToMap($infoplus_sku_field_to_map)
    {
        
        $this->infoplus_sku_field_to_map = $infoplus_sku_field_to_map;
        return $this;
    }
    
    /**
     * Gets shopping_cart_sku_field_to_map
     * @return string
     */
    public function getShoppingCartSkuFieldToMap()
    {
        return $this->shopping_cart_sku_field_to_map;
    }
  
    /**
     * Sets shopping_cart_sku_field_to_map
     * @param string $shopping_cart_sku_field_to_map 
     * @return $this
     */
    public function setShoppingCartSkuFieldToMap($shopping_cart_sku_field_to_map)
    {
        
        $this->shopping_cart_sku_field_to_map = $shopping_cart_sku_field_to_map;
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
     * Gets shopping_cart_store_url
     * @return string
     */
    public function getShoppingCartStoreUrl()
    {
        return $this->shopping_cart_store_url;
    }
  
    /**
     * Sets shopping_cart_store_url
     * @param string $shopping_cart_store_url 
     * @return $this
     */
    public function setShoppingCartStoreUrl($shopping_cart_store_url)
    {
        
        $this->shopping_cart_store_url = $shopping_cart_store_url;
        return $this;
    }
    
    /**
     * Gets access_code
     * @return string
     */
    public function getAccessCode()
    {
        return $this->access_code;
    }
  
    /**
     * Sets access_code
     * @param string $access_code 
     * @return $this
     */
    public function setAccessCode($access_code)
    {
        
        $this->access_code = $access_code;
        return $this;
    }
    
    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
  
    /**
     * Sets access_token
     * @param string $access_token 
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        
        $this->access_token = $access_token;
        return $this;
    }
    
    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
  
    /**
     * Sets username
     * @param string $username 
     * @return $this
     */
    public function setUsername($username)
    {
        
        $this->username = $username;
        return $this;
    }
    
    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
  
    /**
     * Sets password
     * @param string $password 
     * @return $this
     */
    public function setPassword($password)
    {
        
        $this->password = $password;
        return $this;
    }
    
    /**
     * Gets default_carrier_id
     * @return int
     */
    public function getDefaultCarrierId()
    {
        return $this->default_carrier_id;
    }
  
    /**
     * Sets default_carrier_id
     * @param int $default_carrier_id 
     * @return $this
     */
    public function setDefaultCarrierId($default_carrier_id)
    {
        
        $this->default_carrier_id = $default_carrier_id;
        return $this;
    }
    
    /**
     * Gets order_shipment_level
     * @return string
     */
    public function getOrderShipmentLevel()
    {
        return $this->order_shipment_level;
    }
  
    /**
     * Sets order_shipment_level
     * @param string $order_shipment_level 
     * @return $this
     */
    public function setOrderShipmentLevel($order_shipment_level)
    {
        
        $this->order_shipment_level = $order_shipment_level;
        return $this;
    }
    
    /**
     * Gets sync_orders
     * @return bool
     */
    public function getSyncOrders()
    {
        return $this->sync_orders;
    }
  
    /**
     * Sets sync_orders
     * @param bool $sync_orders 
     * @return $this
     */
    public function setSyncOrders($sync_orders)
    {
        
        $this->sync_orders = $sync_orders;
        return $this;
    }
    
    /**
     * Gets sync_inventory
     * @return bool
     */
    public function getSyncInventory()
    {
        return $this->sync_inventory;
    }
  
    /**
     * Sets sync_inventory
     * @param bool $sync_inventory 
     * @return $this
     */
    public function setSyncInventory($sync_inventory)
    {
        
        $this->sync_inventory = $sync_inventory;
        return $this;
    }
    
    /**
     * Gets sync_tracking_data
     * @return bool
     */
    public function getSyncTrackingData()
    {
        return $this->sync_tracking_data;
    }
  
    /**
     * Sets sync_tracking_data
     * @param bool $sync_tracking_data 
     * @return $this
     */
    public function setSyncTrackingData($sync_tracking_data)
    {
        
        $this->sync_tracking_data = $sync_tracking_data;
        return $this;
    }
    
    /**
     * Gets fulfill_all_items
     * @return bool
     */
    public function getFulfillAllItems()
    {
        return $this->fulfill_all_items;
    }
  
    /**
     * Sets fulfill_all_items
     * @param bool $fulfill_all_items 
     * @return $this
     */
    public function setFulfillAllItems($fulfill_all_items)
    {
        
        $this->fulfill_all_items = $fulfill_all_items;
        return $this;
    }
    
    /**
     * Gets sync_inventory_levels_last_run_time
     * @return \DateTime
     */
    public function getSyncInventoryLevelsLastRunTime()
    {
        return $this->sync_inventory_levels_last_run_time;
    }
  
    /**
     * Sets sync_inventory_levels_last_run_time
     * @param \DateTime $sync_inventory_levels_last_run_time 
     * @return $this
     */
    public function setSyncInventoryLevelsLastRunTime($sync_inventory_levels_last_run_time)
    {
        
        $this->sync_inventory_levels_last_run_time = $sync_inventory_levels_last_run_time;
        return $this;
    }
    
    /**
     * Gets sync_orders_last_run_time
     * @return \DateTime
     */
    public function getSyncOrdersLastRunTime()
    {
        return $this->sync_orders_last_run_time;
    }
  
    /**
     * Sets sync_orders_last_run_time
     * @param \DateTime $sync_orders_last_run_time 
     * @return $this
     */
    public function setSyncOrdersLastRunTime($sync_orders_last_run_time)
    {
        
        $this->sync_orders_last_run_time = $sync_orders_last_run_time;
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
