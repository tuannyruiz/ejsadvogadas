<?php
/*
 * Template Name: carrossel
 * description: 
 */
require_once('header.php');  ?>

<style>
  .depoimentos {
    background: url('<?php echo fullThumbnailUrl($post->id)  ?>') no-repeat center;
    background-size: cover;
    padding: 30px 0 40px;
  } 

  @media only screen and (max-width: 460px) {
    .depoimentos {
      background-position: top;
      background-size: contain;
      height: 100%;
    }

    .depoimentos-carrossel p, 
    .depoimentos-carrossel h1 {
      color: #7d7d80 !important;
    }
  }
</style>

<main class="depoimentos">
<section class="container">
  <h1 class="titulo"><?php echo get_the_title() ?></h1>

  <div class="depoimentos-carrossel">
    <?php
    $args = SCF::get( 'g_textos_depoimentos' );
    foreach ($args as &$value) { ?>
    <div>    
    <p><?php echo $value['texto_depoimento'] ?></p>
    </div>
    <?php } ?>
  </div>
</section>
</main>

 <?php get_footer(); ?>
