<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 //get_header();

 $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( 181 ), 'large' );
 ?>


<div class="section section-tien-ich posr" style="background-image:url(<?php echo $feat_image[0] ?>)">
    <div class="posa layer layer-1"></div>
    <div class="posa layer layer-2">
        <img height="100%" src="<?php echo $feat_image[0]; ?>"/>
    </div>
    <div class="posa layer layer-pattern"></div>
    <div id="tien-ich" class="container posr clearfix">
        <div class="block grid3 clearfix">
            <div class="section-title scroll-normal center has-line">
                <div class="dtb">
                    <h2 class="dtbc">
                        <?php echo get_post(181)->post_content; // khung title ?>
                    </h2>
                </div>
            </div>
            <div class="section-content the-content desktop scroll-normal">
                <?php echo get_post(183)->post_content; // info ?>
            </div>
        </div>
    </div>
    <div class="layer-extend posa the-content desktop scroll-normal a-btn">
        <p style="padding: 0 0 0 10px; border-left: 1px solid #fff;">
            <?php echo get_post(185)->post_content; // info ?>
        </p>
    <!--    <a class="ban-do-tien-ich" href="http://metropolis.vinhomes.vn/ban-do-tien-ich/">Xem bản đồ tiện ích</a> -->
    </div>
</div>

<div class="section section-extend section-facilities-extend mobile">
<div class="container clearfix">
	<div class="section-content the-content scroll-normal">
		<p><?php echo get_post(183)->post_content; // info ?></p>
	</div>

	<div class="the-content scroll-normal a-btn">
		<p style="padding: 0 0 0 10px; border-left: 1px solid #fff;">
            <?php echo get_post(185)->post_content; // info ?>
        </p>
        <!--
		<p>
			<a class="ban-do-tien-ich" href="http://metropolis.vinhomes.vn/ban-do-tien-ich/">Xem bản đồ tiện ích</a>
		</p>
        -->
	</div>
</div>
</div>


<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
