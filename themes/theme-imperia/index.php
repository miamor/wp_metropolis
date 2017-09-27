<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
?>

<section class="section section-1" data-frame="1">
	<section class="home-first-banner">
<div class="logo"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/site-logo-imperia-white.png" alt=""></div>
<a id="scroll-down" href="#" class="icon-down hidden-devide-768"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
<div id="home_banner_slide" class="slide-wrap">
<div class="swiper-container">
<div class="swiper-wrapper">




			<div class="swiper-slide">
				<div class="banner-item" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame1_1-min.jpg');">
					<div class="text">
						<h3 class="text-1">Nơi hội tụ</h3>
						<h3 class="text-2">Tinh hoa</h3>
					</div>
					<div class="img-mobile show-devide-768" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame1_1-min.jpg');"></div>
				</div>
			</div>



			<div class="swiper-slide">
				<div class="banner-item" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame1_2-min.jpg');">
					<div class="text">
						<h3 class="text-1"></h3>
						<h3 class="text-2"></h3>
					</div>
					<div class="img-mobile show-devide-768" style="background-image: url('');"></div>
				</div>
			</div>



			<div class="swiper-slide">
				<div class="banner-item" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame1_3-min.jpg');">
					<div class="text">
						<h3 class="text-1"></h3>
						<h3 class="text-2"></h3>
					</div>
					<div class="img-mobile show-devide-768" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/bn3_mobile-1.jpg');"></div>
				</div>
			</div>



</div>
</div>
<div class="control">
<a href="#" class="prev">
	<img   src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-banner-icon-left.png" />
</a>
<div class="pagination-mobile"></div>
<a href="#" class="next">
	<img  src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-banner-icon-right.png" />
</a>
</div>
<div class="pagination"></div>
</div>
<script>
jQuery(document).ready(function($){
var w_width = $(window).width();
var w_height = $(window).height();

if (w_width > 768) {
	$('.home-first-banner .banner-item').css({
		'height': $(window).height()
	});
}else {
	$('.home-first-banner .banner-item').css({
		'height': $(window).height() - 46
	});
}

var home_banner_slide = new Swiper('#home_banner_slide .swiper-container', {
	pagination: '#home_banner_slide .pagination',
	paginationType: "fraction",
	speed: 1200,
	spaceBetween: 0,
	paginationClickable: true,
	nextButton: '#home_banner_slide .next',
	prevButton: '#home_banner_slide .prev',
	keyboardControl: true,
	breakpoints: {
		1024: {
			pagination: '#home_banner_slide .pagination-mobile',
			paginationType: 'bullets',
		}
	}
});
});

</script>
</section>
</section>
<section class="section section-2" data-frame="1">
	<section class="home-intro">
<div class="intro-container">
<div class="intro-wrap">
<div class="intro-title">
	<div class="title-1">BIỂU TƯỢNG TỰ HÀO MỚI</div>
	<div class="title-2">của Thành phố Hải Phòng</div>
</div>
<div id="site_tabs_intro" class="site-tabs">
	<div class="tabs-head hidden-devide-768">
		<ul class="goal-category-about">
																<li><a class="item btn-bg-gradient active" href="#105">Tổng quan dự án</a></li><li><a class="item btn-bg-gradient normal" href="#108">Chủ đầu tư</a></li>                                            </ul>
	</div>

	<div class="tabs-content">



				<div class="tabs-head">
					<a class="intro-label show-devide-768 active" href="#105">
						<span class="text">Tổng quan dự án</span>
						<span class="icon"><i class="fa fa-angle-right"></i></span>
					</a>
				</div>
				<div id="105" class="content-item" >
					<div class="intro-content">
						<div class="dtb">
							<div class="dtbc">
								<div class="intro-text">
									<div class="the-content">
										<!--<p><strong>Tổng quan</strong></p>-->

										<p>Vinhomes Imperia là dự án khu phức hợp đẳng cấp 5* đầu tiên tại thành phố cảng Hải Phòng. Đây hứa hẹn sẽ là dự án “bom tấn” mang đến một diện mạo mới cho thành phố trực thuộc trung&hellip;</p>

										<!--<p><strong>Vị trí</strong></p>-->

										<p></p>
									</div>
									<div class="view-more goal-view-more-about">
										<a href="<?php echo MAIN_URL ?>/tong-quan-du-an/gioi-thieu-du-an/" class="site-btn-default btn-view-more white">
											<span class="text">Tìm hiểu thêm</span>
											<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-arrow-right.png" alt="Xem thêm tin tức"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="dtbc right">
								<a class="img fancybox-img" href="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-intro-img.jpg">
									<img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-intro-img.jpg" alt="KHU ĐÔ THỊ SINH THÁI VEN SÔNG">
									<div class="icon-open"><i class="fa fa-search"></i></div>
								</a>
							</div>
						</div>
					</div>
				</div>


				<div class="tabs-head">
					<a class="intro-label show-devide-768 " href="#108">
						<span class="text">Chủ đầu tư</span>
						<span class="icon"><i class="fa fa-angle-right"></i></span>
					</a>
				</div>
				<div id="108" class="content-item" >
					<div class="intro-content">
						<div class="dtb">
							<div class="dtbc">
								<div class="intro-text">
									<div class="the-content">
										<!--<p><strong>Tổng quan</strong></p>-->

										<p>Được đầu tư bởi Tập đoàn Vingroup, Vinhomes – thương hiệu bất động sản giá trị nhất Việt Nam – mang đến một chuẩn sống đỉnh cao của giới thượng lưu.  Đây là sự kết hợp hoàn chỉnh giữa bất&hellip;</p>

										<!--<p><strong>Vị trí</strong></p>-->

										<p></p>
									</div>
									<div class="view-more goal-view-more-about">
										<a href="<?php echo MAIN_URL ?>/tong-quan-du-an/chu-dau-tu/" class="site-btn-default btn-view-more white">
											<span class="text">Tìm hiểu thêm</span>
											<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-arrow-right.png" alt="Xem thêm tin tức"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="dtbc right">
								<a class="img fancybox-img" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame2_900x700-4-630x490.jpg">
									<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame2_900x700-4-630x490.jpg" alt="KHU ĐÔ THỊ SINH THÁI VEN SÔNG">
									<div class="icon-open"><i class="fa fa-search"></i></div>
								</a>
							</div>
						</div>
					</div>
				</div>

	</div>
</div>
</div>
</div>
<div class="intro-bg">
<div class="img hidden-devide-768" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-section-2-bg.jpg')"></div>
</div>
<script>
jQuery(document).ready(function($){
var w_width = $(window).width();

if (w_width <= 768) {
	$('.home-intro .site-tabs .tabs-head .intro-label').click(function(){
		var idTarget = $(this).attr('href');

		$(this).stop().toggleClass('active');
		$(idTarget).stop().slideToggle();

		return false;
	});
}
});
</script>
</section>
</section>
<section class="section section-3" data-frame="1">
	<section class="home-level">
<div class="intro-bg hidden-devide-768" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/ly-do-so-huu-background-min.jpg')"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-9">
	<div class="level-wrap">
		<div>
			<div class="level-title">
				<div class="text-1">6 lí do</div>
				<div class="text-2">phải sở hữu Vinhomes Imperia</div>
			</div>


				<div id="level_list" class="level-list tac hidden-devide-768">


						<a class="level-item goal-li-do" data-index="0" href="javascript:void(0);">
							<div class="img btn-effect-1">
								<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon1-2.png" alt="#">
								<span></span>
							</div>
							<div class="title">Niềm tự hào &#8211; biểu tượng mới của Hải Phòng</div>
						</a>

						<a class="level-item goal-li-do" data-index="1" href="javascript:void(0);">
							<div class="img btn-effect-1">
								<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon2-2.png" alt="#">
								<span></span>
							</div>
							<div class="title">KĐT phức hợp, sinh thái ven sông quy mô lớn nhất Hải Phòng</div>
						</a>

						<a class="level-item goal-li-do" data-index="2" href="javascript:void(0);">
							<div class="img btn-effect-1">
								<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon3-3.png" alt="#">
								<span></span>
							</div>
							<div class="title">&#8220;City within city&#8221; &#8211; Quẩn thể tiện ích hoàn hảo</div>
						</a>

						<a class="level-item goal-li-do" data-index="3" href="javascript:void(0);">
							<div class="img btn-effect-1">
								<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon7.png" alt="#">
								<span></span>
							</div>
							<div class="title">Đa dạng phong cách kiến trúc</div>
						</a>

						<a class="level-item goal-li-do" data-index="4" href="javascript:void(0);">
							<div class="img btn-effect-1">
								<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon5-2.png" alt="#">
								<span></span>
							</div>
							<div class="title">Vùng đất vượng khí, phong thuỷ</div>
						</a>

						<a class="level-item goal-li-do" data-index="5" href="javascript:void(0);">
							<div class="img btn-effect-1">
								<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon6-3.png" alt="#">
								<span></span>
							</div>
							<div class="title">Cộng đồng thượng lưu, văn minh, đẳng cấp</div>
						</a>

				</div>

				<div id="level_list_mobile" class="level-list mobile tac show-devide-768">
					<div class="swiper-container">
						<div class="swiper-wrapper">


								<div class="swiper-slide">
									<a class="level-item goal-li-do" data-index="0" href="javascript:void(0);">
										<div class="img"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon1-2.png" alt="#"></div>
										<div class="title">Niềm tự hào &#8211; biểu tượng mới của Hải Phòng</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="level-item goal-li-do" data-index="1" href="javascript:void(0);">
										<div class="img"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon2-2.png" alt="#"></div>
										<div class="title">KĐT phức hợp, sinh thái ven sông quy mô lớn nhất Hải Phòng</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="level-item goal-li-do" data-index="2" href="javascript:void(0);">
										<div class="img"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon3-3.png" alt="#"></div>
										<div class="title">&#8220;City within city&#8221; &#8211; Quẩn thể tiện ích hoàn hảo</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="level-item goal-li-do" data-index="3" href="javascript:void(0);">
										<div class="img"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon7.png" alt="#"></div>
										<div class="title">Đa dạng phong cách kiến trúc</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="level-item goal-li-do" data-index="4" href="javascript:void(0);">
										<div class="img"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon5-2.png" alt="#"></div>
										<div class="title">Vùng đất vượng khí, phong thuỷ</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="level-item goal-li-do" data-index="5" href="javascript:void(0);">
										<div class="img"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr3_icon6-3.png" alt="#"></div>
										<div class="title">Cộng đồng thượng lưu, văn minh, đẳng cấp</div>
									</a>
								</div>

						</div>
					</div>
					<div class="control">
						<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-left.png" /></a>
						<div class="pagination"></div>
						<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-right.png" /></a>
					</div>
				</div>

								</div>

	</div>
