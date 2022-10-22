<?php
include("header.php");
include_once("controller.php");

?>
<div class="container mt-5">
  <form method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
  </form>
</div>

</div>

<?php
  if(isset($_POST["submit"])){

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $mobile = trim($_POST['mobile']);
    $password = $_POST["password"];
    if(($name === "" || null) || ($email === "" || null) || ($mobile=== "" || null) || ($password === "" || null) ){
      echo '<div class="alert alert-warning" role="alert">
      All Field are required
    </div>';
    }else{
      $obj = new Crud();
      $result = $obj->create($name, $email, $mobile, $password);
    }
    
    
  }

?>