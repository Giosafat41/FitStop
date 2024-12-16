<?php

class CNotifiche{

    public function getNotifiche($admId){

        $db = new PDO("mysql:host=localhost;dbname=fitstop");
        $stmt = $db->prepare("
            SELECT * FROM notifica
            WHERE id_amministratore = :id_amministratore AND stato = 'pending'
            ORDER BY creata_il DESC
            ");
        $stmt->execute(['id_amministratore' => $admId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $admId = 1; // ID dell'amministratore loggato
        echo json_encode(getNotifiche($admId));
    }



    function segnaNotificheComeLette($id_notifica) {
        $db = new PDO("mysql:host=localhost;dbname=fitstop");
        $stmt = $db->prepare("
            UPDATE notifica SET status = 'read' WHERE id = :id
            ");
        $stmt->execute(['id' => $idNotifica]);
    }
}

?>