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

get_header(); ?>

<div class="section section-home-news section-page posr">
    <div class="posa layer layer-1"></div>
    <div class="posa layer layer-pattern"></div>

    <div class="container">
        <div class="section-title scroll-normal center has-line">
            <div class="dtb">
                <h2 class="dtbc">
                    <strong>Tin tức</strong>
                    <span>Sự kiện</span>
                </h2>
            </div>
        </div>

        <div class="section-content clearfix">
            <ul class="list-vertical lsn tac clearfix">
            <?php $category = get_category_by_slug('news');
            //wp_list_categories('child_of='.$category->term_id);
            $categories = get_categories('hide_empty=0&parent='.$category->term_id);
            echo '<li><a href="'.MAIN_URL.'/index.php/category/'.$category->slug.'">'.$category->name.'</a></li>';
            foreach ($categories as $oneCat) {
                echo '<li><a href="'.MAIN_URL.'/index.php/category/'.$category->slug.'/'.$oneCat->slug.'">'.$oneCat->name.'</a></li>';
            } ?>
            </ul>

            <ul class="news-list lsn fluid">
	<?php
    if ( have_posts() ) {
	   // Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'post-one' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
    } else echo '<p style="margin: 80px 0 100px; text-align: center;">Không tìm thấy bài đăng nào!</p>';
		?>

			</ul>
		</div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