</div>
</div>
</div>
<div id="level_content" class="level-content level-slide">
<div>
<a href="#" class="btn-close"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-close.png" alt=""></a>
<div class="swiper-container">
	<div class="swiper-wrapper">



				<div class="swiper-slide">
					<div class="content-item">
						<div class="text">
							<div class="title">Niềm tự hào &#8211; biểu tượng mới của Hải Phòng</div>
							<div class="excerpt">Sở hữu tổ hợp thương mại và giải trí thời thượng, khách sạn 45 tầng như ngọn hải đăng sừng sững để mỗi người con Hải Phòng dù bất cứ nơi đâu cũng dõi theo và tìm về. Cùng với đó, quảng trường ánh sáng 3,18 ha sôi động với khu vực thảm cỏ rộng 6.000m2 được ôm trọn bởi các boutique house sang trọng, hội tụ của  những thương hiệu hàng đầu thế giới. Tất cả đã quy tụ về Vinhomes Imperia góp phần đưa nơi đây trở nên niềm tự hào, một biểu tượng mới, trung tâm mới của Hải Phòng, điểm đến thời thượng và sầm uất</div>
						</div>
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_1-min-1.jpg');">
							<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_1-min-1.jpg" alt="" class="show-devide-768">
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="content-item">
						<div class="text">
							<div class="title">KĐT phức hợp, sinh thái ven sông quy mô lớn nhất Hải Phòng</div>
							<div class="excerpt">Là KĐT có quy mô và tầm cỡ bậc nhất Hải Phòng, Vinhomes Imperia với tổng diện tích 78,5 ha, nằm tựa mình vào 2 dòng sông lớn và ôm trọn 1 sông đào cảnh quan mang lại nguồn vượng khí, thu tài, hút lộc, cho toàn bộ dự án. Những mảng xanh rộng lớn chạy dọc ven sông, góp phần mang tới cho cư dân không gian sống trong lành, sinh thái.</div>
						</div>
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_2-min.jpg');">
							<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_2-min.jpg" alt="" class="show-devide-768">
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="content-item">
						<div class="text">
							<div class="title">&#8220;City within city&#8221; &#8211; Quẩn thể tiện ích hoàn hảo</div>
							<div class="excerpt">Tiên phong áp dụng mô hình "city within city" nổi tiếng trên thế giới tại thành phố Hải Phòng, Vinhomes Imperia mang đến một cuộc sống vẹn toàn với hạ tầng tiện ích hoàn hảo cho cư dân của mình ngay trong nội khu đô thị: Hệ thống trường liên cấp Vinschool với tiêu chuẩn giáo dục quốc tế, Phòng khám đa khoa Vinmec Clinic, Clubhouse 5 sao, Đại siêu thị Vinmart, TTTM Vincom, khu phức hợp thể thao, bể bơi bốn mùa, khu vui chơi đẳng cấp,...</div>
						</div>
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_3-min-1.jpg');">
							<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_3-min-1.jpg" alt="" class="show-devide-768">
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="content-item">
						<div class="text">
							<div class="title">Đa dạng phong cách kiến trúc</div>
							<div class="excerpt">Được tư vấn, thiết kế và giám sát thi công bởi nhà thầu hàng đầu thế giới - Humphreys &amp; Partners (Mỹ), Vinhomes Imperia là nơi hội tụ 4 phong cách kiến trúc với các tiểu khu: The Paris (Pháp), The Venice (Ý), The Manhattan (Mỹ) và khu dinh thự The Monaco. Dự án mang đến phong cách sống khác biệt: sôi động, nhộn nhịp tại tiểu khu mở và riêng tư tại khu compound khép kín. Nơi đây sẽ là miền đất hứa giúp chủ nhân tận hưởng trọn vẹn không gian sống đẳng cấp và thể hiện vị thế của mình.</div>
						</div>
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_4-min-1.jpg');">
							<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_4-min-1.jpg" alt="" class="show-devide-768">
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="content-item">
						<div class="text">
							<div class="title">Vùng đất vượng khí, phong thuỷ</div>
							<div class="excerpt">Tọa lạc trên mảnh đất đắc địa “cận thị, cận giang, cận lộ” có thể ví như long mạch với 2 mặt tiếp giáp đường Hà Nội và đường Bạch Đằng, Vinhomes Imperia là khu đô thị duy nhất của Việt Nam tiếp giáp 2 con sông tự nhiên: sông Cấm, sông Thượng Lý cùng 1 con sông đào cảnh quan mang lại luồng sinh khí an lành, tài lộc và phồn vinh. Nằm tại vị trí trung tâm mới của Hải Phòng, Vinhomes Imperia hội tụ đầy đủ các yếu tố để trở thành mảnh đất kim cương đắt giá bậc nhất Hải Phòng trong tương lai rất gần.</div>
						</div>
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_5-min-1.jpg');">
							<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_5-min-1.jpg" alt="" class="show-devide-768">
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="content-item">
						<div class="text">
							<div class="title">Cộng đồng thượng lưu, văn minh, đẳng cấp</div>
							<div class="excerpt">Ngôi nhà là nấc thang hoàn chỉnh, là niềm tự hào về những thành quả đạt được, vị thế xã hội và sự kiêu hãnh của mỗi người con Hải Phòng. Chọn sống tại Vinhomes Imperia, một cuộc sống văn minh chuẩn Vinhomes đẳng cấp bậc nhất, một cộng đồng thượng lưu đẳng cấp đang chờ đón bạn.</div>
						</div>
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_6-min-1.jpg');">
							<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/frame3_1420x960_6-min-1.jpg" alt="" class="show-devide-768">
						</div>
					</div>
				</div>

	</div>
</div>
<div class="control hidden-devide-768">
	<div>
		<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-banner-icon-up.png" /></a>
		<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-banner-icon-down.png" /></a>
		<div class="pagination"></div>
	</div>
</div>
</div>
</div>
<script>
jQuery(document).ready(function($){
var level_content = new Swiper('#level_content .swiper-container', {
	pagination: '#level_content .pagination',
	speed: 1200,
	paginationClickable: true,
	nextButton: '#level_content .next',
	prevButton: '#level_content .prev',
});

var level_list_mobile = new Swiper('#level_list_mobile .swiper-container', {
	pagination: '#level_list_mobile .pagination',
	speed: 1200,
	initialSlide: 2,
	paginationClickable: true,
	nextButton: '#level_list_mobile .next',
	prevButton: '#level_list_mobile .prev',
});

$('#level_list_mobile .level-item, #level_list .level-item').click(function(){
	var order = $(this).data('index');
	$('#level_content').addClass('open');

	level_content.slideTo(order, 1500, function(){
		console.log('slide to ' + order);
	});
	return false;
});

$('#level_content .btn-close').click(function(){
	$('#level_content').removeClass('open');
	return false;
});
});
</script>
</section>
</section>
<section class="section section-4" data-frame="1">
	<section class="home-ground">
<span class="text-bg">Vinhomes Imperia</span>
<div class="ground-wrap">
<div class="row inner">
<span class="decor-line-1 hidden-devide-768"></span>
<span class="decor-line-2 hidden-devide-768"></span>
<div class="ground-title">Mặt bằng & Tiện ích</div>

