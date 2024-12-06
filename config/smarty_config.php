<?php
// Includiamo la classe Smarty
require_once __DIR__ . '/../View/smarty/libs/Smarty.class.php';

// Creiamo una nuova istanza di Smarty
$smarty = new Smarty();

// Configuriamo le directory di Smarty
$smarty->setTemplateDir(__DIR__ . '/../View/smarty/templates/');
$smarty->setCompileDir(__DIR__ . '/../View/smarty/templates_c/');
$smarty->setCacheDir(__DIR__ . '/../View/smarty/cache/');
$smarty->setConfigDir(__DIR__ . '/../View/smarty/configs/');

// Altre impostazioni opzionali di caching
$smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
$smarty->cache_lifetime = 120; // 2 minuti

// Puoi anche aggiungere variabili globali per i template
$smarty->assign('app_name', 'FitStop');
