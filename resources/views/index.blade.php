@extends('layouts.master')
@section('main_content')

    <!--Contenido-->

   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" id="slide1" >
                <div class="carousel-caption">
                    <h2 style="font-weight: bold" class="visible-md visible-lg">Club Escuela de patinaje para niños, jóvenes y adultos</h2>
                    <h4 style="font-weight: bold" class="visible-md visible-lg ">Más de 30 años de historia en el patinaje Santandereano y Colombiano.</h4>

                    <h5 style="font-weight: bold" class="visible-xs visible-sm">Club Escuela de patinaje para niños, jóvenes y adultos</h5>

                </div>
            </div>
            <div class="item" id="slide2">
                <div class="carousel-caption">
                    <h2 style="font-weight: bold" class="visible-md visible-lg" >Semillero del patinaje Santandereano</h2>
                    <h4 style="font-weight: bold" class="visible-md visible-lg">El Club Apuestas El Pueblo ha formado a patinadores que han hecho parte de las selecciones
                        de Santander y Colombia.</h4>
                    <h5 style="font-weight: bold" class="visible-xs visible-sm">Semillero del patinaje Santandereano</h5>
                </div>
            </div>

            <div class="item" id="slide3">
                <div class="carousel-caption">
                    <h2 style="font-weight: bold" class="visible-md visible-lg" >Formamos niños y jóvenes para ser grandes campeones</h2>
                    <h4 style="font-weight: bold" class="visible-md visible-lg">Participamos en certámenes competitivos como lo son Festivales y Departamentales</h4>
                    <h5 style="font-weight: bold" class="visible-xs visible-sm">Formamos niños y jóvenes para ser grandes campeones</h5>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid" style="padding:0px" id="contenidocentro">


        <div  class="col-xs-12 col-md-6 col-lg-7" style="padding-top:10px; padding-left:20px">
            <h2>CLUB ESCUELA DE PATINAJE APUESTAS EL PUEBLO</h2>
            <h5 style="text-align:justify;padding:5px">Busca desarrollar un novedoso programa Educativo-Deportivo,
                en base a un grupo de alumnos (deportistas) interesados en la practica recreativa y formativa del deporte "Patinaje", bajo la orientación de un equipo
                interdisciplinario de profesionales con amplia experiencia en el área, que buscan por medio de la actividad física y practica metodológica de la actividad deportiva, contribuir al desarrollo físico integral del niño, joven y adulto, con el propósito de aportar a la sociedad personas y deportistas bien formados.
            </h5>

            <div style="text-align:center">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <a href="img/basica3.jpg" data-lightbox="fotobasica" title="Básica" alt="Básica">
                            <img src="img/basica3.jpg" class="img-thumbnail">
                        </a>
                        <div class="caption">
                            <h3>Básica</h3>
                            <p style="text-align:justify">Fomentar la práctica  del patinaje de velocidad en niños, jóvenes y adultos. El proceso de escuela básica regular
                                lo componen cuatro (4) niveles.</p>
                            <p><a href="{{URL::to('/escuela-de-formacion')}}" class="btn btn-primary" role="button">Ver más</a> </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <a href="img/jovenes_op(2).jpg" data-lightbox="fotoavanzada" title="Avanzada" alt="Avanzada">
                            <img src="img/jovenes_op(2).jpg" class="img-thumbnail">
                        </a>
                        <div class="caption">
                            <h3>Avanzada</h3>
                            <p style="text-align:justify">
                                Brindar al alumno la posibilidad de continuar el proceso de aprendizaje después de los niveles básicos, especializándose en patinaje de velocidad.
                            </p>
                            <p><a href="{{URL::to('/escuela-de-formacion')}}" class="btn btn-primary" role="button">Ver más</a> </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div  class="thumbnail">
                        <a href="img/carrerasindex.jpg" data-lightbox="fotocarreras" title="Carreras">
                            <img   src="img/carrerasindex.jpg" class="img-thumbnail">
                        </a>
                        <div class="caption">
                            <h3>Carreras</h3>
                            <p style="text-align:justify">
                                <strong>Pre-liga:</strong> Promover la participación en prácticas deportivas competitivas como Festivales y Departamentales.<br>
                                <strong>Federados:</strong> Preparación hacia el alto rendimiento.
                            </p>
                            <p><a href="{{URL::to('/carreras')}}" class="btn btn-primary" role="button">Ver más</a> </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="padding:10px;margin:auto;text-align:center">

            <iframe class="visible-lg" style="margin: auto;text-align:center" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FClub-de-Patinaje-Apuestas-el-Pueblo-1643692445865527%2F&tabs=timeline&width=550&height=730&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="550" height="730" style="border:none;overflow:hidden;padding-left:10px;padding-top:30px;margin:auto" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

            <iframe class="visible-xs" style="margin:auto;text-align:center" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FClub-de-Patinaje-Apuestas-el-Pueblo-1643692445865527%2F&tabs=timeline&width=300&height=550&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="550" style="border:none;overflow:hidden;margin:auto" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

            <iframe class="visible-sm visible-md" style="margin:auto;text-align:center" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FClub-de-Patinaje-Apuestas-el-Pueblo-1643692445865527%2F&tabs=timeline&width=550&height=700&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="550" height="700" style="border:none;overflow:hidden; margin:auto; text-align:center;padding-top:20px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        </div>


        <div class="container-fluid" style="margin:auto;padding:0px;">


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" >

              <!-- <iframe id="videosyoutube" class="visible-md visible-lg" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLbRCT7gE11eR2MFe2LA66GwV8reeZKx1T" frameborder="0" allowfullscreen></iframe>

                <iframe id="videosyoutubexs" class="visible-xs" width="290" height="315" src="https://www.youtube.com/embed/videoseries?list=PLbRCT7gE11eR2MFe2LA66GwV8reeZKx1T" frameborder="0" allowfullscreen></iframe>


                <iframe id="videosyoutubexs" class="visible-sm" width="550" height="315" src="https://www.youtube.com/embed/videoseries?list=PLbRCT7gE11eR2MFe2LA66GwV8reeZKx1T" frameborder="0" allowfullscreen></iframe>
            -->
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLbRCT7gE11eR2MFe2LA66GwV8reeZKx1T"></iframe>
                </div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 visible-sm visible-md visible-lg" id="patrocinadores">
                <h3>TIENDA DE IMPLEMENTOS DEPORTIVOS</h3>
                <a href="img-patrocinadores/accesoriosRS2-juntos.jpg" data-lightbox="fotosmmdlg">
                    <img src="img-patrocinadores/accesoriosRS2-juntos.jpg" class="img-thumbnail">
                </a>
            </div>
<!--
             <div class="col-xs-12 visible-xs" id="patrocinadoresxs">
                <h3>TIENDA DE IMPLEMENTOS DEPORTIVOS</h3>
                <img src="img-patrocinadores/accesoriosRS2.jpg">
                <img src="img-patrocinadores/accesoriosRS1.jpg">
            </div>
-->
            <div class="col-xs-12 visible-xs" id="patrocinadoresxs">
                <h3>TIENDA DE IMPLEMENTOS DEPORTIVOS</h3>
                <a href="img-patrocinadores/accesorios1sobre2.jpg" data-lightbox="fotoxs">
                    <img src="img-patrocinadores/accesorios1sobre2.jpg" class="img-thumbnail">
                </a>
            </div>


        </div>

    </div>




@stop
