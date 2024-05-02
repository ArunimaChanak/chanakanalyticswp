<?php 

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    global $wp;
    wp_enqueue_style( 'style1', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style2', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style3', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style4', get_template_directory_uri() . '/assets/css/form.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style5', get_template_directory_uri() . '/assets/css/ion.rangeSlider.min.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'style8', get_template_directory_uri() . '/assets/css/case-studies.css', array(), '1.1', 'all');

    if( get_home_url() ==  home_url($wp->request)){
        wp_enqueue_style( 'style7', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    }
    if( is_page('about-us') ) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/about.css', array(), '1.1', 'all');
    }
    if( is_page('contact-us')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.1', 'all');
    }
    if( is_page('privacy-policy')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/policy.css', array(), '1.1', 'all');
    }
    if( is_page('quote')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/quote.css', array(), '1.1', 'all');
    }
    if( is_page('career') ||  is_singular('career') || is_post_type_archive( 'career' )) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/career.css', array(), '1.1', 'all');
        wp_enqueue_style( 'style7', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.1', 'all');
    }
    if( is_page('services') ||  is_singular('service') || is_post_type_archive( 'service' ) ) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/services.css', array(), '1.1', 'all');
    }
    if( is_page('blogs') ||  is_singular('blog') || is_category() || is_post_type_archive( 'blog' ) ) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.1', 'all');
    }
    if( is_page('casestudies') || is_singular('casestudy') || is_post_type_archive( 'casestudy' )) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/case-studies.css', array(), '1.1', 'all');
    }
    if( is_page('industry') ||  is_singular('industry') || is_post_type_archive( 'industry' )) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/industries-details.css', array(), '1.1', 'all');
    }
    if( is_singular('local_landing')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/about.css', array(), '1.1', 'all');
        wp_enqueue_style( 'style8', get_template_directory_uri() . '/assets/css/industries-details.css', array(), '1.1', 'all');
        wp_enqueue_style( 'style9', get_template_directory_uri() . '/assets/css/case-studies.css', array(), '1.1', 'all');
        wp_enqueue_style( 'style10', get_template_directory_uri() . '/assets/css/services.css', array(), '1.1', 'all');
        wp_enqueue_style( 'style11', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'scrpit1', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery'), 1.1, true);
    wp_enqueue_script( 'scrpit2', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', array ( 'jquery'), 1.1, true);
    wp_enqueue_script( 'scrpit3', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery'), 1.1, true);
    wp_enqueue_script( 'scrpit4', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery'), 1.1, true);
    wp_enqueue_script( 'scrpit5', get_template_directory_uri() . '/assets/js/navbar.js', array ( 'jquery'), 1.1, true);
    wp_enqueue_script( 'scrpit6', get_template_directory_uri() . '/assets/js/ion.rangeSlider.min.js', array ( 'jquery'), 1.1, true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    if( is_page('quote')) {
        wp_enqueue_script( 'scrpit7', get_template_directory_uri() . '/assets/js/quote.js', array ( 'jquery'), 1.1, true);
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );