<?php

require_once("./utilities/menu-utilities.php");

$asLinks1 = [];

$asLinks1[] = [
   "href" => "exercices/ex4-pag23-form.php",
   "target" => "ifrNav",
   "caption" => "Exercício 4 da pag 23"
];

$asLinks1[] =[
   "href" => "exercices/ex4-pag23-form-v2.php",
   "target" => "ifrNav",
   "caption" => "Exercício 4 da pag 23 (2)"
];

$asLinks1[] =[
   "href" => "exercices/ex5-pag23-form.php",
   "target" => "ifrNav",
   "caption" => "Exercício 5 da pag 23"
];

/* */

$asLinks2 = [];

/* */

$asLinks3 = [];

$asLinks3 = [[
   "href" => "#",
   "target" => "ifrNav",
   "caption" => "AAAA"
],[
   "href" => "#",
   "target" => "ifrNav",
   "caption" => "BBBB"
]];

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <title>Aula 28/Fev</title>

        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
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

    <body style="width:100%;height:100%">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand"
               href="#">
                <img src="./media/images/bird.jpg"
                     alt="Logo"
                     style="width:40px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php">Index</a>
                </li>

                <?=buildDropdownMenu( "NavItem2", "Teste String", $asLinks1)?>

                <?=buildDropdownMenu( "NavItem3", "Vazio", $asLinks2)?>

                <?=buildDropdownMenu( "NavItem4", "Letras", $asLinks3)?>

            </ul>
        </nav>
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav"
                    name="ifrNav"
                    style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>
