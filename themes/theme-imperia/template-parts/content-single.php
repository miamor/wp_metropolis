<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<div class="section-content clearfix">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="metadata">
			<time><?php echo date('d/m/Y', get_post_time()) ?></time>
		</div>
		<!-- excerpt -->
		<?php twentysixteen_excerpt(); ?>
		<!-- excerpt end -->

		<div class="the-content clearfix">
			<?php
				the_content();

			/*	wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

			/*	if ( '' !== get_the_author_meta( 'description' ) ) {
					get_template_part( 'template-parts/biography' );
				} */
			?>

		</div> <!-- .the-content -->
	</div> <!-- .section-content -->
