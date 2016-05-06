<?php
/**
 * PeriodeActivite
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
 * PeriodeActivite Class Doc Comment
 *
 * @category    Class
 * @description Une p\u00E9riode d&#39;activit\u00E9
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PeriodeActivite implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'libelle_csp' => 'string',
        'date_debut_periode_activite' => '\DateTime',
        'date_fin_periode_activite' => '\DateTime',
        'is_actuelle' => 'bool',
        'revenu_debut_periode_activite' => '\Swagger\Client\Model\Montant',
        'revenu_fin_periode_activite' => '\Swagger\Client\Model\Montant'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'libelle_csp' => 'libelleCSP',
        'date_debut_periode_activite' => 'dateDebutPeriodeActivite',
        'date_fin_periode_activite' => 'dateFinPeriodeActivite',
        'is_actuelle' => 'isActuelle',
        'revenu_debut_periode_activite' => 'revenuDebutPeriodeActivite',
        'revenu_fin_periode_activite' => 'revenuFinPeriodeActivite'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'libelle_csp' => 'setLibelleCsp',
        'date_debut_periode_activite' => 'setDateDebutPeriodeActivite',
        'date_fin_periode_activite' => 'setDateFinPeriodeActivite',
        'is_actuelle' => 'setIsActuelle',
        'revenu_debut_periode_activite' => 'setRevenuDebutPeriodeActivite',
        'revenu_fin_periode_activite' => 'setRevenuFinPeriodeActivite'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'libelle_csp' => 'getLibelleCsp',
        'date_debut_periode_activite' => 'getDateDebutPeriodeActivite',
        'date_fin_periode_activite' => 'getDateFinPeriodeActivite',
        'is_actuelle' => 'getIsActuelle',
        'revenu_debut_periode_activite' => 'getRevenuDebutPeriodeActivite',
        'revenu_fin_periode_activite' => 'getRevenuFinPeriodeActivite'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $libelle_csp libell\u00E9 de la profession
      * @var string
      */
    protected $libelle_csp;
    
    /**
      * $date_debut_periode_activite date d\u00E9but de la p\u00E9riode
      * @var \DateTime
      */
    protected $date_debut_periode_activite;
    
    /**
      * $date_fin_periode_activite date fin de la p\u00E9riode, vide si p\u00E9riode actuelle
      * @var \DateTime
      */
    protected $date_fin_periode_activite;
    
    /**
      * $is_actuelle vaut true si p\u00E9riode en cours(ou actuelle), false sinon
      * @var bool
      */
    protected $is_actuelle;
    
    /**
      * $revenu_debut_periode_activite 
      * @var \Swagger\Client\Model\Montant
      */
    protected $revenu_debut_periode_activite;
    
    /**
      * $revenu_fin_periode_activite 
      * @var \Swagger\Client\Model\Montant
      */
    protected $revenu_fin_periode_activite;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->libelle_csp = $data["libelle_csp"];
            $this->date_debut_periode_activite = $data["date_debut_periode_activite"];
            $this->date_fin_periode_activite = $data["date_fin_periode_activite"];
            $this->is_actuelle = $data["is_actuelle"];
            $this->revenu_debut_periode_activite = $data["revenu_debut_periode_activite"];
            $this->revenu_fin_periode_activite = $data["revenu_fin_periode_activite"];
        }
    }
    
    /**
     * Gets libelle_csp
     * @return string
     */
    public function getLibelleCsp()
    {
        return $this->libelle_csp;
    }
  
    /**
     * Sets libelle_csp
     * @param string $libelle_csp libell\u00E9 de la profession
     * @return $this
     */
    public function setLibelleCsp($libelle_csp)
    {
        
        $this->libelle_csp = $libelle_csp;
        return $this;
    }
    
    /**
     * Gets date_debut_periode_activite
     * @return \DateTime
     */
    public function getDateDebutPeriodeActivite()
    {
        return $this->date_debut_periode_activite;
    }
  
    /**
     * Sets date_debut_periode_activite
     * @param \DateTime $date_debut_periode_activite date d\u00E9but de la p\u00E9riode
     * @return $this
     */
    public function setDateDebutPeriodeActivite($date_debut_periode_activite)
    {
        
        $this->date_debut_periode_activite = $date_debut_periode_activite;
        return $this;
    }
    
    /**
     * Gets date_fin_periode_activite
     * @return \DateTime
     */
    public function getDateFinPeriodeActivite()
    {
        return $this->date_fin_periode_activite;
    }
  
    /**
     * Sets date_fin_periode_activite
     * @param \DateTime $date_fin_periode_activite date fin de la p\u00E9riode, vide si p\u00E9riode actuelle
     * @return $this
     */
    public function setDateFinPeriodeActivite($date_fin_periode_activite)
    {
        
        $this->date_fin_periode_activite = $date_fin_periode_activite;
        return $this;
    }
    
    /**
     * Gets is_actuelle
     * @return bool
     */
    public function getIsActuelle()
    {
        return $this->is_actuelle;
    }
  
    /**
     * Sets is_actuelle
     * @param bool $is_actuelle vaut true si p\u00E9riode en cours(ou actuelle), false sinon
     * @return $this
     */
    public function setIsActuelle($is_actuelle)
    {
        
        $this->is_actuelle = $is_actuelle;
        return $this;
    }
    
    /**
     * Gets revenu_debut_periode_activite
     * @return \Swagger\Client\Model\Montant
     */
    public function getRevenuDebutPeriodeActivite()
    {
        return $this->revenu_debut_periode_activite;
    }
  
    /**
     * Sets revenu_debut_periode_activite
     * @param \Swagger\Client\Model\Montant $revenu_debut_periode_activite 
     * @return $this
     */
    public function setRevenuDebutPeriodeActivite($revenu_debut_periode_activite)
    {
        
        $this->revenu_debut_periode_activite = $revenu_debut_periode_activite;
        return $this;
    }
    
    /**
     * Gets revenu_fin_periode_activite
     * @return \Swagger\Client\Model\Montant
     */
    public function getRevenuFinPeriodeActivite()
    {
        return $this->revenu_fin_periode_activite;
    }
  
    /**
     * Sets revenu_fin_periode_activite
     * @param \Swagger\Client\Model\Montant $revenu_fin_periode_activite 
     * @return $this
     */
    public function setRevenuFinPeriodeActivite($revenu_fin_periode_activite)
    {
        
        $this->revenu_fin_periode_activite = $revenu_fin_periode_activite;
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
