# Swagger\Client\DefaultApi

All URIs are relative to *http://172.16.6.201/WSEditFOBA*

Method | HTTP request | Description
------------- | ------------- | -------------
[**obtenirEditionRetraite**](DefaultApi.md#obtenirEditionRetraite) | **POST** /retraite | 
[**obtenirEditionSimulations360**](DefaultApi.md#obtenirEditionSimulations360) | **POST** /simulations360 | 


# **obtenirEditionRetraite**
> ByteArray[] obtenirEditionRetraite($simulation_retraite)



Obtenir une \u00E9dition pdf d'une simulation Retraite

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$simulation_retraite = new \Swagger\Client\Model\SimulationRetraite(); // \Swagger\Client\Model\SimulationRetraite | contient les donn\u00E9es n\u00E9cessaires \u00E0 l'\u00E9dition de la simulation retraite experte effectu\u00E9e depuis SimRETAI

try { 
    $result = $api_instance->obtenirEditionRetraite($simulation_retraite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->obtenirEditionRetraite: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **simulation_retraite** | [**\Swagger\Client\Model\SimulationRetraite**](\Swagger\Client\Model\SimulationRetraite.md)| contient les donn\u00E9es n\u00E9cessaires \u00E0 l&#39;\u00E9dition de la simulation retraite experte effectu\u00E9e depuis SimRETAI | 

### Return type

[**ByteArray[]**](ByteArray.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **obtenirEditionSimulations360**
> ByteArray[] obtenirEditionSimulations360($dossier_simulations)



Obtenir une \u00E9dition pdf dans le cadre d'un enchainement de simulations (BudgetRetraite+Madelin ou PERP+AssuranceVie)

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$dossier_simulations = new \Swagger\Client\Model\DossierSimulations(); // \Swagger\Client\Model\DossierSimulations | contient les donn\u00E9es n\u00E9cessaires \u00E0 l'\u00E9dition des diff\u00E9rentes simulations chain\u00E9es

try { 
    $result = $api_instance->obtenirEditionSimulations360($dossier_simulations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->obtenirEditionSimulations360: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dossier_simulations** | [**\Swagger\Client\Model\DossierSimulations**](\Swagger\Client\Model\DossierSimulations.md)| contient les donn\u00E9es n\u00E9cessaires \u00E0 l&#39;\u00E9dition des diff\u00E9rentes simulations chain\u00E9es | 

### Return type

[**ByteArray[]**](ByteArray.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

