# Swagger\Client\EkonomickeSubjektyRcnsApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vratEkonomickySubjektRcns**](EkonomickeSubjektyRcnsApi.md#vratekonomickysubjektrcns) | **GET** /ekonomicke-subjekty-rcns/{ico} | 
[**vyhledejSeznamEkonomickychSubjektuRcns**](EkonomickeSubjektyRcnsApi.md#vyhledejseznamekonomickychsubjekturcns) | **POST** /ekonomicke-subjekty-rcns/vyhledat | 

# **vratEkonomickySubjektRcns**
> \Swagger\Client\Model\EkonomickySubjektRcns vratEkonomickySubjektRcns($ico)



Vyhledání konkrétního ekonomického subjektu ze zdroje RCNS

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyRcnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ico = "ico_example"; // string | 

try {
    $result = $apiInstance->vratEkonomickySubjektRcns($ico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyRcnsApi->vratEkonomickySubjektRcns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ico** | **string**|  |

### Return type

[**\Swagger\Client\Model\EkonomickySubjektRcns**](../Model/EkonomickySubjektRcns.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vyhledejSeznamEkonomickychSubjektuRcns**
> \Swagger\Client\Model\EkonomickeSubjektyRcnsSeznam vyhledejSeznamEkonomickychSubjektuRcns($body)



Vyhledání seznamu ekonomických subjektu ze zdroje RCNS

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyRcnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr(); // \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr | 

try {
    $result = $apiInstance->vyhledejSeznamEkonomickychSubjektuRcns($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyRcnsApi->vyhledejSeznamEkonomickychSubjektuRcns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr**](../Model/EkonomickeSubjektyRegistraceFiltr.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EkonomickeSubjektyRcnsSeznam**](../Model/EkonomickeSubjektyRcnsSeznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

