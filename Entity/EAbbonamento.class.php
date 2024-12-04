<?php

class EAbbonamento {

    private $id;
    private $tipologia;
    private $durata;
    private $costo;
    private $id_utente;

    public function __construct($id, $tipologia, $durata, $costo, $id_utente){
        $this->id = $id;
        $this->tipologia = $tipologia;
        $this->durata = $durata;
        $this->costo = $costo;
        $this->id_utente = $id_utente;
    }

    //getter

    public function getId (){
        return $this->id;
    }

    public function getTipologia (){
        return $this->tipologia;
    }

    public function getDurata (){
        return $this->durata;
    }

    public function getCosto (){
        return $this->costo;
    }

    public function getIdUtente (){
        return $this->id_utente;
    }

    //setter

    public function setId($id) {
        $this->id=$id;
    }
    
    public function setTipologia($tipologia) {
        $this->tipologia=$tipologia;
    }

    public function setDurata($durata){
        $this->durata=$durata;
    }

    public function setCosto ($costo) {
        $this->costo=$costo;
    }

    public function setIdUStente($id_utente){
        $this->id_utente=$id_utente;
    }

}
?>