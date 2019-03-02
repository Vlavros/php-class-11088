<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Exercício 04, Página 23 de Algoritmos</title>
  </head>
  <body>
    <h3>Aula 03 - Exercício 04, Página 23 de Algoritmos</h3>
    <p>Escreva um algoritmo que leia um ano e calcule se este é bissexto, imprimindo esta informação na tela.
          Obs.: Um ano é bissexto quando dividido por 4 possuir resto 0.</p>

    <?php
      if(isset($_REQUEST['nYear']) && !empty($_REQUEST['nYear'])){
          //echo $_REQUEST['nYear'];
          print_r($_REQUEST);

          $nYear = $_REQUEST['nYear'];
          if($nYear % 2 !== 0) {
            echo "<h5>NÃO É BISSEXTO</h5>";
          } else {
            echo "<h5>PRECISA TESTAR - TAREFA DE CASA</h5>";
          }

      } else {
          echo "<h5>Informe um ano.</h5>";
      }
     ?>

    <h4>Verificar se é ano bissexto</h4>
    <form id="frmEx4Pag23Alg" name="frmEx4Pag23Alg" method="get" action="#">
      <label>Ano:</label> <br />
      <input id="nYear" name="nYear" type="number" min="1900" max="2050" value="2019" />
      <input id="subVerify" type="submit" value="Verificar" />
    </form>

  </body>
</html>
