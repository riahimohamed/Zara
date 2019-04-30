<?php

define('ROOT', dirname(__DIR__).'/');

require ROOT . 'app/Rootdir.php';

Rootdir::autoload();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

ob_start();
if($p === 'home') {
    require '../page/admin/index.php';
} else if($p === 'app'){
    $app = new \App\Controller\ApplicationCtrl();
}else if($p === 'formation'){
    require '../page/Ressources/view/formation.php';
}else if($p != 'login'){
    $p ='home';
    require '../page/home.php';
}
$content = ob_get_clean();

require '../page/default/default.php';
