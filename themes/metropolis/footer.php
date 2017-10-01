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
					<?php $contents = explode('<hr/>', get_post(198)->post_content); ?>
					<div class="ft-note grid4"><?php echo $contents[0] ?></div>
					<ul class="ft-nav grid7 lsn">
						<li class="ttu"><?php echo implode('</li><li class="ttu">', explode('---', preg_replace('/\n/', '', trim($contents[1])))) ?></li>
					</ul>
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

				<div class="section-title scroll-normal white fl">
					<div class="dtb">
						<h2 class="dtbc">
							<?php echo get_post(196)->post_content; ?>
						</h2>
					</div>
				</div>

				<div class="clear-mb"></div>

				<?php
					$page_data = get_post(192);
					$content = htmlspecialchars_decode(trim(preg_replace('/\s+/', '', strip_tags(apply_filters('the_content', $page_data->post_content), '<br>'))));
					$cont = explode('<br/>', $content);
					foreach ($cont as $oC) {
						preg_match("/\[(.*?)\](.*)/", $oC, $match);
						if ($match[1] == 'phone')
							$phone = explode('&&', preg_replace('/\s+/', '', $match[2]));
						else
							$contacts[$match[1]] = explode('&&', preg_replace('/\s+/', '', $match[2]));
					}
				?>
				<div class="social-wrap">
					<?php foreach ($contacts as $oCt => $oC) {
						foreach ($oC as $oc) {
							echo '<a class="'.$oCt.'" href="'.$oc.'"><img src="'.MAIN_URL.'/wp-content/themes/metropolis/assets/images/'.$oCt.'-ico.png" alt="" /></a>';
						}
					} ?>
				</div>
				<div class="hotline-wrap tac">
					<div class="txt-title justify"> H O T L I N E</div>
					<?php foreach ($phone as $op) {
							echo '<a href="tel:'.$op.'" class="hotline justify">'.$op.'</a>';
						} ?>
					<a href="<?php echo MAIN_URL ?>" target="_blank" rel="nofollow"><?php echo str_replace(array('http://', 'https://'), array('', ''), MAIN_URL) ?></a>
				</div>

				<div class="ft-info fr lsn clearfix">
					<?php echo get_post(202)->post_content ?>
				</div>
			</div>
		</div>
	</div>

	<script type='text/javascript' src='<?php echo MAIN_URL ?>/wp-includes/js/wp-embed.min.js?ver=4.4.11'></script>



<?php //wp_footer(); ?>
</body>
</html>
