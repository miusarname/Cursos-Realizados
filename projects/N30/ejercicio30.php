<?php
//session is initialized
session_start();

$_SESSION['user'] = "user1";// <-- "Variables" are created in the session
$_SESSION['status']="log in";// <-- session state is created

echo "Log in"."<br/>";

echo "user ".$_SESSION["user"]." Status ".$_SESSION["status"];// <-- Session data is accessed

?>