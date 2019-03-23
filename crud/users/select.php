<?php

  require_once("../../core/config.php");
  require_once('../../core/autoloader.php');

  $dsUsers = new Users();
  $dsUsers->selectAll();

  $oSQL = $dsUsers->getQueryResult();

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
      //alert("Teste");
    });
    </script>
  </head>
  <body style="width:100%;height:100%;">
    <div id="divContent">
      <table border="1">
        <theader>
          <tr>
            <th>user_id</th>
            <th>user_login</th>
            <th>user_email</th>
            <th>user_password</th>
          </tr>
        </theader>
        <tbody>
          <?php while ($row = $oSQL->fetch_assoc()) { ?>
            <tr>
              <td><?=$row["user_id"]; ?></td>
              <td><?=$row["user_login"]; ?></td>
              <td><?=$row["user_email"];?></td>
              <td><?=$row["user_password"];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </body>
</html>
