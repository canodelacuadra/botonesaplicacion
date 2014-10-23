<?php
//conexión general con la base de datos
$query=mysql_connect("94.247.31.247","Manuel","Prodisagua*2014");
mysql_query("SET NAMES 'utf8'");
mysql_select_db("pivot2r",$query);
$result = mysql_query("SELECT * FROM choice WHERE id=1");
  
?>