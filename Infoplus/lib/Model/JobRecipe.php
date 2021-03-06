<?php
/**
 * JobRecipe
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
 * JobRecipe Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobRecipe implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'jobRecipe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'warehouse_id' => 'int',
        'lob_id' => 'int',
        'name' => 'string',
        'assembly_instructions' => 'string',
        'inputs' => '\Infoplus\Infoplus\Model\JobRecipeInput[]',
        'outputs' => '\Infoplus\Infoplus\Model\JobRecipeOutput[]',
        'steps' => '\Infoplus\Infoplus\Model\JobRecipeStep[]',
        'fulfillment_plan_id' => 'int',
        'layout' => 'string',
        'track_assemblies' => 'bool',
        'track_steps' => 'bool',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'warehouse_id' => 'int32',
        'lob_id' => 'int32',
        'name' => null,
        'assembly_instructions' => null,
        'inputs' => null,
        'outputs' => null,
        'steps' => null,
        'fulfillment_plan_id' => 'int32',
        'layout' => null,
        'track_assemblies' => null,
        'track_steps' => null,
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
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'warehouse_id' => 'warehouseId',
        'lob_id' => 'lobId',
        'name' => 'name',
        'assembly_instructions' => 'assemblyInstructions',
        'inputs' => 'inputs',
        'outputs' => 'outputs',
        'steps' => 'steps',
        'fulfillment_plan_id' => 'fulfillmentPlanId',
        'layout' => 'layout',
        'track_assemblies' => 'trackAssemblies',
        'track_steps' => 'trackSteps',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'warehouse_id' => 'setWarehouseId',
        'lob_id' => 'setLobId',
        'name' => 'setName',
        'assembly_instructions' => 'setAssemblyInstructions',
        'inputs' => 'setInputs',
        'outputs' => 'setOutputs',
        'steps' => 'setSteps',
        'fulfillment_plan_id' => 'setFulfillmentPlanId',
        'layout' => 'setLayout',
        'track_assemblies' => 'setTrackAssemblies',
        'track_steps' => 'setTrackSteps',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'warehouse_id' => 'getWarehouseId',
        'lob_id' => 'getLobId',
        'name' => 'getName',
        'assembly_instructions' => 'getAssemblyInstructions',
        'inputs' => 'getInputs',
        'outputs' => 'getOutputs',
        'steps' => 'getSteps',
        'fulfillment_plan_id' => 'getFulfillmentPlanId',
        'layout' => 'getLayout',
        'track_assemblies' => 'getTrackAssemblies',
        'track_steps' => 'getTrackSteps',
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['assembly_instructions'] = isset($data['assembly_instructions']) ? $data['assembly_instructions'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['fulfillment_plan_id'] = isset($data['fulfillment_plan_id']) ? $data['fulfillment_plan_id'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['track_assemblies'] = isset($data['track_assemblies']) ? $data['track_assemblies'] : false;
        $this->container['track_steps'] = isset($data['track_steps']) ? $data['track_steps'] : false;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['fulfillment_plan_id'] === null) {
            $invalidProperties[] = "'fulfillment_plan_id' can't be null";
        }
        if ($this->container['layout'] === null) {
            $invalidProperties[] = "'layout' can't be null";
        }
        if ($this->container['track_assemblies'] === null) {
            $invalidProperties[] = "'track_assemblies' can't be null";
        }
        if ($this->container['track_steps'] === null) {
            $invalidProperties[] = "'track_steps' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['fulfillment_plan_id'] === null) {
            return false;
        }
        if ($this->container['layout'] === null) {
            return false;
        }
        if ($this->container['track_assemblies'] === null) {
            return false;
        }
        if ($this->container['track_steps'] === null) {
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
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id warehouse_id
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets assembly_instructions
     *
     * @return string
     */
    public function getAssemblyInstructions()
    {
        return $this->container['assembly_instructions'];
    }

    /**
     * Sets assembly_instructions
     *
     * @param string $assembly_instructions assembly_instructions
     *
     * @return $this
     */
    public function setAssemblyInstructions($assembly_instructions)
    {
        $this->container['assembly_instructions'] = $assembly_instructions;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return \Infoplus\Infoplus\Model\JobRecipeInput[]
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \Infoplus\Infoplus\Model\JobRecipeInput[] $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return \Infoplus\Infoplus\Model\JobRecipeOutput[]
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \Infoplus\Infoplus\Model\JobRecipeOutput[] $outputs outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Infoplus\Infoplus\Model\JobRecipeStep[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Infoplus\Infoplus\Model\JobRecipeStep[] $steps steps
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets fulfillment_plan_id
     *
     * @return int
     */
    public function getFulfillmentPlanId()
    {
        return $this->container['fulfillment_plan_id'];
    }

    /**
     * Sets fulfillment_plan_id
     *
     * @param int $fulfillment_plan_id fulfillment_plan_id
     *
     * @return $this
     */
    public function setFulfillmentPlanId($fulfillment_plan_id)
    {
        $this->container['fulfillment_plan_id'] = $fulfillment_plan_id;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string $layout layout
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets track_assemblies
     *
     * @return bool
     */
    public function getTrackAssemblies()
    {
        return $this->container['track_assemblies'];
    }

    /**
     * Sets track_assemblies
     *
     * @param bool $track_assemblies track_assemblies
     *
     * @return $this
     */
    public function setTrackAssemblies($track_assemblies)
    {
        $this->container['track_assemblies'] = $track_assemblies;

        return $this;
    }

    /**
     * Gets track_steps
     *
     * @return bool
     */
    public function getTrackSteps()
    {
        return $this->container['track_steps'];
    }

    /**
     * Sets track_steps
     *
     * @param bool $track_steps track_steps
     *
     * @return $this
     */
    public function setTrackSteps($track_steps)
    {
        $this->container['track_steps'] = $track_steps;

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


