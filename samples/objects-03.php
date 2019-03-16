<?php
  $sTeste = "batata";

  $obj = new stdClass();
  $obj->name = "Nick";
  $obj->surname = "Doe";
  $obj->age = 20;
  $obj->adresse = null;
  $obj->$sTeste = "teste";

  $sTeste = "batata2";

  $oStdMenu = new stdClass();
  $oStdMenu->id      = "menu_01";
  $oStdMenu->caption = "Menu 01";
  $oStdMenu->itens   = [];

  $oStdItemMenu = new stdClass();
  $oStdItemMenu->href    = "#";
  $oStdItemMenu->target  = "_self";
  $oStdItemMenu->caption = "Item 01";
  /*
  $oItemMenu->set = function() {
    echo "AAA";
  }
  */
  $oStdMenu->itens[] = $oStdItemMenu;

Class Menu{
  var $id      = "";
  var $caption = "";
  var $itens   = [];

  function Menu() {
    //$id = this.$id;
  }

}

Class ItemMenu{
  public $href;
  public $target;
  public $caption;
}

$oMenuClass = new Menu();
$oMenuClass->id      = "menu_01";
$oMenuClass->caption = "Menu 01";

$oItemMenu = new ItemMenu();
$oItemMenu->href    = "#";
$oItemMenu->target  = "_self";
$oItemMenu->caption = "Obj Item 01";

$oMenuClass->itens[] = $oItemMenu;

 ?>
<!DOCTYPE html>
<html lang="pt-br" style="width:100%;height:100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - 15/Mar - Objeto 03</title>
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

        echo "<pre style=\"border-style: solid;\"> \$oMenuClass \n";
        print_r($oMenuClass);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$oStdMenu \n";
        print_r($oStdMenu);
        echo "</pre>";

        echo "<pre style=\"border-style: solid;\"> \$sTeste \n";
        print_r($obj);
        echo "</pre>";


       ?>
    </div>

  </body>
</html>
