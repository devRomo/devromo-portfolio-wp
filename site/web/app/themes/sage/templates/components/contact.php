<?php 
// Instantiate WordPress Query Object for Projects
$arguments = array('post_type' => 'contact_section');
$projects_query = new WP_Query($arguments);
?>
<?php $projects_query->the_post(); ?>

<section id="contactSection">
    <div class="contactFrame">
        <div class="left">
            <h4>Contact Me</h4>
        </div>
        <div class="right">
             <div class="form"><?php the_field('message_me'); ?></div>
        </div>
        </div>
</section>