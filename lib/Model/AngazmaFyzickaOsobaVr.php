<?php
/**
 * AngazmaFyzickaOsobaVr
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
 * AngazmaFyzickaOsobaVr Class Doc Comment
 *
 * @category Class
 * @description Angažná - fyzická osoba
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AngazmaFyzickaOsobaVr extends DatumZapisuVymazuUdajeVr 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AngazmaFyzickaOsobaVr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clenstvi' => '\Swagger\Client\Model\AngazmaClenstviVr',
        'fyzicka_osoba' => '\Swagger\Client\Model\FyzickaOsobaVr',
        'nazev_angazma' => 'string',
        'typ_angazma' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clenstvi' => null,
        'fyzicka_osoba' => null,
        'nazev_angazma' => null,
        'typ_angazma' => null
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
        'clenstvi' => 'clenstvi',
        'fyzicka_osoba' => 'fyzickaOsoba',
        'nazev_angazma' => 'nazevAngazma',
        'typ_angazma' => 'typAngazma'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clenstvi' => 'setClenstvi',
        'fyzicka_osoba' => 'setFyzickaOsoba',
        'nazev_angazma' => 'setNazevAngazma',
        'typ_angazma' => 'setTypAngazma'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clenstvi' => 'getClenstvi',
        'fyzicka_osoba' => 'getFyzickaOsoba',
        'nazev_angazma' => 'getNazevAngazma',
        'typ_angazma' => 'getTypAngazma'
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

        $this->container['clenstvi'] = isset($data['clenstvi']) ? $data['clenstvi'] : null;
        $this->container['fyzicka_osoba'] = isset($data['fyzicka_osoba']) ? $data['fyzicka_osoba'] : null;
        $this->container['nazev_angazma'] = isset($data['nazev_angazma']) ? $data['nazev_angazma'] : null;
        $this->container['typ_angazma'] = isset($data['typ_angazma']) ? $data['typ_angazma'] : null;
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
     * Gets clenstvi
     *
     * @return \Swagger\Client\Model\AngazmaClenstviVr
     */
    public function getClenstvi()
    {
        return $this->container['clenstvi'];
    }

    /**
     * Sets clenstvi
     *
     * @param \Swagger\Client\Model\AngazmaClenstviVr $clenstvi clenstvi
     *
     * @return $this
     */
    public function setClenstvi($clenstvi)
    {
        $this->container['clenstvi'] = $clenstvi;

        return $this;
    }

    /**
     * Gets fyzicka_osoba
     *
     * @return \Swagger\Client\Model\FyzickaOsobaVr
     */
    public function getFyzickaOsoba()
    {
        return $this->container['fyzicka_osoba'];
    }

    /**
     * Sets fyzicka_osoba
     *
     * @param \Swagger\Client\Model\FyzickaOsobaVr $fyzicka_osoba fyzicka_osoba
     *
     * @return $this
     */
    public function setFyzickaOsoba($fyzicka_osoba)
    {
        $this->container['fyzicka_osoba'] = $fyzicka_osoba;

        return $this;
    }

    /**
     * Gets nazev_angazma
     *
     * @return string
     */
    public function getNazevAngazma()
    {
        return $this->container['nazev_angazma'];
    }

    /**
     * Sets nazev_angazma
     *
     * @param string $nazev_angazma Název angažmá - nestandardní
     *
     * @return $this
     */
    public function setNazevAngazma($nazev_angazma)
    {
        $this->container['nazev_angazma'] = $nazev_angazma;

        return $this;
    }

    /**
     * Gets typ_angazma
     *
     * @return string
     */
    public function getTypAngazma()
    {
        return $this->container['typ_angazma'];
    }

    /**
     * Sets typ_angazma
     *
     * @param string $typ_angazma Typ angažmá  - kód (ciselnikKod: TypAngazma, zdroj: vr)
     *
     * @return $this
     */
    public function setTypAngazma($typ_angazma)
    {
        $this->container['typ_angazma'] = $typ_angazma;

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
