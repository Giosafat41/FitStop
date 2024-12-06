<?php
// Includiamo la configurazione di Smarty
require_once __DIR__ . '/config/smarty_config.php';

// Assegniamo variabili per il template
$smarty->assign('title', 'Benvenuto su FitStop!');
$smarty->assign('description', 'Unisciti alla nostra palestra e inizia il tuo percorso di fitness!');

// Mostriamo il template
$smarty->display('home.tpl');
?>