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
    
}

?>