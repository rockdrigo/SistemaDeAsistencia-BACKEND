<?php 

define('DB_HOST', gatenv());
define('DB_PORT', gatenv());
define('DB_USER', gatenv());
define('DB_PASS', gatenv());
define('DB_NAME', gatenv());

$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASS);
$db = mysql_select_db(DB_NAME) or die(mysql_error());

?>
