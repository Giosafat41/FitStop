<?php

class EAbbonamento {

    private $tipologia;
    private $costo;

    public function __construct($_tipologia, $_costo){
        $this->tipologia = $_tipologia;
        $this->costo = $_costo;
    }

    public function getTipologia (){
        return $this->tipologia;
    }

    public function getCosto (){
        return $this->costo;
    }
    






    public function setTipologia($tipologia) {
        $this->tipologia=$tipologia;
    }

    public function setCosto ($costo) {
        $this->costo=$costo;
    }

    public function __toString(){
        $print =" Tipologia: ".$this->getTipologia()."\n"." Costo: ".$this->getCosto()."\n";
        return $print;
    }

    
}

?>