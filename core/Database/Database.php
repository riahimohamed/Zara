<?php

namespace Core\Database;
use \PDO;

class Database{

    private $db_user;
    private $db_name;
    private $db_pass;
    private $db_host;
    private $pdo;


    public function __construct($db_host, $db_user="root", $db_pass='', $db_name='localhost'){
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    public function getPDO(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=zaraapp', 'root', '');
            $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

            $this->pdo = $pdo;
        }catch (PDOException $e) {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
        return $this->pdo;
    }

    public function query($statement){

        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS);


        return $datas;
    }

    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }

    public function prepare($statment, $attribut, $one = false){
        $req = $this->getPDO()->prepare($statment);
        $data = $req->execute($attribut);

        if($one){
            $data = $req->fetchAll(PDO::FETCH_CLASS);
        }

        return $data;
    }

    public function rowCount($statment){
        $req = $this->getPDO()->prepare($statment);
        $req->execute();

        $count = $req->rowCount();

        return $count;
    }
}