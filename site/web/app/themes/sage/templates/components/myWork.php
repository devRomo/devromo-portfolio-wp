<?php 
// Instantiate WordPress Query Object for Projects
$arguments = array('post_type' => 'project');
$arguments = array('post_type' => 'Project');
$projects_query = new WP_Query($arguments);
?>
        <?php $projects_query->the_post(); ?>
        <!-- <php Get Content -->
        <section id="myWork">
            <div id="development">
                <h2>My Work</h2><span><a></a></span>
                <h3>Development</h3>
                <div class="imageFrame">
                    <a href="https://devromo.github.io/jfpiano/" target="popup"><img src="<?php the_field('project_screen'); ?>" /></a>
                    <div class="content">
                        <h2>JF Piano</h2>
                        <p>A virtual piano</p>
                    </div>
                </div>
                <div class="imageFrame">
                    <a href="https://devromo.github.io/jfSnake/" target="popup"><img src="<?php the_field('project_screen_2'); ?>" /></a>
                    <div class="content">
                        <h2>JF Snake</h2>
                        <p>Snake game ready to play </p>
                    </div>
                </div>
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_3'); ?>" />
                    <div class="content">
                        <h2>Kanye API</h2>
                        <p>Find Kanye albums, tracklist, and lyrics</p>
                    </div>
                </div>
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_4'); ?>" />
                    <div class="content">
                        <h2>Wireframe 1</h2>
                        <p>Client wireframe replica</p>
                    </div>
                </div> 
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_5'); ?>" />
                    <div class="content">
                        <h2>Yelp Replica</h2>
                        <p>Clone yelp website design</p>
                    </div>
                </div> 
                <div class="imageFrame">
                    <img src="<?php the_field('project_screen_6'); ?>" />
                    <div class="content">
                        <h2>Calculator</h2>
                        <p>A simple calculator</p>
                    </div>
                </div> 
            </div>

            <div id="design">
                <h3>Design</h3>
                <span></span>
                <div class="outer">
                    <div class="designFrame">
                        <a href="https://www.figma.com/proto/MohJoSzVciXyivxviOldzE3j/Coffee-Design?scaling=contain&node-id=1%3A2" target="popup"><img src="<?php the_field('design_1'); ?>" /></a> 
                        <div class="content">
                            <h2>Coffee App</h2>
                        </div>
                       
                    </div>
                    <div class="designFrame">
                        <a href="https://www.figma.com/proto/Rk9lpUfd2ra2dxgqeG79ONlH/Jona-Porfolio-Mock2?scaling=contain&node-id=1%3A2" target="popup"><img src="<?php the_field('design_2'); ?>" /></a>
                        <div class="content">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="designFrame">
                        <img src="<?php the_field('design_3'); ?>" />
                        <div class="content">
                            <h2>Three</h2>
                        </div>
                    </div>
                </div>
        </section>