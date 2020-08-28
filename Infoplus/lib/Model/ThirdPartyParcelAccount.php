<?php
/**
 * ThirdPartyParcelAccount
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
 * ThirdPartyParcelAccount Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThirdPartyParcelAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'thirdPartyParcelAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'lob_id' => 'int',
        'carrier' => 'string',
        'account_no' => 'string',
        'account_name' => 'string',
        'billing_company' => 'string',
        'attention' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'street3' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'zip_code' => 'string',
        'phone' => 'string',
        'active' => 'string',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'lob_id' => 'int32',
        'carrier' => null,
        'account_no' => null,
        'account_name' => null,
        'billing_company' => null,
        'attention' => null,
        'street1' => null,
        'street2' => null,
        'street3' => null,
        'city' => null,
        'state' => null,
        'country' => null,
        'country_code' => null,
        'zip_code' => null,
        'phone' => null,
        'active' => null,
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
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
        'lob_id' => 'lobId',
        'carrier' => 'carrier',
        'account_no' => 'accountNo',
        'account_name' => 'accountName',
        'billing_company' => 'billingCompany',
        'attention' => 'attention',
        'street1' => 'street1',
        'street2' => 'street2',
        'street3' => 'street3',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'country_code' => 'countryCode',
        'zip_code' => 'zipCode',
        'phone' => 'phone',
        'active' => 'active',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lob_id' => 'setLobId',
        'carrier' => 'setCarrier',
        'account_no' => 'setAccountNo',
        'account_name' => 'setAccountName',
        'billing_company' => 'setBillingCompany',
        'attention' => 'setAttention',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'street3' => 'setStreet3',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'zip_code' => 'setZipCode',
        'phone' => 'setPhone',
        'active' => 'setActive',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lob_id' => 'getLobId',
        'carrier' => 'getCarrier',
        'account_no' => 'getAccountNo',
        'account_name' => 'getAccountName',
        'billing_company' => 'getBillingCompany',
        'attention' => 'getAttention',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'street3' => 'getStreet3',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'zip_code' => 'getZipCode',
        'phone' => 'getPhone',
        'active' => 'getActive',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
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
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['account_no'] = isset($data['account_no']) ? $data['account_no'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['billing_company'] = isset($data['billing_company']) ? $data['billing_company'] : null;
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['street1'] = isset($data['street1']) ? $data['street1'] : null;
        $this->container['street2'] = isset($data['street2']) ? $data['street2'] : null;
        $this->container['street3'] = isset($data['street3']) ? $data['street3'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
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

        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if ($this->container['account_no'] === null) {
            $invalidProperties[] = "'account_no' can't be null";
        }
        if ($this->container['account_name'] === null) {
            $invalidProperties[] = "'account_name' can't be null";
        }
        if ($this->container['billing_company'] === null) {
            $invalidProperties[] = "'billing_company' can't be null";
        }
        if ($this->container['street1'] === null) {
            $invalidProperties[] = "'street1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['zip_code'] === null) {
            $invalidProperties[] = "'zip_code' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
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

        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['carrier'] === null) {
            return false;
        }
        if ($this->container['account_no'] === null) {
            return false;
        }
        if ($this->container['account_name'] === null) {
            return false;
        }
        if ($this->container['billing_company'] === null) {
            return false;
        }
        if ($this->container['street1'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['zip_code'] === null) {
            return false;
        }
        if ($this->container['active'] === null) {
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
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets account_no
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->container['account_no'];
    }

    /**
     * Sets account_no
     *
     * @param string $account_no account_no
     *
     * @return $this
     */
    public function setAccountNo($account_no)
    {
        $this->container['account_no'] = $account_no;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets billing_company
     *
     * @return string
     */
    public function getBillingCompany()
    {
        return $this->container['billing_company'];
    }

    /**
     * Sets billing_company
     *
     * @param string $billing_company billing_company
     *
     * @return $this
     */
    public function setBillingCompany($billing_company)
    {
        $this->container['billing_company'] = $billing_company;

        return $this;
    }

    /**
     * Gets attention
     *
     * @return string
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param string $attention attention
     *
     * @return $this
     */
    public function setAttention($attention)
    {
        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string $street1 street1
     *
     * @return $this
     */
    public function setStreet1($street1)
    {
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string $street2 street2
     *
     * @return $this
     */
    public function setStreet2($street2)
    {
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets street3
     *
     * @return string
     */
    public function getStreet3()
    {
        return $this->container['street3'];
    }

    /**
     * Sets street3
     *
     * @param string $street3 street3
     *
     * @return $this
     */
    public function setStreet3($street3)
    {
        $this->container['street3'] = $street3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code zip_code
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param string $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets modify_date
     *
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->container['modify_date'];
    }

    /**
     * Sets modify_date
     *
     * @param \DateTime $modify_date modify_date
     *
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        $this->container['modify_date'] = $modify_date;

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


