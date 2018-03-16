<?php
  add_theme_support( 'post-thumbnails' ); 

  function fullThumbnail($postid) {
    if ( has_post_thumbnail( $postid) ) {
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $postid), false );
      echo '<img src="'.$thumbnail[0].'" />';
    }
  }
  function fullThumbnailUrl($postid) {
    if ( has_post_thumbnail( $postid) ) {
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), false );
     return $thumbnail[0];
    }
  }

  function getFirstTag($postid) {
    $tags = wp_get_post_tags($postid);
    if(sizeof($tags) > 0) {
      return $tags[0]->name;
    }
    return '';
    
  }
  function add_custom_sizes() {
    update_option( 'thumbnail_crop', 1 );
    add_image_size( 'noticia', 768, 479, array( 'top', 'center')  );
}
add_action('after_setup_theme','add_custom_sizes');
?>