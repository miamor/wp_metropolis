<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 $content = htmlspecialchars(strip_tags(get_the_content()));
 ?>

<li class="grid3" style="float: none; display: inline-block;">
	<div class="row posr">
		<a href="<?php echo $content ?>" target="_blank">
			<?php echo get_the_post_thumbnail() ?>
		</a>
		<h3>
			<a href="<?php echo $content ?>" target="_blank">
				<?php echo the_title() ?>
			</a>
			<time>Đăng ngày <?php echo date('d/m/Y', get_post_time()) ?></time>
		</h3>
	</div>
</li>
