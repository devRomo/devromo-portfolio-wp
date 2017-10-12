<?php 
// Instantiate WordPress Query Object for Projects
$arguments = array('post_type' => 'about_project');
$projects_query = new WP_Query($arguments);
?>
<?php $projects_query->the_post(); ?>

<section id="aboutSection">
    <h2>About Me</h2><span><a></a></span>
    <div class="back">
    </div>
    <div class="frameSection">
        <h4><?php the_field('header'); ?></h4>
        <p><?php the_field('about_me'); ?></p>
        <img src="<?php the_field('me_pic'); ?>" />
        <?php if( get_field('resume_pdf') ): ?>
            <span class=resumeLink><a href="<?php the_field('resume_pdf'); ?>" target="popup" >View Resume</a></span>
        <?php endif; ?>
    </div>
</section>