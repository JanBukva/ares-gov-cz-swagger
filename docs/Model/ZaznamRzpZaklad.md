# ZaznamRzpZaklad

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**insolvencni_rizeni** | [**\Swagger\Client\Model\InsolvencniRizeni**](InsolvencniRizeni.md) |  | [optional] 
**datum_doruceni_vypisu** | [**\DateTime**](\DateTime.md) | Datum doručení prvního výpisu sloužícího jako průkaz živnostenského podnikání, | [optional] 
**adresy_subjektu** | [**\Swagger\Client\Model\EkonomickySubjektRzpAdresa[]**](EkonomickySubjektRzpAdresa.md) |  | [optional] 
**typ_subjektu** | **string** | Typ subjektu - kód (ciselnikKod: TypSubjektu, zdroj: rzp) | [optional] 
**zivnostensky_urad** | **string** | Živnostenský úřadu - kód | [optional] 
**organizacni_slozka** | **string** | Název organizační složky | [optional] 
**zivnosti_stav** | [**\Swagger\Client\Model\ZivnostiRzpStav**](ZivnostiRzpStav.md) |  | [optional] 
**datum_zapisu_vr** | [**\DateTime**](\DateTime.md) | Datum zápisu do Obchodního nebo podobného rejstříku | [optional] 
**provozovny_stav** | [**\Swagger\Client\Model\ProvozovnyRzpStav**](ProvozovnyRzpStav.md) |  | [optional] 
**primarni_zaznam** | **bool** | Identifikace primárního záznamu  pozn.: U multiplicitních registrací je pouze jedna registrace primární | [optional] 
**kod_statu** | **string** | Kód státu  (ciselnikKod: Stat, zdroj:com) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

