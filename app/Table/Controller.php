<?php

namespace App\Table;

use App\Table\Session\Session;
use App\Config;

class Controller extends Session{

    public function render($where){
        $conf = Config::getInstance(ROOT . 'config/config.php');
        return $conf->get($where);
    }

    public function getRequest(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function redirectUrl($url){
        header('location:'.$this->render($url));
    }
}