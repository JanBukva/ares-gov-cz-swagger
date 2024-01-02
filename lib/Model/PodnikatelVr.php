<?php
/**
 * PodnikatelVr
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
use \Swagger\Client\ObjectSerializer;

/**
 * PodnikatelVr Class Doc Comment
 *
 * @category Class
 * @description Podnikatel
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PodnikatelVr extends DatumZapisuVymazuUdajeVr 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PodnikatelVr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bydliste' => '\Swagger\Client\Model\AdresaVr[]',
        'osoba_podnikatel' => '\Swagger\Client\Model\AngazmaFyzickaOsobaVr',
        'pobyt' => '\Swagger\Client\Model\AdresaVr[]',
        'typ_angazma' => 'string',
        'nazev_angazma' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bydliste' => null,
        'osoba_podnikatel' => null,
        'pobyt' => null,
        'typ_angazma' => null,
        'nazev_angazma' => null
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
        'bydliste' => 'bydliste',
        'osoba_podnikatel' => 'osobaPodnikatel',
        'pobyt' => 'pobyt',
        'typ_angazma' => 'typAngazma',
        'nazev_angazma' => 'nazevAngazma'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bydliste' => 'setBydliste',
        'osoba_podnikatel' => 'setOsobaPodnikatel',
        'pobyt' => 'setPobyt',
        'typ_angazma' => 'setTypAngazma',
        'nazev_angazma' => 'setNazevAngazma'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bydliste' => 'getBydliste',
        'osoba_podnikatel' => 'getOsobaPodnikatel',
        'pobyt' => 'getPobyt',
        'typ_angazma' => 'getTypAngazma',
        'nazev_angazma' => 'getNazevAngazma'
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

        $this->container['bydliste'] = isset($data['bydliste']) ? $data['bydliste'] : null;
        $this->container['osoba_podnikatel'] = isset($data['osoba_podnikatel']) ? $data['osoba_podnikatel'] : null;
        $this->container['pobyt'] = isset($data['pobyt']) ? $data['pobyt'] : null;
        $this->container['typ_angazma'] = isset($data['typ_angazma']) ? $data['typ_angazma'] : null;
        $this->container['nazev_angazma'] = isset($data['nazev_angazma']) ? $data['nazev_angazma'] : null;
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
     * Gets bydliste
     *
     * @return \Swagger\Client\Model\AdresaVr[]
     */
    public function getBydliste()
    {
        return $this->container['bydliste'];
    }

    /**
     * Sets bydliste
     *
     * @param \Swagger\Client\Model\AdresaVr[] $bydliste bydliste
     *
     * @return $this
     */
    public function setBydliste($bydliste)
    {
        $this->container['bydliste'] = $bydliste;

        return $this;
    }

    /**
     * Gets osoba_podnikatel
     *
     * @return \Swagger\Client\Model\AngazmaFyzickaOsobaVr
     */
    public function getOsobaPodnikatel()
    {
        return $this->container['osoba_podnikatel'];
    }

    /**
     * Sets osoba_podnikatel
     *
     * @param \Swagger\Client\Model\AngazmaFyzickaOsobaVr $osoba_podnikatel osoba_podnikatel
     *
     * @return $this
     */
    public function setOsobaPodnikatel($osoba_podnikatel)
    {
        $this->container['osoba_podnikatel'] = $osoba_podnikatel;

        return $this;
    }

    /**
     * Gets pobyt
     *
     * @return \Swagger\Client\Model\AdresaVr[]
     */
    public function getPobyt()
    {
        return $this->container['pobyt'];
    }

    /**
     * Sets pobyt
     *
     * @param \Swagger\Client\Model\AdresaVr[] $pobyt pobyt
     *
     * @return $this
     */
    public function setPobyt($pobyt)
    {
        $this->container['pobyt'] = $pobyt;

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
