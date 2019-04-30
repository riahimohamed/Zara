<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/bootstrap.min.css'); ?>" />
    
    <style type="text/css">
    
    #logout.btn{
		margin-top: 25px;
		margin-left: 100px;
	}

	#logout.btn-primary{
		margin-top: 8px !important;
	    margin-right: 50px !important;
	    margin-bottom: 30px !important;
		background-color: #5bc0de !important;
	    border-color: #5bc0de !important;
	}
	.member{
		float: right;
	    margin-top: 15px;
	    text-decoration: underline;
	}
    </style>

</head>
<body>

<div class="col-md-6">	
	<a href="<?= Rootdir::getPath('home'); ?>">
		<img src="<?= Rootdir::getWeb('images/logo.png'); ?>" style="margin:15px" width="70">
	</a>
</div>


<div class="col-md-6">
	<?php

		//\App\Table\User::sessionDestroy('logout','access', 'username', 'role');

	    if(\App\Table\User::userAccess('access')) {
	        echo "<form action='". $_SERVER['PHP_SELF'] ."' method='POST' class='form' role='form'>";
	        echo "<button type='submit' name='logout' id='logout' class='btn btn-sm btn-primary pull-right'>
	                Déconnexion
	              </button>";
	        echo "</form>";
	        // Rootdir::sessionDestroy('access');
	        \App\Table\User::setFailedLogin(false);
	    }

	    if(Rootdir::getSession('role') === 'admin'){
	    	echo "<a href='". Rootdir::getPath('register') . "' class='member'>Ajouter un membre</a>";
	    }
	?>
</div>

<?= $content; ?>


<script src="<?= Rootdir::getWeb('js/jquery.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/jquery.cookie.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/bootstrap.min.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/script.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/getinfo.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/timestop.js'); ?>"></script>
</body>
</html>