<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01/Mar - Index</title>
  </head>
  <body>

    <a href="ex4-pag23-alg.php">Exercício 04, Página 23 de Algoritmos</a>

    <?php
      echo "<pre>";

      $aLink = [ ]; //cria um array vazio
      $aLink[] = "teste";
      echo $aLink[0];
      echo "<br><br>";

      $aLink['teste'] = 0;
      echo $aLink['teste'];
      echo "<br><br>";

       $aLink[] = true;
       $aLink[] = "ABC";
       $aLink[] = "DEF";
       $aLink[] = 700;
       $aLink[] = "GHI";
       $aLink[] = -50;
       $aLink[] = false;
       $aLink[] = false ? 1 : 0;
       print_r($aLink);
       echo "<br><br>";

       $arrayName = array("A","B","C","D");
       print_r($arrayName);
       echo "<br><br>";

       $aTarget["_self"] = "abre um link na mesma janela ou aba";
       $aTarget["_blank"] = "abre um link em uma nova janela ou aba";
       print_r($aTarget);
       echo "<br><br>";

       $aVar_1 = ["T1","T2","T3"];
       $aVar_1[] = 15;
       $aVar_1[] = 32;
       print_r($aVar_1);
       echo "<br><br>";

       $aVar_2 = [ "Valor1" => "V1","Valor2" =>"V2","Valor3" =>"V3"];
       print_r($aVar_2);
       echo "<br><br>";

       $aVar_3[0][1] = "M01";
       $aVar_3[0][2] = "M02";
       $aVar_3[0][0] = "M00";
       $aVar_3[1][0] = "M10";
       print_r($aVar_3);
       echo "<br><br>";

       $aDate = ['dia' => 1, 'mes' => "março", 'ano' => 2019 ];
       $aTime = ['hora' => 20, 'min' => 41, 'seg' => 49 ];
       $aUser = ['login' => "admin", 'email' => "admin@email.com" ];
       print_r($aDate);
       print_r($aTime);
       print_r($aUser);
       echo "<br><br>";

       $myarray1 = array('test',123);
       $myarray2[] = $myarray1;
       print_r($myarray2);
       echo "<br><br>";

       $aUsers = [];
       $aUsers[] = $aUser;
       $aUsers[] = ['login' => "user1", 'email' => "user1@email.com" ];
       $aUsers[] = ['login' => "user2", 'email' => "user2@email.com" ];
       $aUsers[] = ['login' => "user3", 'email' => "user3@email.com" ];
       $aUsers[] = ['login' => "user4", 'email' => "user4@email.com" ];
       print_r($aUsers);
       echo "<br><br>";

       echo "</pre>";
     ?>
  </body>
</html>
