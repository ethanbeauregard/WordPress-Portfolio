<?php 

function mytheme_post_thumbnails() {
  add_theme_support('post-thumbnails');
}

add_action('after_theme_setup', 'mytheme_post_thumbnails');