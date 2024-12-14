<?php

class FCorso extends FEntity {

    // Metodo per salvare un corso nel database
    public function store(ECorso $corso) {
        try {
            $query = "INSERT INTO " . ECorso::getTable() . " (nome, descrizione, prezzo, id_categoria, id_istruttore) 
                      VALUES " . ECorso::getValues();
            $stmt = $this->_db->prepare($query);
            ECorso::bind($stmt, $corso);
            $stmt->execute();
            return $this->_db->lastInsertId();
        } catch (PDOException $e) {
            echo "Errore durante l'inserimento: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare un corso dal database per id
    public function load($id) {
        try {
            $query = "SELECT * FROM " . ECorso::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new ECorso(
                    $row['id'],
                    $row['nome'],
                    $row['descrizione'],
                    $row['prezzo'],
                    $row['id_categoria'],
                    $row['id_istruttore']
                );
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Errore durante il recupero: " . $e->getMessage();
            return null;
        }
    }

    // Metodo per caricare tutti i corsi
    public function loadAll() {
        try {
            $query = "SELECT * FROM " . ECorso::getTable();
            $stmt = $this->_db->prepare($query);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $corsi = [];

            foreach ($rows as $row) {
                $corsi[] = new ECorso(
                    $row['id'],
                    $row['nome'],
                    $row['descrizione'],
                    $row['prezzo'],
                    $row['id_categoria'],
                    $row['id_istruttore']
                );
            }
            return $corsi;
        } catch (PDOException $e) {
            echo "Errore durante il recupero dei corsi: " . $e->getMessage();
            return [];
        }
    }

    // Metodo per aggiornare un corso nel database
    public function update(ECorso $corso) {
        try {
            $query = "UPDATE " . ECorso::getTable() . " 
                      SET nome = :nome, descrizione = :descrizione, prezzo = :prezzo, 
                          id_categoria = :id_categoria, id_istruttore = :id_istruttore 
                      WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':nome', $corso->getNome());
            $stmt->bindParam(':descrizione', $corso->getDescrizione());
            $stmt->bindParam(':prezzo', $corso->getPrezzo());
            $stmt->bindParam(':id_categoria', $corso->getIdCategoria());
            $stmt->bindParam(':id_istruttore', $corso->getIdIstruttore());
            $stmt->bindParam(':id', $corso->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'aggiornamento: " . $e->getMessage();
        }
    }

    // Metodo per eliminare un corso dal database
    public function delete($id) {
        try {
            $query = "DELETE FROM " . ECorso::getTable() . " WHERE id = :id";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errore durante l'eliminazione: " . $e->getMessage();
        }
    }
}
