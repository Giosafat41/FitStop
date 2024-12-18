<?php

class CAmministratore{

    /**controlla se l'amministratore è loggato utilizzando le sessioni e restituisce un booleano*/

    public static function isLogged(){

        $logged = false;

        if (UCookie::isSet('PHPSESSID')){
            if(session_status() == PHP_SESSION_NONE){
                USession::getInstance();
            }
        }

        if (USession::isSetSessionElement('adm')){

            $logged = true;
        }

        if (!$logged){
            header("Location: /FitStop/Amministratore/Login");
            exit;
        }
        return true;
    }

    public static function login(){
        if(UCookie::isSet('PHPSESSID')){
            if(session_status() == PHP_SESSION_NONE){
                USession::getInstance();
            }
        }

        if (USession::isSetElementoSessione('adm')){
            header('Location: /FitStop/Amministratore/Profilo');
        }
        $view = new VAmministratore();
        $view->showLoginForm();
    }

       
    /**controlla se l'username inserito esiste and controlla la password a esso associata. Se è tutto corretto si crea la sessione e l'amministratore viene reindirizzato alla homepage*/

    public static function controlloLogin(){
        $view = new VAmministratore();
        $username = FDatiPersistenti::getInstance()->verificaUsernameUtente(UHTTPMethods::post('username'));
        if($username){
            $user = FDatiPersistenti::getInstance()->recuperaUsername(UHTTPMethods::post('username'));
            if (verifica_password(UHTTPMethods::post('password'), $utente->getPassword())){
                if(USession::getStatoSessione() == PHP_SESSION_NONE){
                    USession::getInstance();
                    USession::setElementoSessione('adm', $utente->getId());
                    header('Location: /FitStop/Amministratore/Profilo');
                }
            }else{
                $view->erroreLogin();
            }
        }else{
            $view->erroreLogin();
        }
    }

    //**questo metodo fa fare all'amministratore il logout, chiudendo tutti gli elementi di sessione e distruggendo la sessione. Riporta l'amministratore alla pagina di login. */

    public static function logout(){
        USession::getInstance();
        USession::chiudiSessione();
        USession::distruggiSessione();
        header('Location: /FitStop/Amministratore/Login');
    }
    
    //**questo metodo mostra all'amministratore i profili degli utenti*/

    public static function profiloUtente($id){

        if(CAmministratore::isLogged()){
            $admId = USession::getInstance()->getElementoSessione('adm');
            $adm = FDatiPersistenti::getInstance()->recuperaOgg(EAmministratore::getEntity(), $admId);
            $admUsername = $adm->getUsername();

            $utente = FDatiPersistenti::getInstance()->recuperaOgg(EUtente::getEntity(), $id);
            if(!is_array($utente)){
                $nome = FDatiPersistenti::getInstance()->getNome($id);
                $cognome = FDatiPersistenti::getInstance()->getCognome($id);

                $email = FDatiPersistenti::getInstance()->getEmail($id);

                $abbonamento = FDatiPersistenti::getInstance()->getAbbonamento($id);

                $view = new VAmministratore();
                $view->profiloUtente($nome, $cognome, $email, $abbonamento, $admUsername);
            }else{
                header('Location: /FitStop/Amministratore/Profilo');
            }
        }
    }

    //**questo metodo mostra all'amministratore i corsi disponibili*/

    public static function visualizzaCorso($id){

        if(CAmministratore::isLogged()){
            $admId = USession::getInstance()->getElementoSessione(id: 'adm');
            $adm = FDatiPersistenti::getInstance()->recuperaOgg(EAmministratore::getEntity(), $admId);
            $admUsername = $adm->getUsername();

            $corso = FDatiPersistenti::getInstance()->caricaCorsoVisitato($id);
            if(!is_array($corso)){
                $nome = FDatiPersistenti::getInstance()->getNome($id);
                $sala = FDatiPersistenti::getInstance()->getSala($id);
                $orario = FDatiPersistenti::getInstance()->getOrario($id);
                $data = FDatiPersistenti::getInstance()->getData($id);

                $view = new VAmministratore();
                $view->visualizzaCorso($nome, $sala, $orario, $data, $admUsername);
            }else{
                header('Location: /FitStop/Amministratore/Profilo');
            }
        } 
    }

