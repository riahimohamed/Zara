<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-base.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= Rootdir::getWeb('css/style-stat.css'); ?>" />

<script src="<?= Rootdir::getWeb('js/amcharts/amcharts.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/amcharts/pie.js'); ?>"></script>
<script src="<?= Rootdir::getWeb('js/amcharts/themes/light.js'); ?>"></script>

<script type="text/javascript" src="<?= Rootdir::getWeb('js/femme.js'); ?>"></script>

<iframe onload="StatGlobal(
                          <?= $percentR ?>,
                          <?= $percentY ?>,
                          <?= $percentG ?>
                          );"></iframe>

<iframe onload="genreStatFme(
                          <?= $percentRfs ?>,
                          <?= $percentYfs ?>,
                          <?= $percentGfs ?>,
                          'chartdivfmes'
                            );"></iframe>
<iframe onload="genreStatFme(
                          <?= $percentRfp ?>,
                          <?= $percentYfp ?>,
                          <?= $percentGfp ?>,
                          'chartdivfmep'
                              );"></iframe>

<iframe onload="genreStathomme(
                          <?= $percentRhs ?>,
                          <?= $percentYhs ?>,
                          <?= $percentGhs ?>,
                          'chartdivhs'
                              );"></iframe>
<iframe onload="genreStathomme(
                          <?= $percentRhp ?>,
                          <?= $percentYhp ?>,
                          <?= $percentGhp ?>,
                          'chartdivhp'
                              );"></iframe>

<iframe onload="genreStathomme(
                          <?= $percentRks ?>,
                          <?= $percentYks ?>,
                          <?= $percentGks ?>,
                          'chartdivks'
                              );"></iframe>
<iframe onload="genreStathomme(
                          <?= $percentRkp ?>,
                          <?= $percentYkp ?>,
                          <?= $percentGkp ?>,
                          'chartdivkp'
                              );"></iframe>


<section>
<h2>Statistique des camions 
  <span class="glyphicon glyphicon-map-marker"></span> <?= $site; ?>
</h2>

<div class="divi" id="chartdiv"></div>

<h1>Statistique d'effectif</h1>

<!-- Zara Application create by Mohammed Riahi. -->

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" colspan="4">FEMME NOTE</th>
      </tr>
      <tr>
        <th scope="col" colspan="2">Suspendu</th>
        <th scope="col" colspan="2">Plié</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2"><div class="divi" id="chartdivfmes"></div></td>
        <td colspan="2"><div class="divi" id="chartdivfmep"></div></td>
      </tr>
    </tbody>
  </table>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" colspan="4">HOMME NOTE</th>
      </tr>
      <tr>
        <th scope="col" colspan="2">Suspendu</th>
        <th scope="col" colspan="2">Plié</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2"><div class="divi" id="chartdivhs"></div></td>
        <td colspan="2"><div class="divi" id="chartdivhp"></div></td>
      </tr>
    </tbody>
  </table>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" colspan="4">ENFANT NOTE</th>
      </tr>
      <tr>
        <th scope="col" colspan="2">Suspendu</th>
        <th scope="col" colspan="2">Plié</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2"><div class="divi" id="chartdivks"></div></td>
        <td colspan="2"><div class="divi" id="chartdivkp"></div></td>
      </tr>
    </tbody>
  </table>

</section>
<!-- Zara Application create by Mohammed Riahi. -->