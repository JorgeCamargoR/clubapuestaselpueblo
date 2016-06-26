@extends('layouts.master')
@section('main_content')


    <div id="titulosecciones" >
        <h2 style="text-align: center;margin:0px;padding:15px; font-weight: bold">ESCUELA DE FORMACIÓN</h2>

    </div>
    <div class="container-fluid" style="margin-bottom: 5px"> <!--contenedor de la vista-->

        <div class="col-md-12" style="margin-top:2px"> <!--division de la vista en 12 columnas-->

            <!-- tabs left -->
            <div class="tabbable"> <!--Menu-->

                <ul class="nav nav-pills nav-stacked col-md-3"> <!--Opciones del menu con referencias a,b,c,d,e-->
                    <li class="active"><a href="#a" data-toggle="tab"><strong>Básica</strong></a></li>
                    <li><a href="#b" data-toggle="tab"><strong>Avanzada</strong></a></li>

                </ul>

                <div class="tab-content col-md-9">
                    <!--Contenido de cada una de las opciones con referencias a,b,c,d,e-->

                    <div class="tab-pane active" id="a">
                        <h3 id="h3secciones"><strong>Básica</strong></h3>
                        <hr id="hrseparador">
                        <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif;font-size: medium">
                            <h4 style="margin-top:10px;">Objetivo General</h4>

                            Fomentar la práctica del patinaje de velocidad en niños, jóvenes y adultos.<br>

                            <h4>Objetivos Específicos</h4>

                            •	Realizar procesos de Enseñanza - Aprendizaje del patinaje.<br>
                            •	Impulsar la recreación y el aprovechamiento del tiempo libre.<br>
                            •	Fomentar la cultura deportiva en los practicantes.<br>
                            •	Lograr un estado físico y mental en beneficio de una vida sana.<br>
                            •	Mejorar la calidad de vida de los practicantes.<br>
                            •	Desarrollar las capacidades físicas, afectivas y sociales del alumno.<br>
                            •	Conseguir un impacto social significativo.<br>
                            Se dictan once (11) cursos regulares de escuela básica al año.<br>
                            El proceso de escuela básica regular lo componen cuatro (4) niveles.<br>

                        <div class="col-md-4">
                            <a href="img/basica1.jpg" data-lightbox="galeria" data-title="Básica 1">
                                <img src="img/basica1.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="img/basica2.jpg" data-lightbox="galeria" data-title="Básica 2">
                                <img src="img/basica2.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="img/basica3.jpg" data-lightbox="galeria" data-title="Básica 3">
                                <img src="img/basica3.jpg" class="img-thumbnail">
                            </a>
                        </div>


                        </p>
                        <br><br><br>
                    </div>
                    <div class="tab-pane" id="b">

                        <h3 id="h3secciones"><strong>Avanzada</strong></h3>
                        <hr id="hrseparador">

                        <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif; font-size: medium">

                        <h4 style="margin-top:10px;">Objetivo General</h4>
                            Brindar al alumno la posibilidad de continuar el proceso de aprendizaje después de haber culminado sus cuatro niveles
                            de aprendizaje básico, especializándose en patinaje de velocidad.<br>

                            <h4>Objetivos Específicos</h4>

                            •	Ofrecer al alumno los elementos necesarios relacionados con la técnica del patinaje de velocidad.<br>
                            •	Preparar al alumno para la adaptación al entrenamiento del patinaje como disciplina deportiva.<br>
                            •	Mejorar las condiciones físicas del alumno.<br>
                            •	Orientar al deportista en la práctica de un deporte específico.<br>
                            •	Realizar un programa de mantenimiento físico continuado.<br>
                            •	Cimentar el principio de la sana competitividad.<br>

                        </p>

                        <div class="col-md-3">
                            <a href="img/avanzada1.jpg" data-lightbox="galeriaavanzada" data-title="Titulo1">
                                <img src="img/avanzada1.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="img/avanzada2.jpg" data-lightbox="galeriaavanzada" data-title="Titulo12">
                                <img src="img/avanzada2.jpg" class="img-thumbnail">
                            </a>
                        </div>



                        <br><br><br>

                    </div>

                </div>
            </div>
        </div>

    </div>


@stop

