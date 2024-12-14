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

// Metodo retrieveObj
public static function retrieveObj($class, $id) {
    try {
        $foundClass = "F" . substr($class, 1);
        $staticMethod = "getObj";
        if (!method_exists($foundClass, $staticMethod)) {
            throw new Exception("Metodo $staticMethod non trovato nella classe $foundClass");
        }
        return call_user_func([$foundClass, $staticMethod], $id);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage();
        return null;
    }
}

// Metodo uploadObj
public static function uploadObj($obj) {
    try {
        $foundClass = "F". substr(get_class($obj), 1);
        $staticMethod = "saveObj";
        if (!method_exists($foundClass, $staticMethod)) {
            throw new Exception("Metodo $staticMethod non trovato nella classe $foundClass");
        }
        return call_user_func([$foundClass, $staticMethod], $obj);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage();
        return null;
    }
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