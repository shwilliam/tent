<?php
/**
 * rendering for hero image header block
 * 
 * @since 0.1.0
 */

function tent_blocks_cgb_hero_image_block_render($attributes) {
  if (!empty($attributes) && $attributes['imgID']) {
    global $post;

    $hero_image = wp_get_attachment_url($attributes['imgID']);
    $markup = "<header class='entry-header hero-image-header' style='
      background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url({$hero_image}) no-repeat center bottom; 
      background-size: cover, cover;
      display: flex;
      align-items: center;
      justify-content: center;
    '>";
    $markup .= '<h2 class="entry-title">';
    $markup .= esc_html($post->post_title);
    $markup .= '</h2>';
    $markup .= '</header>';
  
    return $markup;
  }
}

function  tent_blocks_cgb_hero_image_block_register() {
  register_block_type(
    'tent/hero-image-header', 
    array( 
      'render_callback' => 'tent_blocks_cgb_hero_image_block_render'
    )
  );
}

 // ensure gutenberg is available
if ( function_exists( 'register_block_type' ) ) {
  add_action( 'init', 'tent_blocks_cgb_hero_image_block_register' );
}
