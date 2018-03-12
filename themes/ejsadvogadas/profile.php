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
      </div>
    </div>
  </main>
 
<?php get_footer(); ?>