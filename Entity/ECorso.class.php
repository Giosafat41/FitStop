<?php
class ECorso {

    private $sala;
    private $nome;
    private $orario;
    private $data;
    private $num_iscritti;
   

    public function __construct(Sala $sala, $nome, $orario, $data, $num_iscritti) {
        $this->sala = $sala;
        $this->nome = $nome;
        $this->orario = $orario;
        $this->data = $data;
        $this->num_iscritti = $num_iscritti;
    }

    public function getSala(){
        return $this->sala;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getOrario (){
        return $this->orario;
    }
    
    public function getData(){
        return $this->data;
    }

    public function getNumIscritti(){
        return $this->num_iscritti;
    }

    public function setSala (Sala $sala) {
        $this->sala
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setOrario($orario){
        $this->orario = $orario;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function setNumIscritti($num_iscritti){
        $this->num_iscritti = $num_iscritti;
    }

    public function __toString(){
        $print =" Sala: ".$this->getSala()."\n"." Nome: ".$this->getNome()."\n"." Orario: ".$this->getOrario()."\n"." Data: ".$this->getData()."\n"." Numero iscritti: ".$this->getNumIscritti()."\n";
        return $print;
    }
}

?>