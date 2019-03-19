<?php

Class Menu{
  private $id;
  private $caption;
  private $itens;

  public function __construct($id,$caption) { //metodo construtor
    $this->id = $id;
    $this->caption = $caption;
  }

  public function __destruct() {
  }  

  public function addItem( object $oItemMenu ) {
    $this->itens[] = $oItemMenu;
  }

  public function countItens() {
    return count($this->itens);
  }

  public function getItem($iIndex) {
    return $this->itens[$iIndex];
  }

}

Class ItemMenu{
  private $href;
  private $target;
  private $caption;

  public function __construct($href,$target,$caption) { //metodo construtor
    $this->href = $href;
    $this->target = $target;
    $this->caption = $caption;
  }

  public function __destruct() {
  }

}

$oMenuClass = new Menu("menu_01","Menu 01");

$oItemMenu = new ItemMenu("#","_self","Obj Item 01");
$oMenuClass->addItem($oItemMenu);

$oItemMenu = new ItemMenu("#","_self","Obj Item 02");
$oMenuClass->addItem($oItemMenu);

$oItemMenu = new ItemMenu("#","_self","Obj Item 03");
$oMenuClass->addItem($oItemMenu);

$oMenuClass->addItem(new ItemMenu("#","_self","Obj Item 04"));

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

       ?>
    </div>

  </body>
</html>
