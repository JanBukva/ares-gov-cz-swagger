<?php
/**
 * Adresa
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
 * Adresa Class Doc Comment
 *
 * @category Class
 * @description Adresa - obecný předek
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Adresa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Adresa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kod_statu' => 'string',
        'nazev_statu' => 'string',
        'kod_kraje' => 'int',
        'nazev_kraje' => 'string',
        'kod_okresu' => 'int',
        'nazev_okresu' => 'string',
        'kod_obce' => 'int',
        'nazev_obce' => 'string',
        'kod_spravniho_obvodu' => 'int',
        'nazev_spravniho_obvodu' => 'string',
        'kod_mestskeho_obvodu' => 'int',
        'nazev_mestskeho_obvodu' => 'string',
        'kod_mestske_casti_obvodu' => 'int',
        'kod_ulice' => 'int',
        'nazev_mestske_casti_obvodu' => 'string',
        'nazev_ulice' => 'string',
        'cislo_domovni' => 'int',
        'doplnek_adresy' => 'string',
        'kod_casti_obce' => 'int',
        'cislo_orientacni' => 'int',
        'cislo_orientacni_pismeno' => 'string',
        'nazev_casti_obce' => 'string',
        'kod_adresniho_mista' => 'int',
        'psc' => 'int',
        'textova_adresa' => 'string',
        'cislo_do_adresy' => 'string',
        'typ_cislo_domovni' => 'string',
        'standardizace_adresy' => 'bool',
        'psc_txt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kod_statu' => null,
        'nazev_statu' => null,
        'kod_kraje' => null,
        'nazev_kraje' => null,
        'kod_okresu' => 'int32',
        'nazev_okresu' => null,
        'kod_obce' => 'int32',
        'nazev_obce' => null,
        'kod_spravniho_obvodu' => null,
        'nazev_spravniho_obvodu' => null,
        'kod_mestskeho_obvodu' => null,
        'nazev_mestskeho_obvodu' => null,
        'kod_mestske_casti_obvodu' => 'int32',
        'kod_ulice' => 'int32',
        'nazev_mestske_casti_obvodu' => null,
        'nazev_ulice' => null,
        'cislo_domovni' => null,
        'doplnek_adresy' => null,
        'kod_casti_obce' => 'int32',
        'cislo_orientacni' => null,
        'cislo_orientacni_pismeno' => null,
        'nazev_casti_obce' => null,
        'kod_adresniho_mista' => null,
        'psc' => null,
        'textova_adresa' => null,
        'cislo_do_adresy' => null,
        'typ_cislo_domovni' => null,
        'standardizace_adresy' => null,
        'psc_txt' => null
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
        'kod_statu' => 'kodStatu',
        'nazev_statu' => 'nazevStatu',
        'kod_kraje' => 'kodKraje',
        'nazev_kraje' => 'nazevKraje',
        'kod_okresu' => 'kodOkresu',
        'nazev_okresu' => 'nazevOkresu',
        'kod_obce' => 'kodObce',
        'nazev_obce' => 'nazevObce',
        'kod_spravniho_obvodu' => 'kodSpravnihoObvodu',
        'nazev_spravniho_obvodu' => 'nazevSpravnihoObvodu',
        'kod_mestskeho_obvodu' => 'kodMestskehoObvodu',
        'nazev_mestskeho_obvodu' => 'nazevMestskehoObvodu',
        'kod_mestske_casti_obvodu' => 'kodMestskeCastiObvodu',
        'kod_ulice' => 'kodUlice',
        'nazev_mestske_casti_obvodu' => 'nazevMestskeCastiObvodu',
        'nazev_ulice' => 'nazevUlice',
        'cislo_domovni' => 'cisloDomovni',
        'doplnek_adresy' => 'doplnekAdresy',
        'kod_casti_obce' => 'kodCastiObce',
        'cislo_orientacni' => 'cisloOrientacni',
        'cislo_orientacni_pismeno' => 'cisloOrientacniPismeno',
        'nazev_casti_obce' => 'nazevCastiObce',
        'kod_adresniho_mista' => 'kodAdresnihoMista',
        'psc' => 'psc',
        'textova_adresa' => 'textovaAdresa',
        'cislo_do_adresy' => 'cisloDoAdresy',
        'typ_cislo_domovni' => 'typCisloDomovni',
        'standardizace_adresy' => 'standardizaceAdresy',
        'psc_txt' => 'pscTxt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kod_statu' => 'setKodStatu',
        'nazev_statu' => 'setNazevStatu',
        'kod_kraje' => 'setKodKraje',
        'nazev_kraje' => 'setNazevKraje',
        'kod_okresu' => 'setKodOkresu',
        'nazev_okresu' => 'setNazevOkresu',
        'kod_obce' => 'setKodObce',
        'nazev_obce' => 'setNazevObce',
        'kod_spravniho_obvodu' => 'setKodSpravnihoObvodu',
        'nazev_spravniho_obvodu' => 'setNazevSpravnihoObvodu',
        'kod_mestskeho_obvodu' => 'setKodMestskehoObvodu',
        'nazev_mestskeho_obvodu' => 'setNazevMestskehoObvodu',
        'kod_mestske_casti_obvodu' => 'setKodMestskeCastiObvodu',
        'kod_ulice' => 'setKodUlice',
        'nazev_mestske_casti_obvodu' => 'setNazevMestskeCastiObvodu',
        'nazev_ulice' => 'setNazevUlice',
        'cislo_domovni' => 'setCisloDomovni',
        'doplnek_adresy' => 'setDoplnekAdresy',
        'kod_casti_obce' => 'setKodCastiObce',
        'cislo_orientacni' => 'setCisloOrientacni',
        'cislo_orientacni_pismeno' => 'setCisloOrientacniPismeno',
        'nazev_casti_obce' => 'setNazevCastiObce',
        'kod_adresniho_mista' => 'setKodAdresnihoMista',
        'psc' => 'setPsc',
        'textova_adresa' => 'setTextovaAdresa',
        'cislo_do_adresy' => 'setCisloDoAdresy',
        'typ_cislo_domovni' => 'setTypCisloDomovni',
        'standardizace_adresy' => 'setStandardizaceAdresy',
        'psc_txt' => 'setPscTxt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kod_statu' => 'getKodStatu',
        'nazev_statu' => 'getNazevStatu',
        'kod_kraje' => 'getKodKraje',
        'nazev_kraje' => 'getNazevKraje',
        'kod_okresu' => 'getKodOkresu',
        'nazev_okresu' => 'getNazevOkresu',
        'kod_obce' => 'getKodObce',
        'nazev_obce' => 'getNazevObce',
        'kod_spravniho_obvodu' => 'getKodSpravnihoObvodu',
        'nazev_spravniho_obvodu' => 'getNazevSpravnihoObvodu',
        'kod_mestskeho_obvodu' => 'getKodMestskehoObvodu',
        'nazev_mestskeho_obvodu' => 'getNazevMestskehoObvodu',
        'kod_mestske_casti_obvodu' => 'getKodMestskeCastiObvodu',
        'kod_ulice' => 'getKodUlice',
        'nazev_mestske_casti_obvodu' => 'getNazevMestskeCastiObvodu',
        'nazev_ulice' => 'getNazevUlice',
        'cislo_domovni' => 'getCisloDomovni',
        'doplnek_adresy' => 'getDoplnekAdresy',
        'kod_casti_obce' => 'getKodCastiObce',
        'cislo_orientacni' => 'getCisloOrientacni',
        'cislo_orientacni_pismeno' => 'getCisloOrientacniPismeno',
        'nazev_casti_obce' => 'getNazevCastiObce',
        'kod_adresniho_mista' => 'getKodAdresnihoMista',
        'psc' => 'getPsc',
        'textova_adresa' => 'getTextovaAdresa',
        'cislo_do_adresy' => 'getCisloDoAdresy',
        'typ_cislo_domovni' => 'getTypCisloDomovni',
        'standardizace_adresy' => 'getStandardizaceAdresy',
        'psc_txt' => 'getPscTxt'
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
        $this->container['kod_statu'] = isset($data['kod_statu']) ? $data['kod_statu'] : null;
        $this->container['nazev_statu'] = isset($data['nazev_statu']) ? $data['nazev_statu'] : null;
        $this->container['kod_kraje'] = isset($data['kod_kraje']) ? $data['kod_kraje'] : null;
        $this->container['nazev_kraje'] = isset($data['nazev_kraje']) ? $data['nazev_kraje'] : null;
        $this->container['kod_okresu'] = isset($data['kod_okresu']) ? $data['kod_okresu'] : null;
        $this->container['nazev_okresu'] = isset($data['nazev_okresu']) ? $data['nazev_okresu'] : null;
        $this->container['kod_obce'] = isset($data['kod_obce']) ? $data['kod_obce'] : null;
        $this->container['nazev_obce'] = isset($data['nazev_obce']) ? $data['nazev_obce'] : null;
        $this->container['kod_spravniho_obvodu'] = isset($data['kod_spravniho_obvodu']) ? $data['kod_spravniho_obvodu'] : null;
        $this->container['nazev_spravniho_obvodu'] = isset($data['nazev_spravniho_obvodu']) ? $data['nazev_spravniho_obvodu'] : null;
        $this->container['kod_mestskeho_obvodu'] = isset($data['kod_mestskeho_obvodu']) ? $data['kod_mestskeho_obvodu'] : null;
        $this->container['nazev_mestskeho_obvodu'] = isset($data['nazev_mestskeho_obvodu']) ? $data['nazev_mestskeho_obvodu'] : null;
        $this->container['kod_mestske_casti_obvodu'] = isset($data['kod_mestske_casti_obvodu']) ? $data['kod_mestske_casti_obvodu'] : null;
        $this->container['kod_ulice'] = isset($data['kod_ulice']) ? $data['kod_ulice'] : null;
        $this->container['nazev_mestske_casti_obvodu'] = isset($data['nazev_mestske_casti_obvodu']) ? $data['nazev_mestske_casti_obvodu'] : null;
        $this->container['nazev_ulice'] = isset($data['nazev_ulice']) ? $data['nazev_ulice'] : null;
        $this->container['cislo_domovni'] = isset($data['cislo_domovni']) ? $data['cislo_domovni'] : null;
        $this->container['doplnek_adresy'] = isset($data['doplnek_adresy']) ? $data['doplnek_adresy'] : null;
        $this->container['kod_casti_obce'] = isset($data['kod_casti_obce']) ? $data['kod_casti_obce'] : null;
        $this->container['cislo_orientacni'] = isset($data['cislo_orientacni']) ? $data['cislo_orientacni'] : null;
        $this->container['cislo_orientacni_pismeno'] = isset($data['cislo_orientacni_pismeno']) ? $data['cislo_orientacni_pismeno'] : null;
        $this->container['nazev_casti_obce'] = isset($data['nazev_casti_obce']) ? $data['nazev_casti_obce'] : null;
        $this->container['kod_adresniho_mista'] = isset($data['kod_adresniho_mista']) ? $data['kod_adresniho_mista'] : null;
        $this->container['psc'] = isset($data['psc']) ? $data['psc'] : null;
        $this->container['textova_adresa'] = isset($data['textova_adresa']) ? $data['textova_adresa'] : null;
        $this->container['cislo_do_adresy'] = isset($data['cislo_do_adresy']) ? $data['cislo_do_adresy'] : null;
        $this->container['typ_cislo_domovni'] = isset($data['typ_cislo_domovni']) ? $data['typ_cislo_domovni'] : null;
        $this->container['standardizace_adresy'] = isset($data['standardizace_adresy']) ? $data['standardizace_adresy'] : null;
        $this->container['psc_txt'] = isset($data['psc_txt']) ? $data['psc_txt'] : null;
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
     * @param string $kod_statu Kód státu (ciselnikKod: Stat)
     *
     * @return $this
     */
    public function setKodStatu($kod_statu)
    {
        $this->container['kod_statu'] = $kod_statu;

        return $this;
    }

    /**
     * Gets nazev_statu
     *
     * @return string
     */
    public function getNazevStatu()
    {
        return $this->container['nazev_statu'];
    }

    /**
     * Sets nazev_statu
     *
     * @param string $nazev_statu Název státu
     *
     * @return $this
     */
    public function setNazevStatu($nazev_statu)
    {
        $this->container['nazev_statu'] = $nazev_statu;

        return $this;
    }

    /**
     * Gets kod_kraje
     *
     * @return int
     */
    public function getKodKraje()
    {
        return $this->container['kod_kraje'];
    }

    /**
     * Sets kod_kraje
     *
     * @param int $kod_kraje Kód kraje
     *
     * @return $this
     */
    public function setKodKraje($kod_kraje)
    {
        $this->container['kod_kraje'] = $kod_kraje;

        return $this;
    }

    /**
     * Gets nazev_kraje
     *
     * @return string
     */
    public function getNazevKraje()
    {
        return $this->container['nazev_kraje'];
    }

    /**
     * Sets nazev_kraje
     *
     * @param string $nazev_kraje Název kraje
     *
     * @return $this
     */
    public function setNazevKraje($nazev_kraje)
    {
        $this->container['nazev_kraje'] = $nazev_kraje;

        return $this;
    }

    /**
     * Gets kod_okresu
     *
     * @return int
     */
    public function getKodOkresu()
    {
        return $this->container['kod_okresu'];
    }

    /**
     * Sets kod_okresu
     *
     * @param int $kod_okresu Kód okresu
     *
     * @return $this
     */
    public function setKodOkresu($kod_okresu)
    {
        $this->container['kod_okresu'] = $kod_okresu;

        return $this;
    }

    /**
     * Gets nazev_okresu
     *
     * @return string
     */
    public function getNazevOkresu()
    {
        return $this->container['nazev_okresu'];
    }

    /**
     * Sets nazev_okresu
     *
     * @param string $nazev_okresu Název okresu
     *
     * @return $this
     */
    public function setNazevOkresu($nazev_okresu)
    {
        $this->container['nazev_okresu'] = $nazev_okresu;

        return $this;
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
     * Gets kod_spravniho_obvodu
     *
     * @return int
     */
    public function getKodSpravnihoObvodu()
    {
        return $this->container['kod_spravniho_obvodu'];
    }

    /**
     * Sets kod_spravniho_obvodu
     *
     * @param int $kod_spravniho_obvodu Kód správního obvodu Prahy
     *
     * @return $this
     */
    public function setKodSpravnihoObvodu($kod_spravniho_obvodu)
    {
        $this->container['kod_spravniho_obvodu'] = $kod_spravniho_obvodu;

        return $this;
    }

    /**
     * Gets nazev_spravniho_obvodu
     *
     * @return string
     */
    public function getNazevSpravnihoObvodu()
    {
        return $this->container['nazev_spravniho_obvodu'];
    }

    /**
     * Sets nazev_spravniho_obvodu
     *
     * @param string $nazev_spravniho_obvodu Název správního obvodu Prahy
     *
     * @return $this
     */
    public function setNazevSpravnihoObvodu($nazev_spravniho_obvodu)
    {
        $this->container['nazev_spravniho_obvodu'] = $nazev_spravniho_obvodu;

        return $this;
    }

    /**
     * Gets kod_mestskeho_obvodu
     *
     * @return int
     */
    public function getKodMestskehoObvodu()
    {
        return $this->container['kod_mestskeho_obvodu'];
    }

    /**
     * Sets kod_mestskeho_obvodu
     *
     * @param int $kod_mestskeho_obvodu Kód městského obvodu Prahy
     *
     * @return $this
     */
    public function setKodMestskehoObvodu($kod_mestskeho_obvodu)
    {
        $this->container['kod_mestskeho_obvodu'] = $kod_mestskeho_obvodu;

        return $this;
    }

    /**
     * Gets nazev_mestskeho_obvodu
     *
     * @return string
     */
    public function getNazevMestskehoObvodu()
    {
        return $this->container['nazev_mestskeho_obvodu'];
    }

    /**
     * Sets nazev_mestskeho_obvodu
     *
     * @param string $nazev_mestskeho_obvodu Název městského obvodu Prahy
     *
     * @return $this
     */
    public function setNazevMestskehoObvodu($nazev_mestskeho_obvodu)
    {
        $this->container['nazev_mestskeho_obvodu'] = $nazev_mestskeho_obvodu;

        return $this;
    }

    /**
     * Gets kod_mestske_casti_obvodu
     *
     * @return int
     */
    public function getKodMestskeCastiObvodu()
    {
        return $this->container['kod_mestske_casti_obvodu'];
    }

    /**
     * Sets kod_mestske_casti_obvodu
     *
     * @param int $kod_mestske_casti_obvodu Kód městské části statutárního města
     *
     * @return $this
     */
    public function setKodMestskeCastiObvodu($kod_mestske_casti_obvodu)
    {
        $this->container['kod_mestske_casti_obvodu'] = $kod_mestske_casti_obvodu;

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
     * @param int $kod_ulice Kód ulice, veřejného prostranství ze zdroje
     *
     * @return $this
     */
    public function setKodUlice($kod_ulice)
    {
        $this->container['kod_ulice'] = $kod_ulice;

        return $this;
    }

    /**
     * Gets nazev_mestske_casti_obvodu
     *
     * @return string
     */
    public function getNazevMestskeCastiObvodu()
    {
        return $this->container['nazev_mestske_casti_obvodu'];
    }

    /**
     * Sets nazev_mestske_casti_obvodu
     *
     * @param string $nazev_mestske_casti_obvodu Název městské části statutárního města
     *
     * @return $this
     */
    public function setNazevMestskeCastiObvodu($nazev_mestske_casti_obvodu)
    {
        $this->container['nazev_mestske_casti_obvodu'] = $nazev_mestske_casti_obvodu;

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
     * Gets doplnek_adresy
     *
     * @return string
     */
    public function getDoplnekAdresy()
    {
        return $this->container['doplnek_adresy'];
    }

    /**
     * Sets doplnek_adresy
     *
     * @param string $doplnek_adresy Doplňující informace adresního popisu
     *
     * @return $this
     */
    public function setDoplnekAdresy($doplnek_adresy)
    {
        $this->container['doplnek_adresy'] = $doplnek_adresy;

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
     * @param int $kod_casti_obce Kód časti obce
     *
     * @return $this
     */
    public function setKodCastiObce($kod_casti_obce)
    {
        $this->container['kod_casti_obce'] = $kod_casti_obce;

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
     * Gets psc
     *
     * @return int
     */
    public function getPsc()
    {
        return $this->container['psc'];
    }

    /**
     * Sets psc
     *
     * @param int $psc Poštovní směrovací číslo adresní pošty
     *
     * @return $this
     */
    public function setPsc($psc)
    {
        $this->container['psc'] = $psc;

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
     * @param string $textova_adresa Nestrukturovaná adresa (formátovaná adresa)
     *
     * @return $this
     */
    public function setTextovaAdresa($textova_adresa)
    {
        $this->container['textova_adresa'] = $textova_adresa;

        return $this;
    }

    /**
     * Gets cislo_do_adresy
     *
     * @return string
     */
    public function getCisloDoAdresy()
    {
        return $this->container['cislo_do_adresy'];
    }

    /**
     * Sets cislo_do_adresy
     *
     * @param string $cislo_do_adresy Nestrukturované číslo/a použíté v adrese
     *
     * @return $this
     */
    public function setCisloDoAdresy($cislo_do_adresy)
    {
        $this->container['cislo_do_adresy'] = $cislo_do_adresy;

        return $this;
    }

    /**
     * Gets typ_cislo_domovni
     *
     * @return string
     */
    public function getTypCisloDomovni()
    {
        return $this->container['typ_cislo_domovni'];
    }

    /**
     * Sets typ_cislo_domovni
     *
     * @param string $typ_cislo_domovni Typ čísla domu (ciselnikKod: TypCislaDomovniho)
     *
     * @return $this
     */
    public function setTypCisloDomovni($typ_cislo_domovni)
    {
        $this->container['typ_cislo_domovni'] = $typ_cislo_domovni;

        return $this;
    }

    /**
     * Gets standardizace_adresy
     *
     * @return bool
     */
    public function getStandardizaceAdresy()
    {
        return $this->container['standardizace_adresy'];
    }

    /**
     * Sets standardizace_adresy
     *
     * @param bool $standardizace_adresy Stav standardizace adresy dle RÚIAN
     *
     * @return $this
     */
    public function setStandardizaceAdresy($standardizace_adresy)
    {
        $this->container['standardizace_adresy'] = $standardizace_adresy;

        return $this;
    }

    /**
     * Gets psc_txt
     *
     * @return string
     */
    public function getPscTxt()
    {
        return $this->container['psc_txt'];
    }

    /**
     * Sets psc_txt
     *
     * @param string $psc_txt Psč zahraničních nebo nestandardně definovaných čísel
     *
     * @return $this
     */
    public function setPscTxt($psc_txt)
    {
        $this->container['psc_txt'] = $psc_txt;

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