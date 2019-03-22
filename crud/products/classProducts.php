<?php

//require_once '../../core/autoloader.php';
//require_once("../../core/classDataset.php");

class Products extends Dataset{

  function __construct() {
    parent::__construct();
    $this->sTable = "products";
    $this->asFields =
    [
      "ProductID",
      "ProductName",
      "SupplierID",
      "CategoryID",
      "QuantityPerUnit",
      "UnitPrice",
      "UnitsInStock",
      "UnitsOnOrder",
      "ReorderLevel",
      "Discontinued"
    ];
    $this->abPrimary = ["ProductID" => true];
  }

  public function selectByCategory($iCategoryId) {

  }

  public function selectBySupplier($iSupplierId) {
    
  }

}

 ?>
