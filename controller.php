<?php


include_once("connectionDB.php");

class Crud extends Connect{
 
  function create($name, $email, $mobile, $password){
    $sql = "INSERT INTO `class-crud`(name,email,mobile,password) VALUES('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($this->conn, $sql);

    if($result){
      echo "inserted successfully";
      header("Location: index.php");
    }
  }
  function read(){
    $sql = "SELECT * FROM `class-crud`";
    $result = mysqli_query($this->conn, $sql);

    return $result;
  }
  function delete($id){
    $sql = "DELETE FROM `class-crud` where id=$id";
    $result = mysqli_query($this->conn, $sql);

    if($result) header("location: index.php");
  }
  function getById($id){
    $sql = "SELECT * FROM `class-crud` where id=$id";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  function update($name,$email,$mobile,$password,$id){
    $sql = "UPDATE `class-crud` SET name='$name', email='$email', mobile='$mobile',password='$password' WHERE id=$id ";

    $result = mysqli_query($this->conn, $sql);

    if($result) header("location: index.php");
  }
};

?>