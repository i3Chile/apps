<?php
session_start();
if (isset($_SESSION['usuario']))
	
{	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Somos Safeman's</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.jpg">

	<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700">
	<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700">
	
	<link rel="stylesheet" type="text/css" media="all" href="css/motioncss.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/motioncss-responsive.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" media="all" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/animation.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
	<link href="ccs/tema.css" rel="stylesheet">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>

	<link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/flexigrid.pack.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/flexigrid.pack.js"></script>
	
	<!-- COLOR STYLE -->
	<link rel="stylesheet" type="text/css" media="all" href="css/colors/color_2.css">

	<!-- FONT STYLE -->
	<link rel="stylesheet" type="text/css" media="all" href="css/fonts/font_personal.css">

	<script>



	</script>
	
</head>
<body class="l-body header_sticky one_page_home rounded_corners no_logo">
<?php

	$con = new mysqli("localhost", "root","" , "safemans");
if ($con->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
       exit();
}
	$datos=$_SESSION['usuario'];
	$query=mysql_query("SELECT * FROM `detalle_usuario` WHERE `EMAIL`='".$datos."'",$con);

	$data=mysql_fetch_assoc($query);
	?>

<!-- Preloader screen -->
<div class='l-preloader'>
	<div class='l-preloader-spinner'>
		<div class='w-preloader type_6'>
			<div class='w-preloader-h'></div>
		</div>
	</div>
</div>

<!-- HEADER -->
<div class="l-header type_transparent">
	<div class="l-header-h i-cf">
		
		<!-- nav -->
		<nav class="w-nav layout_hor touch_disabled">
		
			<div class="w-nav-control">
				<i class="fa fa-bars"></i>
			</div>
			
			<ul class="w-nav-list level_1">
				<li class="w-nav-item level_1 has_sublevel">
					<a class="w-nav-anchor level_1" href="index_usuario.php" style="margin-left: 270px;">
						<span class="w-nav-title">Inicio</span>
						<span class="w-nav-arrow"></span>
					</a>
					

				<li class="w-nav-item level_1">
					<a class="w-nav-anchor level_1" href="datos.php">
						<span class="w-nav-title">Mis Datos</span>
						<span class="w-nav-arrow"></span>
					</a>
				</li>

				<li class="w-nav-item level_1">
					<a class="w-nav-anchor level_1" href="actividad.php">
						<span class="w-nav-title">Mis Actividades</span>
						<span class="w-nav-arrow"></span>
					</a>
				</li>
				<li class="w-nav-item level_1">
					<a class="w-nav-anchor level_1">
						<span class="w-nav-title"></span>
						<span class="w-nav-arrow"></span>
					</a>
				</li>
				<li class="w-nav-item level_1">
					<a class="w-nav-anchor level_1" href="php/LOGOUT.PHP" style="margin-left: 210px;">
						<span class="w-nav-title">>Cerrar Secion<</span>
						<span class="w-nav-arrow"></span>
					</a>
				</li>
			</ul>
			
		</nav>

	</div>
</div>
<!-- /HEADER -->

<!-- MAIN -->
<div class="l-main">

	<!-- section: HOME -->
	<section id="home" class="l-section full_screen color_primary parallax_ver with_overlay valigns_center">
		<div class="l-section-img cover" style="background-image: url(img/parallax.png)"></div>
		<div class="l-section-video"></div>
		<div class="l-section-overlay"></div>
		<div class="l-section-h g-html i-cf">

            
         
			<div class="w-socials size_normal align_center">
				<div class="w-socials-list">
                  <p>"tab"</p>
			  <img src="img/2.png" alt=""  style="max-height: 400px; height: 400px;"  >
			</div>
		</div>
	</section>
	
	<!-- section: ABOUT -->
	<!-- section: ABOUT -->
	<section id="about" class="l-section animate_fadeInUp">
		<div class="l-section-img"></div>
		<div class="l-section-video"></div>
		<div class="l-section-overlay"></div>
		<div class="l-section-h g-html i-cf">
		
			<div>
				<h2>Example 3</h2>
        <p>
            Flexigrid with dynamic data, paging, search, toolbar, and connected to an XML file.
            (<a href="#" onclick="$(this).parent().next().toggle(); return false;">Show sample code</a>)
        </p>
      
        <table class="flexme3" style="display: none"></table>	
					
			</div>
			
		</div>
	</section>

	


<div class="l-border at_top"></div>
<div class="l-border at_right"></div>
<div class="l-border at_bottom"></div>
<div class="l-border at_left"></div>

<a class="w-toplink" href="#"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript" src="js/mediaelement-and-player.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.horparallax.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/responsive.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/us.widgets.js"></script>

</body>
</html>
<?php
}
else
{
    echo '<script>location.href ="index.php";</script>'; 
}
?>