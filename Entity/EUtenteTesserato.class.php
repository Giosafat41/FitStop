<?php

class EUtenteTesserato {

    private $utente;

    private $abbonamento;

    private $data_inizio;

    private $data_fine;

    public function __construct(Utente $utente, Abbonamento $abbonamento, $data_inizio, $data_fine){

        $this->utente = $utente;
        $this->abbonamento = $abbonamento;
        $this->data_inizio = $data_inizio;  
        $this->data_fine = $data_fine;  
    }

    public function getUtente(){
        return $this->utente;
    }

    public function getAbbonamento(){
        return $this->abbonamento;
    }

    public function getDataInizio(){
        return $this->data_inizio;
    }

    public function getDataFine(){
        return $this->data_fine;
    }

    public function setUtente(Utente $utente){
        $this->utente = $utente;
    }

    public function setAbbonamento(Abbonamento $abbonamento){
        $this->abbonamento = $abbonamento;
    }

    public function setDataInizio($data_inizio){
        $this->data_inizio = $data_inizio;
    }

    public function setDataFine($data_inizio){
        $this->data_fine = $data_inizio;
    }

    public function __toString(){
        $print =" Utente: ".$this->getUtente()."\n"." Abbonamento: ".$this->getAbbonamento()."\n"." Data Inizio: ".$this->getDataInizio()."\n"." Data Fine: ".$this->getDataFine()."\n";
        return $print;
    }
}