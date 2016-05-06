<?php
/**
 * Carriere
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
 * Carriere Class Doc Comment
 *
 * @category    Class
 * @description ensemble des p\u00E9riodes d&#39;activite
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Carriere implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'periodes_activite' => '\Swagger\Client\Model\PeriodeActivite[]',
        'service_national' => '\Swagger\Client\Model\ServiceNational'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'periodes_activite' => 'periodesActivite',
        'service_national' => 'serviceNational'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'periodes_activite' => 'setPeriodesActivite',
        'service_national' => 'setServiceNational'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'periodes_activite' => 'getPeriodesActivite',
        'service_national' => 'getServiceNational'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $periodes_activite 
      * @var \Swagger\Client\Model\PeriodeActivite[]
      */
    protected $periodes_activite;
    
    /**
      * $service_national si p\u00E9riode de service national
      * @var \Swagger\Client\Model\ServiceNational
      */
    protected $service_national;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->periodes_activite = $data["periodes_activite"];
            $this->service_national = $data["service_national"];
        }
    }
    
    /**
     * Gets periodes_activite
     * @return \Swagger\Client\Model\PeriodeActivite[]
     */
    public function getPeriodesActivite()
    {
        return $this->periodes_activite;
    }
  
    /**
     * Sets periodes_activite
     * @param \Swagger\Client\Model\PeriodeActivite[] $periodes_activite 
     * @return $this
     */
    public function setPeriodesActivite($periodes_activite)
    {
        
        $this->periodes_activite = $periodes_activite;
        return $this;
    }
    
    /**
     * Gets service_national
     * @return \Swagger\Client\Model\ServiceNational
     */
    public function getServiceNational()
    {
        return $this->service_national;
    }
  
    /**
     * Sets service_national
     * @param \Swagger\Client\Model\ServiceNational $service_national si p\u00E9riode de service national
     * @return $this
     */
    public function setServiceNational($service_national)
    {
        
        $this->service_national = $service_national;
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
