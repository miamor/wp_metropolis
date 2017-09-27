<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php //wp_head(); ?>

<meta name="author" content="Vinhomes Imperia" />
<meta name="description" content="Website chính thức của dự án Vinhomes Imperia - Nơi hội tụ tinh hoa" />
<meta property="fb:app_id" content="656462357874966" />
<meta property="fb:pages" content="1815284045353532" />
<meta property="og:type" content='website' />
<meta property="og:title" content="Vinhomes Imperia - Website Chính Thức" />
<meta property="og:url" content="<?php echo MAIN_URL ?>" />
<meta property="og:image" content="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/screenshot.jpg?v=27092017" />
<meta property="og:description" content="Website chính thức của dự án Vinhomes Imperia - Nơi hội tụ tinh hoa" />

<title>Vinhomes Imperia - Website Chính Thức</title>

<link type="image/x-icon" rel="shortcut icon" href="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/favicon.png?v=0.3">

<!-- script facebook
<div id="fb-root"></div>
<script>(function (d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id))
		return;
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=118141818656364";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<link rel='dns-prefetch' href='//s.w.org' />
<script type="text/javascript">
	window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"<?php echo str_replace('/', '\/', MAIN_URL) ?>\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.2"}};
	!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
display: inline !important;
border: none !important;
box-shadow: none !important;
height: 1em !important;
width: 1em !important;
margin: 0 .07em !important;
vertical-align: -0.1em !important;
background: none !important;
padding: 0 !important;
}
</style>
-->
<link rel='stylesheet' id='style-css'  href='<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/style.css?v=3&#038;ver=4.7.2' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/bower_components/modernizr/modernizr.js?ver=0.1'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/bower_components/bootstrap/dist/js/bootstrap.min.js?ver=0.1'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/bower_components/Swiper/dist/js/swiper.min.js?ver=0.1'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/scripts/addons.js?ver=0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wp_vars = {"ajaxurl":"<?php echo str_replace('/', '\/', MAIN_URL) ?>\/wp-admin\/admin-ajax.php","homeurl":"<?php echo str_replace('/', '\/', MAIN_URL) ?>\/"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/scripts/main.js?ver=0.1'></script>
<link rel='https://api.w.org/' href='<?php echo MAIN_URL ?>/wp-json/' />
	<meta property="fb:pages" content="1815284045353532" />
	</head>
<body class="home blog">

	<script src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/scripts/loader.js"></script>

<div id="loader-wrapper" class="progress-wrapper">
	<div>
		<div class="logo-loader"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/site-logo-imperia-color.png" alt=""></div>
		<div class="timer">0%</div>
	</div>
</div>

<script>
jQuery(document).ready(function ($) {
	// site tabs
	function siteTabs(el) {
		var site_tabs_ob = $(el);

		site_tabs_ob.find('.tabs-head li .item').removeClass('active');
		site_tabs_ob.find('.tabs-content .content-item').hide();

		site_tabs_ob.find('.tabs-head li:first-child .item').addClass('active');
		site_tabs_ob.find('.tabs-content .content-item').each(function (index, value) {
			if (index == 0) {
				$(this).fadeIn();
				;
			}
		});

		site_tabs_ob.find('.tabs-head li .item').click(function () {
			var idTarget = $(this).attr('href');

			var tabWrap = $(this).parents('.site-tabs');

			tabWrap.find('.tabs-head .item').removeClass('active');

			$(idTarget).siblings('.content-item').hide();

			$(this).addClass('active');
			$(idTarget).fadeIn();

			return false;
		});
	}

	siteTabs('#home_news_site_tabs');
	siteTabs('#home_libary_site_tabs');
	siteTabs('#site_tabs_intro');

	$('#site_tabs_intro.site-tabs').addClass("opened");
});

