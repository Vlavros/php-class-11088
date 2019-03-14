<?php

  $fileName = "../data/main_index.csv";
  //$fileName = "../data/teste.txt";

  $rcFile = fopen($fileName,"r");
  //$rcFile = fopen($fileName,"a");

  $sFileContent_fgets = "";

  if($rcFile) {
    $sStatus_fgets = "Arquivo aberto com sucesso!";
    //fwrite($rcFile, "BBBB");

    while ( $sLine = fgets($rcFile)) {
      $sFileContent_fgets .= $sLine;
      //echo $sLine;
    }

    fclose($rcFile);
  } else {
    $sStatus_fgets = "Erro ao abrir o arquivo!";
  }

  $sFileContent_file = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  if($sFileContent_file)  {
    $sStatus_file = "Arquivo aberto com sucesso!";
  } else {
    $sStatus_file = "Erro ao abrir o arquivo!";
  }

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samples - Open File</title>
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
        echo "<h4>Com fgets</h4>";
        echo "<h5>$sStatus_fgets</h5>";
        echo "<pre>$sFileContent_fgets</pre>";
        echo "<pre>";
        print_r(explode("\n",$sFileContent_fgets));
        echo "</pre>";
        echo "<hr>";

        echo "<h4>Com file</h4>";
        echo "<h5>$sStatus_file</h5>";
        echo "<pre>";
        print_r($sFileContent_file);
        echo "</pre>";
        echo "<hr>";

        

       ?>
    </div>

  </body>
</html>
