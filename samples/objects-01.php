<?php
  $fileName = "../data/main_index.csv";
  $asData   = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $aaData   = [];

  foreach ($asData as $csvData) {
    $aaData[] = explode(";",$csvData);
  }

  $aaDataAssoc = [];
  foreach ($asData as $csvData) {
    if(false) {
      $asLink = explode(";",$csvData);
      $aaDataAssoc[] = ["href" => $asLink[0], "target" => $asLink[1], "caption" => $asLink[2]];
    } else {
      list($sHref, $sTarget, $sCaption) = explode(";",$csvData);
      $aaDataAssoc[] = ["href" => $sHref, "target" => $sTarget, "caption" => $sCaption];
    }
  }

    //Objetos
    $oLink_num = (object)$aaData[0];
    $oLink_ass = (object)$aaDataAssoc[0];
    //${0teste} = "AAA";

    $htmlTable  = "<table class=\"table table-striped\">";

      $htmlTable .= "<thead>";
        $htmlTable .= "<tr>";
          $htmlTable .= "<th>Rep.</th>";
          $htmlTable .= "<th>Href</th>";
          $htmlTable .= "<th>Target</th>";
          $htmlTable .= "<th>Caption</th>";
        $htmlTable .= "</tr>";
      $htmlTable .= "</thead>";

      $htmlTable .= "<tbody>";

        $htmlTable .= "<tr>";
          $htmlTable .= "<td>array num</td>";
          $htmlTable .= "<td>{$aaData[0][0]}</td>";
          $htmlTable .= "<td>{$aaData[0][1]}</td>";
          $htmlTable .= "<td>{$aaData[0][2]}</td>";
        $htmlTable .= "</tr>";

        $htmlTable .= "<tr>";
          $htmlTable .= "<td>object num</td>";
          $htmlTable .= "<td>{$oLink_num->{0}}</td>";
          $htmlTable .= "<td>{$oLink_num->{1}}</td>";
          $htmlTable .= "<td>{$oLink_num->{2}}</td>";
        $htmlTable .= "</tr>";

        $htmlTable .= "<tr>";
          $htmlTable .= "<td>array assoc</td>";
          $htmlTable .= "<td>{$aaDataAssoc[0]["href"]}</td>";
          $htmlTable .= "<td>{$aaDataAssoc[0]["target"]}</td>";
          $htmlTable .= "<td>{$aaDataAssoc[0]["caption"]}</td>";
        $htmlTable .= "</tr>";

        $htmlTable .= "<tr>";
          $htmlTable .= "<td>object assoc</td>";
          $htmlTable .= "<td>{$oLink_ass->href}</td>";
          $htmlTable .= "<td>{$oLink_ass->target}</td>";
          $htmlTable .= "<td>{$oLink_ass->caption}</td>";
        $htmlTable .= "</tr>";

      $htmlTable .= "</tbody>";

    $htmlTable .= "</table>";


    $aoLink = [];
    foreach ($aaDataAssoc as $asLink) {
      $aoLink[] = (object)$asLink;
    }

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - 14/Mar - Objetos 01</title>
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
        echo "<pre style=\"border-style: solid;\"> \$asData";
        print_r($asData);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$aaData";
        print_r($aaData);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$aaDataAssoc";
        print_r($aaDataAssoc);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$oLink_num \n";
        print_r($oLink_num);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$oLink_ass \n";
        print_r($oLink_ass);
        echo "</pre>";

        echo "<div style=\"border-style: solid;\"> \$htmlTable <br>";
        echo $htmlTable;
        echo "</div>";

        echo "<pre style=\"border-style: solid;\"> \$aoLink \n";
        print_r($aoLink);
        echo "</pre>";

       ?>
    </div>

  </body>
</html>
