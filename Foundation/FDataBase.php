<?php

if(file_exists('config.inc.php')) require_once 'config.inc.php';

class FDataBase {
    private static $instance;

    private $db;

    //Costruttore privato, accessibile solo da getInstance()
    private function __construct() {

        global $hostname, $user, $pass, $dbname;
        $this->connect($hostname, $user, $pass, $dbname);
    
    }


    //Metodo che restituisce l'unica istanza dell'oggetto
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new FDataBase ();
        }
        return self::$instance;
    }


    //Metodo che permette di salvare informazioni contenute in un oggetto Entity sul database
    public function storeDB ($class, $obj)
    {
        try {
            $this->db->beginTransaction();
            $query = "INSERT INTO " . $class::getTable() . "VALUES" . $class::getValues();
            $stmt = $this->db->prepare($query);
            $class::bind($stmt, $obj);
            $stmt->execute();
            $id = $this->db->commit();
            $this->db->commit();
            $this->closeDbConnection();
            return $id;
        } catch (PDOException $e) {
            echo "Attenzione errore: " . $e->getMessage();
            $this->db->rollBack();
            return null;
        }
    }


    //Metodo utilizzato per la load quando ci si aspetta un solo risultato della query (es. ricerca per id)
    public function loadDB ($class, $field, $id){
        
        try {
            $query = "SELECT * FROM " . $class::getTable() . " WHERE " . $field . "=" . $id . "';";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $num = $stmt->rowCount();
            if ($num == 0) {
                $result = null;
            } elseif ($num == 1) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                $result = array();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                while ($row = $stmt->fetch())
                    $result[] = $row;
            }
            return $result;
        } catch (PDOException $e) {
            echo "Attenzione errore: " . $e->getMessage();
            $this->db->rollBack();
            return null;
        }
    }

    //Metodo che restituisce il numero di righe interessate dalla query
    public function interestedRows ($class, $field){
        
        try {
            $this->db->beginTransaction();
            $query = "SELECT * FROM " . $class::getTable() . " WHERE " . $field . "='" . $id . "';";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $num = $stmt->rowCount();
            $this->clodeDbConnection();
            return $num;
        } catch (PDOException $e) {
            echo "Attenzione errore: " . $e->getMessage();
            $this->db->rollBack();
            return null;
        }
    }

    //Metodo che permette di eliminare un'istanza di una classe nel db
}