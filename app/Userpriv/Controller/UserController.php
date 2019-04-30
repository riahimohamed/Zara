<?php
// Zara Application create by Mohammed Riahi.
namespace App\Userpriv\Controller;

use App\Table\Controller;
use App\Table\User;
use App\Userpriv\Form\LoginType;

class UserController extends Controller{

    public function __construct(){
        $this->db = \Rootdir::getInstance()->getDB();
        
        if(isset($_POST['logout']) !== null){
            User::setFailedLogin(false);
            User::sessionDestroy('logout','access', 'username', 'role');
        }
    }

    public function indexAction(){

        $formType = new LoginType();

        if($this->getRequest() == 'POST' && !isset($_POST['logout'])){

            $datas = $formType->userCount(\Rootdir::getInstance()->getDB());
            
            if(!is_null($datas)) {

                $username = User::getUsername($datas);
                $role = User::getRole($datas);

                $this->setSession('username', $username);
                $this->setSession('role', $role);
                $this->setSession('access', 'admin');

                $this->redirectUrl('home');
            }else{
                User::setFailedLogin(true);
            }
        }

        $form = $formType->creatForm();
        require $this->render('login');
    }

    public function registerAction(){

        if($this->getRequest() == 'POST'){

            if(isset($_POST['register'])){

                $stmt = "INSERT INTO user (username, password, role)
                                VALUES (:username, :password, :role)";
    
                $data = $this->db->prepare($stmt,array(
                "username" => $_POST['username'],
                "password" => $_POST['password'],
                "role" => 'member'
                ));

            }

            $this->redirectUrl('home');
        }

        require $this->render('register');
    }

}