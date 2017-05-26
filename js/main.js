$(function() {
/*--Main nav-----------------------------------*/ 

	$('.navbar-toggle').jPushMenu({ closeOnClickLink: false });
	$('.dropdown-toggle').dropdown();

/*--calculator-------------------------------------*/

	var promo_left = $('.brand-logo').offset().left - 15;
	$('.calculator').css('left', promo_left + 'px');

	console.log(promo_left);
	
	var slider_capacity = $("#order_capacity"),
		slider_distance = $("#order_distance"),
		tarif = 39,
	   result_output = $(".overall-price"),
	   order_capacity = 50000,
	   distance = 500;
	
	slider_capacity.slider({
		range: "min",
		value: order_capacity,
		min: 1000,
		max: 100000,
		slide: function(event, ui) {
		   $('.order_capacity .range-slider__value').val(ui.value).trigger("change");
		}
	});

	$(".order_capacity .range-slider__value").val(slider_capacity.slider("value"));


	slider_distance.slider({
		range: "min",
		value: distance,
		min: 10,
		max: 10000,
		slide: function(event, ui) {
		   $(".order_distance .range-slider__value").val(ui.value).trigger("change");
		}
	});

	$(".order_distance .range-slider__value").val($("#order_distance").slider("value"));

	$('#gas_type').on('change', function() {
	   tarif = $("#gas_type :selected").val();
	   console.log(tarif);
	   recount();
	});


	$(document).on("change keyup", "#capacity_value", function() {
	   order_capacity = +$(this).val();
	   slider_capacity.slider("value", order_capacity);
	   recount();
	});

	$(document).on("change keyup", ".order_distance .range-slider__value", function() {
	   distance = +$(this).val();
	   slider_distance.slider("value", distance);
	   recount();
	});

	function recount() {
	   revenue = (order_capacity + distance) * tarif;
	   result_output.html(revenue + ' руб/л');
	};


/*--------------------------------------------------*/ 
	
	$('.promo-slider .owl-carousel').owlCarousel({
		items: 1,
		nav: false,
		dots: false,
		loop: true,
		mouseDrag: false
	});

	products_slider_fit_to_screen();

	$(window).on('resize', function() {
		products_slider_fit_to_screen();
	});

	var products_sl = $('.products-slider .owl-carousel');

	products_sl.owlCarousel({
		items: 8,
		dots: false,
		loop: true,
		margin: 0,
		
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 500,
		responsive: {
  			0: { items: 1 },
  			480: { items: 2 },
  			768: { items: 3 }
  		}	
	});

	$('.slider-next').click(function() {
		products_sl.trigger('next.owl.carousel');
  	});
  	$('.slider-prev').click(function() {
		products_sl.trigger('prev.owl.carousel');
  	});


  	$('.partners .owl-carousel').owlCarousel({
  		items: 6,
  		dots: false,
  		nav: false,
  		loop: true,
  		margin: 15,
  		autoplay: true,
  		autoplayTimeout: 8000,
  		autoplayHoverPause: true,
  		autoplaySpeed: 500,
  		responsive: {
  			0: { items: 2 },
  			480: { items: 3 },
  			768: { items: 4 },
  			1170: { items: 6}
  		}	
  	});

/*--Animation-------------------*/

	window.sr = ScrollReveal();
	sr.reveal('.reveal-anim', { duration: 800, viewFactor: 0.3  });
	sr.reveal('.reveal-left', { duration: 800, origin: 'left', distance: '100px' });
	sr.reveal('.reveal-right', { duration: 800, origin: 'right', distance: '100px' });
});

function products_slider_fit_to_screen() {
	var window_w = $(window).width();
	var products_container = $('.products-slider');
	var products_promo = $('.products-promo');
	var products_promo_left = products_promo.offset().left + products_promo.outerWidth();
	var products_slider_width = $(document).width() - products_promo_left;

	if (window_w > 989) {
		products_container.css('left', products_promo_left + 'px');
		products_container.css('width', products_slider_width + 'px');
	} else { return false; }
}

