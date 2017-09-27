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

// display pages templates
/*$pages = get_pages();
foreach ($pages as $page_data) {
     $content = apply_filters('the_content', $page_data->post_content);
     $title = $page_data->post_title;
     echo $content;
}
*/

$childArgs = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order',
	'child_of' => 101
);
$childList = get_pages($childArgs);
foreach ($childList as $child) {
	$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $child->ID ), 'large' ); ?>

  <section <?php post_class($child->post_name); ?> style="background-image: url(<?php echo $feat_image[0]; ?>)">

  <?php echo apply_filters( 'the_content', $child->post_content); ?>

  </section>
<?php } ?>


<!-- mat bang dien tich -->
<div id="mat-bang-dien-hinh" class="section section-surface posr">
    <div class="posa layer layer-1"></div>
    <div class="posa layer layer-2"></div>

    <div class="posr clearfix">
        <div class="block grid9 clearfix">
            <div class="section-title scroll-normal center has-line">
                <div class="dtb">
                    <h2 class="dtbc">
                        <strong>Mặt bằng</strong>
                        <span>Vinhomes</span>
                        <span>Metropolis</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="tabbed">
            <ul class="tab-title lv1 grid9 lsn tac clearfix">
                <li><a href="#m1">M1</a></li>
                <li><a href="#m2">M2</a></li>
                <li><a href="#m3">M3</a></li>
            </ul>

            <div id="m1" class="tab-content">
                <div class="block clearfix odd">
                    <div class="grid9">
                        <div class="description">
                            <p><strong>TOÀ M1 - TRÁI TIM CỦA VINHOMES METROPOLIS</strong></p>
                            <p>Với chiều cao 41 tầng, tòa M1 nằm cận kề với khối tháp văn phòng, trường Tiểu học và THCS Vinschool và tiếp giáp gần nhất với mặt đường Liễu Giai và Kim Mã. Đặt trên khối đế là trung tâm thương mại hiện đại, M1 kết nối với hai tòa tháp còn lại bằng khu cảnh quan và tiện ích trên tầng 4. Từ đây, tất cả các cư dân được thỏa sức tận hưởng tầm nhìn vào thành phố sôi động và thư giãn với những không gian xanh và tiện ích đẳng cấp.</p><br/>Thông tin về từng loại mục đích sử dụng và phần diện tích sử dụng chung đối và tòa cao tầng được thể hiện chi tiết tại Hợp đồng mua bán. </div>
                    </div>
                    <div id="swiper-slide-m1" class="grid10 fl swiper-container" data-options='{
						"speed": 1000,
						"pagination": "#swiper-slide-m1 .slide-paginates",
						"paginationClickable": true }'>
                        <ul class="swiper-wrapper lsn">
                            <li class="swiper-slide">
                                <object>
								<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
									<image style="overflow:visible;" width="1100" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/M1_MBDH.jpg" ></image>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_01.png" class="st0" points="362.5,252 362.5,340.5 233,340.5 233,211 315,211 314.5,252.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_02.png" class="st0" points="230,58 393,58 393,145 327,145 326,181 230,181 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_03.png" class="st0" points="395.5,84 477.5,84 477.5,179 471.5,179 471,183.5 449,183.5 448,147.5 395.5,146 "/>
									<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_04.png" x="483" y="97.5" class="st0" width="161.5" height="83.5"/>
									<polyline data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_05.png" class="st0" points="772,58 663.5,58 663.5,97.5 647.5,97.5 647.5,181 731,181 731,146 789,145.5 789,110.5 773,110.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_06.png" class="st0" points="809.5,58 809.5,110 792,110 792,145.5 852,145.5 852,181 898,181 898,112 882.5,112 882.5,58 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_07.png" class="st0" points="917,58 917,112 900.5,112 900.5,181 1022.5,181 1022.5,60 "/>
									<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_08.png" x="925.5" y="211" class="st0" width="97" height="129.5"/>
									<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_09.png" x="853" y="211" class="st0" width="67.5" height="102.5"/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_10.png" class="st0" points="849,252 849,313.5 711.5,313.5 711.5,211 728,211 728.5,250 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_11.png" class="st0" points="617.5,249.5 617.5,313.5 706,313.5 706,209 666.5,211 666.5,215.5 602,215.5 602,248.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_11A.png" class="st0" points="598,216 598,249.5 583.5,249.5 583.5,313.5 509,313.5 509,281.5 492.5,281 492.5,213 540.5,213 540.5,218 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_12.png" class="st0" points="489.5,280 477.5,280 477.5,313.5 367.5,313.5 367.5,252 448,252 448.5,209 489.5,209 "/>
								</svg>
							</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/M1.png" alt="" />
                            </li>
                            <li class="swiper-slide">
                                <object>
								<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
									<image style="overflow:visible;" width="1100" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/M1_MB_tang_4.jpg" ></image>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_01.png" class="st0" points="363,249.5 315.5,249.5 315.5,207 231.5,207 231.5,342.5 363,342.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_02.png" class="st0" points="389.5,58 389.5,143 326.5,143 326.5,181 231.5,181 231.5,58 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_03.png" class="st0" points="477,179 477,84.5 395,84.5 395,144.5 447.5,144.5 446.5,179 "/>
									<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_08.png" x="924.5" y="207" class="st0" width="96" height="134.5"/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_09.png" class="st0" points="895.5,207 895.5,228.5 851.5,228.5 851.5,311.5 919,311.5 919,207 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_10.png" class="st0" points="711,207 711,314 847,314 847,249.5 730.5,250.5 728,207 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_11.png" class="st0" points="601,215 601,248.5 616.5,248.5 616.5,314 707.5,314 707.5,207 663.5,207 664,214 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_11A.png" class="st0" points="492.5,207 492.5,281.5 507.5,281.5 507.5,314 583.5,314 583.5,249 598.5,248 598.5,214.5 540,214.5 540.5,207 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_12.png" class="st0" points="365.5,250 365.5,314 475.5,314 475.5,282 489.5,282 489.5,207 447.5,207 447.5,251 "/>
								</svg>
							</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/M1.png" alt="" />
                            </li>
                            <li class="swiper-slide">
                                <object>
								<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
									<image style="overflow:visible;" width="1100" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/M1_MB_tang_23.jpg" ></image>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_01.png" class="st0" points="314.5,210.5 314.5,249.5 359.5,249.5 359.5,339.5 233,339.5 233,210.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_02.png" class="st0" points="387.5,61.5 387.5,146.5 325,146.5 325,182.5 231,182.5 231,61.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_03.png" class="st0" points="393,145.5 444,145.5 444,182.5 474.5,182.5 474.5,86.5 393,86.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_07.png" class="st0" points="908.5,61.5 908.5,113 891.5,113 891.5,182.5 1009.5,182.5 1009.5,61.5 "/>
									<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_08.png" x="915.5" y="210.5" class="st0" width="94" height="130"/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_09.png" class="st0" points="844,229 884,229 884,210.5 909.5,210.5 909.5,311.5 844,311.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_10.png" class="st0" points="838.5,251.5 722,251.5 722,210.5 703.5,210.5 703.5,311.5 838.5,311.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_11.png" class="st0" points="597,217.5 597,249 611.5,249 611.5,311.5 700,311.5 700,210.5 659,210.5 659,217.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_11A.png" class="st0" points="579.5,249 592.5,249 592.5,217 535.5,217 535.5,210.5 488.5,210.5 488.5,279 505.5,279 506,311.5 577.5,311.5 "/>
									<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/large/M1_12.png" class="st0" points="444.5,250 444.5,210.5 484.5,210.5 484.5,279 474.5,279 474.5,311.5 364.5,311.5 364.5,249.5 "/>
								</svg>
							</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m1/M1.png" alt="" />
                            </li>
                        </ul>

                        <script>
                            jQuery(document).ready(function($) {
                                $('.st0').click(function(event) {
                                    var large = $(this).data('src');
                                    var top = $(document).scrollTop() + 30;
                                    $('#surface-popup .popup-inner').css('margin-top', top);
                                    $('#surface-popup img').attr('src', large);
                                    $('#surface-popup').fadeIn().addClass('opened');
                                });
                            });
                        </script>

                        <div class="slide-paginates"></div>
                    </div>

                </div>
            </div>

            <div id="m2" class="tab-content">
                <div class="block clearfix odd">
                    <div class="grid9">
                        <div class="description">
                            <p><strong>TOÀ M2 - SỰ LỰA CHỌN HOÀN HẢO</strong></p>
                            <p>Tòa M2 sở hữu tọa độ vàng trong lòng dự án, là tòa căn hộ kết nối 2 tòa M1 và tòa M3, M2 nằm đối diện vườn nổi tiểu cảnh độc đáo, hai bên là hai khu tiện ích trung tâm bao gồm khu bể bơi rộng rãi và khu vui chơi trẻ em hấp dẫn. <br><br>Tòa M2 nằm song song, tiếp giáp với mặt đường Kim Mã nhiều nhất, và có tầm nhìn khoáng đạt, rộng mở ra cả 4 hồ.</p><br/>Thông tin về từng loại mục đích sử dụng và phần diện tích sử dụng chung đối và tòa cao tầng được thể hiện chi tiết tại Hợp đồng mua bán.</p>
                        </div>
                    </div>
                    <div id="swiper-slide-m2" class="grid10 fl swiper-container" data-options='{
						"speed": 1000,
						"pagination": "#swiper-slide-m2 .slide-paginates",
						"paginationClickable": true }'>
                        <ul class="swiper-wrapper lsn">
                            <li class="swiper-slide">
                                <object>
								<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">

									<image style="overflow:visible;" width="1101" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/M2_MBDH.png" ></image>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_01.jpg" fill="#FFFFFF" points="329.928,253.68 329.928,222.661 306.558,222.661 306.558,304.62 323.897,304.62 323.897,318.3
										424.128,318.3 424.128,253.68 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_02.jpg" fill="#FFFFFF" points="191.268,222.661 191.298,334.859 290.928,334.859 290.928,304.62 306.558,304.62 306.558,222.661
										"/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_03.jpg" fill="#FFFFFF" points="291.077,103.169 291.077,68.64 191.268,68.64 191.268,200.999 306.798,200.759 306.798,171.511
									306.798,103.169 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_04.jpg" fill="#FFFFFF" points="323.897,90.24 323.897,103.169 306.798,103.169 306.798,171.511 329.928,171.511 329.928,155.22
									425.027,155.22 425.027,90.24 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_05.jpg" fill="#FFFFFF" points="463.208,106.289 463.208,90.24 425.027,90.24 425.027,155.22 463.548,155.22 463.548,193.979
										529.328,193.979 529.328,106.289 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_06.jpg" fill="#FFFFFF" points="529.328,106.289 529.328,193.979 569.119,193.979 569.119,165.419 594.259,165.419 594.259,106.289 x`
										"/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_07.jpg" fill="#FFFFFF" points="699.633,155.04 699.633,106.289 594.259,106.289 594.259,165.419 624.139,165.419 624.139,193.229
									684.049,193.229 684.049,155.04 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_08.jpg" fill="#FFFFFF" points="732.768,90.75 732.768,106.289 699.633,106.289 699.633,155.04 684.049,155.04 684.049,193.229
										733.008,193.229 733.008,154.56 802.787,154.56 802.787,90.75 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_09.jpg" fill="#FFFFFF" points="872.418,103.14 872.418,90.75 802.787,90.75 802.787,154.56 867.197,154.56 867.197,185.22
										887.508,185.22 887.508,103.14 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_10.jpg" fill="#FFFFFF" points="1003.758,73.68 904.578,73.68 904.578,103.14 887.508,103.14 887.508,185.22 1003.758,185.22 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_11.jpg" fill="#FFFFFF" points="888.498,207.78 888.498,235.8 887.508,235.8 887.508,304.739 904.578,304.739 904.578,339.479
										1004.178,339.479 1004.178,207.78 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_11A.jpg" fill="#FFFFFF" points="865.697,235.8 865.697,253.919 768.648,253.919 768.648,317.88 872.418,317.88 872.418,304.739
									887.508,304.739 887.508,235.8 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_12.jpg" fill="#FFFFFF" points="733.787,253.919 733.787,214.32 663.469,214.32 663.469,299.52 732.766,299.52 732.766,317.88
										768.648,317.88 768.648,253.919 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_12A.jpg" fill="#FFFFFF" points="625.607,214.32 625.607,244.95 568.519,244.95 568.519,215.31 527.328,215.31 527.328,299.52
									663.469,299.52 663.469,214.32 "/>

									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_15.jpg" fill="#FFFFFF" points="462.288,215.31 462.288,253.68 424.128,253.68 424.128,318.3 463.457,318.3 463.457,299.52
										527.328,299.52 527.328,215.31 "/>
								</svg>
							</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/M2.jpg" alt="" />
                            </li>
                            <li class="swiper-slide">
                                <object>
								<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
									<image style="overflow:visible;" width="1100" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/M2_MB_T4.png" ></image>
									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_01.jpg" fill="#FFFFFF" points="329.928,253.68 329.928,222.661 306.558,222.661 306.558,304.62 323.897,304.62 323.897,318.3
										424.128,318.3 424.128,253.68 "/>
										<!--
									<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_02.jpg" fill="#FFFFFF" points="191.268,222.661 191.298,334.859 290.928,334.859 290.928,304.62 306.558,304.62 306.558,222.661
										"/>


																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_03.jpg" fill="#FFFFFF" points="291.077,103.169 291.077,68.64 191.268,68.64 191.268,200.999 306.798,200.759 306.798,171.511
																					306.798,103.169 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_04.jpg" fill="#FFFFFF" points="323.897,90.24 323.897,103.169 306.798,103.169 306.798,171.511 329.928,171.511 329.928,155.22
																					425.027,155.22 425.027,90.24 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_05.jpg" fill="#FFFFFF" points="463.208,106.289 463.208,90.24 425.027,90.24 425.027,155.22 463.548,155.22 463.548,193.979
																						529.328,193.979 529.328,106.289 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_06.jpg" fill="#FFFFFF" points="529.328,106.289 529.328,193.979 569.119,193.979 569.119,165.419 594.259,165.419 594.259,106.289 x`
																						"/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_07.jpg" fill="#FFFFFF" points="699.633,155.04 699.633,106.289 594.259,106.289 594.259,165.419 624.139,165.419 624.139,193.229
																					684.049,193.229 684.049,155.04 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_08.jpg" fill="#FFFFFF" points="732.768,90.75 732.768,106.289 699.633,106.289 699.633,155.04 684.049,155.04 684.049,193.229
																						733.008,193.229 733.008,154.56 802.787,154.56 802.787,90.75 "/>
																						-->

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_09.jpg" fill="#FFFFFF" points="872.418,103.14 872.418,90.75 802.787,90.75 802.787,154.56 867.197,154.56 867.197,185.22
																						887.508,185.22 887.508,103.14 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_10.jpg" fill="#FFFFFF" points="1003.758,73.68 904.578,73.68 904.578,103.14 887.508,103.14 887.508,185.22 1003.758,185.22 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_11.jpg" fill="#FFFFFF" points="888.498,207.78 888.498,235.8 887.508,235.8 887.508,304.739 904.578,304.739 904.578,339.479
																						1004.178,339.479 1004.178,207.78 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_11A.jpg" fill="#FFFFFF" points="865.697,235.8 865.697,253.919 768.648,253.919 768.648,317.88 872.418,317.88 872.418,304.739
																					887.508,304.739 887.508,235.8 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_12.jpg" fill="#FFFFFF" points="733.787,253.919 733.787,214.32 663.469,214.32 663.469,299.52 732.766,299.52 732.766,317.88
																						768.648,317.88 768.648,253.919 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_12A.jpg" fill="#FFFFFF" points="625.607,214.32 625.607,244.95 568.519,244.95 568.519,215.31 527.328,215.31 527.328,299.52
																					663.469,299.52 663.469,214.32 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_15.jpg" fill="#FFFFFF" points="462.288,215.31 462.288,253.68 424.128,253.68 424.128,318.3 463.457,318.3 463.457,299.52
																						527.328,299.52 527.328,215.31 "/>
																				</svg>
																			</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/M2.jpg" alt="" />
                            </li>
                            <li class="swiper-slide">
                                <object>
																				<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																					viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
																					<image style="overflow:visible;" width="1100" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/M2_MB_T23.png" ></image>
																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_01.jpg" fill="#FFFFFF" points="329.928,253.68 329.928,222.661 306.558,222.661 306.558,304.62 323.897,304.62 323.897,318.3
																						424.128,318.3 424.128,253.68 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_02.jpg" fill="#FFFFFF" points="191.268,222.661 191.298,334.859 290.928,334.859 290.928,304.62 306.558,304.62 306.558,222.661
																						"/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_03.jpg" fill="#FFFFFF" points="291.077,103.169 291.077,68.64 191.268,68.64 191.268,200.999 306.798,200.759 306.798,171.511
																					306.798,103.169 "/>
																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_04.jpg" fill="#FFFFFF" points="323.897,90.24 323.897,103.169 306.798,103.169 306.798,171.511 329.928,171.511 329.928,155.22
																					425.027,155.22 425.027,90.24 "/>

																						<!--
																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_05.jpg" fill="#FFFFFF" points="463.208,106.289 463.208,90.24 425.027,90.24 425.027,155.22 463.548,155.22 463.548,193.979
																						529.328,193.979 529.328,106.289 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_06.jpg" fill="#FFFFFF" points="529.328,106.289 529.328,193.979 569.119,193.979 569.119,165.419 594.259,165.419 594.259,106.289 x`
																						"/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_07.jpg" fill="#FFFFFF" points="699.633,155.04 699.633,106.289 594.259,106.289 594.259,165.419 624.139,165.419 624.139,193.229
																					684.049,193.229 684.049,155.04 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_08.jpg" fill="#FFFFFF" points="732.768,90.75 732.768,106.289 699.633,106.289 699.633,155.04 684.049,155.04 684.049,193.229
																						733.008,193.229 733.008,154.56 802.787,154.56 802.787,90.75 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_09.jpg" fill="#FFFFFF" points="872.418,103.14 872.418,90.75 802.787,90.75 802.787,154.56 867.197,154.56 867.197,185.22
																						887.508,185.22 887.508,103.14 "/>
																						-->

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_10.jpg" fill="#FFFFFF" points="1003.758,73.68 904.578,73.68 904.578,103.14 887.508,103.14 887.508,185.22 1003.758,185.22 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_11.jpg" fill="#FFFFFF" points="888.498,207.78 888.498,235.8 887.508,235.8 887.508,304.739 904.578,304.739 904.578,339.479
																						1004.178,339.479 1004.178,207.78 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_11A.jpg" fill="#FFFFFF" points="865.697,235.8 865.697,253.919 768.648,253.919 768.648,317.88 872.418,317.88 872.418,304.739
																					887.508,304.739 887.508,235.8 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_12.jpg" fill="#FFFFFF" points="733.787,253.919 733.787,214.32 663.469,214.32 663.469,299.52 732.766,299.52 732.766,317.88
																						768.648,317.88 768.648,253.919 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_12A.jpg" fill="#FFFFFF" points="625.607,214.32 625.607,244.95 568.519,244.95 568.519,215.31 527.328,215.31 527.328,299.52
																					663.469,299.52 663.469,214.32 "/>

																					<polygon class="st0" data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/large/M2_15.jpg" fill="#FFFFFF" points="462.288,215.31 462.288,253.68 424.128,253.68 424.128,318.3 463.457,318.3 463.457,299.52
																						527.328,299.52 527.328,215.31 "/>
																				</svg>
																			</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m2/M2.jpg" alt="" />
                            </li>
                        </ul>

                        <script>
                            jQuery(document).ready(function($) {
                                $('.st0').click(function(event) {
                                    var large = $(this).data('src');
                                    var top = $(document).scrollTop() + 30;
                                    $('#surface-popup .popup-inner').css('margin-top', top);
                                    $('#surface-popup img').attr('src', large);
                                    $('#surface-popup').fadeIn().addClass('opened');
                                });
                            });
                        </script>

                        <div class="slide-paginates"></div>
                    </div>

                </div>
            </div>

            <div id="m3" class="tab-content">
                <div class="block clearfix odd">
                    <div class="grid9">
                        <div class="description">
                            <p><strong>TOÀ M3 - SỰ LỰA CHỌN HOÀN HẢO</strong></p>
                            <p>Vị trí kế cận trường học Vinschool và tiếp giáp với Đại sứ quán Nhật Bản, tòa M3 là lựa chọn hoàn hảo dành cho những cư dân văn minh, hiện đại. M3 sở hữu vị trí đặc biệt, nằm gọn trong lòng dự án, vì thế lựa chọn căn hộ tại đây, chủ nhân tương lai sẽ được tận hưởng không gian yên tĩnh, cách xa mặt đường đủ để không bị làm phiền bởi âm thanh thành phố.</p><br/>Thông tin về từng loại mục đích sử dụng và phần diện tích sử dụng chung đối và tòa cao tầng được thể hiện chi tiết tại Hợp đồng mua bán. </div>
                    </div>
                    <div id="swiper-slide-m3" class="grid10 fl swiper-container" data-options='{
																		"speed": 1000,
																		"pagination": "#swiper-slide-m3 .slide-paginates",
																		"paginationClickable": true }'>
                        <ul class="swiper-wrapper lsn">
                            <li class="swiper-slide">
                                <object>
																			<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																				viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
																				<image style="overflow:visible;" width="1115" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/M3_MBDH.jpg" ></image>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_01.png" class="st0" points="803.5,108.5 803.5,145 864,145 864,183 911.5,183 911.5,108.5 897,108.5 896.5,53.5 816.5,53.5 817.5,108 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_02.png" class="st0" points="915,109 915,183 1038,183 1038,53.5 925,53.5 925,108.5 "/>
																				<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_03.png" x="936" y="209.5" class="st0" width="102" height="136.5"/>
																				<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_04.png" x="862.5" y="209.5" class="st0" width="70" height="106.5"/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_05.png" class="st0" points="857.5,252 857.5,316 720,316 720,209.5 740,209.5 740.5,251.5 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_06.png" class="st0" points="716.5,209.5 716.5,316 627,316 627,249.5 609.5,250 609.5,216.5 674.5,216.5 674,209.5 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_07.png" class="st0" points="606,216.5 606,250.5 592,250.5 592,316 512.5,316 512.5,285 499,284 499,212.5 547,212.5 547.5,217.5"/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_08.png" class="st0" points="451,212.5 496.5,212.5 496.5,284.5 484.5,284.5 483.5,316 370,316 370,252 451,252 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_09.png" class="st0" points="231.5,212.5 231.5,346 366,346 366,251.5 318.5,251.5 318.5,209.5 231.5,209.5 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_10.png" class="st0" points="231.5,53.5 397.5,53.5 397.5,82 397.5,146 329.5,146 329.5,183 231.5,183 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_11.png" class="st0" points="488.5,80.5 400.5,80.5 400.5,145.5 452,145.5 453,183 488.5,183 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_11A.png" class="st0" points="654.5,96 490.5,96 492.5,183 654.5,183 "/>
																				<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_12.png" class="st0" points="659.5,96 659.5,155 674,155 674,183 740,183 740,146 800.5,145.5 800.5,108.5 782,108.5 782,53.5 669.5,53.5 670.5,96 "/>
																			</svg>
																			</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/M3.png" alt="" />
                            </li>
                            <li class="swiper-slide">
                                <object>
																				<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																					viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
																					<image style="overflow:visible;" width="1115" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/M3_MBDH_tang4.jpg" ></image>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_01.png" class="st0" points="861.06,144.41 801.86,144.41 801.86,107.1 817.29,107.1 816.79,52.38 893.4,52.38 893.4,107.6
																						909.82,107.1 909.82,178.74 862.06,178.74 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_02.png" class="st0" points="928.72,108.59 912.8,108.59 912.8,178.74 1038.17,178.74 1038.17,54.37 929.72,54.37 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_08.png" class="st0" points="451,212.5 496.5,212.5 496.5,284.5 484.5,284.5 483.5,316 370,316 370,252 451,252 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_09.png" class="st0" points="356.11,252.86 356.11,347.39 221.3,347.39 221.3,211.57 309.35,211.57 309.35,249.88 308.85,252.86 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_10.png" class="st0" points="319.8,143.42 386.96,143.42 384.97,52.38 223.29,52.38 223.29,178.74 320.3,178.74 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_11.png" class="st0" points="444.67,144.41 390.94,144.41 390.94,79.74 477,79.74 479.99,178.74 444.67,178.74 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_11A.png" class="st0" points="482.48,95.66 482.48,178.74 650.13,178.74 648.14,95.66 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_12.png" class="st0" points="667.54,52.38 667.54,95.66 653.11,95.66 653.11,152.87 667.54,152.87 667.54,178.74 736.69,178.74 736.69,143.42 797.88,143.42 797.88,106.6 780.47,106.6 780.47,52.38 "/>
																				</svg>
																			</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/M3.png" alt="" />
                            </li>
                            <li class="swiper-slide">
                                <object>
																				<svg version="1.1" class="map-rooms" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																					viewBox="0 0 1100 400" style="enable-background:new 0 0 1100 400;" xml:space="preserve">
																					<image style="overflow:visible;" width="1115" height="400" xlink:href="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/M3_MBDH_tang23.jpg" ></image>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_01.png" class="st0" points="861.06,144.41 801.86,144.41 801.86,107.1 817.29,107.1 816.79,52.38 893.4,52.38 893.4,107.6
																						909.82,107.1 909.82,178.74 862.06,178.74 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_02.png" class="st0" points="913.94,113.01 933.59,113.01 933.59,58 1036.24,58 1036.24,181.78 913.94,181.78 "/>
																					<rect data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_03.png" x="939.48" y="213.22" class="st0" width="96.76" height="133.11"/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_04.png" class="st0" points="933.09,213.22 906.08,213.22 906.08,233.35 866.29,233.35 866.29,317.84 933.09,317.84 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_09.png" class="st0" points="356.11,252.86 356.11,347.39 221.3,347.39 221.3,211.57 309.35,211.57 309.35,249.88 308.85,252.86 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_10.png" class="st0" points="319.8,143.42 386.96,143.42 384.97,52.38 223.29,52.38 223.29,178.74 320.3,178.74 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_11.png" class="st0" points="444.67,144.41 390.94,144.41 390.94,79.74 477,79.74 479.99,178.74 444.67,178.74 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_11A.png" class="st0" points="482.48,95.66 482.48,178.74 650.13,178.74 648.14,95.66 "/>
																					<polygon data-src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/large/M3_12.png" class="st0" points="667.54,52.38 667.54,95.66 653.11,95.66 653.11,152.87 667.54,152.87 667.54,178.74 736.69,178.74 736.69,143.42 797.88,143.42 797.88,106.6 780.47,106.6 780.47,52.38 "/>
																				</svg>
																			</object>
                                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/surfaces/m3/M3.png" alt="" />
                            </li>
                        </ul>

                        <script>
                            jQuery(document).ready(function($) {
                                $('.st0').click(function(event) {
                                    var large = $(this).data('src');
                                    var top = $(document).scrollTop() + 30;
                                    $('#surface-popup .popup-inner').css('margin-top', top);
                                    $('#surface-popup img').attr('src', large);
                                    $('#surface-popup').fadeIn().addClass('opened');
                                });
                            });
                        </script>

                        <div class="slide-paginates"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- end mat bang dien tich -->

<div id="surface-popup" class="popup close-wrap">
    <div class="close-bg"></div>
    <div class="popup-inner">
        <img src="" alt="">
        <div class="close"></div>
    </div>
</div>


<div class="section section-home-news">
    <div class="container fluid">
        <div class="section-title scroll-normal center has-line">
            <div class="dtb">
                <h2 class="dtbc">
                    <strong>Tin tức</strong>
                    <span>Sự kiện</span>
                </h2>
            </div>
        </div>

        <div class="section-content">
            <div class="rm-pd">
                <ul class="news-list lsn fluid">
                    <?php wpb_postsbycategory('news', 10) ?>
                </ul>
            </div>
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
                <img src="http://metropolis.vinhomes.vn/wp-content/themes/metropolis/assets/images/ban-do-tien-ich.jpg" alt="">
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

<?php get_footer();
