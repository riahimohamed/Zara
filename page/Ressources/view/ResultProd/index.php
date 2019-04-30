<!-- Zara Application create by Mohammed Riahi. -->

<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-base.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-resultat.css'); ?>" />

<?php

if(Rootdir::getSession('msg') !== null){

?>

<div class="alert alert-success" id="msg-conf" style="position:fixed; top: 10px; left: 10px; width: 40%;">
	<span class="closebtn" id="closebtn">&times;</span>
	<span class="glyphicon glyphicon-ok-sign"></span> Confirmation, données enregistrer.
</div>	

<?php
 }

?>

<section class="result">
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" name="form-resultat" id="form-resultat">
		<h2>Merci de remplir ce formulaire</h2>
		<label><h3>temps de traitement d'un camion</h3></label>
		
		 <input type="hidden" class="form-control" name="debtrait" value="0" id="ct" required="required" />

		<div class="form-group">

			<input type="number" class="form-control" name="tc" placeholder="Nombre de personne" required="required" />

		 	<div class="btn-group" role="group" aria-label="Basic example">
			  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart1(this)" title="play">
			  	<span class="glyphicon glyphicon-play"></span>
			  </button>
			  
			  <button type="button" class="btn btn-secondary btn-danger stop1" onClick="chronoStop1()" title="stop">
			  	<span class="glyphicon glyphicon-stop"></span>
			  </button>
			</div>

			<h4><span id="chronotime">00:00:00</span></h4>
		</div>	

		

		<fieldset>
			<h3>femme</h3>
			<h4>Suspendu : </h4>
			<div class="form-group">
				<input type="number" class="form-control" value="<?= $fSusp ?>" readonly="readonly" />
				<h5 class="deb">Délai suspendu</h5>

				<input type="number" class="form-control" name="fs" placeholder="Nombre de personne" required="required" />
				<input type="hidden" class="form-control" name="fts" id="fs" value="0" required="required" />

				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart(this)" title="play">
				  	<span class="glyphicon glyphicon-play"></span>
				  </button>
				  
				  <button type="button" class="btn btn-secondary btn-danger stop" onClick="chronoStop()" title="stop">
				  	<span class="glyphicon glyphicon-stop"></span>
				  </button>
				</div>

				<h4><span id="chronofs">00:00:00</span></h4>

			</div>
			<h4>plié : </h4>
			<div class="form-group">
				<input type="number" class="form-control" value="<?= $fPlie ?>" readonly="readonly" />
				<h5 class="deb">Délai plié</h5>

				<input type="text" class="form-control" name="fp" placeholder="Nombre de personne" required="required" />
				<input type="hidden" class="form-control" name="ftp" value="0" id="fp" required="required" />
				
				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart2(this)" title="play">
				  	<span class="glyphicon glyphicon-play"></span>
				  </button>
				  
				  <button type="button" class="btn btn-secondary btn-danger stop2" onClick="chronoStop()" title="stop">
				  	<span class="glyphicon glyphicon-stop"></span>
				  </button>
				</div>

				<h4><span id="chronofp">00:00:00</span></h4>

			</div>
		</fieldset>
		<fieldset>
			<br><br>
			<h3>Homme</h3>
			<h4>Suspendu : </h4>
			<div class="form-group">
				<input type="number" class="form-control" value="<?= $hSusp ?>" readonly="readonly" />
				<h5 class="deb">Délai suspendu</h5>

				<input type="text" class="form-control" name="hs" placeholder="Nombre de personne" required="required" />
				<input type="hidden" class="form-control" name="hts" value="0" id="hs" required="required" />

				<div class="btn-group" role="group" aria-label="Basic example">

				  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart3(this)" title="play">
				  	<span class="glyphicon glyphicon-play"></span>
				  </button>
				  
				  <button type="button" class="btn btn-secondary btn-danger stop3" onClick="chronoStop()" title="stop">
				  	<span class="glyphicon glyphicon-stop"></span>
				  </button>
				</div>

				<h4><span id="chronohs">00:00:00</span></h4>

			</div>
			<h4>plié : </h4>
			<div class="form-group">
				<input type="number" class="form-control" value="<?= $hPlie ?>" readonly="readonly" />
				<h5 class="deb">Délai plié</h5>

				<input type="text" class="form-control" name="hp" placeholder="Nombre de personne" required="required" />
				<input type="hidden" class="form-control" name="htp" value="0" id="hp" required="required" />
				
				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart4(this)" title="play">
				  	<span class="glyphicon glyphicon-play"></span>
				  </button>
				  
				  <button type="button" class="btn btn-secondary btn-danger stop4" onClick="chronoStop()" title="stop">
				  	<span class="glyphicon glyphicon-stop"></span>
				  </button>
				</div>

				<h4><span id="chronohp">00:00:00</span></h4>

			</div>
		</fieldset>
		<fieldset>
			<br><br>
			<h3>Enfant</h3>
			<h4>Suspendu : </h4>
			<div class="form-group">
				<input type="number" class="form-control" value="<?= $kSusp ?>" readonly="readonly" />
				<h5 class="deb">Délai suspendu</h5>

				<input type="text" class="form-control" name="ks" placeholder="Nombre de personne" required="required" />
				<input type="hidden" class="form-control" name="kts" value="0" id="ks" required="required" />
				
				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart5(this)" title="play">
				  	<span class="glyphicon glyphicon-play"></span>
				  </button>
				  
				  <button type="button" class="btn btn-secondary btn-danger stop5" onClick="chronoStop()" title="stop">
				  	<span class="glyphicon glyphicon-stop"></span>
				  </button>
				</div>

				<h4><span id="chronoks">00:00:00</span></h4>
			</div>
			<h4>plié : </h4>
			<div class="form-group">
				<input type="number" class="form-control" value="<?= $kPlie ?>" readonly="readonly" />
				<h5 class="deb">Délai plié</h5>

				<input type="text" class="form-control" name="kp" placeholder="Nombre de personne" required="required" />	
				<input type="hidden" class="form-control" name="ktp" value="0" id="kp" required="required" />
				
				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary btn-default" onClick="chronoStart6(this)" title="play">
				  	<span class="glyphicon glyphicon-play"></span>
				  </button>
				  
				  <button type="button" class="btn btn-secondary btn-danger stop6" onClick="chronoStop()" title="stop">
				  	<span class="glyphicon glyphicon-stop"></span>
				  </button>
				</div>

				<h4><span id="chronokp">00:00:00</span></h4>
			</div>
		</fieldset>
		<button type="submit" class="btn btn-info">Enregister</button>
	</form>
	
</section>