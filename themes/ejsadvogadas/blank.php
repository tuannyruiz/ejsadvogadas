<?php
/*
 * Template Name: blank
 * description: Template apenas com header e footer.
 */
require_once('header.php');  ?>
 <main>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</main>

<?php get_footer(); ?>