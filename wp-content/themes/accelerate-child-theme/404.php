<?php
/**
*This is the template for displaying the About page
*/

get_header(); ?>

    <div class="main-content site-content" role="main">
        <div class="flex-404">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FNF.png" alt="Map icon">
            <div class="text-404">
                <h2>Whoops, Took a Wrong Turn...</h2>
                <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
                <p>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work</a>.</p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>