<?php

require_once __DIR__ . "/User.php";

trait City {

    protected $city;

    public function set_city($value){
        $this->city = $value;
    }

    public function get_city(){
        return $this->city;
    }

}

class CityUser extends User{

    use City;

    public function __construct($_nome, $_cognome, $_email, $_typeUser, $_city)
        {
            parent::__construct($_nome, $_cognome, $_email, $_typeUser);
            $this -> set_city($_city);
        }

}

?>