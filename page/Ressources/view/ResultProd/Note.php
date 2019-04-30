<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-base.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-resultat-ok.css'); ?>" />

<section>


<?php
	foreach ($dat as $post) {
        $albarane = $post->albarane;
        $date = $post->datearr;
    }

    $imgtoltal = Rootdir::getWeb('images/'.$getNote.'.png');
    $imgfs = Rootdir::getWeb('images/'.$getNotef.'.png');
    $imghs = Rootdir::getWeb('images/'.$getNoteh.'.png');
    $imgks = Rootdir::getWeb('images/'.$getNotek.'.png');

    $imgfp = Rootdir::getWeb('images/'.$getNotefp.'.png');
    $imghp = Rootdir::getWeb('images/'.$getNotehp.'.png');
    $imgkp = Rootdir::getWeb('images/'.$getNotekp.'.png');

?>

	<p>
		Camion date :<?= $date ?>  albarane :<?= $albarane ?>  Prod :<?= $note ?>

			<img class="note-camion" src="<?= $imgtoltal ?>">
	</p>
	<table>
		<tr>
			<th><p>Femme</p></th>
			<th><p>Note</p></th>
		</tr>
		<tr>
			<td><p>Suspendu</p></td>
			<td><p><img src="<?= $imgfs ?>"></p></td>
		</tr>
		<tr>
			<td><p>Plié</p></td>
			<td><p><img src="<?= $imgfp; ?>"></p></td>
		</tr>
	</table>

	<table>
		<tr>
			<th><p>Homme</p></th>
			<th><p>Note</p></th>
		</tr>
		<tr>
			<td><p>Suspendu</p></td>
			<td><p><img src="<?= $imghs ?>"></p></td>
		</tr>
		<tr>
			<td><p>Plié</p></td>
			<td><p><img src="<?= $imghp; ?>"></p></td>
		</tr>
	</table>

	<table>
		<tr>
			<th><p>Enfant</p></th>
			<th><p>Note</p></th>
		</tr>
		<tr>
			<td><p>Suspendu</p></td>
			<td><p><img src="<?= $imgks ?>"></p></td>
		</tr>
		<tr>
			<td><p>Plié</p></td>
			<td><p><img src="<?= $imgkp ?>"></p></td>
		</tr>
	</table>

<a href="<?= Rootdir::getPath('home'); ?>">
	<button class="btn btn-primary" style="float : left; margin: 20px 0;background-color: #5bc0de !important; border-color: #5bc0de !important;">Ok</button>
</a>

</section>
