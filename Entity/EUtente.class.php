<?php

class EUtente {

    private $id;
    private $nome;
    private $username;
    private $data_nascita;
    private $indirizzo;
    private $num_tel;
    private $email;
    private $password;
    private $stato;

    public function __construct($_nome, $_username, $_data_nascita, $_indirizzo, $_num_tel, $_email, $_password, $stato){
        $this->nome = $_nome;
        $this->username = $_username;
        $this->data_nascita = $_data_nascita;
        $this->indirizzo = $_indirizzo;
        $this->num_tel = $_num_tel;
        $this->email = $_email;
        $this->password = $_password;
        $this->stato = $_stato;
    }

    public function getId(){
        return $this->id;
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

    public function getPassword (){
        return $this->password;
    }

    public function getStato (){
        return $this->stato;
    }






    

    public function setNome($nome) {
        $this->nome=$nome;
    }

    public function setUsername ($username) {
        $this->username=$username;
    }

    public function setDataNascita ($nascita) {
        $this->data_nascita=$nascita;
    }

    public function setIndirizzo ($indirizzo) {
        $this->indirizzo=$indirizzo;
    }

    public function setNumTel ($num_tel) {
        $this->num_tel=$num_tel;
    }

    public function setEmail ($email) {
        $this->email=$email;
    }

    public function setPassword ($password) {
        $this->password=$password;
    }

    public function setStato () {
        $this->stato=true;
    }

    public function setHid() {
        $this->stato=0;
    }








    public function login(){

    }
}