<?php

class ECorsiUtente{

    private $id_utente;
    private $id_corso;

    public function __construct(Utente $id_utente, Corso $id_corso){
        $this->id_utente = $id_utente;
        $this->id_corso = $id_corso;
    }

    public function getUtente(){
        return $this->id_utente;
    }

    public function getCorso(){
        return $this->id_corso;
    }

    public function setUtente(Utente $id_utente){
        $this->id_utente = $id_utente;
    }

    public function setCorso(Corso $id_corso){
        $this->id_corso = $id_corso;
    }
}

?>