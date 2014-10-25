<?php
//conexión general con la base de datos
$query=mysql_connect("localhost","root","");
mysql_query("SET NAMES 'utf8'");
mysql_select_db("freeze",$query);
$result = mysql_query("SELECT * FROM choice WHERE id=1");
  
?>