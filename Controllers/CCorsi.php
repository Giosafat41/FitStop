<?php

class CCorsi{

    public static function propostaCorso($dati_corso){
        
        $newIdCorso = $this->salvaCorso($dati_corso);

        $nomeIstruttore = $this->getNomeIstruttore($dati_corso['id_istruttore']);

        $admId = 1;
        $messaggio = "Il corso 'NomeCorso' è stato proposto da $nomeInteroIstruttore e richiede approvazione.";
        $controlloreAmministratore = new CAmministratore();
        $controlloreAmministratore->creaNotifica($admId, $idNuovoCorso, $messaggio);
    }

    private function salvaCorso($dati_corso){

        return $db->lastInsertId(); //id auto-incrementato (funzione di PHP Data Objects)

    }

    private function getNomeIstruttore($id_istruttore){

        $db = new PDO("mysql:host=localhost;dbname=fitstop");
        $stmt = $db->prepare("SELECT nome, cognome FROM istruttore WHERE id = :id");
        $stmt->execute(['id' => $idIstruttore]);

        $istruttore = $stmt->fetch(PDO::FETCH_ASSOC);
        $nomeInteroIstruttore = $istruttore['nome']. '' .$istruttore['cognome']; //combina nome e cognome dell'istruttore
        return $nomeInteroIstruttore;

    }

    
}
?>