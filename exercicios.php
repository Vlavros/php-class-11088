<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
  </head>
  <body>
    <?php
      $aHref = "lessons/20190301/ex4-pag23-alg.php";
      $aTarget = "_blank";
      $sCaption = "Exercício 4 da página 23 de Algoritmos";
      $sLink = "<a href='$aHref' target='$aTarget'>$sCaption</a>";

      echo "<ul>";
      echo "  <li>$sLink</li>";
      echo "</ul>";

     ?>
  </body>
</html>
