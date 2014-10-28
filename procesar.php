<?php
//Pintamos la página
include('header.php');
?>
<?php
//Recogemos datos
if(isset($_REQUEST['marcha'])){
	$marcha = $_REQUEST['marcha'];	
}else{
	$marcha='off';
}
//datos direccion
if(isset($_REQUEST['direccion'])){
	if($_REQUEST['direccion']=='on'){
	$direccion=='derecha';
}
}else{
	 $direccion='izquierda';
}
//datos agua
if(isset($_REQUEST['agua'])){
	$agua = $_REQUEST['agua'];
}else{
	$agua='off';
}
//datos autostart
if(isset($_REQUEST['autostart'])){
$autostart = $_REQUEST['autostart'];
}else{
$autostart='off';
}
//datos start inicio
if(isset($_REQUEST['startinicio'])){
	$startinicio = $_REQUEST['startinicio'];
}
//Datos fin parada
if(isset($_REQUEST['startparada'])){
	$startparada = $_REQUEST['startparada'];	
}
//Datos autorevere
if(isset($_REQUEST['autoreverse'])){
$autoreverse = $_REQUEST['autoreverse'];
}else{
	$autoreverse='off';
}
//Datos velocidad
if(isset($_REQUEST['velocidad'])){
	$velocidad = $_REQUEST['velocidad'];
}else{
	$velocidad='off';
}
//Datos presion
if(isset($_REQUEST['presion'])){
	$presion = $_REQUEST['presion'];
}
//Datos caudal
if(isset($_REQUEST['caudal'])){
	$caudal = $_REQUEST['caudal'];
}

//Datos seguridad
if(isset($_REQUEST['seguridad'])){
	$seguridad = $_REQUEST['seguridad'];
}
//Datos ángulo
if(isset($_REQUEST['angulo'])){
	$angulo = $_REQUEST['angulo'];
}
//Grabación en base de datos///////////////////////////////
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pivot2r";

// Creamos conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
?>
<div class="container">
<?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO registros (marcha,direccion,agua,autostart,startinicio,startparada,autoreverse,velocidad,presion,caudal,seguridad,angulo) 
VALUES ('$marcha','$direccion','$agua','$autostart','$startinicio','$startparada','$autoreverse','$velocidad','$presion','$caudal','$seguridad','$angulo')"; 

if (mysqli_query($conn, $sql)) {
    echo "<div class='well consola'>La máquina ha sido actualizada correctamente con los siguientes valores:</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<div id=''class="controles ">
<p>Marcha:<?php echo $marcha;?></p>
<p>Dirección:<?php echo $direccion;?></p>
<p>Agua:<?php echo $agua;?></p>
<p>Autostart:<?php echo $autostart;?></p>
<p>Start Inicio: <?php echo $startinicio;?></p>
<p>Start Fin<?php echo $startparada;?></p>
<p>Autoreverse<?php echo $autoreverse;?></p>
<p>Velocidad <?php echo $velocidad;?></p>
<p>Presión <?php echo $presion;?></p>
<p>Caudal <?php echo $caudal;?></p>
<p>Seguridad <?php echo $seguridad;?></p>
<p>Ángulo<?php echo $angulo;?></p>
 
</div>
<div class="controles">
<a class="btn btn-info" href="index.php" role="button">Volver a Consola</a>
</div>
</div>
<?php
include('footer.php');
 ?> 