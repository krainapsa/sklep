(function($){
$(document).ready(function() {

/**
*	Init
*/	
	// iOS button fixes
	var iOS = false,
        p = navigator.platform;

    if (p === 'iPad' || p === 'iPhone' || p === 'iPod') {
        iOS = true;
    }
	if (iOS) {
        $('input.button, input[type="text"],input[type="button"],input[type="password"],textarea, input.input-text').css('-webkit-appearance', 'none');
        $('input').css('border-radius', '0');
    }

	$(".homepage-promo-block .wpb_column > .wpb_wrapper img").css('width', '100%');
	//'use strict';
	updateFullwidthSections();

	// Jquery Check for Chrome and Safari
	if($.browser.webkit){
	  $(".nav .sub-menu li .sub-menu, .nav .children li .children").css('margin-top', "-47px");
	}
	// WooCommerce 2.3 QTY buttons back
	// Quantity buttons
	$( '.woocommerce .shop-product .summary div.quantity:not(.buttons_added), .woocommerce .shop-product .summary td.quantity:not(.buttons_added)' ).addClass( 'buttons_added' ).append( '<input type="button" value="+" class="plus" />' ).prepend( '<input type="button" value="-" class="minus" />' );

	$('.woocommerce .shop-product .summary .input-text.qty').attr('type', '');

	$( document ).on( 'click', '.plus, .minus', function() {

		// Get values
		var $qty		= $( this ).closest( '.quantity' ).find( '.qty' ),
			currentVal	= parseFloat( $qty.val() ),
			max			= parseFloat( $qty.attr( 'max' ) ),
			min			= parseFloat( $qty.attr( 'min' ) ),
			step		= $qty.attr( 'step' );

		// Format values
		if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
		if ( max === '' || max === 'NaN' ) max = '';
		if ( min === '' || min === 'NaN' ) min = 0;
		if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

		// Change the value
		if ( $( this ).is( '.plus' ) ) {

			if ( max && ( max == currentVal || currentVal > max ) ) {
				$qty.val( max );
			} else {
				$qty.val( currentVal + parseFloat( step ) );
			}

		} else {

			if ( min && ( min == currentVal || currentVal < min ) ) {
				$qty.val( min );
			} else if ( currentVal > 0 ) {
				$qty.val( currentVal - parseFloat( step ) );
			}

		}

		// Trigger change event
		$qty.trigger( 'change' );
	});

	// WooCommerce fix
	$(".page-item-title h1").after($(".woocommerce-breadcrumb"));
	$(".woocommerce-breadcrumb").show();
	$(".shop-product").prepend($(".woocommerce-breadcrumb"));

	$(".woocommerce-breadcrumb").after($('.woocommerce .term-description'));

	$(".woocommerce .shop-product .summary .price").after($(".woocommerce .shop-product .summary .product_meta"));

	// Floating blocks
	$(".widget_facebook_right, .widget_custom_box_left").css("top", $("#navbar").position().top);

	var menu_hover_link_color = '';
	var menu_link_color = $(".navbar .nav > li > a").css('color');
	var menu_hover_bg = '';

	$(".widget_facebook_right").hover(function(){            
	$(".widget_facebook_right").stop(true, false).animate({right: "0" }, 800, 'easeOutQuint' );        
	},
	function(){            
	$(".widget_facebook_right").stop(true, false).animate({right: "-245" }, 800, 'easeInQuint' );        
	},1000);

	$(function(){        
	$(".widget_custom_box_left").hover(function(){            
	$(".widget_custom_box_left").stop(true, false).animate({left: "0" }, 800, 'easeOutQuint' );        
	},
	function(){            
	$(".widget_custom_box_left").stop(true, false).animate({left: "-245" }, 800, 'easeInQuint' );        
	},1000);    
	});
/**
*	Scroll functions
*/
	$(window).scroll(function () {

		var scrollonscreen = $(window).scrollTop() + $(window).height();
		
		// Scroll to top function
		if(scrollonscreen > $(window).height() + 350){
			$('top-link').css("bottom", "14px");
		}
		else {
			$('#top-link').css("bottom", "-60px");
		}
	
	});

//scroll up event
$('#top-link').click(function(){
	$('body,html').stop().animate({
		scrollTop:0
	},800,'easeOutCubic')
	return false;
});

/**
*	Resize events
*/

	$(window).resize(function () {
		
		updateFullwidthSections();

	});

/**
*	Functions
*/


function updateFullwidthSections() {

	if($(window).width() > 979) {
		$('.fullwidth-section').each(function(){

			var $justOutOfSight = ((parseInt($('body').width()) - parseInt($('.container').css('width'))) / 2);
			var $marginleft = (-1)*$justOutOfSight;

			$(this).css({
				'margin-left': $marginleft - 15,
				'padding-left': $justOutOfSight,
				'padding-right': $justOutOfSight
			});	


			$(this).width($(window).width() - $justOutOfSight * 2);

		});	

		$('.homepage .wpb_revslider_element.fullwidth-rev-slider').each(function(){
				
				var $justOutOfSight = ((parseInt($('body').width()) - parseInt($('.container').css('width'))) / 2);
				var $marginleft = (-1)*$justOutOfSight;

				$(this).css({
					'margin-left': $marginleft - 15
				});	

				$(this).width($(window).width());
		});
	
	} else {
		$('.fullwidth-section, .fullwidth-slider').width("auto");

		$('.fullwidth-section, .fullwidth-slider').css({
				'margin-left': -15,
				'padding-left': 10,
				'padding-right': 10
			});	
	}
}

/**
*	Other scripts
*/


/**
* Social share for products
*/
if( $('a.facebook-share').length > 0 || $('a.twitter-share').length > 0 || $('a.pinterest-share').length > 0) {
	
		// Facebook
		
		$.getJSON("http://graph.facebook.com/?id="+ window.location +'&callback=?', function(data) {
			if((data.shares != 0) && (data.shares != undefined) && (data.shares != null)) { 
				$('.facebook-share span.count').html( data.shares );	
			}
			else {
				$('.facebook-share span.count').html( 0 );	
			}
			
		});
	 
		function facebookShare(){
			window.open( 'https://www.facebook.com/sharer/sharer.php?u='+window.location, "facebookWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" ) 
			return false;
		}
		
		$('.facebook-share').click(facebookShare);
		
		// Twitter
		
		$.getJSON('http://urls.api.twitter.com/1/urls/count.json?url='+window.location+'&callback=?', function(data) {
			if((data.count != 0) && (data.count != undefined) && (data.count != null)) { 
				$('.twitter-share span.count').html( data.count );
			}
			else {
				$('.twitter-share span.count').html( 0 );
			}

		});
		
		function twitterShare(){
			if($(".section-title h1").length > 0) {
				var $page_title = encodeURIComponent($(".portfolio-item-title h1").text());
			} else {
				var $page_title = encodeURIComponent($(document).find("title").text());
			}
			window.open( 'http://twitter.com/intent/tweet?text='+$page_title +' '+window.location, "twitterWindow", "height=370,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" ) 
			return false;
		}
		
		$('.twitter-share').click(twitterShare);

		// Pinterest
		
		$.getJSON('http://api.pinterest.com/v1/urls/count.json?url='+window.location+'&callback=?', function(data) {
			if((data.count != 0) && (data.count != undefined) && (data.count != null)) { 
				$('.pinterest-share span.count').html( data.count );
			}
			else {
				$('.pinterest-share span.count').html( 0 );
			}
	
		});
		
		function pinterestShare(){
			var $sharingImg = $('.porftolio-slider li img').first().attr('src'); 
			
			if($(".section-title h1").length > 0) {
				var $page_title = encodeURIComponent($(".portfolio-item-title h1").text());
			} else {
				var $page_title = encodeURIComponent($(document).find("title").text());
			}
			
			window.open( 'http://pinterest.com/pin/create/button/?url='+window.location+'&media='+$sharingImg+'&description='+$page_title, "pinterestWindow", "height=620,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" ) 
			return false;
		}

		$('.pinterest-share').click(pinterestShare);
		
	}
	
});
})(jQuery);