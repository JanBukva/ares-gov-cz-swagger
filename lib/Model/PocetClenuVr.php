<?php
/**
 * PocetClenuVr
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
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.58
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * PocetClenuVr Class Doc Comment
 *
 * @category Class
 * @description Počet členů orgánu
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PocetClenuVr extends DatumZapisuVymazuUdajeVr 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PocetClenuVr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pocet_clenu' => 'int',
        'max_pocet_clenu' => 'int',
        'typ' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pocet_clenu' => 'int32',
        'max_pocet_clenu' => 'int32',
        'typ' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pocet_clenu' => 'pocetClenu',
        'max_pocet_clenu' => 'maxPocetClenu',
        'typ' => 'typ'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pocet_clenu' => 'setPocetClenu',
        'max_pocet_clenu' => 'setMaxPocetClenu',
        'typ' => 'setTyp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pocet_clenu' => 'getPocetClenu',
        'max_pocet_clenu' => 'getMaxPocetClenu',
        'typ' => 'getTyp'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['pocet_clenu'] = isset($data['pocet_clenu']) ? $data['pocet_clenu'] : null;
        $this->container['max_pocet_clenu'] = isset($data['max_pocet_clenu']) ? $data['max_pocet_clenu'] : null;
        $this->container['typ'] = isset($data['typ']) ? $data['typ'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets pocet_clenu
     *
     * @return int
     */
    public function getPocetClenu()
    {
        return $this->container['pocet_clenu'];
    }

    /**
     * Sets pocet_clenu
     *
     * @param int $pocet_clenu pocet_clenu
     *
     * @return $this
     */
    public function setPocetClenu($pocet_clenu)
    {
        $this->container['pocet_clenu'] = $pocet_clenu;

        return $this;
    }

    /**
     * Gets max_pocet_clenu
     *
     * @return int
     */
    public function getMaxPocetClenu()
    {
        return $this->container['max_pocet_clenu'];
    }

    /**
     * Sets max_pocet_clenu
     *
     * @param int $max_pocet_clenu max_pocet_clenu
     *
     * @return $this
     */
    public function setMaxPocetClenu($max_pocet_clenu)
    {
        $this->container['max_pocet_clenu'] = $max_pocet_clenu;

        return $this;
    }

    /**
     * Gets typ
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->container['typ'];
    }

    /**
     * Sets typ
     *
     * @param string $typ Typ počet členů - kód (ciselnikKod: TypPocetClenu)
     *
     * @return $this
     */
    public function setTyp($typ)
    {
        $this->container['typ'] = $typ;

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
