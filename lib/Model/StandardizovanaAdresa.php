<?php
/**
 * StandardizovanaAdresa
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
 * StandardizovanaAdresa Class Doc Comment
 *
 * @category Class
 * @description Standardizovaná adresa
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardizovanaAdresa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardizovanaAdresa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cislo_domovni' => 'int',
        'cislo_orientacni' => 'int',
        'cislo_orientacni_pismeno' => 'string',
        'kod_adresniho_mista' => 'int',
        'kod_casti_obce' => 'int',
        'kod_kraje' => 'int',
        'kod_mestske_casti_obvodu' => 'int',
        'kod_mestskeho_obvodu_p' => 'int',
        'kod_obce' => 'int',
        'kod_okresu' => 'int',
        'kod_spravniho_obvodu_p' => 'int',
        'kod_stavebniho_objektu' => 'int',
        'kod_ulice' => 'int',
        'nazev_casti_obce' => 'string',
        'nazev_kraje' => 'string',
        'nazev_mestske_casti_obvodu' => 'string',
        'nazev_mestskeho_obvodu_p' => 'string',
        'nazev_obce' => 'string',
        'nazev_okresu' => 'string',
        'nazev_spravniho_obvodu_p' => 'string',
        'nazev_ulice' => 'string',
        'psc' => 'int',
        'textova_adresa' => 'string',
        'typ_stavebniho_objektu' => 'string',
        'typ_cislo_domovni' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cislo_domovni' => null,
        'cislo_orientacni' => null,
        'cislo_orientacni_pismeno' => null,
        'kod_adresniho_mista' => null,
        'kod_casti_obce' => 'int32',
        'kod_kraje' => null,
        'kod_mestske_casti_obvodu' => 'int32',
        'kod_mestskeho_obvodu_p' => null,
        'kod_obce' => 'int32',
        'kod_okresu' => 'int32',
        'kod_spravniho_obvodu_p' => null,
        'kod_stavebniho_objektu' => null,
        'kod_ulice' => 'int32',
        'nazev_casti_obce' => null,
        'nazev_kraje' => null,
        'nazev_mestske_casti_obvodu' => null,
        'nazev_mestskeho_obvodu_p' => null,
        'nazev_obce' => null,
        'nazev_okresu' => null,
        'nazev_spravniho_obvodu_p' => null,
        'nazev_ulice' => null,
        'psc' => null,
        'textova_adresa' => null,
        'typ_stavebniho_objektu' => null,
        'typ_cislo_domovni' => null
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
        'cislo_domovni' => 'cisloDomovni',
        'cislo_orientacni' => 'cisloOrientacni',
        'cislo_orientacni_pismeno' => 'cisloOrientacniPismeno',
        'kod_adresniho_mista' => 'kodAdresnihoMista',
        'kod_casti_obce' => 'kodCastiObce',
        'kod_kraje' => 'kodKraje',
        'kod_mestske_casti_obvodu' => 'kodMestskeCastiObvodu',
        'kod_mestskeho_obvodu_p' => 'kodMestskehoObvoduP',
        'kod_obce' => 'kodObce',
        'kod_okresu' => 'kodOkresu',
        'kod_spravniho_obvodu_p' => 'kodSpravnihoObvoduP',
        'kod_stavebniho_objektu' => 'kodStavebnihoObjektu',
        'kod_ulice' => 'kodUlice',
        'nazev_casti_obce' => 'nazevCastiObce',
        'nazev_kraje' => 'nazevKraje',
        'nazev_mestske_casti_obvodu' => 'nazevMestskeCastiObvodu',
        'nazev_mestskeho_obvodu_p' => 'nazevMestskehoObvoduP',
        'nazev_obce' => 'nazevObce',
        'nazev_okresu' => 'nazevOkresu',
        'nazev_spravniho_obvodu_p' => 'nazevSpravnihoObvoduP',
        'nazev_ulice' => 'nazevUlice',
        'psc' => 'psc',
        'textova_adresa' => 'textovaAdresa',
        'typ_stavebniho_objektu' => 'typStavebnihoObjektu',
        'typ_cislo_domovni' => 'typCisloDomovni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cislo_domovni' => 'setCisloDomovni',
        'cislo_orientacni' => 'setCisloOrientacni',
        'cislo_orientacni_pismeno' => 'setCisloOrientacniPismeno',
        'kod_adresniho_mista' => 'setKodAdresnihoMista',
        'kod_casti_obce' => 'setKodCastiObce',
        'kod_kraje' => 'setKodKraje',
        'kod_mestske_casti_obvodu' => 'setKodMestskeCastiObvodu',
        'kod_mestskeho_obvodu_p' => 'setKodMestskehoObvoduP',
        'kod_obce' => 'setKodObce',
        'kod_okresu' => 'setKodOkresu',
        'kod_spravniho_obvodu_p' => 'setKodSpravnihoObvoduP',
        'kod_stavebniho_objektu' => 'setKodStavebnihoObjektu',
        'kod_ulice' => 'setKodUlice',
        'nazev_casti_obce' => 'setNazevCastiObce',
        'nazev_kraje' => 'setNazevKraje',
        'nazev_mestske_casti_obvodu' => 'setNazevMestskeCastiObvodu',
        'nazev_mestskeho_obvodu_p' => 'setNazevMestskehoObvoduP',
        'nazev_obce' => 'setNazevObce',
        'nazev_okresu' => 'setNazevOkresu',
        'nazev_spravniho_obvodu_p' => 'setNazevSpravnihoObvoduP',
        'nazev_ulice' => 'setNazevUlice',
        'psc' => 'setPsc',
        'textova_adresa' => 'setTextovaAdresa',
        'typ_stavebniho_objektu' => 'setTypStavebnihoObjektu',
        'typ_cislo_domovni' => 'setTypCisloDomovni'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cislo_domovni' => 'getCisloDomovni',
        'cislo_orientacni' => 'getCisloOrientacni',
        'cislo_orientacni_pismeno' => 'getCisloOrientacniPismeno',
        'kod_adresniho_mista' => 'getKodAdresnihoMista',
        'kod_casti_obce' => 'getKodCastiObce',
        'kod_kraje' => 'getKodKraje',
        'kod_mestske_casti_obvodu' => 'getKodMestskeCastiObvodu',
        'kod_mestskeho_obvodu_p' => 'getKodMestskehoObvoduP',
        'kod_obce' => 'getKodObce',
        'kod_okresu' => 'getKodOkresu',
        'kod_spravniho_obvodu_p' => 'getKodSpravnihoObvoduP',
        'kod_stavebniho_objektu' => 'getKodStavebnihoObjektu',
        'kod_ulice' => 'getKodUlice',
        'nazev_casti_obce' => 'getNazevCastiObce',
        'nazev_kraje' => 'getNazevKraje',
        'nazev_mestske_casti_obvodu' => 'getNazevMestskeCastiObvodu',
        'nazev_mestskeho_obvodu_p' => 'getNazevMestskehoObvoduP',
        'nazev_obce' => 'getNazevObce',
        'nazev_okresu' => 'getNazevOkresu',
        'nazev_spravniho_obvodu_p' => 'getNazevSpravnihoObvoduP',
        'nazev_ulice' => 'getNazevUlice',
        'psc' => 'getPsc',
        'textova_adresa' => 'getTextovaAdresa',
        'typ_stavebniho_objektu' => 'getTypStavebnihoObjektu',
        'typ_cislo_domovni' => 'getTypCisloDomovni'
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
        $this->container['cislo_domovni'] = isset($data['cislo_domovni']) ? $data['cislo_domovni'] : null;
        $this->container['cislo_orientacni'] = isset($data['cislo_orientacni']) ? $data['cislo_orientacni'] : null;
        $this->container['cislo_orientacni_pismeno'] = isset($data['cislo_orientacni_pismeno']) ? $data['cislo_orientacni_pismeno'] : null;
        $this->container['kod_adresniho_mista'] = isset($data['kod_adresniho_mista']) ? $data['kod_adresniho_mista'] : null;
        $this->container['kod_casti_obce'] = isset($data['kod_casti_obce']) ? $data['kod_casti_obce'] : null;
        $this->container['kod_kraje'] = isset($data['kod_kraje']) ? $data['kod_kraje'] : null;
        $this->container['kod_mestske_casti_obvodu'] = isset($data['kod_mestske_casti_obvodu']) ? $data['kod_mestske_casti_obvodu'] : null;
        $this->container['kod_mestskeho_obvodu_p'] = isset($data['kod_mestskeho_obvodu_p']) ? $data['kod_mestskeho_obvodu_p'] : null;
        $this->container['kod_obce'] = isset($data['kod_obce']) ? $data['kod_obce'] : null;
        $this->container['kod_okresu'] = isset($data['kod_okresu']) ? $data['kod_okresu'] : null;
        $this->container['kod_spravniho_obvodu_p'] = isset($data['kod_spravniho_obvodu_p']) ? $data['kod_spravniho_obvodu_p'] : null;
        $this->container['kod_stavebniho_objektu'] = isset($data['kod_stavebniho_objektu']) ? $data['kod_stavebniho_objektu'] : null;
        $this->container['kod_ulice'] = isset($data['kod_ulice']) ? $data['kod_ulice'] : null;
        $this->container['nazev_casti_obce'] = isset($data['nazev_casti_obce']) ? $data['nazev_casti_obce'] : null;
        $this->container['nazev_kraje'] = isset($data['nazev_kraje']) ? $data['nazev_kraje'] : null;
        $this->container['nazev_mestske_casti_obvodu'] = isset($data['nazev_mestske_casti_obvodu']) ? $data['nazev_mestske_casti_obvodu'] : null;
        $this->container['nazev_mestskeho_obvodu_p'] = isset($data['nazev_mestskeho_obvodu_p']) ? $data['nazev_mestskeho_obvodu_p'] : null;
        $this->container['nazev_obce'] = isset($data['nazev_obce']) ? $data['nazev_obce'] : null;
        $this->container['nazev_okresu'] = isset($data['nazev_okresu']) ? $data['nazev_okresu'] : null;
        $this->container['nazev_spravniho_obvodu_p'] = isset($data['nazev_spravniho_obvodu_p']) ? $data['nazev_spravniho_obvodu_p'] : null;
        $this->container['nazev_ulice'] = isset($data['nazev_ulice']) ? $data['nazev_ulice'] : null;
        $this->container['psc'] = isset($data['psc']) ? $data['psc'] : null;
        $this->container['textova_adresa'] = isset($data['textova_adresa']) ? $data['textova_adresa'] : null;
        $this->container['typ_stavebniho_objektu'] = isset($data['typ_stavebniho_objektu']) ? $data['typ_stavebniho_objektu'] : null;
        $this->container['typ_cislo_domovni'] = isset($data['typ_cislo_domovni']) ? $data['typ_cislo_domovni'] : null;
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
     * Gets kod_mestskeho_obvodu_p
     *
     * @return int
     */
    public function getKodMestskehoObvoduP()
    {
        return $this->container['kod_mestskeho_obvodu_p'];
    }

    /**
     * Sets kod_mestskeho_obvodu_p
     *
     * @param int $kod_mestskeho_obvodu_p Kód městského obvodu Prahy
     *
     * @return $this
     */
    public function setKodMestskehoObvoduP($kod_mestskeho_obvodu_p)
    {
        $this->container['kod_mestskeho_obvodu_p'] = $kod_mestskeho_obvodu_p;

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
     * Gets kod_spravniho_obvodu_p
     *
     * @return int
     */
    public function getKodSpravnihoObvoduP()
    {
        return $this->container['kod_spravniho_obvodu_p'];
    }

    /**
     * Sets kod_spravniho_obvodu_p
     *
     * @param int $kod_spravniho_obvodu_p Kód správního obvodu Prahy
     *
     * @return $this
     */
    public function setKodSpravnihoObvoduP($kod_spravniho_obvodu_p)
    {
        $this->container['kod_spravniho_obvodu_p'] = $kod_spravniho_obvodu_p;

        return $this;
    }

    /**
     * Gets kod_stavebniho_objektu
     *
     * @return int
     */
    public function getKodStavebnihoObjektu()
    {
        return $this->container['kod_stavebniho_objektu'];
    }

    /**
     * Sets kod_stavebniho_objektu
     *
     * @param int $kod_stavebniho_objektu Kód stavebního objektu
     *
     * @return $this
     */
    public function setKodStavebnihoObjektu($kod_stavebniho_objektu)
    {
        $this->container['kod_stavebniho_objektu'] = $kod_stavebniho_objektu;

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
     * Gets nazev_mestskeho_obvodu_p
     *
     * @return string
     */
    public function getNazevMestskehoObvoduP()
    {
        return $this->container['nazev_mestskeho_obvodu_p'];
    }

    /**
     * Sets nazev_mestskeho_obvodu_p
     *
     * @param string $nazev_mestskeho_obvodu_p Název městského obvodu Prahy
     *
     * @return $this
     */
    public function setNazevMestskehoObvoduP($nazev_mestskeho_obvodu_p)
    {
        $this->container['nazev_mestskeho_obvodu_p'] = $nazev_mestskeho_obvodu_p;

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
     * Gets nazev_spravniho_obvodu_p
     *
     * @return string
     */
    public function getNazevSpravnihoObvoduP()
    {
        return $this->container['nazev_spravniho_obvodu_p'];
    }

    /**
     * Sets nazev_spravniho_obvodu_p
     *
     * @param string $nazev_spravniho_obvodu_p Název správního obvodu Prahy
     *
     * @return $this
     */
    public function setNazevSpravnihoObvoduP($nazev_spravniho_obvodu_p)
    {
        $this->container['nazev_spravniho_obvodu_p'] = $nazev_spravniho_obvodu_p;

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
     * @param string $textova_adresa Textová podoba adresy
     *
     * @return $this
     */
    public function setTextovaAdresa($textova_adresa)
    {
        $this->container['textova_adresa'] = $textova_adresa;

        return $this;
    }

    /**
     * Gets typ_stavebniho_objektu
     *
     * @return string
     */
    public function getTypStavebnihoObjektu()
    {
        return $this->container['typ_stavebniho_objektu'];
    }

    /**
     * Sets typ_stavebniho_objektu
     *
     * @param string $typ_stavebniho_objektu Typ stavebního objektu - kód (Číselník kod:TypStavebnihoObjektu, zdroj:ruian) pozn. atribut bude v příštích verzích nahrazen atributem typCisloDomovni (sjednocení pojmosloví IS). Z důvodů kompatibility api bude atribut podporováno/duplikován do verze 1.2.0
     *
     * @return $this
     */
    public function setTypStavebnihoObjektu($typ_stavebniho_objektu)
    {
        $this->container['typ_stavebniho_objektu'] = $typ_stavebniho_objektu;

        return $this;
    }

    /**
     * Gets typ_cislo_domovni
     *
     * @return int
     */
    public function getTypCisloDomovni()
    {
        return $this->container['typ_cislo_domovni'];
    }

    /**
     * Sets typ_cislo_domovni
     *
     * @param int $typ_cislo_domovni Typ čísla domu - kód (ciselnikKod: TypCislaDomovniho)
     *
     * @return $this
     */
    public function setTypCisloDomovni($typ_cislo_domovni)
    {
        $this->container['typ_cislo_domovni'] = $typ_cislo_domovni;

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
