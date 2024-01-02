# Swagger\Client\EkonomickeSubjektyVrApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vratEkonomickySubjektVr**](EkonomickeSubjektyVrApi.md#vratekonomickysubjektvr) | **GET** /ekonomicke-subjekty-vr/{ico} | 
[**vyhledejSeznamEkonomickychSubjektuVr**](EkonomickeSubjektyVrApi.md#vyhledejseznamekonomickychsubjektuvr) | **POST** /ekonomicke-subjekty-vr/vyhledat | 

# **vratEkonomickySubjektVr**
> \Swagger\Client\Model\EkonomickySubjektVr vratEkonomickySubjektVr($ico)



Vyhledání konkrétního ekonomického subjektu ze zdroje VR

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyVrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ico = "ico_example"; // string | 

try {
    $result = $apiInstance->vratEkonomickySubjektVr($ico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyVrApi->vratEkonomickySubjektVr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ico** | **string**|  |

### Return type

[**\Swagger\Client\Model\EkonomickySubjektVr**](../Model/EkonomickySubjektVr.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vyhledejSeznamEkonomickychSubjektuVr**
> \Swagger\Client\Model\EkonomickeSubjektyVrSeznam vyhledejSeznamEkonomickychSubjektuVr($body)



Vyhledání seznamu ekonomických subjektu ze zdroje VR

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyVrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr(); // \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr | 

try {
    $result = $apiInstance->vyhledejSeznamEkonomickychSubjektuVr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyVrApi->vyhledejSeznamEkonomickychSubjektuVr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr**](../Model/EkonomickeSubjektyRegistraceFiltr.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EkonomickeSubjektyVrSeznam**](../Model/EkonomickeSubjektyVrSeznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

