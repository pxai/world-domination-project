<?php

$conn = mysql_connect("localhost","root","root");
mysql_select_db("chat");


$sql = "select * from mensaje where id > ".$_GET["lastid"]." order by fecha asc limit 0,15";
$resultado = mysql_query($sql);

$mensajes = "";
$i= 0;
$colores = array("gray","lightgray");
$lastid = 0;

while ($registro = mysql_fetch_assoc($resultado) ) {

	$mensajes .= "<div style='background-color: ".$colores[($i%2)]."'>$i <b>".$registro["idusuario"]."</b> ";
	$mensajes .= $registro["texto"]."</div>";
	$lastid = $registro["id"];
	$i++;
}

echo $lastid ."|".$mensajes;
?>