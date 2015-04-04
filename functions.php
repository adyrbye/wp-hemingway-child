<?php

/**
* Functions for Hemingway child theme
*
* @package WordPress
* @subpackage Hemingway
* @since Hemingway 1.47
*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Add custom page & post types with Advanced Custom Fields
function create_custom_post_types() {
    register_post_type( 'projects', //assigns a unique name
        array( //defines settings (many more options available)
            'labels' => array(
                'name' => __( 'Projects Portfolio' ), //human-readable name, plural
                'singular_name' => __( 'Project Portfolio' ) //human-readable name, singular
            ),
            'public' => true,
            'has_archive' => true, //ensures posts are archived
            'rewrite' => array( 'slug' => 'projects' ), //defines URL slug for archive
        )
    );
}
add_action( 'init', 'create_custom_post_types' );


$newfonts = "<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Old+Standard+TT:400,400italic,700' rel='stylesheet' type='text/css'>";