<?php

use App\Config;
use Core\Database\Database;
use App\Table\User;

class Rootdir{

    private $db_instance;
    private static $_instance;


    public static function getInstance(){
        //if(is_null(self::$_instance)){
            self::$_instance = new Rootdir();
        //}
        return self::$_instance;
    }

    public static function autoload(){
        session_start();

        require ROOT . 'app/Autoloader.php';
        App\Autoloader::register();

        require ROOT . 'core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function getDB(){
        $config = Config::getInstance(ROOT . 'config/config.php');

        //if(is_null($this->db_instance)){
            $this->db_instance = new Database(
                $config->get('db_host'),
                $config->get('db_user'),
                $config->get('db_pass'),
                $config->get('db_name')
            );
        //}

        return $this->db_instance;
    }

    public static function checkRole($roles = [], $statement, $def = true){
        if(User::getSession('role') !== null) {
            foreach ($roles as $role) {
                if (User::getSession('role') === $role && $def) {
                    echo $statement;
                }
            }
        }
    }

    public static function setSession($session_name, $val){
        $_SESSION[$session_name] = $val;
    }

    public static function getSession($session_name){
        if (isset($_SESSION) and (isset($_SESSION[$session_name]))) {
            $session = $_SESSION[$session_name];
        }else{
            $session = null;
        }
        return $session;
    }

    public static function getResSession($session_name){
        if (isset($_SESSION[$session_name])) {
            $session = $_SESSION[$session_name];
        }else{
            $session = 'disabled';
        }
        return $session;
    }

    public static function sessionDestroy($session_name){
            unset($_SESSION[$session_name]);
    }


    public static function notRole($statement){
        if(User::getSession('role') !== null) {
            if (User::getSession('role') === 'prof') {
                echo $statement;
            }
        }else{
            echo $statement;
        }
    }

    public function getPath($path){
        return 'index.php?p='. $path;
    }

    public function getWeb($web){
        return 'http://localhost/zaraapp/public/'. $web;
    }

    public function getViews($view){
        require ROOT . 'page/Ressources/view/'.$view;
    }

    public function getNav(){
        require ROOT . 'app/Userpriv/login/btnLogin.php';
    }
}