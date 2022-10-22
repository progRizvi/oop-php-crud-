<?php
include("controller.php");
include("header.php");
$obj = new Crud();

$id ;
if(isset($_GET["updateId"])){
  $id = $_GET["updateId"];
  $result = $obj->getById($id);

  $row = mysqli_fetch_assoc($result);

}



if(isset($_POST["submit"])){
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $mobile = trim($_POST['mobile']);
  $password = $_POST['password'];
  $obj->update($name, $email, $mobile, $password,$id);
}

?>
<div class="container mt-5">

  <h2 class="mb-3">Update Information</h2>
  <hr>
  <form method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo $row["name"]?>">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" value="<?php echo $row["email"]?>">
    </div>
    <div class="mb-3">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="mobile" class="form-control" name="mobile" value="<?php echo $row["mobile"]?>">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="<?php echo $row["password"]?>">
    </div>
    <button name="submit" type="submit" class="btn btn-outline-info">Update</button>
  </form>

</div>