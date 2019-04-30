<?php

namespace App\Model;


class ResultprodModel{

	private $db;

    public function __construct(){
    	$this->db = \Rootdir::getInstance()->getDB();
    }

    public function addResultProdAction($alb){

        $stmt = "INSERT INTO resultprod (albarane, nbr_perse, dureetrait)
                                 VALUES (:albarane, :nbr_perse, :dureetrait)";
    
    	$data = $this->db->prepare($stmt,array(
            "albarane" => $alb,
            "nbr_perse" => $_POST['tc'],
            "dureetrait" => $_POST['debtrait']
            )
        );
        return $data;
    }

    public function addTimeAction($alb, $tabname, $persesusp, $perseplie, $t1, $t2){

        $stmt = "UPDATE $tabname 
                 SET nbperse_susp = $persesusp,
                 nbperse_plie = $perseplie,
                 dureetraits = $t1,
                 dureetraitp = $t2

                 WHERE albarane = $alb";

        $data = $this->db->prepare($stmt, array());
        return $data;
    }


    public function findLast($tabjoin){

        $req = "SELECT * FROM calcprod AS c
                    INNER JOIN $tabjoin AS t
                    ON c.albarane = t.albarane 

                    ORDER BY c.id DESC LIMIT 1" ;      

        $data = $this->db->query($req);

        return $data;
    }

    public function getNote($qte, $pers,$time){
        if($pers == 0 || $time == 0){
            return 85;
        }
        return round($qte/$pers/$time, 2);
    }

    public function getNotefhk($qte, $pers, $time){
        if($pers == 0 || $time == 0){
            return 85;
        }
        return round($qte/$pers/$time, 2);
    }

    public function setNotefhk($qte, $perse, $time){
        $note = $this->getNotefhk($qte, $perse, $time);
        
        if($note>=0 && $note<=74){
            return 1;
        }else if($note>=75 && $note<=84){
            return 2;
        }else if($note>=85){
            return 3;
        }else{
            return 1;
        }
    }

    public function setNote($qte, $perse, $time){
        $note = $this->getNote($qte, $perse, $time);
        
        if($note>=0 && $note<=74){
            return 1;
        }else if($note>=75 && $note<=84){
            return 2;
        }else if($note>=85){
            return 3;
        }else{
            return 1;
        }
    }
}