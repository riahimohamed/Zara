<?php

// Zara Application create by Mohammed Riahi.
namespace App\Controller;

use App\Table\Controller;
use App\Model\CalcprodModel;


class CalcprodCtrl extends Controller{

    public function __construct(){

        $calcMod = new CalcprodModel();

    	if($this->getRequest() == 'POST'){

            $calcMod->addCalcProdAction();
            $calcMod->addFemmeAction();
            $calcMod->addHommeAction();
            $calcMod->addKidAction();

           $this->redirectUrl('resultprod');

           $this->setSession('resultAble', 'none');
           $this->setSession("msg", "valid");
    	}

        require ROOT . 'page/Ressources/view/CalcProd/index.php';
    }

    public function search(){

      require ROOT . 'page/Ressources/view/search/index.php';
    }

}