<?php

$nombreArchivo = "archivo.txt";
$contenidoArchivo = "Hola desde text creado en php";

$crearArchivo = fopen($nombreArchivo,"w");

fwrite($crearArchivo, $contenidoArchivo);
fclose($crearArchivo);

?>