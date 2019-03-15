<?php

  $oObject01 = (object)["name" => "Vlad", "email" => "vlad@mail.com"];

  //Objeto em javascript
  $jsonData = '{
    "name": "teste1",
    "email": "teste1@email.com"
  }';

  $oData = json_decode($jsonData);

  $jsonString = json_encode($oObject01);

// {"name":"Vlad","email":"vlad@mail.com"}
function jsonDecode ($json) : object {
    $objJson = null;
    $json = str_replace(["{", "}", "\""],"",$json);

    $aJson = explode(",",$json);
    foreach ($aJson as $key => $value) {
      $aJson[$key] = explode(":",$value);
    }

    $objJson = [];
    foreach ($aJson as $key => $value) {
      $objJson[$value[0]] = $value[1];
    }

    print_r($objJson);

    return (object)$objJson;
}

$objJson = jsonDecode("{\"name\":\"Vlad\",\"email\":\"vlad@mail.com\"}");
echo "<br>";
print_r($objJson);


 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - 14/Mar - Objetos 02</title>
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

        echo "<pre style=\"border-style: solid;\"> \$oData \n";
        print_r($oData);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$jsonString \n";
        print_r($jsonString);
        echo "</pre>";

       ?>
    </div>

  </body>
</html>
