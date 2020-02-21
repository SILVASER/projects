//$('.limpiar').addClass("ligthbox");
$(document).ready(function(){


$(".imagen").click(function(e){

	var enlaceImagen = e.target.src;
	var data = $(this).attr("data");
		//console.log(data);
	var lightbox = '<div class="limpiar ligthbox">'+
						'<img src="'+enlaceImagen+'" alt="" id="zoom_mw" data-zoom-image="'+data+'" style="width:303px;height:350px;margin-top:145px;margin-left:50px;border:6px solid #317CB6;border-radius:6px">'+
						'<div class="bt btn-close">X</div>'+
					'</div>';

	$("#contenedor_principal").append(lightbox);
	
	$("#zoom_mw").elevateZoom({
		scrollZoom : true,
		cursor: "crosshair",
		zoomWindowOffetx: 5
	})

	$(".btn-close").click(function(){

			/*$('.limpiar').removeClass("ligthbox");
			$('.bt').removeClass("btn-close");*/

			$('.limpiar').remove();
			$('.ligthbox').remove();
			$('.bt').remove();	

	})


/*$('.limpiar').addClass("ligthbox");
				$('.bt').addClass("btn-close");*/
})
})