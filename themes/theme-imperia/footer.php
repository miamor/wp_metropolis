<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


</div>



<section id="footer" class="section section-11">

<footer id="footer-text" class="body-footer">
<section class="section-1">
<div class="container-fluid">
<div class="row">
	<div class="col-md-offset-1 col-md-10">
	<div class="row">
		<div class="col-md-3">
			<a href="#" class="logo">
				<img src="<?php echo MAIN_URL ?>/wp-content/themes/theme-imperia/assets/images/site-logo-imperia-color.png" alt="Vinhomes Imperia &#8211; Website Chính Thức">
			</a>
		</div>
		<div class="col-md-3 box-text-1">
			<div class="box-label">Liên hệ &nbsp;/</div>
			<h1 class="title-company">CHỦ ĐẦU TƯ: TẬP ĐOÀN VINGROUP - CÔNG TY CP</h1>
			<div class="info-text">
				<div class="icon"><i class="fa fa-map-marker"></i></div>
				<div class="text">P. Thượng Lý, Q. Hồng Bàng, TP. Hải Phòng</div>
			</div>
			<div class="info-text">
				<div class="icon"><i class="fa fa-envelope-o"></i></div>
				<div class="text"><a href="mailto:v.vhimperia@vinhomes.vn">v.vhimperia@vinhomes.vn</a></div>
			</div>
			<div class="info-text goal-call-hotline">
				<div class="icon"><i class="fa fa-phone"></i></div>
				<div class="text"><a href="tel:1800 1179">1800 1179</a></div>
			</div>
		</div>
		<div class="col-md-3 box-text-2">
			<div class="box-label">Thông tin dự án &nbsp;/</div>
			<div class="info-text">
				<div class="text-full">
					<li id="menu-item-555" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-555"><a href="<?php echo MAIN_URL ?>/tong-quan-du-an/gioi-thieu-du-an/">Tổng quan</a></li>
<li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="<?php echo MAIN_URL ?>/dai-ly-phan-phoi/">Đại lý phân phối</a></li>
<li id="menu-item-557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-557"><a href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-tai-lieu/">Tài liệu bán hàng</a></li>
<li id="menu-item-137" class="menu-item menu-item-type-taxonomy menu-item-object-gallery_category menu-item-137"><a href="<?php echo MAIN_URL ?>/danh-muc-thu-vien/thu-vien-hinh-anh/">Thư viện</a></li>
<li id="menu-item-556" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-556"><a href="<?php echo MAIN_URL ?>/danh-muc-tin-tuc/tin-bao-chi/">Tin tức</a></li>
<li id="menu-item-1203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1203"><a href="<?php echo MAIN_URL ?>/chinh-sach-bao-mat/">Chính sách bảo mật</a></li>
				</div>
			</div>
		</div>
		<div class="col-md-3 box-text-3">
			<div class="box-label">Lưu ý &nbsp;/</div>
			<div class="info-text">
				<div class="text-full">* Hình ảnh chỉ mang tính chất minh họa. Bố trí mặt bằng biệt thự chỉ mang tính định hướng gợi ý tham khảo. Thông số tại bản vẽ là tương đối, thông số chính thức của từng căn biệt thự sẽ được quy định tại văn bản ký kết giữa Chủ đầu tư và Khách hàng.</div>
			</div>
		</div>

		<script>
			jQuery(document).ready(function($){
				var _window = $(window);
				var w_width = _window.width();

				if ( w_width > 960 ) {
					var box_max_height = 0;
					var box = $('div[class*="box-text-"]');

					box.each(function(){
						var height_cur = $(this).outerHeight();

						if ( height_cur > box_max_height ) {
								box_max_height = height_cur;
						}
					});

					box.css({'min-height': box_max_height});
				}
			});
		</script>
	</div>
	</div>
</div>
</div>
</section>
<section class="section-2 tac">
<p style="margin-bottom: 0;">&#169; Vinhomes Imperia 2017. All Right Reserved</p>
</section>
</footer>
</section>
</div>
</div>



<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/wp-embed.min.js?ver=4.7.2'></script>
</body>
</html>
