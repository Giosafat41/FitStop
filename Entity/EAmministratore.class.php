<?php
class EAmministratore {

    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername (){
        return $this->username;
    }

    public function getPassword (){
        return $this->password;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function __toString(){
        $print =" Username: ".$this->getUsername()."\n"." Password: ".$this->getPassword()."\n";
        return $print;
    }
}
?>