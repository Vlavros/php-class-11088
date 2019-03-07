<?php

require_once("../../utilities/time-date-utilities.php");

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Exercício 04, Página 23 de Algoritmos - Versão 02</title>
  </head>
  <body>
    <h3>Aula 04 - Exercício 04, Página 23 de Algoritmos - Versão 02</h3>
    <p>Escreva um algoritmo que leia um ano e calcule se este é bissexto, imprimindo esta informação na tela.
          Obs.: Um ano é bissexto quando dividido por 4 possuir resto 0.</p>

    <?php
      if(isset($_REQUEST['nYear']) && !empty($_REQUEST['nYear']) && is_numeric($_REQUEST['nYear']) && $_REQUEST['nYear'] > 0){

          $nYear = $_REQUEST['nYear'];
          if(isLeapYear($nYear)) { //Chama uma função
            echo "<h5>$nYear É ANO BISSEXTO!</h5>";
          } else {
            echo "<h5>$nYear NÃO É ANO BISSEXTO!</h5>";
          }

      } else {
          echo "<h5>INFORME UM ANO.</h5>";
          $nYear = date("Y");
          //$nYear = getdate()["year"];
      }
     ?>

    <h4>Verificar se é ano bissexto</h4>
    <form id="frmExercicio" name="frmExercicio" method="get" action="exercicio-01.php">
      <label>Ano:</label> <br />
      <input id="nYear" name="nYear" type="number" min="1" max="4000" value="<?=htmlspecialchars($nYear, ENT_QUOTES, 'UTF-8')?>" />
      <input id="subVerify" type="submit" value="Verificar" />
    </form>

  </body>
</html>
