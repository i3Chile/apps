
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Somos Safeman's</title>

        <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
        <script type="text/javascript" src="/js/modernizr.js"></script>-->
        <script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
        <link href="/ccs/tema.css" rel="stylesheet" type="text/css"/>
        <!-- COLOR STYLE -->
        <link rel="stylesheet" type="text/css" media="all" href="/css/colors/color_2.css">

        <!-- FONT STYLE -->
        <link rel="stylesheet" type="text/css" media="all" href="/css/fonts/font_personal.css">

            <link rel="stylesheet" type="text/css" href="/js/flexigrid/flexigrid.css" />
            <script type="text/javascript" src="/js/flexigrid/flexigrid.js"></script>
          
    </head>
    <body class="l-body header_sticky one_page_home rounded_corners no_logo">
       
            <!-- establecemos las configuraciones -->
            <script type="text/javascript">
                $(document).ready(function () {

                    $("#flex1").flexigrid({
                        /* indicamos la dirección del archivo que desde el servidor se encarga de
                         acceder a la base de datos, puede ser un XML o una cadena en formato JSON
                         devuelta por un archivo PHP, por ejemplo.
                         */
                        url: '<?php echo'grid_c/get_json'; ?>',
                        // indicamos en que formato se manejaran los datos
                        dataType: 'json',
                        /* establecemos una lista de columnas a usar, indicando :
                         display  -> el nombre que vera el usuario
                         name     -> nombre interno de la columna
                         width    -> anchura de la columna
                         sortable -> si la columna se puede ordenar
                         align    -> la alineación del texto.
                         */
                        colModel: [
                            {display: 'ID', name: 'id', width: 40, sortable: true, align: 'center'},
                            {display: 'Fecha', name: 'fecha', width: 40, sortable: true, align: 'center'},
                            {display: 'Nombre', name: 'name', width: 190, sortable: true, align: 'center'},
                            {display: 'Responsable', name: 'responsable', width: 130, sortable: true, align: 'center'},
                            {display: 'Lugar', name: 'lugar', width: 130, sortable: true, align: 'center', hide: false},
                            {display: 'trabajades', name: 'trabajadores', width: 80, sortable: true, align: 'center'}
                        ],
                        /* agregamos los botones que apareceran en la barra de herramientas
                         por ejemplo, botones para añadir, editar y eliminar registros.
                         con la propiedad BClass indicamos el tipo de boton, se establecera asi
                         la imagen de fondo para el botón
                         ejemplo: {name: 'Eliminar', bclass: 'add', onpress : funcion_eliminar}
                         */

                        buttons: [
                            {name: 'Agregar', bclass: 'agregar', onpress: test, title: 'Agregar nuevo registro'},
                            {name: 'Editar', bclass: 'editar', onpress: test, title: 'Editar registro'},
                            {name: 'Eliminar', bclass: 'eliminar', onpress: test, title: 'Eliminar registro(s)'},
                            {name: 'Eliminar todo', bclass: 'eliminar_todo', onpress: test, title: 'Eliminar todos los registros'},
                            {name: 'Mostrar todo', bclass: 'mostrar_todo', onpress: filtro, title: 'Mostrar todos los registros'},
                            /*{separator: true},
                             {name: '[Mostrar todo]', onpress: filtro},*/
                            {separator: true}, // linea separadora
                            {name: 'A', onpress: filtro},
                            {name: 'B', onpress: filtro},
                            {name: 'C', onpress: filtro},
                            {name: 'D', onpress: filtro},
                            {name: 'E', onpress: filtro},
                            {name: 'F', onpress: filtro},
                            {name: 'G', onpress: filtro},
                            {name: 'H', onpress: filtro},
                            {name: 'I', onpress: filtro},
                            {name: 'J', onpress: filtro},
                            {name: 'K', onpress: filtro},
                            {name: 'L', onpress: filtro},
                            {name: 'M', onpress: filtro},
                            {name: 'N', onpress: filtro},
                            {name: 'O', onpress: filtro},
                            {name: 'P', onpress: filtro},
                            {name: 'Q', onpress: filtro},
                            {name: 'R', onpress: filtro},
                            {name: 'S', onpress: filtro},
                            {name: 'T', onpress: filtro},
                            {name: 'U', onpress: filtro},
                            {name: 'V', onpress: filtro},
                            {name: 'W', onpress: filtro},
                            {name: 'X', onpress: filtro},
                            {name: 'Y', onpress: filtro},
                            {name: 'Z', onpress: filtro},
                            {separator: true},
                            {name: '#', onpress: filtro, title: 'Buscar por números'}
                        ],
                        // indicamos que columnas se pueden usar para filtrar las busquedas
                        searchitems: [
                            {display: 'Lugar', name: 'lugar'},
                            {display: 'Nombre', name: 'nombre', isdefault: true}
                        ],
                        // indicamos el nombre de la columna con la
                        // q se ordenaran los registros por defecto
                        sortname: 'fecha',
                        // indicamos que por defecto los registros se mostraran ascendentemente
                        sortorder: "asc",
                        // esta propiedad permite activar o desactivar los botones de navegación de la página
                        usepager: true,
                        // titulo que aparecerá en la ventana
                        title: ' Actividades',
                        // indicamos si se permite al usuario especificar el número de resultados por página.
                        useRp: true,
                        // numero de registros a mostrar, por defecto 30
                        rp: 10,
                        // esta propiedad permite establecer si se puede o no, minimizar la Flexigrid
                        // (icono en la esquina superior derecha)
                        showTableToggleBtn: true,
                        // ancho de la flexigrid por defecto
                        width: 700,
                        // alto de la flexigrid por defecto
                        height: 440

                    });
                });

                function redireccionar(sControlador) {
                    $(location).attr('href', "index.php/" + sControlador);
                }

                // funcion para los botones de filtro
                function filtro(com) {
                    jQuery('#flex1').flexOptions({
                        // indicamos los parametros del filtro
                        newp: 1,
                        params: [
                            {name: 'letter_pressed', value: com},
                            {name: 'qtype', value: $('select[name=qtype]').val()}
                        ]
                    });

                    // recargamos la grid
                    jQuery("#flex1").flexReload();
                }

                function test(com, grid) {

                    if (com == 'Agregar') {
                        redireccionar('add_edit_grid_c/index/ins');

                    } else if (com == 'Editar') {
                        if ($('.trSelected', grid).length == 1) {

                            var items = $('.trSelected', grid);
                            var itemlist = items[0].id; // id es la primera columna 
                            redireccionar('add_edit_grid_c/index/upd/' + itemlist);

                        } else if ($('.trSelected', grid).length > 1) {
                            alert('Sólo puede seleccionar un registro para editar..');
                            return false;
                        } else {
                            alert('Debe seleccionar un registro pata poder actualizarlo..');
                            return false;
                        }

                    } else if (com == 'Eliminar') {

                        if ($('.trSelected', grid).length > 0) {
                            if (confirm('Ha seleccionado ' + $('.trSelected', grid).length + ' registro(s) ¿desea eliminarlo(s)?')) {
                                var items = $('.trSelected', grid);
                                var itemlist = items[0].id;// id es la primera columna
                                $.ajax({
                                    type: "POST",
                                    dataType: "json",
                                    url: "<?php echo 'grid_c/eliminar_registros'; ?>",
                                    data: "items=" + itemlist,
                                    success: function (data) {
                                        alert("Se ha(n) eliminado un total de " + data.total + " registro(s).");
                                        $("#flex1").flexReload();
                                    }
                                });
                            }
                        } else {
                            alert('Debe seleccionar un registro pata poder eliminarlo..');
                            return false;
                        }
                    } else if (com == 'Eliminar todo') {

                        if (confirm('¿Realmente desea eliminar todo los registros de la tabla?')) {
                            $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: '<?php echo'/grid_c/eliminar_todo'; ?>',
                                success: function (data) {
                                    alert("Se han eliminado todos los registros de la tabla.");
                                    $("#flex1").flexReload();
                                }
                            });
                        }
                    }
                }
            </script>
            <table id="flex1" style="display:none;font-size:11px;"></table>




          

    </body>
</html>
