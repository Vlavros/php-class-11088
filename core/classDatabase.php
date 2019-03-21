<?php

class Database {
  private $sDriver = "MYSQL";

  private $sHost = "localhost";
  private $iPort = 3306;

  private $sUser = "root";
  private $sPass = "";

  private $sDatabase = "northwind";

  private $dbConn = null;

  private $sStatus = "";
  private $bStatus = false;

  private $vQueryResult = false; //v de Variant

  public function __construct(){
    //TODO: carregar informações de acesso ao banco de dados a partir de um arquivo
  } //public function __construct(){

  public function __destruct() {
      if($this->dbConn) {
        switch ($this->sDriver) {
          case 'POSTGRESQL':
            break;

          case 'MYSQL':
          default:
            mysqli_close($this->dbConn);
        }
      }
  } //public function __destruct() {

  public function startDatabase() {
    switch ($this->sDriver) {
      case 'POSTGRESQL':
        break;

      case 'MYSQL':
      default:
        $this->dbConn = mysqli_connect( /* OU new mysqli($this->sHost, ....  */
                                        $this->sHost,
                                        $this->sUser,
                                        $this->sPass,
                                        $this->sDatabase);
    }

    if($this->dbConn) {
      $this->sStatus = "Database connection ready.";
      $this->bStatus = true;
    } else {
      $this->sStatus = "Connect error: " . mysqli_connect_errno(). " - " . mysqli_connect_error();
      $this->bStatus = false;
    }

  } //public function startDatabase() {

    public function status() : string {
      return $this->sStatus;
    }

  public function getQueryResult() {
    return $this->vQueryResult;
  }

  public function recordCount() {
    return mysqli_num_rows($this->vQueryResult);
  }

  public function getRecord() {
    return mysqli_fetch_array($this->vQueryResult);
  }

  public function getRecord_object() {
    return mysqli_fetch_object($this->vQueryResult);
  }

  public function getRecord_assoc() {
    return mysqli_fetch_assoc($this->vQueryResult);
  }

  private function exec($sqlCommand) {
    if($this->dbConn) {
      switch ($this->sDriver) {
        case 'POSTGRESQL':
          break;

        case 'MYSQL':
        default:
          $this->vQueryResult = mysqli_query($this->dbConn,$sqlCommand);
      }
    }
  }

  public function insert() {
    //TODO:
  }

  public function update() {
    //TODO:
  }

  public function delete() {
    //TODO:
  }

  /**
  * @param type $asFields ["ProdctId","ProductName", ...] - Se for array vazio seleciona todos
  * @param type $sTable products
  * @param type $asFilter ["Category" => category_id] - Se for array vazio não tem filtro
  */
  public function select_($sTable, array $asFields, array $asFilter) { //mudar para protect
    $sFields = "*";

    if(count($asFields) !== 0) {
      $sFields = $this->getFieldsList($asFields);
    }

    $sql = "SELECT $sFields FROM $sTable";
    $this->exec($sql);

  }

  private function getFieldsList(array $asFields) : string {
    if(false) { //SOLUCAO 01
      $i = 0;
      foreach ($asFields as $sField) {
        $i++;
        if($i === 1) {
          $sFields = $sField;
          continue;
        }
        $sFields .= ",".$sField;
      }
    } else { //SOLUCAO 02
      $sFields = array_shift($asFields); //remover o primeiro elemento e o retorna | array_pop -> o ultimo
      foreach ($asFields as $sField) {
        $sFields .= ",".$sField;
      }
    }

    return $sFields;
  }

}

 ?>
