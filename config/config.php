<?php

const INDEX = 'index.php?p=';

return array(
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'zaraapp',

    'home' => INDEX.'home',
    'login' => ROOT . 'app/Userpriv/view/login.php',
    'resultprod' => INDEX.'resultprod',
    'calcprod' => INDEX.'calcprod',
    'search' => INDEX .'search',
    'note' => INDEX .'note',
    'register' => ROOT . 'app/Userpriv/register/register.php',
);