<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-6 py-2">


<?php
$csv = array_map('str_getcsv', file('data/eleccion_senadores.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>


<h3>Elecciones presidenciales</h3><br/>
<div class="imag"><?php echo file_get_contents("img/presidente_fome.svg"); ?></div>
<br/><h3>Paridad senadores</h3>
<div class="imag"><?php echo file_get_contents("img/senadores_paridad.svg"); ?></div>
<br/><h3>Partido/alianza senadores</h3>
<div class="imag"><?php echo file_get_contents("img/senadores_partido_alianza.svg"); ?></div>
<br/><h3>Paridad diputados</h3>
<div class="imag"><?php echo file_get_contents("img/diputados_paridad.svg"); ?></div>
<br/><h3>Partido/alianza diputados</h3>
<div class="imag"><?php echo file_get_contents("img/diputados_partido_alianza.svg"); ?></div>
</div>


</div>
</div>
</div>
<?php include('footer.php')?>
