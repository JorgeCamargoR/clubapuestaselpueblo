@extends('layouts.master')
@section('main_content')



    <div id="titulosecciones" >
        <h2 style="text-align: center;margin:0px;padding:15px; font-weight: bold">CARRERAS</h2>

    </div>
    <div class="container-fluid" style="margin-bottom: 5px"> <!--contenedor de la vista-->

        <div class="col-md-12" style="margin-top:2px"> <!--division de la vista en 12 columnas-->

            <!-- tabs left -->
            <div class="tabbable"> <!--Menu-->

                <ul class="nav nav-pills nav-stacked col-md-3"> <!--Opciones del menu con referencias a,b,c,d,e-->
                    <li class="active"><a href="#a" data-toggle="tab"><strong>Pre-liga</strong></a></li>
                    <li><a href="#b" data-toggle="tab"><strong>Federados</strong></a></li>

                </ul>

                <div class="tab-content col-md-9">
                    <!--Contenido de cada una de las opciones con referencias a,b,c,d,e-->

                    <div class="tab-pane active" id="a">
                        <h3 style="margin-top:5px;margin-bottom: 5px"><strong>Pre-liga</strong></h3>
                        <hr style="margin-top:10px;margin-bottom:5px">
                        <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif;font-size: medium">
                        <h4 style="margin-top:10px;">Objetivo General</h4>

                        Dar continuidad al proceso de aprendizaje después de haber terminado su ciclo por escuela básica,
                        el club le brinda la oportunidad al deportista de ingresar a esta etapa a través de los niveles de
                        Menores y Transición.<br>

                        <h4>Objetivos Específicos</h4>

                   • Ofrecer al alumno los elementos necesarios relacionados con la técnica del patinaje de velocidad.<br>
                   • Preparar al alumno para la adaptación al entrenamiento del patinaje como disciplina deportiva.<br>
                   • Mejorar las condiciones físicas del alumno.<br>
                   • Orientar al deportista en la práctica de un deporte específico.<br>
                   • Realizar un programa de mantenimiento físico continuado.<br><br>

                      En esta etapa los alumnos inician una mayor carga en sus entrenamiento, el ideal es motivarlos a
                      continuar en la disciplina deportiva, suministra al alumno los elementos técnicos necesarios para
                      su aprendizaje, promoviendo las prácticas deportivas competitivas como lo son Festivales y
                      Departamentales.


                        </p>

                        <div class="col-md-4">
                            <a href="img/preliga1.jpg" data-lightbox="galeriapreliga" data-title="Preliga 1">
                                <img src="img/preliga1.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="img/slider3_opt.jpg" data-lightbox="galeriapreliga" data-title="Preliga 2">
                                <img src="img/slider3_opt.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="tab-pane" id="b">

                        <h3 style="margin-top:5px;margin-bottom: 5px"><strong>Federados</strong></h3>
                        <hr style="margin-top:10px;margin-bottom:5px">

                        <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif; font-size: medium">

                        <h4 style="margin-top:10px;">Objetivo General</h4>
                        Planificar y ejecutar los procesos de formación, preparando al deportista hacia el alto rendimiento.<br><br>
                        Este grupo está compuesto por los deportistas que alcanzan los objetivos de las etapas anteriores y que
                        tengan las capacidades físicas, psicológicas y emocionales para continuar el proceso de formación y
                        preparación hacia el alto rendimiento.<br><br>
                        Están clasificados por la Federación colombiana de patinaje de la siguiente forma:<br><br>
                        <strong>Menores</strong><br>
                        Deportistas en edades 7 a 10 años cumplidos el 1 de julio del año en curso, tanto en Damas y Varones.<br><br>
                        <strong>Transición</strong><br>
                        Deportistas en edades de 11 a 13 años cumplidos el 1 de julio del año en curso, tanto en Damas y Varones.<br><br>
                        <strong>Mayores</strong><br>
                        Deportistas de 14 años en adelante cumplidos el 1 de julio del año en curso, tanto en Damas y Varones.<br><br>


                        <div class="col-md-4">
                            <a href="img/federados1.jpg" data-lightbox="galeriafederados" data-title="Federados1">
                                <img src="img/federados1.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="img/federados2.jpg" data-lightbox="galeriafederados" data-title="Federados1">
                                <img src="img/federados2.jpg" class="img-thumbnail">
                            </a>
                        </div>

                        </p>
                        <br><br><br>

                    </div>

                </div>
            </div>
        </div>

    </div>


@stop