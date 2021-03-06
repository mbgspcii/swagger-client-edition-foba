<?php
/**
 * CumulRegime
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
 * CumulRegime Class Doc Comment
 *
 * @category    Class
 * @description trimestres et/ou points acquis dans un r\u00E9gime
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CumulRegime implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'libelle_regime' => 'string',
        'is_regime_base' => 'bool',
        'cumul_trimestres_regime' => 'int',
        'cumul_points_regime' => 'float',
        'annne_cumul' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'libelle_regime' => 'libelleRegime',
        'is_regime_base' => 'isRegimeBase',
        'cumul_trimestres_regime' => 'cumulTrimestresRegime',
        'cumul_points_regime' => 'cumulPointsRegime',
        'annne_cumul' => 'annneCumul'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'libelle_regime' => 'setLibelleRegime',
        'is_regime_base' => 'setIsRegimeBase',
        'cumul_trimestres_regime' => 'setCumulTrimestresRegime',
        'cumul_points_regime' => 'setCumulPointsRegime',
        'annne_cumul' => 'setAnnneCumul'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'libelle_regime' => 'getLibelleRegime',
        'is_regime_base' => 'getIsRegimeBase',
        'cumul_trimestres_regime' => 'getCumulTrimestresRegime',
        'cumul_points_regime' => 'getCumulPointsRegime',
        'annne_cumul' => 'getAnnneCumul'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $libelle_regime libell\u00E9 du r\u00E9gime
      * @var string
      */
    protected $libelle_regime;
    
    /**
      * $is_regime_base vaut true si Regime de base, false sinon
      * @var bool
      */
    protected $is_regime_base;
    
    /**
      * $cumul_trimestres_regime nombre de trimestres acquis dans le r\u00E9gime au 31/12 de l'ann\u00E9e de cumul
      * @var int
      */
    protected $cumul_trimestres_regime;
    
    /**
      * $cumul_points_regime nombre de points acquis dans le r\u00E9gime au 31/12 de l'ann\u00E9e de cumul
      * @var float
      */
    protected $cumul_points_regime;
    
    /**
      * $annne_cumul ann\u00E9e du cumul de trimestres et/ou points dans le r\u00E9gime
      * @var int
      */
    protected $annne_cumul;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->libelle_regime = $data["libelle_regime"];
            $this->is_regime_base = $data["is_regime_base"];
            $this->cumul_trimestres_regime = $data["cumul_trimestres_regime"];
            $this->cumul_points_regime = $data["cumul_points_regime"];
            $this->annne_cumul = $data["annne_cumul"];
        }
    }
    
    /**
     * Gets libelle_regime
     * @return string
     */
    public function getLibelleRegime()
    {
        return $this->libelle_regime;
    }
  
    /**
     * Sets libelle_regime
     * @param string $libelle_regime libell\u00E9 du r\u00E9gime
     * @return $this
     */
    public function setLibelleRegime($libelle_regime)
    {
        
        $this->libelle_regime = $libelle_regime;
        return $this;
    }
    
    /**
     * Gets is_regime_base
     * @return bool
     */
    public function getIsRegimeBase()
    {
        return $this->is_regime_base;
    }
  
    /**
     * Sets is_regime_base
     * @param bool $is_regime_base vaut true si Regime de base, false sinon
     * @return $this
     */
    public function setIsRegimeBase($is_regime_base)
    {
        
        $this->is_regime_base = $is_regime_base;
        return $this;
    }
    
    /**
     * Gets cumul_trimestres_regime
     * @return int
     */
    public function getCumulTrimestresRegime()
    {
        return $this->cumul_trimestres_regime;
    }
  
    /**
     * Sets cumul_trimestres_regime
     * @param int $cumul_trimestres_regime nombre de trimestres acquis dans le r\u00E9gime au 31/12 de l'ann\u00E9e de cumul
     * @return $this
     */
    public function setCumulTrimestresRegime($cumul_trimestres_regime)
    {
        
        $this->cumul_trimestres_regime = $cumul_trimestres_regime;
        return $this;
    }
    
    /**
     * Gets cumul_points_regime
     * @return float
     */
    public function getCumulPointsRegime()
    {
        return $this->cumul_points_regime;
    }
  
    /**
     * Sets cumul_points_regime
     * @param float $cumul_points_regime nombre de points acquis dans le r\u00E9gime au 31/12 de l'ann\u00E9e de cumul
     * @return $this
     */
    public function setCumulPointsRegime($cumul_points_regime)
    {
        
        $this->cumul_points_regime = $cumul_points_regime;
        return $this;
    }
    
    /**
     * Gets annne_cumul
     * @return int
     */
    public function getAnnneCumul()
    {
        return $this->annne_cumul;
    }
  
    /**
     * Sets annne_cumul
     * @param int $annne_cumul ann\u00E9e du cumul de trimestres et/ou points dans le r\u00E9gime
     * @return $this
     */
    public function setAnnneCumul($annne_cumul)
    {
        
        $this->annne_cumul = $annne_cumul;
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
