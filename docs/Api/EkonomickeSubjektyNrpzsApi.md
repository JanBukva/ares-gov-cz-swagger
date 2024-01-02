# Swagger\Client\EkonomickeSubjektyNrpzsApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vratEkonomickySubjektNrpzs**](EkonomickeSubjektyNrpzsApi.md#vratekonomickysubjektnrpzs) | **GET** /ekonomicke-subjekty-nrpzs/{ico} | 
[**vyhledejSeznamEkonomickychSubjektuNrpzs**](EkonomickeSubjektyNrpzsApi.md#vyhledejseznamekonomickychsubjektunrpzs) | **POST** /ekonomicke-subjekty-nrpzs/vyhledat | 

# **vratEkonomickySubjektNrpzs**
> \Swagger\Client\Model\EkonomickySubjektNrpzs vratEkonomickySubjektNrpzs($ico)



Vyhledání konkrétního ekonomického subjektu ze zdroje NRPZS

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyNrpzsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ico = "ico_example"; // string | 

try {
    $result = $apiInstance->vratEkonomickySubjektNrpzs($ico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyNrpzsApi->vratEkonomickySubjektNrpzs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ico** | **string**|  |

### Return type

[**\Swagger\Client\Model\EkonomickySubjektNrpzs**](../Model/EkonomickySubjektNrpzs.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vyhledejSeznamEkonomickychSubjektuNrpzs**
> \Swagger\Client\Model\EkonomickeSubjektyNrpzsSeznam vyhledejSeznamEkonomickychSubjektuNrpzs($body)



Vyhledání seznamu ekonomických subjektu ze zdroje NRPZS

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyNrpzsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr(); // \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr | 

try {
    $result = $apiInstance->vyhledejSeznamEkonomickychSubjektuNrpzs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyNrpzsApi->vyhledejSeznamEkonomickychSubjektuNrpzs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr**](../Model/EkonomickeSubjektyRegistraceFiltr.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EkonomickeSubjektyNrpzsSeznam**](../Model/EkonomickeSubjektyNrpzsSeznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

