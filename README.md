# SwaggerClient-php
Service d'\u00E9dition pour les simulateurs FOBA

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build date: 2016-05-06T08:58:16.991Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://www.gfi.fr/foba/](http://www.gfi.fr/foba/)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/mbgspcii/swagger-client-edition-foba"
    }
  ],
  "require": {
    "swagger/swagger-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests 

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://172.16.6.201/WSEditFOBA*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**obtenirEditionRetraite**](docs/DefaultApi.md#obtenireditionretraite) | **POST** /retraite | 
*DefaultApi* | [**obtenirEditionSimulations360**](docs/DefaultApi.md#obtenireditionsimulations360) | **POST** /simulations360 | 


## Documentation For Models

 - [BilanAnRetraite](docs/BilanAnRetraite.md)
 - [BilansAnRetraite](docs/BilansAnRetraite.md)
 - [Carriere](docs/Carriere.md)
 - [CumulRegime](docs/CumulRegime.md)
 - [DisponibleFiscalMadelin](docs/DisponibleFiscalMadelin.md)
 - [DisponibleFiscalPERP](docs/DisponibleFiscalPERP.md)
 - [DisponibleFiscalRetraiteMadelinUtilise](docs/DisponibleFiscalRetraiteMadelinUtilise.md)
 - [DisponiblesFiscaux](docs/DisponiblesFiscaux.md)
 - [DossierSimulations](docs/DossierSimulations.md)
 - [ErrorModel](docs/ErrorModel.md)
 - [EvolutionEpargne](docs/EvolutionEpargne.md)
 - [EvolutionRente](docs/EvolutionRente.md)
 - [Montant](docs/Montant.md)
 - [Operations](docs/Operations.md)
 - [ParametrageRente](docs/ParametrageRente.md)
 - [PeriodeActivite](docs/PeriodeActivite.md)
 - [Personne](docs/Personne.md)
 - [ProjectionRetraiteSimplifiee](docs/ProjectionRetraiteSimplifiee.md)
 - [ServiceNational](docs/ServiceNational.md)
 - [SimulationBudgetRetraite](docs/SimulationBudgetRetraite.md)
 - [SimulationEpargne](docs/SimulationEpargne.md)
 - [SimulationRetraite](docs/SimulationRetraite.md)
 - [SyntheseRIS](docs/SyntheseRIS.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

michel.bensussan@gfi.fr


