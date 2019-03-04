<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04/Mar - Exercício 03</title>
  </head>
  <body>
    <p>
      Entrar com nome, sexo e idade de uma
      pessoa. Se a pessoa for do sexo feminino e
      tiver menos que 25 anos, imprimir nome e a
      a mensagem: ACEITA. Caso contrário,
      imprimir nome e a mensagem: NÃO ACEITA.
    </p>
    <?php
      if(isset($_REQUEST['txtName']) && !empty($_REQUEST['txtName']) && isset($_REQUEST['dtNasc']) && !empty($_REQUEST['dtNasc']) && isset($_REQUEST['cbSexo']) && !empty($_REQUEST['cbSexo'])){
          //print_r($_REQUEST);
          $txtName = $_REQUEST['txtName'];

          $cbSexo = $_REQUEST['cbSexo'];
          $txtSexo = ($cbSexo == 'M') ? "masculino" : "feminino";

          $txtNasc = $_REQUEST['dtNasc'];
          $dtNasc = new DateTime($txtNasc);
          $now = new DateTime();
          $dteDiff  = $dtNasc->diff($now);
          $nIdade= $dteDiff->format('%y');

          echo "<h5>A pessoa $txtName de $nIdade anos do sexo $txtSexo foi: ";

          if($cbSexo == "F" && $nIdade < 25 ) {
            echo "ACEITA</h5>";
          } else {
            echo "NÃO ACEITA</h5>";
          }

      } else {
          echo "<h5>Preencha todo o formulário.</h5>";
      }
     ?>
     <form id="frmExercicio" name="frmExercicio" method="get" action="#">
       <label>Nome:</label> <br />
       <input id="txtName" name="txtName" type="text" /> <br />
       <label>Data Nascimento:</label> <br />
       <input id="dtNasc" name="dtNasc" type="date" /> <br />
       <label>Sexo:</label> <br />
       <select name="cbSexo" id="cbSexo">
         <option value="M">Masculino</option>
         <option value="F">Feminino</option>
       </select><br />
       <input id="subVerify" type="submit" value="Verificar" />
     </form>
  </body>
</html>
