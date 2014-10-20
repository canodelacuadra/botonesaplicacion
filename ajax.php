<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);
if(isset($_POST['value'])){
	$value=$_POST['value'];
	mysql_query("update choice set choice='$value' where id='1'");
	echo "<h2>Has seleccionado el botón de estado como:" .$value."</h2>";
}
?>