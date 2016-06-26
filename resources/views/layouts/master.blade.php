<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="El Club Escuela de patinaje Apuestas el Pueblo, es un club deportivo
  dedicado a la enseñanza del patinaje de velocidad para niños, jóvenes y adultos de la ciudad de Bucaramanga, Colombia.">
    <meta name="keywords" content="patinaje, patinar, Club de patinaje, Escuela de patinaje, Club Escuela de patinaje Apuestas el Pueblo, patinaje Bucaramanga, patinaje Santander, patinaje para niños, jóvenes y adultos, aprender a patinar">
    <title>Club Apuestas el Pueblo</title>
    <link rel="shortcut icon" type="imagen/x-icon" href="img/logo.ico" />
    <link title="Club Apuestas el Pueblo" rel="shortcut icon" type="imagen/vnd.microsof.icon" href="img/logo.ico" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/booststrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css" type="text/css">
    <link href="css/lightbox.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

<!--ENCABEZADO-->
<div class="header" id="header">

    <div class="container-fluid">


        <div class="col-lg-3 col-lg-offset-1 visible-lg">
            <img src="img/logo.png" alt="CLUB DE PATINAJE APUESTAS EL PUEBLO" width="74%" class="img-responsiveheader" >
        </div>
        <div class="col-lg-6 col-lg-offset-1 visible-lg" >
            <h1 class="nombreapuestaspc"><storng>Bienvenidos al Club Escuela de patinaje Apuestas el Pueblo</storng></h1>
        </div>
        <div class="col-lg-1 visible-lg"></div>



        <div class="col-xs-12 visible-xs" >
            <img src="img/logo.png" alt="CLUB DE PATINAJE APUESTAS EL PUEBLO" width="38%" class="logo">
        </div>

        <div class="col-xs-12 visible-xs">
            <h1 class="nombreapuestas"><strong>Bienvenidos al Club Escuela de patinaje Apuestas el Pueblo</strong></h1>
        </div>


        <div class="col-sm-12 visible-sm" >
            <img src="img/logo.png" alt="CLUB DE PATINAJE APUESTAS EL PUEBLO" width="20%" class="logo">
        </div>

        <div class="col-sm-12 visible-sm">
            <h1 style="font-size:20px; color:white" class="nombreapuestassm"><strong>Bienvenidos al Club Escuela de patinaje Apuestas el Pueblo</strong></h1>
        </div>


        <div class="col-md-12 visible-md" >
            <img src="img/logo.png" alt="CLUB DE PATINAJE APUESTAS EL PUEBLO" width="20%" class="logo">
        </div>

        <div class="col-md-12 visible-md">
            <h1 style="color:white; font-size:30px" class="nombreapuestasmd"><strong>Bienvenidos al Club Escuela de patinaje Apuestas el Pueblo</strong></h1>
        </div>

    </div>
</div>

<!--Barra de navegación-->
<nav role="navigation" class="navbar navbar-default">

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

          <!-- <a href="https://www.facebook.com/Club-de-Patinaje-Apuestas-el-Pueblo-1643692445865527" class="btn btn-social-icon btn-lg btn-facebook " title="Club Apuestas El Pueblo en Facebook">
                <span id="social" class="fa fa-facebook-square fa-2x social-fb"></span>
            </a>

            <a href="https://www.youtube.com/channel/UCZ68wMshlEeVDemMmrItbZA" class="btn btn-social-icon btn-lg btn-youtube" title="Club Apuestas El Pueblo en Youtube" >
                <span id="social" class="fa fa-youtube-square fa-2x social-yt"></span>
            </a>
           <a class="btn btn-social-icon btn-lg btn-instagram" >
           <span class="fa fa-instagram fa-2x"></span>
           </a>-->
            <iframe class="visible-xs visible-sm" src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fpatinajeapuestaselpueblo.tk%2F&width=179&layout=button_count&action=like&show_faces=false&share=true&height=46&appId" width="179" height="46" style="border:none;overflow:hidden;margin-left:20px; padding-top:15px;padding-bottom:10px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>


        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul role="navigation" class="nav navbar-nav">

                <li>
                    <a class="visible-xs visible-sm visible-md" href="{{URL::to ('/')}}" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                        INICIO <span class="sr-only">(current)</span>
                    </a>

                    <a class="visible-lg" href="{{URL::to ('/')}}">
                        INICIO <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li>
                    <a class="visible-lg" id="quienessomos" href="{{URL::to('/quienesSomos')}}">
                        QUIÉNES SOMOS</a>

                    <a class="visible-sm visible-md visible-xs" id="historia" href="{{URL::to('/quienesSomos')}}" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        QUIÉNES SOMOS</a>

                </li>

                <li>
                    <a class="visible-lg " id="historia" href="#">
                        HISTORIA</a>

                    <a class="visible-sm visible-md visible-xs" id="historia" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        HISTORIA</a>

                </li>

                <li class="dropdown">
                    <a href="{{URL::to('/escuela-de-formacion')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESCUELA DE FORMACIÓN<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="{{URL::to('/escuela-de-formacion')}}" target="contenido">Básica
                            </a>
                            <a class="visible-lg" href="{{URL::to('/escuela-de-formacion')}}">Básica</a>
                        </li>
                        <li>
                            <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="{{URL::to('/escuela-de-formacion')}}" target="contenido">Avanzada
                            </a>
                            <a class="visible-lg" href="{{URL::to('/escuela-de-formacion')}}">Avanzada</a>
                        </li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CARRERAS <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>

                            <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="{{URL::to('/carreras')}}" >Pre-liga
                            </a>

                            <a class="visible-lg" href="{{URL::to('/carreras')}}" >Pre-liga
                            </a>

                        </li>

                        <li>
                            <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="{{URL::to('/carreras')}}" >Federados
                            </a>

                            <a class="visible-lg" href="{{URL::to('/carreras')}}">Federados</a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="{{URL::to('fotos')}}" >FOTOS
                    </a>
                    <a class="visible-lg" href="{{URL::to('/fotos')}}">FOTOS</a>
                </li>

                <li>
                    <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="{{URL::to('/videos')}}" >VIDEOS
                    </a>
                    <a class="visible-lg" href="{{URL::to('/videos')}}">VIDEOS</a>
                </li>

                <li>
                    <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="#" >CONTÁCTENOS
                    </a>
                    <a class="visible-lg" href="#">COTÁCTENOS</a>
                </li>
                <li>
                    <a class="visible-xs visible-sm visible-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" href="#" title="Accesorios Deportivos Ramírez Sierra" >
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    <a class="visible-lg" href="#" title="Accesorios Deportivos Ramírez Sierra"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                </li>
            </ul>



               <!-- <form class="navbar-form navbar-left" role="search">-->
                <!-- <div class="form-group">-->

            <iframe class="visible-md visible-lg" src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fpatinajeapuestaselpueblo.tk%2F&width=179&layout=button_count&action=like&show_faces=false&share=true&height=46&appId" width="180" height="46" style="border:none;overflow:hidden;margin:auto; padding-top:20px;padding-bottom:5px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  <!-- <input type="text" class="form-control" placeholder="Buscador">
                 </div>
                <!-- <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
               </form>-->


        </div>
    </div>
