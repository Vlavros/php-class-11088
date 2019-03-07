<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - 06/Mar - Exercício 02</title>
    <link rel="stylesheet" href="/php-class-11088/lib/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="/php-class-11088/lib/fontawesome/css/all.css">
    <script src="/php-class-11088/js/jquery.js"></script>
    <script src="/php-class-11088/lib/jquery-ui/jquery-ui.js"></script>
    <script>
    $(function() {

    });
    </script>
  </head>
  <body>
     <h3>Aula 04 - Exercício 05, Página 23 de Algoritmos</h3>
     <p>Escreva um algoritmo que leia uma data de nascimento e imprima na tela se o
        usuário é maior ou menor de idade.</p>

     <?php
       if(isset($_REQUEST['dtNasc']) && !empty($_REQUEST['dtNasc'])){
         $dtNasc = $_REQUEST['dtNasc'];
         $dtNow = date('Y-m-d');
         

       } else {
           echo "<h5>INFORME A DATA DE NASCIMENTO.</h5>";
           $dtNasc = date('Y-m-d');
       }
      ?>

     <h4>É maior de idade?</h4>
     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <label>Data de Nascimento:</label> <br />
       <input id="dtNasc" name="dtNasc" type="date" value="<?=$dtNasc?>" />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
