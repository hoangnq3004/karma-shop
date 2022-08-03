<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("row blog_item"); ?>>
    <div class="col-md-3">
        <div class="blog_info text-right">
            <?php twenty_twenty_one_entry_meta_left(); ?>
        </div>
    </div>
    <div class="col-md-9">
        <div class="blog_post">
            <?php get_template_part('template-parts/header/excerpt-header', get_post_format()); ?>
            <?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
        </div>
    </div>
</article><!-- #post-${ID} -->
