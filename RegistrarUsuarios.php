<?php 

include_once("settings/conexxxion.php");
include_once("static/lib/phpqrcode/qrlib.php");

$Nombre = $_POST["name"];
$Email = $_POST["email";

$filename = "QRUsuarios/".$Email.".png";
$tamCodeQR = 10;
$CorectionError = "L"; // M Q (H mejor)

  QRode::png($Email, $filename, $CorectionError, $tamCodeQR, 2) ;


$UsuarioNuevo = "INSERT INTO Usuario ( Nombre, Email ) value ( '$Nombre' , '$Email' )"
mysql_query($UsuarioNuevo);

header("Location:UsuarioRegistrado.php?email=".$Email."&nombre".$Nombre);

?>
