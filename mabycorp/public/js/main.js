$(document).ready(function(){
    var altura = $('.menuprincipal').offset().top;

    $(window).on('scroll',function(){
        if($(window).scrollTop() > altura){
           $('.menuprincipal').addClass('menux-fixed');
           $('.slider_ofertas2').addClass('menu_ofertas');
           
        }else{
        $('.menuprincipal').removeClass('menux-fixed'); 
        $('.slider_ofertas2').removeClass('menu_ofertas');

        }
    });
});
/**************************************PRODUCTOS MEGA****************************************************************/
var posicionM = 0
$(document).ready(function () {
  
   var numeroImagenes = 9;

    if (numeroImagenes <= 3) {
        $('.derecha_flechaM').css('display', 'none');
        $('.izquierda_flechaM').css('display', 'none');
    }

    $('.izquierda_flechaM').on('click', function () {
        if (posicionM > 0) {
            posicionM = posicionM - 1;
        } else {
            posicionM = numeroImagenes - 3;
        }
        $(".carruselM").animate({"left": -($('#imagen_' + posicionM).position().left)}, 500);
        return false;
    });

    $('.derecha_flechaM').on('click', function () {
        if (numeroImagenes > posicionM + 3) {
            posicionM = posicionM + 1;
        } else {
            posicionM = 0;
        }
        $(".carruselM").animate({"left": -($('#imagen_' + posicionM).position().left)}, 500);
        return false;
    });
});


/*******************************************MEJORES PRODUCTOS*****************************************************************/

var posicion0=0;
$(document).ready(function () {
  
   var numeroImagenes = 12;

    if (numeroImagenes <= 3) {
        $('.derecha_flecha').css('display', 'none');
        $('.izquierda_flecha').css('display', 'none');
    }

    $('.izquierda_flecha').on('click', function () {
        if (posicion0 > 0) {
            posicion0 = posicion0 - 1;
        } else {
            posicion0 = numeroImagenes - 3;
        }
        $(".carrusel2").animate({"left": -($('#imagen_' + posicion0).position().left)}, 500);
        return false;
    });

    $('.derecha_flecha').on('click', function () {
        if (numeroImagenes > posicion0 + 3) {
            posicion0 = posicion0 + 1;
        } else {
            posicion0 = 0;
        }
        $(".carrusel2").animate({"left": -($('#imagen_' + posicion0).position().left)}, 500);
        return false;
    });
});

/*********************************SNACK*********************************************/
var posicion1=0;

$(document).ready(function () {
  
   var numeroImagenes = 12;

    if (numeroImagenes <= 3) {
        $('.derecha_flecha1').css('display', 'none');
        $('.izquierda_flecha1').css('display', 'none');
    }

    $('.izquierda_flecha1').on('click', function () {
        if (posicion1 > 0) {
            posicion1 = posicion1 - 1;
        } else {
            posicion1 = numeroImagenes - 3;
        }
        $(".carrusel21").animate({"left": -($('#imagen_' + posicion1).position().left)}, 500);
        return false;
    });

    $('.derecha_flecha1').on('click', function () {
        if (numeroImagenes > posicion1 + 3) {
            posicion1 = posicion1 + 1;
        } else {
            posicion1 = 0;
        }
        $(".carrusel21").animate({"left": -($('#imagen_' + posicion1).position().left)}, 500);
        return false;
    });
});
/******************************************SERVICIOS************************************************************/
var posicion2=0;

$(document).ready(function () {
  
   var numeroImagenes = 12;

    if (numeroImagenes <= 3) {
        $('.derecha_flecha3').css('display', 'none');
        $('.izquierda_flecha3').css('display', 'none');
    }

    $('.izquierda_flecha3').on('click', function () {
        if (posicion2 > 0) {
            posicion2 = posicion2 - 1;
        } else {
            posicion2 = numeroImagenes - 3;
        }
        $(".carrusel3").animate({"left": -($('#imagen_' + posicion2).position().left)}, 500);
        return false;
    });

    $('.derecha_flecha3').on('click', function () {
        if (numeroImagenes > posicion2 + 3) {
            posicion2 = posicion2 + 1;
        } else {
            posicion2 = 0;
        }
        $(".carrusel3").animate({"left": -($('#imagen_' + posicion2).position().left)}, 500);
        return false;
    });
});
/*************************************TIENDAS*****************************************************************/
var posicion3=0;

$(document).ready(function () {
  
   var numeroImagenes = 9;

    if (numeroImagenes <= 3) {
        $('.derecha_flecha4').css('display', 'none');
        $('.izquierda_flecha4').css('display', 'none');
    }

    $('.izquierda_flecha4').on('click', function () {
        if (posicion3 > 0) {
            posicion3 = posicion3 - 1;
        } else {
            posicion3 = numeroImagenes - 3;
        }
        $(".carrusel4").animate({"left": -($('#imagen_' + posicion3).position().left)}, 500);
        return false;
    });

    $('.derecha_flecha4').on('click', function () {
        if (numeroImagenes > posicion3 + 3) {
            posicion3 = posicion3 + 1;
        } else {
            posicion3 = 0;
        }
        $(".carrusel4").animate({"left": -($('#imagen_' + posicion3).position().left)}, 500);
        return false;
    });
});



/************************************SLIDER DE OFERTAS******************************************************************/
var posicionn=0;
$(document).ready(function () {
  
   var numeroImagenes = 9;

    if (numeroImagenes <= 3) {
        $('.derecha_flechao').css('display', 'none');
        $('.izquierda_flechao').css('display', 'none');
    }



    $('.izquierda_flechao').on('click', function () {
        if (posicionn > 0) {//0>0
            posicionn = posicionn - 1;//
        } else {
            posicionn = numeroImagenes - 3;//posicion=9-3=6
        }
        $(".carruselo").animate({"left": -($('#imagen_' + posicionn).position().left)}, 1000);
        return false;
    });

    $('.derecha_flechao').on('click', function () {
        if (numeroImagenes > posicionn + 3) {
            posicionn = posicionn + 1;
        } else {
            posicionn = 0;
        }
        $(".carruselo").animate({"left": -($('#imagen_' + posicionn).position().left)}, 1000);
        return false;
    });
});

/*======================================== OFERTAS MODAL ======================================*/
var posicion_modal=0;

$(document).ready(function () {
   var numeroImagenes = 12;

    if (numeroImagenes <= 3) {
        $('.derecha_flechaModal').css('display', 'none');
        $('.izquierda_flechaModal').css('display', 'none');
    }

    $('.izquierda_flechaModal').on('click', function () {
        if (posicion_modal > 0) {//0>0
            posicion_modal = posicion_modal - 1;//
        } else {
            posicion_modal = numeroImagenes - 3;//posicion=9-3=6
        }
        $(".carrusel_modal").animate({"left": -($('#imagen_' + posicion_modal).position().left)}, 900);
        return false;
    });

    $('.derecha_flechaModal').on('click', function () {
        if (numeroImagenes > posicion_modal + 3) {
            posicion_modal = posicion_modal + 1;
        } else {
            posicion_modal = 0;
        }
        $(".carrusel_modal").animate({"left": -($('#imagen_' + posicion_modal).position().left)}, 900);
        return false;
    });
});





/*========================== efecto boton arriba==================================*/

$(document).ready(function(){

$('.arriba').click(function(){

    $('body, html').animate({
        scrollTop: '0px'
    }, 300);

});

$(window).scroll(function(){

    if($(this).scrollTop() > 0){

        $('.arriba').slideDown(300);//desaparece

    }else{
        $('.arriba').slideUp(300);
    }


});

});