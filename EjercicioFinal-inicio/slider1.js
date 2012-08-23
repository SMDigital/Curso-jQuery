
(function($) {
    
    //declaramos nuestras variables y ocultamos el contenido sobrante
//	$('div.slider').css('overflow', 'hidden');
//        var sliderUL = $('div.slider').css('overflow', 'hidden').children("ul");
//        
//		var imgs = sliderUL.find('img');
//		var imgWidth = imgs[0].width;
//		var imgsLen = imgs.length;
//		var actual = 1;
//		var totalImgsWidth = imgsLen * imgWidth; // 2400 tamaño total de las imagenes juntas
//               
//
//                //Colocamos los eventos para cada uno de los botones
//	$('#slider-nav').find('button').on('click', function() {
//		
//                var direccion = $(this).data('dir'); //miramos que boton es
//		var loc = imgWidth; //obtenemos el ancho
//
//		// update current value
//		( direccion == 'next' ) ? ++actual : --actual;
//
//		// if first image
//		if ( actual == 0 ) {
//                    console.log("esoo")
//			actual = imgsLen;
//			//loc = -(totalImgsWidth - imgWidth); // 2400 - 600 = 1800
//                        loc = (totalImgsWidth - imgWidth); // 2400 - 600 = 1800
//			direction = 'next';
//		} else if ( actual - 1 === imgsLen ) { // ya llego al fin, debe reiniciarse
//			actual = 1;
//			loc = 0;
//		}
//                //mostramos en consola como va eso
//                console.log(actual+" "+loc);
//                
//                transition(sliderUL, loc, direccion);
//                
//
//                
//		
//	});
        	var sliderUL = $('div.slider').css('overflow', 'hidden').children('ul'),
		imgs = sliderUL.find('img'),
		imgWidth = imgs[0].width, // 600
		imgsLen = imgs.length, // 4
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400
                var estado=false;
                
                console.log("ancho"+imgWidth )
                
	$('#slider-nav').show().find('button').on('click', function() {
            
            
                if(estado){
                    return
                }
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? ++current : --current;

		// if first image
		if ( current === 0 ) {
			current = imgsLen;
			loc = totalImgsWidth - imgWidth; // 2400 - 600 = 1800
			direction = 'next';
		} else if ( current - 1 === imgsLen ) { // Are we at end? Should we reset?
			current = 1;
			loc = 0;
		}
                estado=true;
		rotarimage(sliderUL, loc, direction);
	});
        
        
        	function transition( container, loc, direction ) {
		var unit; // -= +=

		if ( direction && loc !== 0 ) {
			unit = ( direction === 'next' ) ? '-=' : '+=';
		}

		container.animate({
			'margin-left': unit ? (unit + loc) : loc
		});
	}
        
        //Funcion que hara rotar las imagenes
                function rotarimage( container, loc, direction ) {
                    var unit; // -= +=
                    var totloc=0;    
                   var actualmargin=parseInt( container.css('margin-left').replace("px", ""))
                    console.log("actual "+actualmargin)
                    
                    
                    if ( direction && loc != 0 ) {
                            //unit = ( direction == 'next' ) ? '-=' : '+=';
                            if( direction == 'next' ) {
                                
                              totloc=actualmargin-loc;  
                            }else{
                                totloc=actualmargin+loc;
                            }
                    }
                    container.animate({
                            'margin-left': totloc
                    }, function() {
                    // Animation complete.
                    
                    estado=false;
                });





                     

                

                }

})(jQuery);