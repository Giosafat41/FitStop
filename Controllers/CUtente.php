<?php

class CUtente{
    public static function isLogged(){

        $logged = false;

        if (UCookie::isSet('PHPSESSID')){
            if(session_status() == PHP_SESSION_NONE){
                USession::getInstance();
            }
        }

        if(USession::isSetSessionElement('utente')){
            $logged = true;
        }

        if(!$logged){
            header('Location: '); /**DA COMPLETARE CON IL CONTROLLORE DA RICHIAMARE */
            exit;
        } 
        return true; 
    }

    public static function login(){
        if(UCookie::isSet('PHPSESSID')){
            if(session_status() == PHP_SESSION_NONE){ /**PHP_SESSION_NONE variabile globale di php che dice se la sessione è attiva */
                USession::getInstance();
            }
        }
        if(USession::isSetSessionElement('utente')){
            header('Location: ');     /**DA COMPLETARE CON IL CONTROLLORE DA RICHIAMARE */
        }
    }



}