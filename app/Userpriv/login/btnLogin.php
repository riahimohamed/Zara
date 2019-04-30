<?php

\App\Table\User::sessionDestroy('access','username', 'role');
// Zara Application create by Mohammed Riahi.
    if(\App\Table\User::userAccess('username')) {
        echo "<form action='". $_SERVER['PHP_SELF'] ."' method='post' class='form' role='form'>";
        echo "<button type='submit' name='logout' id='logout'>
                Déconnexion <i class='glyphicon glyphicon-log-out'></i>
              </button>";
        echo "</form>";
    }
    else{
        echo "<a href='index.php?p=login' style='padding: 3px 5px 3px; background: #fff'>
               Connexion <i class='glyphicon glyphicon-log-in'></i> &nbsp;
             </a>";
    }
?>