<div class="wrap row">
	<div id="home_map" class="ground-image col-md-8">
		<div class="ground-image-container">
			<img class="image-bg" src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-ground.jpg" alt="#">
			<div id="tien_ich_map" class="tien-ich-wrap" >

			</div>
		</div>
		<script>
			/** HANDLES */
			var tienich_demo_data = [{
					"id": 1,
					"title": "TTTM VINCOM",
					"number": "36",
					"margin_top": "8.037825059101655%",
					"left": "11.22192671394799%",
					"category": "1"
				},
				{
					"id": 2,
					"title": "BÃI ĐỖ XE",
					"number": "13",
					"margin_top": "13.869188337273444%",
					"left": "4.6025413711583925%",
					"category": "1"
				},
				{
					"id": 3,
					"title": "QUẢNG TRƯỜNG ÁNH SÁNG",
					"number": "1",
					"margin_top": "11.89913317572892%",
					"left": "15.162037037037038%",
					"category": "1"
				},
				{
					"id": 4,
					"title": "ĐÀI PHUN NƯỚC BIỂU TƯỢNG THÀNH PHỐ",
					"number": "2",
					"margin_top": "13.947990543735225%",
					"left": "16.10766351457841%",
					"category": "1"
				},
				{
					"id": 5,
					"title": "ĐƯỜNG DẠO MUA SẮM DỌC BOUTIQUE HOUSE",
					"number": "3",
					"margin_top": "11.347517730496454%",
					"left": "18.78693853427896%",
					"category": "1"
				},
				{
					"id": 6,
					"title": "LỐI ĐI VÀO QUẢNG TRƯỜNG",
					"number": "35",
					"margin_top": "11.189913317572891%",
					"left": "21.781422379826633%",
					"category": "1"
				},
				{
					"id": 7,
					"title": "LỐI ĐI VÀO QUẢNG TRƯỜNG",
					"number": "35",
					"margin_top": "17.02127659574468%",
					"left": "12.640366430260046%",
					"category": "1"
				},
				{
					"id": 8,
					"title": "SÂN VUI CHƠI THIẾU NIÊN",
					"number": "6",
					"margin_top": "17.257683215130022%",
					"left": "16.028861308116625%",
					"category": "1"
				},
				{
					"id": 9,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "14.736012608353033%",
					"left": "18.94454294720252%",
					"category": "1"
				},
				{
					"id": 11,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "14.420803782505912%",
					"left": "21.072202521670608%",
					"category": "1"
				},
				{
					"id": 12,
					"title": "KHU VUI CHƠI TRẺ EM",
					"number": "5",
					"margin_top": "14.342001576044131%",
					"left": "20.993400315208827%",
					"category": "1"
				},
				{
					"id": 13,
					"title": "SÂN BÓNG BÀN",
					"number": "8",
					"margin_top": "16.07565011820331%",
					"left": "22.96345547675335%",
					"category": "1"
				},
				{
					"id": 14,
					"title": "SÂN THỂ DỤC NGOÀI TRỜI",
					"number": "7",
					"margin_top": "20.33096926713948%",
					"left": "17.13209219858156%",
					"category": "1"
				},
				{
					"id": 15,
					"title": "LỐI ĐI VÀO QUẢNG TRƯỜNG",
					"number": "35",
					"margin_top": "21.82821118991332%",
					"left": "14.925630417651695%",
					"category": "1"
				},
				{
					"id": 16,
					"title": "LỐI ĐI VÀO QUẢNG TRƯỜNG",
					"number": "35",
					"margin_top": "15.36643026004728%",
					"left": "25.56392828999212%",
					"category": "1"
				},
				{
					"id": 17,
					"title": "ĐẠI LỘ DANH VỌNG, HÀNG CÂY ÁNH SÁNG",
					"number": "9",
					// "margin_top": "19.227738376674548%",
					"left": "20.835795902285266%",
					"category": "1"
				},
				{
					"id": 18,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "18.51851851851852%",
					"left": "24.77590622537431%",
					"category": "1"
				},
				{
					"id": 19,
					"title": "SÂN CHƠI NƯỚC KẾT HỢP TRÌNH DIỄN ÁNH SÁNG",
					"number": "10",
					"margin_top": "21.9070133963751%",
					"left": "21.38741134751773%",
					"category": "1",
					"custom_class": "left top"
				},
				{
					"id": 20,
					"title": "LỐI ĐI VÀO QUẢNG TRƯỜNG",
					"number": "35",
					"margin_top": "26.95035460992908%",
					"left": "17.21089440504334%",
					"category": "1"
				},
				{
					"id": 21,
					"title": "SÂN KHẤU NGOÀI TRỜI PHONG CÁCH CỔ ĐIỂN",
					"number": "11",
					"margin_top": "23.483057525610718%",
					"left": "23.04225768321513%",
					"category": "1"
				},
				{
					"id": 22,
					"title": "LỐI ĐI VÀO QUẢNG TRƯỜNG",
					"number": "35",
					"margin_top": "19.62174940898345%",
					"left": "29.03122537431048%",
					"category": "1"
				},
				{
					"id": 23,
					"title": "QUẢNG TRƯỜNG CỎ ĐA NĂNG KẾT HỢP TỔ CHỨC SỰ KIỆN (FESTIVAL ÂM NHẠC, HỘI CHỢ)",
					"number": "12",
					"margin_top": "26.004728132387704%",
					"left": "25.56392828999212%",
					"category": "1"
				},
				{
					"id": 24,
					"title": "BÃI ĐỖ XE",
					"number": "13",
					"margin_top": "27.10795902285264%",
					"left": "29.504038613081168%",
					"category": "1"
				},
				{
					"id": 25,
					"title": "KHU VỰC ĐÓN TRẢ KHÁCH NHANH",
					"number": "14",
					"margin_top": "30.41765169424744%",
					"left": "26.745961386918832%",
					"category": "1"
				},
				{
					"id": 26,
					"title": "BÃI ĐỖ XE",
					"number": "13",
					"margin_top": "37.5886524822695%",
					"left": "4.681343577620174%",
					"category": "1",
					"category_2": "2"
				},
				{
					"id": 27,
					"title": "ĐÀI PHUN NƯỚC ÁNH SÁNG",
					"number": "15",
					"margin_top": "30.969267139479907%",
					"left": "29.267631993695826%",
					"category": "1"
				},
				{
					"id": 28,
					"title": "SÂN GOLF MINI",
					"number": "37",
					"margin_top": "38.14026792750197%",
					"left": "17.28969661150512%",
					"category": "1"
				},
				{
					"id": 29,
					"title": "TRƯỜNG MẪU GIÁO",
					"number": "38",
					"margin_top": "22.22222222222222%",
					"left": "47.86495271867612%",
					"category": "1"
				},
				{
					"id": 30,
					"title": "QUẢNG TRƯỜNG VEN KÊNH",
					"number": "16",
					"margin_top": "37.43104806934594%",
					"left": "31.47409377462569%",
					"category": "1"
				},
				{
					"id": 31,
					"title": "KHU VUI CHƠI TRẺ EM",
					"number": "5",
					"margin_top": "40.58313632781718%",
					"left": "32.41972025216706%",
					"category": "2"
				},
				{
					"id": 32,
					"title": "SÂN GHẾ NGHỈ CHÂN, BÀN BÓNG BÀN, THỂ DỤC NGOÀI TRỜI, YOGA",
					"number": "17",
					"margin_top": "41.449960598896766%",
					"left": "34.15336879432624%",
					"category": "2"
				},
				{
					"id": 33,
					"title": "SÂN TỔ CHỨC SỰ KIỆN",
					"number": "22",
					"margin_top": "38.77068557919622%",
					"left": "38.32988573680063%",
					"category": "2"
				},
				{
					"id": 34,
					"title": "ĐỒI CỎ NHÂN TẠO",
					"number": "19",
					"margin_top": "41.13475177304964%",
					"left": "37.46306146572104%",
					"category": "2"
				},
				{
					"id": 35,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "44.44444444444444%",
					"left": "38.56629235618597%",
					"category": "2"
				},
				{
					"id": 36,
					"title": "QUẢNG TRƯỜNG VEN KÊNH (THÁC NƯỚC, TƯỢNG, HÀNG CỘT CỔ ĐIỂN, VƯỜN HOA",
					"number": "20",
					"margin_top": "43.89282899921198%",
					"left": "42.03358944050433%",
					"category": "2"
				},
				{
					"id": 37,
					"title": "SÂN TỔ CHỨC SỰ KIỆN",
					"number": "22",
					"margin_top": "43.73522458628842%",
					"left": "46.682919621749406%",
					"category": "2"
				},
				{
					"id": 38,
					"title": "ĐƯỜNG DẠO HÀNG CỌ",
					"number": "23",
					"margin_top": "45.70527974783294%",
					"left": "48.731776989755716%",
					"category": "2"
				},
				{
					"id": 39,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "47.123719464145%",
					"left": "50.07141449960599%",
					"category": "2"
				},
				{
					"id": 40,
					"title": "CẦU ĐI BỘ CỔ ĐIỂN",
					"number": "24",
					"margin_top": "48.54215918045705%",
					"left": "51.332249802994475%",
					"category": "2"
				},
				{
					"id": 41,
					"title": "ĐỒI CỎ NHÂN TẠO",
					"number": "19",
					"margin_top": "46.49330181245075%",
					"left": "45.185677698975574%",
					"category": "2"
				},
				{
					"id": 42,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "46.650906225374314%",
					"left": "43.136820330969265%",
					"category": "2"
				},
				{
					"id": 43,
					"title": "ĐƯỜNG DẠO LỚN HƯỚNG VỀ KÊNH",
					"number": "21",
					"margin_top": "46.57210401891253%",
					"left": "40.69395193065406%",
					"category": "2"
				},
				{
					"id": 44,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "47.28132387706856%",
					"left": "38.56629235618597%",
					"category": "2"
				},
				{
					"id": 45,
					"title": "CLUBHOUSE",
					"number": "39",
					"margin_top": "50.43341213553979%",
					"left": "41.87598502758077%",
					"category": "2"
				},
				{
					"id": 46,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "50.35460992907801%",
					"left": "30.05565405831363%",
					"category": "2"
				},
				{
					"id": 47,
					"title": "ĐƯỜNG DẠO HÀNG CỌ",
					"number": "23",
					"margin_top": "55.240346729708435%",
					"left": "33.12894011032309%",
					"category": "2"
				},
				{
					"id": 48,
					"title": "SÂN BÓNG RỔ",
					"number": "31",
					"margin_top": "55.240346729708435%",
					"left": "28.87362096138692%",
					"category": "2",

				},
				{
					"id": 49,
					"title": "VƯỜN HOA, ĐƯỜNG DẠO CÓ MÁI CHE",
					"number": "30",
					"margin_top": "52.876280535855%",
					"left": "28.08559889676911%",
					"category": "2"
				},
				{
					"id": 50,
					"title": "SÂN CẦU LÔNG",
					"number": "34",
					"margin_top": "55.00394011032309%",
					"left": "25.800334909377465%",
					"category": "2"
				},
				{
					"id": 51,
					"title": "KHU BBQ",
					"number": "26",
					"margin_top": "51.615445232466506%",
					"left": "26.667159180457052%",
					"category": "2"
				},
				{
					"id": 52,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "50.11820330969267%",
					"left": "24.933510638297875%",
					"category": "2"
				},
				{
					"id": 53,
					"title": "NHÀ PHỤ TRỢ BỂ BƠI",
					"number": "33",
					"margin_top": "50.11820330969267%",
					"left": "24.933510638297875%",
					"category": "2"
				},
				{
					"id": 54,
					"title": "BỂ BƠI NGOÀI TRỜI",
					"number": "32",
					"margin_top": "52.56107171000788%",
					"left": "22.648246650906227%",
					"category": "2"
				},
				{
					"id": 55,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "50.19700551615445%",
					"left": "20.36298266351458%",
					"category": "2"
				},
				{
					"id": 56,
					"title": "SÂN GHẾ NGHỈ CHÂN, BÀN BÓNG BÀN, THỂ DỤC NGOÀI TRỜI, YOGA",
					"number": "17",
					"margin_top": "51.14263199369582%",
					"left": "18.235323089046492%",
					"category": "2"
				},
				{
					"id": 57,
					"title": "KHU VUI CHƠI TRẺ EM",
					"number": "5",
					"margin_top": "54.68873128447596%",
					"left": "18.550531914893618%",
					"category": "2"
				},
				{
					"id": 58,
					"number": "06",
					"margin_top": "55.08274231678487%",
					"left": "14.768026004728133%",
					"category": "2"
				},
				{
					"id": 59,
					"title": "VƯỜN HOA, ĐƯỜNG DẠO CÓ MÁI CHE",
					"number": "30",
					"margin_top": "53.033884948778564%",
					"left": "15.083234830575257%",
					"category": "2"
				},
				{
					"id": 60,
					"title": "SÂN GHẾ NGHỈ CHÂN, BÀN BÓNG BÀN, THỂ DỤC NGOÀI TRỜI, YOGA",
					"number": "17",
					"margin_top": "51.457840819542945%",
					"left": "14.689223798266351%",
					"category": "2"
				},
				{
					"id": 61,
					"title": "ĐƯỜNG DẠO HÀNG CỌ",
					"number": "23",
					"margin_top": "50.82742316784869%",
					"left": "11.22192671394799%",
					"category": "2"
				},
				{
					"id": 62,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "65.16942474389283%",
					"left": "10.43390464933018%",
					"category": "2"
				},
				{
					"id": 63,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "65.01182033096927%",
					"left": "18.94454294720252%",
					"category": "2"
				},
				{
					"id": 64,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "65.09062253743106%",
					"left": "26.982368006304174%",
					"category": "2"
				},
				{
					"id": 65,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "65.09062253743106%",
					"left": "35.49300630417652%",
					"category": "2"
				},
				{
					"id": 66,
					"title": "GIÀN HOA, GHẾ NGHỈ",
					"number": "4",
					"margin_top": "65.01182033096927%",
					"left": "37.6206658786446%",
					"category": "2"
				},
				{
					"id": 67,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "66.58786446020488%",
					"left": "43.76723798266352%",
					"category": "2"
				},
				{
					"id": 68,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "68.71552403467297%",
					"left": "51.411052009456256%",
					"category": "2"
				},
				{
					"id": 69,
					"title": "VƯỜN HOA, ĐƯỜNG DẠO CÓ MÁI CHE",
					"number": "30",
					"margin_top": "30.260047281323878%",
					"left": "49.913810086682425%",
					"category": "3"
				},
				{
					"id": 70,
					"title": "SÂN VUI CHƠI THIẾU NIÊN",
					"number": "6",
					"margin_top": "31.678486997635936%",
					"left": "53.69631599684791%",
					"category": "3"
				},
				{
					"id": 71,
					"title": "KHU VUI CHƠI TRẺ EM",
					"number": "5",
					"margin_top": "33.25453112687155%",
					"left": "56.84840425531915%",
					"category": "3"
				},
				{
					"id": 72,
					"title": "SÂN BÓNG RỔ",
					"number": "31",
					"margin_top": "34.988179669030735%",
					"left": "59.76408589440504%",
					"category": "3"
				},
				{
					"id": 73,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "36.32781717888101%",
					"left": "62.20695429472025%",
					"category": "3"
				},
				{
					"id": 74,
					"title": "KHU PHỨC HỢP THỂ THAO",
					"number": "40",
					"margin_top": "41.765169424743895%",
					"left": "57.084810874704495%",
					"category": "3"
				},
				{
					"id": 75,
					"title": "QUẢNG TRƯỜNG ĐA CHỨC NĂNG",
					"number": "25",
					"margin_top": "47.67533490937746%",
					"left": "54.32673364854216%",
					"category": "3"
				},
				{
					"id": 76,
					"title": "KHU BBQ",
					"number": "26",
					"margin_top": "38.69188337273444%",
					"left": "66.9350866824271%",
					"category": "3"
				},
				{
					"id": 77,
					"title": "BỂ BƠI NGOÀI TRỜI",
					"number": "32",
					"margin_top": "40.81954294720252%",
					"left": "69.45675728920409%",
					"category": "3"
				},
				{
					"id": 78,
					"title": "NHÀ PHỤ TRỢ BỂ BƠI",
					"number": "33",
					"margin_top": "40.34672970843184%",
					"left": "71.19040583136328%",
					"category": "3"
				},
				{
					"id": 79,
					"title": "KHU BBQ",
					"number": "26",
					"margin_top": "52.56107171000788%",
					"left": "60.079294720252165%",
					"category": "3"
				},
				{
					"id": 80,
					"title": "NHÀ TẬP ĐÁNH GOLF",
					"number": "27",
					"margin_top": "53.270291568163906%",
					"left": "62.285756501182036%",
					"category": "3"
				},
				{
					"id": 81,
					"title": "BÃI ĐỖ XE",
					"number": "13",
					"margin_top": "52.08825847123719%",
					"left": "63.782998423955874%",
					"category": "3"
				},
				{
					"id": 82,
					"title": "ĐƯỜNG DẠO HÀNG CỌ",
					"number": "23",
					"margin_top": "53.90070921985816%",
					"left": "68.27472419227738%",
					"category": "3"
				},
				{
					"id": 83,
					"title": "SÂN GOLF MINI",
					"number": "28",
					"margin_top": "57.052797478329396%",
					"left": "67.32909771473601%",
					"category": "3"
				},
				{
					"id": 84,
					"title": "QUẢNG TRƯỜNG MINI",
					"number": "29",
					"margin_top": "56.02836879432624%",
					"left": "69.29915287628053%",
					"category": "3",
					"category_2": "4"
				},
				{
					"id": 85,
					"title": "BẾN THUYỀN",
					"number": "41",
					"margin_top": "39.08589440504334%",
					"left": "80.33146178092987%",
					"category": "3",
					"category_2": "4"
				},
				{
					"id": 86,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "58.471237194641446%",
					"left": "72.53004334121356%",
					"category": "4"
				},
				{
					"id": 87,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "45.54767533490938%",
					"left": "85.29600078802207%",
					"category": "4"
				},
				{
					"id": 88,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "55.240346729708435%",
					"left": "91.28496847911741%",
					"category": "4"
				},
				{
					"id": 89,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "62.96296296296296%",
					"left": "85.76881402679275%",
					"category": "4"
				},
				{
					"id": 90,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "69.81875492513791%",
					"left": "79.46463750985028%",
					"category": "4"
				},
				{
					"id": 91,
					"title": "VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ",
					"number": "18",
					"margin_top": "72.18282111899134%",
					"left": "70.48118597320725%",
					"category": "4"
				}
			];

			var tienich_on_map_items = [];
			var tienich_on_sidebar_items = [];
			var tienich_on_sidebar_array = [];
			var tienich_max_number = 0;

			jQuery(document).ready(function($){

				//Các HTML elements
				var tien_ich_map_container = $('#tien_ich_map');
				var tien_ich_sidebar_container = $('#tien_ich_sidebar_hide');

				// //Xoá HTML cũ
				// tien_ich_sidebar_container.html("");

				//Hiển thị tiện ích trên bản đồ
				for(var i = 0; i < tienich_demo_data.length; i++){

					var item = tienich_demo_data[i];

					//Khởi tạo 1 tiệc ích item
					tienich_on_map_items[i] = $('<div class="tien-ich-item tien-ich-category-'+item.category+' tien-ich-number-'+item.number+'"></div>');
					tienich_on_map_items[i].hide();
					tienich_on_map_items[i].css({
						"left": item.left,
						"margin-top": item.margin_top
					});

					//Thêm các thuộc tính để sau dùng
					tienich_on_map_items[i].attr('data-index', i);
					tienich_on_map_items[i].attr('data-number', item.number);
					tienich_on_map_items[i].attr('data-category', item.category);
					tienich_on_map_items[i].attr('data-title', item.title);

					//Khởi tạo HTML cho item
					tienich_on_map_items[i].html('<div class="icon">'+item.number+'<div class="text">'+item.title+'</div></div>');

					//Khi item được click thì add class active
					tienich_on_map_items[i].click(function(evt){

						var this_number = $(this).attr('data-number');

						tien_ich_map_container.find('.tien-ich-item').removeClass('tien-ich-active');
						tien_ich_map_container.find('.tien-ich-number-'+this_number).addClass('tien-ich-active');
					});

					//Xử lý nếu item có nhiều category
					if(typeof item.category_2 != 'undefined'){
						tienich_on_map_items[i].attr('data-category-2', item.category_2);
						tienich_on_map_items[i].addClass('tien-ich-category-'+item.category_2);
					}

					//Xử lý nếu item có custom class
					if(typeof item.custom_class != 'undefined'){
						tienich_on_map_items[i].addClass(item.custom_class);
					}

					//Hiển thị item ra
					tienich_on_map_items[i].appendTo(tien_ich_map_container);
					tienich_on_map_items[i].fadeIn(300);

					//Thêm vào mảng để sau này hiển thị ở sidebar
					tienich_on_sidebar_array[parseInt(item.number)] = i;

					if(parseInt(item.number) > tienich_max_number){
						tienich_max_number = item.number;
					}
				}

				//Hiển thị tiện ích trên sidebar
				for(var i = 1; i < tienich_max_number; i++){

					var item = tienich_demo_data[tienich_on_sidebar_array[i]];

					if(typeof item == 'undefined'){
						continue;
					}

					//Khởi tạo 1 tiệc ích item
					tienich_on_sidebar_items[i] = $('<div class="utilities-item utilities-category-'+item.category+'"></div>');
					tienich_on_sidebar_items[i].hide();

					//Thêm các thuộc tính để sau dùng
					tienich_on_sidebar_items[i].attr('data-index', i);
					tienich_on_sidebar_items[i].attr('data-number', item.number);
					tienich_on_sidebar_items[i].attr('data-category', item.category);
					tienich_on_sidebar_items[i].attr('data-title', item.title);

					//Khởi tạo HTML cho item
					tienich_on_sidebar_items[i].html('<div class="counter">'+item.number+'</div><div class="text">'+item.title+'</div>');

					//Khi item được click thì add class active
					tienich_on_sidebar_items[i].click(function(evt){

						var this_number = $(this).attr('data-number');

						tien_ich_map_container.find('.tien-ich-item').removeClass('tien-ich-active');
						tien_ich_map_container.find('.tien-ich-number-'+this_number).addClass('tien-ich-active');
					});

					//Xử lý nếu item có nhiều category
					if(typeof item.category_2 != 'undefined'){
						tienich_on_sidebar_items[i].attr('data-category-2', item.category_2);
						tienich_on_sidebar_items[i].addClass('utilities-category-'+item.category_2);
					}

					//Hiển thị item ra
					tienich_on_sidebar_items[i].appendTo(tien_ich_sidebar_container);
					tienich_on_sidebar_items[i].fadeIn(300);
				}

				//Sự kiện click và phân khu
				$('.tien-ich-category-item').click(function(evt){

					// return false;

					var this_el = $(this);
					var this_category = this_el.attr('data-category');
					var this_category_2 = this_el.attr('data-category-2');
					var this_color = this_el.attr('data-color');

					$('.tien-ich-category-item').removeClass('active');
					this_el.addClass('active');

					if (this_category > 0) {
						tien_ich_map_container.find('.tien-ich-item').removeClass('tien-ich-active');
						tien_ich_map_container.find('.tien-ich-category-'+this_category).addClass('tien-ich-active');

						tien_ich_sidebar_container.find('.utilities-item').hide();
						tien_ich_sidebar_container.find('.utilities-category-'+this_category).fadeIn(500);

						if(this_category_2 > 0){
							tien_ich_map_container.find('.tien-ich-category-'+this_category_2).addClass('tien-ich-active');
							tien_ich_sidebar_container.find('.utilities-category-'+this_category_2).fadeIn(500);
						}
					} else {
						tien_ich_map_container.find('.tien-ich-item').removeClass('tien-ich-active');
						tien_ich_sidebar_container.find('.utilities-item').fadeIn();
					}

				});

			});
		</script>
	</div>
	<div class="show-devide-768">
		<a id="utilities-view-more" class="view-more" href="#">
			<span class="text">Xem chi tiết</span>
		</a>
	</div>
	<div class="ground-content col-md-4">
		<div class="over"></div>
		<div class="inner">
			<div class="box-color-note">
				<div class="item tien-ich-category-item" data-category="1" data-color="#c0e0fd">
					<div class="color" style="background-color: #c0e0fd"></div>
					<div class="name">THE MANHATTAN</div>
				</div>
				<div class="item tien-ich-category-item" data-category="2" data-color="#f8ffb4">
					<div class="color" style="background-color: #f8ffb4"></div>
					<div class="name">THE PARIS</div>
				</div>
				<div class="item tien-ich-category-item" data-category="3" data-color="#d4fdd7">
					<div class="color" style="background-color: #d4fdd7"></div>
					<div class="name">THE VENICE</div>
				</div>
				<div class="item tien-ich-category-item" data-category="4" data-color="#ffdc8c">
					<div class="color" style="background-color: #ffdc8c"></div>
					<div class="name">DINH THỰ MONACO</div>
				</div>
				<div class="item tien-ich-category-item" data-category="5" data-color="#ffc8c8">
					<div class="color" style="background-color: #ffc8c8"></div>
					<div class="name">BOUTIQUE HOUSE</div>
				</div>
			</div>

			<div class="box-title">41 TIỆN ÍCH</div>

			<div class="box-list">
				<div id="tien_ich_sidebar">
					<div class="utilities-item utilities-category-1" data-index="1" data-number="1" data-category="1" data-title="QUẢNG TRƯỜNG ÁNH SÁNG">
						<div class="counter">1</div>
						<div class="text">QUẢNG TRƯỜNG ÁNH SÁNG</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="2" data-number="2" data-category="1" data-title="ĐÀI PHUN NƯỚC BIỂU TƯỢNG THÀNH PHỐ">
						<div class="counter">2</div>
						<div class="text">ĐÀI PHUN NƯỚC BIỂU TƯỢNG THÀNH PHỐ</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="3" data-number="3" data-category="1" data-title="ĐƯỜNG DẠO MUA SẮM DỌC BOUTIQUE HOUSE">
						<div class="counter">3</div>
						<div class="text">ĐƯỜNG DẠO MUA SẮM DỌC BOUTIQUE HOUSE</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="4" data-number="4" data-category="2" data-title="GIÀN HOA, GHẾ NGHỈ">
						<div class="counter">4</div>
						<div class="text">GIÀN HOA, GHẾ NGHỈ</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="5" data-number="5" data-category="3" data-title="KHU VUI CHƠI TRẺ EM">
						<div class="counter">5</div>
						<div class="text">KHU VUI CHƠI TRẺ EM</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="6" data-number="6" data-category="3" data-title="SÂN VUI CHƠI THIẾU NIÊN">
						<div class="counter">6</div>
						<div class="text">SÂN VUI CHƠI THIẾU NIÊN</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="7" data-number="7" data-category="1" data-title="SÂN THỂ DỤC NGOÀI TRỜI">
						<div class="counter">7</div>
						<div class="text">SÂN THỂ DỤC NGOÀI TRỜI</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="8" data-number="8" data-category="1" data-title="SÂN BÓNG BÀN">
						<div class="counter">8</div>
						<div class="text">SÂN BÓNG BÀN</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="9" data-number="9" data-category="1" data-title="ĐẠI LỘ DANH VỌNG, HÀNG CÂY ÁNH SÁNG">
						<div class="counter">9</div>
						<div class="text">ĐẠI LỘ DANH VỌNG, HÀNG CÂY ÁNH SÁNG</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="10" data-number="10" data-category="1" data-title="SÂN CHƠI NƯỚC KẾT HỢP TRÌNH DIỄN ÁNH SÁNG">
						<div class="counter">10</div>
						<div class="text">SÂN CHƠI NƯỚC KẾT HỢP TRÌNH DIỄN ÁNH SÁNG</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="11" data-number="11" data-category="1" data-title="SÂN KHẤU NGOÀI TRỜI PHONG CÁCH CỔ ĐIỂN">
						<div class="counter">11</div>
						<div class="text">SÂN KHẤU NGOÀI TRỜI PHONG CÁCH CỔ ĐIỂN</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="12" data-number="12" data-category="1" data-title="QUẢNG TRƯỜNG CỎ ĐA NĂNG KẾT HỢP TỔ CHỨC SỰ KIỆN (FESTIVAL ÂM NHẠC, HỘI CHỢ)">
						<div class="counter">12</div>
						<div class="text">QUẢNG TRƯỜNG CỎ ĐA NĂNG KẾT HỢP TỔ CHỨC SỰ KIỆN (FESTIVAL ÂM NHẠC, HỘI CHỢ)</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="13" data-number="13" data-category="3" data-title="BÃI ĐỖ XE">
						<div class="counter">13</div>
						<div class="text">BÃI ĐỖ XE</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="14" data-number="14" data-category="1" data-title="KHU VỰC ĐÓN TRẢ KHÁCH NHANH">
						<div class="counter">14</div>
						<div class="text">KHU VỰC ĐÓN TRẢ KHÁCH NHANH</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="15" data-number="15" data-category="1" data-title="ĐÀI PHUN NƯỚC ÁNH SÁNG">
						<div class="counter">15</div>
						<div class="text">ĐÀI PHUN NƯỚC ÁNH SÁNG</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="16" data-number="16" data-category="1" data-title="QUẢNG TRƯỜNG VEN KÊNH">
						<div class="counter">16</div>
						<div class="text">QUẢNG TRƯỜNG VEN KÊNH</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="17" data-number="17" data-category="2" data-title="SÂN GHẾ NGHỈ CHÂN, BÀN BÓNG BÀN, THỂ DỤC NGOÀI TRỜI, YOGA">
						<div class="counter">17</div>
						<div class="text">SÂN GHẾ NGHỈ CHÂN, BÀN BÓNG BÀN, THỂ DỤC NGOÀI TRỜI, YOGA</div>
					</div>
					<div class="utilities-item utilities-category-4" data-index="18" data-number="18" data-category="4" data-title="VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ">
						<div class="counter">18</div>
						<div class="text">VƯỜN HOA, CÂY BÓNG MÁT, ĂN QUẢ</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="19" data-number="19" data-category="2" data-title="ĐỒI CỎ NHÂN TẠO">
						<div class="counter">19</div>
						<div class="text">ĐỒI CỎ NHÂN TẠO</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="20" data-number="20" data-category="2" data-title="QUẢNG TRƯỜNG VEN KÊNH (THÁC NƯỚC, TƯỢNG, HÀNG CỘT CỔ ĐIỂN, VƯỜN HOA">
						<div class="counter">20</div>
						<div class="text">QUẢNG TRƯỜNG VEN KÊNH (THÁC NƯỚC, TƯỢNG, HÀNG CỘT CỔ ĐIỂN, VƯỜN HOA</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="21" data-number="21" data-category="2" data-title="ĐƯỜNG DẠO LỚN HƯỚNG VỀ KÊNH">
						<div class="counter">21</div>
						<div class="text">ĐƯỜNG DẠO LỚN HƯỚNG VỀ KÊNH</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="22" data-number="22" data-category="2" data-title="SÂN TỔ CHỨC SỰ KIỆN">
						<div class="counter">22</div>
						<div class="text">SÂN TỔ CHỨC SỰ KIỆN</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="23" data-number="23" data-category="3" data-title="ĐƯỜNG DẠO HÀNG CỌ">
						<div class="counter">23</div>
						<div class="text">ĐƯỜNG DẠO HÀNG CỌ</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="24" data-number="24" data-category="2" data-title="CẦU ĐI BỘ CỔ ĐIỂN">
						<div class="counter">24</div>
						<div class="text">CẦU ĐI BỘ CỔ ĐIỂN</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="25" data-number="25" data-category="3" data-title="QUẢNG TRƯỜNG ĐA CHỨC NĂNG">
						<div class="counter">25</div>
						<div class="text">QUẢNG TRƯỜNG ĐA CHỨC NĂNG</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="26" data-number="26" data-category="3" data-title="KHU BBQ">
						<div class="counter">26</div>
						<div class="text">KHU BBQ</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="27" data-number="27" data-category="3" data-title="NHÀ TẬP ĐÁNH GOLF">
						<div class="counter">27</div>
						<div class="text">NHÀ TẬP ĐÁNH GOLF</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="28" data-number="28" data-category="3" data-title="SÂN GOLF MINI">
						<div class="counter">28</div>
						<div class="text">SÂN GOLF MINI</div>
					</div>
					<div class="utilities-item utilities-category-3 utilities-category-4" data-index="29" data-number="29" data-category="3" data-title="QUẢNG TRƯỜNG MINI" data-category-2="4">
						<div class="counter">29</div>
						<div class="text">QUẢNG TRƯỜNG MINI</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="30" data-number="30" data-category="3" data-title="VƯỜN HOA, ĐƯỜNG DẠO CÓ MÁI CHE">
						<div class="counter">30</div>
						<div class="text">VƯỜN HOA, ĐƯỜNG DẠO CÓ MÁI CHE</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="31" data-number="31" data-category="3" data-title="SÂN BÓNG RỔ">
						<div class="counter">31</div>
						<div class="text">SÂN BÓNG RỔ</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="32" data-number="32" data-category="3" data-title="BỂ BƠI NGOÀI TRỜI">
						<div class="counter">32</div>
						<div class="text">BỂ BƠI NGOÀI TRỜI</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="33" data-number="33" data-category="3" data-title="NHÀ PHỤ TRỢ BỂ BƠI">
						<div class="counter">33</div>
						<div class="text">NHÀ PHỤ TRỢ BỂ BƠI</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="34" data-number="34" data-category="2" data-title="SÂN CẦU LÔNG">
						<div class="counter">34</div>
						<div class="text">SÂN CẦU LÔNG</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="35" data-number="35" data-category="1" data-title="LỐI ĐI VÀO QUẢNG TRƯỜNG">
						<div class="counter">35</div>
						<div class="text">LỐI ĐI VÀO QUẢNG TRƯỜNG</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="36" data-number="36" data-category="1" data-title="TTTM VINCOM">
						<div class="counter">36</div>
						<div class="text">TTTM VINCOM</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="37" data-number="37" data-category="1" data-title="SÂN GOLF MINI">
						<div class="counter">37</div>
						<div class="text">SÂN GOLF MINI</div>
					</div>
					<div class="utilities-item utilities-category-1" data-index="38" data-number="38" data-category="1" data-title="TRƯỜNG MẪU GIÁO">
						<div class="counter">38</div>
						<div class="text">TRƯỜNG MẪU GIÁO</div>
					</div>
					<div class="utilities-item utilities-category-2" data-index="39" data-number="39" data-category="2" data-title="CLUBHOUSE">
						<div class="counter">39</div>
						<div class="text">CLUBHOUSE</div>
					</div>
					<div class="utilities-item utilities-category-3" data-index="40" data-number="40" data-category="3" data-title="KHU PHỨC HỢP THỂ THAO">
						<div class="counter">40</div>
						<div class="text">KHU PHỨC HỢP THỂ THAO</div>
					</div>
					<div class="utilities-item utilities-category-3 utilities-category-4" data-index="41" data-number="41" data-category="3" data-title="BẾN THUYỀN" data-category-2="4">
						<div class="counter">41</div>
						<div class="text">BẾN THUYỀN</div>
					</div>
					<!--<div class="utilities-item utilities-category-1" data-index="45" data-number="45" data-category="1">
						<div class="counter">45</div>
						<div class="text">undefined</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function($){
		var s_height = $(window).height();
		var s_width = $(window).width();

		if(s_width > 768) {
			// Layer Map & Content -> Set height
			$('.ground-content, .ground-image .image-bg ').css({ "height" : $('.ground-image .image-bg').outerHeight() });
		} else {
			$('#home_map').click(function(){
				// $('.ground-content').addClass('active');;
				return false;
			});

			$('.ground-content .over').click(function(){
				$('.ground-content').removeClass('active');;
				return false;
			});
		}
		$('.home-ground .box-list').hover(function(){
			$.fn.fullpage.setMouseWheelScrolling(false);
		}, function(){
			$.fn.fullpage.setMouseWheelScrolling(true);
		});

		$('#utilities-view-more').click(function(){
			$('.ground-content').addClass('active');;
			return false;
		});
	});
