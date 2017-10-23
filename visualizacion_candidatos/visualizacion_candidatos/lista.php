<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-6 py-2">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Género</th>
      <th>Partido</th>
      <th>Lista/Pacto</th>
    </tr>
  </thead>
  <tbody>
    <?php $mujeres = 0; $hombres = 0;?>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>

    <tr>
      <td>
        <?php if(($csv[$a]["Web Site"])==""){?>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                            <?php }else{?>
                                <a href="<?php echo($csv[$a]["Web Site"])?>" target="_blank">
                                    <?php echo($csv[$a]["Candidato Nombre"])?>
                                    <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                    <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                </a>
        <?php }?>
      </td>
      <td>
                  <?php if(($csv[$a]["Genero"])=="Femenino"){?>
                      <img src="http://www.guemil.info/wp-content/uploads/2016/07/02_Gv05-Woman.svg">
                      <?php $mujeres++?>
                  <?php }else{?>
                      <img src="http://www.guemil.info/wp-content/uploads/2016/07/01_Gv05-Man.svg">
                      <?php $hombres++?>
                  <?php }?>
              </td>
              <td><?php echo($csv[$a]["Partido Politico"])?></td>
              <td>
                <?php echo($csv[$a]["Lista/Pacto"])?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
                <?php $chilevamos++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                <?php $fuerza++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                <?php $sumemos++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                <?php $union++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                <?php $convergencia++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
                <?php $trabajadores++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                <?php $independiente++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                <?php $portodochile++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                <?php $coalicionregionalista++?>
                <?php }?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                <?php $frenteamplio++?>
                <?php }?>
</td>
    </tr>
    <?php };?>
  </tbody>
</table>
<div class="alert alert-danger">
<h4>Hay <?php print $chilevamos;?> candidatos en Chile Vamos. <br> Hay <?php print $fuerza;?> candidatos en La fuerza de la Mayoria. <br>
Hay <?php print $sumemos;?> candidatos en Sumemos. <br> Hay <?php print $union;?> candidatos en Únion Patriótica. <br>
Hay <?php print $convergencia;?> candidatos en Convergencia Democrática. <br> Hay <?php print $trabajadores;?> candidatos en Trabajadores revolucionarios. <br>
Hay <?php print $independiente;?> candidatos Independientes. <br> Hay <?php print $portodochile;?> candidatos en Por Todo Chile. <br>
Hay <?php print $coalicionregionalista;?> candidatos en Coalición Regionalista Verde. <br> Hay <?php print $frenteamplio;?> candidatos en Frente Amplio. </h4>
</div>


</div>
</div>
</div>
<?php include('footer.php')?>
