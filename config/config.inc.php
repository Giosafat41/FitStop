<?php

// Configurazione per la connessione al database
$hostname = 'localhost';  // Indirizzo del database (di solito 'localhost' o '127.0.0.1')
$user = 'root';           // Nome utente del database
$pass = '';               // Password (di solito vuota per MySQL in locale)
$dbname = 'fitstop';      // Nome del database

// variabile che contiene il path assoluto della cartella smarty
$base_dir_smarty = __DIR__ . '/../View/smarty';

// variabile che definisce la dimensione massima di un immagine
$max_image_size = 5242880;  //5MB

// scadenza cookie di sessione
$cookie_exp_time = 2592000; //30 giorni in secondi
?>