</script>
</div>
</div>
</section>			</section>
<section class="section section-5" id="ly-do-so-huu-can-ho">
	<section class="home-subprojects">
<div class="subprojects-container">
<div class="text-bg">
<div class="text-1">tinh hoa</div>
<div class="text-2">kiến trúc thế giới</div>
</div>
<div id="subprojects_slide" class="subprojects-slide">
<div class="swiper-container">
	<div class="swiper-wrapper">


				<div class="swiper-slide goal-view-subdivision goal-phan-khu-boutique-house">
					<a class="item" href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/boutique-house/">
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/08/boutique.jpg');"></div>
						<div class="text">
							<div class="title">
								<span class="text-1">Phân khu</span>
								<span class="text-2" href="#">Boutique House</span>
							</div>


							<div class="excerpt">
								Đúng như tên gọi, Boutique House là sự kết hợp hoàn hảo giữa Boutique (cửa hàng) và House (nhà ở), mang đến một câu chuyện về sự trải nghiệm thú vị, lợi ích nhân đôi trong cùng một không gian sống.                                        </div>
						</div>
					</div>
				</a>

				<div class="swiper-slide goal-view-subdivision goal-phan-khu-the-paris">
					<a class="item" href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/paris/">
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/Frame4_600x1000_1-1.jpg');"></div>
						<div class="text">
							<div class="title">
								<span class="text-1">Phân khu</span>
								<span class="text-2" href="#">The Paris</span>
							</div>


							<div class="excerpt">
								Cảm hứng đến từ những ban công hoa rực rỡ với những đường nét trang trí cầu kỳ đã tạo nên những căn biệt thự mang đậm phong cách kiến trúc Pháp, cổ điển lãng mạn.                                        </div>
						</div>
					</div>
				</a>

				<div class="swiper-slide goal-view-subdivision goal-phan-khu-the-venice">
					<a class="item" href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/venice/">
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/frame4_600x1000_3-2.jpg');"></div>
						<div class="text">
							<div class="title">
								<span class="text-1">Phân khu</span>
								<span class="text-2" href="#">The Venice</span>
							</div>


							<div class="excerpt">
								Nét phóng khoáng, sự hòa hoa của người Ý được lựa chọn tinh tế để mang vào từng căn nhà trong tiểu khu The Venice. Phong cách nhiệt đới thô mộc với nét chấm phá đầy màu sắc tạo sự tinh tế, duyên dáng                                        </div>
						</div>
					</div>
				</a>

				<div class="swiper-slide goal-view-subdivision goal-phan-khu-the-manhattan">
					<a class="item" href="<?php echo MAIN_URL ?>/danh-muc-phan-khu/manhattan/">
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/07/manhattan.jpg');"></div>
						<div class="text">
							<div class="title">
								<span class="text-1">Phân khu</span>
								<span class="text-2" href="#">The Manhattan</span>
							</div>


							<div class="excerpt">
								Tiểu khu kế cận quảng trường mang hơi thở hiện đại và thời thượng với vẻ đẹp giản đơn, không hoa mỹ                                        </div>
						</div>
					</div>
				</a>

				<div class="swiper-slide goal-view-subdivision goal-phan-khu-the-monaco">
					<a class="item" href="javascript:void(0)">
						<div class="img" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/frame4_600x1000_4-2.jpg');"></div>
						<div class="text">
							<div class="title">
								<span class="text-1">Phân khu</span>
								<span class="text-2" href="#">The Monaco</span>
							</div>

							<div class="sap-ra-mat btn-bg-gradient active">Sắp ra mắt</div>
							<div class="excerpt">
								Lộng lẫy và xa hoa, cầu kỳ và tinh xảo, mỗi dinh thự tại tại The Monaco như một cung điện thu nhỏ, nơi chủ nhân thể hiện đẳng cấp và vị thế độc tôn                                        </div>
						</div>
					</div>
				</a>

	</div>
