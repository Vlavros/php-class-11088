<?php

  require_once("../../core/config.php");
  require_once('../../core/autoloader.php');

  $dsUsers = new Users();

  if(isset($_POST["user_login"])) {
    $dsNewUsers = new Users();
    //$dsNewUsers->insert($_POST);
    $dsNewUsers->insertNewUser($_POST["user_login"],$_POST["user_email"],$_POST["user_password"]);

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
  }


 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - 22/Mar - Select Users</title>
    <?php require_once("../../templates/headers.js.php"); ?>
    <script>
    $(function() {

      /*$( "#btnSubmit" ).click(function() {
        alert("AAAA");
      });*/

      $("#frmUsers").submit(function(e){
          //alert('submit intercepted');
          //e.preventDefault(e);
      });

    });
    </script>
  </head>
  <body style="width:100%;height:100%;">
    <div id="divContent">
      <h2>Criar Novo Usuário</h2>

      <form action="insert.php" method="POST" style="padding:50px" id="frmUsers">
        <!--div class="form-group">
          <label for="user_id">Id:</label>
          <input type="text" class="form-control" id="user_id" name="user_id" required>
        </div-->
        <div class="form-group">
          <label for="user_login">Login:</label>
          <input type="text" class="form-control" id="user_login" name="user_login" required>
        </div>
        <div class="form-group">
          <label for="user_email">E-mail:</label>
          <input type="email" class="form-control" id="user_email" name="user_email" required>
        </div>
        <div class="form-group">
          <label for="user_password">Senha:</label>
          <input type="password" class="form-control" id="user_password" name="user_password" required>
        </div>
        <div class="form-group">
          <label for="conf_password">Confirmar senha:</label>
          <input type="password" class="form-control" id="conf_password">
        </div>
        <!--div class="form-group">
          <label for="CustomerID">Id Cliente:</label>
          <input type="text" class="form-control" id="CustomerID" name="CustomerID">
        </div-->
        <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
      </form>
    </div>

  </body>
</html>
