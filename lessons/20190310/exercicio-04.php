<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo - 10/Mar - Exercício 04</title>
    <link rel="stylesheet" href="/php-class-11088/lib/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="/php-class-11088/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="/php-class-11088/lib/bootstrap/css/bootstrap.css">
    <script src="/php-class-11088/js/jquery.js"></script>
    <script src="/php-class-11088/js/popper.js"></script>
    <script src="/php-class-11088/lib/bootstrap/js/bootstrap.js"></script>
    <script src="/php-class-11088/lib/jquery-ui/jquery-ui.js"></script>
    <script>
      function desenharTrinagulo(a,b,c){
        //alert(a);

        var canvasElement = document.querySelector("#myCanvas");
        var context = canvasElement.getContext("2d");

        // the triangle
        context.beginPath();
        context.moveTo(10, 10);

        var a = a + 10;
        context.lineTo(10, a);

        var b = b + 10;
        context.lineTo(b,a);
        //context.closePath();

        var c = c + 10;
        context.moveTo(10, 10);
        context.lineTo(c,c);

        // the outline
        context.lineWidth = 2;
        context.strokeStyle = '#666666';
        context.stroke();

        // the fill color
        //context.fillStyle = "#FFCC00";
        //context.fill();
    };

    $(function() {
      //alert("Teste");

    });
    </script>
  </head>
  <body>

    <p>Ler 3 números, os possíveis lados de um
      triângulo, e imprimir a classificação de
      acordo com tamanho dos lados.</p>

    <canvas style="border:2px;border-style: solid" id="myCanvas" width="150" height="150"></canvas>

    <?php
    if(isset($_REQUEST['nLadoA']) && !empty($_REQUEST['nLadoA']) && isset($_REQUEST['nLadoB']) && !empty($_REQUEST['nLadoB']) && isset($_REQUEST['nLadoC']) && !empty($_REQUEST['nLadoC'])) {

      $nLadoA = $_REQUEST['nLadoA'];
      $nLadoB = $_REQUEST['nLadoB'];
      $nLadoC = $_REQUEST['nLadoC'];

      echo "<script>desenharTrinagulo($nLadoA,$nLadoB,$nLadoC);</script>";

      if($nLadoA == $nLadoB && $nLadoB == $nLadoC) {
        echo "<h5>É um triângulo equilátero.</h5>";
      } elseif(($nLadoA == $nLadoB && $nLadoB !== $nLadoC) || ($nLadoB == $nLadoC && $nLadoC !== $nLadoA) || ($nLadoA == $nLadoC && $nLadoC !== $nLadoB)) {
        echo "<h5>É um triângulo isósceles.</h5>";
      } else { //Todos os lados diferentes
        echo "<h5>É um triângulo escaleno.</h5>";
      }

    } else {
        echo "<h5>Informe o tamanho dos lados do triângulo:</h5>";
    }

     ?>

     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <input id="nLadoA" name="nLadoA" type="number" min="1" max="100" /> <br />
       <input id="nLadoB" name="nLadoB" type="number" min="1" max="100" /> <br />
       <input id="nLadoC" name="nLadoC" type="number" min="1" max="100" /> <br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
