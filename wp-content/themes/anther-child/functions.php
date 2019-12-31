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

// template-tags line 261
function anther_post_thumbnail_single() {
  if (
    is_singular( 'post' ) && ! anther_mod( 'anther_content_options_featured_image_post' ) ||
    is_singular( 'page' ) && ! anther_mod( 'anther_content_options_featured_image_page' )
  ) {
    return;
  }

  if ( anther_has_post_thumbnail() ) {
    printf(
      '<div class="entry-image-wrapper-single"><figure class="post-thumbnail">%1$s</figure><figcaption>%2$s</figcaption></div>',
      get_the_post_thumbnail( null, 'anther-featured-single', array( 'class' => 'img-featured img-responsive' ) ),
      get_the_post_thumbnail_caption()
    );
  }
}
