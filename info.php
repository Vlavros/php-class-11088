<?php

require_once("./utilities/menu-utilities.php");

$asLinks1 = [];

$asLinks1 = [
[
   "href" => "info/server-info.php",
   "target" => "ifrNav",
   "caption" => "Servidor"
],
[
   "href" => "info/user-agent-info.php",
   "target" => "ifrNav",
   "caption" => "User Agent"
],
[
   "href" => "info/phpinfo.php",
   "target" => "ifrNav",
   "caption" => "PHP Info"
],
[
   "href" => "info/superglobals-info.php?teste=Aula08&Aula=08",
   "target" => "ifrNav",
   "caption" => "Super Globals"
]
];

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
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
  <body style="height:100%;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height:10%;">
        <a class="navbar-brand"
           href="#">
            <img src="./media/images/bird.jpg"
                 alt="Logo"
                 style="width:40px;">
        </a>
        <ul class="navbar-nav">

          <li class="nav-item">
              <a class="nav-link"
                 href="./index.php">Index</a>
          </li>

            <?=buildDropdownMenu( "NavItem01", "Informações", $asLinks1)?>

        </ul>
    </nav>
    <div style="top:60px;width:100%;height:90%;background-color:#000;padding:10px;">
        <iframe id="ifrNav"
                name="ifrNav"
                style="width:100%;height:100%;background-color:#aaa"></iframe>
    </div>
  </body>
</html>
