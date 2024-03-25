<?php
function my_theme_enqueue_styles() {
    // Font
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700', array(), null );
    wp_enqueue_style( 'google-font-2', 'https://fonts.googleapis.com/css?family=montserrat:300,400,600,700', array(), null );

    // Bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.0' );
    wp_enqueue_style( 'main-scss', get_template_directory_uri() . '/build/index.js', array(), '4.5.0' );
    
    wp_enqueue_style( 'main-style-scss', get_template_directory_uri() . '/dist/css/style.css', array(), '4.5.0' );
    wp_enqueue_style( 'main-app-scss', get_template_directory_uri() . '/dist/css/app.css', array(), '4.5.0' );
    
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/plugin/', array(), '4.5.0' );
    // Animated CSS
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.7.2' );

    // Font Awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '5.14.0' );

    // Owl Carousel
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/plugins/slider/css/owl.carousel.min.css', array(), '2.3.4' );
    wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/assets/plugins/slider/css/owl.theme.default.css', array(), '2.3.4' );
    wp_enqueue_style( 'owl-carousel-theme-default', get_template_directory_uri() . '/assets/plugins/slider/css/owl.theme.css', array(), '2.3.4' );
    wp_enqueue_style( 'testimonial-css', get_template_directory_uri() . '/assets/plugins/testimonial/css/owl.carousel.min.css', array(), '2.3.4' );
    wp_enqueue_style( 'testimonial-theme-css', get_template_directory_uri() . '/assets/plugins/testimonial/css/owl.theme.min.css', array(), '2.3.4' );
    
    wp_enqueue_style( 'grid-gallary', get_template_directory_uri() . '/assets/plugins/grid-gallary/css/grid-gallary.css', array(), '2.3.4' );
    wp_enqueue_style( 'grid-gallary-min', get_template_directory_uri() . '/assets/plugins/grid-gallary/css/grid-gallary.min.css', array(), '2.3.4' );
    // Main Stylesheet
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Favicon
function my_theme_favicon() {
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/fav.png" type="image/x-icon">';
}
add_action('wp_head', 'my_theme_favicon');
?>

<?php
function my_theme_enqueue_scripts() {
    // jQuery
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'dist-folder', get_template_directory_uri() . '/dist/js/app.js', array(), '3.2', true );
    // grid gallery
    wp_enqueue_script( 'grid-gallery', get_template_directory_uri() . '/assets/grid-gallery/js/grid-gallery.js', array(), '3.2', true );
    wp_enqueue_script( 'grid-gallery-min', get_template_directory_uri() . '/assets/grid-gallery/js/grid-gallery.min.js', array(), '3.2', true );
    // Popper.js
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.16.0', true );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.js', array(), '1.16.0', true );
    wp_enqueue_script( 'popper-js-map', get_template_directory_uri() . '/assets/js/popper.js.map', array(), '1.16.0', true );
    // slider
    wp_enqueue_script( 'slider-owl-js', get_template_directory_uri() . '/assets/plugins/slider/js/owl.carousel.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/assets/plugins/slider/js/slider.js', array(), '1.16.0', true );
    // Bootstrap
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.0', true );
    wp_enqueue_script( 'bootstrap-map', get_template_directory_uri() . '/assets/js/bootstrap.min.js.map', array('jquery', 'popper'), '4.5.0', true );

    // Owl Carousel
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/plugins/slider/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );

    // Scroll Fixed
    wp_enqueue_script( 'scroll-fixed', get_template_directory_uri() . '/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js', array('jquery'), '1.1.0', true );
    wp_enqueue_script( 'testimonial', get_template_directory_uri() . '/assets/plugins/testimonial/js/owl.carousel.min.js', array(), '1.1.0', true );

    // Custom Script
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

function custom_slider_scripts() {
  // Enqueue JavaScript
  wp_enqueue_script('custom-slider-js', get_template_directory_uri() . '/js/custom-slider.js', array('jquery'), null, true);

  // Enqueue CSS
  wp_enqueue_style('custom-slider-css', get_template_directory_uri() . '/css/custom-slider.css', array(), null);
}
add_action('wp_enqueue_scripts', 'custom_slider_scripts');


function register_my_menu() {
    register_nav_menu('primary', __('Primary Menu'));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'register_my_menu');


?>
