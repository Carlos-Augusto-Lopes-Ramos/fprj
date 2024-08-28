<?php
include_once "connection.php";
include_once "../classes/sysLogin.php";

$login = new Login($con);

$login->verifyLogIn();

?>