<?php
/*
 * Template Name: profile
 * description: 
 */
require_once('header.php');  ?>

<main class="sobre-nos profile">
    <div class="profile-container">
      <h1 class="titulo-mobile"><?php echo get_the_title() ?></h1>
      <div class="advogada-foto">
      <?php if ( has_post_thumbnail() ) {
         fullThumbnail($post->id);
      } ?>
      </div>
      <div class="advogada-bio col-md-19 col-md-offset-1">
        <h1 class="titulo"><?php echo get_the_title() ?></h1>
       <div class="advogada-texto">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
              <?php endwhile; ?>
          <?php endif; ?> 
      </div>
        <?php if( SCF::get( 'curriculo_url' ) ) { ?>
          <a href="<?php echo SCF::get( 'curriculo_url' ) ?>" class="btn-adv curriculo" target="blank">Currículo</a>
        <?php } ?>
        <?php  
          $array_menu = wp_get_nav_menu_items( 'menu_profiles' );
          foreach ($array_menu as $m) {
            $pg_id = get_post_meta( $m->ID, '_menu_item_object_id', true );
            if (empty($m->menu_item_parent) && $post->ID != $pg_id ) { ?>
                <a href="<?php echo $m->url; ?>" class="btn-adv"><?php echo $m->title; ?></a>
          <?php }} ?>
      </div>
    </div>
  </main>
 
<?php get_footer(); ?>