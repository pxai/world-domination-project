<?php
session_start();

$conn = mysql_connect("localhost","root","root");
mysql_select_db("chat");

$sql = "select * from usuarios where login='".$_POST["login"]."' and password=sha1('".$_POST["password"]."')";
$resultado = mysql_query($sql);
$registro = mysql_fetch_assoc($resultado);


// Comprobamos lo que nos mandan
if ($_POST['login'] == $registro["login"] )
{
	$_SESSION['idusuario'] = $registro["id"];
	$_SESSION['login'] = $registro['login'];
	header("Location: main.php");
}
else
{
	// Datos incorrectos, volvemos...
	$_SESSION['error'] = "Login incorrecto";
	header("Location: login.php");
}

?>