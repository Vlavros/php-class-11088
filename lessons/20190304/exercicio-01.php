<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04/Mar - Exercício 01</title>
  </head>
  <body>
    <p>
      Construir um algoritmo que leia 2 números e
      efetue a adição. Caso o valor somado seja
      maior que 20, este deverá ser apresentando
      somando-se a ele mais 8; caso o valor
      somado seja menor ou igual a 20, este deverá
      ser apresentado subtraindo-se 5
    </p>
    <?php
      if(isset($_REQUEST['nNro01']) && !empty($_REQUEST['nNro01']) && isset($_REQUEST['nNro02']) && !empty($_REQUEST['nNro02'])){
          //print_r($_REQUEST);

          $nNro01 = $_REQUEST['nNro01'];
          $nNro02 = $_REQUEST['nNro02'];
          $nNroTot = $nNro01+$nNro02;
          echo "$nNro01 + $nNro02 = $nNroTot";
          if($nNroTot > 20) {
            $nNroTot = $nNroTot + 8;
            echo " + 8 = ";
          } else {
            $nNroTot = $nNroTot - 5;
            echo " - 5 = ";
          }
          echo $nNroTot;

          echo "<h5>O resultado é: $nNroTot</h5>";

      } else {
          echo "<h5>INFORME O NÚMERO 01 e 02.</h5>";
      }
     ?>
     <form id="frmExercicio-01" name="frmExercicio-01" method="get" action="#">
       <label>Número 01:</label> <br />
       <input id="nNro01" name="nNro01" type="number" /> <br />
       <label>Número 02:</label> <br />
       <input id="nNro02" name="nNro02" type="number" /> <br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
