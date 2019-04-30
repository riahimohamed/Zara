<?php

// Zara Application create by Mohammed Riahi.

namespace App\Controller;

use App\Table\Controller;
use App\Model\SearchModel;

class searchCtrl extends Controller{

  private $qteProd, $timetrait, $perse;
  private $qtefs, $timefs, $qtefp, $timefp, $persef, $persefp;
  private $qtehs, $timehs, $qtehp, $timehp, $perseh, $persehp;
  private $qteks, $timeks,$qtekp, $timekp, $persek, $persekp;
  private $search;

	public $searchCtrl;

    public function __construct(){

    }


    public function indexAction(){
      $this->search = new SearchModel();

      $data = $this->search->findAll();

      $alb1 = $this->search->findalbarane();

      $fme = $this->search->findTab('femme');
      $homme = $this->search->findTab('homme');
      $kid = $this->search->findTab('enfant');

      foreach ($data as $value) {
        $this->qteProd = $value->qtetotal;
        $this->perse = $value->nbr_perse;
        $this->timetrait = $value->dureetrait;
      }

      foreach ($fme as $val) {
        $this->qtefs = $val->susp;
        $this->persef = $val->nbperse_susp;
        $this->timefs = $val->  dureetraits;

        $this->qtefp = $val->plie;
        $this->persefp = $val->nbperse_susp;
        $this->timefp = $val->  dureetraitp;
      }

      foreach ($homme as $val) {
        $this->qtehs = $val->susp;
        $this->perseh = $val->nbperse_susp;
        $this->timehs = $val->  dureetraits;

        $this->qtehp = $val->plie;
        $this->persehp = $val->nbperse_plie;
        $this->timehp = $val->  dureetraitp;
      }

      foreach ($kid as $val) {
        $this->qteks = $val->susp;
        $this->persek = $val->nbperse_susp;
        $this->timeks = $val->  dureetraits;

        $this->qtekp = $val->plie;
        $this->persekp = $val->nbperse_plie;
        $this->timekp = $val->  dureetraitp;
      }

      $note = $this->search->getNote($this->qteProd, $this->perse, $this->timetrait);
      $note = $this->search->setNote($this->qteProd, $this->perse, $this->timetrait );

      $notefs = $this->search->setNotefhk($this->qtefs, $this->persef, $this->timefs);
      $notehs = $this->search->setNotefhk($this->qtehs, $this->perseh, $this->timehs);
      $noteks = $this->search->setNotefhk($this->qteks, $this->persek, $this->timeks);

      $notefp = $this->search->setNotefhk($this->qtefp, $this->persefp, $this->timefp);
      $notehp = $this->search->setNotefhk($this->qtehp, $this->persehp, $this->timehp);
      $notekp = $this->search->setNotefhk($this->qtekp, $this->persekp, $this->timekp);

      require ROOT . 'page/Ressources/view/search/index.php';
    }

    public function SearchAction(){

    	require ROOT . 'page/Ressources/view/search/search.php';
    }

}