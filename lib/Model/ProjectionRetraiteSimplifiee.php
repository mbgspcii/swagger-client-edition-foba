<?php
/**
 * ProjectionRetraiteSimplifiee
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
 * ProjectionRetraiteSimplifiee Class Doc Comment
 *
 * @category    Class
 * @description contient la projection de situation financi\u00E8re d&#39;une personne en terme de revenus \u00E0 la retraite
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProjectionRetraiteSimplifiee implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'date_depart_retraite' => '\DateTime',
        'age_depart_retraite' => 'int',
        'revenus_nets_fin_carriere' => '\Swagger\Client\Model\Montant',
        'estimation_retraite_nette' => '\Swagger\Client\Model\Montant',
        'rentes_complementaires' => '\Swagger\Client\Model\Montant',
        'revenus_complementaires' => '\Swagger\Client\Model\Montant'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'date_depart_retraite' => 'dateDepartRetraite',
        'age_depart_retraite' => 'ageDepartRetraite',
        'revenus_nets_fin_carriere' => 'revenusNetsFinCarriere',
        'estimation_retraite_nette' => 'estimationRetraiteNette',
        'rentes_complementaires' => 'rentesComplementaires',
        'revenus_complementaires' => 'revenusComplementaires'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'date_depart_retraite' => 'setDateDepartRetraite',
        'age_depart_retraite' => 'setAgeDepartRetraite',
        'revenus_nets_fin_carriere' => 'setRevenusNetsFinCarriere',
        'estimation_retraite_nette' => 'setEstimationRetraiteNette',
        'rentes_complementaires' => 'setRentesComplementaires',
        'revenus_complementaires' => 'setRevenusComplementaires'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'date_depart_retraite' => 'getDateDepartRetraite',
        'age_depart_retraite' => 'getAgeDepartRetraite',
        'revenus_nets_fin_carriere' => 'getRevenusNetsFinCarriere',
        'estimation_retraite_nette' => 'getEstimationRetraiteNette',
        'rentes_complementaires' => 'getRentesComplementaires',
        'revenus_complementaires' => 'getRevenusComplementaires'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $date_depart_retraite date d\u00E9part \u00E0 la retraite
      * @var \DateTime
      */
    protected $date_depart_retraite;
    
    /**
      * $age_depart_retraite \u00E2ge du souscripteur (en ann\u00E9e enti\u00E8re) \u00E0 la date d\u00E9part retraite
      * @var int
      */
    protected $age_depart_retraite;
    
    /**
      * $revenus_nets_fin_carriere revenus annuels nets \u00E0 dateDepartRetraite pour calcul perte revenus
      * @var \Swagger\Client\Model\Montant
      */
    protected $revenus_nets_fin_carriere;
    
    /**
      * $estimation_retraite_nette retraite annuelle nette (base+compl\u00E9mentaire) \u00E0 dateDepartRetraite
      * @var \Swagger\Client\Model\Montant
      */
    protected $estimation_retraite_nette;
    
    /**
      * $rentes_complementaires montant des rentes annuelles nettes \u00E0 dateDepartRetraite sur des produits d\u00E9j\u00E0 souscrits
      * @var \Swagger\Client\Model\Montant
      */
    protected $rentes_complementaires;
    
    /**
      * $revenus_complementaires montant des autres revenus annuels vers\u00E9s au moment de la retraite
      * @var \Swagger\Client\Model\Montant
      */
    protected $revenus_complementaires;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->date_depart_retraite = $data["date_depart_retraite"];
            $this->age_depart_retraite = $data["age_depart_retraite"];
            $this->revenus_nets_fin_carriere = $data["revenus_nets_fin_carriere"];
            $this->estimation_retraite_nette = $data["estimation_retraite_nette"];
            $this->rentes_complementaires = $data["rentes_complementaires"];
            $this->revenus_complementaires = $data["revenus_complementaires"];
        }
    }
    
    /**
     * Gets date_depart_retraite
     * @return \DateTime
     */
    public function getDateDepartRetraite()
    {
        return $this->date_depart_retraite;
    }
  
    /**
     * Sets date_depart_retraite
     * @param \DateTime $date_depart_retraite date d\u00E9part \u00E0 la retraite
     * @return $this
     */
    public function setDateDepartRetraite($date_depart_retraite)
    {
        
        $this->date_depart_retraite = $date_depart_retraite;
        return $this;
    }
    
    /**
     * Gets age_depart_retraite
     * @return int
     */
    public function getAgeDepartRetraite()
    {
        return $this->age_depart_retraite;
    }
  
    /**
     * Sets age_depart_retraite
     * @param int $age_depart_retraite \u00E2ge du souscripteur (en ann\u00E9e enti\u00E8re) \u00E0 la date d\u00E9part retraite
     * @return $this
     */
    public function setAgeDepartRetraite($age_depart_retraite)
    {
        
        $this->age_depart_retraite = $age_depart_retraite;
        return $this;
    }
    
    /**
     * Gets revenus_nets_fin_carriere
     * @return \Swagger\Client\Model\Montant
     */
    public function getRevenusNetsFinCarriere()
    {
        return $this->revenus_nets_fin_carriere;
    }
  
    /**
     * Sets revenus_nets_fin_carriere
     * @param \Swagger\Client\Model\Montant $revenus_nets_fin_carriere revenus annuels nets \u00E0 dateDepartRetraite pour calcul perte revenus
     * @return $this
     */
    public function setRevenusNetsFinCarriere($revenus_nets_fin_carriere)
    {
        
        $this->revenus_nets_fin_carriere = $revenus_nets_fin_carriere;
        return $this;
    }
    
    /**
     * Gets estimation_retraite_nette
     * @return \Swagger\Client\Model\Montant
     */
    public function getEstimationRetraiteNette()
    {
        return $this->estimation_retraite_nette;
    }
  
    /**
     * Sets estimation_retraite_nette
     * @param \Swagger\Client\Model\Montant $estimation_retraite_nette retraite annuelle nette (base+compl\u00E9mentaire) \u00E0 dateDepartRetraite
     * @return $this
     */
    public function setEstimationRetraiteNette($estimation_retraite_nette)
    {
        
        $this->estimation_retraite_nette = $estimation_retraite_nette;
        return $this;
    }
    
    /**
     * Gets rentes_complementaires
     * @return \Swagger\Client\Model\Montant
     */
    public function getRentesComplementaires()
    {
        return $this->rentes_complementaires;
    }
  
    /**
     * Sets rentes_complementaires
     * @param \Swagger\Client\Model\Montant $rentes_complementaires montant des rentes annuelles nettes \u00E0 dateDepartRetraite sur des produits d\u00E9j\u00E0 souscrits
     * @return $this
     */
    public function setRentesComplementaires($rentes_complementaires)
    {
        
        $this->rentes_complementaires = $rentes_complementaires;
        return $this;
    }
    
    /**
     * Gets revenus_complementaires
     * @return \Swagger\Client\Model\Montant
     */
    public function getRevenusComplementaires()
    {
        return $this->revenus_complementaires;
    }
  
    /**
     * Sets revenus_complementaires
     * @param \Swagger\Client\Model\Montant $revenus_complementaires montant des autres revenus annuels vers\u00E9s au moment de la retraite
     * @return $this
     */
    public function setRevenusComplementaires($revenus_complementaires)
    {
        
        $this->revenus_complementaires = $revenus_complementaires;
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
