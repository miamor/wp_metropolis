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

<meta name="author" content="" />
<meta name="description" content="Website chính thức Vinhomes Metropolis - Vị thế uy phong, cộng đồng đẳng cấp" />
<meta name="keywords" content="vinhomes, vinhomes metropolis, vinhomes liễu giai, bất động sản vingroup, căn hộ cao cấp, chung cư cao cấp, căn hộ hà nội, chung cư hà nội, bất động sản hà nội, căn hộ chung cư, nhà đất hà nội" />
<meta property="fb:app_id" content="619113171597988" />
<meta property="og:type" content='website' />
<meta property="og:title" content="Vinhomes Metropolis" />
<meta property="og:url" content="<?php echo MAIN_URL ?>" />
<meta property="og:image" content="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/screenshot.jpg" />
<meta property="og:description" content="Website chính thức Vinhomes Metropolis - Vị thế uy phong, cộng đồng đẳng cấp" />

<title>Vinhomes Metropolis</title>
<link type="image/x-icon" rel="shortcut icon" href="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/favicon.png">

<meta name='robots' content='noindex,follow' />
	<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"<?php echo str_replace('/', '\/', MAIN_URL) ?>\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.11"}};
		!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;return g&&g.fillText?(g.textBaseline="top",g.font="600 32px Arial","flag"===a?(g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3):"diversity"===a?(g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e):("simple"===a?g.fillText(h(55357,56835),0,0):g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
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
<link rel='stylesheet' id='wordpress-css'  href='<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/css/wordpress.css?ver=4.4.11' type='text/css' media='all' />
<link rel='stylesheet' id='addons-css'  href='<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/css/addons.css?ver=4.4.11' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='<?php echo MAIN_URL ?>/wp-content/themes/metropolis/style.css?ver=4.4.11' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/scripts/addons.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wp_vars = {"ajaxurl":"<?php echo str_replace('/', '\/', MAIN_URL) ?>\/wp-admin\/admin-ajax.php","homeurl":"<?php echo str_replace('/', '\/', MAIN_URL) ?>"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/scripts/main.js?ver=0.4'></script>
<link rel='https://api.w.org/' href='<?php echo MAIN_URL ?>/wp-json/' />


</head>

<body <?php body_class(); ?>>


	<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>


			<div id="loader-wrapper">
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>

				<div class="dtbc logo-loader">
					<img src="<?php header_image(); ?>" alt="">
				</div>

				<div id="loader">
					<div class="progress-wrapper">
						<div class="progress-line"></div>
						<p class="number"><span class="timer">0%</span></p>
					</div>
				</div>
			</div>

			<script>

			/* Preloader */
			jQuery.html5Loader({
				filesToLoad: '<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/load.php',
				onComplete: function () {
					setTimeout(function() {
						jQuery('body').addClass('loaded');
						jQuery('#loader .logo-loader').css('opacity', 0);
					}, 300);
				},
				onUpdate: function(percentage) {
					jQuery('#loader .progress-wrapper').height( percentage + '%' );
					jQuery('#loader .timer').text( percentage + '%' );
					jQuery('#loader .logo-loader').css( 'opacity', ( (100 - percentage)/100 ) + '%' );
				}
			});
			</script>


			<div id="nav-bg"></div>

			<div id="header" class="posf">
				<div class="nav-inner">
					<h1 style="height: 0; text-indent: -9999px;"><?php echo get_bloginfo( 'name' ); ?></h1>

					<div class="posa logo-line">
						<img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/logo-line.png" alt="">
					</div>

					<a href="<?php echo MAIN_URL ?>/"><img src="<?php header_image(); ?>" alt=""></a>

					<?php 	$page_id = 140;
							$page_data = get_page( $page_id );
							$content = apply_filters('the_content', $page_data->post_content);
							echo $content;  ?>
				</div>
			</div>

			<div id="hambuger" class="nav-collapse">
				<span></span>
				<span></span>
				<span></span>
			</div>
<!--
			<div id="order-form" class="posf">
				<div class="nav-inner">
					<form action="" id="order">
						<h3 class="ttu">Liên hệ đặt mua</h3>
						<p class="message">Vui lòng điền hết các thông tin dưới đây!</p>
						<p><input type="text" name="b_name" id="b_name" value="" placeholder="Họ tên"></p>
						<p><input type="text" name="b_phone" id="b_phone" value="" placeholder="Số điện thoại"></p>
						<p><input type="text" name="b_email" id="b_email" value="" placeholder="Email"></p>
						<div><textarea name="b_message" id="b_message" rows="4" placeholder="Tin nhắn"></textarea></div>

						<input type="hidden" name="action" value="frontend__b_submit">
			            <input type="hidden" name="nonce" value="64e99847a3">
						<p><button type="submit" id="b_submit">Gửi</button></p>
					</form>
				</div>
			</div>

			<ul class="side-buttons">
				<li class="scroll-to">
					<a href="#virtual-360">
						<span class="img"><img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/virtual-ico.jpg" alt=""></span>
						<span class="text">Virtual 360</span>
					</a>
				</li>
				<li>
					<a id="order-cta" href="#order-form">
						<span class="img"><img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/contact-ico.jpg" alt=""></span>
						<span class="text">Đặt mua</span>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/vh.metropolis" target="_blank">
						<span class="img"><img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/facebook-ico.jpg" alt=""></span>
						<span class="text">Facebook</span>
					</a>
				</li>
			</ul>

			<script>
			jQuery(document).ready(function($){
				$('#order').submit(function(event) {
					event.preventDefault();
					var data = $(this).serialize();
					$.ajax({
						url: '<?php echo MAIN_URL ?>/wp-admin/admin-ajax.php',
						type: 'POST',
						dataType: 'html',
						data: data,
					})
					.done(function( response ) {
						$('#order .message').html( response ).css('color', 'red');
						$('#order').get(0).reset();

						// ga('create', 'UA-64285630-23');
						// ga('set', 'nonInteraction', true);
						// ga('send', 'event', 'Form', 'Submit', 'order-form');
					});
				});
			});
			</script>
		-->

			<div class="section section-home-banner posr">
				<div class="home slide">
				<!--	<img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/bn-1.jpg" alt=""> -->

					<div class="header-image" style="background-image:url(<?php echo get_background_image() ?>" alt="<?php bloginfo('name') ?>)">
					</div><!-- .header-image -->

				</div>

				<div class="logo-top">
					<?php echo metropolis_custom_logo_url(); ?>
				</div>

				<div class="banner-info">
					<div class="posa logo-line">
						<img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/logo-line.png" alt="">
					</div>

					<div class="posa layer layer-1"></div>
					<div class="posa layer layer-2"></div>

					<div class="logo">
						<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</div>


				<?php
					$page_data = get_page(192);
					$content = htmlspecialchars_decode(trim(preg_replace('/\s+/', '', strip_tags(apply_filters('the_content', $page_data->post_content), '<br>'))));
					$cont = explode('<br/>', $content);
					foreach ($cont as $oC) {
						preg_match("/\[(.*?)\](.*)/", $oC, $match);
						if ($match[1] == 'phone')
							$phone = explode('&&', preg_replace('/\s+/', '', $match[2]));
						else
							$contacts[$match[1]] = explode('&&', preg_replace('/\s+/', '', $match[2]));
					}
				?>
					<div class="info clearfix">
						<div class="section-title scroll-normal white fl">
							<div class="dtb">
								<h2 class="dtbc">
									<?php echo get_page(196)->post_content; ?>
								</h2>
							</div>
						</div>

						<div class="clear-mb"></div>
							<div class="social-wrap">
						<?php foreach ($contacts as $oCt => $oC) {
								foreach ($oC as $oc) {
									echo '<a class="'.$oCt.'" href="'.$oc.'"><img src="'.MAIN_URL.'/wp-content/themes/metropolis/assets/images/'.$oCt.'-ico.png" alt="" /></a>';
								}
							} ?>
							</div>
						<div class="hotline-wrap tac">
							<div class="txt-title justify"> H O T L I N E</div>
							<?php foreach ($phone as $op) {
									echo '<a href="tel:'.$op.'" class="hotline justify">'.$op.'</a>';
								} ?>
							<a href="<?php echo MAIN_URL ?>" target="_blank" rel="nofollow"><?php echo str_replace(array('http://', 'https://'), array('', ''), MAIN_URL) ?></a>
						</div>
					</div>
				</div>
			</div>

		<div id="ban-do-tien-ich" class="popup close-wrap">
		    <div class="close-bg"></div>
		    <div class="popup-inner">
		        <div class="fluid">
					<div class="grid6 map">
						<h3>Bản đồ tiện ích<br>Vinhomes Metropolis</h3>
						<img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/ban-do-tien-ich.jpg" alt="">
					</div>
					<div class="grid6 desc">
						<h3>Chú thích</h3>
						<ul class="lsn clearfix">
							<li><span>1</span> Bể bơi tiêu chuẩn</li>
							<li><span>2</span> Bể thư giãn</li>
							<li><span>3</span> Bể trẻ em</li>
							<li><span>4</span> Cầu trượt</li>
							<li><span>5</span> Vòi phun nước</li>
							<li><span>6</span> Sân chơi với cảnh quan</li>
							<li><span>7</span> Sảnh Lounge cafe có mái che</li>
							<li><span>8</span> Sảnh Lounge cafe ngoài trời</li>
							<li><span>9</span> Đài phun nước tương tác</li>
							<li><span>10</span> Tiểu cảnh 3 khu vườn</li>
							<li><span>11</span> Cổng vòm hoa</li>
							<li><span>12</span> Ghế ngồi có vòm che</li>
							<li><span>13</span> Đường dạo massage chân</li>
							<li><span>14</span> Khu tập thể thao ngoài trời</li>
							<li><span>15</span> Điêu khắc ở vườn nổi</li>
							<li><span>16</span> Thảm thực vật thủy sinh</li>
							<li><span>17</span> Khu sảnh Lounge nổi</li>
							<li><span>18</span> Đường dạo có mái che</li>
							<li><span>19</span> Thảm cỏ đa năng</li>
							<li><span>20</span> Vườn cây xanh</li>
							<li><span>21</span> Tường cảnh quan</li>
							<li><span>22</span> Điêu khắc ở thảm cỏ</li>
							<li><span>23</span> Thác nước</li>
							<li><span>24</span> Vườn nổi</li>
							<li><span>25</span> Góc chụp ảnh</li>
							<li><span>26</span> Chòi ngắm cảnh</li>
							<li><span>27</span> Sân chơi trẻ em</li>
							<li><span>28</span> Bồn cây</li>
							<li><span>29</span> Đường dạo nước</li>
							<li><span>30</span> BBQ</li>
						</ul>
					</div>
				</div>
		        <div class="close"></div>
		    </div>
		</div>


		<div id="main">
