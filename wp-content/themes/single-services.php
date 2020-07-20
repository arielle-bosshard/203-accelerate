<?php
/**
 * The template for displaying Services pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="hero-content">
<div id="primary" class="service hero-content">
	<div class="main-content" role="main">
		<div class="hero-image">
		<?php the_content(); ?>
		</div>

		<?php while ( have_posts() ) : the_post(); 
			$title_1 = get_field('title_1');
			$title_2 = get_field('title_2');
			$content_1 = get_field('content_1');
			$content_2 = get_field('content_2');
			$img_1 = get_field('img_1'); 
			$img_2 = get_field('img_2');	
			$size = "full"; ?>

			<article class="service">
				<div class="single-service-content">
					<div class="image-left">
						<?php if($img_1) { 
							echo wp_get_attachment_image($img_1, $size);  
						} ?>
					</div>
					<div class="service-right">
						<h2><?php echo $title_1; ?></h2>
						<p><?php echo $content_1; ?></p>
					</div>
				</div>
				<div class="single-service-content">		
					<div class="service-left">
						<h2><?php echo $title_2; ?></h2>
						<p><?php echo $content_2; ?></p>
					</div>
					<div class="image-right">
						<?php if($img_2) { 
							echo wp_get_attachment_image($img_2, $size);  
						} ?>
					</div>
				</div>
			</article>		
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->
<div id="contact-button" class="container">
	<h2>Interested in working with us?</h2>
	<div> <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
</div>
<?php get_footer(); ?>
