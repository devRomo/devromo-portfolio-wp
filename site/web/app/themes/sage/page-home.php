<?php 
/**
 * Template Name: Home Template
 */
?>
<?php if (have_posts() ): ?>
    <?php while (have_posts() ) : the_post(); ?>
        <section id="homeBanner"><?php get_template_part('templates/components/jonaBanner'); ?></section>
        <section id="workS"><?php get_template_part('templates/components/myWork'); ?></section>
        <section id="aboutS"><?php get_template_part('templates/components/about'); ?></section>
        <section id="contactS" class="outside"><?php get_template_part('templates/components/contact'); ?></section>
    <?php endwhile; ?>
<?php endif; ?> 