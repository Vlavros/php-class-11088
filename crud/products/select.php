<?php
  require_once '../../core/autoloader.php';

  $dsProducts = new Products();
  //$dsProducts->selectAll();
  //$dsProducts->selectOne(30);

  //$dsProducts->select(["ProductID","ProductName","SupplierID","CategoryID"],["SupplierID"=>3,"CategoryID"=>2]);
  //$dsProducts->select(["ProductID","ProductName","SupplierID","CategoryID"],["ProductName"=>"Chef Anton's Gumbo Mix"]);
  $dsProducts->select(["ProductID","ProductName","SupplierID","CategoryID"],["ProductName"=>"Chai"]);

  $oSQL = $dsProducts->getQueryResult();

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

      <table border="1">
        <theader>
          <tr>
            <th>ProductID</th>
            <th>ProductName</th>
            <th>SupplierID</th>
            <th>CategoryID</th>
          </tr>
        </theader>
        <tbody>
          <?php while ($row = $oSQL->fetch_assoc()) { ?>
            <tr>
              <td><?=$row["ProductID"]; ?></td>
              <td><?=$row["ProductName"]; ?></td>
              <td><?=$row["SupplierID"];?></td>
              <td><?=$row["CategoryID"];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <br>

      <?php

        //echo "<pre style=\"border-style: solid;\"> \$asRecord \n";
        //  while ( $asRecord = $dsProducts->getRecord_object() ){
        //      print_r( $asRecord );
        //  } // while ( $asRecord = $dbData->getRecord() ){
        //echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$dsProducts \n";
        print_r($dsProducts);
        echo "</pre>";

       ?>
    </div>

  </body>
</html>
