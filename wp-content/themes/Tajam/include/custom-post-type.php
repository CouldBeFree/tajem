<?php
/**
 * Create custom post types.
 */
add_action('init', 'create_posttype');

function create_posttype()
{
    register_post_type('testimonials',
        array(
            'supports' => array('title', 'editor'),
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-format-quote',
            'rewrite' => array('slug' => 'testimonials'),
        )
    );

    register_post_type('Team', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Team',
            'singular_name' => __('Team')
        ),
        'public' => true,
        'menu_position' => 6,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );

    register_post_type('Portfolio', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => __('Portfolio')
        ),
        'public' => true,
        'menu_position' => 6,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );

    register_post_type('logo',
        array(
            'supports' => array('title', 'editor'),
            'labels' => array(
                'name' => __('Logo'),
                'singular_name' => __('Logo')
            ),
            'public' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'logo'),
        )
    );
}
