<?php

require_once __DIR__ . "/User.php";

class UserPrime extends User{

    protected $sconto = 0;

    // Costruttore
    public function __construct($_nome, $_cognome, $_email, $_typeUser, $_sconto)
    {
        parent::__construct($_nome, $_cognome, $_email, $_typeUser);
        $this -> set_sconto($_sconto);
        $this -> assegnasconto($_typeUser);
    } 

    // Getters and Setters

    function set_sconto($scontoPrime){
        if(!is_numeric($scontoPrime)){
            return;
        }
        $this->sconto = $scontoPrime;
    }
    function get_sconto(){
        return $this->sconto;
    }

    // Metodo
    public function assegnaSconto($roleUser){
        if($roleUser === "Premium"){
            $this -> sconto="30";
        }
    }
}

?>