<?php
include("controller.php");
$obj = new Crud();

if(isset($_GET["deleteid"])){
  $id = $_GET["deleteid"];
  $obj->delete($id);
  header("Location: index.php");
}

?>