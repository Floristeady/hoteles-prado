<?php
if (isset($_GET["page_id"]) )
	$page_id = $_GET["page_id"];
else
	$page_id = 0;

$pages[0] = array("template" => "nuestro_hotel");
$pages[1] = array("template" => "habitaciones");
$pages[2] = array("template" => "restaurante");
$pages[3] = array("template" => "tarifas");
$pages[4] = array("template" => "acerca_xalapa");
$pages[5] = array("template" => "reservaciones");

$template = $pages[$page_id]["template"];

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
         <!-- SEO Meta tags -->
         <meta name="description" content="Hotel Mesón de Alférez Xalapa | Hoteles Prado del río"/>
         <meta name="keywords" content="xalapa, hotel, méxico, veracruz, hoteles, hostal, habitaciones, turismo, actividades, viaje, centro, paseos, ventas, tarifas, restaurante, desayunos, camas, reservas, reservaciones, habitación, comidas, conocer"/>
         <meta name="category" content="Hoteles"/>
         <meta name="rating" content="General"/>
         <meta name="language" content="español"/>
         <meta name="robots" content="All"/>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.1.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Estás usando un navegador desactualizado. <a href="http://browsehappy.com/">Actualiza hoy tu navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true"> instala Google Chrome Frame</a> para una mejor experiencia en este sitio web.</p>
        <![endif]-->
        <header>

	        
	    <nav id="menu-hotel">  
	        <!--nav_primary -->
	        <ul>
	            <li><a href="?page_id=0" class="<?php if ($page_id == 0) { ?> ON <? } ?>">Nuestro Hotel</a></li>
	            <li><a href="?page_id=1" class="<?php if ($page_id == 1) { ?> ON <? } ?> ">Habitaciones</a></li>
	            <li><a href="?page_id=2" class="<?php if ($page_id == 2) { ?> ON <? } ?> ">Restaurante</a></li>
	            <li><a href="?page_id=3" class="<?php if ($page_id == 3) { ?> ON <? } ?> ">Tarifas</a></li>
	            <li><a href="?page_id=4" class="<?php if ($page_id == 4) { ?> ON <? } ?>" >Acerca de Xalapa</a></li>
	            <li><a href="?page_id=5" class="<?php if ($page_id == 5) { ?> ON <? } ?> ">Restaurante</a></li>
	        </ul>
	        <!--/nav_primary -->
        </nav>  
	        
        </header>
        
        <section>
	        
	        <div id="content">
				<?php include($template.".php") ?>
			</div>
			<!--content -->
	        
        </section>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
