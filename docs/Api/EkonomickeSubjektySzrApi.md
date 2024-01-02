# Swagger\Client\EkonomickeSubjektySzrApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vratEkonomickySubjektSzr**](EkonomickeSubjektySzrApi.md#vratekonomickysubjektszr) | **GET** /ekonomicke-subjekty-szr/{ico} | 
[**vyhledejSeznamEkonomickychSubjektuSzr**](EkonomickeSubjektySzrApi.md#vyhledejseznamekonomickychsubjektuszr) | **POST** /ekonomicke-subjekty-szr/vyhledat | 

# **vratEkonomickySubjektSzr**
> \Swagger\Client\Model\EkonomickySubjektSzr vratEkonomickySubjektSzr($ico)



Vyhledání konkrétního ekonomického subjektu ze zdroje SZR - subregistr EZP

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektySzrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ico = "ico_example"; // string | 

try {
    $result = $apiInstance->vratEkonomickySubjektSzr($ico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektySzrApi->vratEkonomickySubjektSzr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ico** | **string**|  |

### Return type

[**\Swagger\Client\Model\EkonomickySubjektSzr**](../Model/EkonomickySubjektSzr.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vyhledejSeznamEkonomickychSubjektuSzr**
> \Swagger\Client\Model\EkonomickeSubjektySzrSeznam vyhledejSeznamEkonomickychSubjektuSzr($body)



Vyhledání seznamu ekonomických subjektu ze zdroje SZR - subregistr EZP

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektySzrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr(); // \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr | 

try {
    $result = $apiInstance->vyhledejSeznamEkonomickychSubjektuSzr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektySzrApi->vyhledejSeznamEkonomickychSubjektuSzr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr**](../Model/EkonomickeSubjektyRegistraceFiltr.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EkonomickeSubjektySzrSeznam**](../Model/EkonomickeSubjektySzrSeznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

