<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>

<body>
    <?php
    include 'links.php';
    ?>


    <h3>LISTS of DATA</h3>
            <table class=" text-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conn.php';

                $sql = "SELECT * FROM users_data ";
                $result = mysqli_query($connect, $sql);
                while ($data = mysqli_fetch_array($result)) {
                ?>

                    <tr>
                        <td><?php echo $data['id'] . "<br>"; ?></td>
                        <td><?php echo $data['User_email'] . "<br>"; ?></td>
                        <td><?php echo $data['User_password'] .  "<br>"; ?></td>
                        <td><a href="update.php?id=<?php echo $data['id'] ?>" data-toggle="tooltip" title="Update"><i class="fa fa-edit"></i></a></td>
                        <td><a href="delete.php?id=<?php echo $data['id'] ?>" data-toggle="tooltip" title="Remove"><i class="fa fa-trash"></i></a></td> 
                    </tr>
                <?php

                }

                ?>

            </tbody>

        </table>
        <h4>Insert data</h4>
    <a href="form.php"> Click Here </a>
</body>

</html>