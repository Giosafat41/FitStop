<?php

class EProdotto{
    private $id;
    private $categoria;
    private $nome;
    private $prezzo;
    private $descrizione;
    private $taglia;
    private $colore;

    public function __construct($id, $categoria, $nome, $prezzo, $descrizione, $taglia, $colore){
        $this->id = $id;
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->taglia = $taglia;
        $this->colore = $colore;
    }

    public function getId(){
        return $this->id;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getDescrizione(){
        return $this->descrizione;
    }

    public function getTaglia(){
        return $this->taglia;
    }

    public function getColore(){
        return $this->colore;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setCategoria(Categoria $categoria){
        $this->categoria = $categoria;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }

    public function setDescrizione($descrizione){
        $this->descrizione = $descrizione;
    }

    public function setTaglia($taglia){
        $this->taglia = $taglia;
    }

    public function setColore($colore){
        $this->colore = $colore;
    }

    public function __toString() {
        $print =" Id: ".$this->getId()."\n"." Categoria: ".$this->getCategoria()."\n"." Nome: ".$this->getNome()."\n"." Prezzo: ".$this->getPrezzo()."\n"." Descrizione: ".$this->getDescrizione()."\n"." Taglia: ".$this->getTaglia()."\n"." Colore: ".$this->getColore()."\n";
        return $print;
    }
}
?>