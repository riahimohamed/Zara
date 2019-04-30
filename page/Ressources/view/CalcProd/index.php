<!-- Zara Application create by Mohammed Riahi. -->

<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-base.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-calcul.css'); ?>" />

<section>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" name="form-calcul" id="form-calcul">

				<h1>Merci de remplir ce formulaire</h1>
				<div class="form-group1">

				    <label for="date"><h3>Date:<h3/></label>
					<input type="date" class="form-control" name="datearr" id="date" required="required">
				</div>
				<div class="form-group1">
					<label for="code-abarre"><h3>Albarane:<h3/></label>
					<input type="number" class="form-control" name="code_abarre" id="code-abarre" required="required" />
				</div>
				<div class="form-group1">
					<label for="quan-total"><h3>Quantité total:<h3/></label>
					<input type="number" class="form-control" name="qte_total" id="quan-total" required="required" />
				</div>
			
			<hr />
			
				<h1>Quantité detaillé</h1>
				<fieldset>
					<h3>Femme</h3>
					<div class="form-group">
						<input type="number" class="form-control" name="femme_susp" id="Femme-suspendu" placeholder="Suspendu" required="required" />
						<input type="number" class="form-control" name="femme_plie" id="Femme-plie" placeholder="plié" required="required" />
					</div>
				</fieldset>
				<fieldset>
					<h3>Homme</h3>
					<div class="form-group">
						<input type="number" class="form-control" name="homme_susp" id="Homme-suspendu" placeholder="Suspendu" required="required" />
						<input type="number" class="form-control" name="homme_plie" id="Homme-plie" placeholder="plié" required="required" />
					</div>
				</fieldset>
				<fieldset>
					<h3>Enfant</h3>
					<div class="form-group">
						<input type="number" class="form-control" name="kid_susp" id="Enfant-suspendu" placeholder="Suspendu" required="required" />
						<input type="number" class="form-control" name="kid_plie" id="Enfant-plie" placeholder="plié" required="required" />
					</div>
				</fieldset>
				<button type="button" class="btn btn-info" id="getinfo" data-toggle="modal" data-target="#exampleModal">ok</button>
				
			

				<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

			         <span aria-hidden="true">&times;</span>

			        </button>
			        <h3 class="modal-title" id="exampleModalLabel">Bonjour</h3>

			      </div>
			      <div class="modal-body">
			      	
			      	<div class="alert alert-danger" id="text-alert"></div>

			      	<div id="text-glob">
				        <p>Ce camion date : <span id='datetext'></span> albarane <span id='albarane'></span> doit être traité 
				        	dans <span id="ttolatl"></span> avec <span id="nbpers"></span> personnes,
				        comme cela:</p>
				        <h3>Femme</h3>
				        <p>Suspendu: avec <span id="nbfs"></span> personnes fini dans <span id="fst"></span> .</p><br />
				        <p>plié: avec <span id="nbfp"></span> personnes fini dans <span id="fpt"></span>.</p>
				        
				        <h3>Homme</h3>
				        <p>Suspendu: avec <span id="nbhs"></span> personnes fini dans <span id="hst"></span> .</p><br />
				        <p>plié: avec <span id="nbhp"></span> personnes fini dans <span id="hpt"></span> .</p>

				        <h3>Enfant</h3>
				        <p>Suspendu: avec <span id="nbes"></span> personnes fini dans <span id="est"></span> .</p><br />
				        <p>plié: avec <span id="nbep"></span> personnes fini dans <span id="ept"></span> .</p>
			        </div>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
			        <button type="submit" class="btn btn-primary" id="send">Enregister</button>
			      </div>
			    </div>
			  </div>
			</div>


			</form>

		</section>