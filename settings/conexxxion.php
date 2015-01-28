<?php 

define('DB_HOST', gatenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT', gatenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USER', gatenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS', gatenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME', gatenv('OPENSHIFT_APP_NAME'));

$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASS);
$db = mysql_select_db(DB_NAME) or die(mysql_error());

?>
