
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-page1.css'); ?>" />

<?php Rootdir::setSession('site', $_GET['site']); ?>

<section>
	<div class="bnts">
		<a href="<?= Rootdir::getPath('search'); ?>">
			<button class="btn btn-info">Recherche</button>
		</a>
		<a href="<?= Rootdir::getPath('calcprod'); ?>" >
			<button class="btn btn-info">calcul productivité</button>
		</a>
		<a href="<?= Rootdir::getPath('resultprod'); ?>">
			<button class="btn btn-info" <?= Rootdir::getResSession('resultAble'); ?> >Résultat Productivité</button>
		</a>
		<a href="<?= Rootdir::getPath('stat'); ?>">
			<button class="btn btn-info">Statistique</button>
		</a>
	</div>

</section>

