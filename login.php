<?php
// Vamos a usar la variable de SESIÓN
// paqueño cambio
// $id$
session_start();

$msg = $_SESSION['error'];
unset($_SESSION['error']); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>

<title>Página php - parámetros por SESSION</title>
<!-- Aquí se configura el juego de caracteres de la página -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<!-- Dentro del body metemos el contenido -->
<?php
	echo $msg;
?>
<fieldset>
<legend>Formulario</legend>
<form name="Formulario" method="post" action="comprobar.php">
<label for="login">Nombre</label><br />
<input type="text" name="login" id="login" /><br />
<label for="password">Password</label><br />
<input type="password" name="password" id="password" /><br />

<br />
<input type="submit" name="enviar" value="Enviar" /><br />

</form>
</fieldset>
</body>
</html>