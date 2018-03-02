<?php
/**
* Create custom post types.
*/
add_action('init', 'create_posttype');

function create_posttype()
{
  register_post_type('testimonials',
    array(
      'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt'),
      'labels' => array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial')
      ),
      'public' => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'testimonials'),
    )
  );
}
