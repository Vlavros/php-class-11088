<?php
  require_once("../utilities/table-utilities.php");

  $sUserAgent = $_SERVER["HTTP_USER_AGENT"];
  $sUserAgent = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko"; //IE

  $iStart = strpos($sUserAgent,"(",0) +1;
  $iEnd   = strpos($sUserAgent,")",$iStart);

  //echo $iStart;
  //echo "<br>";
  //echo $iEnd;

  //echo "<br>";
  $sSO = substr($sUserAgent,$iStart,$iEnd - $iStart);

  //echo $sSO;
  //echo "<br>";

  $aSO = explode(";",$sSO);

  //print_r($aSO);
  //echo "<br>";

  //$sUserAgent[0] = $_SERVER["HTTP_USER_AGENT"];
  //$sUserAgent[1] = $_SERVER["HTTP_HOST"];
  //$sUserAgent[2] = $_SERVER['REMOTE_ADDR'];

  //qual so windows ou linux 32 ou 64 - ipcliente

  foreach ($aSO as $key => $value) {
    $aSO[$key] = trim($value);
  }

 ?>

 <!DOCTYPE html>
 <html lang="pt-br" style="width:100%;height:100%;">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>User Agent Info</title>
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
       <!--?=createTable("User Agent","_USERAGENT",$sUserAgent)?-->
       <pre>
       <?php
        echo "Start: $iStart \n";
        echo "End: $iEnd \n";
        print_r($aSO);
        //echo $sUserAgent;
       ?>
     </pre>
       <br><br><br>
       Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36 <br>
       Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36 <br>
       Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko <br>
       Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0
     </div>

   </body>
 </html>
