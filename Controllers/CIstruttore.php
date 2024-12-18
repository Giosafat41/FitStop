<?php

class CIstruttore{
    public function creaCorso($datiCorso) {
        // Salva il corso nel database con stato 'pending'
        $db = new PDO("mysql:host=localhost;dbname=fitstop");
        $stmt = $db->prepare("
            INSERT INTO corso (nome, descrizione, id_istruttore, id_sala, stato)
            VALUES (:nome, :descrizione, :id_istruttore, :id_sala, 'pending')
        ");
        $stmt->execute([
            'nome' => $datiCorso['nome'],
            'descrizione' => $datiCorso['descrizione'],
            'id_istruttore' => $datiCorso['id_istruttore'],
            'id_sala' => $datiCorso['id_sala']
        ]);

        // Recupera l'ID del corso appena creato
        $nuovoIdCorso = $db->lastInsertId();

        // Crea una notifica per l'amministratore
        $admId = 1; // Abbiamo impostato un unico amministratore
        $messaggio = "Il corso '{$datiCorso['name']}' è stato proposto e richiede approvazione.";
        $CAmministratore = new CAmministratore();
        $CAmministratore->createNotification($admId, $nuovoIdCorso, $messaggio);

        return $nuovoIdCorso; // Restituisce l'ID del corso creato
    }
}
?>