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
          <img class="img-destaque--ultima" src="<?php echo $cartao_topo_img_3[0] ?>" alt="" />
					
          <h3><?php echo $cartao_topo_title ?></h3>
          <?php echo $cartao_topo_desc ?>
				</div>
			</div>
		</div>
		<div class="row cards col-container">
		
		
		<?php
		
		function offset($index) {
			 if ($index == 1) {
				 return 'col-lg-offset-1 clearfix';
			 }
		};

    $args = SCF::get( 'g_textos_imagens' );
		$count = 1;
		foreach ($args as &$value) {
			$r_img_src = wp_get_attachment_image_src($value['imagem'], false);
			$r_txt = $value['texto'];
			$r_title = $value['title'];
			$r_description = $value['description'];
			?>
     

			<div class="card-custom col-lg-2 col-md-3 col-sm-6 col-xs-12 <?php echo offset($count) ?>">
				<div class="card-container">
					<div class="atuacao-card">
						<img src="<?php echo $r_img_src[0] ?>" alt="" />
						<h4><?php echo $r_title ?></h4>
						<?php echo $r_txt ?>
					</div>
				</div>
				<div class="modal fade modal-custom modal-dialog-centered" tabindex="-1" role="dialog">
				
				<div class="modal-dialog" role="document">
    			<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">X</span>
							</button>
							<div class="modal-body">
							<h1><?php echo $r_title ?></h1>
							<?php echo $r_description ?>
							</div>
						</div>
					</div>
				</div>

				</div>
			</div>

		
			<?php 	
			
			if($count == 5) {
				$count = 1;
			} else {
				$count++;
			}
		} ?>
		</div>
	</div>
</main>

<?php $customJs = "cardlist.js"; require_once('footer.php'); ?>