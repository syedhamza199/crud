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
<?php
        include ('conn.php');
        $getid = $_GET['id'];
        $sql = "SELECT * FROM users_data WHERE id = '$getid'";
        $fetchresult = mysqli_query($connect, $sql);
        $arrdata = mysqli_fetch_array($fetchresult);
    //     if (isset($_POST['submit'])){
    //         $idupdate = $_POST['id'];
    //         $email = $_POST['email'];
    //         $pass = $_POST['password'];
    //         $sql = "UPDATE `users_data` SET `id`='$idupdate',`Email`='$email',`Passwords`='$pass' WHERE $idupdate";
    //         $result = mysqli_query($connect, $sql);
    //         if ($result) {
    //             echo "updated !";
    //             // header("Location: update.php");
    //         } else {
    //             echo "Error: " . $sql . "<br>" . $connect->error;
    //         }
    // }
?>

<body>
    <form action="updated.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email"
            name="email" value="<?php echo $arrdata['Email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password"
            name="password" value="<?php echo $arrdata['Passwords']; ?>" required>
            <input type="text" value="<?php echo $arrdata['id'];?>" name="id">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>


    <br>
    <hr>

    <h4>Checked Inserted data</h4>
    <a href="display.php"> Click Here </a>
</body>

</html>