<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04/Mar - Exercício 04</title>
  </head>
  <body>

    <?php
      if(isset($_REQUEST['nNro']) && !empty($_REQUEST['nNro'])) {
        print_r($_REQUEST);
        echo "<br>";

        $aNros = $_REQUEST['nNro'];
        $aNrosOrd[] = $_REQUEST['nNro'][0];


        for ($i=1; $i < count($aNros); $i++) {
          for ($x=0; $x < count($aNrosOrd); $x++) {
            if($aNros[$i] < $aNrosOrd[$x]) {
              $vVar = $aNros[$i];
              $aNrosOrd[$x] = $aNros[$i];
            } else {
              $aNrosOrd[$i+1] = $aNros[$i];
            }
          }
        }

        for ($i=0; $i < count($aNrosOrd); $i++) {
          echo $aNrosOrd[$i];
          echo "<br>";
        }

      /*

      print_r($_REQUEST["nNro"][1]);

      $teste = $_REQUEST["nNro"];

      echo "<br>" . count($teste);
      */
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
