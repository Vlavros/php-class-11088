<?php
  require_once '../../core/autoloader.php';

  //require_once 'classProducts.php';

/*
  $dbData = new Database();

  $dbData->startDatabase();
  $sStatus = $dbData->status();

  $asFields = ["ProductId","ProductName","SupplierId"];
  //$asFields = [];

  $dbData->select("products",$asFields,[]);

  $oSQL = $dbData->getQueryResult();

  $row_teste = $oSQL->fetch_assoc()
  //$row = $oSQL->num_rows();
*/

  $dsProducts = new Products();
  $dsProducts->selectAll();
  //$dbData = new Database();




 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - 20/Mar - Criar Usuário</title>
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
/*
        echo "<h5>$sStatus</h5>";

        echo "<h5>Registros: {$dbData->recordCount()}</h5>";
        echo "<pre style=\"border-style: solid;\"> \$dbData->getRecord \n";
        while ($asRecord = $dbData->getRecord_object()) {
          print_r($asRecord);
        }
        echo "</pre>";
*/
      ?>

      <?php
        echo "<pre style=\"border-style: solid;\"> \$dsProducts \n";
        print_r($dsProducts);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$row \n";
        //print_r($row_teste);
        echo "</pre>";

       ?>
    </div>

  </body>
</html>
