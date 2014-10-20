<?php
//conexión general con la base de datos
$query=mysql_connect("localhost","root","");
mysql_query("SET NAMES 'utf8'");
mysql_select_db("freeze",$query);
$result = mysql_query("SELECT * FROM choice ORDER BY id");
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
	<header>
		<h1>Prodisagua</h1>	 
	</header>
	<section id='globales'>
		<button type="button" class="btn btn-primary">UPDATE</button>
		<button type="button" class="btn btn-primary">SET</button>
	</section>
	<section id='actualizadores'>
		<h1>Actualizar</h1>
		<div class="controles">
		<div class="table-responsive">	
		<table id="datatables" class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Selector</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = mysql_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["choice"]; ?></td>
            <td>
                <div class="onoffswitch">
				<input type="hidden" value="<?php echo $row["id"]; ?>" />
				<input type="checkbox" class="onoffswitch-checkbox"
				<?php if($row['choice']=="off"){echo "checked"; }?> 
				id="myonoffswitch<?php echo $row["id"]; ?>" >
				<label class="onoffswitch-label" for="myonoffswitch<?php echo $row["id"]; ?>">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
                <div class="display">
                </div>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table></div>

		</div> 
		
	</section>
	<section id='sensores'>
		<h1> Sensores</h1>
	
	</section>
		<section id='orientacion'>
		<h1> Orientación Pivo</h1>
	
	</section>
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
