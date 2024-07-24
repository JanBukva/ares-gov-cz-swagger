<?php
/**
 * EkonomickySubjektCeuZaklad
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
 * EkonomickySubjektCeuZaklad Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EkonomickySubjektCeuZaklad extends EkonomickySubjektZaklad 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EkonomickySubjektCeuZaklad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'typ_subjektu' => 'string',
        'adresy' => '\Swagger\Client\Model\AdresaCeu[]',
        'jmeno_prijmeni' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'typ_subjektu' => null,
        'adresy' => null,
        'jmeno_prijmeni' => null
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
        'typ_subjektu' => 'typSubjektu',
        'adresy' => 'adresy',
        'jmeno_prijmeni' => 'jmenoPrijmeni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'typ_subjektu' => 'setTypSubjektu',
        'adresy' => 'setAdresy',
        'jmeno_prijmeni' => 'setJmenoPrijmeni'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'typ_subjektu' => 'getTypSubjektu',
        'adresy' => 'getAdresy',
        'jmeno_prijmeni' => 'getJmenoPrijmeni'
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

        $this->container['typ_subjektu'] = isset($data['typ_subjektu']) ? $data['typ_subjektu'] : null;
        $this->container['adresy'] = isset($data['adresy']) ? $data['adresy'] : null;
        $this->container['jmeno_prijmeni'] = isset($data['jmeno_prijmeni']) ? $data['jmeno_prijmeni'] : null;
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
     * Gets typ_subjektu
     *
     * @return string
     */
    public function getTypSubjektu()
    {
        return $this->container['typ_subjektu'];
    }

    /**
     * Sets typ_subjektu
     *
     * @param string $typ_subjektu Typ subjektu  (ciselnikKod: TypSubjektu, zdroj: Ceu)
     *
     * @return $this
     */
    public function setTypSubjektu($typ_subjektu)
    {
        $this->container['typ_subjektu'] = $typ_subjektu;

        return $this;
    }

    /**
     * Gets adresy
     *
     * @return \Swagger\Client\Model\AdresaCeu[]
     */
    public function getAdresy()
    {
        return $this->container['adresy'];
    }

    /**
     * Sets adresy
     *
     * @param \Swagger\Client\Model\AdresaCeu[] $adresy adresy
     *
     * @return $this
     */
    public function setAdresy($adresy)
    {
        $this->container['adresy'] = $adresy;

        return $this;
    }

    /**
     * Gets jmeno_prijmeni
     *
     * @return string
     */
    public function getJmenoPrijmeni()
    {
        return $this->container['jmeno_prijmeni'];
    }

    /**
     * Sets jmeno_prijmeni
     *
     * @param string $jmeno_prijmeni Jméno, příjmení fyzické osoby
     *
     * @return $this
     */
    public function setJmenoPrijmeni($jmeno_prijmeni)
    {
        $this->container['jmeno_prijmeni'] = $jmeno_prijmeni;

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
