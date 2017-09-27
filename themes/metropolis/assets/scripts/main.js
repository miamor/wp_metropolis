/**
 * JS/jQuery functions
 */
jQuery(document).ready(function($) {
	window.sr = ScrollReveal();
	sr.reveal('.scroll-normal', {
		duration: 1500,
		delay: 300,
		distance: '100px',
		scale: 0.5,
		reset: true,
		useDelay: 'onload',
		mobile: false
	});
	sr.reveal('.scroll-duration', {
		duration: 1600,
		rotate: 20,
		mobile: false
	}, 200);

	// Sliders
	function swiper_slide_init( sliders ){
		sliders.each(function(index, element){
			var slide_id = $(this).attr('id');
			var options = $(this).data('options');

			window[slide_id] = new Swiper( this, options );
		});
	}
	var sliders = $('body').find('.swiper-container');
	if( sliders.length > 0 ){
		swiper_slide_init( sliders );
	}

	$('#nav-bg').click(function(event) {
		var h1 = $('#header');
		var h1in = $('#header .nav-inner');
		var h2 = $('#order-form');
		var h2in = $('#order-form .nav-inner');

		// Close #header if opened
		if( h1.hasClass('opened') ){
			h1.animate({left: '-280px'}, 500).removeClass('opened');
			h1in.animate({left: '-280px'}, 500);
			$(this).fadeOut();
			$('#hambuger').animate({left: 0}, 400).removeClass('opened');
		}

		// Close #order-form if opened
		if( h2.hasClass('opened') ){
			h2.animate({right: '-280px'}, 500).removeClass('opened');
			h2in.animate({right: '-280px'}, 500);
			$(this).fadeOut();
			$('#order-cta').parents('li').animate({right: 0}, 400).removeClass('opened');
		}

		return false;
	});

	$('#hambuger').click(function(event) {
		var h = $('#header');
		var hin = $('#header .nav-inner');
		var hbg = $('#nav-bg');

		var move = '280px';
		if( $(window).width() <= 780 ){
			move = '270px';
		}

		if( h.hasClass('opened') ){
			h.animate({left: '-280px'}, 500).removeClass('opened');
			hin.animate({left: '-280px'}, 500);
			hbg.fadeOut();
			$('#hambuger').animate({left: 0}, 400).removeClass('opened');
		}
		else{
			h.animate({left: 0}, 500).addClass('opened');
			hin.animate({left: 0}, 500);
			hbg.fadeIn();
			$('#hambuger').animate({left: move}, 400).addClass('opened');
		}
		return false;
	});

	$('#order-cta').click(function(event) {
		var h = $('#order-form');
		var hin = $('#order-form .nav-inner');
		var hbg = $('#nav-bg');
		var move = '278px';
		if( $(window).width() <= 780 ){
			move = '268px';
		}
		if( h.hasClass('opened') ){
			h.animate({right: '-280px'}, 500).removeClass('opened');
			hin.animate({right: '-280px'}, 500);
			hbg.fadeOut();
			$('#order-cta').parents('li').animate({right: '0'}, 400).removeClass('opened');
		}
		else{
			h.animate({right: 0}, 500).addClass('opened');
			hin.animate({right: 0}, 500);
			hbg.fadeIn();
			$('#order-cta').parents('li').animate({right: move}, 400).addClass('opened');
		}
		return false;
	});

	$('.close, .close-bg').click(function(){
		$(this).parents('.close-wrap').fadeOut().removeClass('opened');
	});

	// $('.ban-do-tien-ich').click(function(event){
	// 	event.preventDefault();
	// 	var dest = $('#ban-do-tien-ich');
	// 	var window_w = $(window).width();

	// 	if( !dest.hasClass('opened') ){
	// 		var top = $(this).parents('.section').offset().top;
	// 		dest.css('padding-top', top);
	// 		dest.fadeIn().addClass('opened');
	// 	}
	// 	else{
	// 		dest.attr('padding-top', 0);
	// 		dest.fadeOut().removeClass('opened');
	// 	}
	// });

	// Tabbed
	if( $('body').find('.tabbed').length ) {
		$('body').find('.tabbed').each(function(index, el) {
			var t = $(this);
			t.find('.tab-content:first').show();

			var slide_in = t.find('.tab-content:first').find( '.swiper-container' );
			swiper_slide_init( slide_in );

			t.find('.tab-title').each(function(index, el) {
				$(this).find('li:first').addClass('active');
			});
			t.find('.block-inner').each(function(index, el) {
				$(this).find('.tab-content:first').show();
			});
		});

		$('.tab-title a').click(function(event) {
			event.preventDefault();

			if( $(this).parent('li').hasClass('active') )
				return false;

			var tab = $(this).attr('href');
			$(this).parent('li').addClass('active').siblings('.active').removeClass('active');
			$(tab).show().siblings('.tab-content').hide();

			var slide_in = $(tab).find( '.swiper-container' );
			swiper_slide_init( slide_in );

			if( $(this).parent('li').hasClass('lv1') ){
				$(tab).find('.tab-title').each(function(index, el) {
					$(this).find('li:first').addClass('active');
				});

				$(tab).find('.tab-row').each(function(index, el) {
					$(this).find('.tab-content:first').show();
				});
			}
		});

		$('.tab-content.lv2 img').click(function(){
			var thumb = $(this).attr('src');
			var large = thumb.replace( '/thumb/', '/large/' );

			var top = $(this).parents('.section').offset().top + $(this).parents('.section').height() / 2;
			$('#surface-popup .popup-inner').css('margin-top', top);

			$('#surface-popup img').attr( 'src', large );
			$('#surface-popup').fadeIn().addClass('opened');
			return false;
		});
	}

	$('.scroll-to > a').click(function(event) {
		var dest = $(this).attr('href');

		if( $('body').hasClass('home') ){
			event.preventDefault();
			dest = dest.substring( dest.indexOf( '#' ) );
			var top = $(dest).offset().top;
			$('html, body').animate({'scrollTop': top}, 500);
		}
	});

	$('.fancybox').fancybox();
	$('.fancybox-video').fancybox({
		type: 'iframe'
	});

	$('#nav-bg').height( $(document).height() );

	$(window).resize(function() {
		$('#nav-bg').height( $(document).height() );
	});
});
