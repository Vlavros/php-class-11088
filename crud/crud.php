<?php

require_once("../utilities/menu-utilities.php");

$asProducts =
[
  [
     "href" => "products/select.php",
     "target" => "ifrNav",
     "caption" => "Consultar"
  ],
  [
     "href" => "products/insert.php",
     "target" => "ifrNav",
     "caption" => "Cadastrar"
  ]
];

$asCustomers =
[
  [
     "href" => "#",
     "target" => "ifrNav",
     "caption" => "Consultar"
  ]
];

$asSuppliers =
[
  [
     "href" => "#",
     "target" => "ifrNav",
     "caption" => "Consultar"
  ]
];

$asEmployees =
[
  [
     "href" => "#",
     "target" => "ifrNav",
     "caption" => "Consultar"
  ]
];

$asUsers =
[
  [
     "href" => "users/select.php",
     "target" => "ifrNav",
     "caption" => "Consultar"
  ],
  [
     "href" => "users/insert.php",
     "target" => "ifrNav",
     "caption" => "Cadastrar"
  ]
];


 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - 19/Mar - CRUD</title>
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
            <img src="/php-class-11088/media/images/bird.jpg"
                 alt="Logo"
                 style="width:40px;">
        </a>
        <ul class="navbar-nav">

          <li class="nav-item">
              <a class="nav-link"
                 href="/php-class-11088/index.php">Index</a>
          </li>

            <?=buildDropdownMenu( "NavItem01", "Produtos", $asProducts)?>
            <?=buildDropdownMenu( "NavItem02", "Clientes", $asCustomers)?>
            <?=buildDropdownMenu( "NavItem03", "Fornecedores", $asSuppliers)?>
            <?=buildDropdownMenu( "NavItem04", "Usuários", $asUsers)?>

        </ul>
    </nav>
    <div style="position:absolute;top:60px;width:100%;height:90%;background-color:#000;padding:10px;">
      <iframe id="ifrNav" name="ifrNav" style="width:100%;height:100%;background-color:#aaa">
    </div>
  </body>
</html>
