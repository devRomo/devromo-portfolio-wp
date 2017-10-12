<?php 
// Instantiate WordPress Query Object for Projects
$arguments = array('post_type' => 'contact_section');
$projects_query = new WP_Query($arguments);
?>
<?php $projects_query->the_post(); ?>

<section id="contactSection">
    <div class="contactFrame">
        <h4>Contact Me</h4>
        <div class="social">
            <a href="https://www.linkedin.com/in/jona-ferreira-/" target="popup"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
            <a href="https://twitter.com/devRomo_" target="popup"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
            <a href="https://github.com/devRomo" target="popup"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
        </div>
        <?php the_field('message_me'); ?>
        <a href=""><span>Lets Talk</span></a>
    </div>
</section>