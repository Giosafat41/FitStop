<?php

class ENotifica{

    private $id;
    private $id_amministratore;
    private $messaggio;
    private $stato;
    private $id_corso;
    private $creata_il;
    private $id_abbonamento;
   

    public function __construct($id, Amministratore $id_amministratore, $messaggio, $stato, Corso $id_corso, $creata_il, Abbonamento $id_abbonamento) {
        $this->id = $id;
        $this->id_amministratore = $id_amministratore;
        $this->messaggio = $messaggio;
        $this->stato = $stato;
        $this->id_corso = $id_corso;
        $this->creata_il = $creata_il;
        $this->id_abbonamento = $id_abbonamento;
    }

    public function getId(){
        return $this->id;
    }

    public function getAmministratore(){
        return $this->id_amministratore;
    }

    public function getMessaggio (){
        return $this->messaggio;
    }

    public function getStato (){
        return $this->stato;
    }
    
    public function getCorso(){
        return $this->id_corso;
    }

    public function getCreataIl(){
        return $this->creata_il;
    }

    public function getAbbonamento(){
        return $this->id_abbonamento;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setAmministratore (Amministratore $id_amministratore) {
        $this->id_amministratore = $id_amministratore;
    }
    
    public function setMessaggio($messaggio){
        $this->messaggio = $messaggio;
    }

    public function setStato($stato){
        $this->stato = $stato;
    }

    public function setCorso(Corso $id_corso){
        $this->id_corso = $id_corso;
    }

    public function setCreataIl($creata_il){
        $this->creata_il = $creata_il;
    }

    public function setAbbonamento(Abbonamento $id_abbonamento){
        $this->id_abbonamento = $id_abbonamento;
    }

}

?>