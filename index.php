<?php
class MyHashSet {
    /**
    * @param Array $array
     */
    function __construct(array $array =[]) {
        $this->array = $array;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {
        $this->array[$key] = true;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->array[$key]);
    }

  
    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key) {
        return isset($this->array[$key]);
    }
}
