<?php
/**
 * Kit
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
 * Kit Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Kit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'kit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lob_id' => 'int',
        'id' => 'int',
        'kit_sku' => 'string',
        'packaging_type' => 'string',
        'other' => 'string',
        'number_of_components' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string',
        'line4' => 'string',
        'line5' => 'string',
        'line6' => 'string',
        'line7' => 'string',
        'line8' => 'string',
        'touches' => 'int',
        'min_inv_qty' => 'int',
        'mid_inv_qty' => 'int',
        'max_inv_qty' => 'int',
        'is_kod' => 'string',
        'kod_type' => 'string',
        'kit_component_list' => '\Infoplus\Infoplus\Model\KitComponent[]',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lob_id' => 'int32',
        'id' => 'int32',
        'kit_sku' => null,
        'packaging_type' => null,
        'other' => null,
        'number_of_components' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'line1' => null,
        'line2' => null,
        'line3' => null,
        'line4' => null,
        'line5' => null,
        'line6' => null,
        'line7' => null,
        'line8' => null,
        'touches' => 'int32',
        'min_inv_qty' => 'int32',
        'mid_inv_qty' => 'int32',
        'max_inv_qty' => 'int32',
        'is_kod' => null,
        'kod_type' => null,
        'kit_component_list' => null,
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
        'lob_id' => 'lobId',
        'id' => 'id',
        'kit_sku' => 'kitSKU',
        'packaging_type' => 'packagingType',
        'other' => 'other',
        'number_of_components' => 'numberOfComponents',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'line1' => 'line1',
        'line2' => 'line2',
        'line3' => 'line3',
        'line4' => 'line4',
        'line5' => 'line5',
        'line6' => 'line6',
        'line7' => 'line7',
        'line8' => 'line8',
        'touches' => 'touches',
        'min_inv_qty' => 'minInvQty',
        'mid_inv_qty' => 'midInvQty',
        'max_inv_qty' => 'maxInvQty',
        'is_kod' => 'isKOD',
        'kod_type' => 'kodType',
        'kit_component_list' => 'kitComponentList',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lob_id' => 'setLobId',
        'id' => 'setId',
        'kit_sku' => 'setKitSku',
        'packaging_type' => 'setPackagingType',
        'other' => 'setOther',
        'number_of_components' => 'setNumberOfComponents',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3',
        'line4' => 'setLine4',
        'line5' => 'setLine5',
        'line6' => 'setLine6',
        'line7' => 'setLine7',
        'line8' => 'setLine8',
        'touches' => 'setTouches',
        'min_inv_qty' => 'setMinInvQty',
        'mid_inv_qty' => 'setMidInvQty',
        'max_inv_qty' => 'setMaxInvQty',
        'is_kod' => 'setIsKod',
        'kod_type' => 'setKodType',
        'kit_component_list' => 'setKitComponentList',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lob_id' => 'getLobId',
        'id' => 'getId',
        'kit_sku' => 'getKitSku',
        'packaging_type' => 'getPackagingType',
        'other' => 'getOther',
        'number_of_components' => 'getNumberOfComponents',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3',
        'line4' => 'getLine4',
        'line5' => 'getLine5',
        'line6' => 'getLine6',
        'line7' => 'getLine7',
        'line8' => 'getLine8',
        'touches' => 'getTouches',
        'min_inv_qty' => 'getMinInvQty',
        'mid_inv_qty' => 'getMidInvQty',
        'max_inv_qty' => 'getMaxInvQty',
        'is_kod' => 'getIsKod',
        'kod_type' => 'getKodType',
        'kit_component_list' => 'getKitComponentList',
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
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['kit_sku'] = isset($data['kit_sku']) ? $data['kit_sku'] : null;
        $this->container['packaging_type'] = isset($data['packaging_type']) ? $data['packaging_type'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['number_of_components'] = isset($data['number_of_components']) ? $data['number_of_components'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['line1'] = isset($data['line1']) ? $data['line1'] : null;
        $this->container['line2'] = isset($data['line2']) ? $data['line2'] : null;
        $this->container['line3'] = isset($data['line3']) ? $data['line3'] : null;
        $this->container['line4'] = isset($data['line4']) ? $data['line4'] : null;
        $this->container['line5'] = isset($data['line5']) ? $data['line5'] : null;
        $this->container['line6'] = isset($data['line6']) ? $data['line6'] : null;
        $this->container['line7'] = isset($data['line7']) ? $data['line7'] : null;
        $this->container['line8'] = isset($data['line8']) ? $data['line8'] : null;
        $this->container['touches'] = isset($data['touches']) ? $data['touches'] : null;
        $this->container['min_inv_qty'] = isset($data['min_inv_qty']) ? $data['min_inv_qty'] : null;
        $this->container['mid_inv_qty'] = isset($data['mid_inv_qty']) ? $data['mid_inv_qty'] : null;
        $this->container['max_inv_qty'] = isset($data['max_inv_qty']) ? $data['max_inv_qty'] : null;
        $this->container['is_kod'] = isset($data['is_kod']) ? $data['is_kod'] : null;
        $this->container['kod_type'] = isset($data['kod_type']) ? $data['kod_type'] : null;
        $this->container['kit_component_list'] = isset($data['kit_component_list']) ? $data['kit_component_list'] : null;
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
        if ($this->container['kit_sku'] === null) {
            $invalidProperties[] = "'kit_sku' can't be null";
        }
        if ($this->container['touches'] === null) {
            $invalidProperties[] = "'touches' can't be null";
        }
        if ($this->container['is_kod'] === null) {
            $invalidProperties[] = "'is_kod' can't be null";
        }
        if ($this->container['kit_component_list'] === null) {
            $invalidProperties[] = "'kit_component_list' can't be null";
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
        if ($this->container['kit_sku'] === null) {
            return false;
        }
        if ($this->container['touches'] === null) {
            return false;
        }
        if ($this->container['is_kod'] === null) {
            return false;
        }
        if ($this->container['kit_component_list'] === null) {
            return false;
        }
        return true;
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
     * Gets kit_sku
     *
     * @return string
     */
    public function getKitSku()
    {
        return $this->container['kit_sku'];
    }

    /**
     * Sets kit_sku
     *
     * @param string $kit_sku kit_sku
     *
     * @return $this
     */
    public function setKitSku($kit_sku)
    {
        $this->container['kit_sku'] = $kit_sku;

        return $this;
    }

    /**
     * Gets packaging_type
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param string $packaging_type packaging_type
     *
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets other
     *
     * @return string
     */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
     * Sets other
     *
     * @param string $other other
     *
     * @return $this
     */
    public function setOther($other)
    {
        $this->container['other'] = $other;

        return $this;
    }

    /**
     * Gets number_of_components
     *
     * @return int
     */
    public function getNumberOfComponents()
    {
        return $this->container['number_of_components'];
    }

    /**
     * Sets number_of_components
     *
     * @param int $number_of_components number_of_components
     *
     * @return $this
     */
    public function setNumberOfComponents($number_of_components)
    {
        $this->container['number_of_components'] = $number_of_components;

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
     * Gets line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 line1
     *
     * @return $this
     */
    public function setLine1($line1)
    {
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string $line2 line2
     *
     * @return $this
     */
    public function setLine2($line2)
    {
        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string $line3 line3
     *
     * @return $this
     */
    public function setLine3($line3)
    {
        $this->container['line3'] = $line3;

        return $this;
    }

    /**
     * Gets line4
     *
     * @return string
     */
    public function getLine4()
    {
        return $this->container['line4'];
    }

    /**
     * Sets line4
     *
     * @param string $line4 line4
     *
     * @return $this
     */
    public function setLine4($line4)
    {
        $this->container['line4'] = $line4;

        return $this;
    }

    /**
     * Gets line5
     *
     * @return string
     */
    public function getLine5()
    {
        return $this->container['line5'];
    }

    /**
     * Sets line5
     *
     * @param string $line5 line5
     *
     * @return $this
     */
    public function setLine5($line5)
    {
        $this->container['line5'] = $line5;

        return $this;
    }

    /**
     * Gets line6
     *
     * @return string
     */
    public function getLine6()
    {
        return $this->container['line6'];
    }

    /**
     * Sets line6
     *
     * @param string $line6 line6
     *
     * @return $this
     */
    public function setLine6($line6)
    {
        $this->container['line6'] = $line6;

        return $this;
    }

    /**
     * Gets line7
     *
     * @return string
     */
    public function getLine7()
    {
        return $this->container['line7'];
    }

    /**
     * Sets line7
     *
     * @param string $line7 line7
     *
     * @return $this
     */
    public function setLine7($line7)
    {
        $this->container['line7'] = $line7;

        return $this;
    }

    /**
     * Gets line8
     *
     * @return string
     */
    public function getLine8()
    {
        return $this->container['line8'];
    }

    /**
     * Sets line8
     *
     * @param string $line8 line8
     *
     * @return $this
     */
    public function setLine8($line8)
    {
        $this->container['line8'] = $line8;

        return $this;
    }

    /**
     * Gets touches
     *
     * @return int
     */
    public function getTouches()
    {
        return $this->container['touches'];
    }

    /**
     * Sets touches
     *
     * @param int $touches touches
     *
     * @return $this
     */
    public function setTouches($touches)
    {
        $this->container['touches'] = $touches;

        return $this;
    }

    /**
     * Gets min_inv_qty
     *
     * @return int
     */
    public function getMinInvQty()
    {
        return $this->container['min_inv_qty'];
    }

    /**
     * Sets min_inv_qty
     *
     * @param int $min_inv_qty min_inv_qty
     *
     * @return $this
     */
    public function setMinInvQty($min_inv_qty)
    {
        $this->container['min_inv_qty'] = $min_inv_qty;

        return $this;
    }

    /**
     * Gets mid_inv_qty
     *
     * @return int
     */
    public function getMidInvQty()
    {
        return $this->container['mid_inv_qty'];
    }

    /**
     * Sets mid_inv_qty
     *
     * @param int $mid_inv_qty mid_inv_qty
     *
     * @return $this
     */
    public function setMidInvQty($mid_inv_qty)
    {
        $this->container['mid_inv_qty'] = $mid_inv_qty;

        return $this;
    }

    /**
     * Gets max_inv_qty
     *
     * @return int
     */
    public function getMaxInvQty()
    {
        return $this->container['max_inv_qty'];
    }

    /**
     * Sets max_inv_qty
     *
     * @param int $max_inv_qty max_inv_qty
     *
     * @return $this
     */
    public function setMaxInvQty($max_inv_qty)
    {
        $this->container['max_inv_qty'] = $max_inv_qty;

        return $this;
    }

    /**
     * Gets is_kod
     *
     * @return string
     */
    public function getIsKod()
    {
        return $this->container['is_kod'];
    }

    /**
     * Sets is_kod
     *
     * @param string $is_kod is_kod
     *
     * @return $this
     */
    public function setIsKod($is_kod)
    {
        $this->container['is_kod'] = $is_kod;

        return $this;
    }

    /**
     * Gets kod_type
     *
     * @return string
     */
    public function getKodType()
    {
        return $this->container['kod_type'];
    }

    /**
     * Sets kod_type
     *
     * @param string $kod_type kod_type
     *
     * @return $this
     */
    public function setKodType($kod_type)
    {
        $this->container['kod_type'] = $kod_type;

        return $this;
    }

    /**
     * Gets kit_component_list
     *
     * @return \Infoplus\Infoplus\Model\KitComponent[]
     */
    public function getKitComponentList()
    {
        return $this->container['kit_component_list'];
    }

    /**
     * Sets kit_component_list
     *
     * @param \Infoplus\Infoplus\Model\KitComponent[] $kit_component_list kit_component_list
     *
     * @return $this
     */
    public function setKitComponentList($kit_component_list)
    {
        $this->container['kit_component_list'] = $kit_component_list;

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


