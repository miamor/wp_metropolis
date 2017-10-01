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

$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( 168 ), 'large' );
?>

<div id="gioi-thieu-du-an" class="section section-gioi-thieu-du-an posr" style="background-image:url(<?php echo $feat_image[0] ?>)">
    <div class="posa layer layer-1"></div>
    <div class="posa layer layer-2"></div>
    <div class="posa layer layer-3"></div>
    <div class="posa layer layer-pattern"></div>
    <div class="container posr clearfix">
        <div class="block grid4 clearfix">
            <div class="section-title scroll-normal center has-line">
                <div class="dtb">
                    <h2 class="dtbc">
                       <?php echo get_post(168)->post_content; // khung title ?>
                    </h2>
                </div>
            </div>
            <div class="section-content list-triangle the-content desktop clearfix scroll-normal">
                <?php echo get_post(170)->post_content; // info ?>
            </div>
        </div>
    </div>
</div>

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
