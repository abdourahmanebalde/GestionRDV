<?php
session_start();
$_SESSION["email"] = "";
session_destroy();
session_unset();
header("location:login.php")
?>
