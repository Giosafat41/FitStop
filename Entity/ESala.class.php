<?php

class ESala{
    private $nome;
    private $capienza;
    private $piano;

    public function __construct($nome, $capienza, $piano) {
        $this->nome = $nome;
        $this->capienza = $capienza;
        $this->piano = $piano;
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