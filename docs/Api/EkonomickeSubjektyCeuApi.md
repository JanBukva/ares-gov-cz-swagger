# Swagger\Client\EkonomickeSubjektyCeuApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vratEkonomickySubjektCeu**](EkonomickeSubjektyCeuApi.md#vratekonomickysubjektceu) | **GET** /ekonomicke-subjekty-ceu/{ico} | 
[**vyhledejSeznamEkonomickychSubjektuCeu**](EkonomickeSubjektyCeuApi.md#vyhledejseznamekonomickychsubjektuceu) | **POST** /ekonomicke-subjekty-ceu/vyhledat | 

# **vratEkonomickySubjektCeu**
> \Swagger\Client\Model\EkonomickySubjektCeu vratEkonomickySubjektCeu($ico)



Vyhledání konkrétního úpadce ze zdroje CEÚ

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyCeuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ico = "ico_example"; // string | 

try {
    $result = $apiInstance->vratEkonomickySubjektCeu($ico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyCeuApi->vratEkonomickySubjektCeu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ico** | **string**|  |

### Return type

[**\Swagger\Client\Model\EkonomickySubjektCeu**](../Model/EkonomickySubjektCeu.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vyhledejSeznamEkonomickychSubjektuCeu**
> \Swagger\Client\Model\EkonomickeSubjektyCeuSeznam vyhledejSeznamEkonomickychSubjektuCeu($body)



Vyhledání seznamu úpadců ze zdroje CEÚ

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


$apiInstance = new Swagger\Client\Api\EkonomickeSubjektyCeuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr(); // \Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr | 

try {
    $result = $apiInstance->vyhledejSeznamEkonomickychSubjektuCeu($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EkonomickeSubjektyCeuApi->vyhledejSeznamEkonomickychSubjektuCeu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EkonomickeSubjektyRegistraceFiltr**](../Model/EkonomickeSubjektyRegistraceFiltr.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EkonomickeSubjektyCeuSeznam**](../Model/EkonomickeSubjektyCeuSeznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

