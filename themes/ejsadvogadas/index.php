<?php require_once('header.php'); ?>

<main class="posts">
    <section class="container">
    <h1 class="titulo-post"><?php echo get_the_title() ?></h1>
    <div class="col-md-8 col-md-offset-1">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
    </section>
</main>

<?php get_footer(); ?>