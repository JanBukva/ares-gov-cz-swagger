# Swagger\Client\EkonomickeSubjektyNotifikaceApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vratNotifikacniDavku**](EkonomickeSubjektyNotifikaceApi.md#vratnotifikacnidavku) | **GET** /ekonomicke-subjekty-notifikace/datovy-zdroj/{datovyZdroj}/cislo-davky/{cisloDavky} | 
[**vyhledejSeznamNotifikacnichDavek**](EkonomickeSubjektyNotifikaceApi.md#vyhledejseznamnotifikacnichdavek) | **POST** /ekonomicke-subjekty-notifikace/vyhledat | 

# **vratNotifikacniDavku**
> \Swagger\Client\Model\NotifikacniDavkaZaznam vratNotifikacniDavku($datovy_zdroj, $cislo_davky)



Vyhledání  konkrétní notifikační dávky zdroje ARES podle vstupcách parametrů (zdroj, číslo notifikační dávky)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyNotifikaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datovy_zdroj = "datovy_zdroj_example"; // string | 
$cislo_davky = 56; // int | 

try {
    $result = $apiInstance->vratNotifikacniDavku($datovy_zdroj, $cislo_davky);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyNotifikaceApi->vratNotifikacniDavku: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datovy_zdroj** | **string**|  |
 **cislo_davky** | **int**|  |

### Return type

[**\Swagger\Client\Model\NotifikacniDavkaZaznam**](../Model/NotifikacniDavkaZaznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vyhledejSeznamNotifikacnichDavek**
> \Swagger\Client\Model\SeznamNotifikacnichDavek vyhledejSeznamNotifikacnichDavek($body)



Vyhledání seznamu notifikačních dávek ekonomických subjektů ARES podle zvoleného filtru

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyNotifikaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EkonomickeSubjektyNotifikaceFiltr(); // \Swagger\Client\Model\EkonomickeSubjektyNotifikaceFiltr | Datový zdroj notifikační dávky - kód

try {
    $result = $apiInstance->vyhledejSeznamNotifikacnichDavek($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyNotifikaceApi->vyhledejSeznamNotifikacnichDavek: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EkonomickeSubjektyNotifikaceFiltr**](../Model/EkonomickeSubjektyNotifikaceFiltr.md)| Datový zdroj notifikační dávky - kód | [optional]

### Return type

[**\Swagger\Client\Model\SeznamNotifikacnichDavek**](../Model/SeznamNotifikacnichDavek.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

