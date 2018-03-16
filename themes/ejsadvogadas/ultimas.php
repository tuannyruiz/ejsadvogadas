<?php
/*
 * Template Name: ultimas
 * description: 
 */
require_once('header.php');  ?>
<?php
$args = array(
	'numberposts' => 10,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'suppress_filters' => true
);
$recent_posts = wp_get_recent_posts( $args );

?>

<main class="noticias">
    <div class="container">
      <h1 class="titulo"><?php echo get_the_title() ?></h1>
      <div class="intro">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php echo the_content(); ?>
         <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <div class="row">
        <div class="col-md-8 destaque">
          <div class="row">
            <?php
	            foreach( array_slice($recent_posts, 0, 2) as $recent ){ ?>
              <div class="col-md-6">
                <div class="noticia">
                <a href="<?php echo get_permalink($recent["ID"]) ?>">
                <?php echo get_the_post_thumbnail( $recent["ID"], 'noticia' );?>
                </a>
                  <span class="tag">#<?php echo getFirstTag($recent["ID"]); ?></span>
                  <a href="<?php echo get_permalink($recent["ID"]) ?>">
                    <h3><?php echo $recent["post_title"] ?></h3>
                  </a>
                </div>
            </div>

            <?php } wp_reset_query(); ?>
         
          </div>
        </div>
        
        <div class="col-md-4 lateral">
        
        <?php
	            foreach( array_slice($recent_posts, 2, 3) as $recent ){ ?>
          <div class="row">
            <div class="col-md-12">
            <div class="noticia">
            <a href="<?php echo get_permalink($recent["ID"]) ?>">
               <?php echo get_the_post_thumbnail( $recent["ID"],   'noticia');?>
            </a>
            <span class="tag">#<?php echo getFirstTag($recent["ID"]); ?></span>
            <a href="<?php echo get_permalink($recent["ID"]) ?>">
                <h3><?php echo $recent["post_title"] ?></h3>
            </a>
            </div>
            </div>
          </div>
          
        <?php } ?>
        </div>
          <div class="col-md-12  destaque-4-12">
          <div class="row">
          <?php
	            foreach( array_slice($recent_posts, 5, sizeof($recent_posts)) as $recent ){ ?>
              <div class="col-md-4 destaque">
              <div class="noticia">
                  <a href="<?php echo get_permalink($recent["ID"]) ?>">
                    <?php  echo get_the_post_thumbnail( $recent["ID"], 'noticia' );?>
                  </a>
                  <span class="tag">#<?php echo getFirstTag($recent["ID"]); ?></span>
                  <a href="<?php echo get_permalink($recent["ID"]) ?>">
                      <h3><?php echo $recent["post_title"] ?></h3>
                  </a>
              </div>
              </div>
          <?php } wp_reset_query(); ?>
          </div>
          </div>
       
      </div>
      
    </div>
  </main>

<?php get_footer(); ?>
