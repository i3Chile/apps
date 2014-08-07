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
	
	<!-- COLOR STYLE -->
	<link rel="stylesheet" type="text/css" media="all" href="css/colors/color_2.css">

	<!-- FONT STYLE -->
	<link rel="stylesheet" type="text/css" media="all" href="css/fonts/font_personal.css">

	
	
</head>
<body class="l-body header_sticky one_page_home rounded_corners no_logo">
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
		
			<div >
					<div>
						<h2 class="titulo" id="titulo">Mis Actividad</h2>

							<form method="POST" action="return false" onsubmit="return false">
								<div class="g-cols offset_default"> 
									<div class="one-half">
										<strong>Fecha</strong><input type="text" name="fecha"/><br/><br/><br/>
										<strong>Hora:</strong><input type="text" name="hora"/><br/><br/><br/>
										<strong>Lugar:</strong><input name="lugar" type="text" value=""><br/><br/><br/>
										<strong>Responsable:</strong><input name="resp" type="text" value=""><br><br/><br/>
										<strong>Equipo de trabajo:</strong>
														<select name="mi_combobox">
													<option></option>
														</select><br/><br/><br/>

							 
										<strong>Equipo de proteccion personal:</strong><strong><label style=" margin: 455px;">cantidad</label></strong><p></p>
										<div class="datos">
										<p><label class= "lab1">casco<input name="casco"  type="checkbox" value= "casco"><input name="cantidad" type="text" value=""style="width: 50px;"></p>
										<p><label class= "lab1">guantes</label><input name="guantes" type="checkbox" value= "guantes"><input name="cantidad" type="text" value=""style="width: 50px;"></p>
										<p><label class= "lab1">antiparra</label><input name="antiparra" type="checkbox" value= "antiparra"><input name="cantidad" type="text" value=""style="width: 50px;"></p>
										<p><label class= "lab1">mascarilla</label><input name="mascarilla" type="checkbox" value= "mascarilla"><input name="cantidad" type="text" value=""style="width: 50px;"></p>	
										<p><label class= "lab1">zapatos de seguridad</label><input name="zapatos" type="checkbox" value= "zapatos de seguridad"><input name="cantidad" type="text" value=""style="width: 50px;"></p><ul>
										<ul><p><label class= "lab1">ingresar otro</label><input name="otro" type="text" value="" ></p>
										<br/><br/><br/>
										
									</div>
										<strong>Riesgos de la zona de trabajo</strong><input name="riesgos" type="text" value= ""><br/><br/><br/>
										<strong>Plan de mitigacion de riesgos:</strong><input name="mitigacion" type="text" value= ""><br/><br/><br/>
			                     	</div >
			                   	</div >                                          
								<button  onclick="Actividad(document.getElementById('fecha').value),
															document.getElementById('hora').value),
															document.getElementById('lugar').value),
															document.getElementById('resp').value),
															document.getElementById('casco').value),
															document.getElementById('antiparra').value),
															document.getElementById('hora').value),
															document.getElementById('mascarilla').value),
															document.getElementById('zapato').value),
															document.getElementById('riesgos').value),
															document.getElementById('mitigacion').value));">Guardar</button>

								<button  onclick="Actividad(document.getElementById('fecha').value),
															document.getElementById('hora').value),
															document.getElementById('lugar').value),
															document.getElementById('resp').value),
															document.getElementById('casco').value),
															document.getElementById('antiparra').value),
															document.getElementById('hora').value),
															document.getElementById('mascarilla').value),
															document.getElementById('zapato').value),
															document.getElementById('riesgos').value),
															document.getElementById('mitigacion').value));" href="index_usuario.php">Guardar y salir </button><br/>
							</form>
			        </div>
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