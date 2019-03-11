<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo - 10/Mar - Exercício 01</title>
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

    <p>Entrar com 3 números e imprimi-los em
      ordem decrescente (suponha números
      diferentes)</p>

    <?php
      if(isset($_REQUEST['nNro']) && !empty($_REQUEST['nNro'])) {

        $aNros = $_REQUEST['nNro'];

        echo "<h5>Números ordenados:</h5>";

        if($aNros[0] >= $aNros[1] && $aNros[0] >= $aNros[2]) {
          echo $aNros[0];
          echo "<br>";
          array_splice($aNros, 0, 1);
        } elseif($aNros[1] >= $aNros[0] && $aNros[1] >= $aNros[2]) {
          echo $aNros[1];
          echo "<br>";
          array_splice($aNros, 1, 1);
        } elseif($aNros[2] >= $aNros[0] && $aNros[2] >= $aNros[1]) {
          echo $aNros[2];
          echo "<br>";
          array_splice($aNros, 2, 1);
        }

        if($aNros[0] >= $aNros[1]) {
          echo $aNros[0];
          echo "<br>";
          echo $aNros[1];
          echo "<br>";
        } else {
          echo $aNros[1];
          echo "<br>";
          echo $aNros[0];
          echo "<br>";
        }

        echo "<br>";

    } else {
        echo "<h5>Informe os números.</h5>";
    }

     ?>

     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <input id="nNro01" name="nNro[]" type="number" /> <br />
       <input id="nNro02" name="nNro[]" type="number" /> <br />
       <input id="nNro03" name="nNro[]" type="number" /> <br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
