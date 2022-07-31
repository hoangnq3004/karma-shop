<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if (has_nav_menu('primary')) : ?>
    <nav id="navbarSupportedContent" class="collapse navbar-collapse offset" role="navigation"
         aria-label="<?php esc_attr_e('Primary menu', 'twentytwentyone'); ?>">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav navbar-nav menu_nav ml-auto',
                'items_wrap' => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                'fallback_cb' => false,
            )
        );
        ?>
    </nav><!-- #site-navigation -->
<?php endif; ?>
