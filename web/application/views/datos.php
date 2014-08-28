
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

	<script>



	</script>
	
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
	<section id="home" class="l-section full_screen color_primary parallax_ver with_overlay valigns_center"  style="height: 307px !important;">
		<div class="l-section-img cover" style="background-image: url(img/parallax.png)"></div>
		<div class="l-section-video"></div>
		<div class="l-section-overlay"></div>
		<div class="l-section-h g-html i-cf">

            
         
			<div class="w-socials size_normal align_center">
				<div class="w-socials-list">
                  <p>"tab"</p>
			  <img src="img/2.png" alt=""  style="mask: 2300px; height: 388px;margin-top: -141px;"  >
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
						<h2 class="titulo" id="titulo"><strong>Mis datos datos</strong></h2>
						<?php
							
						?>
						

							<form method="POST" action="return false" onsubmit="return false">
								<div id="resultado"></div>
								<div class="g-cols offset_default"> 
									<div class="one-half">
										<h3 class="titulo" id="titulo"><strong></strong></h3>
										<strong>Nombre:</strong><input id="nombre" type=text value="<?php echo $data["NOMBRE"] ?>"><br/><br/><br/>
										<strong>Apellido:</strong><input id="apellido" type=text value="<?php echo $data["APELLIDO"] ?>"><br/><br/><br/>
										<strong>Rut:</strong><input id="rut" type=text value="<?php echo $data["RUT"] ?>" ><br/><br/><br/>
										<strong>Email:</strong><input id="email" type=text value="<?php echo $data["EMAIL"] ?>"><br><br/><br/>
										<strong>Profecion:</strong><input id="profe" type=text value= "<?php echo $data["PROFECION"] ?>"><br/><br/><br/>
										<strong>Fecha Nacimiento:</strong><input id="fecha" type=text value= "<?php echo $data["FECHA_NACIMIENTO"] ?>"><br/><br/><br/>
										<strong>Estado civil:</strong><input id="estado" type=text value= "<?php echo $data["ESTADO_CIVIL"] ?>"><br/><br/><br/>
										<strong>Empresa:</strong><input id="empresa" type=text value= "<?php echo $data["EMPRESA"] ?>"><br/><br/><br/>
			                     	
				                     	<button  onclick="Validar(document.getElementById('nombre').value, 
																document.getElementById('apellido').value,
																document.getElementById('rut').value, 
																document.getElementById('email').value,
																document.getElementById('profe').value, 
																document.getElementById('fecha').value,
																document.getElementById('estado').value, 
																document.getElementById('empresa').value);">Guardar</button>
									</div >
									<div class="one-half">
										<h4 class="titulo" id="titulo"><strong>Cambiar Clave</strong></h4>
										<strong>Ingrese su clave actual:</strong><input id="clave" type=password ><br/><br/><br/>
										<strong>Ingrese su clave nueva:</strong><input id="nclave" type=password ><br/><br/><br/>
										<strong>Repita su clave nueva:</strong><input id="rnclave" type=password ><br/><br/><br/>
											<button  onclick="Cambiar(document.getElementById('clave').value, 
																document.getElementById('nclave').value,
																document.getElementById('rnclave').value);">Cambiar</button>
			                   		</div >	
			                   	</div > 

								
							</form>
				 <script>
			        function Validar(nombre, apellido, rut, email, profe, fecha, estado,empresa)
			        {
			            $.ajax({
			                url: "php/actualizar.php",
			                type: "POST",
			                 data: "nombre="+nombre+"&apellido="+apellido+"&rut="+rut+"&email="+email+"&profe="+profe+"&fecha="+fecha+"&estado="+estado+"&empresa="+empresa,
			                success: function(resp){
			                    $('#resultado').html(resp)
			                }        
			            });
			        }

			         function Cambiar(clave, nclave, rnclave)
			        {
			            $.ajax({
			                url: "php/cambiar.php",
			                type: "POST",
			                 data: "clave="+clave+"&nclave="+nclave+"&rnclave="+rnclave,
			                success: function(resp){
			                    $('#resultado').html(resp)
			                }        
			            });
			        }
			     </script>
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