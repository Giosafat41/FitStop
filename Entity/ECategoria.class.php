<?php
class ECategoria {

    private $id;
    private $nome;

    public function __construct($id, $nome){
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome (){
        return $this->nome;
    }

    public function setId ($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function __toString(){
        $print = " Id: ".$this->getId()."\n"." Nome: ".$this->getNome()."\n";
        return $print;
    }
}
?>