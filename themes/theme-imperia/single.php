<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="section section-page section-news-single posr">
    <div class="posa layer layer-1"></div>
    <div class="posa layer-pattern"></div>

	<div class="container-md clearfix">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
			/*	the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) ); */
			}

			// End of the loop.
		endwhile;
		?>

	<?php //get_sidebar( 'content-bottom' ); ?>


	<?php
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

		$args = array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'showposts'=> 3,  // Number of related posts that will be shown.
			'caller_get_posts'=> 1
		);

		$my_query = new wp_query($args);
		if( $my_query->have_posts() ) { ?>

			<div class="related-news">
		        <h3 class="tac ttu">Tin tức khác</h3>

		        <ul class="news-list lsn fluid">

	<?php	while ($my_query->have_posts()) {
				$my_query->the_post();
				echo '<li class="grid4">
	                <div class="row posr">';
				if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
					<h3>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h3>
				<?php } else { ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_post_meta($post->ID, 'Image',true) ?>" width="600" height="400" alt="<?php the_title_attribute(); ?>" /></a>
					<h3>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h3>
				<?php }
				echo '</div>
				</li>';
			} ?>

		        </ul>
    		</div> <!-- .related-news -->

<?php	}
	}
	$post = $backup;
	wp_reset_query();
	?>

	</div> <!-- .container-md -->
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
