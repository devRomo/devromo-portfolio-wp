<?php 
// Instantiate WordPress Query Object for Projects
$arguments = array('post_type' => 'project');
$projects_query = new WP_Query($arguments);
?>
        <?php $projects_query->the_post(); ?>
        <!-- <php Get Content -->
        <section id="myWork">
            <div id="development">
                <h2>My Work</h2><span><a></a></span>
                <h3>Development</h3>
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen'); ?>" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2><?php the_field('project_title_1'); ?></h2>
                    </div>
                </div>
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_2'); ?>" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2><?php the_field('project_2_title'); ?></h2>
                    </div>
                </div>
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_3'); ?>" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2><?php the_field('project_3_title'); ?></h2>
                    </div>
                </div>
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_4'); ?>" />
                </div> 
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_5'); ?>" />
                </div> 
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_6'); ?>" />
                </div> 
            </div>

            <div id="design">
                <h3>Design</h3>
                <span></span>
                <img src="<?php the_field('design_1'); ?>" />
                <img src="<?php the_field('design_2'); ?>" />
                <img src="<?php the_field('design_3'); ?>" />
            </div>
        </section>