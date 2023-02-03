<?php

$frutas = array("fresa", "pera", "manzana");

print_r($frutas);
//read index
echo $frutas[1]."<br/>";

//"iteration" with arrays
for($index=0;$index < 3;$index++){
    echo $frutas[$index]."<br/>";
}


?>