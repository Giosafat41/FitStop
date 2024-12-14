<?php

class FCategoria extends FEntity {

    // Metodo per salvare una categoria nel database
    public function store(ECategoria $categoria) {
        try {
            $query = "INSERT INTO " . ECategoria::getTable() . " (nome) 
                      VALUES " . ECategoria::getValues();
            $stmt = $this->_db->prepare($query);
            ECategoria::bind($stmt, $categoria);
            $stmt->execute();
            return $this->_db->lastInsertId();
        } catch (PDOException $e) {
            echo "Errore durante l'inserimento: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare una categoria dal database per id
    public function load($id) {
        try {
            $query = "SELECT * FROM " . ECategoria::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new ECategoria($row['id'], $row['nome']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Errore durante il recupero: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare tutte le categorie
    public function loadAll() {
        try {
            $query = "SELECT * FROM " . ECategoria::getTable();
            $stmt = $this->_db->prepare($query);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $categorie = [];

            foreach ($rows as $row) {
                $categorie[] = new ECategoria($row['id'], $row['nome']);
            }
            return $categorie;
        } catch (PDOException $e) {
            echo "Errore durante il recupero delle categorie: " . $e->getMessage();
            return [];
        }
    }

    // Metodo per aggiornare una categoria nel database
    public function update(ECategoria $categoria) {
        try {
            $query = "UPDATE " . ECategoria::getTable() . " SET nome = :nome WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':nome', $categoria->getNome());
            $stmt->bindParam(':id', $categoria->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'aggiornamento: " . $e->getMessage();
        }
    }

    // Metodo per eliminare una categoria dal database
    public function delete($id) {
        try {
            $query = "DELETE FROM " . ECategoria::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'eliminazione: " . $e->getMessage();
        }
    }
}
