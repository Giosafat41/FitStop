<?php

class FAmministratore extends FEntity {

    // Metodo per salvare un amministratore nel database
    public function store(EAmministratore $amministratore) {
        try {
            $query = "INSERT INTO " . EAmministratore::getTable() . " (nome, cognome, username, email, password) 
                      VALUES " . EAmministratore::getValues();
            $stmt = $this->_db->prepare($query);
            EAmministratore::bind($stmt, $amministratore);
            $stmt->execute();
            return $this->_db->lastInsertId();
        } catch (PDOException $e) {
            echo "Errore durante l'inserimento: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare un amministratore dal database per id
    public function load($id) {
        try {
            $query = "SELECT * FROM " . EAmministratore::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new EAmministratore($row['id'], $row['nome'], $row['cognome'], $row['username'], $row['email'], $row['password']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Errore durante il recupero: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare tutti gli amministratori
    public function loadAll() {
        try {
            $query = "SELECT * FROM " . EAmministratore::getTable();
            $stmt = $this->_db->prepare($query);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $amministratori = [];

            foreach ($rows as $row) {
                $amministratori[] = new EAmministratore($row['id'], $row['nome'], $row['cognome'], $row['username'], $row['email'], $row['password']);
            }
            return $amministratori;
        } catch (PDOException $e) {
            echo "Errore durante il recupero degli amministratori: " . $e->getMessage();
            return [];
        }
    }

    // Metodo per aggiornare un amministratore nel database
    public function update(EAmministratore $amministratore) {
        try {
            $query = "UPDATE " . EAmministratore::getTable() . " SET nome = :nome, cognome = :cognome, 
                      username = :username, email = :email, password = :password WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':nome', $amministratore->getNome());
            $stmt->bindParam(':cognome', $amministratore->getCognome());
            $stmt->bindParam(':username', $amministratore->getUsername());
            $stmt->bindParam(':email', $amministratore->getEmail());
            $stmt->bindParam(':password', $amministratore->getPassword());
            $stmt->bindParam(':id', $amministratore->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'aggiornamento: " . $e->getMessage();
        }
    }

    // Metodo per eliminare un amministratore dal database
    public function delete($id) {
        try {
            $query = "DELETE FROM " . EAmministratore::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'eliminazione: " . $e->getMessage();
        }
    }
}