/*!
 * jPushMenu.js
 * 1.1.1
 * @author: takien
 * http://takien.com
 * Original version (pure JS) is created by Mary Lou http://tympanus.net/
 */
(function($) {
	$.fn.jPushMenu = function(customOptions) {
		var o = $.extend({}, $.fn.jPushMenu.defaultOptions, customOptions);
		/* add class to the body.*/
		
		$('body').addClass(o.bodyClass);
		$(this).addClass('jPushMenuBtn');
		$(this).click(function() {
			var target         = '',
			push_direction     = '';
			
			if($(this).is('.'+o.showLeftClass)) {
				target         = '.cbp-spmenu-left';
				push_direction = 'toright';
			}
			else if($(this).is('.'+o.showRightClass)) {
				target         = '.cbp-spmenu-right';
				push_direction = 'toleft';
			}
			else if($(this).is('.'+o.showTopClass)) {
				target         = '.cbp-spmenu-top';
			}
			else if($(this).is('.'+o.showBottomClass)) {
				target         = '.cbp-spmenu-bottom';
			}
			
			$(this).toggleClass(o.activeClass);
			$(target).toggleClass(o.menuOpenClass);
			
			if($(this).is('.'+o.pushBodyClass)) {
				$('body').toggleClass( 'cbp-spmenu-push-'+push_direction );
			}
			
			/* disable all other button*/
			$('.jPushMenuBtn').not($(this)).toggleClass('disabled');
			
			return false;
		});
		var jPushMenu = {
			close: function (o) {
				$('.jPushMenuBtn,body,.cbp-spmenu').removeClass('disabled active cbp-spmenu-open cbp-spmenu-push-toleft cbp-spmenu-push-toright');
			}
		}

    if(o.closeOnClickOutside) {
			$(document).click(function() {
				jPushMenu.close();
				$('.jPushMenuBtn').removeClass('menu-active');
			});

			$(document).on('click touchstart', function(){
				jPushMenu.close();
				$('.jPushMenuBtn').removeClass('menu-active');
			});

			$('.cbp-spmenu,.toggle-menu').click(function(e){
				e.stopPropagation();
			});

			$('.cbp-spmenu,.toggle-menu').on('click touchstart', function(e){
				e.stopPropagation();
			});
		}

        // On Click Link
        if(o.closeOnClickLink) {
            $('.cbp-spmenu a').on('click',function(){
                jPushMenu.close();
            });
        }
	};
 
   /* in case you want to customize class name,
   *  do not directly edit here, use function parameter when call jPushMenu.
   */
	$.fn.jPushMenu.defaultOptions = {
		bodyClass       : 'cbp-spmenu-push',
		activeClass     : 'menu-active',
		showLeftClass   : 'menu-left',
		showRightClass  : 'menu-right',
		showTopClass    : 'menu-top',
		showBottomClass : 'menu-bottom',
		menuOpenClass   : 'cbp-spmenu-open',
		pushBodyClass   : 'push-body',
		closeOnClickOutside: true,
		closeOnClickInside: true,
		closeOnClickLink: true
	};
})(jQuery);

function initMap() {
   var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 55.697723, lng: 37.5300353},
      zoom: 17,
      styles: [
		     {
		        "featureType": "administrative",
		        "elementType": "labels.text.fill",
		        "stylers": [
		            {
		                "color": "#444444"
		            }
		        ]
		    },
		    {
		        "featureType": "landscape",
		        "elementType": "all",
		        "stylers": [
		            {
		                "color": "#f2f2f2"
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "elementType": "all",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "road",
		        "elementType": "all",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 45
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "all",
		        "stylers": [
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "elementType": "labels.icon",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "transit",
		        "elementType": "all",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "all",
		        "stylers": [
		            {
		                "color": "#46bcec"
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    }
		]
   });
   var marker = new google.maps.Marker({
      position: {lat: 55.697723, lng: 37.5300353},
      map: map,
      title: '12345, г. Москва, ул. Ломоносовская дом 1, стр. 1, 30 этаж'
   });
}

