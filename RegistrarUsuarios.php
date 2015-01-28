<?php 

include_once("settings/conexion.php");

$Nombre = $_POST["name"];
$Email = $_POST["email";

$UsuarioNuevo = "INSERT INTO Usuario ( Nombre, Email ) value ( '$Nombre' , '$Email' )"
mysql_query($UsuarioNuevo);

header("Location:UsuarioRegistrado.php?email=".$Email."&nombre".$Nombre);

?>
