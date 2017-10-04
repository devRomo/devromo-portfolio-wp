<?php 
/**
* Template Name: Example of Template
*/
?>
<?php if (have_posts() ): ?>
     <?php while ( have_posts() ): ?>
        <?php the_posts(); ?> 
            <section class ="banner-example">
                <?php the_title(); ?>
                <?php the_content(); ?>
                <?php the_post_thumbnail(); ?>
            </section>
     <?php endwhile; ?>
<?php endif; ?>