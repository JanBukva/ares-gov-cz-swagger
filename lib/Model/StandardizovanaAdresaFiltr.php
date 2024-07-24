<?php
/**
 * StandardizovanaAdresaFiltr
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
 * StandardizovanaAdresaFiltr Class Doc Comment
 *
 * @category Class
 * @description Komplexní filtr pro standardizaci adresy RÚIAN
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardizovanaAdresaFiltr extends StrankovaniARazeni 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardizovanaAdresaFiltr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kod_obce' => 'int',
        'nazev_obce' => 'string',
        'kod_casti_obce' => 'int',
        'nazev_casti_obce' => 'string',
        'kod_mestskeho_casti_obvodu' => 'int',
        'nazev_mestskeho_casti_obvodu' => 'string',
        'kod_ulice' => 'int',
        'nazev_ulice' => 'string',
        'cislo_domovni' => 'int',
        'cislo_orientacni' => 'int',
        'cislo_orientacni_pismeno' => 'string',
        'kod_adresniho_mista' => 'int',
        'textova_adresa' => 'string',
        'typ_standardizace_adresy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kod_obce' => 'int32',
        'nazev_obce' => null,
        'kod_casti_obce' => 'int32',
        'nazev_casti_obce' => null,
        'kod_mestskeho_casti_obvodu' => 'int32',
        'nazev_mestskeho_casti_obvodu' => null,
        'kod_ulice' => 'int32',
        'nazev_ulice' => null,
        'cislo_domovni' => null,
        'cislo_orientacni' => null,
        'cislo_orientacni_pismeno' => null,
        'kod_adresniho_mista' => null,
        'textova_adresa' => null,
        'typ_standardizace_adresy' => null
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
        'kod_obce' => 'kodObce',
        'nazev_obce' => 'nazevObce',
        'kod_casti_obce' => 'kodCastiObce',
        'nazev_casti_obce' => 'nazevCastiObce',
        'kod_mestskeho_casti_obvodu' => 'kodMestskehoCastiObvodu',
        'nazev_mestskeho_casti_obvodu' => 'nazevMestskehoCastiObvodu',
        'kod_ulice' => 'kodUlice',
        'nazev_ulice' => 'nazevUlice',
        'cislo_domovni' => 'cisloDomovni',
        'cislo_orientacni' => 'cisloOrientacni',
        'cislo_orientacni_pismeno' => 'cisloOrientacniPismeno',
        'kod_adresniho_mista' => 'kodAdresnihoMista',
        'textova_adresa' => 'textovaAdresa',
        'typ_standardizace_adresy' => 'typStandardizaceAdresy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kod_obce' => 'setKodObce',
        'nazev_obce' => 'setNazevObce',
        'kod_casti_obce' => 'setKodCastiObce',
        'nazev_casti_obce' => 'setNazevCastiObce',
        'kod_mestskeho_casti_obvodu' => 'setKodMestskehoCastiObvodu',
        'nazev_mestskeho_casti_obvodu' => 'setNazevMestskehoCastiObvodu',
        'kod_ulice' => 'setKodUlice',
        'nazev_ulice' => 'setNazevUlice',
        'cislo_domovni' => 'setCisloDomovni',
        'cislo_orientacni' => 'setCisloOrientacni',
        'cislo_orientacni_pismeno' => 'setCisloOrientacniPismeno',
        'kod_adresniho_mista' => 'setKodAdresnihoMista',
        'textova_adresa' => 'setTextovaAdresa',
        'typ_standardizace_adresy' => 'setTypStandardizaceAdresy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kod_obce' => 'getKodObce',
        'nazev_obce' => 'getNazevObce',
        'kod_casti_obce' => 'getKodCastiObce',
        'nazev_casti_obce' => 'getNazevCastiObce',
        'kod_mestskeho_casti_obvodu' => 'getKodMestskehoCastiObvodu',
        'nazev_mestskeho_casti_obvodu' => 'getNazevMestskehoCastiObvodu',
        'kod_ulice' => 'getKodUlice',
        'nazev_ulice' => 'getNazevUlice',
        'cislo_domovni' => 'getCisloDomovni',
        'cislo_orientacni' => 'getCisloOrientacni',
        'cislo_orientacni_pismeno' => 'getCisloOrientacniPismeno',
        'kod_adresniho_mista' => 'getKodAdresnihoMista',
        'textova_adresa' => 'getTextovaAdresa',
        'typ_standardizace_adresy' => 'getTypStandardizaceAdresy'
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

        $this->container['kod_obce'] = isset($data['kod_obce']) ? $data['kod_obce'] : null;
        $this->container['nazev_obce'] = isset($data['nazev_obce']) ? $data['nazev_obce'] : null;
        $this->container['kod_casti_obce'] = isset($data['kod_casti_obce']) ? $data['kod_casti_obce'] : null;
        $this->container['nazev_casti_obce'] = isset($data['nazev_casti_obce']) ? $data['nazev_casti_obce'] : null;
        $this->container['kod_mestskeho_casti_obvodu'] = isset($data['kod_mestskeho_casti_obvodu']) ? $data['kod_mestskeho_casti_obvodu'] : null;
        $this->container['nazev_mestskeho_casti_obvodu'] = isset($data['nazev_mestskeho_casti_obvodu']) ? $data['nazev_mestskeho_casti_obvodu'] : null;
        $this->container['kod_ulice'] = isset($data['kod_ulice']) ? $data['kod_ulice'] : null;
        $this->container['nazev_ulice'] = isset($data['nazev_ulice']) ? $data['nazev_ulice'] : null;
        $this->container['cislo_domovni'] = isset($data['cislo_domovni']) ? $data['cislo_domovni'] : null;
        $this->container['cislo_orientacni'] = isset($data['cislo_orientacni']) ? $data['cislo_orientacni'] : null;
        $this->container['cislo_orientacni_pismeno'] = isset($data['cislo_orientacni_pismeno']) ? $data['cislo_orientacni_pismeno'] : null;
        $this->container['kod_adresniho_mista'] = isset($data['kod_adresniho_mista']) ? $data['kod_adresniho_mista'] : null;
        $this->container['textova_adresa'] = isset($data['textova_adresa']) ? $data['textova_adresa'] : null;
        $this->container['typ_standardizace_adresy'] = isset($data['typ_standardizace_adresy']) ? $data['typ_standardizace_adresy'] : null;
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
     * Gets kod_obce
     *
     * @return int
     */
    public function getKodObce()
    {
        return $this->container['kod_obce'];
    }

    /**
     * Sets kod_obce
     *
     * @param int $kod_obce Kód obce
     *
     * @return $this
     */
    public function setKodObce($kod_obce)
    {
        $this->container['kod_obce'] = $kod_obce;

        return $this;
    }

    /**
     * Gets nazev_obce
     *
     * @return string
     */
    public function getNazevObce()
    {
        return $this->container['nazev_obce'];
    }

    /**
     * Sets nazev_obce
     *
     * @param string $nazev_obce Název obce
     *
     * @return $this
     */
    public function setNazevObce($nazev_obce)
    {
        $this->container['nazev_obce'] = $nazev_obce;

        return $this;
    }

    /**
     * Gets kod_casti_obce
     *
     * @return int
     */
    public function getKodCastiObce()
    {
        return $this->container['kod_casti_obce'];
    }

    /**
     * Sets kod_casti_obce
     *
     * @param int $kod_casti_obce Kód části obce
     *
     * @return $this
     */
    public function setKodCastiObce($kod_casti_obce)
    {
        $this->container['kod_casti_obce'] = $kod_casti_obce;

        return $this;
    }

    /**
     * Gets nazev_casti_obce
     *
     * @return string
     */
    public function getNazevCastiObce()
    {
        return $this->container['nazev_casti_obce'];
    }

    /**
     * Sets nazev_casti_obce
     *
     * @param string $nazev_casti_obce Název části obce
     *
     * @return $this
     */
    public function setNazevCastiObce($nazev_casti_obce)
    {
        $this->container['nazev_casti_obce'] = $nazev_casti_obce;

        return $this;
    }

    /**
     * Gets kod_mestskeho_casti_obvodu
     *
     * @return int
     */
    public function getKodMestskehoCastiObvodu()
    {
        return $this->container['kod_mestskeho_casti_obvodu'];
    }

    /**
     * Sets kod_mestskeho_casti_obvodu
     *
     * @param int $kod_mestskeho_casti_obvodu Kód městské části statutárního města nebo Prahy
     *
     * @return $this
     */
    public function setKodMestskehoCastiObvodu($kod_mestskeho_casti_obvodu)
    {
        $this->container['kod_mestskeho_casti_obvodu'] = $kod_mestskeho_casti_obvodu;

        return $this;
    }

    /**
     * Gets nazev_mestskeho_casti_obvodu
     *
     * @return string
     */
    public function getNazevMestskehoCastiObvodu()
    {
        return $this->container['nazev_mestskeho_casti_obvodu'];
    }

    /**
     * Sets nazev_mestskeho_casti_obvodu
     *
     * @param string $nazev_mestskeho_casti_obvodu Název městské části statutárního města nebo Prahy
     *
     * @return $this
     */
    public function setNazevMestskehoCastiObvodu($nazev_mestskeho_casti_obvodu)
    {
        $this->container['nazev_mestskeho_casti_obvodu'] = $nazev_mestskeho_casti_obvodu;

        return $this;
    }

    /**
     * Gets kod_ulice
     *
     * @return int
     */
    public function getKodUlice()
    {
        return $this->container['kod_ulice'];
    }

    /**
     * Sets kod_ulice
     *
     * @param int $kod_ulice Kód ulice, veřejného prostranství
     *
     * @return $this
     */
    public function setKodUlice($kod_ulice)
    {
        $this->container['kod_ulice'] = $kod_ulice;

        return $this;
    }

    /**
     * Gets nazev_ulice
     *
     * @return string
     */
    public function getNazevUlice()
    {
        return $this->container['nazev_ulice'];
    }

    /**
     * Sets nazev_ulice
     *
     * @param string $nazev_ulice Název ulice, veřejného prostranství
     *
     * @return $this
     */
    public function setNazevUlice($nazev_ulice)
    {
        $this->container['nazev_ulice'] = $nazev_ulice;

        return $this;
    }

    /**
     * Gets cislo_domovni
     *
     * @return int
     */
    public function getCisloDomovni()
    {
        return $this->container['cislo_domovni'];
    }

    /**
     * Sets cislo_domovni
     *
     * @param int $cislo_domovni Číslo domovní
     *
     * @return $this
     */
    public function setCisloDomovni($cislo_domovni)
    {
        $this->container['cislo_domovni'] = $cislo_domovni;

        return $this;
    }

    /**
     * Gets cislo_orientacni
     *
     * @return int
     */
    public function getCisloOrientacni()
    {
        return $this->container['cislo_orientacni'];
    }

    /**
     * Sets cislo_orientacni
     *
     * @param int $cislo_orientacni Číslo orientační - číselná část
     *
     * @return $this
     */
    public function setCisloOrientacni($cislo_orientacni)
    {
        $this->container['cislo_orientacni'] = $cislo_orientacni;

        return $this;
    }

    /**
     * Gets cislo_orientacni_pismeno
     *
     * @return string
     */
    public function getCisloOrientacniPismeno()
    {
        return $this->container['cislo_orientacni_pismeno'];
    }

    /**
     * Sets cislo_orientacni_pismeno
     *
     * @param string $cislo_orientacni_pismeno Číslo orientační - písmenná část
     *
     * @return $this
     */
    public function setCisloOrientacniPismeno($cislo_orientacni_pismeno)
    {
        $this->container['cislo_orientacni_pismeno'] = $cislo_orientacni_pismeno;

        return $this;
    }

    /**
     * Gets kod_adresniho_mista
     *
     * @return int
     */
    public function getKodAdresnihoMista()
    {
        return $this->container['kod_adresniho_mista'];
    }

    /**
     * Sets kod_adresniho_mista
     *
     * @param int $kod_adresniho_mista Kód adresního místa
     *
     * @return $this
     */
    public function setKodAdresnihoMista($kod_adresniho_mista)
    {
        $this->container['kod_adresniho_mista'] = $kod_adresniho_mista;

        return $this;
    }

    /**
     * Gets textova_adresa
     *
     * @return string
     */
    public function getTextovaAdresa()
    {
        return $this->container['textova_adresa'];
    }

    /**
     * Sets textova_adresa
     *
     * @param string $textova_adresa Nestrukturovaná adresa
     *
     * @return $this
     */
    public function setTextovaAdresa($textova_adresa)
    {
        $this->container['textova_adresa'] = $textova_adresa;

        return $this;
    }

    /**
     * Gets typ_standardizace_adresy
     *
     * @return string
     */
    public function getTypStandardizaceAdresy()
    {
        return $this->container['typ_standardizace_adresy'];
    }

    /**
     * Sets typ_standardizace_adresy
     *
     * @param string $typ_standardizace_adresy Typ požadované standardizace - kód (číselník kod:TypStandardizaceAdresy) UPLNA_STANDARDIZACE, VYHOVUJICI_ADRESY
     *
     * @return $this
     */
    public function setTypStandardizaceAdresy($typ_standardizace_adresy)
    {
        $this->container['typ_standardizace_adresy'] = $typ_standardizace_adresy;

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
