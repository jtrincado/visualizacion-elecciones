
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="…">
    <meta name="author" content="…">
    <title>Visualización de Candidatos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500|PT+Sans+Narrow" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>active<?php };?>"><a class="nav-link" href="index.php">Presidentes</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='senadores-genero.php'){?>active<?php };?>"><a class="nav-link" href="senadores-genero.php">Senadores género</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='senadores-pactos.php'){?>active<?php };?>"><a class="nav-link" href="senadores-pactos.php">Senadores pactos</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados-genero.php'){?>active<?php };?>"><a class="nav-link" href="diputados-genero.php">Diputados género</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados-pactos.php'){?>active<?php };?>"><a class="nav-link" href="diputados-pactos.php">Diputados pactos</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='visualizaciones.php'){?>active<?php };?>"><a class="nav-link" href="visualizaciones.php">Visualizaciones</a></li>
        </ul>
      </div>
    </nav>
    <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
    <div class="container">
      <center><div class="jumbotron">
        <h1>Elecciones presidenciales 2017</h1>
        <p class="lead">La siguiente lista corresponde a los candidatos presidenciales del presente año. Para más información, presione aquí.<br/><br/>Según lo que establece la Ley 18.700 sobre Votaciones Populares y Escrutinios, hasta este lunes 21 de agosto a las 24:00 horas, el Servicio Electoral (Servel) recibió las formalizaciones de pactos parlamentarios y de consejeros regionales (cores), de cara a las Elecciones 2017 que tendrán lugar el próximo 19 de noviembre.</p></center>
      </div>
    </div><?php };?>
  <?php if((basename($_SERVER['PHP_SELF']))=='senadores-genero.php'){?>
    <div class="container">
      <center><div class="jumbotron">
        <h1>Candidatura de senadores</h1>
        <p class="lead">La siguiente lista corresponde a los candidatos al senado del presente año.</p></center>
      </div>
    </div> <?php };?>

    <?php if((basename($_SERVER['PHP_SELF']))=='senadores-pactos.php'){?>
        <div class="container">
          <center><div class="jumbotron"><h1>Pactos del Senado</h1>
            <p class="lead">La siguiente lista corresponde a los pactos al Senado del presente año.</p></center>
          </div>
        </div> <?php };?>

    <?php if((basename($_SERVER['PHP_SELF']))=='diputados-genero.php'){?>
          <div class="container">
            <center><div class="jumbotron"><h1>Candidatura de diputados</h1>
              <p class="lead">La siguiente lista corresponde a los candidatos a diputado del presente año.</p></center>
            </div>
          </div> <?php };?>

    <?php if((basename($_SERVER['PHP_SELF']))=='diputados-pactos.php'){?>
                <div class="container">
                  <center><div class="jumbotron"><h1>Pactos de Diputados</h1>
                    <p class="lead">La siguiente lista corresponde a los pactos de diputados del presente año.</p></center>
                  </div>
                </div> <?php };?>


<?php if((basename($_SERVER['PHP_SELF']))=='visualizaciones.php'){?>
                            <div class="container">
                              <center><div class="jumbotron"><h1>Visualizaciones</h1>
                                <p class="lead"></p></center>
                              </div>
                            </div> <?php };?>
