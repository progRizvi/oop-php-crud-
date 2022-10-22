<?php
include("header.php");
include("controller.php");

$obj = new Crud();

$result = $obj->read();
?>
<div class="container mt-5">
  <h1 class="text-center mb-5">CRUD Operation With OOP PHP</h1>
  <a href="user.php" class="btn btn-outline-primary mb-2">Add User</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($row = mysqli_fetch_assoc($result)){
        // var_dump($result);
        echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['mobile']}</td>
        <td>
          <button class='btn' name='updateId'><a class='btn btn-outline-info' href='update.php?updateId={$row['id']}'>Update</a></button>
          <button class='btn' name='delete'><a class='btn btn-outline-danger' href='delete.php?deleteid={$row['id']}'>Delete</a></button>
        </td>
      </tr>";
      }
      ?>
    </tbody>
  </table>

</div>

<?php
include("footer.php")


?>