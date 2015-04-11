<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 11.04.15
 * Time: 11:27
 */


//$menuname = $lblg_themename . ' Skokov Menu';
function skokov_register_theme_menu () {
    $menuname = ' Skokov Menu';
    $bpmenulocation = 'mainmenu';

    $menu_exists = wp_get_nav_menu_object( $menuname );

    if( !$menu_exists) {
        $menu_id = wp_create_nav_menu($menuname);

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Home'),
            'menu-item-classes' => 'home',
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Portfolio'),
            'menu-item-classes' => 'portfolio',
            'menu-item-url' => home_url('/portfolio/'),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Blog'),
            'menu-item-classes' => 'blog',
            'menu-item-url' => home_url('/blog/'),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('About us'),
            'menu-item-classes' => 'about',
            'menu-item-url' => home_url('/about/'),
            'menu-item-status' => 'publish'));
        // Grab the theme locations and assign our newly-created menu
        // to the BuddyPress menu location.
        if (!has_nav_menu($bpmenulocation)) {
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$bpmenulocation] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
}

//add_action( 'init', 'skokov_register_theme_menu' );

//function skokov_styles_include()
//{
//     Register the style like this for a theme:
//    wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '20140411', 'all' );
//}
//add_action( 'wp_enqueue_scripts', 'skokov_styles_include' );

add_theme_support( 'post-thumbnails' );
?>