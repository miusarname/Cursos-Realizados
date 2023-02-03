<?php 
if($_POST){
    $name = $_POST['txtNombre'];
    $lastName = $_POST['lastName'];
    echo "Hello " . $name . " " . $lastName;

}

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
    

    <form action="ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtNombre">
        <br>
        Apellido
        <input type="text" name="lastName">
        <input type="submit" value="Send">
    </form>
</body>

</html>