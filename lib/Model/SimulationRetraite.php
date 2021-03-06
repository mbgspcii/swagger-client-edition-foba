<?php
/**
 * SimulationRetraite
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
 * SimulationRetraite Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SimulationRetraite implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'personne_principale' => '\Swagger\Client\Model\Personne',
        'mode_calcul_saisie_carriere' => 'bool',
        'carriere' => '\Swagger\Client\Model\Carriere',
        'synthese_ris' => '\Swagger\Client\Model\SyntheseRIS',
        'bilans_an_retraite' => '\Swagger\Client\Model\BilansAnRetraite'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'personne_principale' => 'personnePrincipale',
        'mode_calcul_saisie_carriere' => 'modeCalculSaisieCarriere',
        'carriere' => 'carriere',
        'synthese_ris' => 'syntheseRIS',
        'bilans_an_retraite' => 'bilansAnRetraite'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'personne_principale' => 'setPersonnePrincipale',
        'mode_calcul_saisie_carriere' => 'setModeCalculSaisieCarriere',
        'carriere' => 'setCarriere',
        'synthese_ris' => 'setSyntheseRis',
        'bilans_an_retraite' => 'setBilansAnRetraite'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'personne_principale' => 'getPersonnePrincipale',
        'mode_calcul_saisie_carriere' => 'getModeCalculSaisieCarriere',
        'carriere' => 'getCarriere',
        'synthese_ris' => 'getSyntheseRis',
        'bilans_an_retraite' => 'getBilansAnRetraite'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $personne_principale 
      * @var \Swagger\Client\Model\Personne
      */
    protected $personne_principale;
    
    /**
      * $mode_calcul_saisie_carriere vaut true si saisie mode carri\u00E8re, vaut false si saisie mode RIS
      * @var bool
      */
    protected $mode_calcul_saisie_carriere;
    
    /**
      * $carriere si saisie en mode carri\u00E8re d\u00E9crit la carri\u00E8re compl\u00E8te sinon d\u00E9crit la situation professionnelle actuelle
      * @var \Swagger\Client\Model\Carriere
      */
    protected $carriere;
    
    /**
      * $synthese_ris si saisie en mode RIS Manuel, d\u00E9crit les droits acquis au dernier 31/12 dans les r\u00E9gimes de retraite
      * @var \Swagger\Client\Model\SyntheseRIS
      */
    protected $synthese_ris;
    
    /**
      * $bilans_an_retraite pensions calcul\u00E9es \u00E0 chaque \u00E2ge d\u00E9part possible
      * @var \Swagger\Client\Model\BilansAnRetraite
      */
    protected $bilans_an_retraite;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->personne_principale = $data["personne_principale"];
            $this->mode_calcul_saisie_carriere = $data["mode_calcul_saisie_carriere"];
            $this->carriere = $data["carriere"];
            $this->synthese_ris = $data["synthese_ris"];
            $this->bilans_an_retraite = $data["bilans_an_retraite"];
        }
    }
    
    /**
     * Gets personne_principale
     * @return \Swagger\Client\Model\Personne
     */
    public function getPersonnePrincipale()
    {
        return $this->personne_principale;
    }
  
    /**
     * Sets personne_principale
     * @param \Swagger\Client\Model\Personne $personne_principale 
     * @return $this
     */
    public function setPersonnePrincipale($personne_principale)
    {
        
        $this->personne_principale = $personne_principale;
        return $this;
    }
    
    /**
     * Gets mode_calcul_saisie_carriere
     * @return bool
     */
    public function getModeCalculSaisieCarriere()
    {
        return $this->mode_calcul_saisie_carriere;
    }
  
    /**
     * Sets mode_calcul_saisie_carriere
     * @param bool $mode_calcul_saisie_carriere vaut true si saisie mode carri\u00E8re, vaut false si saisie mode RIS
     * @return $this
     */
    public function setModeCalculSaisieCarriere($mode_calcul_saisie_carriere)
    {
        
        $this->mode_calcul_saisie_carriere = $mode_calcul_saisie_carriere;
        return $this;
    }
    
    /**
     * Gets carriere
     * @return \Swagger\Client\Model\Carriere
     */
    public function getCarriere()
    {
        return $this->carriere;
    }
  
    /**
     * Sets carriere
     * @param \Swagger\Client\Model\Carriere $carriere si saisie en mode carri\u00E8re d\u00E9crit la carri\u00E8re compl\u00E8te sinon d\u00E9crit la situation professionnelle actuelle
     * @return $this
     */
    public function setCarriere($carriere)
    {
        
        $this->carriere = $carriere;
        return $this;
    }
    
    /**
     * Gets synthese_ris
     * @return \Swagger\Client\Model\SyntheseRIS
     */
    public function getSyntheseRis()
    {
        return $this->synthese_ris;
    }
  
    /**
     * Sets synthese_ris
     * @param \Swagger\Client\Model\SyntheseRIS $synthese_ris si saisie en mode RIS Manuel, d\u00E9crit les droits acquis au dernier 31/12 dans les r\u00E9gimes de retraite
     * @return $this
     */
    public function setSyntheseRis($synthese_ris)
    {
        
        $this->synthese_ris = $synthese_ris;
        return $this;
    }
    
    /**
     * Gets bilans_an_retraite
     * @return \Swagger\Client\Model\BilansAnRetraite
     */
    public function getBilansAnRetraite()
    {
        return $this->bilans_an_retraite;
    }
  
    /**
     * Sets bilans_an_retraite
     * @param \Swagger\Client\Model\BilansAnRetraite $bilans_an_retraite pensions calcul\u00E9es \u00E0 chaque \u00E2ge d\u00E9part possible
     * @return $this
     */
    public function setBilansAnRetraite($bilans_an_retraite)
    {
        
        $this->bilans_an_retraite = $bilans_an_retraite;
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
