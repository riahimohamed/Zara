<?php

namespace App\Model;


class StatModel{

	private $db;

    private $red;
    private $green; 
    private $yellw;
    private $nbrCount;
    private $fhk = [];
    private $site;



    public function __construct(){
    	$this->db = \Rootdir::getInstance()->getDB();
    }

    public function count($tabName){

        $site = $this->getSite();

        $count = $this->db->rowCount("SELECT * FROM
                                     calcprod c, $tabName t 
                                     WHERE c.albarane = t.albarane 
                                     AND c.site= '$site'");

        return $count;
    }

    public function findAll(){
        $site = $this->getSite();

        $req = "SELECT * FROM calcprod c, resultprod r 
                WHERE c.albarane = r.albarane
                AND c.site= '$site'";

        $data = $this->db->query($req);

        return $data;
    }

    public function findBy($tabName){
        $site = $this->getSite();

        $req = "SELECT * FROM calcprod c, $tabName t 
                WHERE c.albarane = t.albarane
                AND c.site= '$site'";

        $data = $this->db->query($req);

        return $data;
    }

    public function getNote($qte, $perse,$time){
        if($perse == 0 || $time == 0){
            return 1;
        }
        return round($qte/$perse/$time, 2);
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

    public function getPercent(){

        $r = 0;
        $y = 0;
        $g = 0;

        $this->nbrCount = $this->count('calcprod');

        $data = $this->findAll();

        if(empty($data)){
            echo "<style>
                    .divi{
                        height: 200px !important;
                    }
                  </style>";

            echo "<div class='local alert alert-danger' style=''>
                    <h4>Localisation ". $this->getSite(). " est vide !</h4>
                  </div>";
        }

        foreach ($data as $value) {

        $note = $this->setNote($value->qtetotal, $value->dureetrait, $value->dureetrait );

            if($note === 1){
                $r +=1;
            }else if($note == 2){
                $y +=1;
            }else{
                $g +=1;
            }
        }

         $this->green = $g;
         $this->yellow = $y;
         $this->red = $r;

         return array($this->green, $this->yellow, $this->red);
    }

    public function getFhkPercent($tabName){

        $rs = 0;
        $ys = 0;
        $gs = 0;

        $rp = 0;
        $yp = 0;
        $gp = 0;

        $this->nbrCount = $this->count($tabName);
        $data = $this->findBy($tabName);

        foreach ($data as $value) {
            $notes = $this->setNote($value->susp, $value->nbperse_susp, $value->dureetraits );
            $notep = $this->setNote($value->plie, $value->nbperse_plie, $value->dureetraitp );

            if($notes === 1){
                $rs +=1;
            }else if($notes == 2){
                $ys +=1;
            }else{
                $gs +=1;
            }

            if($notep === 1){
                $rp +=1;
            }else if($notep == 2){
                $yp +=1;
            }else{
                $gp +=1;
            }
        }

        return array($rs,$rp, $ys, $yp, $gs, $gp);

    }

    public function setFHK($val = array()){
        $this->fhk[] = ($val * 100) / $this->nbrCount;
        return $this->fhk;
    }

    public function getFHK(){
        return $this->fhk;
    }

    public function getSite(){
        
        return $this->site;;
    }

    public function setSite($site){
        $this->site = $site;

       if($site !== null){
         return $this->site;
       }

       return null;
    }
    
}