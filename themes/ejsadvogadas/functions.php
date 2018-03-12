<?php
  add_theme_support( 'post-thumbnails' ); 

  function fullThumbnail($postid) {
    if ( has_post_thumbnail( $postid) ) {
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $postid), false );
      echo '<img src="'.$thumbnail[0].'" />';
    }
  }
  function getFirstTag($postid) {
    $tags = wp_get_post_tags($postid);
    if(sizeof($tags) > 0) {
      return $tags[0]->name;
    }
    return '';
    
  }
?>