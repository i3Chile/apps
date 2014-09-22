<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Somos Safeman's</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="/favicon.jpg">

        <link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700">
        <link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700">

        <link rel="stylesheet" type="text/css" media="all" href="/css/motioncss.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/motioncss-responsive.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" media="all" href="/slick/slick.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/style.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/animation.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/responsive.css">
        <script type="text/javascript" src="/js/modernizr.js"></script>
        <script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
        <link href="/ccs/tema.css" rel="stylesheet" type="text/css"/>
        <!-- COLOR STYLE -->
        <link rel="stylesheet" type="text/css" media="all" href="/css/colors/color_2.css">

        <!-- FONT STYLE -->
        <link rel="stylesheet" type="text/css" media="all" href="/css/fonts/font_personal.css">

    </head>

    <body>
        <section id="home" class="l-section full_screen color_primary parallax_ver with_overlay valigns_center">
            <div class="l-section-img cover" style="background-image: url(img/parallax.png)"></div>
            <div class="g-cols offset_default"> 
                <div class="one-half">
                    <div class="l-header-h i-cf">

                        <div id="formulario">
                            <?php
                            echo validation_errors();
                            $atributo = array('id' => 'datos');
                            $ati1 = array('placeholder' => 'USUARIO', 'name' => 'user', 'id' => 'user');
                            $ati2 = array('placeholder' => '*******', 'name' => 'pass', 'id' => 'pass');
                            
                            echo form_open('ctrllogin/login', $atributo);
                            ?>
                            <h2>Inicio de sesi&oacute;n</h2>
                            <?php
                            echo form_label('Email'), "<br/>";
                            echo form_input($ati1), "<br/>";
                            echo form_label('Clave'), "<br/>";
                            echo form_password($ati2), "<br/>";
                            echo form_submit(array('value' => 'entrar')), "<br/>";
                            echo Form_Close();
                            ?>
                        </div>
                    </div>
                    <br/><br/>
                    <!-- formulario registro -->
                    <div class="l-header-h i-cf">
                        <?php
                        echo validation_errors();
                        $atributo = array('id' => 'datos');
                        $ati3 = array('placeholder' => 'ingrese rut', 'name' => 'rut');
                        $ati2 = array('placeholder' => '*******', 'name' => 'pass1', 'id' => 'pass1');
                        echo form_open('ctrllogin/registro', $atributo);
                        ?>
                        <h2>Registro</h2>

                        <h2><?php //echo $rt;  ?></h2>
                        <?php
                        echo form_label('Ingrese Rut'), "<br/>";
                        echo form_input($ati3), "<br/>";
                        echo form_label('Ingrese Email'), "<br/>";
                        echo form_input($ati1), "<br/>";
                        echo form_label(' ingrese Clave'), "<br/>";
                        echo form_password($ati2), "<br/>";
                        /* echo form_label('Repita Clave'),"<br/>";
                          echo form_password ($ati3),"<br/>"; */
                        echo form_submit(array('value' => 'REGISTRARSE')), "<br/>";
                        echo Form_Close();
                        ?>
                    </div>

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
        <script type="text/javascript" src="/js/mediaelement-and-player.js"></script>
        <script type="text/javascript" src="/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="/js/jquery.isotope.js"></script>
        <script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="/js/jquery.horparallax.js"></script>
        <script type="text/javascript" src="/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="/slick/slick.min.js"></script>
        <script type="text/javascript" src="/js/imagesloaded.js"></script>
        <script type="text/javascript" src="/js/waypoints.min.js"></script>
        <script type="text/javascript" src="/js/responsive.js"></script>
        <script type="text/javascript" src="/js/plugins.js"></script>
        <script type="text/javascript" src="/js/us.widgets.js"></script>

    </body>
</html>
