<?php

require_once __DIR__ . "/Products.php";

class ProductAnimal extends Products{

    protected $brand;
    protected $typeAnimal;

    // Getters and Setters
    
    /* Brand */
    function set_brand($nuovoBrand){
        if(is_null($nuovoBrand)){
            return;
        }
        $this->brand = $nuovoBrand;
    }
    function get_brand(){
        return $this->brand;
    }

    /* Brand */
    function set_typeAnimal($tipoAnimale){
        if(is_null($tipoAnimale)){
            return;
        }
        $this->typeAnimal = $tipoAnimale;
    }
    function get_space(){
        return $this->typeAnimal;
    }


}