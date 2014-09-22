
<!DOCTYPE HTML>
<html lang="en-US">
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



        <!-- tabla -->
        <link href="/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
        <link href="/Scripts/jtable/themes/lightcolor/orange/jtable.css" rel="stylesheet" type="text/css" />

        <script src="/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script src="/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="/Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>

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
                <div class="l-section-h g-html i-cf"></div>



                <div class="w-socials size_normal align_center">
                    <div class="w-socials-list">
                        <p>"tab"</p>
                        <img src="img/2.png" alt=""  style="max-height: 400px; height: 400px;"  >
                    </div>
                </div>
            </section>


           <div id="PeopleTableContainer" style="width: 600px;"></div>
            <script type="text/javascript">

                    $(document).ready(function () {

                        //Prepare jTable
                            $('#PeopleTableContainer').jtable({
                                    title: 'Table of people',
                                    paging: true,
                                    pageSize: 2,
                                    sorting: true,
                                    defaultSorting: 'Name ASC',
                                    actions: {
                                            listAction: 'PersonActionsPagedSorted.php?action=list',
                                            createAction: 'PersonActionsPagedSorted.php?action=create',
                                            updateAction: 'PersonActionsPagedSorted.php?action=update',
                                            deleteAction: 'PersonActionsPagedSorted.php?action=delete'
                                    },
                                    fields: {
                                            PersonId: {
                                                    key: true,
                                                    create: false,
                                                    edit: false,
                                                    list: false
                                            },
                                            Name: {
                                                    title: 'Author Name',
                                                    width: '40%'
                                            },
                                            Age: {
                                                    title: 'Age',
                                                    width: '20%'
                                            },
                                            RecordDate: {
                                                    title: 'Record date',
                                                    width: '30%',
                                                    type: 'date',
                                                    create: false,
                                                    edit: false
                                            }
                                    }
                            });

                            //Load person list from server
                            $('#PeopleTableContainer').jtable('load');

                    });

            </script>



            <div class="l-border at_top"></div>
            <div class="l-border at_right"></div>
            <div class="l-border at_bottom"></div>
            <div class="l-border at_left"></div>

            <a class="w-toplink" href="#"><i class="fa fa-angle-up"></i></a>

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
