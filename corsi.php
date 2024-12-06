<?php
require_once __DIR__ . '/config/smarty_config.php';

// Esempio di dati sui corsi, puoi sostituirli con i dati reali del tuo database
$corsi = [
    ['nome' => 'Yoga', 'descrizione' => 'Corso di yoga per principianti'],
    ['nome' => 'Pilates', 'descrizione' => 'Corso di pilates per tutti'],
    ['nome' => 'Zumba', 'descrizione' => 'Corso di Zumba divertente e dinamico']
];

// Assegniamo i corsi al template
$smarty->assign('corsi', $corsi);

// Mostriamo il template
$smarty->display('corsi.tpl');
?>
