<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AirePro -Guatemala</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/isotope.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-snowflake-o"></i> <span class="light">AirePro</span><span class= "hidden-xs">Guatemala</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#proyectos">Proyectos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#quienes">Quienes Somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contactenos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--
                        <h1 class="brand-heading">AirePro</h1> -->
                        
                        <img src="img/logo.png">
                        <p class="intro-text">Ventas Instalaciones y Servicios,
                            <br>Aire acondicionado y ducteria, cuartos frios, fabricaciones remodelaciones en tabla yeso.</p>
                        <a href="#proyectos" class="btn btn-circle page-scroll">
                            <i class="fa fa-snowflake-o animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- proyectos Section -->
    <section id="proyectos" class="container content-section2 text-center">
        <div id="filters" class="button-group">
          <button class="btn btn-primary" data-filter="*">TODOS</button>
          <button class="btn btn-primary" data-filter=".aire">Aire acondicionado</button>
          <button class="btn btn-primary" data-filter=".electricidad">Refrigeración industrial</button>
          <button class="btn btn-primary" data-filter=".estructuras">Electricidad industrial</button>
          <button class="btn btn-primary" data-filter=".estructuras">Estructuras</button>
         <button class="btn btn-primary" data-filter=".redes">Tabla yeso</button> 
        </div>
        <br> </br>
        
<!-- *------- cuadros modales -->

<div id="cargaexterna">
    Aquí se cargará el HTML externo
</div>
<!-- fin cuadros modales -->
       <div id="posts" class="row">
            <div id="1" class="item aire col-xs-12 col-sm-4 col-md-3 ">
                <div class="item-wrap">
                    <div class="thumbnail">
                        <div class="titulo">
                            <h3>Cuarto frio</h3>                            
                        </div>
                        <img alt="Cuartos frios"  src="img/proyecto1.jpg"  style="height: 200px; width: 242px; display: block;"> 
                        <div class="caption">
                            <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="2" class="item electricidad col-xs-12 col-sm-4 col-md-3">
               <div class="thumbnail">
                    <div class="titulo">
                        <h3>Climatización</h3>                            
                    </div>
                    <img alt="Climatización Cuartos frios"  src="img/proyecto2.jpg"  style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="3" class="item estructuras col-xs-12 col-sm-4 col-md-3">
               <div class="thumbnail">
                    <div class="titulo">
                        <h3>Estructuras</h3>                            
                    </div>
                    <img alt="Estructuras"  src="img/proyecto3.jpg"  style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="4" class="item estructuras col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <div class="titulo">
                        <h3>Proyecto 4</h3>                            
                    </div>
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU4NGI1YTZlMTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTg0YjVhNmUxNSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="5" class="item electricidad col-xs-12 col-sm-4 col-md-3 ">
                <div class="thumbnail">
                    <div class="titulo">
                        <h3>Proyecto 6</h3>                            
                    </div>
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU4NGI1YTZlMTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTg0YjVhNmUxNSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="6" class="item redes col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <div class="titulo">
                        <h3>Proyecto 6</h3>                            
                    </div>
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU4NGI1YTZlMTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTg0YjVhNmUxNSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="7" class="item redes col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <div class="titulo">
                        <h3>Proyecto 7</h3>                            
                    </div>
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU4NGI1YTZlMTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTg0YjVhNmUxNSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div id="8" class="item estructuras col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <div class="titulo">
                        <h3>Proyecto 8</h3>                            
                    </div>
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU4NGI1YTZlMTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTg0YjVhNmUxNSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 242px; display: block;"> 
                    <div class="caption">
                        <a href="#" id = "boton"class="btn btn-block btn-xs btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------- cuadro modal de contacto por correo. -->
    <div class="modal fade" id="modal_correo" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Contactanos</h4>
                </div>
                <div class="modal-body">
                    
                    <form id="formulario" method="post" action="envio.php" enctype="multipart/form-data">
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="txt_nombre">Nombre</label>  
                                <div class="col-md-12">
                                    <input id="txt_nombre" name="txt_nombre" type="text" placeholder="Su nombre" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="txt_tel">Teléfono</label>  
                                <div class="col-md-12">
                                    <input id="txt_tel" name="txt_tel" type="text" placeholder="Su número" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txt_correo">Correo</label>  
                                <div class="col-md-12">
                                    <input id="txt_correo" name="txt_correo" type="text" placeholder="Su correo" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="txt_mensaje">Mensaje</label>
                                <div class="col-md-12">                     
                                    <textarea class="form-control" id="txt_mensaje" name="txt_mensaje"></textarea>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="btn_enviar"></label>
                                <div class="col-md-12">
                                    
                                </div>
                            </div>
                        </fieldset>
                        <input id="submit" type="submit" name="enviar" value="Enviar mail" class="btn btn-primary pull-right">
                    </form>
                </div>
                <div class="modal-footer">
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ------------- FIN cuadro modal de contacto por correo. -->
<!-- ------------- cuadro modal de mision. -->




    <div class="modal fade" id="modal_mision" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">¿Quienes somos?</h4>
                </div>
                <div class="modal-body">
                    <h4>Misión</h4>
                    <p>Somos una empresa en el rubro de aire acondicionado y ventilaciòn, nos encargamos de brindar mantenimiento, reparación, proyectos y brindar productos y servicios de calidad, generando confianza y seguridad, a un precio justo con entrega rápida, preocupándonos por el cliente y sus necesidades de modo proactivo e innovador, y teniendo siempre un personal altamente calificado.</p>   
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn">Cerrar</a>  
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_vision" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">¿Quienes somos?</h4>
                </div>
                <div class="modal-body">
                    <h4>Visión</h4>
                    <p>Ser reconocida como una empresa líder en el rubro de refrigeración y aire acondicionado, que satisfaga las necesidades de nuestros clientes entregándoles servicios y productos de calidad innovadores, desarrollando soluciones integrales para cada uno de ellos y manteniendo un respeto por la sociedad y naturaleza, a través de productos de la más avanzada tecnología y así generar calidad para el desarrollo del País.</p>   
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn">Cerrar</a>  
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_presentacion" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">¿Quienes somos?</h4>
                </div>
                <div class="modal-body">
                    <h4>Presentación</h4>
                    <p>Es una empresa establecida 1,999 con la visión de apoyar a la industria en  las áreas de aire acondicionado, cuartos fríos,  refrigeración, inyección, extracción, abarcando otras áreas que van de la mano en sus diversas aplicaciones motivada por la experiencia adquirida a nivel técnico de otras empresas del mismo ramo y complementándolo con capacitación y estudio constante en base a la investigación y desarrollo. </p>
    
