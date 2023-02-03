<?php
//assignment of index
$frutas = array("F" => "fresa", "P" => "pera", "M" => "manzana");
print_r($frutas);

echo "<br/>" . $frutas[1] . "<br/>";

foreach($frutas as $index=>&$valor ){
    echo $index . "<br/>";
    echo $frutas[$index]  . "<br/>";
}

?>