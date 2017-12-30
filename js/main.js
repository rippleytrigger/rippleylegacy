		
		'use_strict';
	


	//Variables		

			
		

		//Window modal - Habilidades

		var hab_;

		var hab_t;

		var barra = 0;

		var int;

		var barra_p = $("#barra_p");

		//Validacion de suma - contacto - variables

		 var num1 = Math.ceil(Math.random() *10) 


		 var num2 = Math.ceil(Math.random() *10);

		 var total = (num1 + num2);

		 var suma = $("#suma_label")

		 var suma_caja = $("input#suma")

		 var contacto = $(".form-horizontal");

		 var mensaje_num = $("#mensaje_num");


		 //Portafolio - variables

		 var img_portafolio = $(".img_port");

		 var info_portafolio = $(".info_port");


		 //Funciones portafolio

		 function img_info_portafolio (e)
		 {
		

		 	 var img_;


		 	 switch(e)
		 	 {
		 	 	case "img_1":
					img_ = "1";		 	 	
		 	 	break;

		 	 	case "img_2":
		 	 		img_ = "2";
		 	 	break;

		 	 	case "img_3":
		 	 		img_ = "3";
		 	 	break;
		 	 }

		 	 	var ancho_img_port = $("#"+ img_).parent().width();

		 		$("#"+img_).fadeIn().animate({ "width": ancho_img_port, "color": "white"}, 500);

		 		
		 		
		 }

		 function none_info_port()
		 {
		 	   info_portafolio.animate({ "width": "0%", "color": "none"}, 500).fadeOut().removeClass("text_port");
		 }

		 /* Fin */

		 //Validacion de suma - contacto - funcion

		 function validacion_suma ()
		 {

		 	suma.text(num1 + " + " + num2)	


		 	contacto.submit(function(event)
		 	{


		 		if (isNaN(suma_caja.val())) 
		 		{
		 			mensaje_num.removeClass("alert alert-success")

		 			mensaje_num.addClass("alert alert-danger");

		 			mensaje_num.text("Coloque un número");

		 			event.preventDefault();


		 		}

		 		else if (suma_caja.val() != total ) 
		 		{
		 			
		 			mensaje_num.removeClass("alert alert-success");

		 			mensaje_num.addClass("alert alert-danger");

		 			mensaje_num.text("El número ingresado es incorrecto");

		 			event.preventDefault();

		 		}else{

		 			mensaje_num.removeClass("alert alert-danger");

		 			mensaje_num.addClass("alert alert-success");

		 			mensaje_num.text("El número ingresado es correcto");

		 		}	


		 	})	

		 	
		 }


		//Window modal - Habilidades - funciones 	

		function modal_close()
		{


			barra = 0;

			barra_p.css({ width: 0 + "%" , color: "transparent"});


		}


		function modal_progress ()
		{
			 //hab_t = hab_/10;

			 //console.log(hab_)

				barra_p.css({width: barra + "%", color: "white"});

				$("#habilidad").html(hab_t);

				barra_p.html(hab_ + "%");

				//barra += 10;

				//console.log(barra)
			
		}

		
		//Nav_navegate - funcion	

		function nav_navigate()
		{
			//Nav_navegate - variables
			var navbarAnchors = $("#nav_links").find("a");

			navbarAnchors.on("click",function(event)
			{
				var navAnchorTarget = event.target.id;
				var scrollTarget;
				switch(navAnchorTarget)
				{
					case "nav_link_1":
					scrollTarget = $('#inicio').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_2":
					scrollTarget =  $('#quien_soy').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_3":
					scrollTarget =  $('#servicios').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_4": 
					scrollTarget =  $('#Portafolio').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_5": 
					scrollTarget =  $('#contacto').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

				}
			})
		}

		//responsive

		var l;

		var width_window = $(window).width();

		function responsive ()
		{ 
			// l

			l = (width_window > 768)? l=0 : (width_window < 768 && width_window > 500)? l=1: l=2;

			width_window = $(window).width();

			//console.log(l, $('serv_').children())

			if (l == 0 && width_window > 768) 
			{

				//$('#serv_').children().removeClass('resp_');

				$('#serv_').find('span').addClass('fa-pull-left');

			}else if( l == 1 && width_window < 768 && width_window > 500 )
			{

				//$('#serv_').children().addClass('resp_');

				$('.serv_').find('.detalle-servicio').removeClass('.col-xs-offset-1');

				//$('#serv_').find('span').removeClass('fa-pull-center');

			}else if (  l == 2 && width_window < 500) 
			{
				$('#serv_').find('span').removeClass('fa-pull-left');

				$('#serv_').children().addClass('text-center');
			}
		}



	//Eventos


		$(document).ready(function()
		{
			nav_navigate()

			responsive ()

			$(".img_port").on("mouseover",function(event)
			{
				var evento = event.target.id;

				//console.log(evento)
			
				img_info_portafolio(evento);
			});
		
			info_portafolio.on("mouseleave",function()
			{
				none_info_port()
			});	

			$(window).on('resize', responsive);


		})


		$(window).on("load",function()
		{
			/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
			particlesJS.load('intro', 'js/particles.json', function() {
			console.log('callback - particles.js config loaded');
  			});
			//Validación de Formularios
			validacion_suma ()
		})



