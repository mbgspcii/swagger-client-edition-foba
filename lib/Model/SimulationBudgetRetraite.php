<?php
/**
 * SimulationBudgetRetraite
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
 * SimulationBudgetRetraite Class Doc Comment
 *
 * @category    Class
 * @description simulation en provenance de Mon Budget Retraite
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SimulationBudgetRetraite implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'situation_professionnelle_actuelle_p_principale' => '\Swagger\Client\Model\PeriodeActivite',
        'situation_professionnelle_actuelle_p_conjoint' => '\Swagger\Client\Model\PeriodeActivite',
        'situation_retraite_p_principale' => '\Swagger\Client\Model\ProjectionRetraiteSimplifiee',
        'situation_retraite_p_conjoint' => '\Swagger\Client\Model\ProjectionRetraiteSimplifiee',
        'd_a_impots' => '\Swagger\Client\Model\Montant',
        'd_a_emprunt' => '\Swagger\Client\Model\Montant',
        'd_a_autres_charges' => '\Swagger\Client\Model\Montant',
        'd_a_quotidien' => '\Swagger\Client\Model\Montant',
        'd_a_epargne' => '\Swagger\Client\Model\Montant',
        'd_r_impots' => '\Swagger\Client\Model\Montant',
        'd_r_emprunt' => '\Swagger\Client\Model\Montant',
        'd_r_autres_charges' => '\Swagger\Client\Model\Montant',
        'd_r_quotidien' => '\Swagger\Client\Model\Montant'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'situation_professionnelle_actuelle_p_principale' => 'situationProfessionnelleActuellePPrincipale',
        'situation_professionnelle_actuelle_p_conjoint' => 'situationProfessionnelleActuellePConjoint',
        'situation_retraite_p_principale' => 'situationRetraitePPrincipale',
        'situation_retraite_p_conjoint' => 'situationRetraitePConjoint',
        'd_a_impots' => 'dAImpots',
        'd_a_emprunt' => 'dAEmprunt',
        'd_a_autres_charges' => 'dAAutresCharges',
        'd_a_quotidien' => 'dAQuotidien',
        'd_a_epargne' => 'dAEpargne',
        'd_r_impots' => 'dRImpots',
        'd_r_emprunt' => 'dREmprunt',
        'd_r_autres_charges' => 'dRAutresCharges',
        'd_r_quotidien' => 'dRQuotidien'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'situation_professionnelle_actuelle_p_principale' => 'setSituationProfessionnelleActuellePPrincipale',
        'situation_professionnelle_actuelle_p_conjoint' => 'setSituationProfessionnelleActuellePConjoint',
        'situation_retraite_p_principale' => 'setSituationRetraitePPrincipale',
        'situation_retraite_p_conjoint' => 'setSituationRetraitePConjoint',
        'd_a_impots' => 'setDAImpots',
        'd_a_emprunt' => 'setDAEmprunt',
        'd_a_autres_charges' => 'setDAAutresCharges',
        'd_a_quotidien' => 'setDAQuotidien',
        'd_a_epargne' => 'setDAEpargne',
        'd_r_impots' => 'setDRImpots',
        'd_r_emprunt' => 'setDREmprunt',
        'd_r_autres_charges' => 'setDRAutresCharges',
        'd_r_quotidien' => 'setDRQuotidien'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'situation_professionnelle_actuelle_p_principale' => 'getSituationProfessionnelleActuellePPrincipale',
        'situation_professionnelle_actuelle_p_conjoint' => 'getSituationProfessionnelleActuellePConjoint',
        'situation_retraite_p_principale' => 'getSituationRetraitePPrincipale',
        'situation_retraite_p_conjoint' => 'getSituationRetraitePConjoint',
        'd_a_impots' => 'getDAImpots',
        'd_a_emprunt' => 'getDAEmprunt',
        'd_a_autres_charges' => 'getDAAutresCharges',
        'd_a_quotidien' => 'getDAQuotidien',
        'd_a_epargne' => 'getDAEpargne',
        'd_r_impots' => 'getDRImpots',
        'd_r_emprunt' => 'getDREmprunt',
        'd_r_autres_charges' => 'getDRAutresCharges',
        'd_r_quotidien' => 'getDRQuotidien'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $situation_professionnelle_actuelle_p_principale contient la situation professionnelle actuelle de la personne principale
      * @var \Swagger\Client\Model\PeriodeActivite
      */
    protected $situation_professionnelle_actuelle_p_principale;
    
    /**
      * $situation_professionnelle_actuelle_p_conjoint contient la situation professionnelle actuelle de la personne conjoint/concubin/pacse
      * @var \Swagger\Client\Model\PeriodeActivite
      */
    protected $situation_professionnelle_actuelle_p_conjoint;
    
    /**
      * $situation_retraite_p_principale contient la situation en terme de revenus de la personne principale \u00E0 la retraite
      * @var \Swagger\Client\Model\ProjectionRetraiteSimplifiee
      */
    protected $situation_retraite_p_principale;
    
    /**
      * $situation_retraite_p_conjoint contient la situation en terme de revenus de la personne conjoint/concubin/pacse \u00E0 la retraite
      * @var \Swagger\Client\Model\ProjectionRetraiteSimplifiee
      */
    protected $situation_retraite_p_conjoint;
    
    /**
      * $d_a_impots d\u00E9penses actuelles annuelles cat\u00E9gorie impots et taxes du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_a_impots;
    
    /**
      * $d_a_emprunt d\u00E9penses actuelles annuelles cat\u00E9gorie emprunts du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_a_emprunt;
    
    /**
      * $d_a_autres_charges d\u00E9penses actuelles annuelles cat\u00E9gorie Autres charges du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_a_autres_charges;
    
    /**
      * $d_a_quotidien d\u00E9penses actuelles annuelles cat\u00E9gorie Vie Quotidienne du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_a_quotidien;
    
    /**
      * $d_a_epargne capacit\u00E9 d'\u00E9pargne r\u00E9siduelle annuelle du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_a_epargne;
    
    /**
      * $d_r_impots d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie impots et taxes du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_r_impots;
    
    /**
      * $d_r_emprunt d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie emprunts du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_r_emprunt;
    
    /**
      * $d_r_autres_charges d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie Autres charges du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_r_autres_charges;
    
    /**
      * $d_r_quotidien d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie Vie Quotidienne du foyer
      * @var \Swagger\Client\Model\Montant
      */
    protected $d_r_quotidien;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->situation_professionnelle_actuelle_p_principale = $data["situation_professionnelle_actuelle_p_principale"];
            $this->situation_professionnelle_actuelle_p_conjoint = $data["situation_professionnelle_actuelle_p_conjoint"];
            $this->situation_retraite_p_principale = $data["situation_retraite_p_principale"];
            $this->situation_retraite_p_conjoint = $data["situation_retraite_p_conjoint"];
            $this->d_a_impots = $data["d_a_impots"];
            $this->d_a_emprunt = $data["d_a_emprunt"];
            $this->d_a_autres_charges = $data["d_a_autres_charges"];
            $this->d_a_quotidien = $data["d_a_quotidien"];
            $this->d_a_epargne = $data["d_a_epargne"];
            $this->d_r_impots = $data["d_r_impots"];
            $this->d_r_emprunt = $data["d_r_emprunt"];
            $this->d_r_autres_charges = $data["d_r_autres_charges"];
            $this->d_r_quotidien = $data["d_r_quotidien"];
        }
    }
    
    /**
     * Gets situation_professionnelle_actuelle_p_principale
     * @return \Swagger\Client\Model\PeriodeActivite
     */
    public function getSituationProfessionnelleActuellePPrincipale()
    {
        return $this->situation_professionnelle_actuelle_p_principale;
    }
  
    /**
     * Sets situation_professionnelle_actuelle_p_principale
     * @param \Swagger\Client\Model\PeriodeActivite $situation_professionnelle_actuelle_p_principale contient la situation professionnelle actuelle de la personne principale
     * @return $this
     */
    public function setSituationProfessionnelleActuellePPrincipale($situation_professionnelle_actuelle_p_principale)
    {
        
        $this->situation_professionnelle_actuelle_p_principale = $situation_professionnelle_actuelle_p_principale;
        return $this;
    }
    
    /**
     * Gets situation_professionnelle_actuelle_p_conjoint
     * @return \Swagger\Client\Model\PeriodeActivite
     */
    public function getSituationProfessionnelleActuellePConjoint()
    {
        return $this->situation_professionnelle_actuelle_p_conjoint;
    }
  
    /**
     * Sets situation_professionnelle_actuelle_p_conjoint
     * @param \Swagger\Client\Model\PeriodeActivite $situation_professionnelle_actuelle_p_conjoint contient la situation professionnelle actuelle de la personne conjoint/concubin/pacse
     * @return $this
     */
    public function setSituationProfessionnelleActuellePConjoint($situation_professionnelle_actuelle_p_conjoint)
    {
        
        $this->situation_professionnelle_actuelle_p_conjoint = $situation_professionnelle_actuelle_p_conjoint;
        return $this;
    }
    
    /**
     * Gets situation_retraite_p_principale
     * @return \Swagger\Client\Model\ProjectionRetraiteSimplifiee
     */
    public function getSituationRetraitePPrincipale()
    {
        return $this->situation_retraite_p_principale;
    }
  
    /**
     * Sets situation_retraite_p_principale
     * @param \Swagger\Client\Model\ProjectionRetraiteSimplifiee $situation_retraite_p_principale contient la situation en terme de revenus de la personne principale \u00E0 la retraite
     * @return $this
     */
    public function setSituationRetraitePPrincipale($situation_retraite_p_principale)
    {
        
        $this->situation_retraite_p_principale = $situation_retraite_p_principale;
        return $this;
    }
    
    /**
     * Gets situation_retraite_p_conjoint
     * @return \Swagger\Client\Model\ProjectionRetraiteSimplifiee
     */
    public function getSituationRetraitePConjoint()
    {
        return $this->situation_retraite_p_conjoint;
    }
  
    /**
     * Sets situation_retraite_p_conjoint
     * @param \Swagger\Client\Model\ProjectionRetraiteSimplifiee $situation_retraite_p_conjoint contient la situation en terme de revenus de la personne conjoint/concubin/pacse \u00E0 la retraite
     * @return $this
     */
    public function setSituationRetraitePConjoint($situation_retraite_p_conjoint)
    {
        
        $this->situation_retraite_p_conjoint = $situation_retraite_p_conjoint;
        return $this;
    }
    
    /**
     * Gets d_a_impots
     * @return \Swagger\Client\Model\Montant
     */
    public function getDAImpots()
    {
        return $this->d_a_impots;
    }
  
    /**
     * Sets d_a_impots
     * @param \Swagger\Client\Model\Montant $d_a_impots d\u00E9penses actuelles annuelles cat\u00E9gorie impots et taxes du foyer
     * @return $this
     */
    public function setDAImpots($d_a_impots)
    {
        
        $this->d_a_impots = $d_a_impots;
        return $this;
    }
    
    /**
     * Gets d_a_emprunt
     * @return \Swagger\Client\Model\Montant
     */
    public function getDAEmprunt()
    {
        return $this->d_a_emprunt;
    }
  
    /**
     * Sets d_a_emprunt
     * @param \Swagger\Client\Model\Montant $d_a_emprunt d\u00E9penses actuelles annuelles cat\u00E9gorie emprunts du foyer
     * @return $this
     */
    public function setDAEmprunt($d_a_emprunt)
    {
        
        $this->d_a_emprunt = $d_a_emprunt;
        return $this;
    }
    
    /**
     * Gets d_a_autres_charges
     * @return \Swagger\Client\Model\Montant
     */
    public function getDAAutresCharges()
    {
        return $this->d_a_autres_charges;
    }
  
    /**
     * Sets d_a_autres_charges
     * @param \Swagger\Client\Model\Montant $d_a_autres_charges d\u00E9penses actuelles annuelles cat\u00E9gorie Autres charges du foyer
     * @return $this
     */
    public function setDAAutresCharges($d_a_autres_charges)
    {
        
        $this->d_a_autres_charges = $d_a_autres_charges;
        return $this;
    }
    
    /**
     * Gets d_a_quotidien
     * @return \Swagger\Client\Model\Montant
     */
    public function getDAQuotidien()
    {
        return $this->d_a_quotidien;
    }
  
    /**
     * Sets d_a_quotidien
     * @param \Swagger\Client\Model\Montant $d_a_quotidien d\u00E9penses actuelles annuelles cat\u00E9gorie Vie Quotidienne du foyer
     * @return $this
     */
    public function setDAQuotidien($d_a_quotidien)
    {
        
        $this->d_a_quotidien = $d_a_quotidien;
        return $this;
    }
    
    /**
     * Gets d_a_epargne
     * @return \Swagger\Client\Model\Montant
     */
    public function getDAEpargne()
    {
        return $this->d_a_epargne;
    }
  
    /**
     * Sets d_a_epargne
     * @param \Swagger\Client\Model\Montant $d_a_epargne capacit\u00E9 d'\u00E9pargne r\u00E9siduelle annuelle du foyer
     * @return $this
     */
    public function setDAEpargne($d_a_epargne)
    {
        
        $this->d_a_epargne = $d_a_epargne;
        return $this;
    }
    
    /**
     * Gets d_r_impots
     * @return \Swagger\Client\Model\Montant
     */
    public function getDRImpots()
    {
        return $this->d_r_impots;
    }
  
    /**
     * Sets d_r_impots
     * @param \Swagger\Client\Model\Montant $d_r_impots d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie impots et taxes du foyer
     * @return $this
     */
    public function setDRImpots($d_r_impots)
    {
        
        $this->d_r_impots = $d_r_impots;
        return $this;
    }
    
    /**
     * Gets d_r_emprunt
     * @return \Swagger\Client\Model\Montant
     */
    public function getDREmprunt()
    {
        return $this->d_r_emprunt;
    }
  
    /**
     * Sets d_r_emprunt
     * @param \Swagger\Client\Model\Montant $d_r_emprunt d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie emprunts du foyer
     * @return $this
     */
    public function setDREmprunt($d_r_emprunt)
    {
        
        $this->d_r_emprunt = $d_r_emprunt;
        return $this;
    }
    
    /**
     * Gets d_r_autres_charges
     * @return \Swagger\Client\Model\Montant
     */
    public function getDRAutresCharges()
    {
        return $this->d_r_autres_charges;
    }
  
    /**
     * Sets d_r_autres_charges
     * @param \Swagger\Client\Model\Montant $d_r_autres_charges d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie Autres charges du foyer
     * @return $this
     */
    public function setDRAutresCharges($d_r_autres_charges)
    {
        
        $this->d_r_autres_charges = $d_r_autres_charges;
        return $this;
    }
    
    /**
     * Gets d_r_quotidien
     * @return \Swagger\Client\Model\Montant
     */
    public function getDRQuotidien()
    {
        return $this->d_r_quotidien;
    }
  
    /**
     * Sets d_r_quotidien
     * @param \Swagger\Client\Model\Montant $d_r_quotidien d\u00E9penses \u00E0 la retraite annuelles cat\u00E9gorie Vie Quotidienne du foyer
     * @return $this
     */
    public function setDRQuotidien($d_r_quotidien)
    {
        
        $this->d_r_quotidien = $d_r_quotidien;
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
