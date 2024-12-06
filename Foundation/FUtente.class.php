<?php

require_once __DIR__ . '/../config/config.inc.php';  // Assicurati che il percorso al file di configurazione sia corretto
require_once __DIR__ . '/../Entity/EUtente.class.php';  // O il percorso corretto alla classe EUtente

class FUtente {

    private $_connection;

    public function __construct() {
            
        global $hostname, $user, $pass, $dbname;
        $this->connect($hostname, $user, $pass, $dbname);
        
    }

    private function connect($hostname, $user, $pass, $dbname) {

        try {
            $this->_connection = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
        } catch ( PDOException $e) {
            print $e->getMessage() . "\n";
            exit;
        } 
        return true;
    }

    public function close(){
        $this->_connection = null;
    }

    public function getNomeDaUsername($username) {
        // Usa una query preparata per prevenire SQL Injection
        $query = "SELECT * FROM utente WHERE username = :username";
        
        $stmt = $this->_connection->prepare($query);  // Prepara la query
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);  // Lega il parametro :username al valore della variabile $username
        
        $stmt->execute();  // Esegui la query
        
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);  // Ottieni i risultati
        
        $results = array();
        foreach ($rows as $row) {
            // Qui puoi costruire gli oggetti EUtente come hai fatto prima
            $tmp = new EUtente(
                $row['id'], 
                $row['nome'], 
                $row['cognome'], 
                $row['username'], 
                $row['data_nascita'], 
                $row['indirizzo'], 
                $row['num_tel'], 
                $row['email'], 
                $row['password']
            );
            $results[] = $tmp;  // Aggiungi l'utente alla lista dei risultati
        }
    
        return $results;  // Restituisci i risultati
    }
    
    //aggiungere altre function get per le query

    private function getUtente($query) {
        $stm = $this->_connection->query($query);
        $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    
        $results = array();
        foreach ($rows as $row) {
            // Assicurati di includere anche l'id nel recupero dei dati
            // Passa l'id, tutti gli altri parametri e un valore di default per abbonamento
            $tmp = new EUtente(
                $row['id'],             // id dell'utente
                $row['nome'],           // nome
                $row['cognome'],        // cognome
                $row['username'],       // username
                $row['data_nascita'],   // data_nascita
                $row['indirizzo'],      // indirizzo
                $row['num_tel'],        // numero di telefono
                $row['email'],          // email
                $row['password'],       // password
                null                    // abbonamento, se non esiste passiamo null
            );
            $results[] = $tmp;
        }
        return $results;
    }
    

    // Funzione per hashare la password
    private function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // Funzione per inserire un nuovo utente nel database
    public function inserisciUtente($nome, $cognome, $username, $email, $password) {
        // Hash della password prima di salvarla nel database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Prepara la query per inserire l'utente nel database
        $query = "INSERT INTO utente (nome, cognome, username, email, password) 
                  VALUES (:nome, :cognome, :username, :email, :password)";
    
        $stmt = $this->_connection->prepare($query);
        
        // Bind dei parametri per la query
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cognome', $cognome);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);  // Usa la password hashata
    
        // Esegui la query
        $stmt->execute();
    }
    

    // Metodo per verificare la password dell'utente
    public function verificaPassword($username, $password) {
        // Recupera l'utente dal database
        $utente = $this->getNomeDaUsername($username);
    
        // Se l'utente esiste, verifica la password
        if (count($utente) > 0) {
            $utente = $utente[0]; // Poiché getNomeDaUsername ritorna un array, prendiamo il primo utente
            
            // Verifica la password usando password_verify
            if (password_verify($password, $utente->getPassword())) {
                return $utente; // Restituisci l'utente se la password è corretta
            }
        }
    
        return null; // Restituisci null se la password è errata o l'utente non esiste
    }  
    
}