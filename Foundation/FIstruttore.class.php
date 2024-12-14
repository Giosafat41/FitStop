<?php

class FIstruttore extends FEntity {

    // Metodo per salvare un istruttore nel database
    public function store(EIstruttore $istruttore) {
        try {
            $query = "INSERT INTO " . EIstruttore::getTable() . " (nome, cognome, email, telefono) 
                      VALUES " . EIstruttore::getValues();
            $stmt = $this->_db->prepare($query);
            EIstruttore::bind($stmt, $istruttore);
            $stmt->execute();
            return $this->_db->lastInsertId();
        } catch (PDOException $e) {
            echo "Errore durante l'inserimento: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare un istruttore dal database per id
    public function load($id) {
        try {
            $query = "SELECT * FROM " . EIstruttore::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new EIstruttore(
                    $row['id'],
                    $row['nome'],
                    $row['cognome'],
                    $row['email'],
                    $row['telefono']
                );
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Errore durante il recupero: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare tutti gli istruttori
    public function loadAll() {
        try {
            $query = "SELECT * FROM " . EIstruttore::getTable();
            $stmt = $this->_db->prepare($query);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $istruttori = [];

            foreach ($rows as $row) {
                $istruttori[] = new EIstruttore(
                    $row['id'],
                    $row['nome'],
                    $row['cognome'],
                    $row['email'],
                    $row['telefono']
                );
            }
            return $istruttori;
        } catch (PDOException $e) {
            echo "Errore durante il recupero degli istruttori: " . $e->getMessage();
            return [];
        }
    }

    // Metodo per aggiornare un istruttore nel database
    public function update(EIstruttore $istruttore) {
        try {
            $query = "UPDATE " . EIstruttore::getTable() . " 
                      SET nome = :nome, cognome = :cognome, email = :email, telefono = :telefono 
                      WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':nome', $istruttore->getNome());
            $stmt->bindParam(':cognome', $istruttore->getCognome());
            $stmt->bindParam(':email', $istruttore->getEmail());
            $stmt->bindParam(':telefono', $istruttore->getTelefono());
            $stmt->bindParam(':id', $istruttore->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'aggiornamento: " . $e->getMessage();
        }
    }

    // Metodo per eliminare un istruttore dal database
    public function delete($id) {
        try {
            $query = "DELETE FROM " . EIstruttore::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'eliminazione: " . $e->getMessage();
        }
    }
}
