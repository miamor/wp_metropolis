<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<li class="grid4">
    <div class="row posr">
        <a href="<?php echo get_the_post_thumbnail_url() ?>" rel="group" class="fancybox" title="<?php the_title() ?>">
            <?php echo get_the_post_thumbnail(); ?>
        </a>
        <p>
            <a href="<?php echo get_the_post_thumbnail_url() ?>" rel="group-title" class="fancybox" title="<?php the_title() ?>">
                <?php the_title() ?>
            </a>
        </p>
    </div>
</li>
