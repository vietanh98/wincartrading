<?php

/**
 * Declare:
 * Theme name.
 * Theme path.
 * "core" folder path.
 * Content width.
 */
define('THEME_NAME', 'vanhchin');
define('THEME_URL', get_stylesheet_directory());
define('CORE_URL', THEME_URL . "/core");
define('CONTENT_WIDTH', 620);


/**
 * Set content width.
 */
if (!isset($content_width)) {
    $content_width = CONTENT_WIDTH;
}

/**
 * Declare theme functions.
 */
if (!function_exists('setup_vuzic_theme')) {
    function setup_vuzic_theme()
    {
        /* Declare text domain. */
        $languages_folder = THEME_URL . "/languages";
        load_theme_textdomain(THEME_NAME, $languages_folder);

        /* Automatically add RSS feed links to <head> tag. */
        add_theme_support('automatic-feed-links');

        /* Add featured image for post. */
        add_theme_support('post-thumbnails');

        /* Add post formats. */
        add_theme_support('post-formats', [
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ]);

        /* Automatically add website_name | website_description to <title> tag. */
        add_theme_support('title-tag');

        /* Add custom background. */
        $default_background = [
            'default-color' => '#e8e8e8',
        ];
        add_theme_support('custom-background', $default_background);

        /* Register menu. */
        register_nav_menu('primary-menu', __('Primary Menu', THEME_NAME));

        /* Register sidebar. */
        $sidebar = [
            'name' => __('Main Sidebar', THEME_NAME),
            'id' => 'main-sidebar',
            'description' => __('Default Sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '',
            'after_title' => '',
        ];
        register_sidebar($sidebar);
    }
}
add_action('init', 'setup_vuzic_theme');

/**
 * Create menu.
 */
if (!function_exists('create_vuzic_menu')) {
    function create_vuzic_menu($menu, $tag, $class, $id)
    {
        $menu = [
            'theme_location' => $menu,
            'container' => $tag,
            'container_class' => $class,
            'container_id' => $id,
        ];
        wp_nav_menu($menu);
    }
}

/**
 * To be continued.
 */
