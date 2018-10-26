<?php
/**
 * The template for displaying provided services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="home-page hero-content">
  <div class="main-content" role="main" id="about-header-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->
</div><!-- #primary -->

<div id="primary" class="site-content sidebar">
  <div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post();
          /*Define variables to use custom fields */
          $services = get_field('our_services');
          $button_text = get_field('button_text');
          $closing_comment = get_field('closing_comment');
          ?>

          <!-- Introduction comments at the beginning -->
          <div class="intro-comments">
            <h2>Our Services</h2>
            <p><?php echo $services; ?></p>
          </div>
      <?php endwhile; // end of the loop. ?>

      <!-- Custom post type goes here to display title, description and image -->
      <?php $args = array( 'post_type' => 'services'); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <div class="services-list">
        <?php while ( $loop->have_posts() ) : $loop->the_post();
          $description = get_field('service_description');
          $image = get_field('service_image');
          $size = "full";
          ?>
          <div class="services">
            <figure><?php echo wp_get_attachment_image($image, $size);?></figure>
            <h2><?php the_title(); ?></h2>
            <p><?php echo $description; ?></p>
          </div>
          <?php endwhile; ?>
      </div>
      <?php wp_reset_query(); ?>

      <!-- Closing comments and button -->
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="about-closing">
              <h2><?php echo $closing_comment; ?></h2>
              <a class="button" href="http://localhost/accelerate/contact-us/"><?php echo $button_text; ?></a>
          </div>
        <?php endwhile; // end of the loop. ?>

	</div><!-- .main-content -->

</div><!-- #primary -->

<?php get_footer(); ?>
