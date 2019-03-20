<?php
  require_once '../../core/classDatabase.php';

  $dbData = new Database();

  $dbData->startDatabase();
  $sStatus = $dbData->status();

  $dbData->select("products",[],[]);

  $oSQL = $dbData->getQueryResult();

  $row_teste = $oSQL->fetch_assoc()
  //$row = $oSQL->num_rows();


 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - 18/Mar - Criar Usuário</title>
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
        echo "<h5>$sStatus</h5>";

        echo "<h5>Registros: {$dbData->recordCount()}</h5>";

        echo "<pre style=\"border-style: solid;\"> \$dbData->getRecord \n";
        while ($asRecord = $dbData->getRecord_object()) {
          print_r($asRecord);
        }
        echo "</pre>";
      ?>

      <table border="1">
        <theader>
          <tr>
            <th>ProductID</th>
            <th>ProductName</th>
            <th>SupplierID</th>
          </tr>
        </theader>
        <tbody>
          <?php while ($row = $oSQL->fetch_assoc()) { ?>
            <tr>
              <td><?=$row["ProductID"]; ?></td>
              <td><?=$row["ProductName"]; ?></td>
              <td><?=$row["SupplierID"];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <?php
        echo "<pre style=\"border-style: solid;\"> \$oSQL \n";
        print_r($oSQL);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$row \n";
        print_r($row_teste);
        echo "</pre>";

       ?>
    </div>

  </body>
</html>
