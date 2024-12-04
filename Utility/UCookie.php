<?php

class UCookie{
    public static function isSet($id){
        if(isset($_COOKIE[$id])){     /** isset controlla se esiste */
            return true;
        }
        else{
            return false;
        }
    }
}