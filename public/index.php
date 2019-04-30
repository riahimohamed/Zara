<?php

define('ROOT', dirname(__DIR__).'/');

require ROOT . 'app/Rootdir.php';

$tab = 1;

Rootdir::autoload();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

if(Rootdir::getSession('access') != null && isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'login';
}

ob_start();
if($p === 'home') {
    require '../page/home.php';
} else if($p === 'app'){
    $app = new \App\Controller\ApplicationCtrl();
}
else if($p === 'menu'){
	require '../page/menu.php';
}
else if($p === 'calcprod'){
    $app = new \App\Controller\CalcprodCtrl();
}
else if($p === 'resultprod'){
    $app = new \App\Controller\ResultprodCtrl();
}else if($p === 'note'){
    $app = new \App\Controller\ResultprodCtrl();
    $app->noteAction();
}
else if($p === 'search'){
    $app = new \App\Controller\searchCtrl();
    $app->indexAction();
}
else if($p === 'stat'){
    $app = new \App\Controller\StatCtrl();
}
else if($p === 'register'){
    $app = new \App\Userpriv\Controller\UserController();
    $app->registerAction();
}
else if($p != 'login'){
    $p ='home';
    require '../page/home.php';
}
$content = ob_get_clean();

if($p != 'login') {
    require '../page/default/default.php';
}else{
    $app = new \App\Userpriv\Controller\UserController();
    $app->indexAction();
}

/*Create by Mohammed Riahi*/