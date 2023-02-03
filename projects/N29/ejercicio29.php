<?php

$server = 'localhost:49674';
$user = 'root';
$password = "";

try {
    $conection = new PDO("mysql:host=$server:dbname=album", $user, $password); //<-- The connection is created and the username and password parameters are passed to it.
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //<-- Configuring the errors...


    $sql = "SELECT * FROM album.fotos";
    $sentence = $conection->prepare($sql);//<-- Prepare the command(sql) that I will give you as a parameter
    $sentence->execute();//<-- run it

    //Method 1 of showing "contents" of DB
    $result = $sentence->fetchAll();//<-- "Requests" everything from the DB
    print_r($result);

    //Method 2 of showing "contents" of DB
    foreach($result as $foto){
        print_r($foto);
    }

    echo 'Coneccion extablecida';
} catch (PDOException $error) {
    echo 'error' . $error;
}

?>