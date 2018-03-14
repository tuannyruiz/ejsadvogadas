<?php
/*
 * Template Name: carrossel
 * description: 
 */
require_once('header.php');  ?>

<style>
    .depoimentos {
      background: linear-gradient( rgba(113, 0, 0, 0.5),
       rgba(113, 0, 0, 0.5) ), 
       url('<?php echo fullThumbnailUrl($post->id)  ?>') no-repeat center;
      background-size: cover;
      padding: 40px 0;
    } 
</style>

<main class="depoimentos">
<section class="container">
  <h1 class="titulo"><?php echo get_the_title() ?></h1>

  <div class="depoimentos-carrossel">
    <?php
    $args = SCF::get( 'g_textos_imagens' );
    foreach ($args as &$value) { ?>
    <div>
    <!-- <?php echo wp_get_attachment_image( $value['imagem'], array('200', '200'), "", array( "class" => "img-responsive" ) ); ?> -->
    <p><?php echo $value['texto'] ?></p>
    </div>
    <?php } ?>
  </div>
</section>
</main>

 <?php get_footer(); ?>
