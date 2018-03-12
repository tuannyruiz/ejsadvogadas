<?php
/*
 * Template Name: sobrenos
 * description: 
 */
require_once('header.php');  ?>

<main class="sobre-nos">
    <div class="sobre-nos-container container">
      <h1 class="titulo"><?php echo get_the_title() ?></h1>
      <div class="advogada-foto">
      <?php if ( has_post_thumbnail() ) {
          fullThumbnail($post->id);
      } ?>
      </div>
      <div class="advogada-bio">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>   
        <h3>Saiba mais:</h3>
        <?php  
          $array_menu = wp_get_nav_menu_items( 'menu_profiles' );
          foreach ($array_menu as $m) {
            if (empty($m->menu_item_parent)) {  ?>
                <a href="<?php echo $m->url; ?>" class="btn-adv"><?php echo $m->title; ?></a>
          <?php }} ?>
      </div>
    </div>
  </main>
  <section class="missao">
    <div class="container">
      <h1 class="titulo"><?php echo SCF::get( 'missao_title' ) ?></h1>
      <?php echo SCF::get( 'missao_text' ) ?>
      </div>
    </div>
  </section>
 
<?php get_footer(); ?>