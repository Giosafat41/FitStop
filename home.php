<?php
session_start();

// Controlla se l'utente è loggato, altrimenti reindirizza al login
if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit();
}

require_once __DIR__ . '/config/smarty_config.php';

// Assegna i dati dell'utente al template
$smarty->assign('user_email', $_SESSION['user_email']);
$smarty->assign('role', $_SESSION['role']);
$smarty->assign('title', 'Home - FitStop');
$smarty->assign('description', 'Benvenuto nella pagina principale di FitStop!');

$smarty->display('home.tpl');
?>
