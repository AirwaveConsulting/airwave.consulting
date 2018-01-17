<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the PAGE.PHP file

get_header();
?>

<!-- SECTION.CONTENT comes immediately before this -->

<section class="content_header">

    <h1><?php single_post_title(); ?></h1>
    <h2><?php the_field('featured_image_subtitle'); ?></h2>
   
</section>

<section class="content_two">
    <div class="inner">
        <div class="floaty">

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
        </div>
    <?php echo do_shortcode('[wpforms id="183" title="false" description="false"]'); ?>
    </div>
    </section>

<!-- SECTION.CONTENT ends immediately after this -->

<?php get_footer(); ?>