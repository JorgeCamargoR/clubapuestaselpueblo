@extends('layouts.master') <!--referencia a la vista principal-->

@section('main_content') <!--referencia a la seccion del contenido de la vista actual-->

<div id="titulosecciones" >
    <h2 style="text-align: center;margin:0px;padding:15px; font-weight: bold">QUIÉNES SOMOS?</h2>

</div>
<div class="container-fluid" > <!--contenedor de la vista-->

    <div class="col-md-12" style="margin-top:2px"> <!--division de la vista en 12 columnas-->


        <!-- tabs left -->
        <div class="tabbable"> <!--Menu-->

            <ul class="nav nav-pills nav-stacked col-md-3"> <!--Opciones del menu con referencias a,b,c,d,e-->
                <li class="active"><a href="#a" data-toggle="tab"><strong>Quiénes somos?</strong></a></li>
                <li><a href="#b" data-toggle="tab"><strong>Misión</strong></a></li>
                <li><a href="#c" data-toggle="tab"><strong>Visión</strong></a></li>

                <li><a href="#d" data-toggle="tab"><strong>Patrocinadores</strong></a></li>
            </ul>

            <div class="tab-content col-md-9">
                <!--Contenido de cada una de las opciones con referencias a,b,c,d,e-->

                <div class="tab-pane active" id="a">
                     <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif;font-size: medium;margin-top:10px">

                        El <strong>Club Escuela de patinaje Apuestas el Pueblo</strong>, es una entidad deportiva, sin ánimo de lucro,
                        que busca desarrollar un novedoso programa Educativo-Deportivo, en base a un grupo de alumnos (deportistas)
                        interesados en la práctica recreativa y formativa del deporte “Patinaje”, bajo la orientación de un equipo
                        interdisciplinario de profesionales en las áreas de Educación Física, Entrenamiento Deportivo, Administración y
                        Médico; con amplia experiencia en el área, que buscan por medio de la actividad física, contribuir al desarrollo
                        físico y practica metodológica de la actividad deportiva, contribuyendo al desarrollo físico integral del niño y/o joven,
                        con el propósito de aportar a la sociedad hombres y deportistas bien formados.
                        <br><br>
                        Este programa ofrece a los niños, jóvenes y adultos, la oportunidad de recibir una educación amplia y sistemática por medio
                        de un proceso de aprendizaje en el cual, a través del movimiento, se busca la conservación y el mejoramiento de la salud,
                        la estructura del esquema corporal, el desarrollo de las capacidades coordinativas, la educación de la capacidades
                        condicionales, el aprendizaje de habilidades y destrezas motoras básicas y especiales, el desarrollo físico y mental y la
                        integración social.
                        <br><br>
                        Todo instrumento dentro de un proceso global en función del hombre.

                    </p>
                    <br><br><br>
                </div>
                <div class="tab-pane" id="b">
                    <h3 id="h3secciones"><strong>Misión</strong></h3>

                    <hr id="hrseparador">

                    <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif; margin-top: 10px; font-size: medium">

                        El <strong>Club Escuela de Patinaje Apuestas el Pueblo</strong>, como entidad deportiva asume el compromiso de satisfacer
                        las necesidades de recreación, desarrollo motor y formación deportiva especializada para la competencia y
                        el rendimiento de la comunidad que lo requiera.

                        <br><br>
                        Generar programas pedagógicos orientados hacia el mejoramiento del desarrollo integral del alumno (deportista),
                        en busca de una mejor calidad de vida.
                        <br><br>
                        Nuestro club Escuela deportiva, busca el liderazgo en los servicios deportivos en un marco de mejoramiento
                        continuo y orientación al mercado.
                        <br><br>

                        •	A nuestros usuarios, confiabilidad en los servicios y productos.
                        <br>
                        •	A nuestros trabajadores, un clima laboral de mutuo respeto y desarrollo integral.
                        <br>
                        •	A nuestra comunidad, el cumplimiento de nuestras obligaciones y un mayor bienestar social.


                    </p>
                    <br><br><br>

                </div>
                <div class="tab-pane" id="c">
                    <h3 id="h3secciones"><strong>Visión</strong></h3>

                    <hr id="hrseparador">

                    <p class="text-justify" style="font-family: Arial, Helvetica, sans-serif; margin-top: 10px; font-size: medium">


                        El <strong>Club Escuela Apuestas el Pueblo</strong>, será líder en la prestación de servicios
                        educativos-deportivos, en la innovación de servicios con el mejor talento humano en sus dirigentes,
                        con una organización ágil con capacidad de respuesta ante los cambios.
                        <br><br>
                        En el área de patinaje proyectamos nuestro liderazgo organizacional mejorando y ampliando las áreas de servicio con una imagen positiva y acorde con la estructura y desarrollo de nuestro club escuela.

                       </p><br><br><br>

                </div>



                <div class="tab-pane" id="d">
                    <h3 id="h3secciones"><strong>Patrocinadores</strong></h3>

                    <hr id="hrseparador">

                    <div class="col-md-12 col-lg-6 visible-md visible-lg" id="patrocinadores">
                         <img style="margin:auto" src="img-patrocinadores/accesoriosRS2-juntos.jpg">
                    </div>

                    <div class="col-sm-12 visible-sm" id="patrocinadores">
                        <img style="margin:auto" src="img-patrocinadores/accesoriosRS2-juntos.jpg">
                    </div>

                    <div class="col-xs-12 visible-xs" id="patrocinadoresxs">

                        <img style="margin:auto" src="img-patrocinadores/accesoriosRS2.jpg">
                        <img style="margin:auto" src="img-patrocinadores/accesoriosRS1.jpg">

                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
<div class="container-fluid" style="margin:5px;text-align:center" >
    
    <div class="col-md-4">
    <a href="img/bloggif_574c880b9e718.jpeg" data-lightbox="quienessomos" title="Club Apuestas El Pueblo 2016"
       data-title="Club Apuestas El Pueblo 2016">
        <img src="img/slider1movil_opt.jpg" class="img-thumbnail">
    </a>
        </div>

    <div class="col-md-4">
        <a href="img/slider3_opt.jpg" data-lightbox="quienessomos" data-title="Festival de Escuelas" title="Festival de Escuelas">
            <img src="img/slider3_opt.jpg" class="img-thumbnail">
        </a>
    </div>

    <div class="col-md-4">
        <a href="img/grupo2.jpg" data-lightbox="quienessomos" data-title="Club" title="Club">
            <img src="img/grupo2.jpg" class="img-thumbnail">
        </a>
    </div>
</div>
@stop <!--termina el contenido de la vista actual-->
