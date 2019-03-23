<?php

//require_once '../../core/autoloader.php';
//require_once("../../core/classDataset.php");

class Users extends Dataset{

  function __construct() {
    parent::__construct();
    $this->sTable = "users";
    $this->asFields =
    [
      "user_id",
      "user_login",
      "user_email",
      "user_password"
    ];
    $this->abPrimary = ["user_id" => true];
  }

  public function insertNewUser($user_login,$user_email,$user_password) {
    $asColumns =
    [
      $this->asFields[1] => $user_login,
      $this->asFields[2] => $user_email,
      $this->asFields[3] => $user_password
    ];
    //print_r($asColumns);
    $this->insert($asColumns);
  }

}

 ?>
