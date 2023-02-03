<?php
if ($_POST) {
    //def vars
    $val1 = $_POST['Val1'];
    $val2 = $_POST['Val2'];
    //opers
    $resta = $val1 - $val2;
    $multiply = $val1 * $val2;
    $Div = $val1 / $val2;
    $suma = $val1 + $val2;
    //print
    echo $suma . ('<br/>');
    echo $resta . ('<br/>');
    echo $multiply . ('<br/>');
    echo $Div . ('<br/>');
}
;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio8.php" method="post">
        First Val
        <input type="text" name="Val1"><br>
        Second Val
        <input type="text" name="Val2"><br>
        <input type="submit" value="Calcular">

    </form>
</body>

</html>