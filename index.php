<?php
require_once __DIR__ . '/View/vendor/autoload.php'; // Carica Smarty

// Inizializza Smarty
$smarty = new Smarty\Smarty;

// Configura la directory dei template
$smarty->setTemplateDir(__DIR__ . '/View/templates/'); // Percorso assoluto alla cartella templates
$smarty->setCompileDir(__DIR__ . '/View/templates_c/'); // Cartella per i file compilati
$smarty->setCacheDir(__DIR__ . '/View/cache/');         // Cartella per la cache
$smarty->setConfigDir(__DIR__ . '/View/configs/');      // Cartella per i file di configurazione (opzionale)

// Assegna variabili dinamiche (esempio)
$smarty->assign('nome_palestra', 'FitStop');
$smarty->assign('descrizione_palestra', 'La palestra numero uno per allenarti e raggiungere i tuoi obiettivi.');

// Mostra il template
$smarty->display('homepage.tpl');
?>
