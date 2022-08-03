<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">

                </div>
            </div>
        </div>
    </section>
    <div class="blog_area single-post-area section_gap">
        <div class="container">
            <?php if (get_post_type() !== 'product') {
                ?>
                <header class="entry-header alignwide">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <?php twenty_twenty_one_post_thumbnail(); ?>
                </header><!-- .entry-header -->
            <?php } ?>
            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                        'after' => '</nav>',
                        /* translators: %: Page number. */
                        'pagelink' => esc_html__('Page %', 'twentytwentyone'),
                    )
                );
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer default-max-width">
                <?php twenty_twenty_one_entry_meta_footer(); ?>
            </footer><!-- .entry-footer -->

            <?php if (!is_singular('attachment')) : ?>
                <?php get_template_part('template-parts/post/author-bio'); ?>
            <?php endif; ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->