# Swagger\Client\CiselnikyNazevnikyApi

All URIs are relative to *https://ares.gov.cz/ekonomicke-subjekty-v-be/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vyhledejCiselnik**](CiselnikyNazevnikyApi.md#vyhledejciselnik) | **POST** /ciselniky-nazevniky/vyhledat | 

# **vyhledejCiselnik**
> \Swagger\Client\Model\CiselnikyNazevnikSeznam vyhledejCiselnik($body)



Vyhledání číselníků používaných v IS ARES podle komplexního filtru

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


$apiInstance = new Swagger\Client\Api\CiselnikyNazevnikyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CiselnikyZakladniFiltr(); // \Swagger\Client\Model\CiselnikyZakladniFiltr | 

try {
    $result = $apiInstance->vyhledejCiselnik($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CiselnikyNazevnikyApi->vyhledejCiselnik: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CiselnikyZakladniFiltr**](../Model/CiselnikyZakladniFiltr.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CiselnikyNazevnikSeznam**](../Model/CiselnikyNazevnikSeznam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

