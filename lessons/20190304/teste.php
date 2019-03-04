<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04/Mar - Teste</title>
  </head>
  <body>

    <?php
      print_r($_REQUEST);
      echo "<br>";
      print_r($_REQUEST["nNro"][1]);

      $teste = $_REQUEST["nNro"];

      echo "<br>" . count($teste);
     ?>

     <form id="frmTeste" name="frmTeste" method="get" action="#">
       <input id="nNro01" name="nNro[]" type="number" /> <br />
       <input id="nNro02" name="nNro[]" type="number" /> <br />
       <input id="nNro03" name="nNro[]" type="number" /> <br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>

  </body>
</html>
