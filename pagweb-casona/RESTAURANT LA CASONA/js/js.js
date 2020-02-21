var posicion = 0;
//var imagenes = new Array();

$(document).ready(function () {
    
   /* $("#imagen_0").on('mouseover', function(){
       $("#img0").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_0").on('mouseout', function(){
      $("#img0").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_1").on('mouseover', function(){
       $("#img1").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_1").on('mouseout', function(){
      $("#img1").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_2").on('mouseover', function(){
       $("#img2").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_2").on('mouseout', function(){
      $("#img2").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_3").on('mouseover', function(){
       $("#img3").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_3").on('mouseout', function(){
      $("#img3").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_3").on('mouseover', function(){
       $("#img3").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_3").on('mouseout', function(){
      $("#img3").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_3").on('mouseover', function(){
       $("#img3").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_3").on('mouseout', function(){
      $("#img3").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_3").on('mouseover', function(){
       $("#img3").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_3").on('mouseout', function(){
      $("#img3").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_4").on('mouseover', function(){
       $("#img4").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_4").on('mouseout', function(){
      $("#img4").css({"width":"60px", "height":"60px"});
    });
    
    
    $("#imagen_5").on('mouseover', function(){
       $("#img5").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_5").on('mouseout', function(){
      $("#img5").css({"width":"60px", "height":"60px"});
    });
    
    
    $("#imagen_6").on('mouseover', function(){
       $("#img6").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_6").on('mouseout', function(){
      $("#img6").css({"width":"60px", "height":"60px"});
    });
    
    
    $("#imagen_7").on('mouseover', function(){
       $("#img7").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_7").on('mouseout', function(){
      $("#img7").css({"width":"60px", "height":"60px"});
    });
    
    $("#imagen_8").on('mouseover', function(){
       $("#img8").css({"width":"70px", "height":"70px"});
    });
    
     $("#imagen_8").on('mouseout', function(){
      $("#img8").css({"width":"60px", "height":"60px"});
    });
*/    
    /*****************************************/
   var numeroImagenes = 6;

    if (numeroImagenes <= 3) {
        $('.derecha_flecha').css('display', 'none');
        $('.izquierda_flecha').css('display', 'none');
    }

    $('.izquierda_flecha').on('click', function () {
        if (posicion > 0) {
            posicion = posicion - 1;
        } else {
            posicion = numeroImagenes - 3;
        }
        $(".carrusel2").animate({"left": -($('#imagen_' + posicion).position().left)}, 600);
        return false;
    });

    $('.derecha_flecha').on('click', function () {
        if (numeroImagenes > posicion + 3) {
            posicion = posicion + 1;
        } else {
            posicion = 0;
        }
        $(".carrusel2").animate({"left": -($('#imagen_' + posicion).position().left)}, 600);
        return false;
    });
});




