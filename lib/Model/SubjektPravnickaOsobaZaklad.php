<?php
/**
 * SubjektPravnickaOsobaZaklad
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ARES: REST API - veřejné
 *
 * REST rozhraní systému ARES
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SubjektPravnickaOsobaZaklad Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubjektPravnickaOsobaZaklad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubjektPravnickaOsobaZaklad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ico_zrizovatel' => 'string',
        'ico_nastupce' => 'string',
        'zpusob_zruseni_registrace' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ico_zrizovatel' => null,
        'ico_nastupce' => null,
        'zpusob_zruseni_registrace' => null
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
        'ico_zrizovatel' => 'icoZrizovatel',
        'ico_nastupce' => 'icoNastupce',
        'zpusob_zruseni_registrace' => 'zpusobZruseniRegistrace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ico_zrizovatel' => 'setIcoZrizovatel',
        'ico_nastupce' => 'setIcoNastupce',
        'zpusob_zruseni_registrace' => 'setZpusobZruseniRegistrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ico_zrizovatel' => 'getIcoZrizovatel',
        'ico_nastupce' => 'getIcoNastupce',
        'zpusob_zruseni_registrace' => 'getZpusobZruseniRegistrace'
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
        $this->container['ico_zrizovatel'] = isset($data['ico_zrizovatel']) ? $data['ico_zrizovatel'] : null;
        $this->container['ico_nastupce'] = isset($data['ico_nastupce']) ? $data['ico_nastupce'] : null;
        $this->container['zpusob_zruseni_registrace'] = isset($data['zpusob_zruseni_registrace']) ? $data['zpusob_zruseni_registrace'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ico_zrizovatel
     *
     * @return string
     */
    public function getIcoZrizovatel()
    {
        return $this->container['ico_zrizovatel'];
    }

    /**
     * Sets ico_zrizovatel
     *
     * @param string $ico_zrizovatel IČO zřizovatele právnické osoby.
     *
     * @return $this
     */
    public function setIcoZrizovatel($ico_zrizovatel)
    {
        $this->container['ico_zrizovatel'] = $ico_zrizovatel;

        return $this;
    }

    /**
     * Gets ico_nastupce
     *
     * @return string
     */
    public function getIcoNastupce()
    {
        return $this->container['ico_nastupce'];
    }

    /**
     * Sets ico_nastupce
     *
     * @param string $ico_nastupce IČO nástupce zrušené právnické osoby.
     *
     * @return $this
     */
    public function setIcoNastupce($ico_nastupce)
    {
        $this->container['ico_nastupce'] = $ico_nastupce;

        return $this;
    }

    /**
     * Gets zpusob_zruseni_registrace
     *
     * @return int
     */
    public function getZpusobZruseniRegistrace()
    {
        return $this->container['zpusob_zruseni_registrace'];
    }

    /**
     * Sets zpusob_zruseni_registrace
     *
     * @param int $zpusob_zruseni_registrace Způsob zruseni registrace - kód
     *
     * @return $this
     */
    public function setZpusobZruseniRegistrace($zpusob_zruseni_registrace)
    {
        $this->container['zpusob_zruseni_registrace'] = $zpusob_zruseni_registrace;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
