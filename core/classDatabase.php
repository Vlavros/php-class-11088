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

  public function __construct(){
    //TODO: carregar informações de acesso ao banco de dados a partir de um arquivo
  }

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
        break;
    } //switch ($this->sDriver) {

    if($this->dbConn) {
      $this->sStatus = "Database connection ready.";
      $this->bStatus = true;
    } else {
      $this->sStatus = "Connect error: " . mysqli_connect_errno(). " - " . mysqli_connect_error();
      $this->bStatus = false;
    } //if($this->dbConn) {

  } //public function startDatabase() {

  public function status() : string {
    return $this->sStatus;
  } //public function error() : string {
}

 ?>
