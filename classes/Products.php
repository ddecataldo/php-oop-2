<?php

class Products {
    protected $typeProduct;
    protected $nameProduct;
    protected $priceProduct;


    // Getters and Setters
    function set_typeProduct($new_typeProduct){
        if(!is_null($new_typeProduct)){
            return;
        }
        $this->typeProduct = $new_typeProduct;
    }
    function get_typeProduct(){
        return $this->typeProduct;
    }

    function set_nameProduct($new_nameProduct){
        if(!is_null($new_nameProduct)){
            return;
        }
        $this->nameProduct = $new_nameProduct;
    }
    function get_nameProduct(){
        return $this->nameProduct;
    }

    function set_priceProduct($new_priceProduct){
        if(!is_numeric($new_priceProduct)){
            return;
        }
        $this->priceProduct = $new_priceProduct;
    }
    function get_priceProduct(){
        return $this->priceProduct;
    }

}



?>