<?php

$server = 'localhost:49674';
$user = 'root';
$password = "";

try {
    $conection = new PDO("mysql:host=$server:dbname=album", $user, $password); //<-- The connection is created and the username and password parameters are passed to it.
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //<-- Configuring the errors...
             //Down here ↓ I had to select the database and ""concatenate"" it with the table
    $sql = "INSERT INTO album.fotos (`id`, `name`, `route`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";
    $conection->exec($sql);
    echo 'Coneccion extablecida';
} catch (PDOException $error) {
    echo 'error' . $error;
}

?>