<p>Comprometiéndonos con nuestros clientes, cubriendo emergencias con rapidez, eficiencia, certeros en dar soluciones inmediatas con personal calificado.</p>

<p>Tomando en cuenta que contamos con los mejores precios del mercado enfocándonos en presupuestos justos y al alcance de nuestros clientes. </p>

<p>Optimizamos la calidad total en los trabajos que realizamos, contando con  respaldo y garantía de nuestros proveedores en equipo, repuestos y materiales;  que nos permiten operativamente estar a la vanguardia.
</p>   
                </div>
                <div class="modal-footer">
                    <a href="carta.pdf" class="btn btn-success" download="AirePro_presentacion.pdf">Descargar</a>
                    <a href="#" data-dismiss="modal" class="btn">Cerrar</a>  
                </div>
            </div>
        </div>
    </div>

    <!-- quienes Section -->
    <section id="quienes" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>
                                Misión
                            </h2>
                            <p>
                               Somos una empresa en el rubro de aire acondicionado y ventilaciòn, nos encargamos ...
                            </p>
                            
                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal_mision">
                                Leer más
                            </button>
                        </div>
                        <div class="col-md-4">
                            <h2>
                                Visión
                            </h2>
                            <p>
                               Ser reconocida como una empresa líder en el rubro de refrigeración y aire acondicionado, que...
                            </p>
                            
                            <button type="button" class="btn btn-info btn-warning btn-block" data-toggle="modal" data-target="#modal_vision">
                                Leer más
                            </button>
                        </div>
                        <div class="col-md-4">
                            <h2>
                                Presentación
                            </h2>
                            <p>
                                Es una empresa establecida 1,999 con la visión de apoyar a la industria en  las áreas de...
                            </p>
                            <div class="row">
                                <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                     
                                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal_presentacion">Leer más</button>
                                </div>
                                <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                     
                                    <a href="carta.pdf" class="btn btn-danger btn-block" download="AirePro_presentacion.pdf">
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                    <span class= "hidden-xs">
                                        Descargar
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section >
       
    </section>



                

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-md-6">
                <div id="map"></div>
            </div>
            <div class="col-md-6">
                 
                <address>
                     <strong>Aire Pro Guatemala</strong><br /> 5 Avenida. 5-35, Zona 21,<br /> Guajitos, Guatemala<br /> <abbr title="Teléfono">Tel:</abbr> (502) 2477-7490
                </address> 
                <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#modal_correo"><i class="fa fa-envelope-o"> </i> Enviar Correo</button>
                <p></p>
                <div class="visible-xs">

                    <a href="tel:+24777490"><button type="button" class="btn btn-info btn-lg btn-block"><i class="fa fa-mobile"> </i> Llamar</button></a>
                </div>
            </div>    
        </div>
    </section>


<div class="container-fluid">
    <div class="row">
        
    </div>
</div>





    <!-- Map Section -->
    

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <a href= "http://cloudgt.com.gt">
                <p>Copyright &copy; Todos los derechos reservados, Airepro Guatemala. 2017</p>
                <p>Todas las imagenes y logos presentados en esta web son propiedad de sus respectivos dueños.</p>
                <p>Web desarrollada por CloudGt</p>
            </a>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
    {
    $("#boton").click(function(){
            $.get("uno.html", function(htmlexterno){
       $("#cargaexterna").html(htmlexterno);
            });
    });
    });
</script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEQ4KDq-iT2Q0E1UJpX7T1RM5nen0_940"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/isotope.js"></script>
</body>

</html>
