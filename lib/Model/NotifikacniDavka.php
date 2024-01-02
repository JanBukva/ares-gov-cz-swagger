<?php
/**
 * NotifikacniDavka
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
 * NotifikacniDavka Class Doc Comment
 *
 * @category Class
 * @description Notifikační dávka datového zdroje
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotifikacniDavka implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotifikacniDavka';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cislo_davky' => 'int',
        'datovy_zdroj' => 'string',
        'datum_uvolneni_davky' => '\DateTime',
        'pocet_zmen' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cislo_davky' => null,
        'datovy_zdroj' => null,
        'datum_uvolneni_davky' => 'date',
        'pocet_zmen' => null
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
        'cislo_davky' => 'cisloDavky',
        'datovy_zdroj' => 'datovyZdroj',
        'datum_uvolneni_davky' => 'datumUvolneniDavky',
        'pocet_zmen' => 'pocetZmen'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cislo_davky' => 'setCisloDavky',
        'datovy_zdroj' => 'setDatovyZdroj',
        'datum_uvolneni_davky' => 'setDatumUvolneniDavky',
        'pocet_zmen' => 'setPocetZmen'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cislo_davky' => 'getCisloDavky',
        'datovy_zdroj' => 'getDatovyZdroj',
        'datum_uvolneni_davky' => 'getDatumUvolneniDavky',
        'pocet_zmen' => 'getPocetZmen'
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
        $this->container['cislo_davky'] = isset($data['cislo_davky']) ? $data['cislo_davky'] : null;
        $this->container['datovy_zdroj'] = isset($data['datovy_zdroj']) ? $data['datovy_zdroj'] : null;
        $this->container['datum_uvolneni_davky'] = isset($data['datum_uvolneni_davky']) ? $data['datum_uvolneni_davky'] : null;
        $this->container['pocet_zmen'] = isset($data['pocet_zmen']) ? $data['pocet_zmen'] : null;
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
     * Gets cislo_davky
     *
     * @return int
     */
    public function getCisloDavky()
    {
        return $this->container['cislo_davky'];
    }

    /**
     * Sets cislo_davky
     *
     * @param int $cislo_davky Číslo notifikační dávky
     *
     * @return $this
     */
    public function setCisloDavky($cislo_davky)
    {
        $this->container['cislo_davky'] = $cislo_davky;

        return $this;
    }

    /**
     * Gets datovy_zdroj
     *
     * @return string
     */
    public function getDatovyZdroj()
    {
        return $this->container['datovy_zdroj'];
    }

    /**
     * Sets datovy_zdroj
     *
     * @param string $datovy_zdroj Datový zdroj notifikační dávky - kód (ciselnikKod: TypZdrojeAres, zdroj:com)
     *
     * @return $this
     */
    public function setDatovyZdroj($datovy_zdroj)
    {
        $this->container['datovy_zdroj'] = $datovy_zdroj;

        return $this;
    }

    /**
     * Gets datum_uvolneni_davky
     *
     * @return \DateTime
     */
    public function getDatumUvolneniDavky()
    {
        return $this->container['datum_uvolneni_davky'];
    }

    /**
     * Sets datum_uvolneni_davky
     *
     * @param \DateTime $datum_uvolneni_davky Datum uvolnění notifikační dávky
     *
     * @return $this
     */
    public function setDatumUvolneniDavky($datum_uvolneni_davky)
    {
        $this->container['datum_uvolneni_davky'] = $datum_uvolneni_davky;

        return $this;
    }

    /**
     * Gets pocet_zmen
     *
     * @return int
     */
    public function getPocetZmen()
    {
        return $this->container['pocet_zmen'];
    }

    /**
     * Sets pocet_zmen
     *
     * @param int $pocet_zmen Počet změn v notifikační dávce
     *
     * @return $this
     */
    public function setPocetZmen($pocet_zmen)
    {
        $this->container['pocet_zmen'] = $pocet_zmen;

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
