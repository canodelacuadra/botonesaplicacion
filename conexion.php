<?php
//conexión general con la base de datos
$query=mysql_connect("localhost","root","");
if (!$query) {
    die('No se pudo conectar: ' . mysql_error());
}
mysql_query("SET NAMES 'utf8'");
mysql_select_db("pivot2r",$query);

  
?>
