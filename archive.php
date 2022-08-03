<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if (have_posts()) : ?>
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <?php the_archive_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-8">
            <div class="blog_left_sidebar">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt')); ?>
                <?php endwhile; ?>
            </div>
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

    <?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
    <?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
