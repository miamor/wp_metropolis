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
$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( 177 ), 'large' ); ?>


<div class="section section-noi-that posr" style="background-image:url(<?php echo $feat_image[0] ?>)">
    <div class="posa layer layer-1"></div>
    <div class="posa layer layer-2"></div>
    <div class="posa layer layer-3"></div>
    <div class="posa layer layer-pattern"></div>
    <div class="container posr clearfix">
        <div class="block grid4 clearfix">
            <div class="section-title scroll-normal center white has-line">
                <div class="dtb">
                <h2 class="dtbc">
                    <?php echo get_post(177)->post_content; // khung title ?>
                </h2>
                </div>
            </div>
            <div class="section-content the-content desktop a-btn scroll-normal list-triangle">
                <?php echo get_post(179)->post_content; // khung title ?>
                <p style="text-align: center;"><a href="<?php echo MAIN_URL ?>/index.php/category/thu-vien-anh/">Thư viện ảnh/video</a></p>
            </div>
        </div>
    </div>
</div>

<div class="section section-extend mobile">
<div class="container clearfix">
	<div class="section-content the-content a-btn scroll-normal list-triangle">
        <?php echo get_post(179)->post_content; // khung title ?>
        <p style="text-align: center;"><a href="<?php echo MAIN_URL ?>/index.php/category/thu-vien-anh/">Thư viện ảnh/video</a></p>
	</div>
</div>
</div>



<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
