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
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <?php twenty_twenty_one_post_thumbnail(); ?>
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <?php twenty_twenty_one_entry_meta_left(); ?>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <?php the_title('<h2>', '</h2>'); ?>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="col-lg-12" style="margin-top:20px; ">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <?php
                                $prev_post = get_adjacent_post(false, '', true);
                                if (!empty($prev_post)) {
                                    $prevthumbnail = get_the_post_thumbnail($prev_post->ID, array(60, 60));
                                    $prevLink = get_permalink($prev_post->ID);
                                    echo '<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                            <div class="thumb">
                                                <a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . $prevthumbnail . '</a>
                                            </div>
                                            <div class="arrow">
                                                <a href="' . $prevLink . '"><span class="lnr text-white lnr-arrow-left"></span></a>
                                            </div>
                                            <div class="detials">
                                                <p>Bài trước</p>
                                                <a href="' . $prevLink . '" title="' . $prev_post->post_title . '">
                                                    <h4>' . $prev_post->post_title . '</h4>
                                                </a>
                                            </div>
                                        </div>';
                                }
                                $next_post = get_adjacent_post(false, '', false);
                                if (!empty($next_post)) {
                                    $nextthumbnail = get_the_post_thumbnail($next_post->ID, array(60, 60));
                                    $nextLink = get_permalink($next_post->ID);
                                    echo '<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                            <div class="thumb">
                                                <a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $nextthumbnail . '</a>
                                            </div>
                                            <div class="arrow">
                                                <a href="' . $nextLink . '"><span class="lnr text-white lnr-arrow-left"></span></a>
                                            </div>
                                            <div class="detials">
                                                <p>Bài tiếp theo</p>
                                                <a href="' . $nextLink . '" title="' . $next_post->post_title . '">
                                                    <h4>' . $next_post->post_title . '</h4>
                                                </a>
                                            </div>
                                        </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        // If comments are open or there is at least one comment, load up the comment template.
                        if ((comments_open() || get_comments_number()) && get_post_type() !== 'product') {
                            comments_template();
                        }
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <?php
                            if (is_active_sidebar('sidebar-right')) : ?>
                                <?php dynamic_sidebar('sidebar-right'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
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
            <?php } ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->