<?php
class ECorso {

    private $id;
    private $id_sala;
    private $id_istruttore;
    private $nome;
    private $inizio;
    private $fine;
    private $data;
    private $num_iscritti;
    private $stato;
   

    public function __construct($id, Sala $id_sala, Istruttore $id_istruttore, $nome, $descrizione, $inizio, $fine, $data, $num_iscritti, $stato) {
        $this->id = $id;
        $this->id_sala = $id_sala;
        $this->id_istruttore = $id_istruttore;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->data = $data;
        $this->num_iscritti = $num_iscritti;
        $this->stato = $stato;
    }

    public function getId(){
        return $this->id;
    }
    public function getSala(){
        return $this->id_sala;
    }

    public function getIstruttore(){
        return $this->id_istruttore;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getDescrizione(){
        return $this->descrizione;
    }

    public function getInizio (){
        return $this->inizio;
    }

    public function getFine(){
        return $this->fine;
    }
    
    public function getData(){
        return $this->data;
    }

    public function getNumIscritti(){
        return $this->num_iscritti;
    }

    public function getStato(){
        return $this->stato;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setSala (Sala $id_sala) {
        $this->id_sala = $id_sala;
    }

    public function setIstruttore(Istruttore $id_istruttore){
        $this->id_istruttore = $id_istruttore;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDescrizione($descrizione){
        $this->descrizione = $descrizione;
    }

    public function setInizio($inizio){
        $this->inizio = $inizio;
    }

    public function setFine($fine){
        $this->fine = $fine;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function setNumIscritti($num_iscritti){
        $this->num_iscritti = $num_iscritti;
    }

    public function setStato($stato){
        $this->stato = $stato;
    }

    public function __toString(){
        $print =" Sala: ".$this->getSala()."\n"." Nome: ".$this->getNome()."\n"." Orario: ".$this->getOrario()."\n"." Data: ".$this->getData()."\n"." Numero iscritti: ".$this->getNumIscritti()."\n";
        return $print;
    }
}

?>