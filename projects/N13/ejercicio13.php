<?php

if ($_POST) {

    $btn = $_POST['btnVal'];

    switch ($btn) {
        case 1:
            echo 'press 1';
            break;
        case 2:
            echo 'press 2';
            break;
        case 3:
            echo 'press 3';
            break;


    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swicht</title>
</head>

<body>
    <form action="ejercicio13.php" method="post">

        <input type="submit" name="btnVal" value="1">
        <br>
        <input type="submit" name="btnVal" value="2">
        <br>
        <input type="submit" name="btnVal" value="3">
    </form>
</body>

</html>