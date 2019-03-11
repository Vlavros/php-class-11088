<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo - 10/Mar - Exercício 02</title>
    <link rel="stylesheet" href="/php-class-11088/lib/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="/php-class-11088/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="/php-class-11088/lib/bootstrap/css/bootstrap.css">
    <script src="/php-class-11088/js/jquery.js"></script>
    <script src="/php-class-11088/js/popper.js"></script>
    <script src="/php-class-11088/lib/bootstrap/js/bootstrap.js"></script>
    <script src="/php-class-11088/lib/jquery-ui/jquery-ui.js"></script>
    <script>
    $(function() {
      //alert("Teste");
    });
    </script>
  </head>
  <body>

    <p>Entrar com X números e imprimi-los em ordem decrescente</p>

    <?php
      $qtdNum = 5;
      if(isset($_REQUEST['qtdNro']) && !empty($_REQUEST['qtdNro'])) {
        $qtdNum = $_REQUEST['qtdNro'];
      }

      if(isset($_REQUEST['nNro']) && !empty($_REQUEST['nNro'])) {

        echo "<h5>Números desordenados:</h5>";
        print_r($_REQUEST);
        echo "<br><br>";

        $aNros = $_REQUEST['nNro'];
        $aNrosOrd = array();
        $vNumMaoir = null;
        $vCount = count($aNros);
        $vPoint;

        while($vCount !== count($aNrosOrd)) {
          for ($i=0; $i < count($aNros); $i++) {
            if($vNumMaoir == null || $vNumMaoir <= $aNros[$i]) {
              $vNumMaoir = $aNros[$i];
              $vPoint = $i;
            }
          }
          $aNrosOrd[] = $vNumMaoir;
          array_splice($aNros, $vPoint, 1);
          $vNumMaoir = null;
        }

        echo "<h5>Números ordenados:</h5>";
        print_r($aNrosOrd);
        echo "<br><br>";

    } else {
        echo "<h5>Informe os números:</h5>";
    }

     ?>

     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <?php
        for ($y=0; $y < $qtdNum; $y++) {
          echo "<input id=\"nNro$y\" name=\"nNro[]\" type=\"number\" /> <br />";
        }
       ?>
       <input id="subVerify" type="submit" value="Verificar" />
     </form>

     <br><br>

     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <label>Informe a quantidade de números desejados:</label>
       <input id="qtdNro" name="qtdNro" min="1" max="100" type="number" value="<?=$qtdNum?>" />
       <input id="subQtd" type="submit" value="Modificar" />
     </form>

  </body>
</html>
