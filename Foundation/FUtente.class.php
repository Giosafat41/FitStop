<?php

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
        $query = "SELECT * FROM utente WHERE username = '$username' ";
        return $this->getUtente($query);
    }
    //aggiungere altre function get per le query

    private function getUtente($query) {
    
        $stm = $this->_connection->query($query);
        $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

        $results = array();
        foreach ($rows as $row) {
            $tmp = new EUtente ($row['nome'], $row['username'], $row['data_nascita'], $row['indirizzo'], $row['num_tel'], $row['email'], $row['password']);
            $results[] = $tmp;
        }
        return $results;
    }
}