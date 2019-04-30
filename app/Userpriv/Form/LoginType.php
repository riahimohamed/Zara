<?php

namespace App\Userpriv\Form;

use App\Table\Form;
use App\Table\User;

class LoginType extends Form{

    private $form = array();

    public function __construct(){
        new User();
    }

    public function creatForm(){
        return $this->form = array(
            'username' =>$this->getText('', 'username', 'Nom d\'utilisateur'),
            'password'=>$this->getText('password', 'pass', 'Mot de passe'),
        );
    }


}