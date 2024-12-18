<?php
// Includi il file di configurazione e Smarty
require_once __DIR__ . '/View/vendor/autoload.php'; // Carica Smarty

// Crea un'istanza di Smarty
$smarty = new Smarty\Smarty;

// Inizia la sessione
session_start();

// Definisci le credenziali fisse (per esempio, in una vera applicazione queste saranno nel database)
$correct_username = 'utente_example';
$correct_password = 'password_example';

// Variabile per il messaggio di errore
$error_message = '';

// Controlla se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ottieni i dati del modulo
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Verifica se le credenziali sono corrette
    if ($username === $correct_username && $password === $correct_password) {
        // Credenziali corrette: memorizza l'utente nella sessione
        $_SESSION['username'] = $username;
        // Redirigi l'utente alla pagina dashboard (o una pagina protetta)
        header('Location: dashboard.php');
        exit();
    } else {
        // Credenziali errate: imposta il messaggio di errore
        $error_message = 'Nome utente o password errati!';
    }
}

// Assegna il messaggio di errore alla variabile Smarty
$smarty->assign('error_message', $error_message);

// Visualizza il template
$smarty->display('View/templates/login.tpl');