</div>
<div class="control">
	<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-left.png" /></a>
	<div class="pagination"></div>
	<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-right.png" /></a>
</div>
</div>
</div>
<script>
jQuery(document).ready(function($){
var w_width = $(window).width();
var w_height = $(window).height();

if (w_width < 768) {
	$('.home-subprojects .subprojects-slide .item').css({
		'height': $(window).height()
	});
}

var subprojects_slide = new Swiper('#subprojects_slide .swiper-container', {
	pagination: '#subprojects_slide .pagination',
	speed: 1200,
	slidesPerView: 3,
	spaceBetween: 0,
	paginationClickable: true,
	nextButton: '#subprojects_slide .next',
	prevButton: '#subprojects_slide .prev',
	breakpoints: {
		480: {
			slidesPerView: 1,
		},
		640: {
			slidesPerView: 2,
		}
	}
});

});
</script>
</section>
</section>
<section class="section section-6" id="tien-ich">
	<div class="home-utilities">
<script>
jQuery(document).ready(function($){

var w_width = $(window).width();
var w_height = $(window).height();
var item_height = w_height/6;

if (w_width > 1024) {
	$('.utilities-subitems').css({'height': w_height});
	$('.utilities-subitems .item').css({'height': item_height, 'width': item_height});
	$('.utilities-subitems  .utilities-item-content').css({'left': item_height});
}
});
</script>

<ul class="utilities-subitems hidden-devide-1024">


	<li class="item">
		<div class="utilities-item-icon">
			<div>
				<div class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr6_icon1.png" alt="#"></div>
				<div class="text">Vinmec Clinic</div>
			</div>
		</div>

		<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_1.jpg')">
			<div class="text">
				<div class="title">
					<div class="text-1">Quần thể tiện ích</div>
					<div class="text-2">City within city</div>
				</div>
				<h3 class="text-label"><a href="#">Vinmec Clinic</a></h3>
				<div class="excerpt">Đặc quyền chăm sóc sức khoẻ với Vinmec Clinic tiêu chuẩn quốc tế</div>
			</div>
		</div>
	</li>


	<li class="item">
		<div class="utilities-item-icon">
			<div>
				<div class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr6_icon5.png" alt="#"></div>
				<div class="text">TTTM Vincom</div>
			</div>
		</div>

		<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_2-min.jpg')">
			<div class="text">
				<div class="title">
					<div class="text-1">Quần thể tiện ích</div>
					<div class="text-2">City within city</div>
				</div>
				<h3 class="text-label"><a href="#">Vincom</a></h3>
				<div class="excerpt">Sở hữu trung tâm thương mại Vincom - nơi hội tụ hàng ngàn thương hiệu nổi tiếng</div>
			</div>
		</div>
	</li>


	<li class="item">
		<div class="utilities-item-icon">
			<div>
				<div class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr6_icon4.png" alt="#"></div>
				<div class="text">Khách sạn 45 tầng</div>
			</div>
		</div>

		<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_3-min.jpg')">
			<div class="text">
				<div class="title">
					<div class="text-1">Quần thể tiện ích</div>
					<div class="text-2">City within city</div>
				</div>
				<h3 class="text-label"><a href="#">Khách sạn 45 tầng</a></h3>
				<div class="excerpt">Tổ hợp thương mại, khách sạn và giải trí thời thượng 45 tầng với hàng loạt tiện ích như gym, spa, sky bar, nhà hàng cao cấp…</div>
			</div>
		</div>
	</li>


	<li class="item">
		<div class="utilities-item-icon">
			<div>
				<div class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr6_icon6.png" alt="#"></div>
				<div class="text">Vinschool</div>
			</div>
		</div>

		<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_4-min.jpg')">
			<div class="text">
				<div class="title">
					<div class="text-1">Quần thể tiện ích</div>
					<div class="text-2">City within city</div>
				</div>
				<h3 class="text-label"><a href="#">Vinschool</a></h3>
				<div class="excerpt">Đặc quyền tận hưởng nền giáo dục chuẩn quốc tế với hệ thống trường liên cấp Vinschool</div>
			</div>
		</div>
	</li>


	<li class="item">
		<div class="utilities-item-icon">
			<div>
				<div class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr6_icon2.png" alt="#"></div>
				<div class="text">VinMart</div>
			</div>
		</div>

		<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_5-min.jpg')">
			<div class="text">
				<div class="title">
					<div class="text-1">Quần thể tiện ích</div>
					<div class="text-2">City within city</div>
				</div>
				<h3 class="text-label"><a href="#">VinMart</a></h3>
				<div class="excerpt">Đặc quyền mua sắm tại đại siêu thị VinMart và hệ thống cửa hàng VinMart+</div>
			</div>
		</div>
	</li>


	<li class="item">
		<div class="utilities-item-icon">
			<div>
				<div class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Fr6_icon3.png" alt="#"></div>
				<div class="text">Quảng trường</div>
			</div>
		</div>

		<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_6-min.jpg')">
			<div class="text">
				<div class="title">
					<div class="text-1">Quần thể tiện ích</div>
					<div class="text-2">City within city</div>
				</div>
				<h3 class="text-label"><a href="#">Quảng trường ánh sáng</a></h3>
				<div class="excerpt"><em> </em>Quảng trường ánh sáng rực rỡ và sống động với diện tích lên tới 3,18 ha bao gồm khu vực thảm có phục vụ sự kiện ngoài trời diện tích 6.000 m2, ôm trọn xung quanh bởi những boutique house sang trọng</div>
			</div>
		</div>
	</li>


