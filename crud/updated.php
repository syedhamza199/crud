<?php
include ('conn.php');
    $idupdate = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "UPDATE `users_data` SET `id`='$idupdate',`Email`='$email',`Passwords`='$pass' WHERE $idupdate";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "updated !";
        header("Location: display.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
?>