<?php
// Zara Application create by Mohammed Riahi.
namespace App\Table;

use Core\Database\Database;

class Form{

    private $data;
    private $row;

    public static function getText($type ='text',$name = '', $placeholder='', $value=''){
        return '<input class="form-control" autofocus="true" type="'.$type.'" name="'.$name.'" placeholder="'.$placeholder.'" required="required" value="'. $value .'">';
    }

    public function getSubmit($name='', $btname){
        return '<button type="submit" name="'.$name.'">'.$btname.'</button>';
    }

    public function userCount(Database $db){
        if(isset($_POST['login'])) {
            if (!empty($_POST['username']) && !empty($_POST['pass'])) {

                $username = $_POST['username'];
                $pass = $_POST['pass'];

                $req = "SELECT * FROM user WHERE username = ? AND password = ?";
                $this->data = $db->prepare($req, array($username, $pass), true);
            }
        }
        if($this->data){
            return $this->data;
        }else{
            $this->data = null;
        }

        return $this->data;
    }
}