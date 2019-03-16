<?php
  $aVarName00 = ["1A","2B","3C","4D"];

  $aVarName01 = [];       //instancia array vazia
  $aVarName01 = [1,2,3,4];

  $aVarName02 = array();  //instancia array vazia - metodo antigo
  $aVarName02 = array(1,2,3,4);

  $aVarName03 = ["A","B","D","E"];
  $aVarName03[10] = 5;
  $aVarName03[7] = "5";
  $aVarName03[6] = $aVarName01;
  $aVarName03[5] = (object)$aVarName00;

  $aVarName04 = ["A" => 1,"B" => 2,"C" => 3,"D" => 4, 0 => 1.5];
  $aVarName04["E"] = 5;
  $aVarName04[$aVarName00[1]] = "@";

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - 15/Mar - Arrays</title>
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
  <body style="width:100%;height:100%;">
    <div id="divContent">
      <?php

        echo "<pre style=\"border-style: solid;\"> \$aVarName03 \n";
        print_r($aVarName03);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$aVarName04 \n";
        print_r($aVarName04);
        echo "</pre>";


       ?>
    </div>

  </body>
</html>
