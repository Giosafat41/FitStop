<?php

class FAbbonamento extends FEntity {

    // Metodo per salvare un abbonamento nel database
    public function store(EAbbonamento $abbonamento) {
        try {
            $query = "INSERT INTO " . EAbbonamento::getTable() . " (nome, durata, prezzo) VALUES " . EAbbonamento::getValues();
            $stmt = $this->_db->prepare($query);
            EAbbonamento::bind($stmt, $abbonamento);
            $stmt->execute();
            return $this->_db->lastInsertId();
        } catch (PDOException $e) {
            echo "Errore durante l'inserimento: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare un abbonamento dal database per id
    public function load($id) {
        try {
            $query = "SELECT * FROM " . EAbbonamento::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new EAbbonamento($row['id'], $row['nome'], $row['durata'], $row['prezzo']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Errore durante il recupero: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare tutti gli abbonamenti
    public function loadAll() {
        try {
            $query = "SELECT * FROM " . EAbbonamento::getTable();
            $stmt = $this->_db->prepare($query);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $abbonamenti = [];

            foreach ($rows as $row) {
                $abbonamenti[] = new EAbbonamento($row['id'], $row['nome'], $row['durata'], $row['prezzo']);
            }
            return $abbonamenti;
        } catch (PDOException $e) {
            echo "Errore durante il recupero degli abbonamenti: " . $e->getMessage();
            return [];
        }
    }

    // Metodo per aggiornare un abbonamento nel database
    public function update(EAbbonamento $abbonamento) {
        try {
            $query = "UPDATE " . EAbbonamento::getTable() . " SET nome = :nome, durata = :durata, prezzo = :prezzo WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':nome', $abbonamento->getNome());
            $stmt->bindParam(':durata', $abbonamento->getDurata());
            $stmt->bindParam(':prezzo', $abbonamento->getPrezzo());
            $stmt->bindParam(':id', $abbonamento->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'aggiornamento: " . $e->getMessage();
        }
    }

    // Metodo per eliminare un abbonamento dal database
    public function delete($id) {
        try {
            $query = "DELETE FROM " . EAbbonamento::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'eliminazione: " . $e->getMessage();
        }
    }
}