/* Preloader */
jQuery.html5Loader({
	filesToLoad: '<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/load.php',
	onComplete: function () {
		setTimeout(function () {
			jQuery(document).ready(function ($) {
				// Phan nay can toi uu lai
				$('.home-intro').find('.tabs-content .content-item').first().fadeIn();

				var w_width = $(window).width();

				if (w_width > 1024) {

					// change height line in sidebar left; /// STATUS 1
					$('header.body-header').attr('data-section', 1);
					var divListFrameTitle = $('.list-frame-title');
					var divListFrameTitle_height = divListFrameTitle.outerHeight();
					var positionTop = $('.list-frame-title .frame-1').offset().top;
					$('.list-frame-title > div > .line').css({'bottom': divListFrameTitle_height - positionTop + 'px'})

					$('#fullPage').fullpage({
						anchors: ['noi-hoi-tu-tinh-hoa', 'tong-quan', 'sau-ly-do-phai-so-huu', 'mat-bang-va-tien-ich', 'phan-khu', 'tien-ich-noi-bat', 'dac-quyen', 'thu-vien-imperia', 'tin-tuc-imperia', 'dang-ky', 'lien-he'],
						navigation: true,
						easing: 'swing',
						easingcss3: 'ease-in-out',
						onLeave: function (index, nextIndex, direction) {
							switch (nextIndex ) {
								case 10:
									$('header.body-header').attr('style', '');
									break;
								case 11:
									$('header.body-header').attr('style', 'transform: translateY(-' + $('#footer-text').outerHeight() + 'px)');
									break;
							}

							$('body.home .network-social-fixed').attr('data-section', nextIndex);
							$('header.body-header').attr('data-section', nextIndex);

							// change height line in sidebar left; /// STATUS 2

							if (nextIndex == 10) {
								var positionTop = setTimeout(function () {
									var positionTop = $('.list-frame-title .frame-' + nextIndex).offset().top;
								}, 300);
							}

							if (nextIndex < 11) {
								var positionTop = $('.list-frame-title .frame-' + nextIndex).offset().top;

								$('.list-frame-title > div > .line').css({'bottom': divListFrameTitle_height - positionTop + 'px'})

								if (nextIndex == 10 && direction == 'up') {
									var run = setTimeout(function () {
										positionTop = $('.list-frame-title .frame-' + nextIndex).offset().top;

										$('.list-frame-title > div > .line').css({'bottom': divListFrameTitle_height - positionTop + 'px'})
									}, 700);
								}
							} else {
								$('.list-frame-title > div > .line').css({'bottom': '0px'});
							}
						}
					});

					$("#go-to-frame-contact").click(function () {
						$.fn.fullpage.moveTo(10);
						return false;
					});

					$("#scroll-down").click(function () {
						$.fn.fullpage.moveSectionDown();
					});
				}

				// action main menu
				$('.site-menu li a').click(function () {

					var href = $(this).attr('href');

					switch (href) {
						case "#lien-he":

							$.fn.fullpage.moveTo(11);
							$('.menu-hamburger').click();
							return false;

						case "#tien-ich":

							$.fn.fullpage.moveTo(6);
							$('.menu-hamburger').click();
							return false;

						case "#ly-do-phai-so-huu":

							$.fn.fullpage.moveTo(3);
							$('.menu-hamburger').click();
							return false;
					}
				});

				// Chay den frame can thiet
				var windowHashTags = location.hash;

				switch (windowHashTags) {
					case "#lien-he":

						$.fn.fullpage.moveTo(11);
						return false;

					case "#tien-ich":

						$.fn.fullpage.moveTo(6);
						return false;

					case "#ly-do-phai-so-huu":

						$.fn.fullpage.moveTo(3);
						return false;
				}
			});

			jQuery('body').addClass('loaded');
			jQuery('#loader-wrapper .logo-loader').css('opacity', 0);
			jQuery('#loader-wrapper').addClass('compeleted');
		}, 300);
	},
	onUpdate: function (percentage) {
		jQuery('#loader-wrapper .progress-wrapper').height(percentage + '%');
		jQuery('#loader-wrapper .timer').text(percentage + '%');
		jQuery('#loader-wrapper .logo-loader').css('opacity', ((100 - percentage) / 100) + '%');
	}
});
</script>

<script>
jQuery(document).ready(function ($) {
	var w_width = $(window).width();
	var w_height = $(window).height();

	$('body').find('.banner-grid').css({'height': w_height});
});
</script>

<header class="body-header" data-section="">
<!-- action click in main.js -->
<a href="#" data-id="#site_menu" class="site_toggle addClass_active menu-hamburger">
<span></span>
<span></span>
<span></span>
</a>

