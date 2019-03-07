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
          //print_r($_REQUEST);

          $nYear = $_REQUEST['nYear'];
          if(($nYear % 4 == 0 && $nYear % 100 !== 0) || ($nYear % 400 == 0)) { //Se é divisivel por 4 e não é multiplo de 100 ou seja multiplo de 400
            echo "<h5>$nYear É ANO BISSEXTO!</h5>";
          } else {
            echo "<h5>$nYear NÃO É ANO BISSEXTO!</h5>";
          }

      } else {
          echo "<h5>INFORME UM ANO.</h5>";
          $nYear = date("Y");
      }
     ?>

    <h4>Verificar se é ano bissexto</h4>
    <form id="frmEx4Pag23Alg" name="frmEx4Pag23Alg" method="get" action="#">
      <label>Ano:</label> <br />
      <input id="nYear" name="nYear" type="number" min="1" max="4000" value="<?=$nYear?>" />
      <input id="subVerify" type="submit" value="Verificar" />
    </form>

    <br><br>
    <a href="https://escolakids.uol.com.br/matematica/calculo-do-ano-bissexto.htm">Cálculo de anos bissextos</a> <br>
    <a href="https://mundoeducacao.bol.uol.com.br/matematica/anos-bissextos.htm">Exemplos de anos bissextos</a> <br>

  </body>
</html>
