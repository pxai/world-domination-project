<?php
session_start();

unset($_SESSION['login']);

$_SESSION['error'] = "Gracias por venir";
header("Location: login.php");

?>