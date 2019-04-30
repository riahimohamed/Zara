<!-- Zara Application create by Mohammed Riahi. -->

<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-base.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/search.css'); ?>" />

<section>

	<div class="search">

		<div class="contraint">

		<h1>Page de recharche</h1>
		<br>

		<div class="zone-search">
			<!--<input type="text" name="search" placeholder="Recherche albarane..">-->

			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 

			<input type="number" list="albsearch" name="albsearch" placeholder="Recherche albarane..">
			  <datalist id="albsearch">
			  	<?php

			  	 foreach ($alb1 as $val) {
			      echo "<option value='".$val->albarane."'>";
			  	}

			    ?>
			  </datalist>
			  <button type"submit" name="search" class="btn btn-primary">Recherche</button>
			<!--<i class="glyphicon glyphicon-search" aria-hidden="true"></i>-->
		</form>
		</div>

		<div class="search-body">

			<h3> 
				<?php 
					if(isset($_POST['albsearch'])){
						if($_POST['albsearch'] != ''){
						echo 'Recherche Camion albarane : '.$_POST['albsearch'];
						}
					}

				?>
			</h3>

			<br>
			<table class="table table-bordered table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Albarane</th>
			      <th scope="col">Date</th>
			      <th scope="col">Quantité total</th>
			      <th scope="col">Localisation</th>
			      <th scope="col">Durrée de trait</th>
			      <th scope="col">Note</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php

			  	if($data != null){
			  	 foreach ($data as $val) {
			  	?>

			    <tr>
			      <td><?= $val->albarane ?></td>
			      <td><?= $val->datearr ?></td>
			      <td><?= $val->qtetotal ?></td>
			      <td><?= strtoupper($val->site) ?></td>

			      <td><?= $val->dureetrait ?></td>
			      <td><img src="<?= Rootdir::getWeb('images/'.$note.'.png') ?>"></td>
			    </tr>

			    <?php
					}
					}else{
					echo "<tr><td class='text-primary' colspan='7' align='center'>Tableau est vide !</td></tr>";
				}
				?>

			  </tbody>
			</table>

	

			<table class="table table-bordered table-striped">
			  <thead>
			    <tr>
			      <th scope="col" colspan="4">FEMME</th>
			    </tr>
			    <tr>
			      <th scope="col" colspan="2">Suspendu</th>
			      <th scope="col" colspan="2">Plié</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	if($fme != null){
			  	 foreach ($fme as $val) {
			  	?>
			    <tr>
			    	<td><?= $val->susp ?></td>
			      	<td><p><img src="<?= Rootdir::getWeb('images/'.$notefs.'.png') ?>"></td>
			      	<td><?= $val->plie ?></td>
			      	<td><p><img src="<?= Rootdir::getWeb('images/'.$notefp.'.png') ?>"></td>
			    </tr>
			    <?php
					}
				}else{
					echo "<tr><td class='text-primary' colspan='4' align='center'>Tableau est vide !</td></tr>";
				}
				?>
			  </tbody>
			</table>

			<table class="table table-bordered table-striped">
			  <thead>
			    <tr>
			      <th scope="col" colspan="4">HOMME</th>
			    </tr>
			    <tr>
			      <th scope="col" colspan="2">Suspendu</th>
			      <th scope="col" colspan="2">Plié</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	if($homme != null){
			  	 foreach ($homme as $val) {
			  	?>
			    <tr>
			    	<td><?= $val->susp ?></td>
			      	<td><p><img src="<?= Rootdir::getWeb('images/'.$notehs.'.png') ?>"></td>
			      	<td><?= $val->plie ?></td>
			      	<td><p><img src="<?= Rootdir::getWeb('images/'.$notehp.'.png') ?>"></td>
			    </tr>
			    <?php
					}
					}else{
					echo "<tr><td class='text-primary' colspan='4' align='center'>Tableau est vide !</td></tr>";
				}
				?>
			  </tbody>
			</table>

			<table class="table table-bordered table-striped">
			  <thead>
			    <tr>
			      <th scope="col" colspan="4">ENFANT</th>
			    </tr>
			    <tr>
			      <th scope="col" colspan="2">Suspendu</th>
			      <th scope="col" colspan="2">Plié</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	if($kid != null){
			  	 foreach ($kid as $val) {
			  	?>
			    <tr>
			    	<td><?= $val->susp ?></td>
			      	<td><p><img src="<?= Rootdir::getWeb('images/'.$noteks.'.png') ?>"></td>
			      	<td><?= $val->plie ?></td>
			      	<td><p><img src="<?= Rootdir::getWeb('images/'.$notekp.'.png') ?>"></td>
			    </tr>
			    <?php
					}
					}else{
					echo "<tr><td class='text-primary' colspan='4' align='center'>Tableau est vide !</td></tr>";
				}
				?>
			  </tbody>
			</table>

		</div>

	</div>
</div>

</section>