<?php
    include 'conn.php';

    $idupdate = $_GET['id'];

    $sql = "DELETE FROM users_data WHERE id = $idupdate";
    $result = mysqli_query($connect,$sql);

    header('location:display.php');
?>