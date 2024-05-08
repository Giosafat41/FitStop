<?php

class EUtente {

    private $nome;
    private $username;
    private $data_nascita;
    private $indirizzo;
    private $num_tel;
    private $email;
    private $password;

    public function __construct($_nome, $_username, $_data_nascita, $_indirizzo, $_num_tel, $_email, $_password){
        $this->nome = $_nome;
        $this->username = $_username;
        $this->data_nascita = $_data_nascita;
        $this->indirizzo = $_indirizzo;
        $this->num_tel = $_num_tel;
        $this->email = $_email;
        $this->password = $_password;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getUsername (){
        return $this->username;
    }

    public function getDataNascita (){
        return $this->data_nascita;
    }

    public function getIndirizzo (){
        return $this->indirizzo;
    }
    
    public function getNumTel (){
        return $this->num_tel;
    }

    public function getEmail (){
        return $this->email;
    }

}