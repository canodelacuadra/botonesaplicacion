
<?php
//la función de este código es recoger el estado de la máquina en la base de datos
//modifica  la base de datos y muestra en el display 
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);
if(isset($_POST['value'])){
	$value=$_POST['value'];
	mysql_query("update choice set choice='$value' where id='1'");
	echo "<h3>Estado de Marcha:" .$value."</h3>";
}
?>