</ul>

<div id="utilities_subitems" class="utilities-subitems slide show-devide-1024">
<div class="swiper-container">
<div class="swiper-wrapper">


			<div class="swiper-slide">

				<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_1.jpg')">
					<div class="text">
						<div class="title">
							<div class="text-1">Quần thể tiện ích</div>
							<div class="text-2">City within city</div>
						</div>
						<h3 class="text-label"><a href="#">Vinmec Clinic</a></h3>
						<div class="excerpt">Đặc quyền chăm sóc sức khoẻ với Vinmec Clinic tiêu chuẩn quốc tế</div>
					</div>
				</div>

			</div>


			<div class="swiper-slide">

				<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_2-min.jpg')">
					<div class="text">
						<div class="title">
							<div class="text-1">Quần thể tiện ích</div>
							<div class="text-2">City within city</div>
						</div>
						<h3 class="text-label"><a href="#">Vincom</a></h3>
						<div class="excerpt">Sở hữu trung tâm thương mại Vincom - nơi hội tụ hàng ngàn thương hiệu nổi tiếng</div>
					</div>
				</div>

			</div>


			<div class="swiper-slide">

				<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_3-min.jpg')">
					<div class="text">
						<div class="title">
							<div class="text-1">Quần thể tiện ích</div>
							<div class="text-2">City within city</div>
						</div>
						<h3 class="text-label"><a href="#">Khách sạn 45 tầng</a></h3>
						<div class="excerpt">Tổ hợp thương mại, khách sạn và giải trí thời thượng 45 tầng với hàng loạt tiện ích như gym, spa, sky bar, nhà hàng cao cấp…</div>
					</div>
				</div>

			</div>


			<div class="swiper-slide">

				<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_4-min.jpg')">
					<div class="text">
						<div class="title">
							<div class="text-1">Quần thể tiện ích</div>
							<div class="text-2">City within city</div>
						</div>
						<h3 class="text-label"><a href="#">Vinschool</a></h3>
						<div class="excerpt">Đặc quyền tận hưởng nền giáo dục chuẩn quốc tế với hệ thống trường liên cấp Vinschool</div>
					</div>
				</div>

			</div>


			<div class="swiper-slide">

				<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_5-min.jpg')">
					<div class="text">
						<div class="title">
							<div class="text-1">Quần thể tiện ích</div>
							<div class="text-2">City within city</div>
						</div>
						<h3 class="text-label"><a href="#">VinMart</a></h3>
						<div class="excerpt">Đặc quyền mua sắm tại đại siêu thị VinMart và hệ thống cửa hàng VinMart+</div>
					</div>
				</div>

			</div>


			<div class="swiper-slide">

				<div class="utilities-item-content" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame5_1650x1024_6-min.jpg')">
					<div class="text">
						<div class="title">
							<div class="text-1">Quần thể tiện ích</div>
							<div class="text-2">City within city</div>
						</div>
						<h3 class="text-label"><a href="#">Quảng trường ánh sáng</a></h3>
						<div class="excerpt"><em> </em>Quảng trường ánh sáng rực rỡ và sống động với diện tích lên tới 3,18 ha bao gồm khu vực thảm có phục vụ sự kiện ngoài trời diện tích 6.000 m2, ôm trọn xung quanh bởi những boutique house sang trọng</div>
					</div>
				</div>

			</div>



</div>
<div class="control">
	<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-left.png" /></a>
	<div class="pagination"></div>
	<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-right.png" /></a>
</div>
</div>
</div>

<script>
jQuery(document).ready(function($){
var w_width = $(window).width();
var w_height = $(window).height();

if (w_width < 1025) {
	$('.utilities-subitems .utilities-item-content').css({
		'height': $(window).height()
	});
}

var utilities_subitems = new Swiper('#utilities_subitems .swiper-container', {
	pagination: '#utilities_subitems .pagination',
	speed: 1200,
	slidesPerView: 1,
	spaceBetween: 0,
	paginationClickable: true,
	nextButton: '#utilities_subitems .next',
	prevButton: '#utilities_subitems .prev',
});
});
</script>
</div>
</section>
<section class="section section-7">

<section class="home-project-feature">
<span class="text-bg">Vinhomes Imperia</span>
<span class="decor-line-1 hidden-devide-768"></span>
<span class="decor-line-2 hidden-devide-768"></span>
<div id="home_project_feature_slide" class="slide-wrap">
<div class="slide-content">
<div class="swiper-container">
	<div class="swiper-wrapper">



				<div class="swiper-slide">
					<div class="img">
						<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame6_1400x700_3-3.jpg" alt="">
						<div class="content show-devide-768">
							<div>
								<div class="excerpt">
									<div class="excerpt-label"><span>Đặc quyền</span><span>sống riêng tư</span><span>an ninh biệt lập</span></div>
									<div class="excerpt-content">
										<div data-canvas-width="410.07853711937224">Hệ thống camera giám sát hiện đại, đội an ninh tuần tra 24/7... đảm bảo cho cư dân một cuộc sống riêng tư, an toàn và trọn vẹn</div>                                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="swiper-slide">
					<div class="img">
						<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame6_1400x700_1-3.jpg" alt="">
						<div class="content show-devide-768">
							<div>
								<div class="excerpt">
									<div class="excerpt-label"><span>Đặc quyền</span><span>sống 5 sao chuẩn</span><span>cao cấp Vinhomes</span></div>
									<div class="excerpt-content">
										Dịch vụ giá trị gia tăng đa dạng từ Vinhomes: Chăm sóc vườn, dọn bể bơi, bảo trì bảo dưỡng máy móc thiết bị,...                                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="swiper-slide">
					<div class="img">
						<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame6_1400x700_4-min.jpg" alt="">
						<div class="content show-devide-768">
							<div>
								<div class="excerpt">
									<div class="excerpt-label"><span>Đặc quyền</span><span>sống resort an lành</span></div>
									<div class="excerpt-content">
										<div data-canvas-width="173.02387753324655">Hệ thống bể bơi hiện đại, đẳng cấp</div>
<div data-canvas-width="173.02387753324655">Không gian xanh rộng lớn</div>
<div data-canvas-width="173.02387753324655">Đường dạo bộ ven sông</div>                                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="swiper-slide">
					<div class="img">
						<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame6_1400x700_5-min-2.jpg" alt="">
						<div class="content show-devide-768">
							<div>
								<div class="excerpt">
									<div class="excerpt-label"><span>Đặc quyền</span><span>sống hoàn hảo</span><span>tiện ích</span></div>
									<div class="excerpt-content">
										<div data-canvas-width="254.74622390134573">Hệ thống trường liên cấp chất lượng cao Vinschool</div>
<div data-canvas-width="254.74622390134573">Phòng khám Vinmec Clinic tiêu chuẩn 5 sao đầu tiên tại Hải Phòng</div>
<div data-canvas-width="254.74622390134573">Trung tâm thương mại Vincom sầm uất</div>
<div data-canvas-width="254.74622390134573">Siêu thị VinMart</div>                                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="swiper-slide">
					<div class="img">
						<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/Frame6_1400x700_2-3.jpg" alt="">
						<div class="content show-devide-768">
							<div>
								<div class="excerpt">
									<div class="excerpt-label"><span>Đặc quyền</span><span>sống thượng lưu</span><span>đẳng cấp</span></div>
									<div class="excerpt-content">
										<div data-canvas-width="410.75870892207695">Kết nối thượng lưu với các câu lạc bộ thời thượng, cigar lounge, clubhouse, spa, bể bơi bán lộ thiên, ball room, sky bar... (thuộc tòa khách sạn)</div>
<div data-canvas-width="410.75870892207695">Đặc quyền thưởng ngoạn có một không hai với bến thuyền</div>                                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>


	</div>
	<div class="controls hidden-devide-768">
		<a href="" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-banner-icon-right.png" alt="#"></a>
		<a href="" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-banner-icon-left.png" alt="#"></a>
	</div>
</div>
<div class="slide-text">
	<div class="list-wrap hidden-devide-768">



			<div class="item">
				<div>
					<div class="excerpt">
						<div class="excerpt-label"><span>Đặc quyền</span><span>sống riêng tư</span><span>an ninh biệt lập</span></div>
						<div class="excerpt-content">
							<div data-canvas-width="410.07853711937224">Hệ thống camera giám sát hiện đại, đội an ninh tuần tra 24/7... đảm bảo cho cư dân một cuộc sống riêng tư, an toàn và trọn vẹn</div>                                    </div>
					</div>
				</div>
			</div>



			<div class="item">
				<div>
					<div class="excerpt">
						<div class="excerpt-label"><span>Đặc quyền</span><span>sống 5 sao chuẩn</span><span>cao cấp Vinhomes</span></div>
						<div class="excerpt-content">
							Dịch vụ giá trị gia tăng đa dạng từ Vinhomes: Chăm sóc vườn, dọn bể bơi, bảo trì bảo dưỡng máy móc thiết bị,...                                    </div>
					</div>
				</div>
			</div>



			<div class="item">
				<div>
					<div class="excerpt">
						<div class="excerpt-label"><span>Đặc quyền</span><span>sống resort an lành</span></div>
						<div class="excerpt-content">
							<div data-canvas-width="173.02387753324655">Hệ thống bể bơi hiện đại, đẳng cấp</div>
<div data-canvas-width="173.02387753324655">Không gian xanh rộng lớn</div>
<div data-canvas-width="173.02387753324655">Đường dạo bộ ven sông</div>                                    </div>
					</div>
				</div>
			</div>



			<div class="item">
				<div>
					<div class="excerpt">
						<div class="excerpt-label"><span>Đặc quyền</span><span>sống hoàn hảo</span><span>tiện ích</span></div>
						<div class="excerpt-content">
							<div data-canvas-width="254.74622390134573">Hệ thống trường liên cấp chất lượng cao Vinschool</div>
<div data-canvas-width="254.74622390134573">Phòng khám Vinmec Clinic tiêu chuẩn 5 sao đầu tiên tại Hải Phòng</div>
<div data-canvas-width="254.74622390134573">Trung tâm thương mại Vincom sầm uất</div>
<div data-canvas-width="254.74622390134573">Siêu thị VinMart</div>                                    </div>
					</div>
				</div>
			</div>



			<div class="item">
				<div>
					<div class="excerpt">
						<div class="excerpt-label"><span>Đặc quyền</span><span>sống thượng lưu</span><span>đẳng cấp</span></div>
						<div class="excerpt-content">
							<div data-canvas-width="410.75870892207695">Kết nối thượng lưu với các câu lạc bộ thời thượng, cigar lounge, clubhouse, spa, bể bơi bán lộ thiên, ball room, sky bar... (thuộc tòa khách sạn)</div>
<div data-canvas-width="410.75870892207695">Đặc quyền thưởng ngoạn có một không hai với bến thuyền</div>                                    </div>
					</div>
				</div>
			</div>


	</div>
	<div class="pagination"></div>
