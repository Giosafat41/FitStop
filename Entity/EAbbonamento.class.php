<?php

class EAbbonamento {

    private $id;
    private $tipologia;
    private $inizio;
    private $fine;
    private $costo;
    private $id_utente;
    private $stato;

    public function __construct($id, $tipologia, $inizio, $fine, $costo, Utente $id_utente, $stato){
        $this->id = $id;
        $this->tipologia = $tipologia;
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->costo = $costo;
        $this->id_utente = $id_utente;
        $this->stato = $stato;
    }

    //getter

    public function getId (){
        return $this->id;
    }

    public function getTipologia (){
        return $this->tipologia;
    }

    public function getInizio (){
        return $this->inizio;
    }

    public function getFine(){
        return $this->fine;
    }

    public function getCosto (){
        return $this->costo;
    }

    public function getIdUtente (){
        return $this->id_utente;
    }

    public function getStato(){
        return $this->stato;
    }

    //setter

    public function setId($id) {
        $this->id=$id;
    }
    
    public function setTipologia($tipologia) {
        $this->tipologia=$tipologia;
    }

    public function setInizio($inizio){
        $this->inizio=$inizio;
    }

    public function setFine($fine){
        $this->fine = $fine;
    }

    public function setCosto ($costo) {
        $this->costo=$costo;
    }

    public function setIdUtente(Utente $id_utente){
        $this->id_utente=$id_utente;
    }

    public function setStato($stato){
        $this->stato = $stato;
    }
}
?>