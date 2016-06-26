$(document).ready(function(){

  /*$('#gallery').click(function(){
        $("#central").load('vistas/historia.php');
    });*/


   $('.img-responsiveheader').hide();
   $('.img-responsiveheader').show(2000);

   $('.logo').hide();
   $('.logo').show(2000);

   $('.nombreapuestaspc').hide();
   $('.nombreapuestaspc').fadeIn(5000);


   $('.nombreapuestas').hide();
   $('.nombreapuestas').fadeIn(5000);

   $('.nombreapuestassm').hide();
   $('.nombreapuestassm').fadeIn(5000);


   $('.nombreapuestasmd').hide();
   $('.nombreapuestasmd').fadeIn(5000);

   $('#historia').click(function(){
    $("#divtest").load("vistas/historia.php");
   });


});