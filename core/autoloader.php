<?php

$asDirs = [];

function loadDirs() {
  global $asDirs;
  $sLocation = $_SERVER["DOCUMENT_ROOT"]."/php-class-11088";
  $asDirs =
  [
    "core" => $sLocation."/core/",
    "product" => $sLocation."/crud/products/"
  ];

}

function loader ($sClassName) {
  global $asDirs;

  foreach ($asDirs as $sDir) {
    $sFile = $sDir."class$sClassName.php";
    if(file_exists($sFile)) {
      require_once($sFile);
      return true;
    }
  }
  return false;
}

loadDirs();

spl_autoload_register("loader");

 ?>
