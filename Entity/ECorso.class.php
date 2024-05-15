<?php
class ECorso {

    private $username;
    private $password;

    public function __construct($_username, $_password){
        $this->username = $_username;
        $this->password = $_password;
    }

    public function getUsername (){
        return $this->username;
    }

    public function getPassword (){
        return $this->password;
    }
    
}

?>