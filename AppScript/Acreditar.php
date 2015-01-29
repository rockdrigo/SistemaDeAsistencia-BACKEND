<?php 

include_once("settings/conexion.php");

$Email = $_POST['Email'];

$Consulta = "SELECT idUsuario, Nombre FROM Usuario WHERE Email = '$Email'";

$res_Consulta = mysql_query($Consulta);
$row_Consulta = mysql_fetch_assoc($res_Consulta);

if(!is_null($row_Consulta['idUsuario'])){
//esta es la respuesta que obtenemos
  $data = array('Rpta' => 1, 'Nombre' => $row_Consulta['Nombre']);
  print(json_encode($data));
//esta es la consulta para actualizar el estado del acreditado
  $Acreditado = "UPDATE Usuario SET Estado = 1 WHERE Email = '$Email'";
  mysql_query($Acreditado);


}else {

  $data = array('Rpta' => 0 );
  print (json_encode($data));

}


?>
