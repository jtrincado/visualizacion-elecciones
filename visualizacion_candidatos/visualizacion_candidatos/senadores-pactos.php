<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-6 py-2">


<?php
$csv = array_map('str_getcsv', file('data/eleccion_senadores.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<h3>Chile Vamos</h3>

      <table class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Partido</th>
          </tr>
        </thead>
        <tbody>
          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
          <tr>
            <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?>
                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
            </td>
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
          </tr>
                <?php $chilevamos++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>La fuerza de la Mayoria</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $fuerza++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Sumemos</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Sumemos"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $sumemos++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Unión Patriótica</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Unión Patriótica"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $union++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Convergencia Democrática</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Convergencia Democrática"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $convergencia++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Independientes</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Independiente"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $independientes++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Por Todo Chile</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Por Todo Chile"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $portodo++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Coalición Regionalista Verde</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $regionalista++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>
<h3>Frente Amplio</h3>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Lista/Pacto"])=="Frente Amplio"){?>
                <tr>
                    <td>
                        <?php echo($csv[$b]["Candidato Nombre"])?>
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                </tr>
                <?php $frente++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>
<hr>

<div class="alert alert-danger">
  <h4>Hay <?php print $chilevamos;?> candidatos en Chile Vamos. <br> Hay <?php print $fuerza;?> candidatos en La fuerza de la Mayoria. <br>
  Hay <?php print $sumemos;?> candidatos en Sumemos. <br> Hay <?php print $union;?> candidatos en Únion Patriótica. <br>
  Hay <?php print $convergencia;?> candidatos en Convergencia Democrática. <br>
  Hay <?php print $independientes;?> candidatos Independientes. <br> Hay <?php print $portodo;?> candidatos en Por Todo Chile. <br>
  Hay <?php print $regionalista;?> candidatos en Coalición Regionalista Verde. <br> Hay <?php print $frente;?> candidatos en Frente Amplio. </h4>

</div>


</div>
</div>
</div>
<?php include('footer.php')?>
