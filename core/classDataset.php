<?php

//require_once 'autoloader.php';

class Dataset extends Database{
  protected $sTable;
  protected $asFields;
  protected $abPrimary;

  function __construct() {
    $this->startDatabase();
  }

  public function selectAll(){
    $this->select_($this->sTable,$this->asFields,[]);
  }

  public function select(array $asFields, array $asFilter) {

  }

}

 ?>
