<?php

function my_custom_post_property()
{
    register_post_type(
        "properties",
        array(
        'labels' => array(
            'name' => __('Properties'),
            'singular_name' => __('Property')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'properties'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-location-alt',
        'supports' => array( 'title', 'thumbnail', )
    )
    );
}

function summit_realty_setup()
{
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700;900&display=swap", false);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js');
    wp_enqueue_style('styles', get_theme_file_uri('/styles/styles.css'), array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_script('glide-js', "https://cdn.jsdelivr.net/npm/@glidejs/glide");
    if (is_front_page()) {
        wp_enqueue_script('home-js', get_template_directory_uri() . '/javascripts/home-page.js');
    }
    if (is_single()) {
        wp_enqueue_style('splide', get_theme_file_uri('/styles/splide/splide.min.css'));
        wp_enqueue_style('splide-default', get_theme_file_uri('/styles/splide/splide-default.min.css'));
        wp_enqueue_script('splide-min', get_template_directory_uri() . '/javascripts/splide.min.js');
        wp_enqueue_script('splide-js', get_template_directory_uri() . '/javascripts/property-page.js');
    }
    if (is_page("contact-us")) {
        wp_enqueue_style('leaflet-css', "https://unpkg.com/leaflet@1.7.1/dist/leaflet.css");
        wp_enqueue_script('leaflet-js', "https://unpkg.com/leaflet@1.7.1/dist/leaflet.js");
        wp_enqueue_script('map-js', get_theme_file_uri('/javascripts/map.js'));
    }
}

add_theme_support('post-thumbnails');
add_action('init', 'my_custom_post_property');
add_action('wp_enqueue_scripts', 'summit_realty_setup');