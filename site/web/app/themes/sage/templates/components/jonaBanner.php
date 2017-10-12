<!-- <php Get Content -->
        <section class="banner">
            <nav class="nav-primary">
                <?php wp_nav_menu(); ?>
            </nav>
            <h1><?php the_field('portfolio_name'); ?></h1>
            <img src="<?php the_field('thumbnail'); ?>" />
            <span>Front End Developer | Designer </span>
        </section>