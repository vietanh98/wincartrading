<?php
// Add theme support for featured images
add_theme_support( 'post-thumbnails' );

// Register a primary menu location
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'my-theme' ),
) );

// Enqueue theme styles and scripts
function my_theme_enqueue_scripts() {
  // Enqueue style.css
  wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
  // Enqueue custom.js
  wp_enqueue_script( 'my-theme-script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

// Register a sidebar widget area
function my_theme_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'my-theme' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'my-theme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );


function enqueue_custom_styles() {
  // Đường dẫn đến file CSS trong theme của bạn
  $css_url = get_template_directory_uri() . '/styles/main.css';

  // Thêm file CSS vào hàng đợi
  wp_enqueue_style('custom-styles', $css_url);
}

?>