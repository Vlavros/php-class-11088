<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04/Mar - Exercício 02</title>
  </head>
  <body>
    <p>
      Entrar com um número e informar se ele é
      divisível por 10, por 5, por 2 ou se não é
      divisível por nenhum destes
    </p>
    <?php
      if(isset($_REQUEST['nNro01']) && !empty($_REQUEST['nNro01'])){
          //print_r($_REQUEST);

          $nNro01 = $_REQUEST['nNro01'];
          if($nNro01 % 10 == 0) {
            echo "<h5>$nNro01 é divisível por 10</h5>";
          } else {
            echo "<h5>$nNro01 não é divisível por 10</h5>";
          }

          if($nNro01 % 5 == 0) {
            echo "<h5>$nNro01 é divisível por 5</h5>";
          } else {
            echo "<h5>$nNro01 não é divisível por 5</h5>";
          }

          if($nNro01 % 2 == 0) {
            echo "<h5>$nNro01 é divisível por 2</h5>";
          } else {
            echo "<h5>$nNro01 não é divisível por 2</h5>";
          }

          /*
          if(($nNro01 % 10 == 0) || ($nNro01 % 5 == 0) || ($nNro01 % 2 == 0)) {

          } else {
            echo "$nNro01 não é divisível por 10, 5 e 2.";
          }
          */


      } else {
          echo "<h5>Informe o número 01 para saber se é divisível por 10, 5 e 2.</h5>";
      }
     ?>
     <form id="frmExercicio-02" name="frmExercicio-02" method="get" action="#">
       <label>Número 01:</label> <br />
       <input id="nNro01" name="nNro01" type="number" /> <br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
