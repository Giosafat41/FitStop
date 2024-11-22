<?php

error_reporting(E_ALL);


    include 'config/autoload.inc.php';
    include 'config/config.inc.php';

    // creazione oggetto responsabile dei Codici dei Comuni
    $utente = new FUtente();

    // selezione dei codici di tutti i comuni della provincia di Pescara
    // $result = $codici->getCodiciDaProvincia("AQ");
    $arrOfEUtenteObjs = $utente->getNomeDaUsername("itslet");

    // inclusione classe di presentazione e creazione relativo oggetto
    $v = new View();

    // passaggio dei risultati all'oggetto di presentazione
    $v->showResults( $arrOfEUtenteObjs );
      
?>

