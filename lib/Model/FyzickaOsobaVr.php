<?php
/**
 * FyzickaOsobaVr
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
 * FyzickaOsobaVr Class Doc Comment
 *
 * @category Class
 * @description Fyzická osoba
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FyzickaOsobaVr extends OsobaVr 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FyzickaOsobaVr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bydliste' => '\Swagger\Client\Model\Adresa',
        'datum_narozeni' => '\DateTime',
        'jmeno' => 'string',
        'prijmeni' => 'string',
        'statni_obcanstvi' => 'string',
        'titul_pred_jmenem' => 'string',
        'titul_za_jmenem' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bydliste' => null,
        'datum_narozeni' => 'date',
        'jmeno' => null,
        'prijmeni' => null,
        'statni_obcanstvi' => null,
        'titul_pred_jmenem' => null,
        'titul_za_jmenem' => null
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
        'datum_narozeni' => 'datumNarozeni',
        'jmeno' => 'jmeno',
        'prijmeni' => 'prijmeni',
        'statni_obcanstvi' => 'statniObcanstvi',
        'titul_pred_jmenem' => 'titulPredJmenem',
        'titul_za_jmenem' => 'titulZaJmenem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bydliste' => 'setBydliste',
        'datum_narozeni' => 'setDatumNarozeni',
        'jmeno' => 'setJmeno',
        'prijmeni' => 'setPrijmeni',
        'statni_obcanstvi' => 'setStatniObcanstvi',
        'titul_pred_jmenem' => 'setTitulPredJmenem',
        'titul_za_jmenem' => 'setTitulZaJmenem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bydliste' => 'getBydliste',
        'datum_narozeni' => 'getDatumNarozeni',
        'jmeno' => 'getJmeno',
        'prijmeni' => 'getPrijmeni',
        'statni_obcanstvi' => 'getStatniObcanstvi',
        'titul_pred_jmenem' => 'getTitulPredJmenem',
        'titul_za_jmenem' => 'getTitulZaJmenem'
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
        $this->container['datum_narozeni'] = isset($data['datum_narozeni']) ? $data['datum_narozeni'] : null;
        $this->container['jmeno'] = isset($data['jmeno']) ? $data['jmeno'] : null;
        $this->container['prijmeni'] = isset($data['prijmeni']) ? $data['prijmeni'] : null;
        $this->container['statni_obcanstvi'] = isset($data['statni_obcanstvi']) ? $data['statni_obcanstvi'] : null;
        $this->container['titul_pred_jmenem'] = isset($data['titul_pred_jmenem']) ? $data['titul_pred_jmenem'] : null;
        $this->container['titul_za_jmenem'] = isset($data['titul_za_jmenem']) ? $data['titul_za_jmenem'] : null;
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
     * @return \Swagger\Client\Model\Adresa
     */
    public function getBydliste()
    {
        return $this->container['bydliste'];
    }

    /**
     * Sets bydliste
     *
     * @param \Swagger\Client\Model\Adresa $bydliste bydliste
     *
     * @return $this
     */
    public function setBydliste($bydliste)
    {
        $this->container['bydliste'] = $bydliste;

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
     * @param \DateTime $datum_narozeni Datum narození
     *
     * @return $this
     */
    public function setDatumNarozeni($datum_narozeni)
    {
        $this->container['datum_narozeni'] = $datum_narozeni;

        return $this;
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
     * @param string $jmeno Jméno
     *
     * @return $this
     */
    public function setJmeno($jmeno)
    {
        $this->container['jmeno'] = $jmeno;

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
     * @param string $prijmeni Příjmení
     *
     * @return $this
     */
    public function setPrijmeni($prijmeni)
    {
        $this->container['prijmeni'] = $prijmeni;

        return $this;
    }

    /**
     * Gets statni_obcanstvi
     *
     * @return string
     */
    public function getStatniObcanstvi()
    {
        return $this->container['statni_obcanstvi'];
    }

    /**
     * Sets statni_obcanstvi
     *
     * @param string $statni_obcanstvi Státní občanství osoby - kod (ciselnikKod: Stat)
     *
     * @return $this
     */
    public function setStatniObcanstvi($statni_obcanstvi)
    {
        $this->container['statni_obcanstvi'] = $statni_obcanstvi;

        return $this;
    }

    /**
     * Gets titul_pred_jmenem
     *
     * @return string
     */
    public function getTitulPredJmenem()
    {
        return $this->container['titul_pred_jmenem'];
    }

    /**
     * Sets titul_pred_jmenem
     *
     * @param string $titul_pred_jmenem Titul před jménem
     *
     * @return $this
     */
    public function setTitulPredJmenem($titul_pred_jmenem)
    {
        $this->container['titul_pred_jmenem'] = $titul_pred_jmenem;

        return $this;
    }

    /**
     * Gets titul_za_jmenem
     *
     * @return string
     */
    public function getTitulZaJmenem()
    {
        return $this->container['titul_za_jmenem'];
    }

    /**
     * Sets titul_za_jmenem
     *
     * @param string $titul_za_jmenem Titul za jménem
     *
     * @return $this
     */
    public function setTitulZaJmenem($titul_za_jmenem)
    {
        $this->container['titul_za_jmenem'] = $titul_za_jmenem;

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
