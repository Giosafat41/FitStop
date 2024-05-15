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

    public function __construct($_nome, $_username, $_data_nascita, $_indirizzo, $_num_tel, $_email, $_password){
        $this->nome = $_nome;
        $this->username = $_username;
        $this->data_nascita = $_data_nascita;
        $this->indirizzo = $_indirizzo;
        $this->num_tel = $_num_tel;
        $this->email = $_email;
        $this->password = $_password;
    }

    //getter
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

<<<<<<< HEAD
=======
    public function getStato (){
        return $this->stato;
    }

    //setter
>>>>>>> a4eabc0cbcfda8929496a6d1df8157405073f3f4
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

<<<<<<< HEAD
    public function __toString() {
        $print =" Nome: ".$this->getNome()."\n"." Username: ".$this->getUsername()."\n"." Data di nascita: ".$this->getDataNascita()."\n"." Indirizzo: ".$this->getIndirizzo()."\n"." Numero di telefono: ".$this->getNumTel()."\n"." Email: ".$this->getEmail()."\n"." Password: ".$this->getPassword()."\n"." Stato: ".$this->StaToString()."\n";
        return $print;
    }


=======

    public function setStato() {
        $this->stato=true;
    }
    


    public function setHid() {
        $this->stato=0;
    }








    public function login(){

    }
>>>>>>> a4eabc0cbcfda8929496a6d1df8157405073f3f4
}