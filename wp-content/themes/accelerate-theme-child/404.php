<?php
/**
 * The template for displaying 404 errors
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="error-content">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map-icon.png"/>
			<h1>Whoops, Took a Wrong Turn...</h1>
			<p>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</p>
			<p>Feel free to take a look around our <a href="<?php echo get_site_url(); ?>/blog">blog</a> or some of our featured <a href="<?php echo get_site_url(); ?>/case-studies">work</a>.</p>
		</div>
	</div>

<?php get_footer(); ?>
