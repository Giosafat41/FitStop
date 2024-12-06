<?php
require_once __DIR__ . '/Foundation/FUtente.class.php';
require_once __DIR__ . '/config/smarty_config.php';  // Includi Smarty

// Verifica che il modulo sia stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Raccogli i dati del form
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];

    // Verifica se la password e la conferma sono uguali
    if ($password !== $conf_password) {
        $registration_error = "Le password non corrispondono.";
    } else {
        // Crea un oggetto FUtente per l'inserimento nel DB
        $utenteClass = new FUtente();
        $utenteClass->inserisciUtente($nome, $cognome, $username, $email, $password);

        // Redirect dopo registrazione (oppure mostra un messaggio di successo)
        header('Location: login.php');  // Reindirizza alla pagina di login
        exit();
    }
}

// Crea una nuova istanza di Smarty
$smarty = new Smarty();

// Passa eventuali errori alla view
$smarty->assign('registration_error', isset($registration_error) ? $registration_error : '');

// Mostra il template della registrazione
//$smarty->display('register.tpl');
$smarty->display('C:/xampp/htdocs/FitStop/View/smarty/templates/register.tpl');