<?php include('header.php')?>
<div class="container">
<div class="row">
<div class="col-sm-6 py-2">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_presidencial.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<?php $mujeres = 0; $hombres = 0;?>

<h3>Mujeres |</h3>

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
                    <td>
                    <?php if(($csv[$a]["Partido Politico"])=="Independiente"){?>
                      <font color='white'>Independiente</font>
                    <?php }else{?>
                            <?php echo($csv[$a]["Partido Politico"])?>
                        <?php }?>
                  </td>
                    <td><?php echo($csv[$a]["Lista/Pacto"])?></td>
          </tr>
                <?php $mujeres++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>
        <hr>

<h3>Hombres |</h3>

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
          <?php if(($csv[$a]["Genero"])=="Masculino"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
              <td>
              <?php if(($csv[$a]["Partido Politico"])=="Independiente"){?>
                <font color='white'>Independiente</font>
              <?php }else{?>
                      <?php echo($csv[$a]["Partido Politico"])?>
                  <?php }?>
            </td>
              <td><?php echo($csv[$a]["Lista/Pacto"])?></td>
    </tr>
          <?php $hombres++;?>
          <?php };?>
    <?php };?>
            </tbody>
        </table>

<div class="alert alert-danger">
<p class="lead">Son <?php print $mujeres;?> candidatas v/s <?php print $hombres;?> candidatos a la presidencia</p>
</div>


</div>
</div>
</div>
<?php include('footer.php')?>
