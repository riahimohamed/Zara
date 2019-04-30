<?php

namespace App\Model;


class CalcprodModel{

	private $db;

    public function __construct(){
    	$this->db = \Rootdir::getInstance()->getDB();
    }

    public function addCalcProdAction(){

        $stmt = "INSERT INTO calcprod (albarane, qtetotal, site, datearr)
                                VALUES (:albarane, :qtetotal, :site, :datearr)";
    
    	$data = $this->db->prepare($stmt,array(
            "albarane" => $_POST['code_abarre'],
            "qtetotal" => $_POST['qte_total'],
            "site" => \Rootdir::getSession('site'),
            "datearr" => $_POST['datearr']
            ));
    }

    public function addFemmeAction(){

        $stmt = "INSERT INTO femme (albarane, susp, plie, dureetraits, dureetraitp)
                         VALUES (:albarane, :susp, :plie, 'null', 'null')";
    
        $data = $this->db->prepare($stmt,array(
            "albarane" => $_POST['code_abarre'],
            "susp" => $_POST['femme_susp'],
            "plie" => $_POST['femme_plie']
            ));
    }

    public function addHommeAction(){

        $stmt = "INSERT INTO homme (albarane, susp, plie, dureetraits, dureetraitp)
                         VALUES (:albarane, :susp, :plie, 'null', 'null')";
    
        $data = $this->db->prepare($stmt,array(
            "albarane" => $_POST['code_abarre'],
            "susp" => $_POST['homme_susp'],
            "plie" => $_POST['homme_plie']
            ));
    }

    public function addKidAction(){

        $stmt = "INSERT INTO enfant (albarane, susp, plie, dureetraits, dureetraitp)
                         VALUES (:albarane, :susp, :plie, 'null', 'null')";
    
        $data = $this->db->prepare($stmt,array(
            "albarane" => $_POST['code_abarre'],
            "susp" => $_POST['kid_susp'],
            "plie" => $_POST['kid_plie']
            ));
    }

    
}