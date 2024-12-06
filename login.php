<?php
require_once __DIR__ . '/Foundation/FUtente.class.php';  // Include la classe FUtente
require_once __DIR__ . '/config/smarty_config.php';      // Includi la configurazione di Smarty

// Verifica se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Raccogli i dati dal form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Crea un oggetto FUtente per la verifica delle credenziali
    // Recupera i dati dell'utente
    $utenteClass = new FUtente();

    // Verifica se la password è corretta
    $utente = $utenteClass->verificaPassword($username, $password);

    var_dump($utente);
    
    if ($utente !== null) {
        // Login riuscito
        // Redirigi o esegui altre operazioni (ad esempio, inizializzare la sessione)
    } else {
        // Login fallito
        $login_error = "Nome utente o password errati.";
    }

}

// Crea un'istanza di Smarty
$smarty = new Smarty();

// Assegna l'errore del login, se presente
$smarty->assign('login_error', isset($login_error) ? $login_error : '');

// Mostra il template di login
//$smarty->display('login.tpl');
$smarty->display('C:/xampp/htdocs/FitStop/View/smarty/templates/login.tpl');
