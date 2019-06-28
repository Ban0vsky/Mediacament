<?php
add_action('after_setup_theme', 'add_thumbnail_support');
function add_thumbnail_support()
{
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'hubThumbnail', 660, 9999999, false );
  add_image_size( 'singleThumbnail', 600, 300, true );
  add_image_size( 'memberThumbnail', 500, 330, true );
  add_image_size( 'bigThumbnail', 9999999, 660, true );
}