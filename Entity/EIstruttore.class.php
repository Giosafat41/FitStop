<?php

class EIstruttore{

   private $id;
   private $nome;
   private $cognome;
   private $username;
   private $data_nascita;
   private $indirizzo;
   private $num_tel;
   private $email;
   private $password;
   private $presentazione;
   private $id_corso;

   public function __construct($id, $nome, $cognome, $username, $data_nascita, $indirizzo, $num_tel, $email, $password, $presentazione, Corso $id_corso){
    $this->id = $id;
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->username = $username;
    $this->data_nascita = $data_nascita;
    $this->indirizzo = $data_nascita;
    $this->num_tel = $num_tel;
    $this->email = $email;
    $this->password = $password;
    $this->presentazione = $presentazione;
    $this->id_corso = $id_corso;
   }

   public function getId(){
    return $this->id;
   }

   public function getNome(){
    return $this->nome;
   }

   public function getCognome(){
    return $this->cognome;
   }

   public function getUsername(){
    return $this->username;
   }

   public function getDataNascita(){
    return $this->data_nascita;
   }

   public function getIndirizzo(){
    return $this->indirizzo;
   }

   public function getNumTel(){
    return $this->num_tel;
   }

   public function getEmail(){
    return $this->email;
   }

   public function getPassword(){
    return $this->password;
   }

   public function getPresentazione(){
    return $this->presentazione;
   }

   public function getCorso(){
    return $this->id_corso;
   }

   public function setId($id) {
    $this->id = $id;
   }

   public function setNome($nome){
    $this->nome = $nome;
   }

   public function setCognome($cognome){
    $this->cognome = $cognome;
   }

   public function setUsername($username){
    $this->username = $username;
   }

   public function setDataNascita($data_nascita){
    $this->data_nascita = $data_nascita;
   }

   public function setIndirizzo($indirizzo){
    $this->indirizzo = $indirizzo;
   }

   public function setNumTel($num_tel){
    $this->num_tel = $num_tel;
   }

   public function setEmail($email){
    $this->email = $email;
   }

   public function setPassword($password){
    $this->password = $password;
   }

   public function setPresentazione($presentazione){
    $this->presentazione = $presentazione;
   }

   public function setCorso(Corso $id_corso){
    $this->id_corso = $id_corso;
   }
   
}
?>