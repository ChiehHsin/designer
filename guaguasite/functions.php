<?php 

function guagua_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','guagua_theme_support');


function wireframe_styles(){
    wp_enqueue_style('swiper', "https://unpkg.com/swiper/swiper-bundle.min.css", array(), '1.0', 'all');
    wp_enqueue_style('awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '1.0', 'all');
    wp_enqueue_style('index', get_template_directory_uri() . "/index.css", array(), '1.0', 'all');
    wp_enqueue_style('wireframe', get_template_directory_uri() . "/wireframe.css", array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'wireframe_styles');

function menus(){
    $locations = array(
        'primary' => "primary menu",
        'worklist' => "worklist menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'menus');

function wireframe_scripts(){
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.14.3', true);
    wp_enqueue_script('stackpath', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), '4.1.3', true);
}

add_action('wp_enqueue_scripts', 'wireframe_scripts');

?>


