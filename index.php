<?php
//conexión general con la base de datos
include('conexion.php');
include('header.php');
?>

		<?php while ($row = mysql_fetch_array($result)) { ?>		
		<section id='maquina'>
		
		<div class='controles'id="reloj" ></div>
		
		<div class="controles"><p><span>Estado actual de la máquina <strong>Nº: </strong> <?php echo $row["id"]; ?></span>
		</p>
		
		</div>
		</section>
	</div>
	<div class="container flex">
	<div id="izquierda"><section id='actualizadores'>
    
        
           
        <div class="controles"><p>Marcha:</p> <span><?php echo $row["marcha"]; ?></span></div>
        <div class="controles"><p>Dirección:</p> <span><?php echo $row["direccion"]; ?></span></div>
		<div class="controles"><p>Agua:</p> <span><?php echo $row["agua"]; ?></span></div>
		<div class="controles"><p>Auto Start:</p> 
		<span><?php echo $row["autostart"]; ?></span>
		<span><?php echo $row["startinicio"]; ?></span>
		<span><?php echo $row["startparada"]; ?></span>
		
		</div>
		<div class="controles"><p>Auto Reverse:</p> <span><?php echo $row["autoreverse"]; ?></span></div>
        
    
		
	</section>
	<section id='sensores'>
	<div class="controles"><p>Velocidad:</p> <p><span><?php echo $row["velocidad"]; ?></span></p></div>
        <div class="controles"><p>Caudal:</p> <span><?php echo $row["caudal"]; ?></span>
			
		
		</div>
		<div class="controles"><p>Presión:</p> <span id='presion'><?php echo $row["presion"]; ?></span>mca
		<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['gauge']}]}"></script>
       <div id="chart_div"></div>
		</div>
		
		<div class="controles"><p>Seguridad:</p> <span><?php echo $row["seguridad"]; ?></span></div>
		
	</section>
	</div>
	
	<div id="derecha">	
	<div class="controles" id='grafico'>
	<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
       <div id="chart_div_pivo"></div>
	<div ><p>Ángulo:</p> <span><?php echo $row["angulo"]; ?></span></div>
	
		</div>
	<section id='orientacion'>
	
		<div class="controles">
		<button type="button" class="btn btn-primary btn-lg btn-block">CAMBIAR <span class="glyphicon glyphicon-share"></span></button>
		</div>
	
		</section></div>
		
		</div>
	<?php
    }
    ?>
	<?php
	include('footer.php');
     ?> 
