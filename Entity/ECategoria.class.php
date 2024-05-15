<?php
class ECategoria {

    private $nome;

    public function __construct($_nome){
        $this->nome = $_nome;
    }

    public function getNome (){
        return $this->nome;
    }
    




    public function setNome($nome){
        $this->nome = $nome;
    }



    public function __toString(){
        $print = " Nome: ".$this->getNome()."\n";
        return $print;
    }
}


?>