    //**questo metodo mostra all'amministratore i profili degli istruttori*/

    public static function visualizzaIstruttore($id){
        if(CAmministratore::isLogged()){
            $admId = USession::getInstance()->getElementoSessione(id: 'adm');
            $adm = FDatiPersistenti::getInstance()->recuperaOgg(EAmministratore::getEntity(), $admId);
            $admUsername = $adm->getUsername();

            $istruttore = FDatiPersistenti::getInstance()->recuperaOgg(EIstruttore::getEntity(), $id);
            if(!is_array($istruttore)){
                $nome = FDatiPersistenti::getInstance()->getNome($id);
                $cognome = FDatiPersistenti::getInstance()->getCognome($id);

                $email = FDatiPersistenti::getInstance()->getEmail($id);

                $corso = FDatiPersistenti::getInstance()->getCorso($id);

                $view = new VAmministratore();
                $view->profiloUtente($nome, $cognome, $email, $corso, $admUsername);
            }else{
                header('Location: /FitStop/Amministratore/Profilo');
            }
        } 
    }

    /*questo metodo crea una notifica sul profilo dell'amministratore quando un istruttore vuole creare un nuovo corso, 
    tramite la quale l'amministratore può approvarne la creazione */

    public static function creaNotifica($admId, $idCorso, $messaggio) {

        //connessione al db
        $db = new PDO("mysql:host=localhost;dbname=fitstop");
        $stmt = $db->prepare("
            INSERT INTO notifica (id, id_amministratore, messaggio, stato, id_corso, creata_il)
            VALUES (:id, :id_amministratore, :messaggio, 'pending', id_corso, NOW())
        ");

        //eseguo la query
        $stmt->execute([
            'id' => $admId,
            'id_corso' => $id_corso,
            'messaggio' => $messaggio
        ]);
    }

    /*questo metodo permette all'amministratore di approvare o rifiutare la creazione di un nuovo corso
    e di modificare, eventualmente, data e ora*/


    public function gestisciCorso($id_corso, $azione, $nuovi) {
        // Controlla che l'azione sia valida
        if (!in_array($azione, ['approved', 'rejected'])) {
            throw new Exception("Azione non valida");
        }

        // Aggiorna lo stato del corso nel database
        $db = new PDO("mysql:host=localhost;dbname=fitstop");

        if ($azione == 'approved'){
            if ($nuovi && isset($nuovi['data']) && isset($nuovi['inizio']) && isset($nuovi['fine'])){ 
                $stmt = $db->prepare("
                    UPDATE corso 
                    SET stato = :stato, data = :data, inizio = :inizio, fine = :fine
                    WHERE id = :id
                ");
                $stmt->execute([
                    'stato' => $azione,
                    'data' => $nuovi['data'],
                    'inizio' => $nuovi['inizio'],
                    'fine' => $nuovi['fine'],
                    'id' => $id_corso
                ]);
            }else{
                $stmt = $db->prepare("
                    UPDATE corso
                    SET stato = :stato
                    WHERE id = :id
                ");
                $stmt->execute([
                    'stato' => $azione;
                    'id' => $id_corso
                ]);
            }
        }else{
            $stmt = $db->prepare("
            UPDATE corso 
            SET stato = :stato 
            WHERE id = :id
        ");
        $stmt->execute([
            'stato' => $azione,
            'id' => $id_corso
        ]);
        }

        // Aggiorna anche lo stato della notifica collegata
        $stmt = $db->prepare("
            UPDATE notifica 
            SET stato = 'read' 
            WHERE id_corso = :id_corso
        ");
        $stmt->execute(['id_corso' => $id_corso]);

        return "Il corso è stato " . ($azione === 'approved' ? "approvato" : "rifiutato");
    }



    
}