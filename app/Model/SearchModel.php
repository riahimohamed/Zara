<?php

namespace App\Model;

class SearchModel{

	private $db;

    public function __construct(){
    	$this->db = \Rootdir::getInstance()->getDB();
    }

    public function findalbarane(){
        $req = "SELECT albarane, site FROM calcprod";

        $data = $this->db->query($req);

        return $data;
    }

    public function findAll(){

        if(isset($_POST['albsearch'])){
            $alb = $_POST['albsearch'];
        }else{
            $alb = ' ';
        } 


        $req = "SELECT distinct * FROM calcprod c, resultprod r 
        WHERE c.albarane = r.albarane
        And c.albarane = '$alb' ";

        $data = $this->db->query($req);

        return $data;
    }

    public function findTab($tabname){

        if(isset($_POST['albsearch'])){
            $alb = $_POST['albsearch'];
        }else{
            $alb = ' ';
        } 

        $req = "SELECT distinct *  FROM calcprod c, $tabname t 
                WHERE c.albarane = t.albarane
                And c.albarane = '$alb'";       

        /*$sql = "SELECT *
            FROM calcprod
            RIGHT JOIN femme
            USING (albarane)
            RIGHT JOIN homme
            USING (albarane)
            RIGHT JOIN enfant
            USING (albarane)
            ";*/

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