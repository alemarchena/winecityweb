
var alturamenu = $('.menu').outerHeight(true);//mide la altura del objeto con margen borde y padding externo
var velocidadscroll = 600;

$(window).on('scroll', function()
{
	 
	if ( $(window).scrollTop() > alturamenu  )
	{
		$('.menu').addClass('menu-fixed');
	}
	else{
		$('.menu').removeClass('menu-fixed');
	}

});

//--------------------------SCROLL DEL MENU ----------------------------------------------
$("#inicio").on('click',function(e){ e.preventDefault(); $("html, body").animate({ scrollTop: 0 }, velocidadscroll); });

$("#bloque1").on('click',function(e){var posbloque1 = $("#tseccion1").offset().top - alturamenu ; e.preventDefault(); $("html, body").animate({scrollTop:posbloque1 }, velocidadscroll);});

$("#bloque2").on('click', function(e){var posbloque2 = $("#tseccion2").offset().top - alturamenu; e.preventDefault(); $("HTML, BODY").animate({ scrollTop: posbloque2}, velocidadscroll);});

$("#bloque3").on('click', function(e) {var posbloque3 = $("#tseccion3").offset().top - alturamenu ; e.preventDefault(); $("HTML, BODY").animate({ scrollTop: posbloque3}, velocidadscroll);});

$("#bloque4").on('click', function(e) {var posbloque4 = $("#tseccion4").offset().top - alturamenu; e.preventDefault(); $("HTML, BODY").animate({ scrollTop: posbloque4}, velocidadscroll);});

$("#seccion1").mousemove(function( event ) {$("#bloque1").addClass('bounceIn animated');});
$("#seccion2").mouseleave(function( event ) {$("#bloque2").removeClass('bounceIn animated');});
$("#seccion3").mouseleave(function( event ) {$("#bloque3").removeClass('bounceIn animated');});
$("#seccion4").mouseleave(function( event ) {$("#bloque4").removeClass('bounceIn animated');});