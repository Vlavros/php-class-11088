<?php
  global $sSessionName; // global apenas dentro do escopo da "página"

  session_start();

  if(isset($_SESSION["session-name"])) {
    $sSessionName = $_SESSION["session-name"];
  } else {
    $sSessionName = "undefine";
  }

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - 18/Mar - Session 03</title>
    <link rel="stylesheet" href="/php-class-11088/lib/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="/php-class-11088/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="/php-class-11088/lib/bootstrap/css/bootstrap.css">
    <script src="/php-class-11088/js/jquery.js"></script>
    <script src="/php-class-11088/js/popper.js"></script>
    <script src="/php-class-11088/lib/bootstrap/js/bootstrap.js"></script>
    <script src="/php-class-11088/lib/jquery-ui/jquery-ui.js"></script>
    <script>
    $(function() {
      //alert("Teste");
    });
    </script>
  </head>
  <body style="width:100%;height:100%;">
    <div id="divContent">
      <?php
        session_destroy();
        echo "<h5>PHP SESSION 02: $sSessionName</h5>";
        echo "<h5>Session destroyed</h5>";
       ?>
    </div>

  </body>
</html>
