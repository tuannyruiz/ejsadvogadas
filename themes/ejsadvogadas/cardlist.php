<?php
/*
 * Template Name: cardlist
 * description: 
 */
require_once('header.php');  ?>

<main class="atuacao"> 
<?php 
	$textosAndImagens = SCF::get( 'g_textos_imagens' );
	$cartao_topo_img_1 =  wp_get_attachment_image_src( SCF::get( 'cartao_topo_img_1' ));
	$cartao_topo_img_2 =  wp_get_attachment_image_src( SCF::get( 'cartao_topo_img_2' ));
	$cartao_topo_img_3 =  wp_get_attachment_image_src( SCF::get( 'cartao_topo_img_3' ));
	$cartao_topo_title = SCF::get( 'cartao_topo_title' );
	$cartao_topo_desc = SCF::get( 'cartao_topo_desc' );
?>
	<div class="container">
		<h1 class="titulo"><?php echo get_the_title() ?></h1>
		<p class="intro">
    <?= get_post_field('post_content', $post->ID) ?>
</p>
  
		<div class="row cards">
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
				<div class="atuacao-card">
					<img class="img-destaque" src="<?php echo $cartao_topo_img_1[0] ?>"  />
          <img class="img-destaque" src="<?php echo $cartao_topo_img_2[0] ?>" alt="" />
          <img class="img-destaque" src="<?php echo $cartao_topo_img_3[0] ?>" alt="" />
					
          <h3><?php echo $cartao_topo_title ?></h3>
          <?php echo $cartao_topo_desc ?>
				</div>
			</div>
		</div>
		<div class="row cards">
		
		
		<?php
		
		function offset($index) {
			 if ($index == 1 || $index % 6 == 0) {
				 return 'col-lg-offset-1';
			 }
		};

    $args = SCF::get( 'g_textos_imagens' );
		$count = 1;
		foreach ($args as &$value) {
			$r_img_src = wp_get_attachment_image_src($value['imagem'], false);
			$r_txt = $value['texto'];
			$r_title = $value['title'];
			?>
     

			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 <?php echo offset($count) ?>">
				<div class="atuacao-card">

					<img src="<?php echo $r_img_src[0] ?>" alt="" />
					<h4><?php echo $r_title ?></h4>
					<?php echo $r_txt ?>
				</div>
			</div>
		
			<?php 	$count++; } ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>