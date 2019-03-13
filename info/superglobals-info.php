<?php
require_once("../utilities/table-utilities.php");
 ?>

 <!DOCTYPE html>
 <html lang="pt-br" style="width:100%;height:100%;">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Server Info</title>
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
       <?=createTable("\$_REQUEST","_REQUEST",$_REQUEST)?>
       <hr>
       <?=createTable("\$_SERVER","_SERVER",$_SERVER)?>
       <hr>
       <?=createTable("\$_ENV","_ENV",$_ENV)?>
     </div>

   </body>
 </html>
