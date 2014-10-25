<?php
//conexión general con la base de datos
include('conexion.php');
include('header.php');
?>

		<?php while ($row = mysql_fetch_array($result)) { ?>		
		<form action='procesar.php'method='post'>
		<div id='container' class="container">
			<div class='' id='header'>
				<div class='controles'id="reloj" >
				</div>
				<div id="estadomaq" class="controles">
					<p><span>Estado actual de la máquina <strong>Nº: </strong> <?php echo $row["id"]; ?></span></p>
				</div>
				<div id="actualizar"class='controles' id='actualizar'>
					<button type="button" class="btn btn-primary btn-lg btn-block">ACTUALIZAR <span class="glyphicon glyphicon-share"></span></button>
				</div>
			</div>
		
			<div id="main">
				<div id="izquierda">
					<section id='actualizadores'>
						<div id='marcha'class="controles">
							<p>Marcha:
							<span id='dismar' class='estado'><?php echo $row["marcha"]; ?></span>
							</p> 
							<div class="onoffswitch">
								<input type="checkbox" name="" class="onoffswitch-checkbox" id="switch-marcha">
								<label class="onoffswitch-label" for="switch-marcha">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
							</div>
						
						<div id='direccion' class="controles">
						<p>Dirección:
							<span id='disdir'class='estado'><?php echo $row["direccion"]; ?></span>
						</p> 
						<div class="btdir">
								<input type="checkbox" name="" class="btdir-checkbox" id="switch-direccion">
								<label class="btdir-label" for="switch-direccion">
									<span class="btdir-inner"></span>
									<span class="btdir-switch"></span>
								</label>
							</div>
						</div>
						<div id='agua'class="controles">
							<p>Agua: <span id='disagua' class='estado'><?php echo $row["agua"]; ?></span>
							</p>
							<div class="onoffswitch">
								<input type="checkbox" name="" class="onoffswitch-checkbox" id="switch-agua">
								<label class="onoffswitch-label" for="switch-agua">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</div>
						<div id='autostart'class="controles">
							<div class="">
								<p>Auto Start: 
								<span id='disautostart'class='estado'><?php echo $row["autostart"]; ?></span>
								</p>
								<div class="onoffswitch">
								<input type="checkbox" name="" class="onoffswitch-checkbox" id="switch-autostart">
								<label class="onoffswitch-label" for="switch-autostart">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
								</div>
								<div id='disprograma'>
								<span class='estado'><?php echo $row["startinicio"]; ?></span>
								<span class='estado'><?php echo $row["startparada"]; ?></span>
								</div>
							
							</div>
							<div id="inprograma"class="inputs">
								<input type="time" class="form-control">
								<input type="time" class="form-control">
								<!--  <span class="help-block">Cambiar programa</span>  -->
							</div>
							
						</div>
						<div id='autoreverse'class="controles">
						<p>Auto Reverse: 
						<span id='disautoreverse'class='estado'><?php echo $row["autoreverse"]; ?></span>
						</p>
						<div class="onoffswitch">
								<input type="checkbox" name="" class="onoffswitch-checkbox" id="switch-autoreverse">
								<label class="onoffswitch-label" for="switch-autoreverse">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</div>
					</section>
					<section id='sensores'>
						<div id='velocidad'class="controles">
						<p>Velocidad: <span class='estado'><?php echo $row["velocidad"]; ?></span>
						</p>
						<div class="inputs">
							<input type="number" class="form-control" placeholder="caudal">	
							<span class="help-block">Modifique la velocidad</span> 
							</div>
						</div>
						<div id='caudal'class="controles"><p>Caudal: <span class='estado'><?php echo $row["caudal"]; ?></span>
						</p>	
						</div>
						<div id='presion'class="controles">
						<p>Presión: <span class='estado'id='displaypresion'><?php echo $row["presion"]; ?></span> mca
							</p>
							<!-- <div class="inputs">
							<input type="number" class="form-control">
							<span class="help-block">Modifique la presión del pivot</span>
							</div> -->
							<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['gauge']}]}"></script>
							<div id="chart_div"></div>
						</div>
						
						<div id='seguridad'class="controles">
						<p>Seguridad: <span class='estado'><?php echo $row["seguridad"]; ?></span>
						</p>	<!-- <div class="switch-wrapper">
							<input id='switch-seguridad'type="checkbox" value="1" checked>
							</div> -->
						</div>
						
					</section>
				</div>
				
				<div id="derecha">
					<section id='orientacion'>	
						<div id='angulo'class="controles" >
							<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
							<div id="chart_div_pivo"></div>
							<div>
							<p>Ángulo: <span class='estado'><?php echo $row["angulo"]; ?></span></div>
							</p>
							<div class="inputs">
							<input type="number" class="form-control input-sm">
							<span class="help-block">Modifique la velocidad del pivot</span>
							</div>
						</div>
					</section>
				
				
				</div>
			</div>
			
		</div>
	</form>
	<?php
    }
    ?>
	<?php
	include('footer.php');
     ?> 
