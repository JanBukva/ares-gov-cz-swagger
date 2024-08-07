<?php
/**
 * AngazovanaOsobaFiltr
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AngazovanaOsobaFiltr Class Doc Comment
 *
 * @category Class
 * @description Angažovaná osoba
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AngazovanaOsobaFiltr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AngazovanaOsobaFiltr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jmeno' => 'string',
        'rodne_cislo' => 'string',
        'prijmeni' => 'string',
        'datum_narozeni' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jmeno' => null,
        'rodne_cislo' => null,
        'prijmeni' => null,
        'datum_narozeni' => 'date'
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
        'jmeno' => 'jmeno',
        'rodne_cislo' => 'rodneCislo',
        'prijmeni' => 'prijmeni',
        'datum_narozeni' => 'datumNarozeni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jmeno' => 'setJmeno',
        'rodne_cislo' => 'setRodneCislo',
        'prijmeni' => 'setPrijmeni',
        'datum_narozeni' => 'setDatumNarozeni'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jmeno' => 'getJmeno',
        'rodne_cislo' => 'getRodneCislo',
        'prijmeni' => 'getPrijmeni',
        'datum_narozeni' => 'getDatumNarozeni'
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
        $this->container['jmeno'] = isset($data['jmeno']) ? $data['jmeno'] : null;
        $this->container['rodne_cislo'] = isset($data['rodne_cislo']) ? $data['rodne_cislo'] : null;
        $this->container['prijmeni'] = isset($data['prijmeni']) ? $data['prijmeni'] : null;
        $this->container['datum_narozeni'] = isset($data['datum_narozeni']) ? $data['datum_narozeni'] : null;
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
     * Gets jmeno
     *
     * @return string
     */
    public function getJmeno()
    {
        return $this->container['jmeno'];
    }

    /**
     * Sets jmeno
     *
     * @param string $jmeno Jméno angažované osoby
     *
     * @return $this
     */
    public function setJmeno($jmeno)
    {
        $this->container['jmeno'] = $jmeno;

        return $this;
    }

    /**
     * Gets rodne_cislo
     *
     * @return string
     */
    public function getRodneCislo()
    {
        return $this->container['rodne_cislo'];
    }

    /**
     * Sets rodne_cislo
     *
     * @param string $rodne_cislo Rodné číslo osoby
     *
     * @return $this
     */
    public function setRodneCislo($rodne_cislo)
    {
        $this->container['rodne_cislo'] = $rodne_cislo;

        return $this;
    }

    /**
     * Gets prijmeni
     *
     * @return string
     */
    public function getPrijmeni()
    {
        return $this->container['prijmeni'];
    }

    /**
     * Sets prijmeni
     *
     * @param string $prijmeni Příjmení angažované osoby
     *
     * @return $this
     */
    public function setPrijmeni($prijmeni)
    {
        $this->container['prijmeni'] = $prijmeni;

        return $this;
    }

    /**
     * Gets datum_narozeni
     *
     * @return \DateTime
     */
    public function getDatumNarozeni()
    {
        return $this->container['datum_narozeni'];
    }

    /**
     * Sets datum_narozeni
     *
     * @param \DateTime $datum_narozeni Datum narození angažované osoby
     *
     * @return $this
     */
    public function setDatumNarozeni($datum_narozeni)
    {
        $this->container['datum_narozeni'] = $datum_narozeni;

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