</div>
<script>
	jQuery(document).ready(function($){
		var item_text = $('#home_project_feature_slide .slide-text .item');
		item_text.eq(0).addClass('active');
		item_text.eq(1).addClass('next');

		var home_project_feature_slide = new Swiper('#home_project_feature_slide .swiper-container', {
			pagination: '#home_project_feature_slide .pagination',
			speed: 1200,
			spaceBetween: 30,
			paginationClickable: true,
			nextButton: '#home_project_feature_slide .next',
			prevButton: '#home_project_feature_slide .prev',
			onSlideChangeStart: function(){
				var active = $('#home_project_feature_slide .swiper-slide').hasClass('swiper-slide-active');

				if ( active == true ) {
					var active_point = home_project_feature_slide.activeIndex;

					item_text.removeClass('active');
					item_text.removeClass('prev');
					item_text.removeClass('next');

					item_text.eq(active_point).addClass('active');
					item_text.eq(active_point - 1).addClass('prev');
					item_text.eq(active_point + 1).addClass('next');
				}
			},
			breakpoints: {
				768: {
					slidesPerView: 1,
					spaceBetween: 0,
					autoHeight: true
				}
			}
		});

		home_project_feature_slide.slideNext();
	});
</script>
</div>
</div>
</section>
</section>
<section class="section section-8">

<section class="home-library">
<div class="library-container">
<div class="library-wrap tar">
<div class="home-libary-title">Thư viện</div>
<div id="home_libary_site_tabs" class="site-tabs">
	<div class="tabs-head goal-category-album">

								<ul class="hidden-devide-768">
																							<li><a class="item btn-bg-gradient active" href="#thu_vien_4">Thư viện hình ảnh</a></li>
																	<li><a class="item btn-bg-gradient normal" href="#thu_vien_5">Thư viện video</a></li>
																	<li><a class="item btn-bg-gradient normal" href="#thu_vien_6">Thư viện tài liệu</a></li>
									</ul>

			<ul class="show-devide-768">
										<li><a class="btn-bg-gradient active" href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-hinh-anh/">Thư viện hình ảnh</a></li>
										<li><a class="btn-bg-gradient active" href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-video/">Thư viện video</a></li>
										<li><a class="btn-bg-gradient active" href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-tai-lieu/">Thư viện tài liệu</a></li>
									</ul>


	</div>
	<div class="tabs-content hidden-devide-768">


		<!-- box image -->
								<div id="thu_vien_4" class="content-item">
				<div class="home-library-slide" id="home_library_slide_1">
					<div class="swiper-container">
						<div class="swiper-wrapper">



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_An-611x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_An-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_bep-1-736x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_bep-1-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_thay_do_master_2-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_thay_do_master_2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_san_vuon1-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_san_vuon1-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_san_vuon2-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_san_vuon2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu_2-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu_2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu_master-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu_master-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu_master_2-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_phong_ngu_master_2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_wc_master-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_wc_master-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_chieu_phim-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_chieu_phim-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_lam_viec-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_lam_viec-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_lam_viec_2-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_lam_viec_2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_lam_viec_2-1-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_lam_viec_2-1-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_ngu-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_ngu-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_ngu_2-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_phong_ngu_2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_san_vuon-675x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_san_vuon-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_khach-485x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_khach-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_khach_2-485x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_khach_2-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_ruou-485x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_ruou-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_thay_do_master-485x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_1_Phong_thay_do_master-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_wc3-485x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_2_wc3-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Nội thất biệt thự mẫu</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_sanh_thang-485x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/noi_that_tang_3_sanh_thang-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">The Paris</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/paris_cam_10-736x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/paris_cam_10-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">The Paris</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/paris_cam_14-842x474.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/paris_cam_14-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">The Paris</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/paris_cam_16-842x474.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/paris_cam_16-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh dự án</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/cam-12_03.03-842x446.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/cam-12_03.03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh dự án</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/phoi_canh_cam_8_hoang_hon_02_03-842x475.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/phoi_canh_cam_8_hoang_hon_02_03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh dự án</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/phoi_canh_cam_8_ban_ngay_03_03-842x475.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/phoi_canh_cam_8_ban_ngay_03_03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh tổng thể</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_4_21_03-842x474.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_4_21_03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh tổng thể</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_1_21_03-842x474.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_1_21_03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh tổng thể</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_3_21_03-842x474.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_3_21_03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Khách sạn 45 tầng</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_6_khach_san_27_02-746x490.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_6_khach_san_27_02-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>



<div class="swiper-slide goal-view-popup-image">
<div class="photo-thumbnail">
<div class="title">Phối cảnh dự án</div>
<a class="img fancybox-img" rel="library-img" title="" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_6_03_03-842x475.jpg">
	<img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/02/phoi_canh_cam_6_03_03-309x253.jpg" alt="#">
	<div class="icon-open"><i class="fa fa-search"></i></div>
</a>
</div>
</div>


						</div>
					</div>


				</div>
				<div class="view-more tac goal-view-more-album">
					<a href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-hinh-anh/" class="site-btn-default btn-view-more white">
						<span class="text">Xem thêm</span>
						<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-arrow-right.png" alt="Xem thêm tin tức"></span>
					</a>
				</div>

				<script>
					var home_library_slide_1 = new Swiper('#home_library_slide_1 .swiper-container', {
						pagination: '#home_library_slide_1 .pagination',
						speed: 1200,
						slidesPerView: 3,
						spaceBetween: 10,
						paginationClickable: true,
						nextButton: '#home_library_slide_1 .next',
						prevButton: '#home_library_slide_1 .prev',
						breakpoints: {
							480: {
								slidesPerView: 1,
							}
						}
					});
				</script>
			</div>
		<!-- end box image -->

		<!-- box video -->
							<!-- end box document -->


		<!-- box image -->
								<div id="thu_vien_5" class="content-item">
				<div class="home-library-slide" id="home_library_slide_2">
					<div class="swiper-container">
						<div class="swiper-wrapper">


									<div class="swiper-slide">
										<div class="video-thumbnail goal-xem-video">
											<!--<div class="title">Tieu de video</div>-->
											<a class="img fancybox-video" rel="library-video" href="https://www.youtube.com/watch?v=JkvHgAXdJn8">
												<img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-library-photo-thumb.png" alt="#">
												<div class="icon-open"><i class="fa fa-play"></i></div>
											</a>
										</div>
									</div>


									<div class="swiper-slide">
										<div class="video-thumbnail goal-xem-video">
											<!--<div class="title">Tieu de video</div>-->
											<a class="img fancybox-video" rel="library-video" href="https://www.youtube.com/watch?v=JkvHgAXdJn8">
												<img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-library-photo-thumb.png" alt="#">
												<div class="icon-open"><i class="fa fa-play"></i></div>
											</a>
										</div>
									</div>


									<div class="swiper-slide">
										<div class="video-thumbnail goal-xem-video">
											<!--<div class="title">Tieu de video</div>-->
											<a class="img fancybox-video" rel="library-video" href="https://www.youtube.com/watch?v=JkvHgAXdJn8">
												<img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-library-photo-thumb.png" alt="#">
												<div class="icon-open"><i class="fa fa-play"></i></div>
											</a>
										</div>
									</div>


						</div>
					</div>


				</div>
				<div class="view-more tac goal-view-more-album">
					<a href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-video/" class="site-btn-default btn-view-more white">
						<span class="text">Xem thêm</span>
						<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-arrow-right.png" alt="Xem thêm tin tức"></span>
					</a>
				</div>
				<script>
					var home_library_slide_2 = new Swiper('#home_library_slide_2 .swiper-container', {
						pagination: '#home_library_slide_2 .pagination',
						speed: 1200,
						slidesPerView: 3,
						spaceBetween: 10,
						paginationClickable: true,
						nextButton: '#home_library_slide_2 .next',
						prevButton: '#home_library_slide_2 .prev',
						breakpoints: {
							480: {
								slidesPerView: 1,
								spaceBetween: 20
							},
							640: {
								slidesPerView: 3,
								spaceBetween: 30
							}
						}
					});
				</script>
			</div>
		<!-- end box video -->

		<!-- box document -->
							<!-- end box document -->


		<!-- box image -->
								<div id="thu_vien_6" class="content-item">
				<div class="home-library-slide" id="home_library_slide_3">
					<div class="swiper-container">
						<div class="swiper-wrapper">



<div class="swiper-slide">
<div class="document-thumbnail">
<div class="title">VHI TheParis FlyerSalekit</div>
<a class="img goal-download-document" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/VHI-TheParis-FlyerSalekit.pdf"download="VHI-TheParis-FlyerSalekit.pdf">                <img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/Anh-chup-Man-hinh-2017-03-09-luc-09.29.00-309x253.png" alt="#">
	<div class="icon-open"><i class="fa fa-download"></i></div>
</a>
</div>
</div>



<div class="swiper-slide">
<div class="document-thumbnail">
<div class="title">Brochure bản tablet</div>
<a class="img goal-download-document" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/VHI-Brochure-tablet.pdf"download="VHI-Brochure-tablet.pdf">                <img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/Anh-chup-Man-hinh-2017-03-09-luc-09.29.00-309x253.png" alt="#">
	<div class="icon-open"><i class="fa fa-download"></i></div>
</a>
</div>
</div>



<div class="swiper-slide">
<div class="document-thumbnail">
<div class="title">Brochure bản mobile</div>
<a class="img goal-download-document" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/VHI-Brochure-mobile.pdf"download="VHI-Brochure-mobile.pdf">                <img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/Anh-chup-Man-hinh-2017-03-09-luc-09.29.00-309x253.png" alt="#">
	<div class="icon-open"><i class="fa fa-download"></i></div>
</a>
</div>
</div>



<div class="swiper-slide">
<div class="document-thumbnail">
<div class="title">Brochure bản PC</div>
<a class="img goal-download-document" href="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/VHI-Brochure.pdf"download="VHI-Brochure.pdf">                <img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/Anh-chup-Man-hinh-2017-03-09-luc-09.29.00-309x253.png" alt="#">
	<div class="icon-open"><i class="fa fa-download"></i></div>
</a>
</div>
</div>

																											</div>
					</div>


				</div>
				<div class="view-more tac goal-view-more-album">
					<a href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-tai-lieu/" class="site-btn-default btn-view-more white">
						<span class="text">Xem thêm</span>
						<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-arrow-right.png" alt="Xem thêm tin tức"></span>
					</a>
				</div>
				<script>
					var home_library_slide_3 = new Swiper('#home_library_slide_3 .swiper-container', {
						pagination: '#home_library_slide_3 .pagination',
						speed: 1200,
						slidesPerView: 3,
						spaceBetween: 10,
						paginationClickable: true,
						nextButton: '#home_library_slide_3 .next',
						prevButton: '#home_library_slide_3 .prev',
						breakpoints: {
							480: {
								slidesPerView: 1,
								spaceBetween: 20
							},
							640: {
								slidesPerView: 3,
								spaceBetween: 30
							}
						}
					});
				</script>
			</div>
							<!-- end box document -->


	</div>
</div>
</div>
</div>
<div class="library-bg hidden-devide-768">
<div id="library_images_slide" class="library-items">
<div class="item" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-library-bg-2.jpg');"></div>
</div>
</div>

<script>
var library_images_slide = new Swiper('#library_images_slide .swiper-container', {
speed: 2000,
autoplay: 3000,
effect: 'fade',
spaceBetween: 0,
});

jQuery(document).ready(function($){
$('a.fancybox-img').fancybox({
	titleShow: true,
});

$("a.fancybox-video").click(function() {
	$.fancybox({
		'padding'		: 0,
		'autoScale'		: false,
		'transitionIn'	: 'none',
		'transitionOut'	: 'none',
		'title'			: this.title,
		'width'			: 853,
		'height'		: 480,
		'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
		'type'			: 'swf',
		'swf'			: {
			'wmode'		: 'transparent',
			'allowfullscreen'	: 'true'
		}
	});

	return false;
});

});
</script>
</section>
</section>
<section class="section section-9">

<section class="home-news">
<span class="text-bg">Tin tức</span>
<span class="decor-line-1 hidden-devide-768"></span>
<span class="decor-line-2 hidden-devide-768"></span>
<div class="wrap">
<div class="container-fluid">
<div class="row">
	<div class="col-md-offset-1 col-md-10">
		<div class="home-news-title">Tin tức</div>
		<div id="home_news_site_tabs" class="site-tabs">
			<div class="tabs-head">
				<ul class="goal-category-news">


						<li><a class="item btn-bg-gradient active" href="#tin_2">Tin báo chí</a></li>


						<li><a class="item btn-bg-gradient normal" href="#tin_3">Tin công ty</a></li>


						<li><a class="item btn-bg-gradient normal" href="#tin_39">Tiến độ dự án</a></li>


				</ul>
			</div>
			<div class="tabs-content">


						<div id="tin_2" class="content-item">
							<div class="home-news-slide" id="home_news_slide_1">
								<div class="swiper-container">
									<div class="swiper-wrapper">


