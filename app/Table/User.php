<?php
// Zara Application create by Mohammed Riahi.
namespace App\Table;

class User{

    private static $username;
    private static $role;
    private static $session;

    private static $failedLogin;

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        $url = "index.php?p=login&id=". $this->id;
        return $url;
    }

    public static function getSession($session_name){
        if (isset($_SESSION) and (isset($_SESSION[$session_name]))) {
            self::$session = $_SESSION[$session_name];
        }
        else{
            self::$session = null;
        }
        return self::$session;
    }

    public static function userAccess($session_name){
        if(isset($_SESSION[$session_name])){
            return true;
        }
        return false;
    }

    public static function sessionDestroy($post, $access, $session_name, $role){
        if(isset($_POST[$post])){
            unset($_SESSION[$access]);
            unset($_SESSION[$session_name]);
            unset($_SESSION[$role]);
            header('location:index.php');
            exit;
        }
    }

    public static function getUsername($data){
        if(is_null(self::$username)){
            foreach($data as $post){
                self::$username = $post->username;
            }
        }
        return self::$username;
    }

    public static function getRole($data){
        if(is_null(self::$role)){
            foreach($data as $post){
                self::$role = $post->role;
            }
        }
        return self::$role;
    }

    /**
     * @return mixed
     */
    public static function getFailedLogin()
    {
        return self::$failedLogin;
    }

    /**
     * @param mixed $failedLogin
     */
    public static function setFailedLogin($failedLogin)
    {
        self::$failedLogin = $failedLogin;
    }
}