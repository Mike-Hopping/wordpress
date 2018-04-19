<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 12:23 PM
 */
// custom post types
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/woocommerce.php';

function pistoncranky_setup(){
    //enable support for featured images.
    add_theme_support('post_thumbnails');
    //enable support for categories.
    add_theme_support('post-formats', array('aside', 'gallery', ));
    //menu
    register_nav_menus(
        array('menu-1' => esc_html__('primary', 'pistoncranky')
        )
    );
}
add_action('after_setup_theme', 'pistoncranky_setup');

function pistoncranky_scripts(){
    wp_enqueue_style('pistoncranky-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pistoncranky_scripts');

/**
 * Add a sidebar.
 */
function pistoncranky_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'pistoncranky_widgets_init');


