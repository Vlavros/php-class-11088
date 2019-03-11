<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo - 10/Mar - Exercício 03</title>
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

    <p>Ler um número inteiro entre 1 e 12 e escrever
      o mês correspondente. Caso o número seja
      fora desse intervalo, informar que não existe
      mês com este número</p>

    <?php
    if(isset($_REQUEST['nMes']) && !empty($_REQUEST['nMes'])) {

      if(is_numeric($_REQUEST['nMes']) && ($_REQUEST['nMes'] <= 12 && $_REQUEST['nMes'] >= 1)) {
        $aMes = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
        //print_r($aMes);
        echo "<h5>". $_REQUEST['nMes'] . " é o mês de ". $aMes[$_REQUEST['nMes']-1] . ".</h5>";

      } else {
        echo "<h5>Número do mês ". $_REQUEST['nMes'] . " é inválido.</h5>";
      }

    } else {
        echo "<h5>Informe o número do mês.</h5>";
    }

     ?>

     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <label>Informe o mês:</label>
       <input id="nMes" name="nMes" type="number" /> <br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
