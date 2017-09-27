<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>



<li class="grid3">
	<div class="row posr">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php twentysixteen_post_thumbnail(); ?></a>
		<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a> <time>Đăng ngày 24/05/2017</time></h3>' ); ?>
	</div>
</li>
