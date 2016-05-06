<?php
/**
 * DisponibleFiscalRetraiteMadelinUtilise
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * DisponibleFiscalRetraiteMadelinUtilise Class Doc Comment
 *
 * @category    Class
 * @description disponible fiscal retraite madelin utilis\u00E9 par le produit MADELIN simul\u00E9
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DisponibleFiscalRetraiteMadelinUtilise implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'enveloppe_fiscale_maximale' => '\Swagger\Client\Model\Montant',
        'versements_annuel' => '\Swagger\Client\Model\Montant',
        'economie_impot_realise' => '\Swagger\Client\Model\Montant',
        'reserve_fiscale_disponible' => '\Swagger\Client\Model\Montant',
        'operations_supplementaires' => '\Swagger\Client\Model\Montant'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'enveloppe_fiscale_maximale' => 'enveloppeFiscaleMaximale',
        'versements_annuel' => 'versementsAnnuel',
        'economie_impot_realise' => 'economieImpotRealise',
        'reserve_fiscale_disponible' => 'reserveFiscaleDisponible',
        'operations_supplementaires' => 'operationsSupplementaires'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'enveloppe_fiscale_maximale' => 'setEnveloppeFiscaleMaximale',
        'versements_annuel' => 'setVersementsAnnuel',
        'economie_impot_realise' => 'setEconomieImpotRealise',
        'reserve_fiscale_disponible' => 'setReserveFiscaleDisponible',
        'operations_supplementaires' => 'setOperationsSupplementaires'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'enveloppe_fiscale_maximale' => 'getEnveloppeFiscaleMaximale',
        'versements_annuel' => 'getVersementsAnnuel',
        'economie_impot_realise' => 'getEconomieImpotRealise',
        'reserve_fiscale_disponible' => 'getReserveFiscaleDisponible',
        'operations_supplementaires' => 'getOperationsSupplementaires'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $enveloppe_fiscale_maximale taux TMI * disponibleRetraite (plafond)
      * @var \Swagger\Client\Model\Montant
      */
    protected $enveloppe_fiscale_maximale;
    
    /**
      * $versements_annuel versements annuels effectu\u00E9s sur le produit MADELIN = operation.montantVersementPeriodique * 12
      * @var \Swagger\Client\Model\Montant
      */
    protected $versements_annuel;
    
    /**
      * $economie_impot_realise \u00E9conomie annuelle impot r\u00E9alis\u00E9 = versementsAnnuel * taux TMI
      * @var \Swagger\Client\Model\Montant
      */
    protected $economie_impot_realise;
    
    /**
      * $reserve_fiscale_disponible = enveloppeFiscaleMaximale - economieImpotRealise
      * @var \Swagger\Client\Model\Montant
      */
    protected $reserve_fiscale_disponible;
    
    /**
      * $operations_supplementaires = disponibleRetraite (plafond) - versementsAnnuel
      * @var \Swagger\Client\Model\Montant
      */
    protected $operations_supplementaires;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->enveloppe_fiscale_maximale = $data["enveloppe_fiscale_maximale"];
            $this->versements_annuel = $data["versements_annuel"];
            $this->economie_impot_realise = $data["economie_impot_realise"];
            $this->reserve_fiscale_disponible = $data["reserve_fiscale_disponible"];
            $this->operations_supplementaires = $data["operations_supplementaires"];
        }
    }
    
    /**
     * Gets enveloppe_fiscale_maximale
     * @return \Swagger\Client\Model\Montant
     */
    public function getEnveloppeFiscaleMaximale()
    {
        return $this->enveloppe_fiscale_maximale;
    }
  
    /**
     * Sets enveloppe_fiscale_maximale
     * @param \Swagger\Client\Model\Montant $enveloppe_fiscale_maximale taux TMI * disponibleRetraite (plafond)
     * @return $this
     */
    public function setEnveloppeFiscaleMaximale($enveloppe_fiscale_maximale)
    {
        
        $this->enveloppe_fiscale_maximale = $enveloppe_fiscale_maximale;
        return $this;
    }
    
    /**
     * Gets versements_annuel
     * @return \Swagger\Client\Model\Montant
     */
    public function getVersementsAnnuel()
    {
        return $this->versements_annuel;
    }
  
    /**
     * Sets versements_annuel
     * @param \Swagger\Client\Model\Montant $versements_annuel versements annuels effectu\u00E9s sur le produit MADELIN = operation.montantVersementPeriodique * 12
     * @return $this
     */
    public function setVersementsAnnuel($versements_annuel)
    {
        
        $this->versements_annuel = $versements_annuel;
        return $this;
    }
    
    /**
     * Gets economie_impot_realise
     * @return \Swagger\Client\Model\Montant
     */
    public function getEconomieImpotRealise()
    {
        return $this->economie_impot_realise;
    }
  
    /**
     * Sets economie_impot_realise
     * @param \Swagger\Client\Model\Montant $economie_impot_realise \u00E9conomie annuelle impot r\u00E9alis\u00E9 = versementsAnnuel * taux TMI
     * @return $this
     */
    public function setEconomieImpotRealise($economie_impot_realise)
    {
        
        $this->economie_impot_realise = $economie_impot_realise;
        return $this;
    }
    
    /**
     * Gets reserve_fiscale_disponible
     * @return \Swagger\Client\Model\Montant
     */
    public function getReserveFiscaleDisponible()
    {
        return $this->reserve_fiscale_disponible;
    }
  
    /**
     * Sets reserve_fiscale_disponible
     * @param \Swagger\Client\Model\Montant $reserve_fiscale_disponible = enveloppeFiscaleMaximale - economieImpotRealise
     * @return $this
     */
    public function setReserveFiscaleDisponible($reserve_fiscale_disponible)
    {
        
        $this->reserve_fiscale_disponible = $reserve_fiscale_disponible;
        return $this;
    }
    
    /**
     * Gets operations_supplementaires
     * @return \Swagger\Client\Model\Montant
     */
    public function getOperationsSupplementaires()
    {
        return $this->operations_supplementaires;
    }
  
    /**
     * Sets operations_supplementaires
     * @param \Swagger\Client\Model\Montant $operations_supplementaires = disponibleRetraite (plafond) - versementsAnnuel
     * @return $this
     */
    public function setOperationsSupplementaires($operations_supplementaires)
    {
        
        $this->operations_supplementaires = $operations_supplementaires;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
