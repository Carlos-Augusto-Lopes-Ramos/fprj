<?php

include_once("../classes/connection.php");
include_once("../classes/sysLogin.php");

if(isset($_POST["Login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $login->logIn($email, $password);    
}
if(isset($_POST["Disconnect"])) {
    $login->logOut();
}

?>