<?php

require_once(__DIR__ . '/../config/config.inc.php');
class USession{

    private static $instance;

    private function __construct(){
        session_set_cookie_params(COOKIE_EXP_TIME);
        session_start();
    }

    public static function getInstance(){
        if (self::$instance == null) {
            self::$instance = new USession();
        }
        return self::$instance;
    }

    public static function getStatoSessione(){
        return stato_sessione();
    }

    public static function chiudiSessione(){
        sessione_chiusa();
    }








    public static function boh()
}