$(".imagen_xy").click(function(e){
	var enlaceImagen = e.target.src;
	//var data = $(this).attr("data");
		//console.log(data);
	var lightbox = '<div class="ligthbox">'+
						'<img src="'+enlaceImagen+'" alt="" >'+
						'<div class="btn-close">X</div>'+
					'</div>';

	$("body").append(lightbox);
	
	$(".btn-close").click(function(){
		$(".ligthbox").remove();
	});

});