<div class="list-frame-title hidden-devide-768">
<div>
	<div class="line"></div>
	<div class="frame-1">
		<span></span>
		<span class="text"></span>
	</div>
	<div class="frame-2">
		<span></span>
		<span class="text">Tổng quan dự án</span>
	</div>
	<div class="frame-3">
		<span></span>
		<span class="text">6 LÝ DO PHẢI SỞ HỮU VINHOMES IMPERIA</span>
	</div>
	<div class="frame-4">
		<span></span>
		<span class="text">MẶT BẰNG</span>
	</div>
	<div class="frame-5">
		<span></span>
		<span class="text">Phân khu</span>
	</div>
	<div class="frame-6">
		<span></span>
		<span class="text">Tiện ích</span>
	</div>
	<div class="frame-7">
		<span></span>
		<span class="text">NƠI CUỘC SỐNG THƯỢNG LƯU</span>
	</div>
	<div class="frame-8">
		<span></span>
		<span class="text">THƯ VIỆN</span>
	</div>
	<div class="frame-9">
		<span></span>
		<span class="text">Tin tức</span>
	</div>
	<div class="frame-10">
		<span></span>
		<span class="text">Đăng ký</span>
	</div>
	<div class="frame-11">
		<span></span>
		<span class="text">Liên hệ</span>
	</div>
</div>
</div>



<a class="item network-social-fixed-mobile-item show-devide-768 goal-call-hotline" href="tel:1800 1179"><i class="fa fa-phone" aria-hidden="true"></i></a>
	<a class="item network-social-fixed-mobile-item show-devide-768" href="#site-form-register"><i class="fa fa-envelope" aria-hidden="true"></i></a>
<a class="item network-social-fixed-mobile-item show-devide-768 goal-facebook-link" href="https://www.facebook.com/vinhomesimperia"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</header>



<div id="site_menu" class="site-menu">
    <div>
        <a class="logo" href="<?php echo MAIN_URL ?>/"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/site-logo-imperia-white.png" alt=""></a>
        <ul>
            <li id="menu-item-1025" class="menu-item menu-item-type-taxonomy menu-item-object-subdivision_category menu-item-1025"><a href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/paris/"><span class="text">The Paris</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-1059" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1059"><a href="<?php echo MAIN_URL ?>/the-venice/"><span class="text">The Venice</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-1148" class="menu-item menu-item-type-taxonomy menu-item-object-subdivision_category menu-item-1148"><a href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/manhattan/"><span class="text">The Manhattan</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-1200" class="menu-item menu-item-type-taxonomy menu-item-object-subdivision_category menu-item-1200"><a href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/boutique-house/"><span class="text">Boutique House</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-159" class="menu-item menu-item-type-post_type menu-item-object-overview menu-item-159"><a href="<?php echo MAIN_URL ?>/tong-quan-du-an/gioi-thieu-du-an/"><span class="text">Tổng quan</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a href="#ly-do-phai-so-huu"><span class="text">6 lý do phải sở hữu Vinhomes Imperia</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-104" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104"><a href="#tien-ich"><span class="text">Tiện ích</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-1090" class="menu-item menu-item-type-taxonomy menu-item-object-news_category menu-item-1090"><a href="<?php echo MAIN_URL ?>/danh-muc-tin-tuc/tin-bao-chi/"><span class="text">Tin tức</span><span class="icon"><img src="" alt=""></span></a></li>
<li id="menu-item-461" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461"><a href="<?php echo MAIN_URL ?>/dai-ly-phan-phoi/"><span class="text">Đại lý phân phối</span><span class="icon"><img src="" alt=""></span></a></li>
        </ul>
    </div>
</div>

<div class="network-social-fixed hidden-devide-768">

    <a class="item goal-call-hotline" href="tel:1800 1179"><i class="fa fa-phone" aria-hidden="true"></i></a>

            <a id="go-to-frame-contact" class="item hidden-devide-768 goal-dang-ky-button" href="#site-form-register"><i class="fa fa-envelope" aria-hidden="true"></i></a>

    <a class="item goal-facebook-link" href="https://www.facebook.com/vinhomesimperia"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</div>



	<link rel="stylesheet" href="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/css/fancybox.css">
	<script src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/scripts/fancybox.js"></script>
	<script src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/scripts/fullPage.js"></script>


	<div class="home-wrap">
	<div id="fullPage">
