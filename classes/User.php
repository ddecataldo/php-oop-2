<?php

    class User{

        protected $nome;
        protected $cognome;
        protected $email;
        protected $typeUser;

        // Costruttore
        public function __construct($_nome, $_cognome, $_email, $_typeUser){
            $this -> set_nome($_nome);
            $this -> set_cognome($_cognome);
            $this -> set_email($_email);
            $this -> set_typeUser($_typeUser);
        }

        // Getters and Setters
        /* Nome */
        function set_nome($nuovoNome){
            if(is_null($nuovoNome)){
                return;
            }
            $this->nome = $nuovoNome;
        }
        function get_nome(){
            return $this->nome;
        }

        /* Cognome */
        function set_cognome($newCognome){
            if(is_null($newCognome)){
                return;
            }
            $this->cognome = $newCognome;
        }
        function get_cognome(){
            return $this->cognome;
        }

        /* Email */
        function set_email($newEmail){
            if(is_null($newEmail)){
                return;
            }
            $this->email = $newEmail;
        }
        function get_email(){
            return $this->email;
        }

        /* Tipo Utente */
        function set_typeUser($newTypeUser){
            if(is_null($newTypeUser)){
                return;
            }
            $this->typeUser = $newTypeUser;
        }
        function get_typeUser(){
            return $this->typeUser;
        }

        // Metodi

    }

?>