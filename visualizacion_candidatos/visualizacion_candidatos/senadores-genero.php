<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-6 py-2">


<?php
$csv = array_map('str_getcsv', file('data/eleccion_senadores.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<?php $mujeres = 0; $hombres = 0;?>

<h3>Mujeres</h3>

      <table class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Partido</th>
            <th>Lista/Pacto</th>
          </tr>
        </thead>
        <tbody>
          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                <?php if(($csv[$a]["Genero"])=="Femenino"){?>
          <tr>
            <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?>
                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
            </td>
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                    <td><?php echo($csv[$a]["Lista/Pacto"])?></td>
          </tr>
                <?php $mujeres++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Hombres</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Lista/Pacto</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Genero"])=="Masculino"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                    <td><?php echo($csv[$b]["Lista/Pacto"])?></td>
                </tr>
                <?php $hombres++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>




<div class="alert alert-danger">
<p class="lead">Son <?php print $mujeres;?> candidatas v/s <?php print $hombres;?> candidatos a senadores</p>
</div>


</div>
</div>
</div>
<?php include('footer.php')?>
