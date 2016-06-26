@extends('layouts.master')
@section('main_content')

    <div id="titulosecciones" >
        <h2 style="text-align: center;margin:0px;padding:15px; font-weight: bold">VIDEOS</h2>

    </div>

    <div class="container-fluid" style="margin: 10px"> <!--contenedor de la vista-->

        <div class="col-md-12 visible-md visible-lg" >


            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=A3TzeNOPe78" data-toggle="lightbox" data-gallery="videos" data-title="Espejito"
                        data-footer="descripcion del video espejito">

                    <img src="img/videos/espejito.png" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=YCj5RLY1sVw" data-toggle="lightbox" data-gallery="videos" data-title="Prueba">

                    <img src="img/videos/prueba.png" class="img-thumbnail">
                </a>
            </div>

            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=A3TzeNOPe78" data-toggle="lightbox" data-gallery="videos">

                    <img src="img/videos/espejito.png" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=YCj5RLY1sVw" data-toggle="lightbox" data-gallery="videos">

                    <img src="img/videos/prueba.png" class="img-responsive">
                </a>
            </div>
        </div>

        <div class="col-md-12 visible-xs visible-sm">

            <iframe width="240" height="180" src="https://www.youtube.com/embed/YCj5RLY1sVw" frameborder="0" allowfullscreen></iframe>

            <iframe width="240" height="180" src="https://www.youtube.com/embed/A3TzeNOPe78" frameborder="0" allowfullscreen></iframe>

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