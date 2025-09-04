<?php
function load_files(){
    wp_enqueue_style('school_main_styles', get_theme_file_uri ('/assets/css/style.css'));
    wp_enqueue_style('school_animate_styles', get_theme_file_uri ('/assets/css/animate.min.css'));
    wp_enqueue_style('school_bootstrap_styles', get_theme_file_uri ('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('school_carousel_styles', get_theme_file_uri ('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('school_popup_styles', get_theme_file_uri ('/assets/css/magnific-popup.min.css'));
     wp_enqueue_style('school_font_styles', get_theme_file_uri ('/assets/css/all-fontawesome.min.css'));
    wp_enqueue_style('school_video', get_theme_file_uri ('/assets/css/owl.video.play.html'));
    
    wp_enqueue_style('school_stylesheet', get_stylesheet_uri());
}
 
add_action('wp_enqueue_scripts','load_files');
?>

<?php
// Enqueue theme scripts and styles
function mytheme_enqueue_scripts() {

    // jQuery is bundled with WordPress, but if you want to use your own version:
    wp_enqueue_script(
        'jquery-custom',
        get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js',
        array(), // no dependencies
        '3.7.1',
        true // load in footer
    );

    wp_enqueue_script(
        'modernizr',
        get_template_directory_uri() . '/assets/js/modernizr.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'bootstrap-bundle',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'imagesloaded',
        get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'magnific-popup',
        get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'jquery-appear',
        get_template_directory_uri() . '/assets/js/jquery.appear.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'jquery-easing',
        get_template_directory_uri() . '/assets/js/jquery.easing.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'counter-up',
        get_template_directory_uri() . '/assets/js/counter-up.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'wow',
        get_template_directory_uri() . '/assets/js/wow.min.js',
        array('jquery-custom'),
        null,
        true
    );

    wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery-custom'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
