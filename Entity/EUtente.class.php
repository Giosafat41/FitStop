<?php

class EUtente {

    private $id;
    private $nome;
    private $cognome;
    private $username;
    private $data_nascita;
    private $indirizzo;
    private $num_tel;
    private $email;
    private $password;
    private $abbonamento;

    public function __construct($id, $nome, $cognome, $username, $data_nascita, $indirizzo, $num_tel, $email, $password, Abbonamento $abbonamento = null){
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->username = $username;
        $this->data_nascita = $data_nascita;
        $this->indirizzo = $indirizzo;
        $this->num_tel = $num_tel;
        $this->email = $email;
        $this->password = $password;
        $this->abbonamento = $abbonamento;
    }

    //getter
    public function getId(){
        return $this->id;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getCognome (): mixed{
        return $this->cognome;
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

    public function getAbbonamento (): mixed{
        return $this->abbonamento;
    }

    public function getStato (){
        return $this->stato;
    }

    //setter
    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome=$nome;
    }

    public function setCognome($cognome){
        $this->cognome=$cognome;
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

    public function setAbbonamento(Abbonamento $abbonamento){
        $this->abbonamento=$abbonamento;
    }

    public function __toString() {
        $print =" Nome: ".$this->getNome()."\n"." Username: ".$this->getUsername()."\n"." Data di nascita: ".$this->getDataNascita()."\n"." Indirizzo: ".$this->getIndirizzo()."\n"." Numero di telefono: ".$this->getNumTel()."\n"." Email: ".$this->getEmail()."\n"." Password: ".$this->getPassword()."\n"." Stato: ".$this->StaToString()."\n";
        return $print;
    }
}
?>