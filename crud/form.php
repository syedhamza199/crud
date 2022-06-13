<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <?php
  include 'links.php'
  ?>

</head>

<body>
<form action="" method="POST" class="m-5">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" value="">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" value="">
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
</form>
<hr>
  
  <h4>Checked Inserted data</h4>
  <a href="display.php"> Click Here </a>
</body>

</html>

<?php

include 'conn.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $sql = "INSERT INTO users_data (Email,Password) VALUES ('$email','$pass')";

  $result = mysqli_query($connect, $sql);

  if ($result) {
    echo "success";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
}
?>