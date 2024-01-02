<?php
/**
 * OsobaVr
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
 * OsobaVr Class Doc Comment
 *
 * @category Class
 * @description Osoba - obecný předek
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OsobaVr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OsobaVr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text_osoba' => 'string',
        'text_osoba_od' => '\DateTime',
        'adresa' => '\Swagger\Client\Model\Adresa',
        'text_osoba_do' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text_osoba' => null,
        'text_osoba_od' => 'date',
        'adresa' => null,
        'text_osoba_do' => 'date'
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
        'text_osoba' => 'textOsoba',
        'text_osoba_od' => 'textOsobaOd',
        'adresa' => 'adresa',
        'text_osoba_do' => 'textOsobaDo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_osoba' => 'setTextOsoba',
        'text_osoba_od' => 'setTextOsobaOd',
        'adresa' => 'setAdresa',
        'text_osoba_do' => 'setTextOsobaDo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_osoba' => 'getTextOsoba',
        'text_osoba_od' => 'getTextOsobaOd',
        'adresa' => 'getAdresa',
        'text_osoba_do' => 'getTextOsobaDo'
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
        $this->container['text_osoba'] = isset($data['text_osoba']) ? $data['text_osoba'] : null;
        $this->container['text_osoba_od'] = isset($data['text_osoba_od']) ? $data['text_osoba_od'] : null;
        $this->container['adresa'] = isset($data['adresa']) ? $data['adresa'] : null;
        $this->container['text_osoba_do'] = isset($data['text_osoba_do']) ? $data['text_osoba_do'] : null;
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
     * Gets text_osoba
     *
     * @return string
     */
    public function getTextOsoba()
    {
        return $this->container['text_osoba'];
    }

    /**
     * Sets text_osoba
     *
     * @param string $text_osoba Doplňková informace k osobě
     *
     * @return $this
     */
    public function setTextOsoba($text_osoba)
    {
        $this->container['text_osoba'] = $text_osoba;

        return $this;
    }

    /**
     * Gets text_osoba_od
     *
     * @return \DateTime
     */
    public function getTextOsobaOd()
    {
        return $this->container['text_osoba_od'];
    }

    /**
     * Sets text_osoba_od
     *
     * @param \DateTime $text_osoba_od Platnost doplňkové informace o osobě od data
     *
     * @return $this
     */
    public function setTextOsobaOd($text_osoba_od)
    {
        $this->container['text_osoba_od'] = $text_osoba_od;

        return $this;
    }

    /**
     * Gets adresa
     *
     * @return \Swagger\Client\Model\Adresa
     */
    public function getAdresa()
    {
        return $this->container['adresa'];
    }

    /**
     * Sets adresa
     *
     * @param \Swagger\Client\Model\Adresa $adresa adresa
     *
     * @return $this
     */
    public function setAdresa($adresa)
    {
        $this->container['adresa'] = $adresa;

        return $this;
    }

    /**
     * Gets text_osoba_do
     *
     * @return \DateTime
     */
    public function getTextOsobaDo()
    {
        return $this->container['text_osoba_do'];
    }

    /**
     * Sets text_osoba_do
     *
     * @param \DateTime $text_osoba_do Platnost doplňkové informace o osobě od data
     *
     * @return $this
     */
    public function setTextOsobaDo($text_osoba_do)
    {
        $this->container['text_osoba_do'] = $text_osoba_do;

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