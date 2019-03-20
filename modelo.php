<?php

require_once("./utilities/menu-utilities.php");

$asLinks1 = [];

$asLinks1 = [
[
   "href" => "#",
   "target" => "ifrNav",
   "caption" => "ITEM 01"
],
[
   "href" => "#",
   "target" => "ifrNav",
   "caption" => "ITEM 02"
]
];

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula XX - XX/Mar - Index</title>
    <link rel="stylesheet" href="/php-class-11088/lib/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="/php-class-11088/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="/php-class-11088/lib/bootstrap/css/bootstrap.css">
    <script src="/php-class-11088/js/jquery.js"></script>
    <script src="/php-class-11088/js/popper.js"></script>
    <script src="/php-class-11088/lib/bootstrap/js/bootstrap.js"></script>
    <script src="/php-class-11088/lib/jquery-ui/jquery-ui.js"></script>
    <script>
    $(function() {
      alert("Teste");
    });
    </script>
  </head>
  <body style="width:100%;height:100%">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand"
           href="#">
            <img src="/php-class-11088/media/images/bird.jpg"
                 alt="Logo"
                 style="width:40px;">
        </a>
        <ul class="navbar-nav">

          <li class="nav-item">
              <a class="nav-link"
                 href="/php-class-11088/index.php">Index</a>
          </li>

            <?=buildDropdownMenu( "NavItem01", "MENU 01", $asLinks1)?>

        </ul>
    </nav>
    <div style="position:absolute;top:60px;width:100%;height:90%;background-color:#000;padding:10px;">
      <iframe id="ifrNav" name="ifrNav" style="width:100%;height:100%;background-color:#aaa">
    </div>
  </body>
</html>
