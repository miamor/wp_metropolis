<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


</div>



	<div id="footer">
		<div class="posa logo-line">
			<img src="<?php echo MAIN_URL ?>/wp-content/themes/metropolis/assets/images/logo-line.png" alt="">
		</div>

		<div class="top-footer">
			<div class="container fluid">
				<div class="rm-pd">
<?php
// top footer
$page_id = 116;
$page_data = get_page( $page_id );
$content = apply_filters('the_content', $page_data->post_content);
echo $content;  ?>

				</div>
			</div>
		</div>

		<div class="posr clearfix">
			<div class="logo">
				<a href="<?php echo MAIN_URL ?>/"><img src="<?php header_image(); ?>" alt=""></a>
			</div>
		</div>

		<div class="bot-footer">
			<div class="container clearfix">
		<?php 	$page_id = 118;
				$page_data = get_page($page_id);
				$content = apply_filters('the_content', $page_data->post_content);
				echo $content;

				$page_id = 153;
				$page_data = get_page($page_id);
				$content = apply_filters('the_content', $page_data->post_content);
				echo $content;  ?>
			</div>
		</div>
	</div>

	<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/wp-embed.min.js?ver=4.4.11'></script>



<?php //wp_footer(); ?>
</body>
</html>
