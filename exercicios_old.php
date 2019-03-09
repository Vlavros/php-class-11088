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
      echo "<ul>";

      $aHref = "lessons/20190301/exercicio-01.php";
      $aTarget = "_blank";
      $sCaption = "Exercício 4 da página 23 de Algoritmos";
      $sLink = "<a href='$aHref' target='$aTarget'>$sCaption</a>";
      echo "  <li>$sLink</li>";

      $aHref = "lessons/20190306/exercicio-01.php";
      $aTarget = "_blank";
      $sCaption = "Exercício 4 da página 23 de Algoritmos (Versão 02)";
      $sLink = "<a href='$aHref' target='$aTarget'>$sCaption</a>";
      echo "  <li>$sLink</li>";

      echo "</ul>";

     ?>
  </body>
</html>
