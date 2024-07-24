<?php
/**
 * UpadekCeu
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
 * UpadekCeu Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpadekCeu implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpadekCeu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'podnet' => 'string',
        'spis_zn' => 'string',
        'datum' => '\DateTime',
        'detail' => 'string',
        'usneseni' => 'string',
        'akce_upadek' => 'string',
        'typ_upadek' => 'string',
        'soud_upadek' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'podnet' => null,
        'spis_zn' => null,
        'datum' => 'date',
        'detail' => null,
        'usneseni' => null,
        'akce_upadek' => null,
        'typ_upadek' => null,
        'soud_upadek' => null
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
        'podnet' => 'podnet',
        'spis_zn' => 'spisZn',
        'datum' => 'datum',
        'detail' => 'detail',
        'usneseni' => 'usneseni',
        'akce_upadek' => 'akceUpadek',
        'typ_upadek' => 'typUpadek',
        'soud_upadek' => 'soudUpadek'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'podnet' => 'setPodnet',
        'spis_zn' => 'setSpisZn',
        'datum' => 'setDatum',
        'detail' => 'setDetail',
        'usneseni' => 'setUsneseni',
        'akce_upadek' => 'setAkceUpadek',
        'typ_upadek' => 'setTypUpadek',
        'soud_upadek' => 'setSoudUpadek'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'podnet' => 'getPodnet',
        'spis_zn' => 'getSpisZn',
        'datum' => 'getDatum',
        'detail' => 'getDetail',
        'usneseni' => 'getUsneseni',
        'akce_upadek' => 'getAkceUpadek',
        'typ_upadek' => 'getTypUpadek',
        'soud_upadek' => 'getSoudUpadek'
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
        $this->container['podnet'] = isset($data['podnet']) ? $data['podnet'] : null;
        $this->container['spis_zn'] = isset($data['spis_zn']) ? $data['spis_zn'] : null;
        $this->container['datum'] = isset($data['datum']) ? $data['datum'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['usneseni'] = isset($data['usneseni']) ? $data['usneseni'] : null;
        $this->container['akce_upadek'] = isset($data['akce_upadek']) ? $data['akce_upadek'] : null;
        $this->container['typ_upadek'] = isset($data['typ_upadek']) ? $data['typ_upadek'] : null;
        $this->container['soud_upadek'] = isset($data['soud_upadek']) ? $data['soud_upadek'] : null;
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
     * Gets podnet
     *
     * @return string
     */
    public function getPodnet()
    {
        return $this->container['podnet'];
    }

    /**
     * Sets podnet
     *
     * @param string $podnet Podnět
     *
     * @return $this
     */
    public function setPodnet($podnet)
    {
        $this->container['podnet'] = $podnet;

        return $this;
    }

    /**
     * Gets spis_zn
     *
     * @return string
     */
    public function getSpisZn()
    {
        return $this->container['spis_zn'];
    }

    /**
     * Sets spis_zn
     *
     * @param string $spis_zn Spisová značka
     *
     * @return $this
     */
    public function setSpisZn($spis_zn)
    {
        $this->container['spis_zn'] = $spis_zn;

        return $this;
    }

    /**
     * Gets datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->container['datum'];
    }

    /**
     * Sets datum
     *
     * @param \DateTime $datum Datum
     *
     * @return $this
     */
    public function setDatum($datum)
    {
        $this->container['datum'] = $datum;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail Odkaz na detail úpadku
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets usneseni
     *
     * @return string
     */
    public function getUsneseni()
    {
        return $this->container['usneseni'];
    }

    /**
     * Sets usneseni
     *
     * @param string $usneseni Odkaz na usnesení
     *
     * @return $this
     */
    public function setUsneseni($usneseni)
    {
        $this->container['usneseni'] = $usneseni;

        return $this;
    }

    /**
     * Gets akce_upadek
     *
     * @return string
     */
    public function getAkceUpadek()
    {
        return $this->container['akce_upadek'];
    }

    /**
     * Sets akce_upadek
     *
     * @param string $akce_upadek Akce úpadku
     *
     * @return $this
     */
    public function setAkceUpadek($akce_upadek)
    {
        $this->container['akce_upadek'] = $akce_upadek;

        return $this;
    }

    /**
     * Gets typ_upadek
     *
     * @return string
     */
    public function getTypUpadek()
    {
        return $this->container['typ_upadek'];
    }

    /**
     * Sets typ_upadek
     *
     * @param string $typ_upadek Typ úpadku
     *
     * @return $this
     */
    public function setTypUpadek($typ_upadek)
    {
        $this->container['typ_upadek'] = $typ_upadek;

        return $this;
    }

    /**
     * Gets soud_upadek
     *
     * @return string
     */
    public function getSoudUpadek()
    {
        return $this->container['soud_upadek'];
    }

    /**
     * Sets soud_upadek
     *
     * @param string $soud_upadek Soud rozhodující o úpadku
     *
     * @return $this
     */
    public function setSoudUpadek($soud_upadek)
    {
        $this->container['soud_upadek'] = $soud_upadek;

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