<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">25</div>
		<div class="month-year">07/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/da-tiec-trang-vinhomes-imperia-dem-tri-khach-hang-tren-du-thuyen-sang-trong/">&#8216;Dạ tiệc trắng Vinhomes Imperia&#8217;: Đêm tri ân khách hàng trên du thuyền sang trọng</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/da-tiec-trang-vinhomes-imperia-dem-tri-khach-hang-tren-du-thuyen-sang-trong/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/07/4-334x206.jpg" alt="#"></a></div>
</div>
</div>

<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">13</div>
		<div class="month-year">07/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/manhattan-tam-diem-cua-cuoc-song-thoi-thuong-tai-hai-phong/">The Manhattan &#8211; Tâm điểm của cuộc sống thời thượng tại Hải Phòng</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/manhattan-tam-diem-cua-cuoc-song-thoi-thuong-tai-hai-phong/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/07/the-manhattan-tam-diem-cua-cuoc-song-thoi-thuong-tai-hai-phong-ava2.jpg" alt="#"></a></div>
</div>
</div>

<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">08</div>
		<div class="month-year">06/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/ly-do-khach-hang-rot-tien-vao-smart-land-tai-vinhomes-imperia/">Lý do khách hàng “rót tiền” vào Smart Land tại Vinhomes Imperia?</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/ly-do-khach-hang-rot-tien-vao-smart-land-tai-vinhomes-imperia/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/06/ly-do-khach-hang-rot-tien-vao-smart-land-tai-vinhomes-imperia-ava.png" alt="#"></a></div>
</div>
</div>

									</div>
								</div>
								<!--<div class="control">
									<div>
										<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-up.png" /></a>
										<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-down.png" /></a>
										<div class="pagination"></div>
									</div>
								</div>-->
							</div>
							<div class="view-more tac goal-view-more-news">
								<a href="<?php echo MAIN_URL ?>/danh-muc-tin-tuc/tin-bao-chi/" class="site-btn-default btn-view-more">
									<span class="text">Xem thêm</span>
									<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-right.png" alt="Xem thêm tin tức"></span>
								</a>
							</div>
							<script>
								var home_news_slide_1 = new Swiper('#home_news_slide_1 .swiper-container', {
									pagination: '#home_news_slide_1 .pagination',
									speed: 1200,
									slidesPerView: 3,
									spaceBetween: 30,
									paginationClickable: true,
									nextButton: '#home_news_slide_1 .next',
									prevButton: '#home_news_slide_1 .prev',
									breakpoints: {
										480: {
											slidesPerView: 1,
											spaceBetween: 20
										},
										640: {
											slidesPerView: 3,
											spaceBetween: 30
										}
									}
								});
							</script>
						</div>

						<div id="tin_3" class="content-item">
							<div class="home-news-slide" id="home_news_slide_1">
								<div class="swiper-container">
									<div class="swiper-wrapper">


<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">07</div>
		<div class="month-year">07/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/ra-mat-phan-khu-manhattan-vinhomes-imperia-hai-phong/">Ra mắt phân khu The Manhattan &#8211;  Vinhomes Imperia Hải Phòng</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/ra-mat-phan-khu-manhattan-vinhomes-imperia-hai-phong/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/07/ra-mat-phan-khu-manhattan-vinhomes-imperia-hai-phong_AVA.jpg" alt="#"></a></div>
</div>
</div>

<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">23</div>
		<div class="month-year">05/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/an-tuong-biet-thu-mau-vinhomes-imperia-tai-hai-phong/">Ấn tượng biệt thự mẫu Vinhomes Imperia tại Hải Phòng</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/an-tuong-biet-thu-mau-vinhomes-imperia-tai-hai-phong/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/05/tuong-biet-thu-mau-vinhomes-imperia-tai-hai-phong-ava2.jpg" alt="#"></a></div>
</div>
</div>

<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">31</div>
		<div class="month-year">03/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/uu-tien-tiep-nhan-con-cu-dan-vinhomes-du-tuyen-vao-vinschool/">Ưu tiên tiếp nhận con Cư dân Vinhomes dự tuyển vào Vinschool năm học 2017-2018</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/uu-tien-tiep-nhan-con-cu-dan-vinhomes-du-tuyen-vao-vinschool/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/uu-tien-tiep-nhan-con-cu-dan-vinhomes-du-tuyen-vao-vinschool-nam-hoc-2017-2018-ava.jpg" alt="#"></a></div>
</div>
</div>

									</div>
								</div>
								<!--<div class="control">
									<div>
										<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-up.png" /></a>
										<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-down.png" /></a>
										<div class="pagination"></div>
									</div>
								</div>-->
							</div>
							<div class="view-more tac goal-view-more-news">
								<a href="<?php echo MAIN_URL ?>/danh-muc-tin-tuc/tin-cong-ty/" class="site-btn-default btn-view-more">
									<span class="text">Xem thêm</span>
									<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-right.png" alt="Xem thêm tin tức"></span>
								</a>
							</div>
							<script>
								var home_news_slide_1 = new Swiper('#home_news_slide_1 .swiper-container', {
									pagination: '#home_news_slide_1 .pagination',
									speed: 1200,
									slidesPerView: 3,
									spaceBetween: 30,
									paginationClickable: true,
									nextButton: '#home_news_slide_1 .next',
									prevButton: '#home_news_slide_1 .prev',
									breakpoints: {
										480: {
											slidesPerView: 1,
											spaceBetween: 20
										},
										640: {
											slidesPerView: 3,
											spaceBetween: 30
										}
									}
								});
							</script>
						</div>

						<div id="tin_39" class="content-item">
							<div class="home-news-slide" id="home_news_slide_1">
								<div class="swiper-container">
									<div class="swiper-wrapper">


<div class="swiper-slide goal-view-details-news">
<div class="news-thumbnail">
<div class="head dtb">
	<div class="date dtbc">
		<div class="day">25</div>
		<div class="month-year">05/2017</div>
	</div>
	<h3 class="title dtbc"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/tien-thi-cong-du-an-vinhomes-imperia-hai-phong/">Tiến độ thi công dự án Vinhomes Imperia Hải Phòng Update đến 31/7/2017</a></h3>
</div>
<div class="img"><a href="<?php echo MAIN_URL ?>/danh-sach-tin-tuc/tien-thi-cong-du-an-vinhomes-imperia-hai-phong/"><img src="<?php echo MAIN_URL ?>/wp-content/uploads/2017/03/tien-do-thi-cong-du-an-vinhomes-imperia-hai-phong-ava.jpg" alt="#"></a></div>
</div>
</div>

									</div>
								</div>
								<!--<div class="control">
									<div>
										<a href="#" class="prev"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-up.png" /></a>
										<a href="#" class="next"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-down.png" /></a>
										<div class="pagination"></div>
									</div>
								</div>-->
							</div>
							<div class="view-more tac goal-view-more-news">
								<a href="<?php echo MAIN_URL ?>/danh-muc-tin-tuc/tien-do-du-an/" class="site-btn-default btn-view-more">
									<span class="text">Xem thêm</span>
									<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-right.png" alt="Xem thêm tin tức"></span>
								</a>
							</div>
							<script>
								var home_news_slide_1 = new Swiper('#home_news_slide_1 .swiper-container', {
									pagination: '#home_news_slide_1 .pagination',
									speed: 1200,
									slidesPerView: 3,
									spaceBetween: 30,
									paginationClickable: true,
									nextButton: '#home_news_slide_1 .next',
									prevButton: '#home_news_slide_1 .prev',
									breakpoints: {
										480: {
											slidesPerView: 1,
											spaceBetween: 20
										},
										640: {
											slidesPerView: 3,
											spaceBetween: 30
										}
									}
								});
							</script>
						</div>

			</div>
		</div>
	</div>
</div>
</div>
</div>

<script>
// jQuery(document).ready(function($){
//     siteTabs('#home_news_site_tabs');
// });
</script>
</section>
</section>
<section class="section section-10">
	<div id="site-form-register" class="home-register site-form-register" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/teaser/parttern.png?v=2');">
<div class="container-fluid">
<div class="row">
<div class="col-md-offset-2 col-md-8">
	<form action="" method="post" id="frm-register-submit" class="goal-submit-form-register">

		<input name="nonce" type="hidden" value="493cbc36b4"/>
		<input name="action" type="hidden" value="subscriber_submit_ajax"/>

		<div class="site-form-label">Đăng Ký</div>

		<div id="content-form">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group name">
						<input type="text" name="subscriber_name" placeholder="Họ tên *" class="form-control" value="" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group phone">
						<input type="number" name="subscriber_phone" placeholder="Số điện thoại *" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<input type="mail" name="subscriber_email" placeholder="Email *" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-12 subdivisions">
					<div class="form-group">
						<div class="row clearfix" id="checkboxList">
							<div class="col-md-3">
								<div class="form-label">Phân khu:</div>
							</div>
							<div class="col-md-9">
								<div class="row">
																																				<div class="col-md-3">
												<div class="checkbox">
													<label><input name="subdivsions_term" class="subdivsions-term" type="checkbox" value="74">Boutique House</label>
												</div>
											</div>
																								<div class="col-md-3">
												<div class="checkbox">
													<label><input name="subdivsions_term" class="subdivsions-term" type="checkbox" value="8">The Paris</label>
												</div>
											</div>
																								<div class="col-md-3">
												<div class="checkbox">
													<label><input name="subdivsions_term" class="subdivsions-term" type="checkbox" value="11">The Venice</label>
												</div>
											</div>
																								<div class="col-md-3">
												<div class="checkbox">
													<label><input name="subdivsions_term" class="subdivsions-term" type="checkbox" value="9">The Manhattan</label>
												</div>
											</div>
																								<div class="col-md-3">
												<div class="checkbox">
													<label><input name="subdivsions_term" class="subdivsions-term" type="checkbox" value="10">The Monaco</label>
												</div>
											</div>
																																	</div>
							</div>

							<input type="hidden" name="subdivsions_id_array" id="subdivsions-id-array">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<textarea name="subscriber_content" placeholder="Nội dung" class="form-control"></textarea>
					</div>
				</div>
			</div>
			<div class="tac">
				<button class="site-btn-default btn-view-more white" type="submit" name="register_submit" id="register_submit">
					<span class="text">Gửi</span>
					<span class="icon"><img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/icon-arrow-right.png" alt="Xem thêm tin tức"></span>
				</button>
			</div>
		</div>
	</form>

	<!-- show message -->
	<div class="message-warning"></div>
</div>
</div>
</div>
<div class="home-register-bg">
<div class="img hidden-devide-768" style="background-image: url('<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/home-register-bg.jpg')"></div>
</div>
</div>

<!-- ajax handle -->
<script type="text/javascript">
jQuery(document).ready(function($) {

// get value subdivision ís checked
var subdivsionArrTerm = [];

$('#checkboxList').on('change', 'input[type=checkbox]', function() {
var this_el = $(this);
var this_val = this_el.val();

if (this_el.attr('checked')) {
	subdivsionArrTerm.push(this_val);
} else {
	var index = subdivsionArrTerm.indexOf(this_val);
	subdivsionArrTerm.splice(index, 1);
}


if( typeof subdivsionArrTerm !== 'undefined' && subdivsionArrTerm.length > 0 ) {
	$('#subdivsions-id-array').val(subdivsionArrTerm);
} else {
	$('#subdivsions-id-array').val('0');
}

});


// submit form action
$('#frm-register-submit').submit(function(evt) {
            evt.preventDefault();
            var form = $(this);
            var form_content = $('#content-form');
            var form_msg = $('.message-warning');

            $.ajax({
                url: wp_vars.ajaxurl,
                type: 'POST',
                dataType: 'json',
                data: form.serialize()
            })
            .done(function (response) {
                if (response.success == true) {
                    form_content.html('');
                }

                if(response.msg) {
                    form_msg.html(response.msg);
                }
            })
            .fail(function () {
                console.log("Error!");
            });
        });
    });
</script>
			</section>


<?php get_footer();
