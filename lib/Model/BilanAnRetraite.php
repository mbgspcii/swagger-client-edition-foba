<?php
/**
 * BilanAnRetraite
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
 * BilanAnRetraite Class Doc Comment
 *
 * @category    Class
 * @description pensions dans les r\u00E9gimes bases et r\u00E9gimes compl. \u00E0 un \u00E2ge donn\u00E9
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BilanAnRetraite implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'age' => 'int',
        'mois' => 'int',
        'date' => '\DateTime',
        'mt_pension_base_nette' => '\Swagger\Client\Model\Montant',
        'mt_pension_comp_nette' => '\Swagger\Client\Model\Montant',
        'mt_rev_an' => '\Swagger\Client\Model\Montant',
        'mt_ecart' => '\Swagger\Client\Model\Montant',
        'is_selectionne' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'age' => 'age',
        'mois' => 'mois',
        'date' => 'date',
        'mt_pension_base_nette' => 'mtPensionBaseNette',
        'mt_pension_comp_nette' => 'mtPensionCompNette',
        'mt_rev_an' => 'mtRevAn',
        'mt_ecart' => 'mtEcart',
        'is_selectionne' => 'isSelectionne'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'age' => 'setAge',
        'mois' => 'setMois',
        'date' => 'setDate',
        'mt_pension_base_nette' => 'setMtPensionBaseNette',
        'mt_pension_comp_nette' => 'setMtPensionCompNette',
        'mt_rev_an' => 'setMtRevAn',
        'mt_ecart' => 'setMtEcart',
        'is_selectionne' => 'setIsSelectionne'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'age' => 'getAge',
        'mois' => 'getMois',
        'date' => 'getDate',
        'mt_pension_base_nette' => 'getMtPensionBaseNette',
        'mt_pension_comp_nette' => 'getMtPensionCompNette',
        'mt_rev_an' => 'getMtRevAn',
        'mt_ecart' => 'getMtEcart',
        'is_selectionne' => 'getIsSelectionne'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $age \u00E2ge \u00E0 la date de calcul (en ann\u00E9e enti\u00E8re)
      * @var int
      */
    protected $age;
    
    /**
      * $mois lorsque le calcul est hors date anniversaire, nb mois au-del\u00E0 de l'anniversaire
      * @var int
      */
    protected $mois;
    
    /**
      * $date date de calcul des pensions
      * @var \DateTime
      */
    protected $date;
    
    /**
      * $mt_pension_base_nette 
      * @var \Swagger\Client\Model\Montant
      */
    protected $mt_pension_base_nette;
    
    /**
      * $mt_pension_comp_nette 
      * @var \Swagger\Client\Model\Montant
      */
    protected $mt_pension_comp_nette;
    
    /**
      * $mt_rev_an 
      * @var \Swagger\Client\Model\Montant
      */
    protected $mt_rev_an;
    
    /**
      * $mt_ecart 
      * @var \Swagger\Client\Model\Montant
      */
    protected $mt_ecart;
    
    /**
      * $is_selectionne vaut true si correspond \u00E0 \u00E2ge s\u00E9lectionn\u00E9 false sinon
      * @var bool
      */
    protected $is_selectionne;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->age = $data["age"];
            $this->mois = $data["mois"];
            $this->date = $data["date"];
            $this->mt_pension_base_nette = $data["mt_pension_base_nette"];
            $this->mt_pension_comp_nette = $data["mt_pension_comp_nette"];
            $this->mt_rev_an = $data["mt_rev_an"];
            $this->mt_ecart = $data["mt_ecart"];
            $this->is_selectionne = $data["is_selectionne"];
        }
    }
    
    /**
     * Gets age
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }
  
    /**
     * Sets age
     * @param int $age \u00E2ge \u00E0 la date de calcul (en ann\u00E9e enti\u00E8re)
     * @return $this
     */
    public function setAge($age)
    {
        
        $this->age = $age;
        return $this;
    }
    
    /**
     * Gets mois
     * @return int
     */
    public function getMois()
    {
        return $this->mois;
    }
  
    /**
     * Sets mois
     * @param int $mois lorsque le calcul est hors date anniversaire, nb mois au-del\u00E0 de l'anniversaire
     * @return $this
     */
    public function setMois($mois)
    {
        
        $this->mois = $mois;
        return $this;
    }
    
    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
  
    /**
     * Sets date
     * @param \DateTime $date date de calcul des pensions
     * @return $this
     */
    public function setDate($date)
    {
        
        $this->date = $date;
        return $this;
    }
    
    /**
     * Gets mt_pension_base_nette
     * @return \Swagger\Client\Model\Montant
     */
    public function getMtPensionBaseNette()
    {
        return $this->mt_pension_base_nette;
    }
  
    /**
     * Sets mt_pension_base_nette
     * @param \Swagger\Client\Model\Montant $mt_pension_base_nette 
     * @return $this
     */
    public function setMtPensionBaseNette($mt_pension_base_nette)
    {
        
        $this->mt_pension_base_nette = $mt_pension_base_nette;
        return $this;
    }
    
    /**
     * Gets mt_pension_comp_nette
     * @return \Swagger\Client\Model\Montant
     */
    public function getMtPensionCompNette()
    {
        return $this->mt_pension_comp_nette;
    }
  
    /**
     * Sets mt_pension_comp_nette
     * @param \Swagger\Client\Model\Montant $mt_pension_comp_nette 
     * @return $this
     */
    public function setMtPensionCompNette($mt_pension_comp_nette)
    {
        
        $this->mt_pension_comp_nette = $mt_pension_comp_nette;
        return $this;
    }
    
    /**
     * Gets mt_rev_an
     * @return \Swagger\Client\Model\Montant
     */
    public function getMtRevAn()
    {
        return $this->mt_rev_an;
    }
  
    /**
     * Sets mt_rev_an
     * @param \Swagger\Client\Model\Montant $mt_rev_an 
     * @return $this
     */
    public function setMtRevAn($mt_rev_an)
    {
        
        $this->mt_rev_an = $mt_rev_an;
        return $this;
    }
    
    /**
     * Gets mt_ecart
     * @return \Swagger\Client\Model\Montant
     */
    public function getMtEcart()
    {
        return $this->mt_ecart;
    }
  
    /**
     * Sets mt_ecart
     * @param \Swagger\Client\Model\Montant $mt_ecart 
     * @return $this
     */
    public function setMtEcart($mt_ecart)
    {
        
        $this->mt_ecart = $mt_ecart;
        return $this;
    }
    
    /**
     * Gets is_selectionne
     * @return bool
     */
    public function getIsSelectionne()
    {
        return $this->is_selectionne;
    }
  
    /**
     * Sets is_selectionne
     * @param bool $is_selectionne vaut true si correspond \u00E0 \u00E2ge s\u00E9lectionn\u00E9 false sinon
     * @return $this
     */
    public function setIsSelectionne($is_selectionne)
    {
        
        $this->is_selectionne = $is_selectionne;
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