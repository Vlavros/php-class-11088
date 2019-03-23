<?php

/*
error_reporting(E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
*/

$asDirs = [];

function loadDirs() {
  global $asDirs;
  $sLocation = $_SERVER["DOCUMENT_ROOT"]."/php-class-11088";
  $asDirs =
  [
    "core" => $sLocation."/core/",
    "product" => $sLocation."/crud/products/",
    "user" => $sLocation."/crud/users/"
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
