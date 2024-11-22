<?php

class FPersistentManager {

    /*
    Uso della classe Singleton
    */
    private static $instance;


    private function __construct(){


    }

    /**
    * Method to create an instance af the PersistentManager
    */

    public static function getInstance()
   {
       if (!self::$instance) {
           self::$instance = new self();
       }

       return self::$instance;
   }


   //--------------------Gestione degli oggetti--------------------
   //restituisce un oggetto specificando la classe e l'id

   public static function retrieveObj($class, $id){
       
        $foundClass = "F" . substr($class, 1);
        $staticMethod = "getObj";

        $result = call_user_func([$foundClass, $staticMethod], $id);

        return $result;

    }

    //carica un oggetto nel db

    public static function uploadObj($obj){

        $foundClass = "F". substr(get_class($obj), 1);
        $staticMethod = "saveObj";

        $result = call_user_func([$foundClass, $staticMethod], $obj);

        return $result;
    }


    



    //Metodo per salvare un corso sul db
    public static function store($obj) {
        $Eclass = get_class($obj);
        $Fclass = str_replace("E","F", $Eclass);
        if ($Fclass == "FCorso") {
            $id = $Fclass::store($obj);
            return $id;
        }
        else {
            $Fclass::store($obj);
        }
    }

//DA FINIRE
}