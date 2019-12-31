<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'anther-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'anther-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

// template-tags line 73
function anther_posted_by() {
  global $post;

  $byline = get_post_meta($post->ID, 'byline', true);
  if ($byline) {
    printf( '<span class="byline entry-meta-icon">%1$s <span class="author vcard"><span class="entry-author-name">%2$s</span></span></span>',
      esc_html_x( 'by', 'post author', 'anther' ),
      esc_html( $byline )
    );
  }
}
