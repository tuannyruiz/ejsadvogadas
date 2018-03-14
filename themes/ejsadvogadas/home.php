<?php
/*
 * Template Name: home
 * description: 
 */
$topFix = true;
require_once('header.php');  ?>

<style>
    main.pagina-inicial {
        background: linear-gradient(rgba(113, 0, 0, 0.5), rgba(113, 0, 0, 0.5)), url('<?php echo fullThumbnailUrl($post->id ) ?>') no-repeat center;  
        background-size: cover;
        height: 1000px;
        min-height: 100vh;
    }
</style>

<main class="pagina-inicial">
    <section class="container text-center">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
    <a class="btn-adv" href="<?php echo get_permalink(138) ?>">Sobre nós</a>
    </section>
</main>

<?php get_footer(); ?>