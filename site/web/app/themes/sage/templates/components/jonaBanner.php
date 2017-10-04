<!-- <php Get Content -->
        <section class="banner">
            <nav class="nav-primary">
                <?php wp_nav_menu(); ?>
            </nav>
            <h1><?php the_field('portfolio_name'); ?></h1>
            <span class=resumeLink><a href="#"><?php the_field('resume_link'); ?></a></span>
            <hr><?php ?></hr>
            <img src="<?php the_field('thumbnail'); ?>" />
            <hr><?php ?></hr>
            <hr><?php ?></hr>
        </section>