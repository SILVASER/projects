//$('.limpiar').addClass("ligthbox");
$(".imagen").click(function(e){

	var enlaceImagen = e.target.src;
	var data = $(this).attr("data");
		//console.log(data);
	var lightbox = '<div class="limpiar ligthbox">'+
						'<img src="'+enlaceImagen+'" alt="" id="zoom_mw" data-zoom-image="'+data+'">'+
						'<div class="bt btn-close">X</div>'+
					'</div>';

	$("body").append(lightbox);
	$("#zoom_mw").elevateZoom({
		scrollZoom : true,
		cursor: "crosshair",
		zoomWindowOffetx: 15
	})
	$(".btn-close").click(function(){

			/*$('.limpiar').removeClass("ligthbox");
			$('.bt').removeClass("btn-close");*/

			$('.limpiar').remove();
			$('.bt').remove();
			

		

	})


/*$('.limpiar').addClass("ligthbox");
				$('.bt').addClass("btn-close");*/
})




