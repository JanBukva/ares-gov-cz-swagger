<?php
/**
 * EkonomickeSubjektyZakladFiltr
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
 * EkonomickeSubjektyZakladFiltr Class Doc Comment
 *
 * @category Class
 * @description Obecný filtr pro vyhledání seznamu ekonomických subjektů
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EkonomickeSubjektyZakladFiltr extends StrankovaniARazeni 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EkonomickeSubjektyZakladFiltr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ico' => 'string[]',
        'obchodni_jmeno' => 'string',
        'sidlo' => '\Swagger\Client\Model\AdresaFiltr',
        'pravni_forma' => 'string[]',
        'financni_urad' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ico' => null,
        'obchodni_jmeno' => null,
        'sidlo' => null,
        'pravni_forma' => null,
        'financni_urad' => null
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
        'ico' => 'ico',
        'obchodni_jmeno' => 'obchodniJmeno',
        'sidlo' => 'sidlo',
        'pravni_forma' => 'pravniForma',
        'financni_urad' => 'financniUrad'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ico' => 'setIco',
        'obchodni_jmeno' => 'setObchodniJmeno',
        'sidlo' => 'setSidlo',
        'pravni_forma' => 'setPravniForma',
        'financni_urad' => 'setFinancniUrad'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ico' => 'getIco',
        'obchodni_jmeno' => 'getObchodniJmeno',
        'sidlo' => 'getSidlo',
        'pravni_forma' => 'getPravniForma',
        'financni_urad' => 'getFinancniUrad'
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

        $this->container['ico'] = isset($data['ico']) ? $data['ico'] : null;
        $this->container['obchodni_jmeno'] = isset($data['obchodni_jmeno']) ? $data['obchodni_jmeno'] : null;
        $this->container['sidlo'] = isset($data['sidlo']) ? $data['sidlo'] : null;
        $this->container['pravni_forma'] = isset($data['pravni_forma']) ? $data['pravni_forma'] : null;
        $this->container['financni_urad'] = isset($data['financni_urad']) ? $data['financni_urad'] : null;
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
     * Gets ico
     *
     * @return string[]
     */
    public function getIco()
    {
        return $this->container['ico'];
    }

    /**
     * Sets ico
     *
     * @param string[] $ico ico
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
     * @param string $obchodni_jmeno Obchodní jméno ekonomického subjektu
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
     * @return \Swagger\Client\Model\AdresaFiltr
     */
    public function getSidlo()
    {
        return $this->container['sidlo'];
    }

    /**
     * Sets sidlo
     *
     * @param \Swagger\Client\Model\AdresaFiltr $sidlo sidlo
     *
     * @return $this
     */
    public function setSidlo($sidlo)
    {
        $this->container['sidlo'] = $sidlo;

        return $this;
    }

    /**
     * Gets pravni_forma
     *
     * @return string[]
     */
    public function getPravniForma()
    {
        return $this->container['pravni_forma'];
    }

    /**
     * Sets pravni_forma
     *
     * @param string[] $pravni_forma pravni_forma
     *
     * @return $this
     */
    public function setPravniForma($pravni_forma)
    {
        $this->container['pravni_forma'] = $pravni_forma;

        return $this;
    }

    /**
     * Gets financni_urad
     *
     * @return string[]
     */
    public function getFinancniUrad()
    {
        return $this->container['financni_urad'];
    }

    /**
     * Sets financni_urad
     *
     * @param string[] $financni_urad financni_urad
     *
     * @return $this
     */
    public function setFinancniUrad($financni_urad)
    {
        $this->container['financni_urad'] = $financni_urad;

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
