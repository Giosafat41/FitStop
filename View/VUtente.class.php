<?php

class VUtente{

    private $smarty;

    public function __construct(){

        $this->smarty = StartSmarty::configuration();

    }

    public function home($utente){

        $this->smarty->assign('utente', $utente);

        $this->smarty->display('home.tpl');
    }

    public function login(){

        $this->smarty->assign('error', false);
        $this->smarty->assign('regErr', false);
    
        $this->smarty->display('login.tpl');
    }

    public function caricareInfoIstruttore($improf, $nome, $cognome, $email, $corsi){

        $this->smarty->assign('improf', $improf);
        $this->smarty->assign('nome', $nome);
        $this->smarty->assign('cognome', $cognome);
        $this->smarty->assign('email', $email);
        $this->smarty->assign('corsi', $corsi);

        $this->smarty->display('profilo_istruttore.tpl');
    }

    public function caricareInfoUtente($improf, $nome, $cognome, $username, $data_nascita, $indirizzo, $num_tel, $email, $abbonamento){

        $this->smarty->assign('improf', $improf);
        $this->smarty->assign('nome', $nome);
        $this->smarty->assign('cognome', $cognome);
        $this->smarty->assign('username', $username);
        $this->smarty->assign('data_nascita', $data_nascita);
        $this->smarty->assign('indirizzo', $indirizzo);
        $this->smarty->assign('num_tel', $num_tel);
        $this->smarty->assign('email', $email);
        $this->smarty->assign('abbonamento', $abbonamento);

        $this->smarty->display('profilo_utente.tpl');
    }

    public function loginError() {

        $this->smarty->assign('error',true);
        $this->smarty->assign('regErr',false);

        $this->smarty->display('login.tpl');
    }

    public function registrationError() {

        $this->smarty->assign('error',false);
        $this->smarty->assign('regErr',true);

        $this->smarty->display('login.tpl');
    }

    public function usernameError($userAndPropic , $error){

        $this->smarty->assign('errorImg',false);
        $this->smarty->assign('error' , $error);
        $this->smarty->assign('utente',$userAndPropic[0][0]);
        $this->smarty->assign('userPic',$userAndPropic[0][1]);

        $this->smarty->display('setting.tpl');
    }

    public function settings($userAndPropic){

        $this->smarty->assign('errorImg',false);
        $this->smarty->assign('error',false);
        $this->smarty->assign('utente', $userAndPropic[0][0]);
        $this->smarty->assign('userPic',$userAndPropic[0][1]);

        $this->smarty->display('setting.tpl');
    }

    public function FileError($userAndPropic){

        $this->smarty->assign('errorImg',true);
        $this->smarty->assign('error',false);
        $this->smarty->assign('utente', $userAndPropic[0][0]);
        $this->smarty->assign('userPic',$userAndPropic[0][1]);

        $this->smarty->display('setting.tpl');
    }

}