
<?php
session_start();
if (isset($_SESSION['usuario']))
{

    echo '<script>location.href = "index_usuario.php";</script>'; 
}
else
{
?>
<?
 function checkadress($emailaddr)
    {
        if (filter_var($emailaddr,FILTER_VALIDATE_EMAIL))
        	echo "Direccion de email ".$emailaddr." valida.<br/>";
        else
        	echo "Direccion de email".$emailaddr."invalida<br/>";
    }

    
?>
	<!DOCTYPE HTML>
	<html lang="es">
		<head>
			<meta charset="utf-8">
			<title>inicio secion</title>
   <meta http-equiv="content-type" content="text/html ; charset=utf-8" />
	                        <!-- tema -->
	    
	   
	        <link href="ccs/tema.css" rel="stylesheet">
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

	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	
	<!-- COLOR STYLE -->
	<link rel="stylesheet" type="text/css" media="all" href="css/colors/color_2.css">

	<!-- FONT STYLE -->
	<link rel="stylesheet" type="text/css" media="all" href="css/fonts/font_personal.css">
	
	</head>

<body>
<section id="home" class="l-section full_screen color_primary parallax_ver with_overlay valigns_center">
		<div class="l-section-img cover" style="background-image: url(img/parallax.png)"></div>
		<div class="g-cols offset_default"> 
			<div class="one-half">
				<div class="l-header-h i-cf">
					<h2>Inicio de sesi&oacute;n</h2>
					 <div id="formulario">
						<form method="POST" action="return false" id="datos">
				            <div id="resultado"></div>
				           		Email: <input type="text" name="user" id="user" value="" placeholder="usuario"><br/>
				            	 Clave:<input type="password" name="pass" id="pass" value="" placeholder="*******"><br/>
				            	<button id="loginBtn">ENTRAR</button><br/>
       						
       					 </form>
				
					 
        </div>
         </div>
				<br/><br/>
				<!-- formulario registro -->
				<div class="l-header-h i-cf">

					<form method="post"  action="scripts/registro.php" style="width: 403px">
					   <h2>Registro</h2>
					    	Ingresa tu nombre:<input type="text" name="nombre" placeholder="Ingresa tu nombre" /><br/>
					      	Ingresa tu email: <input type="text" name="email" required placeholder="Ingresa email"/><br/>
					      	Ingresa tu Password:<input type="password" name="password" placeholder="Ingresa contraseña" /><br/>
					  		Repite tu contraseña<input type="password" name="rpass" required placeholder="repite contraseña" /><br/>
					    	<!--<input class="g-btn color_primary outlined" type="submit" name="submit" value="Registrarse"/><br/>-->
					<input  type="submit" name="submit" value="Registrarse"/>

					</form>
				</div>

				<?php
						if(isset($_POST['submit'])){
							require("registro.php");
						}
					?>
				<!--Fin formulario registro -->
				</div>	
				<div class="one-half">
					<div class="l-section-h g-html i-cf">
						<div class="w-socials size_normal">
							<div class="w-socials-list">
								<img style="max-height: 400px; height: 400px;" alt="" src="img/2.png">
							</div>
						</div>
						

					</div>
				 </div>
	
</section>
<script>
	function Validar(user, pass)
	{
		var result = false;
		$.ajax({
			url: "php/validar.php",
			type: "POST",
			data: "user="+user+"&pass="+pass,
			success: function(resp){
				$('#resultado').html(resp)
				result = true;
			}        
		});
		
		
	}
	$(document).ready(function(){
		$("#loginBtn").click(function(e){
			if(!Validar($("#user").val(), $("#pass").val())){
				e.preventDefault();
			}
		});
	});
</script>	
</body>
</html>
<?php
}
?>
