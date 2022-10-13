<?php

session_start();
unset($_SESSION["name"]);
unset($_SESSION["password"]);
session_destroy();

header("location:index.php");

echo "<h2>You are succesfully logged out</h2>"
?>
