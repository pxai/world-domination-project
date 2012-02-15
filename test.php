<?php
// Vamos a usar la variable de SESIÓN
session_start();

if ($_SESSION['login']=="")
{
	
	header("Location: login.php");
}

$conn = mysql_connect("localhost","root","root");
mysql_select_db("chat");

if ($_POST["msg"] != "") {
	$sql = "insert into mensaje(texto, idusuario) values ('".$_POST["msg"]."',".$_SESSION["idusuario"].")";
	mysql_query($sql);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>

<title>Página php - parámetros por SESSION</title>
<!-- Aquí se configura el juego de caracteres de la página -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="chat.js"></script>

</head>
<body onload="comprobar()">
<!-- Dentro del body metemos el contenido -->

<?php

echo "Hola ".$_SESSION['login'].", bienvenido a la web.<br />"

?>
<div id="mensajes" style="height: 400px;width: 500px; border: 1px solid gray;overflow: scroll">
<?php
	echo $mensajes;
?>
</div>

<form name="Formulario" method="post" action="main.php">
<label for="msg">Mensaje</label>
<input type="text" id="" name="msg" value="" size="50"/>
</form>
<a href="logout.php">Salir</a>
</body>
</html>