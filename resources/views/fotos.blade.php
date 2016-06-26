@extends('layouts.master')
@section('main_content')

    <div id="titulosecciones" >
        <h2 style="text-align: center;margin:0px;padding:15px; font-weight: bold">FOTOS</h2>

    </div>

    <div class="container-fluid" style="margin-bottom: 5px"> <!--contenedor de la vista-->

        <div class="col-md-12" style="margin-top:2px"> <!--division de la vista en 12 columnas-->

            <!-- tabs left -->
            <div class="tabbable"> <!--Menu-->

                <ul class="nav nav-pills nav-stacked col-md-3"> <!--Opciones del menu con referencias a,b,c,d,e-->
                    <li class="active"><a href="#a" data-toggle="tab"><strong>Historia</strong></a></li>
                    <li><a href="#b" data-toggle="tab"><strong>Escuela de formación</strong></a></li>
                    <li><a href="#c" data-toggle="tab"><strong>Carreras</strong></a></li>
                    <li><a href="#d" data-toggle="tab"><strong>Festivales y Departamentales</strong></a></li>

                </ul>

                <div class="tab-content col-md-9">
                    <!--Contenido de cada una de las opciones con referencias a,b,c,d,e-->

                    <div class="tab-pane active" id="a">
                        <h3 id="h3secciones"><strong>Historia</strong></h3>
                        <hr id="hrseparador">

                        <div class="col-md-3">
                            <a href="img/basica1.jpg" data-lightbox="fotoshistoria" data-title="Historia 1">
                                <img src="img/basica1.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="view view-first">
                            <img src="img/basica2.jpg" />
                            <div class="mask">
                                <br><br><br><br>
                                <a href="img/basica2.jpg" data-toggle="lightbox" data-lightbox="fotoshistoria" data-title="Escuela de formación 2"
                                   data-footer="Una pequeña descripción de la foto" class="info">
                                    <span class="glyphicon glyphicon-fullscreen"></span>

                                </a>
                            </div>
                        </div>

                        <div class="view view-first">
                            <img src="img/basica1.jpg" />
                            <div class="mask">
                                <br><br><br><br>
                                <a href="img/basica1.jpg" data-toggle="lightbox" data-lightbox="fotoshistoria" data-title="Escuela de formación 2"
                                   data-footer="Una pequeña descripción de la foto" class="info">
                                    <span class="glyphicon glyphicon-fullscreen"></span>

                                </a>
                            </div>
                        </div>



                    </div>
                    <div class="tab-pane" id="b">

                        <h3 id="h3secciones"><strong>Escuela de formación</strong></h3>
                        <hr id="hrseparador">

                        <div class="view view-first">
                            <img src="img/avanzada1.jpg" />
                            <div class="mask">
                                <br><br><br><br>
                                <a href="img/avanzada1.jpg" data-toggle="lightbox" data-lightbox="fotosescuela" data-title="Escuela de formación 2"
                                   data-footer="Una pequeña descripción de la foto" class="info">
                                    <span class="glyphicon glyphicon-fullscreen"></span>

                                </a>
                            </div>
                        </div>

                        <div class="view view-first">
                            <img src="img/basica3.jpg" />
                            <div class="mask">
                                <br><br><br><br>
                                <a href="img/basica3.jpg" data-toggle="lightbox" data-lightbox="fotosescuela" data-title="Escuela de formación 2"
                                   data-footer="Una pequeña descripción de la foto" class="info">
                                    <span class="glyphicon glyphicon-fullscreen"></span>

                                </a>
                            </div>
                        </div>

                        <div class="view view-first">
                            <img src="img/avanzada2.jpg" />
                            <div class="mask">
                                <br><br><br><br>
                                <a href="img/avanzada2.jpg" data-toggle="lightbox" data-lightbox="fotosescuela" data-title="Escuela de formación 2"
                                   data-footer="Una pequeña descripción de la foto" class="info">
                                    <span class="glyphicon glyphicon-fullscreen"></span>

                                </a>
                            </div>
                        </div>

                        <br><br><br>

                    </div>

                    <div class="tab-pane" id="c">

                        <h3 id="h3secciones"><strong>Carreras</strong></h3>
                        <hr id="hrseparador">

                        <div class="col-md-3">
                            <a href="img/preliga1.jpg" data-toggle="lightbox" data-gallery="carreras"  data-title="Escuela de formación 1" data-footer="Descripcion">
                                <img src="img/preliga1.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="img/slider3_opt.jpg" data-toggle="lightbox" data-gallery="carreras"  data-title="Escuela de formación 2" data-footer="Descripcion">
                                <img src="img/slider3_opt.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="img/federados1.jpg" data-toggle="lightbox" data-gallery="carreras"  data-title="Escuela de formación 3">
                                <img src="img/federados1.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/federados2.jpg" data-toggle="lightbox" data-gallery="carreras" data-title="Escuela de formación 4">
                                <img src="img/federados2.jpg" class="img-thumbnail">
                            </a>
                        </div>


                    </div>

                    <div class="tab-pane" id="d">

                        <h3 id="h3secciones"><strong>Festivales y Departamentales</strong></h3>
                        <hr id="hrseparador">

                        <div class="col-md-3">
                            <a  href="img/preliga1.jpg" data-toggle="lightbox" data-gallery="festivalesydepartamentales" data-title="Escuela de formación 1">
                                <img  src="img/preliga1.jpg" class="img-thumbnail">
                            </a>
                        </div>


                        <div class="view view-first">
                            <img src="img/slider3_opt.jpg" />
                            <div class="mask">
                           <br><br><br><br>
                                <a href="img/slider3_opt.jpg" data-toggle="lightbox" data-gallery="festivalesydepartamentales" data-title="Escuela de formación 2"
                                   data-footer="Una pequeña descripción de la foto" class="info">
                                    <span class="glyphicon glyphicon-fullscreen"></span>

                                </a>
                            </div>
                        </div>




                        <!-- <div class="view view-first">
                             <img src="img/slider3_opt.jpg" class="img-thumbnail">
                             <div class="mask">
                                 <h2>Empire State</h2>
                                 <p>A cool description of some sort between these tags. I am so cool and awesomely awesome.</p>

                                 <a href="img/slider3_opt.jpg" data-toggle="lightbox" data-gallery="festivalesydepartamentales" data-title="Escuela de formación 2"
                                    data-footer="Una pequeña descripción de la foto" class="info">Read More
                                 </a>
                             </div>
                         </div>-->
                    </div>
                </div>
            </div>
        </div>

    </div>



@stop


@section('scripts')

    <script type="text/javascript">
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>

@stop
