<?php
function createTable( string $sTitulo, $sId, array $asTable) : string {

  $htmlTable  = "<table id=\"table($sId)\" class=\"table table-striped\">";

  $htmlTable .= "<thead>";
  $htmlTable .= "<tr>";
  $htmlTable .= "<th COLSPAN=\"2\">$sTitulo</th>";
  $htmlTable .= "</tr>";

  $htmlTable .= "<tr>";
  $htmlTable .= "<th>CHAVE</th>";
  $htmlTable .= "<th>VALUE</th>";
  $htmlTable .= "</tr>";
  $htmlTable .= "</thead>";

  $htmlTable .= "<tbody>";
  foreach ($asTable as $key => $value) {
    $htmlTable .= "<tr>";
    $htmlTable .= "<td>$key</td>";
    $htmlTable .= "<td>$value</td>";
    $htmlTable .= "</tr>";
  }
  $htmlTable .= "</tbody>";
  $htmlTable .= "</table>";

  return $htmlTable;
}
?>
