<?php
// Zara Application create by Mohammed Riahi.
namespace App\Table\Session;

class Session{

    private $start;

    public static function getSession($session_name){
        if (isset($_SESSION) and (isset($_SESSION[$session_name]))) {
            $session = $_SESSION[$session_name];
        }else{
            $session = null;
        }
        return $session;
    }

    public static function setSession($session_name, $val){
        $_SESSION[$session_name] = $val;
    }

    public static function sessionDestroy($session_name){
            unset($_SESSION[$session_name]);
    }

}