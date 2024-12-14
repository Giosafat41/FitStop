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
        $query = "SELECT * FROM utente WHERE username = :username";
        $stmt = $this->_connection->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            return new EUtente(
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
        }
        
        return null;
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
        // Controllo se esiste già un utente con lo stesso username o email
        $query = "SELECT COUNT(*) FROM utente WHERE username = :username OR email = :email";
        $stmt = $this->_connection->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $count = $stmt->fetchColumn();
        if ($count > 0) {
            echo "Username o email già in uso.";
            return;
        }

        // Hash della password prima di salvarla nel database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO utente (nome, cognome, username, email, password) 
                VALUES (:nome, :cognome, :username, :email, :password)";
        $stmt = $this->_connection->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cognome', $cognome);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
    }

    

    // Metodo per verificare la password dell'utente
    // Simplificata la verifica della password
    public function verificaPassword($username, $password) {
        $utente = $this->getNomeDaUsername($username);
        if (empty($utente)) {
            return null; // Restituisce null se l'utente non esiste
        }

        $utente = $utente[0]; // L'array contiene un solo elemento
        if (password_verify($password, $utente->getPassword())) {
            return $utente; // Restituisce l'utente se la password è corretta
        }

        return null; // Restituisce null se la password è errata
    }

    
}