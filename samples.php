<?php

require_once("./utilities/menu-utilities.php");

$asLinks1 = [];

$asFiles = [
  [
     "href" => "./samples/load-file.php",
     "target" => "ifrNav",
     "caption" => "Load"
  ],
  [
     "href" => "#",
     "target" => "ifrNav",
     "caption" => "ITEM 02"
  ]
];

$asSession = [
  [
     "href" => "./samples/session-01.php",
     "target" => "ifrNav",
     "caption" => "Session 01 - Create"
  ],
  [
     "href" => "./samples/session-02.php",
     "target" => "ifrNav",
     "caption" => "Session 02 - Use"
  ],
  [
     "href" => "./samples/session-03.php",
     "target" => "ifrNav",
     "caption" => "Session 03 - Destroy"
  ]
];

$asObjects = [
  [
     "href" => "./samples/objects-01.php",
     "target" => "ifrNav",
     "caption" => "Objetos"
  ],
  [
     "href" => "./samples/objects-02.php",
     "target" => "ifrNav",
     "caption" => "JSON"
  ],
  [
     "href" => "./samples/arrays.php",
     "target" => "ifrNav",
     "caption" => "Arrays"
  ],
  [
     "href" => "./samples/objects-03.php",
     "target" => "ifrNav",
     "caption" => "Objetos e Classes 01"
  ],
  [
     "href" => "./samples/objects-04.php",
     "target" => "ifrNav",
     "caption" => "Objetos e Classes 02"
  ]
];

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head style="width:100%;height:100%;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samples</title>
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
  <body>
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

            <?=buildDropdownMenu( "NavItem01", "Files",   $asFiles)?>
            <?=buildDropdownMenu( "NavItem02", "Session", $asSession)?>
            <?=buildDropdownMenu( "NavItem03", "Objects", $asObjects)?>

        </ul>
    </nav>
    <div style="position:absolute;top:60px;width:100%;height:90%;background-color:#000;padding:10px;">
        <iframe id="ifrNav"
                name="ifrNav"
                style="width:100%;height:100%;background-color:#aaa"></iframe>
    </div>
  </body>
</html>
