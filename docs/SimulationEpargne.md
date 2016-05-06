# SimulationEpargne

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_produit** | **string** | type de produit simul\u00E9 (Madelin, Assurance vie, Perp...) | 
**nom_produit** | **string** | nom complet du produit | [optional] 
**duree_simulation** | **int** | dur\u00E9e en ann\u00E9es de la phase d&#39;\u00E9pargne | [optional] 
**operations** | [**\Swagger\Client\Model\Operations**](Operations.md) | Versements effectu\u00E9s | [optional] 
**parametrage_rente** | [**\Swagger\Client\Model\ParametrageRente**](ParametrageRente.md) | caract\u00E9ristiques de la rente simul\u00E9e | [optional] 
**resultats_epargne** | [**\Swagger\Client\Model\EvolutionEpargne[]**](EvolutionEpargne.md) | tableau d&#39;&#39;\u00E9volution de l&#39;\u00E9pargne ann\u00E9es par ann\u00E9es | [optional] 
**resultats_rente** | [**\Swagger\Client\Model\EvolutionRente[]**](EvolutionRente.md) | tableau d&#39;&#39;\u00E9volution de la rente servie par \u00E2ge | [optional] 
**resultats_disponible_fiscal** | [**\Swagger\Client\Model\DisponibleFiscalRetraiteMadelinUtilise**](DisponibleFiscalRetraiteMadelinUtilise.md) | informations li\u00E9es \u00E0 l&#39;&#39;\u00E9conomie annuelle d&#39;impot r\u00E9alis\u00E9e et \u00E0 la r\u00E9serve fiscale disponible | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


