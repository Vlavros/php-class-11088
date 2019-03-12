<?php
echo "<h2>server-info</h2>";

/*
echo "<pre>";
print_r($_SERVER); //A SUPERGLOBAL $_SERVER É UM ARRAY
echo "</pre>";
*/

/*
foreach($_SERVER as $sValue) {
  echo $sValue;
  echo "<br>";
}
*/

$htmlServerInfo  = "<table class=\"table table-striped\">";
$htmlServerInfo .= "<thead>";
$htmlServerInfo .= "<tr>";
$htmlServerInfo .= "<th>CHAVE</th>";
$htmlServerInfo .= "<th>VALUE</th>";
$htmlServerInfo .= "</tr>";
$htmlServerInfo .= "</thead>";

$htmlServerInfo .= "<tbody>";
foreach ($_SERVER as $key => $value) { //key é o index
  //echo "$key -> $value <br>";

  $htmlServerInfo .= "<tr>";
  $htmlServerInfo .= "<td>$key</td>";
  $htmlServerInfo .= "<td>$value</td>";
  $htmlServerInfo .= "</tr>";

}
$htmlServerInfo .= "</tbody>";
$htmlServerInfo .= "</table>";

//echo $htmlServerInfo;
 ?>

 <!DOCTYPE html>
 <html lang="pt-br" style="width:100%;height:100%;">
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
       //alert("Teste");
     });
     </script>
   </head>
   <body style="width:100%;height:100%;">
     <div id="divContent">
       <?php
         //TODO:
         echo $htmlServerInfo;
        ?>
     </div>

   </body>
 </html>
