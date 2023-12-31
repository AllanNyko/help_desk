<?php require_once('validador_login.php');

$chamados = [];
$file_path = fopen('../../help_desk_protected/chamados.txt', 'r');

while (!feof($file_path)) {
  $chamados[] = fgets($file_path);
}

fclose($file_path);
?>
<html>

<head>
  <meta charset="utf-8" />
  <title>Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <?php require_once('navbar.php'); ?>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">
            <?php

            foreach ($chamados as $key => $chamadoString) { ?>
              <?php $chamado = explode('#', $chamadoString);
              $lastItem  = count($chamados) - 1;

              if ($_SESSION['perfil_id'] == 2) {
                if ($_SESSION['id'] !=  $chamado[0]) {
                  continue;
                }
              }
              if ($key === $lastItem) {
                break;
              }

              ?>
              <div class="card mb-3 bg-light">
                <div class="container text-start fw-bold"><?= $chamado[0] ?></div>
                <div class="card-body">
                  <h5 class="card-title">
                    <?= $chamado[1] ?>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado[2] ?></h6>
                  <p class="card-text"><?= $chamado[3] ?></p>
                </div>
              </div>


            <?php } ?>

            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>