<?php

//require_once 'autoloader.php';

class Dataset extends Database{
  protected $sTable;
  protected $asFields;
  protected $abPrimary;

  function __construct() {
    parent::__construct();
    $this->startDatabase();
  }

  public function selectAll(){
    parent::select($this->sTable,$this->asFields,[]);
  }

  public function select(array $asFields, array $asFilter) {
    parent::select($this->sTable,$asFields,$asFilter);
  }

  public function selectOne($vItemId) {
    $sPrimaryKey = array_keys($this->abPrimary)[0];
    $asFilter = [$sPrimaryKey => $vItemId];
    parent::select($this->sTable,$this->asFields,$asFilter);
  }

  public function insert(array $asData) {
    $this->insert_($this->sTable,$asData);
  }

}

 ?>
