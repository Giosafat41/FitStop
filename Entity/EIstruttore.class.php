<?php

class EIstruttore{

   private $utenti = [];

   public function addEUtente($id, $nome, $username, $data_nascita, $indirizzo, $num_tel, $email, $password){
        $utente = new Utente($id, $nome, $username, $_data_nascita, $_indirizzo, $num_tel, $email, $password);
        $this->utenti[] = $utente;
    }

    public function getUtenti(){
        return $this->utenti;
    }

    public function findUtenteConId(){
        foreach ($this->utenti as $utente){
            if($utente->getId() == $id){
                return $utente;
            }
        }
        return null;
    }
}
?>