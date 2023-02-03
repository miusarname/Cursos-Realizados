<?php

session_start();

if(isset($_SESSION["user"])){
    echo "user ".$_SESSION["user"]." Status ".$_SESSION["status"];//<--accessed from external file
}else{
    echo "no hay datos";
}


?>