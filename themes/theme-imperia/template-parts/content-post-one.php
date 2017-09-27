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
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php echo get_the_post_thumbnail(); ?>
		</a>
		<h3>
			<a href="<?php echo esc_url( get_permalink() ) ?>">
				<?php echo the_title() ?>
			</a>
			<time>Đăng ngày <?php echo date('d/m/Y', get_post_time()) ?></time>
		</h3>
	</div>
</li>
