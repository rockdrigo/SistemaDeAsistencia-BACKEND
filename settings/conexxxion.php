<?php 

define('DB_HOST', gatenv('http://controlasistencia-hacklabmx.rhcloud.com'));
define('DB_PORT', gatenv('3306'));
define('DB_USER', gatenv('adminkzu2iAz'));
define('DB_PASS', gatenv('zWzknsS6Hnka'));
define('DB_NAME', gatenv('controlasistencia'));

$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASS);
$db = mysql_select_db(DB_NAME) or die(mysql_error());

?>
