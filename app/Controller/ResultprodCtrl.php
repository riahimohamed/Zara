<?php

namespace App\Controller;

use App\Table\Controller;
use App\Model\ResultprodModel;

class ResultprodCtrl extends Controller{

    private $db;
    private $instant;
    private $resultMod;

    public function __construct(){

        $this->resultMod = new ResultprodModel();
        
        $dataf = $this->resultMod->findLast('femme');
        $datah = $this->resultMod->findLast('homme');
        $datak = $this->resultMod->findLast('enfant');

            foreach ($dataf as $post) {
                $albarane = $post->albarane;
                $fSusp = $post->susp;
                $fPlie = $post->plie;
            }

            foreach ($datah as $post) {
                $hSusp = $post->susp;
                $hPlie = $post->plie;
            }

            foreach ($datak as $post) {
                $kSusp = $post->susp;
                $kPlie = $post->plie;
            }


    	if($this->getRequest() == 'POST'){

            $df1 = $_POST['fts'];
            $df2 = $_POST['ftp'];
            $nbfs = $_POST['fs'];
            $nbfp = $_POST['fp'];

            $dh1 = $_POST['hts'];
            $dh2 = $_POST['htp'];
            $nbhs = $_POST['hs'];
            $nbhp = $_POST['hp'];

            $dk1 = $_POST['kts'];
            $dk2 = $_POST['ktp'];
            $nbks = $_POST['ks'];
            $nbkp = $_POST['kp'];

            var_dump($df1, '  ', $df2, $dh1, '  ', $dh2);

            $this->resultMod->addResultProdAction($albarane);

            $this->resultMod->addTimeAction($albarane, 'femme', $nbfs, $nbfp, $df1, $df2);
            $this->resultMod->addTimeAction($albarane, 'homme', $nbhs, $nbhp, $dh1, $dh2);
            $this->resultMod->addTimeAction($albarane, 'enfant', $nbks, $nbkp, $dk1, $dk2);

            $this->redirectUrl('note');


            $this->sessionDestroy('resultAble');
            $this->sessionDestroy('site');
            $this->sessionDestroy('msg');
    	}

        require ROOT . 'page/Ressources/view/ResultProd/index.php';
    }

    public function noteAction(){

        $dat = $this->resultMod->findLast('resultprod');

        $dataf = $this->resultMod->findLast('femme');
        $datah = $this->resultMod->findLast('homme');
        $datak = $this->resultMod->findLast('enfant');

        foreach ($dat as $post) {
            $qte = $post->qtetotal;
            $perse = $post->nbr_perse;
            $durtrait = $post->dureetrait;
        }

        foreach ($dataf as $post) {
            $qtefs = $post->susp;
            $qtefp = $post->plie;

            $nbfs = $post->nbperse_susp;
            $nbfp = $post->nbperse_plie;
            $timedfs = $post->dureetraits;
            $timedfp = $post->dureetraitp;
        }

        foreach ($datah as $post) {
            $qtehs = $post->susp;
            $qtehp = $post->plie;

            $nbhs = $post->nbperse_susp;
            $nbhp = $post->nbperse_plie;
            $timedhs = $post->dureetraits;
            $timedhp = $post->dureetraitp;
        }

        foreach ($datak as $post) {
            $qteks = $post->susp;
            $qtekp = $post->plie;

            $nbks = $post->nbperse_susp;
            $nbkp = $post->nbperse_plie;
            $timedks = $post->dureetraits;
            $timedkp = $post->dureetraitp;
        }

        $note = $this->resultMod->getNote($qte, $perse, $durtrait);
        $getNote = $this->resultMod->setNote($qte, $perse, $durtrait );

        $getNotef = $this->resultMod->setNotefhk($qtefs, $nbfs, $timedfs);
        $getNoteh = $this->resultMod->setNotefhk($qtehs, $nbhs, $timedhs);
        $getNotek = $this->resultMod->setNotefhk($qteks, $nbks, $timedks);

        $getNotefp = $this->resultMod->setNotefhk($qtefp, $nbfp, $timedfp);
        $getNotehp = $this->resultMod->setNotefhk($qtehp, $nbhp, $timedhp);
        $getNotekp = $this->resultMod->setNotefhk($qtekp, $nbkp, $timedkp);
        

       require ROOT . 'page/Ressources/view/ResultProd/note.php';
    }
    
}   