</nav>
@yield('main_content')<!--Footer-->
<div class="container-fluid" id="abajofooter" >

    <div class="col-xs-12 col-md-4 col-lg-4" id="footer1">
        <ul class="col-xs-6 col-md-6 col-lg-6" id="menufooter">
            <li><h5 style="color:white"><strong>MENÚ</strong></h5></li>
            <li><a href="{{URL::to('/')}}"><h6>INICIO</h6></a></li>
            <li><a href="{{URL::to('/quienesSomos')}}"><h6>QUIÉNES SOMOS</h6></a></li>
            <li><a href=""><h6>HISTORIA</h6></a></li>
        </ul>

        <ul class="col-xs-6 col-md-6 col-lg-6" id="menufooter">
            <li><a href="{{URL::to('/escuela-de-formacion')}}"><h6>ESCUELA DE FORMACIÓN</h6></a></li>
            <li><a href="{{URL::to('/carreras')}}"><h6>CARRERAS</h6></a></li>
            <li><a href="{{URL::to('/fotos')}}"><h6>FOTOS</h6></a></li>
            <li><a href="{{URL::to('/videos')}}"><h6>VIDEOS</h6></a></li>
        </ul>
    </div>

    <div class="col-xs-6 col-md-4 col-lg-4" id="footer2">
        <a style="text-decoration: none; color:white;" href=""><h5><strong>CONTÁCTENOS</strong></h5></a>
        <!-- <p id="telefono"><a href="tel:3166949487">3166949487</a></p>-->
        <h6>Teléfono: <a id="telefono" href="tel:3166949487">3166949487</a></h6>
        <h6 class="visible-sm visible-md visible-lg">E-mail: clubapuestaselpueblo@hotmail.com</h6>
        <h6 class="visible-xs">E-mail: clubapuestaselpueblo<br>@hotmail.com</h6>

        <h6>Dirección: Patinodromo Ciudadela Real de Minas, <br>Bucaramanga - Colombia</h6>
    </div>


    <div class="col-xs-6 col-md-4 col-lg-4" id="footer3">
        <h5><strong>Diseñado por:</strong></h5>
        <h6>Jorge Leonardo Camargo Rueda</h6>
        <h6>Ingeniero de Sistemas - Universidad Industrial de Santander</h6>
        <h6>Correo: jotas1_4@hotmail.com</h6>
    </div>


    <div class="col-xs-12 col-sm-12 col-lg-12" id="footerfinal">

        <div class="col-xs-12 visible-xs" style="text-align:center">
            <img src="img/logo.png" alt="CLUB APUESTAS EL PUEBLO" width="25%" >
            <h6>&copy 2016 <strong>CLUB DE PATINAJE APUESTAS EL PUEBLO</strong></h6>
        </div>

        <div class="col-sm-12 visible-sm" style="text-align:center">
            <img src="img/logo.png" alt="CLUB APUESTAS EL PUEBLO" width="20%" >
            <h6>&copy 2016 <strong>CLUB DE PATINAJE APUESTAS EL PUEBLO</strong></h6>
        </div>


        <div class="col-md-12 visible-md" style="text-align:center">
            <img src="img/logo.png" alt="CLUB APUESTAS EL PUEBLO" width="15%" >
            <h6>&copy 2016 <strong>CLUB DE PATINAJE APUESTAS EL PUEBLO</strong></h6>
        </div>

        <div class="col-lg-12 visible-lg" style="text-align:center">

            <img src="img/logo.png" alt="CLUB APUESTAS EL PUEBLO" width="8%" >
            <h4>&copy 2016<strong> CLUB DE PATINAJE APUESTAS EL PUEBLO</strong></h4>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> <!--script ajax-->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
<script src="js/lightbox.js"></script>
@yield('scripts')
</body>
</html>