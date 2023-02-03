<?php

$jsonContenido = '[ 
    {"nombre":"oscar","Apellido":"Alvarez"},
    {"nombre":"Jose","Apellido":"Jose"}
 ]';


$resultado = json_decode($jsonContenido);
print_r($resultado);

foreach($resultado as $persona){
    print_r($persona->nombre);
}

?>