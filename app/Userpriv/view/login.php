<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= Rootdir::getWeb('css/style-login.css') ?>" type="text/css">
</head>

<body class="login-body">

<section>

    <?php
        if(\App\Table\User::getFailedLogin()){
          echo "<div class='alert alert-danger failedlogin'>Votre nom d\'utilisateur ou mot de passe est incorrect</div>";
        }
    ?>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="login-form" name="form-login">
        <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <!--<input type="email" class="form-control" name="email" id="email" placeholder="Email" />-->
            <?= $form['username']; ?>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <!--<input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe" />-->
            <?= $form['password']; ?>
        </div>
        <div class="form-group">
        <button type="submit" name="login" class="btn btn-success">Connection</button>
    </div>
    </form>
</section>


<!--<section class="login-page">
    <div class="container">
        <div class="row">
            <div class="login-page">

                <?php
                    if(\App\Table\User::getFailedLogin()){
                      echo "<div class='alert alert-danger failedlogin'>Votre nom d\'utilisateur ou mot de passe est incorrect</div>";
                    }
                ?>

                <div class="form">
                    <form action="<?php $_SERVER['DOCUMENT_ROOT']; ?>" method="post" class="login-form">
                        <?= $form['username']; ?>
                        <?= $form['password']; ?>

                        <button type="submit" name="login">login</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>-->


<script src="<?= Rootdir::getWeb('js/jquery.js') ?>"></script>
</body>
</html>