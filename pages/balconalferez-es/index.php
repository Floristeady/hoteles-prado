<?php
if (isset($_GET["page_id"]) )
	$page_id = $_GET["page_id"];
else
	$page_id = 0;

$pages[0] = array("template" => "nuestro-hotel");
$pages[1] = array("template" => "habitaciones");
$pages[2] = array("template" => "restaurante");
$pages[3] = array("template" => "tarifas");
$pages[4] = array("template" => "acerca-xalapa");
$pages[5] = array("template" => "reservaciones");

$template = $pages[$page_id]["template"];

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hotel Balcón del Alférez</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
         <!-- SEO Meta tags -->
         <meta name="description" content="Hotel Balcón del Alférez | Hoteles Prado del río"/>
         <meta name="keywords" content="xalapa, hotel, méxico, veracruz, hoteles, hostal, habitaciones, turismo, actividades, viaje, centro, paseos, ventas, tarifas, restaurante, desayunos, camas, reservas, reservaciones, habitación, comidas, conocer"/>
         <meta name="rating" content="General"/>
         <meta name="robots" content="All"/>
         

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="../../favicon.ico">
        <link rel="apple-touch-icon" href="../../apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="../../apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../../apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../../apple-touch-icon-114x114.png">

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.1.min.js"></script>
        
    </head>
    <body id="pages" class="balcon">
        <!--[if lt IE 8]>
            <p class="chromeframe">Estás usando un navegador desactualizado. <a target="_blank" href="http://browsehappy.com/">Actualiza hoy tu navegador</a> o <a target="_blank" href="http://www.google.com/chromeframe/?redirect=true"> instala Google Chrome Frame</a> para una mejor experiencia en este sitio web.</p>
        <![endif]-->
        <header>
        
        	<div id="header-wrapper">
        	
        		<div id="logo_balcon" class="logo-hotel"><a title="Inicio Hotel" href="?page_id=0"> Balcón del Alférez</a></div>
        			
			    <nav id="menu-primary">  
			        <!--nav_primary -->
			        <a class="btn-menu" href="javascript:void(0);"><span class="text">Menú Hoteles</span><span class="img"></span></a>

			        <ul class="menu-1">
			            <li><a href="/">Inicio Hoteles</a><span>k</span></li>
			            <li><a href="/pages/mesonalferez-xalapa-es/">Mesón del Alférez Xalapa</a><span>k</span></li>
			            <li><a href="/pages/posadacafeto-es/">Posada del Cafeto</a><span>k</span></li>
			             <li><a href="/pages/mesonalferez-coatepec-es/">Mesón del Alférez Coatepec</a><span>k</span></li>
			            <li><a class="active" href="/pages/balconalferez-es/">Balcón del Alférez</a><span>k</span></li>
			            <li><a href="/pages/hostalniebla-es/">Hostal de la Niebla</a></li>
			        </ul>
			    </nav> 	 
			    <!--/nav_primary -->
			    
        	</div>
		    
		        <div id="menu-secundary">
		        
			        <div id="menu-content">
				        <ul class="menu">
					        <li><a href="?page_id=0" class="<?php if ($page_id == 0) { ?>active<? } ?>">Nuestro Hotel</a></li>
					        <li><a href="?page_id=1" class="<?php if ($page_id == 1) { ?>active<? } ?> ">Habitaciones</a></li>
					        <li style="padding-right:60px;"><a href="?page_id=2" class="<?php if ($page_id == 2) { ?>active<? } ?> ">Restaurante</a></li>
					        <li class="center"><a></a></li>
					        <li style="display:none;"><a href="?page_id=3" class="<?php if ($page_id == 3) { ?>active<? } ?> ">Tarifas</a></li>
					        <li><a href="?page_id=4" class="<?php if ($page_id == 4) { ?>active<? } ?>" >Acerca de Xalapa</a></li>
					        <li><a target="_blank" href="https://reservations.easy-rez.com/be/?token=c4968ecee67d109732fda0b8b837573b&ln=es" class="<?php if ($page_id == 5) { ?>active<? } ?>">Reservaciones</a></li>

				        </ul>
				        
				        <ul class="menu-lang">
				        	<li class="lang"><a title="Español" class="es active" href="/pages/balconalferez-es/">ES</a></li>
						    <li class="lang"><a title="English" class="en" href="/pages/balconalferez-en/">EN</a></li>
						</ul>

					 </div><!--/menu-content -->
			        
		        </div>
			        
        </header>
        
        <section id="container">        
         
         	<?php include($template.".php") ?>
	        
        </section>
        
        <footer id="footer-pages">
	        
	        <div id="footer-content">
	        	
	        	<div class="col-left">
		        	<p><strong>Balcón del Alférez</strong><br/>
		        	Prolongación de Allende No. 6. Xalapa, Ver. México  91000<br/>
		        	Teléfonos: (228) 8180113 - 818 6351 / Correo Electrónico: <span>balcon@pradodelrio.com </span></p>
	        	</div>
	        	
	        	<div class="col-right">
		        	<h4>Visítanos en:</h4>
		        	<ul>
			        	<li><a target="_blank" href="http://www.facebook.com/pages/Balcon-del-Alferez/502096139853498">> Facebook</a></li>
			        	<li><a target="_blank" href="https://twitter.com/BalconXalapa">> Twitter</a></li>
			        	
		        	</ul>
	        	</div>
	        
		        <nav id="nav-footer">
		        	<!--nav_footer -->
			        <ul>
			            <li><a href="pages/mesonalferez-xalapa-es/">Mesón del Alférez Xalapa</a></li>
			            <li><a href="pages/posadacafeto-es/">Posada del Cafeto</a></li>
			            <li><a href="pages/mesonalferez-coatepec-es/">Mesón del Alférez Coatepec</a></li>
			            <li><a href="pages/balconalferez-es/">Balcón del Alférez</a></li>
			            <li><a href="pages/hostalniebla-es/">Hostal de la Niebla</a></li>
			        </ul>
			        <!--/nav_footer -->
		        </nav>
	        </div>
        </footer>
        
                
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-38934991-8'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
