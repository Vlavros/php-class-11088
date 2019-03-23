<?php
//define("BS_VERSION","4.3.1"); //Define versão do bootstrap constante
$sBsVersion = "4.3.1";

if(isset($_SESSION["USE-CDN"]) && $_SESSION["USE-CDN"] === false) {
  echo
  "
    <link rel=\"stylesheet\" href=\"/php-class-11088/lib/jquery-ui/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/php-class-11088/lib/fontawesome/css/all.css\">
    <link rel=\"stylesheet\" href=\"/php-class-11088/lib/bootstrap/css/bootstrap.css\">
    <script src=\"/php-class-11088/js/jquery.js\"></script>
    <script src=\"/php-class-11088/js/popper.js\"></script>
    <script src=\"/php-class-11088/lib/bootstrap/js/bootstrap.js\"></script>
    <script src=\"/php-class-11088/lib/bootstrap/{$sBsVersion}/js/bootstrap.js\"></script>
    <script src=\"/php-class-11088/lib/jquery-ui/jquery-ui.js\"></script>
   ";
} else {
  //<!-- ARQUIVOS ONLINE (NA NUVEM) - CÓDIGO COPIADO DE https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_dropdown-active&stacked=h -->
  echo
  '
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  ';
}
 ?>
