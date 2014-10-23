<?php
//conexión general con la base de datos
$query=mysql_connect("localhost","root","");
mysql_query("SET NAMES 'utf8'");
mysql_select_db("freeze",$query);
$result = mysql_query("SELECT * FROM choice WHERE id=1");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang='es' class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Agregar su sitio o aplicación contenido aquí -->
	<div class="container">
	<header>
		<h2 id='nomaplicacion'>2RPivots</h2>
	</header>
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
		<div class="controles"><p>Auto Start:</p> <span><?php echo $row["autostart"]; ?></span></div>
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
		<button type="button" class="btn btn-primary">CAMBIAR</button>
		</div>
	
		</section></div>
		
		</div>
	<?php
    }
    ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
