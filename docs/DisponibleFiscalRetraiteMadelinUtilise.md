# DisponibleFiscalRetraiteMadelinUtilise

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enveloppe_fiscale_maximale** | [**\Swagger\Client\Model\Montant**](Montant.md) | taux TMI * disponibleRetraite (plafond) | [optional] 
**versements_annuel** | [**\Swagger\Client\Model\Montant**](Montant.md) | versements annuels effectu\u00E9s sur le produit MADELIN = operation.montantVersementPeriodique * 12 | [optional] 
**economie_impot_realise** | [**\Swagger\Client\Model\Montant**](Montant.md) | \u00E9conomie annuelle impot r\u00E9alis\u00E9 = versementsAnnuel * taux TMI | [optional] 
**reserve_fiscale_disponible** | [**\Swagger\Client\Model\Montant**](Montant.md) | = enveloppeFiscaleMaximale - economieImpotRealise | [optional] 
**operations_supplementaires** | [**\Swagger\Client\Model\Montant**](Montant.md) | = disponibleRetraite (plafond) - versementsAnnuel | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


