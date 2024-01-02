<?php
/**
 * AngazovanySubjektRzpZaklad
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
 * AngazovanySubjektRzpZaklad Class Doc Comment
 *
 * @category Class
 * @description Právnické osoby v angažmá ekonomického subjektu.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AngazovanySubjektRzpZaklad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AngazovanySubjektRzpZaklad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'typ_angazma' => 'string',
        'platnost_od' => '\DateTime',
        'platnost_do' => '\DateTime',
        'ico' => 'string',
        'obchodni_jmeno' => 'string',
        'sidlo' => '\Swagger\Client\Model\AngazovanySubjektAdresa',
        'typ_subjektu' => 'string',
        'pravni_forma' => 'string',
        'kod_statu' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'typ_angazma' => null,
        'platnost_od' => 'date',
        'platnost_do' => 'date',
        'ico' => null,
        'obchodni_jmeno' => null,
        'sidlo' => null,
        'typ_subjektu' => null,
        'pravni_forma' => null,
        'kod_statu' => null
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
        'typ_angazma' => 'typAngazma',
        'platnost_od' => 'platnostOd',
        'platnost_do' => 'platnostDo',
        'ico' => 'ico',
        'obchodni_jmeno' => 'obchodniJmeno',
        'sidlo' => 'sidlo',
        'typ_subjektu' => 'typSubjektu',
        'pravni_forma' => 'pravniForma',
        'kod_statu' => 'kodStatu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'typ_angazma' => 'setTypAngazma',
        'platnost_od' => 'setPlatnostOd',
        'platnost_do' => 'setPlatnostDo',
        'ico' => 'setIco',
        'obchodni_jmeno' => 'setObchodniJmeno',
        'sidlo' => 'setSidlo',
        'typ_subjektu' => 'setTypSubjektu',
        'pravni_forma' => 'setPravniForma',
        'kod_statu' => 'setKodStatu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'typ_angazma' => 'getTypAngazma',
        'platnost_od' => 'getPlatnostOd',
        'platnost_do' => 'getPlatnostDo',
        'ico' => 'getIco',
        'obchodni_jmeno' => 'getObchodniJmeno',
        'sidlo' => 'getSidlo',
        'typ_subjektu' => 'getTypSubjektu',
        'pravni_forma' => 'getPravniForma',
        'kod_statu' => 'getKodStatu'
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
        $this->container['typ_angazma'] = isset($data['typ_angazma']) ? $data['typ_angazma'] : null;
        $this->container['platnost_od'] = isset($data['platnost_od']) ? $data['platnost_od'] : null;
        $this->container['platnost_do'] = isset($data['platnost_do']) ? $data['platnost_do'] : null;
        $this->container['ico'] = isset($data['ico']) ? $data['ico'] : null;
        $this->container['obchodni_jmeno'] = isset($data['obchodni_jmeno']) ? $data['obchodni_jmeno'] : null;
        $this->container['sidlo'] = isset($data['sidlo']) ? $data['sidlo'] : null;
        $this->container['typ_subjektu'] = isset($data['typ_subjektu']) ? $data['typ_subjektu'] : null;
        $this->container['pravni_forma'] = isset($data['pravni_forma']) ? $data['pravni_forma'] : null;
        $this->container['kod_statu'] = isset($data['kod_statu']) ? $data['kod_statu'] : null;
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
     * @param string $typ_angazma Typ angažmá osoby u subjektu ve zdroji RŽP (Registr živnostenského podnikání) - kód (ciselnikKod: TypAngazma, zdroj: rzp)
     *
     * @return $this
     */
    public function setTypAngazma($typ_angazma)
    {
        $this->container['typ_angazma'] = $typ_angazma;

        return $this;
    }

    /**
     * Gets platnost_od
     *
     * @return \DateTime
     */
    public function getPlatnostOd()
    {
        return $this->container['platnost_od'];
    }

    /**
     * Sets platnost_od
     *
     * @param \DateTime $platnost_od Platnost angažmá subjektu od data
     *
     * @return $this
     */
    public function setPlatnostOd($platnost_od)
    {
        $this->container['platnost_od'] = $platnost_od;

        return $this;
    }

    /**
     * Gets platnost_do
     *
     * @return \DateTime
     */
    public function getPlatnostDo()
    {
        return $this->container['platnost_do'];
    }

    /**
     * Sets platnost_do
     *
     * @param \DateTime $platnost_do Platnost angažmá subjektu do data
     *
     * @return $this
     */
    public function setPlatnostDo($platnost_do)
    {
        $this->container['platnost_do'] = $platnost_do;

        return $this;
    }

    /**
     * Gets ico
     *
     * @return string
     */
    public function getIco()
    {
        return $this->container['ico'];
    }

    /**
     * Sets ico
     *
     * @param string $ico Ičo angažovaného subjektu
     *
     * @return $this
     */
    public function setIco($ico)
    {
        $this->container['ico'] = $ico;

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
     * @param string $obchodni_jmeno obchodní jméno angažovaného subjektu
     *
     * @return $this
     */
    public function setObchodniJmeno($obchodni_jmeno)
    {
        $this->container['obchodni_jmeno'] = $obchodni_jmeno;

        return $this;
    }

    /**
     * Gets sidlo
     *
     * @return \Swagger\Client\Model\AngazovanySubjektAdresa
     */
    public function getSidlo()
    {
        return $this->container['sidlo'];
    }

    /**
     * Sets sidlo
     *
     * @param \Swagger\Client\Model\AngazovanySubjektAdresa $sidlo sidlo
     *
     * @return $this
     */
    public function setSidlo($sidlo)
    {
        $this->container['sidlo'] = $sidlo;

        return $this;
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
     * @param string $typ_subjektu Typ subjektu - kód (ciselnikKod: TypSubjektu, zdroj: rzp)
     *
     * @return $this
     */
    public function setTypSubjektu($typ_subjektu)
    {
        $this->container['typ_subjektu'] = $typ_subjektu;

        return $this;
    }

    /**
     * Gets pravni_forma
     *
     * @return string
     */
    public function getPravniForma()
    {
        return $this->container['pravni_forma'];
    }

    /**
     * Sets pravni_forma
     *
     * @param string $pravni_forma Právní forma - kód (ciselnikKod: PravniForma, zdroj:com, res)
     *
     * @return $this
     */
    public function setPravniForma($pravni_forma)
    {
        $this->container['pravni_forma'] = $pravni_forma;

        return $this;
    }

    /**
     * Gets kod_statu
     *
     * @return string
     */
    public function getKodStatu()
    {
        return $this->container['kod_statu'];
    }

    /**
     * Sets kod_statu
     *
     * @param string $kod_statu Kód státu (ciselnikKod: Stat, zdroj:com)
     *
     * @return $this
     */
    public function setKodStatu($kod_statu)
    {
        $this->container['kod_statu'] = $kod_statu;

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
