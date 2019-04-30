<?php

namespace App\Controller;

use App\Table\Controller;
use App\Model\StatModel;


class StatCtrl extends Controller{

    public function __construct(){

      $statModel = new StatModel();

      $site = $statModel->setSite($this->getSession('site'));
      
      $percent = $statModel->getPercent();

      $percentR = round($percent[2], 2);
      $percentY = round($percent[1], 2);
      $percentG = round($percent[0], 2);


      $percent = $statModel->getFhkPercent("femme");

      $percentRfs = round($percent[0], 2);
      $percentRfp = round($percent[1], 2);

      $percentYfs = round($percent[2], 2);
      $percentYfp = round($percent[3], 2);

      $percentGfs = round($percent[4], 2);
      $percentGfp = round($percent[5], 2);


      $percent = $statModel->getFhkPercent("homme");

      $percentRhs = round($percent[0], 2);
      $percentRhp = round($percent[1], 2);

      $percentYhs = round($percent[2], 2);
      $percentYhp = round($percent[3], 2);

      $percentGhs = round($percent[4], 2);
      $percentGhp = round($percent[5], 2);


      $percent = $statModel->getFhkPercent("enfant");

      $percentRks = round($percent[0], 2);
      $percentRkp = round($percent[1], 2);

      $percentYks = round($percent[2], 2);
      // Zara Application create by Mohammed Riahi.
      $percentYkp = round($percent[3], 2);

      $percentGks = round($percent[4], 2);
      $percentGkp = round($percent[5], 2);

        require ROOT . 'page/Ressources/view/Stat/index.php';
    }

}