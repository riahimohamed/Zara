<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-base.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/register.css'); ?>" />

<section>
    <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div id="legend">
            <h2>Ajouter nouveau membre</h2>
            <br><br>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label" for="username">Non d'utilisateur</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required>
                <p class="help-block">Le nom d'utilisateur peut contenir des lettres ou 
                    <br>des chiffres, sans espaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Mot de passse</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
                <p class="help-block">Le mot de passe peut contenir des lettres ou des chiffres</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password -->
            <label class="control-label" for="password_confirm">Mot de passe (Confirm)</label>
            <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required>
                <p class="help-block">Veuillez confirmer le mot de passe</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button type="submit" name="register" class="btn btn-success">Enregistrer</button>
            </div>
        </div>
    </form>

</section>