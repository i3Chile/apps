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
        <script  type="text/javascript">
            /*
            function agregar() {
                campo = '<ul><h5 style=" margin-top: -16px; margin-bottom: 2px;"><strong>trabajador</strong></h5> <?php //echo form_label("Nombre"), "<br/>"; echo form_input(array("name" => "nombre[]")), "<br/>"; echo form_label("Cargo"), "<br/>"; echo form_input(array("name" => "cargo[]")), "<br/>"; ?></ul>';
                $("#equipo").append(campo);
            }*/
        </script>

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
                        
                            <img src="img/2.png" alt=""  style="max-height: 400px; height: 400px;"  >
                        </div>
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
                            <div id="resultado3">prueba de conexion</div>
                            <form method="POST" action="return false" onsubmit="return false">
                                <div class="g-cols offset_default"> 
                                    <div class="one-half">
                                        
                                        <!--<?php/*
                                        $this->load->helper('url');
                                       // echo form_open('ctrlactividad/guardar');
                                        echo form_label('Fecha'), "<br/>";
                                        echo form_input(array('name' => 'fecha')), "<br/>";
                                        echo form_label('Hora'), "<br/>";
                                        echo form_input(array('name' => 'hora')), "<br/>";
                                        echo form_label('Lugar'), "<br/>";
                                        echo form_input(array('name' => 'lugar')), "<br/>";
                                        echo form_label('Responsable'), "<br/>";
                                        echo form_input(array('name' => 'resp')), "<br/>";
                                        echo form_label('Equipo de proteccion personal:');
                                        echo form_label('Cantidad'), "<br/><br/>";
                                        echo form_label('Casco');
                                        echo form_input(array('name' => 'casco', 'style' => 'width: 50px;')), "<br/>";
                                        echo form_label('Guante');
                                        echo form_input(array('name' => 'guante', 'style' => 'width: 50px;')), "<br/>";
                                        echo form_label('Amtiparra');
                                        echo form_input(array('name' => 'antiparra', 'style' => 'width: 50px;')), "<br/>";
                                        echo form_label('Mascarilla');
                                        echo form_input(array('name' => 'mascarilla', 'style' => 'width: 50px;')), "<br/>";
                                        echo form_label('Zapatos de Seguridad');
                                        echo form_input(array('name' => 'sapato', 'style' => 'width: 50px;')), "<br/>";
                                        echo form_label('Otros');
                                        echo form_input(array('name' => 'otro', 'style' => 'width: 278px;'));
                                        echo form_input(array('name' => 'otroc', 'style' => 'width: 50px;')), "<br/><br/><br/><br/>";


                                        echo form_label('Riesgos de la zona de trabajo'), '<br/>';
                                        echo form_textarea(array('cols' => '50', 'rows' => '10', 'name' => 'riesgos')), '<br/>';

                                        echo form_label('Plan de mitigacion de riesgos:'), '<br/>';
                                        echo form_textarea(array('cols' => '50', 'rows' => '10', 'name' => 'mitigacion')), '<br/>';
                                        */?>	-->				
                                    </div >
                                    <div class="one-half">
                                        <h3 class="titulo" id="titulo">Equipo de trabajo</h3>
                                        <div id="equipo">
                                            <ul><h5 style=" margin-top: -16px; margin-bottom: 2px;"><strong>trabajador</strong></h5>
                                                <!--<?php
                                                echo form_label('Nombre'), "<br/>";
                                                echo form_input(array('name' => 'nombre[]')), "<br/>";
                                                echo form_label('Cargo'), "<br/>";
                                                echo form_input(array('name' => 'cargo[]')), "<br/>";
                                                //echo form_close()
                                                ?></ul>-->

                                        </div>  
                                        <input class="g-btn color_primary outlined" type="submit" value="AGREGAR" onclick="agregar();">
                                    </div>         
                                </div >                                          
                                <input class="g-btn color_primary outlined" type="submit" value="GUARDAR"  onclick="Actividad(document.getElementById('fecha').value,
                                                                         document.getElementById('hora').value,
                                                                         document.getElementById('lugar').value,
                                                                         document.getElementById('resp').value,
                                                                         document.getElementById('casco').value,
                                                                         document.getElementById('guante').value,
                                                                         document.getElementById('antiparra').value,
                                                                         document.getElementById('mascarilla').value,
                                                                         document.getElementById('zapato').value,
                                                                         document.getElementById('otro').value,
                                                                         document.getElementById('otroc').value,
                                                                         document.getElementById('nombre').value,
                                                                         document.getElementById('cargo').value,
                                                                         document.getElementById('riesgos').value,
                                                                         document.getElementById('mitigacion').value);">
                            </form>
                            <script>
                                function Actividad(fecha, hora, lugar, resp, casco, guante, antiparra, mascarilla, zapato, otro, otroc, nombre, cargo, riesgos, mitigacion)
                                {
                                    $.ajax({
                                        url: "php/actividad.php",
                                        type: "POST",
                                        data: "fecha=" + fecha + "&hora=" + hora + "&lugar=" + lugar + "&resp=" + resp + "&casco=" + casco + "&guante=" + guante + "&antiparra=" + antiparra + "&mascarilla=" + mascarilla + "&zapato=" + zapato + "&otro=" + otro + "&otroc=" + otroc + "&nombre=" + nombre + "&cargo=" + cargo + "&riesgos=" + riesgos + "&mitigacion=" + mitigacion,
                                        success: function(resp) {
                                            $('#resultado3').html(resp)
                                        }
                                }
                                );

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
