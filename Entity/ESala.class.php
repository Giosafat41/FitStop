<?php

class ESala{

    private $id;
    private $nome;
    private $capienza;
    private $piano;

    public function __construct($id, $nome, $capienza, $piano) {
        $this->id = $id;
        $this->nome = $nome;
        $this->capienza = $capienza;
        $this->piano = $piano;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCapienza() {
        return $this->capienza;
    }

    public function getPiano() {
        return $this->piano;
    }

    public function ssetId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCapienza($capienza){
        $this->capienza = $capienza;
    }

    public function setPiano($piano){
        $this->piano = $piano;
    }

    public function __toString(){
        $print =" Nome: ".$this->getNome()."\n"." Capienza: ".$this->getCapienza()."\n"." Piano: ".$this->getPiano()."\n";
        return $print;
    }
}
?>