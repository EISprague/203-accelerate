<?php
/**
*This is the template for displaying the About page
*/

get_header(); ?>

	<div id="primary" class="about">		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-image">
			</div>
			<div class="main-content site-content" role="main">
				<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>

		<ul class="services-list">
		<?php query_posts('post_type=services'); ?>
			<?php while ( have_posts() ) : the_post();
				$image = get_field('service_icon');
				$size = 'small';
				?>
				<li>
					<figure>
						<?php echo wp_get_attachment_image($image, $size) ?>
					</figure>
					<div class='service-text'>
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>

		<div class="contact-link">
			<span>Interested in working with us?</span>
			<div class="divider"></div>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
