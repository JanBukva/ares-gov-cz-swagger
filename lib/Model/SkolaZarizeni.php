<?php
/**
 * SkolaZarizeni
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
 * SkolaZarizeni Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SkolaZarizeni implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SkolaZarizeni';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kontakty' => '\Swagger\Client\Model\KontaktyRs',
        'izo' => 'string',
        'obchodni_jmeno' => 'string',
        'obchodni_jmeno_zkracene' => 'string',
        'typ_skoly' => 'string',
        'adresa' => '\Swagger\Client\Model\Adresa',
        'datum_vzniku' => '\DateTime',
        'datum_zaniku' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kontakty' => null,
        'izo' => null,
        'obchodni_jmeno' => null,
        'obchodni_jmeno_zkracene' => null,
        'typ_skoly' => null,
        'adresa' => null,
        'datum_vzniku' => 'date',
        'datum_zaniku' => 'date'
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
        'kontakty' => 'kontakty',
        'izo' => 'izo',
        'obchodni_jmeno' => 'obchodniJmeno',
        'obchodni_jmeno_zkracene' => 'obchodniJmenoZkracene',
        'typ_skoly' => 'typSkoly',
        'adresa' => 'adresa',
        'datum_vzniku' => 'datumVzniku',
        'datum_zaniku' => 'datumZaniku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kontakty' => 'setKontakty',
        'izo' => 'setIzo',
        'obchodni_jmeno' => 'setObchodniJmeno',
        'obchodni_jmeno_zkracene' => 'setObchodniJmenoZkracene',
        'typ_skoly' => 'setTypSkoly',
        'adresa' => 'setAdresa',
        'datum_vzniku' => 'setDatumVzniku',
        'datum_zaniku' => 'setDatumZaniku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kontakty' => 'getKontakty',
        'izo' => 'getIzo',
        'obchodni_jmeno' => 'getObchodniJmeno',
        'obchodni_jmeno_zkracene' => 'getObchodniJmenoZkracene',
        'typ_skoly' => 'getTypSkoly',
        'adresa' => 'getAdresa',
        'datum_vzniku' => 'getDatumVzniku',
        'datum_zaniku' => 'getDatumZaniku'
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
        $this->container['kontakty'] = isset($data['kontakty']) ? $data['kontakty'] : null;
        $this->container['izo'] = isset($data['izo']) ? $data['izo'] : null;
        $this->container['obchodni_jmeno'] = isset($data['obchodni_jmeno']) ? $data['obchodni_jmeno'] : null;
        $this->container['obchodni_jmeno_zkracene'] = isset($data['obchodni_jmeno_zkracene']) ? $data['obchodni_jmeno_zkracene'] : null;
        $this->container['typ_skoly'] = isset($data['typ_skoly']) ? $data['typ_skoly'] : null;
        $this->container['adresa'] = isset($data['adresa']) ? $data['adresa'] : null;
        $this->container['datum_vzniku'] = isset($data['datum_vzniku']) ? $data['datum_vzniku'] : null;
        $this->container['datum_zaniku'] = isset($data['datum_zaniku']) ? $data['datum_zaniku'] : null;
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
     * Gets kontakty
     *
     * @return \Swagger\Client\Model\KontaktyRs
     */
    public function getKontakty()
    {
        return $this->container['kontakty'];
    }

    /**
     * Sets kontakty
     *
     * @param \Swagger\Client\Model\KontaktyRs $kontakty kontakty
     *
     * @return $this
     */
    public function setKontakty($kontakty)
    {
        $this->container['kontakty'] = $kontakty;

        return $this;
    }

    /**
     * Gets izo
     *
     * @return string
     */
    public function getIzo()
    {
        return $this->container['izo'];
    }

    /**
     * Sets izo
     *
     * @param string $izo IZO - resortní identifikátor
     *
     * @return $this
     */
    public function setIzo($izo)
    {
        $this->container['izo'] = $izo;

        return $this;
    }

    /**
     * Gets obchodni_jmeno
     *
     * @return string
     */
    public function getObchodniJmeno()
    {
        return $this->container['obchodni_jmeno'];
    }

    /**
     * Sets obchodni_jmeno
     *
     * @param string $obchodni_jmeno Jméno subjektu
     *
     * @return $this
     */
    public function setObchodniJmeno($obchodni_jmeno)
    {
        $this->container['obchodni_jmeno'] = $obchodni_jmeno;

        return $this;
    }

    /**
     * Gets obchodni_jmeno_zkracene
     *
     * @return string
     */
    public function getObchodniJmenoZkracene()
    {
        return $this->container['obchodni_jmeno_zkracene'];
    }

    /**
     * Sets obchodni_jmeno_zkracene
     *
     * @param string $obchodni_jmeno_zkracene Zkrácené jméno subjektu
     *
     * @return $this
     */
    public function setObchodniJmenoZkracene($obchodni_jmeno_zkracene)
    {
        $this->container['obchodni_jmeno_zkracene'] = $obchodni_jmeno_zkracene;

        return $this;
    }

    /**
     * Gets typ_skoly
     *
     * @return string
     */
    public function getTypSkoly()
    {
        return $this->container['typ_skoly'];
    }

    /**
     * Sets typ_skoly
     *
     * @param string $typ_skoly Typ školy
     *
     * @return $this
     */
    public function setTypSkoly($typ_skoly)
    {
        $this->container['typ_skoly'] = $typ_skoly;

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
     * Gets datum_vzniku
     *
     * @return \DateTime
     */
    public function getDatumVzniku()
    {
        return $this->container['datum_vzniku'];
    }

    /**
     * Sets datum_vzniku
     *
     * @param \DateTime $datum_vzniku Datum vzniku
     *
     * @return $this
     */
    public function setDatumVzniku($datum_vzniku)
    {
        $this->container['datum_vzniku'] = $datum_vzniku;

        return $this;
    }

    /**
     * Gets datum_zaniku
     *
     * @return \DateTime
     */
    public function getDatumZaniku()
    {
        return $this->container['datum_zaniku'];
    }

    /**
     * Sets datum_zaniku
     *
     * @param \DateTime $datum_zaniku Datum zániku
     *
     * @return $this
     */
    public function setDatumZaniku($datum_zaniku)
    {
        $this->container['datum_zaniku'] = $datum_zaniku;

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
