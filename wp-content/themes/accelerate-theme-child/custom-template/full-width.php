<?php
/**
* Template Name: Full Width Page
*
* The template for displaying a full width page without a sidebar.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<div id="primary" class="service">
	<div class="main-content" role="main">
		<div class="hero-content">
			<h3><?php the_title(); ?></h3>
		</div>	
		<div class="body-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			
			<div class="image-left">
				<img class="alignnone size-full wp-image-47376" src="http://localhost:8888/accelerate/wp-content/uploads/2020/06/bullseye.png" alt="" width="216" height="216">
				<h2>Content Strategy</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor nec lectus mollis gravida. Quisque quis luctus est. Fusce condimentum, tortor eget semper rhoncus, massa mauris tempus lectus, nec ornare enim odio in est. Sed et urna erat. Integer hendrerit sem ac magna cursus, elementum pulvinar lorem imperdiet.</p>
			</div>
			<div class="image-right">
				<h2>Influencer Mapping</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor nec lectus mollis gravida. Quisque quis luctus est. Fusce condimentum, tortor eget semper rhoncus, massa mauris tempus lectus, nec ornare enim odio in est. Sed et urna erat. Integer hendrerit sem ac magna cursus, elementum pulvinar lorem imperdiet. Quisque quis turpis non odio tempor sodales id sit amet erat. Maecenas maximus dictum dui, vitae consectetur nisi consectetur et.</p>
				<img class="alignnone size-full wp-image-47377" src="http://localhost:8888/accelerate/wp-content/uploads/2020/06/atom.png" alt="" width="216" height="216">
			</div>
			<div class="image-left">
				<img class="alignnone size-full wp-image-47380" src="http://localhost:8888/accelerate/wp-content/uploads/2020/06/like.png" alt="" width="216" height="216">
				<h2>Social Media Strategy</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor nec lectus mollis gravida. Quisque quis luctus est. Fusce condimentum, tortor eget semper rhoncus, massa mauris tempus lectus, nec ornare enim odio in est. Sed et urna erat. Integer hendrerit sem ac magna cursus, elementum pulvinar lorem imperdiet. Quisque quis turpis non odio tempor sodales id sit amet erat. Maecenas maximus dictum dui, vitae consectetur nisi consectetur et.</p>
			</div>
			<div class="image-right">
				<h2>Design and Development</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor nec lectus mollis gravida. Quisque quis luctus est. Fusce condimentum, tortor eget semper rhoncus, massa mauris tempus lectus, nec ornare enim odio in est. Sed et urna erat. Integer hendrerit sem ac magna cursus, elementum pulvinar lorem imperdiet. Quisque quis turpis non odio tempor sodales id sit amet erat. Maecenas maximus dictum dui, vitae consectetur nisi consectetur et.</p>
				<img class="alignnone size-full wp-image-47381" src="http://localhost:8888/accelerate/wp-content/uploads/2020/06/design.png" alt="" width="216" height="216">
			</div>

		</div>
	</div><!-- .main-content -->
</div><!-- #primary -->
<div id="contact-button" class="container">
	<h2>Interested in working with us?</h2>
	<div> <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
</div>
<?php get_footer(); ?>
