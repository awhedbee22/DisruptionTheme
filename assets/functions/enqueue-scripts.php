<?php
function joints_scripts_and_styles() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  if (!is_admin()) {
    $theme_version = wp_get_theme()->Version;

	// Removes WP version of jQuery
	wp_deregister_script('jquery');

	// Loads jQuery from vendor Files
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/foundation/js/vendor/jquery.js', array(), '2.1.3', true );

    // Modernizr from vendor Files
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/vendor/foundation/js/vendor/modernizr.js', array(), '2.8.3', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/vendor/foundation/js/foundation.min.js', array( 'jquery' ), '', true );

    // Adding wow.js file in the footer
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '', true );

    // Adding owl file in the footer
    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '', true );

    // Adding wave file in the footer
    wp_enqueue_script( 'wave-js', get_template_directory_uri() . '/assets/js/waves.min.js', array( 'jquery' ), '', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Normalize from vendor files
    wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/vendor/foundation/css/normalize.min.css', array(), '', 'all' );

    // Adding Foundation styles
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/assets/vendor/foundation/css/foundation.min.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Register animate.css stylesheet
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '', 'all' );

    // Register wave.css stylesheet
    wp_enqueue_style( 'wave-css', get_template_directory_uri() . '/assets/css/waves.min.css', array(), '', 'all' );

    // Register Material icons stylesheet
    wp_enqueue_style( 'icons-css', get_template_directory_uri() . '/assets/css/materialdesignicons.min.css', array(), '', 'all' );

    // Register owl styles stylesheet
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '', 'all' );

    // Register owl theme stylesheet
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '', 'all' );

    // Register custom stylesheet
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
}
add_action('wp_enqueue_scripts', 'joints_scripts_and_styles', 999);
?>
