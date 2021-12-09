<?php

require_once __DIR__ . "/Products.php";

class ProductTech extends Products{

    protected $brand;
    protected $space;

    // Costruttore
    public function __construct($_typeProduct, $_nameProduct, $_priceProduct, $_brand, $_space)
    {
        $this -> set_typeProduct($_typeProduct);
        $this -> set_nameProduct($_nameProduct);
        $this -> set_priceProduct($_priceProduct);
        $this -> set_brand($_brand);
        $this -> set_space($_space);
    } 

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
    function set_space($spazio){
        if(is_null($spazio)){
            return;
        }
        $this->space = $spazio;
    }
    function get_space(){
        return $this->space;
    }


}

?>