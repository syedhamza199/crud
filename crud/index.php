<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>calculator</h2>
    <form method="POST">
    Enter number : <input type="text" name="num1" id="">
    Enter number : <input type="text" name="num2" id="">

    <select name="operation" id="">
        <option value="add">add</option>
        <option value="sub">sub</option>
        <option value="mul">mul</option>
        <option value="divi">div</option>
    </select>
    <div>
        <input type="submit" name="submit" value="submit" id="">
        <button name="btn" onclick="<?php header("Location: form.php"); ?>">Form</button>
    </div>
    </form>
    <?php
        // if(isset($_POST['submit']))
        // {
        //     $num1 = $_POST['num1'];
        //     $num2 = $_POST['num2'];
            
        //     $operation = $_POST['operation'];
        //     switch($operation){
        //         case "add":
        //             $sum = $num1 + $num2;
        //             echo "the addition of $num1 and $num2 is $sum";
        //             break;
        //         case "sub":
        //             $sub = $num1 - $num2;
        //             echo "the subtra of $num1 and $num2 is $sub";
        //             break;
        //         case "mul":
        //             $mul = $num1 * $num2;
        //             echo "the multi of $num1 and $num2 is $mul";
        //             break;   
        //         case "divi":
        //             $divi = $num1 / $num2;
        //             echo "the divion of $num1 and $num2 is $divi";
        //             break; 
        //         }   
        // }
            
            
    ?>
</body>
</html>